<?php
    //takes the current directory of the project and the request from the server(url input)
    $uri = parse_url($_SERVER["REQUEST_URI"])["path"];
    //since the current request is CSPC224/ i spliced or made a subset of the string starting from the last 
    $uri = substr($uri,-1,1);
    
    $routes = [
        "/" =>  "controllers/home.php"
    ];
    
    if(array_key_exists($uri, $routes)){
        require $routes[$uri];
    }
?>