<?php
echo "<h1>This is a Data Type Example</h1>";
echo "<h3>What is Data Type?</h3>";
echo "Data type is nothing but a type of data which meanse a variable that hold some value, It could be any thing like a number, any Name, etc.";
echo "<h5>Integer Data Type</h5>";
echo "A variable that hold numeric value like contact number, age, etc. It's called Integer Data Type.";
echo "<h5>String Data Type</h5>";
echo "A variable that containe some text like address, Name, etc. It's called String Data Type.";
echo "<h5>Float Data Type</h5>";
echo "A variable that containe some decimal number like price,percentage etc. That means the datatype of that variable is float.";
echo "<h5>Boolean Data Type</h5>";
echo "A variable that containe true or false value. That means the data type of that variable is boolean.";
echo "<h5>Array Data Type</h5>";
echo "Avriable which containe dissimilar type of data or morethan one value is called array.";
echo "<h5>new Class(); -> object<h5>";
echo "also Object can stroe multiple data with multiple type.";
echo "<h5>Null</h5>";
echo "Null is a datatype which means the varibale has no value";

echo "<h5>In PHP there is a function to know the data type of a particular variable</h5>";
echo "var_dump()";

// Example

$age = 23;
var_dump($age);
$fruits = ['Apple', 'Banana', 'Grapes', 'Orange'];
var_dump($fruits);
