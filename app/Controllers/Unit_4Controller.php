<?php
namespace Controllers;

use Core\Controller;

/**
 * Class IndexController
 */
 
define("M",10); // константа для 2-гого завдання.
define("N",8); // константа для 2-гого завдання.

class Unit_4Controller extends Controller
{

    /**
     *
     */
    public function unit_4Action()
    {	
        $this->set("title", "Unit_4");
		
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
				
				case 'task_4':
				$this->task_4();
				break;
				
			}
		}
		
		$this->renderLayout();
    }
	
	
	public function task_1()
	{
		if (!empty($_POST['name'])) {
			
			$str = explode(',', $_POST['name']);
			
			foreach($str as &$trim)
			{
				$trim = trim($trim);
			}
			
			sort($str);
			$result = "";
			
			foreach ($str as $value) {
				$result .= "$value, ";
			}
			
			$this->set('unit_4_task_1', $result);
			
		}else{
			$this->set('unit_4_task_1', "Введіть імена");
		}
	}
	
	public function task_2()
	{
		$array = [];
		$arr = [];
		$m = M;
		$n = N;
		
		
		for ($i=0;$i<=$n;$i++) {
			
			for ($a=0;$a<=$m;$a++) {
				
				array_push($arr, mt_rand());
				
			}
			
			array_push($array, $arr);
			$arr = [];
		}
			
		$this->set('unit_4_task_2', $array);
		
		}
	
	public function task_3()
	{
		
	}
	
	public function task_4()
	{
		$arr = [[]];
		$resarr = [];
		$index = [];
		$n=0;
		if (!empty($_POST['text'])) {
	
			$array = explode(' ',trim($_POST['text']));
			$i=0;
			
			foreach ($array as $var) {
				
				if (strlen(implode(' ',$arr[$i]))<=40 - (count($arr[$i])*2)) {
					array_push($arr[$i],$var);
					
				}else{
					$i++;
					$arr[] =  [$i];
					array_push($arr[$i],$var);
				}		
			}
			
			foreach($arr as $str) {
				
				if ($n>0) {
					array_shift($arr[$n]);
				}
				
				array_push($index, implode(' ', $arr[$n]));
				$n++;
			}
			
			$result = "";
			
			foreach ($index as $val) {
				$result .= $val . "\n";
			}
			
			$this->set('unit_4_task_4', $result);
		}else{
			$this->set('unit_4_task_4', "Введіть текст");
		}
	}
		
}