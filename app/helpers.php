<?php

function handleRequest(){
    try{
        
        $handler = Router::getRoute();

        if(is_array($handler)){
            [$controller, $handler] = $handler;
            sendResponse((new $controller)->$handler());
        }
        sendResponse($handler());
    }
    catch(Exception $e){
        sendResponse(['message' => $e->getMessage(), 'error' => true]);
    }
}

function sendResponse($data){
    echo json_encode($data);
    exit;
}

function requestData(){
    return file_get_contents('php://input');;
}
