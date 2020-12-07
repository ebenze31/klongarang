@extends('layout.main')

@section('content')

<section class="whats-news-area pt-50 pb-20">
    <div class="container">
        <div class="row">
        <div class="col-lg-12">
            <div class="row d-flex justify-content-between">
                <div class="col-lg-4 col-md-4">
                    <div class="section-tittle mb-30">
                        <h2 style="text-shadow: 1px 1px #FF0000 " class="text-white">แพคเกจท่องเที่ยว</h2>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="properties__button">
                        <!--Nav Button  -->                                            
                        <nav>                                                                     
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">ทั้งหมด</a>
                                <a class="nav-item nav-link" id="nav-oneday-tab" data-toggle="tab" href="#nav-oneday" role="tab" aria-controls="nav-oneday" aria-selected="false">1 วัน</a>
                                <a class="nav-item nav-link" id="nav-twodays-tab" data-toggle="tab" href="#nav-twodays" role="tab" aria-controls="nav-twodays" aria-selected="false">2 วัน 1 คืน</a>
                                
                            </div>
                        </nav>
                        <!--End Nav Button  -->
                    </div>
                </div>
                <div class="col-lg-12">
                    @if(Auth::check())
                            @if(Auth::user()->profile->role == "คนดูแล" )

                            <a href="{{ url('/trip/create') }}" class="btn-success btn-sm" title="Add New trip">
                                <i class="fa fa-plus" aria-hidden="true"></i> เพิ่มข้อมูล
                            </a>
                            @endif
                        @endif
                        <form method="GET" action="{{ url('/trip') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                    @foreach($trip as $item)
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-what-news mb-100">
                                            <div class="card text-right" style="background:none; border:none ">
                                                <div class="what-img">
                                                    <img height="200" src="{{ url('storage')}}/{{ $item->cover_photo }}" class="card-img-top" >
                                                </div>
                                                <hr>
                                                <div>
                                                    <blockquote class="blockquote mb-0">
                                                        <h3 style="text-shadow: 1px 1px #FFF " class="text-danger">{{ $item->name }}</h3>
                                                      
                                                      @if($item->one_day_trip == "on" )
                                                        <span style="border-radius: 10px;font-size: 15px;" class="color2">&nbsp;&nbsp;&nbsp;โปรแกรม 1 วัน&nbsp;&nbsp;&nbsp;</span>
                                                      @endif
                                                      @if($item->two_days_trip == "on" )
                                                        <span style="border-radius: 10px;font-size: 15px;" class="color3">&nbsp;&nbsp;&nbsp;โปรแกรม 2 วัน 1 คืน&nbsp;&nbsp;&nbsp;</span>
                                                      @endif
                                                      <p>{{ $item->title }}</p>
                                                    </blockquote>
                                                </div>
                                                <div>
                                                    <a href="{{ url('/trip/' . $item->id) }}" title="View trip"><button class="btn-info btn-sm"> <i class="fa fa-eye" aria-hidden="true"></i> ดูรายละเอียดเพิ่มเติม</button></a>
                                                    @if(Auth::check())
                                                        @if(Auth::user()->profile->role == "คนดูแล" )
                                                            
                                                            <a href="{{ url('/trip/' . $item->id . '/edit') }}" title="Edit trip"><button class="btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไขข้อมูล</button></a>

                                                            <form method="POST" action="{{ url('/trip' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                                {{ method_field('DELETE') }}
                                                                {{ csrf_field() }}
                                                                <button type="submit" class="btn-danger btn-sm" title="Delete trip" onclick="return confirm(&quot;ยืนยันการลบ ?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> ลบ</button>
                                                            </form>
                                                        @endif
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div> 
                                <div class="pagination-wrapper"> {!! $trip->appends(['search' => Request::get('search')])->render() !!} </div>
                            </div>
                        </div>
                        

                        <!-- Card two -->
                        <div class="tab-pane fade" id="nav-oneday" role="tabpanel" aria-labelledby="nav-oneday-tab">
                            <div class="whats-news-caption">
                                <div class="row">
                                    @foreach($trip as $item)
                                    @if($item->one_day_trip == "on" )
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-what-news mb-100">
                                            <div class="card text-right" style="background:none; border:none ">
                                                <div class="what-img">
                                                    <img height="200" src="{{ url('storage')}}/{{ $item->cover_photo }}" class="card-img-top" >
                                                </div>
                                                <hr>
                                                <div>
                                                    <blockquote class="blockquote mb-0">
                                                        <h3 style="text-shadow: 1px 1px #FFF " class="text-danger">{{ $item->name }}</h3>
                                                      
                                                        <span style="border-radius: 10px;font-size: 15px;" class="color2">&nbsp;&nbsp;&nbsp;โปรแกรม 1 วัน&nbsp;&nbsp;&nbsp;</span>
                                                      <p>{{ $item->title }}</p>
                                                    </blockquote>
                                                </div>
                                                <div>
                                                    <a href="{{ url('/trip/' . $item->id) }}" title="View trip"><button class="btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> ดูรายละเอียดเพิ่มเติม</button></a>
                                                    @if(Auth::check())
                                                        @if(Auth::user()->profile->role == "คนดูแล" )
                                                            
                                                            <a href="{{ url('/trip/' . $item->id . '/edit') }}" title="Edit trip"><button class="btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไขข้อมูล</button></a>

                                                            <form method="POST" action="{{ url('/trip' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                                {{ method_field('DELETE') }}
                                                                {{ csrf_field() }}
                                                                <button type="submit" class="btn-danger btn-sm" title="Delete trip" onclick="return confirm(&quot;ยืนยันการลบ ?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> ลบ</button>
                                                            </form>
                                                        @endif
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div> 
                                <div class="pagination-wrapper"> {!! $trip->appends(['search' => Request::get('search')])->render() !!} </div>
                            </div>
                        </div>

                        <!-- Card three -->
                        <div class="tab-pane fade" id="nav-twodays" role="tabpanel" aria-labelledby="nav-twodays-tab">
                            <div class="whats-news-caption">
                                <div class="row">
                                    @foreach($trip as $item)
                                    @if($item->two_days_trip == "on" )
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-what-news mb-100">
                                            <div class="card text-right" style="background:none; border:none ">
                                                <div class="what-img">
                                                    <img height="200" src="{{ url('storage')}}/{{ $item->cover_photo }}" class="card-img-top" >
                                                </div>
                                                <hr>
                                                <div>
                                                    <blockquote class="blockquote mb-0">
                                                        <h3 style="text-shadow: 1px 1px #FFF " class="text-danger">{{ $item->name }}</h3>
                                                        <span style="border-radius: 10px;font-size: 15px;" class="color3">&nbsp;&nbsp;&nbsp;โปรแกรม 2 วัน 1 คืน&nbsp;&nbsp;&nbsp;</span>
                                                      
                                                      <p>{{ $item->title }}</p>
                                                    </blockquote>
                                                </div>
                                                <div>
                                                    <a href="{{ url('/trip/' . $item->id) }}" title="View trip"><button class="btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> ดูรายละเอียดเพิ่มเติม</button></a>
                                                    @if(Auth::check())
                                                        @if(Auth::user()->profile->role == "คนดูแล" )
                                                            
                                                            <a href="{{ url('/trip/' . $item->id . '/edit') }}" title="Edit trip"><button class="btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไขข้อมูล</button></a>

                                                            <form method="POST" action="{{ url('/trip' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                                {{ method_field('DELETE') }}
                                                                {{ csrf_field() }}
                                                                <button type="submit" class="btn-danger btn-sm" title="Delete trip" onclick="return confirm(&quot;ยืนยันการลบ ?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> ลบ</button>
                                                            </form>
                                                        @endif
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div> 
                                <div class="pagination-wrapper"> {!! $trip->appends(['search' => Request::get('search')])->render() !!} </div>
                            </div>
                        </div>
                        
                <!-- End Nav Card -->
                </div>
            </div>
        </div>
        </div>
    </div>
</section>







<!-- <section class="whats-news-area pt-50 pb-20">
    <div class="container">
        <div class="row">
        <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">Trip</div>
                    <div class="card-body">
                        <a href="{{ url('/trip/create') }}" class="btn btn-success btn-sm" title="Add New Trip">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/trip') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
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
                                        <th>#</th><th>Name</th><th>Title</th><th>1 Day Trip</th><th>2 Days Trip</th><th>Cover Photo</th><th>Photo 1</th><th>Photo 2</th><th>Photo 3</th><th>Photo 4</th><th>Photo 5</th><th>Photo 6</th><th>Photo 7</th><th>Photo 8</th><th>Photo 9</th><th>Photo 10</th><th>Remark</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($trip as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->one_day_trip }}</td>
                                        <td>{{ $item->two_days_trip }}</td>
                                        <td>{{ $item->cover_photo }}</td>
                                        <td>{{ $item->photo_1 }}</td>
                                        <td>{{ $item->photo_2 }}</td>
                                        <td>{{ $item->photo_3 }}</td>
                                        <td>{{ $item->photo_4 }}</td>
                                        <td>{{ $item->photo_5 }}</td>
                                        <td>{{ $item->photo_6 }}</td>
                                        <td>{{ $item->photo_7 }}</td>
                                        <td>{{ $item->photo_8 }}</td>
                                        <td>{{ $item->photo_9 }}</td>
                                        <td>{{ $item->photo_10 }}</td>
                                        
                                        <td>{{ $item->remark }}</td>
                                        <td>
                                            <a href="{{ url('/trip/' . $item->id) }}" title="View Trip"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/trip/' . $item->id . '/edit') }}" title="Edit Trip"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/trip' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Trip" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $trip->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> -->
@endsection
