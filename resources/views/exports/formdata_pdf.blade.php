<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table th, table td {
            border: 1px solid #000;
            padding: 6px;
            text-align: left;
            white-space: nowrap;
        }
        table th {
            background-color: #f2f2f2;
        }
        img {
            width: 60px;
            height: auto;
        }

         .no-wrap {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 150px;
        }
    </style>
</head>
<body>
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
                    <td class="no-wrap text-center">{{ $item->category}}</td>
                    <td class="no-wrap text-center">{{ $item->type_motorcycle}}</td>
                    <td class="no-wrap text-center">{{ $item->cost_estimation}}</td>
                    <td class="no-wrap text-center">{{ $item->link}}</td>
                    <td class="no-wrap text-center">
                        @if($item->image)
                            <img src="{{ public_path('storage/images/'.$item->image) }}"  style="width:200px; height:200px; object-fit:cover;">

                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</body>
</html>
