@extends('film.parent')

@section('main')
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

 <form method="post" action="{{ route('film.update', $film->id) }}" enctype="multipart/form-data">
        <div class="col-md-12">
                @csrf
                @method('PATCH')
                <div class="form-group">
       <label>Judul</label>
        <input type="text" name="judul" value="{{ $film->judul}}" class="form-control input-lg" />
       </div>
      <div class="form-group">
       <label>Durasi</label>
        <input type="text" name="kode" value="{{ $film->kode}}" class="form-control input-lg" />
       </div>
    
       <div class="form-group">
       <label>Tahun</label>
        <input type="text" name="tahun" value="{{ $film->tahun}}" class="form-control" />
      </div>
      <div class="form-group">
       <label>Pemain</label>
        <input type="text" name="pemain" value="{{ $film->pemain}}" class="form-control" />
      </div>
      <div class="form-group">
       <label>Sinopsis</label>
        <input type="text" name="sinopsis" value="{{ $film->sinopsis}}" class="form-control" style=' border:1px border-radius:4px; -moz-border-radius:4px; height:80px;  margin-left:10px;'/>
      </div>
      <div class="form-group">
       <label>Genre</label>
       <select class="form-control" name="genre" style=' border:1px border-radius:4px; -moz-border-radius:4px; height:50px; margin-left:10px;'>
                        @foreach( $genre as $genre)
                            <option value="{{ $genre->id_genre }}" {{ $genre->id_genre == $film->genre ? 'selected="selected"' : '' }}> {{ $genre->jenis_genre}} </option>
                        @endforeach
                    </select>
        </div>
      <div class="form-group">
       <label >Pilih Gambar</label>

        <input type="file" name="image" />
              <img src="{{ URL::to('/') }}/images/{{ $film->image }}" class="img-thumbnail" width="100" />
                        <input type="hidden" name="hidden_image" value="{{ $film->image }}" />
       </div>
      <br />
      <div class="form-group ">
       <input type="submit" name="edit" class="btn btn-warning" value="Edit" />
      </div>
     </form>

@endsection
