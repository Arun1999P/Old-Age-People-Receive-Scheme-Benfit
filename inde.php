<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration</title>
	<style>
		body {
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
		}
		
		form {
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
			margin: auto;
			padding: 20px;
			max-width: 500px;
			width: 90%;
		}
		
		h2 {
			color: #333;
			margin: 0 0 10px;
			text-align: center;
		}
		
		label {
			display: block;
			font-size: 16px;
			margin: 10px 0;
		}
		
		input[type="text"],
		input[type="password"],
		input[type="email"] {
			border-radius: 3px;
			border: 1px solid #ccc;
			font-size: 16px;
			padding: 10px;
			width: 100%;
		}
		
		input[type="submit"] {
			background-color: #4CAF50;
			border: none;
			border-radius: 3px;
			color: #fff;
			cursor: pointer;
			font-size: 16px;
			margin-top: 20px;
			padding: 10px;
			width: 100%;
		}
		
		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
		
		@media (max-width: 767px) {
			form {
				margin-top: 20px;
			}
		}
	</style>
</head>
<body>
	<form action='register.php' method='POST'>
		<h2>Registration Form</h2>
		<label for="user">State/District/Block</label>
		<input type='text' name='state' id="state" required  />
		<label for="user">Name of Village Panchyat</label>
		<input type='text' name='village' id="village" required  />
		<label for="user">Society Name:</label>
		<input type='text' name='sname' id="sname"  required />
		<label for="user">Beneficiary's Name
      (First Name/ Husband)</label>
		<input type='text' name='bname' id="bname"  required />
		<label for="user">Heir's Name</label>
		<input type='text' name='hname' id="hname"  required />
		<label for="user">Age in years</label>
		<input type='text' name='age' id="age"  required />
		<label for="user">Gender</label>
		<input type='text' name='gender' id="gender"  required />
		<label for="user">Date of Birth </label>
		<input type='text' name='dob' id="dob"  required />
		<label for="user">Birth Certificate</label>
		<input type='text' name='bc' id="bc"  required />
		<label for="user">Annual Income and Certificate</label>
		<input type='text' name='ai' id="ai"  required />
		<label for="user">Domicile Certificate</label>
		<input type='text' name='dc' id="dc"  required />
		<label for="user">Certificate Issuance Date</label>
		<input type='text' name='ci' id="ci"  required />
		<label for="user">EPIC No</label>
		<input type='text' name='en' id="en"  required />
		<label for="user">House No</label>
		<input type='text' name='hn' id="hn"  required />
		<input type='submit' name='sentForm' id="sentForm" value="Submit"/>
	</form>
</body>
</html>

