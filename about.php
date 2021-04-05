<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Байланышуу формасы</title>
</head>

<body>
    <?php require 'blocks/header.php' ?>
    <div class="container mt-4">
        <h3>Байланышуу формасы</h3> <br>
        <form action="check.php" method="post">
            <input type="email" name="email" placeholder="Email жазыңыз" class="form-control">
            <textarea name="message" class="form-control" placeholder="Сиздин кабарыңызды жазыңыз"></textarea>
            <button type="submit" name="send" class="btn btn-success mt-2">Жөнөтүү</button>
        </form>
    </div>
    <?php require 'blocks/footer.php' ?>
</body>

</html>