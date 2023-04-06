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


        <h2>See all Students</h2>

<table>

    <tr>
        <th width="150px">student ID<br>
            <hr>
        </th>
        <th width="250px">FName<br>
            <hr>
        </th>
        <th width="250px">LName<br>
            <hr>
        </th>
        <th width="150px">Blood Group<br>
            <hr>
        </th>
        <th width="250px">Date Of Birth<br>
            <hr>
        </th>
        <th width="150px">Parent id<br>
            <hr>
        </th>
        <th width="150px">Gender<br>
            <hr>
        </th>


        <th width="150px">Class id<br>
            <hr>
        </th>

    </tr>

    <?php
    /* 	function fetches a result row as an associative array.
          Note: Fieldnames returned from 
          this function are case-sensitive.
        */
    $sql = mysqli_query($link, "SELECT Sid,SFname,SLname,Sbloodgroup,Sbirthday,Sgender,Pid,Cid  FROM students");
    while ($row = $sql->fetch_assoc()) {
        echo "
        <tr>
            <th>{$row['Sid']}</th>
            <th>{$row['SFname']}</th>
            <th>{$row['SLname']}</th>
            <th>{$row['Sbloodgroup']}</th>
            <th>{$row['Sbirthday']}</th>
            <th>{$row['Sgender']}</th>
            <th>{$row['Pid']}</th>
            <th>{$row['Cid']}</th>
        </tr>";
    }
    ?>
          


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