<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP WEB 3</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
</head>
<body>
    <?php
    include('koneksi.php');
    $sql = "select * from berita";
    $result = $conn->query($sql);
    // var_dump($result);
    ?>
    <h1>CRUD PHP PEMROGRAMAN WEB 3</h1>
    <table class="table table-striped">
        <thead> 
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Tampilkan</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if($result->num_rows>0)
            {
                $no=1;
                while($row = $result->fetch_assoc()) 
                {
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row['judul'];?></td>
                        <td><?php echo $row['isi'] ;?></td>
                        <td><?= $row['tampilkan'] ;?></td>
                        <td></td>
                    </tr>
                    <?php
                }
            }
            ?>
            
        </tbody>
    </table>
</body>
</html>