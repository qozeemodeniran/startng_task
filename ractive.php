<?php
if (isset($_POST['send'])) {
    $FirstName = "First Name: ".$_POST['firstname']."
    ";
    $LastName = "Last Name: ".$_POST['lastname']."
    ";
    $Phone = "Phone Number: ".$_POST['phonenumber']."
    ";
    $Email = "Email: ".$_POST['email']."
    ";
    $Gender = "Gender: ".$_POST['gender']."
    ";
    $Message = "Message: ".$_POST['message']."
    ";
    $file = fopen($_POST['firstname'], "a"); //your index was $_POST['firstName']
    //$file = fopen("data.txt", "a");
    fwrite($file, $FirstName);
    fwrite($file, $LastName);
    fwrite($file, $Phone);
    fwrite($file, $Email);
    fwrite($file, $Gender);
    fwrite($file, $Message);
    fclose($file);
}
?>
<!DOCTYPE html>
<html>
    <head>
         <meta charset="utf-8">
         <meta  name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Me</title>
    </head>
    <body>
        <form method="POST">
            <fieldset>
                <legend><h2>Welcome, Drop a message</h2></legend>
        
                <p>
                    <label>Firstname: </label><br>
                    <input type="text"name="firstname" placeholder="Enter your firstname" required><br>
                </p>
        
                <p>
                    <label>Lastname: </label><br>
                    <input type="text" name="lastname" placeholder="Enter your lastname" required><br>
                </p>
        
                <p>
                    <label>Phone Number: </label><br>
                    <input type="number" name="phonenumber" required><br>
                </p>
        
                <p>
                    <label>E-mail: </label><br>
                    <input type="email" name="email" placeholder="Enter your Email" required><br>
                </p>
        
                <p>
                    <label>Gender: </label><br>
                    <input type="radio" name="gender" value="male"> Male
                    <input type="radio" name="gender" value="female"> Female
                    <input type="radio" name="gender" value="other" required> Other <br>
                </p>
        
                <label for="message">Message</label><br> <!--you did not include "for="message" in your code-->
                <textarea cols="70" rows="10" name="message"></textarea> <!--you did not include "for="message" in your code-->
                <input type="submit" name="send" value="Submit"> <!--your name="" was empty-->
            </fieldset>
        </form>    
    </body>
</html>