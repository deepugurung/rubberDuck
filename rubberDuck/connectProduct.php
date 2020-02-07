<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rubberDuck";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if(isset($_POST['submit'])){

$product = $_POST ['product'];
$description = $_POST ['description'];
$quantity = $_POST ['quantity'];
$date = $_POST ['date'];
$price = $_POST ['price'];


$sql = "INSERT INTO Product (product, description, quantity, date, Price)
VALUES ('$product','$description','$quantity','$date','$price')";

$result = mysqli_query($conn, $sql);

if($result){

	echo "Customer added!";
}else{

	echo "Data not inserted";
}
mysqli_close($conn);

}

?>






