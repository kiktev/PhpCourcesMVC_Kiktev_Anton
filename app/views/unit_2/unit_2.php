<section class="section">

	<h3 class="h3">Задача 1. Напишіть скрипт, який використовує HTML-форму для введення емейла користувача та буде перевіряти правильність за допомогою функції preg_match:<br>
	Емейл повинен містити символ "@" та хоча б одну крапку після собачки. Домен повинен мати 2-4 букви. <br> Емейл повинен містити лише ,англійські букви, цифри та символи ".", "-", "_".</h3> 

	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		<input type="hidden" name="action" value="task_1"/>
		<input class="input" type="text" name="email" placeholder="Введіть email"><br>
		<button type="sabmit">Перевірити email</button>
		<p class="result">Результат: <?php if(isset($_POST['action']) && $_POST['action'] == "task_1"){echo $this->get('unit_2_task_1');} ?></p>
	</form>

</section>

<section class="section">

	<h3 class="h3">Задача 2. Напишіть скрипт, який використовує HTML-форму для введення прізвища імені та по-батькові користувача та виконує наступну перевірку. <br> Прізвище ім'я та по-батькові повинно складатися з українських букв та символа "-".</h3> 

	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		<input type="hidden" name="action" value="task_2"/>
		<input class="input" type="text" name="secondname" placeholder="Прізвище"><br>
		<input class="input" type="text" name="firstname" placeholder="Ім'я"><br>
		<input class="input" type="text" name="thirdname" placeholder="По-батькові"><br>
		<button type="sabmit">Перевірити</button>
		<p class="result">Результат: <?php if(isset($_POST['action']) && $_POST['action'] == "task_2"){echo $this->get('unit_2_task_2');} ?></p>
	</form>

</section>

<section class="section">

	<h3 class="h3">Задача 3. Напишіть скрипт, який виконає заміну
	 у введеному тексті за допомогою preg_replace: <br>Вважаємо, що
	 у вхідному тексті немає ссилок ( тобто html-коду &lt href="..."&gt...&lt/a&gt). 
	 Потрібно замінити кожен url вигляду <br> http://domain.com/path на відповідне посилання. 
	 (може починатися https://... ftp://...)</h3>
 
	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		<input type="hidden" name="action" value="task_3"/>
		<input class="input" type="text" name="url" placeholder="url"><br>
		<button type="sabmit">Змінити</button>
		<p class="result">Результат: <?php if(isset($_POST['action']) && $_POST['action'] == "task_3"){echo $this->get('unit_2_task_3');} ?></p>
	</form>
	
</section>