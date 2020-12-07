<!DOCTYPE html>
<html lang="en">
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
@endphp
<head>
  @include('layout.head')
</head> 
<body id="page-top" style="background-image: url('https://ak.picdn.net/shutterstock/videos/2559182/thumb/1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
  font-family: 'Sriracha', cursive;">
  
  <div id="content-wrapper" class="d-flex flex-column">
    <div id="content" >  
      @include('layout.navbar')
      <div id="wrapper"> 
        @include('layout.sidebar')
        <div class="container-fluid pt-5 pb-5 mb-5">   
          @yield('content')          
        </div>
      </div>
      @include('layout.footer')
    </div>
    @include('layout.js')
  </div>    
</body>
</html>