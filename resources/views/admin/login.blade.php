<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $nama }}</title>
</head>
<body>
    ini adalah halaman login admin - {{ $nama }}

    <?php 
        if($lampu == 1) {
    ?>
    <h2>LAMPU NYALA</h2>
    <?php 
        } else {
    ?>
    <h2>LAMPU MATI</h2>
    <?php 
        }
    ?>
    
    @if ($lampu == 1)
        <h2>LAMPU NYALA</h2>
    @else 
        <h2>LAMPU MATI</h2>
    @endif

    {{ $kelas }}

    {!! $kelas !!}

    @switch($nilai)
        @case('A')
            <h2>MEMUASKAN</h2>  
        @break

        @case('B')
        <h2>BAIK</h2>  
        @break

        @case('C')
        <h2>CUKUP</h2>  
        @break
    @endswitch

    <ul>
        @for ($i = 1; $i <= $limit; $i++)
            <li>{{ $i }}</li>
        @endfor
    </ul>

    <ul>
        @for ($i = 0; $i < count ($hobbies); $i++)
            <li>{{ $hobbies[$i] }}</li>
        @endfor
    </ul>

    <ul>
        @foreach ($hobbies as $hobi )
            <li>{{ $hobi }}</li>
        @endforeach 
    </ul>

    <ul>
        @foreach ($hobbies as $hobi )
            <li>{{ $hobi }}</li>
        @empty
            data kosong
        @endforeach 
    </ul>   
</body>
</html>