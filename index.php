<?php
$varUsage = "Variables declared using the var keyword are either globally or functionally scoped, they do not support block-level scope. This means that if a variable is defined in a loop or in an if statement it can be accessed outside the block and accidentally redefined leading to a buggy program. As a general rule, you should avoid using the var keyword."


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>
    <h1>PHP Badwords</h1>

    <h1>
        <?php
        echo $varUsage;

        // var is the badword
        echo $_GET['badword'];
        ?>
    </h1>
    
    <h2> Paragraph length is :
        <i>
            <?php
            echo (strlen($varUsage));
            ?>
        </i>
    </h2>
<br>
    <!-- ---------- -->

    <h1> Modified paragraph : <br>
        <?php
        echo $ModParagraph = str_replace ("var", '***', $varUsage );
        ?>
    </h1>
    
    <h2> Paragraph length is :
        <i>
            <?php
            echo (strlen($varUsage));
            ?>
        </i>
    </h2>

</body>

</html>