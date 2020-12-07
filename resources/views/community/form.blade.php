<div class="container">
    <div class="row">
        <!-- ฝั่งซ้าย -->
        <div class="col-lg-6">
            <!-- ประธานคณะกรรมการกลางหมู่บ้าน อพป -->
            <div class="row">
                <h4>ประธานคณะกรรมการกลางหมู่บ้าน อพป.</h4>
                <br><br>
                <div class="col-lg-7">
                    <div class="form-group {{ $errors->has('president') ? 'has-error' : ''}}">
                        <input class="form-control" name="president" type="text" id="president" value="{{ isset($community->president) ? $community->president : ''}}" placeholder="ประธานคณะกรรมการกลาง">
                        {!! $errors->first('president', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="form-group {{ $errors->has('president_img') ? 'has-error' : ''}}">
                        <input class="form-control" name="president_img" type="file" id="president_img" value="{{ isset($community->president_img) ? $community->president_img : ''}}" >
                        {!! $errors->first('president_img', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
            <hr>
            <!-- รองประธานคณะกรรมการกลางหมู่บ้าน อพป -->
            <div class="row">
                <h4>รองประธานคณะกรรมการกลางหมู่บ้าน อพป.</h4>
                <br><br>
                <div class="col-lg-7">
                    <div class="form-group {{ $errors->has('vice_President_1') ? 'has-error' : ''}}">
                        <input class="form-control" name="vice_President_1" type="text" id="vice_President_1" value="{{ isset($community->vice_President_1) ? $community->vice_President_1 : ''}}" placeholder="รองประธานคณะกรรมการกลาง คนที่ 1">
                        {!! $errors->first('vice_President_1', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="form-group {{ $errors->has('vice_President_1_img') ? 'has-error' : ''}}">
                        <input class="form-control" name="vice_President_1_img" type="file" id="vice_President_1_img" value="{{ isset($community->vice_President_1_img) ? $community->vice_President_1_img : ''}}" >
                        {!! $errors->first('vice_President_1_img', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>

            <div class="row">
                <br><br>
                <div class="col-lg-7">
                    <div class="form-group {{ $errors->has('vice_President_2') ? 'has-error' : ''}}">
                        <input class="form-control" name="vice_President_2" type="text" id="vice_President_2" value="{{ isset($community->vice_President_2) ? $community->vice_President_2 : ''}}" placeholder="รองประธานคณะกรรมการกลาง คนที่ 2">
                        {!! $errors->first('vice_President_2', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="form-group {{ $errors->has('vice_President_2_img') ? 'has-error' : ''}}">
                        <input class="form-control" name="vice_President_2_img" type="file" id="vice_President_2_img" value="{{ isset($community->vice_President_2_img) ? $community->vice_President_2_img : ''}}" >
                        {!! $errors->first('vice_President_2_img', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
            <hr>
        <!-- ฝั่งขวา -->
        </div>

        <div class="col-lg-6">
            <br><br><br><br>
            <center>
            <img width="60%" src="{{ asset('/img/klongarang/logologo.png') }}">
            </center>
        </div>
    </div>
</div>


<!-- <div class="d-none form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($community->name) ? $community->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div> -->

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <center>
                <h5>เลขานุการ หมู่บ้าน อพป.</h5><br><br>
            </center>
        </div>
        <!-- ฝั่งขวา -->
        <div class="col-lg-6">
            <div class="form-group {{ $errors->has('secretary_1') ? 'has-error' : ''}}">
                <input class="form-control" name="secretary_1" type="text" id="secretary_1" value="{{ isset($community->secretary_1) ? $community->secretary_1 : ''}}" placeholder="เลขานุการ คนที่ 1">
                {!! $errors->first('secretary_1', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('secretary_1_img') ? 'has-error' : ''}}">
                <input class="form-control" name="secretary_1_img" type="file" id="secretary_1_img" value="{{ isset($community->secretary_1_img) ? $community->secretary_1_img : ''}}" >
                {!! $errors->first('secretary_1_img', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <!-- ฝั่งซ้าย -->
        <div class="col-lg-6">
            <div class="form-group {{ $errors->has('secretary_2') ? 'has-error' : ''}}">
                <input class="form-control" name="secretary_2" type="text" id="secretary_2" value="{{ isset($community->secretary_2) ? $community->secretary_2 : ''}}" placeholder="เลขานุการ คนที่ 2">
                {!! $errors->first('secretary_2', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('secretary_2_img') ? 'has-error' : ''}}">
                <input class="form-control" name="secretary_2_img" type="file" id="secretary_2_img" value="{{ isset($community->secretary_2_img) ? $community->secretary_2_img : ''}}" >
                {!! $errors->first('secretary_2_img', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
</div>
<hr>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <center>
                <h5>คณะกรรมการกลางหมู่บ้าน อพป.</h5><br><br>
            </center>
        </div>
        <!-- ฝั่งขวา -->
        <div class="col-lg-6">
            <span>คณะกรรมการหมู่บ้าน อพป.โดยตำแหน่ง</span><br><br>
            <div class="form-group {{ $errors->has('board_by_position_1') ? 'has-error' : ''}}">
                <input class="form-control" name="board_by_position_1" type="text" id="board_by_position_1" value="{{ isset($community->board_by_position_1) ? $community->board_by_position_1 : ''}}" placeholder="คนที่ 1">
                {!! $errors->first('board_by_position_1', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('board_by_position_2') ? 'has-error' : ''}}">
                <input class="form-control" name="board_by_position_2" type="text" id="board_by_position_2" value="{{ isset($community->board_by_position_2) ? $community->board_by_position_2 : ''}}" placeholder="คนที่ 2">
                {!! $errors->first('board_by_position_2', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('board_by_position_3') ? 'has-error' : ''}}">
                <input class="form-control" name="board_by_position_3" type="text" id="board_by_position_3" value="{{ isset($community->board_by_position_3) ? $community->board_by_position_3 : ''}}" placeholder="คนที่ 3" >
                {!! $errors->first('board_by_position_3', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <!-- ฝั่งซ้าย -->
        <div class="col-lg-6">
            <span>คณะกรรมการหมู่บ้าน อพป.ผู้ทรงคุณวุฒิ</span><br><br>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group {{ $errors->has('board_by_experts_1') ? 'has-error' : ''}}">
                        <input class="form-control" name="board_by_experts_1" type="text" id="board_by_experts_1" value="{{ isset($community->board_by_experts_1) ? $community->board_by_experts_1 : ''}}" placeholder="คนที่ 1">
                        {!! $errors->first('board_by_experts_1', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('board_by_experts_2') ? 'has-error' : ''}}">
                        <input class="form-control" name="board_by_experts_2" type="text" id="board_by_experts_2" value="{{ isset($community->board_by_experts_2) ? $community->board_by_experts_2 : ''}}"  placeholder="คนที่ 2">
                        {!! $errors->first('board_by_experts_2', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('board_by_experts_3') ? 'has-error' : ''}}">
                        <input class="form-control" name="board_by_experts_3" type="text" id="board_by_experts_3" value="{{ isset($community->board_by_experts_3) ? $community->board_by_experts_3 : ''}}"  placeholder="คนที่ 3">
                        {!! $errors->first('board_by_experts_3', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('board_by_experts_4') ? 'has-error' : ''}}">
                        <input class="form-control" name="board_by_experts_4" type="text" id="board_by_experts_4" value="{{ isset($community->board_by_experts_4) ? $community->board_by_experts_4 : ''}}"  placeholder="คนที่ 4">
                        {!! $errors->first('board_by_experts_4', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('board_by_experts_5') ? 'has-error' : ''}}">
                        <input class="form-control" name="board_by_experts_5" type="text" id="board_by_experts_5" value="{{ isset($community->board_by_experts_5) ? $community->board_by_experts_5 : ''}}"  placeholder="คนที่ 5">
                        {!! $errors->first('board_by_experts_5', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group {{ $errors->has('board_by_experts_6') ? 'has-error' : ''}}">
                        <input class="form-control" name="board_by_experts_6" type="text" id="board_by_experts_6" value="{{ isset($community->board_by_experts_6) ? $community->board_by_experts_6 : ''}}" placeholder="คนที่ 6" >
                        {!! $errors->first('board_by_experts_6', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('board_by_experts_7') ? 'has-error' : ''}}">
                        <input class="form-control" name="board_by_experts_7" type="text" id="board_by_experts_7" value="{{ isset($community->board_by_experts_7) ? $community->board_by_experts_7 : ''}}" placeholder="คนที่ 7">
                        {!! $errors->first('board_by_experts_7', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('board_by_experts_8') ? 'has-error' : ''}}">
                        <input class="form-control" name="board_by_experts_8" type="text" id="board_by_experts_8" value="{{ isset($community->board_by_experts_8) ? $community->board_by_experts_8 : ''}}" placeholder="คนที่ 8">
                        {!! $errors->first('board_by_experts_8', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('board_by_experts_9') ? 'has-error' : ''}}">
                        <input class="form-control" name="board_by_experts_9" type="text" id="board_by_experts_9" value="{{ isset($community->board_by_experts_9) ? $community->board_by_experts_9 : ''}}" placeholder="คนที่ 9">
                        {!! $errors->first('board_by_experts_9', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <center>
                <h5>กรรมการกลางหมู่บ้าน อพป.</h5><br><br>
            </center>
        </div>
        <!-- ฝั่งขวา -->
        <div class="col-lg-6">
            <span>คณะกรรมการพัฒนา</span><br><br>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group {{ $errors->has('expand_1') ? 'has-error' : ''}}">
                        <input class="form-control" name="expand_1" type="text" id="expand_1" value="{{ isset($community->expand_1) ? $community->expand_1 : ''}}" placeholder="คนที่ 1">
                        {!! $errors->first('expand_1', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('expand_2') ? 'has-error' : ''}}">
                        <input class="form-control" name="expand_2" type="text" id="expand_2" value="{{ isset($community->expand_2) ? $community->expand_2 : ''}}" placeholder="คนที่ 2">
                        {!! $errors->first('expand_2', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group {{ $errors->has('expand_3') ? 'has-error' : ''}}">
                        <input class="form-control" name="expand_3" type="text" id="expand_3" value="{{ isset($community->expand_3) ? $community->expand_3 : ''}}" placeholder="คนที่ 3">
                        {!! $errors->first('expand_3', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('expand_4') ? 'has-error' : ''}}">
                        <input class="form-control" name="expand_4" type="text" id="expand_4" value="{{ isset($community->expand_4) ? $community->expand_4 : ''}}" placeholder="คนที่ 4">
                        {!! $errors->first('expand_4', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
        </div>
        <!-- ฝั่งซ้าย -->
        <div class="col-lg-6">
            <span>คณะกรรมการการปกครอง</span><br><br>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group {{ $errors->has('rule_1') ? 'has-error' : ''}}">
                        <input class="form-control" name="rule_1" type="text" id="rule_1" value="{{ isset($community->rule_1) ? $community->rule_1 : ''}}" placeholder="คนที่ 1">
                        {!! $errors->first('rule_1', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('rule_2') ? 'has-error' : ''}}">
                        <input class="form-control" name="rule_2" type="text" id="rule_2" value="{{ isset($community->rule_2) ? $community->rule_2 : ''}}" placeholder="คนที่ 2">
                        {!! $errors->first('rule_2', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group {{ $errors->has('rule_3') ? 'has-error' : ''}}">
                        <input class="form-control" name="rule_3" type="text" id="rule_3" value="{{ isset($community->rule_3) ? $community->rule_3 : ''}}" placeholder="คนที่ 3">
                        {!! $errors->first('rule_3', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('expand_4') ? 'has-error' : ''}}">
                        <input class="form-control" name="expand_4" type="text" id="expand_4" value="{{ isset($community->expand_4) ? $community->expand_4 : ''}}" placeholder="คนที่ 4">
                        {!! $errors->first('expand_4', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
        <br><br><br>
        </div>

        <div class="col-lg-6">
            <span>คณะกรรมการป้องกันและรักษาความปลอดภัย</span><br><br>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group {{ $errors->has('protection_1') ? 'has-error' : ''}}">
                        <input class="form-control" name="protection_1" type="text" id="protection_1" value="{{ isset($community->protection_1) ? $community->protection_1 : ''}}" placeholder="คนที่ 1">
                        {!! $errors->first('protection_1', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('protection_2') ? 'has-error' : ''}}">
                        <input class="form-control" name="protection_2" type="text" id="protection_2" value="{{ isset($community->protection_2) ? $community->protection_2 : ''}}" placeholder="คนที่ 2">
                        {!! $errors->first('protection_2', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('protection_3') ? 'has-error' : ''}}">
                        <input class="form-control" name="protection_3" type="text" id="protection_3" value="{{ isset($community->protection_3) ? $community->protection_3 : ''}}" placeholder="คนที่ 3">
                        {!! $errors->first('protection_3', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group {{ $errors->has('protection_4') ? 'has-error' : ''}}">
                        <input class="form-control" name="protection_4" type="text" id="protection_4" value="{{ isset($community->protection_4) ? $community->protection_4 : ''}}" placeholder="คนที่ 4">
                        {!! $errors->first('protection_4', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('protection_5') ? 'has-error' : ''}}">
                        <input class="form-control" name="protection_5" type="text" id="protection_5" value="{{ isset($community->protection_5) ? $community->protection_5 : ''}}" placeholder="คนที่ 5">
                        {!! $errors->first('protection_5', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
        </div>
        <!-- ฝั่งซ้าย -->
        <div class="col-lg-6">
            <span>คณะกรรมการการคลัง</span><br><br>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group {{ $errors->has('finance_1') ? 'has-error' : ''}}">
                        <input class="form-control" name="finance_1" type="text" id="finance_1" value="{{ isset($community->finance_1) ? $community->finance_1 : ''}}" placeholder="คนที่ 1">
                        {!! $errors->first('finance_1', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('finance_2') ? 'has-error' : ''}}">
                        <input class="form-control" name="finance_2" type="text" id="finance_2" value="{{ isset($community->finance_2) ? $community->finance_2 : ''}}" placeholder="คนที่ 2">
                        {!! $errors->first('finance_2', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group {{ $errors->has('finance_3') ? 'has-error' : ''}}">
                        <input class="form-control" name="finance_3" type="text" id="finance_3" value="{{ isset($community->finance_3) ? $community->finance_3 : ''}}" placeholder="คนที่ 3">
                        {!! $errors->first('finance_3', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('finance_4') ? 'has-error' : ''}}">
                        <input class="form-control" name="finance_4" type="text" id="finance_4" value="{{ isset($community->finance_4) ? $community->finance_4 : ''}}" placeholder="คนที่ 4">
                        {!! $errors->first('finance_4', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
        <br><br><br>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="row">
                <span>คณะกรรมการการสาธารณสุข</span><br><br>
                <div class="form-group {{ $errors->has('public_health_1') ? 'has-error' : ''}}">
                    <input class="form-control" name="public_health_1" type="text" id="public_health_1" value="{{ isset($community->public_health_1) ? $community->public_health_1 : ''}}" placeholder="คนที่ 1">
                    {!! $errors->first('public_health_1', '<p class="help-block">:message</p>') !!}
                </div>
                <div class="form-group {{ $errors->has('public_health_2') ? 'has-error' : ''}}">
                    <input class="form-control" name="public_health_2" type="text" id="public_health_2" value="{{ isset($community->public_health_2) ? $community->public_health_2 : ''}}" placeholder="คนที่ 2">
                    {!! $errors->first('public_health_2', '<p class="help-block">:message</p>') !!}
                </div>
                <div class="form-group {{ $errors->has('public_health_3') ? 'has-error' : ''}}">
                    <input class="form-control" name="public_health_3" type="text" id="public_health_3" value="{{ isset($community->public_health_3) ? $community->public_health_3 : ''}}" placeholder="คนที่ 3">
                    {!! $errors->first('public_health_3', '<p class="help-block">:message</p>') !!}
                </div>
                <div class="form-group {{ $errors->has('public_health_4') ? 'has-error' : ''}}">
                    <input class="form-control" name="public_health_4" type="text" id="public_health_4" value="{{ isset($community->public_health_4) ? $community->public_health_4 : ''}}" placeholder="คนที่ 4">
                    {!! $errors->first('public_health_4', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row">
                <span>คณะกรรมการสวัสดิการสังคม</span><br><br>
                <div class="form-group {{ $errors->has('welfare_1') ? 'has-error' : ''}}">
                    <input class="form-control" name="welfare_1" type="text" id="welfare_1" value="{{ isset($community->welfare_1) ? $community->welfare_1 : ''}}" placeholder="คนที่ 1">
                    {!! $errors->first('welfare_1', '<p class="help-block">:message</p>') !!}
                </div>
                <div class="form-group {{ $errors->has('welfare_2') ? 'has-error' : ''}}">
                    <input class="form-control" name="welfare_2" type="text" id="welfare_2" value="{{ isset($community->welfare_2) ? $community->welfare_2 : ''}}" placeholder="คนที่ 2">
                    {!! $errors->first('welfare_2', '<p class="help-block">:message</p>') !!}
                </div>
                <div class="form-group {{ $errors->has('welfare_3') ? 'has-error' : ''}}">
                    <input class="form-control" name="welfare_3" type="text" id="welfare_3" value="{{ isset($community->welfare_3) ? $community->welfare_3 : ''}}" placeholder="คนที่ 3">
                    {!! $errors->first('welfare_3', '<p class="help-block">:message</p>') !!}
                </div>
                <div class="form-group {{ $errors->has('welfare_4') ? 'has-error' : ''}}">
                    <input class="form-control" name="welfare_4" type="text" id="welfare_4" value="{{ isset($community->welfare_4) ? $community->welfare_4 : ''}}" placeholder="คนที่ 4">
                    {!! $errors->first('welfare_4', '<p class="help-block">:message</p>') !!}
                </div>
                <div class="form-group {{ $errors->has('welfare_5') ? 'has-error' : ''}}">
                    <input class="form-control" name="welfare_5" type="text" id="welfare_5" value="{{ isset($community->welfare_5) ? $community->welfare_5 : ''}}" placeholder="คนที่ 5">
                    {!! $errors->first('welfare_5', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row">
                <span>คณะกรรมการการศึกษาและวัฒนธรรม</span><br><br>
                <div class="form-group {{ $errors->has('education_1') ? 'has-error' : ''}}">
                    <input class="form-control" name="education_1" type="text" id="education_1" value="{{ isset($community->education_1) ? $community->education_1 : ''}}" placeholder="คนที่ 1">
                    {!! $errors->first('education_1', '<p class="help-block">:message</p>') !!}
                </div>
                <div class="form-group {{ $errors->has('education_2') ? 'has-error' : ''}}">
                    <input class="form-control" name="education_2" type="text" id="education_2" value="{{ isset($community->education_2) ? $community->education_2 : ''}}" placeholder="คนที่ 2">
                    {!! $errors->first('education_2', '<p class="help-block">:message</p>') !!}
                </div>
                <div class="form-group {{ $errors->has('education_3') ? 'has-error' : ''}}">
                    <input class="form-control" name="education_3" type="text" id="education_3" value="{{ isset($community->education_3) ? $community->education_3 : ''}}" placeholder="คนที่ 3">
                    {!! $errors->first('education_3', '<p class="help-block">:message</p>') !!}
                </div>
                <div class="form-group {{ $errors->has('education_4') ? 'has-error' : ''}}">
                    <input class="form-control" name="education_4" type="text" id="education_4" value="{{ isset($community->education_4) ? $community->education_4 : ''}}" placeholder="คนที่ 4">
                    {!! $errors->first('education_4', '<p class="help-block">:message</p>') !!}
                </div>
                <div class="form-group {{ $errors->has('education_5') ? 'has-error' : ''}}">
                    <input class="form-control" name="education_5" type="text" id="education_5" value="{{ isset($community->education_5) ? $community->education_5 : ''}}" placeholder="คนที่ 5">
                    {!! $errors->first('education_5', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </div>
    </div>
</div>
<hr>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'แก้ไขข้อมูล' : 'เพิ่มข้อมูล' }}">
</div>
