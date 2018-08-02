<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Send mail</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="/index.html.php" method="post" class="form">
        
        <div class="form">
            <label for="email">
                <h3>Enter your email: </h3>
                <input type="email" name="email" id="email" required>
            </label>
        </div>
        <div class="form">
            <label for="msg">
                <h3>Enter your message:</h3>
                <textarea id="advanced" name="msg" rows="3" cols="33" maxlength="200" wrap="hard"></textarea>
            </label>
        </div>
        <div class="form">
            <input type="submit" value="Send">
        </div>
    </form>
    <?php
        if ($_POST['msg'] && $_POST["email"]){
            $subject = 'no subject';
            $headers = 'From: webmaster@example.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

            mail($_POST["email"], $subject, $_POST['msg'], $headers);
        }
    ?>
</body>
</html>