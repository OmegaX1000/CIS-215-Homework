<!DOCTYPE html>
    <html>
        <head>
            <title>PHP Survey</title>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        </head>
    <body>
        
        <form action="processing_page.php" method="post" class="survey" style="padding: 20px; ">

            <fieldset>
                <label for="email-id">Enter your email: </label>
                <input type="email" name="email-name" id="email-id">
            </fieldset>

            <fieldset>
                <label>Enter your password: </label>
                <input type="password" name="pw-name" id="pw-id"> <!-- type="password" so that it isn't visible, just "******" -->
            </fieldset>

            <fieldset>
                <label>What age are you? </label><br>
                <?php
                    $Start = 0;
                    $End = 12;

                    for ($i = 0; $i < 13; $i++)
                    {
                        if ($i == 12)
                        {
                            printf("<input type=\"radio\" name=\"age\" id=\"1\", value=\"68+\"><label>13</label><br>");
                        }
                        else
                        {
                            printf("<input type=\"radio\" name=\"age\" id=\"%d\", value=\"%d\">", $i, $i);
                            printf("<label>%d-%d</label><br>", $Start, $End);

                            $Start = $End + 1;
                            $End += 5;
                        }
                    }
                ?>
            </fieldset>

            <fieldset>
                <label>Gender: </label>
                <select name="gender" id="gender">
                    <option value="m">Male</option>
                    <option value="f">Female</option>
                    <option value="nb">Nonbinary</option>
                    <option value="gf">Genderfluid</option>
                    <option value="a">Agender</option>
                    <option value="o">Choose not to say/Other</option>
                </select>
            </fieldset>

            <fieldset>
                <label>What feature from one language do you want to see in PHP and why: </label><br>
                <input type = "text" name = "Question1", id = "Q1">
            </fieldset>

            <fieldset>
                <label>How would you rate PHP on a scale from 1 to 10?</label>
                <input type="number" name="rate-php-num" id="rate-php-num" min="1" max="10" step="1">
            </fieldset>

            <fieldset>
                <a href="data_page.php">Data page</a>
            </fieldset>

            <button type="submit" name="button" id = "button" class="btn btn-info">Submit</button> 
        </form>
    </body>
</html>