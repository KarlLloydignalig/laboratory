<?php  
//set variable para null

function isEmpty($mname,$Address,$Birth,$guardian,$contact,$status,$year){
    
    return (trim(strlen($mname)) > 0) && (trim(strlen($Address)) > 0) && (trim(strlen($Birth)) > 0) && (trim(strlen($guardian)) > 0) && (trim(strlen($contact)) > 0) && (trim(strlen($status)) > 0) (trim(strlen($year)) > 0);
}
function isNumberValid($contact){
    return preg_match_all('/(^\+?63(?!.*-.*-)(?!.*\+.*\+)(?:\d(?:-)?){10}$)|(^09(?!.*-.*-)(?!.*-.*-)(?:\d(?:-)?){9}$)/', $contactNumber);
}
function isNameValid($fname, $lname){
    return (trim(strlen($fname)) > 1) && (trim(strlen($lname)) > 1);
}
?>