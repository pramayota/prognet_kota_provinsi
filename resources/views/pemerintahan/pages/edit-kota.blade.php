<?php
$page="Edit Index Kota";
$cek= "kabupaten";
?>

@extends('pemerintahan.layouts.template')
@section('content')

<!-- End Navbar -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card" style="background-color: #fefefe;">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Add Index</h4>
            <p class="card-category">Edit data Kota/Kabupaten {{ $kota->name }} </p>
          </div>
          <div class="card-body">
            <form method="post" action="{{ route('saveEditKota', $kota->id) }}" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating" style="color:#000;">Nama Kota/Kabupaten</label>
                    <input name="name" type="text" class="form-control @error ('name') is-invalid @enderror" value="{{$kota->name}}">
                    <div class="text-danger">
                      @error('name')
                        {{ $message }}
                      @enderror
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <!-- <label class="bmd-label-floating">Jumlah Kaki</label> -->
                    <div class="my-auto" >
                      <!-- <label class="bmd-label-floating" style="color:#000;">Provinsi</label> -->
                      <select  name="provinsi_id" class="form-select @error ('provinsi_id') is-invalid @enderror" id="provinsi_id" style="display: inline-block;width:100%;background-color:transparent;border:unset; border-bottom: 1px solid #a9afbbd1; -webkit-appearance: none;">
                        @foreach ($provinsis as $provinsi)
                          <option value="{{ $provinsi->id }}"
                          @if ($kota->provinsi_id == $provinsi->id)
                          {{'selected="selected"'}}
                          @endif >
                        {{$provinsi->name}}</option>  
                        @endforeach
                      </select>
                      <div class="text-danger">
                      @error('provinsi_id')
                        {{ $message }}
                      @enderror
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary pull-right">Save Data</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-profile" style="background-color: #fefefe;">
          <div class="card-avatar">
            <a href="#pablo">
              <img class="img" src="../img/avatar-about.png" />
            </a>
          </div>
          <div class="card-body">
            <h4 class="card-title">BliBli.com</h4>
            <p class="card-description">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis accusantium necessitatibus eaque velit similique aspernatur soluta perspiciatis deleniti harum, illo laborum porro, et tenetur eveniet! Accusamus optio consequuntur eligendi doloribus?
            </p>
            <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection