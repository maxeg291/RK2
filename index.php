<html>
 <head>
  <meta charset='utf-8'>
 </head>
 <body>
  <h1> Сацков Максим ИУ4-11 вариант 7 </h1>
  <h3> Задача 1 </h3>
  <?php
   for ($i=1,$i<11,$i++)
	for ($j=1,$j<11,$j++)
	 echo $i*$j."<br/">;
  ?>
  <h3> Задача 2 </h3>
   <form action="" method='POST'>
	<p> Введите число <input type='text' name='number'></p>
	<p> Выберите операцию: </p>
	<p> Возведение в квадрат <input type='checkbox' name='square'></p>
	<p> Возведение в куб <input type='checkbox' name='cube'></p>
	<p> Извлечение корня <input type='checkbox' name='sqrt'></p>
   <input type='submit' value='Рассчитать'>
 </body>
</html>

<?php
 $number=$_POST['number'];
 if (isset $_POST['square']){
  echo $number^2."<br/>";}
 if (isset $_POST['cube']){
  echo $number^3."<br/>";}
 if (isset $_POST['sqrt']){
  echo $number^(1/2)."<br/>";}
?>
