<!DOCTYPE html>
<html >
<head >
    <meta charset = "utf-8" >

    <script src = "https://use.fontawesome.com/64fa1dc8a7.js" ></script >

    <!--Import materialize.css-->
    <!--    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css" >-->
    <!--Let browser know website is optimized for mobile-->
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
    <link rel = "stylesheet" href = "http://www.w3schools.com/lib/w3.css" >
    <link href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel = "stylesheet"
          integrity = "sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin = "anonymous" >

    <link href = 'https://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel = 'stylesheet'
          type = 'text/css' >
    <link href = '<?= base_url("/assets/css/jquery.fullpage.min.css") ?>' rel = 'stylesheet' type = 'text/css' >
    <link href = '<?= base_url("/assets/css/examples.css") ?>' rel = 'stylesheet' type = 'text/css' >
    <link href = 'https://fonts.googleapis.com/css?family=Indie+Flower' rel = 'stylesheet' type = 'text/css' >
    <style >
        * {
            font-family : "Lato";
            color       : white;
            }

        footer:before {
            color : white;
            }

        blockquote footer {
            color : white !important;
            }

        blockquote > footer, blockquote > footer > cite {
            font-family : 'Indie Flower', cursive;
            }

        .image {
            background-image : url(<?=base_url("assets/img/first.jpg")?>);
            }

        .section {
            background-size : cover;
            }

        .slide {
            background-size : cover;
            }

        #infoMenu {
            margin-bottom : 70px;
            }

        #fp-nav.right {
            right : 60px !important;
            }


    </style >

    <title >Home</title >

</head >
<body >

<nav class = "navbar navbar-default navbar-fixed-top" >
    <div class = "container-fluid" >
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class = "navbar-header" >
            <button type = "button" class = "navbar-toggle collapsed" data-toggle = "collapse"
                    data-target = "#bs-example-navbar-collapse-1" aria-expanded = "false" >
                <span class = "sr-only" >Toggle navigation</span >
                <span class = "icon-bar" ></span >
                <span class = "icon-bar" ></span >
                <span class = "icon-bar" ></span >
            </button >
            <a class = "navbar-brand" href = "#" >Qoutes</a >
        </div >

        <ul class = "nav navbar-nav" >
            <li data-menuanchor = "firstPage" class = "active" ><a href = "#firstPage" >First Qoute</a ></li >
            <li data-menuanchor = "secondPage" ><a href = "#secondPage" >Second Qoute</a ></li >

        </ul >


    </div ><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav >
<div class = "row" >


    <div id = "fullpage" >
        <div class = "section active image" id = "section0" >
            <div class = "" >
                <blockquote >
                    <p >Hello World.</p >
                    <footer > Said by <cite title = "Source Title" >Every programmer</cite ></footer >
                </blockquote >
            </div >
        </div >
        <div class = "section" id = "section1" >
            <div class = "slide " >
                <div class = "intro" >
                    <h1 >More Qoutes when you slide</h1 >
                    <p >When you slide you will get more beautiful qoutes</p >

                </div >

            </div >

            <?php $count = 1; ?>
            <?php foreach ( $messages as $message )
            {


                ?>
                <div class = "slide" >
                    <div class = "intro" >
                        <div class = "container" >
                            <div class = "w3-card-12" style="background-color:#4F5155;">
                                <img
                                    data-src = "<?= base_url("assets/img/meme/" . $random_imgs[ rand(1, 14) ] . ".jpg") ?>" />
                                <div class = "w3-container w3-center" >
                                    <blockqoute >
                                        <p id = "message-<?= $count++ ?>" ><?= $message->message ?></p >
                                        <footer > <cite
                                                title = "Source Title" ><?= $message->subtitle ?></cite >
                                        </footer >
                                    </blockqoute >
                                </div >
                            </div >
                        </div >
                    </div >
                </div >
            <?php } ?>

        </div >

    </div >

    <?php

    ?>

</div >


<!--Import jQuery before materialize.js-->
<script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js" ></script >
<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity = "sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin = "anonymous" ></script >
<!--<script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js" ></script >-->
<!-- This following line is optional. Only necessary if you use the option css3:false and you want to use other easing effects rather than "linear", "swing" or "easeInOutCubic". -->
<script src = "<?= base_url("/assets/vendors/jquery.easings.min.js") ?>" ></script >


<!-- This following line is only necessary in the case of using the plugin option `scrollOverflow:true` -->
<script type = "text/javascript" src = "<?= base_url("/assets/vendors/scrolloverflow.min.js") ?>" ></script >
<script type = "text/javascript" src = "<?= base_url("/assets/js/jquery.fullpage.min.js") ?>" ></script >
<script src = "<?= base_url("/assets/js/is.min.js") ?>" type = "text/javascript" ></script >

<script src = "http://code.responsivevoice.org/responsivevoice.js" ></script >

<script >
    $(function () {
        $.tog = 1;
        function toggle() {
            if ($.tog == 1) {
                $.tog = 2;
                return 2;
            }
            else {
                $.tog = 1;
                return 1;
            }
        }

        speakmymind(10, "Hello World");
        function speakmymind(count, message) {
            var msg      = new SpeechSynthesisUtterance();
            var voices   = window.speechSynthesis.getVoices();
            msg.voice    = voices[toggle()]; // Note: some voices don't support altering params
            msg.voiceURI = 'native';
            msg.volume   = 1; // 0 to 1
            msg.rate     = 1; // 0.1 to 10
            msg.pitch    = 2; //0 to 2
            msg.text     = message;
            msg.lang     = 'en-US';

            msg.onend = function (e) {
                console.log('Finished in ' + e.elapsedTime + ' seconds.');
            };

            console.log(message);
            speechSynthesis.speak(msg);
        }


        $('#fullpage').fullpage({
            anchors           : ['firstPage', 'secondPage', '3rdPage'],
            sectionsColor     : ['#F8F8F8', '#1BBC9B', '#F8F8F8'],
            navigation        : true,
            navigationPosition: 'right',
            navigationTooltips: ['First', 'Second', 'Third'],
            slidesNavigation  : true,
            onLeave           : function (index, nextIndex, direction) {

            },
            afterSlideLoad    : function (anchorLink, index, slideAnchor, slideIndex) {


                var say = $("#message-" + slideIndex).text().toString();
                console.log(say);
                speakmymind(slideIndex, say);
            }
        });

        $(".fp-slidesNav .bottom").load(function () {
            $(this)
        })
    });
</script >
</body >
</html >

