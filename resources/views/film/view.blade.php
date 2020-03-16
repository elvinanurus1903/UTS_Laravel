@extends('film.parent')
@section('title', 'Detail Data')
@section('main')

<main class="movie_list">
 <div class="card-detail">
    <div class="card-detailfilm">
    <img src="{{ URL::to('/') }}/images/{{ $film->image }}" width="350" height="550" />
       </div> 
    <div class="card-detailfilm2">
        <h3><b></b></h3>
        <hr>
        <div class="fontkecil">
            <table>
            	<tr height="60">
                    <td width="300">
                        {{ $film->judul }}
                    </td>
                </tr>
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
