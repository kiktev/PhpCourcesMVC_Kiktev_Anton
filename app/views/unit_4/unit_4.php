<section class="section">

	<h3 class="h3">Задача 1. Напишіть скрипт, який відсортує по алфавіту список імен<br>
	Через форму передайте список імен, розділених комами, заберіть зайві пробіли відсортуйте 
	імена за алфавітом, та виведіть відсортований список через кому та 1 пробіл</h3> 

	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		<input class="input" type="hidden" name="action" value="task_1"/>
		<input class="input" type="text" name="name" placeholder="Імена"><br><br>
		<button type="sabmit">Вивести</button>
		<p class="result">Результат: <?php if(isset($_POST['action']) && $_POST['action'] == "task_1"){echo $this->get('unit_4_task_1');} ?></p>
	</form>
	
</section>

<section class="section">
	<h3 class="h3">Задача 2. Задати двовимірний масив розмірністю m на n (MxN) елементів
	(m і n винести в область визначення констант), заповнити його випадковими значеннями 
	(функція rand()) і вивести їх на екран вже після того, як весь масив буде заповнений 
	(тобто заповнювати і виводити в різних групах циклів)</h3> 

	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		<input class="input" type="hidden" name="action" value="task_2"/>
		<button type="sabmit">Виконати</button>
		<p class="result">Результат: </p>
	</form>
	
	<div class="div"><?php if(isset($_POST['action']) && $_POST['action'] == "task_2"){echo '<pre>'; print_r( $this->get('unit_4_task_2')); echo '</pre>';} ?></div>
	
</section>

<section class="section">

	<h3 class="h3">Задача 3. Завантажте та змініть наступний проект. 
	Потрібно додати сортування за ціною по зростанню та спаданню.</h3> 
	<h3 class="h3">Дана задача виконана в Unit_5</h3>
	
</section>
<section class="section">

	<h3 class="h3">Задача 4.Додати переноси рядка в текст:<br>
	Потрібно розбити текст на рядки таким чином, щоб у рядку було не більше 40 символів. 
	Але слова розривати не можна, а треба переносити повністю.</h3> 

	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		<input class="input" type="hidden" name="action" value="task_4"/>
		<textarea style="font-size:14pt;" rows="10" cols="45" name="text"></textarea><br>
		<button type="sabmit">Виконати</button>
		<p class="result">Результат: </p>
		<textarea style="font-size:14pt;" rows="10" cols="45"><?php if(isset($_POST['action']) && $_POST['action'] == "task_4"){echo $this->get('unit_4_task_4');} ?></textarea>
	</form>

</section>