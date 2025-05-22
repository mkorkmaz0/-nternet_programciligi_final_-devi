<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hastane Otomasyonu - Admin Paneli</title>
    
    <!-- W3CSS ve Bootstrap -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:15%">
    <h3 class="w3-bar-item">Menü</h3>
    <a href="index.php" class="w3-bar-item w3-button">Anasayfa</a>
    <a href="doctorlist.php" class="w3-bar-item w3-button">Doktorları Görüntüle</a>
    <a href="hastalar.php" class="w3-bar-item w3-button">Hastaları Görüntüle</a>
    <a href="randevu_detaylari.php" class="w3-bar-item w3-button">Randevuları Görüntüle</a>
    <a href="recete_listesi.php" class="w3-bar-item w3-button">Reçeteleri Görüntüle</a>
    <a href="#list-add-doc" class="w3-bar-item w3-button">Doktor Ekle</a>
    <a href="#list-del-doc" class="w3-bar-item w3-button">Doktor Sil</a>
</div>

<!-- Sayfa İçeriği -->
<div style="margin-left:15%">
    <div class="w3-container w3-teal text-center">
        <h1>Hastane Otomasyonu Admin Paneli</h1>
    </div>
    <p class="text-center mt-3">Hoş geldiniz! Lütfen sol menüden bir seçenek seçin.</p>

    <div class="container mt-4">
        <div class="row">
            <!-- Doktor Listesi -->
            <div class="col-md-4" id="list-doc">
                <div class="card text-center p-4 shadow">
                    <i class="fas fa-user-md fa-2x text-primary"></i>
                    <h5 class="mt-3">Doktor Listesi</h5>
                    <a href="doctorlist.php" class="btn btn-primary">Doktorları Görüntüle</a>
                </div>
            </div>

            <!-- Hasta Listesi -->
            <div class="col-md-4" id="list-pat">
                <div class="card text-center p-4 shadow">
                    <i class="fas fa-users fa-2x text-success"></i>
                    <h5 class="mt-3">Hasta Listesi</h5>
                    <a href="hastalar.php" class="btn btn-success mt-2">Hastaları Görüntüle</a>
                </div>
            </div>

            <!-- Randevu Detayları -->
            <div class="col-md-4" id="list-app">
                <div class="card text-center p-4 shadow">
                    <i class="fas fa-calendar-alt fa-2x text-warning"></i>
                    <h5 class="mt-3">Randevu Detayları</h5>
                    <a href="randevu_detaylari.php" class="btn btn-warning mt-2">Randevuları Görüntüle</a>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <!-- Reçete Listesi -->
            <div class="col-md-4 offset-md-2" id="list-pres">
                <div class="card text-center p-4 shadow">
                    <i class="fas fa-file-medical fa-2x text-danger"></i>
                    <h5 class="mt-3">Reçete Listesi</h5>
                    <a href="recete_listesi.php" class="btn btn-danger mt-2">Reçeteleri Görüntüle</a>
                </div>
            </div>

            <!-- Doktor Yönetimi -->
            <div class="col-md-4" id="list-add-doc">
                <div class="card text-center p-4 shadow">
                    <i class="fas fa-user-cog fa-2x text-info"></i>
                    <h5 class="mt-3">Doktorları Yönet</h5>
                    <a href="admin1.php" class="btn btn-info mt-2">Doktor Ekle</a>
                    <a href="admin1.php" class="btn btn-danger mt-2">Doktor Sil</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap ve jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
