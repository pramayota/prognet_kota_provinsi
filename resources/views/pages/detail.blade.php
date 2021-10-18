<?php
$page="Detail"
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
            <h4 class="card-title">Detail Index</h4>
            <p class="card-category">Detail data animal </p>
          </div>
          <div class="card-body">
            <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                <label class="bmd-label-floating">Nama</label>
                <input name="name" type="text" value="{{$animal->name}}" class="form-control" disabled>
                </div>
            </div>
            </div>
            <div class="row" style="margin-bottom: 10px;">
                <div class="col-md-12">
                    <div class="col-sm-3" style="padding-left: unset;">
                    <label class="bmd-label-floating">Photo</label>
                    </div>
                    <div class="col-sm-9">
                    <!-- <label for="image" class="form-label">Photo</label> -->
                    <img src="{{URL::to('/')}}/foto/{{$animal->image}}" width="200px"/>
                    <label class="bmd-label-floating">{{ $animal->image }}</label>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                <label class="bmd-label-floating">Jumlah Kaki</label>
                <div class="my-auto" >
                    <select  name="jumlah_kaki" class="form-select" id="input" style="display: inline-block;width:100%;background-color:transparent;color:#a9afbbd1;border:unset; border-bottom: 1px solid #a9afbbd1; -webkit-appearance: none;" readonly>
                    <option >{{$animal->jumlah_kaki}}</option>
                    </select>
                </div>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                <label>Description</label>
                <div class="form-group">
                    <textarea name="description" class="form-control" rows="3" disabled>{{$animal->description}}</textarea>
                </div>
                </div>
            </div>
            </div>
            <a href="/" class="btn btn-primary pull-right">Back to Home</a>
            <div class="clearfix"></div>
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