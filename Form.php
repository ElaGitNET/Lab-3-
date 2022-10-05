<!DOCTYPE HTML>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PHP Lab 3 task</title>
        <link rel="stylesheet" href="/Lab3/style.css">
    </head>
    <body>

    <!--HTML FORM-->
    <form action = "FormHandling.php" method = "POST">
        <dl>
            <dt>Name:</dt>
                <dd><input type = "text" name = "name"></dd>
            <dt>Email Address:</dt>
                <dd><input type = "text" name = "mail"></dd>
            <dt>Address:</dt>
                <dd><input type = "text" name = "address"></dd>
            <dt>Phone Number:</dt>
                <dd><input type = "text" name = "number"></dd>
        </dl>

        <!-- DROP DOWN Skillset -->
        <fieldset>
            <legend>Choose the skillset of your Computing Courses</legend>
            Beginner<input type = "radio" name="definition" value="Beginner"><br>
            Intermediate<input type = "radio" name="definition" value="Intermediate"><br>
            Advanced<input type = "radio" name="definition" value="Advanced"><br>
        </fieldset>
        
        <!-- DROP DOWN COURSE-->
        <fieldset>
            <legend>Choose your course</legend>
            Networking<input type = "radio" name="definition" value="Networking"><br>
            Web Design<input type = "radio" name="definition" value="Web Design"><br>
            Programming<input type = "radio" name="definition" value="Programming"><br>
        </fieldset>

        <?php
        date_default_timezone_set('UTC');
        $time = date('H:i, F j, Y');
        $user = 'User';
        
        echo '
        <form action = "FormHandling.php" method = "POST">
            <fieldset>
                <legend>Please leave a comment in the area below</legend>
                <textarea rows = "5" cols="20" name="comment"></textarea>

                <input type = "hidden" name = "user" value = "'.$user.'">
                <input type = "hidden" name = "time" value = "'.$time.'">
            </fieldset>
            
            <p><input type = "submit"></p>
        </form>';
        ?>

    </form>

    </body>
</html>
