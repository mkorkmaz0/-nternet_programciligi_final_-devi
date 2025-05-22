<!DOCTYPE html> 
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Randevu Detayları</title>
    <!-- Bootstrap ve W3CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        body {
            margin-left: 15%;
            transition: margin-left 0.5s;
            font-family: Arial, sans-serif;
        }
        .main-content {
            padding: 20px;
        }
        .table {
            margin-top: 30px;
        }
        th, td {
            text-align: center;
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
    <div class="container">
        <h1 class="text-center">Randevu Detayları</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Hasta Adı</th>
                    <th scope="col">Cinsiyet</th>
                    <th scope="col">Randevu Tarihi</th>
                    <th scope="col">Doktor</th>
                    <th scope="col">İletişim</th>
                    <th scope="col">Durum</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Ali Yılmaz</td>
                    <td><span class="text-primary">👨 Erkek</span></td>
                    <td>25 Mart 2025, 10:00</td>
                    <td>Dr. Ahmet Demir</td>
                    <td>5551234567</td>
                    <td><span class="badge badge-success">Onaylı</span></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Aylin Çelik</td>
                    <td><span class="text-danger">👩 Kadın</span></td>
                    <td>26 Mart 2025, 11:30</td>
                    <td>Dr. Ayşe Korkmaz</td>
                    <td>5559876543</td>
                    <td><span class="badge badge-warning">Beklemede</span></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Fatih Aydın</td>
                    <td><span class="text-primary">👨 Erkek</span></td>
                    <td>27 Mart 2025, 14:00</td>
                    <td>Dr. Mehmet Öz</td>
                    <td>5556543210</td>
                    <td><span class="badge badge-danger">İptal</span></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Gülseren Yılmaz</td>
                    <td><span class="text-danger">👩 Kadın</span></td>
                    <td>28 Mart 2025, 15:30</td>
                    <td>Dr. Elif Sarı</td>
                    <td>5553210987</td>
                    <td><span class="badge badge-success">Onaylı</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Bootstrap JS ve jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
