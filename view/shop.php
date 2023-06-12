
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><?php echo $shop['name'] ; ?></h2>
   
    <?php foreach ($products as $product){ ?>
      <h2><?php echo $product['name']; ?></h2>
        <?php } ?>
</body>
</html>