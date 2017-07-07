# SI-Mudharabah
Sistem Informasi Akad Mudharabah ini dibangun berdasarkan studi kasus pada KSPS BMT AT-Taqwa

* Secara teknis, akad mudharabah adalah akad kerja sama usaha antara dua pihak di mana pihak pertama (shahibul maal) menyediakan seluruh (100%) modal, sedangkan pihak lainnya menjadi pengelola. Keuntungan usaha secara Mudharabah dibagi menurut kesepakatan yang dituangkan dalam kontrak, sedangkan apabila rugi ditanggung oleh pemilik modal selama kerugian itu bukan akibat kelalaian si pengelola.

* Untuk membayar cicilan akad mudharabah, KSPS menerapkan metode saldo menurun serta untuk bagi hasil keuntungannya disepakati sesuai perjanjian awal akad dengan catatan jika nasabah mengalami kerugian maka nasabah tidak diwajibkan untuk membayar bagi hasil keuntungan tetapi tetap membayar modal yang telah diberikan.
Contoh: Ali meminjam uang sebesar Rp 10.000.000,-, dengan menggunakan akad mudharabah pada KSPS BMT AT-TAQWA, pembayaran pencicilan pinjaman tersebut dilakukan selama 10 bulan dengan bagi hasil setiap bulannya adalah 2% dari setoran cicilan.

* Skema pembayaran akad mudharabah pada KSPS BMT At-Taqwa dapat digambarkan seperti dibawah ini

Cicilan Ke | Setoran Cicilan | Basil (Bagi Hasil) | Jumlah Setoran | Sisa Pinjaman
---------- | --------------- | ------------------ | -------------- | --------------
0 | Rp - | Rp - | Rp - | Rp 10.000.000,00 
1 | Rp 1.000.000,00 |	Rp 200.000,00 |	Rp 1.200.000,00 |	Rp 9.000.000,00 
2 | Rp 1.000.000,00 |	Rp 180.000,00 |	Rp 1.180.000,00 |	Rp 8.000.000,00 
3 | Rp 1.000.000,00 | Rp 160.000,00 |	Rp 1.160.000,00 |	Rp 7.000.000,00 
4 | Rp 1.000.000,00 | Rp 140.000,00 |	Rp 1.140.000,00 |	Rp 6.000.000,00 
5 | Rp 1.000.000,00 | Rp 120.000,00 |	Rp 1.120.000,00 |	Rp 5.000.000,00 
6 | Rp 1.000.000,00 | Rp 100.000,00 |	Rp 1.100.000,00 |	Rp 4.000.000,00 
7 | Rp 1.000.000,00 | Rp  80.000,00 |	Rp 1.080.000,00 |	Rp 3.000.000,00 
8 | Rp 1.000.000,00 | Rp  60.000,00 |	Rp 1.060.000,00 |	Rp 2.000.000,00 
9 | Rp 1.000.000,00 | Rp  40.000,00 |	Rp 1.040.000,00 |	Rp 1.000.000,00 
10 | Rp 1.000.000,00 | Rp  20.000,00 | Rp 1.020.000,00 |	Rp -   
 || **Jumlah Basil dan Setoran** | **Rp 1.100.000,00** | **Rp 11.100.000,00** 	 


* Sistem Informasi Akad Mudharabah ini dibangun dengan menggunakan framework Code Igniter, perhitungan bagi hasil yang dilakukan dibuat seperti skema yg telah dijelaskan sebelumnya.

* Terdiri dari beberapa user, yaitu:
  - Customer Service:
    - pengajuan akad
    - mencatat biaya administrasi
    - cetak laporan data mudharib
    - lihat data mudharib
    - ubah data mudharib
  - Teller:
    - lihat daftar bagi hasil
    - lihat data transaksi
    - catat data transaksi
    - ubah data transaksi
    - cetak laporan transaksi
    - lihat jurnal (belum sempurna)
    - cetak laporan jurnal (belum berfungsi)
  - Manajer:
    - persetujuan akad
    - lihat data mudharib
    - lihat data pegawai
    - ubah status pegawai
    - lihat data transaksi
    - cetak laporan transaksi
    - lihat jurnal (belum sempurna)
    - cetak laporan jurnal (belum berfungsi)
  - Admin:
    - tambah data pegawai
    - lihat data pegawai
    - ubah data pegawai
