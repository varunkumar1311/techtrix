<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: black;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>	
<link rel="stylesheet" type="text/css" href="biet.css">

</head>
<body>
<div align="center">
    <div id="header">      
            <div id="logo">
              <a href="index.html">
                <img src="logo.png" alt="logo" style="height: 110px; width: 900px;">

            </a>
            </div>
        </div>
              
        <div class="navbar">
            <a href="index.html">Home</a>
            <div class="dropdown">
                <a class="dropbtn">EVENTS
                      <i class="fa fa-caret-down"></i>
                  </a>
                <div class="dropdown-content">
                    <a href="techmaster.html">TECH MASTER</a>
                    <a href="ideapitching.html">IDEA PITCHING</a>
                    <a href="hauntedhouse.html">HAUNTED HOUSE</a>
                    <a href="posterpaperpresentation.html">POSTER&PAPER PRESENTATION</a>
                    <a href="bowlout.html">BOWL OUT</a>
                    <a href="code-a-thon.html">CODE-A-THON</a>
                    <a href="mockinterviews.html">MOCK INTERVIEWS</a>
                    <a href="vintagelook.html">VINTAGE LOOK</a>
                    <a href="houseoftalents.html">HOUSE OF TALENTS</a>
                    <a href="gameon.html">GAME ON</a>
                    <a href="sixthsense.html">SIXTH SENSE</a>
                  </div>
        </div>
        <a href="contact.html">Contact Us</a>

    </div>
  </div>
  <fieldset>
    <center><h1>Registered Students List</h1></center>
<table>
<tr>
<th>Id</th>
<th>Name</th>
<th>RollNo</th>
<th>Event</th>
<th>Gender</th>
<th>Email</th>
<th>Number</th>
<th>DOB</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "test");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM registration";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["Name"] . "</td><td>" . $row["RollNo"] . "</td><td>"
. $row["Event"] . "</td><td>"
. $row["gender"] . "</td><td>"
. $row["email"] . "</td><td>"
. $row["number"] . "</td><td>"
. $row["dob"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
<br><br>
<div class="center">
<a href="logout.php">Logout</a>
</div><br>
</fieldset>
</body>
</html>