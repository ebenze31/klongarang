@extends('layout.main')

@section('content')


<section class="whats-news-area pt-50 pb-20">
    <div class="container">
        <div class="row">
        <div class="col-lg-12">
            <div class="row d-flex justify-content-between">
                <div class="col-lg-4 col-md-4">
                    <div class="section-tittle mb-30">
                        <h2 style="text-shadow: 1px 1px #FF0000 " class="text-white">โฮมสเตย์</h2>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    
                </div>
                <div class="col-lg-12">
                    @if(Auth::check())
                            @if(Auth::user()->profile->role == "คนดูแล" )

                            <a href="{{ url('/homestay/create') }}" class="btn-success btn-sm" title="Add New homestay">
                                <i class="fa fa-plus" aria-hidden="true"></i> เพิ่มข้อมูล
                            </a>
                            @endif
                        @endif
                        <form method="GET" action="{{ url('/homestay') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="ค้นหา..." value="{{ request('search') }}">
                            <span class="input-group-append">
                                <button class="btn-info" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <hr>
            
            <div class="row">
                <div class="col-12">
                    <!-- Nav Card -->
                    <div class="tab-content" id="nav-tabContent">
                        <!-- card one -->
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">           
                            <div class="whats-news-caption">
                                <div class="row">
                                    @foreach($homestay as $item)
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-what-news mb-100">
                                            <div class="card" style="background:none; border:none ">
                                                <div class="what-img">
                                                    <img width="350" height="320" src="{{ url('storage')}}/{{ $item->photo_1 }}" alt="">
                                                </div>
                                                <div>
                                                    <br>
                                                @if($item->category == "เชิงวัฒนธรรม" )
                                                    <span class="color1">
                                                @endif

                                                @if($item->category == "เชิงเกษตร" )
                                                    <span class="color2">
                                                @endif

                                                @if($item->category == "กิจกรรมแลกเปลี่ยนเรียนรู้" )
                                                    <span class="color3">
                                                @endif

                                                        &nbsp;&nbsp;&nbsp;{{ $item->category }}&nbsp;&nbsp;&nbsp;</span>
                                                    <h4><br><a style="color: #fc3f00 !important" href="{{ url('/homestay/' . $item->id) }}">"{{ $item->name }}"</a></h4>
                                                    <!-- <p>{{ $item->detail }}</p> -->
                                                    <br>
                                                </div>
                                                <div>
                                                    <a href="{{ url('/homestay/' . $item->id) }}" title="View homestay"><button class="btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> ดูข้อมูล</button></a>
                                                    @if(Auth::check())
                                                        @if(Auth::user()->profile->role == "คนดูแล" )
                                                            
                                                            <a href="{{ url('/homestay/' . $item->id . '/edit') }}" title="Edit homestay"><button class="btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไขข้อมูล</button></a>

                                                            <form method="POST" action="{{ url('/homestay' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                                {{ method_field('DELETE') }}
                                                                {{ csrf_field() }}
                                                                <button type="submit" class="btn-danger btn-sm" title="Delete homestay" onclick="return confirm(&quot;ยืนยันการลบ ?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> ลบ</button>
                                                            </form>
                                                        @endif
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div> 
                                <div class="pagination-wrapper"> {!! $homestay->appends(['search' => Request::get('search')])->render() !!} </div>
                            </div>
                        </div>

                        @if(Auth::check())
                            @if(Auth::user()->profile->role == "คนดูแล" )

                            <a href="{{ url('/homestay/detail_homestay') }}" class="btn-success btn-sm" title="Add New homestay">
                                <i class="fa fa-plus" aria-hidden="true"></i> ดูข้อมูลทั้งหมด
                            </a>
                            @endif
                        @endif

                <!-- End Nav Card -->
                </div>
            </div>
        </div>
        </div>
    </div>
</section>

@endsection