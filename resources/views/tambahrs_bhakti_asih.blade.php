@extends('master')

@section('konten')
<h3>Form Input Darah Rumah Sakit Bhakti Asih Kabupaten Brebes</h3>
<form method="post" action="{{route('simpanrs_bhakti_asih')}}">
  @csrf
  <div class="form-group">
    <label>Golongan darah</label>
    <input type="text" name="gol_darah" class="form-control" placeholder="Golongan Darah" required="">
  </div>
  <div class="form-group">
    <label>Jumlah</label>
    <input type="text" name="jumlah" class="form-control" placeholder="Jumlah" required="">
  </div>
  <div class="form-group text-right">
    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan Data</button>
  </div>
</form>
@endsection