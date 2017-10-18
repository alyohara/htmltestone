<?php
/**
 * Created by Angel Leonardo Bianco on 13/10/2017
 * for DSSD
 * angel.leonardo.bianco@gmail.com
 */
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Aseguradora SRL</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!--[if lte IE 8]>
    <script src="../assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="../assets/css/main.css"/>
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="../assets/css/ie9.css"/><![endif]-->
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="../assets/css/ie8.css"/><![endif]-->
</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header">
        <h1><a href="../index.html">Aseguradora SRL</a></h1>
        <!--
        <nav class="links">
            <ul>
                <li><a href="#">Lorem</a></li>
                <li><a href="#">Ipsum</a></li>
                <li><a href="#">Feugiat</a></li>
                <li><a href="#">Tempus</a></li>
                <li><a href="#">Adipiscing</a></li>
            </ul>
        </nav>
        -->

        <nav class="main">
            <ul>
                <!--
                <li class="search">
                <a class="fa-search" href="#search">Search</a>
                <form id="search" method="get" action="#">
                    <input type="text" name="query" placeholder="Search" />
                </form>
                </li>
                -->
                <li class="menu">
                    <a class="fa-bars" href="#menu">Menu</a>
                </li>
            </ul>
        </nav>

    </header>


    <!-- Menu -->
    <section id="menu">

        <!-- Search -->
        <!--
            <section>
                <form class="search" method="get" action="#">
                    <input type="text" name="query" placeholder="Search" />
                </form>
            </section>
        -->
        <!-- Links -->
        <section>

            <ul class="links">
                <li>
                    <a href="#">
                        <h3>Alta de Incidencia</h3>
                        <p>Denuncie un incidente para se resuelto por la aseguradora</p>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <h3>Ver Incidencias</h3>
                        <p>Revice incidencias hechas</p>
                    </a>
                </li>
                <!--
                  <li>
                      <a href="#">
                          <h3>Feugiat veroeros</h3>
                          <p>Phasellus sed ultricies mi congue</p>
                      </a>
                  </li>
                  <li>
                      <a href="#">
                          <h3>Etiam sed consequat</h3>
                          <p>Porta lectus amet ultricies</p>
                      </a>
                  </li>

              -->
            </ul>
        </section>

        <!-- Actions -->
        <section>
            <ul class="actions vertical">
                <li><a href="../index.html" class="button big fit">Log Out</a></li>
                <!-- TODO here we have to add the log out to the incident system for dssd -->
            </ul>
        </section>

    </section>

    <!-- Main -->
    <div id="main">

        <!-- Post -->
        <article class="post">
            <header>
                <div class="title">
                    <h2><a href="#">Alta de Incidencia</a></h2>
                    <p>Complete los siguientes campos:</p>
                </div>
                <!-- <div class="meta">
                    <time class="published" datetime="2015-11-01">November 1, 2017</time>
                    <a href="#" class="author"><span class="name">Jane Doe</span><img src="images/avatar.jpg" alt="" /></a>
                </div>
                -->
            </header>

            <p></p>
            <form id="alta" name="alta" class="alta" action="../src/alta.php" method="post">
                <ul>
                    <li>
                        <h2>Alta de Incidencia</h2>
                        <span class="required_notification">* campo requerido</span>
                    </li>
                    <li>
                        <label for="name">Name:</label>
                        <input type="text" name="name" placeholder="John Doe" autofocus required/>
                    </li>

                    <li>
                        <label for="email">Email:</label>
                        <input type="text" name="email" required/>
                        <span class="form_hint">Proper format "name@something.com"</span>
                    </li>
                    <li>
                        <label for="cant">Cantidad:</label>
                        <button name="menos" id="menos" class="menos"></button>
                        <span class="input_fields_wrap" id="input_fields_wrap" name="input_fields_wrap">
                            <span class="auxiliar" id="auxiliar" name="auxiliar"> - 1 - <input type="hidden"
                                                                                               name="ctobj" id="ctobj"
                                                                                               value="1"/>
                            </span>

                        </span>

                        <button name="mas" id="mas" class="mas"></button>
                        <span class="form_hint"></span>
                    </li>


                </ul>
                <button class="submit" type="submit" style="border: 1px solid rgba(137,159,150,0.43); ">Submit Form
                </button>
            </form>
            <!-- <footer>
                <ul class="actions">
                    <li><a href="#" class="button big">Continue Reading</a></li>
                </ul>
                <ul class="stats">
                    <li><a href="#">General</a></li>
                    <li><a href="#" class="icon fa-heart">28</a></li>
                    <li><a href="#" class="icon fa-comment">128</a></li>
                </ul>
            </footer>
            -->
        </article>


    </div>

    <!-- Sidebar -->
    <section id="sidebar">

        <!-- Intro -->
        <section id="intro">
            <a href="#" class="logo"><img src="../images/logo.jpg" alt=""/></a>
            <header>
                <h2>Aseguradora SRL</h2>
                <p>Una aseguradora derecha</a></p>
            </header>
        </section>

        <!-- Posts List -->

        <ul class="posts">
            <li>
                <article>
                    <header>
                        <h3><a href="#">Una aseguradora a todo trapo</a></h3>
                        <time class="published" datetime="2015-10-20">Octubre 20, 2017</time>
                    </header>
                    <a href="#" class="image"><img src="../images/Untitled-1.jpg" alt=""/></a>
                </article>
            </li>
            <li>
                <article>
                    <header>
                        <h3><a href="#">Acompañando a la tropa</a></h3>
                        <time class="published" datetime="2015-10-15">Octubre 15, 2017</time>
                    </header>
                    <a href="#" class="image"><img src="../images/Untitled-3.jpg" alt=""/></a>
                </article>
            </li>

            <li>
                <article>
                    <header>
                        <h3><a href="#">El mejor precio por el mejor paquete</a></h3>
                        <time class="published" datetime="2015-10-10">Octubre 10, 2017</time>
                    </header>
                    <a href="#" class="image"><img src="../images/Untitled-4.jpg" alt=""/></a>
                </article>
            </li>

            <!-- Footer -->
            <section id="footer">
                <ul class="icons">
                    <li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="fa-rss"><span class="label">RSS</span></a></li>
                    <li><a href="#" class="fa-envelope"><span class="label">Email</span></a></li>
                </ul>
                <p class="copyright">&copy; Grupo11 <a href=#>DSSD</a>.</p>
            </section>
        </ul>
    </section>
    </section>

</div>

<!-- Scripts -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/skel.min.js"></script>
<script src="../assets/js/util.js"></script>
<!--[if lte IE 8]>
<script src="../assets/js/ie/respond.min.js"></script><![endif]-->
<script src="../assets/js/main.js"></script>
<script>
    $(document).ready(function () {

        var max_fields = 10; //maximum input boxes allowed
        var min_fields = 1; //maximum input boxes allowed
        var wrapper = $(".input_fields_wrap"); //Fields wrapper
        var add_button = $(".mas"); //Add button ID
        var del_button = $(".menos"); //Add button ID


        var x = 1; //initlal text box count

        $(add_button).click(function (e) { //on add input button click
            e.preventDefault();

            if (x < max_fields) { //max input box allowed
                x++; //text box increment
                $(".cant").val(x);
                var delwrap = $(".auxiliar"); //span wrapp
                $(delwrap).remove();
                $(wrapper).append('<span class="auxiliar" id="auxiliar" name="auxiliar"> - ' + x + ' - <input type="hidden" name="ctobj" id="ctobj" value="' + x + '" /></span>'); //add input box
                /*$(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box*/
            //TODO debo hacer qu ecree dinamicamente el nombre y el id decada uno de los tempaltes que abajo deberán aparecer
                }
        });

        $(del_button).click(function (e) { //on add input button click
            e.preventDefault();

            if (x > min_fields) { //max input box allowed
                x--; //text box increment
                $(".cant").val(x);
                var delwrap = $(".auxiliar"); //span wrapp
                $(delwrap).remove();
                $(wrapper).append('<span class="auxiliar" id="auxiliar" name="auxiliar"> - ' + x + ' - <input type="hidden" name="ctobj" id="ctobj" value="' + x + '" /></span>'); //add input box

                /*$(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box*/
            }
        });
        /*
         $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
         e.preventDefault(); $(this).parent('div').remove(); x--;
         })*/
    });
</script>

</body>
</html>