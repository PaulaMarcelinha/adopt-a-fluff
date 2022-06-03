<?php
// define variables and set to empty values
$fnameErr = $lnameErr = $bdateErr = $genderErr = $numAdultsErr = $childrenqErr = $petqErr = $propertyqErr = $gardenqErr = $grdnPOrSErr = $grdnSizeErr = $bedroomNumErr = $mainroadErr = $petsTypeErr = $adpMeetErr = $traitErr = "";
$fname = $lname = $bdate = $gender = $numAdults = $childrenq = $petq = $propertyq = $gardenq = $grdnPOrS = $grdnSize = $bedroomNum = $mainroad = $petsType = $adptMeet = $trait = "";

//errors for About You ************************************************************************************************************************

if ($_SERVER["REQUEST_METHOD"] == "POST") { //First Name
  if (empty($_POST["fname"])) {
    $fnameErr = " First Name is required";
  } else {
    $fname = test_input($_POST["name"]);
  }

  if (empty($_POST["lname"])) {           //Last Name
    $lnameErr = " Last Name is required";
  } else {
    $lname = test_input($_POST["name"]);
  }
  
  if (empty($_POST["bdate"])) {           //Birthday
    $bdateErr = " Please select your date of birth";
  } else {
    $bdate = test_input($_POST["name"]);
  }

  if (empty($_POST["gender"])) {           //Gender - not working as a dropdown box with a value
    $genderErr = " Please select gender you identify as";
  } else {
    $gender = test_input($_POST["name"]);
  }

  if (empty($_POST["numAdults"])) {           //Number of Adults  - not working as a dropdown box with a value
    $numAdultsErr = " Please select your date of birth";
  } else {
    $numAdults = test_input($_POST["name"]);
  }

  if (empty($_POST["childrenq"])) {           //Children in the household - not inline
    $childrenqErr = " Please select Yes or No";
  } else {
    $childrenq = test_input($_POST["name"]);
  }

  if (empty($_POST["petq"])) {           //Pets in the household - not inline
    $petqErr = " Please select Yes or No";
  } else {
    $petq = test_input($_POST["name"]);
  }
 
//Errors for About Your Home ******************************************************************************************************************************************

if (empty($_POST["propertyq"])) {           //Property rent/own/mortgage
  $propertyqErr = " Please select one";
} else {
  $propertyq = test_input($_POST["name"]);
}

if (empty($_POST["gardenq"])) {           //Garden Y or N
  $gardenqErr = " Please select Yes or No";
} else {
  $gardenq = test_input($_POST["name"]);
}

if (empty($_POST["gardenPorS"])) {           //Garden Private or shared
  $grdnPOrSErr = " Please select one";
} else {
  $grdnPOrS = test_input($_POST["name"]);
}

if (empty($_POST["gardensize"])) {           //garden size
  $grdnSizeErr = " Please select size";
} else {
  $grdnSize = test_input($_POST["name"]);
}

if (empty($_POST["bedrooms"])) {           //bedrooms
  $bedroomNumErr = " Please select a number";
} else {
  $bedroomNum = test_input($_POST["name"]);
}

if (empty($_POST["mainroad"])) {           //mainroad
  $mainroadErr = " Please select a number";
} else {
  $mainroad = test_input($_POST["name"]);
}

// About your potential new bestfriend ****************************************************************************************************************

if (empty($_POST["bfriendtick"])) {           //friend type
  $petsTypeErr = " Please select a type of friend";
} else {
  $petsType = test_input($_POST["name"]);
}

if (empty($_POST["adoption"])) {           //meeting
  $adpMeetErr = " Please select a number";
} else {
  $adptMeet = test_input($_POST["name"]);
}


}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>