<html>
  <head>
    <link rel="stylesheet" href="css/style.css"/>
    <title>Student Attendance</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/c3.css">
    <link rel="stylesheet" href="css/form.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/highcharts.js"></script>
    <script src="js/highcharts-exporting.js"></script>
    <script src="js/jquery.knob.js"></script>
    <script src="js/student.js"></script>
    <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
  </head>
  <body>
    <?php
      include('template/navbar.php');
    ?>
   <br><br><br>
    <div class="container">
      <div id="output"></div>
      <div class="wrapper">
        <div id="formContent">
          <h2 class='text-center'>Attendence Report</h2>
          <form id="getAttendance">
            <div class="form-group">
              <label>Year of course</label>
              <select name="year" class="form-control">
                <?php foreach(range(date('Y',time()),1983) as $r) echo '<option>'.$r.'</option>'; ?>
              </select>
            </div>

            <div class="form-group">
              <label>Section</label>
              <select name="section" class="form-control">
                <option>1</option><option>2</option><option>3</option>	
              </select>
            </div>

            <div class="form-group">
              <label>Subject Code of Course</label>
              <input type="text" class="form-control" name="code" placeholder="Eg - COE-216">
              <span class="help-block">DDD-NNN where D : Department , N : Number</span>
            </div>

            <div class="form-group">
              <label>Roll Number</label>
              <input type="text" class="form-control" name="roll" placeholder="Eg - 262/CO/12">
              <span class="help-block">N/DD/YY where N : Number, D : Department , Y : Year</span>
            </div>

            <div class="text-center">
              <button class="btn btn-primary">Get Results</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </body>
</html>
