@extends('layout.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br>
            <div style="background:none; border:none" class="card">
                <div class="card-body">
                    <h2 style="text-shadow: 1px 1px #FF0000 " class="text-white">รางวัลที่ได้รับ</h2>

                    <form method="GET" action="{{ url('/award') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                    @if(Auth::check())
                        @if(Auth::user()->profile->role == "คนดูแล" )
                            <a href="{{ url('/award/create') }}" class="btn-success btn-sm" title="Add New Award">
                                <i class="fa fa-plus" aria-hidden="true"></i> เพิ่มข้อมูล
                            </a>
                        @endif
                    @endif
                    <br/>
                    <br/>

                    <!-- <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th><th>Name</th><th>Detail</th><th>Photo 1</th><th>Photo 2</th><th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($award as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td><td>{{ $item->detail }}</td><td>{{ $item->photo_1 }}</td><td>{{ $item->photo_2 }}</td>
                                    <td>
                                        <a href="{{ url('/award/' . $item->id) }}" title="View Award"><button class="d-none btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        <a href="{{ url('/award/' . $item->id . '/edit') }}" title="Edit Award"><button class="btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไขข้อมูล</button></a>

                                        <form method="POST" action="{{ url('/award' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn-danger btn-sm" title="Delete Award" onclick="return confirm(&quot;ยืนยันการลบ ?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper"> {!! $award->appends(['search' => Request::get('search')])->render() !!} </div>
                    </div> -->

                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        @foreach($award as $item)
        <div class="col-md-3">
            <div class="card" style="width: 18rem;background-color: #c8f9f1">
              <img style="border-radius: 15px; padding: 10px;background-color: #c8f9f1" src="{{ url('storage')}}/{{ $item->photo_1 }}" class="card-img-top" alt="...">
              <div style="background-color: #e3fcf8" class="card-body">
                <br>
                <h4 class="card-title">{{ $item->name }}</h4>
                <p class="card-text">{{ $item->detail }}</p>
                <br>
                @if(Auth::check())
                    @if(Auth::user()->profile->role == "คนดูแล" )
                        <a href="{{ url('/award/' . $item->id . '/edit') }}" title="Edit Award"><button class="btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไขข้อมูล</button></a>
                        <form method="POST" action="{{ url('/award' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn-danger btn-sm" title="Delete Award" onclick="return confirm(&quot;ยืนยันการลบ ?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                    @endif
                @endif
              </div>
            </div>
            <br>
        </div>
        @endforeach
    </div>
</div>
@endsection
