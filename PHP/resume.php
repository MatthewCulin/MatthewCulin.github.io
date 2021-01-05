<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        $PAGE_TITLE = "Resume/CV";
        include "./PHP/includes/meta.php"; 
    ?>

  <link type="text/css" rel="stylesheet" href="./CSS/resume.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata" />

</head>

<body>
    <!-- HEADER -->
    <header>
      <?php include "./PHP/includes/nav.php" ?>
      <h1>Resume/CV</h1>
    </header>

    <!-- MAIN -->
    <main id="resume">
      <!-- HEADER -->
      <header>
        <!--LEFT-->
        <div>
          <h2>MATTHEW CULIN</h2>
          <p>WEB DESIGNER</p>
        </div>
        <!--RIGHT-->
        <div>
          <ul>
            <li><i class="fa fa-home"></i> <span> | Peterborough, ON</span></li>
            <li><i id="pad_phone" class="fa fa-phone"></i> <span> | (705) 493-1975</span></li>
            <li><i class="fa fa-envelope"></i> | <span><a id="mail" href="mailto:matthewculin@trentu.ca?Subject=Resume/CV">matthewculin@trentu.ca</a></span></li>
          </ul>
        </div>
      </header>

      <section>
        <!--LEFT COLUMN-->
        <section class="res_left">
          <!--PROFILE-->
          <div>
            <h3>PROFILE</h3>
            <p>Hello! I am a 4<sup>th</sup> year Computer Science student studying at Trent University
              in Peterborough, ON. I created this resume template using my skills learned from a Web
              Development course offered at the University. This page of my website will help shed light
              on my skills and abilities that I have learned over my years studying.</p>
          </div>

          <!--SOCIAL-->
          <div>
            <h3>SOCIAL</h3>
            <ul>
              <li><i class="fa fa-instagram"></i> <a href="https://www.instagram.com/mattculin/"></a></li>
              <li><i class="fa fa-google"></i> <a href="https://aboutme.google.com/u/0/?referer=gplus"></a></li>
              <li><i class="fa fa-linkedin"></i> <a href="https://www.linkedin.com/in/matthew-culin-207950139/"></a></li>
            </ul>
          </div>

          <!--SKILLS-->
          <div>
            <h3>SKILLS</h3>
            <div class="skillBar">
              <!--C/C++/C#-->
              <p>C/C++/C#</p>
              <div class="skillBarContainer">
                <div class="skillBarValue value-90"></div>
              </div>
            </div>
            <div class="skillBar">
              <!--HTML-->
              <p>HTML</p>
              <div class="skillBarContainer">
                <div class="skillBarValue value-90"></div>
              </div>
            </div>
            <div class="skillBar">
              <!--CSS-->
              <p>CSS</p>
              <div class="skillBarContainer">
                <div class="skillBarValue value-80"></div>
              </div>
            </div>
            <div class="skillBar">
              <!--PHP-->
              <p>PHP</p>
              <div class="skillBarContainer">
                <div class="skillBarValue value-70"></div>
              </div>
            </div>
            <div class="skillBar">
              <!--JAVA-->
              <p>Java</p>
              <div class="skillBarContainer">
                <div class="skillBarValue value-60"></div>
              </div>
            </div>
          </div>
          
        </section>

        <!--RIGHT COLUMN-->
        <section>
          <!--WORK EXPERIENCE-->
          <div class="res_right">
            <h3>WORK EXPERIENCE</h3>
            <!--EASTVIEW-->
            <div class="entry">
              <div>
                <h4>Eastview Development</h4>
                <p>North Bay, ON</p>
                <p>May 2019 - August 2020</p>
              </div>
              <div>
                <h5>Labourer</h5>
                <p>I performed demanding physical labour with a strong work
                  ethic and adeptness to learn. Tasks that I performed while
                  at this workplace include; lawn care, mixing and pouring
                  cement, hanging drywall and metal siding, and painting.</p>
              </div>
            </div>
            <!--HIGHVIEW-->
            <div class="entry">
              <div>
                <h4>Highview Golf Course</h4>
                <p>Powassan, ON</p>
                <p>June 2015 - August 2018</p>
              </div>
              <div>
                <h5>Pro Shop Staff</h5>
                <p>I was responsible for handling cash, gift card and
                  debit/credit transactions. In addition to this I maintained
                  daily organization of the golfers and tournaments as well as
                  course operational organization.</p>
              </div>
            </div>
          </div>

          <!--EDUCATION-->
          <div class="res_right">
            <h3>EDUCATION</h3>
            <!--TRENT UNIVERSITY-->
            <div class="entry">
              <div>
                <h4>Trent University</h4>
                <p>Peterborough, ON</p>
                <p>2016 - 2020</p>
              </div>
              <div>
                <h5>B.Sc.H - Computer Science</h5>
                <p></p>
              </div>
            </div>
            <!--WIDDIFIELD SECONDARY-->
            <div class="entry">
              <div>
                <h4>Widdifield Secondary</h4>
                <p>North Bay, ON</p>
                <p>2012 - 2015</p>
              </div>
              <div>
                <h5>O.S.S.D - Business SHSM</h5>
                <p></p>
              </div>
            </div>
          </div>

          <!--PROJECTS-->
          <div class="res_right">
            <h3>PROJECTS</h3>
            <!--BUCKET LIST APP-->
            <div class="entry">
              <div>
                <h4>Bucket List</h4>
                <p>CSS</p>
                <p>HTML</p>
                <p>JavaScript</p>
                <p>PHP</p>
              </div>
              <div>
                <h5>Web Application Development - Trent University</h5>
                <p>I am working on a bucket list web app with 2 others as the final
                  project for the web development course at Trent University. To do so
                  I will be using a variety of programming languages to complete the
                  application. The application will be created and styled using HTML and
                  CSS, given functionality with JavaScript, and provided a back end using PHP. </p>
              </div>
            </div>
            <!--MEDIA STORAGE APP-->
            <div class="entry">
              <div>
                <h4>Media Storage</h4>
                <p>CSS</p>
                <p>HTML</p>
                <p>JavaScript</p>
                <p>PHP</p>
              </div>
              <div>
                <h5>Personal</h5>
                <p>In my free time apart from my work for University I am creating a media
                  storage app mainly for personal use. I am designing this application
                  firstly for storing and organizing my vinyl collection. Once this
                  portion is completed I will be implementing an option for different
                  forms of media.</p>
              </div>
            </div>
            <!--STUDENT REVIEW-->
            <div class="entry">
              <div>
                <h4>Student Review</h4>
                <p>Java</p>
                <p>SQLite</p>
              </div>
              <div>
                <h5>Software Design and Modelling - Trent University</h5>
                <p>The final project for Software Design and Modelling, was a Java GUI application
                  which incorporated a user interface and an accompanying
                  backend connection to process some information provided by the
                  user. My group chose to make an extension of our course grade
                  book and group sign up process. We designed a system where a user
                  would log in to the program and join classes, sign up in groups for
                  assignments and review other group members from past assignments.
                  In the group sign up page, users could view existing group members
                  past reviews and make their decision to join that group based on past work.</p>
              </div>
            </div>
          </div>
        </section>
      </section>

    </main>

</body>

</html>