<?php
require_once 'debug-thursday5-functions.php';
function pageController()
{
    session_start();
    clearSession();
    redirect("debug-thursday5-login.php");
}

pageController();