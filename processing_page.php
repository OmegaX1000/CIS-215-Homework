<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>

    <body style="padding: 20px; ">
        <?php
        require('../dbconfig.php');

        function CoreSQL($TempEmail, $TempPass, $TempAge, $TempGender, $TempFeat, $TempRating)
        {
            $db = connectDB();
            
            $FormAdd = $db->prepare('INSERT INTO FormData (Email, Passwd, Age, Gender, FeatRequest, Rating) VALUES (?, ?, ?, ?, ?, ?);');
            $InputData = array($TempEmail, $TempPass, $TempAge, $TempGender, $TempFeat, $TempRating);
            $FormAdd->execute($InputData);
        }

        function validate_input()
        {
            $CheckArray = ['m', 'f', 'nb', 'gf', 'a', 'o'];

            $email = filter_var($_POST["email-name"], FILTER_VALIDATE_EMAIL);
            $age = htmlspecialchars($_POST['age']);
            $gender = htmlspecialchars($_POST['gender']);
            $FeatRequest = htmlspecialchars($_POST['Question1']);
            $php_rating = filter_var($_POST["rate-php-num"], FILTER_VALIDATE_INT, array("options"=>array("min_range"=>1, "max_range"=>10)));

            echo $age;

            if($email && $age && $FeatRequest && $php_rating && password_verify($_POST['pw-name'], "$2y$10\$bv/kPoAB6yaWFAfTD374v.JancEMFgppgduSHZVEqOPXU9CP2ggb2") && in_array($gender, $CheckArray, true))
            {
                CoreSQL($email, $_POST['pw-name'], $age, $gender, $FeatRequest, $php_rating);
                return true;
            }
        }

        $safe_input = validate_input();

        if($safe_input)
        {
            echo "\nyay";
            # display page
        }else
        {
            echo "\nboo";
            # display error
        }
        ?>

        <fieldset>
            <a href="data_page.php">Data page</a>
        </fieldset>
    </body>
</html>