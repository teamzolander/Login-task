<?php
/*checks if the form has received a POST method when the submit button has been clicked. 
The POST method is created in the html from the method="POST".*/
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $loginUsername = $_POST['username'];
    $loginPassword = $_POST['password'];

# opens the file in reading mode
$myfile = fopen("namefile.txt", "r") or die("Unable to open file!");# opens the file in reading mode
$readFile = fread($myfile,filesize("namefile.txt"));
$arr = (explode(" ",$readFile));#The explode() make the content in $readFile to an array

# This output the indexed element to the server
print_r("$arr[1]<br/>");
print_r("$arr[5]<br/>");

#This check the content of the array with the username and passwors of the login page
if (($loginUsername == $arr[1]) && ($loginPassword == $arr[5])){
    echo $loginUsername ." <h1>is successful<br><h1>";
    echo $loginPassword ." <h1>is successful<h1>";
    
}
else{
    echo $loginUsername ." is unsuccesful<br>";
    echo $loginPassword ." is unsuccesful";
}

fclose($myfile);# closes the file
}
?>
