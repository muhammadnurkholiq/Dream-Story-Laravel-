@extends('layouts.main')



@section('content')
    <div class="content">
        <div class="container">
            {{-- jumbotron --}}
            <div class="jumbotron jumbotron-fluid">
                <img src="image/home-1.png" alt="" srcset="">
            </div>
            {{-- ending jumbotron --}}

            {{-- story  --}}
            <div class="story-home">
                {{-- latest update  --}}
                <div class="story">
                    <h1>Latest Update</h1>
                    <hr class="hr2">
                    {{-- content story --}}
                    <div class="story-content">
                        <a href="/about">
                            <div class="data">
                                <div class="data-cover">
                                    <div class="data-hover">
                                        <img src="image/dilan.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="data">
                            <div class="data-cover">
                                <div class="data-hover">
                                    <img src="image/dilan 2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="data">
                            <div class="data-cover">
                                <div class="data-hover">
                                    <img src="image/dear nathan.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="data">
                            <div class="data-cover">
                                <div class="data-hover">
                                    <img src="image/dear nathan 2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="data">
                            <div class="data-cover">
                                <div class="data-hover">
                                    <img src="image/aadc.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="data">
                            <div class="data-cover">
                                <div class="data-hover">
                                    <img src="image/aadc 2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="data2">     
                            <div class="view-all">                
                                <a href="/">
                                    View all >
                                </a>
                            </div>
                        </div>
                    </div>
                    {{-- ending content story --}}
                </div>
                {{-- ending latest update  --}}

                {{-- other books  --}}
                <div class="story">
                    <h1>Other Book</h1>
                    <hr class="hr2">
                    {{-- content story --}}
                    <div class="story-content">
                        <div class="data">
                            <div class="data-cover">
                                <div class="data-hover">
                                    <img src="image/dilan.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="data">
                            <div class="data-cover">
                                <div class="data-hover">
                                    <img src="image/dilan 2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="data">
                            <div class="data-cover">
                                <div class="data-hover">
                                    <img src="image/dear nathan.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="data">
                            <div class="data-cover">
                                <div class="data-hover">
                                    <img src="image/dear nathan 2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="data">
                            <div class="data-cover">
                                <div class="data-hover">
                                    <img src="image/aadc.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="data">
                            <div class="data-cover">
                                <div class="data-hover">
                                    <img src="image/aadc 2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="data2">     
                            <div class="view-all">                
                                <a href="/">
                                    View all >
                                </a>
                            </div>
                        </div>
                    </div>
                    {{-- ending content story --}}
                </div>
                {{-- ending other books  --}}

            </div>
            {{-- ending story  --}}

        </div>
    </div>
@endsection