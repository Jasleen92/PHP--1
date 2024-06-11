<?php

if(isset($_POST['Name'])){
$Server="localhost";
$username="root";
$password="";

$con = mysqli_connect($Server, $username, $password);
if (!$con) {
    die("connection to database is failed". mysqli_connect_error());
}


echo" connected successfully";

$Name=$_POST['Name'];
$S_ID=$_POST['S_ID'];
$Program=$_POST['Program'];
$Drsc=$_POST['Drsc'];
$Other=$_POST['Other'];
$sql="INSERT INTO `trip` (`S_no.`, `Name`, `S_ID`, `Program`, `Drsc.`, `Other`) VALUES ( '$Name','$S_ID','$Program','$Drsc', $Other')";
echo $sql; 

   // Execute the query
   if($con->query($sql) == true) {
    echo "New record created successfully";
} else {
    echo "Error:   $sql <br> $con->error";
}

// Close the connection
$con->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY FIRST PHP ASSIGNMENT </title>
</head>
<link rel="stylesheet" href="style.css">
<body>

<!--header of the page-->
<header>
    <h2> WECOME TO GEORGIAN@ILAC COLLEGE</h2>
    <h4 style="margin-left: 10%;"> MAKE THIS SUMMER MORE EXCITING WITH JUST YOU NEED IS !</h4>
    
</header>
    
<!--- body part of the page -->

<H5>  Fill this form and submit it to plan your trips and to make more exciting of this summer with GEROGIAN@ILAC</H5>
<div class="container">
    <form action="index.php" method="post">
        <input type="text" name="Name" id="Name"   placeholder="ENETR YOUR NAME ">
        <input type="text" name="S_ID" id="S_ID"   placeholder="ENETR YOur STUDENT-ID ">
        <input type="text" name="Program" id="Program"   placeholder="ENETR YOUR PROGRAM NAME ">

        <!--- checkboxes-->
         
<h4 style="color: blueviolet;"> <i> TICK OUT YOUR FAVOURITES AREAS</i></h4>
         <label> <input type="checkbox" value="options" name="options"> Museums </label><br>
            <label style="color:red;"> <input type="checkbox" value="options" name="class"> <b> Recreational areas</b> </label> <br>
                <label style="color: blue;"> <input type="checkbox" value="options" name="options"> Swimming areas</label><br>
                <label style="color: aqua;"> <input type="checkbox" value="options" name="options"> Library</label><br>
                <label style="color: lightseagreen;"> <input type="checkbox" value="options" name="options"> Ontario lake</label><br>

        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Your voice matters! Tell us about your most favourite areas to explore this summer."></textarea>
    </form>
    <input type="Reset" value="Reset">
    <input type="Submit" value="Submit">

 
       
    </div>
    <footer> 
        <P>  THANK YOU FOR YOUR RESPONSE</P>
    </footer>
     
</body>
</html>

 