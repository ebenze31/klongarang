@extends('layout.main')

@section('content')

@php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "klongarang";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

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

$id_product_1 = " ";
$name_product_1 = " ";
$category_product_1 = " ";
$photo_product_1 = " ";

$id_product_2 = " ";
$name_product_2 = " ";
$category_product_2 = " ";
$photo_product_2 = " ";



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

$sql_p1 = "SELECT id ,name , photo FROM products ORDER BY RAND() LIMIT 0,1";
$result_p1 = $conn->query($sql_p1);

if ($result_p1->num_rows > 0) {
  // output data of each row
  while($row = $result_p1->fetch_assoc()) {
    $id_product_1 = $row["id"];
    $name_product_1 = $row["name"];
    $photo_product_1 = $row["photo"];
  }
} else {
  // echo "0 results";
}

$sql_p2 = "SELECT id ,name , photo FROM products ORDER BY RAND() LIMIT 0,1";
$result_p2 = $conn->query($sql_p2);

if ($result_p2->num_rows > 0) {
  // output data of each row
  while($row = $result_p2->fetch_assoc()) {
    $id_product_2 = $row["id"];
    $name_product_2 = $row["name"];
    $photo_product_2 = $row["photo"];
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
                                    <iframe style="background-color: #8e8e8e;border: 0px solid #424242;border-radius: 5px;" width="570" height="320" src="https://www.youtube.com/embed/qtu2RyUPcfE?autoplay=1"></iframe>
                                    <!-- <video class="video-fluid z-depth-1" autoplay loop controls muted>
                                        <source src="{{ asset('/img/klongarang/วิดีโอบ้านคลองอาราง.mp4') }}" type="video/mp4" />
                                    </video> -->
                                </div>
                                <!-- <img src="{{ asset('/img/klongarang/บ่อทอง.JPG') }}" alt=""> -->
                                <div class="trend-top-cap">
                                    <!-- <span>ดูสถานที่</span> -->
                                    <!-- <h2><a href="details.html">บ่อทอง<br> @บ้านคลองอาราง</a></h2> -->
                                </div>
                            </div>
                        </div>
                        <!-- Trending Bottom -->
                        <span style="border-radius: 10px;" class="color1">&nbsp;&nbsp;&nbsp;แหล่งท่องเที่ยวและกิจกรรม&nbsp;&nbsp;&nbsp;</span>
                        <br><br>
                        <div class="trending-bottom">
                            <div class="row">
                                <div class="col-lg-4">
                                <div class="single-bottom mb-35">
                                    <div class="trend-bottom-img mb-30">
                                    <a href="{{ url('/travel/' . $id_travel_1) }}">
                                        <img width="100%" height="150" src="{{ url('storage')}}/{{ $photo_1_travel_1 }}" >
                                    </a>
                                    </div>
                                    <div class="trend-bottom-cap">
                                        <h4><a href="{{ url('/travel/' . $id_travel_1) }}">"{{ $name_travel_1 }}"</a></h4>
                                    </div>
                                </div>
                                </div>

                                <div class="col-lg-4">
                                <div class="single-bottom mb-35">
                                    <div class="trend-bottom-img mb-30">
                                    <a href="{{ url('/travel/' . $id_travel_2) }}">
                                        <img width="100%" height="150" src="{{ url('storage')}}/{{ $photo_1_travel_2 }}" >
                                    </a>
                                    </div>
                                    <div class="trend-bottom-cap">
                                        <h4><a href="{{ url('/travel/' . $id_travel_2) }}">"{{ $name_travel_2 }}"</a></h4>
                                    </div>
                                </div>
                                </div>

                                <div class="col-lg-4">
                                <div class="single-bottom mb-35">
                                    <div class="trend-bottom-img mb-30">
                                    <a href="{{ url('/travel/' . $id_travel_3) }}">
                                        <img width="100%" height="150" src="{{ url('storage')}}/{{ $photo_1_travel_3 }}" >
                                    </a>
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
                    <div style="padding-top: 5px;" class="col-lg-4">
                        <span style="border-radius: 10px;" class="color4">&nbsp;&nbsp;&nbsp;กิจกรรมโครงการ&nbsp;&nbsp;&nbsp;</span>
                        <br><br>
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img width="200" height="110" src="{{ asset('/img/klongarang/วังรี.jpg') }}" alt="">
                            </div>
                            <div class="trand-right-cap">
                                <h4><a href="details.html">ศึกษาดูงาน ณ บ้านวังรี</a></h4>
                            </div>
                        </div> 
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img width="200" height="110" src="{{ asset('/img/klongarang/ประชุม.jpg') }}" alt="">
                            </div>
                            <div class="trand-right-cap">
                                <h4><a href="details.html">ประชุมผู้นำและตัวแทนชาวบ้าน</a></h4>
                            </div>
                        </div>
                        <!-- สินค้า -->
                        <span style="border-radius: 10px;" class="color3">&nbsp;&nbsp;&nbsp;สินค้าและของที่ระลึก&nbsp;&nbsp;&nbsp;</span>
                        <br><br>
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <a href="{{ url('/products/' . $id_product_1) }}">
                                    <img width="200" height="110" src="{{ url('storage')}}/{{ $photo_product_1 }}" alt="">
                                </a>
                            </div>
                            <div class="trand-right-cap">
                                <h4><a href="{{ url('/products/' . $id_product_1) }}">"{{ $name_product_1 }}"</a></h4>
                            </div>
                        </div> 
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <a href="{{ url('/products/' . $id_product_2) }}">
                                    <img width="200" height="110" src="{{ url('storage')}}/{{ $photo_product_2 }}" alt="">
                                </a>
                            </div>
                            <div class="trand-right-cap">
                                <h4><a href="{{ url('/products/' . $id_product_2) }}">"{{ $name_product_2 }}"</a></h4>
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
                            <h1 style="text-shadow: 1px 1px #FFF" ><a href="{{ url('/travel') }}">แหล่งท่องเที่ยวและกิจกรรม</a></h1>
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

@include('home_trip')
    
    <hr>
    <!-- End Weekly-News -->

    <!-- section Tittle -->
    <div class="row">
        <div class="col-8"></div>
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
        <div class="col-2"></div>
    </div>
@endsection