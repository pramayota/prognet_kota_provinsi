<?php
$page="Index Table"
?>

@extends('layouts.template')
@section('content')

<!-- End Navbar -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Add Data</h4>
            <a href="/add"><p class="card-category"> Click untuk menambah data</p></a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    Name
                  </th>
                  <th>
                    Photo
                  </th>
                  <th>
                    Jumlah Kaki
                  </th>
                  <th>
                    Desc
                  </th>
                  <th>
                    Action
                  </th>
                </thead>
                <tbody>
                @foreach ($animals as $animal)
                  <tr>
                      <td>{{ $loop->index+1 }}</td>
                      <td>{{ $animal->name }}</td>
                      <td>
                          <img src="{{ URL::to('/') }}/foto/{{ $animal->image }}" class="media-avatar rounded" width="70px" height="50px"/>
                      </td>
                      <td>{{ $animal->jumlah_kaki }}</td>
                      <td>{{ Str::limit($animal->description,75) }}</td>
                      <td>
                          <form action="/{{ $animal->id }}/delete" method="post">
                              <div class="btn-group" role="group" aria-label="Basic example" style="text-center">
                                  @csrf
                                  <a type="button" href="{{ $animal->id }}/detail" style="margin-right: 20%;"><i class="fas fa-calendar-week" style="font-size: 20px;"></i></a>
                                  <a type="button" href="{{ $animal->id }}/edit"  style="margin-right: 20%;"><i class="fas fa-edit" style="font-size: 20px;"></i></a>
                                  <a type="submit" onclick="return confirm('Yakin Ingin Mengapus Data?')" href="{{$animal->id}}/delete" style="margin-right: 20%;" ><i class="fas fa-trash-alt" style="color: #fefefe; font-size:20px;cursor:pointer;"></i></a>
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
