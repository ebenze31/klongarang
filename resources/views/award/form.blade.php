<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($award->name) ? $award->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('detail') ? 'has-error' : ''}}">
    <label for="detail" class="control-label">{{ 'Detail' }}</label>
    <textarea class="form-control" rows="5" name="detail" type="textarea" id="detail" >{{ isset($award->detail) ? $award->detail : ''}}</textarea>
    {!! $errors->first('detail', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('photo_1') ? 'has-error' : ''}}">
    <label for="photo_1" class="control-label">{{ 'Photo 1' }}</label>
    <input class="form-control" name="photo_1" type="file" id="photo_1" value="{{ isset($award->photo_1) ? $award->photo_1 : ''}}" >
    {!! $errors->first('photo_1', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('photo_2') ? 'has-error' : ''}}">
    <label for="photo_2" class="control-label">{{ 'Photo 2' }}</label>
    <input class="form-control" name="photo_2" type="file" id="photo_2" value="{{ isset($award->photo_2) ? $award->photo_2 : ''}}" >
    {!! $errors->first('photo_2', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'แก้ไขข้อมูล' : 'เพิ่มข้อมูล' }}">
</div>
