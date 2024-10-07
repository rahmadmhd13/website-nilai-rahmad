<html>
    <head> 
        <title>kelulusan mahasiswa</title>
    </head>
    <body>
        <div class="container">
            <link rel="stylesheet" type="text/css" href="style.css">
            <h2> penentuan kelulusan mahasiswa <h2>
                <?php
                if ($_SERVER["REQUEST_METHOD"]=="POST"){
                    $nama=$_POST['nama'];
                    $nilai=$_POST['nilai'];
                
                    $status=($nilai>=60) ? "lulus" : "tidak lulus";

                    echo"<p>nama mahasiswa:$nama</p>";
                    echo"<p>nilai akhir:$nilai<p>";
                    echo"<p>status kelulusan:<strong>$status</strong></p>";
                    echo"<a href='mahasiswa.php'>kembali</a>";
                }else {
                    ?>
                    <form action="mahasiswa.php"method="post">
                      <label for="nama">nama mahasiswa:</label><br>
                      <input type="text"id="nama"name="nama" required><br>
                      <label for="nilai">nilai akhir:</label><br>
                      <input type="number"id="nilai"name="nilai" required><br>
                      <button type="submit">tentukan kelulusan</button></form>
                      <?php
                }
                    ?>
                </div></body></html>      

                
               

                
    