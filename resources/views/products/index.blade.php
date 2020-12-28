@extends('layout.main')

@section('content')

<section class="whats-news-area pt-50 pb-20">
    <div class="container">
        <div class="row">
        <div class="col-lg-12">
            <div class="row d-flex justify-content-between">
                <div class="col-lg-4 col-md-4">
                    <div class="section-tittle mb-30">
                        <h2 style="text-shadow: 1px 1px #FF0000 " class="text-white">สินค้าและของที่ระลึก</h2>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="properties__button">
                        <!--Nav Button  -->                                            
                        <nav>                                                                     
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">ทั้งหมด</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">อาหาร</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">ของที่ระลึก</a>
                                <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">สินค้าทางการเกษตร</a>
                                <a class="nav-item nav-link" id="nav-a-tab" data-toggle="tab" href="#nav-a" role="tab" aria-controls="nav-contact" aria-selected="false">ผลิตภัณฑ์จากไผ่</a>
                                <a class="nav-item nav-link" id="nav-otop-tab" data-toggle="tab" href="#nav-otop" role="tab" aria-controls="nav-otop" aria-selected="false">OTOP</a>
                                
                            </div>
                        </nav>
                        <!--End Nav Button  -->
                    </div>
                </div>
                <div class="col-lg-12">
                    @if(Auth::check())
                            @if(Auth::user()->profile->role == "คนดูแล" )

                            <a href="{{ url('/products/create') }}" class="btn-success btn-sm" title="Add New products">
                                <i class="fa fa-plus" aria-hidden="true"></i> เพิ่มข้อมูล
                            </a>
                            @endif
                        @endif
                        <form method="GET" action="{{ url('/products') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                    @foreach($products as $item)
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-what-news mb-100">
                                            <div class="card" style="background:none; border:none" >
                                                <div>
                                                    <img width="350" height="220" src="{{ url('storage')}}/{{ $item->photo }}" alt="">
                                                </div><br>
                                                <div>
                                                @if($item->otop == "on" )
                                                <span style="border-radius: 10px;" class="color4">&nbsp;&nbsp;&nbsp;OTOP&nbsp;&nbsp;&nbsp;</span>
                                                @endif
                                                @if($item->food == "on" )
                                                    <span style="border-radius: 10px;" class="color1">&nbsp;&nbsp;&nbsp;อาหาร&nbsp;&nbsp;&nbsp;</span>
                                                @endif
                                                @if($item->gift == "on" )
                                                    <span style="border-radius: 10px;" class="color2">&nbsp;&nbsp;&nbsp;ของที่ระลึก&nbsp;&nbsp;&nbsp;</span>
                                                @endif
                                                @if($item->agricultural == "on" )
                                                    <span style="border-radius: 10px;" class="color3">&nbsp;&nbsp;&nbsp;สินค้าทางการเกษตร&nbsp;&nbsp;&nbsp;</span>
                                                @endif
                                                @if($item->bamboo == "on" )
                                                    <span style="border-radius: 10px;" class="color3">&nbsp;&nbsp;&nbsp;ผลิตภัณฑ์จากไผ่&nbsp;&nbsp;&nbsp;</span>
                                                @endif
                                                    <h4><br><a style="color: #fc3f00 !important" href="{{ url('/products/' . $item->id) }}">"{{ $item->name }}"</a></h4>
                                                    <!-- <p><b>รายละเอียด :</b> {{ $item->detail }}</p> -->
                                                    <!-- <p><b>สรรพคุณ , ประโยชน์ :</b> {{ $item->benefit }}</p>
                                                    <p><b>วิธีใช้ :</b> {{ $item->how_to_use }}</p> -->
                                                </div>
                                                <div class="text-right">
                                                    <a href="{{ url('/products/' . $item->id) }}" title="View products"><button class="btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> ดูข้อมูล</button></a>
                                                    @if(Auth::check())
                                                        @if(Auth::user()->profile->role == "คนดูแล" )
                                                            
                                                            <a href="{{ url('/products/' . $item->id . '/edit') }}" title="Edit products"><button class="btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไขข้อมูล</button></a>

                                                            <form method="POST" action="{{ url('/products' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                                {{ method_field('DELETE') }}
                                                                {{ csrf_field() }}
                                                                <button type="submit" class="btn-danger btn-sm" title="Delete products" onclick="return confirm(&quot;ยืนยันการลบ ?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> ลบ</button>
                                                            </form>
                                                        @endif
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div> 
                                <div class="pagination-wrapper"> {!! $products->appends(['search' => Request::get('search')])->render() !!} </div>
                            </div>
                        </div>

                        <!-- Card two -->
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="whats-news-caption">
                                <div class="row">
                                    @foreach($products as $item)
                                    @if($item->food == "on" )
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-what-news mb-100">
                                            <div class="card" style="background:none; border:none ">
                                                <div class="what-img">
                                                    <img width="350" height="220" src="{{ url('storage')}}/{{ $item->photo }}" alt="">
                                                </div>
                                                <div>
                                                    <br>
                                                    <span style="border-radius: 10px;" class="color1">&nbsp;&nbsp;&nbsp;อาหาร&nbsp;&nbsp;&nbsp;</span>
                                                    @if($item->gift == "on" )
                                                    <span style="border-radius: 10px;" class="color2">&nbsp;&nbsp;&nbsp;ของที่ระลึก&nbsp;&nbsp;&nbsp;</span>
                                                    @endif
                                                    @if($item->agricultural == "on" )
                                                        <span style="border-radius: 10px;" class="color3">&nbsp;&nbsp;&nbsp;สินค้าทางการเกษตร&nbsp;&nbsp;&nbsp;</span>
                                                    @endif
                                                    @if($item->bamboo == "on" )
                                                        <span style="border-radius: 10px;" class="color3">&nbsp;&nbsp;&nbsp;ผลิตภัณฑ์จากไผ่&nbsp;&nbsp;&nbsp;</span>
                                                    @endif
                                                    @if($item->otop == "on" )
                                                        <span style="border-radius: 10px;" class="color4">&nbsp;&nbsp;&nbsp;OTOP&nbsp;&nbsp;&nbsp;</span>
                                                    @endif
                                                    <h4><br><a style="color: #fc3f00 !important" href="{{ url('/products/' . $item->id) }}">"{{ $item->name }}"</a></h4>
                                                    <!-- <p><b>รายละเอียด :</b> {{ $item->detail }}</p> -->
                                                    <!-- <p><b>สรรพคุณ , ประโยชน์ :</b> {{ $item->benefit }}</p>
                                                    <p><b>วิธีใช้ :</b> {{ $item->how_to_use }}</p> -->
                                                </div>
                                                <div class="text-right">
                                                    <a href="{{ url('/products/' . $item->id) }}" title="View products"><button class="btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> ดูข้อมูล</button></a>
                                                    @if(Auth::check())
                                                        @if(Auth::user()->profile->role == "คนดูแล" )
                                                            
                                                            <a href="{{ url('/products/' . $item->id . '/edit') }}" title="Edit products"><button class="btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไขข้อมูล</button></a>

                                                            <form method="POST" action="{{ url('/products' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                                {{ method_field('DELETE') }}
                                                                {{ csrf_field() }}
                                                                <button type="submit" class="btn-danger btn-sm" title="Delete products" onclick="return confirm(&quot;ยืนยันการลบ ?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> ลบ</button>
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
                                <div class="pagination-wrapper"> {!! $products->appends(['search' => Request::get('search')])->render() !!} </div>
                            </div>
                        </div>

                        <!-- Card three -->
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="whats-news-caption">
                                <div class="row">
                                    @foreach($products as $item)
                                    @if($item->gift == "on" )
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-what-news mb-100">
                                            <div class="card" style="background:none; border:none ">
                                                <div class="what-img">
                                                    <img width="350" height="220" src="{{ url('storage')}}/{{ $item->photo }}" alt="">
                                                </div>
                                                <div>
                                                    <br>
                                                    <span style="border-radius: 10px;" class="color2">&nbsp;&nbsp;&nbsp;ของที่ระลึก&nbsp;&nbsp;&nbsp;</span>

                                                    @if($item->food == "on" )
                                                    <span style="border-radius: 10px;" class="color1">&nbsp;&nbsp;&nbsp;อาหาร&nbsp;&nbsp;&nbsp;</span>
                                                    @endif
                                                    @if($item->agricultural == "on" )
                                                        <span style="border-radius: 10px;" class="color3">&nbsp;&nbsp;&nbsp;สินค้าทางการเกษตร&nbsp;&nbsp;&nbsp;</span>
                                                    @endif
                                                    @if($item->bamboo == "on" )
                                                        <span style="border-radius: 10px;" class="color3">&nbsp;&nbsp;&nbsp;ผลิตภัณฑ์จากไผ่&nbsp;&nbsp;&nbsp;</span>
                                                    @endif
                                                    @if($item->otop == "on" )
                                                        <span style="border-radius: 10px;" class="color4">&nbsp;&nbsp;&nbsp;OTOP&nbsp;&nbsp;&nbsp;</span>
                                                    @endif
                                                    <h4><br><a style="color: #fc3f00 !important" href="{{ url('/products/' . $item->id) }}">"{{ $item->name }}"</a></h4>
                                                    <!-- <p><b>รายละเอียด :</b> {{ $item->detail }}</p> -->
                                                    <!-- <p><b>สรรพคุณ , ประโยชน์ :</b> {{ $item->benefit }}</p>
                                                    <p><b>วิธีใช้ :</b> {{ $item->how_to_use }}</p> -->
                                                </div>
                                                <div class="text-right">
                                                    <a href="{{ url('/products/' . $item->id) }}" title="View products"><button class="btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> ดูข้อมูล</button></a>
                                                    @if(Auth::check())
                                                        @if(Auth::user()->profile->role == "คนดูแล" )
                                                            
                                                            <a href="{{ url('/products/' . $item->id . '/edit') }}" title="Edit products"><button class="btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไขข้อมูล</button></a>

                                                            <form method="POST" action="{{ url('/products' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                                {{ method_field('DELETE') }}
                                                                {{ csrf_field() }}
                                                                <button type="submit" class="btn-danger btn-sm" title="Delete products" onclick="return confirm(&quot;ยืนยันการลบ ?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> ลบ</button>
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
                                <div class="pagination-wrapper"> {!! $products->appends(['search' => Request::get('search')])->render() !!} </div>
                            </div>
                        </div>
                        <!-- card fure -->
                        <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                            <div class="whats-news-caption">
                                <div class="row">
                                    @foreach($products as $item)
                                    @if($item->agricultural == "on" )
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-what-news mb-100">
                                            <div class="card" style="background:none; border:none ">
                                                <div class="what-img">
                                                    <img width="350" height="220" src="{{ url('storage')}}/{{ $item->photo }}" alt="">
                                                </div>
                                                <div>
                                                    <br>
                                                    <span style="border-radius: 10px;" class="color3">&nbsp;&nbsp;&nbsp;สินค้าทางการเกษตร&nbsp;&nbsp;&nbsp;</span>
                                                @if($item->food == "on" )
                                                    <span style="border-radius: 10px;" class="color1">&nbsp;&nbsp;&nbsp;อาหาร&nbsp;&nbsp;&nbsp;</span>
                                                @endif
                                                @if($item->gift == "on" )
                                                    <span style="border-radius: 10px;" class="color2">&nbsp;&nbsp;&nbsp;ของที่ระลึก&nbsp;&nbsp;&nbsp;</span>
                                                @endif
                                                @if($item->bamboo == "on" )
                                                    <span style="border-radius: 10px;" class="color3">&nbsp;&nbsp;&nbsp;ผลิตภัณฑ์จากไผ่&nbsp;&nbsp;&nbsp;</span>
                                                @endif
                                                @if($item->otop == "on" )
                                                    <span style="border-radius: 10px;" class="color4">&nbsp;&nbsp;&nbsp;OTOP&nbsp;&nbsp;&nbsp;</span>
                                                @endif
                                                    <h4><br><a style="color: #fc3f00 !important" href="{{ url('/products/' . $item->id) }}">"{{ $item->name }}"</a></h4>
                                                    <!-- <p><b>รายละเอียด :</b> {{ $item->detail }}</p> -->
                                                    <!-- <p><b>สรรพคุณ , ประโยชน์ :</b> {{ $item->benefit }}</p>
                                                    <p><b>วิธีใช้ :</b> {{ $item->how_to_use }}</p> -->
                                                </div>
                                                <div class="text-right">
                                                    <a href="{{ url('/products/' . $item->id) }}" title="View products"><button class="btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> ดูข้อมูล</button></a>
                                                    @if(Auth::check())
                                                        @if(Auth::user()->profile->role == "คนดูแล" )
                                                            
                                                            <a href="{{ url('/products/' . $item->id . '/edit') }}" title="Edit products"><button class="btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไขข้อมูล</button></a>

                                                            <form method="POST" action="{{ url('/products' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                                {{ method_field('DELETE') }}
                                                                {{ csrf_field() }}
                                                                <button type="submit" class="btn-danger btn-sm" title="Delete products" onclick="return confirm(&quot;ยืนยันการลบ ?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> ลบ</button>
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
                                <div class="pagination-wrapper"> {!! $products->appends(['search' => Request::get('search')])->render() !!} </div>
                            </div>
                        </div>
                        <!-- card five -->
                        <div class="tab-pane fade" id="nav-a" role="tabpanel" aria-labelledby="nav-last-a">
                            <div class="whats-news-caption">
                                <div class="row">
                                    @foreach($products as $item)
                                    @if($item->bamboo == "on" )
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-what-news mb-100">
                                            <div class="card" style="background:none; border:none ">
                                                <div class="what-img">
                                                    <img width="350" height="220" src="{{ url('storage')}}/{{ $item->photo }}" alt="">
                                                </div>
                                                <div>
                                                    <br>
                                                    <span style="border-radius: 10px;" class="color3">&nbsp;&nbsp;&nbsp;ผลิตภัณฑ์จากไผ่&nbsp;&nbsp;&nbsp;</span>
                                                    @if($item->food == "on" )
                                                    <span style="border-radius: 10px;" class="color1">&nbsp;&nbsp;&nbsp;อาหาร&nbsp;&nbsp;&nbsp;</span>
                                                    @endif
                                                    @if($item->gift == "on" )
                                                        <span style="border-radius: 10px;" class="color2">&nbsp;&nbsp;&nbsp;ของที่ระลึก&nbsp;&nbsp;&nbsp;</span>
                                                    @endif
                                                    @if($item->agricultural == "on" )
                                                        <span style="border-radius: 10px;" class="color3">&nbsp;&nbsp;&nbsp;สินค้าทางการเกษตร&nbsp;&nbsp;&nbsp;</span>
                                                    @endif
                                                    @if($item->otop == "on" )
                                                        <span style="border-radius: 10px;" class="color4">&nbsp;&nbsp;&nbsp;OTOP&nbsp;&nbsp;&nbsp;</span>
                                                    @endif
                                                    <h4><br><a style="color: #fc3f00 !important" href="{{ url('/products/' . $item->id) }}">"{{ $item->name }}"</a></h4>
                                                    <!-- <p><b>รายละเอียด :</b> {{ $item->detail }}</p> -->
                                                    <!-- <p><b>สรรพคุณ , ประโยชน์ :</b> {{ $item->benefit }}</p>
                                                    <p><b>วิธีใช้ :</b> {{ $item->how_to_use }}</p> -->
                                                </div>
                                                <div class="text-right">
                                                    <a href="{{ url('/products/' . $item->id) }}" title="View products"><button class="btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> ดูข้อมูล</button></a>
                                                    @if(Auth::check())
                                                        @if(Auth::user()->profile->role == "คนดูแล" )
                                                            
                                                            <a href="{{ url('/products/' . $item->id . '/edit') }}" title="Edit products"><button class="btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไขข้อมูล</button></a>

                                                            <form method="POST" action="{{ url('/products' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                                {{ method_field('DELETE') }}
                                                                {{ csrf_field() }}
                                                                <button type="submit" class="btn-danger btn-sm" title="Delete products" onclick="return confirm(&quot;ยืนยันการลบ ?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> ลบ</button>
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
                                <div class="pagination-wrapper"> {!! $products->appends(['search' => Request::get('search')])->render() !!} </div>
                            </div>
                        </div>
                        <!-- card six -->
                        <div class="tab-pane fade" id="nav-otop" role="tabpanel" aria-labelledby="nav-last-a">
                            <div class="whats-news-caption">
                                <div class="row">
                                    @foreach($products as $item)
                                    @if($item->otop == "on" )
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-what-news mb-100">
                                            <div class="card" style="background:none; border:none ">
                                                <div class="what-img">
                                                    <img width="350" height="220" src="{{ url('storage')}}/{{ $item->photo }}" alt="">
                                                </div>
                                                <div>
                                                    <br>
                                                    <span style="border-radius: 10px;" class="color4">&nbsp;&nbsp;&nbsp;OTOP&nbsp;&nbsp;&nbsp;</span>
                                                    @if($item->bamboo == "on" )
                                                    <span style="border-radius: 10px;" class="color3">&nbsp;&nbsp;&nbsp;ผลิตภัณฑ์จากไผ่&nbsp;&nbsp;&nbsp;</span>
                                                    @endif
                                                    @if($item->food == "on" )
                                                    <span style="border-radius: 10px;" class="color1">&nbsp;&nbsp;&nbsp;อาหาร&nbsp;&nbsp;&nbsp;</span>
                                                    @endif
                                                    @if($item->gift == "on" )
                                                        <span style="border-radius: 10px;" class="color2">&nbsp;&nbsp;&nbsp;ของที่ระลึก&nbsp;&nbsp;&nbsp;</span>
                                                    @endif
                                                    @if($item->agricultural == "on" )
                                                        <span style="border-radius: 10px;" class="color3">&nbsp;&nbsp;&nbsp;สินค้าทางการเกษตร&nbsp;&nbsp;&nbsp;</span>
                                                    @endif
                                                    <h4><br><a style="color: #fc3f00 !important" href="{{ url('/products/' . $item->id) }}">"{{ $item->name }}"</a></h4>
                                                    <!-- <p><b>รายละเอียด :</b> {{ $item->detail }}</p> -->
                                                    <!-- <p><b>สรรพคุณ , ประโยชน์ :</b> {{ $item->benefit }}</p>
                                                    <p><b>วิธีใช้ :</b> {{ $item->how_to_use }}</p> -->
                                                </div>
                                                <div class="text-right">
                                                    <a href="{{ url('/products/' . $item->id) }}" title="View products"><button class="btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> ดูข้อมูล</button></a>
                                                    @if(Auth::check())
                                                        @if(Auth::user()->profile->role == "คนดูแล" )
                                                            
                                                            <a href="{{ url('/products/' . $item->id . '/edit') }}" title="Edit products"><button class="btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไขข้อมูล</button></a>

                                                            <form method="POST" action="{{ url('/products' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                                {{ method_field('DELETE') }}
                                                                {{ csrf_field() }}
                                                                <button type="submit" class="btn-danger btn-sm" title="Delete products" onclick="return confirm(&quot;ยืนยันการลบ ?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> ลบ</button>
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
                                <div class="pagination-wrapper"> {!! $products->appends(['search' => Request::get('search')])->render() !!} </div>
                            </div>
                        </div>
                <!-- End Nav Card -->
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection
