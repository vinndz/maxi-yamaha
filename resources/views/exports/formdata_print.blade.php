<!DOCTYPE html>
<html>
    
    <head>
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Cetak Data Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #000;
            padding: 6px;
            text-align: left;
        }
        img {
            width: 60px;
            height: auto;
        }

        .no-wrap {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 150px; /* sesuaikan */
        }

    </style>
</head>
<body onload="window.print()">
    <h2>Data Form</h2>
    <div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Instagram</th>
                <th>Category</th>
                <th>Motorcycle Type</th>
                <th>Cost Estimation</th>
                <th>Link</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                    <td class="no-wrap text-center">{{ $item->id }}</td>
                    <td class="no-wrap text-center">{{ $item->name }}</td>
                    <td class="no-wrap text-center">{{ $item->email }}</td>
                    <td class="no-wrap text-center">{{ $item->phone }}</td>
                    <td class="no-wrap text-center">{{ $item->instagram }}</td>
                    <td class="no-wrap text-center">{{ $item->category }}</td>
                    <td class="no-wrap text-center">{{ $item->type_motorcycle }}</td>
                    <td class="no-wrap text-center">{{ $item->cost_estimation }}</td>
                    <td class="no-wrap text-center">{{ $item->link }}</td>
                    <td class="no-wrap text-center">
                        @if($item->image)
                            <img src="{{ asset('storage/images/'.$item->image) }}" alt="image" style="width: 200px; height: 200px;" >
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</body>
</html>


