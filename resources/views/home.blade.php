@extends('layout.main')

@section('content')

@php

$id_travel_1 = " ";
$name_travel_1 = " ";
$category_travel_1 = " ";
$photo_1_travel_1 = " ";

$id_travel_2 = " ";
$name_travel_2 = " ";
$category_travel_2 = " ";
$photo_1_travel_2 = " ";

$id_travel_3 = " ";
$name_travel_3 = " ";
$category_travel_3 = " ";
$photo_1_travel_3 = " ";

$id_travel_4 = " ";
$name_travel_4 = " ";
$category_travel_4 = " ";
$photo_1_travel_4 = " ";

$id_travel_5 = " ";
$name_travel_5 = " ";
$category_travel_5 = " ";
$photo_1_travel_5 = " ";

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


$sql = "SELECT id ,name, category, photo_1 FROM travel ORDER BY RAND() LIMIT 0,1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // echo "name: " . $row["name"]. " " . $row["category"]. " " . $row["photo_1"];
    $id_travel_1 = $row["id"];
    $name_travel_1 = $row["name"];
    $category_travel_1 = $row["category"];
    $photo_1_travel_1 = $row["photo_1"];
    // echo $name_travel_1;
  }
} else {
  // echo "0 results";
}

$sql2 = "SELECT id ,name, category, photo_1 FROM travel ORDER BY RAND() LIMIT 0,1";
$result2 = $conn->query($sql);

if ($result2->num_rows > 0) {
  // output data of each row
  while($row = $result2->fetch_assoc()) {
    // echo "name: " . $row["name"]. " " . $row["category"]. " " . $row["photo_1"];
    $id_travel_2 = $row["id"];
    $name_travel_2 = $row["name"];
    $category_travel_2 = $row["category"];
    $photo_1_travel_2 = $row["photo_1"];
    // echo $name_travel_2;
  }
} else {
  // echo "0 results";
}

$sql3 = "SELECT id ,name, category, photo_1 FROM travel ORDER BY RAND() LIMIT 0,1";
$result3 = $conn->query($sql);

if ($result3->num_rows > 0) {
  // output data of each row
  while($row = $result3->fetch_assoc()) {
    // echo "name: " . $row["name"]. " " . $row["category"]. " " . $row["photo_1"];
    $id_travel_3 = $row["id"];
    $name_travel_3 = $row["name"];
    $category_travel_3 = $row["category"];
    $photo_1_travel_3 = $row["photo_1"];
    // echo $name_travel_3;
  }
} else {
  // echo "0 results";
}

$sql4 = "SELECT id ,name, category, photo_1 FROM travel ORDER BY RAND() LIMIT 0,1";
$result4 = $conn->query($sql);

if ($result4->num_rows > 0) {
  // output data of each row
  while($row = $result4->fetch_assoc()) {
    // echo "name: " . $row["name"]. " " . $row["category"]. " " . $row["photo_1"];
    $id_travel_4 = $row["id"];
    $name_travel_4 = $row["name"];
    $category_travel_4 = $row["category"];
    $photo_1_travel_4 = $row["photo_1"];
    // echo $name_travel_4;
  }
} else {
  // echo "0 results";
}

$sql5 = "SELECT id ,name, category, photo_1 FROM travel ORDER BY RAND() LIMIT 0,1";
$result5 = $conn->query($sql);

if ($result5->num_rows > 0) {
  // output data of each row
  while($row = $result5->fetch_assoc()) {
    // echo "name: " . $row["name"]. " " . $row["category"]. " " . $row["photo_1"];
    $id_travel_5 = $row["id"];
    $name_travel_5 = $row["name"];
    $category_travel_5 = $row["category"];
    $photo_1_travel_5 = $row["photo_1"];
    // echo $name_travel_5;
  }
} else {
  // echo "0 results";
}

@endphp
    <!-- Trending Area Start -->
    <div class="trending-area fix">
        <div class="container">
            <div class="trending-main">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Top -->
                        <div class="trending-top mb-30">
                            <div class="trend-top-img">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <!-- <iframe class="embed-responsive-item" src="{{ asset('/img/klongarang/VID20200829133405.mp4') }}"></iframe> -->
                                
                                    <video class="video-fluid z-depth-1" autoplay loop controls muted>
                                        <source src="{{ asset('/img/klongarang/บ้านคลองอาราง จังหวัดสระแก้ว.mp4') }}" type="video/mp4" />
                                    </video>
                                </div>
                                <!-- <img src="{{ asset('/img/klongarang/บ่อทอง.JPG') }}" alt=""> -->
                                <div class="trend-top-cap">
                                    <!-- <span>ดูสถานที่</span> -->
                                    <!-- <h2><a href="details.html">บ่อทอง<br> @บ้านคลองอาราง</a></h2> -->
                                </div>
                            </div>
                        </div>
                        <!-- Trending Bottom -->
                        <div class="trending-bottom">
                            <div class="row">
                                <div class="col-lg-4">
                                <div class="single-bottom mb-35">
                                    <div class="trend-bottom-img mb-30">
                                        <img width="100%" height="150" src="{{ url('storage')}}/{{ $photo_1_travel_1 }}" >
                                    </div>
                                    <div class="trend-bottom-cap">
                                        <h4><a href="{{ url('/travel/' . $id_travel_1) }}">"{{ $name_travel_1 }}"</a></h4>
                                    </div>
                                </div>
                                </div>

                                <div class="col-lg-4">
                                <div class="single-bottom mb-35">
                                    <div class="trend-bottom-img mb-30">
                                        <img width="100%" height="150" src="{{ url('storage')}}/{{ $photo_1_travel_2 }}" >
                                    </div>
                                    <div class="trend-bottom-cap">
                                        <h4><a href="{{ url('/travel/' . $id_travel_2) }}">"{{ $name_travel_2 }}"</a></h4>
                                    </div>
                                </div>
                                </div>

                                <div class="col-lg-4">
                                <div class="single-bottom mb-35">
                                    <div class="trend-bottom-img mb-30">
                                        <img width="100%" height="150" src="{{ url('storage')}}/{{ $photo_1_travel_3 }}" >
                                    </div>
                                    <div class="trend-bottom-cap">
                                        <h4><a href="{{ url('/travel/' . $id_travel_3) }}">"{{ $name_travel_3 }}"</a></h4>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Riht content -->
                    <div class="col-lg-4">
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img width="165" height="110" src="{{ asset('/img/klongarang/P1010045.JPG') }}" alt="">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color1">โครงการ</span>
                                <h4><a href="{{ url('/about') }}">ที่มาและความสำคัญของโครงการ</a></h4>
                            </div>
                        </div>
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img width="165" height="110" src="{{ asset('/img/klongarang/IMG20200815162213.jpg') }}" alt="">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color3">กิจกรรม</span>
                                <h4><a href="details.html">ปลูกต้นทองอุไรตลอดแนวถนนเพื่อความสวยงามของหมู่บ้าน</a></h4>
                            </div>
                        </div>
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img width="165" height="110" src="{{ asset('/img/klongarang/P1010061.JPG') }}" alt="">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color2">โครงการ</span>
                                <h4><a href="details.html">ศึกษาดูงาน ณ บ้านวังรี</a></h4>
                            </div>
                        </div> 
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img width="165" height="110" src="{{ asset('/img/klongarang/IMG20200815142423.jpg') }}" alt="">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color4">โครงการ</span>
                                <h4><a href="details.html">ประชุมผู้นำและตัวแทนชาวบ้าน</a></h4>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trending Area End -->
    <!--   Weekly-News start -->
    <div class="weekly-news-area pt-50">
        <div class="container">
           <div class="weekly-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3> <a href="{{ url('/travel') }}">แหล่งท่องเที่ยวและกิจกรรม</a></h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="weekly-news-active dot-style d-flex dot-style">
                            <div class="weekly-single active">
                                <div class="weekly-img">
                                    <img height="220" src="{{ url('storage')}}/{{ $photo_1_travel_1 }}" alt="">
                                </div>
                                <div class="weekly-caption">
                                    <h4><a href="{{ url('/travel/' . $id_travel_1) }}"><b>"{{ $name_travel_1 }}"</b> ดูข้อมูลเพิ่มเติม</a></h4>
                                </div>
                            </div> 
                            <div class="weekly-single">
                                <div class="weekly-img">
                                        <img height="220" src="{{ url('storage')}}/{{ $photo_1_travel_2 }}" alt="">
                                </div>
                                <div class="weekly-caption">
                                    <h4><a href="{{ url('/travel/' . $id_travel_2) }}"><b>"{{ $name_travel_2 }}"</b> ดูข้อมูลเพิ่มเติม</a></h4>
                                </div>
                            </div>
                            <div class="weekly-single">
                                <div class="weekly-img">
                                        <img height="220" src="{{ url('storage')}}/{{ $photo_1_travel_3 }}" alt="">
                                </div>
                                <div class="weekly-caption">
                                    <h4><a href="{{ url('/travel/' . $id_travel_3) }}"><b>"{{ $name_travel_3 }}"</b> ดูข้อมูลเพิ่มเติม</a></h4>
                                </div>
                            </div> 
                            <div class="weekly-single">
                                <div class="weekly-img">
                                        <img height="220" src="{{ url('storage')}}/{{ $photo_1_travel_4 }}" alt="">
                                </div>
                                <div class="weekly-caption">
                                    <h4><a href="{{ url('/travel/' . $id_travel_4) }}"><b>"{{ $name_travel_4 }}"</b> ดูข้อมูลเพิ่มเติม</a></h4>
                                </div>
                            </div>
                            <div class="weekly-single">
                                <div class="weekly-img">
                                        <img height="220" src="{{ url('storage')}}/{{ $photo_1_travel_5 }}" alt="">
                                </div>
                                <div class="weekly-caption">
                                    <h4><a href="{{ url('/travel/' . $id_travel_5) }}"><b>"{{ $name_travel_5 }}"</b> ดูข้อมูลเพิ่มเติม</a></h4>
                                </div>
                            </div>
                        </div><br>
                        <p style="text-align: right;"><a style="color: #666666 ;" href="{{ url('/travel') }}">ดูเพิ่มเติม</a></p>
                    </div>
                </div>
           </div>
        </div>
    </div>              
    <!-- End Weekly-News -->
@include('home_product')

@include('home_homestay')
    <!--   Weekly2-News start -->
    <div class="weekly2-news-area  weekly2-pading gray-bg">
        <div class="container">
            <div class="weekly2-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>แพคเกจท่องเที่ยว</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="weekly2-news-active dot-style d-flex dot-style">
                            <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="assets/img/news/weekly2News1.jpg" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">Corporate</span>
                                    <p>25 Jan 2020</p>
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                </div>
                            </div> 
                            <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="assets/img/news/weekly2News2.jpg" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">Event night</span>
                                    <p>25 Jan 2020</p>
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                </div>
                            </div> 
                            <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="assets/img/news/weekly2News3.jpg" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">Corporate</span>
                                    <p>25 Jan 2020</p>
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                </div>
                            </div>
                             <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="assets/img/news/weekly2News4.jpg" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">Event time</span>
                                    <p>25 Jan 2020</p>
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                </div>
                            </div> 
                             <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="assets/img/news/weekly2News4.jpg" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">Corporate</span>
                                    <p>25 Jan 2020</p>
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>           
    <hr>
    <!-- End Weekly-News -->

    <!-- section Tittle -->
    <div class="row">
        <div class="col-10"></div>
        <div class="col-2">
            @guest
                <li class="nav-item">
                    <a class="text-secondary" href="{{ route('login') }}">{{ __('Admin Login') }}</a>
                </li>
                @if (Route::has('register'))
                        <a class="nav-link d-none" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </div>
    </div>
@endsection