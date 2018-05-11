<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en-US">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-129.less', 'css/type-129.css');
        ?>
        <link href="css/type-129.css" rel="stylesheet" type="text/css" />


    </head>

    <body>

        <div class="mod-custom-27">

            <div class="container">

                <div class="row">

                    <div class="poetry"><a href="129.php">Poetry course</a></div>

                    <div class="sensei-message info">

                        
                        <?php if (!empty($_SESSION['x'])): ?>
                            <i class="fa fa-exclamation-circle" aria-hidden="true"></i> -> <span style="font-size: 18px;font-weight: bold;"><a href="logout.php">Log out </a></span> Connect orther account!
                        <?php else: ?>
                            <i class="fa fa-exclamation-circle" aria-hidden="true"></i> -> <span style="font-size: 18px;font-weight: bold;"><a href="login.php">Log in </a></span> Connect Login page!
                        <?php endif; ?>
                    </div>

                    <div class="title" style="text-align: center;">
                        <h1>Well come to Poetry course!</h1>
                    </div>

                </div>
            </div>
        </div>
    </body>

</html>