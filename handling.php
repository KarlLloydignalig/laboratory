

<?php

    $fname = $_POST["fname"]; 
    $lname = $_POST["lname"]; 
    $mname = $_POST["mname"]; 
    $Address = $_POST["Address"];
    $Birth = $_POST["Birth"];
    $birthday = $_POST["birthday"];
    $gender = $_POST["gender"];
    $guardian = $_POST["guardian"];
    $contact = $_POST["contact"];
    $status = $_POST["status"];
    $schyr = $_POST["schyr"];
    $course = $_POST["course"];
    $year = $_POST["year"];

function isEmpty($mname,$Address,$Birth,$guardian,$contact,$status,$year){
    
  return (trim(strlen($mname)) < 1) && (trim(strlen($Address)) < 1) && (trim(strlen($Birth)) < 1) && (trim(strlen($guardian)) < 1) && (trim(strlen($contact)) < 1) && (trim(strlen($status)) < 1) (trim(strlen($year)) < 1);
}
function isNumberValid($contact){
  return preg_match_all('/(^\+?63(?!.*-.*-)(?!.*\+.*\+)(?:\d(?:-)?){10}$)|(^09(?!.*-.*-)(?!.*-.*-)(?:\d(?:-)?){9}$)/', $contact);
}
function isNameValid($fname, $lname){
  return (trim(strlen($fname)) > 1) && (trim(strlen($lname)) > 1);
}

if(isEmpty($mname,$Address,$Birth,$guardian,$contact,$status,$year)){
    echo "Empty field";
}
else if(!isNumberValid($contact)){
  echo "Invalid Number";
}
else if(!isNameValid($fname, $lname)){
  echo "Invalid Name";
}
else {
  echo "Login Successfuly<br><br>";
  echo "Name: $fname $mname $lname <br>";
  echo "Address: $Address <br>";
  echo "Place of Birth: $Birth <br>";
  echo "Date of Birth: $birthday <br>";
  echo "Gender: $gender <br>";
  echo "Guardian: $guardian <br>";
  echo "Contact No.: $contact <br>";
  echo "Status: $status <br>";
  echo "Year Level: $year <br>";
  echo "Course: $course <br>";
  echo "School Year: $schyr <br>";
}
echo "<br><a href='index.php'>Go Back</a>";
?>