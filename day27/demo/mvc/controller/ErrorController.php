<?php
namespace MVC\Controller;
class ErrorController {
    public function redirect404() {
        include_once "mvc/view/Error/404.php";
    }
}