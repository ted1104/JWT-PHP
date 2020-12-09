<?php 
        require_once "../../autoload.php";
        use jwt\JwtCreator;
        
        $encry = new JwtCreator();
        $id = "1";

        // echo $encry->JwtEncode($id);

        $token= "anhDRzIvbEhNVU9UbTQ0SUhEeERpZz09OjpXoAxP3LaHZQdbQ/+ZxbyL";
        echo $encry->JwtDecode($token);
    

?>