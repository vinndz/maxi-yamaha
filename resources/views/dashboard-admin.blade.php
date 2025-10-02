@extends('layouts.app') {{-- Pastikan kamu punya layout utama --}}

@section('content')

<style>
    table.dataTable td {
    white-space: nowrap;
}

</style>
<div class="container mt-5">
    <h2 class="mb-4">Admin Dashboard</h2>

    {{-- Flash message --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <h5 class="card-title">Data Participant</h5>
            <table class="table table-bordered table-striped" id="table">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Instagram</th>
                        <th>Category</th>
                        <th>Motorcycle Type</th>
                        <th>Cost Estimation</th>
                        <th>Link</th>
                        <th>Photo</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <!-- DataTables Buttons -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">

    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>

    <!-- PDF & Excel Export -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize DataTable after all scripts are loaded
            $('#table').DataTable({
                processing: true,
                serverSide: false,
                ajax: {
                    url: '/data-table',
                    type: 'GET',
                    dataSrc: 'data'
                },
                columns: [
                    {
                        data: null,
                        render: function(data, type, row, meta) {
                            return meta.row + 1;
                        }
                    },
                    { data: 'name' },
                    { data: 'email' },
                    { data: 'phone' },
                    { data: 'instagram' },
                    { data: 'category', className: 'nowrap' },
                    { data: 'type_motorcycle', className: 'nowrap' },
                    { data: 'cost_estimation' },
                    { data: 'link' },
                    { 
                        data: 'image',
                        render: function(data, type, row, meta) {
                            if (data) {
                                return `<img src="../storage/images/${data}" alt="Image" width="80" class="img-thumbnail">`;
                            }
                            return 'No Image';
                        }
                    },
                ],
                dom: 'Bfrtip', // ✅ Tombol export muncul
                buttons: [
                    {
                        text: 'Export Excel',
                        action: function () {
                            window.location.href = '/export-excel';
                        }
                    },
                    {
                        text: 'Export PDF',
                        action: function () {
                            window.location.href = '/export-pdf';
                        }
                    },
                    // {
                    //     text: 'Print',
                    //     action: function () {
                    //         window.open('/print-data', '_blank');
                    //     }
                    // }
                ]
            });

        });
    </script>

