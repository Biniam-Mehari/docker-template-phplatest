<?php
class SwitchRouter {
public function route($uri){
    switch ($uri) {
        case 'about':
           echo "Hello you";
            break;
        case 'login':
            require_once('LoginForm.html');
            $Controller = new LoginForm();
             break;
        
        default:
            echo "404 not found";
            break;
    }
}
}

