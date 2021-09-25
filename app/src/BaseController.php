<?php
class BaseController {
    
    public function listRoutes(){
        sendResponse(Router::getAvailableRoutes());
    }

    public function default(){
        sendResponse(["error" => false, "default route"]);
    }

}

