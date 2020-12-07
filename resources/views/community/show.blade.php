@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Community {{ $community->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/community') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/community/' . $community->id . '/edit') }}" title="Edit Community"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('community' . '/' . $community->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Community" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $community->id }}</td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $community->name }} </td></tr><tr><th> President </th><td> {{ $community->president }} </td></tr><tr><th> President Img </th><td> {{ $community->president_img }} </td></tr><tr><th> Vice President 1 </th><td> {{ $community->vice_President_1 }} </td></tr><tr><th> Vice President 1 Img </th><td> {{ $community->vice_President_1_img }} </td></tr><tr><th> Vice President 2 </th><td> {{ $community->vice_President_2 }} </td></tr><tr><th> Vice President 2 Img </th><td> {{ $community->vice_President_2_img }} </td></tr><tr><th> Secretary 1 </th><td> {{ $community->secretary_1 }} </td></tr><tr><th> Secretary 1 Img </th><td> {{ $community->secretary_1_img }} </td></tr><tr><th> Secretary 2 </th><td> {{ $community->secretary_2 }} </td></tr><tr><th> Secretary 2 Img </th><td> {{ $community->secretary_2_img }} </td></tr><tr><th> Board By Position 1 </th><td> {{ $community->board_by_position_1 }} </td></tr><tr><th> Board By Position 1 Img </th><td> {{ $community->board_by_position_1_img }} </td></tr><tr><th> Board By Position 2 </th><td> {{ $community->board_by_position_2 }} </td></tr><tr><th> Board By Position 2 Img </th><td> {{ $community->board_by_position_2_img }} </td></tr><tr><th> Board By Position 3 </th><td> {{ $community->board_by_position_3 }} </td></tr><tr><th> Board By Position 3 Img </th><td> {{ $community->board_by_position_3_img }} </td></tr><tr><th> Board By Experts 1 </th><td> {{ $community->board_by_experts_1 }} </td></tr><tr><th> Board By Experts 1 Img </th><td> {{ $community->board_by_experts_1_img }} </td></tr><tr><th> Board By Experts 2 </th><td> {{ $community->board_by_experts_2 }} </td></tr><tr><th> Board By Experts 2 Img </th><td> {{ $community->board_by_experts_2_img }} </td></tr><tr><th> Board By Experts 3 </th><td> {{ $community->board_by_experts_3 }} </td></tr><tr><th> Board By Experts 3 Img </th><td> {{ $community->board_by_experts_3_img }} </td></tr><tr><th> Board By Experts 4 </th><td> {{ $community->board_by_experts_4 }} </td></tr><tr><th> Board By Experts 4 Img </th><td> {{ $community->board_by_experts_4_img }} </td></tr><tr><th> Board By Experts 5 </th><td> {{ $community->board_by_experts_5 }} </td></tr><tr><th> Board By Experts 5 Img </th><td> {{ $community->board_by_experts_5_img }} </td></tr><tr><th> Board By Experts 6 </th><td> {{ $community->board_by_experts_6 }} </td></tr><tr><th> Board By Experts 6 Img </th><td> {{ $community->board_by_experts_6_img }} </td></tr><tr><th> Board By Experts 7 </th><td> {{ $community->board_by_experts_7 }} </td></tr><tr><th> Board By Experts 7 Img </th><td> {{ $community->board_by_experts_7_img }} </td></tr><tr><th> Board By Experts 8 </th><td> {{ $community->board_by_experts_8 }} </td></tr><tr><th> Board By Experts 8 Img </th><td> {{ $community->board_by_experts_8_img }} </td></tr><tr><th> Board By Experts 9 </th><td> {{ $community->board_by_experts_9 }} </td></tr><tr><th> Board By Experts 9 Img </th><td> {{ $community->board_by_experts_9_img }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
