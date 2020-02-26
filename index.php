<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">    
            
    <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-7 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Registration</div>
            </div> 
            <div class="panel-body" >
</head>
<body>
   <div class="container">
    <form action="handling.php" method="POST" id="nameform">
      <div class="Name">
      <label for="fname">Fullname:</label>
      <input type="text" id="fname" required name="fname" placeholder="Firstname"> 
      <input type="text" id="lname" required name="lname" placeholder="Lastname"> 
      <input type="text" id="mname" required name="mname" placeholder="Middelname">
    </div>
    <br>
    <div class="Address">
        <label for="address">Address:</label>
        <input type="text" id="address" name="Address" required placeholder="Address">
    </div>
    <br>
    <div class="Birth">
      <label for="Birth">Place of Birth:</label>
      <input type="text" id="birth" name="Birth" required placeholder="Place of birth">
      <label for="birthda">Date of Birth:</label>
      <input type="date" id="birthday" name="birthday" value="2020-01-01">
    </div>
    <br>
    <div class="Gender">
      <label for="name">Gender:</label>
      <input type="radio" id="male" name="gender" value="male" checked>
      <label for="male">Male</label>
      <input type="radio" id="female" name="gender" value="female">
      <label for="female">Female</label>
    </div>
    <br>
    <div class="guardian">
      <label for="guardian">Guardian:</label>
      <input type="text" id="guardian" name="guardian" required placeholder="Fullname">
    </div>
    <br>
    <div class="contact">
      <label for="contact">Contact Number:</label>
      <input type="text" id="contact" value="+63" pattern="[+0-9]{13}" name="contact" required>
    </div>
    <br>
    <div class="status">
      <label for="status">Civil Status:</label>
      <input type="status" id="status" name="status" required placeholder="Status">
    </div>
    <br>
    <div class="school">
      <label for="schyr">School Year:</label> 
      <input type="text" id="schyr" name="schyr" placeholder="School year">
      <label for="schyr">Course:</label>
      <select id="course" name="course">
        <option value="BSIT">BSIT</option>
        <option value="BSDS">BSDS</option>
        <option value="BSTCM">BSTCM</option>
        <option value="BSCPE">BSCPE</option>

      </select>
      <label for="schyr">Year Level:</label>
      <select id="schyr" name="year">
        <option value="1st">First Year</option>
        <option value="2nd">Second Year</option>
        <option value="3rd">Third Year</option>
        <option value="4th">Fourth Year</option>
      </select>
    </div>

    <br>

    <div class="submit">
      <input type="submit" value="Submit" name="butn">
    </div>
    </form>
    </div>
</body>
</html>