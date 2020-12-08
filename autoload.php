<?php 
    spl_autoload_register(function ($className){
        require "src/".$className.".php";
    })

?>