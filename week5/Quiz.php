<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
     <?php
     require('Includes/Header.php')
     ?>
     <body>
          <?php
          require('Includes/Navbar.php');
          ?>
          <div class="container-fluid" style="padding-top: 100px;">
               <form method='post' name="form1" id="form1" action="">
                    <?php
//                    echo '<pre>';
//                    var_dump(filter_input_array(INPUT_POST)); // or print_r //r stands for recurssive 
//                    echo '</pre>';
                    $questions = array(
                        array('questionLabel' => 'First Video Game?', 'answer' => 'Pong', 'possible' => array('Mario', 'Pong', 'Chess', 'Lament')),
                        array('questionLabel' => 'First MMO?', 'answer' => 'Ultima Online', 'possible' => array('Runescape', 'World of Warcraft', 'Black Desert', 'Ultima Online')),
                        array('questionLabel' => 'First MMO?', 'answer' => 'Ultima Online', 'possible' => array('Runescape', 'World of Warcraft', 'Black Desert', 'Ultima Online')),
                        array('questionLabel' => 'First MMO?', 'answer' => 'Ultima Online', 'possible' => array('Runescape', 'World of Warcraft', 'Black Desert', 'Ultima Online')),
                        array('questionLabel' => 'First MMO?', 'answer' => 'Ultima Online', 'possible' => array('Runescape', 'World of Warcraft', 'Black Desert', 'Ultima Online'))
                    );
                    foreach ($questions as $i => $question) {
                         echo "<div class='card'><div class='card-block'>";
                         echo "<h2 class='card-title'>" . " " . $question['questionLabel'] . "</h2>";
                         echo "<div class='btn-group' data-toggle='buttons'>";

                         foreach ($question['possible'] as $x => $poss) {
                              echo "<label class='btn btn-primary btn-lrg'>";
                              echo "<input type='radio' name='" . $question['questionLabel'] . "' id='" . $poss . "'value='" . $poss . "' autocomplete='off'>" . $poss;
                              echo "</label>";
                         }
                         echo "</div></div></div>";
                    }
                    $_submit = filter_input(INPUT_POST, "submit");

                    if (isset($_submit)) {
                         foreach ($questions as $i => $question) {
                              $_checked = str_replace(" ", "_", $question['questionLabel']);
                              $solution = filter_input(INPUT_POST, $_checked);
                              if ($solution == $question['answer']) {
                                   echo "Correct";
                              } else {
                                   echo "Incorrect";
                              }
                         }
                    }
                    ?>
                    <br>
                    <br>
                    <button type='submit' name='submit' value='submit' class='btn btn-primary btn-lrg'>Submit</button>
               </form>
          </div>
          <?php
          require('Includes/Footer.php');
          require('Includes/Scripts.php');
          ?>
     </body>
</html>