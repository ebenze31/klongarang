@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div style="background:none;border:none;" class="card">
                    <h2 style="text-shadow: 1px 1px #FF0000 " class="text-white">{{ $product->name }}</h2>
                    <div class="card-body">
                                <a href="{{ url('/products') }}" title="Back"><button class="btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> ย้อนกลับ</button></a>
                        @if(Auth::check())
                            @if(Auth::user()->profile->role == "คนดูแล" )
                                <a href="{{ url('/products/' . $product->id . '/edit') }}" title="Edit Product"><button class="btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไข</button></a>

                                <form method="POST" action="{{ url('products' . '/' . $product->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn-danger btn-sm" title="Delete Product" onclick="return confirm(&quot;ยืนยันการลบ ?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> ลบ</button>
                                </form>
                            @endif
                        @endif
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>  </th>
                                        <td><img width="350" height="320" src="{{ url('storage')}}/{{ $product->photo }}" alt=""> </td>
                                    </tr>
                                    <tr>
                                        <th class="d-none">ID</th>
                                        <td class="d-none">{{ $product->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> หมวดหมู่ </th>
                                        <td> {{ $product->category }} </td>
                                    </tr>
                                    <tr>
                                        <th> ชื่อ </th>
                                        <td> {{ $product->name }} </td>
                                    </tr>
                                    <tr>
                                        <th> รายละเอียด </th>
                                        <td> {{ $product->detail }} </td>
                                    </tr>
                                    <tr>
                                        <th> สรรพคุณ , ประโยชน์ </th>
                                        <td> {{ $product->benefit }} </td>
                                    </tr>
                                    <tr>
                                        <th> วิธีใช้ </th>
                                        <td> {{ $product->how_to_use }} </td>
                                    </tr>
                                </tbody>
                            </table>
                            @include('contact')
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
