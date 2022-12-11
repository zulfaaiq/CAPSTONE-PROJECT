@extends('master')

@section('konten')
<h3>Tampil Data Rumah Sakit Bhakti Asih Kabupaten Brebes</h3>
<a class="btn btn-success" href="{{route('tambahrs_bhakti_asih')}}"><i class="fa fa-plus"></i> Tambah Darah</a><br><br>
<table class="table table-bordered table-hover">
  <tr>
    <th>ID</th>
    <th>Golongan Darah</th>
    <th>Jumlah</th>
  </tr>
  @foreach($rs_bhakti_asih as $s) 
  <tr>
    <td>{{$s->id}}</td>
    <td>{{$s->gol_darah}}</td>
    <td>{{$s->jumlah}}</td>
    <td>
      <a href="/rs_bhakti_asih/ubah/{{$s->id}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
      <a href="/rs_bhakti_asih/hapus/{{$s->id}}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
    </td>
  </tr>
  @endforeach
</table>
@endsection