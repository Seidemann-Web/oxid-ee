<?php
/**
* Shop System Plugins:
* - Terms of Use can be found under:
* https://github.com/wirecard/oxid-ee/blob/master/_TERMS_OF_USE
* - License can be found under:
* https://github.com/wirecard/oxid-ee/blob/master/LICENSE
*/

$sLangName = 'Indonesia';

$aLang = array(
    'charset' => 'UTF-8',
    'wd_accept' => 'Accept',
    'wd_account_holder_title' => 'Pemilik Akun',
    'wd_amount' => 'Amount',
    'wd_bic' => 'BIC:',
    'wd_birthdate_input' => 'Tanggal lahir',
    'wd_cancel' => 'Cancel',
    'wd_canceled_payment_process' => 'Anda telah membatalkan proses pembayaran.',
    'wd_capture' => 'Capture',
    'wd_city' => 'Kota',
    'wd_company_name_input' => 'Company',
    'wd_config_additional_info' => 'Kirim informasi tambahan',
    'wd_config_additional_info_desc' => 'Data tambahan akan dikirimkan untuk perlindungan atas penipuan. Data tambahan ini mencakup alamat pengiriman tagihan/barang, keranjang belanja, dan pendeskripsi.',
    'wd_config_allowed_currencies' => 'Mata uang yang diizinkan',
    'wd_config_allowed_currencies_desc' => 'Metode pembayaran Faktur Bergaransi hanya akan ditampilkan jika mata uang yang aktif termasuk salah satu mata uang negara terpilih.',
    'wd_config_allow_changed_shipping' => 'Izinkan Perubahan Alamat Pengiriman',
    'wd_config_allow_changed_shipping_desc' => 'Jika dinonaktifkan, pelanggan harus memasukkan detail kartu kredit jika alamat pengiriman telah diubah di antara dua pesanan.',
    'wd_config_base_url' => 'URL Dasar',
    'wd_config_base_url_desc' => 'URL dasar Wirecard. (misal, https://api.wirecard.com)',
    'wd_config_billing_countries' => 'Negara tujuan yang diizinkan untuk pengiriman tagihan',
    'wd_config_billing_countries_desc' => 'Metode pembayaran Faktur Bergaransi hanya akan ditampilkan jika negara tujuan pengiriman barang pembeli termasuk salah satu negara terpilih.\nNegara-negara yang diizinkan berikut ini telah ditentukan sebelumnya: AT, DE.',
    'wd_config_billing_shipping' => 'Alamat pengiriman tagihan/barang harus sama',
    'wd_config_billing_shipping_desc' => 'Jika diaktifkan, metode pembayaran Faktur Bergaransi hanya akan ditampilkan jika alamat pengiriman Tagihan/Barang sama',
    'wd_config_country_code' => 'Country Code',
    'wd_config_country_code_desc' => 'Sofort. requires a valid country code to use the correct logo (i.e. en_gb).',
    'wd_config_creditor_id' => 'Identitas Kreditur',
    'wd_config_creditor_id_desc' => 'SEPA membutuhkan Identitas Kreditur untuk membuat Mandat Debit Langsung SEPA. Untuk mendapatkan Identitas Kreditur, ajukan di lembaga bank yang bertanggung jawab.',
    'wd_config_delete_cancel_order' => 'Hapus Pesanan yang Dibatalkan',
    'wd_config_delete_cancel_order_desc' => 'Menghapus pesanan secara otomatis setelah proses pembayaran yang dibatalkan.',
    'wd_config_delete_failure_order' => 'Hapus Pesanan yang gagal',
    'wd_config_delete_failure_order_desc' => 'Menghapus pesanan secara otomatis setelah proses pembayaran gagal.',
    'wd_config_descriptor' => 'Pendeskripsi',
    'wd_config_descriptor_desc' => 'Kirim teks yang akan ditampilkan pada laporan bank yang diterbitkan untuk pembeli Anda oleh penyedia jasa keuangan',
    'wd_config_email' => 'Alamat e-mail Anda',
    'wd_config_enable_bic' => 'BIC diaktifkan',
    'wd_config_http_password' => 'Kata Sandi HTTP',
    'wd_config_http_user' => 'Pengguna HTTP',
    'wd_config_logo_variant' => 'Versi Logo',
    'wd_config_logo_variant_desc' => 'Tunjukkan versi logo standar atau deskriptif kepada pelanggan Anda.',
    'wd_config_merchant_account_id' => 'Identitas Rekening Penjual',
    'wd_config_merchant_account_id_desc' => 'Tanda pengenal unik yang diberikan untuk rekening penjual.',
    'wd_config_merchant_secret' => 'Kunci Rahasia',
    'wd_config_merchant_secret_desc' => 'Kunci rahasia wajib digunakan untuk mengkalkulasi Tanda Tangan Digital dalam pembayaran.',
    'wd_config_message' => 'Pesan Anda',
    'wd_config_payment_action' => 'Tindakan Pembayaran',
    'wd_config_payment_action_desc' => 'Pilih \"Catat transaksi\" untuk mencatat transaksi/menerbitkan faktur atas pesanan Anda secara otomatis atau \"Otorisasi\" untuk mencata transaksi/menerbitkan faktur secara manual.',
    'wd_config_payolution_terms_url' => 'Payolution URL',
    'wd_config_payolution_terms_url_desc' => 'Mandatory if require consent is set to yes',
    'wd_config_reply_to' => 'Reply to (optionally)',
    'wd_config_require_consent' => 'Require consent',
    'wd_config_require_consent_desc' => 'Consumer must agree with the terms before proceeding with the checkout process.',
    'wd_config_shipping_countries' => 'Negara tujuan yang diizinkan untuk pengiriman barang',
    'wd_config_shipping_countries_desc' => 'Metode pembayaran Faktur Bergaransi hanya akan ditampilkan bila negara tujuan pengiriman tagihan pembeli termasuk salah satu negara terpilih.\nBerdasarkan kontrak Wirecard Anda, negara-negara yang diizinkan berikut ini telah ditentukan sebelumnya: AT, DE.',
    'wd_config_shopping_basket' => 'Keranjang Belanja',
    'wd_config_shopping_basket_desc' => 'Untuk tujuan konfirmasi, metode pembayaran ini mendukung tampilan keranjang belanja saat checkout. Untuk mengaktifkan fitur ini, aktifkan Keranjang Belanja.',
    'wd_config_ssl_max_limit' => 'Batas Maksimum untuk Non 3-D Secure',
    'wd_config_ssl_max_limit_desc' => 'This amount forces 3-D Secure transactions. Enter "null" to disable the Non 3-D Secure Max. Limit.',
    'wd_config_three_d_merchant_account_id' => 'ID 3-D Secure Rekening Penjual',
    'wd_config_three_d_merchant_account_id_desc' => 'Tanda pengenal unik yang diberikan untuk Rekening 3D Secure Penjual Anda.',
    'wd_config_three_d_merchant_secret' => 'Kunci Rahasia 3-D Secure',
    'wd_config_three_d_merchant_secret_desc' => 'Kunci rahasia wajib digunakan untuk mengkalkulasi Tanda Tangan Digital dalam pembayaran 3D.',
    'wd_config_three_d_min_limit' => 'Batas Minimum untuk 3-D Secure',
    'wd_config_three_d_min_limit_desc' => 'This amount forces 3-D Secure transactions. Enter "null" to disable the 3-D Secure Min. Limit.',
    'wd_config_vault' => 'Checkout Satu Klik',
    'wd_config_vault_desc' => 'Kartu Kredit dapat disimpan untuk digunakan kembali di kemudian hari tanpa memasukkan perincian kartu kredit',
    'wd_config_wpp_url' => 'Wirecard Payment Page v2 Address (URL WPP v2)',
    'wd_config_wpp_url_desc' => 'Wirecard Payment Page v2 Address (URL WPP v2) (e.g. https://wpp.wirecard.com).',
    'wd_copy_xml_text' => 'Salin XML',
    'wd_country' => 'Negara',
    'wd_credit' => 'Pengembalian Dana',
    'wd_creditor' => 'Kreditor',
    'wd_creditor_mandate_id' => 'Identitas Mandat',
    'wd_currency_config' => 'Each currency has to be configured.',
    'wd_customerId' => 'ID Pelanggan',
    'wd_date-of-birth' => 'Pengiriman',
    'wd_date_format_php_code' => 'm/d/Y',
    'wd_date_format_user_hint' => 'MM/DD/YYYY',
    'wd_debtor' => 'Debitur',
    'wd_debtor_acc_owner' => 'Pemilik akun:',
    'wd_default_currency' => 'Mata Uang Default',
    'wd_descriptor' => 'Pendeskripsi',
    'wd_email' => 'Email',
    'wd_enter_country_code_error' => 'Please enter a valid country code.',
    'wd_enter_valid_email_error' => 'Please enter a valid e-mail address',
    'wd_error_credentials' => 'Tes gagal, harap cek kredensial Anda.',
    'wd_error_save_failed' => 'Configuration not valid. Save aborted.',
    'wd_first-name' => 'Nama depan',
    'wd_gender' => 'Jenis kelamin',
    'wd_heading_title' => 'Wirecard',
    'wd_heading_title_alipay_crossborder' => 'Alipay Cross-border Wirecard',
    'wd_heading_title_creditcard' => 'Kartu Kredit Wirecard',
    'wd_heading_title_eps' => 'Wirecard eps-Überweisung',
    'wd_heading_title_giropay' => 'giropay Wirecard',
    'wd_heading_title_ideal' => 'iDEAL Wirecard',
    'wd_heading_title_payolution_b2b' => 'Wirecard Guaranteed Invoice (Payolution B2B)',
    'wd_heading_title_payolution_b2b_consumer' => 'Wirecard Invoice (Payolution B2B)',
    'wd_heading_title_payolution_invoice' => 'Wirecard Guaranteed Invoice (Payolution B2C)',
    'wd_heading_title_payolution_invoice_consumer' => 'Wirecard Invoice (Payolution B2C)',
    'wd_heading_title_paypal' => 'Wirecard PayPal',
    'wd_heading_title_pia' => 'Pembayaran Di Muka untuk Wirecard',
    'wd_heading_title_poi' => 'Pembayaran Berdasarkan Faktur untuk Wirecard',
    'wd_heading_title_ratepayinvoice' => 'Faktur Bergaransi Wirecard',
    'wd_heading_title_ratepayinvoice_consumer' => 'Wirecard Invoice by Wirecard',
    'wd_heading_title_sepact' => 'SEPA Credit Transfer Wirecard',
    'wd_heading_title_sepadd' => 'SEPA Direct Debit Wirecard',
    'wd_heading_title_sofortbanking' => 'Sofort. Wirecard',
    'wd_heading_title_support' => 'Dukungan',
    'wd_heading_title_transaction_details' => 'Wirecard Transactions',
    'wd_house-extension' => 'Nomor Ekstensi Rumah',
    'wd_iban' => 'IBAN:',
    'wd_ideal_legend' => 'Pilih bank Anda',
    'wd_ip' => 'Alamat IP',
    'wd_last-name' => 'Nama belakang',
    'wd_maid' => 'MAID',
    'wd_manipulated' => 'manipulated',
    'wd_merchant-crm-id' => 'Identitas CRM Penjual',
    'wd_message_empty_error' => 'Message cannot be empty.',
    'wd_more_info' => 'More info',
    'wd_no' => 'No',
    'wd_orderNumber' => 'Nomor Pesanan',
    'wd_order_error' => 'Kesalahan terjadi saat proses pembayaran. Harap coba lagi.',
    'wd_order_error_info' => 'An error occurred in the payment process. The order has been canceled.',
    'wd_order_status' => 'Order status',
    'wd_order_status_authorized' => 'Sah',
    'wd_order_status_cancelled' => 'Cancelled',
    'wd_order_status_failed' => 'Failed',
    'wd_order_status_pending' => 'Pending',
    'wd_order_status_purchased' => 'Paid',
    'wd_order_status_refunded' => 'Refunded',
    'wd_panel_action' => 'Tindakan',
    'wd_panel_amount' => 'Jumlah',
    'wd_panel_currency' => 'Mata uang',
    'wd_panel_details' => 'Detail',
    'wd_panel_order_id' => 'Order Reference',
    'wd_panel_order_number' => 'Order Number',
    'wd_panel_parent_transaction_id' => 'ID transaksi-induk',
    'wd_panel_payment_method' => 'Metode pembayaran',
    'wd_panel_provider_transaction_id' => 'Provider Transaction ID',
    'wd_panel_transaction' => 'Transaksi',
    'wd_panel_transaction_copy' => 'Salin XML',
    'wd_panel_transaction_date' => 'Tanggal',
    'wd_panel_transaction_state' => 'Status transaksi',
    'wd_panel_transcation_id' => 'ID Transaksi',
    'wd_paymentMethod' => 'Metode Pembayaran',
    'wd_payment_awaiting' => 'Menunggu pembayaran dari Wirecard',
    'wd_payment_cancelled_text' => 'Payment was cancelled.',
    'wd_payment_cost' => 'Payment cost',
    'wd_payment_failed_text' => 'Payment process failed.',
    'wd_payment_method_settings' => 'Payment method settings',
    'wd_payment_refunded_text' => 'Payment was refunded.',
    'wd_payment_success_text' => 'Payment process successful.',
    'wd_payolution_terms' => 'I agree that the data which are necessary for the liquidation of purchase on account and which are used to complete the identity and credit check are transmitted to Payolution. My <u><a href="%s" target="_blank">consent</a></u> can be revoked at any time with effect for the future.',
    'wd_phone' => 'Telepon',
    'wd_pia_ptrid' => 'Reference',
    'wd_postal-code' => 'Kode Pos',
    'wd_ptrid' => 'Identitas referensi transaksi provider',
    'wd_ratepayinvoice_fields_error' => 'Anda harus berusia 18 tahun ke atas untuk memesan.',
    'wd_redirect_text' => 'Koneksi Anda sedang dialihkan, harap menunggu',
    'wd_refund' => 'Pengembalian Dana',
    'wd_requestedAmount' => 'Jumlah',
    'wd_requestId' => 'ID Permintaan',
    'wd_save_to_user_account' => 'Save data to your user account',
    'wd_secured' => 'secured',
    'wd_send_email' => 'Kirim',
    'wd_sepa_mandate' => 'Mandat SEPA',
    'wd_sepa_text_1' => 'Saya mengizinkan kreditor',
    'wd_sepa_text_2' => 'untuk mengirimkan instruksi ke bank saya untuk mengumpulkan satu debit langsung dari akun saya. Pada waktu yang sama saya menginstruksikan bank untuk mendebit akun saya sesuai dengan instruksi dari kreditor',
    'wd_sepa_text_2b' => '.',
    'wd_sepa_text_3' => 'Catatan: Sebagai bagian dari hak saya, saya berhak atas pengembalian dana sesuai dengan syarat dan ketentuan perjanjian saya dengan bank. Pengembalian dana harus diklaim dalam waktu 8 minggu dimulai dari tanggal akun saya didebit.',
    'wd_sepa_text_4' => 'Saya menyatakan persetujuan yang tidak dapat dibatalkan bahwa jika debit langsung tidak ditanggapi, atau terdapat keberatan atas debit langsung tersebut, bank saya akan mengungkapkan kepada kreditor',
    'wd_sepa_text_5' => 'nama lengkap, alamat, dan tanggal lahir saya.',
    'wd_sepa_text_6' => 'Saya telah membaca dan menyetujui informasi mengenai Mandat Debit Langsung SEPA.',
    'wd_shipping-method' => 'Metode Pengiriman',
    'wd_shipping_title' => 'Pengiriman',
    'SHOP_MODULE_GROUP_wd_emails' => 'Emails',
    'SHOP_MODULE_wd_email_on_pending_orders' => 'Send notification emails when order pending',
    'wd_social-security-number' => 'Nomor Jaminan Sosial',
    'wd_state_awaiting' => 'awaiting',
    'wd_state_closed' => 'closed',
    'wd_state_error' => 'error',
    'wd_state_success' => 'success',
    'wd_street1' => 'Jalan',
    'wd_street2' => 'Jalan 2',
    'wd_success_credentials' => 'Pengujian konfigurasi penjual berhasil.',
    'wd_success_email' => 'E-Mail berhasil dikirim',
    'wd_support_description' => 'System information will be automatically added to your message and will be sent to',
    'wd_support_email_from' => 'From',
    'wd_support_email_modules' => 'Other modules',
    'wd_support_email_module_id' => 'Module ID',
    'wd_support_email_module_title' => 'Module Title',
    'wd_support_email_module_version' => 'Module Version',
    'wd_support_email_php' => 'PHP Version',
    'wd_support_email_reply_to' => 'Reply to',
    'wd_support_email_shop_edition' => 'OXID eShop Edition',
    'wd_support_email_shop_version' => 'OXID eShop Version',
    'wd_support_email_subject' => 'OXID eShop support request',
    'wd_support_email_system' => 'Server Info',
    'wd_support_send_error' => 'Support e-mail could not be sent.',
    'wd_test_credentials' => 'Tes',
    'wd_text_article_name' => 'Nama Produk',
    'wd_text_article_number' => 'Nomor Artikel',
    'wd_text_backend_operations' => 'Kemungkinan Operasi Pascapemrosesan',
    'wd_text_delete' => 'Hapus',
    'wd_text_generic_error' => 'Action could not be performed.',
    'wd_text_generic_success' => 'Action performed successfully.',
    'wd_text_list' => 'Transaksi',
    'wd_text_logo_variant_descriptive' => 'Deskriptif',
    'wd_text_logo_variant_standard' => 'Standar',
    'wd_text_message' => 'Pesan',
    'wd_text_no_data_available' => 'No data available.',
    'wd_text_no_further_operations_possible' => 'No further operations possible.',
    'wd_text_order_no_transactions' => 'There are no associated transactions for this order.',
    'wd_text_payment_action_pay' => 'Purchase',
    'wd_text_payment_action_reserve' => 'Authorization',
    'wd_text_quantity' => 'Kuantitas',
    'wd_text_support' => 'Support',
    'wd_text_vault' => 'Checkout Satu Klik',
    'wd_three_d_link_text' => 'Non 3-D Secure and 3-D Secure Limits',
    'wd_timeStamp' => 'Tanggal',
    'wd_total_amount_not_in_range_text' => 'Total amount not in allowed range.',
    'wd_transactionID' => 'ID Transaksi',
    'wd_transactionState' => 'Status Transaksi',
    'wd_transactionType' => 'Jenis Transaksi',
    'wd_transaction_details_title' => 'Detail Transaksi',
    'wd_transaction_response_details' => 'Response Details',
    'wd_transfer_notice' => 'Harap transfer jumlah tersebut menggunakan data berikut ini:',
    'wd_unmatched' => 'unmatched',
    'wd_vault_changed_shipping_text' => 'Alamat pengiriman Anda telah berubah sejak pesanan terakhir. Untuk tujuan keamanan, kami mewajibkan Anda memasukkan detail kartu kredit baru.',
    'wd_vault_save_text' => 'Simpan untuk digunakan di kemudian hari.',
    'wd_vault_use_new_text' => 'Gunakan Kartu Kredit baru',
    'wd_wait_for_final_status' => 'Please, wait for additional email with the final status of your payment.',
    'wd_warning_credit_card_url_mismatch' => 'Attention: Please check your credentials within the URL setting fields. You might have configured/combined a productive account with a test account.',
    'wd_yes' => 'Yes',
);
