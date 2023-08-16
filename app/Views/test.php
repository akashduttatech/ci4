<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>

<body>
    <h1>Welcome to test page</h1>
    <p>Name is <?php echo $name; ?>
    </p>
    <p>Age is <?= $age; ?></p>
    <p>
        <?php
        if (!empty($languages)) : ?>
    <ul>
        <?php
            foreach ($languages as $lang) :
        ?>
        <li><?= $lang; ?></li>
        <?php
            endforeach;
        ?>
    </ul>
    <?php
        else :
            echo 'No records found';
        endif;
?>
    </p>

</body>

</html>