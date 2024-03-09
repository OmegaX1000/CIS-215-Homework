<!DOCTYPE html>
<html>
    <head>
    </head>

    <body>
        <?php
        require('../dbconfig.php');

        $db = connectDB();
        $GlobalPassword = "";

        function CoreSQL($TempEmail, $TempPass, $TempAge, $TempGender, $TempFeat, $TempRating)
        {
            $FormCreate = $db->prepare('CREATE TABLE FormData (id INT PRIMARY KEY AUTO_INCREMENT, Email UNIQUE TEXT(256), Passwd TEXT, Age INT, Gender TEXT, FeatRequest TEXT, Rating TEXT);');
            $FormCreate->execute();
            
            $FormAdd = $db->prepare('INSERT INTO FormData (Email, Passwd, Age, Gender, FeatRequest, Rating) VALUES (?, ?, ?, ?, ?, ?);');
            $InputData = array($TempEmail, $TempPass, $TempAge, $TempGender, $TempFeat, $TempRating);
            $FormAdd->execute($InputData);
        }

        function validate_input()
        {
            $CheckArray = ['m', 'f', 'nb', 'gf', 'a', 'o'];

            $email = filter_var($_POST["email-name"], FILTER_VALIDATE_EMAIL);
            $password = $_POST['pw-name'];
            $age = htmlspecialchars($_POST['age']);
            $gender = htmlspecialchars($_POST['gender']);
            $FeatRequest = htmlspecialchars($_POST['Question1']);
            $php_rating = filter_var($_POST["rate-php-num"], FILTER_VALIDATE_INT, array("options"=>array("min_range"=>1, "max_range"=>10)));
            
            $GlobalPassword = password_hash($password);

            if($email && $age && $FeatRequest && $php_rating && password_verify($password, $GlobalPassword) && in_array($gender, $CheckArray, true))
            {
                CoreSQL($email, $password, $age, $gender, $FeatRequest, $php_rating);
                return true;
            }
        }

        $safe_input = validate_input();

        if($safe_input)
        {
            echo "yay";
            # display page
        }else
        {
            echo "boo";
            # display error
        }
        ?>
    </body>
</html>