<section class="section">

	<h3 class="h3">Задача 1. Напишіть скрипт, який використовує HTML-форму з 
	випадаючим списком "бензин/дизель" та трьома полями для введення об’єму двигуна (куб. см), 
	рік випуску автомобіля (можна вводити з 1970р. по поточний рік), вартість автомобіля.
	Скрипт повинен перевірити коректність введених даних, обчислити суму акцизу та вартість 
	автомобіля із урахуванням акцизу та вивести результат.</h3> 

	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		<input class="input" type="hidden" name="action" value="task_1"/>
		<input class="input" type="text" name="volume" placeholder="Об'єм двигуна"><br><br>
		<input class="input" type="text" name="year" placeholder="Рік автомобіля"><br><br>
		<input class="input" type="text" name="price" placeholder="Вартість автомобіля"><br><br>
		<select class="input" name="Type" >
		  <option value="Бензин">Бензин</option>
		  <option value="Дизель">Дизель</option>      
		</select>
		<button type="sabmit">Обчислити</button>
		<p class="result">Результат: <?php if(isset($_POST['action']) && $_POST['action'] == "task_1"){echo $this->get('unit_3_task_1');} ?></p>
	</form>
	
</section>

<section  class="section">

	<h3 class="h3">Задача 2. Напишіть скрипт, який виведе роки в проміжку 3 2000 по 2100, 
	в які проводиться ЧС з футболу.</h3> 

	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		<input class="input" type="hidden" name="action" value="task_2"/> 
		<button type="sabmit">Виконати</button>
		<p class="result">Результат: <?php if(isset($_POST['action']) && $_POST['action'] == "task_2"){echo $this->get('unit_3_task_2');} ?></p>
	</form>

</section>

<section  class="section">

	<h3 class="h3">Задача 3. Напишіть скрипт, який виведе піраміду "Маріо" наступного вигляду: <br> 
	Через html-форму треба передати висоту піраміди, яка має бути від 1 до 15. В іншому випадку 
	видавати повідомлення, що задана неправильна висота.</h3> 

	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		<input class="input" type="hidden" name="action" value="task_3"/> 
		<input class="input" type="text" name="height" placeholder="Діапазон чисел від 1 до 15"><br><br>
		<button type="sabmit">Виконати</button> <p class="result">Результат: </p>
	</form>
	
	<div  class="div"  style="text-align:right;"> <?php if(isset($_POST['action']) && $_POST['action'] == "task_3"){echo $this->get('unit_3_task_3');} ?></div>
	
</section>

<section  class="section">

	<h3 class="h3">Задача 4. Напишіть скрипт, який виведе наступну діаграму: <br> 
	Через html-форму треба передати рядок цілих додатніх чисел від 1 до 100 розділених комою. 
	Можна cпочатку перевірити валідність рядка. Видати повідомлення про помилку, якщо буде введено 
	щось інше, або числа невідповідного діапазону.</h3> 

	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		<input class="input" type="hidden" name="action" value="task_4"/> 
		<input style="width:30%;" class="input" type="text" name="vars" placeholder="числа від 1 до 100 розділені комою"><br><br>
		<button type="sabmit">Виконати</button> <p class="result">Результат: </p>
	</form>
	<div  class="div" style="background: white;"> <?php if(isset($_POST['action']) && $_POST['action'] == "task_4"){echo $this->get('unit_3_task_4');} ?></div>
	
</section>