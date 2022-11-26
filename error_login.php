<?php
include('header.php');
//Start session
session_start();
//Unset the variables stored in session
unset($_SESSION['id']);
?>
<body>

    <?php include('navhead.php'); ?>

    <div class="container">
        <div class="row-fluid">
            <div class="span3">

                <div class="hero-unit-3">
                    <div class="alert-index alert-success">
                        <i class="icon-calendar icon-large"></i>
                        <?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
                    </div>
                </div>

                <div class="hero-unit-1">
                    <ul class="nav  nav-pills nav-stacked">


                        <li class="nav-header">Посилання</li>
                        <li class="active"><a href="#"><i class="icon-home icon-large"></i>&nbsp;Головна
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>

                        <li><a href="sitemap.php"><i class="icon-sitemap icon-large"></i>&nbsp;Мапа
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
                        <li><a href="contact.php"><i class="icon-envelope-alt icon-large"></i>&nbsp;Контакти
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a>                
                        </li>
                        <li class="nav-header">Про себе</li>
                        <li><a  href="#mission" role="button" data-toggle="modal"><i class="icon-book icon-large"></i>&nbsp;Місії
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
                        <li><a href="#vision" role="button" data-toggle="modal"><i class="icon-book icon-large"></i>&nbsp;Підхід
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>

                    </ul>
                </div>
                <br>

            </div>
            <div class="span9">

                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Вітаю!</strong>&nbsp;Ласкаво просимо на курси англійської мови.
                </div>
                <div class="slider-wrapper theme-default">

                    <form class="form-horizontal" method="post">
                        <div class="control-group">
                            <label class="control-label" for="inputEmail">Ім'я користувача</label>
                            <div class="controls">
                                <input type="text" name="username" id="inputEmail" placeholder="Username">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputPassword">Пароль</label>
                            <div class="controls">
                                <input type="password" name="password" id="inputPassword" placeholder="Password">
                            </div>
                        </div>


                        <div class="control-group">
                            <div class="controls">
                                <button type="submit" name="login" class="btn btn-info"><i class="icon-signin icon-large"></i>&nbsp;Увійти</button>
                            </div>
                        </div>

                        <?php
                        if (isset($_POST['login'])) {

                            function clean($str) {
                                $str = @trim($str);
                                if (get_magic_quotes_gpc()) {
                                    $str = stripslashes($str);
                                }
                                return mysqli_real_escape_string($str);
                            }

                            $username = clean($_POST['username']);
                            $password = clean($_POST['password']);

                            $query = mysqli_query($conn,"select * from student where username='$username' and password='$password'") or die(mysqli_error());
                            $count = mysqli_num_rows($query);
                            $row = mysqli_fetch_array($query);


                            if ($count > 0) {
                                $_SESSION['id'] = $row['student_id'];
                                echo('<script>location.href = "student_home.php"</script>');
                                session_write_close();
                                exit();
                            } else {
                                session_write_close();
                                ?>

                                <?php
                                echo('<script>location.href = "error_login.php"</script>');
                            }
                        }
                        ?>

                    </form>
                </div>
                <!-- end slider -->
            </div>

        </div>

    </div>
    <!---------------->
    <div class="container">
        <?php include('footer.php'); ?>
    </div>


</div>
</div>

</body>
</html>


