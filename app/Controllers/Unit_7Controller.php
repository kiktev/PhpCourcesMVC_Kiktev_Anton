<?php
namespace Controllers;

use Core\Controller;

/**
 * Class IndexController
 */
 


class Unit_7Controller extends Controller
{

    /**
     *
     */
	public $uploadDir = "Unit_7_Data/upload";
	public $backupDir = "Unit_7_Data/backup";
	public $dest = 'Unit_7_Data/dest.txt';
	public $source = 'Unit_7_Data/source.txt';
	 
    public function unit_7Action()
    {
        $this->set("title", "Unit_7");
		
		if (!empty($_POST)) {
			
			$formAction = $_POST['action'];
			
			switch ($formAction) {
				
				case 'task_base':
				$this->uploadFile();
				$this->renderImage();
				break;
				
				case 'task_1':
				$this->toBackup();
				break;
				
				case 'task_2':
				$this->deleteFile();
				break;
				
				case 'task_3':
				$this->readAndWrite();
				break;
				
			}
		}
		
		$this->renderLayout();
		
    }
	
	public function uploadFile() {

		if (file_exists($this->uploadDir) != true) { //перевірка існування каталогу 
			mkdir($this->uploadDir);
		}
		
		if (isset($_FILES['loadFile'])) { //перевірка існування інформації про файл
			
			$fileName = $_FILES['loadFile']['name'];
			$filePath = $_FILES['loadFile']['tmp_name'];
			$uploadfile = $this->uploadDir . '/' . basename($fileName);
			
			if (move_uploaded_file($filePath , $uploadfile)) {
				//echo "Файл завантажено.\n";
			} else {
				//echo "Помилка!.\n";
			}
		}
	}

	public function renderImage() {
		
		$uploadFiles = scandir($this->uploadDir);
		$result = "";
		foreach ($uploadFiles as $fileName) { 
			
			$fullName = $this->uploadDir .'/'. $fileName;
			if($fileName !== "." && $fileName !== ".." && @getimagesize($fullName) > 0){ // якщо це не директорія і якщо це зображення.
				$result .= '<img style="margin-left:2%; margin-top:2%;" " src="/'. $fullName .'">';
			}else{
				//echo "Помилка!.\n";
			}
		}
		$this->set('unit_7_task_base', $result);
	}
	
	public function toBackup(){ //Задача 1.
			
			$uploadFiles = scandir($this->uploadDir);
			
			if (file_exists($this->backupDir) != true) { //перевірка існування каталогу 
				mkdir($this->backupDir);
			}
			
			$result = "Початок <br>";
			
			foreach ($uploadFiles as $fileName) {
				$fullName = $this->uploadDir .'/'. $fileName;
				if ($fileName !== ".." && $fileName != "..") {
					$createDate = filectime($fullName);
					$nowDate = time();
					$mins = ($nowDate - $createDate );	
					if ($mins > 86400*3) {
						rename($this->uploadDir . '/' . $fileName, $this->backupDir . '/' . $fileName);
						$result .= "Файл $fileName переміщено <br>";
					}
				}
			}
			$result .= "Кінець";
			$this->set('unit_7_task_1', $result);
	}
	
	public function deleteFile() { //Задача 2. видалення текстових файлів, які містять слово 'тест'.

		$uploadFiles = scandir($this->uploadDir);
		$result = "Початок <br>";
		foreach($uploadFiles as $fileName){
			 $str = pathinfo($fileName, PATHINFO_EXTENSION); // отримання розширення файлу
			 if($str == 'txt'){
				 $inFile = file_get_contents($this->uploadDir . '/' . $fileName);
				 if($inFile == 'тест'){
					 unlink($this->uploadDir . '/' . $fileName);
					 $result .= "Файл $fileName видалено <br>";
				 }
			 }
		}
		$result .= "Кінець";
		$this->set('unit_7_task_2', $result);
	}
	public function readAndWrite(){ // Задача 3.
				 
		if (!file_exists($this->source)) {
			$fp = fopen($this->source, "w"); 
			fwrite($fp, "Привіт світ!");
			fclose($fp);
		}
		$fileContent = file_get_contents($this->source);

		$array = explode(' ', $fileContent);	
		$array = array_reverse($array);
		
		foreach($array as $val){
			$fileOpen = fopen($this->dest, 'a+');
			fwrite($fileOpen, $val.' '."\r\n");
			fclose($fileOpen);
		}
		
		$result = "Виконано";
		$this->set('unit_7_task_3', $result);
	}
}