<!DOCTYPE html>

<?php require_once'include/base.php'; ?>

<html>

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <title>gethighered.ca</title>
  
  <link rel="stylesheet" media="screen" type="text/css" href="css/index.css"/>

  

  <script type="text/javascript" src="scripts/jquery-1.10.2.js"></script>

  <script type="text/javascript" src="scripts/jquery-migrate-1.1.0.js"></script>

  <script type="text/javascript" src="scripts/scrollTo.js"></script>

  <script type="text/javascript" src="scripts/jquery.animate-colors.js"></script>

  <script type="text/javascript" src="scripts/jquery.sticky.js"></script>



  <script type="text/javascript" src="scripts/index.js"></script>



  <link rel="shortcut icon" href="favicon.ico" />

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42026531-1', 'gethighered.ca');
  ga('send', 'pageview');

</script>
  
  

</head>

<body>

  <div class="loading"><img src="images/loading.gif" /></div>

  <section class="splash">

    <div id="splashContainer">

      <div id="leftside">

        <img src="images/higher-logo.png" height="200px" width="180px"/>

      </div>

      <div id="rightside">

        <div id="title">higher</div>

      </div>

      <div style="clear: both;"></div>

      <div id="subtitle">Welcome to Higher, where you can apply to over <br> 100 Canadian retail and restaurant jobs in just minutes</div>

      <hr color="ffffff" />

      <div id="scroller" class="bounce">

        <img src="images/scroll-button.png" height="60px" width="60px"/>

      </div>

    </div>

  </section>

  <section class="main">

    <?=$base_menubar?>

    <div id="mainContent">

      <div id="featureContentContainer">

        <div id="featureSlide">

          <div id="macbook">

            <img src="images/macbook-web.png" height="623px" width="1140px"/>

          </div>

          <div id="featureContent">

            <div id="featureTitle">

              Get Highered. Faster.

            </div><br>

              Don't waste time with tedious applications<br>

              Higher gets them done in a fraction of the time<br>

              Get started now!<br><br>

            <span style="margin-left: 20px">

              <a href="/signup" class="buttonalt" id="login">LOGIN</a>

              <a href="/signup" class="buttonalt" id="signup">SIGN UP</a>

            </span>

          </div>

          <div style="clear: both;"></div>

        </div>

      </div>

      <div id="content1Container">

        <div id="content1">

          <div id="sectionTitle">

            Our featured employers

          </div><br>

          <div class="employerList">

            <a child-num="1" href="http://www.ae.com/"><div class="employer" id="americaneagle"></div></a>

            <a child-num="2" href="http://www.alicefazoolis.com/"><div class="employer" id="alicefazoolis"></div></a>

            <a child-num="3" href="http://www.bluemountain.ca/"><div class="employer" id="bluemountain"></div></a>

            <a child-num="4" href="http://www.dominos.com/"><div class="employer" id="dominos"></div></a>

            <a child-num="5" href="http://www.jackastors.com/"><div class="employer" id="jackastors"></div></a>

            <a child-num="6" href="http://www.bramlib.on.ca/"><div class="employer" id="bramptonlibrary"></div></a>

            <a child-num="7" href="http://www.awrestaurants.com/"><div class="employer" id="aw"></div></a>

            <a child-num="8" href="http://www.dockers.ca/"><div class="employer" id="dockers"></div></a>

            <a child-num="9" href="http://www.montanas.ca/"><div class="employer" id="montanas"></div></a>

            <a child-num="10" href="http://www.aroma.ca/"><div class="employer" id="aroma"></div></a>

          </div>

        </div>

      </div>

      <div id="content2Container">

        <div id="content2">

          <div id="sectionTitle" style="position:static; color:#3e3e3e;">

            Testimonials

          </div><br>

          <style>

            #carousel-buttons{

              margin: 0 auto;

              height: 1em;

              width: 60px;

            }

            #carousel-buttons a{

              float: left;

              width: 10px;

              height: 10px;

              margin-left: 5px;

              margin-right: 5px;

              outline: none;

              cursor: pointer;

              background: url("images/pagination-inactive.png");

            }

            #carousel-buttons a.carousel-selected{

              background: url("images/pagination-active.png");

            }

            #carousel{

              font-family: "HelveticaNeueLTStd45Light",Helvetica,Arial,sans-serif;

              color: #3E3E3E;

              font-size: 24pt;

            }

          </style>

          <div id="carousel-buttons"></div>

          <div id="carousel">

            <div>

              &#8220;I love the concept! Working my way through your sign-up process was decently easy and the final applications looked great.&#8221;  -Dave

            </div>

            <div>

              &#8220;Higher is a quick and easy fix to the laborious task of applying to retail jobs.&#8221;  -Jenny Xu

            </div>

            <div>

              &#8220;The entire process of setting up an account and finding potential employers took less than twenty minutes! I've already applied to two different positions, and I can't wait to use Higher again in the future.&#8221;  -Arjun Patel

            </div>

          </div>

          <script>

            (function(){

              var $carousel=$("#carousel"),$buttons=$("#carousel-buttons"),$items=$carousel.children().remove().map(function(i,e){

                return $("<a>").click(function(){

                  $buttons.children().removeClass("carousel-selected");

                  $(this).addClass("carousel-selected");

                  $carousel.empty().append(e);

                })[0];

              }).appendTo($buttons).first().click();

            })();

          </script>

        </div>

      </div>

    </div>

<?=$base_footer?>

