<?php

    namespace jwt;
    use encrypt\Encryption;

    class JwtCreator extends Encryption{
    
        public function __construct(){}

        public function JwtEncode(){
            $chaine = "Bonjour";
            return $this->Encrypt($chaine);
        }

    }

?>