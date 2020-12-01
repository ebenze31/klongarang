<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($homestay->name) ? $homestay->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('home') ? 'has-error' : ''}}">
    <label for="home" class="control-label">{{ 'Home' }}</label>
    <textarea class="form-control" rows="5" name="home" type="textarea" id="home" >{{ isset($homestay->home) ? $homestay->home : ''}}</textarea>
    {!! $errors->first('home', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('photo_1') ? 'has-error' : ''}}">
    <label for="photo_1" class="control-label">{{ 'Photo 1' }}</label>
    <input class="form-control" name="photo_1" type="file" id="photo_1" value="{{ isset($homestay->photo_1) ? $homestay->photo_1 : ''}}" >
    {!! $errors->first('photo_1', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('photo_2') ? 'has-error' : ''}}">
    <label for="photo_2" class="control-label">{{ 'Photo 2' }}</label>
    <input class="form-control" name="photo_2" type="file" id="photo_2" value="{{ isset($homestay->photo_2) ? $homestay->photo_2 : ''}}" >
    {!! $errors->first('photo_2', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('photo_3') ? 'has-error' : ''}}">
    <label for="photo_3" class="control-label">{{ 'Photo 3' }}</label>
    <input class="form-control" name="photo_3" type="file" id="photo_3" value="{{ isset($homestay->photo_3) ? $homestay->photo_3 : ''}}" >
    {!! $errors->first('photo_3', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('photo_4') ? 'has-error' : ''}}">
    <label for="photo_4" class="control-label">{{ 'Photo 4' }}</label>
    <input class="form-control" name="photo_4" type="file" id="photo_4" value="{{ isset($homestay->photo_4) ? $homestay->photo_4 : ''}}" >
    {!! $errors->first('photo_4', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('photo_5') ? 'has-error' : ''}}">
    <label for="photo_5" class="control-label">{{ 'Photo 5' }}</label>
    <input class="form-control" name="photo_5" type="file" id="photo_5" value="{{ isset($homestay->photo_5) ? $homestay->photo_5 : ''}}" >
    {!! $errors->first('photo_5', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('photo_6') ? 'has-error' : ''}}">
    <label for="photo_6" class="control-label">{{ 'Photo 6' }}</label>
    <input class="form-control" name="photo_6" type="file" id="photo_6" value="{{ isset($homestay->photo_6) ? $homestay->photo_6 : ''}}" >
    {!! $errors->first('photo_6', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'แก้ไขข้อมูล' : 'เพิ่มข้อมูล' }}">
</div>
