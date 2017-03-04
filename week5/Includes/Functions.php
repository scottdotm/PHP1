<?php

echo '<pre>';
var_dump(filter_input_array(INPUT_POST)); // or print_r //r stands for recurssive 
echo '</pre>';

/**
 * Description of functions
 *
 * @author Scott Muth <scottdotm.com>
 */
$counterCorrect = 0;
$counterIncorrect = 0;
$isValid = true;
function percentCorrect($cor,$incor,$isValid){
     $total = $cor+$incor;
     if ($total == 0){
          $isValid = false;
          return "<br>No questions answered";
     } else {
     $percent = ($cor/$total)*100;
     return "<br>".$percent;
     }
}
function check($value){
     if (isset($_POST[$value]) and $_POST[$value] == $value){
          echo ' checked';
     }
     
}
$questions = array(
    array('questionLabel' => 'What was the first video game ever made?', 'answer' => 'Pong', 'possible' => array('Mario', 'Pong', 'Chess', 'Lament')),
    array('questionLabel' => 'Who created the first video game and console?', 'answer' => 'Ralph Baer', 'possible' => array('Robert Kahn', 'Ralph Baer', 'Nolan Bushnell', 'Sir Timothy John Berners-Lee')),
    array('questionLabel' => 'What was the original name of the first video game console?', 'answer' => 'The All Purpose Box', 'possible' => array('Computer', 'Atari Game System', 'Magnavox Odyssey', 'The All Purpose Box')),
    array('questionLabel' => 'First MMO?', 'answer' => 'Ultima Online', 'possible' => array('Runescape', 'World of Warcraft', 'Black Desert', 'Ultima Online')),
    array('questionLabel' => 'First MMO?', 'answer' => 'Ultima Online', 'possible' => array('Runescape', 'World of Warcraft', 'Black Desert', 'Ultima Online'))
);
foreach ($questions as $i => $question) {
     $quesL = $question['questionLabel'];
     echo "<div class='card'><div class='card-block'>";
     echo "<h2 class='card-title'>" . " " . $quesL . "</h2>";
     echo "<div class='btn-group' data-toggle='buttons'>";

     foreach ($question['possible'] as $x => $possible) {
          echo "<label for='" . $quesL . "' class='btn btn-primary btn-lrg'>";
          echo "<input type='radio' name='" . $quesL . "' id='" . $possible . "'value='". $possible;
          $c = str_replace(" ", "_", $quesL);
          $s = filter_input(INPUT_POST, $c, FILTER_SANITIZE_STRING);
          if(isset($s)==$possible){
               echo ' was checked'; 
          }
          echo "' autocomplete='off'>" . $possible;
          echo "</label>";
     }
     echo "</div></div></div>";
}

$_submit = filter_input(INPUT_POST, "submit", FILTER_SANITIZE_STRING);
if (isset($_submit)) {
     
     foreach ($questions as $i => $question) {
          $quesL = $question['questionLabel'];
          if (empty($quesL)) {
               $isValid = false;
          }
          $_checked = str_replace(" ", "_", $quesL);
          $checked = stripslashes($_checked);
          $solution = filter_input(INPUT_POST, $checked, FILTER_SANITIZE_STRING);
          if (empty($solution)) {
               $isValid = false;
          }
          if ($isValid) {
               if ($solution == $question['answer']) {
                    echo "<br> Correct";
                    $counterCorrect++;
               } else {
                    echo "<br> Incorrect";
                    $counterIncorrect++;
               }
               // calculate the percentage based on the number correct out of the total number of questions
               echo $counterCorrect;
               echo $counterIncorrect;
               
          } else {
               $counterIncorrect++;
               echo("<br>Please complete this question");
          }
     }
     echo percentCorrect($counterCorrect,$counterIncorrect,$isValid);
}