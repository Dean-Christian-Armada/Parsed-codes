<?php 
	if(isset($_POST['submit'])){
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$name = $first_name. ' '. $last_name;
		echo $name;
		if($_POST['submit'] == "ADD"){
			echo "<script>alert('DEAN');</script>";
		}
		if($_POST['submit'] == "DELETE"){
			echo "<script>alert('ARMADA');</script>";
		}
	}
?>
<form method = "post">
<input type = "text" name = "first_name">
<input type = "text" name = "last_name">
<button id="btn-info" class="btn btn-info btn-block login masterlist-button right recycle_bin" type="submit" name = "submit" value = "ADD">ADD</button>
</form>

<form method = "post">
<input type = "text" name = "first_name">
<input type = "text" name = "last_name">
<button id="btn-info" class="btn btn-info btn-block login masterlist-button right recycle_bin" type="submit" name = "submit" value = "DELETE">DELETE</button>
</form>