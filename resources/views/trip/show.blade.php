
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

$photo_poster = " ";
$dateline = " ";
$sql_poster = "SELECT photo , dateline FROM advertises WHERE active = 'ใช้งาน' ORDER BY RAND() LIMIT 0,1  ";
$result = $conn->query($sql_poster);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $photo_poster = $row["photo"];
    $dateline = $row["dateline"];
    // echo $name_product_1;
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
                    <a href="{{ url('/trip') }}" title="Back"><button class="btn-success btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp;ดูแพคเกจทั้งหมด</button></a>
                    <div class="section-tittle mb-30 pt-30">
                        <h2 style="text-shadow: 1px 1px #FF0000 " class="text-white">แพคเกจ : {{ $trip->name }}</h2>
                    </div>
                   <div class="weekly-wrapper">
                        <div class="row">
                            <div class="col-12">
                                <div class="weekly-news-active dot-style d-flex dot-style">
                                    @php
                                        $photo_7 = $trip->photo_7;
                                        $photo_8 = $trip->photo_8;
                                        $photo_9 = $trip->photo_9;
                                        $photo_10 = $trip->photo_10;
                                    @endphp
                                    <div class="weekly-single">
                                        <div class="weekly-img">
                                            <img height="235" src="{{ url('storage')}}/{{ $trip->photo_1 }}" alt="">
                                        </div>
                                    </div> 
                                    <div class="weekly-single">
                                        <div class="weekly-img">
                                                <img height="235" src="{{ url('storage')}}/{{ $trip->photo_2 }}" alt="">
                                        </div>
                                    </div>
                                    <div class="weekly-single">
                                        <div class="weekly-img">
                                            <img height="235" src="{{ url('storage')}}/{{ $trip->photo_3 }}" alt="">
                                        </div>
                                    </div> 
                                    <div class="weekly-single">
                                        <div class="weekly-img">
                                            <img height="235" src="{{ url('storage')}}/{{ $trip->photo_4 }}" alt="">
                                        </div>
                                    </div>
                                    <div class="weekly-single">
                                        <div class="weekly-img">
                                            <img height="235" src="{{ url('storage')}}/{{ $trip->photo_5 }}" alt="">
                                        </div>
                                    </div>
                                    <div class="weekly-single">
                                        <div class="weekly-img">
                                            <img height="235" src="{{ url('storage')}}/{{ $trip->photo_6 }}" alt="">
                                        </div>
                                    </div>
                                    @if (!empty($photo_7))
                                    <div class="weekly-single">
                                        <div class="weekly-img">
                                            <img height="235" src="{{ url('storage')}}/{{ $trip->photo_7 }}" alt="">
                                        </div>
                                    </div> 
                                    @endif
                                    @if (!empty($photo_8))
                                    <div class="weekly-single">
                                        <div class="weekly-img">
                                            <img height="235" src="{{ url('storage')}}/{{ $trip->photo_8 }}" alt="">
                                        </div>
                                    </div> 
                                    @endif
                                    @if (!empty($photo_9))
                                    <div class="weekly-single">
                                        <div class="weekly-img">
                                            <img height="235" src="{{ url('storage')}}/{{ $trip->photo_9 }}" alt="">
                                        </div>
                                    </div> 
                                    @endif
                                    @if (!empty($photo_10))
                                    <div class="weekly-single">
                                        <div class="weekly-img">
                                            <img height="235" src="{{ url('storage')}}/{{ $trip->photo_10 }}" alt="">
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
            <div class="col-lg-8">
                <!-- Trending Tittle -->
                <div class="card" style="background:none; border:none ">
                    <div class="about-right mb-90">
                        <div class="about-img">
                            <br>
                        </div>
                        <div class="about-prea">
                            @if($trip->one_day_trip == "on" )
                            <span style="border-radius: 10px;font-size: 25px;" class="color2">&nbsp;&nbsp;&nbsp;โปรแกรม 1 วัน&nbsp;&nbsp;&nbsp;</span>
                            @endif
                            @if($trip->two_days_trip == "on" )
                            <span style="border-radius: 10px;font-size: 25px;" class="color3">&nbsp;&nbsp;&nbsp;โปรแกรม 2 วัน 1 คืน&nbsp;&nbsp;&nbsp;</span>
                            @endif
                            </span>
                            <br><br>
                            @php
                                $day_1_mo_4 = $trip->day_1_mo_4;
                                $day_1_af_4 = $trip->day_1_af_4;
                                $day_1_ni_1 = $trip->day_1_ni_1;
                                $day_1_ni_2 = $trip->day_1_ni_2;
                                $day_2_mo_4 = $trip->day_2_mo_4;
                                $day_2_af_4 = $trip->day_2_af_4;
                            @endphp
                            @if($trip->one_day_trip == "on" )
                            <div class="row">
                                <div class="col-lg-3">
                                    <h5> <b>09.00 - 12.00 น. :</b></h5><br>
                                    <h5><b></b> </h5><br>
                                    <h5><b></b> </h5><br>
                                    @if(!empty($day_1_mo_4))
                                    <h5><b></b> </h5><br><br>
                                    @endif<br><br>
                                    <h5> <b>12.00 น. :</b></h5><br>
                                    <h5> <b>13.00 - 16.30 น. :</b></h5><br>
                                </div>
                                <div class="col-lg-9">
                                    <h5>- {{ $trip->day_1_mo_1 }} </h5><br>
                                    <h5>- {{ $trip->day_1_mo_2 }} </h5><br>
                                    <h5>- {{ $trip->day_1_mo_3 }} </h5><br>
                                    @if(!empty($day_1_mo_4))
                                    <h5>- {{ $trip->day_1_mo_4 }} </h5><br>
                                    @endif
                                    <h5>***** รับประทานอาหารเที่ยงร่วมกัน ***** </h5><br>
                                    <h5>- {{ $trip->day_1_af_1 }} </h5><br>
                                    <h5>- {{ $trip->day_1_af_2 }} </h5><br>
                                    <h5>- {{ $trip->day_1_af_3 }} </h5><br>
                                    @if(!empty($day_1_af_4))
                                    <h5>- {{ $trip->day_1_af_4 }} </h5><br>
                                    @endif
                                    <br>
                                </div>
                                <h5><b>หมายเหตุ</b></h5><span>{{ $trip->remark }} </span><br>
                            </div>
                            @endif

                            @if($trip->two_days_trip == "on" )
                            <div class="row">
                                <div class="col-lg-4">
                                    <!-- วันที่ 1 -->
                                    <h5> <b>วันที่ 1 : 09.00 - 12.00 น. :</b></h5><br>
                                    <h5><b></b> </h5><br>
                                    <h5><b></b> </h5><br>
                                    @if(!empty($day_1_mo_4))
                                    <h5><b></b> </h5><br><br>
                                    @endif<br><br>
                                    <h5> <b>วันที่ 1 : 12.00 น. :</b></h5><br>
                                    <h5> <b>วันที่ 1 : 13.00 - 16.30 น. :</b></h5><br>
                                    <h5><b></b> </h5><br>
                                    <h5><b></b> </h5><br>
                                    @if(!empty($day_1_af_4))
                                    <h5><b></b> </h5><br><br>
                                    @endif<br><br>
                                    <h5> <b>วันที่ 1 : 17.30 น. :</b></h5><br>
                                    @if(!empty($day_1_ni_1))
                                    <h5><b>วันที่ 1 : 18.30 - 20.30 น. :</b></h5><br>
                                    @endif
                                    @if(!empty($day_1_ni_1))
                                    <h5><b></b> </h5><br><br>
                                    @endif
                                    <hr>

                                    <!-- วันที่ 2 -->

                                    <h5> <b>วันที่ 2 : 09.00 - 12.00 น. :</b></h5><br>
                                    <h5><b></b> </h5><br>
                                    <h5><b></b> </h5><br>
                                    @if(!empty($day_2_mo_4))
                                    <h5><b></b> </h5><br><br>
                                    @endif<br><br>
                                    <h5> <b>วันที่ 2 : 12.00 น. :</b></h5><br>
                                    <h5> <b>วันที่ 2 : 13.00 - 16.30 น. :</b></h5><br>
                                    <h5><b></b> </h5><br>
                                    <h5><b></b> </h5><br>
                                    @if(!empty($day_2_af_4))
                                    <h5><b></b> </h5><br><br>
                                    @endif<br><br>
                                </div>
                                <div class="col-lg-8">
                                    <!-- วันที่ 1  --> 
                                    <h5>- {{ $trip->day_1_mo_1 }} </h5><br>
                                    <h5>- {{ $trip->day_1_mo_2 }} </h5><br>
                                    <h5>- {{ $trip->day_1_mo_3 }} </h5><br>
                                    @if(!empty($day_1_mo_4))
                                    <h5>- {{ $trip->day_1_mo_4 }} </h5><br>
                                    @endif
                                    <h5>***** รับประทานอาหารเที่ยงร่วมกัน ***** </h5><br>
                                    <h5>- {{ $trip->day_1_af_1 }} </h5><br>
                                    <h5>- {{ $trip->day_1_af_2 }} </h5><br>
                                    <h5>- {{ $trip->day_1_af_3 }} </h5><br>
                                    @if(!empty($day_1_af_4))
                                    <h5>- {{ $trip->day_1_af_4 }} </h5><br>
                                    @endif
                                    <h5>***** รับประทานอาหารเย็นร่วมกัน ***** </h5><br>
                                    @if(!empty($day_1_ni_1))
                                    <h5>- {{ $trip->day_1_ni_1 }} </h5><br>
                                    @endif
                                    @if(!empty($day_1_ni_2))
                                    <h5>- {{ $trip->day_1_ni_2 }} </h5><br>
                                    @endif
                                    <hr>

                                    <!-- วันที่ 2 -->
                                    <h5>- {{ $trip->day_2_mo_1 }} </h5><br>
                                    <h5>- {{ $trip->day_2_mo_2 }} </h5><br>
                                    <h5>- {{ $trip->day_2_mo_3 }} </h5><br>
                                    @if(!empty($day_2_mo_4))
                                    <h5>- {{ $trip->day_2_mo_4 }} </h5><br>
                                    @endif
                                    <h5>***** รับประทานอาหารเที่ยงร่วมกัน ***** </h5><br>
                                    <h5>- {{ $trip->day_2_af_1 }} </h5><br>
                                    <h5>- {{ $trip->day_2_af_2 }} </h5><br>
                                    <h5>- {{ $trip->day_2_af_3 }} </h5><br>
                                    @if(!empty($day_2_af_4))
                                    <h5>- {{ $trip->day_2_af_4 }} </h5><br>
                                    @endif
                                </div>
                            </div>
                            @endif
                        </div> 
                        <hr>
                        @include('contact')

                        @if(Auth::check())
                            @if(Auth::user()->profile->role == "คนดูแล" )
                                <div class="float-right">
                                    <a href="{{ url('/trip/' . $trip->id . '/edit') }}" title="Edit Trip"><button class="btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไขข้อมูล</button></a>

                                    <form method="POST" action="{{ url('trip' . '/' . $trip->id) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn-danger btn-sm" title="Delete Trip" onclick="return confirm(&quot;ยืนยันการลบ ?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> ลบ</button>
                                </div> 
                            @endif
                        @endif
                    </div>
                </div>
            </div>  

            <div class="col-lg-4">
                <div class="single-follow mb-45">
                    <br><br><br><br>
                    <img class="float-right" height="650" src="{{ url('storage')}}/{{ $photo_poster }}" alt="">
                </div>
                <!-- New Poster -->
            </div>
        </div>
    </div>
</div>








<!-- <section class="whats-news-area pt-50 pb-20">
    <div class="container">
        <div class="row">
        <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">Trip {{ $trip->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/trip') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/trip/' . $trip->id . '/edit') }}" title="Edit Trip"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('trip' . '/' . $trip->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Trip" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <td>{{ $trip->id }}</td>
                                    </tr>
                                    <tr><th> Name </th>
                                        <td> {{ $trip->name }} </td>
                                    </tr>
                                    <tr>
                                        <th> Title </th>
                                        <td> {{ $trip->title }} </td>
                                    </tr>
                                    <tr>
                                        <th> 1 Day Trip </th>
                                        <td> {{ $trip->one_day_trip }} </td>
                                    </tr>
                                    <tr>
                                        <th> 2 Days Trip </th>
                                        <td> {{ $trip->two_days_trip }} </td>
                                    </tr>
                                    <tr>
                                        <th> Cover Photo </th>
                                        <td> {{ $trip->cover_photo }} </td>
                                    </tr>
                                    <tr>
                                        <th> Photo 1 </th>
                                        <td> {{ $trip->photo_1 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Photo 2 </th>
                                        <td> {{ $trip->photo_2 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Photo 3 </th>
                                        <td> {{ $trip->photo_3 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Photo 4 </th>
                                        <td> {{ $trip->photo_4 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Photo 5 </th>
                                        <td> {{ $trip->photo_5 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Photo 6 </th>
                                        <td> {{ $trip->photo_6 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Photo 7 </th>
                                        <td> {{ $trip->photo_7 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Photo 8 </th>
                                        <td> {{ $trip->photo_8 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Photo 9 </th>
                                        <td> {{ $trip->photo_9 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Photo 10 </th>
                                        <td> {{ $trip->photo_10 }} </td>
                                    </tr>
                                    
                                    <tr>
                                        <th> Remark </th>
                                        <td> {{ $trip->remark }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> -->
@endsection
