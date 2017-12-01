# Portal Berita
Aplikasi portal berita yang dibuat saat penilaian LSP.

## Instalasi
* Buka terminal linux
* Jalankan perintah berikut untuk mendownload project
```
$ git clone https://github.com/skadevz/lsp-portal-berita.git
```
* Masuk kedalam direktori project melalui terminal
* Jalankan perintah berikut untuk persiapan awal, dan mendownload _package_ yang diperlukan
```
$ cp .env.example .env
$ composer install
$ php artisan key:generate
```
* Buka file .env menggunakan _text editor_, sesuaikan pengaturan database, dengan pengaturan yang dimiliki
* Kemudian jalankan perintah berikut untuk melakukan _migrate_ database
```
$ php artisan migrate
```
* Terakhir, jalankan perintah berikut untuk kompilasi file asset, dan menjalankan project.
```
$ php artisan serv
```
