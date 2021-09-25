<?php

function handleRequest(){
    try{
        [$controller, $handler] = Router::getRoute();
        sendResponse((new $controller)->$handler());
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
