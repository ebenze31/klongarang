<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                <label for="name" class="control-label">{{ 'ชื่อกิจจกรรมฆ' }}</label><span style="color: red"> *</span>
                <input class="form-control" name="name" type="text" id="name" value="{{ isset($advertise->name) ? $advertise->name : ''}}"required >
                {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('dateline') ? 'has-error' : ''}}">
                <label for="dateline" class="control-label">{{ 'วันสิ้นสุดกิจกรรม' }}</label><span style="color: red"> *</span>
                <input class="form-control" name="dateline" type="date" id="dateline" value="{{ isset($advertise->dateline) ? $advertise->dateline : ''}}" required>
                {!! $errors->first('dateline', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('photo') ? 'has-error' : ''}}">
                <label for="photo" class="control-label">{{ 'รูปภาพ' }}</label><span style="color: red"> *</span>
                <input class="form-control" name="photo" type="file" id="photo" value="{{ isset($advertise->photo) ? $advertise->photo : ''}}" required>
                {!! $errors->first('photo', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="d-none form-group {{ $errors->has('active') ? 'has-error' : ''}}">
                <label for="active" class="control-label">{{ 'สถานะ' }}</label>
                <input class="form-control" name="active" type="text" id="active" value="ใช้งาน" required readonly>
                {!! $errors->first('active', '<p class="help-block">:message</p>') !!}
            </div>
            <br>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'แก้ไขข้อมูล' : 'เพิ่มข้อมูล' }}">
            </div>
        </div>
        <div class="col-md-6">
        <br><br><br>
            <center>
            <img width="60%" src="{{ asset('/img/klongarang/logologo.png') }}">
            </center>
        </div>
    </div>
</div>
