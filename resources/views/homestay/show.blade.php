@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <h3 class="card-header">โฮมสเตย์หลังที่ {{ $homestay->id }}</h3>
                    <div class="card-body">

                        <a href="{{ url('/homestay') }}" title="Back"><button class="btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> ย้อนกลับ</button></a>
                        <a href="{{ url('/homestay/' . $homestay->id . '/edit') }}" title="Edit Homestay"><button class="btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไขข้อมูล</button></a>

                        <form method="POST" action="{{ url('homestay' . '/' . $homestay->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn-danger btn-sm" title="Delete Homestay" onclick="return confirm(&quot;ยืนยันการลบ ?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> ลบ</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>หลังที่</th>
                                        <td>{{ $homestay->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> ชื่อเจ้าของบ้าน </th>
                                        <td> {{ $homestay->name }} </td>
                                    </tr>
                                    <tr>
                                        <th> บ้านเลขที่ </th>
                                        <td> {{ $homestay->home }} </td>
                                    </tr>
                                    <tr>
                                        <th> รูปที่ 1 </th>
                                        <td><img width="150" src="{{ url('storage')}}/{{ $homestay->photo_1 }}"></td>
                                    </tr>
                                    <tr>
                                        <th> รูปที่ 2 </th>
                                        <td><img width="150" src="{{ url('storage')}}/{{ $homestay->photo_2 }}"></td>
                                    </tr>
                                    <tr>
                                        <th> รูปที่ 3 </th>
                                        <td><img width="150" src="{{ url('storage')}}/{{ $homestay->photo_3 }}"></td>
                                    </tr>
                                    <tr>
                                        <th> รูปที่ 4 </th>
                                        <td><img width="150" src="{{ url('storage')}}/{{ $homestay->photo_4 }}"></td>
                                    </tr>
                                    <tr>
                                        <th> รูปที่ 5 </th>
                                        <td><img width="150" src="{{ url('storage')}}/{{ $homestay->photo_5 }}"></td>
                                    </tr>
                                    <tr>
                                        <th> รูปที่ 6 </th>
                                        <td><img width="150" src="{{ url('storage')}}/{{ $homestay->photo_6 }}"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
