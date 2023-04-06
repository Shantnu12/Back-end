<!DOCTYPE html>
<html>
    <head>
        <Title>Rishton Academy Primary School</Title>
<!-- Main css Page -->
<link rel="stylesheet" href="index.css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    </head>
    <body>


    <?php


$link = mysqli_connect("localhost", "root", "", "shantanu");

if ($link == false) {
    die("Connection Failed: ");
}


if (isset($_POST['submit'])) {
    $fname = $_POST['first-name'];
    $lname = $_POST['last-name'];
    $bg = $_POST['bg'];
    $bd = $_POST['date-of-birth'];
    $gen = $_POST['gender'];
    $par = $_POST['parent'];
    $class = $_POST['class'];



    $sql = "INSERT INTO students (SFname,SLname,Sbloodgroup,Sbirthday,Sgender,Pid,Cid)
         VALUES ('$fname','$lname','$bg','$bd','$gen','$par','$class')";

    if (mysqli_query($link, $sql)) {
        echo "<b>The Student has been Enroled Successfully</b> ";
    } else {
        echo "<b>Error Adding New Record.</b>";
    }
}



?>



    <header>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <!-- For logo and home   Index link -->
                    <a class="navbar-brand" href="index.html">Rishton Academy Primary School</a>
                  </div>
                  <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <!-- For Students -->
                      <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="">Students<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="student.php">Student Portal</a></li>
                          <li><a href="View_student.php">view Student</a></li>
                          
                        </ul>
                      </li>
                      <!-- FOr Parents... -->
                      <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="">Parents<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="parents.php">Parent Portal</a></li>
                          <li><a href="view_parents.php">View Parents</a></li>
                          
                        </ul>
                      </li>
                      <!-- Foer TEachers -->
                      <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="">Teachers<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="teachers.php">Teacher Portal</a></li>
                          <li><a href="view_teachers.php">Staff Directory</a></li>
                        </ul>
                      </li>
                      <!-- For Classes  -->


                      <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="">Classes<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="classes.php">Join Classes</a></li>
                          <li><a href="view_classes.php">VIew Classes</a></li>
                         
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
              
        </header>
 
        <h1>
            Rishton Academy Primary School
        </h1>


        <form id="enrollment-form" action="student.php" method="post">
            
        <label for="first-name">First Name:</label>
            <input type="text" id="first-name" name="first-name" required><br>
            
            <label for="last-name">Last Name:</label>
            <input type="text" id="last-name" name="last-name" required><br>

            <label for="bg">Blood Group:</label>
            <input type="text" id="bg" name="bg" required><br>
            
            <label for="date-of-birth">Date of Birth:</label>
            <input type="date" id="date-of-birth" name="date-of-birth" required><br>
            
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
              <option value="">Select Gender</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">Other</option>
            </select><br>
            <br>
                        <label>Parent</label><br>
                        <select name="parent"><br>
                            <option value="select">Select</option>

                            <?php

                            $sql = mysqli_query($link, "SELECT Pid, PFname, PLname FROM parents");


                            while ($row = $sql->fetch_assoc()) {
                                echo "<option value='{$row['Pid']}'>{$row['Pid']}  {$row['PFname']}  {$row['PLname']} </option>";
                            }

                            ?>

                        </select>
                        <br>


                        <label>Class</label><br>
                        <select name="class"><br>
                            <option value="select">Select</option>

                            <?php

                            $sql = mysqli_query($link, "SELECT Cid, Cname, Room_number FROM class");


                            while ($row = $sql->fetch_assoc()) {
                                echo "<option value='{$row['Cid']}'>{$row['Cid']}  {$row['Cname']}  {$row['Room_number']} </option>";
                            }

                            ?>

                        </select>




                        
                        <br>

            
            
            
            
            <!-- Other details here -->
            
            <button name="submit" type="submit">Submit</button>
          </form>
          
          


<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h4>Contact Us</h4>
        <p>Rishton Academy Primary School</p>
        <p>12 Main Street</p>
        <p>Manchester, M16 56T</p>
        <p>Phone: (+44) 456-7890</p>
        <p>Email: info@rishtonacademy.edu</p>
      </div>
      <div class="col-md-4">
        <h4>About Us</h4>
        <p>Rishton Academy Primary School is a private school that provides quality education to students from Reception Year to sixth Year.</p>
      </div>
      <div class="col-md-4">
        <h4>Copyright &copy; 2023 Rishton Academy Primary School. All rights reserved.</h4>
      </div>
    </div>
  </div>
</footer>


    </body>
</html>