<?php include 'sql.php'; ?>
<?php session_start(); ?>
<?php if(!empty($_SESSION['x'])): ?>
    <?php if($_SESSION['x'] == '1' || $_SESSION['x'] == '2'): ?>
        <?php header('Location: 129-content.php') ?>
    <?php else: ?>
        <?php header('Location: login.php'); ?>
    <?php endif; ?>
<?php endif; ?>

<!DOCTYPE html>
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
                    <div class="col-md-12" style="border-bottom: solid 1px #000;">
                        <div class="poetry" style="margin: 10px;"><a href="129.php">Poetry course</a></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12" style="margin: 20px;">
                        <form method="POST" >
                            <h4>Login Page</h4>
                            <h5>ID: </h5><input type="text" name="id" value="<?php echo!empty($_POST['id']) ? $_POST['id'] : "" ?>"><br>
                            <h5>Pass: </h5><input type="text" name="pass" value="<?php echo!empty($_POST['pass']) ? $_POST['pass'] : "" ?>"><br><br>
                            <input type="submit" name="Login"><br><br>
                            <?php if (!empty($_POST['id']) && !empty($_POST['pass'])): ?>
                                <?php if ($_POST['id'] == 'user' && $_POST['pass'] == 'user'): ?>
                                    <?php header('Location: 129-content.php'); ?>
                                    <?php $_SESSION['x'] = '1'; ?>
                                <?php elseif ($_POST['id'] == 'admin' && $_POST['pass'] == 'admin'): ?>
                                    <?php header('Location: 129-content.php'); ?>
                                    <?php $_SESSION['x'] = '2'; ?>
                                <?php else: ?>
                                    <h4><?php echo 'Wrong ID or Pass, Please check again!' ?></h4>
                                <?php endif; ?>
                            <?php else: ?>
                                <h4><?php echo 'Please fill in ID and Pass!'; ?></h4>
                            <?php endif; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>