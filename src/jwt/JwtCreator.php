<?php

    namespace jwt;
    use encrypt\Encryption;

    class JwtCreator extends Encryption{
    
        public function __construct(){
    
        }

        public function JwtEncode(){
            return $this->Encrypt();
        }

        // public function Encrypt(){
        //     echo "ENCRYPTE METHOD ".self::$key;
        // }

        // public function Decrypt(){
        //     echo "DECRYPTE METHOD";
        // }

    }

?>