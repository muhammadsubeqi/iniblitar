@extends('layouts-admin.admin-master')
@section('title')
    Admin Info Jelajah Blitar | Daftar Wisata
@endsection
@section('breadcrumb')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Daftar Wisata</h1>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Wisata</a></li>
                <li class="breadcrumb-item active">Daftar Wisata</li>
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
        <a href="{{ route('destination.create') }}" class="btn btn-success mb-2"><i class="fas fa-plus-circle"></i> Tambah
            Wisata</a>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Lokasi</th>
                        <th>Nama Wisata</th>
                        <th>Google Map</th>
                        <th>Deskripsi</th>
                        <th>Foto</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($destinations as $destination)
                        <tr>
                            <td class="align-middle">{{ $i++ }}</td>
                            <td class="align-middle">{{ $destination->category->name }}</td>
                            <td class="align-middle">{{ $destination->district->name }}</td>
                            <td class="align-middle">{{ $destination->name }}</td>
                            <td class="align-middle"><a href="{{ $destination->map }}">{!! substr(strip_tags($destination->map), 0, 15) !!}...</a></td>
                            <td class="align-middle">{!! substr(strip_tags($destination->content), 0, 20) !!}...</td>
                            <td class="align-middle"><img class="img-fluid" width="100"
                                    src="{{ $destination->getImage() }}" alt="">
                            </td>
                            <td class="align-middle">
                                {{-- <a href="{{ route('destination.edit', $destination) }}" class="btn btn-sm btn-secondary"><i
                                        class="fa fa-eye"></i></a> --}}
                                <a href="{{ route('destination.edit', $destination) }}" class="btn btn-sm btn-warning"><i
                                        class="fa fa-edit"></i></a>

                                <button id="delete" data-title="{{ $destination->name }}"
                                    href="{{ route('destination.delete', $destination) }}" class="btn btn-sm btn-danger"><i
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
