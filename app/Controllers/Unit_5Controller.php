<?php
namespace Controllers;

use Core\Controller;

/**
 * Class IndexController
 */
 


class Unit_5Controller extends Controller
{

    /**
     *
     */
	public $productsData = "Unit_5_Data/data.php";
	 
    public function unit_5Action()
    {
        $this->set("title", "Unit_5");
		
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
				
				case 'task_5':
				$this->task_5();
				break;
			}
		}
		
		$this->renderLayout();
    }
	
	
	public function task_1()
	{
		$abc = ['а', 'б', 'в', 'г', 'ґ', 'д',
		'е', 'є', 'ж', 'з', 'и', 'і', 'ї', 'й',
		'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с',
		'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ',
		'ь', 'ю', 'я'];
		
		function sortname($arg1,$arg2)
		{
			$result = [];
			$mass = [];
			
			foreach ($arg2 as $trim) {
				$mass[] = trim($trim);
			}
			
			foreach ($arg1 as $value1) {
				foreach($mass as $value2){
					$firstbyte = mb_strtolower(mb_substr($value2,0,1));
					if($value1 == $firstbyte){
						$result[] =  $value2;
					}
				}
			}
			return $result;
		}

		if (!empty($_POST['name'])) {
			
			$string = $_POST['name'];
			$array = preg_split('/,/', $string);
			$result = sortname($abc ,$array);
			$i = 0;
			$ilen = count( $array );
			$finish = "";
			
			foreach($result as $var){
				if( ++$i == $ilen ){
					$finish .= "$var. ";
				}else
				$finish .= "$var, ";
			}
			$this->set('unit_5_task_1', $finish);
		}else{
			$this->set('unit_5_task_1', "Поле пусте");
		}
	}
	
	public function task_2()
	{	
		if (!empty($_POST['Type'])) {
			
			require_once $this->productsData;
			
			usort($products, function($a, $b){
				return $a['price'] <=> $b['price'];
			});
			$this->set('unit_5_task_2', $products);
			
			if ($_POST['Type'] == 'Down') {
				$products = array_reverse($products);
				$this->set('unit_5_task_2', $products);
			}
			
			if ($_POST['Type'] == 'discountUp') {
				foreach($products as $key => $var){
				$products[$key]['withdiscount'] = $var['price'] -  ($var['price'] * $var['discount']/100);
				}
				
				usort($products, function($a, $b){
					return $a['withdiscount'] <=> $b['withdiscount'];		
				});
				$this->set('unit_5_task_2', $products);
			}
			
			if ($_POST['Type'] == 'discountDown') {
				
				foreach($products as $key => $var){
					$products[$key]['withdiscount'] = $var['price'] -  ($var['price'] * $var['discount']/100);
				}
				
				usort($products, function($a, $b){
					return $a['withdiscount'] <=> $b['withdiscount'];		
				});
				
				$products = array_reverse($products);
				$this->set('unit_5_task_2', $products);
				
			}
		}else{
			$this->set('unit_5_task_2', 'Помилка');
		}
		
		
	}
	
	public function task_3()
	{
		if (!empty($_POST['name'])) {	
			$result = "";
			$floatval = preg_split('/ /', trim($_POST['name']));
			$floatval = array_filter($floatval);		
			$result .= "Сума чисел: ".array_sum($floatval).";<br>";
			$count = 0;
			$mass = [];
			
			foreach ($floatval as $val) {
				if($val % 2 == 0)
				{
					$count++;
				}else{
					$mass[] = $val;
				}
			}
			
			if (count($floatval)) {
				$average = array_sum($floatval)/count($floatval);
			}
			
			$result .= "Парні числа: " . $count.";<br>";
			$result .= "Непарні числа: " . implode(' ',$mass).";<br> ";
			$result .= "Середнє значення: " . $average .".";
			$this->set('unit_5_task_3', $result);
		}else{		
			$this->set('unit_5_task_3', "Поле пусте");
		}
	}
	
	public function task_4()
	{
		$a = 0;
		$result = "";
		$n1 = 1;
		$n2 = 1;
		while($a<=20){
			$nn = $n1 + $n2;
			$n1 = $n2;
			$n2 = $nn;
			$result .= $nn . "<br>";
			$a++;
		}
		$this->set('unit_5_task_4', $result);
	}
	
	public function task_5()
	{
		
	}
		
}