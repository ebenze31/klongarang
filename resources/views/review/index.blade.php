@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div style="background:#a0ccee; border-color: #fff;" class="card">
                    <div class="card-body">
                        <h2 style="text-shadow: 1px 1px #FF0000 " class="text-white">คะแนนความพอใจ</h2>
                        <br>
                        <div style="color: #fdf744;">
                            @switch($star)
                                @case ("1")
                                    <i class="fas fa-star"></i>
                                    @break
                                @case ("2")
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    @break
                                @case ("3")
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    @break
                                @case ("4") 
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    @break
                                @case ("5")
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    @break
                            @endswitch
                            @if($star == 0 )
                                <span>&nbsp;</span>
                            @endif
                            @if($star < 1 && $star > 0 )
                                <i class="fas fa-star-half"></i>
                            @endif
                            @if($star > 1 && $star < 2)
                                <i class="fas fa-star"></i><i class="fas fa-star-half"></i>
                            @endif
                            @if($star > 2 && $star < 3)
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half"></i>
                            @endif
                            @if($star > 3 && $star < 4)
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half"></i>
                            @endif
                            @if($star > 4 && $star < 5)
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half"></i>
                            @endif
                            

                            <span class="text-danger">{{number_format($star, 1, '.', '')}}/5</span> <span style="font-size: 13px;" class="text-dark">({{$total_user}} รีวิว)</span>
                        </div>
                        <a href="{{ url('/review/create') }}" class="d-none btn btn-success btn-sm" title="Add New Review">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/review') }}" accept-charset="UTF-8" class="d-none form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                        <hr>
                            @foreach($review as $item)
                            <div>
                                <div>
                                    <h5>คุณ {{ $item->name }}</h5>
                                </div>
                                <div class="col-md-9" style="color: #fdf744;">
                                    @switch($item->get_score)
                                        @case ("1")
                                            <i class="fas fa-star"></i>
                                            @break
                                        @case ("2")
                                            <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                            @break
                                        @case ("3")
                                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                            @break
                                        @case ("4") 
                                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                            @break
                                        @case ("5")
                                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                            @break
                                    @endswitch
                                    @if($item->get_score > 1 && $item->get_score < 2)
                                        <i class="fas fa-star"></i><i class="fas fa-star-half"></i>
                                    @endif
                                    @if($item->get_score > 2 && $item->get_score < 3)
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half"></i>
                                    @endif
                                    @if($item->get_score > 3 && $item->get_score < 4)
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half"></i>
                                    @endif
                                    @if($item->get_score > 4 && $item->get_score < 5)
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half"></i>
                                    @endif
                                    <span style="font-size: 13px;" class="text-danger">({{ $item->get_score }})</span>
                                </div>
                                <div class="col-md-9">
                                    {{ $item->comment }}
                                </div>
                                <br>
                                <div class="col-md-12">
                                    @if(!empty($item->photo_1))
                                    <img width="200" height="120" src="{{ asset('/img/klongarang/background.jpg') }}" alt="">
                                    @endif
                                    @if(!empty($item->photo_2))
                                    <img width="200" height="120" src="{{ url('storage')}}/{{ $item->photo_2 }}" alt="">
                                    @endif
                                    @if(!empty($item->photo_3))
                                    <img width="200" height="120" src="{{ url('storage')}}/{{ $item->photo_3 }}" alt="">
                                    @endif
                                    @if(!empty($item->photo_4))
                                    <img width="200" height="120" src="{{ url('storage')}}/{{ $item->photo_4 }}" alt="">
                                    @endif
                                    @if(!empty($item->photo_5))
                                    <img width="200" height="120" src="{{ url('storage')}}/{{ $item->photo_5 }}" alt="">
                                    @endif
                                </div>
                                <br>
                                @if(Auth::check())
                                    @if(Auth::user()->profile->role == "คนดูแล" )
                                        <div class="float-right">
                                            <!-- <a href="{{ url('/review/' . $item->id) }}" title="View Review"><button class="btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/review/' . $item->id . '/edit') }}" title="Edit Review"><button class="btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a> -->

                                            <!-- <form method="POST" action="{{ url('/review' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn-danger btn-sm" title="Delete Review" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form> -->
                                        </div>
                                        <br>
                                    @endif
                                @endif
                                <hr>
                            </div>
                            @endforeach
                            <div class="pagination-wrapper"> {!! $review->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
