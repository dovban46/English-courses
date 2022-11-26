<?php
include('header.php');
include ('session.php');
$user_query = mysqli_query($conn,"select * from teacher where teacher_id='$session_id'") or die(mysqli_error());
$user_row = mysqli_fetch_array($user_query);
?>
<body>

    <?php include('navhead_user.php'); ?>

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
                        <li>
                            <a href="teacher_home.php"><i class="icon-home icon-large"></i>&nbsp;Головна
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a>

                        </li>
                        <li   class="active">
                            <a href="teacher_class.php"><i class="icon-group icon-large"></i>&nbsp;Клас
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a></li>
                        <li><a href="teacher_subject.php"><i class="icon-file-alt icon-large"></i>&nbsp;Предмет
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a></li>
                        <li><a href="students.php"><i class="icon-group icon-large"></i>&nbsp;Студенти
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a></li>

                    </ul>
                </div>

            </div>
            <div class="span9">
                <a href="teacher_add_class.php" class="btn btn-success"><i class="icon-plus-sign icon-large"></i>&nbsp;Додати клас</a>
                <br></br>
                <div class="hero-unit-3">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong><i class="icon-user icon-large"></i>&nbsp;Таблиця класу</strong>
                        </div>
                        <thead>
                            <tr>

                                <th>Клас</th>
                                <th>Предмет</th>
                                <th>Дія</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = mysqli_query($conn,"select * from class where teacher_id = '$session_id'") or die(mysqli_error());
                            while ($row = mysqli_fetch_array($query)) {
                                $class_id = $row['class_id'];
                                ?>
                                <tr class="odd gradeX">
                                    <!-- script -->
                            <script type="text/javascript">
                                $(document).ready(function(){
                                    
                                    $('#d<?php echo $class_id; ?>').tooltip('show')
                                    $('#d<?php echo $class_id; ?>').tooltip('hide')
                                });
                            </script>
                            <!-- end script -->
                         
                            <script type="text/javascript">
                                $(document).ready(function(){
                                    
                                    $('#v<?php echo $class_id; ?>').tooltip('show')
                                    $('#v<?php echo $class_id; ?>').tooltip('hide')
                                });
                            </script>
                            <!-- end script -->

                            <td><a rel="tooltip"  title="View Class" id="v<?php echo $class_id; ?>"  href="class.php<?php echo '?id='.$class_id; ?>" class="btn btn-info">&nbsp;<i class="icon-group icon-large"></i>&nbsp;<?php echo $row['course_id']; ?></a></td>
                            <td><?php echo $row['subject_id']; ?></td> 

                            <td width="50">
                                <a rel="tooltip"  title="Delete Subject" id="d<?php echo $class_id; ?>" href="#course_id<?php echo $class_id; ?>" role="button"  data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;</a>
                               
                            </td>
                            <!-- user delete modal -->
                            <div id="course_id<?php echo $class_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-header">
                                </div>
                                <div class="modal-body">
                                    <div class="alert alert-danger">Ви впевнені, що хочете <strong>Видалити</strong>&nbsp; цей клас?</div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Закрити</button>
                                    <a href="delete_class.php<?php echo '?id=' . $class_id; ?>" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Видалити</a>
                                </div>
                            </div>
                            <!-- end delete modal -->

                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                    <!-- end slider -->
                </div>
            </div>

        </div>
        <?php include('footer.php'); ?>
    </div>
</div>
</div>

</body>
</html>


