@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <h3 class="card-header">โฆษณา</h3>
                    <div class="card-body">
                        <a href="{{ url('/advertise/create') }}" class="btn-success btn-sm" title="Add New Advertise">
                            <i class="fa fa-plus" aria-hidden="true"></i> เพิ่มโฆษณา
                        </a>

                        <form method="GET" action="{{ url('/advertise') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="ค้นหา..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>ชื่อกิจกรรม</th>
                                        <th>วันสิ้นสุดกิจกรรม</th>
                                        <th>รูปภาพ</th>
                                        <th>สถานะ</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($advertise as $item)
                                    @php
                                        $active = $item->active
                                    @endphp
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->dateline }}</td>
                                        <td><img src="{{ url('storage')}}/{{ $item->photo }}" alt=""></td>
                                        @if( $active  == "ใช้งาน")
                                        <td class="text-success">{{ $item->active }}</td>
                                        @endif
                                        @if( $active  == "ไม่ใช้งาน")
                                        <td class="text-danger">{{ $item->active }}</td>
                                        @endif
                                        <td>
                                            <a href="{{ url('/advertise/' . $item->id) }}" title="View Advertise"><button class="btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> ดูข้อมูล</button></a>
                                            <a href="{{ url('/advertise/' . $item->id . '/edit') }}" title="Edit Advertise"><button class="btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไขข้อมูล</button></a>

                                            <form method="POST" action="{{ url('/advertise' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn-danger btn-sm" title="Delete Advertise" onclick="return confirm(&quot;ยืนยันการลบ ?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> ลบ</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $advertise->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
