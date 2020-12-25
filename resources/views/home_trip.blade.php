@php
$id_trip_1 = "";
$name_trip_1 = "";
$title_trip_1 = "";
$one_day_trip_1 = "";
$two_days_trip_1 = "";
$cover_photo_trip_1 = "";

$id_trip_2 = "";
$name_trip_2 = "";
$title_trip_2 = "";
$one_day_trip_2 = "";
$two_days_trip_2 = "";
$cover_photo_trip_2 = "";

$id_trip_3 = "";
$name_trip_3 = "";
$title_trip_3 = "";
$one_day_trip_3 = "";
$two_days_trip_3 = "";
$cover_photo_trip_3 = "";

$id_trip_4 = "";
$name_trip_4 = "";
$title_trip_4 = "";
$one_day_trip_4 = "";
$two_days_trip_4 = "";
$cover_photo_trip_4 = "";

$id_trip_5 = "";
$name_trip_5 = "";
$title_trip_5 = "";
$one_day_trip_5 = "";
$two_days_trip_5 = "";
$cover_photo_trip_5 = "";

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

$sql_trip2 = "SELECT id, name, title, one_day_trip, two_days_trip, cover_photo FROM trips ORDER BY RAND() LIMIT 0,1";
$result_trip2 = $conn->query($sql_trip2);

if ($result_trip2->num_rows > 0) {
  // output data of each row
  while($row = $result_trip2->fetch_assoc()) {
    $id_trip_2 = $row["id"];
    $name_trip_2 = $row["name"];
    $title_trip_2 = $row["title"];
    $one_day_trip_2 = $row["one_day_trip"];
    $two_days_trip_2 = $row["two_days_trip"];
    $cover_photo_trip_2 = $row["cover_photo"];
  }
} else {
  // echo "0 results";
}

$sql_trip3 = "SELECT id, name, title, one_day_trip, two_days_trip, cover_photo FROM trips ORDER BY RAND() LIMIT 0,1";
$result_trip3 = $conn->query($sql_trip3);

if ($result_trip3->num_rows > 0) {
  // output data of each row
  while($row = $result_trip3->fetch_assoc()) {
    $id_trip_3 = $row["id"];
    $name_trip_3 = $row["name"];
    $title_trip_3 = $row["title"];
    $one_day_trip_3 = $row["one_day_trip"];
    $two_days_trip_3 = $row["two_days_trip"];
    $cover_photo_trip_3 = $row["cover_photo"];
  }
} else {
  // echo "0 results";
}

$sql_trip4 = "SELECT id, name, title, one_day_trip, two_days_trip, cover_photo FROM trips ORDER BY RAND() LIMIT 0,1";
$result_trip4 = $conn->query($sql_trip4);

if ($result_trip4->num_rows > 0) {
  // output data of each row
  while($row = $result_trip4->fetch_assoc()) {
    $id_trip_4 = $row["id"];
    $name_trip_4 = $row["name"];
    $title_trip_4 = $row["title"];
    $one_day_trip_4 = $row["one_day_trip"];
    $two_days_trip_4 = $row["two_days_trip"];
    $cover_photo_trip_4 = $row["cover_photo"];
  }
} else {
  // echo "0 results";
}

$sql_trip5 = "SELECT id, name, title, one_day_trip, two_days_trip, cover_photo FROM trips ORDER BY RAND() LIMIT 0,1";
$result_trip5 = $conn->query($sql_trip5);

if ($result_trip5->num_rows > 0) {
  // output data of each row
  while($row = $result_trip5->fetch_assoc()) {
    $id_trip_5 = $row["id"];
    $name_trip_5 = $row["name"];
    $title_trip_5 = $row["title"];
    $one_day_trip_5 = $row["one_day_trip"];
    $two_days_trip_5 = $row["two_days_trip"];
    $cover_photo_trip_5 = $row["cover_photo"];
  }
} else {
  // echo "0 results";
}

@endphp

<!--   Weekly2-News start -->
    <div style="background-color: #90d5ea" class="weekly2-news-area  weekly2-pading gray-bg">
        <div class="container">
            <div class="weekly2-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h1 style="text-shadow: 1px 1px #FFF" ><a href="{{ url('/trip') }}">แพคเกจท่องเที่ยว</a></h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="weekly2-news-active dot-style d-flex dot-style">
                            <div class="weekly2-single">
                                <a href="{{ url('/trip/' . $id_trip_1) }}">
                                    <div class="weekly2-img">
                                        <img height="160" src="{{ url('storage')}}/{{ $cover_photo_trip_1 }}" alt="">
                                    </div>
                                    <div class="weekly2-caption">
                                        @if($one_day_trip_1 == "on" )
                                            <span style="border-radius: 10px;font-size: 15px;" class="color2">&nbsp;&nbsp;&nbsp;โปรแกรม 1 วัน&nbsp;&nbsp;&nbsp;</span>
                                        @endif
                                        @if($two_days_trip_1 == "on" )
                                            <span style="border-radius: 10px;font-size: 15px;" class="color3">&nbsp;&nbsp;&nbsp;โปรแกรม 2 วัน 1 คืน&nbsp;&nbsp;&nbsp;</span>
                                        @endif
                                        <h3 style="text-shadow: 1px 1px #FF0000 " class="text-white">{{ $name_trip_1 }}</h3>
                                        <p>{{ $title_trip_1 }}</p>
                                    </div>
                                </a>
                            </div> 
                            <div class="weekly2-single">
                                <a href="{{ url('/trip/' . $id_trip_2) }}">
                                    <div class="weekly2-img">
                                        <img height="160" src="{{ url('storage')}}/{{ $cover_photo_trip_2 }}" alt="">
                                    </div>
                                    <div class="weekly2-caption">
                                        @if($one_day_trip_2 == "on" )
                                            <span style="border-radius: 10px;font-size: 15px;" class="color2">&nbsp;&nbsp;&nbsp;โปรแกรม 1 วัน&nbsp;&nbsp;&nbsp;</span>
                                        @endif
                                        @if($two_days_trip_2 == "on" )
                                            <span style="border-radius: 10px;font-size: 15px;" class="color3">&nbsp;&nbsp;&nbsp;โปรแกรม 2 วัน 1 คืน&nbsp;&nbsp;&nbsp;</span>
                                        @endif
                                        <h3 style="text-shadow: 1px 1px #FF0000 " class="text-white">{{ $name_trip_2 }}</h3>
                                        <p>{{ $title_trip_2 }}</p>
                                    </div>
                                </a>
                            </div> 
                            <div class="weekly2-single">
                                <a href="{{ url('/trip/' . $id_trip_3) }}">
                                    <div class="weekly2-img">
                                        <img height="160" src="{{ url('storage')}}/{{ $cover_photo_trip_3 }}" alt="">
                                    </div>
                                    <div class="weekly2-caption">
                                        @if($one_day_trip_3 == "on" )
                                            <span style="border-radius: 10px;font-size: 15px;" class="color2">&nbsp;&nbsp;&nbsp;โปรแกรม 1 วัน&nbsp;&nbsp;&nbsp;</span>
                                        @endif
                                        @if($two_days_trip_3 == "on" )
                                            <span style="border-radius: 10px;font-size: 15px;" class="color3">&nbsp;&nbsp;&nbsp;โปรแกรม 2 วัน 1 คืน&nbsp;&nbsp;&nbsp;</span>
                                        @endif
                                        <h3 style="text-shadow: 1px 1px #FF0000 " class="text-white">{{ $name_trip_3 }}</h3>
                                        <p>{{ $title_trip_3 }}</p>
                                    </div>
                                </a>
                            </div> 
                            <div class="weekly2-single">
                                <a href="{{ url('/trip/' . $id_trip_4) }}">
                                    <div class="weekly2-img">
                                        <img height="160" src="{{ url('storage')}}/{{ $cover_photo_trip_4 }}" alt="">
                                        
                                    </div>
                                    <div class="weekly2-caption">
                                        @if($one_day_trip_4 == "on" )
                                            <span style="border-radius: 10px;font-size: 15px;" class="color2">&nbsp;&nbsp;&nbsp;โปรแกรม 1 วัน&nbsp;&nbsp;&nbsp;</span>
                                        @endif
                                        @if($two_days_trip_4 == "on" )
                                            <span style="border-radius: 10px;font-size: 15px;" class="color3">&nbsp;&nbsp;&nbsp;โปรแกรม 2 วัน 1 คืน&nbsp;&nbsp;&nbsp;</span>
                                        @endif
                                        <h3 style="text-shadow: 1px 1px #FF0000 " class="text-white">{{ $name_trip_4 }}</h3>
                                        <p>{{ $title_trip_4 }}</p>
                                    </div>
                                </a>
                            </div> 
                            <div class="weekly2-single">
                                <a href="{{ url('/trip/' . $id_trip_5) }}">
                                    <div class="weekly2-img">
                                        <img height="160" src="{{ url('storage')}}/{{ $cover_photo_trip_5 }}" alt="">
                                    </div>
                                    <div class="weekly2-caption">
                                        @if($one_day_trip_5 == "on" )
                                            <span style="border-radius: 10px;font-size: 15px;" class="color2">&nbsp;&nbsp;&nbsp;โปรแกรม 1 วัน&nbsp;&nbsp;&nbsp;</span>
                                        @endif
                                        @if($two_days_trip_5 == "on" )
                                            <span style="border-radius: 10px;font-size: 15px;" class="color3">&nbsp;&nbsp;&nbsp;โปรแกรม 2 วัน 1 คืน&nbsp;&nbsp;&nbsp;</span>
                                        @endif
                                        <h3 style="text-shadow: 1px 1px #FF0000 " class="text-white">{{ $name_trip_5 }}</h3>
                                        <p>{{ $title_trip_5 }}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <p style="text-align: right;"><a style="color: #666666 ;" href="{{ url('/trip') }}">ดูเพิ่มเติม</a></p>
            </div>
        </div>
    </div>           