<?php 
        require_once "../../autoload.php";
        use jwt\JwtCreator;
        
        $encry = new JwtCreator();

        echo $encry->JwtEncode();
    

?>