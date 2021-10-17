<?php
$page="Welcome";
$cek="beranda";
?>

@extends('pemerintahan.layouts.maintemplate')
@section('content')

<!-- End Navbar -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-xl-4 col-lg-12" >
            <a href="#">
                <div class="card card-chart" style="background-color: #fefefe;">
                <div class="card-header card-header-success">
                    <div class="ct-chart" id="dailySalesChart"></div>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Prognet Pertemuan Kedua</h4>
                    <p class="card-category">
                    <span class="text-success"><i class="fa fa-long-arrow-up"></i> Sdh Dihapus</span> by Galuh Gita</p>
                </div>
                <div class="card-footer">
                    <div class="stats">
                    <i class="material-icons">access_time</i> updated 6 minggu yg lalu
                    </div>
                </div>
                </div>
            </a> 
        </div>
        <div class="col-xl-4 col-lg-12">
            <a href="/animals">
                <div class="card card-chart" style="background-color: #fefefe;">
                <div class="card-header card-header-warning">
                    <div class="ct-chart" id="websiteViewsChart"></div>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Prognet Pertemuan Ketiga</h4>
                    <p class="card-category">Animal CRUD</p>
                </div>
                <div class="card-footer">
                    <div class="stats">
                    <i class="material-icons">access_time</i> updated by 1 minggu yg lalu
                    </div>
                </div>
                </div>
            </a>
        </div>
        <div class="col-xl-4 col-lg-12">
            <a href="{{Route('listProvinsi')}}">
                <div class="card card-chart" style="background-color: #fefefe;">
                <div class="card-header card-header-danger">
                    <div class="ct-chart" id="completedTasksChart"></div>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Prognet Pertemuan Keempat</h4>
                    <p class="card-category">Kabupaten Provinsi CRUD</p>
                </div>
                <div class="card-footer">
                    <div class="stats">
                    <i class="material-icons">access_time</i> updated by 1 hari yang lalu
                    </div>
                </div>
                </div>
            </a>  
        </div>
        </div>
    </div>
</div>  
@endsection