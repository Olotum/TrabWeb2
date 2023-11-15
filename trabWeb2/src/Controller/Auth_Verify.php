<?php

namespace QI\trabWeb2\Controller;

session_start();
if(empty($_SESSION["user_data"])){
    header("location:../index.html");
    exit;
}