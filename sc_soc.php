<!DOCTYPE html>
<html lang="en">
<head>
  <title>TU Societies</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="my_css_file.css">
  <script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "ab0a5b5b-28cb-43d0-8772-1b897bd3619d", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
                 <!--logo-->
                 <div class="navbar-header">
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 </button>
                 <a class="navbar-brand" href="index.html"><img src="logo.jpg" alt="TUSOC" class="img-responsive img-rounded"></a>
                 </div>
                <!--menu items-->
            <div class="collapse navbar-collapse" id="mainNavBar">
              <ul class="nav navbar-nav ">
                <li><a href="index.html#about">ABOUT</a></li>
                <li class= "active_opt"><a id="yes" href="#myPage">SOCIETIES</a></li>
                <li><a href="index.html#events">EVENTS</a></li>
                <li><a href="index.html#contact">CONTACT</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
				
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li><a data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <li><a data-toggle="modal" data-target="#signupModal"><span class="glyphicon glyphicon-user"></span> Signup</a></li>
                </ul>
                </li>
              </ul>
            </div>
</div>
</nav>
<div class="row bg-grey">
     <div class="col-md-12 col-xs-12" align="right">
     <b><br><br>THAPAR &nbsp;UNIVERSITY &nbsp;SOCIETIES &nbsp;AND &nbsp;EVENTS &nbsp;&nbsp;&nbsp;</b>
     </div>
</div>
<!-- Login Modal -->
<div class="modal fade" id="loginModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<!--header-->
            <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Log-in</h3>
			</div>
			<!--body-->
            <div class="modal-body">
				<form role="form">
                <div class="form-group">
					<input type="email" class="form-control" placeholder="Email">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" placeholder="Password">
				</div>
				</form>
			</div>
            <!--footer-->
            <div class="modal-footer">
                <button class="btn btn-primary btn-block">Submit</button>
            </div>
        </div>
    </div>
</div>
<!-- Signup Modal -->
<div class="modal fade" id="signupModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<!--header-->
            <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Signup</h3>
			</div>
			<!--body-->
            <div class="modal-body">
				<form role="form">
                <div class="form-group">
					<input type="text" class="form-control" placeholder="Name">
				</div>
				<div class="form-group">
					<input type="email" class="form-control" placeholder="E-mail id">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Roll No.">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" placeholder="Password">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" placeholder="Re-enter password">
				</div>
				</form>
			</div>
            <!--footer-->
            <div class="modal-footer">
                <button class="btn btn-primary btn-block">Submit</button>
            </div>
        </div>
    </div>
</div>
<br><br>

<div class="container">
     <br><br>
     <h1><u>Student Chapter</u> :</b></h1><br>
       <?php
       require 'index.php';
		$con=mysqli_connect("localhost","root","","tusoc");
		$query= "select * from sc_soc order by sc_id";
        $query_run= mysqli_query($con,$query);
       ?>
       <table class="table table-condensed">
    <thead><tr><th>Name</th><th>President</th><th>General Secretary</th></tr></thead><tbody>
    <?php
    while( $query_row= mysqli_fetch_assoc($query_run) )
       {
              $sc_id= $query_row['sc_id'];
              $sc_name= $query_row['sc_name'];
              $sc_president= $query_row['sc_president'];
              $sc_gensec= $query_row['sc_gensec'];

     echo "<tr><td>$sc_name</td><td>$sc_president</td><td>$sc_gensec</td></tr>";
       }
      ?>
      </tbody>
  </table>
  <br>
</div>

<div id="more" class=" container">
<h3 style="text-align:center"><strong><u>More Information</u></strong></h3><hr>
<table>
<tbody>
<tr><th>Indian Society of Technical Education (ISTE)</th><th> </th></tr>
<tr>
<td>Activities: Workshops, ISTE week</td>
<td><img style="margin-left:650px;" src="iste.jpg" width="200" height="160" /></td>
</tr>
<tr>
<td> </td>
<td>
</td>
</tr>
</tbody>
</table>
<p><strong>President : </strong>Dr. Rajesh Khanna</p>
<p><strong>General Secretary : </strong>Rajat Sahore</p>
<hr>

<table>
<tbody>
<tr><th>Institution of Engineering and Technology (IET)</th><th> </th></tr>
<tr>
<td>
IET aims at supporting the students to explore their professional and intellectural abilities, to develop their skills, increasing their competence, adopting the right attitude to maximize their potential and building a professional network that will help them to succeed in their professional endeavors.
Activities: Guest Lecture on Problems & Remedies re Power Systems, ArithMania, CAT W/s.
</td>
<td><img style="float: right;" src="iet.png" width="200" height="160" /></td>
</tr>
<tr>
<td> </td>
<td>
</td>
</tr>
</tbody>
</table>
<p><strong>President : </strong>Mrs. Manbir Kaur</p>
<p><strong>General Secretary : </strong>Aakirti Singla</p>
<hr>
<table>
<tbody>
<tr><th>Microsoft. Net Student Club</th><th> </th></tr>
<tr>
<td>
To provide opportunity to students to interact on a world-wide common platform, help students to gain competitive edge in the global scenario and in turn polishing them into globally accepted product.
Activities:MS Session, Lectures and Hands on Course in Visual Basic.Net .
</td>
<td><img src="micro.jpg" width="200" height="160" /></td>
</tr>
<tr>
<td> </td>
<td>
</td>
</tr>
</tbody>
</table>
<p><strong>President : </strong>Dr. Vinay Arora</p>
<p><strong>General Secretary : </strong>Gursimranjeet Singh</p>
<hr>
<table>
<tbody>
<tr><th>Institute Of Electronics And Telecommunication Engineers (IETE)</th><th> </th></tr> $nbsp;
<tr>
<td>Activities:CAT Workshop by R. Swami, an IIM-alumni and a motivational guru, War of the Physicist, Orcad& PCB design, Digi-War.</td>
<td><img style="margin-left:95px;" src="iete.jpeg" width="200" height="160" /></td>
</tr>
<tr>
<td> </td>
<td>
</td>
</tr>
</tbody>
</table>
<p><strong>President : </strong>Dr. Kulbir Singh</p>
<p><strong>General Secretary : </strong>Lovish Saluja</p>
<hr>
<table>
<tbody>
<tr><th>American Society of Heating Refrigeration and Air-Conditioning Engineers (ASHRAE)</th><th> </th></tr>
<tr>
<td>
ASHRAE (sometimes pronounced ash-ray), stands for the American Society of Heating, Refrigerating, and Air-Conditioning Engineers. Founded in 1894, it is a global society advancing human well-being through sustainable technology for the built environment. The Society and 
its more than 50,000 members worldwide focus on building systems, energy efficiency, indoor air quality, refrigeration and sustainability. Through research, standards writing, publishing, certification and continuing education, 
ASHRAE shapes tomorrow’s built environment today.
</td>
<td><img src="ashrae.jpg" width="200" height="160" /></td>
</tr>
<tr>
<td></td>
<td>
</td>
</tr>
</tbody>
</table>
<p><strong>President : </strong>Mr. Kundanlal</p>
<p><strong>General Secretary : </strong>Yuvraj</p>
<hr>
<table>
<tbody>
<tr><th>International Association of Students In Economics & Business Management (AIESEC)</th><th> </th></tr>
<tr>
<td>
AIESEC is an international, non-political, independent, not profit organization run by students and recent graduates of institutions of higher education. Each year since 1948 AIESEC has worked to fulfil the mission of developing young people to meet the challenges of the world, countries and local communities. Our vision for the organization , when we started off was "Peace and Fulfilment of Humankind’s Potential" and still remains the same.</td>
<td><img src="aisec.jpg" width="200" height="160" /></td>
</tr>
<tr>
<td> </td>
<td>
</td>
</tr>
</tbody>
</table>
<p><strong>President : </strong>Mr. Hitashi Lomash</p>
<p><strong>General Secretary : </strong>Shubham Gupta</p>
<hr>
<table>
<tbody>
<tr><th>OWASP Student Chapter</th><th> </th></tr>
<tr>
<td>
On 13th October, 2014, OWASP started off with events for the semester. Dr. Maninder Singh, Associate Professor, CSED, Thapar University, was invited to give a seminar on Information Security. He talked about the threats that we face in our day to day lives, the bigger picture of computer security and how a common person can keep himself secure in the age on internet. On 14th October, 2014 the society invited Dr. SastryTumuluri, IT Advisor and CISO, Government of Haryana to talk about web applications and its security. The seminar was made compulsory for 2nd and 3rd year B.E. Computer Engineering.</td>
<td><img src="owasp.jpeg" width="200" height="160" /></td>
</tr>
<tr>
<td> </td>
<td>
</td>
</tr>
</tbody>
</table>
<p><strong>President : </strong>Dr.Maninder Singh</p>
<p><strong>General Secretary : </strong>Chetan Gandotra</p>
<hr>
<table>
<tbody>
<tr><th>TU Tostmasters Club</th><th> </th></tr>
<tr>
<td>
Thapar Toastmasters Club, a chapter of Toastmasters International is an organization that helps its members to improve their public speaking, communication and leadership skills. A very juvenile club started in Thapar University in September and in a very short period the Club has 50 enthusiastic members who meet every Wednesday, not just to overcome their stage fear and improve their communication skills, but to become a better orator and a better leader for tomorrow.</td>
<td><img src="toast.jpg" width="200" height="160" /></td>
</tr>
<tr>
<td> </td>
<td>
</td>
</tr>
</tbody>
</table>
<p><strong>President : </strong>Dr. Rajeev Mehta</p>
<p><strong>General Secretary : </strong>Taresh Garg</p>

</div>


<!-- footer-->
<footer class="footer container-fluid text-center bg-grey">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
 </footer>
<script>

$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a#yes, footer a[href='#myPage']").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){
   
      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });

  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
</body>
</html>