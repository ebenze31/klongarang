@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Review {{ $review->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/review') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/review/' . $review->id . '/edit') }}" title="Edit Review"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('review' . '/' . $review->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Review" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $review->id }}</td>
                                    </tr>
                                    <tr><th> Comment </th><td> {{ $review->comment }} </td></tr><tr><th> Total Score </th><td> {{ $review->total_score }} </td></tr><tr><th> Get Score </th><td> {{ $review->get_score }} </td></tr><tr><th> Total User </th><td> {{ $review->total_user }} </td></tr><tr><th> Photo 1 </th><td> {{ $review->photo_1 }} </td></tr><tr><th> Photo 2 </th><td> {{ $review->photo_2 }} </td></tr><tr><th> Photo 3 </th><td> {{ $review->photo_3 }} </td></tr><tr><th> Photo 4 </th><td> {{ $review->photo_4 }} </td></tr><tr><th> Photo 5 </th><td> {{ $review->photo_5 }} </td></tr><tr><th> Share </th><td> {{ $review->share }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
