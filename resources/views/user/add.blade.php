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
                        <h1>Data User</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#" style="color: #610014;">Home</a></li>
                            <li class="breadcrumb-item active" style="color: #EAAAB8;">Data User</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>


        <!-- Main content -->
        <!-- form start -->
        <form action="/users/{{ @$data->id }}" method="POST" enctype="multipart/form-data">
            <section class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-4">
                            <div class="card card-primary">
                                <div class="card-body" style="background-color: #D5647C;">
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
                                    <h3 class="card-title"  style="color: #610014;">Input User</h3>
                                </div>
                                <!-- /.card-header -->


                                @if (@$data)
                                    @method('PUT')
                                @endif

                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name" style="color: #610014;">Nama</label>
                                        <input type="text" class="form-control" name="name" placeholder="Nama"
                                            value="{{ @$data->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="email" style="color: #610014;">Email</label>
                                        <input type="text" class="form-control" name="email" placeholder="Email"
                                            value="{{ @$data->email }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="password" style="color: #610014;">Password</label>
                                        <input type="text" class="form-control" name="password" placeholder="Password"
                                            value="{{ @$data->password }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="level" style="color: #610014;">Level</label>
                                        <select name="level" class="custom-select rounded-0">
                                            <option value="1" {{ @$data->level == 2 ? 'selected' : '' }}>Admin
                                            </option>
                                            <option value="0" {{ @$data->level == 1 ? 'selected' : '' }}>Kasir
                                            </option>
                                            <option value="0" {{ @$data->level == 0 ? 'selected' : '' }}>Blokir
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn" style="background-color: #D5647C; color: #610014;">Simpan</button>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- /.card -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </form>
    </div>

@endsection
