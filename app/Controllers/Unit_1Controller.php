<?php
namespace Controllers;

use Core\Controller;

/**
 * Class IndexController
 */
class Unit_1Controller extends Controller
{

    /**
     *
     */
    public function unit_1Action()
    {
        $this->set("title", "Unit_1");
        
		$this->task_1();
		$this->task_2();
		$this->task_3();
		$this->renderLayout();
    }
	
	public function task_1()
	{
		$i = 10;   
		$j = $i *= 10 + 5 * 2;  
		$this->set('unit_1_task_1', $j);
	}
	
	public function task_2()
	{
		$i = 2;
		$j = 3;
		if ($i > 3 || $i + $j > 4 && $j > 2) {
			$this->set('unit_1_task_2', "TRUE");
			//echo "TRUE";
		} else {
			//echo "FALSE";
			$this->set('unit_1_task_2', "FALSE");
		}
	}
	
	public function task_3()
	{
		$d = getdate();
		$h = $d['hours'];
		if ($d >= 11 || $d <3) {
			$this->set('unit_1_task_3', "Привіт, світ!");		
		} else {
			$this->set('unit_1_task_3', "Добрий ранок, світ!");
		}
	}
	

}