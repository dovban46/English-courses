<div class="row-fluid">
    <div class="span12">


        <div class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar-inner">
                <div class="container">

                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="nav-collapse collapse">
                        <i class="icon-facebook-sign icon-large" id="color_white"></i>
                        <i class="icon-twitter icon-large" id="color_white"></i>
                        <i class="icon-google-plus icon-large" id="color_white"></i>
                        <i class="icon-linkedin-sign icon-large" id="color_white"></i>
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
                                <img src="admin/images/head.png">
                            </div>
                            <div class="span6">
                                <div class="pull-right">
                                    <div class="btn-group">
                                        <button class="btn btn-success"><i class="icon-signin icon-large"></i>&nbsp;Вхід</button>
                                        <button class="btn dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#student" role="button"  data-toggle="modal"><i class="icon-user icon-large"></i>&nbsp;Студент</a></li>
                                            <li><a href="#teacher" role="button"  data-toggle="modal"><i class="icon-user-md icon-large"></i>&nbsp;Викладач</a></li>
                                            <li><a href="admin/index.php" role="button"  data-toggle="modal"><i class="icon-user icon-large"></i>&nbsp;Адмін</a></li>

                                        </ul>
                                    </div>
                                    <?php include('student_modal.php'); ?>
                                    <?php include('teacher_modal.php'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>