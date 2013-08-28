<?php
  if ($_GET['submit'] != 'Show Wines') {
    header("Location: 10.html_form.php");
    exit;
  }

  require_once('10.wines.php');
  $regionName = $_GET['regionName'];
  $Years = $_GET['Years'];
  $wines = getWines($regionName,$Years);

?>
<!DOCTYPE HTML PUBLIC
            "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/html401/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <title>Exploring Wines in a Region</title>
</head>

<body bgcolor="white">
<?php
  if (isset($regionname) && $regionname != 'all') {
    echo "wines of {$regionname}<br/>\n";
  }
?>


<table>
  <tr>
    <th>Wine Name</th>
    <th>Grape Variety</th>
    <th>Year</th>
    <th>Winery</th>
    <th>Region</th>
    <th>Cost of Wines</th>
    <th>Total Avaiable Bottles</th>
    <th>Total Stock</th>
    <th>Total Sales</th>






  </tr>
<?php foreach($wines as $wine): ?>
  <tr>
    <td><?php echo $wine['wine_name']; ?></td>
    <td><?php echo $wine['variety']; ?></td>
    <td><?php echo $wine['year']; ?></td>
    <td><?php echo $wine['winery_name']; ?></td>
    <td><?php echo $wine['region_name']; ?></td>
    <td><?php echo $wine['icost']; ?></td>
    <td><?php echo $wine['on_hand']; ?></td>
    <td><?php echo $wine['']; ?></td>
    <td><?php echo $wine['']; ?></td>




</tr>
<?php endforeach; ?>
</table>
<?php echo count($wines); ?> records found matching your criteria
</body>
</html>
