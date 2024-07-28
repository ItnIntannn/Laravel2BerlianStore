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
                        <h1>Data Barang</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#" style="color: #610014;">Home</a></li>
                            <li class="breadcrumb-item active" style="color: #EAAAB8;">Data Barang</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <!-- form start -->
        <form action="/stuffs/{{ @$data->id }}" method="POST" enctype="multipart/form-data">
            <section class="content">
                <div class="container-fluid">

                    <div class="row">

                        <div class="col-4">
                            <div class="card card-primary">
                                <div class="card body">
                                    <div class="form-group">
                                        <input type="file" id="file" name="file">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-8">

                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header" style="background-color: #D5647C;">
                                    <h3 class="card-title" style="color: #610014;">Input Barang</h3>
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
                                        <label for="price" style="color: #610014;">Harga</label>
                                        <input type="text" class="form-control" name="price" placeholder="Harga"
                                            value="{{ @$data->price }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="unit" style="color: #610014;">Unit</label>
                                        <input type="text" class="form-control" name="unit" placeholder="Unit"
                                            value="{{ @$data->unit }}">
                                    </div>
                                    {{-- <div class="form-group">
                                    <label for="id">ID Kategori</label>
                                    <input type="text" class="form-control" name="id" placeholder="id" value="{{ @$data->id }}">
                                    </div> --}}
                                    <div class="form-group">
                                        <label for="id_category" style="color: #610014;">Id Kategori</label>
                                        <select name="id_category" class="custom-select rounded-0">
                                            @foreach ($categories as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ @$data->id_category == $item->id ? 'selected' : '' }}>
                                                    {{ $item->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="status" style="color: #610014;">Status</label>
                                        <select name="status" class="custom-select rounded-0">
                                            <option value="1"{{ @$data->status == 1 ? 'selected' : '' }}>Tersedia
                                            </option>
                                            <option value="0"{{ @$data->status == 0 ? 'selected' : '' }}>Tidak Tersedia
                                            </option>
                                        </select>
                                    </div>


                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn"  style="background-color: #D5647C; color: #610014;">Simpan</button>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>

                    </div>
                </div>
            </section>
            <!-- /.content -->
        </form>
        <!-- /.container-fluid -->

    </div>

@endsection
