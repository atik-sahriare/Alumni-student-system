			
			<nav class="navbar" >
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
						
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					 <ul class="nav navbar-nav" >
						<li ><a class="nav-in" href="index.php"><span data-letters="Home">Home</span></a> </li>
						<?php
						if(!isset($_SESSION["type"]))
						{
					      ?>
						<li ><a class="nav-in" href="about.php"><span data-letters="About">About</span></a> </li> 
						<li><a class="nav-in" href="event.php"><span data-letters="Events">Events</span></a></li>
						<li><a class="nav-in" href="gallery.php"><span data-letters="Gallery">Gallery</span></a></li> 
						<li><a class="nav-in" href="login.php"><span data-letters="Login">Login</span></a></li>
						<li><a class="nav-in" href="reg.php"><span data-letters="New Alumni">New Alumni</span></a></li>
						<li><a class="nav-in" href="staffreg.php"><span data-letters="New Staff">New Staff</span></a></li>
						<li><a class="nav-in" href="studentreg.php"><span data-letters="New Student">New Student </span></a></li>
						<li><a class="nav-in" href="contact.php"><span data-letters="Contact">Contact</span></a></li>
						<?php
						}
						else if(isset($_SESSION["type"]) && $_SESSION['type'] == 'admin')
						{
						?>
							<li><a class="nav-in" href="addadmin.php"><span data-letters="New Admin">New Admin</span></a></li>
							<li><a class="nav-in" href="managecourse.php"><span data-letters="Manage Course">Manage Course</span></a></li>
							<li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Verify<span class="caret"></span></a>
							  <ul class="dropdown-menu">
								<li><a href="verify_reg.php" style='color:black'><span data-letters="Alumni">Alumni</span></a></li>
								<li><a href="verify_staff.php" style='color:black'><span data-letters="Staff">Staff</span></a></li>
								<li><a href="verify_student.php" style='color:black'><span data-letters="Student">Student</span></a></li>
							  </ul>
							</li>
							 <li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events<span class="caret"></span></a>
							  <ul class="dropdown-menu">
								<li><a href="alumnimeet.php" style='color:black'><span data-letters="Add">Add</span></a></li>
								<li><a href="manage_events.php" style='color:black'><span data-letters="View/Update">View/Update</span></a></li>
							  </ul>
							</li>
								<li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery<span class="caret"></span></a>
							  <ul class="dropdown-menu">
							  <li><a href="gallery.php" style='color:black'><span data-letters="View Gallery">View Gallery</span></a></li>
								<li><a href="alumnigallery.php" style='color:black'><span data-letters="Update Gallery">Update Gallery</span></a></li>
							  </ul>
							</li>
						<li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Office Bearers<span class="caret"></span></a>
							  <ul class="dropdown-menu">
							  	<li><a href="region.php" style='color:black'><span data-letters="Add Region">Add Region</span></a></li>
								<li><a href="regionoffice.php" style='color:black'><span data-letters="Add">Add Office Bearears</span></a></li>
								<li><a href="alumnioffice.php" style='color:black'><span data-letters="View/Update">View/Update</span></a></li>
							  </ul>
							</li>
							<li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Fund<span class="caret"></span></a>
							  <ul class="dropdown-menu">
							  	<li><a href="viewfund.php" style='color:black'><span data-letters="View Collection">View Collection</span></a></li>
								<li><a href="invest.php" style='color:black'><span data-letters="Update Investment">Update Investment</span></a></li>
								<li><a href="viewinvest.php" style='color:black'><span data-letters="View Investment">View Investment</span></a></li>
								<li><a href="renew.php" style='color:black'><span data-letters="View Investment">Take Alumni Membership</span></a></li>
								<li><a href="viewmembership.php" style='color:black'><span data-letters="View Investment">Alumni Membership Info</span></a></li>
								
							  </ul>
							</li>
						 
								<li><a class="nav-in" href="verifyjob.php"><span data-letters="Job Postings">Job Postings</span></a></li>
								
								<li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Training<span class="caret"></span></a>
							  <ul class="dropdown-menu">
								<li><a href="training.php" style='color:black'><span data-letters="Add">Add</span></a></li>
								<li><a href="viewtraining.php" style='color:black'><span data-letters="View/Update">View/Update</span></a></li>
							  </ul>
							</li>
							<li><a class="nav-in" href="feedback.php"><span data-letters="Feedback">Feedback</span></a></li>
							<li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account<span class="caret"></span></a>
							  <ul class="dropdown-menu">
								<li><a href="changepass.php" style='color:black'><span data-letters="Change Password">Change Password</span></a></li>
								<li><a href="logout.php" style='color:black'><span data-letters="Logout">Logout</span></a></li>
							  </ul>
							</li>
						
						<?php
						}
						else if(isset($_SESSION["type"]) && $_SESSION['type'] == 'alumni')
						{
						?>
								<li><a class="nav-in" href="event.php"><span data-letters="Events">Events</span></a></li>
							<li><a class="nav-in" href="job.php"><span data-letters="Jobs">Jobs</span></a></li>
								<li><a class="nav-in" href="search.php"><span data-letters="Friends">Friends</span></a></li>
							<li><a class="nav-in" href="officesearch.php"><span data-letters="Office Bearers">Office Bearers</span></a></li>
							<li><a class="nav-in" href="viewtraining.php"><span data-letters="Training">Training</span></a></li>
							
							<li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Fund<span class="caret"></span></a>
							  <ul class="dropdown-menu">
							  	<li><a href="raisefunds.php" style='color:black'><span data-letters="Donate Fund">Donate Fund</span></a></li>
								<li><a href="viewfund.php" style='color:black'><span data-letters="View Donations">View Donations</span></a></li>
								<li><a href="viewinvest.php" style='color:black'><span data-letters="View Utilized Fund">View Utilized Fund</span></a></li>
								<li><a href="renew.php" style='color:black'><span data-letters="View Investment">Take Alumni Membership</span></a></li>
								<li><a href="viewmembership.php" style='color:black'><span data-letters="View Investment">Alumni Membership Info</span></a></li>
							  </ul>
							</li>
							<li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery<span class="caret"></span></a>
							  <ul class="dropdown-menu">
							  <li><a href="gallery.php" style='color:black'><span data-letters="View Gallery">View Gallery</span></a></li>
								<li><a href="alumnigallery.php" style='color:black'><span data-letters="Update Gallery">Update Gallery</span></a></li>
							  </ul>
							</li>
							<li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account<span class="caret"></span></a>
							  <ul class="dropdown-menu">
							  <li><a href="alumniprofile.php" style='color:black'><span data-letters="Update Profile">Update Profile</span></a></li>
								<li><a href="changepass.php" style='color:black'><span data-letters="Change Password">Change Password</span></a></li>
								<li><a href="logout.php" style='color:black'><span data-letters="Logout">Logout</span></a></li>
							  </ul>
							</li>
						<?php
						}
						else if(isset($_SESSION["type"]) && $_SESSION['type'] == 'student')
						{
						?>
								<li><a class="nav-in" href="event.php"><span data-letters="Events">Events</span></a></li>
							<li><a class="nav-in" href="job.php"><span data-letters="Jobs">Jobs</span></a></li>
								<li><a class="nav-in" href="search.php"><span data-letters="Friends">Friends</span></a></li>
							<li><a class="nav-in" href="officesearch.php"><span data-letters="Office Bearers">Office Bearers</span></a></li>
							<li><a class="nav-in" href="viewtraining.php"><span data-letters="Training">Training</span></a></li>
							
							<li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Fund<span class="caret"></span></a>
							  <ul class="dropdown-menu">
							  	<li><a href="raisefunds.php" style='color:black'><span data-letters="Donate Fund">Donate Fund</span></a></li>
								<li><a href="viewfund.php" style='color:black'><span data-letters="View Donations">View Donations</span></a></li>
								<li><a href="viewinvest.php" style='color:black'><span data-letters="View Utilized Fund">View Utilized Fund</span></a></li>
							  </ul>
							</li>
							<li><a class="nav-in" href="gallery.php"><span data-letters="Friends">Gallery</span></a></li>
							<li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account<span class="caret"></span></a>
							  <ul class="dropdown-menu">
							  <li><a href="studentprofile.php" style='color:black'><span data-letters="Update Profile">Update Profile</span></a></li>
								<li><a href="changepass.php" style='color:black'><span data-letters="Change Password">Change Password</span></a></li>
								<li><a href="logout.php" style='color:black'><span data-letters="Logout">Logout</span></a></li>
							  </ul>
							</li>
						<?php
						}
						else if(isset($_SESSION["type"]) && $_SESSION['type'] == 'staff')
						{
						?>
							<li><a class="nav-in" href="job.php"><span data-letters="Jobs">Jobs</span></a></li>
							<li><a class="nav-in" href="event.php"><span data-letters="View Events">View Events</span></a></li>
							<li><a class="nav-in" href="officesearch.php"><span data-letters="Office Bearers">Office Bearers</span></a></li>
							<li><a href="renew.php" style='color:black'><span data-letters="View Investment">Take Alumni Membership</span></a></li>
								<li><a href="viewmembership.php" style='color:black'><span data-letters="View Investment">Alumni Membership Info</span></a></li>
							<li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery<span class="caret"></span></a>
							  <ul class="dropdown-menu">
							  <li><a href="gallery.php" style='color:black'><span data-letters="View Gallery">View Gallery</span></a></li>
								<li><a href="alumnigallery.php" style='color:black'><span data-letters="Update Gallery">Update Gallery</span></a></li>
							  </ul>
							</li>
							<li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account<span class="caret"></span></a>
							  <ul class="dropdown-menu">
							  <li><a href="staffprofile.php" style='color:black'><span data-letters="Update Profile">Update Profile</span></a></li>
								<li><a href="changepass.php" style='color:black'><span data-letters="Change Password">Change Password</span></a></li>
								<li><a href="logout.php" style='color:black'><span data-letters="Logout">Logout</span></a></li>
							  </ul>
							</li>
						<?php
						}
						?>
							
					</ul>
					 	</div><!-- /.navbar-collapse -->
					
				</nav>
				