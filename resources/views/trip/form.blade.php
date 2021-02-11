<div class="row">
    <div class="col-lg-6 col-md-6">
        <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
            <label for="name" class="control-label">{{ 'ชื่อโปรแกรมท่องเที่ยว' }}</label><span style="color: #FF0033;font-size: 13px;"> *</span>
            <input class="form-control" name="name" type="text" id="name" value="{{ isset($trip->name) ? $trip->name : ''}}" required>
            {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
            <label for="title" class="control-label">{{ 'คำอธิบายสั้นๆ' }}</label><span style="color: #FF0033;font-size: 13px;"> *</span>
            <input class="form-control" name="title" type="text" id="title" value="{{ isset($trip->title) ? $trip->title : ''}}" required>
            {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
        </div>
        <div>
            <label class="control-label">{{ 'โปรแกรมท่องเที่ยว' }}</label><span style="color: #FF0033;font-size: 13px;"> *</span>
            <div>
                <input name="one_day_trip" id="one_day_trip" type="checkbox" onchange="if(this.checked){ document.querySelector('#div_1_day').classList.remove('d-none'),document.querySelector('#name_1_day').classList.remove('d-none'),document.querySelector('#two_days_trip').classList.add('d-none') }else{ document.querySelector('#div_1_day').classList.add('d-none'),document.querySelector('#name_1_day').classList.add('d-none'),document.querySelector('#two_days_trip').classList.remove('d-none')}">&nbsp;&nbsp;&nbsp;1 วัน  &nbsp;&nbsp;&nbsp;

                <input name="two_days_trip" id="two_days_trip" type="checkbox" onchange="if(this.checked){ document.querySelector('#div_2_days').classList.remove('d-none'),document.querySelector('#name_2_days').classList.remove('d-none'),document.querySelector('#div_1_day').classList.remove('d-none'),document.querySelector('#one_day_trip').classList.add('d-none') }else{ document.querySelector('#div_2_days').classList.add('d-none'),document.querySelector('#name_2_days').classList.add('d-none'),document.querySelector('#div_1_day').classList.add('d-none'),document.querySelector('#one_day_trip').classList.remove('d-none')}">&nbsp;&nbsp;&nbsp;2 วัน 1 คืน
            </div>
        </div>
        <br>
        <!-- 1 DAY TRIP -->
        <div class="d-none" name="div_1_day" id="div_1_day">
            <h4 class="d-none" name="name_1_day" id="name_1_day">โปรแกรม 1 วัน</h4>
            <h4 class="d-none" name="name_2_days" id="name_2_days">โปรแกรม 2 วัน 1 คืน</h4>
            <label><b>วันที่ 1</b>: 09.00-12.00 น.</label>
            <div class="form-group {{ $errors->has('day_1_mo_1') ? 'has-error' : ''}}">
                <input class="form-control" name="day_1_mo_1" type="text" id="day_1_mo_1" value="{{ isset($trip->day_1_mo_1) ? $trip->day_1_mo_1 : ''}}"  placeholder="กิจกรรมที่ 1">
                {!! $errors->first('day_1_mo_1', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('day_1_mo_2') ? 'has-error' : ''}}">
                <input class="form-control" name="day_1_mo_2" type="text" id="day_1_mo_2" value="{{ isset($trip->day_1_mo_2) ? $trip->day_1_mo_2 : ''}}"  placeholder="กิจกรรมที่ 2">
                {!! $errors->first('day_1_mo_2', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('day_1_mo_3') ? 'has-error' : ''}}">
                <input class="form-control" name="day_1_mo_3" type="text" id="day_1_mo_3" value="{{ isset($trip->day_1_mo_3) ? $trip->day_1_mo_3 : ''}}"  placeholder="กิจกรรมที่ 3">
                {!! $errors->first('day_1_mo_3', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('day_1_mo_4') ? 'has-error' : ''}}">
                <input class="form-control" name="day_1_mo_4" type="text" id="day_1_mo_4" value="{{ isset($trip->day_1_mo_4) ? $trip->day_1_mo_4 : ''}}"  placeholder="กิจกรรมที่ 4">
                {!! $errors->first('day_1_mo_4', '<p class="help-block">:message</p>') !!}
            </div>

            <label><b>วันที่ 1</b>: 13.00-16.30 น.</label>
            <div class="form-group {{ $errors->has('day_1_af_1') ? 'has-error' : ''}}">
                <input class="form-control" name="day_1_af_1" type="text" id="day_1_af_1" value="{{ isset($trip->day_1_af_1) ? $trip->day_1_af_1 : ''}}"  placeholder="กิจกรรมที่ 1">
                {!! $errors->first('day_1_af_1', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('day_1_af_2') ? 'has-error' : ''}}">
                <input class="form-control" name="day_1_af_2" type="text" id="day_1_af_2" value="{{ isset($trip->day_1_af_2) ? $trip->day_1_af_2 : ''}}"  placeholder="กิจกรรมที่ 2">
                {!! $errors->first('day_1_af_2', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('day_1_af_3') ? 'has-error' : ''}}">
                <input class="form-control" name="day_1_af_3" type="text" id="day_1_af_3" value="{{ isset($trip->day_1_af_3) ? $trip->day_1_af_3 : ''}}"  placeholder="กิจกรรมที่ 3">
                {!! $errors->first('day_1_af_3', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('day_1_af_4') ? 'has-error' : ''}}">
                <input class="form-control" name="day_1_af_4" type="text" id="day_1_af_4" value="{{ isset($trip->day_1_af_4) ? $trip->day_1_af_4 : ''}}"  placeholder="กิจกรรมที่ 4">
                {!! $errors->first('day_1_af_4', '<p class="help-block">:message</p>') !!}
            </div>
            
        </div>
        <!-- 2 DAYS TRIP -->
        <div class="d-none" name="div_2_days" id="div_2_days">
            <label><b>วันที่ 1</b>: 18.30-20.30 น.</label>
            <div class="form-group {{ $errors->has('day_1_ni_1') ? 'has-error' : ''}}">
                <input class="form-control" name="day_1_ni_1" type="text" id="day_1_ni_1" value="{{ isset($trip->day_1_ni_1) ? $trip->day_1_ni_1 : ''}}"  placeholder="กิจกรรมที่ 1">
                {!! $errors->first('day_1_ni_1', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('day_1_ni_2') ? 'has-error' : ''}}">
                <input class="form-control" name="day_1_ni_2" type="text" id="day_1_ni_2" value="{{ isset($trip->day_1_ni_2) ? $trip->day_1_ni_2 : ''}}"  placeholder="กิจกรรมที่ 2">
                {!! $errors->first('day_1_ni_2', '<p class="help-block">:message</p>') !!}
            </div>
            <label><b>วันที่ 2</b>: 09.00-12.00 น.</label>
            <div class="form-group {{ $errors->has('day_2_mo_1') ? 'has-error' : ''}}">
                <input class="form-control" name="day_2_mo_1" type="text" id="day_2_mo_1" value="{{ isset($trip->day_2_mo_1) ? $trip->day_2_mo_1 : ''}}"  placeholder="กิจกรรมที่ 1">
                {!! $errors->first('day_2_mo_1', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('day_2_mo_2') ? 'has-error' : ''}}">
                <input class="form-control" name="day_2_mo_2" type="text" id="day_2_mo_2" value="{{ isset($trip->day_2_mo_2) ? $trip->day_2_mo_2 : ''}}"  placeholder="กิจกรรมที่ 2">
                {!! $errors->first('day_2_mo_2', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('day_2_mo_3') ? 'has-error' : ''}}">
                <input class="form-control" name="day_2_mo_3" type="text" id="day_2_mo_3" value="{{ isset($trip->day_2_mo_3) ? $trip->day_2_mo_3 : ''}}"  placeholder="กิจกรรมที่ 3">
                {!! $errors->first('day_2_mo_3', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('day_2_mo_4') ? 'has-error' : ''}}">
                <input class="form-control" name="day_2_mo_4" type="text" id="day_2_mo_4" value="{{ isset($trip->day_2_mo_4) ? $trip->day_2_mo_4 : ''}}"  placeholder="กิจกรรมที่ 4">
                {!! $errors->first('day_2_mo_4', '<p class="help-block">:message</p>') !!}
            </div>

            <label><b>วันที่ 2</b>: 13.00-16.30 น.</label>
            <div class="form-group {{ $errors->has('day_2_af_1') ? 'has-error' : ''}}">
                <input class="form-control" name="day_2_af_1" type="text" id="day_2_af_1" value="{{ isset($trip->day_2_af_1) ? $trip->day_2_af_1 : ''}}"  placeholder="กิจกรรมที่ 1">
                {!! $errors->first('day_2_af_1', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('day_2_af_2') ? 'has-error' : ''}}">
                <input class="form-control" name="day_2_af_2" type="text" id="day_2_af_2" value="{{ isset($trip->day_2_af_2) ? $trip->day_2_af_2 : ''}}"  placeholder="กิจกรรมที่ 2">
                {!! $errors->first('day_2_af_2', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('day_2_af_3') ? 'has-error' : ''}}">
                <input class="form-control" name="day_2_af_3" type="text" id="day_2_af_3" value="{{ isset($trip->day_2_af_3) ? $trip->day_2_af_3 : ''}}"  placeholder="กิจกรรมที่ 3">
                {!! $errors->first('day_2_af_3', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('day_2_af_4') ? 'has-error' : ''}}">
                <input class="form-control" name="day_2_af_4" type="text" id="day_2_af_4" value="{{ isset($trip->day_2_af_4) ? $trip->day_2_af_4 : ''}}"  placeholder="กิจกรรมที่ 4">
                {!! $errors->first('day_2_af_4', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('remark') ? 'has-error' : ''}}">
                <label for="remark" class="control-label">{{ 'หมายเหตุ' }}</label>
                <input class="form-control" name="remark" type="text" id="remark" value="{{ isset($trip->remark) ? $trip->remark : ''}}" >
                {!! $errors->first('remark', '<p class="help-block">:message</p>') !!}
            </div>
    </div>


    <div class="col-lg-6 col-md-6">
        <span style="color: #FF0033; font-size: 13px;"> กรุณาอัพโหลดรูปภาพที่มีขนาดต่ำกว่า 2 MB</span>
        <a href="https://www.websiteplanet.com/th/webtools/imagecompressor/" style="font-size: 11px;" class="btn-warning btn-sm" target="bank">บีบอัดรูปภาพ</a><br><br>
        <div class="form-group {{ $errors->has('cover_photo') ? 'has-error' : ''}}">
            <label for="cover_photo" class="control-label">{{ 'รูปปกโปรแกรมการท่องเที่ยว' }}</label><span style="color: #FF0033;font-size: 13px;"> *</span>
            <input class="form-control" name="cover_photo" type="file" id="cover_photo" value="{{ isset($trip->cover_photo) ? $trip->cover_photo : ''}}" >
            {!! $errors->first('cover_photo', '<p class="help-block">:message</p>') !!}
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <span style="color: #FF0033;font-size: 13px;"> * กรุณาเพิ่มรูปภาพอย่างน้อย 6 รูป</span>
                <div class="form-group {{ $errors->has('photo_1') ? 'has-error' : ''}}">
                    <br>
                    <label for="photo_1" class="control-label">{{ 'รูปภาพที่ 1' }}</label><span style="color: #FF0033;font-size: 13px;"> *</span>
                    <input class="form-control" name="photo_1" type="file" id="photo_1" value="{{ isset($trip->photo_1) ? $trip->photo_1 : ''}}" >
                    {!! $errors->first('photo_1', '<p class="help-block">:message</p>') !!}
                </div>
                <hr>
                <div class="form-group {{ $errors->has('photo_3') ? 'has-error' : ''}}">
                    <label for="photo_3" class="control-label">{{ 'รูปภาพที่ 3' }}</label><span style="color: #FF0033;font-size: 13px;"> *</span>
                    <input class="form-control" name="photo_3" type="file" id="photo_3" value="{{ isset($trip->photo_3) ? $trip->photo_3 : ''}}" >
                    {!! $errors->first('photo_3', '<p class="help-block">:message</p>') !!}
                </div>
                <hr>
                <div class="form-group {{ $errors->has('photo_5') ? 'has-error' : ''}}">
                    <label for="photo_5" class="control-label">{{ 'รูปภาพที่ 5' }}</label><span style="color: #FF0033;font-size: 13px;"> *</span>
                    <input class="form-control" name="photo_5" type="file" id="photo_5" value="{{ isset($trip->photo_5) ? $trip->photo_5 : ''}}" >
                    {!! $errors->first('photo_5', '<p class="help-block">:message</p>') !!}
                </div>
                <hr>
                <div class="form-group {{ $errors->has('photo_7') ? 'has-error' : ''}}">
                    <label for="photo_7" class="control-label">{{ 'รูปภาพที่ 7' }}</label>
                    <input class="form-control" name="photo_7" type="file" id="photo_7" value="{{ isset($trip->photo_7) ? $trip->photo_7 : ''}}" >
                    {!! $errors->first('photo_7', '<p class="help-block">:message</p>') !!}
                </div>
                <hr>
                <div class="form-group {{ $errors->has('photo_9') ? 'has-error' : ''}}">
                    <label for="photo_9" class="control-label">{{ 'รูปภาพที่ 9' }}</label>
                    <input class="form-control" name="photo_9" type="file" id="photo_9" value="{{ isset($trip->photo_9) ? $trip->photo_9 : ''}}" >
                    {!! $errors->first('photo_9', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <br><br>
                <div class="form-group {{ $errors->has('photo_2') ? 'has-error' : ''}}">
                    <label for="photo_2" class="control-label">{{ 'รูปภาพที่ 2' }}</label><span style="color: #FF0033;font-size: 13px;"> *</span>
                    <input class="form-control" name="photo_2" type="file" id="photo_2" value="{{ isset($trip->photo_2) ? $trip->photo_2 : ''}}" >
                    {!! $errors->first('photo_2', '<p class="help-block">:message</p>') !!}
                </div>
                <hr>
                <div class="form-group {{ $errors->has('photo_4') ? 'has-error' : ''}}">
                    <label for="photo_4" class="control-label">{{ 'รูปภาพที่ 4' }}</label><span style="color: #FF0033;font-size: 13px;"> *</span>
                    <input class="form-control" name="photo_4" type="file" id="photo_4" value="{{ isset($trip->photo_4) ? $trip->photo_4 : ''}}" >
                    {!! $errors->first('photo_4', '<p class="help-block">:message</p>') !!}
                </div>
                <hr>
                <div class="form-group {{ $errors->has('photo_6') ? 'has-error' : ''}}">
                    <label for="photo_6" class="control-label">{{ 'รูปภาพที่ 6' }}</label><span style="color: #FF0033;font-size: 13px;"> *</span>
                    <input class="form-control" name="photo_6" type="file" id="photo_6" value="{{ isset($trip->photo_6) ? $trip->photo_6 : ''}}" >
                    {!! $errors->first('photo_6', '<p class="help-block">:message</p>') !!}
                </div>
                
                <hr>
                <div class="form-group {{ $errors->has('photo_8') ? 'has-error' : ''}}">
                    <label for="photo_8" class="control-label">{{ 'รูปภาพที่ 8' }}</label>
                    <input class="form-control" name="photo_8" type="file" id="photo_8" value="{{ isset($trip->photo_8) ? $trip->photo_8 : ''}}" >
                    {!! $errors->first('photo_8', '<p class="help-block">:message</p>') !!}
                </div>
                <hr>
                <div class="form-group {{ $errors->has('photo_10') ? 'has-error' : ''}}">
                    <label for="photo_10" class="control-label">{{ 'รูปภาพที่ 10' }}</label>
                    <input class="form-control" name="photo_10" type="file" id="photo_10" value="{{ isset($trip->photo_10) ? $trip->photo_10 : ''}}" >
                    {!! $errors->first('photo_10', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </div>
    </div>


<!-- <div class="d-none form-group {{ $errors->has('one_day_trip') ? 'has-error' : ''}}">
    <label for="one_day_trip" class="control-label">{{ '1 วัน ' }}</label>
    <input class="form-control" name="one_day_trip" type="checkbox" id="one_day_trip" value="{{ isset($trip->one_day_trip) ? $trip->one_day_trip : ''}}" >
    {!! $errors->first('one_day_trip', '<p class="help-block">:message</p>') !!}
</div>
<div class="d-none form-group {{ $errors->has('two_days_trip') ? 'has-error' : ''}}">
    <label for="two_days_trip" class="control-label">{{ '2 วัน 1 คืน' }}</label>
    <input class="form-control" name="two_days_trip" type="checkbox" id="two_days_trip" value="{{ isset($trip->two_days_trip) ? $trip->two_days_trip : ''}}" >
    {!! $errors->first('two_days_trip', '<p class="help-block">:message</p>') !!}
</div>
 -->
<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'แก้ไขข้อมูล' : 'เพิ่มข้อมูล' }}">
</div>
