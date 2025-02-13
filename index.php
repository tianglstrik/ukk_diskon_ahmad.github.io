<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UKK 2025 | Aplikasi Perhitungan Diskon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Mengubah Background menjadi Gambar */
        body{
            background-image: url(img/bg_web.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>

    <!-- Membuat Halaman Form Aplikasi -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h2 class="text-center text-light">DISC3NT</h2>
                <form class="border border-black rounded bg-secondary-subtle p-3" method="post">
                    <label class="form-label">Harga Barang (Rp.)</label>
                    <input type="text" name="harga" no class="form-control border-black" min="0" maxlength="9" step="0.01" placeholder="Masukan Harga Barang" autocomplete="off" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                    <label class="form-label">Diskon (%)</label>
                    <input type="text" name="diskon" class="form-control border-black" maxlength="3" min="0" step="0.01" placeholder="Masukan Diskon 1-100" autocomplete="off" onkeypress="return event.charCode >= 48 && event.charCode <= 57">

                    <button type="submit" class="btn btn-secondary btn-outline-dark rounded-pill w-100 p-2 mt-4" name="hitung">Hitung</button>

                    <button class="btn btn-secondary btn-outline-dark rounded-pill w-100 p-2 mt-2" onclick="hps()">Reset</button>

                <?php
                    #Membuat variabel menggunakan post dari name setiap input
                    if(isset($_POST['hitung'])){
                        $harga=$_POST['harga'];
                        $diskon=$_POST['diskon'];

                        #Perintah untuk Membuat Perkondisian setiap Input
                        if($harga < 0){
                            echo "<script>alert('Harga Tidak Boleh Negatif')</script>";
                        }elseif($diskon < 0 || $diskon > 100){
                            echo "<script>alert('Diskon Harus 1-100')</script>";
                        }else{
                            $nilai_diskon = $harga * ($diskon/100);
                            $total_harga = $harga - $nilai_diskon; ?>
<hr>
                                <!-- Perintah Untuk Menampilkan Hasil Yang sudah dihitung -->
                                <table class="table table-bordered border-dark mt-4" name="dv">
                                    <tr>
                                        <td>Harga Asli</td>
                                        <td>:</td>
                                        <td>Rp. <b><?php echo number_format($harga,2,',','.') ?></b></td>
                                    </tr>
                                    <tr>
                                        <td>Diskon <?php echo $diskon; ?>%</td>
                                        <td>:</td>
                                        <td>Rp. <b><?php echo number_format($nilai_diskon,2,',','.') ?></b></td>
                                    </tr>
                                    <tr>
                                        <td>Harga setelah diskon</td>
                                        <td>:</td>
                                        <td>Rp. <b><?php echo number_format($total_harga,2,',','.') ?></b></td>
                                    </tr>
                                </table>

<?php                        }
                    }

                ?>

                </form>
            </div>
        </div>
    </div>

        <!-- Footer Yang berisi copyright-->
    <p class="text-center text-light">&copy;UKK 2025 | Ahmad Cristiano Nuah | 12 PPLG</p>
    
    <!-- Perintah Javascript untuk membuat div bisa dihapus menggunakan button -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    function hps(){
        var dv = document.getElementByName('dv');
        dv.remove();
    }
</script>
</body>
</html>