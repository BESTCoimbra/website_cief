
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

    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

</head>
<body>
    <?php 
    if(isset($_POST['submit'])){
    $to = "bestciefcontacts@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = $_POST['subject'];
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    $success = mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    if($success){
                $message_success = "Message Successfuly Sent";
    }
    else{
                $message_error = "Message Sending Failed, Try Again"; 
            }

    }
    ?>
    <header>
        <nav>
            <div class="menu_desktop">
                <a id="opcaoTop" href="#front"><img  id="logo" src ="imagens/Cief_final.png"></a>
                <a class="opcao" href="#about">About</a>
                <a class="opcao" href="#survival">How do I apply</a>
                <a class="opcao" href="#partners">Partners</a>
                <a class="opcao" href="#coimbra">Coimbra</a>
                <a class="opcao" href="#team">Team</a>
                <a class="opcao" href="#contact">Contacts</a>

            </div>
            <div class="menu_mobile">



                <div class="menuOpcoes">
                    <a class="Opcao" href="#about">About</a>
                    <a class="Opcao" href="#survival">How do I apply</a>
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
                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 553.74 397.65"><defs><style>.cls-1{fill:#00a773;}.cls-2{fill:#fff;}.cls-3,.cls-5{fill:none;stroke-miterlimit:10;stroke-width:2px;}.cls-3{stroke:#000;}.cls-4{font-size:103.19px;font-family:Lato-Black, Lato;font-weight:800;}.cls-4,.cls-6,.cls-7{fill:#121617;}.cls-5{stroke:#231f20;}</style></defs><title>header</title><rect class="cls-1" x="101.33" y="147.36" width="333.23" height="148.39" style="fill: #951b81"/><rect class="cls-2" x="60.7" y="118.6" width="333.23" height="148.39"/><rect class="cls-3" x="60.7" y="118.6" width="333.23" height="148.39"/><text class="cls-4" transform="translate(86.82 227.54)">C</text><text class="cls-4" transform="translate(176.59 227.54)">I</text><text class="cls-4" transform="translate(231.7 227.54)">E</text><text class="cls-4" transform="translate(311.97 227.54)">F</text><rect class="cls-3" x="19.78" y="16.27" width="102.86" height="102.33"/><rect class="cls-1" x="1" y="1" width="102.86" height="102.86" /><rect class="cls-5" x="1" y="1" width="102.86" height="102.86"/><line class="cls-3" x1="105.02" y1="1.31" x2="123.84" y2="16.58"/><line class="cls-3" x1="103.49" y1="103.33" x2="122.64" y2="117.93"/><rect class="cls-2" x="328.92" y="295.92" width="223.82" height="100.72"/></svg>
            </section>
            <section class="section" id="about">
                <h1>About CIEF</h1>
                <h2>Engineering of Tomorrow</h2>
                <h3 id="data">25 - 31 of July</h3>
                <p id=text_about>CIEF (Coimbra International Engineering Forum) is an engineering forum held in Coimbra, in an online format, which aims to create solutions to prob-lems on a worldwide scale, applying knowledge of engineering, science, and technology. The main focus of this event is the competition between the participants, who will have to find viable solutions to the proposed problems, focusing on Environmental and Social & Humanitarian topics. </p>
                <p>The event will have the participation of different cultures.</p>
                <p>There will also exist workshops and lectures with the purpose of providing participants the necessary tools and knowledge for the competition, as well as round tables and discussion panels to enrich and encourage discussion about related topics.</p>
                <div class="botao">
                    <button class="cima2" onclick="location.href='participant.html';">Apply</button>
                    <span class="baixo"></span>
                </div>
            </section>
            <section class="section" id="partners">
                <h1>Partners</h1>
                <h2>Help us make this happen</h2>
               
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
                        <img id="img_coimbra" class="img-responsive" src="imagens/cabra.jpg">
                    </div>
                </div>
            </section>
            <section class="section" id="schedule">
                <h1>Schedule</h1>
                <h2>What will we do</h2>
                <img src="imagens/horario.png">
            </section>


            <section class="section" id="survival">
                <h1>How do I Apply</h1>
                <h2>Don't miss this amazing event</h2>
                <div class="text">
                    <p> If in your university there is a Local BEST Group, apply <a href="https://www.best.eu.org/event/apply/localEvent.jsp?event=m6c42f7">here</a></p>
                    <p> If in your university there is not a Local BEST Group, but you are a student studying in CPLP you can apply <a href="https://forms.gle/qsSGsJyqruBBmkMW9">here.</a></p>
                     <h3>Check this important info below!</h3>
                </div>

                <div class="botao">
                    <button class="cima2" onclick="location.href='pdf/survivalguide.pdf';">Survival Guide</button>
                    <span class="baixo"></span>
             
                </div>
                
                <div class="botao">
                    <button class="cima2" onclick="location.href='pdf/policy.pdf';">Private Policy</button>
                    <span class="baixo"></span>
                </div>
            </section>



            <section class="section" id="team">
                <h1>Team</h1>
                <h2>Meet the lovely team</h2>
                <div class="img_team">

                    
                       <div class="container">
                        <a id="link_team" href="team.html" style="color: black;"> 
                            <div id="row_team" class="row justify-content-center">

                                <div class="col-md-4">
                                    <div class="foto"><img id="foto_team" src="imagens\Fotos\ct\carolina.jpg" style="height: 100%; float: center"></div>
                                    <div class="cargo" style="float: center"><b>Carolina Janeiro</b><br>Main Organizer</div>
                                </div>

                                <div class="col-md-4">
                                    <div class="foto"><img id="foto_team" src="imagens\Fotos\ct\patricia.jpg" style="height: 100%;"></div>
                                    <div class="cargo"><b>Patrícia Cruz</b><br>Secretary</div>
                                </div>

                                <div class="col-md-4">
                                    <div class="foto"><img id="foto_team" src="imagens\Fotos\ct\sofia.jpg" style="height: 100%;"></div>
                                    <div class="cargo"><b>Sofia Almeida</b><br>Design Responsible</div>
                                </div>
                            </div>
                            <div id="row_team" class="row justify-content-center">

                                <div class="col-md-4">
                                    <div class="foto"><img id="foto_team" src="imagens\Fotos\ct\joel.jpg" style="height:100%;"></div>
                                    <div class="cargo"><b>Joel Filho</b><br>CR Responsible</div>
                                </div>

                                <div class="col-md-4">
                                    <div class="foto"><img id="foto_team" src="imagens\Fotos\ct\ana.jpg" style="height: 100%;"></div>
                                    <div class="cargo"><b>Ana Antunes</b><br>Topic Responsible</div>
                                </div>

                                <div class="col-md-4">
                                    <div class="foto"><img id="foto_team" src="imagens\Fotos\ct\lucas.jpg" style="height: 100%;"></div>
                                    <div class="cargo"><b>Lucas Rebelo</b><br>Academics Responsible</div>
                                </div>
                            </div>

                             <div id="row_team" class="row justify-content-center">

                                <div class="col-md-4">
                                    <div class="foto"><img id="foto_team" src="imagens\Fotos\ct\angela.jpg" style="height:100%;"></div>
                                    <div class="cargo"><b>Ângela Calhau</b><br>IT Responsible</div>
                                </div>

                                <div class="col-md-4">
                                    <div class="foto"><img id="foto_team" src="imagens\Fotos\ct\rita.jpg" style="height: 100%;"></div>
                                    <div class="cargo"><b>Rita Reis</b><br>Grants Responsible</div>
                                </div>

                                <div class="col-md-4">
                                    <div class="foto"><img id="foto_team" src="imagens\Fotos\ct\teddy.jpg" style="height: 100%;"></div>
                                    <div class="cargo"><b>José Teodoro</b><br>PR Responsible</div>
                                </div>
                            </div>


  </a>
                        </div>
                  

                </div>
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
                    <a href="https://www.facebook.com/CIEF2020/"><img class="img-responsive" src="imagens/fb.png"></a>
                    <a href="https://www.instagram.com/best_cief/"><img class="img-responsive" src="imagens/insta.png"></a>
                    <a href="https://www.linkedin.com/company/11747385/"><img class="img-responsive" src="imagens/in.png"></a>
                </div>
                <div class="best">
                    <a href="http://best.uc.pt/"><img class="img-responsive" src="imagens/BEST_logo.png"></a>
                </div>
                <div class="copyright">
                    <p>Copyright <i class="far fa-copyright"></i> 2019. All rights reserved to <a href="http://best.uc.pt/">BEST Coimbra</a></p>
                </div>
            </footer>
        </div>
    </body>

</body>
</html>