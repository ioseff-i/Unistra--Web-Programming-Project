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
    <link rel="stylesheet" type="text/css" href="assets/len.css" media="all" /> 
    <link rel="stylesheet" type="text/css" href="assets/resume.css" media="all" />

</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php"><?php echo $lang['home'] ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php"><?php echo $lang['contact'] ?></a>
            </li>
	    <li class="nav-item active">
                <a class="nav-link" href="about.php"><?php echo $lang['about'] ?></a>
            </li>
        </ul>
    </nav>
    <div class="container" style="margin-top: 0px;">
        <div class="row justify-content-center">
            
            <div id="doc2" class="yui-t7">
    <div id="inner">
    
        <div id="hd">
            <div class="yui-gc">
                <div class="yui-u first">
                    <h1>Yusif IBRAHIMOV</h1>
                    <h2><?php echo $lang['desc'] ?></h2>
                </div>

                <div class="yui-u">
                    <div class="contact-info">
                        
                        <h3><a href="mailto:yusif.ibrahimov@ufaz.az">yusif.ibrahimov@ufaz.az</a></h3>
                        
                    </div><!--// .contact-info -->
                </div>
            </div><!--// .yui-gc -->
        </div><!--// hd -->

        <div id="bd">
            <div id="yui-main">
                <div class="yui-b">

                    

                    <div class="yui-gf">
                        <div class="yui-u first">
                            <h2><?php echo $lang['skills'] ?></h2>
                        </div>
                        <div class="yui-u">

                                <div class="talent">
                                    <h2><?php echo $lang['ml'] ?></h2>
                                    <p><?php echo $lang['mldesc'] ?></p>
                                </div>

                                <div class="talent">
                                    <h2><?php echo $lang['ds'] ?></h2>
                                    <p><?php echo $lang['dsdesc'] ?></p>
                                </div>

                                <div class="talent">
                                    <h2><?php echo $lang['alg'] ?></h2>
                                    <p><?php echo $lang['algdesc'] ?></p>
                                </div>
                        </div>
                    </div><!--// .yui-gf -->

                    <div class="yui-gf">
                        <div class="yui-u first">
                            <h2><?php echo $lang['technical'] ?></h2>
                        </div>
                        <div class="yui-u">
                            <ul class="talent">
                                <li>C</li>
                                <li>C++</li>
                                <li class="last">Python</li>
                            </ul>

                            <ul class="talent">
                                <li>Java</li>
                                <li><?php echo $lang['oop'] ?></li>
                                <li class="last"><?php echo $lang['a_n_a'] ?></li>
                            </ul>

                            <ul class="talent">
                                <li><?php echo $lang['stat'] ?></li>
                                <li><?php echo $lang['prob'] ?></li>
                                <li class="last">Linux</li>
                            </ul>
                        </div>
                    </div><!--// .yui-gf-->

                    <div class="yui-gf last">
                        <div class="yui-u first">
                            <h2><?php echo $lang['edu'] ?></h2>
                        </div>
                        <div class="yui-u">
                            <h2><?php echo $lang['edu1'] ?></h2>
                            <h3><?php echo $lang['edu1desc'] ?> </h3>
                        </div>
                        <div class="yui-u">
                            <h2><?php echo $lang['edu2'] ?></h2>
                            <h3><?php echo $lang['edu2desc'] ?></h3>
                        </div>
                        <div class="yui-u">
                            <h2><?php echo $lang['edu3'] ?></h2>
                            <h3><?php echo $lang['edu3desc'] ?></h3>
                        </div>

                    </div><!--// .yui-gf -->


                </div><!--// .yui-b -->
            </div><!--// yui-main -->
        </div><!--// bd -->

        

    </div><!-- // inner -->


</div><!--// doc -->



        </div>
    </div>

     <div class="footer bg-dark">
        <a href="about.php?lang=en"><?php echo $lang['lang_en'] ?></a>
        | <a href="about.php?lang=fr"><?php echo $lang['lang_fr'] ?></a>
    </div>
?>
</body>
</html>
