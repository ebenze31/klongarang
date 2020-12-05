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
                                <span style="color: #000" class="about-pera1 mb-25"><b> หมวดหมู่ :</b> 
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
<!-- 

<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Travel {{ $travel->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/travel') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/travel/' . $travel->id . '/edit') }}" title="Edit Travel"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('travel' . '/' . $travel->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Travel" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $travel->id }}</td>
                                    </tr>
                                    <tr><th> Category </th><td> {{ $travel->category }} </td></tr><tr><th> Name </th><td> {{ $travel->name }} </td></tr><tr><th> Detail </th><td> {{ $travel->detail }} </td></tr><tr><th> Type </th><td> {{ $travel->type }} </td></tr><tr><th> Photo 1 </th><td> {{ $travel->photo_1 }} </td></tr><tr><th> Photo 2 </th><td> {{ $travel->photo_2 }} </td></tr><tr><th> Photo 3 </th><td> {{ $travel->photo_3 }} </td></tr><tr><th> Photo 4 </th><td> {{ $travel->photo_4 }} </td></tr><tr><th> Photo 5 </th><td> {{ $travel->photo_5 }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> -->
@endsection