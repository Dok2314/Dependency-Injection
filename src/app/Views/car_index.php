<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cars</title>
</head>
<body>
<h1>List of Cars</h1>

<?php foreach ($cars as $car) { ?>
    <div>
        <?php echo $car['id'] ?>
        <?php echo $car['mark'] ?>
        <?php echo $car['model'] ?>
        <?php echo $car['price'] ?>
    </div>
    <hr>
<?php } ?>

</body>
</html>
