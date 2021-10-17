<?php
$page="Index Table Kota Provinsi";
$cek="provinsi";
?>

@extends('pemerintahan.layouts.template')
@section('content')

<!-- End Navbar -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12" style="background-color: #fefefe;">
        <div class="card" style="background-color: #fefefe;">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Berikut List Data Kota/Kabupaten di Provinsi {{$provinsi->name}}</h4>
            <a href="{{ Route('listProvinsi') }}"><p class="card-category"> Click untuk kembali ke list provinsi</p></a>
          </div>
          @if(session()->has('success'))
              <div class="alert alert-success mt-2">
                  {{ session()->get('success') }}
              </div>
          @endif

          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    Nama Kota
                  </th>
                  <th>
                    Nama Provinsi
                  </th>
                </thead>
                <tbody>
                @foreach ($kotas as $kota)
                  <tr>
                      <td>{{ $loop->index+1 }}</td>
                      <td>{{ $kota->name }}</td>
                      <td>{{ $kota->provinsi->name }}</td>
                  </tr>
                  @endforeach 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
