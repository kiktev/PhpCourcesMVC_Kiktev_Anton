<?php
namespace Controllers;

use Core\Controller;

/**
 * Class IndexController
 */
 


class Unit_6Controller extends Controller
{

    /**
     *
     */
    public function unit_6Action()
    {
        $this->set("title", "Unit_6");
		
		$this->renderLayout();
    }
	
}