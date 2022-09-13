<?php
$conn = mysqli_connect("localhost","root","", "phppot_examples");

$query = "SELECT * FROM toy";
$result = mysqli_query($conn, $query);

$num_column = mysqli_num_fields($result);		


?>