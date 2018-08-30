<html>
 <head>
  <title>The Menu</title>
  <style>
    table{
	border-collapse: collapse;
	width:60%; 
	margin-left:100px;
	
}

td, th {
    border: 1px solid;
	border-color:black;
    text-align: center;
    padding: 8px;
	overflow:auto;
}
th{
background-color:gray;
}
  </style>
 </head>
 <body>
 <a href="index.php"><h1>Welcome to the Bar</h1></a>
 <form method="post" action="#">
 <table>
    <tr>
        <th colspan="4">Rum Drinks</th>
    </tr>
    <tr>
        <td> <strong>Drink </td>
        <td> <strong>Price </td>
        <td> <strong>Qty </td>
        <td> <strong>Order </td>
    </tr>
    <tr>
        <td> Pina Colada</td>
        <td> $6.99 </td>
        <td><select name="Quantity">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            </select>  
        </td>
        <td> <input type="submit" name="submit" value="Order" /></td>
    </tr>
 </table>
</form>


<?php
if(isset($_POST['submit'])){
    $selected_val = $_POST['Quantity'];  // Storing Selected Value In Variable
    echo "Number of drinks ordered: " .$selected_val;
    echo "<br>";
    echo "Your total: $" .$selected_val * 6.99;
}
?>

 
 
 </body>
</html>