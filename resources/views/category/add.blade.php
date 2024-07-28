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
                        <h1>Data Kategori</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#" style="color: #610014;">Home</a></li>
                            <li class="breadcrumb-item active" style="color: #EAAAB8;">Data Kategori</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- form start -->
        <form action="/categories/{{ @$data->id }}" method="POST">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header" style="background-color: #D5647C;">
                            <h3 class="card-title"  style="color: #610014;">Input Kategori</h3>
                        </div>
                        <!-- /.card-header -->


                        @if (@$data)
                            @method('PUT')
                        @endif

                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="id" style="color: #610014;">Kode</label>
                                <input type="text" class="form-control" name="id" placeholder="Kode"
                                    value="{{ @$data->id }}">
                            </div>
                            <div class="form-group">
                                <label for="name" style="color: #610014;">Nama</label>
                                <input type="text" class="form-control" name="name" placeholder="Nama"
                                    value="{{ @$data->name }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectRounded0" style="color: #610014;">Status</label>
                                <select name="status" class="custom-select rounded-0">
                                    <option value="1"{{ @$data->status == 1 ? 'selected' : '' }}>Tersedia</option>
                                    <option value="0"{{ @$data->status == 0 ? 'selected' : '' }}>Tidak Tersedia
                                    </option>
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn" style="background-color: #D5647C; color: #610014;">Simpan</button>
                        </div>

                    </div>
                    <!-- /.card -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </form>
    </div>


@endsection
