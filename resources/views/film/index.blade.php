@extends('film.parent')
@section('title', 'Beranda')
@section('main')

<div class="table-responsive table-invoice">
          <table class="table table-striped">
 <tr>
  <a href="{{route('genre.index')}}" class="btn btn-success btn-sm">Tambah Kategori</a>
  <a href="excel/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
  <a href="excel/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
 <form method="GET" class="form-inline">
              <div class="form-group">
                <input type="text" name="search" class="form-control" placeholder="Search" value="{{ request()->get('search') }}">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Search</button>
              </div>
            </form>

  <th width="10%">Image</th>
  <th width="10%">Durasi</th>
  <th width="25%">Judul</th>
  <th width="15%">Tahun</th>
  <th width="10%">Genre</th>
<th width="30%">Action</th>
 </tr>
 @foreach($film as $row)
  <tr>
   <td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
   <td>{{ $row->kode }}</td>
   <td>{{ $row->judul }}</td>
   <td>{{ $row->tahun }}</td>
   <td>{{ $row->jenis_genre }}</td>
   <td>
   
    <form action="{{route('film.destroy', $row->id)}}"  method="post">
       <a href="{{route('film.show', $row->id)}}" class="btn btn-primary btn-sm">Lihat</a>
    <a href="{{route('film.edit', $row->id)}}" class="btn btn-warning btn-sm">Edit</a>
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
</form>
   </td>
  </tr>
 @endforeach
</table>
{!! $film->appends(request()->except('page'))->render() !!}
</div>
@endsection