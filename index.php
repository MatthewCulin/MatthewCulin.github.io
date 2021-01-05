<!DOCTYPE HTML>
<html lang="en">

<head>
    <?php 
        $PAGE_TITLE = "Welcome!";
        include "./PHP/includes/meta.php";
    ?>
    </head>

    <body>
        <!-- HEADER -->
        <header>
            <?php include "./PHP/includes/nav.php" ?>
            <h1>Welcome!</h1>
        </header>

        <!-- MAIN CONTENT -->
        <main>
            <!-- MESSAGE -->
            <section>
                <h2 class= "noIn"> A Note From The Designer</h2>
                <p>
                    Hello and welcome to my webpage, I am Matthew Culin. I am 4<sup>th</sup>
                    year Computer Science student at Trent University in Peterborough, Ontario.
                    I have designed this webpage using HTML/CSS, PHP, and JavaScript.
                </p>

                <p>
                    My purpose for creating this webpage is to showcase my skills with design
                    and functionality of a webpage. On this webpage you will find links to work
                    I have completed for my Web Design class at Trent University. In addition
                    to showcasing my design abilities, I will incorporate my personal
                    photography occasionally and will provide links to external sites to showcase
                    other work I have completed.
                    Thank you for visiting my website!</p>
                
                <p class= "noIn"> Sincerely, </p>
                <p> Matthew Culin </p>
            </section>

            <!-- VIDEOS -->
            <section>
                <h2>Videos</h2>
                <div class="video">
                    <!-- CHILLY OPEN -->
                    <iframe 
                        width="560" 
                        height="315" 
                        src="https://www.youtube.com/embed/8BoGrRx9R2g"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>

                    <!-- SPECIAL OLYMPICS GOLF -->
                    <iframe 
                        width="560" 
                        height="315" 
                        src="https://www.youtube.com/embed/O55h20uNv08"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                </div>
            </section>
        </main>

      <!-- FOOTER -->
      <?php include "./PHP/includes/footer.php" ?>

  </body>

</html>