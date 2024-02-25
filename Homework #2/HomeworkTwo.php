<!-- 
    Description: Presents a Quiz to the user, when the use presses Submit then they will go to TestFormValidation.php.
    Author: Matthew Rada
-->
<!DOCTYPE html>
<html>
    <head>
        
        <title>Homework #2 - POP Quiz!</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
    </head>
    <body>
        <header style = "padding: 20px; text-align: center; font-size: 40px;">Video Game Quiz!</header>
        <form style = "padding: 20px;" action="TestFormValidation.php" method="post" class="BuzzFeed Quiz">
            <fieldset>
                <legend>1. When was the NES (Nintendo Entertainment System) Released in America?</legend>
                <label><input type='radio' name='QuestionOne' id='$One' value='1'>July 15, 1983</label><br>
                <label><input type='radio' name='QuestionOne' id='$One' value='2'>October 18, 1985</label><br>
                <label><input type='radio' name='QuestionOne' id='$One' value='3'>September 1, 1986</label><br>
                <label><input type='radio' name='QuestionOne' id='$One' value='4'>August 14, 1995</label><br>
            </fieldset>
            <fieldset>
                <legend>2. What the first commerically successful video game?</legend>
                <label><input type='radio' name='QuestionTwo' id='$Two' value='1'>Metroid</label><br>
                <label><input type='radio' name='QuestionTwo' id='$Two' value='2'>Super Mario Bros</label><br>
                <label><input type='radio' name='QuestionTwo' id='$Two' value='3'>Pong</label><br>
                <label><input type='radio' name='QuestionTwo' id='$Two' value='4'>Super Smash bros</label><br>
            </fieldset>
            <fieldset>
                <legend>3. What was the name of the first 3D Video Game Console?</legend>
                <label><input type='radio' name='QuestionThree' id='$Three' value='1'>Nintendo N64</label><br>
                <label><input type='radio' name='QuestionThree' id='$Three' value='2'>Sony Playstation</label><br>
                <label><input type='radio' name='QuestionThree' id='$Three' value='3'>Original XBox</label><br>
                <label><input type='radio' name='QuestionThree' id='$Three' value='4'>Sega Saturn</label><br>
            </fieldset>
            <fieldset>
                <legend>4. What is the name of the green dinosaur character from Super Mario World?</legend>
                <label><input type='radio' name='QuestionFour' id='$Four' value='1'>Yoshi</label><br>
                <label><input type='radio' name='QuestionFour' id='$Four' value='2'>Birdo</label><br>
                <label><input type='radio' name='QuestionFour' id='$Four' value='3'>Mini-Yoshi</label><br>
                <label><input type='radio' name='QuestionFour' id='$Four' value='4'>Gonzales</label><br>
            </fieldset>
            <fieldset>
                <legend>5. What video game does the One-Up Mushroom Belong to?</legend>
                <label><input type='radio' name='QuestionFive' id='$Five' value='1'>Super Mario Bros</label><br>
                <label><input type='radio' name='QuestionFive' id='$Five' value='2'>The Legend of Zelda</label><br>
                <label><input type='radio' name='QuestionFive' id='$Five' value='3'>Metroid</label><br>
                <label><input type='radio' name='QuestionFive' id='$Five' value='4'>Crash Bandicoot</label><br>
            </fieldset>
            <fieldset>
                <legend>6. How many Buttons Did the Original NES Controller Have?</legend>
                <label><input type='radio' name='QuestionSix' id='$Six' value='1'>5</label><br>
                <label><input type='radio' name='QuestionSix' id='$Six' value='2'>6</label><br>
                <label><input type='radio' name='QuestionSix' id='$Six' value='3'>7</label><br>
                <label><input type='radio' name='QuestionSix' id='$Six' value='4'>8</label><br>
            </fieldset>
            
            <button type="submit" name="button" id = "button" class="btn btn-info">Submit</button> 
        </form>
    </body>
</html>