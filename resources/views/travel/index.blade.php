@extends('layout.main')

@section('content')


<section class="whats-news-area pt-50 pb-20">
    <div class="container">
        <div class="row">
        <div class="col-lg-12">
            <div class="row d-flex justify-content-between">
                <div class="col-lg-4 col-md-4">
                    <div class="section-tittle mb-30">
                        <h2 style="text-shadow: 1px 1px #FF0000 " class="text-white">แหล่งท่องเที่ยวและกิจกรรม</h2>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="properties__button">
                        <!--Nav Button  -->                                            
                        <nav>                                                                     
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">ทั้งหมด</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">เชิงเกษตร</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">เชิงวัฒนธรรม</a>
                                <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">กิจกรรมแลกเปลี่ยนเรียนรู้</a>
                                <a class="nav-item nav-link" id="nav-check_in-tab" data-toggle="tab" href="#nav-check_in" role="tab" aria-controls="nav-contact" aria-selected="false">จุดเช็คอิน</a>
                                
                            </div>
                        </nav>
                        <!--End Nav Button  -->
                    </div>
                </div>
                <div class="col-lg-12">
                    @if(Auth::check())
                            @if(Auth::user()->profile->role == "คนดูแล" )

                            <a href="{{ url('/travel/create') }}" class="btn-success btn-sm" title="Add New Travel">
                                <i class="fa fa-plus" aria-hidden="true"></i> เพิ่มข้อมูล
                            </a>
                            @endif
                        @endif
                        <form method="GET" action="{{ url('/travel') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                    @foreach($travel as $item)
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-what-news mb-100">
                                            <div class="card" style="background:none; border:none ">
                                                <div class="what-img">
                                                    <img width="350" height="320" src="{{ url('storage')}}/{{ $item->photo_1 }}" alt="">
                                                </div>
                                                <div>
                                                    <br>
                                                @if($item->agriculture == "on" )
                                                    <span style="border-radius: 10px;" class="color2">&nbsp;&nbsp;&nbsp;เชิงเกษตร&nbsp;&nbsp;&nbsp;</span>
                                                @endif

                                                @if($item->culture == "on" )
                                                    <span style="border-radius: 10px;" class="color1">&nbsp;&nbsp;&nbsp;เชิงวัฒนธรรม&nbsp;&nbsp;&nbsp;</span>
                                                @endif
                                                @if($item->learn == "on" )
                                                    <span style="border-radius: 10px;" class="color3">&nbsp;&nbsp;&nbsp;กิจกรรมแลกเปลี่ยนเรียนรู้&nbsp;&nbsp;&nbsp;</span>
                                                @endif
                                                @if($item->check_in == "on" )
                                                    <span style="border-radius: 10px;" class="color3">&nbsp;&nbsp;&nbsp;จุดเช็คอิน&nbsp;&nbsp;&nbsp;</span>
                                                @endif
                                                    <h4><br><a style="color: #fc3f00 !important" href="{{ url('/travel/' . $item->id) }}">"{{ $item->name }}"</a></h4>
                                                    <!-- <p>{{ $item->detail }}</p> -->
                                                    <br>
                                                </div>
                                                <div>
                                                    <a href="{{ url('/travel/' . $item->id) }}" title="View Travel"><button class="btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> ดูข้อมูล</button></a>
                                                    @if(Auth::check())
                                                        @if(Auth::user()->profile->role == "คนดูแล" )
                                                            
                                                            <a href="{{ url('/travel/' . $item->id . '/edit') }}" title="Edit Travel"><button class="btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไขข้อมูล</button></a>

                                                            <form method="POST" action="{{ url('/travel' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                                {{ method_field('DELETE') }}
                                                                {{ csrf_field() }}
                                                                <button type="submit" class="btn-danger btn-sm" title="Delete Travel" onclick="return confirm(&quot;ยืนยันการลบ ?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> ลบ</button>
                                                            </form>
                                                        @endif
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div> 
                                <div class="pagination-wrapper"> {!! $travel->appends(['search' => Request::get('search')])->render() !!} </div>
                            </div>
                        </div>

                        <!-- Card two -->
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="whats-news-caption">
                                <div class="row">
                                    @foreach($travel as $item)
                                    @if($item->agriculture == "on" )
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img width="350" height="320" src="{{ url('storage')}}/{{ $item->photo_1 }}" alt="">
                                            </div>
                                            <div>
                                                <br>
                                                <span style="border-radius: 10px;" class="color2">&nbsp;&nbsp;&nbsp;เชิงเกษตร&nbsp;&nbsp;&nbsp;</span>
                                                @if($item->culture == "on" )
                                                    <span style="border-radius: 10px;" class="color1">&nbsp;&nbsp;&nbsp;เชิงวัฒนธรรม&nbsp;&nbsp;&nbsp;</span>
                                                @endif
                                                @if($item->learn == "on" )
                                                    <span style="border-radius: 10px;" class="color3">&nbsp;&nbsp;&nbsp;กิจกรรมแลกเปลี่ยนเรียนรู้&nbsp;&nbsp;&nbsp;</span>
                                                @endif
                                                @if($item->check_in == "on" )
                                                    <span style="border-radius: 10px;" class="color3">&nbsp;&nbsp;&nbsp;จุดเช็คอิน&nbsp;&nbsp;&nbsp;</span>
                                                @endif
                                                <h4><br><a style="color: #fc3f00 !important" href="#">"{{ $item->name }}"</a></h4>
                                                <!-- <p>{{ $item->detail }}</p> -->
                                                <br>
                                            </div>
                                            <div>
                                                <a href="{{ url('/travel/' . $item->id) }}" title="View Travel"><button class="btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> ดูข้อมูล</button></a>
                                                @if(Auth::check())
                                                    @if(Auth::user()->profile->role == "คนดูแล" )
                                                        
                                                        <a href="{{ url('/travel/' . $item->id . '/edit') }}" title="Edit Travel"><button class="btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไขข้อมูล</button></a>

                                                        <form method="POST" action="{{ url('/travel' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}
                                                            <button type="submit" class="btn-danger btn-sm" title="Delete Travel" onclick="return confirm(&quot;ยืนยันการลบ ?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> ลบ</button>
                                                        </form>
                                                    @endif
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div> 
                                <div class="pagination-wrapper"> {!! $travel->appends(['search' => Request::get('search')])->render() !!} </div>
                            </div>
                        </div>

                        <!-- Card three -->
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="whats-news-caption">
                                <div class="row">
                                    @foreach($travel as $item)
                                    @if($item->culture == "on" )
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img width="350" height="320" src="{{ url('storage')}}/{{ $item->photo_1 }}" alt="">
                                            </div>
                                            <div>
                                                <br>
                                                <span style="border-radius: 10px;" class="color1">&nbsp;&nbsp;&nbsp;เชิงวัฒนธรรม&nbsp;&nbsp;&nbsp;</span>
                                                @if($item->agriculture == "on" )
                                                    <span style="border-radius: 10px;" class="color2">&nbsp;&nbsp;&nbsp;เชิงเกษตร&nbsp;&nbsp;&nbsp;</span>
                                                @endif
                                                @if($item->learn == "on" )
                                                    <span style="border-radius: 10px;" class="color3">&nbsp;&nbsp;&nbsp;กิจกรรมแลกเปลี่ยนเรียนรู้&nbsp;&nbsp;&nbsp;</span>
                                                @endif
                                                @if($item->check_in == "on" )
                                                    <span style="border-radius: 10px;" class="color3">&nbsp;&nbsp;&nbsp;จุดเช็คอิน&nbsp;&nbsp;&nbsp;</span>
                                                @endif
                                                <h4><br><a style="color: #fc3f00 !important" href="#">"{{ $item->name }}"</a></h4>
                                                <!-- <p>{{ $item->detail }}</p> -->
                                                <br>
                                            </div>
                                            <div>
                                                <a href="{{ url('/travel/' . $item->id) }}" title="View Travel"><button class="btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> ดูข้อมูล</button></a>
                                                @if(Auth::check())
                                                    @if(Auth::user()->profile->role == "คนดูแล" )
                                                        
                                                        <a href="{{ url('/travel/' . $item->id . '/edit') }}" title="Edit Travel"><button class="btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไขข้อมูล</button></a>

                                                        <form method="POST" action="{{ url('/travel' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}
                                                            <button type="submit" class="btn-danger btn-sm" title="Delete Travel" onclick="return confirm(&quot;ยืนยันการลบ ?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> ลบ</button>
                                                        </form>
                                                    @endif
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                                <div class="pagination-wrapper"> {!! $travel->appends(['search' => Request::get('search')])->render() !!} </div>
                            </div>
                        </div>
                        <!-- card fure -->
                        <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                            <div class="whats-news-caption">
                                <div class="row">
                                    @foreach($travel as $item)
                                    @if($item->learn == "on" )
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img width="350" height="320" src="{{ url('storage')}}/{{ $item->photo_1 }}" alt="">
                                            </div>
                                            <div>
                                                <br>
                                                <span style="border-radius: 10px;" class="color3">&nbsp;&nbsp;&nbsp;กิจกรรมแลกเปลี่ยนเรียนรู้&nbsp;&nbsp;&nbsp;</span>
                                                @if($item->agriculture == "on" )
                                                    <span style="border-radius: 10px;" class="color2">&nbsp;&nbsp;&nbsp;เชิงเกษตร&nbsp;&nbsp;&nbsp;</span>
                                                @endif

                                                @if($item->culture == "on" )
                                                    <span style="border-radius: 10px;" class="color1">&nbsp;&nbsp;&nbsp;เชิงวัฒนธรรม&nbsp;&nbsp;&nbsp;</span>
                                                @endif
                                                @if($item->check_in == "on" )
                                                    <span style="border-radius: 10px;" class="color3">&nbsp;&nbsp;&nbsp;จุดเช็คอิน&nbsp;&nbsp;&nbsp;</span>
                                                @endif
                                                <h4><br><a style="color: #fc3f00 !important" href="#">"{{ $item->name }}"</a></h4>
                                                <!-- <p>{{ $item->detail }}</p> -->
                                                <br>
                                            </div>
                                            <div>
                                                <a href="{{ url('/travel/' . $item->id) }}" title="View Travel"><button class="btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> ดูข้อมูล</button></a>
                                                @if(Auth::check())
                                                    @if(Auth::user()->profile->role == "คนดูแล" )
                                                        
                                                        <a href="{{ url('/travel/' . $item->id . '/edit') }}" title="Edit Travel"><button class="btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไขข้อมูล</button></a>

                                                        <form method="POST" action="{{ url('/travel' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}
                                                            <button type="submit" class="btn-danger btn-sm" title="Delete Travel" onclick="return confirm(&quot;ยืนยันการลบ ?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> ลบ</button>
                                                        </form>
                                                    @endif
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                                <div class="pagination-wrapper"> {!! $travel->appends(['search' => Request::get('search')])->render() !!} </div>
                            </div>
                        </div>
                        <!-- card five -->
                        <div class="tab-pane fade" id="nav-check_in" role="tabpanel" aria-labelledby="nav-check_in-tab">
                            <div class="whats-news-caption">
                                <div class="row">
                                    @foreach($travel as $item)
                                    @if($item->check_in == "on" )
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img">
                                                <img width="350" height="320" src="{{ url('storage')}}/{{ $item->photo_1 }}" alt="">
                                            </div>
                                            <div>
                                                <br>
                                                <span style="border-radius: 10px;" class="color3">&nbsp;&nbsp;&nbsp;จุดเช็คอิน&nbsp;&nbsp;&nbsp;</span>
                                                @if($item->agriculture == "on" )
                                                    <span style="border-radius: 10px;" class="color2">&nbsp;&nbsp;&nbsp;เชิงเกษตร&nbsp;&nbsp;&nbsp;</span>
                                                @endif

                                                @if($item->culture == "on" )
                                                    <span style="border-radius: 10px;" class="color1">&nbsp;&nbsp;&nbsp;เชิงวัฒนธรรม&nbsp;&nbsp;&nbsp;</span>
                                                @endif
                                                @if($item->learn == "on" )
                                                    <span style="border-radius: 10px;" class="color3">&nbsp;&nbsp;&nbsp;กิจกรรมแลกเปลี่ยนเรียนรู้&nbsp;&nbsp;&nbsp;</span>
                                                @endif
                                                <h4><br><a style="color: #fc3f00 !important" href="#">"{{ $item->name }}"</a></h4>
                                                <!-- <p>{{ $item->detail }}</p> -->
                                                <br>
                                            </div>
                                            <div>
                                                <a href="{{ url('/travel/' . $item->id) }}" title="View Travel"><button class="btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> ดูข้อมูล</button></a>
                                                @if(Auth::check())
                                                    @if(Auth::user()->profile->role == "คนดูแล" )
                                                        
                                                        <a href="{{ url('/travel/' . $item->id . '/edit') }}" title="Edit Travel"><button class="btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไขข้อมูล</button></a>

                                                        <form method="POST" action="{{ url('/travel' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}
                                                            <button type="submit" class="btn-danger btn-sm" title="Delete Travel" onclick="return confirm(&quot;ยืนยันการลบ ?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> ลบ</button>
                                                        </form>
                                                    @endif
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                                <div class="pagination-wrapper"> {!! $travel->appends(['search' => Request::get('search')])->render() !!} </div>
                            </div>
                        </div>
                <!-- End Nav Card -->
                </div>
            </div>
        </div>
        </div>
    </div>
</section>

<!-- 
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <h3 class="card-header">แหล่งท่องเที่ยว</h3>
                    <div class="card-body">
                        @if(Auth::check())
                            @if(Auth::user()->profile->role == "คนดูแล" )

                            <a href="{{ url('/travel/create') }}" class="btn-success btn-sm" title="Add New Travel">
                                <i class="fa fa-plus" aria-hidden="true"></i> Add New
                            </a>
                            @endif
                        @endif
                        <form method="GET" action="{{ url('/travel') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn-info" type="submit">
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
                                        <th class="d-none">#</th>
                                        <th>หมวดหมู่</th>
                                        <th>ชื่อสถานที่</th>
                                        <th>รายละเอียด</th>
                                        <th>ประเภท</th>
                                        <th>Photo 1</th>
                                        <th>Photo 2</th>
                                        <th>Photo 3</th>
                                        <th>Photo 4</th>
                                        <th>Photo 5</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($travel as $item)
                                    <tr>
                                        <td class="d-none">{{ $loop->iteration }}</td>
                                        <td>{{ $item->category }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->detail }}</td>
                                        <td>{{ $item->type }}</td>
                                        <td>{{ $item->photo_1 }}</td>
                                        <td>{{ $item->photo_2 }}</td>
                                        <td>{{ $item->photo_3 }}</td>
                                        <td>{{ $item->photo_4 }}</td>
                                        <td>{{ $item->photo_5 }}</td>
                                        <td>
                                            <a href="{{ url('/travel/' . $item->id) }}" title="View Travel"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/travel/' . $item->id . '/edit') }}" title="Edit Travel"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/travel' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Travel" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $travel->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> -->
@endsection
