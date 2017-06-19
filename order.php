<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">

<title>Menu - Yay&#33;Koffee Website</title>

<link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

<div id="page">

<div>

<div id="header">

<a href="yaykoffee.html"><img src="images/logo.png" alt="Image"></a>

<ul>

<li class="current">

<a href="yaykoffee.html">Home</a>

</li>

<li>

<a href="menu.html">Menu</a>

</li>

<li>

<a href="#">Feedback</a>

</li>

<li>

<a href="#">Contact Us</a>

</li>

</ul>


</div>

<div id="body">

<div id="figure">

<img src="images/headline-menu.jpg" alt="Image">

<span>Coffee Menu</span>

</div>

<div>

<a href="menu.html" class="whatshot">What&#39;s Hot</a>

<div>

<form action="/yaykoffee/place_order.php">
Coffee:--------------
<select name="coffee" selected="<?php echo $coffee;?>">
<?php
$coffee=$_REQUEST['coffee'];
if("Grande Intenso" == $coffee)
{
?>
<option value="Grande Intenso" selected>Grande Intenso</option>
<?php
}else{
?>
<option value="Grande Intenso">Grande Intenso</option>
<?php
}
?>

<?php
if("Grande Intenso With Milk" == $coffee)
{
?>
<option value="Grande Intenso With Milk" selected>Grande Intenso With Milk</option>
<?php
}else{
?>
<option value="Grande Intenso With Milk">Grande Intenso With Milk</option>
<?php
}
?>

<?php
if("Cappuccino" == $coffee)
{
?>
<option value="Cappuccino" selected>Cappuccino</option>
<?php
}else{
?>
<option value="Cappuccino">Cappuccino</option>
<?php
}
?>

<?php
if("Chococino" == $coffee)
{
?>
<option value="Chococino" selected>Chococino</option>
<?php
}else{
?>
<option value="Chococino">Chococino</option>
<?php
}
?>

<?php
if("Mocha" == $coffee)
{
?>
<option value="Mocha" selected>Mocha</option>
<?php
}else{
?>
<option value="Mocha">Mocha</option>
<?php
}
?>

</select>
<p></p>
Sugar:---------------
<select name="sugar">
<option value="None">None</option> 
<option value="1 Spoon">1 Spoon</option>
<option value="2 Spoon">2 Spoon</option> 
</select>
<p></p>
Name:--------------
<input type="text" id="agent" name="agent" value="Please Enter Your Full Name Here..." size="40"/>
<p></p>
Desk Location:--
<input type="text" id="location" name="location" value="Please Enter Where Your Desk Is.." size="60"/>
<p></p>
<input type="submit" id="submit" name="submit" value="Place Order"/>
</form>
</div>
</div>

</div>

<div id="footer">

<div>

<a href="yaykoffee.html"><img src="images/logo2.png" alt="Image"></a>

<p class="footnote"></p>

</div>

<div class="section">

<ul>

<li>

<a href="yaykoffee.html">Home</a>

</li>

<li class="current">

<a href="menu.html">Menu</a>

</li>

<li>

<a href="#">Feedback</a>

</li>

<li>

<a href="#">Contact Us</a>

</li>

</ul>

<div id="connect">

</div>

<p>
This website has been designed by <a href="http://www.computerservicesdevon.co.uk/">Computer Services Devon</a>.
</p>
</div>

</div>

</div>

</div>

</body>

</html>