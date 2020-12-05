<div class="row">
    <div class="col-lg-6 col-md-6">
        <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
            <label for="name" class="control-label">{{ 'ชื่อกิจกรรม' }}</label><span style="color: #FF0033;font-size: 13px;"> *</span>
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
            <input name="one_day_trip" id="one_day_trip" type="checkbox">&nbsp;&nbsp;&nbsp;1 วัน  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input name="two_days_trip" id="two_days_trip" type="checkbox">&nbsp;&nbsp;&nbsp;2 วัน 1 คืน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input name="three_days_trip" id="three_days_trip" type="checkbox">&nbsp;&nbsp;&nbsp;3 วัน 2 คืน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
        </div><br>
    </div>
    <div class="col-lg-6 col-md-6">
        <div class="form-group {{ $errors->has('cover_photo') ? 'has-error' : ''}}">
            <label for="cover_photo" class="control-label">{{ 'รูปปกโปรแกรมการท่องเที่ยว' }}</label>
            <input class="form-control" name="cover_photo" type="file" id="cover_photo" value="{{ isset($trip->cover_photo) ? $trip->cover_photo : ''}}" >
            {!! $errors->first('cover_photo', '<p class="help-block">:message</p>') !!}
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <span style="color: #FF0033;font-size: 13px;"> * เพิ่มรูปภาพอย่างน้อย 6 รูป</span>
                <div class="form-group {{ $errors->has('photo_1') ? 'has-error' : ''}}">
                    <br>
                    <label for="photo_1" class="control-label">{{ 'รูปภาพที่ 1' }}</label><span style="color: #FF0033;font-size: 13px;"> *</span>
                    <input class="form-control" name="photo_1" type="file" id="photo_1" value="{{ isset($trip->photo_1) ? $trip->photo_1 : ''}}" required>
                    {!! $errors->first('photo_1', '<p class="help-block">:message</p>') !!}
                </div>
                <hr>
                <div class="form-group {{ $errors->has('photo_2') ? 'has-error' : ''}}">
                    <label for="photo_2" class="control-label">{{ 'รูปภาพที่ 2' }}</label><span style="color: #FF0033;font-size: 13px;"> *</span>
                    <input class="form-control" name="photo_2" type="file" id="photo_2" value="{{ isset($trip->photo_2) ? $trip->photo_2 : ''}}" required>
                    {!! $errors->first('photo_2', '<p class="help-block">:message</p>') !!}
                </div>
                <hr>
                <div class="form-group {{ $errors->has('photo_3') ? 'has-error' : ''}}">
                    <label for="photo_3" class="control-label">{{ 'รูปภาพที่ 3' }}</label><span style="color: #FF0033;font-size: 13px;"> *</span>
                    <input class="form-control" name="photo_3" type="file" id="photo_3" value="{{ isset($trip->photo_3) ? $trip->photo_3 : ''}}" required>
                    {!! $errors->first('photo_3', '<p class="help-block">:message</p>') !!}
                </div>
                <hr>
                <div class="form-group {{ $errors->has('photo_4') ? 'has-error' : ''}}">
                    <label for="photo_4" class="control-label">{{ 'รูปภาพที่ 4' }}</label><span style="color: #FF0033;font-size: 13px;"> *</span>
                    <input class="form-control" name="photo_4" type="file" id="photo_4" value="{{ isset($trip->photo_4) ? $trip->photo_4 : ''}}" required>
                    {!! $errors->first('photo_4', '<p class="help-block">:message</p>') !!}
                </div>
                <hr>
                <div class="form-group {{ $errors->has('photo_5') ? 'has-error' : ''}}">
                    <label for="photo_5" class="control-label">{{ 'รูปภาพที่ 5' }}</label><span style="color: #FF0033;font-size: 13px;"> *</span>
                    <input class="form-control" name="photo_5" type="file" id="photo_5" value="{{ isset($trip->photo_5) ? $trip->photo_5 : ''}}" required>
                    {!! $errors->first('photo_5', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <br><br>
                <div class="form-group {{ $errors->has('photo_6') ? 'has-error' : ''}}">
                    <label for="photo_6" class="control-label">{{ 'รูปภาพที่ 6' }}</label><span style="color: #FF0033;font-size: 13px;"> *</span>
                    <input class="form-control" name="photo_6" type="file" id="photo_6" value="{{ isset($trip->photo_6) ? $trip->photo_6 : ''}}" required>
                    {!! $errors->first('photo_6', '<p class="help-block">:message</p>') !!}
                </div>
                <hr>
                <div class="form-group {{ $errors->has('photo_7') ? 'has-error' : ''}}">
                    <label for="photo_7" class="control-label">{{ 'รูปภาพที่ 7' }}</label>
                    <input class="form-control" name="photo_7" type="file" id="photo_7" value="{{ isset($trip->photo_7) ? $trip->photo_7 : ''}}" >
                    {!! $errors->first('photo_7', '<p class="help-block">:message</p>') !!}
                </div>
                <hr>
                <div class="form-group {{ $errors->has('photo_8') ? 'has-error' : ''}}">
                    <label for="photo_8" class="control-label">{{ 'รูปภาพที่ 8' }}</label>
                    <input class="form-control" name="photo_8" type="file" id="photo_8" value="{{ isset($trip->photo_8) ? $trip->photo_8 : ''}}" >
                    {!! $errors->first('photo_8', '<p class="help-block">:message</p>') !!}
                </div>
                <hr>
                <div class="form-group {{ $errors->has('photo_9') ? 'has-error' : ''}}">
                    <label for="photo_9" class="control-label">{{ 'รูปภาพที่ 9' }}</label>
                    <input class="form-control" name="photo_9" type="file" id="photo_9" value="{{ isset($trip->photo_9) ? $trip->photo_9 : ''}}" >
                    {!! $errors->first('photo_9', '<p class="help-block">:message</p>') !!}
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
<div class="d-none form-group {{ $errors->has('three_days_trip') ? 'has-error' : ''}}">
    <label for="three_days_trip" class="control-label">{{ '3 วัน 2 คืน ' }}</label>
    <input class="form-control" name="three_days_trip" type="checkbox" id="three_days_trip" value="{{ isset($trip->three_days_trip) ? $trip->three_days_trip : ''}}" >
    {!! $errors->first('three_days_trip', '<p class="help-block">:message</p>') !!}
</div> -->

<div class="form-group {{ $errors->has('day_1_morning') ? 'has-error' : ''}}">
    <label for="day_1_morning" class="control-label">{{ 'Day 1 Morning' }}</label>
    <textarea class="form-control" rows="5" name="day_1_morning" type="textarea" id="day_1_morning" >{{ isset($trip->day_1_morning) ? $trip->day_1_morning : ''}}</textarea>
    {!! $errors->first('day_1_morning', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('day_1_noon') ? 'has-error' : ''}}">
    <label for="day_1_noon" class="control-label">{{ 'Day 1 Noon' }}</label>
    <textarea class="form-control" rows="5" name="day_1_noon" type="textarea" id="day_1_noon" >{{ isset($trip->day_1_noon) ? $trip->day_1_noon : ''}}</textarea>
    {!! $errors->first('day_1_noon', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('day_1_afternoon') ? 'has-error' : ''}}">
    <label for="day_1_afternoon" class="control-label">{{ 'Day 1 Afternoon' }}</label>
    <textarea class="form-control" rows="5" name="day_1_afternoon" type="textarea" id="day_1_afternoon" >{{ isset($trip->day_1_afternoon) ? $trip->day_1_afternoon : ''}}</textarea>
    {!! $errors->first('day_1_afternoon', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('day_1_evening') ? 'has-error' : ''}}">
    <label for="day_1_evening" class="control-label">{{ 'Day 1 Evening' }}</label>
    <textarea class="form-control" rows="5" name="day_1_evening" type="textarea" id="day_1_evening" >{{ isset($trip->day_1_evening) ? $trip->day_1_evening : ''}}</textarea>
    {!! $errors->first('day_1_evening', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('day_1_night') ? 'has-error' : ''}}">
    <label for="day_1_night" class="control-label">{{ 'Day 1 Night' }}</label>
    <textarea class="form-control" rows="5" name="day_1_night" type="textarea" id="day_1_night" >{{ isset($trip->day_1_night) ? $trip->day_1_night : ''}}</textarea>
    {!! $errors->first('day_1_night', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('day_2_morning') ? 'has-error' : ''}}">
    <label for="day_2_morning" class="control-label">{{ 'Day 2 Morning' }}</label>
    <textarea class="form-control" rows="5" name="day_2_morning" type="textarea" id="day_2_morning" >{{ isset($trip->day_2_morning) ? $trip->day_2_morning : ''}}</textarea>
    {!! $errors->first('day_2_morning', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('day_2_noon') ? 'has-error' : ''}}">
    <label for="day_2_noon" class="control-label">{{ 'Day 2 Noon' }}</label>
    <textarea class="form-control" rows="5" name="day_2_noon" type="textarea" id="day_2_noon" >{{ isset($trip->day_2_noon) ? $trip->day_2_noon : ''}}</textarea>
    {!! $errors->first('day_2_noon', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('day_2_afternoon') ? 'has-error' : ''}}">
    <label for="day_2_afternoon" class="control-label">{{ 'Day 2 Afternoon' }}</label>
    <textarea class="form-control" rows="5" name="day_2_afternoon" type="textarea" id="day_2_afternoon" >{{ isset($trip->day_2_afternoon) ? $trip->day_2_afternoon : ''}}</textarea>
    {!! $errors->first('day_2_afternoon', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('day_2_evening') ? 'has-error' : ''}}">
    <label for="day_2_evening" class="control-label">{{ 'Day 2 Evening' }}</label>
    <textarea class="form-control" rows="5" name="day_2_evening" type="textarea" id="day_2_evening" >{{ isset($trip->day_2_evening) ? $trip->day_2_evening : ''}}</textarea>
    {!! $errors->first('day_2_evening', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('day_2_night') ? 'has-error' : ''}}">
    <label for="day_2_night" class="control-label">{{ 'Day 2 Night' }}</label>
    <textarea class="form-control" rows="5" name="day_2_night" type="textarea" id="day_2_night" >{{ isset($trip->day_2_night) ? $trip->day_2_night : ''}}</textarea>
    {!! $errors->first('day_2_night', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('day_3_morning') ? 'has-error' : ''}}">
    <label for="day_3_morning" class="control-label">{{ 'Day 3 Morning' }}</label>
    <textarea class="form-control" rows="5" name="day_3_morning" type="textarea" id="day_3_morning" >{{ isset($trip->day_3_morning) ? $trip->day_3_morning : ''}}</textarea>
    {!! $errors->first('day_3_morning', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('day_3_noon') ? 'has-error' : ''}}">
    <label for="day_3_noon" class="control-label">{{ 'Day 3 Noon' }}</label>
    <textarea class="form-control" rows="5" name="day_3_noon" type="textarea" id="day_3_noon" >{{ isset($trip->day_3_noon) ? $trip->day_3_noon : ''}}</textarea>
    {!! $errors->first('day_3_noon', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('day_3_afternoon') ? 'has-error' : ''}}">
    <label for="day_3_afternoon" class="control-label">{{ 'Day 3 Afternoon' }}</label>
    <textarea class="form-control" rows="5" name="day_3_afternoon" type="textarea" id="day_3_afternoon" >{{ isset($trip->day_3_afternoon) ? $trip->day_3_afternoon : ''}}</textarea>
    {!! $errors->first('day_3_afternoon', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('day_3_evening') ? 'has-error' : ''}}">
    <label for="day_3_evening" class="control-label">{{ 'Day 3 Evening' }}</label>
    <textarea class="form-control" rows="5" name="day_3_evening" type="textarea" id="day_3_evening" >{{ isset($trip->day_3_evening) ? $trip->day_3_evening : ''}}</textarea>
    {!! $errors->first('day_3_evening', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('day_3_night') ? 'has-error' : ''}}">
    <label for="day_3_night" class="control-label">{{ 'Day 3 Night' }}</label>
    <textarea class="form-control" rows="5" name="day_3_night" type="textarea" id="day_3_night" >{{ isset($trip->day_3_night) ? $trip->day_3_night : ''}}</textarea>
    {!! $errors->first('day_3_night', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('remark') ? 'has-error' : ''}}">
    <label for="remark" class="control-label">{{ 'Remark' }}</label>
    <input class="form-control" name="remark" type="text" id="remark" value="{{ isset($trip->remark) ? $trip->remark : ''}}" >
    {!! $errors->first('remark', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
