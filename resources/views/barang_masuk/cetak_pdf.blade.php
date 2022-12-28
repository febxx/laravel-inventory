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

        /* Zebra striping */
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
        <h3>Laporan Barang Masuk</h3>
    </center>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Barang</th>
                <th>Tanggal</th>
                <th>Jumlah Barang</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barang as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->barang->nama}}</td>
                <td>{{$data->tanggal}}</td>
                <td>{{$data->jumlah_barang}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
