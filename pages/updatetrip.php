<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
        <div class="addform">
            <form class="formadd" method="Post" action="../component/uphandler.php">
            <div class="title"><h1>Upload Product <?php echo $name;?></h1></div>
            <div class="id ad"><label>Trip ID</label><input type="number" name="id" required placeholder="id"></div>
            <div class="name ad"><label>Trip Name</label><input type="text" name="name" required placeholder="name"></div>
            <div class="name ad"><label>Trip Country</label><input type="text" name="country" required placeholder="country"></div>
            <div class="name ad"><label>Trip Town</label><input type="text" name="town" required placeholder="town"></div>
            <div class="name ad"><label>Trip price</label><input type="text" name="price" required placeholder="price"></div>
            <div class="photo ad"><label>Trip photo</label><input type="file" name="photo" required placeholder="photo"></div>
            <div class="name ad"><label>Trip duration</label><input type="text" name="duration" required placeholder="duration"></div>
            <div class="name ad"><label>Trip about</label><input type="text" name="about" required placeholder="about"></div>
            <div class="submit ad"><input type="submit" placeholder="id"></div>
            </form>
        </div>
    </div>
</body>
</html>