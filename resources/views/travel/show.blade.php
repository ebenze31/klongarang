@extends('layout.main')

@section('content')

<div class="youtube-area">
    <div class="container">
        <div class="row">
            <div class="weekly-news-area pt-50">
                <div class="container">
                   <div class="weekly-wrapper">
                        <div class="row">
                            <div class="col-12">
                                <div class="weekly-news-active dot-style d-flex dot-style">
                                    @php
                                        $photo_5 = $travel->photo_5;
                                    @endphp
                                    <div class="weekly-single">
                                        <div class="weekly-img">
                                            <img height="235" src="{{ url('storage')}}/{{ $travel->photo_1 }}" alt="">
                                        </div>
                                    </div> 
                                    <div class="weekly-single">
                                        <div class="weekly-img">
                                                <img height="235" src="{{ url('storage')}}/{{ $travel->photo_2 }}" alt="">
                                        </div>
                                    </div>
                                    <div class="weekly-single">
                                        <div class="weekly-img">
                                            <img height="235" src="{{ url('storage')}}/{{ $travel->photo_3 }}" alt="">
                                        </div>
                                    </div> 
                                    <div class="weekly-single">
                                        <div class="weekly-img">
                                            <img height="235" src="{{ url('storage')}}/{{ $travel->photo_4 }}" alt="">
                                        </div>
                                    </div>
                                    @if (!empty($photo_5))
                                    <div class="weekly-single">
                                        <div class="weekly-img">
                                            <img height="235" src="{{ url('storage')}}/{{ $travel->photo_5 }}" alt="">
                                        </div>
                                    </div> 
                                    @endif
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
            </div>
            
        </div>
    </div>
</div> 
<!-- About US Start -->
<div class="about-area">
    <div class="container">
           <div class="row">
                <div class="col-lg-8">
                    <!-- Trending Tittle -->
                    <div class="card" style="background:none; border:none ">
                        <div class="about-right mb-90">
                            <div class="about-img">
                                <img src="assets/img/trending/trending_top.jpg" alt="">
                            </div>
                            <div class="section-tittle mb-30 pt-30">
                                <h2 style="text-shadow: 1px 1px #FF0000 " class="text-white">{{ $travel->name }}</h2>
                            </div>
                            <div class="about-prea">
                                <span style="color: #000" class="about-pera1 mb-25"><b> หมวดหมู่ :</b> {{ $travel->category }}</p>
                                
                                <span><b>รายละเอียด :</b> {{ $travel->detail }}</span>
                            </div> 
                            
                            <div class="social-share pt-30">
                                <div class="section-tittle">
                                    <h3 class="mr-20">ติดต่อ :</h3>
                                    <ul>
                                        <li><a href="https://www.facebook.com/%E0%B8%9A%E0%B9%89%E0%B8%B2%E0%B8%99%E0%B8%84%E0%B8%A5%E0%B8%AD%E0%B8%87%E0%B8%AD%E0%B8%B2%E0%B8%A3%E0%B8%B2%E0%B8%87-470519779751019" target="_blank"><img src="{{ asset('/img/icon/icon-fb.png') }}" alt=""></a></li>
                                        <li><a href="http://line.me/ti/p/~nongbenze012" target="_blank"><img src="{{ asset('/img/icon/icon-line.png') }}" alt=""></a></li>
                                        <li><a href="mailto:bb@gmail.com" target="_blank"><img src="{{ asset('/img/icon/icon-mail.png') }}" alt=""></a></li>
                                        <li><a href="tel:0999999999" target="_blank"><img src="{{ asset('/img/icon/icon-tel.png') }}" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4"><br><br><br><br><br>
                    <form class="form-contact contact_form mb-80" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100 error" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Enter Message"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control error" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control error" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control error" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                        </div>
                    </form>
           </div>
    </div>
</div>
<!-- About US End -->
<!-- 

<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Travel {{ $travel->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/travel') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/travel/' . $travel->id . '/edit') }}" title="Edit Travel"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('travel' . '/' . $travel->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Travel" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $travel->id }}</td>
                                    </tr>
                                    <tr><th> Category </th><td> {{ $travel->category }} </td></tr><tr><th> Name </th><td> {{ $travel->name }} </td></tr><tr><th> Detail </th><td> {{ $travel->detail }} </td></tr><tr><th> Type </th><td> {{ $travel->type }} </td></tr><tr><th> Photo 1 </th><td> {{ $travel->photo_1 }} </td></tr><tr><th> Photo 2 </th><td> {{ $travel->photo_2 }} </td></tr><tr><th> Photo 3 </th><td> {{ $travel->photo_3 }} </td></tr><tr><th> Photo 4 </th><td> {{ $travel->photo_4 }} </td></tr><tr><th> Photo 5 </th><td> {{ $travel->photo_5 }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> -->
@endsection