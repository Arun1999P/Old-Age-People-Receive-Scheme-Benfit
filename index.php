<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Rural People Website</title>
	<link rel="stylesheet" href="style.css">
						

</head>
<body>
	<div>
		<div class="navImage">
			<img src="Nav.png" alt="" width="100%" height="80px">
		</div>
		<div class="navText">
			<nav class="navbar">
				<ul>	
					<li><a class="active" href="#">Home</a></li>
					<li><a href="About Us.html">About Us</a></li>
					<li><a href="Guidelines.html">Guidelines</a></li>
					<li><a href="Reports.html">Reports</a></li>
					<li><a href="FAQ.html">FAQ</a></li>
					<li><a href="Contact us.html">Contact us</a></li>
					<li><a href="Gallery.html">Gallery</a></li>
					<li><a href="inde.php">Apply</a></li>
				</ul>
			</nav>
		</div>
		<div>
			<marquee width="60%" direction="Left" height="100px">
				“Beware of fraudulent emails sent from non government domains. Please do not trust mails except from gov.in and nic.in domains.”
				</marquee>
	
		</div>
	</div>
			
			<section>
				
					<div class="w3-content" style="max-width:800px;" >
						<img class="mySlides" src="image 4.jpg" style="width:100%">
						<img class="mySlides" src="image 1.jpg" style="width:100%">
						<img class="mySlides" src="image 2.jpeg" style="width:100%">
						<img class="mySlides" src="image 3.jpg" style="width:100%">
						<img class="mySlides" src="image.jpg" style="width:100%">
					
					  </div>
				
			</section>


			  <script>
				var myIndex = 0;
				carousel();
				
				function carousel() {
				  var i;
				  var x = document.getElementsByClassName("mySlides");
				  for (i = 0; i < x.length; i++) {
					x[i].style.display = "none";  
				  }
				  myIndex++;
				  if (myIndex > x.length) {myIndex = 1}    
				  x[myIndex-1].style.display = "block";  
				  setTimeout(carousel, 2000); // Change image every 2 seconds
				}
				</script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<form name="statedashboardForm" method="POST" action="/statedashboard.html">
	<div id="printPage" style="overflow-x:hidden!important ;width:100%; margin-top: 100px;background-color:pink">
					
		<h3 class="secondary-heading">
			TOTAL BENEFICIARY IN TAMIL NADU
		</h3>
		<!-- Summary tabs -->
		<div class="summary-tabs p-0" style="background-color:pink">
			<ul class="nav mx-0 p-0 nav-jus tified md-tabs bg-pink" role="tablist">
				 
				<li class="nav-item note note-danger col-xs-6 col-md-3 col-lg-2 my-1">
					<a class="nav-link btn-outline-danger waves-effect w-100 text-center"><h4 class="mb-0">
							1939303
						</h4>State Cap</a>
				</li>
				
				<li class="nav-item note note-primary col-xs-6 col-md-3 col-lg-2 my-1">
					<a class="nav-link btn-outline-primary waves-effect w-100 text-center">
						<h4 class="mb-0">
							1620477
						</h4>Total Beneficiary
				</a>
				</li>
				<li class="nav-item note note-secondary col-xs-6 col-md-3 col-lg-2 my-1">
					<a class="nav-link btn-outline-default waves-effect w-100 text-center"><h4 class="mb-0">
							1592409
						</h4>Total Bank A/C</a>
				</li>
				<li class="nav-item note note-secondary col-xs-6 col-md-3 col-lg-2 my-1">
					<a class="nav-link btn-outline-secondary waves-effect w-100 text-center"><h4 class="mb-0">
							0
						</h4>Total P.O A/C</a>
				</li>
				<li class="nav-item note note-success col-xs-6 col-md-3 col-lg-2 my-1">
					<a class="nav-link btn-outline-success waves-effect w-100 text-center"><h4 class="mb-0">
							28068
						</h4>Total M.O A/C</a>
				</li>
				<li class="nav-item note note-info col-xs-6 col-md-3 col-lg-2 my-1">
					<a class="nav-link btn-outline-info waves-effect w-100 text-center"><h4 class="mb-0">
							0
						</h4>Total Cash A/C</a>
				</li>
				
				<li class="nav-item note note-primary col-xs-6 col-md-3 col-lg-2 my-1">
					<a class="nav-link btn-outline-primary waves-effect w-100 text-center"><h4 class="mb-0">
							747149
						</h4>Total Aadhar</a>
				</li>
				
				<li class="nav-item note note-secondary col-xs-6 col-md-3 col-lg-2 my-1">
					<a class="nav-link btn-outline-secondary waves-effect w-100 text-center"><h4 class="mb-0">
							0
						</h4>Paid Through DBT</a>
				</li>
				<li class="nav-item note note-success col-xs-6 col-md-3 col-lg-2 my-1">
					<a class="nav-link btn-outline-success waves-effect w-100 text-center"><h4 class="mb-0">
							652699
						</h4>Male</a>
				</li>
				<li class="nav-item note note-info col-xs-6 col-md-3 col-lg-2 my-1">
					<a class="nav-link btn-outline-info waves-effect w-100 text-center"><h4 class="mb-0">
							967715
						</h4>Female</a>
				</li>
				<li class="nav-item note note-danger col-xs-6 col-md-3 col-lg-2 my-1">
					<a class="nav-link btn-outline-danger waves-effect w-100 text-center"><h4 class="mb-0">
							63
						</h4>Transgender</a>
				</li>
				
			</ul>
				
</body>
</html>