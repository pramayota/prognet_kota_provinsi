<?php
$page="Add Index"
?>

@extends('layouts.template')
@section('content')

<!-- End Navbar -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Add Index</h4>
            <p class="card-category">Input data animal </p>
          </div>
          <div class="card-body">
            <form method="post" action="{{ route('savedata') }}" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nama</label>
                    <input name="name" type="text" class="form-control @error ('name') is-invalid @enderror">
                    <div class="text-danger">
                      @error('name')
                        {{ $message }}
                      @enderror
                    </div>
                  </div>
                </div>
              </div>
              <div class="row" style="margin-bottom: 15px;">
                <div class="col-md-12">
                  <div class="col-sm-3" style="padding-left: unset;">
                    <label class="bmd-label-floating">Photo</label>
                  </div>
                  <div class="col-sm-9" style="padding-left: unset;">
                    <!-- <label for="image" class="form-label">Photo</label> -->
                    <input class="form-control  @error ('foto') is-invalid @enderror" type="file" id="foto" name="foto">
                    <div class="text-danger">
                      @error('foto')
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
                      <select  name="jumlah_kaki" class="form-select @error ('jumlah_kaki') is-invalid @enderror" id="input" style="display: inline-block;width:100%;background-color:transparent;color:#a9afbbd1;border:unset; border-bottom: 1px solid #a9afbbd1; -webkit-appearance: none;">
                        <option selected value="" >Pilih Jumlah Kaki</option> 
                        <option value="2 kaki">2 Kaki</option>
                        <option value="4 kaki">4 Kaki</option>
                      </select>
                      <div class="text-danger">
                      @error('jumlah_kaki')
                        {{ $message }}
                      @enderror
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Description</label>
                    <div class="form-group">
                      <textarea name="description" class="form-control @error ('description') is-invalid @enderror" rows="3"></textarea>
                    </div>
                    <div class="text-danger">
                      @error('description')
                        {{ $message }}
                      @enderror
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
        <div class="card card-profile">
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