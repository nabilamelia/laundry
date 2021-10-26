@extends('layouts.template')
@section('title', 'Dashboard Outlet')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Title</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <a href="{{url ('/outlet/create') }}" class="btn btn-sm btn-success mb-3">Tambah Outlet</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama Outlet</td>
                    <td>Alamat Outlet</td>
                    <td>Telepon</td>
                    <td>Action</td>
               </tr>
            </thead>
            <tbody>
                <?php $no=1 ?>
                @foreach ($outlet as $i)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $i->nama }}</td>
                    <td>{{ $i->alamat }}</td>
                    <td>{{ $i->tlp }}</td>
                    <td>detail | Update | Hapus </td>
                </tr>
                @endforeach
            <tbody>
        </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        Footer
    </div>
    <!-- /.card-footer-->
</div>
@endsection