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
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $occu = $_POST['occupation'];




    $sql = "INSERT INTO parents (PFname,PLname,Pnumber,Pemail,Poccupation)
         VALUES ('$fname','$lname','$phone','$email','$occu')";

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

  <!-- <form for parents -->

  <form action="parents.php" method="post" id="parent-form">
    <h2>Parent Enrollment Form</h2>

    <label for="first-name">First Name:</label>
    <input type="text" id="first-name" name="first-name" required>

    <label for="last-name">Last Name:</label>
    <input type="text" id="last-name" name="last-name" required>

    <label for="phone">Phone:</label>
    <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="occupation">Occupation</label>
    <input type="text" id="occupation" name="occupation" required>

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
          <p>Rishton Academy Primary School is a private school that provides quality education to students
            from Reception Year to sixth Year.</p>
        </div>
        <div class="col-md-4">
          <h4>Copyright &copy; 2023 Rishton Academy Primary School. All rights reserved.</h4>
        </div>
      </div>
    </div>
  </footer>


</body>

</html>