<?php

    namespace jwt;
    use encrypt\Encryption;

    class JwtCreator extends Encryption{
    
        public function __construct(){}

        public function JwtEncode($dataTokenEncrypt){
            return $this->Encrypt($dataTokenEncrypt);
        }

        public function JwtDecode($dataTokenToDecrypt){
            return $this->Decrypt($dataTokenToDecrypt);
        }

    }

?>