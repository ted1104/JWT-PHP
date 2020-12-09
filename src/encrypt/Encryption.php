<?php

    namespace encrypt;
    use core\EncryptionInterface;
    use config\Configuration;

    class Encryption implements EncryptionInterface{
        private static $config;
        private static $key;
        private static $encryKey;
        
        public function __construct(){
            self::$config = new Configuration();
            self::$key = self::$config::$key;
            self::$encryKey = base64_decode(self::$key);
        }

        public function Encrypt($data){
            $div = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
            $encr = openssl_encrypt($data, 'aes-256-cbc', self::$encryKey, 0, $div);
            return base64_encode($encr.'::'.$div);
        }

        public function Decrypt($data){
            list($encrypdata, $iv) = array_pad(explode('::', base64_decode($data),2),2,null);
            return openssl_decrypt($encrypdata,'aes-256-cbc', self::$encryKey, 0, $iv);
        }

    }

?>