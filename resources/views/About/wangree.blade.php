@extends('layout.main')

@section('content')
<div class="about-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="about-right">
                    <div style="border-radius: 25px;" class="about-img bg-white d-none d-lg-block">
                        <img style="padding: 20px; border-radius: 80px;" src="{{ asset('/img/klongarang/วังรี.jpg') }}" alt="" >
                    </div>
                    <div style="border-radius: 25px;" class="about-img bg-white d-block d-md-none">
                        <img style="padding: 10px; border-radius: 25px;" src="{{ asset('/img/klongarang/วังรี.jpg') }}" alt="" >
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="about-right mb-90">
                    <div class="section-tittle mb-30 pt-30">
                        <br><br>
                        <h2 style="text-shadow: 1px 1px #FF0000 " class="text-white">สรุปดูงานบ้านวังรี</h2>
                    </div>
                    <div>
                        <span class="text-dark"><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;คณะผู้วิจัยและตัวแทนชุมชนบ้านคลองอารางได้มีโอกาสไปศึกษาดูงานที่ไร่ดีต่อใจ ซึ่งเป็นต้นแบบการท่องเที่ยวเชิงเกษตรที่เริ่มจากการรวมกลุ่มของคนในชุมชนบ้านวังรี ตำบลหนองตะเคียนบอน อำเภอวัฒนานคร จังหวัดสระแก้ว จนกลายเป็นวิสาหกิจชุมชนด้านการท่องเที่ยวเชิงเกษตร ที่เป็นหนึ่งในเครือข่าย Young Smart Farmer ได้ศึกษาและเยี่ยมชมเส้นทางเชื่อมโยงแหล่งท่องเที่ยงเชิงเกษตรในหมู่บ้าน อาทิ บ้านสวนประวิชชญา YK ฟาร์ม สวนห้วยวัง กลุ่มแปรรูปอาหาร สวนไผ่ โคกหนองนาโมเดล เป็นต้น โดยที่หลังจากการศึกษาดูงานครั้งนี้ ตัวแทนจากชุมชนคลองอารางได้เกหิดแนวคิดและนำเอาแนวคิดการบริหารจัดการท่องเที่ยวเชิงเกษตรมาพัฒนาและปรับใช้กับการท่องเที่ยวเชิงเกษตรของชุมชนได้หลายอย่าง 
                        <br>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</div>
@endsection