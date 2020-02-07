<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>Welcome to Rubber Duck!</h1>


<p>Product information below</p>


<form action="connectProduct.php" method="post">
Product: <input type="text" name="product"><br>
Description: <input type="text" name="description"><br>
Quantity: <input type="text" name="quantity"><br>
Date: <input type="text" name="date"><br>
Price: <input type="text" name="price"><br>

<input name="submit" type="submit">
</form>



<button onclick="window.location.href = 'product.php';">Products</button>


<button onclick="window.location.href = 'index.php';">Customer</button>





</body>
</html>
