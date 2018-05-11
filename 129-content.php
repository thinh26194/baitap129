<!DOCTYPE html>
<?php session_start(); ?>
<?php include 'sql.php'; ?>

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

                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i> -> <span style="font-size: 18px;font-weight: bold;"><a href="logout.php">Log out</a></span> Come back to Login!

                    </div>

                    <div class="media">
                        <div class="row">

                            <!-- Sile 1-->
                            <div class="col-md-12" style="border: 1px solid #000; padding: 10px;">
                                <?php if (!empty($_SESSION['x'])): ?>
                                    <?php if ($_SESSION['x'] == '1'): ?>
                                        <div class="col-md-1">
                                            <div class="circ-wrapper course_detail pull-left">
                                                <h3><?php echo $users[0]['id'] ?></h3>
                                            </div>
                                        </div>
                                        <div class="col-md-11">
                                            <div class="media-body">
                                                <h4 class="media-heading">
                                                    <a href="#">USER</a>
                                                </h4>
                                                <div class="col-md-1">
                                                    Id: 
                                                    Name: 
                                                    Pass: 
                                                    Email: 
                                                    Phone: 
                                                </div>
                                                <div class="col-md-10">
                                                    <p>
                                                        <?php foreach ($users[0] as $value): ?>
                                                            <?php echo $value . '<br>'; ?>
                                                        <?php endforeach; ?>
                                                    </p>
                                                </div>
                                                <ul class="data-lessons">
                                                    <li><i class="fa fa-clock-o" aria-hidden="true"></i> 60 minutes</li>
                                                    <li><i class="fa fa-film" aria-hidden="true"></i> Video</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Sile 2-->
                                    <div class="col-md-12" >
                                    <?php elseif ($_SESSION['x'] == '2'): ?>
                                        <!-- user-->
                                        <div class="col-md-12" >
                                            <div class="col-md-1">
                                                <div class="circ-wrapper course_detail pull-left">
                                                    <h3><?php echo $users[0]['id'] ?></h3>
                                                </div>
                                            </div>
                                            <div class="col-md-11">
                                                <div class="media-body">
                                                    <h4 class="media-heading">
                                                        <a href="#">USER</a>
                                                    </h4>
                                                    <div class="col-md-1">
                                                        Id: 
                                                        Name: 
                                                        Pass: 
                                                        Email: 
                                                        Phone: 
                                                    </div>
                                                    <div class="col-md-10">
                                                        <p>
                                                            <?php foreach ($users[0] as $value): ?>
                                                                <?php echo $value . '<br>'; ?>
                                                            <?php endforeach; ?>
                                                        </p>
                                                    </div>
                                                    <ul class="data-lessons">
                                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> 60 minutes</li>
                                                        <li><i class="fa fa-film" aria-hidden="true"></i> Video</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- admin-->
                                        <div class="col-md-12">
                                            <div class="col-md-1">
                                                <div class="circ-wrapper course_detail pull-left">
                                                    <h3><?php echo $users[1]['id'] ?></h3>
                                                </div>
                                            </div>
                                            <div class="col-md-11">
                                                <div class="media-body">
                                                    <h4 class="media-heading">
                                                        <a href="#">ADMIN</a>
                                                    </h4>
                                                    <div class="col-md-1">
                                                        Id: 
                                                        Name: 
                                                        Pass: 
                                                        Email: 
                                                        Phone: 
                                                    </div>
                                                    <div class="col-md-10">
                                                        <p>
                                                            <?php foreach ($users[1] as $value): ?>
                                                                <?php echo $value . '<br>'; ?>
                                                            <?php endforeach; ?>
                                                        </p>
                                                    </div>
                                                    <ul class="data-lessons">
                                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> 60 minutes</li>
                                                        <li><i class="fa fa-film" aria-hidden="true"></i> Video</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php else: ?>
                            <?php header('Location: login.php'); ?>
                        <?php endif; ?>
                    </div>
                    <div class="clear-both"></div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>