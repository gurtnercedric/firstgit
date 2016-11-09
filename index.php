<?php require_once("config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	
	<title><?php echo "$website_title" ?></title>
	<meta charset="<?php echo "$website_charset" ?>">
	<meta name="description" content="das ist nur ein test">
    <link href="global.css" rel="stylesheet">
	
<head>

<body>

	<?php
	
	$vorname = "Cédric";
	$nachname = "Gurtner";
	echo "$vorname" . " " . '$nachname';

	$doppelt = false;
	$einfach = true;
	$kollegen[] = "Jan";
	$kollegen[] = "Tim";
	$kollegen[] = "Mario";
	echo "<br>";
	
	foreach($kollegen as $nr => $kollege){
	echo "<br>Kollege $nr ist $kollege";
	}
	
	echo "<br><br><br>";
	
	$array = array("name" => "Michael", "vorname" => "Kunz", "alter" => 20);
	echo "$array[alter]";
	echo "<br><br><br>";
	

	for($counter =0; $counter < 10; $counter++){
		if($counter == 5){
		echo "$counter <br>";
		} else if($counter == 8){
		echo "$counter <br>";
		}
		else{
		echo "Sadlife :( <br>";
		}
	
	}
	

	
	?>

</body>


</html>