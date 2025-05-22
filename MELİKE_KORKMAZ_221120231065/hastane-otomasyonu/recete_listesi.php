<?php
// Veritabanı bağlantısı
$con = mysqli_connect("localhost", "root", "", "hospitalms");

if (mysqli_connect_errno()) {
    echo "Bağlantı hatası: " . mysqli_connect_error();
    exit();
}

$query = "SELECT * FROM prestb";
$result = mysqli_query($con, $query);
$cnt = 1;
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reçeteler</title>
    <!-- Bootstrap ve W3CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        body {
            margin-left: 15%;
            transition: margin-left 0.5s;
        }
        .main-content {
            padding: 20px;
        }
        .table-hover tbody tr:hover {
            background-color: #f8f9fa;
        }
        @media (max-width: 768px) {
            body {
                margin-left: 0;
            }
            .w3-sidebar {
                width: 100%;
                display: none;
            }
        }
    </style>
</head>

<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:15%; position:fixed; height:100%; overflow:auto;">
    <h3 class="w3-bar-item">Menü</h3>
    <a href="index.php" class="w3-bar-item w3-button">Anasayfa</a>
    <a href="doctorlist.php" class="w3-bar-item w3-button">Doktorları Görüntüle</a>
    <a href="hastalar.php" class="w3-bar-item w3-button">Hastaları Görüntüle</a>
    <a href="randevu_detaylari.php" class="w3-bar-item w3-button">Randevuları Görüntüle</a>
    <a href="recete_listesi.php" class="w3-bar-item w3-button">Reçeteleri Görüntüle</a>
    <a href="admin1.php" class="w3-bar-item w3-button">Doktor Ekle</a>
    <a href="admin1.php" class="w3-bar-item w3-button">Doktor Sil</a>
</div>
<style>
    .w3-sidebar {
        position: fixed;
        left: 0;
        top: 0;
        height: 100vh;
        width: 15%;
        overflow-y: auto;
        z-index: 1000;
    }
    .main-content {
        margin-left: 15%;
        width: 85%;
        padding: 20px;
    }
    @media (max-width: 992px) {
        .w3-sidebar {
            width: 100%;
            position: relative;
            height: auto;
        }
        .main-content {
            margin-left: 0;
            width: 100%;
        }
    }
</style>
<!-- Ana İçerik -->
<div class="main-content">
    <div class="container mt-4">
        <h2 class="text-center mb-4">Reçete Listesi</h2>
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Doktor</th>
                        <th scope="col">Ad Soyad</th>
                        <th scope="col">Randevu Tarihi</th>
                        <th scope="col">Randevu Saati</th>
                        <th scope="col">Hastalık</th>
                        <th scope="col">Alerji</th>
                        <th scope="col">Reçete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_array($result)): ?>
                    <tr>
                        <td><?= $cnt ?></td>
                        <td><?= htmlspecialchars($row['doctor']) ?></td>
                        <td><?= htmlspecialchars($row['fname'].' '.$row['lname']) ?></td>
                        <td><?= htmlspecialchars($row['appdate']) ?></td>
                        <td><?= htmlspecialchars($row['apptime']) ?></td>
                        <td><?= htmlspecialchars($row['disease']) ?></td>
                        <td><?= htmlspecialchars($row['allergy']) ?></td>
                        <td class="font-italic"><?= htmlspecialchars($row['prescription']) ?></td>
                    </tr>
                    <?php $cnt++; endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Scriptler -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<?php
mysqli_close($con);
?>
