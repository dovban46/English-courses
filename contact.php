<?php
include('header.php');
session_start();
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
                        <li><a href="index.php"><i class="icon-home icon-large"></i>&nbsp;Головна
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>

                        <li><a href="sitemap.php"><i class="icon-sitemap icon-large"></i>&nbsp;Мапа
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
                        <li class="active"><a href="contact.php"><i class="icon-envelope-alt icon-large"></i>&nbsp;Контакти
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
                    <strong><i class="icon-phone-sign icon-large"></i>&nbsp;Довідники!</strong>&nbsp;
                </div>
                <div class="hero-unit-3">

                    <div class="row-fluid">
                        <div class="span12">
                            <div class="alert alert-success">  Україна, Тернопільська область, село Васильківці </div>

                            <div class="row-fluid">
                                <div class="span6">

                                    <p><i class="icon-circle"></i>&nbsp;Мобільний - 067-125-24-12</p>
                                    <p><i class="icon-circle"></i>&nbsp;Домашній - 662-265</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('footer.php'); ?>
    </div>
</div>
</div>
</body>
</html>


