@extends('layout.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div style="background:none;border:none;" class="card">
                <div class="card-body">
                            <!-- <a href="{{ url('/products') }}" title="Back"><button class="btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> ย้อนกลับ</button></a> -->
                    @if(Auth::check())
                        @if(Auth::user()->profile->role == "คนดูแล" )
                            <a href="{{ url('/products/' . $product->id . '/edit') }}" title="Edit Product"><button class="btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไข</button></a>

                            <form method="POST" action="{{ url('products' . '/' . $product->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn-danger btn-sm" title="Delete Product" onclick="return confirm(&quot;ยืนยันการลบ ?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> ลบ</button>
                            </form>
                        @endif
                    @endif
                    <br/>
                    <br/>
                    <center>
                        <div class="weekly-news-area pt-50">
                            <div class="container">
                               <div class="weekly-wrapper">
                                    <div class="row">
                                        <div class="col-2"></div>
                                        <div class="col-8">
                                            <img style="border-radius: 15px;" width="100%" height="100%" src="{{ url('storage')}}/{{ $product->photo }}" alt="">
                                        </div>
                                        <div class="col-2"></div>
                                    </div>
                               </div>
                            </div>
                        </div>
                    </center>
                    <!-- About US Start -->
                    <div class="about-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-9">
                                    <!-- Trending Tittle -->
                                    <div class="card" style="background:none; border:none ">
                                        <div class="about-right mb-90">
                                            <div class="about-img">
                                                <img src="assets/img/trending/trending_top.jpg" alt="">
                                            </div>
                                            <div class="section-tittle mb-30 pt-30">
                                                    <h2 style="text-shadow: 1px 1px #FF0000 " class="text-white">{{ $product->name }}</h2>
                                            </div>
                                            <div class="about-prea">
                                                <span style="color: #000" class="about-pera1 mb-25"><b> หมวดหมู่ :</b> </span>
                                                @if($product->otop == "on" )
                                                &nbsp;OTOP&nbsp;
                                                @endif
                                                @if($product->food == "on" )
                                                    &nbsp;อาหาร&nbsp;
                                                @endif
                                                @if($product->gift == "on" )
                                                    &nbsp;ของที่ระลึก&nbsp;
                                                @endif
                                                @if($product->agricultural == "on" )
                                                    &nbsp;สินค้าทางการเกษตร&nbsp;
                                                @endif
                                                @if($product->bamboo == "on" )
                                                    &nbsp;ผลิตภัณฑ์จากไผ่&nbsp;
                                                @endif
                                                <br><br>
                                                <span><b>รายละเอียด :</b> {{ $product->detail }}</span><br><br>
                                                <span><b>สรรพคุณ , ประโยชน์ :</b> {{ $product->benefit }}</span><br><br>
                                                <span><b>วิธีใช้ :</b> {{ $product->how_to_use }}</span><br>
                                            </div> 
                                            @include('contact')
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3"><br><br><br><br><br>
                                    <h2 style="text-shadow: 1px 1px #FF0000 " class="text-white">แพคเกจท่องเที่ยว</h2><br>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="weekly2-single">
                                                @if(!empty($random))
                                                    <div class="weekly2-img">
                                                        <a href="{{ url('/trip/' . $random->id) }}">
                                                            <img height="160" src="{{ url('storage')}}/{{ $random->cover_photo }}" alt="">
                                                        </a>
                                                        <hr>
                                                    </div>
                                                    <div class="weekly2-caption">
                                                        @if($random->one_day_trip == "on" )
                                                            <span style="border-radius: 10px;font-size: 15px;" class="color2">&nbsp;&nbsp;&nbsp;โปรแกรม 1 วัน&nbsp;&nbsp;&nbsp;</span>
                                                        @endif
                                                        @if($random->two_days_trip == "on" )
                                                            <span style="border-radius: 10px;font-size: 15px;" class="color3">&nbsp;&nbsp;&nbsp;โปรแกรม 2 วัน 1 คืน&nbsp;&nbsp;&nbsp;</span>
                                                        @endif
                                                        <br><br>
                                                        <h4 style="text-shadow: 1px 1px #FF0000 " class="text-white">{{ $random->name }}</h4>
                                                        <hr>
                                                        {{ $random->title }}
                                                    </div>
                                                @endif
                                            </div> 
                                        </div>
                                    </div>
                               </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

            
@endsection
