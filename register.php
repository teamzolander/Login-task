<?php 
    /*checks if the form has received a POST method when the submit button has been clicked. 
    The POST method is created in the html from the method="POST".*/
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        # Create the file name.txt and put the file in writing mode
        $myfile = fopen("namefile.txt", "w") or die("Unable to open file!");
        # This collect the name="name" from the form using global variable $_POST['']
        # This applys to all $variables with $_POST 
        $name = $_POST['name'];
        fwrite($myfile, "$name"." ");    # This write the $name to namefile.txt
        
        # writes username to namefile.txt
        $userName = $_POST['username'];
        fwrite($myfile, " $userName"." ");
       
        # writes emailAddress to namefile.txt
        $emailAddress = $_POST['email'];
        fwrite($myfile, " $emailAddress"." ");
        
        # writes phoneNumber to namefile.txt
        $phoneNumber = $_POST['phone'];
        fwrite($myfile, " $phoneNumber"." ");
       
        # writes password to namefile.txt
        $password = $_POST['password'];
        fwrite($myfile, " $password"."\r\n");
        
        fclose($myfile);
    }
    # This puts the file in reading  in reading mode
    $myfile = fopen("namefile.txt", "r") or die("Unable to open file!");

    #This actually reads the file
    $readFile = fread($myfile,filesize("namefile.txt"));
    print_r (explode(" ",$readFile));# This output the index the server
    fclose($myfile);
?>