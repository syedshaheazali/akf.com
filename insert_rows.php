<?php
$host = '192.168.0.65:3307';
$user = 'shaheaz';
$pass = 'shaheaz';
$database = 'akf_db';
 
//Custom PDO options.
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
);
 
//Connect to MySQL and instantiate our PDO object.
$pdo = new PDO("mysql:host=$host;dbname=$database", $user, $pass, $options);

$c_name =$_POST['c_name'];
$address1 =$_POST['Address1'];
$address2 =$_POST['Address2'];
$locality =$_POST['Locality'];
$state =$_POST['state'];
$pincode =$_POST['Pincode'];
$city =$_POST['City'];
$mobile = $_POST['Mobile'];
 
$sql = "INSERT INTO akf_orders (c_name, address1, address2,locality,state,pincode,city,mobile) VALUES ('$c_name', '$address1', '$address2','$locality','$state','$pincode','$city','$mobile')";
 
 //Prepare our statement using the SQL query.
$statement = $pdo->prepare($sql);

//Execute the statement and insert our values.
$inserted = $statement->execute();

if($inserted){
    echo "Row inserted!<br>";
}
?>