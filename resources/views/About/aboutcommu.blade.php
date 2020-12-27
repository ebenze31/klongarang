@extends('layout.main')

@section('content')
    <!-- About US Start -->
    <div class="about-area">
        <div class="container">
               <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <div class="about-right">
                            <div style="border-radius: 25px;" class="about-img bg-white">
                                <img style="padding: 20px; border-radius: 80px;" src="{{ asset('/img/klongarang/P1010100.1.JPG') }}" alt="" >
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <br>
                        <div class="about-right mb-90">
                            <div class="section-tittle mb-30 pt-30">
                                <h2 style="text-shadow: 1px 1px #FF0000 " class="text-white">ประวัติความเป็นมาของหมู่บ้าน</h2>
                            </div>
                            <div>
                                <p class="text-dark">&nbsp;&nbsp;&nbsp;&nbsp;ราวปี พ.ศ. 2480 นายสังข์ พรสมบูรณ์ และนายสุบิน 2 คน น้า กับหลาน เขามาถางป่าและเข้ามาจับจองพื้นที่ ด้วยเพราะความอุดมสมบูรณ์ ของทรัพยากร และบางส่วนก็แบ่งขาย นอกจากนั้นก็ได้นำญาติพี่น้องเข้า มาอยู่ด้วย พร้อมทั้งขยายพื้นที่อยู่อาศัยเพิ่มเติม เป็นชุมชนใหญ่ขึ้น โดยเฉพาะพื้นที่มีคลองน้ำไหลผ่านหลายครอง คลองเล็กคลองน้อย แต่ทุก คลองจะมีต้นอาราง (ต้นนนทรี) ขึ้น 2 ฝั่งคลอง มีต้นไม้อย่างหนาแน่น มี สัตว์ป่าจำนวนมาก ด้วยความสัญจร คมนาคม และความผูกพัน คนคลองอา รางมีทะเบียนบ้านอยู่ในเขตการปกครองของหมู่ 6 ตำบลบ้านนา อำเภอกบินทร์บุรี จังหวัดปราจีนบุรี การ ทำบุญเรียนหนังสือ การค้าขาย การรักษาพยาบาล การเป็นลูกหนี้ นิยมติดต่อด้านตำบลนาอำเภอกบินทร์บุรี ต่อมาการปกครองการพัฒนามีความเจริญมากขึ้นประชาชนก็ย้ายมาขึ้นอำเภอสระแก้ว โดย พื้นที่อยู่อาศัยก็อยู่เหมือนเดิม โดยขึ้นอยู่กับหมู่ 3 ตำบลบ้านแก้ง อำเภอเมือง สระแก้ว จังหวัดสระแก้ว (ปี 2536 เป็นจังหวัดสระแก้ว) ต่อมา แ พฤศจิกายน พ.ศ.2548 บ้านคลองอาราง แยกหมู่บ้านเป็นหมู่ที่ 16 ตำบล บ้านแก้ง อำเภอเมืองสระแก้ว จังหวัดสระแก้ว (ประกาศผู้ว่าราชการ จังหวัด)</p> 
                            </div>
                            <div class="section-tittle mb-30 pt-30">
                                <h2 style="text-shadow: 1px 1px #FF0000 " class="text-white">วิสัยทัศน์ (Vision)</h2>
                            </div>
                            <div>
                                <p class="text-dark">หมู่บ้านคนดี&nbsp;&nbsp;&nbsp;&nbsp; วิถีออมชอม&nbsp;&nbsp;&nbsp;&nbsp;ป่าพร้อมอนุรักษ์&nbsp;&nbsp;&nbsp;&nbsp; พิทักษ์ธรรมาภิบาล&nbsp;&nbsp;&nbsp;&nbsp; ร่วมสร้างบ้านน่าอยู่&nbsp;&nbsp;&nbsp;&nbsp; ฟื้นฟูประเพณี<br>สุขภาพดีล้ำ&nbsp;&nbsp;&nbsp;&nbsp; คำพ่อต้องพอเพียง</p>
                            </div>

                            <div class="section-tittle mb-30 pt-30">
                                <h2 style="text-shadow: 1px 1px #FF0000 " class="text-white">พันธกิจ (Mission)</h2><br> 
                                <h5>( หมู่บ้าน 4ดี วิถีพอเพียง คนดี สุขภาพดี รายได้ดี สิ่งแวดล้อมดี )</h5>
                            </div>
                            <div>
                                <p class="text-dark">
                                    1. เป็นหมู่บ้านคนดีให้โอกาส ให้อภัยกันและกัน <br>
                                    2. เป็นหมู่บ้านที่มีความประหยัดอดออม มัธยัสถ์ อยู่แบบพอเพียง <br>
                                    3. เป็นหมู่บ้านรักษาป่าและอนุรักษ์สิ่งแวดล้อม <br>
                                    4. เป็นหมู่บ้านที่มีความซื่อสัตย์สุจริต นำธรรมาภิบาลมาบริหารพัฒนาหมู่บ้านอย่างมุ่งมั่นทำงานแบบองค์รวม <br>
                                    5. ร่วมกันสร้างหมู่บ้านให้น่าอยู่น่ามอง <br>
                                    6. เป็นหมู่บ้านรักษาวัฒนธรรมประเพณีที่ดีงาม <br>
                                    7. เป็นหมู่บ้านที่มีสุขภาพดี <br>
                                    8. ยึดหลักทางปรัชญาเศรษฐกิจพอเพียงมาดำเนินชีวิต อยู่อย่างพอเพียง<br>
                                </p>
                            </div>
                        </div>
                    </div>
                <div class="col-lg-4">
                <br><br><br><br><br>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active text-info"  href="{{ url('/community') }}" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fas fa-trophy"></i> ผังคณะกรรมการหมู่บ้าน <i class="fas fa-trophy"></i></a>
                </div>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active"  href="{{ url('/award') }}" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fas fa-trophy"></i> รางวัลที่หมู่บ้านได้รับ <i class="fas fa-trophy"></i></a>
                </div>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link text-success"  href="{{ url('#') }}" role="tab" aria-controls="nav-home" aria-selected="true"><i class="far fa-handshake"></i> วิสาหกิจชมชุน <i class="far fa-handshake"></i></a>
                </div>
                <hr>
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
                                <span>คุณบอล</span>
                            </div>
                            </a>
                        </div>
                        <div class="follow-us d-flex align-items-center">
                            <div class="follow-social">
                                <a href="tel:0861219718" target="_blank"><img src="{{ asset('/img/icon/icon-tel2.png') }}" alt="">
                            </div>
                            <div class="follow-count">
                                <span>086-1219718</span>
                            </div>
                            </a>
                        </div>
                        <div class="follow-us d-flex align-items-center">
                            <div class="follow-social">
                                <a href="tel:0623894316" target="_blank"><img src="{{ asset('/img/icon/icon-tel.png') }}" alt="">
                            </div>
                            <div class="follow-count">
                                <span>062-3894316</span>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                

            </div>
            </div>
        </div>
    </div>
    <!-- About US End -->
@endsection