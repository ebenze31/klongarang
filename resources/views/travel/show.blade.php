@extends('layout.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="weekly-news-area pt-50">
            <div class="container">
               <div class="weekly-wrapper">
                    <div class="row">
                        <div class="col-12 news-poster d-none d-lg-block">
                            <div class="weekly-news-active dot-style d-flex dot-style">
                                @php
                                    $photo_5 = $travel->photo_5;
                                @endphp
                                <div class="weekly-single">
                                    <div class="weekly-img">
                                        <img height="100%" width="100%" src="{{ url('storage')}}/{{ $travel->photo_1 }}" alt="">
                                    </div>
                                </div> 
                                <div class="weekly-single">
                                    <div class="weekly-img">
                                            <img height="100%" width="100%" src="{{ url('storage')}}/{{ $travel->photo_2 }}" alt="">
                                    </div>
                                </div>
                                <div class="weekly-single">
                                    <div class="weekly-img">
                                            <img height="100%" width="100%" src="{{ url('storage')}}/{{ $travel->photo_3 }}" alt="">
                                    </div>
                                </div> 
                                <div class="weekly-single">
                                    <div class="weekly-img">
                                            <img height="100%" width="100%" src="{{ url('storage')}}/{{ $travel->photo_4 }}" alt="">
                                    </div>
                                </div>
                                @if (!empty($photo_5))
                                <div class="weekly-single">
                                    <div class="weekly-img">
                                            <img height="100%" width="100%" src="{{ url('storage')}}/{{ $travel->photo_5 }}" alt="">
                                    </div>
                                </div>
                                @endif
                            </div><br>
                        </div>

                        <div id="carouselExampleIndicators" class="carousel slide d-block d-md-none" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img height="100%" width="100%" src="{{ url('storage')}}/{{ $travel->photo_1 }}" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img height="100%" width="100%" src="{{ url('storage')}}/{{ $travel->photo_2 }}" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img height="100%" width="100%" src="{{ url('storage')}}/{{ $travel->photo_3 }}" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img height="100%" width="100%" src="{{ url('storage')}}/{{ $travel->photo_4 }}" alt="">
                                </div>
                                @if (!empty($photo_5))
                                <div class="carousel-item">
                                    <img height="100%" width="100%" src="{{ url('storage')}}/{{ $travel->photo_5 }}" alt="">
                                </div>
                                @endif
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
               </div>
            </div>
        </div>


        <!-- <div class="weekly-news-area pt-50">
            <div class="container">
               <div class="weekly-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="weekly-news-active dot-style d-flex dot-style ">
                                @php
                                    $photo_5 = $travel->photo_5;
                                @endphp
                                <div class="weekly-single">
                                    <div class="weekly-img">
                                        <img height="235" src="{{ url('storage')}}/{{ $travel->photo_1 }}" alt="">
                                    </div>
                                </div> 
                                <div class="weekly-single">
                                    <div class="weekly-img">
                                            <img height="235" src="{{ url('storage')}}/{{ $travel->photo_2 }}" alt="">
                                    </div>
                                </div>
                                <div class="weekly-single">
                                    <div class="weekly-img">
                                        <img height="235" src="{{ url('storage')}}/{{ $travel->photo_3 }}" alt="">
                                    </div>
                                </div> 
                                <div class="weekly-single">
                                    <div class="weekly-img">
                                        <img height="235" src="{{ url('storage')}}/{{ $travel->photo_4 }}" alt="">
                                    </div>
                                </div>
                                @if (!empty($photo_5))
                                <div class="weekly-single">
                                    <div class="weekly-img">
                                        <img height="235" src="{{ url('storage')}}/{{ $travel->photo_5 }}" alt="">
                                    </div>
                                </div> 
                                @endif
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div> -->
    </div>
</div>
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
                                <h2 style="text-shadow: 1px 1px #FF0000 " class="text-white">{{ $travel->name }}</h2>
                        </div>
                        <div class="about-prea">
                            <span style="color: #000" class="about-pera1 mb-25"><b> หมวดหมู่ :</b> </span>
                            @if($travel->agriculture == "on" )
                                &nbsp;เชิงเกษตร&nbsp;
                            @endif

                            @if($travel->culture == "on" )
                                &nbsp;เชิงวัฒนธรรม&nbsp;
                            @endif
                            @if($travel->learn == "on" )
                                &nbsp;กิจกรรมแลกเปลี่ยนเรียนรู้&nbsp;
                            @endif
                            @if($travel->check_in == "on" )
                                &nbsp;จุดเช็คอิน&nbsp;
                            @endif
                            <br><br>
                            <span><b>รายละเอียด :</b> {{ $travel->detail }}</span>
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
<!-- About US End -->
@endsection