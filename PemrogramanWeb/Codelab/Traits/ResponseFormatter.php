<?php

namespace Traits;

//Disimulasikan ini train untuk formatter json response
trait responseFormatter{
    public function responseFormatter($code, $message, $data = null){
        return json_encode([
            "code" => $code,
            "message" => $message,
            "data" => $data,
        ]);
    }
}