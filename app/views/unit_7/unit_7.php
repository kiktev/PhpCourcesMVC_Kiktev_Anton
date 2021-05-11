<section class="section">

	<h3 class="h3">Завантаження зображень в папку Upload</h3>

	<form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">

		<input class="input" type="hidden" name="action" value="task_base"/>	  
		<input class="file" name="loadFile" type="file" ></input><br><br>
		<button type="submit">Виконати</button><br><br>
	</form>
	
	<h3 class="h3">Зображення, які знаходяться в папці Upload:</h3>
	
	<?php if(isset($_POST['action']) && $_POST['action'] == "task_base"){echo $this->get('unit_7_task_base');} ?>

</section>

<section class="section">

	<h3 class="h3">Задача 1. Скопіюйте у директорію upload проекту більше файлів так щоб 
	були файли за різні дати. Модифікуйте скрипт так, щоб він перевіряв чи існує, і якщо ні, 
	то створював каталог backup. Допишіть код, який буде усі файли, створені раніше ніж 3 дні 
	назад переміщвати у папку backup.</h3>

	<form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		<input class="input" type="hidden" name="action" value="task_1"/>	  
		<button type="submit">Виконати</button><br><br>
		<p class="result"><?php if(isset($_POST['action']) && $_POST['action'] == "task_1"){echo $this->get('unit_7_task_1');} ?>
	</form>

</section>

<section class="section">

	<h3 class="h3">Задача 2. Напишіть блок коду, який видалить у папці upload всі файли 
	з розширенням ".txt", які містять в середині слово "тест".</h3>

	<form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		<input class="input" type="hidden" name="action" value="task_2"/>	  
		<button type="submit">Виконати</button><br><br>
		<p class="result"><?php if(isset($_POST['action']) && $_POST['action'] == "task_2"){echo $this->get('unit_7_task_2');} ?>
	</form>

</section>

	<h3 class="h3">Задача 3.  Напишіть скрипт, який зчитає текстовий файл source.txt 
	та створить і запише файл dest.txt У новому файлі усі слова (розділені пробілами та 
	переносами рядків) повинні бути записані із заду на перед..</h3>

	<form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		<input class="input" type="hidden" name="action" value="task_3"/>	  
		<button type="submit">Виконати</button><br><br>
		<p class="result"><?php if(isset($_POST['action']) && $_POST['action'] == "task_3"){echo $this->get('unit_7_task_3');} ?>
	</form>

</section>