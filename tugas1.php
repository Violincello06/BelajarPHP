<?php
$saldoAwal = 2000000;
$bunga = 0.03;
$bulan = 11;
$saldoAkhir = $saldoAwal + ($saldoAwal * $bunga * $bulan);

echo "Saldo Awal        : Rp. " . $saldoAwal . ",-<br>";
echo "Bunga per bulan   : " . ($bunga * 100) . "%<br>";
echo "Lama menabung     : " . $bulan . " bulan<br>";
echo "Total bunga       : Rp. " . ($saldoAwal * $bunga * $bulan) . ",-<br>";
echo "Saldo akhir setelah " . $bulan . " bulan adalah : Rp. " . $saldoAkhir . ",-";
?>