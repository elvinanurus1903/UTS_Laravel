@extends('front.master')
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" >
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/film.css') }}" media="all">
</head>

@section('title', 'Movie Detail')
@section('main')

<main class="movie_list">
    
 <div class="card-detail">
    <div class="card-detailfilm">
    <img src="{{ URL::to('/') }}/images/{{ $film->image }}" width="350" height="550" />
       </div> 
    <div class="card-detailfilm2">
        <h3><b>{{ $film->judul }}</b></h3>
        <hr>
        <div class="fontkecil">
        <table>
            <tr height="60">
                <td width="300">
                    Durasi
                </td>
                <td width="300">
                    {{ $film->kode }}
                </td>
            </tr>
             <tr height="60">
                <td width="300">
                    Tahun
                </td>
                <td width="300">
                    {{ $film->tahun }}
                </td>
            </tr>
            <tr height="60">
                <td width="300">
                    Pemain
                </td>
                <td width="300">
                    {{ $film->pemain }}
                </td>
            </tr>
        </table>
        <hr>
{{ $film->sinopsis }}
</div>
    </div>   
 </div>
             </main>
  @endsection
</body>
</html>