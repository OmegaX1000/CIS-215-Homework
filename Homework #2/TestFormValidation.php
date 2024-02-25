<!-- 
    Description: Presents your test score.
    Author: Matthew Rada
-->

<!DOCTYPE html>
<html>
    <head>
        <title>Web Forms</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>

    <body>
        <?php
            //@function GradeQuiz();
            //@desc Takes your answers and checks them against the correct answers, giving you your score.
            //@return Integer
            function GradeQuiz()
            {
                $Correct = 0;
                $NumName = array("One", "Two", "Three", "Four", "Five", "Six");
                $CorrectAns = array(2, 3, 1, 1, 1, 4);

                for ($k = 0; $k < 6; $k++)
                {
                    $Name = "Question" . $NumName[$k];
                    $Answer = $_POST[$Name];

                    if ($Answer == $CorrectAns[$k])
                    {
                        $Correct++;
                    }
                }

                return $Correct;
            }

            $Result = GradeQuiz();
            
            printf("<header style = 'padding: 20px; text-align: center; font-size: 40px;'>Video Game Quiz!</header>");  
            
            switch ($Result)
            {
                case 0:
                {
                    printf("<p style = 'padding: 20px; font-size: 20px;'>Test Score: %d/6 <br> ...</p>", $Result);
                    break;
                }
                case 1:
                case 2:
                {
                    printf("<p style = 'padding: 20px; font-size: 20px;'>Test Score: %d/6 <br> It's Okay, there's always next time.</p>", $Result);
                    break;
                }
                case 3:
                case 4:
                {
                    printf("<p style = 'padding: 20px; font-size: 20px;'>Test Score: %d/6 <br> Fantastic! How about you try again for a better score.</p>", $Result);
                    break;
                }
                case 5:
                case 6:
                {
                    printf("<p style = 'padding: 20px; font-size: 20px;'>Test Score: %d/6 <br> \"Your Pretty Good\", Metal Gear Solid 3</p>", $Result);
                    break;
                }
                default:
                {
                    printf("<p style = 'padding: 20px; font-size: 20px;'>An error has occured...</p>");
                    break;
                }
            }
        ?>
    </body>
</html>