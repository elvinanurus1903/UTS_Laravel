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
<div class="table-responsive table-invoice">
          <form method="post" action="{{ route('genre.store') }}" enctype="multipart/form-data">
             @csrf
            <div class="form-group">
              <label >Jenis Genre</label>
               <input type="text" name="jenis_genre" class="form-control input-lg" />
            </div>
            <div class="form-group">
              <input type="submit" name="add" class="btn btn-primary" value="Add" />
            </div>
          </form>
      <table class="table table-bordered table-striped">
           <tr>
            <th width="15%">ID</th>
            <th width="10%">Jenis Genre</th>
            <th width="10%">Aksi</th>
           </tr>
              @foreach($genre as $row)
            <tr>
             <td>{{ $row->id_genre }}</td>
             <td>{{ $row->jenis_genre }}</td>
              <td>
                <form action="{{route('genre.destroy', $row->id_genre)}}"  method="post">
                  <a href="{{route('genre.edit', $row->id_genre)}}" class="btn btn-warning btn-sm">Edit</a>
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
              </td>
            </tr>
              @endforeach
      </table>
      {!! $genre->links() !!}
</div>
@endsection

