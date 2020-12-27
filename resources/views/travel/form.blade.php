<div class="row">
    <div class="col-lg-6 col-md-6">
        <div class="d-none form-group {{ $errors->has('type') ? 'has-error' : ''}}">
            <label for="type" class="control-label">{{ 'ประเภท' }}</label>
            <input class="form-control" name="type" type="text" id="type" value="แหล่งท่องเที่ยวและกิจกรรม" required readonly>
            {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
        </div><br>
        <div>
            <label for="category" class="control-label">{{ 'หมวดหมู่' }}</label><span style="color: #FF0033;font-size: 13px;"> (เลือกได้มากกว่า 1 ข้อ)</span>
            <div><input name="agriculture" id="agriculture" type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เชิงเกษตร </div> 
            <div><input name="culture" id="culture" type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เชิงวัฒนธรรม</div>
            <div><input name="learn" id="learn" type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;กิจกรรมแลกเปลี่ยนเรียนรู้</div>
            <div><input name="check_in" id="check_in" type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จุดเช็คอิน</div>
        </div><br>
        <div class="d-none form-group {{ $errors->has('category') ? 'has-error' : ''}}">
            <label for="category" class="control-label">{{ 'หมวดหมู่' }}</label><span style="color: #FF0033"> *</span><br>
            <select name="category" class="form-control" id="category" >
            @foreach (json_decode('{"\u0e40\u0e0a\u0e34\u0e07\u0e27\u0e31\u0e12\u0e19\u0e18\u0e23\u0e23\u0e21":"\u0e40\u0e0a\u0e34\u0e07\u0e27\u0e31\u0e12\u0e19\u0e18\u0e23\u0e23\u0e21","\u0e40\u0e0a\u0e34\u0e07\u0e40\u0e01\u0e29\u0e15\u0e23":"\u0e40\u0e0a\u0e34\u0e07\u0e40\u0e01\u0e29\u0e15\u0e23","\u0e01\u0e34\u0e08\u0e01\u0e23\u0e23\u0e21\u0e41\u0e25\u0e01\u0e40\u0e1b\u0e25\u0e35\u0e48\u0e22\u0e19\u0e40\u0e23\u0e35\u0e22\u0e19\u0e23\u0e39\u0e49":"\u0e01\u0e34\u0e08\u0e01\u0e23\u0e23\u0e21\u0e41\u0e25\u0e01\u0e40\u0e1b\u0e25\u0e35\u0e48\u0e22\u0e19\u0e40\u0e23\u0e35\u0e22\u0e19\u0e23\u0e39\u0e49"}', true) as $optionKey => $optionValue)
                <option value="{{ $optionKey }}" {{ (isset($travel->category) && $travel->category == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
            @endforeach
        </select>
            {!! $errors->first('category', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
            <label for="name" class="control-label ">{{ 'ชื่อสถานที่' }}</label><span style="color: #FF0033"> *</span>
            <input class="form-control" name="name" type="text" id="name" value="{{ isset($travel->name) ? $travel->name : ''}}" required >
            {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group {{ $errors->has('detail') ? 'has-error' : ''}}">
            <label for="detail" class="control-label">{{ 'รายละเอียดของสถานที่' }}</label><span style="color: #FF0033"> *</span>
            <textarea class="form-control" rows="5" name="detail" type="textarea" id="detail" required>{{ isset($travel->detail) ? $travel->detail : ''}}</textarea>
            {!! $errors->first('detail', '<p class="help-block">:message</p>') !!}
        </div>

        <div><br><br><br></div>

    </div>

    <div class="col-lg-6 col-md-6">
        <p style="color: #FF0033">กรุณาเพิ่มรูปภาพอย่างน้อย 4 รูป</p>
        <div class="form-group {{ $errors->has('photo_1') ? 'has-error' : ''}}">
            <label for="photo_1" class="control-label">{{ 'รูปที่ 1' }}</label><span style="color: #FF0033"> *</span>
            <input class="form-control" name="photo_1" type="file" id="photo_1" value="{{ isset($travel->photo_1) ? $travel->photo_1 : ''}}"  >
            {!! $errors->first('photo_1', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group {{ $errors->has('photo_2') ? 'has-error' : ''}}">
            <label for="photo_2" class="control-label">{{ 'รูปที่ 2' }}</label><span style="color: #FF0033"> *</span>
            <input class="form-control" name="photo_2" type="file" id="photo_2" value="{{ isset($travel->photo_2) ? $travel->photo_2 : ''}}"  >
            {!! $errors->first('photo_2', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group {{ $errors->has('photo_3') ? 'has-error' : ''}}">
            <label for="photo_3" class="control-label">{{ 'รูปที่ 3' }}</label><span style="color: #FF0033"> *</span>
            <input class="form-control" name="photo_3" type="file" id="photo_3" value="{{ isset($travel->photo_3) ? $travel->photo_3 : ''}}"  >
            {!! $errors->first('photo_3', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group {{ $errors->has('photo_4') ? 'has-error' : ''}}">
            <label for="photo_4" class="control-label">{{ 'รูปที่ 4' }}</label><span style="color: #FF0033"> *</span>
            <input class="form-control" name="photo_4" type="file" id="photo_4" value="{{ isset($travel->photo_4) ? $travel->photo_4 : ''}}"  >
            {!! $errors->first('photo_4', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group {{ $errors->has('photo_5') ? 'has-error' : ''}}">
            <label for="photo_5" class="control-label">{{ 'รูปที่ 5' }}</label>
            <input class="form-control" name="photo_5" type="file" id="photo_5" value="{{ isset($travel->photo_5) ? $travel->photo_5 : ''}}" >
            {!! $errors->first('photo_5', '<p class="help-block">:message</p>') !!}
        </div>

        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'แก้ไขข้อมูล' : 'เพิ่มข้อมูล' }}">
        </div>

    </div>
</div>
