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

                        <li class="active"><a href="sitemap.php"><i class="icon-sitemap icon-large"></i>&nbsp;Мапа
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
            </div>

            <div class="span9">

                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Вітаю!</strong>&nbsp;Ласкаво просимо на курси англійської мови.
                </div>

                <p><iframe width="860" height="390" frameborder="10" scrolling="no" marginheight="0" marginwidth="auto"
                           src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3914.612860575551!2d26.06451403899701!3d49.092519302348805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z0LPRg9Cz0Lsg0LrQsNGA0YLQuA!5e0!3m2!1suk!2sua!4v1669325981746!5m2!1suk!2sua&amp;ie=UTF8&amp;msa=0&amp;msid=203722259750162261795.0004aafd513ccced356f4&amp;sll=10.743085,122.969515&amp;sspn=0,0&amp;ll=10.743346,122.969686&amp;spn=0,0&amp;t=h&amp;vpsrc=0&amp;output=embed">
                    </iframe></p>
            </div>
        </div>
        <?php include('footer.php'); ?>
    </div>
</div>
</div>
</body>
</html>


