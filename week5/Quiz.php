<!DOCTYPE html>
<!-- 
/**
 * Description of Knowledge
 *
 * @author Scott Muth <scottdotm.com>
 */
-->
<html>
     <?php
     require('Includes/Header.php')
     ?>
     <body>
          <?php
          require('Includes/Navbar.php');
          ?>
          <section id="body" class="container-fluid" style="padding-top: 100px;">
               <form method='post' name="form1" id="form1" action="">
                    <?php
                    require('Includes/Functions.php');
                    ?>
                    <div class="row">
                         <div class="col">
                              <button type='submit' name='submit' value='submit' class='btn btn-primary btn-lrg'>
                                   Submit
                              </button>
                         </div>
                    </div>
               </form>
          </section>
          <?php
          require('Includes/Footer.php');
          require('Includes/Scripts.php');
          ?>
     </body>
</html>