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
            
            <!-- ini buat ngelink ke form tambah data -->
            <a href="{{url('petugas/tambah/lelang')}}" class="btn btn-primary">tambah</a>

            <a href="{{url('petugas/home')}}" class="btn btn-primary">barang</a>
            <table class="table">
                <tr>
                    <th>Id lelang</th>
                    <th>Nama Barang</th>
                    <th>Tanggal</th>
                    <th>Harga Awal</th>
                    <th>Harga Akhir</th>
                    <th>Nama Masyarakat</th>
                    <th>Nama Petugas</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
                @foreach($lelang as $row)
                <tr>
                    <td>{{$row->id_lelang}}</td>
                    @if ($row->barang !== null)
                    <td>{{$row->barang->nama_barang}}</td>
                    @else
                    <td>Belum ada</td>  
                    @endif
                    <td>{{$row->tgl_lelang}}</td>
                    @if ($row->barang !== null)
                    <td>{{$row->barang->harga_awal}}</td>
                    @else
                    <td>Belum ada</td>  
                    @endif
                    <td>{{$row->harga_akhir}}</td>
                    @if ($row->masyarakat !== null)
                    <td>{{$row->masyarakat->nama_lengkap}}</td>
                    @else 
                    <td>Belum ada</td>
                    @endif
                    <td>{{$row->petugas->nama_petugas}}</td>
                    <td>{{$row->status}}</td>
                    <td>
                        <a href="{{url('petugas/buka/lelang/'.$row->id_lelang)}}" class="btn btn-primary">buka</a>
                        <a href="{{url('petugas/tutup/lelang/'.$row->id_lelang)}}" class="btn btn-primary">tutup</a>

                        <a href="{{url('petugas/edit/lelang/'.$row->id_lelang)}}" class="btn btn-primary mt-2">edit</a>
                        <form action="{{url('petugas/lelang'.$row->id_lelang)}}" method="post" class="mt-2">
                            @method('DELETE')
                            @csrf
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