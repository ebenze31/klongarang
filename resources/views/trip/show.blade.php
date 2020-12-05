@extends('layout.main')

@section('content')

<section class="whats-news-area pt-50 pb-20">
    <div class="container">
        <div class="row">
        <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">Trip {{ $trip->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/trip') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/trip/' . $trip->id . '/edit') }}" title="Edit Trip"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('trip' . '/' . $trip->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Trip" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $trip->id }}</td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $trip->name }} </td></tr><tr><th> Title </th><td> {{ $trip->title }} </td></tr><tr><th> 1 Day Trip </th><td> {{ $trip->1_day_trip }} </td></tr><tr><th> 2 Days Trip </th><td> {{ $trip->2_days_trip }} </td></tr><tr><th> 3 Days Trip </th><td> {{ $trip->3_days_trip }} </td></tr><tr><th> Cover Photo </th><td> {{ $trip->cover_photo }} </td></tr><tr><th> Photo 1 </th><td> {{ $trip->photo_1 }} </td></tr><tr><th> Photo 2 </th><td> {{ $trip->photo_2 }} </td></tr><tr><th> Photo 3 </th><td> {{ $trip->photo_3 }} </td></tr><tr><th> Photo 4 </th><td> {{ $trip->photo_4 }} </td></tr><tr><th> Photo 5 </th><td> {{ $trip->photo_5 }} </td></tr><tr><th> Photo 6 </th><td> {{ $trip->photo_6 }} </td></tr><tr><th> Photo 7 </th><td> {{ $trip->photo_7 }} </td></tr><tr><th> Photo 8 </th><td> {{ $trip->photo_8 }} </td></tr><tr><th> Photo 9 </th><td> {{ $trip->photo_9 }} </td></tr><tr><th> Photo 10 </th><td> {{ $trip->photo_10 }} </td></tr><tr><th> Day 1 Morning </th><td> {{ $trip->day_1_morning }} </td></tr><tr><th> Day 1 Noon </th><td> {{ $trip->day_1_noon }} </td></tr><tr><th> Day 1 Afternoon </th><td> {{ $trip->day_1_afternoon }} </td></tr><tr><th> Day 1 Evening </th><td> {{ $trip->day_1_evening }} </td></tr><tr><th> Day 1 Night </th><td> {{ $trip->day_1_night }} </td></tr><tr><th> Day 2 Morning </th><td> {{ $trip->day_2_morning }} </td></tr><tr><th> Day 2 Noon </th><td> {{ $trip->day_2_noon }} </td></tr><tr><th> Day 2 Afternoon </th><td> {{ $trip->day_2_afternoon }} </td></tr><tr><th> Day 2 Evening </th><td> {{ $trip->day_2_evening }} </td></tr><tr><th> Day 2 Night </th><td> {{ $trip->day_2_night }} </td></tr><tr><th> Day 3 Morning </th><td> {{ $trip->day_3_morning }} </td></tr><tr><th> Day 3 Noon </th><td> {{ $trip->day_3_noon }} </td></tr><tr><th> Day 3 Afternoon </th><td> {{ $trip->day_3_afternoon }} </td></tr><tr><th> Day 3 Evening </th><td> {{ $trip->day_3_evening }} </td></tr><tr><th> Day 3 Night </th><td> {{ $trip->day_3_night }} </td></tr><tr><th> Remark </th><td> {{ $trip->remark }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
