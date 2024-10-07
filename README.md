<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBSITE FREE FIRE</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1><marquee>LOGIN FREE FIRE</marquee></h1>

    <form method="post">
        <label for="email">EMAIL:</label><br>
        <input type="email" id="email" name="inputtext" value="" required><br><br>

        <label for="password">PASSWORD:</label><br>
        <input type="password" id="password" name="password" placeholder="Masukkan password" required><br><br>

        <label for="checkbox">Sudah Lengkap:</label>
        <input type="checkbox" id="checkbox" name="inputtext2" required><br><br>

        <input type="submit" value="Login"><br><br>

        <a href="https://www.instagram.com/">
            <label for="instagram">INSTAGRAM</label>
        </a><br>

        <a href="https://www.facebook.com/">
            <label for="facebook">FACEBOOK</label>
        </a><br>
    </form>

    <?php
    // Mencetak apakah form input sudah diinputkan
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil dan menampilkan data dari hasil inputan
        $inputtext = $_POST["inputtext"];
        $inputtext2 = isset($_POST["inputtext2"]) ? "Checked" : "Unchecked";
        echo "$inputtext<br>$inputtext2";
    }
    ?>
</body>
</html>

               

                
    
