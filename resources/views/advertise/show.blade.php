@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <h3 class="card-header">โฆษณาที่ {{ $advertise->id }}</h3>
                    <div class="card-body">

                        <a href="{{ url('/advertise') }}" title="Back"><button class="btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> ย้อนกลับ</button></a>
                        <a href="{{ url('/advertise/' . $advertise->id . '/edit') }}" title="Edit Advertise"><button class="btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไขข้อมูล</button></a>

                        <form method="POST" action="{{ url('advertise' . '/' . $advertise->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn-danger btn-sm" title="Delete Advertise" onclick="return confirm(&quot;ยืนัยนการลบ ?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> ลบ</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>โฆษณาที่</th>
                                        <td>{{ $advertise->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> ชื่อกิจกรรม </th>
                                        <td> {{ $advertise->name }} </td>
                                    </tr>
                                    <tr>
                                        <th> วันสิ้นสุดกิจกรรม </th>
                                        <td> {{ $advertise->dateline }} </td>
                                    </tr>
                                    <tr>
                                        <th> สถานะ </th>
                                        <td> {{ $advertise->active }} </td>
                                    </tr>
                                    <tr>
                                        <th> รูปภาพ </th>
                                        <td> <img src="{{ url('storage')}}/{{ $advertise->photo }}" alt=""> </td>
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
