@php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "klongarang2";

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

<div class="recent-articles">
    <div class="container">
       <div class="recent-wrapper">
        <hr>
            <!-- section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle mb-30">
                        <h3> <a href="{{ url('/homestay') }}">บรรยากาศโฮมสเตย์</a></h3>
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