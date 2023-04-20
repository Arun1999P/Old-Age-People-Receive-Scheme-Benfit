<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$conn = mysqli_connect('localhost', 'root', '', 'tutorial') or die("Connection failed: " . mysqli_connect_error());
	if (isset($_POST['sentForm'])) {
		if (isset($_POST['state']) && isset($_POST['village']) && isset($_POST['sname']) && isset($_POST['bname']) && isset($_POST['hname']) && isset($_POST['age']) && isset($_POST['gender']) && isset($_POST['dob']) && isset($_POST['bc']) && isset($_POST['ai']) && isset($_POST['dc']) && isset($_POST['ci']) && isset($_POST['en']) && isset($_POST['hn'])) {
			$state = $_POST['state'];
			$village = $_POST['village'];
			$sname = $_POST['sname'];
			$bname = $_POST['bname'];
			$hname = $_POST['hname'];
			$age = $_POST['age'];
			$gender = $_POST['gender'];
			$dob = $_POST['dob'];
			$bc = $_POST['bc'];
			$ai = $_POST['ai'];
			$dc = $_POST['dc'];
			$ci = $_POST['ci'];
			$en = $_POST['en'];
			$hn = $_POST['hn'];
			$sql = "INSERT INTO `users` (`STATE`,`VILLAGE`,`SNAME`,`BNAME`,`HNAME`,`AGE`,`GENDER`,`DOB`,`BC`,`AI`,`DC`,`CI`,`EN`,`HN`) VALUES ('$state', '$village', '$sname', '$bname', '$hname', '$age', '$gender', '$dob', '$bc', '$ai', '$dc', '$ci', '$en', '$hn')";
			$query = mysqli_query($conn, $sql);
			if ($query) {
				echo 'Data Successfully Saved! <a href="index.php">Back to form.</a>';
			} else {
				echo "An error occurred while saving the data.";
			}
		}
	}
}

