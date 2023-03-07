<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="../../config/controller/proses_create_puisi.php" method="POST">
        <div>
            <label for="judul">Judul:</label>
            <input type="text" name="judul" required>
        </div>
        <div>
            <label for="genre">Genre:</label>
            <input type="text" name="genre" required>
        </div>
        <div>
            <label for="isi">Isi:</label>
            <textarea name="isi" rows="10" required></textarea>
        </div>
        <input type="submit" value="Submit">
    </form>
</body>

</html>