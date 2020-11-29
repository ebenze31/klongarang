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
                                    <div class="weekly-single">
                                        <div class="weekly-img">
                                            <img height="235" src="{{ asset('/img/klongarang/สระหลวง.png') }}" alt="">
                                        </div>
                                    </div> 
                                    <div class="weekly-single">
                                        <div class="weekly-img">
                                                <img height="235" src="{{ asset('/img/klongarang/สระหลวง.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="weekly-single">
                                        <div class="weekly-img">
                                            <img height="235" src="{{ asset('/img/klongarang/สระหลวง.png') }}" alt="">
                                        </div>
                                    </div> 
                                    <div class="weekly-single">
                                        <div class="weekly-img">
                                            <img height="235" src="{{ asset('/img/klongarang/สระหลวง.png') }}" alt="">
                                        </div>
                                    </div> 
                                    <div class="weekly-single">
                                        <div class="weekly-img">
                                            <img height="235" src="{{ asset('/img/klongarang/สระหลวง.png') }}" alt="">
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
<!-- About US Start -->
<div class="about-area">
    <div class="container">
           <div class="row">
                <div class="col-lg-8">
                    <!-- Trending Tittle -->
                    <div class="about-right mb-90">
                        <div class="about-img">
                            <img src="assets/img/trending/trending_top.jpg" alt="">
                        </div>
                        <div class="section-tittle mb-30 pt-30">
                            <h3>ชื่อสถานที่ท่องเที่ยว</h3>
                        </div>
                        <div class="about-prea">
                            <span style="color: #000" class="about-pera1 mb-25">Moms are like…buttons? Moms are like glue. Moms are like pizza crusts. Moms are the ones who make sure things happen—from birth to school lunch.</p>
                            
                            <span>
                                My hero when I was a kid was my mom. Same for everyone I knew. Moms are untouchable. They’re elegant, smart, beautiful, kind…everything we want to be. At 29 years old, my favorite compliment is being told that I look like my mom. Seeing myself in her image, like this daughter up top, makes me so proud of how far I’ve come, and so thankful for where I come from.
                                the refractor telescope uses a convex lens to focus the light on the eyepiece.
                                The reflector telescope has a concave lens which means it telescope sits on. The mount is the actual tripod and the wedge is the device that lets you attach the telescope to the mount.
                                Moms are like…buttons? Moms are like glue. Moms are like pizza crusts. Moms are the ones who make sure things happen—from birth to school lunch.My hero when I was a kid was my mom. Same for everyone I knew. Moms are untouchable. They’re elegant, smart, beautiful, kind…everything we want to be. At 29 years old, my favorite compliment is being told that I look like my mom. Seeing myself in her image, like this daughter up top, makes me so proud of how far I’ve come, and so thankful for where I come from.
                                the refractor telescope uses a convex lens to focus the light on the eyepiece.
                                The reflector telescope has a concave lens which means it telescope sits on. The mount is the actual tripod and the wedge is the device that lets you attach the telescope to the mount.
                                Moms are like…buttons? Moms are like glue. Moms are like pizza crusts. Moms are the ones who make sure things happen—from birth to school lunch.</span>
                        </div> 
                        
                        <div class="social-share pt-30">
                            <div class="section-tittle">
                                <h3 class="mr-20">แชร์ :</h3>
                                <ul>
                                    <li><a href="#"><img src="{{ asset('/img/icon/icon-ins.png') }}" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('/img/icon/icon-fb.png') }}" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('/img/icon/icon-tw.png') }}" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('/img/icon/icon-yo.png') }}" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-4"><br><br><br><br><br>
                    <form class="form-contact contact_form mb-80" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100 error" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Enter Message"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control error" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control error" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control error" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                        </div>
                    </form>
           </div>
    </div>
</div>
<!-- About US End -->
@endsection