<?php
namespace Controllers;

use Core\Controller;

/**
 * Class IndexController
 */
class Unit_3Controller extends Controller
{

    /**
     *
     */
    public function unit_3Action()
    {
        $this->set("title", "Unit_3");
		
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
		if (!empty($_POST['volume']) && !empty($_POST['year']) && !empty($_POST['price'])) {
			
			
			if ($_POST['Type']=="Бензин") {
				$type = 50;
			}
			
			if ($_POST['Type']=="Дизель") {
				$type = 75;
			}
			
			if ($_POST['year']>1970) {
					$year = $_POST['year'];
					$price = $_POST['price'];
					$volume = $_POST['volume'];
					$nowyear = date('Y');
					
					$kvolume = $volume / 1000;
					$kyear = $nowyear - $year;
					
					$result = $type*$kvolume*$kyear;
					$fullprice = $result + $price;
					$echo =  "Акциза:  $result , загальна вартість: $fullprice";
					$this->set('unit_3_task_1', $echo);
					
			}else{
				$this->set('unit_3_task_1', "Введіть коректні дані");
			}
			
		}else{
			$this->set('unit_3_task_1', "Заповніть всі поля");
		}
	}
	
	public function task_2()
	{
		$a = 1996;
		$result = "";
		
		for ($i=0;;$i++) {
			$a = $a+ 4;
			$result .= "$a, ";
			$this->set('unit_3_task_2', $result);
			
		if ($a==2100) {
			break;
		}
	}
	}
	
	public function task_3()
	{
		if (!empty($_POST['height'])) {
			
			$height  = $_POST['height'];
			
			if ($height>=1 && $height <=15) {
				$a=0;
				$b=$height;
				$result = "";
				$c=$b-1;
				$string = '';
				
				while ($a<$b) {
					
					$string = str_repeat("#", $c);
					$result .= "<span style='color:white'>$string</span>";
					
					for($i=0;$i<=$a;$i++){	
						$result .= "#";
					}
					$a++;
					$c--;
					$result .= "<br>";
				}
				
				$this->set('unit_3_task_3', $result);
				
			}else{
				$this->set('unit_3_task_3', "Цифра не співпадає з діапазоном");
			}
		}else{
			$this->set('unit_3_task_3', "Введіть цифру");
		}
	}
	
	public function task_4()
	{
		if (!empty($_POST['vars'])) {
			
			$vars = $_POST['vars'];
			
			$result = "";
			
			$array = explode(",",$vars);
				
			foreach($array as $val){
				if($val >=1 && $val<=100){
					for($i=0;$i<=$val;$i++){			
					$result .=  '<span style="background:red">&nbsp;</span>';
				}
					$result .=  $val;
					$result .=  "<br>";
				}else{
					$result .=  "Перевірте правильність вводу";
					$result .=  "<br>";
				}
				
			}
				
			$this->set('unit_3_task_4', $result);
			
		}else{
			$this->set('unit_3_task_4', "Введіть цифру");
		}
	}
	
	
	
}