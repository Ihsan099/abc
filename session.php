<?php
session_start();
if ($_SESSION['email'] == false) {
    header('location: login.php');
}