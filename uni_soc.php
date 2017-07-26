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
     <h1><u>University Societies</u> :</b></h1>
       <?php
       require 'index.php';
       $con=mysqli_connect("localhost","root","","tusoc");
	   $query= "select * from uni_soc order by uni_id";
       $query_run= mysqli_query($con,$query);
       ?>
       <table class="table table-condensed table-hover table-striped"  style="margin-top=5%;">
    <thead>
      <tr>
        <th>Name</th>
        <th>E-mail</th>
        <th>President</th>
        <th>General Secretary</th>
      </tr>
    </thead>
    <tbody>

    <?php
    while( $query_row= mysqli_fetch_assoc($query_run) )
       {
              $uni_id= $query_row['uni_id'];
              $uni_name= $query_row['uni_name'];
              $uni_email= $query_row['uni_email'];
              $uni_president= $query_row['uni_president'];
              $uni_gensec= $query_row['uni_gensec'];

     echo "<tr>
        <td>$uni_name</td>
        <td>$uni_email</td>
        <td>$uni_president</td>
        <td>$uni_gensec</td>
      </tr>";
       }
      ?>
      </tbody>
  </table>
  <br>
</div><br><br>
<div id="more" class=" container">
<h3 style="text-align:center"><strong><u>More Information</u></strong></h3><hr>
<table>
<tbody>
<tr><th>Games and Sports</th><th> </th></tr>
<tr>
<td>The University has several playgrounds and well-maintained athletic track to encourage the students to take part in different games such as Cricket, Hockey, Football, Basketball, Volleyball, Lawn Tennis and Badminton. The University has also a Gymnasium-cum-Badminton Hall and a Swimming Pool Complex equipped with all modern facilities.</td>

<td><img src="tusa.png" width="200" height="160" /></td>
</tr>
<tr>
<td> </td>
<td>
</td>
</tr>
</tbody>
</table>
<p><strong>Email address : </strong>sportssoc@thapar.edu</p>
<p><strong>President : </strong>Dr. Rajesh Kumar</p>
<p><strong>General Secretary : </strong>Mr. Lakhbir Singh</p>
<hr>
<table>
<tbody>
<tr><th>Literary Society</th><th> </th></tr>
<tr>
<td>
Literary Society is formed with objective to inculcate literacy tastes, improve oratorical, communication and subliminal skills. This Society also brings out the Instituted magazine.
Activities: Acumen, Mr. Punjabi & Miss Punjabi contest, Punjabi Play, Script writing, Eleixir Event, Choreography on Punjabi Poem, Group Discussion, Quiz, and University Magazine
</td>
<td><img style="float: right;" src="litsoc.jpeg" width="200" height="160" /></td>
</tr>
<tr>
<td> </td>
<td>
</td>
</tr>
</tbody>
</table>
<p><strong>Email address : </strong>litsoc@thapar.edu</p>
<p><strong>President : </strong>Dr. Apoorva Bakshi</p>
<p><strong>General Secretary : </strong>Hemank Sabharwal</p>
<hr>
<table>
<tbody>
<tr><th>Music And Dramatic Society(MUDRA)</th><th> </th></tr>
<tr>
<td>The objective of this society is to hone the extra-curricular skills of students in the area of Music, Dramatics and developing managerial prowess contributing towards their overall personality. It organizes several big events such as MUDRA night and, Izhaar.</td>
<td><img src="mudra.jpeg" width="200" height="160" /></td>
</tr>
<tr>
<td> </td>
<td>
</td>
</tr>
</tbody>
</table>
<p><strong>Email address : </strong>mudra@thapar.edu</p>
<p><strong>President : </strong>Dr D.P. Singh</p>
<p><strong>General Secretary : </strong>Shanbhu Sharma</p>
<hr>
<table>
<tbody>
<tr><th>Fine Arts and Photography Society (FAPS)</th><th> </th></tr>
<tr>
<td>Fine Arts and Painting Society provides a forum to the young budding engineers to give an expression to their varied talents in the field of Fine Arts, Painting, Sketching, Photography, etc.
Activities: Collage making, Painting Library wall, Diya Painting &Ganesha Decoration, Art Exhibition on paintings, sketches, photographs, handicrafts</td>
<td><img src="faps.jpeg" width="200" height="160" /></td>
</tr>
<tr>
<td> </td>
<td>
</td>
</tr>
</tbody>
</table>
<p><strong>Email address : </strong>faps@thapar.edu</p>
<p><strong>President : </strong>Dr. Ravi Kiran</p>
<p><strong>General Secretary : </strong>Ishika Kanoi</p>

<hr>
<table>
<tbody>
<tr><th>Youth Welfare Club (YWC)</th><th> </th></tr>
<tr>
<td> This society develops students’ personality through their exposure to the outer/adventurous activities, like: Inter-state site-seeing, Hiking and Trekking; Inter-state Cycling; Yoga; Talent-Hunt; painting, photography, public speaking, etc.
Activities: Lohri, BasantPaschmi, Fun Games, SaheedBhagat Singh, Sketch Workshop by Neeraj – BE Final Year student, Children Day Worhshop on Yoga, Rock Competition.
</td>

<td><img src="youth.jpg" width="200" height="160" /></td>
</tr>
<tr>
<td> </td>
<td>
</td>
</tr>
</tbody>
</table>
<p><strong>Email address : </strong> ywc@thapar.edu</p>
<p><strong>President : </strong>Sh. Rajeev Kumar</p>
<p><strong>General Secretary : </strong>Simranjot Singh</p>
<hr>
<table>
<tbody>
<tr><th>Society for Promotion of Indian Classical Music & Culture Amongst Youth (SPIC MACAY)</th><th> </th></tr>
<tr>
<td>
This society organizes functions throughout the country in which great artists give performances and demonstrate to students/youth the values of our culture through LECDEM Lectures.</td>
<td><img style="float: right;" src="macay.jpg" width="200" height="160" /></td>
</tr>
<tr>
<td> </td>
<td>
</td>
</tr>
</tbody>
</table>
<p><strong>Email address : </strong>spicmacay@thapar.edu</p>
<p><strong>President : </strong> Dr. Rajesh Khanna </p>
<p><strong>General Secretary : </strong>Amrinder Singh</p>
<hr>
<table>
<tbody>
<tr><th>Creative Computing Society</th><th> </th></tr>
<tr>
<td>
CCS society basic objective is to encourage students to actively participate in computer activities other than their curriculum.
Activities: Chakravayu, Quiz – 90 teams of 2 each, Algorithm mania, Web Hunt, Programming –Overnight & Long term
</td>
<td><img src="css.png" width="200" height="160" /></td>
</tr>
<tr>
<td> </td>
<td>
</td>
</tr>
</tbody>
</table>
<p><strong>Email address : </strong>ccs@thapar.edu</p>
<p><strong>President : </strong>Dr. Inderveer Chana</p>
<p><strong>General Secretary : </strong>Naman Ahuja</p>
<hr>
<table>
<tbody>
<tr><th>Thapar Alumni Student Committee (TASC)</th><th> </th></tr>
<tr>
<td>To apprise the students of their role in the development of the Institute, Promote/enhance campus placement projecting TIET appropriately, Establish rapport among the students, faculty and alumni in an effort to make the students feel proud of their Institute.
Activities: Freshers Guide; TnI issues-03, Digest, Idea 2008.
</td>
<td><img src="tasc.jpg" width="200" height="160" /></td>
</tr>
<tr>
<td> </td>
<td>
</td>
</tr>
</tbody>
</table>
<p><strong>Email address : </strong>tasc@thapar.edu</p>
<p><strong>President : </strong>Dr. N. K. Verma</p>
<p><strong>General Secretary : </strong>Katen Singla</p>
          <hr>
<table>
<tbody>
<tr><th>Dance Club ‘NOX’</th><th> </th></tr>
<tr>
<td>
To hone the dancing and social skills of students, that contributes to their overall personality development.
</td>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td>
<td><img src="nox.jpg" width="200" height="160" /></td>
</tr>
<tr>
<td> </td>
<td>
</td>
</tr>
</tbody>
</table>
<p><strong>Email address : </strong>nox@thapar.edu</p>
<p><strong>President : </strong>Dr. Rajesh Kumar</p>
<p><strong>General Secretary : </strong>Dr. HitashiLomash </p>
<hr>
<table>
<tbody>
<tr><th>Thapar Movie Club (TMC)</th><th> </th></tr>
<tr>
<td>
To help motivate, involve and promote appreciation (artistic, commercial and overall theme) of quality international and national films and foster an independent spirit of film criticism by the students and encourage them for critical writing on Indian and International cinema from the perspective of science, technology, technical education art and culture.</td>
<td><img style="float: right;" src="tmc.jpg" width="200" height="160" /></td>
</tr>
<tr>
<td> </td>
<td>
</td>
</tr>
</tbody>
</table>
<p><strong>Email address : </strong>tmc@thapar.edu</p>
<p><strong>President : </strong>Dr. Manmohan Chhibber</p>
<p><strong>General Secretary : </strong>Nishant</p>
<hr>
<table>
<tbody>
<tr><th>Pratigya Society</th><th> </th></tr>
<tr>
<td>PRATIGYA--"a pledge"...to remove illiteracy from from community in and around campus... PRATIGYA is an effort to shape the dreams which every kid nurtures in his eyes,heart &thoughts . PRATIGYA from its root is a team which basically teaches the underprivileged kids from classes 1 to 10+2 as well as diploma classes These kids include those of the children of fourth class employees of thapar university as well as those residing outside the campus Evolved in 2005, PRATIGYA is one of the biggest and most active socities in Thaparuniversity,Patiala.
</td>
<td><img src="pratigya.jpg" width="200" height="160" /></td>
</tr>
<tr>
<td> </td>
<td>
</td>
</tr>
</tbody>
</table>
<p><strong>Email address : </strong>pratigyasoc@thapar.edu</p>
<p><strong>President : </strong>Mr. Anoop Verma</p>
<p><strong>General Secretary : </strong>Kirandeep Garg</p>
<hr>
<table>
<tbody>
<tr><th>Youth United -Thapar Chapter</th><th> </th></tr>
<tr>
<td>The objective of Youth United is to encourage development of society as a whole through its activities like Periodicals, Events & Community Services. Youth United recently organized painting competition among small children in the audi lawns.
</td>
<td><img src="youth1.jpg" width="200" height="160" /></td>
</tr>
<tr>
<td> </td>
<td>
</td>
</tr>
</tbody>
</table>
<p><strong>Email address : </strong>yu@thapar.edu</p>
<p><strong>President : </strong>Dr Shweta Goyal</p>
<p><strong>General Secretary : </strong>Daksh</p>

<hr>
<table>
<tbody>
<tr><th>Thapar Model United Nations (TUMUN)</th><th> </th></tr>
<tr>
<td>This Society is for all those who want to master the art of negotiation. Thapar University, Model United Nations brings you the best platform for debate and negotiations and to get a rich experience in these activities.</td>
<td><img src="mun.jpg" width="200" height="160" /></td>
</tr>
<tr>
<td> </td>
<td>
</td>
</tr>
</tbody>
</table>
<p><strong>Email address : </strong>tumun@thapar.edu</p>
<p><strong>President : </strong>Mr. Gurvinder Kaur</p>
<p><strong>General Secretary : </strong>Ashish Mum</p>
<hr>
<table>
<tbody>
<tr><th>International Forum for Leadership and Sustainability (IFLS)</th><th> </th></tr>
<tr>
<td>
International Forum for Leadership and Sustainability is a social enterprise working to develop community leadership in sustainability. Our work is focused on waste management, food security and environmental education in India. We focus on driving change by developing innovative solutions, engaging local communities, and empowering social change makers. IFLS is a non-profit social start-up, working to develop leadership potential in individuals, through community based sustainability initiatives across world.</td>
<td><img style="float: right;" src="ifls.jpg" width="200" height="160" /></td>
</tr>
<tr>
<td> </td>
<td>
</td>
</tr>
</tbody>
</table>
<p><strong>Email address : </strong>ifls@thapar.edu</p>
<p><strong>President : </strong>Dr. Richa Babbar</p>
<p><strong>General Secretary : </strong>Abhishek Dey</p>
<hr>
<table>
<tbody>
<tr><th>ADVENTURE CLUB</th><th> </th></tr>
<tr>
<td>
Adventure Club @ Thapar University is the forum for adventure enthusiasts, trekkers, climbers and armchair mountaineers in the student community. It works to develop the spirit of adventure in Thaparians. The aim is to make the best of the absolutely beautiful terrain around Himachal region and beyond, in the short vacations one gets in an year, while having the greatest fun possible. While the stock activities are trekking ,rock climbing and mountain cycling, adventure club has also organized skiing and river rafting sporadically.</td>
<td><img src="club.jpg" width="200" height="160" /></td>
</tr>
<tr>
<td> </td>
<td>
</td>
</tr>
</tbody>
</table>
<p><strong>Email address : </strong>adventureclub@thapar.edu</p>
<p><strong>President : </strong>Dr. Gagandeep Kaur</p>
<p><strong>General Secretary : </strong>Manish Singh</p>
<hr>
<table>
<tbody>
<tr><th>FROSH WEEK</th><th> </th></tr>
<tr>
<td>FROSH WEEK comprises of various activities and events for the fresher class of Thapar University to ease them into their new surroundings.
</td>
<td><img src="frosh.jpg" width="200" height="160" /></td>
</tr>
<tr>
<td> </td>
<td>
</td>
</tr>
</tbody>
</table>
<p><strong>Email address : </strong>froshweek@thapar.edu</p>
<p><strong>President : </strong>Dr M.D. Singh</p>
<p><strong>General Secretary : </strong>Ishpuneet Singh</p>
<table>
<tbody>
<tr><th>Linux User Group</th><th> </th></tr>
<tr>
<td>
Linux User Group Thapar University [LUGTU] is an organization established under the guidance of Dr. Maninder Singh which aims to establish a culture of open source development and product usage in Thapar University. It also promotes information security and safety on the Internet through expert talks and seminars.
</td>
<td><img src="lugtu.png" width="200" height="160" /></td>
</tr>
<tr>
<td> </td>
<td>
</td>
</tr>
</tbody>
</table>
<p><strong>Email address : </strong>lugtu@thapar.edu</p>
<p><strong>President : </strong>Mr. Maninder Singh</p>
<p><strong>General Secretary : </strong>Amit Goyal</p>
<hr>
<table>
<tbody>
<tr><th>Visual Bulletin</th><th> </th></tr>
<tr>
<td>
Visual Bulletin is a society in Thapar University formed in the academic year 2013-2014with the objective of providing the students of Thapar University Knowledge and technical skills about the various technologies and softwares used in modern visual communication.
</td>
<td><img style="float: right;" src="vb.jpg" width="200" height="160" /></td>
</tr>
<tr>
<td> </td>
<td>
</td>
</tr>
</tbody>
</table>
<p><strong>Email address : </strong>visualbulletin@gmail.com</p>
<p><strong>President : </strong>Mr. Tanuj Chopra</p>
<p><strong>General Secretary : </strong>Shikhar Anand</p>
<hr>
<table>
<tbody>
<tr><th>ECONOMICS Club (ECON CLUB)</th><th> </th></tr>
<tr>
<td>Econ Club at Thapar University is dedicated towards inculcating economics and financial know-how among the student community.It aims to inspire an understanding and application of economic concepts in day to day issues of life among university students who realizes the immense importance and practical relevance of this field in the complex world.
</td>
<td><img src="econ.png" width="200" height="160" /></td>
</tr>
<tr>
<td> </td>
<td>
</td>
</tr>
</tbody>
</table>
<p><strong>Email address : </strong>econclub@thapar.edu</p>
<p><strong>President : </strong>Dr Ravi Kiran</p>
<p><strong>General Secretary : </strong>Chirag</p>
<hr>
<table>
<tbody>
<tr><th>Paryavaran Welfare Society (PWS)</th><th> </th></tr>
<tr>
<td>The PWS was set up in the year 2009, as a scheme to uphold biodiversity, guard “paryavaran” (environment), and save energy resources at local level.
</td>
<td><img src="pws.jpg" width="200" height="160" /></td>
</tr>
<tr>
<td> </td>
<td>
</td>
</tr>
</tbody>
</table>
<p><strong>Email address : </strong>pws@thapar.edu</p>
<p><strong>President : </strong>Dr A.S. Reddy</p>
<p><strong>General Secretary : </strong>Mr. Rajneesh</p>

<hr>
<table>
<tbody>
<tr><th>Spirtual Scientists’ Alliance (SSA)</th><th> </th></tr>
<tr>
<td>
Spiritual Scientists’ Alliance is a students’ body that aims at providing spiritual solutions to material problems. It provides a platform to the students to interact with the renowned spiritual scientists, that opens a new paradigm. Looking towards meta-science, a step ahead of physical science, the students are encouraged to have a glimpse of cause of the causes, and thus enable themselves to lead a fulfilling life.
</td>
<td><img src="ssa.png" width="200" height="160" /></td>
</tr>
<tr>
<td> </td>
<td>
</td>
</tr>
</tbody>
</table>
<p><strong>Email address : </strong>ssa@thapar.edu</p>
<p><strong>President : </strong>Dr. Mandeep Singh</p>
<p><strong>General Secretary : </strong>Komal</p>
<hr>
<table>
<tbody>
<tr><th>ENACTUS</th><th> </th></tr>
<tr>
<td>We are a community of student, academic and business leaders committed to using entrepreneurial action to transform lives and shape a better world.
</td>
<td><img style="float: right;" src="enactus.jpg" width="200" height="160" /></td>
</tr>
<tr>
<td> </td>
<td>
</td>
</tr>
</tbody>
</table>
<p><strong>Email address : </strong>enactus@thapar.edu</p>
<p><strong>President : </strong>Dr. Gagandeep Kaur</p>
<p><strong>General Secretary : </strong>Harshvardhan Pant</p>
<hr>
<table>
<tbody>
<tr><th>EDC</th><th> </th></tr>
<tr>
<td>Thapar University Entrepreneurship Development Cell, is a non-profit organization, completely run by T.U. students for helping future entrepreneurs.
</td>
<td><img src="edc.jpg" width="200" height="160" /></td>
</tr>
<tr>
<td> </td>
<td>
</td>
</tr>
</tbody>
</table>
<p><strong>Email address : </strong>edc@thapar.edu</p>
<p><strong>President : </strong>Dr M.D. Singh</p>
<p><strong>General Secretary : </strong>Abhimanyu</p>

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