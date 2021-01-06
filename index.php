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
        h2{
            margin-top:20px; 
            font-family: "Lucida Console", Monaco, monospace;
            text-align: center;
        }
        img{
            height: 200px;
            width: : 200px;
            border-style: double;
            margin-bottom: 10px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        p{
            color: black; font-family: 'Verdana', sans-serif; font-size: 16px; line-height: 26px; text-indent: 30px; margin: 0;
            border-style: double;
            margin-bottom: 20px;
        }
        .footer {
            left: 0;
            height: 20px;
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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php"><?php echo $lang['home'] ?></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="contact.php"><?php echo $lang['contact'] ?></a>
            </li>
	    <li class="nav-item">
                <a class="nav-link" href="about.php"><?php echo $lang['about'] ?></a>
            </li>
        </ul>
    </nav>
    <div class="container" style="margin-top: 100px;">
        <div class="row justify-content-center">
            <div class="col-md-6 col-md-offset-3 text-center">
                <h1><?php echo $lang['title'] ?></h1>
                <p>
                    <?php echo $lang['description'] ?>
                </p>
            </div>
            
            <div class="table-responsive" id="pagination_data">  </div> 


        </div>
    </div>
    <?php
    include "templates/footer.php";
?>

    
</body>
</html>
<script>  
 $(document).ready(function(){  
      load_data();  
      function load_data(page)  
      {  
           $.ajax({  
                url:"pagination.php",  
                method:"POST",  
                data:{page:page},  
                success:function(data){  
                     $('#pagination_data').html(data);  
                }  
           })  
      }  
      $(document).on('click', '.pagination_link', function(){  
           var page = $(this).attr("id");  
           load_data(page);  
      });  
 });  
 </script> 