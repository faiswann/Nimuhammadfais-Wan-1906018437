<!DOCTYPE html>
<html>
<head>
	<title> Assignment 3 </title>
</head>
<body>
	<tr>
		<td>Name Nimuhammadfais Wan</td>
		<td>Nim 1906018437</td>
	</tr>

</body>
</html>
<h1>Text Input</h1>

  <form action="welcome_get.php" method="get">
Name: <input type="text" name="name"><br>
Nim: <input type="text" name="Nim"><br>
<input type="submit">
</form>

</body>
</html>
<h1>Text Area</h1>
Comment: <textarea name="comment" rows="5" cols="40">I'm from Thailand And came to study in Indonesia It's just three months.<?php echo $comment;?></textarea>

</body>
</html>

<h1>Checkbox</h1>
	<tr>
		<td>Where did I come?</td>
		
	</tr>

<form action="/action_page.php">

  <input type="checkbox" id="vehicle1" name="vehicle1" value="Thai">

Checkbox:
<input type="radio" name="checkbox"
<?php if (isset($checkbox) && $checkbox=="Thai") echo "checked";?>
value="Thai">Thai
<input type="radio" name="checkbox"
<?php if (isset($checkbox) && $gender=="Malaysia") echo "checked";?>
value="Malaysia">Malaysia
<input type="radio" name="checkbox"
<?php if (isset($checkbox) && $gender=="Singapore") echo "checked";?>
value="Singapore">Singapore
<input type="submit" value="Submit">
</form>

</body>
</htm>

  <h1>Dropdowns</h1>
               
    <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown 
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
    <li><a href="#">link 1</a></li>
    <li><a href="#">link 2</a></li>
    <li><a href="#">link 3</a></li>
    </ul>
    </div>
    </div>
</body>
</html>


<html>
<head>

<title>Submit Button</title>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>

<body>
<div class="container">

<h1> Submit Button</h1>
 
 <input type="submit" class="btn btn-info" value="Submit Button-1">
 <input type="submit" class="btn btn-default" value="Submit Button-2">
 </div>

</body>
</html>

