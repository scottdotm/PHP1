<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Class Room 2/20/2017</title>
    </head>
    <body>
        <?php
        //our server defaults to display errors
        //error_reporting(0); //hide all errors
        error_reporting(E_ALL);//show all errors
        ini_set('display_errors','1');//show/hide errors from browser, production only
        
        //Syntax errors-error is BEFORE where it says there is an error
        //use comments to narror down where the error is
        //echo "Hello".$name
        echo "something else";
        
        //RUN TIME ERRORS
        //only kind"googling" will help
        $fruits ='apple';
        sort($fruits); //check documentation for correct usage STRING IS NOT TYPE ARRAY
        
        //runtime error
        //supress runtime errors with @
        @include('test.php');
        
        //valid case for using @
        if(@include('text.php')){
            
        }else{
            include('default.php');
        }
        
        //or seen like this
        @include('text.php') or include('default.php');
        @include('test.php') or die("couldn't find the file");
        
        //Logical Errors
        $gender = 'female';
        
        if($gender = "male"){
            echo "its a boy";
        }else{
            echo "its a girl";
        }
        
        //more logic errors
        set_time_limit(0.001); //Limit how long it runs
        for($i = 0; $i<=0; $i++){
            echo"$i<br>";
            //stop loop if page is taking forever to load
            //die();
            //or break will exit
            //break;
        }
        
        
        ?>
    </body>
</html>
