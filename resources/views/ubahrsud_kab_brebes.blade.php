@extends('master')

@section('konten')
<h3>Ubah Data Rumah Sakit Umum Daerah Kabupaten Brebes</h3>
  @foreach($rsud_kab_brebes as $s)
    <form method="post" action="{{route('updatersud_kab_brebes')}}">
      @csrf
      <input type="hidden" name="id" value="{{$s->id}}">
      <div class="form-group">
        <label>Golongan Darah</label>
        <input type="text" name="gol_darah" value="{{$s->gol_darah}}" class="form-control" placeholder="Golongan Darah" required="">
      </div>
      <div class="form-group">
        <label>Jumlah</label>
        <input type="text" name="jumlah" value="{{$s->jumlah}}" class="form-control" placeholder="Jumlah" required="">
      </div>
      <div class="form-group text-right">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update Data</button>
      </div>
    </form>
  @endforeach
@endsection