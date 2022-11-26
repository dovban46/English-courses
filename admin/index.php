<?php
include('header.php');
//Start session
session_start();
//Unset the variables stored in session
unset($_SESSION['id']);
?>
<body>

    <div class="row-fluid">
        <div class="span12">

            <div class="navbar navbar-fixed-top navbar-inverse">
                <div class="navbar-inner">
                    <div class="container">

                        <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>

                        <div class="nav-collapse collapse">
                            <!-- .nav, .navbar-search, .navbar-form, etc -->


                        </div>

                    </div>
                </div>
            </div>

            <div class="hero-unit-header">
                <div class="container">
                    <div class="row-fluid">
                        <div class="span12">


                            <div class="row-fluid">
                                <div class="span6">
                                    <img src="images/head.png">
                                </div>
                                <div class="span6">

                                    <div class="pull-right">
                                        <i class="icon-calendar icon-large"></i>
                                        <?php
                                        $Today = date('y:m:d');
                                        $new = date('l, F d, Y', strtotime($Today));
                                        echo $new;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="container">
                <div class="row-fluid">
                       <div class="span6">
                    <div class="hero-unit-3">
                        <div class="alert alert-info">Місії</div>
                        <p>
                            Досягай відмінних результатів!
                        </p>
                        <p>
                            Займайтеся регулярно!
                        </p>
                    </div>
                    <div class="hero-unit-3">
                        <div class="alert alert-info">Підхід</div>
                        <p>
                            Комунікативна методика
                        </p>
                        <p>
                            Граматика і лексика
                        </p>
                        <p>
                            Домашнє завдання
                        </p>
                    </div>
                           <br>
                           <br>
                </div>
                    <div class="span6">

                        <div class="alert alert-info"><strong>Логін</strong> Будь ласка, введіть деталі нижче</div>
                        <!-- login -->
                        <form class="form-horizontal" method="post">
                            <div class="control-group">
                                <label class="control-label" for="inputEmail">Ім'я користувача</label>
                                <div class="controls">
                                    <input type="text" name="username" id="inputEmail" placeholder="Username" required>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="inputPassword">Пароль</label>
                                <div class="controls">
                                    <input type="password" name="password" id="inputPassword" placeholder="Password" required>
                                </div>
                            </div>


                            <div class="control-group">
                                <div class="controls">
                                    <button type="submit" name="login" class="btn btn-info"><i class="icon-signin icon-large"></i>&nbsp;Увійти</button>
                                    <a href="../index.php" class="btn btn-info" >Скасувати</a>
                                </div>

<br>
                                <?php
                                if (isset($_POST['login'])) {

                                    function clean($str) {
                                        global $conn;
                                        $str = @trim($str);
                                        $str = stripslashes($str);
                                        return mysqli_real_escape_string($conn,$str);
                                    }

                                    $username = clean($_POST['username']);
                                    $password = clean($_POST['password']);

                                    $query = mysqli_query($conn,"select * from user where username='$username' and password='$password'") or die(mysqli_error());
                                    $count = mysqli_num_rows($query);
                                    $row = mysqli_fetch_array($query);


                                    if ($count > 0) {
                                       
                                        $_SESSION['id'] = $row['user_id'];
                                        echo('<script>location.href = "home.php"</script>');
                                        session_write_close();
                                        exit();
                                    } else {
                                        session_write_close();
                                        ?>

                                     
                                        <div class="alert alert-danger"><i class="icon-remove-sign"></i>&nbsp;Доступ заборонено</div>

                                        <?php
                                      
                                    }
                                }
                                ?>
                            </div>
                    </form>
                </div>

                   <?php include('footer_fixed.php'); ?>
            </div>
        </div>
    </div>
</div>






</body>
</html>


