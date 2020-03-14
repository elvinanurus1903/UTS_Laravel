<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Judul Film</th>
            <th>Tahun</th>
            <th>Image</th>
        </tr>
    </thead>
    <tbody>
    @php $id = 1 @endphp
    @foreach($users as $user)
        <tr>
            <td>{{ $id++ }}</td>
            <td>{{ $user->judul }}</td>
            <td>{{ $user->tahun }}</td>
            <td>{{ $user->image }}</td>
        </tr>
    @endforeach
    </tbody>
</table>