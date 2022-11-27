# TA5_CERNA
Cerpen Sederhana

Penjelasan umum
Cerpen sederhana atau Cerna adalah suatu aplikasi yang dapat membantu klien dalam mengembangkan bakatnya dalam menulis cerita pendek. 
Aplikasi ini juga dapat digunakan ketika waktu senggang agar lebih produktif.

Cara menjalankan (di local)
Masuk ke terminal dan jalankan perintah php artisan serve. Jika tidak bisa login, jalankan perintah php artisan migrate:fresh. 
Xampp harus sudah menjalankan apache dan mysql.

Design database
Nama database adalah laravel. Database ini memiliki tabel cerpen yang berisi id inkremen, judul varchar(255), isi text, dan email varchar(255).

API docs di setiap exposed routes
Aplikasi ini memiliki 4 metode http, diantaranta adalah get, put, post, dan delete.
Route get digunakan untuk menampilkan tabel, post digunakan untuk mengisi form dan mengirim ke database,
put digunakan untuk melakukan update data, dan delete digunakan untuk menghapus data.
