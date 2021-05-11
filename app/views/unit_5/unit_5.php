<section class="section">

	<h3 class="h3">Задача 1. Зробіть задачу 1 попереднього розділу з використанням функції:
	Через форму передайте список імен, розділених комами, заберіть зайві пробіли відсортуйте 
	імена за алфавітом, та виведіть відсортований список через кому та 1 пробіл. Використайте 
	власну функцію для коректного сортування українських букв і,ї,є</h3> 

	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		<input class="input" type="hidden" name="action" value="task_1"/>
		<input class="input" type="text" name="name" placeholder="Імена"><br><br>
		<button type="sabmit">Вивести</button>
		<p class="result">Результат: <?php if(isset($_POST['action']) && $_POST['action'] == "task_1"){echo $this->get('unit_5_task_1');} ?></p>
	</form>
	
</section>

<section class="section">

	<h3 class="h3">Задача 2. Потрібно додати сортування за ціною по зростанню та спаданню. 
	Використайте usort або uasort та власну функцію для порівняння елементів</h3> 

	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		<input class="input" type="hidden" name="action" value="task_2"/>
		<select class="input" name="Type" >
			<option value="Up">Від дешевших до дорожчих</option>
			<option value="Down">Від дорожчих до дешевших</option>
			<option value="discountUp">Від дешевших до дорожчих з урахуванням знижки</option>
			<option value="discountDown">Від дорожчих до дешевших з урахуванням знижки</option>		
		</select>
		<button type="sabmit">Виконати</button>
	</form>
	
	<?php
		if (isset($_POST['action']) && $_POST['action'] == "task_2") {
			$products = $this->get('unit_5_task_2');
			
			
		foreach($products as $product) :
		
	?>
    <div class="product">
        <p class="sku">Код: <?php echo $product['sku']?></p>
        <h4><?php echo $product['name']?><h4>
        <p> Ціна: <span class="price"><?php echo $product['price']?></span> грн</p>
		<p> Знижка: <span class="price"><?php echo $product['discount']?></span> %</p>
		<?php if (isset($product['withdiscount'])) { ?>
		<p> Ціна з урахуванням знижки: <span class="price"><?php echo $product['withdiscount']?></span> грн</p>
		<?php } ?>
        <p><?php if(!$product['qty'] > 0) { echo 'Нема в наявності'; } ?></p>
    </div>
	<?php endforeach; }?>
	
</section>

<section class="section">

	<h3 class="h3">Задача 3. Через форму передайте список цілих чисел. 
	Виведіть наступні результати:<br>
	1) Суму цих чисел;<br>
	2) Середнє значення (float);<br>
	3) Кількість парних чисел;<br>
	4) Всі непарні числа;<br></h3> 

	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		<input class="input" type="hidden" name="action" value="task_3"/>
		<input class="input" type="text" name="name" placeholder="числа через пробіл"><br><br>
		<button type="sabmit">Вивести</button>
		<p class="result"><?php if(isset($_POST['action']) && $_POST['action'] == "task_3"){echo $this->get('unit_5_task_3');} ?></p>
	</form>
	
</section>

<section class="section">

	<h3 class="h3">Задача 4. Виведіть перших 20 чисел Фібоначі.</h3> 

	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		<input class="input" type="hidden" name="action" value="task_4"/>

		<button type="sabmit">Вивести</button>
		<p class="result"><?php if(isset($_POST['action']) && $_POST['action'] == "task_4"){echo $this->get('unit_5_task_4');} ?></p>
	</form>
	
</section>

<section class="section">

	<h3 class="h3">Задача 5. Для товарів Задачі 2 додати поле discount (знижка) та поправити 
	виведдення ціни та сортування по ній із урахуванням знижки.</h3>

	<h3 class="h3">Виконано в Задачі 2</h3>

</section>