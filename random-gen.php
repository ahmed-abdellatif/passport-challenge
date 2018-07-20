<!--
**********************************************************************
*  Begin Random Form
**********************************************************************
-->
<?php
// define variables and set to empty values
$Upper_randErr = $Lower_randErr = "";
$Upper_rand    = $Lower_rand    = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["Upper_rand"])) {
		$Upper_randErr = "An Upper Limit is required";
	} else {
		$Upper_rand = test_input($_POST["Upper_rand"]);
		// check if Upper_rand only contains letters and whitespace
		if (!preg_match("/^[1-9][0-9]*$/", $Upper_rand)) {
			$Upper_randErr = "Only Numerical Values Please";
		}
	}

	if (empty($_POST["Lower_rand"])) {
		$Lower_randErr = "Lower_rand is required";
	} else {
		$Lower_rand = test_input($_POST["Lower_rand"]);
		// check if Lower_rand only contains letters and whitespace
		if (!preg_match("/^[1-9][0-9]*$/", $Lower_rand)) {
			$Lower_randErr = "Only Numerical Values Please";
		}
	}
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
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
<input placeholder="Placeholder" type="text" class="validate" name="Upper_rand" value="<?php echo $Upper_rand;?>">
<label for="Upper_rand"> Upper Random Limit:</label>
<!--span class="error">* <?php echo $Upper_randErr;?></span-->
</div>


<div class="input-field col s6">
<input id="Lower_rand" placeholder="Placeholder" type="text" class="validate" name="Lower_rand" value="<?php echo $Lower_rand;?>">
<label for="Lower_rand"> Upper Random Limit:</label>
<!-- span class="error">* <?php echo $Lower_randErr;?></span-->
</div>
</div>


  <input type="submit" name="submit" value="Submit">
<?php
echo "<h2>Random Limits:</h2>";
echo rand($Lower_rand, $Upper_rand);
echo "<br>";
echo "<br>";
?>
</form>
  </div>
  </div>


<!--
**********************************************************************
*  End Random Form
**********************************************************************
-->
