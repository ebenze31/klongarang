@extends('layout.main')

@section('content')
<section class="whats-news-area pt-50 pb-20">
    <div class="container">
        <div class="row">
        <div class="col-lg-11">
            <div class="row d-flex justify-content-between">
                <div class="col-lg-4 col-md-4">
                    <div class="section-tittle mb-30">
                        <h3>สินค้าและของที่ระลึก</h3>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="properties__button">
                        <!--Nav Button  -->                                            
                        <nav>                                                                     
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">ทั้งหมด</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">อาหาร</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">ของที่ระลึก</a>
                                <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">ผลิตภัณฑ์จากไผ่</a>
                                <a class="d-none nav-item nav-link" id="nav-Sports" data-toggle="tab" href="#nav-nav-Sport" role="tab" aria-controls="nav-contact" aria-selected="false">Sports</a>
                            </div>
                        </nav>
                        <!--End Nav Button  -->
                    </div>
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
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img width="350" height="320" src="{{ asset('/img/สินค้าและของที่ระลึก/หน่อไม้.png') }}" alt="">
                                            </div>
                                            <div>
                                                <h4><br><a style="color: #fc3f00 !important" href="#">"หน่อไม้"</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img width="350" height="320" src="{{ asset('/img/สินค้าและของที่ระลึก/พวงกุญแจ.png') }}" alt="">
                                            </div>
                                            <div>
                                                <h4><br><a style="color: #fc3f00 !important" href="#">"พวงกุญแจ"</a></h4>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img width="350" height="320" src="{{ asset('/img/สินค้าและของที่ระลึก/น้ำส้มควันไม้.png') }}" alt="">
                                            </div>
                                            <div>
                                                <h4><br><a style="color: #fc3f00 !important" href="#">"น้ำส้มควันไม้"</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img width="350" height="320" src="{{ asset('/img/สินค้าและของที่ระลึก/ผลิตภัณฑ์จากไผ่.png') }}" alt="">
                                            </div>
                                            <div>
                                                <h4><br><a style="color: #fc3f00 !important" href="#">"ผลิตภัณฑ์จากไผ่"</a></h4>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img width="350" height="320" src="{{ asset('/img/สินค้าและของที่ระลึก/หน่อไม้.png') }}" alt="">
                                            </div>
                                            <div>
                                                <h4><br><a style="color: #fc3f00 !important" href="#">"หน่อไม้"</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img width="350" height="320" src="{{ asset('/img/สินค้าและของที่ระลึก/พวงกุญแจ.png') }}" alt="">
                                            </div>
                                            <div>
                                                <h4><br><a style="color: #fc3f00 !important" href="#">"พวงกุญแจ"</a></h4>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img width="350" height="320" src="{{ asset('/img/สินค้าและของที่ระลึก/น้ำส้มควันไม้.png') }}" alt="">
                                            </div>
                                            <div>
                                                <h4><br><a style="color: #fc3f00 !important" href="#">"น้ำส้มควันไม้"</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img width="350" height="320" src="{{ asset('/img/สินค้าและของที่ระลึก/ผลิตภัณฑ์จากไผ่.png') }}" alt="">
                                            </div>
                                            <div>
                                                <h4><br><a style="color: #fc3f00 !important" href="#">"ผลิตภัณฑ์จากไผ่"</a></h4>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img width="350" height="320" src="{{ asset('/img/สินค้าและของที่ระลึก/หน่อไม้.png') }}" alt="">
                                            </div>
                                            <div>
                                                <h4><br><a style="color: #fc3f00 !important" href="#">"หน่อไม้"</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img width="350" height="320" src="{{ asset('/img/สินค้าและของที่ระลึก/พวงกุญแจ.png') }}" alt="">
                                            </div>
                                            <div>
                                                <h4><br><a style="color: #fc3f00 !important" href="#">"พวงกุญแจ"</a></h4>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img width="350" height="320" src="{{ asset('/img/สินค้าและของที่ระลึก/น้ำส้มควันไม้.png') }}" alt="">
                                            </div>
                                            <div>
                                                <h4><br><a style="color: #fc3f00 !important" href="#">"น้ำส้มควันไม้"</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img width="350" height="320" src="{{ asset('/img/สินค้าและของที่ระลึก/ผลิตภัณฑ์จากไผ่.png') }}" alt="">
                                            </div>
                                            <div>
                                                <h4><br><a style="color: #fc3f00 !important" href="#">"ผลิตภัณฑ์จากไผ่"</a></h4>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img width="350" height="320" src="{{ asset('/img/สินค้าและของที่ระลึก/หน่อไม้.png') }}" alt="">
                                            </div>
                                            <div>
                                                <h4><br><a style="color: #fc3f00 !important" href="#">"หน่อไม้"</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img width="350" height="320" src="{{ asset('/img/สินค้าและของที่ระลึก/พวงกุญแจ.png') }}" alt="">
                                            </div>
                                            <div>
                                                <h4><br><a style="color: #fc3f00 !important" href="#">"พวงกุญแจ"</a></h4>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img width="350" height="320" src="{{ asset('/img/สินค้าและของที่ระลึก/น้ำส้มควันไม้.png') }}" alt="">
                                            </div>
                                            <div>
                                                <h4><br><a style="color: #fc3f00 !important" href="#">"น้ำส้มควันไม้"</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img width="350" height="320" src="{{ asset('/img/สินค้าและของที่ระลึก/ผลิตภัณฑ์จากไผ่.png') }}" alt="">
                                            </div>
                                            <div>
                                                <h4><br><a style="color: #fc3f00 !important" href="#">"ผลิตภัณฑ์จากไผ่"</a></h4>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div> 
                                
                            </div>
                        </div>




                        <!-- Card two -->
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="whats-news-caption">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews1.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews2.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews3.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews4.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card three -->
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="whats-news-caption">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews1.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews2.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews3.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews4.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card fure -->
                        <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                            <div class="whats-news-caption">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews1.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews2.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews3.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews4.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card Five -->
                        <div class="tab-pane fade" id="nav-nav-Sport" role="tabpanel" aria-labelledby="nav-Sports">
                            <div class="whats-news-caption">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews1.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews2.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews3.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews4.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card Six -->
                        <div class="tab-pane fade" id="nav-techno" role="tabpanel" aria-labelledby="nav-technology">
                            <div class="whats-news-caption">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews1.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews2.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews3.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img src="assets/img/news/whatNews4.jpg" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Night party</span>
                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
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
        </div>
    </div>
</section>
@endsection