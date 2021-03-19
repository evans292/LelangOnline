@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <div class="container">
            <!-- Remove This Before You Start -->
            <h1>REGISTER PETUGAS</h1>
            <hr>
            <!-- ini buat cek doang -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- ini buat register -->
            <!-- yg penting mah di tag input name sama id harus sama di controller atau field di tabel / DB  -->
            <form action="{{ url('admin/registerPost') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama_petugas">Name:</label>
                    <input type="text"  class="form-control" id="nama_petugas" name="nama_petugas">
                </div>
                <div class="form-group mb-3">
                    <!-- kalo ini namenya simpen aja di select -->
                    <!-- terus valuenya simpen di option -->
                    <select class="form-select" name="id_level" id="id_level"><br>
                        <option value="">-- Pilih Level -- </option>
                        <option value="1">petugas</option>
                        <option value="2">admin</option>
                    </select>
                </div>                
                <div class="form-group mt-2">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="form-group">
                    <label for="pass">Password:</label>
                    <input type="password" class="form-control" id="pass" name="pass">
                </div>
                <div class="form-group">
                    <label for="cpass">Password Confirmation:</label>
                    <input type="password" class="form-control" id="cpass" name="cpass">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Clear</button>
                </div>
            </form>
        </div>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection