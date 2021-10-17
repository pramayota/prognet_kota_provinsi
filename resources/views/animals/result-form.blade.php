<?php
$page="Input Data"
?>

@extends('layouts.template')
@section('content')
    <!-- @foreach ($data as $list_data => $value)
        {{ $list_data}}
        @if (is_array($value)==0)
            {{ $value }}
        @else
            @foreach ($value as $list_value)
                {{ $list_value }}
            @endforeach
        @endif
        <br>
    @endforeach -->


    <section id="profil-data-diri" class="section-profil" style="max-height: 100vh; padding-top:15vh;">
      <div class="container" style="height: 70vh;">
        <div class="box-form" style="border:1px solid #e0e0e0; border-radius: 3px; box-shadow:0 0 10px 0 rgba(0,0,0,0.1); padding:24px 40px 32px;" >
          <div class="row">
            <div class="menu-biodata biodata-active my-auto text-center col-sm-3 link-active"><p >Biodata diri</p></div>
            <div class="menu-biodata text-center col-sm-3"><p>Daftar Alamat<p></div>
            <div class="menu-biodata text-center col-sm-3"><p>Pembayaran<p></div>
            <div class="menu-biodata text-center col-sm-3"><p>Rekening<p></div>
          </div>
          <div class="row" style="margin-top: 50px;">
            <div class="col-sm-12 col-lg-4 py-2 my-auto text-center">
              <img onclick="" src="{{asset('asset/logo/photo_profil.jpg')}}" alt="Photo Profile" class="img-fluid aos-init aos-animate" style="cursor:pointer;border-radius:15px;">
              <a href="" style="width:100%;color:#fefefe;font-weight:900; background:linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%); border-color:#fefefe; display:inline-block; padding:10px;margin-top:15px;">Input foto</a>
            </div>
            <div class="col-sm-12 col-lg-8 py-2 " style="padding-left: 40px;padding-right:40px;">
              @foreach ($data as $list_data =>$index)
                @if (is_array($index)==0)
                <div class="mb-3 row">
                  <label for="input" class="col-sm-2 col-form-label">{{ $list_data }}</label>
                  <div class="my-auto col-sm-10">
                      <input type="text" class="form-control" placeholder="{{ $index }}" name="text2" disabled>
                  </div>
                </div>
                @else
                <div class="mb-3 row">
                  <label for="input" class="col-sm-2 col-form-label">{{ $list_data }}</label>
                  <div class="my-auto col-sm-10">
                    @foreach ($index as $data_index)
                      <input type="text" class="form-control" placeholder="{{$data_index}}" name="text2" disabled>
                    @endforeach
                  </div>
                </div>
                @endif
              @endforeach   
            </div>
          </div>
        </div>
      </div>
    </section>



@endsection