<?php
$page="Index Table";
$cek="kabupaten";
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
            <h4 class="card-title ">Add Data Kota/Kabupaten</h4>
            <a href="{{ Route('addKota') }}"><p class="card-category"> Click untuk menambah data kota</p></a>
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
                  <th>
                    Action
                  </th>
                </thead>
                <tbody>
                @foreach ($kotas as $kota)
                  <tr>
                      <td>{{ $loop->index+1 }}</td>
                      <td>{{ $kota->name }}</td>
                      <td>{{ $kota->provinsi->name }}</td>
                      <td>
                          <form action="" method="post">
                              <div class="btn-group" role="group" aria-label="Basic example" style="text-center">
                                  @csrf
                                  <a type="button" href="" style="margin-right: 20%;"><i class="fas fa-calendar-week" style="font-size: 20px;"></i></a>
                                  <a type="button" href="{{ Route('editKota', $kota->id)}}"  style="margin-right: 20%;"><i class="fas fa-edit" style="font-size: 20px;"></i></a>
                                  <a type="submit" onclick="return confirm('Yakin Ingin Mengapus Data?')" href="{{Route('deleteKota', $kota->id)}}" style="margin-right: 20%;" ><i class="fas fa-trash-alt" style="font-size:20px;cursor:pointer;"></i></a>
                              </div>
                          </form>
                      </td>
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
