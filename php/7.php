<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Стрелка</title>
</head>
<body>
    <p>http://php720.com/task/7</p>

    <?php
    $gradus = 0;
    $hours = 0;
    $can_show_form = true;

    if (isset($_POST['gradus'])) {
        echo 'Введено: ' . $_POST['gradus'] . '<br />';

        $gradus = $_POST['gradus'];

        if ( ctype_digit($gradus) && ($gradus > 0 && $gradus <= 360) ) {
            $can_show_form = false;
            $number = 43200 * $gradus / 360; // 43200 - кол-во секунд в 12 часах 
            $h = $number / 3600;
            $hours = round($h, 0);

            echo 'Часы:' . $hours;
        } else {
            echo '<h2><font color="red">Данные некоректны!</font></h2>';
        }
    }
    ?>

    <?php if ($can_show_form): ?>
        <h1>Введите градусы (0 - 360):</h1>
        <form method="post" action=""> 
            <input type="text" name="gradus"> 
            <input type="submit" value="Отправить" name="submit"> 
        </form>
    <?php endif; ?>            

</body>
</html>