<?php
namespace Controllers;

use Core\Controller;

/**
 * Class IndexController
 */
class Unit_2Controller extends Controller
{

    /**
     *
     */
    public function unit_2Action()
    {
		
        $this->set("title", "Unit_2");
		
		if (!empty($_POST)) {
			
			$formAction = $_POST['action'];
			
			switch ($formAction) {
				
				case 'task_1':
				$this->task_1();
				break;
				
				case 'task_2':
				$this->task_2();
				break;
				
				case 'task_3':
				$this->task_3();
				break;
				
			}
		}
		
		$this->renderLayout();
    }
	
	
	public function task_1()
	{
		if (isset($_POST['email'])) {
			
			$email = trim($_POST['email']);
			$point = stristr($email, '@');
			$chr_en = "/^[a-zA-z0-9_\-.]+@[a-zA-z0-9\-.]+$/";
			
			if (strpos($email, '@') && strpos($point, '.') && preg_match($chr_en, $email)) {
				$this->set('unit_2_task_1', "email вірний (true)");
			}else{
				$this->set('unit_2_task_1', "email не вірний (false)");
			}
		}
	}
	
	public function task_2()
	{
		if (!empty($_POST['firstname']) && 
			!empty($_POST['secondname']) &&
			!empty($_POST['thirdname'])) {
				
			$array = [];
		
			$array['firstname'] = $_POST['firstname'];
			$array['secondname'] = $_POST['secondname'];
			$array['thirdname'] = $_POST['thirdname'];
			$rate = 0;
			
			$pattern = '/^[а-щьюяґєії\-]+$/iu';
			
			foreach ($array as $val) {
				
				if (preg_match($pattern, $val)) {
					
					$rate++;
				}
			}
			
			if ($rate==count($array)) {
				$this->set('unit_2_task_2', "Дані заповнено вірно");
			}else{
				$this->set('unit_2_task_2', "Дані заповнено не вірно");
			}
			
		}else{
			$this->set('unit_2_task_2', "Заповніть всі поля");
		}
	}
	
	public function task_3()
	{
		if (!empty($_POST['url'])) {
		
			$url = $_POST['url'];
			
			if (substr( $url, 0, 7 ) === "http://" || substr( $url, 0, 6 ) === "ftp://") {
				$replacement = "<a href=".$url.">Посилання</a>";
				$result = "";
				$url = preg_replace("#$url#", "$replacement", $url);
				$this->set('unit_2_task_3', $url);
			}else{
				$this->set('unit_2_task_3', "Невірний формат посилання");
			}
			
		}else{
		$this->set('unit_2_task_3', "Заповніть поля");
		}
	}
	
	
	
}