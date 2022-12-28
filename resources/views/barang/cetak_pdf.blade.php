<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <style type="text/css">
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 50px auto;
        }

        tr:nth-of-type(odd) {
            background: #eee;
        }

        th {
            background: #3498db;
            color: white;
            font-weight: bold;
            text-align: inherit;
        }

        td,
        th {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
            font-size: 18px;
        }
    </style>
    <center>
        <h1>Inventory</h1>
        <h2>Data Barang</h2>
    </center>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barang as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->nama}}</td>
                <td>{{$data->deskripsi}}</td>
                <td>{{$data->stok}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
