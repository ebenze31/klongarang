<div class="row">
    <div class="col-lg-6 col-md-6">
        <div>
            <label for="category" class="control-label">{{ 'หมวดหมู่' }}</label><span style="color: #FF0033;font-size: 13px;"> (เลือกได้มากกว่า 1 ข้อ)</span>
            <div><input name="food" id="food" type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;อาหาร </div> 
            <div><input name="gift" id="gift" type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ของที่ระลึก</div>
            <div><input name="agricultural" id="agricultural" type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สินค้าทางการเกษตร</div>
            <div><input name="bamboo" id="bamboo" type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ผลิตภัณฑ์จากไผ่</div>
        </div><br>
        <div class="d-none form-group {{ $errors->has('category') ? 'has-error' : ''}}">
            <label for="category" class="control-label">{{ 'หมวดหมู่' }}</label><span style="color: #FF0033"> *</span>
            <select name="category" class="form-control" id="category" >
            @foreach (json_decode('{"\u0e2d\u0e32\u0e2b\u0e32\u0e23":"\u0e2d\u0e32\u0e2b\u0e32\u0e23","\u0e02\u0e2d\u0e07\u0e17\u0e35\u0e48\u0e23\u0e30\u0e25\u0e36\u0e01":"\u0e02\u0e2d\u0e07\u0e17\u0e35\u0e48\u0e23\u0e30\u0e25\u0e36\u0e01","\u0e2a\u0e34\u0e19\u0e04\u0e49\u0e32\u0e17\u0e32\u0e07\u0e01\u0e32\u0e23\u0e40\u0e01\u0e29\u0e15\u0e23":"\u0e2a\u0e34\u0e19\u0e04\u0e49\u0e32\u0e17\u0e32\u0e07\u0e01\u0e32\u0e23\u0e40\u0e01\u0e29\u0e15\u0e23","\u0e1c\u0e25\u0e34\u0e15\u0e20\u0e31\u0e13\u0e11\u0e4c\u0e08\u0e32\u0e01\u0e44\u0e1c\u0e48":"\u0e1c\u0e25\u0e34\u0e15\u0e20\u0e31\u0e13\u0e11\u0e4c\u0e08\u0e32\u0e01\u0e44\u0e1c\u0e48"}', true) as $optionKey => $optionValue)
                <option value="{{ $optionKey }}" {{ (isset($product->category) && $product->category == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
            @endforeach
        </select>
            {!! $errors->first('category', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
            <label for="name" class="control-label">{{ 'ชื่อ' }}</label><span style="color: #FF0033"> *</span>
            <input class="form-control" name="name" type="text" id="name" value="{{ isset($product->name) ? $product->name : ''}}" required >
            {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group {{ $errors->has('detail') ? 'has-error' : ''}}">
            <label for="detail" class="control-label">{{ 'รายละเอียด' }}</label><span style="color: #FF0033"> *</span>
            <textarea class="form-control" rows="5" name="detail" type="textarea" id="detail" required>{{ isset($product->detail) ? $product->detail : ''}}</textarea>
            {!! $errors->first('detail', '<p class="help-block">:message</p>') !!}
        </div>


        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'แก้ไขข้อมูล' : 'เพิ่มข้อมูล' }}">
        </div>

    </div>

    <div class="col-lg-6 col-md-6">
        <div class="form-group {{ $errors->has('benefit') ? 'has-error' : ''}}">
            <label for="benefit" class="control-label">{{ 'สรรพคุณ , ประโยชน์' }}</label><span style="color: #FF0033"> *</span>
            <textarea class="form-control" rows="5" name="benefit" type="textarea" id="benefit" required >{{ isset($product->benefit) ? $product->benefit : ''}}</textarea>
            {!! $errors->first('benefit', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group {{ $errors->has('how_to_use') ? 'has-error' : ''}}">
            <label for="how_to_use" class="control-label">{{ 'วิธีใช้' }}</label><span style="color: #FF0033"> *</span>
            <textarea class="form-control" rows="5" name="how_to_use" type="textarea" id="how_to_use" required >{{ isset($product->how_to_use) ? $product->how_to_use : ''}}</textarea>
            {!! $errors->first('how_to_use', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group {{ $errors->has('photo') ? 'has-error' : ''}}">
            <label for="photo" class="control-label">{{ 'รูปภาพ' }}</label><span style="color: #FF0033"> *</span>
            <input class="form-control" name="photo" type="file" id="photo" value="{{ isset($product->photo) ? $product->photo : ''}}" >
            {!! $errors->first('photo', '<p class="help-block">:message</p>') !!}
        </div>

    </div>
