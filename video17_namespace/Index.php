<?php
 require_once 'app/init.php';

// $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 800000, 100);
// $produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 2500000 ,40,);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();


// echo "<hr>";
use App\Produk\User as ProdukUser;
use App\Service\User as ServiceUser;

new ServiceUser();
echo "<br>";
new ProdukUser();

?>