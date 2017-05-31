<?php

class NoticiasController
{    
    public function Index()
    {
        require_once 'view/Header.php';
        require_once 'view/noticias/Noticias.php';
        require_once 'view/Footer.php';
    }
}