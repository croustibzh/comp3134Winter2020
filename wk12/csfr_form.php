<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $sess = session_start();
    $sess['confimation'] = rand();
    ?>
</head>

<body>
<form method="post" action="csfr.php" name="csfr_form">
    <input type="text" name="username"  placeholder="username" value="host">
    <input type="password" name="password"  placeholder="password" value="pass">
    <input type="hidden" name="confirmation" value="<?php echo $sess['confimation']?>">
</form>
<script>
    window.onload = function () {
        document.forms['csfr_form'].submit();
    }
</script>
</body>

</html>






