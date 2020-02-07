<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rubberDuck";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if(isset($_POST['submit'])){

$firstName = $_POST ['firstName'];
$lastName = $_POST ['lastName'];
$address = $_POST ['address'];
$city = $_POST ['city'];
$postCode = $_POST ['postCode'];
$country = $_POST ['country'];
$email = $_POST ['email'];
$phone = $_POST ['phone'];

$sql = "INSERT INTO Customer (first_name, last_name, address, city, postcode, country, email, phone)
VALUES ('$firstName','$lastName','$address','$city','$postCode','$country','$email','$phone')";

$result = mysqli_query($conn, $sql);

if($result){

	echo "Customer added!";
}else{

	echo "Data not inserted";
}
mysqli_close($conn);

}

?>