<?php

class Autoloader
{
	public static function register()
	{
		spl_autoload_register(function ($class){ // реєстрація функції для завантаження класів
			$file = ROOT . DS . 'app' . DS . str_replace('\\', DS, $class) . '.php'; // шлях до класів
			if (file_exists($file)){ // перевірка існування файлів
				require $file; // підключення файлу
				return true; 
			}
			return false; 
		});
	}
}