@extends('layout.main')

@section('content')
<div class="about-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="about-right">
                    <div style="border-radius: 25px;" class="about-img bg-white d-none d-lg-block">
                        <img style="padding: 20px; border-radius: 80px;" src="{{ asset('/img/klongarang/ประชุม.jpg') }}" alt="" >
                    </div>
                    <div style="border-radius: 25px;" class="about-img bg-white d-block d-md-none">
                        <img style="padding: 10px; border-radius: 25px;" src="{{ asset('/img/klongarang/ประชุม.jpg') }}" alt="" >
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="about-right mb-90">
                    <div class="section-tittle mb-30 pt-30">
                        <br><br>
                        <h2 style="text-shadow: 1px 1px #FF0000 " class="text-white">ประชุมผู้นำและตัวแทนชาวบ้าน</h2>
                    </div>
                    <div>
                        <span class="text-dark">&nbsp;&nbsp;&nbsp;&nbsp;คณะผู้วิจัย โดยการนำของอาจารย์ ดร.นภาพร สิงห์นวล ได้มีการจัดประชุมผู้นำและตัวแทนชาวบ้านชุมชนคลองอาราง ตั้งแต่เริ่มดำเนินโครงการการบริหารจัดการการท่องเที่ยวเชิงเกษตร โดยได้รับการสนับสนุนงบประมาณการวิจัยจากสำนักงานคณะกรรมการส่งเสริมวิทยาศาสตร์ วิจัย และนวัตกรรม (สกสว) ผ่านมหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์ ตั้งแต่การเปิดเวที การประชุมเชิงปฏิบัติการ การประชุมกลุ่มย่อย การสัมภาษณ์ เพื่อศึกษาบริบทและศักยภาพบ้านคลองอาราง การศึกษารูปแบบการบริหาร
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</div>
@endsection