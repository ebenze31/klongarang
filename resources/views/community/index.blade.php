@extends('layout.main')

@section('content')
<section class="whats-news-area pt-50 pb-20">
    <div class="container">
        <div class="row">
        <div class="col-lg-12">
            <div class="row d-flex justify-content-between">
                <div class="col-lg-7 col-md-7">
                    <div class="section-tittle mb-30">
                        <h2 style="text-shadow: 1px 1px #FF0000 " class="text-white">ผังคณะกรรมการหมู่บ้านอพป.บ้านคลองอาราง</h2>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">                                               
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active"  href="{{ url('/award') }}" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fas fa-trophy"></i> รางวัลที่หมู่บ้านได้รับ <i class="fas fa-trophy"></i></a>

                        <a class="nav-item nav-link text-success"  href="{{ url('#') }}" role="tab" aria-controls="nav-home" aria-selected="true"><i class="far fa-handshake"></i> วิสาหกิจชมชุน <i class="far fa-handshake"></i></a>
                    </div>
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
                                    @foreach($community as $item)
                                    <!-- 1 แถว -->
                                    <div class="col-lg-4 col-md-4">
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-what-news mb-100 ">
                                            <div class="card" style="background:none; border:none;">
                                                <center>
                                                    <img style="border-radius: 15px;" width="235" height="300" src="{{ url('storage')}}/{{ $item->president_img }}" alt="">
                                                    <div>
                                                        <br>
                                                        <h5>ประธานคณะกรรมการกลางหมู่บ้าน อพป.</h5>
                                                        {{ $item->president }}
                                                    </div>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                    </div>
                                    <!-- จบ 1 แถว -->
                                    <!-- 1 แถว -->
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100 ">
                                            <div class="card" style="background:none; border:none;">
                                                <center>
                                                    <img style="border-radius: 15px;" width="185" height="250" src="{{ url('storage')}}/{{ $item->vice_President_1_img }}" alt="">
                                                    <div>
                                                        <br>
                                                        <h5>รองประธานคณะกรรมการกลางหมู่บ้าน อพป.</h5>
                                                        {{ $item->vice_President_1 }}
                                                    </div>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100 ">
                                            <div class="card" style="background:none; border:none;">
                                                <center>
                                                    <img style="border-radius: 15px;" width="185" height="250" src="{{ url('storage')}}/{{ $item->vice_President_2_img }}" alt="">
                                                    <div>
                                                        <br>
                                                        <h5>รองประธานคณะกรรมการกลางหมู่บ้าน อพป.</h5>
                                                        {{ $item->vice_President_2 }}
                                                    </div>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- จบ 1 แถว -->
                                    <!-- 1 แถว -->
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100 ">
                                            <div class="card" style="background:none; border:none;">
                                                <center>
                                                    <img style="border-radius: 15px;" width="185" height="250" src="{{ url('storage')}}/{{ $item->secretary_1_img }}" alt="">
                                                    <div>
                                                        <br>
                                                        <h5>เลขานุการหมู่บ้าน อพป.</h5>
                                                        {{ $item->secretary_1 }}
                                                    </div>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100 ">
                                            <div class="card" style="background:none; border:none;">
                                                <center>
                                                    <img style="border-radius: 15px;" width="185" height="250" src="{{ url('storage')}}/{{ $item->secretary_2_img }}" alt="">
                                                    <div>
                                                        <br>
                                                        <h5>เลขานุการหมู่บ้าน อพป.</h5>
                                                        {{ $item->secretary_2 }}
                                                    </div>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- จบ 1 แถว -->
                                    <!-- 1 แถว -->
                                    <div class="col-lg-4 col-md-4">
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-what-news mb-100 ">
                                            <div class="card" style="background:none; border:none;">
                                                <center>
                                                    <h5>คณะกรรมการกลางหมู่บ้าน อพป.</h5>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                    </div>
                                    <!-- จบ 1 แถว -->
                                    <!-- 1 แถว -->
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100 ">
                                            <div class="card" style="background:none; border:none;">
                                                <center>
                                                    <div>
                                                        <h5>คณะกรรมการหมู่บ้าน อพป.โดยตำแหน่ง</h5>
                                                        <br>
                                                        1. {{ $item->board_by_position_1 }}
                                                        <br>
                                                        2. {{ $item->board_by_position_2 }}
                                                        <br>
                                                        3. {{ $item->board_by_position_3 }}
                                                    </div>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100 ">
                                            <div class="card" style="background:none; border:none;">
                                                <center>
                                                    <h5>คณะกรรมการหมู่บ้าน อพป.ผู้ทรงคุณวุฒิ</h5>
                                                    <br>
                                                <div class="row">
                                                    <div class="col-6">
                                                    1. {{ $item->board_by_experts_1 }}
                                                    <br>
                                                    2. {{ $item->board_by_experts_2 }}
                                                    <br>
                                                    3. {{ $item->board_by_experts_3 }}
                                                    <br>
                                                    4. {{ $item->board_by_experts_4 }}
                                                    <br>
                                                    5. {{ $item->board_by_experts_5 }}
                                                </div>
                                                <div class="col-6">
                                                    6. {{ $item->board_by_experts_6 }}
                                                    <br>
                                                    7. {{ $item->board_by_experts_7 }}
                                                    <br>
                                                    8. {{ $item->board_by_experts_8 }}
                                                    <br>
                                                    9. {{ $item->board_by_experts_9 }}
                                                </div>
                                                </div>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- จบ 1 แถว -->
                                    <!-- 1 แถว -->
                                    <div class="col-lg-4 col-md-4">
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-what-news mb-100 ">
                                            <div class="card" style="background:none; border:none;">
                                                <center>
                                                    <h5>กรรมการหมู่บ้าน อพป.</h5>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                    </div>
                                    <!-- จบ 1 แถว -->
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100 ">
                                            <div class="card" style="background:none; border:none;">
                                                <center>
                                                    <div>
                                                    <h5>คณะกรรมการพัฒนา</h5>
                                                    <br>
                                                    1. {{ $item->expand_1 }}
                                                    <br>
                                                    2. {{ $item->expand_2 }}
                                                    <br>
                                                    3. {{ $item->expand_3 }}
                                                    <br>
                                                    4. {{ $item->expand_4 }}
                                                </div>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100 ">
                                            <div class="card" style="background:none; border:none;">
                                                <center>
                                                    <div>
                                                    <h5>คณะกรรมการการปกครอง</h5>
                                                    <br>
                                                    1. {{ $item->rule_1 }}
                                                    <br>
                                                    2. {{ $item->rule_2 }}
                                                    <br>
                                                    3. {{ $item->rule_3 }}
                                                    <br>
                                                    4. {{ $item->rule_4 }}
                                                </div>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- จบ 1 แถว -->
                                    <!-- จบ 1 แถว -->
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100 ">
                                            <div class="card" style="background:none; border:none;">
                                                <center>
                                                    <div>
                                                    <h5>คณะกรรมการป้องกันและรักษาความสงบ</h5>
                                                    <br>
                                                    1. {{ $item->protection_1 }}
                                                    <br>
                                                    2. {{ $item->protection_2 }}
                                                    <br>
                                                    3. {{ $item->protection_3 }}
                                                    <br>
                                                    4. {{ $item->protection_4 }}
                                                    <br>
                                                    5. {{ $item->protection_5 }}
                                                </div>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-what-news mb-100 ">
                                            <div class="card" style="background:none; border:none;">
                                                <center>
                                                    <div>
                                                    <h5>คณะกรรมการการคลัง</h5>
                                                    <br>
                                                    1. {{ $item->finance_1 }}
                                                    <br>
                                                    2. {{ $item->finance_2 }}
                                                    <br>
                                                    3. {{ $item->finance_3 }}
                                                    <br>
                                                    4. {{ $item->finance_4 }}
                                                </div>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- จบ 1 แถว -->
                                    <!-- 1 แถว -->
                                    <div class="col-lg-4 col-md-4">
                                        <div class="card" style="background:none; border:none;">
                                            <center>
                                                <div>
                                                <h5>คณะกรรมการ การสาธารณสุข</h5>
                                                <br>
                                                1. {{ $item->public_health_1 }}
                                                <br>
                                                2. {{ $item->public_health_2 }}
                                                <br>
                                                3. {{ $item->public_health_3 }}
                                                <br>
                                                4. {{ $item->public_health_4 }}
                                            </div>
                                            </center>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="card" style="background:none; border:none;">
                                            <center>
                                                <div>
                                                <h5>คณะกรรมการสวัสดิการสังคม</h5>
                                                <br>
                                                1. {{ $item->welfare_1 }}
                                                <br>
                                                2. {{ $item->welfare_2 }}
                                                <br>
                                                3. {{ $item->welfare_3 }}
                                                <br>
                                                4. {{ $item->welfare_4 }}
                                                <br>
                                                5. {{ $item->welfare_5 }}
                                            </div>
                                            </center>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="card" style="background:none; border:none;">
                                            <center>
                                                <div>
                                                <h5>คณะกรรมการการศึกษาและวัฒนธรรม</h5>
                                                <br>
                                                1. {{ $item->education_1 }}
                                                <br>
                                                2. {{ $item->education_2 }}
                                                <br>
                                                3. {{ $item->education_3 }}
                                                <br>
                                                4. {{ $item->education_4 }}
                                                <br>
                                                5. {{ $item->education_5 }}
                                            </div>
                                            </center>
                                        </div>
                                    </div>
                                    <!-- จบ 1 แถว -->


                                    @if(Auth::check())
                                        @if(Auth::user()->profile->role == "คนดูแล" )
                                            <a style="position:absolute; right:0;" href="{{ url('/community/' . $item->id . '/edit') }}" title="Edit Community"><button class="btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไขข้อมูลหมู่บ้าน</button></a>
                                        @endif
                                    @endif
                                    @endforeach
                                </div> 
                                <div class="pagination-wrapper"> {!! $community->appends(['search' => Request::get('search')])->render() !!} </div>
                            </div>
                        </div>
                        
                <!-- End Nav Card -->
                </div>
            </div>
        </div>
        </div>
    </div>
</section>





    <div class="container d-none">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Community</div>
                    <div class="card-body">
                        <a href="{{ url('/community/create') }}" class="d-none btn btn-success btn-sm" title="Add New Community">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/community') }}" accept-charset="UTF-8" class="d-none form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>#</th><th>Name</th><th>President</th><th>President Img</th><th>Vice President 1</th><th>Vice President 1 Img</th><th>Vice President 2</th><th>Vice President 2 Img</th><th>Secretary 1</th><th>Secretary 1 Img</th><th>Secretary 2</th><th>Secretary 2 Img</th><th>Board By Position 1</th><th>Board By Position 1 Img</th><th>Board By Position 2</th><th>Board By Position 2 Img</th><th>Board By Position 3</th><th>Board By Position 3 Img</th><th>Board By Experts 1</th><th>Board By Experts 1 Img</th><th>Board By Experts 2</th><th>Board By Experts 2 Img</th><th>Board By Experts 3</th><th>Board By Experts 3 Img</th><th>Board By Experts 4</th><th>Board By Experts 4 Img</th><th>Board By Experts 5</th><th>Board By Experts 5 Img</th><th>Board By Experts 6</th><th>Board By Experts 6 Img</th><th>Board By Experts 7</th><th>Board By Experts 7 Img</th><th>Board By Experts 8</th><th>Board By Experts 8 Img</th><th>Board By Experts 9</th><th>Board By Experts 9 Img</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($community as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td><td>{{ $item->president }}</td><td>{{ $item->president_img }}</td><td>{{ $item->vice_President_1 }}</td><td>{{ $item->vice_President_1_img }}</td><td>{{ $item->vice_President_2 }}</td><td>{{ $item->vice_President_2_img }}</td><td>{{ $item->secretary_1 }}</td><td>{{ $item->secretary_1_img }}</td><td>{{ $item->secretary_2 }}</td><td>{{ $item->secretary_2_img }}</td><td>{{ $item->board_by_position_1 }}</td><td>{{ $item->board_by_position_1_img }}</td><td>{{ $item->board_by_position_2 }}</td><td>{{ $item->board_by_position_2_img }}</td><td>{{ $item->board_by_position_3 }}</td><td>{{ $item->board_by_position_3_img }}</td><td>{{ $item->board_by_experts_1 }}</td><td>{{ $item->board_by_experts_1_img }}</td><td>{{ $item->board_by_experts_2 }}</td><td>{{ $item->board_by_experts_2_img }}</td><td>{{ $item->board_by_experts_3 }}</td><td>{{ $item->board_by_experts_3_img }}</td><td>{{ $item->board_by_experts_4 }}</td><td>{{ $item->board_by_experts_4_img }}</td><td>{{ $item->board_by_experts_5 }}</td><td>{{ $item->board_by_experts_5_img }}</td><td>{{ $item->board_by_experts_6 }}</td><td>{{ $item->board_by_experts_6_img }}</td><td>{{ $item->board_by_experts_7 }}</td><td>{{ $item->board_by_experts_7_img }}</td><td>{{ $item->board_by_experts_8 }}</td><td>{{ $item->board_by_experts_8_img }}</td><td>{{ $item->board_by_experts_9 }}</td><td>{{ $item->board_by_experts_9_img }}</td>
                                        <td>
                                            <a href="{{ url('/community/' . $item->id) }}" title="View Community"><button class="d-none btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>

                                            <a href="{{ url('/community/' . $item->id . '/edit') }}" title="Edit Community"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/community' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="d-none btn btn-danger btn-sm" title="Delete Community" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $community->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>

            
        </div>
    </div>


@endsection
