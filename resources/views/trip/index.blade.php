@extends('layout.main')

@section('content')

<section class="whats-news-area pt-50 pb-20">
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
    </div>
@endsection
