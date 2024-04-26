<!DOCTYPE html>
<html>
<head>
    <title>Add Instansi</title>
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

<form action="{{ route('instansi.store') }}" method="POST">
    @csrf

    <label for="nama">Nama:</label>
    <input type="text" name="nama" id="nama" required>
    <br>
    <label for="no_telp">No. Telp:</label>
    <input type="text" name="no_telp" id="no_telp" required>
    <br>
    <label for="instansi">instansi:</label>
    <input type="text" name="instansi" id="instansi" required>
    <br>
    <button type="submit">Submit</button>
</form>

</body>
</html>