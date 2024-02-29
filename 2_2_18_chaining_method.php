<?php
class handphone {
   var $jml_pulsa;
   
   function mengirim_pesan(){
      $this->jml_pulsa -= 150;
      return $this;
   }

   function memanggil($menit){
      $this->jml_pulsa -= 100 * $menit;
      return $this;
   }

   function info_pulsa(){
      return "Jumlah pulsa sekarang: ".$this->jml_pulsa;
   }
}

$hp_faqih = new handphone();
$hp_faqih->jml_pulsa = 3000;
echo $hp_faqih->info_pulsa();
echo '<br>'.$hp_faqih->mengirim_pesan()->memanggil(2)->memanggil(3)->info_pulsa();
?>