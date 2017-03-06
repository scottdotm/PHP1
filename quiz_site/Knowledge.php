<!DOCTYPE html>
<!-- 
/**
 * Description of Knowledge
 *
 * @author Scott Muth <scottdotm.com>
 */
-->
<html lang="en">
     <?php
     require('Includes/Header.php');
     ?>
     <body>
          <?php
          $pagename = basename(__FILE__, '.php'); 
          require('Includes/Navbar.php');
          ?>
          <div class="container-fluid" style="padding-top: 100px;">
               <p class="display-3">

               </p>
          </div>
          <div class="container">
               <iframe width="560" height="315" src="https://www.youtube.com/embed/-I73oK9q-jk" frameborder="0" allowfullscreen></iframe>
          </div>
          <div class="container">
          <div class="row">
               <div class="col">
                    <p class="lead">
                         This is the Youtube video explaining the first video game created.
                         Bellow are some pieces of information from the video.
                    </p>
               </div>
          </div>
          
          <div class="row">
               <ul class="list-group">
                    <li class="list-group-item">Nolan Bushnell created Atari.</li>
                    <li class="list-group-item">Ralph Baer created the first video game.</li>
                    <li class="list-group-item">Baer's patents are held by the security contractor he worked for.</li>
                    <li class="list-group-item">Now known as the 'Brown Box' the first video game console was named originally, the 'All Purpose Box'</li>
                    <li class="list-group-item">While with other titles such as Tennis, the game itself was essentially pong.</li>
                    <li class="list-group-item">The first video game created was wrote using programmed cards</li>
               </ul>
          </div>
          </div>
          <?php
          require('Includes/Footer.php');
          require('Includes/Scripts.php');
          ?>
     </body>
</html>