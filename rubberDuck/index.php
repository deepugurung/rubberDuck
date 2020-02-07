<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>Welcome to Rubber Duck!</h1>


<p>Enter customer details...</p>



<form action="connect.php" method="post">
First Name: <input type="text" name="firstName"><br>
Last Name: <input type="text" name="lastName"><br>
Address: <input type="text" name="address"><br>
City: <input type="text" name="city"><br>
Postcode: <input type="text" name="postCode"><br>
Country: <input type="text" name="country"><br>
E-mail: <input type="text" name="email"><br>
Phone: <input type="text" name="phone"><br>

<input name="submit" type="submit">
</form>

<button onclick="window.location.href = 'product.php';">Products</button>


<button onclick="window.location.href = 'index.php';">Customer</button>

</body>
</html>
