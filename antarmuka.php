<?php

// Interface PaymentGateway
interface PaymentGateway {
    public function pay($amount);
    public function refund($transactionId);
}

// Kelas CreditCardPayment mengimplementasikan interface PaymentGateway
class CreditCardPayment implements PaymentGateway {
    public function pay($amount) {
        // Implementasi pembayaran dengan kartu kredit
        echo "Membayar Rp $amount menggunakan Kartu Kredit.<br>";
    }

    public function refund($transactionId) {
        // Implementasi pengembalian dana
        echo "Dana dikembalikan untuk transaksi dengan ID: $transactionId (Kartu Kredit).<br>";
    }
}

// Kelas PayPalPayment mengimplementasikan interface PaymentGateway
class PayPalPayment implements PaymentGateway {
    public function pay($amount) {
        // Implementasi pembayaran dengan PayPal
        echo "Membayar Rp $amount menggunakan PayPal.<br>";
    }

    public function refund($transactionId) {
        // Implementasi pengembalian dana
        echo "Dana dikembalikan untuk transaksi dengan ID: $transactionId (PayPal).<br>";
    }
}

// Penggunaan
$paymentMethod1 = new CreditCardPayment();
$paymentMethod1->pay(3500000);
$paymentMethod1->refund("TRX12345");

$paymentMethod2 = new PayPalPayment();
$paymentMethod2->pay(1500000);
$paymentMethod2->refund("TRX67890");

?>
