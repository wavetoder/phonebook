<!DOCTYPE html>
<html>
<head>
    <title>Edit Instansi</title>
</head>
<body>

<div>
    <a href="{{ route('instansi.index') }}"> Back</a>
</div>

@if ($errors->any())
    <div>
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('instansi.update',$instansi->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="nama">Nama:</label>
    <input type="text" name="nama" id="nama" value="{{ $instansi->nama }}" required>
    <br>
    <label for="no_telp">No. Telp:</label>
    <input type="text" name="no_telp" id="no_telp" value="{{ $instansi->no_telp }}" required>
    <br>
    <label for="instansi">Instansi:</label>
    <input type="text" name="instansi" id="instansi" value="{{ $instansi->instansi }}" required> <!-- Tambahkan ini -->
    <br>
    <button type="submit">Update</button>
</form>

</body>
</html>