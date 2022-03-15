<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Processor</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

    <?php

    $users = array(
        array("Username"=>"admin","Password"=>"admin"),
        array("Username"=>"geperson","Password"=>"12345"),
        array("Username"=>"user","Password"=>"user"),
        array("Username"=>"guest","Password"=>"guest"),
        array("Username"=>"superadmin","Password"=>"admsuperadmin"),
    );
    
    $usernameInput = $_GET['username'];
    $passwordInput = $_GET['password'];
    
        for ($row = 0; $row <= count($users); $row++) {
            if($users[$row]['Username'] == $usernameInput AND $users[$row]['Password'] == $passwordInput){
                $msg1 = "Welcome ". $usernameInput ." !";   
                $msg2 = "Login Successful";
                break;
             }if($users[$row]['Username'] != $usernameInput AND $users[$row]['Password'] == $passwordInput){
                $msg1 = "Username does not exist";
                $msg2 = "Login Failed";
                 break;
             }if($users[$row]['Password'] != $passwordInput AND $users[$row]['Username'] == $usernameInput){
                $msg1 = "Access Denied";
                $msg2 = "Login Failed";
                 break;
             }
        }

    ?>
    
    <div class="container">
        
        <form>
            <table>
                <tr> 
                    <td><h3>User Validation</h3> </td>    
                </tr>
                <tr> 
                    <td><h3>Result</h3></td></tr>
                <tr> 
                    <td><?php echo $msg1 . "<br>"?></td> 
                </tr>
                <tr> 
                    <td><?php echo $msg2 ?> </td>
                </tr> 
            </table>
                        
        </form>
    </div>

</body>
</html>
