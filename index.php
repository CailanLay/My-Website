<!-- https://www.youtube.com/watch?v=V_lAhqLXT9A -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cailan Lay</title>
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css"> <!-- Required for a bootstrap website -->
    <link rel="stylesheet" href="css/fixed.css"> <!-- Keeps the fixed background on mobile -->
    <link rel="stylesheet" href="style.css">
    <script src="js/jquery-3.4.1.min.js"></script> <!-- Used to run the bootstrap framework -->
    <script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script> <!-- link for the icons -->
  </head>
  <body data-spy="scroll" data-target="#navbarResponsive">

    <!-- Start Home Section -->
    <div id="home">
      <!-- Navigation Start -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: rgba(0,0,0,0.75);">
           <a href="nav-brand"></a><!-- This is for the logo, but currently used to hold buger on the right -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive"> <!-- for the hambuger menu icon -->
            <ul class="navbar-nav ml-auto">
              <li clas"nav-item">
                <a class="nav-link" href="#home">Home</a> <!-- links to the home tag -->
              </li>
              <li clas"nav-item">
                <a class="nav-link" href="#eduction">Education</a> <!-- links to the experiences tag -->
              </li>
              <li clas"nav-item">
                <a class="nav-link" href="#about">About me</a> <!-- links to the education tag -->
              </li>
              <li clas"nav-item">
                <a class="nav-link" href="#contact">Contact</a> <!-- links to the education tag -->
              </li>
              <li clas"nav-item">
                <a class="nav-link" href="#links">Links</a> <!-- links to the education tag -->
              </li>
            </ul>
          </div>
      </nav>
      <!-- Navigation End -->
      <!-- Start landing page section -->
      <div class="landing">
        <div class="home-wrap dark">
          <div class="home-inner">
            <!-- Photo by Roberto Shumski from Pexels -->
          </div>
        </div>
      </div>
      <div class="caption text-center">
        <h1>Cailan Lay</h1>
        <h3>Web and Software Developer</h3>
        <a class="btn btn-outline-light btn-lg" href="#about">Education</a>
      </div>
      <!-- End landing page section -->
    </div>
    <!-- End Home Section -->

    <!-- Start Eduction Section -->
    <div id="eduction" class="offset">
      <div class="narrow text-center"> <!-- Start of narrow-->
        <div class="title col-12">
          <h3 class="heading">Education</h3>
          <div class="Education heading-underline"></div>
        </div>
        <div class="row text-center"> <!-- Start of row -->
          <div class="col-md-6">
            <div class="schooling">
              <h5>Southern Institute of Technology (Currently)</h5>
              <p>May 2019 - October 2019</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="schooling">
              <h6>Certificate - Object Oriented Software Development</h6>
                <p>
                  The program focused on three main languages, PHP,  Java, and C#,
                  where I learned about, web, desktop, and mobile applications.
                  Alongside these three main languages, other smaller classes introduced
                  other technologies such as SQL, JavaScript, ASP.NET, XML, and Python.
                </p>
            </div>
          </div>
        </div> <!-- End of the row -->
        <div class="row text-center"> <!-- Start of row -->
          <div class="col-md-6">
            <div class="schooling">
              <h5>University of Lethbridge</h5>
              <p>September 2017 - April 2019</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="schooling">
              <h6>Coursework in Computer Science</h6>
                <p>
                  The courses Fundamentals of Programming I  and  II focused on object
                  oriented programming in C++, where I made many small terminal programs.
                </p>
            </div>
          </div>
        </div> <!-- End of the row -->
        <div class="row text-center"> <!-- Start of row -->
          <div class="col-md-6">
            <div class="schooling">
              <h5>William Aberhart High School</h5>
              <p>September 2014 - June 2017</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="schooling">
              <h6>High School Diploma + Spanish Certificate</h6>
                <p>
                  During my high school education, I was fortunate enough to have computer
                  science as a class all three years, where the focus was on building a small
                  terminal and desktop applications in Java. Along with my diploma, I was also
                  able to graduate with my Spanish certificate.
                </p>
            </div>
          </div>
        </div> <!-- End of the row -->
      </div> <!-- End of narrow -->
    </div>
    <!-- End Eduction Section -->

    <!-- Start about jumbotron Section -->
    <div id="about" class="offset">
      <div class="jumbotron">
        <div class="narrow">
          <div class="col-12 text-center">
            <h3 class="heading">About Me</h3>
          </div>
        <div class="row"><!-- strart of row -->
          <div class="me">
            <div class="row">
              <div class="col-md-6">
                <p><hr>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                  when an unknown printer took a galley of type and scrambled it to make a type
                  specimen book. It has survived not only five centuries, but also the leap
                  into electronic typesetting, remaining essentially unchanged. It was popularised
                  in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                  and more recently with desktop publishing software like Aldus PageMaker including
                  versions of Lorem Ipsum.
                 <hr></p>
              </div>
                <div class="col-md-6">
                  <img class="mx-auto d-block" src="img/Profile.jpg" alt="image of me">
                </div>
              </div>
            </div>
          </div> <!-- End of row -->
        </div>
      </div>
    </div>
    <!-- End about jumbotron Section -->

    <?php
    $msg = '';
    $msgClass = '';
    if(filter_has_var(INPUT_POST, 'submit')){
      $name = htmlspecialchars($_POST['name']);
      $email = htmlspecialchars($_POST['email']);
      $subject = htmlspecialchars($_POST['subject']);
      $message = htmlspecialchars($_POST['message']);
      if(!empty($name) && !empty($email) && !empty($subject) && !empty($message)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $name = $_POST['name'];
          $email = $_POST['email'];
          $subject = $_POST['subject'];
          $message = $_POST['message'];
          require("PHPMailer/src/PHPMailer.php");
          require("PHPMailer/src/SMTP.php");
          $mail = new PHPMailer\PHPMailer\PHPMailer();
          $mail->IsSMTP();
          $mail->SMTPAuth = true;
          $mail->SMTPSecure = 'ssl';
          $mail->Host = "smtp.gmail.com";
          $mail->Port = 465;
          $mail->IsHTML(true);
          $mail->Username = "Cailanlay@gmail.com";
          $mail->Password = "Howton153";
          $mail->SetFrom($email);
          $mail->Subject = $subject;
          $mail->Body = nl2br("From ".$name."\n\n".$message);
          $mail->AddAddress("Cailanlay@gmail.com");
          if($mail->Send()){
            $msg = 'Your email has been sent';
            $msgClass = 'alert-success';
          } else {
            $msg = 'Your email was not sent';
            $msgClass = 'alert-danger';
          }
        } else {
          $msg = 'Please use a valid email';
          $msgClass = 'alert-danger';
        }
      } else {
        $msg = 'Please fill in all fields';
        $msgClass = 'alert-danger';
      }
    }
    ?>

    <!-- Start Contact Section -->
    <div id="contact" class="offset container contact-form">
      <div class="narrow">
      <div class="col-12 text-center">
        <h3 class="heading">Contact</h3>
      </div>
      <div class="row">
        <div class="col">

          <?php if($msg != ''):?>
            <div class="alert <?php echo $msgClass; ?>"> <?php echo $msg; ?> </div>
          <?php endif ?>

          <form id="contact-form" class=""  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>#contact">
            <div class="form-group">
              <label for="name">Name</label>
              <input id="name" type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input id="email" type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
            </div>
            <div class="form-group">
              <label for="subject">Subject</label>
              <input id="subject" type="text" name="subject" class="form-control" value="<?php echo isset($_POST['subject']) ? $subject : ''; ?>">
            </div>
            <div class="form-group">
              <label for="massage">Message</label>
              <textarea id="message" name="message" rows="8" class="form-control"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
            </div>
            <div class="form-group">
              <button type="submit" name="submit" class="btn btn-primary rbtn">Send</button>
            </div>
          </form>
        </div>
      </div>
      </div>
    </div>
    <!-- End Contact Section -->

    <!-- Start of links section -->
    <div id="links" class="offset">

      <div class="fixed-background"><!-- Start of fixed background -->
        <div class="row dark text-center"> <!-- Start of row dark -->
          <div class="col-12">
            <h3 class="links-heading">Links</h3>
            <div class="heading-underline"></div>
          </div>
          <div class="col-md-4">
            <div class="link">
              <a href="https://www.linkedin.com/public-profile/settings?trk=d_flagship3_profile_self_view_public_profile" target="_blank"><i class="fab fa-linkedin-in fa-4x" data-fa-transform="shrink-3 up-5"></i></a>
              <h3>Linkedin</h3>
            </div>
          </div>
          <div class="col-md-4">
            <div class="link">
              <a href="https://github.com/llAnicll" target="_blank"><i class="fab fa-github fa-4x" data-fa-transform="shrink-3 up-5"></i></a>
              <h3>Github</h3>
            </div>
          </div>
          <div class="col-md-4">
            <div class="link">
              <a class="nav-link" href="#contact"><i class="fas fa-at fa-4x" data-fa-transform="shrink-3 up-5"></i></a>
              <h3>Email</h3>
            </div>
          </div>
        </div> <!-- Start of row dark -->
        <div class="fixed-wrap">
          <div class="fixed"></div>
        </div>
      </div><!-- End of fixed background -->
    </div>
    <!-- End of links section -->

    <div class="offset">
      <footer>
        <div id="footer" class="row justify-content-center">
          <div class="col-md-12 text-center">
            <strong>Contact Info</strong>
            <p>Cailanlay@gmail.com</p>
            <a href="https://www.linkedin.com/public-profile/settings?trk=d_flagship3_profile_self_view_public_profile" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://github.com/llAnicll" target="_blank"><i class="fab  fa-github"></i></a>
          </div>
          &copy; Cailan Lay

        </div>
      </footer>
    </div>

  </body>
</html>
