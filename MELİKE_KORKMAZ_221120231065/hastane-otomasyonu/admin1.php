<?php 
$con=mysqli_connect("localhost","root","","hospitalms");

// Doktor Ekleme İşlemi
if(isset($_POST['docsub'])) {
    // SQL Injection koruması için temizleme
    $doctorname = mysqli_real_escape_string($con, $_POST['doctorname']);
    $doctor = mysqli_real_escape_string($con, $_POST['doctor']);
    $dpassword = mysqli_real_escape_string($con, $_POST['dpassword']);
    $demail = mysqli_real_escape_string($con, $_POST['demail']);
    $spec = mysqli_real_escape_string($con, $_POST['special']);
    $docFees = mysqli_real_escape_string($con, $_POST['docFees']);
    
    $query = "INSERT INTO doctb(doctorname,username,password,email,spec,docFees) 
              VALUES('$doctorname','$doctor','$dpassword','$demail','$spec','$docFees')";
    $result = mysqli_query($con,$query);
    
    if($result) {
        echo "<script>alert('Doktor başarıyla eklendi!');</script>";
    } else {
        echo "<script>alert('Hata: ".mysqli_error($con)."');</script>";
    }
}

// Doktor Silme İşlemi
if(isset($_POST['docsub1'])) {
    $demail = mysqli_real_escape_string($con, $_POST['demail']);
    $query = "DELETE FROM doctb WHERE email='$demail'";
    $result = mysqli_query($con,$query);
    
    if($result) {
        echo "<script>alert('Doktor başarıyla silindi!');</script>";
    } else {
        echo "<script>alert('Silme hatası: ".mysqli_error($con)."');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doktor Yönetim Paneli</title>
    <!-- Bootstrap ve W3CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        body {
            margin-left: 15%;
            transition: margin-left 0.5s;
            background-color: #f8f9fa;
        }
        .main-content {
            padding: 20px;
        }
        .form-container {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            margin-bottom: 25px;
        }
        .w3-sidebar {
            background: linear-gradient(145deg, #0d6efd, #0b5ed7);
        }
        .w3-bar-item {
            color: white!important;
            transition: 0.3s;
        }
        .w3-bar-item:hover {
            background-color: rgba(255,255,255,0.1)!important;
        }
        @media (max-width: 768px) {
            body {
                margin-left: 0;
            }
            .w3-sidebar {
                width: 100%;
                z-index: 1;
            }
        }
    </style>
    <!-- JavaScript Doğrulama -->
    <script>
        function validateForm() {
            const feeInput = document.querySelector('input[name="docFees"]');
            if(isNaN(feeInput.value)) {
                alert('Lütfen geçerli bir ücret giriniz!');
                return false;
            }
            return true;
        }

        var check = function() {
            const password = document.getElementById('dpassword');
            const confirm = document.getElementById('cdpassword');
            const message = document.getElementById('message');
            
            if(password.value === confirm.value) {
                message.style.color = '#198754';
                message.textContent = '✓ Şifreler eşleşiyor';
            } else {
                message.style.color = '#dc3545';
                message.textContent = '✗ Şifreler uyuşmuyor';
            }
        };

        function alphaOnly(event) {
            const regex = /^[a-zA-ZğüşıöçĞÜŞİÖÇ\s]+$/;
            if(!regex.test(event.key)) {
                event.preventDefault();
            }
        };
    </script>
</head>

<body>
<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block" style="width:15%; position:fixed; height:100%; overflow:auto;">
    <h3 class="w3-bar-item w3-margin-bottom-16">Yönetim Paneli</h3>
    <a href="index.php" class="w3-bar-item w3-button">Anasayfa</a>
    <a href="doctorlist.php" class="w3-bar-item w3-button">Doktor Listesi</a>
    <a href="hastalar.php" class="w3-bar-item w3-button">Hasta Yönetimi</a>
    <a href="randevu_detaylari.php" class="w3-bar-item w3-button">Randevu Takvimi</a>
    <a href="recete_listesi.php" class="w3-bar-item w3-button">Reçete İşlemleri</a>
    <div class="w3-bar-item w3-margin-top-32">
        <a href="admin1.php" class="w3-button w3-block w3-green">Yeni Doktor Ekle</a>
        <a href="admin1.php" class="w3-button w3-block w3-red w3-margin-top">Doktor Sil</a>
    </div>
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
        <h2 class="text-center mb-5 w3-text-blue">Doktor Yönetim Paneli</h2>
        
        <div class="row g-4">
            <!-- Doktor Ekleme Formu -->
            <div class="col-lg-6">
                <div class="form-container">
                    <h3 class="w3-text-blue mb-4"><i class="bi bi-person-plus-fill"></i> Doktor Ekle</h3>
                    <form method="post" onsubmit="return validateForm()">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Tam Adı:</label>
                            <input type="text" class="form-control" name="doctorname" 
                                   placeholder="Dr. Ad Soyad" onkeydown="alphaOnly(event)" required>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Kullanıcı Adı:</label>
                                <input type="text" class="form-control" name="doctor" 
                                       placeholder="Kullanıcı adı" pattern="[A-Za-zğüşıöçĞÜŞİÖÇ]{5,}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Uzmanlık:</label>
                                <select name="special" class="form-select" required>
                                    <option value="" disabled selected>Uzmanlık Alanı</option>
                                    <option value="General">Genel Pratisyen</option>
                                    <option value="Pediatrician">Çocuk Sağlığı</option>
                                    <option value="Cardiologist">Kalp Hastalıkları</option>
                                    <option value="Neurologist">Nöroloji</option>
                                    <option value="Orthopedist">Ortopedi</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="mb-3 mt-3">
                            <label class="form-label fw-bold">E-posta:</label>
                            <input type="email" class="form-control" name="demail" 
                                   placeholder="ornek@hastane.com" required>
                        </div>
                        
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Şifre:</label>
                                <input type="password" class="form-control" id="dpassword" 
                                       name="dpassword" minlength="8" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Şifre Tekrar:</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="cdpassword" 
                                           onkeyup="check()" required>
                                    <span id="message" class="input-group-text"></span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label fw-bold">Danışmanlık Ücreti (₺):</label>
                            <input type="number" class="form-control" name="docFees" 
                                   min="100" step="50" placeholder="300" required>
                        </div>
                        
                        <button type="submit" name="docsub" class="btn btn-primary w-100 py-2">
                            <i class="bi bi-save"></i> Kaydet
                        </button>
                    </form>
                </div>
            </div>

            <!-- Doktor Silme Formu -->
            <div class="col-lg-6">
                <div class="form-container">
                    <h3 class="w3-text-red mb-4"><i class="bi bi-person-x-fill"></i> Doktor Sil</h3>
                    <form method="post" onsubmit="return confirm('Bu doktoru kalıcı olarak silmek istediğinize emin misiniz?')">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Doktor E-postası:</label>
                            <input type="email" class="form-control" name="demail" 
                                   placeholder="silinecek@hastane.com" required>
                        </div>
                        <div class="alert alert-warning" role="alert">
                            <i class="bi bi-exclamation-triangle"></i> Dikkat! Bu işlem geri alınamaz.
                        </div>
                        <button type="submit" name="docsub1" class="btn btn-danger w-100 py-2">
                            <i class="bi bi-trash"></i> Kalıcı Olarak Sil
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS ve Icon -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

</body>
</html>

<?php
mysqli_close($con);
?>
