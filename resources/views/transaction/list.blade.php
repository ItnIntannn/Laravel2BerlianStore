@extends('template.index')

@section('title', 'Home')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6" style="color: #610014;">
                        <h1>Data Transaksi</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#" style="color: #610014;">Home</a></li>
                            <li class="breadcrumb-item active" style="color: #EAAAB8;">Data Transaksi</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <div class="card">
                            <div class="card-header" style="background-color: #D5647C;">
                                <h3 class="card-title" style="color: #610014;">Data Transaksi</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body" style="color: #610014;">
                                <table id="example2" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nota</th>                                           
                                            <th>User</th>
                                            <th>Customer</th> 
                                            <th>Pembeli</th>    
                                            <th>date</th>
                                            <th>Deskripsi</th>                                                  
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $item->nota }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->status == 1 ? 'Aktif' : 'Tidak Aktif' }}</td>
                                                
                                                <td>
                                                    <a href="/transactions/{{ $item->nota }}">
                                                        <button type="button" class="btn btn-warning btn-sm"><i
                                                                class="far fa-edit"></i>
                                                        </button>
                                                    </a>

                                                    <form action="/transactions/{{ $item->nota }}" method="POST"
                                                        style="display: inline-block">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                                class="far fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection



