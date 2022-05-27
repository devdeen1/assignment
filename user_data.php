<?php
echo "This is the information Provided" . "<br>" . "<br>";
$name = $_POST['name'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$gender = $_POST['sex'];
$country = $_POST['country'];

echo "Name: ";
print_r ($_POST ['name']);
echo '<br>'. '<br>';
echo "Email: ";
print_r ($_POST['email']);
echo '<br>'. '<br>';
echo "Date of Birth: ";
print_r ($_POST['dob']);
echo '<br>'. '<br>';
echo "Gender: ";
print_r ($_POST['sex']);
echo '<br>'. '<br>';
echo "Country: ";
print_r ($_POST['country']);


$dat_1 = $_POST;
$data =implode(" \n", $dat_1);
$file = "./userdata.csv";
$handle = fopen($file, "a");
fwrite($handle, $data);
fclose($handle);


?>


