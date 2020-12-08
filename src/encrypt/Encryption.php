<?php

    namespace encrypt;
    use core\EncryptionInterface;
    use config\Configuration;

    class Encryption implements EncryptionInterface{
        protected static $config;
        protected static $key;
        
        public function __construct(){
            self::$config = new Configuration();
            // self::$key = self::$config::$key;
        }

        public function Encrypt(){
            echo "ENCRYPTE METHOD";
        }

        public function Decrypt(){
            echo "DECRYPTE METHOD";
        }

    }

?>