<?php
  require_once "10.regions.php";
  $regions = getRegions();
  require_once "10.years.php";
  $years = getYears();

?>
<!DOCTYPE HTML PUBLIC
                 "-//W3C//DTD HTML 4.01 Transitional//EN"
                 "http://www.w3.org/TR/html401/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <title>Wines</title>
</head>
<body>
<form action="10.results.php" method="GET">
<br>Enter a wine name :
    <input type="text" name="WineName">
<br>
<br>Enter a winery name :
    <input type="text" name="WineryName">
<br>

Region: 
<select name="regionName">
<?php foreach ($regions as $id => $name): ?>
   <option value="<?php echo $id; ?>"><?php echo $name; ?></option> 
<?php endforeach; ?>
</select>
<br>
<br>

Grape Variety: 
<select name="GrapeVariety">
<?php foreach ($regions as $id => $name): ?>
   <option value="<?php echo $id; ?>"><?php echo $name; ?></option> 
<?php endforeach; ?>
</select>
<br>
<br>

Range in Years: 

<br> Lower bound:
<select name="Years">
<?php foreach ($years as $id => $year): ?>
   <option value="<?php echo $id; ?>"><?php echo $year; ?></option> 
<?php endforeach; ?>
</select>
<br> Upper bound:
<select name="Years">
<?php foreach ($years as $id => $year): ?>
   <option value="<?php echo $id; ?>"><?php echo $year; ?></option> 
<?php endforeach; ?>
</select>
<br>

<input type="submit" name="submit" value="Show Wines">
</form>
</body>
</html>
