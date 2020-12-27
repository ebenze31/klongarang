@extends('layout.main')

@section('content')
@php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "klongarang";

$photo_1 = " ";
$photo_2 = " ";
$photo_3 = " ";
$photo_4 = " ";
$photo_5 = " ";
$photo_6 = " ";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT photo_1 FROM homestays ORDER BY RAND() LIMIT 0,1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $photo_1 = $row["photo_1"];
  }
} else {
  // echo "0 results";
}

$sql2 = "SELECT photo_2 FROM homestays ORDER BY RAND() LIMIT 0,1";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
  // output data of each row
  while($row = $result2->fetch_assoc()) {
    $photo_2 = $row["photo_2"];
  }
} else {
  // echo "0 results";
}

$sql3 = "SELECT photo_3 FROM homestays ORDER BY RAND() LIMIT 0,1";
$result3 = $conn->query($sql3);

if ($result3->num_rows > 0) {
  // output data of each row
  while($row = $result3->fetch_assoc()) {
    $photo_3 = $row["photo_3"];
  }
} else {
  // echo "0 results";
}

$sql4 = "SELECT photo_4 FROM homestays ORDER BY RAND() LIMIT 0,1";
$result4 = $conn->query($sql4);

if ($result4->num_rows > 0) {
  // output data of each row
  while($row = $result4->fetch_assoc()) {
    $photo_4 = $row["photo_4"];
  }
} else {
  // echo "0 results";
}

$sql5 = "SELECT photo_5 FROM homestays ORDER BY RAND() LIMIT 0,1";
$result5 = $conn->query($sql5);

if ($result5->num_rows > 0) {
  // output data of each row
  while($row = $result5->fetch_assoc()) {
    $photo_5 = $row["photo_5"];
  }
} else {
  // echo "0 results";
}

$sql6 = "SELECT photo_6 FROM homestays ORDER BY RAND() LIMIT 0,1";
$result6 = $conn->query($sql6);

if ($result6->num_rows > 0) {
  // output data of each row
  while($row = $result6->fetch_assoc()) {
    $photo_6 = $row["photo_6"];
  }
} else {
  // echo "0 results";
}


@endphp
<section class="whats-news-area pt-50 pb-20">
    <div class="container">
        <div class="row">
        <div class="col-lg-12">
            <div class="row d-flex justify-content-between">
                <div class="col-lg-4 col-md-4">
                    <div class="section-tittle mb-30">
                        <h2 style="text-shadow: 1px 1px #FF0000 " class="text-white">โฮมสเตย์</h2>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <!-- // -->
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div style="z-index: 0;" class="col-lg-9 col-md-9">
                            <div style="background: #bbf1d7; border:none;" class="card ">
                                <p style="color: #000; font-size: 19px; padding: 50px; padding-right: 200px">
                                    โฮมสเตย์ ความหมายคือ เป็นรูปแบบที่พักประเภทหนึ่งของการท่องเที่ยวแบบชนบท (Rural Tourism) และ การท่องเที่ยวเชิงนิเวศ บ้านพักที่อยู่ในชุมชนชนบทที่มีประชาชนเป็นเจ้าของบ้าน และประชาชนสมาชิกในครัวเรือนซึ่งอาศัยอยู่ประจำ และบ้านนั้นเป็นสมาชิกในรูปแบบของกลุ่ม ชมรม หรือว่าสหกรณ์ที่ร่วมจัดกันเป็นโฮมสเตย์ในชุมชน โดยนักท่องเที่ยวสามารถเข้าพักร่วมกับเจ้าของบ้าน และผู้เป็นเจ้าของบ้านเองก็มีความยินดีในการบริการ รับรองเรื่องห้องพัก อาหาร และกับนักท่องเที่ยว และเต็มใจ ที่จะรับนักท่องเที่ยวพร้อมทั้งถ่ายทอดประเพณีวัฒนธรรมอันดีงาม ของท้องถิ่นแก่นักท่องเที่ยวและพานักท่องเที่ยวเที่ยวชมแหล่งท่องเที่ยวและทำกิจกรรมต่าง ๆ เช่นเล่นน้าตก ขี่จักรยาน นั่งเรือเดินป่าศึกษาธรรมชาติและได้เรียนรู้วิถีชีวิตของชุมชนในถิ่นนั้นๆได้ด้วย

                                    ซึ่งข้อสำพื้นฐานของ Homestay นั้นถือว่า ถือว่า ผู้มาพักเป็นแขกของบ้าน มิใช่นักท่องเที่ยว ดังนั้นหากใครที่ไปพักค้างแรมที่พักแบบ โฮมสเตย์ จะถือว่าเป็นแขกของบ้านพักนั้นๆ
                                </p>
                            </div>
                        </div>
                        <div style="position:absolute; right:0; z-index: 1;" class="col-lg-5 col-md-5">
                            <br><br><br>
                            <div style="background: none; border:none;" class="card">
                                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                                  <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                                  </ol>

                                  <div class="carousel-inner">
                                    <div class="carousel-item active">
                                      <img style="border-radius: 20px;" height="300" src="{{ url('storage')}}/{{ $photo_1 }}" class="d-block w-100" alt="">
                                      
                                    </div>
                                    <div class="carousel-item">
                                      <img style="border-radius: 20px;" height="300" src="{{ url('storage')}}/{{ $photo_2 }}" class="d-block w-100" alt="...">
                                      
                                    </div>
                                    <div class="carousel-item">
                                      <img style="border-radius: 20px;" height="300" src="{{ url('storage')}}/{{ $photo_3 }}" class="d-block w-100" alt="...">
                                      
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
</section>

<div class="recent-articles">
    <div class="container">
       <div class="recent-wrapper">
        <hr>
            <!-- section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle mb-30">
                        <h3 style="text-shadow: 1px 1px #FF0000 " class="text-white">บรรยากาศโฮมสเตย์</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="recent-active dot-style d-flex dot-style">

                        <div class="single-recent mb-100">
                            <div class="what-img">
                                <img height="200" style="padding: 10px; border-radius: 20px;z-index: 5;" src="{{ url('storage')}}/{{ $photo_1 }}" alt="">
                            </div>
                            <div style="border-radius: 15px;z-index: 0; background-color: #fff">
                                <h4 style="padding: 15px;">"บรรยากาศ<b style="color: #ed7236"> ภายนอก </b>โฮมสเตย์"</h4>
                            </div>
                        </div>
                        <div class="single-recent mb-100">
                            <div class="what-img">
                                <img height="200" style="padding: 10px; border-radius: 20px;z-index: 5;" src="{{ url('storage')}}/{{ $photo_2 }}" alt="">
                            </div>
                            <div style="border-radius: 15px;z-index: 0; background-color: #fff">
                                <h4 style="padding: 15px;">"บรรยากาศ<b style="color: #ed7236"> ภายนอก </b>โฮมสเตย์"</h4>
                            </div>
                        </div>
                        <div class="single-recent mb-100">
                            <div class="what-img">
                                <img height="200" style="padding: 10px; border-radius: 20px;z-index: 5;" src="{{ url('storage')}}/{{ $photo_3 }}" alt="">
                            </div>
                            <div style="border-radius: 15px;z-index: 0; background-color: #fff">
                                <h4 style="padding: 15px;">"บรรยากาศ<b style="color: #ed7236"> ภายนอก </b>โฮมสเตย์"</h4>
                            </div>
                        </div>
                        <div class="single-recent mb-100">
                            <div class="what-img">
                                <img height="200" style="padding: 10px; border-radius: 20px;z-index: 5;" src="{{ url('storage')}}/{{ $photo_4 }}" alt="">
                            </div>
                            <div style="border-radius: 15px;z-index: 0; background-color: #fff">
                                <h4 style="padding: 15px;">"บรรยากาศ<b style="color: #ed7236"> ภายใน </b>โฮมสเตย์"</h4>
                            </div>
                        </div>
                        <div class="single-recent mb-100">
                            <div class="what-img">
                                <img height="200" style="padding: 10px; border-radius: 20px;z-index: 5;" src="{{ url('storage')}}/{{ $photo_5 }}" alt="">
                            </div>
                            <div style="border-radius: 15px;z-index: 0; background-color: #fff">
                                <h4 style="padding: 15px;">"บรรยากาศ<b style="color: #ed7236"> ภายใน </b>โฮมสเตย์"</h4>
                            </div>
                        </div>
                        <div class="single-recent mb-100">
                            <div class="what-img">
                                <img height="200" style="padding: 10px; border-radius: 20px;z-index: 5;" src="{{ url('storage')}}/{{ $photo_6 }}" alt="">
                            </div>
                            <div style="border-radius: 15px;z-index: 0; background-color: #fff">
                                <h4 style="padding: 15px;">"บรรยากาศ<b style="color: #ed7236"> ภายใน </b>โฮมสเตย์"</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
    </div>
</div>           
<section class="whats-news-area pt-50 pb-20">
    <div class="container">
        <div class="row">
        <div class="col-lg-12">
            <div class="row d-flex justify-content-between">
                <div class="col-lg-12">
                    <div class="row">
                        <div style="position:absolute; right:0; z-index: 0;" class="col-lg-9 col-md-9">
                            <div style="background: #f0f6e4; border:none;" class="card ">
                                <p style="color: #000; font-size: 19px; padding: 50px; padding-left: 200px">
                                    โฮมสเตย์ ความหมายคือ เป็นรูปแบบที่พักประเภทหนึ่งของการท่องเที่ยวแบบชนบท (Rural Tourism) และ การท่องเที่ยวเชิงนิเวศ บ้านพักที่อยู่ในชุมชนชนบทที่มีประชาชนเป็นเจ้าของบ้าน และประชาชนสมาชิกในครัวเรือนซึ่งอาศัยอยู่ประจำ และบ้านนั้นเป็นสมาชิกในรูปแบบของกลุ่ม ชมรม หรือว่าสหกรณ์ที่ร่วมจัดกันเป็นโฮมสเตย์ในชุมชน โดยนักท่องเที่ยวสามารถเข้าพักร่วมกับเจ้าของบ้าน และผู้เป็นเจ้าของบ้านเองก็มีความยินดีในการบริการ รับรองเรื่องห้องพัก อาหาร และกับนักท่องเที่ยว และเต็มใจ ที่จะรับนักท่องเที่ยวพร้อมทั้งถ่ายทอดประเพณีวัฒนธรรมอันดีงาม ของท้องถิ่นแก่นักท่องเที่ยวและพานักท่องเที่ยวเที่ยวชมแหล่งท่องเที่ยวและทำกิจกรรมต่าง ๆ เช่นเล่นน้าตก ขี่จักรยาน นั่งเรือเดินป่าศึกษาธรรมชาติและได้เรียนรู้วิถีชีวิตของชุมชนในถิ่นนั้นๆได้ด้วย

                                    ซึ่งข้อสำพื้นฐานของ Homestay นั้นถือว่า ถือว่า ผู้มาพักเป็นแขกของบ้าน มิใช่นักท่องเที่ยว ดังนั้นหากใครที่ไปพักค้างแรมที่พักแบบ โฮมสเตย์ จะถือว่าเป็นแขกของบ้านพักนั้นๆ
                                </p>
                            </div>
                        </div>
                        <div style="z-index: 1;" class="col-lg-5 col-md-5">
                            <br><br><br>
                            <div style="background: none; border:none;" class="card">
                                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                                  <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                                  </ol>

                                  <div class="carousel-inner">
                                    <div class="carousel-item active">
                                      <img height="300" src="{{ url('storage')}}/{{ $photo_4 }}" class="d-block w-100" alt="">
                                      
                                    </div>
                                    <div class="carousel-item">
                                      <img height="300" src="{{ url('storage')}}/{{ $photo_5 }}" class="d-block w-100" alt="...">
                                      
                                    </div>
                                    <div class="carousel-item">
                                      <img height="300" src="{{ url('storage')}}/{{ $photo_6 }}" class="d-block w-100" alt="...">
                                      
                                    </div>
                                  </div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-8">
            
        </div>
        <div class="col-4">
            <br><br>
            @include('contact')
        </div>
    </div>
</div>
<br>
<hr>
    @if(Auth::check())
        @if(Auth::user()->profile->role == "คนดูแล" )
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <h3 class="card-header">โฮมสเตย์</h3>
                            <div class="card-body">
                                <a href="{{ url('/homestay/create') }}" class="btn-success btn-sm" title="Add New Homestay">
                                    <i class="fa fa-plus" aria-hidden="true"></i> เพิ่มข้อมูล
                                </a>

                                <form method="GET" action="{{ url('/homestay') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="search" placeholder="ค้นหา..." value="{{ request('search') }}">
                                        <span class="input-group-append">
                                            <button class="btn-secondary" type="submit">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>

                                <br/>
                                <br/>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="d-none">#</th>
                                                <th>ชื่อเจ้าของบ้าน</th>
                                                <th>บ้านเลขที่</th>
                                                <th>รูปที่ 1</th>
                                                <th>รูปที่ 2</th>
                                                <th>รูปที่ 3</th>
                                                <th>รูปที่ 4</th>
                                                <th>รูปที่ 5</th>
                                                <th>รูปที่ 6</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($homestay as $item)
                                            <tr>
                                                <td class="d-none">{{ $loop->iteration }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->home }}</td>
                                                <td><img width="150" src="{{ url('storage')}}/{{ $item->photo_1 }}"></td>
                                                <td><img width="150" src="{{ url('storage')}}/{{ $item->photo_2 }}"></td>
                                                <td><img width="150" src="{{ url('storage')}}/{{ $item->photo_3 }}"></td>
                                                <td><img width="150" src="{{ url('storage')}}/{{ $item->photo_4 }}"></td>
                                                <td><img width="150" src="{{ url('storage')}}/{{ $item->photo_5 }}"></td>
                                                <td><img width="150" src="{{ url('storage')}}/{{ $item->photo_6 }}"></td>
                                                <td>
                                                    <a href="{{ url('/homestay/' . $item->id) }}" title="View Homestay"><button class="btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> ดูข้อมูล</button></a>
                                                    <a href="{{ url('/homestay/' . $item->id . '/edit') }}" title="Edit Homestay"><button class="btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไขข้อมูล</button></a>

                                                    <form method="POST" action="{{ url('/homestay' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn-danger btn-sm" title="Delete Homestay" onclick="return confirm(&quot;ยืนยันการลบ ?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> ลบ</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="pagination-wrapper"> {!! $homestay->appends(['search' => Request::get('search')])->render() !!} </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endif
@endsection
