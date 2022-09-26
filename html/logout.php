<?php
session_start();

unset($_SESSION['user_id']);
unset($_SESSION['role']);
unset($_SESSION['panier']);

header('Location: ' . $_SERVER['HTTP_REFERER']);