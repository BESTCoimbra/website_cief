
<html>
    <head>
        <meta charset="utf-8"/>
        <title>CIEF</title>
        <link rel="shortcut icon" type="image/x-icon" href="imagens/Cief_final2.png" />
        
        
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="css/slider.css"/>

        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script  src="js/slider.js"></script>
        <script src="js/jquery_site.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>


        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Raleway&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    </head>
    <body>
        <?php 
        $to = "coimbracief@gmail.com";
        $subject ="";
        $name ="";
        $email="";
        $message ="";
        $message_error ="";
        $message_success="";
        $message_error2="";
        
        if((isset($_POST['submit']))){
            if(empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST['subject']) || empty($_POST['message'])){
                $message_error2 = "Missed a Required Field";
            
                
            }
            else{
                $name = $_POST['name'];
                $email = $_POST['email'];
                $subject = $_POST['subject'];
                $message = $_POST['message'];
                $header = 'From: '. $name. '<' .$email. '> \r\n  X-Mailer: PHP/' . phpversion();
                $success = mail ($to, $subject, $message, $header);
                if($success){
                    $message_success = "Message Successfuly Sent";
                }
                else{
                    $message_error = "Message Sending Failed, Try Again"; 
                }
            }
        }
        
        ?>
        <header>
            <nav>
                <div class="menu_desktop">
                    <a id="opcaoTop" href="#front"><img  id="logo" src ="imagens/Cief_final.png"></a>
                    <a class="opcao" href="#about">About</a>
                    <a class="opcao" href="#partners">Partners</a>
                    <a class="opcao" href="#coimbra">Coimbra</a>
                    <a class="opcao" href="#team">Team</a>
                    <a class="opcao" href="#contact">Contacts</a>
                    
                </div>
                <div class="menu_mobile">
                    
                    
                    
                    <div class="menuOpcoes">
                        <a class="Opcao" href="#about">About</a>
                        <a class="Opcao" href="#partners">Partners</a>
                        <a class="Opcao" href="#coimbra">Coimbra</a>
                        <a class="Opcao" href="#team">Team</a>
                        <a class="Opcao" href="#contact">Contacts</a>
                    </div>
                    
                    <div class="imgMenu">
                        <a id="link" href="#front"><img  id="logo_mobile" src ="imagens/Cief_final2.png"></a>
                        <a id="hamburger-icon" href="#" title="Menu">
                            <span class="line line-1"></span>
                            <span class="line line-2"></span>
                            <span class="line line-3"></span>
                        </a>
                    </div>
                    
                </div>
            </nav>
            
        </header>
        <body>
            <div id="fullpage">
            <section class="section" id="front">
                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 553.74 397.65"><defs><style>.cls-1{fill:#00a773;}.cls-2{fill:#fff;}.cls-3,.cls-5{fill:none;stroke-miterlimit:10;stroke-width:2px;}.cls-3{stroke:#000;}.cls-4{font-size:103.19px;font-family:Lato-Black, Lato;font-weight:800;}.cls-4,.cls-6,.cls-7{fill:#121617;}.cls-5{stroke:#231f20;}</style></defs><title>header</title><rect class="cls-1" x="101.33" y="147.36" width="333.23" height="148.39"/><rect class="cls-2" x="60.7" y="118.6" width="333.23" height="148.39"/><rect class="cls-3" x="60.7" y="118.6" width="333.23" height="148.39"/><text class="cls-4" transform="translate(86.82 227.54)">C</text><text class="cls-4" transform="translate(176.59 227.54)">I</text><text class="cls-4" transform="translate(231.7 227.54)">E</text><text class="cls-4" transform="translate(311.97 227.54)">F</text><rect class="cls-3" x="19.78" y="16.27" width="102.86" height="102.33"/><rect class="cls-1" x="1" y="1" width="102.86" height="102.86"/><rect class="cls-5" x="1" y="1" width="102.86" height="102.86"/><line class="cls-3" x1="105.02" y1="1.31" x2="123.84" y2="16.58"/><line class="cls-3" x1="103.49" y1="103.33" x2="122.64" y2="117.93"/><rect class="cls-2" x="328.92" y="295.92" width="223.82" height="100.72"/></svg>
            </section>
            <section class="section" id="about">
                <h1>About CIEF</h1>
                <h2>Engineering of Tomorrow</h2>
                <h3 id="data">21 - 31 of July</h3>
                <p id=text_about>CIEF (Coimbra International Engineering Forum) is an engineering forum held in Coimbra, which aims to encourage the University of Coimbra to connect with students from different cultures, namely students from CPLP, Europe and China, using Engineering and Science and Technologies to solve a worldwide problem. </p>
                <p>The participants of this event will have to solve a problem that affects the world population in the present. This problem will focus on environmental, social and humanitarian topics. At the end of the Forum, it is intended to continue in the post-event to implement the winning solution in the real world.
                </p>
                <div class="botao">
                    <button class="cima2" onclick="location.href='participant.html';">Apply</button>
                    <span class="baixo"></span>
                </div>
            </section>
            <section class="section" id="partners">
                <h1>Partners</h1>
                <h2>Help us make this happen</h2>
                <div class="customer-logos slider">
                    <div class="slide"> <a href="https://www.uc.pt/"> <img src="imagens/Reitoria.jpg"> </a> </div>
                    
                </div>
                <div class="botao">
                    <buttom class="cima" onclick="location.href='#contact';">Sponsor us</buttom>
                    <span class="baixo2"></span>
                    
                </div>
            </section>
            <section class="section" id="coimbra">
                <h1>Coimbra</h1>
                <h2>Stay with us for life</h2>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <p id="text_coimbra">Coimbra is a Portuguese city in the center of the country. It is known by the University of Coimbra, founded in the thirteenth century, which UNESCO included in the list of Word Heritage. It’s the city of students, it lives from archaic traditions that connect those who live here to the pulsating history of this city.</p>
                        <p>Coimbra was the capital of the country until 1255 and has the first Portuguese National Pantheon, the Mosteiro de Santa Cruz.</p>
                        <p>They say that those who pass by this city never forget, that it “stays with us for life”, where nostalgia, longing, friendship and joy, are words that transcend when we try to explain the beauty of this city.
                        </p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-md-12 col-lg-6 col-xl-6">
                        <img id="img_coimbra" class="img-responsive" src="imagens/coimbra.jpg">
                    </div>
                </div>
            </section>
            <section class="section" id="schedule">
                <h1>Shedule</h1>
                <h2>What will we do</h2>
                <img src="imagens/horario.jpg">
                </section>
            <section class="section" id="survival">
                <h1>Survival Guide</h1>
                <h2>The wonders of secret places</h2>
                <object data="pdf/survival_guide.pdf" type="application/pdf" width="100%" height="800px"></object>
                </section>
            <section class="section" id="team">
                <h1>Team</h1>
                <h2>Meet the lovely team</h2>
                <a id="link_team" href="team.html"><img class="img-responsive img_team" src="imagens/team.JPG"></a>
            </section>
            <section class="section" id="contact">
                <h1>Contacts</h1>
                <h2>Ask your Questions</h2>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <p id="text_contact">If you have questions or if you want to know more about CIEF don’t hesitate and send us an email ! We’re longing to hear from our future participants or partners!</p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="container form">
                            <form action="index.php#contact" method="post">
                                <p class="error"><?php echo $message_error;?></p>
                                <p class="success"><?php echo $message_success;?></p>
                                <input type="text" id="name" name="name" placeholder="Name">
                                
                                <input type="text" id="mail" name="email" placeholder="E-mail">
                                
                                <select id="subject" name="subject" >
                                    <option disabled selected value style="opacity: 0.4"> -- Select an option -- </option>
                                    <option value="Want to be a sponsor">Want to be a sponsor</option>
                                    <option value="Want to be a participant">Want to be a participant</option>
                                    <option value="Doubts">Doubts</option>
                                    <option value="Other Subjects">Other Subject</option>
                                </select>
                                
                                <textarea id="message" name="message" placeholder="Message" ></textarea>
                                <p class="erro"><?php echo $message_error2; ?></p>
                                <div class="botao3">
                                    <input id="submit" type="submit" value="Send" name="submit">
                                    <span id="baixo_submit"></span>
                                    
                                </div> 
                                
                                
                            </form>
                        </div>
                    </div>
                </div>
            </section>
                
            <footer>
                <div class="redes_sociais">
                    <a href="#"><img class="img-responsive" src="imagens/fb.png"></a>
                    <a href="#"><img class="img-responsive" src="imagens/insta.png"></a>
                    <a href="#"><img class="img-responsive" src="imagens/in.png"></a>
                </div>
                <p>Copyright <i class="far fa-copyright"></i> 2019. All rights reserved to <a href="http://best.uc.pt/">BEST Coimbra</a></p>
            </footer>
            </div>
        </body>

    </body>
</html>