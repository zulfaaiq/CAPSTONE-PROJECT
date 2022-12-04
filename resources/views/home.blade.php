@extends('master')

@section('konten')
  <h4>Selamat Datang <b>{{Auth::user()->email}}</b></h4>
  <div class="row d-flex justify-content-center ">
  <div class="col-10 col-sm-5 col-md-5 col-lg-3">
          <a href="rsud_kab_brebes/tampil">
            <div class="card d-flex align-items-center pb-2 card-rs rounded-4">
              <img src="./image/rsud_brebes.jpg" class="rounded-circle card-rs__img" alt="profile image">
              <div class="card-body card-rs__content text-center">
                <h4 class="card-title">
                  Rumah Sakit Umum Daerah Kabupaten Brebes
                </h4>
              </div>
            </div>
          </a>
          </div>
          <div class="col-10 col-sm-5 col-md-5 col-lg-3">
          <a href="rsud_kota_tegal/tampil">
            <div class="card d-flex align-items-center pb-2 card-rs rounded-4">
              <img src="./image/rsud_tegal.jpg" class="rounded-circle card-rs__img" alt="profile image">
              <div class="card-body card-rs__content text-center">
                <h4 class="card-title">
                  Rumah Sakit Umum Daerah Kota Tegal
                </h4>
              </div>
            </div>
          </a>
          </div>
          <div class="col-10 col-sm-5 col-md-5 col-lg-3">
          <a href="rs_bhakti_asih/tampil">
            <div class="card d-flex align-items-center pb-2 card-rs rounded-4">
              <img src="./image/rs_bhakti_asih.png" class="rounded-circle card-rs__img" alt="profile image">
              <div class="card-body card-rs__content text-center">
                <h4 class="card-title">
                  Rumah Sakit Bhakti Asih Kabupaten Brebes
                </h4>
              </div>
            </div>
          </a>
          </div>
          <div class="col-10 col-sm-5 col-md-5 col-lg-3">
          <a href="#">
            <div class="card d-flex align-items-center pb-2 card-rs rounded-4">
              <img src="./image/rsud_kabupaten_tegal.jpg" class="rounded-circle card-rs__img" alt="profile image">
              <div class="card-body card-rs__content text-center">
                <h4 class="card-title">
                  RSUD Dr. Soeselo Kabupaten Tegal
                </h4>
              </div>
            </div>
          </a>
          </div>
          </div>
@endsection