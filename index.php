<?php
$message="";
if(!isset($_POST["text"])){
    $message="Welcome!";
} else 
    $message="Ati tastat:".$_POST["text"];

    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="<?php print $_SERVER["PHP_SELF"]?>" method="post">
            <input type="text" align="left" name="text" size="12" maxlength="13"/>
            <input type="submit" value="bau" name="bau"/>
            
        </form>
        <?php print $message;?>
    </body>
</html>
