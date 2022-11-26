<?php include('header.php'); ?>
<?php include('session.php'); ?>
<body>

    <div class="row-fluid">
        <div class="span12">
            <?php include('navbar.php'); ?>
            <div class="container">

                <div class="row-fluid">
                    <div class="span2">
                        <!-- left nav -->
                        <ul class="nav nav-tabs nav-stacked">

                            <li class="active">
                                <a href="add_course.php"><i class="icon-plus-sign-alt icon-large"></i>&nbsp;Додати курс</a>
                                <a href="course.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Назад</a>
                            </li>


                        </ul>
                        <!-- right nav -->
                    </div>
                    <div class="span10">
                        <div class="hero-unit-3">
                            <ul class="thumbnails">
                                <li class="span7">
                                    <div class="thumbnail">
                                        <div class="alert alert-info"><i class="icon-plus-sign-alt icon-large"></i>&nbsp;Додати запис про курс</div>
                                        <?php 
                                        if(isset($_GET['id'])){
                                            $course = mysqli_query($conn, "SELECT * FROM course where course_id = {$_GET['id']}");
                                            foreach(mysqli_fetch_array($course) as $k => $v){
                                                $$k = $v;
                                            }
                                        }
                                        ?>
                                        <form class="form-horizontal" method="POST">

                                            <input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : '' ?>">
                                            <div class="control-group">
                                                <label class="control-label" for="inputPassword">Рік і розділ курсу:</label>
                                                <div class="controls">
                                                    <input type="text" name="cc" id="inputPassword" value = "<?php echo isset($cys) ? $cys : '' ?>" placeholder="Рік і розділ курсу" required>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="inputPassword">Відділ:</label>
                                                <div class="controls">
            
                                                    <select name="cd" required>
                                                        <option><?php echo isset($department) ? $department : '' ?></option>
                                                        <?php 
                                                        $query=mysqli_query($conn,"select * from department");
                                                        while($row=mysqli_fetch_array($query)){
                                                            ?>
                                                        <option><?php echo $row['department']; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="inputPassword">Звання:</label>
                                                <div class="controls">
                                                    <input type="text" name="major" id="inputPassword" value = "<?php echo isset($major) ? $major : '' ?>" placeholder="Звання">
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <div class="controls">

                                                    <button type="submit" name="save" class="btn btn-info"><i class="icon-save icon-large"></i>&nbsp;Зберегти курс</button>
                                                </div>
                                            </div>
                                        </form>

                                        <?php
                                        if (isset($_POST['save'])) {


                                            $cc = $_POST['cc'];
                                            $cd = $_POST['cd'];
                                            $major = $_POST['major'];


                                            if(empty($_POST['id']))
                                            mysqli_query($conn,"insert into course (cys,department,major) values ('$cc','$cd','$major')") or die(mysqli_error());
                                            else
                                            mysqli_query($conn,"UPDATE course set cys = '$cc',department ='$cd' ,major = '$major' where course_id = {$_POST['id']}") or die(mysqli_error());
                                            echo('<script>location.href = "course.php"</script>');
                                        }
                                        ?>

                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <?php include('footer.php'); ?>
            </div>
        </div>
    </div>
</body>
</html>


