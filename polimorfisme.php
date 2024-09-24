<?php
// Interface Handphone
interface Handphone {
    public function aktivasi();
    public function isiPulsa($nominal);
    public function formatMemoryCard();
}

// Kelas HandphoneBiasa mengimplementasikan interface Handphone
class HandphoneBiasa implements Handphone {
    private $pulsa = 0;

    public function aktivasi() {
        return "Handphone biasa diaktifkan.\n";
    }

    public function isiPulsa($nominal) {
        $this->pulsa += $nominal;
        return "Pulsa berhasil diisi sebesar Rp{$nominal}. Sisa pulsa: Rp{$this->pulsa}.\n";
    }

    public function formatMemoryCard() {
        return "Memory card diformat pada handphone biasa.\n";
    }
}

// Kelas Smartphone mengimplementasikan interface Handphone
class Smartphone implements Handphone {
    private $pulsa = 0;

    public function aktivasi() {
        return "Smartphone diaktifkan dengan sistem operasi Android.\n";
    }

    public function isiPulsa($nominal) {
        $this->pulsa += $nominal;
        return "Pulsa smartphone berhasil diisi sebesar Rp{$nominal}. Sisa pulsa: Rp{$this->pulsa}.\n";
    }

    public function formatMemoryCard() {
        return "Memory card diformat dengan sistem Android pada smartphone.\n";
    }

    // Metode tambahan khusus smartphone
    public function bukaAplikasi($namaAplikasi) {
        return "Aplikasi {$namaAplikasi} dibuka di smartphone.\n";
    }
}

// Fungsi untuk menjalankan aktivasi, isi pulsa, dan format memory card
function jalankanFungsiHandphone(Handphone $handphone) {
    echo $handphone->aktivasi();
    echo $handphone->isiPulsa(50000);
    echo $handphone->formatMemoryCard();
}

// Membuat objek dari HandphoneBiasa
$hpBiasa = new HandphoneBiasa();
jalankanFungsiHandphone($hpBiasa);

echo "\n"; // Spasi antara output handphone biasa dan smartphone

// Membuat objek dari Smartphone
$smartphone = new Smartphone();
jalankanFungsiHandphone($smartphone);

// Memanfaatkan fitur tambahan pada smartphone
echo $smartphone->bukaAplikasi("Instagram");
?>
