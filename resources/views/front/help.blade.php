@extends('front.master')
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" >
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/film.css') }}" media="all">
</head>
<body>
@section('title', 'Help')
@section('main')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 movie_list">
    <div class="pt-8 pb-2 mb-3 border-bottom">
        <div class="row">
            <h1>F A Q</h1>
        </div>
        <div class="row">
            <p><b>Q: Keterangan di website subtitles indonesia tersedia tapi setelah di download tidak ada subtitle nya</b><br>
            A: Itu adalah softsubs , pengertian softsubs silahkan baca di bawah.</p>
            <p><b>
            Q: Apa Perbedaan SOFTSUB Dan HARDSUB</b><br>
            A: Softsub adalah subtitle yang berupa teks petunjuk yang terpisah dari frame video yang ditampilkan selama pemutaran video. Softsub ini tergolong populer karena mudah dibuat dan diedit. Format yang digunakan softsub biasanya berupa .srt atau .ass. Kebalikan dari softsub, Hardsub adalah subtitle yang menjadi satu dengan frame video yang ditampilkan dan tidak bisa diedit lagi. Namun hardsub memiliki efek warna, huruf, dan transisi yang kompleks, seperti misalnya pada teks lirik lagu karaoke.</p>
            <p><b>
            Q: Bagaimana Cara Melapor Video Error</b><br>
            A: Sebelum Melaporkan Video Error Alangkah Baiknya GUnakan Terlebih Dahulu Player Cadangan (Venus, Streamango, VIP, GDRIVE), Bila Masih Tidak Bisa Silahkan Gunakan Fitur Live Chat yg ada Di sebelah Kanan , Sertakan Judul , Episode Agar Mudah Untuk Melalukan Pengecekan.</p>

            <p><b>
            Q: Cara Mengatasi Video Tidak Bisa DI play Dan Tidak Ada Suara Di Handphone</b><br>
            A: Untuk Pengguna Android , Silahkan Install VLC PLAYER FOR ANDROID</p>
            <p><b>
            Q: Bagusnya pake browser apa ?</b><br>
            A: Di sarankan menggunakan browser chrome atau firefox , Untuk Pengguna Mobile di sarankan menggunakan Browser FIREFOX</p>
            <p><b>
            Q: Bagaimana cara untuk Request Film/Drama ?</b><br>
            A: Sebelum melakukan request pertama terlebih dahulu pastikan anda sudah melakukan search di web kami , dan juga pastikan bahwa Film/Drama yang kamu mau sudah tamat atau dalam masa tayang, bagaimana cara mengetahui nya ? ada beberapa website yang bisa di jadikan acuan untuk mengetahui kapan film/drama tamat.<br>
            Contoh :
            wiki.d-addicts.com, silahkan pirsawan cek di bagian Broadcast Period</p>
        </div>
    </div>
</main>
  @endsection
</body>
</html>