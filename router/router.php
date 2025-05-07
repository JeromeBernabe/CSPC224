<?php
    //takes the current directory of the project and the request from the server(url input)
    $uri = parse_url($_SERVER["REQUEST_URI"])["path"];
    //since the current request is CSPC224/ i spliced or made a subset of the string starting from the last 
    
    $uri = substr($uri,8,strlen($uri));
    $routes = [
        "/" =>  "controllers/home.php",
        "/about" => "views/pages/about.view.php",
        "/contact" => "views/pages/contact.view.php",
        "/404" => "views/pages/404.view.php"
    ];
    
    if(array_key_exists($uri, $routes)){
        echo $routes[$uri];
        require $routes[$uri];
    }
    
    else{
        require $routes["/404"];
    }
?>