<?
#################
#   mysql.php   #
#################

/* mysql’e bağlanma islemi */
@mysql_connect("35.240.31.161", ”root”, ”gunerdeneme”)
  or die (“Veritabanına bağlanırken bir hata oluştu!”);

/* mysql’de kendi veritabanimizi secim islemi */
@mysql_select_db("guner")
  or die(“Veritanında bir hata oluştu!”);

$sira = 0;
while ($sira < 2)
{
  
  $sorgu = mysql_query(“select * from kullanicilar”);
  $ad = mysql_result($sorgu, $sira, "Ad");
  echo “$ad <br>”;
  $sira++;
}
?>