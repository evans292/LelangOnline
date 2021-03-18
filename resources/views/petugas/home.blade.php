@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>PAGE PETUGAS </h1>
            <!-- session disini berfungsi untuk mengambil data session di controller yang di PUT  -->
            <p>Hallo Masyarakat Jelata, {{Session::get('nama_lengkap')}}. Apakabar?</p>

            <h2>* Username kamu : {{Session::get('username')}}</h2>
            <h2>* Status Login : {{Session::get('login')}}</h2>
            <!-- ini buat logout  -->
            <a href="{{ url('logout') }}" class="btn btn-primary btn-lg">Logout</a>
            <a href="{{url('petugas/pemenang')}}" class="btn btn-primary">History</a>
            
            <!-- ini buat ngelink ke form tambah data -->
            <a href="{{url('petugas/tambah/barang')}}" class="btn btn-primary">tambah</a>

            <a href="{{url('petugas/home/lelang')}}" class="btn btn-primary">lelang</a>
            <table class="table">
                <tr>
                    <th>Id Barang</th>
                    <th>Nama Barang</th>
                    <th>Tanggal</th>
                    <th>Harga Awal</th>
                    <th>Aksi</th>
                </tr>
                @foreach($barang as $row)
                <tr>
                    <td>{{$row->id_barang}}</td>
                    <td>{{$row->nama_barang}}</td>
                    <td>{{$row->tgl}}</td>
                    <td>{{$row->harga_awal}}</td>
                    <td>
                        <a href="{{url('petugas'.$row->id_barang)}}" class="btn btn primary">detail</a>
                        <a href="{{url('petugas/edit/barang/'.$row->id_barang)}}" class="btn btn-primary">edit</a>
                        <form action="{{url('petugas/delete'.$row->id_barang)}}" method="post" class="mt-2">
                            @csrf
                            <!-- ini buat jalanin method delete -->
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary">delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </table>

        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection