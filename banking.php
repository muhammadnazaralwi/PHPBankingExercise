<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>

<?php
    function hitung($saldo, $lamaMenabung) {
        $bunga = 0;
        $biayaAdmin = 7500;
        
        for ($i = 0; $i < $lamaMenabung; $i++) {
            $bunga = 0;
            $saldo = $saldo - $biayaAdmin;

            if ($saldo >= 1000000) {
                $bunga = $saldo * 0.04;
                $saldo = $saldo + $bunga;
            } else {
                $bunga = $saldo * 0.03;
                $saldo = $saldo + $bunga;
            }
        }

        return $saldo;
    }
?>

<body style="padding:50px;">
    <form>
        <div class="form-group">
            <label for="fname">Saldo awal</label><br>
            <input type="number" class="form-control" name="saldo" placeholder="Masukan Saldo" required><br>
        </div>

        <div class="form-group">
            <label for="lname">Lama Tabungan</label><br>
            <input type="number" class="form-control" name="lamaMenabung" placeholder="Masukan Lama Tabungan (per Bulan)" required><br>
        </div>
        <br>
        <input type="submit" class="btn btn-primary" value="Hitung">
    </form>

    <br>

    <h3 class="text-md-center">Saldo Akhir</h3>
    <p class="text-center">
        Rp. <?php echo hitung(@$_GET['saldo'], @$_GET['lamaMenabung']); ?>
    </p>
</body>

</html>
