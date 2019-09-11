<!DOCTYPE html>
<html lang="en">
<head>
   
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
<!--    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css"> -->
    <link rel="stylesheet" type="text/css" href="resources/css/Grid-setup.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
    
    <link rel="apple-touch-icon" sizes="120x120" href="/resources/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/resources/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/resources/favicons/favicon-16x16.png">
    <link rel="manifest" href="/resources/favicons/site.webmanifest">
    <link rel="mask-icon" href="/resources/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/resources/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="msapplication-config" content="/resources/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ff0000">
   
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
    
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,800" rel="stylesheet">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    
	<title>Kaylem Billett Portfolio</title>
	
</head>
<body>


<header class="header-main js-section-home">
     <a class="mobile-nav-icon js--nav--icon"><i class="fas fa-bars"></i></a>
    <div class="head-text-box">	
       <span class="Name">Kaylem Billett</span>
       <div class="Sub_text">Designer &amp; Developer</div>
    </div>

    <nav>
        <div class="row">
            <ul class="js--main--nav main-nav">
               
                <li><a class="rectangle-out js-scroll-to-home" href="#">Home</a></li>
                <li><a class="rectangle-out js-scroll-to-about" href="#">About Me</a></li>
                <li><a class="rectangle-out js-scroll-to-projects" href="#">My Projects</a></li>
                <li><a class="rectangle-out js-scroll-to-contact" href="#">Contact Me</a></li>
                
            </ul>
            
        </div>
    </nav>

</header>

<!--                                 ABOUT ME SECTION-->

<section class="section-about js-section-about" id="about">
    
    <div class="row js-wp-1">
    <h2> About Me</h2>
    
        <div class="Grad-img-div col span-1-of-4">
            <img src="resources/img/Graduation-img.jpg" alt="" class="Grad-img">
        </div>
        <div class="col span-3-of-4">
                <p class="long-copy"> 
    
   Highly motivated and self-starting web developer with a passion for existing and developing technologies. Currently located in Bristol, England and pursuing any opportunity to start my career as a developer. My current focus is to build on existing development skills, in order to create various web applications from the ground up. 
    </p>
        </div>
    
    </div>
    
    
</section>





<section class="projects_section js-section-projects" id="projects">
    
    <div class="row">
        
        <h2>Projects &amp; Competencies</h2>
        
    
        <div class="row projects">
        
                            <!--FIRST PROJECT/EDUCATION CODE -->
            
                   
                <div class="col span-1-of-3">
                        <div class="Projects">
                            
                            <div class="container">
                            <img class="project-img" src="resources/img/placeholder2.jpg";>
                            
                           <div class="img-overlay">
                                <div class="text-overlay">Qualifications</div>
                                <div class="sub-text-overlay">Uni/MOOC's</div>
                                <a href="#openModal1" class="button-overlay button-overlay-site">Learn more</a>
                                <span onclick="document.getElementById('id01').style.display='none'"></span>
                            </div>
                            </div>
                            
                 <div id="openModal1" class="modalDialog modal">
                       
                        <div class="modal-header">
                        <a href="#close" title="Close" class="close">X</a>
                           
                        <div class="modal-nav">
                        <button class="tablink active" onclick="openCity(event, 'HTML5/CSS3')">HTML5/CSS3</button>
                        <button class="tablink" onclick="openCity(event, 'PHP/Mysql')">PHP/Mysql</button>
                        <button class="tablink" onclick="openCity(event, 'Wordpress')">Wordpress</button>
                        <button class="tablink" onclick="openCity(event, 'University')">University</button>
                        </div>
                        
                        </div>
               <div class="modal-content">   
                <div class="modal_body" >
                     
                      
                  <div id="HTML5/CSS3" class="city">
            <div class="modal-border">       
                           <h6 class="body-head">HTML5/CSS3</h6>

                             <p class="modal-text">I decided to enrol on this course in order to work on existing front-end website design and development skills. This course heavily focuses on the use of responsive web design and development using HTML5 and CSS3 and with a little bit of jQuery. This 12-hour course consisted of the design and development process used by professionals in order to create a responsive landing page for a fictional company. I managed to learn different methods of using images, fonts, icons and jQuery to create some interesting animations. </p>

                            <img class="certificate-image" src="resources/img/htmlcss_certificate.jpg" alt="udemy certificate">
            </div> 
                      </div>

                      <div id="PHP/Mysql" class="city" style="display:none">
            <div class="modal-border">  
                           <h6 class="body-head">PHP/MySQL</h6>
                              <p class="modal-text">   
                              In order to improve my back-end website development skills I enrolled on two different PHP courses. The first course I enrolled onto was ‘PHP for beginners – Become a PHP Master’, this course consisted of creating a content management system for a blog website using PHP/MySQL with bootstrap as the front-end framework. Throughout this 38-hour course I learned the fundamentals of the PHP language which then led on to some much more advanced features.
                              The second PHP/MySQL course I undertook was 14.5 hours and was an extension on the previous course that focused more heavily on advances PHP and MySQL usage. During this course I created a fully functional e-commerce store with an integrated payment system. 

                              </p>

                              <img class="php-cert-img" src="resources/img/phpbeginners_certificate.jpg" alt="udemy certificate">

                              <img class="php-cert-img" src="resources/img/e-commerce_certificate.jpg" alt="udemy certificate">
            </div>
                      </div>

                      <div id="Wordpress" class="city" style="display:none">
            <div class="modal-border">  
                           <h6 class="body-head">Wordpress</h6>
                           <p class="modal-text">
                              Throughout this 21.5-hour WordPress course I made various types on test websites in order to learn and understand all the capabilities that WordPress can offer. Whilst creating different kinds of websites I spent a lot of time learning how I can troubleshoot both my own and other peoples WordPress websites. 
                           </p>

                          <img class="certificate-image" src="resources/img/wordpress_certificate.jpg" alt="udemy certificate">
                          </div>
                      </div>
                      
                   <div id="University" class="city" style="display:none">
            <div class="modal-border">       
                           <h6 class="body-head">Bachelor of Science (Bath University)</h6>

                             <p class="modal-text">From a young age I have had a very keen interest in emerging technologies and a desire to understand and potentially create my own. After a 2-year information technology course the next logical step in education was to pursue an Applied computing degree. Throughout this 3-year degree I got the opportunity to experiment with emerging technologies. To name just a few favourites I tried mobile application development, game design and development before finally deciding that web design and development was something that I wanted to master and pursue as a career.</p>
                             
                             <div class="">
                             <img src="resources/img/Uni-Bath-Logo.png" class="uni-img" alt="">
                             
                             </div>

                            <a href="resources/Cv/cv%20kaylem%20website%20final.pdf" class="button-overlay cv-btn">view my CV</a>
                               
            </div> 
                      </div>


                </div>

            </div>

                        </div>
                    </div>
                </div>
                
                
                            <!--SECOND PROJECT CODE      -->
               
                <div class="col span-1-of-3">
                        <div class="Projects ">
                           
                            <div class="container">
                            
                            <img class="project-img" src="resources/img/placeholder.jpg";>
                            
                            <div class="img-overlay">
                                <div class="text-overlay">My Travel Blog</div>
                                <div class="sub-text-overlay">PHP/MySQL/Bootstrap</div>
                                <a href="#" class="button-overlay button-overlay-site">View site</a>
                                <a href="#" class="button-overlay button-overlay-code">View code</a>
                            </div>
                            
                                </div>
                            
                                    </div>
                            
                                        </div>
                                                     
                                        
<!--                       THIRD PROJECT CODE          -->
            
                <div class="col span-1-of-3">
                        <div class="Projects">
                                                   
                                                   
                          <div class="container">
                            <img class="project-img" src="resources/img/placeholder3.jpg";>
                            
                           <div class="img-overlay">
                                <div class="text-overlay">Intriguing-Tales</div>
                                <div class="sub-text-overlay">Wordpress</div>
                                <a href="https://intriguing-tales.com/" class="button-overlay button-overlay-site">View site</a>
                            </div>
                            </div>
                   </div>
                </div>
                      
                    </div>
    </div>
    
</section>
    
        <section class="Contact_section js-section-contact">
            
            <div class="row">
                   
                    <h2 class="contact_title">Contact Me</h2>
                   <div class="Git-text"> 
                  <div class="col span-1-of-2">
                     
                      <h3 class="Get-in-touch-title">Get In Touch</h3>

                      <div class="col span-1-of-2 Top-left">
                         <a href="https://www.linkedin.com/in/kaylem-billett-4660a412b/" class="fab fa-linkedin linkedin-icon"></a>
                          <p>Feel free to look and follow my LinkedIn profile </p>
                      </div>
                      <div class="col span-1-of-2 Top-right">
                         <a class="fab fa-facebook-square facebook-icon"></a>
                          <p>My business facebook profile is currently under development. </p>
                      </div>
                      <div class="col span-1-of-2 Btm-left">
                          <a href="resources/Cv/cv%20kaylem%20website%20final.pdf" class="fas fa-envelope-open-text email-icon"></a>
                          <p>Click here to download a copy of my CV</p>
                      </div>
                      <div class="col span-1-of-2 Btm-right">
                          <a href="https://github.com/Billett-development" class="Github-icon fab fa-github-square" ></a>
                          <p>Feel free to stalk my personal instagram account.</p>
                      </div>
                      
                  </div>
                </div>
                
            <div class="col span-1-of-2" id="form">
               
                <form action="contact_form.php" method="post" class="contact-form">
                   
                   <div class="Contact-name">
                   <label id="Name-label"for="">What is your name?</label>
                    <div class="First-name">
                        <input type="text" placeholder="First Name" name="first_name" required>
                    </div>
                    <div class="Last-name">
                        <input type="text" placeholder="Last Name" name="Last_name" required>
                    </div>
                    </div>
                    <div class="Contact-email">               
                    <label id="Email-label" for="">Enter you email</label>
                    <div>
                        <input type="text" placeholder="e.g. example@hotmail.co.uk" name="email" required>
                    </div>
                    </div>
                <div>
                        <select name="find-me" id="find-me">
                           <option value="" disabled selected>
                                    Where did you find me?
                            </option>    
                            <option value="find_me">
                                    Search Engine
                            </option>
                            <option value="find_me">
                                    Friends
                            </option>
                            <option value="find_me">
                                    Linkedin
                            </option>
                            <option value="find_me">
                                    Other
                            </option>
                        </select>
                    </div> 
                    
                    <div class="Contact-message">
                    <label id="Message-label" for="">message</label>
                    <div>
                        <textarea name="message" id="text-area" cols="30" rows="10" placeholder="Write me a message"></textarea>
                              
                    </div>
                    </div>

                    <div>
                        <button type="submit" name="submit" value="submit" class="btn submit">Submit</button>
                    </div>

                    
                </form>
  
            </div>
        </div>
            
        </section>

        <footer class="footer-nav">
            <div class="row">
                <div class="col span-1-of-2">
                    <ul class="footer-links">
                        <li><a class="js-scroll-to-home" href="#">Home</a></li>
                        <li><a class="js-scroll-to-about" href="#">About me</a></li>
                        <li><a class="js-scroll-to-projects" href="#">Projects</a></li>
                        <li><a class="js-scroll-to-contact" href="#">Contact me</a></li>
                    </ul>
                </div>
            </div>
            <div class="row footer-text">
                <p>
                    Designed and created by Kaylem Billett
                </p>
            </div>
        </footer>

<footer>
   
    <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"></script>
    <script src="resources/js/Scripts.js";></script>
    
</footer>
</body>

</html>