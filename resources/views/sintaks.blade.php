<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sintaks dasar blade</title>
</head>

<body>
    <p>selamat datang {{ $nama }}</p>
    <p>alamat anda {!! $alamat !!}</p>
    <p>ID User anda {{ $id }}</p>

    {{-- ini komentar blade --}}

    <br>
    <a href="{{ url('/home') }}">Home</a>
    <a href="{{ route('home') }}">Beranda</a>
    <img src="{{ 'img/kitten.png' }}" alt="gambar kucing">
    <br>
    {{-- struktru control --}}
    @isset($nilai)
        <b>nilai tersedia</b>
    @endisset
    <br>
    @if ($nilai > 80)
        <b>lulus grade A</b>
    @elseif($nilai > 70)
        <b>lulus Grade B</b>
    @else
        <b>tidak lulus</b>
    @endif

    <p><b>Looping</b></p>
    <ul>
        @for ($i = 0; $i < count($buah); $i++)
            <li>{{ $buah[$i] }}</li>
        @endfor
    </ul>
    <br>
    <ol>
        @foreach ($buah as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ol>
</body>

</html>
