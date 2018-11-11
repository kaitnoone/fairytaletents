<?php require_once 'couch/cms.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
   <head>
      <title>Contact Fairy Tale Tents &amp; Events</title>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
      <meta name="description" content="Welcome! You have found the event planners that will meet and exceed your expectations. We tailor to suit our clients needs, vision, and budget to help create the perfect wedding or upscale event. ">
      <meta name="keywords" content="Fairy Tale Tents and Events Lighting Linens Tables Chandelier outdoor wedding planning sashes , Tents, Tables, Lighting, Chairs, Linens, Portable Restrooms, Fairy Tale Tents and Events, Event Planning, Fairy Tale Tents and Events">
      <meta name="search-terms" content="Tents, Tables, Lighting, Chairs, Linens, Portable Restrooms, Fairy Tale Tents and Events, Event Planning, Fairy Tale Tents and Events">
      <?php include_once "globalincludes.php";?>
      <link href="css/ftstyles.css" rel="stylesheet" type="text/css" />
   </head>
   <?php include_once "Main_Slideshow/home.php";?>
   <body bgcolor="#000000" onLoad="moveto('home')">
      <script>
         (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
         (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
         m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
         })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

         ga('create', 'UA-37748788-8', 'fairytaletentsandevents.com');
         ga('send', 'pageview');

      </script>
      <?php include_once "header.php";?>
      <div style="width:1000px; border:#0affd3 solid; border-width:0px 3px 3px; margin-top:112px; padding-bottom:30px; position:absolute; left:50%; margin-left:-500px; background-image:url(images/white-bg.png); overflow:auto;">
         <cms:editable order='1' name='hero_image' type='richtext'>
            <img src="images/tents.jpg" width="1000" height="384" />
         </cms:editable>
         <div class="contentfull">
            <cms:editable order='2' name='main_content' type='richtext'>
               <p align="center"><img src="images/title-quote.png" width="305" height="55" style="border-width:0px;"/>    </p>
               <center>
                  <p>
                     <br /><br />
              </center>
            </cms:editable>
            <center>
            <div style="margin-top:-40px;">
            <script type="text/javascript">document.write(unescape("%3Ciframe id=\"fb_iframe\" src=\"FairytaleContactForm.php" + window.location.search + "\" width=\"602\" height=\"2270\"allowtransparency=\"true\" scrolling=\"no\" frameborder=\"0\"%3E&lt;a href=\"FairytaleContactForm.php\" title=\"FairytaleContactForm\"&gt;Check out my CoffeeCup Form&lt;/a&gt;%3C/iframe%3E"));</script>
            <noscript>
            <iframe width="602" height="2270" style="border:none; background:transparent; overflow:hidden;"
               id="fb_iframe" src="FairytaleContactForm/FairytaleContactForm.html">
            <a href="FairytaleContactForm.php" title="FairytaleContactForm">Check out my CoffeeCup Form</a>
            </iframe>
            </noscript>
            </div>
            </center>
            <cms:editable order='3' name='footer_now_serving_content' type='richtext'>
               <p><strong>Now Serving:</strong></p>
               <p><strong>Illinois:</strong>
                  Beecher,
                  Blue Island,
                  Bourbonnais,
                  Carol Stream,
                  Channahon,
                  Chicago Heights,
                  Chicago,
                  Crestwood,
                  Crete,
                  Dolton,
                  Frankfort,
                  Glen Ellyn,
                  Glenview,
                  Hinsdale,
                  Homer Glen,
                  Homewood,
                  Joliet,
                  Kankakee,
                  Lemont,
                  Lockport,
                  Lombard,
                  Manhattan,
                  Manteno,
                  Matteson,
                  Minooka,
                  Mokena,
                  Monee,
                  New Lenox,
                  Oak Forest,
                  Oak Lawn,
                  Oakbrook,
                  Orland Park,
                  Palos Heights,
                  Palos Hills,
                  Palos Park,
                  Peotone,
                  Plainfield,
                  Posen,
                  Romeoville,
                  South Holland,
                  St. Charles,
                  Tinley Park,
                  Westmont,
                  Wilmington.
               </p>
               <p><strong>NW Indianna:</strong>
                  Crown Point, Dyer, Merrillville, Schererville, St. John, and Valparaiso and surrounding areas.
               </p>
            </cms:editable>
            <?php include_once "footer.php";?>
         </div>
      </div>
      <div style="width:100%; position:absolute;">
         <center>
            <img src="images/ftlogo.png" width="504" height="203" />
         </center>
      </div>
      </center>
   </body>
</html>
<?php COUCH::invoke();?>