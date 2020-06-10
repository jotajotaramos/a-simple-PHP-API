<?php

namespace SimpleAPI;

class MyController{

    private $someVariable;

    public function __construct($someInvomingVariable){

        $this->someVariable = $someInvomingVariable;
        
    }

    public function getVersion(){

        return [

            "title" => "Just another simple PHP API",
            "version" => "0.1",
            "incoming_parameter_dotenv_value" => $this->someVariable
    
        ];

    }

}