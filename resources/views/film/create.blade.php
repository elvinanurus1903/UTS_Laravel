@extends('film.parent')

@section('main')
@if($errors->any())
<div class="alert alert-danger">
 <ul>
  @foreach($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
 </ul>
</div>
@endif
<form method="post" action="{{ route('film.store') }}" enctype="multipart/form-data">
 @csrf
 <div class="form-group">
  <label>Durasi</label>
   <input type="text" name="kode" class="form-control input-lg" />
  </div>
 <div class="form-group">
  <label>Judul</label>
   <input type="text" name="judul" class="form-control input-lg" />
  </div>
  <div class="form-group">
  <label>Pemain</label>
   <input type="text" name="pemain" class="form-control input-lg" />
  </div>
   <div class="form-group">
  <label >Sinopsis</label>
   <input type="text" name="sinopsis" class="form-control input-lg" />
  </div>
 <div class="form-group">
  <label>Tahun</label>
   <input type="text" name="tahun" class="form-control input-lg" />
</div>
   <div >
    <label >Tahun</label>
 <select class="form-control input-lg" id="genre" name="genre" style=' border:1px border-radius:4px; -moz-border-radius:4px; height:50px; margin-left:10px;'>
@foreach( $genre as $genre)
                            <option value="{{$genre->id_genre }}">
                              {{ $genre->jenis_genre }}
                            </option>
                        @endforeach
  </select>

 <div class="form-group">
  <label>Select Profile Image</label>
   <input type="file" name="image" />
  </div>
 <div class="form-group">
  <input type="submit" name="add" class="btn btn-primary" value="Add" />
 </div>

</form>

@endsection
