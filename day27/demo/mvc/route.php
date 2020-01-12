<?php
namespace MVC;
class Route {
    public function run() {
        $controller = (isset($_REQUEST["controller"]) && $_REQUEST["controller"]) ? $_REQUEST["controller"] : "index";
        $action = (isset($_REQUEST["action"]) && $_REQUEST["action"]) ? $_REQUEST["action"] : "index";
        $controller= ucfirst($controller);
        $controllerClassName = "\\MVC\\Controller\\".$controller."Controller";
        $actionMethodName = $action."Action";
//        $controllerObject = new $controllerClassName();
//        $controllerObject->$actionMethodName();
        if (class_exists($controllerClassName)) {
            $controllerObject = new $controllerClassName();
            if(method_exists($controllerObject,$actionMethodName )) {
                $controllerObject->$actionMethodName();
            } else {
                $controllerClassName = "\\MVC\\Controller\\ErrorController";
                $controllerObject = new $controllerClassName();
                $controllerObject->redirect404();
            }
        } else {
            $controllerClassName = "\\MVC\\Controller\\ErrorController";
            $controllerObject = new $controllerClassName();
            $controllerObject->redirect404();
        }

//        $action=ucfirst($action);
//        if($controller=="Post"){
//            $controllerObject= new \MVC\Controller\PostController();
//            if ($action="index"){
//                $controllerObject->indexAction();
//            }elseif ($action="creat"){
//                $controllerObject->createAction();
//            }
//            elseif ($action="delete"){
//                $controllerObject->deleteAction();
//            }elseif ($action="edit"){
//                $controllerObject->editAction();
//            }
//
//        }elseif ($controller=="Product"){
//            $controllerObject= new \MVC\Controller\ProductController();
//            if ($action="index"){
//                $controllerObject->indexAction();
//            }elseif ($action="creat"){
//                $controllerObject->createAction();
//            }
//            elseif ($action="delete"){
//                $controllerObject->deleteAction();
//            }elseif ($action="edit"){
//                $controllerObject->editAction();
//            }
//        }


    }
}