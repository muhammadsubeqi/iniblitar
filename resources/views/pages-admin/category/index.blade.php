@extends('layouts-admin.admin-master')
@section('title')
    Admin Info Jelajah Blitar | Daftar Kategori
@endsection
@section('breadcrumb')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Daftar Kategori</h1>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Kategori</a></li>
                <li class="breadcrumb-item active">Daftar Kategori</li>
            </ol>
        </div>
        <!-- /.col -->
    </div>
@endsection
@push('style')
    <link rel="stylesheet" href="{{ asset('/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush
@section('content')
    <div class="card">
        <a href="{{ route('category.create') }}" class="btn btn-success mb-2"><i class="fas fa-plus-circle"></i> Tambah
            Kategori</a>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>fa fa-icon</th>
                        <th>Slug</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $category->name }}</td>
                            <td class="align-middle"><img class="img-fluid" width="100" src="{{ $category->getIcon() }}"
                                    alt="">
                            </td>
                            <td>{{ $category->slug }}</td>
                            <td>
                                <a href="{{ route('category.edit', $category) }}" class="btn btn-sm btn-warning"><i
                                        class="fa fa-edit"></i></a>

                                <button id="delete" data-title="{{ $category->name }}"
                                    href="{{ route('category.delete', $category) }}" class="btn btn-sm btn-danger"><i
                                        class="fa fa-trash"></i></button>

                                <form action="" method="post" id="deleteForm">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" style="display: none">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@push('script')
    <script src="{{ asset('/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('/admin/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('/admin/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('/admin/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('/admin/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('/admin/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('/admin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
    <script type="text/javascript">
        $('button#delete').on('click', function() {
            var href = $(this).attr('href');
            var title = $(this).data('title');

            var result = confirm('Apakah Anda yakin menghapus ' + title + '?');

            if (result) {
                document.getElementById('deleteForm').action = href;
                document.getElementById('deleteForm').submit();
            }
        });
    </script>
@endpush
