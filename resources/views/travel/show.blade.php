@php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "klongarang2";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql_trip = "SELECT id, name, title, one_day_trip, two_days_trip, cover_photo FROM trips ORDER BY RAND() LIMIT 0,1";
$result_trip = $conn->query($sql_trip);

if ($result_trip->num_rows > 0) {
  // output data of each row
  while($row = $result_trip->fetch_assoc()) {
    $id_trip_1 = $row["id"];
    $name_trip_1 = $row["name"];
    $title_trip_1 = $row["title"];
    $one_day_trip_1 = $row["one_day_trip"];
    $two_days_trip_1 = $row["two_days_trip"];
    $cover_photo_trip_1 = $row["cover_photo"];
  }
} else {
  // echo "0 results";
}
@endphp
@extends('layout.main')

@section('content')

<div class="youtube-area">
    <div class="container">
        <div class="row">
            <div class="weekly-news-area pt-50">
                <div class="container">
                   <div class="weekly-wrapper">
                        <div class="row">
                            <div class="col-12">
                                <div class="weekly-news-active dot-style d-flex dot-style">
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
            </div>
            
        </div>
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
                                </p>
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
                        <div class="weekly2-img">
                            <a href="{{ url('/trip/' . $id_trip_1) }}">
                                <img height="160" src="{{ url('storage')}}/{{ $cover_photo_trip_1 }}" alt="">
                            </a>
                            <hr>
                        </div>
                        <div class="weekly2-caption">
                            @if($one_day_trip_1 == "on" )
                                <span style="border-radius: 10px;font-size: 15px;" class="color2">&nbsp;&nbsp;&nbsp;โปรแกรม 1 วัน&nbsp;&nbsp;&nbsp;</span>
                            @endif
                            @if($two_days_trip_1 == "on" )
                                <span style="border-radius: 10px;font-size: 15px;" class="color3">&nbsp;&nbsp;&nbsp;โปรแกรม 2 วัน 1 คืน&nbsp;&nbsp;&nbsp;</span>
                            @endif
                            <hr>
                            <h4 style="text-shadow: 1px 1px #FF0000 " class="text-white">{{ $name_trip_1 }}</h4>
                            <hr>
                            <p>{{ $title_trip_1 }}</p>
                        </div>
                    </div> 
                </div>
            </div>
       </div>
    </div>
</div>
<!-- About US End -->
@endsection