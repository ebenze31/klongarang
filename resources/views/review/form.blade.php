<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                <h5 for="name" class="control-label">{{ 'กรุณากรอกชื่อ' }}<span style="color: #FF0033;font-size: 13px;"> *</span></h5><br>
                <input class="form-control" name="name" type="text" id="name" value="{{ isset($review->name) ? $review->name : ''}}" placeholder="ชื่อเล่นหรือชื่อจริง" required>
                {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                <br>
            </div>
            <div class="form-group {{ $errors->has('get_score') ? 'has-error' : ''}}">
                <h5 for="get_score" class="control-label">{{ 'ให้คะแนนความประทับใจ' }}<span style="color: #FF0033;font-size: 13px;"> *</span></h5>
                <br>
                <!-- <input class="form-control" name="get_score" type="number" id="get_score" value="{{ isset($review->get_score) ? $review->get_score : ''}}" min="1" max="5" placeholder="ใส่คะแนน 1-5 (5 คือมากทีสุด)"required> -->
                <select name="get_score" class="form-control" id="get_score" required >
                    <option value="" selected >- ให้คะแนนความประทับใจ - </option> 
                        @foreach (json_decode('{"1":"1","2":"2","3":"3","4":"4","5":"5"}', true) as $optionKey => $optionValue)
                        <option value="{{ $optionKey }}"  {{ (isset($review->get_score) && $review->get_score == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                    @endforeach
                </select>
                    {!! $errors->first('get_score', '<p class="help-block">:message</p>') !!}
            </div>
            <br><br><br>
            <div class="form-group {{ $errors->has('comment') ? 'has-error' : ''}}">
                <h5 for="comment" class="control-label">{{ 'แบ่งปันความประทับใจของคุณ' }}<span style="color: #FF0033;font-size: 13px;"> *</span></h5>
                <br>
                <textarea class="form-control" rows="6" name="comment" type="textarea" id="comment" required placeholder="ความประทับใจของคุณ" >{{ isset($product->comment) ? $product->comment : ''}}</textarea>
                {!! $errors->first('comment', '<p class="help-block">:message</p>') !!}
            </div>
            <br>
            <!-- <div class="form-group {{ $errors->has('share') ? 'has-error' : ''}}">
                <h5 for="share" class="control-label">{{ 'ถ้ามีโอกาสจะกลับมาอีกครั้ง' }}</h5>
                <br>
                <input type="radio" id="share" name="share" value="{{ isset($review->share) ? $review->share : 'yes'}}" >&nbsp;&nbsp;&nbsp;ใช่&nbsp;&nbsp;&nbsp;
                <input type="radio" id="share" name="share" value="no">&nbsp;&nbsp;&nbsp;ไม่ใช่

                <input class="form-control" name="share" type="text" id="share" value="{{ isset($review->share) ? $review->share : ''}}" >
                {!! $errors->first('share', '<p class="help-block">:message</p>') !!}
            </div> -->
        </div>
        <div class="col-md-5">
            <h5  class="control-label">{{ 'แบ่งปันภาพความประทับใจของคุณ' }}</h5>
            <br>
            <div class="form-group {{ $errors->has('photo_1') ? 'has-error' : ''}}">
                <input class="form-control" name="photo_1" type="file" id="photo_1" value="{{ isset($review->photo_1) ? $review->photo_1 : ''}}" onchange="document.querySelector('#photo_2').classList.remove('d-none');">
                {!! $errors->first('photo_1', '<p class="help-block">:message</p>') !!}
            </div>
            <br>
            <div class="form-group {{ $errors->has('photo_2') ? 'has-error' : ''}}">
                <input class="d-none form-control" name="photo_2" type="file" id="photo_2" value="{{ isset($review->photo_2) ? $review->photo_2 : ''}}" onchange="document.querySelector('#photo_3').classList.remove('d-none');">
                {!! $errors->first('photo_2', '<p class="help-block">:message</p>') !!}
            </div>
            <br>
            <div class="form-group {{ $errors->has('photo_3') ? 'has-error' : ''}}">
                <input class="d-none form-control" name="photo_3" type="file" id="photo_3" value="{{ isset($review->photo_3) ? $review->photo_3 : ''}}" onchange="document.querySelector('#photo_4').classList.remove('d-none');">
                {!! $errors->first('photo_3', '<p class="help-block">:message</p>') !!}
            </div>
            <br>
            <div class="form-group {{ $errors->has('photo_4') ? 'has-error' : ''}}">
                <input class="d-none form-control" name="photo_4" type="file" id="photo_4" value="{{ isset($review->photo_4) ? $review->photo_4 : ''}}" onchange="document.querySelector('#photo_5').classList.remove('d-none');">
                {!! $errors->first('photo_4', '<p class="help-block">:message</p>') !!}
            </div>
            <br>
            <div class="form-group {{ $errors->has('photo_5') ? 'has-error' : ''}}">
                <input class="d-none form-control" name="photo_5" type="file" id="photo_5" value="{{ isset($review->photo_5) ? $review->photo_5 : ''}}" >
                {!! $errors->first('photo_5', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
</div>
<!-- รูป -->
            


<!-- <div class="form-group {{ $errors->has('total_score') ? 'has-error' : ''}}">
    <label for="total_score" class="control-label">{{ 'Total Score' }}</label>
    <input class="form-control" name="total_score" type="number" id="total_score" value="{{ isset($review->total_score) ? $review->total_score : ''}}" >
    {!! $errors->first('total_score', '<p class="help-block">:message</p>') !!}
</div> -->

<div class="form-group {{ $errors->has('total_user') ? 'has-error' : ''}}">
    <input class="form-control" name="total_user" type="hidden" id="total_user" value="1" readonly>
    {!! $errors->first('total_user', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'แก้ไขข้อมูล' : 'เพิ่มข้อมูล' }}">
</div>
