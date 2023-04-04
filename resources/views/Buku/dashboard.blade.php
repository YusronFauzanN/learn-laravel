<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1"> 
        <thead>
            <tr>
                <th>Nama Buku</th>
                <th>Jenis</th>
                <th>Penerbit</th>
            </tr>
        </thead>        
        <tbody>
            @foreach ($buku as $item)
            <tr>
                <td>{{$item->nama}}</td>
                <td>{{$item->jenis}}</td>
                <td>{{$item->penerbit}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>