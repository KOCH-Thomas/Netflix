<?php session_start();

if(isset($_POST['submit'])){


$users = array('moi@moi'=>'moi');
$mail = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';



if(isset($users[$mail]) && $users[$mail] == $password){


    $_SESSION['User'] = $mail;



    header('Location:index.php');
    
    exit;



} else {


    $error = "<span style='color:red'>Identifiants invalides </span>";
}





}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix sans bdd</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include('src/header.php'); ?>

    <section>
        <div id="login-body">
           <h1>Connectez-vous</h1>
           <form action="login.php" method="post" name="Login_form">

            <?php if(isset($error)){?>
   
                    <p ><?php echo $error;?></p>

            <?php } ?>


        <table class="Table">
            <tr>
                <td>Email</td>
                <td><input type="Email" name="email" class="Input"></td>
            </tr>
            <tr>
                <td>Mot de passe</td>
                <td><input type="password" name="password" class="Input"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="Submit" name="submit" value="Login" class="button"></td>
            </tr>
        </table>
            <label id="option"><input type="checkbox" name="auto" checked>Se souvenir de moi</label>
        </form>
        
    </section>
        </div>

<?php include('src/footer.php'); ?>
    
</body>
</html>