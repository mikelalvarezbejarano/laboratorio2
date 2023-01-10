<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
        $filas = $_POST["filas"];
        $columns = $_POST["columns"];
    ?>
<center>

    <table cellspacing="0" border="1">
        <?php $x = $filas; ?>
        <?php for($i = 1; $i <= $filas + 1; $i++){ ?>
            <tr>
                <?php $y = $columns; ?>
                <?php for($j = 1; $j <= $columns; $j++){ ?>
                    <?php if($i == $filas + 1) { ?>
                        <?php if($y == 0) { ?>
                            <td class="fondoazul"><?php echo "&nbsp"; ?></td>
                        <?php } else { ?>
                            <td class="fondoazul"><?php echo $y; ?></td>
                        <?php } ?>
                    <?php } else { ?>
                        <td> <?php echo $x*$y; ?> </td>
                    <?php }?>
                    <?php $y--; ?>
                <?php } ?>
                <td class="fondoazul"><?php echo $x; ?></td>
                <?php $x--; ?>
        <?php } ?>
        </tr>
    </table>
    </center>
</body>
</html>