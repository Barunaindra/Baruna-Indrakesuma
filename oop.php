<?php

class kendaraan
{
	var $jumlahRoda;
	var $warna;
	var $bahanBakar;
	var $harga;
	var $merek;
	var $tahunPembuatan;

	function statusHarga()
	{
		if ($this->harga >50000000) $status = 'Mahal';
		else $status = 'Murah';
		return $status;
	}

	function dapatSubsidi()
	{
		if($this->bahanBakar == Premium && $this->tahunPembuatan<2005) $status = 'Ya';
		else $status = 'Tidak';
		return $status;
	}

	function hargaSecond()
	{
		if($this->tahunPembuatan >2005){
		 $hargascd=$this->harga-($this->harga*0.2);
		}
		else if($this->tahunPembuatan>2000 && $this->tahunPembuatan<2005){
		 $hargascd=$this->harga-($this->harga*0.3);
		}
		else{
		 $hargascd=$this->harga-($this->harga*0.4);
		}
		return $hargascd;
		
	}



}
$honda = new kendaraan();

$honda->bahanBakar ='Premium';
$honda->tahunPembuatan = 2004;
$honda->harga=25000000;

echo $honda->statusHarga()."<br>";
echo $honda->dapatSubsidi()."<br>";
echo $honda->hargaSecond()."<br>";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


//tugas no 6

echo "tugas no 6 <br>";

$kendaraan2 = new kendaraan();

$kendaraan2->merek ='Toyota Yaris';
$kendaraan2->jumlahRoda = 4;
$kendaraan2->harga = 160000000;
$kendaraan2->warna = Merah;
$kendaraan2->bahanBakar ='Premium';
$kendaraan2->tahunPembuatan =2009;


$kendaraan3 = new kendaraan();

$kendaraan3->merek ='Honda Scoopy';
$kendaraan3->jumlahRoda = 2;
$kendaraan3->harga = 13000000;
$kendaraan3->warna ='Putih';
$kendaraan3->bahanBakar = 'Premium';

$kendaraan4 = new kendaraan();

$kendaraan4->merek = 'Isuzu Panther';
$kendaraan4->jumlahRoda = 4;
$kendaraan4->harga = 170000000;
$kendaraan4->warna = 'Hitam' ;
$kendaraan4->bahanBakar = 'Solar';



echo $kendaraan2->statusHarga()."<br>";
echo $kendaraan3->statusHarga()."<br>";
echo $kendaraan4->statusHarga()."<br>";

echo $kendaraan2->hargaSecond()."<br>";
echo $kendaraan3->hargaSecond()."<br>";
echo $kendaraan4->hargaSecond()."<br>";

//latian no 7

echo "tugas no 7 <br>";

echo " Kendaraan ".$kendaraan2->merek." memiliki ".$kendaraan2->jumlahRoda." roda, berbahan bakar ".$kendaraan2->bahanBakar." dan harganya Rp ".$kendaraan2->harga."." ."<br>";
echo " Kendaraan ".$kendaraan3->merek." memiliki ".$kendaraan3->jumlahRoda." roda, berbahan bakar ".$kendaraan3->bahanBakar." dan harganya Rp ".$kendaraan3->harga."." ."<br>";
echo " Kendaraan ".$kendaraan4->merek." memiliki ".$kendaraan4->jumlahRoda." roda, berbahan bakar ".$kendaraan4->bahanBakar." dan harganya Rp ".$kendaraan4->harga."." ."<br>";



?>
<br>
<table border="1" align="center" cellspacing="2" cellpadding="2">
  <tr>
    <td>OBJEK</td>
    <td>MEREK</td>
    <td>JML RODA</td>
    <td>HARGA</td>
    <td>WARNA</td>
    <td>BAHAN BAKAR</td>
  </tr>
  <tr>
  <td><?php echo '$kendaraan2'; ?></td>
    <td><?php echo $kendaraan2->merek; ?></td>
    <td><?php echo $kendaraan2->jumlahRoda; ?></td>
    <td><?php echo $kendaraan2->harga; ?></td>
    <td><?php echo $kendaraan2->warna; ?></td>
    <td><?php echo $kendaraan2->bahanBakar; ?></td>
    </tr>
    <tr>
  <td><?php echo '$kendaraan3'; ?></td>
    <td><?php echo $kendaraan3->merek; ?></td>
    <td><?php echo $kendaraan3->jumlahRoda; ?></td>
    <td><?php echo $kendaraan3->harga; ?></td>
    <td><?php echo $kendaraan3->warna; ?></td>
    <td><?php echo $kendaraan3->bahanBakar; ?></td>
    </tr>
    <tr>
  <td><?php echo '$kendaraan4'; ?></td>
    <td><?php echo $kendaraan4->merek; ?></td>
    <td><?php echo $kendaraan4->jumlahRoda; ?></td>
    <td><?php echo $kendaraan4->harga; ?></td>
    <td><?php echo $kendaraan4->warna; ?></td>
    <td><?php echo $kendaraan4->bahanBakar; ?></td>
    </tr>
    </table>
   
 
 
