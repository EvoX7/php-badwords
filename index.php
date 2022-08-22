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

    <p>
        <?php
        echo $varUsage;
        ?>
    </p>

    <p>
        <?php
        $censored = $_GET['badword'];
        ?>
    </p>

    <p> Paragraph length is :
        <i>
            <?php
            echo strlen($varUsage);
            ?>
        </i>
    </p>
    <br>

    <!-- ---------- -->
    <p><strong> Modified paragraph</strong> : <br>
        <?php
        $ModParagraph = str_replace($censored, '***', $varUsage);
        echo $ModParagraph;
        ?>
    </p>

    <p> Paragraph length is :
        <i>
            <?php
            echo (strlen($ModParagraph));
            ?>
        </i>
    </p>
</body>

</html>