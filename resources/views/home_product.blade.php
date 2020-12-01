
@php

$id_product_1 = " ";
$name_product_1 = " ";
$category_product_1 = " ";
$photo_product_1 = " ";

$id_product_2 = " ";
$name_product_2 = " ";
$category_product_2 = " ";
$photo_product_2 = " ";

$id_product_3 = " ";
$name_product_3 = " ";
$category_product_3 = " ";
$photo_product_3 = " ";

$id_product_4 = " ";
$name_product_4 = " ";
$category_product_4 = " ";
$photo_product_4 = " ";

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


$sql = "SELECT id ,name, category, photo FROM products ORDER BY RAND() LIMIT 0,1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // echo "name: " . $row["name"]. " " . $row["category"]. " " . $row["photo"];
    $id_product_1 = $row["id"];
    $name_product_1 = $row["name"];
    $category_product_1 = $row["category"];
    $photo_product_1 = $row["photo"];
    // echo $name_product_1;
  }
} else {
  // echo "0 results";
}

$sql2 = "SELECT id ,name, category, photo FROM products ORDER BY RAND() LIMIT 0,1";
$result2 = $conn->query($sql);

if ($result2->num_rows > 0) {
  // output data of each row
  while($row = $result2->fetch_assoc()) {
    // echo "name: " . $row["name"]. " " . $row["category"]. " " . $row["photo"];
    $id_product_2 = $row["id"];
    $name_product_2 = $row["name"];
    $category_product_2 = $row["category"];
    $photo_product_2 = $row["photo"];
    // echo $name_product_2;
  }
} else {
  // echo "0 results";
}

$sql3 = "SELECT id ,name, category, photo FROM products ORDER BY RAND() LIMIT 0,1";
$result3 = $conn->query($sql);

if ($result3->num_rows > 0) {
  // output data of each row
  while($row = $result3->fetch_assoc()) {
    // echo "name: " . $row["name"]. " " . $row["category"]. " " . $row["photo"];
    $id_product_3 = $row["id"];
    $name_product_3 = $row["name"];
    $category_product_3 = $row["category"];
    $photo_product_3 = $row["photo"];
    // echo $name_product_3;
  }
} else {
  // echo "0 results";
}

$sql4 = "SELECT id ,name, category, photo FROM products ORDER BY RAND() LIMIT 0,1";
$result4 = $conn->query($sql);

if ($result4->num_rows > 0) {
  // output data of each row
  while($row = $result4->fetch_assoc()) {
    // echo "name: " . $row["name"]. " " . $row["category"]. " " . $row["photo"];
    $id_product_4 = $row["id"];
    $name_product_4 = $row["name"];
    $category_product_4 = $row["category"];
    $photo_product_4 = $row["photo"];
    // echo $name_product_4;
  }
} else {
  // echo "0 results";
}

@endphp


<!-- Whats New Start -->
    <section class="whats-news-area pt-50 pb-20">
        <div class="container">
            <div class="row">
            <div class="col-lg-8">
                <div class="row d-flex justify-content-between">
                    <div class="col-lg-8 col-md-8">
                        <div class="section-tittle mb-30">
                            <h1 style="text-shadow: 1px 1px #FFF" ><a href="{{ url('/products') }}">สินค้าและของที่ระลึก</a></h1>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- Nav Card -->
                        <div class="tab-content" id="nav-tabContent">
                            <!-- card one -->
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">           
                                <div class="whats-news-caption">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <a href="{{ url('/products/' . $id_product_1) }}">
                                                    <img width="350" height="320" src="{{ url('storage')}}/{{ $photo_product_1 }}" alt="">
                                                    </a>
                                                </div>
                                                <div>
                                                    <h4><br><a style="color: #fc3f00 !important" href="{{ url('/products/' . $id_product_1) }}">"{{ $name_product_1 }}"</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <a href="{{ url('/products/' . $id_product_2) }}">
                                                    <img width="350" height="320" src="{{ url('storage')}}/{{ $photo_product_2 }}" alt="">
                                                    </a>
                                                </div>
                                                <div>
                                                    <h4><br><a style="color: #fc3f00 !important" href="{{ url('/products/' . $id_product_2) }}">"{{ $name_product_2 }}"</a></h4>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <a href="{{ url('/products/' . $id_product_3) }}">
                                                    <img width="350" height="320" src="{{ url('storage')}}/{{ $photo_product_3 }}" alt="">
                                                    </a>
                                                </div>
                                                <div>
                                                    <h4><br><a style="color: #fc3f00 !important" href="{{ url('/products/' . $id_product_3) }}">"{{ $name_product_3 }}"</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <a href="{{ url('/products/' . $id_product_3) }}">
                                                    <img width="350" height="320" src="{{ url('storage')}}/{{ $photo_product_4 }}" alt="">
                                                    </a>
                                                </div>
                                                <div>
                                                    <h4><br><a style="color: #fc3f00 !important" href="{{ url('/products/' . $id_product_3) }}">"{{ $name_product_4 }}"</a></h4>
                                                </div>
                                                <div>
                                                    <p style="text-align: right;"><a style="color: #666666 ;" href="{{ url('/products') }}">ดูเพิ่มเติม</a></p>
                                                </div>
                                            </div>
                                        </div> 
                                    </div> 
                                    
                                </div>
                            </div>
                        </div>
                    <!-- End Nav Card -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <!-- Section Tittle -->
                <div class="section-tittle mb-40">
                    <h3>ติดต่อ</h3>
                </div>
                <!-- Flow Socail -->
                <div class="single-follow mb-45">
                    <div class="single-box">
                        <div class="follow-us d-flex align-items-center">
                            <div class="follow-social">
                                <a href="https://www.facebook.com/%E0%B8%9A%E0%B9%89%E0%B8%B2%E0%B8%99%E0%B8%84%E0%B8%A5%E0%B8%AD%E0%B8%87%E0%B8%AD%E0%B8%B2%E0%B8%A3%E0%B8%B2%E0%B8%87-470519779751019" target="_blank"><img src="{{ asset('/img/icon/icon-fb.png') }}" alt="">
                            </div>
                            <div class="follow-count">  
                                <span>บ้านคลองอาราง</span>
                            </div>
                            </a>
                        </div> 
                        <div class="follow-us d-flex align-items-center">
                            <div class="follow-social">
                                <a href="http://line.me/ti/p/~nongbenze012" target="_blank"><img src="{{ asset('/img/icon/icon-line.png') }}" alt="">
                            </div>
                            <div class="follow-count">
                                <span>ID: </span>
                            </div>
                            </a>
                        </div>
                            <div class="follow-us d-flex align-items-center">
                            <div class="follow-social">
                                <a href="mailto:bb@gmail.com" target="_blank"><img src="{{ asset('/img/icon/icon-mail.png') }}" alt="">
                            </div>
                            <div class="follow-count">
                                <span>Mail</span>
                            </div>
                            </a>
                        </div>
                        <div class="follow-us d-flex align-items-center">
                            <div class="follow-social">
                                <a href="tel:0999999999" target="_blank"><img src="{{ asset('/img/icon/icon-tel.png') }}" alt="">
                            </div>
                            <div class="follow-count">
                                <span>0999999999</span>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- New Poster -->
                <div class="news-poster d-lg-block">
                    <img height="650" src="{{ asset('/img/icon/ปีใหม่.png') }}" alt="">
                </div><br>
                @if(Auth::check())
                    @if(Auth::user()->profile->role == "คนดูแล" )
                        <p style="text-align: right;"><a style="color: #666666 ;" href="{{ url('/') }}">เพิ่มโฆษณา</a></p>
                    @endif
                @endif

            </div>
            </div>
        </div>
    </section>
    <!-- Whats New End -->