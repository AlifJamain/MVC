<?php

class HomesController
{

    public function index()
    {
        session_start();
        require_once('views/home/index.php');
    }
}
