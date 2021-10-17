<?php
$page="Input Data"
?>

@extends('layouts.template')
@section('content')

    <section id="form_data_diri" style="height:100vh;">
      <div class="container">
        <div class="row" data-aos="fade-right">
          <div class="col-12">
            <div class="section-title text-center mb-4 pb-2 aos-init-aos-animate " data-aos="zoom-in-up" style="margin-top:50px;">
              <img src="../asset/logo/nama_brand.png" alt="nama brand BliBli" width="160">
            </div>
          </div> 
        </div>
        <div class="row px-5 py-3 aos-init aos-animate">
          <div class="col-sm-12 col-lg-6 py-2 my-auto text-center" data-aos="zoom-in-up">
            <img onclick="" src="{{asset('asset/logo/logo_blibli.svg')}}" alt="logo registrasi" class="img-fluid aos-init aos-animate" style="cursor:pointer;" data-aos="zoom-in-up" data-aos-delay="200">
            <h2 class="title_a2" style="font-size: 1.6rem; font-weight:600; color:rgba(0,0,0,0.7); margin-top:30px;">Jual Beli Mudah Hanya di BliBli.com</h2>
            <p>Dapatkan diskon sebesar-besarnya hanya di BliBli.com</p>
          </div>
          <div class="col-sm-12 col-lg-6 py-2 mx-auto aos-init aos-animate" data-aos="fade-right" data-aos-delay="300" style="right:0;">
            <div class="box-form" style="border:1px solid #e0e0e0; border-radius: 3px; box-shadow:0 0 10px 0 rgba(0,0,0,0.1); padding:24px 40px 32px;" data-aos="zoom-in-up">
              <h2 class="box_title text-center" style="font-weight: 600; font-size: 1.5rem; color: #03befc;margin-bottom:20px;">Daftar Sekarang</h2>
              <hr style="color: #03befc;">
              <form method="post" action="{{ route('result') }}" class="" style="margin-top: 30px;">
                @csrf
                @foreach ($formdata as $field=>$index)
                  @if ($index[0]=='text' || $index[0]=='email' || $index[0]=='password')
                    <div class="mb-3 row">
                      <label for="input<?php echo $field ?>" class="col-sm-2 col-form-label">{{$field}}</label>
                      <div class="my-auto col-sm-10">
                        <input type="<?php echo $index[0] ?>" name="{{$field}}" class="form-control @error($field) is-invalid @enderror"  id="input<?php echo $field ?>" placeholder="<?php echo $index[1] ?>" value="{{old($field)}}" autofocus>  
                        @error($field)
                          <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                      </div>
                    </div>
                  @elseif ($index[0]=="select")
                    <div class="mb-3 row">
                      <label for="input<?php echo $field ?>" class="col-sm-2 col-form-label">{{ $field }}</label>
                      <div class="my-auto col-sm-10">
                        <select  name="{{$field}}" class="form-select @error($field) is-invalid @enderror" id="input<?php echo $field ?>">
                          <option selected value="" >{{ $index[1] }}</option> 
                          @foreach ($index[2] as $data_index)
                          <option {{ old($field) == $data_index ? 'selected' : '' }} value="<?php echo $data_index ?>">{{$data_index}}</option>
                          @endforeach
                        </select>
                        @error($field)
                          <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                      </div>
                    </div>
                  @elseif($index[0]=="checkbox")
                    <div class="mb-3 row">
                      <label for="input<?php echo $field ?>" class="col-sm-2 col-form-label">{{ $field }}</label>
                      <div class="my-auto col-sm-10">
                      @foreach ($index[2] as $data_index)
                      <?php $i=0; $last= count($index[2])-1;?>
                        <div class="form-check">
                          <input name="{{$field}}[]"  class="form-check-input @error($field) is-invalid @enderror" type="checkbox" id="id_hobby_<?php echo $i+1 ?>" value="<?php echo $data_index?>" >
                          <label class="form-check-label" for="id_hobby_<?php echo $i ?>">
                            {{ $data_index }}
                          </label>
                          @if ($i==$last)
                            @error($field)
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                          @endif
                        </div>
                      <?php $i++; ?>
                      @endforeach          
                      </div>
                    </div>
                  @elseif ($index[0]=="radio")
                    <div class="mb-3 row">
                      <label for="input<?php echo $field ?>" class="col-sm-2 col-form-label">{{ $field }}</label>
                      <div class="my-auto col-sm-10" style="padding-top:5px;">
                        @foreach ($index[2] as $data_index)
                          <?php 
                          $i=1;
                          ?>
                          <label class="radio-inline @error($field) is-invalid @enderror" style="margin-right: 10px;"> 
                            <input type="radio" name="{{ $field }}" id="id_{{ $field }}_<?php echo $i ?>" style="margin-bottom: 10px" value="<?php echo $data_index ?>">{{ $data_index }}
                          </label>
                          <?php 
                          $i++;
                          ?>
                        @endforeach
                        @error($field)
                          <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                      </div>
                    </div>
                  @elseif ($index[0]=="textarea")
                    <div class="mb-3 row" style="margin-top: 20px;">
                      <label for="input<?php echo $field?>" class="col-sm-2 col-form-label">{{ $field }}</label>
                      <div class="my-auto col-sm-10">
                        <textarea name="{{ $field }}" class="form-control" id="input<?php echo $field?>" rows="2" placeholder="<?php echo $index[1]?>">{{old($field) }}</textarea>
                      </div>
                    </div>
                  @elseif ($index[0]=="submit")
                  <input type="submit" name="<?php echo $field?>" value="<?php echo $index[1]?>" class="btn" id="<?php echo $field?>" style="width:100%;color:#fefefe;font-weight:900; background:linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%); border-color:#fefefe;">
                  @else           
                  @endif
                @endforeach
              </form>       
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Start contact whatsapp -->
  <div class="whatsapp" id="whatsapp" title="Contact us!" style="background-color:rgb(37,211,102); padding:8px 12px; border-radius: 8px; cursor:pointer;">
    <div class="whatsapp-desktop" style="display: none;">
      <button class="btn-close" id="close-wa" type="button"></button>
      <p class="text-center" style="color: #fefefe;">Punya Pertanyaan atau Butuh Bantuan?<br>Hubungi Contact Person BliBli</p>
      <a href="https://wa.me/" target="_blank" class="btn text-center">
        <i class="fab fa-whatsapp" style="font-size: 20px;" aria-hidden="true"></i> 08980231989
      </a>
    </div>
    <div class="whatsapp-icon" style="display: block;">
      <i class="fab fa-whatsapp" style="color:whitesmoke; font-size:30px;" aria-hidden="true"></i>
    </div>
    <div class="whatsapp-responsive">
      <a href="https://wa.me/08989231989" target="_blank">
        <i class="fab fa-whatsapp" style="color: whitesmoke; font-size:30px;" aria-hidden="true"></i>
      </a>
    </div>
  </div>
@endsection