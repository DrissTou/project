<div style="text-decoration: none;"><nav class="navbar navbar-expand-lg navbar-dark " style="border-radius:0px;font-family:Arial;background:#193948;color;white;font: 15px arial, sans-serif;font-weight: bold;margin-bottom:0px;">
<img src="img/logo.png" width="60" height="50" style="margin-left:15px;margin-top:6px;margin-bottom:6px;"/><a class="navbar-brand" href="#">AL WADIFA</a>
<div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/projetdefindetude/job%20portal1/jobportal">HOME <span class="sr-only">(current)</span></a>
        	<?php 
                
               if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
                if(isset($_SESSION['login_user']))  { 
                    $myusername = $_SESSION['login_user'];
   echo ' <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">'.$myusername.'<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="seekerAccount.php">My Profile</a></li>
             <li><a href="AppliedJobs.php">Jobs Applied</a></li>
             <li><a href="logout.php">Logout</a></li>
       
          </ul>
        </li>';
 }
 if(isset($_SESSION['login_employer']))  
 {
                    $myusername = $_SESSION['login_employer'];
   echo ' <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">'.$myusername.'<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="employerAccount.php">My Account</a></li>
             <li><a href="postjob.php">Post a job</a></li>
              <li><a href="ViewApplicants.php">View Applications</a></li>
            <li><a href="logout.php">Logout</a></li>
       
          </ul>
        </li>';
 }
 elseif(!isset($_SESSION['login_employer']) && !isset($_SESSION['login_user']))
     {
   
    echo '<li class="nav-item"><a class="nav-link" id="loginAnchor" href="#" data-toggle="modal" data-target="#myEmployerModal">
    &nbsp;&nbsp;&nbsp;&nbsp; SIGNIN / SIGNUP &nbsp;&nbsp;&nbsp;&nbsp; 
</a></li>';
     
 }  ?>
         <li><a class="nav-link" href="#contactus">CONTACT US</a></li>
        </ul>
  </div>
  <img src="img/2.png" width="50" height="50"/>&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/7.png" width="50" height="50"/>&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/8.png" width="50" height="50"/>&nbsp;&nbsp;&nbsp;&nbsp;
</nav></div>
