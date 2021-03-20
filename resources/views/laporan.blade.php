<style>
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
    }
    th, td {
      padding: 15px;
    }
</style>

 <!-- ini buat ngelink ke form tambah data -->
 <table style="width:100%">
    <tr>
        <th>Id lelang</th>
        <th>Nama Barang</th>
        <th>Tanggal</th>
        <th>Harga Akhir</th>
        <th>Nama Masyarakat</th>
        <th>Nama Petugas</th>
        <th>Status</th>
    </tr>
    @foreach($lelang as $row)
    <tr>
        <td>{{$row->id_lelang}}</td>
        <td>{{$row->barang->nama_barang}}</td>
        <td>{{$row->tgl_lelang}}</td>
        <td>{{$row->harga_akhir}}</td>
        <td>{{$row->masyarakat->nama_lengkap}}</td>
        <td>{{$row->petugas->nama_petugas}}</td>
        <td>{{$row->status}}</td>
    </tr>
    @endforeach

</table>