<?php

    namespace encrypt;
    use core\EncryptionInterface;
    use config\Configuration;

    class Encryption implements EncryptionInterface{
        protected static $config;
        protected static $key;
        
        public function __construct(){
            self::$config = new Configuration();
            self::$key = self::$config::$key;
        }

        public function Encrypt($data){
            $encryKey = base64_decode(self::$key);
            $div = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
            $encr = openssl_encrypt($data, 'aes-256-cbc', $encryKey, 0, $div);
            return base64_encode($encr.'::'.$div);
        }

        public function Decrypt(){
            echo "DECRYPTE METHOD";
        }

    }

?>