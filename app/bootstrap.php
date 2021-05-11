<?php 
error_reporting(E_ALL); // повідомлювати про всі помилки
session_start();
require ROOT . '/app/Autoloader.php';
require ROOT . '/app/etc/config.php'; // файл конфігурації
Autoloader::register();
\Core\App::run();