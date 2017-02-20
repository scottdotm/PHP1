<!DOCTYPE html>
<!-- 
/**
 * Description of RicksDesks
 *
 * @author Scott Muth <scottdotm.com>
 */
-->
<html lang="en">
     <head>
          <meta charset="UTF-8">
          <title>Rick's Desks</title>
          <meta charset="utf-8">
          <meta name="keywords" content="DESK, DESK, DEEEEEESSSSKKKKKKSSSSSSS!">
          <meta name="description" content="Rick Hammers Desks">
          <meta name="author" content="Scott Muth">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
          <link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.9.0/css/alertify.min.css"/>
     </head>
     <body>
          <?php
//          echo '<pre>';
//          var_dump(filter_input_array(INPUT_POST)); // or print_r //r stands for recurssive 
//          echo '</pre>';

          $wood = '';
          $lenError = '';
          $widthError = '';
          $drawerError = '';
          $fillOutForm = '';
          $price = 0;
          if (isset($_POST['submit'])) {
               $length = $_POST['length'];
               $width = $_POST['width'];
               $drawerNum = $_POST['drawerNum'];
               $wood = isset($_POST['wood']) ? $_POST['wood'] : '';
               $isValid = true;
               if (!is_numeric($length)) {
                    $isValid = false;
                    $lenError = "Length Error";
               }
               if (!is_numeric($width)) {
                    $isValid = false;
                    $widthError = "Width Error";
               }
               if (!is_numeric($drawerNum)) {
                    $isValid = false;
                    $drawerError = "Drawer Number Error";
               }
               if ($isValid) {
                    $area = $length * $width;
                    $drawerPrice = $drawerNum * 30;
                    $base = 200 + $drawerPrice;
                    if ($wood == "Mahogany") {
                         $price = $base + 150;
                    }
                    if ($wood == 'Oak') {
                         $price = $base + 125;
                    }
                    if ($wood == 'Pine') {
                         $price = $base;
                    }
                    if (750 < $area) {
                         $price = $base + 50;
                    }
               } else {
                    $fillOutForm = "<h1 class='text-center'>Please complete all fields.</h1>";
               }
          }
          ?>
          <div class='container'>
               <div class='jumbotron'>
               <h1 class="text-center">Rick's Desks - Just ask me about my desks.</h1>
               <?php if (!isset($_POST['submit'])): ?>
               <img src="workspace-820315_1920.jpg" class="img-fluid" alt="Just One of my many mighty desks."/>
               <?php endif ?>
               </div>
               <?php if (!isset($_POST['submit'])|| ! $isValid): ?>
                    <h1><span class="text-danger"><?= $fillOutForm ?></span></h1>
                    <div class="card text-left">
                         <div class="card-block">
                              <form method='post' name="form1" id="form1" action="">
                                   <div class="form-group">
                                        <label>Length</label>
                                        <input type="number" name="length" placeholder="Length"><span class="text-danger"><?= $lenError ?></span>
                                   </div>
                                   <div class="form-group">
                                        <label>Width</label>
                                        <input type="number" name="width" placeholder="Width"><span class="text-danger"><?= $widthError ?></span>
                                   </div>
                                   <div class="form-group">
                                        <label>Drawers</label>
                                        <input type="number" name="drawerNum" placeholder="Number of Drawers"><span class="text-danger"><?= $drawerError ?></span>
                                   </div>
                                   <div class="form-group">
                                        <div class="radio">
                                             <label><input type="radio" value="Mahogany" id="wood1" name="wood" <?= $wood == "Mahogany" ? 'checked' : ' ' ?> >Mahogany</label>
                                        </div>
                                        <div class="radio">
                                             <label><input type="radio" value='Oak' id="wood2" name="wood" <?= $wood == 'Oak' ? 'checked' : ' ' ?> >Oak</label>
                                        </div>
                                        <div class="radio">
                                             <label><input type="radio" value='Pine' id="wood3" name="wood" <?= $wood == 'Pine' ? 'checked' : ' ' ?> >Pine</label>
                                        </div>
                                   </div>
                                   <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                              </form>
                         </div>
                    </div>
               <?php endif ?>
               <?php if (isset($_POST['submit']) && $isValid): ?>
                    <table class="table tabel-bordered table-hover table-inverse">
                         <thead>
                              <tr>
                                   <th>#</th>
                                   <th>Length</th>
                                   <th>Width</th>
                                   <th>Number of Drawers</th>
                                   <th>Wood Type</th>
                                   <th>Price</th>
                              </tr>
                         </thead>
                         <tbody>
                              <tr>
                                   <th scope="row">1</th>
                                   <td scope="row"><?= $length ?></td>
                                   <td scope="row"><?= $width ?></td>
                                   <td scope="row"><?= $drawerNum ?></td>
                                   <td scope="row"><?= $wood ?></td>
                                   <td scope="row"><?= $price ?></td>
                              </tr>
                              <tr>
                                   <th scope="row">2</th>
                                   <td scope="row"><?= $length ?></td>
                                   <td scope="row"><?= $width ?></td>
                                   <td scope="row"><?= $drawerNum ?></td>
                                   <td scope="row"><?= $wood ?></td>
                                   <td scope="row"><?= $price ?></td>
                              </tr>
                              <tr>
                                   <th scope="row">3</th>
                                   <td scope="row"><?= $length ?></td>
                                   <td scope="row"><?= $width ?></td>
                                   <td scope="row"><?= $drawerNum ?></td>
                                   <td scope="row"><?= $wood ?></td>
                                   <td scope="row"><?= $price ?></td>
                              </tr>
                         </tbody>
                    </table>
                    <h3 class='text-center'>Thank you for your order, have a wonderful day.</h3>
               <?php endif ?>
          </div>  
          <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
     </body>
</html>