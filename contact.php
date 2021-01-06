<?php
    include "config.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $lang['title'] ?></title>
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <style type="text/css">

	.container{
		margin:50px;

	}
        .footer {
            left: 0;
            position: fixed;
            bottom: 0;
            text-align: center;
            color: white;
            width: 100%;
        }
        a{
            color: white;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php"><?php echo $lang['home'] ?></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="contact.php"><?php echo $lang['contact'] ?></a>
            </li>
	    <li class="nav-item">
                <a class="nav-link" href="about.php"><?php echo $lang['about'] ?></a>
            </li>
        </ul>
    </nav>
    

	<div class="container">
    <h3><?php echo $lang['conthead'] ?></h3>
    <form action="pro.php" method="POST">
        <div class="form-group">
            <label><?php echo $lang['name'] ?></label>
            <input type="text" name="name" id="firstName" class="form-control" required>
        </div>
        <div class="form-group">
            <label><?php echo $lang['email'] ?></label>
            <input type="email" name="email" id="mail" class="form-control" required>
        </div>
        <div class="form-group">
            <label><?php echo $lang['message'] ?></label>
            <textarea class="form-control" name="message" id="message" required></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-success" type="submit"><?php echo $lang['submit'] ?></button>
        </div>
    </form>
</div>





     <div class="footer bg-dark">
        <a href="contact.php?lang=en"><?php echo $lang['lang_en'] ?></a>
        | <a href="contact.php?lang=fr"><?php echo $lang['lang_fr'] ?></a>
    </div>
?>

<script src="verifForm.js"></script> 
</body>
</html>
