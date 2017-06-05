<?php

class HomeController
{    
   
    
    public function Index()
    {
        require_once 'view/Header.php';
        require_once 'view/home/Home.php';
        require_once 'view/Footer.php';
        echo '<script>alert("Este programa es para fines educativos y no tiene ningún fin comercial")</script>';
    }
}