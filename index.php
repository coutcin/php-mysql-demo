<?php
#################
#   mysql.php   #
#################

/* mysql’e bağlanma islemi */
@mysql_connect("35.240.31.161", "root", "gunerdeneme")
  or die ("Veritabanına bağlanırken bir hata oluştu!");

/* mysql’de kendi veritabanimizi secim islemi */
@mysql_select_db("guner")
  or die("Veritanında bir hata oluştu!");

$sira = 0;
echo "<table frame='border'  cellpadding='10' cellspacing='5'>
				<col align='left'</col>
				<col align='left'</col>
				<col align='left'</col>
				<tr>
					<th>ID</th>
					<th>Ad</th>
					<th>Soyad</th>
					<th>Email</th>
					<th>Bölüm</th>
				</tr>
				<tr>";
while ($sira < 3)
{
  $sorgu = mysql_query("select * from kullanicilar");
  //var_dump($sorgu);
  $no = mysql_result($sorgu, $sira, "no");
  $ad = mysql_result($sorgu, $sira, "Ad");
  $soyad = mysql_result($sorgu, $sira, "Soyad");
  $eposta = mysql_result($sorgu, $sira, "eposta");
  $bolum = mysql_result($sorgu, $sira, "bolum");
  echo "<td>".$no."</td><td>".$ad."</td><td>".$soyad."</td><td>".$eposta."</td><td>". $bolum."</td></tr>";
  $sira++;
}
?>