<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $username = $_POST["username"]; 
   $password = $_POST["password"];
	
   if ($username === "admin" && $password === "admin") {	 
        echo "<h2>Welcome <span style='color:red'>" .$username. "</span> to website</h2>";
   } else{
        echo "<h2><span style='color:red'>Login Error</span></h2>";
   }
}
?>