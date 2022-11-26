<?php include('header.php'); ?>
<?php include('session.php'); ?>
<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar.php'); ?>

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">

                        <div class="hero-unit-3">
                            <a href="add_student.php" class="btn btn-success"><i class="icon-plus-sign icon-large"></i>&nbsp;Додати студента</a>
                            <br><br>
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Таблиця учнів</strong>
                                </div>
                                <thead>
                                    <tr>

                                        <th>Фото</th>
                                        <th>Ім'я</th>
                                        <th>Ім'я користувача</th>
                                        <th>Пароль</th>
                                        <th>Дія</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = mysqli_query($conn,"select * from student") or die(mysqli_error());
                                    while ($row = mysqli_fetch_array($query)) {
                                        $student_id = $row['student_id'];
                                        ?>


                                        <!-- script -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                                
                                            $('#e<?php echo $student_id; ?>').tooltip('show')
                                            $('#e<?php echo $student_id; ?>').tooltip('hide')
                                        });
                                    </script>
                                    <!-- end script -->
                                    <!-- script -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                                
                                            $('#d<?php echo $student_id; ?>').tooltip('show')
                                            $('#d<?php echo $student_id; ?>').tooltip('hide')
                                        });
                                    </script>
                                    <!-- end script -->


                                    <tr class="odd gradeX">
                                        <td width="40"><img  class="img-rounded" src="<?php echo $row['location']; ?>" height="50" width="30"></td>
                                        <td><?php echo   $row['lastname']. " " .$row['firstname'] . " " . $row['middle_name']; ?></td>

                                        <td><?php echo $row['username']; ?></td> 
                                        <td><?php echo $row['password']; ?></td> 

                                        <td width="100">
                                            <a rel="tooltip"  title="Видалити курс" id="d<?php echo $student_id; ?>" href="#course_id<?php echo $student_id; ?>" role="button"  data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                            <a rel="tooltip"  title="Редагувати курс" id="e<?php echo $student_id; ?>" href="add_student.php?id=<?php echo $row['student_id'] ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                                        </td>
                                        <!-- user delete modal -->
                                    <div id="course_id<?php echo $student_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-header">
                                        </div>
                                        <div class="modal-body">
                                            <div class="alert alert-danger">Ви впевнені, що хочете <strong>Видалити</strong>&nbsp; цього студента?</div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Закрити</button>
                                            <a href="delete_student.php<?php echo '?id=' . $student_id; ?>" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Видалити</a>
                                        </div>
                                    </div>
                                    <!-- end delete modal -->

                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <?php include('footer.php'); ?>
            </div>
        </div>
    </div>

</body>
</html>


