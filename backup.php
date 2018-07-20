<!--
**********************************************************************
*  Begin Random Form
**********************************************************************
-->
<?php
// define variables and set to empty values
$max_error = $min_error = 2;
$max       = $min       = 1;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["max"])) {
		$max_error = "An Upper Limit is required";
	} else {
		$max = test_input($_POST["max"]);
		// check if max only contains letters and whitespace
		if (!preg_match("/^[1-9][0-9]*$/", $max)) {
			$max_error = "Only Numerical Values Please";
		}
	}

	if (empty($_POST["min"])) {
		$min_error = "min is required";
	} else {
		$min = test_input($_POST["min"]);
		// check if min only contains letters and whitespace
		if (!preg_match("/^[1-9][0-9]*$/", $min)) {
			$min_error = "Only Numerical Values Please";
		}
	}
}
?>
<?php
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>













<?php
$max_error = $min_error = 1;
$max       = $min       = 1;

$numbers = range(1, 20);
shuffle($numbers);

function UniqueRandomNumbersWithinRange($min, $max, $quantity) {
	$numbers = range($min, $max);
	shuffle($numbers);
	return array($numbers, 0, $quantity);
}

?>

<div class="container center-align">

<h2>Random Node Generator</h2>
<p>
<!--span class="error">* required field</span-->
</p>

<div class="row">

<form class="col s12" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<div class="row">
<div class="input-field col s6">
<input id="min" placeholder="Placeholder" type="text" class="validate" name="min" value="<?php echo $min;?>">
<label for="min"> Lower Limit:</label>
<!--span class="error">* <?php echo $max_error;?></span-->
</div>


<div class="input-field col s6">
<input id="max" placeholder="Placeholder" type="text" class="validate" name="max" value="<?php echo $max;?>">
<label for="max"> Upper Limit:</label>
<!-- span class="error">* <?php echo $min_error;?></span-->
</div>
</div>


  <input type="submit" name="submit" value="Submit">
<?php
echo "<h2>Random Limits:</h2>";
print_r(UniqueRandomNumbersWithinRange(0, 25, 16));
?>
</form>
  </div>
  </div>


<!--
**********************************************************************
*  End Random Form
**********************************************************************
-->