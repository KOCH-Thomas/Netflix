<?php session_start();

    if(!isset($_SESSION['User'])){

    header("Location:login.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<?php include('src/header.php'); ?>

    <section>

        <div id="login-body">
            Bienvenue <?= $_SESSION['User'] ?>, que souhaitez-vous regarder aujourd'hui?<br>
            <p><a href="logout.php"><strong style="color:red">Cliquez ici</strong></a> pour vous déconnecter.</p>
        </div>
        
    </section>

<?php include('src/footer.php'); ?>
    
</body>
</html>