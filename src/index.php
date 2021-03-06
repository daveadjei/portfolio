<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My portfolio</title>

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.appear.js"></script>

</head>

<body>
    <a href="#content" class="sr-only sr-only-focusable">Skip to main content</a>

    <header>
        <nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-dark">
            <a href="index.html" class="logo-link">
                <img src="david-logo.jpg" alt="My portfolio, David Adjei" width="58">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" date-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" 7 aria-expanded="false" aria-label="Toggle navigaion">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-uppercase" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="#about-me">About me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main id="content" class="container">
        <div class="container container-fluid">
            <section class="section section--light">
                <div class="jumbotron jumbotron-fluid">
                    <h1>Hi, I am
                        <strong>David Adjei.</strong>
                    </h1>
                    <p>I’m a full-stack web developer.</p>
                </div>
            </section>
        </div>
        <section class="container">
            <p class="claim text-center">Let’s work together to make
                <strong>your product stand out</strong>. I create beautiful and functional websites. I work with my clients step
                by step
                <strong>from the idea until the fully functioning web application</strong>.</p>
        </section>

        <hr>

        <section class="container section--dark section--promo">
            <h1 class="sr-only">Promo</h1>
            <div class="row">
                <div class="col-md-3">

                    <article>
                        <h2>Discover</h2>
                        <p>Tell me about your project and we brainstorm together the features to create a plan for your product
                            to launch.</p>
                    </article>
                </div>

                <div class="col-md-3">
                    <article>
                        <h2>Design</h2>
                        <p>We design the wireframe and agree together how to create the best experience for your users to present
                            your brand.
                        </p>
                    </article>
                </div>
                <div class="col-md-3">

                    <article>
                        <h2>Deploy</h2>
                        <p>We protoype and develop your product. We work together intensily to incorporate your feedback.</p>
                    </article>
                </div>
                <div class="col-md-3">

                    <article>
                        <h2>Be Ready</h2>
                        <p>We deploy your product and now your website is ready to get the traction. Get out there and grow
                            your audience.
                        </p>
                    </article>
                </div>




        </section>

        <hr>

        <section id="skills" class="container section--light">
            <h2>My Skills</h2>

            <div class="progress mb-1" style="height: 2rem">
                <div class="progress-bar" id="bar1" data-progress="80%" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                    <div class="d-flex justify-content-between">
                        <strong class="d-block px-2 bg-dark" style="height: 2rem">HTML</strong>
                        <span class="px-2 h-100">80 %</span>
                    </div>
                </div>
            </div>

            <div class="progress mb-1" style="height: 2rem">
                <div class="progress-bar" id="bar2" data-progress="80%" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                    <div class="d-flex justify-content-between">
                        <strong class="d-block px-2 bg-dark" style="height: 2rem">CSS, Sass</strong>
                        <span class="px-2 h-100">80 %</span>
                    </div>
                </div>
            </div>

            <div class="progress mb-1" style="height: 2rem">
                <div class="progress-bar" id="bar3" data-progress="70%" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                    <div class="d-flex justify-content-between">
                        <strong class="d-block px-2 bg-dark" style="height: 2rem">JavaScript</strong>
                        <span class="px-2 h-100">70 %</span>
                    </div>
                </div>
            </div>
            <div class="progress mb-1" style="height: 2rem">
                <div class="progress-bar" id="bar4" data-progress="60%" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                    <div class="d-flex justify-content-between">
                        <strong class="d-block px-2 bg-dark" style="height: 2rem">React</strong>
                        <span class="px-2 h-100">60 %</span>
                    </div>
                </div>
            </div>
            <div class="progress mb-1" style="height: 2rem">
                <div class="progress-bar" id="bar5" data-progress="70%" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                    <div class="d-flex justify-content-between">
                        <strong class="d-block px-2 bg-dark" style="height: 2rem">jQuery</strong>
                        <span class="px-2 h-100">70 %</span>
                    </div>
                </div>
            </div>
            <div class="progress mb-1" style="height: 2rem">
                <div class="progress-bar" id="bar6" data-progress="60%" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                    <div class="d-flex justify-content-between">
                        <strong class="d-block px-2 bg-dark" style="height: 2rem">PHP</strong>
                        <span class="px-2 h-100">60 %</span>
                    </div>
                </div>
            </div>
            <div class="progress mb-1" style="height: 2rem">
                <div class="progress-bar" id="bar7" data-progress="60%" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                    <div class="d-flex justify-content-between">
                        <strong class="d-block px-2 bg-dark" style="height: 2rem">Laravel</strong>
                        <span class="px-2 h-100">60 %</span>
                    </div>
                </div>
            </div>
            <div class="progress mb-1" style="height: 2rem">
                <div class="progress-bar" id="bar8" data-progress="50%" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                    <div class="d-flex justify-content-between">
                        <strong class="d-block px-2 bg-dark" style="height: 2rem">UX</strong>
                        <span class="px-2 h-100">50 %</span>
                    </div>
                </div>
            </div>








        </section>

        <script>
            $('.progress').appear();

            function progress(barID, value) {
                $(barID).animate({
                    'width': value
                }, 800);
            }

            $('.progress').on('appear', function () {
                progress('#bar1', '80%');
                progress('#bar2', '80%');
                progress('#bar3', '70%');
                progress('#bar4', '60%');
                progress('#bar5', '70%');
                progress('#bar6', '60%');
                progress('#bar7', '60%');
                progress('#bar8', '50%');


            });
        </script>

        <hr>

        <section id="portfolio" class="container section--primary">
            <h2>My Portfolio</h2>

            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <h3 class="card-title">Website for a coffee shop</h3>
                        <img class="card-img-top" src="http://satyr.io/300x200/gray" alt="">
                        <div class="card-text">
                            <p>Student Project for the Coding Bootcamp Praha. </p>
                            <p>Coded based on provided psd design.</p>
                            <strong>Tech stack:</strong> HTML, CSS, Sass, Bootstrap
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <h3 class="card-title">Website for a coffee shop</h3>
                        <img class="card-img-top" src="http://satyr.io/300x200/gray" alt="">
                        <div class="card-text">
                            <p>Student Project for the Coding Bootcamp Praha. </p>
                            <p>Coded based on provided psd design.</p>
                            <strong>Tech stack:</strong> HTML, CSS, Sass, Bootstrap
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <h3 class="card-title">Website for a coffee shop</h3>
                        <img class="card-img-top" src="http://satyr.io/300x200/gray" alt="">
                        <div class="card-text">
                            <p>Student Project for the Coding Bootcamp Praha. </p>
                            <p>Coded based on provided psd design.</p>
                            <strong>Tech stack:</strong> HTML, CSS, Sass, Bootstrap
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <h3 class="card-title">Website for a coffee shop</h3>
                        <img class="card-img-top" src="http://satyr.io/300x200/gray" alt="">
                        <div class="card-text">
                            <p>Student Project for the Coding Bootcamp Praha. </p>
                            <p>Coded based on provided psd design.</p>
                            <strong>Tech stack:</strong> HTML, CSS, Sass, Bootstrap
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <h3 class="card-title">Website for a coffee shop</h3>
                        <img class="card-img-top" src="http://satyr.io/300x200/gray" alt="">
                        <div class="card-text">
                            <p>Student Project for the Coding Bootcamp Praha. </p>
                            <p>Coded based on provided psd design.</p>
                            <strong>Tech stack:</strong> HTML, CSS, Sass, Bootstrap
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <h3 class="card-title">Website for a coffee shop</h3>
                        <img class="card-img-top" src="http://satyr.io/300x200/gray" alt="">
                        <div class="card-text">
                            <p>Student Project for the Coding Bootcamp Praha. </p>
                            <p>Coded based on provided psd design.</p>
                            <strong>Tech stack:</strong> HTML, CSS, Sass, Bootstrap
                        </div>
                    </div>
                </div>
            </div>





        </section>

        <hr>

        <section id="about-me" class="container">
            <h2>About Me</h2>
            <div class="about">
                <div class="row">
                    <div class="about-image col-md-4 text-center">
                        <img class=" rounded-circle" src="brown_2.jpg" alt="It’s me, David" height="300px">
                    </div>
                    <div class="about-text col-md-8 text-center pl-4 pr-4">
                        <h3>Hello!</h3>
                        <p>My name is David Adjei. I am a full-stack web developer and enjoy learning new trends. I am developing
                            user interfaces in JavaScript and React and backend of my projects in PHP and Laravel.</p>
                        <p>I am open to learning new technologies and enjoy working with people who are as passionate about
                            all web-related as me.</p>
                        <p>I have worked for clients all across the world but currently I am based in Prague, Czech Republic.</p>
                        <p>I like cats, gaming, and snowboarding. If I do not develop, you can also meet me trekking in the
                            mountains.
                        </p>
                        <p>Get in touch and let's do something great together.</p>
                    </div>
                </div>
            </div>
        </section>

        <hr>

        <section id="contact" class="container ">
            <h2>Find Me Here</h2>

            <div class="row icons text-center">
                <div class="col-sm-4">
                    <a href="https://github.com/daveadjei">
                        <i class="fa fa-lg fa-git-square" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="https://www.linkedin.com/in/david-danquah-adjei-28685671/">
                        <i class="fa fa-lg fa-linkedin-square" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="https://www.instagram.com/daveadjei/">
                        <i class="fa fa-lg fa-instagram" aria-hidden="true"></i>
                    </a>
                </div>
            </div>

        </section>

        <hr>

        <section id="contact" class="container section--dark">
            <h2>Contact me</h2>



                <form action="" method="POST" class="form-contact">

                    <!-- http://cbp.vosk-design.cz/process-form.php -->

                    <div class="row">
                        <div class="col-md-6 info">
                            <label class="ml-4" for="firstname">First Name</label>
                            <input class="mr-4" type="text" id="firstname" name="firstname" required>
                        </div>
                        <div class="col-md-6 info">
                            <label class="ml-4" for="lastname">Last Name</label>
                            <input class="mr-4" type="text" id="lastname" name="lastname" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 info">
                            <label class="ml-4" for="email">E-mail</label>
                            <input class="mr-4" type="email" id="email" name="email" required>
                        </div>
                        <div class="col-md-6 info">
                            <label class="ml-4" for="phone">Phone</label>
                            <input class="mr-4" type="tel" id="phone" name="phone">
                        </div>
                    </div>
                    <br/>
                    <div class="text-center">
                        <label for="text">Message</label>
                        <br/>
                        <textarea name="text" id="text" cols="30" rows="10"></textarea>
                        <br/>
                        <button class="btn btn-primary ">Send my message</button>
                    </div>
                </form>

                <?php
            // Initialization part
            ini_set('error_reporting', 1);

            $dbh = new PDO('mysql:host=localhost;dbname=portfolio', 'root', 'zLe72ete');
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            if (count($_POST) > 0)
            {
                $first_name = filter_input(INPUT_POST, 'firstname');
                $last_name = filter_input(INPUT_POST, 'lastname');
                $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
                $phone = filter_input(INPUT_POST, 'phone');
                $text = filter_input(INPUT_POST, 'text');

                // var_dump($_POST);

                if (!$first_name || !$last_name || !$email || $text =='')
                {
                    header('Location: ? success=no');
                }
                else
                {
                    $statement = $dbh->prepare('INSERT INTO messages (first_name, last_name, email, phone, `text`) VALUES (?, ?, ?,?,?)');
		            $result = $statement->execute([$first_name, $last_name, $email, $phone, $text]);
                    header('Location: ? success=yes');
                    echo 'Okay you have successfully filled the form';

                }
            }

             ?>
        </section>
        <hr>

    </main>

    <footer class="text-center">
        <h2>NICE TO MEET YOU!</h2>
        <p>Copyright @David Adjei 2018</p>
    </footer>


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>