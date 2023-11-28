<?php
  
  if($_SERVER["REQUEST_METHOD"] == "POST"){

        $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT);
        $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT);
        $operator = htmlspecialchars($_POST["operator"]);

        $errors = false;

        if(empty($num01) || empty($num02) || empty($operator)){
            echo "<p>Fill in all fields !</p>";
            $errors = true;
        }

        if(!is_numeric($num01) || !is_numeric($num02)){
            echo "<p>Only write numbers !</p>";
            $errors = true;
        }

        if(!$errors){
            $value = 0;

            switch($operator){
                case "add":
                    $value = $num01 + $num02;
                    break;
                case "substract":
                    $value = $num01 - $num02;
                    break;
                case "multiply":
                    $value = $num01 * $num02;
                    break;
                case "divide":
                    $value = $num01 / $num02;
                    break;
                default:
                    echo "<p>Something went wrong !</p>";
            }


        }
    }
    