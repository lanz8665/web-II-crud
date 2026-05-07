<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blade Form</title>
</head>

<body>
    <h1>Form Pengelolaan Data</h1>
    <form action="{{ route('create') }}" method="post">
        @csrf
        <label for="npm">NPM</label><br>
        <input type="text" name="npm"><br>

        <label for="nama">Nama</label><br>
        <input type="text" name="nama"><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>

</html>
