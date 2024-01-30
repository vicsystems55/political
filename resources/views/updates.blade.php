@extends('layouts.app')

@section('content')

  <!-- blog section start here -->
  <div class="about-us-section-area about-bg" style="background-image: url(assets/img/about-bg.png);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10 col-12">
                <div class="about-inner news">
                    <h1 class="title">Events</h1>
                </div>
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="news-two.html">Event Updates</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog section End here -->

<!-- blog items Section Start Here -->
<div class="issues-around-us-section style-01">
  <div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="news-single-items-two">
                <div class="thumbnail">
                    <img src="assets/img/home-six/blog/event1.jpg" alt="">
                    {{-- <span class="tag">Politics</span> --}}
                </div>
                <div class="content">
                    <div class="post-meta">
                        <div class="author">
                            <div class="icon">
                                <img src="assets/img/home-six/icon/themeim.png" alt="">
                            </div>
                            {{-- <p class="admin">Themeim</p> --}}
                        </div>
                        <div class="post-date">
                            <div class="icon">
                                <img src="assets/img/home-six/icon/calender-02.png" alt="">
                            </div>
                            {{-- <p class="date">22 OCT, 2021</p> --}}
                        </div>
                    </div>
                    <h4 class="title"></h4>
                    <p></p>
                        <div class="btn-wrapper">
                        {{-- <a href="news-single.html" class="boxed-btn event-btn"><i class="fas fa-arrow-right"></i>Read More</a> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="news-single-items-two">
                <div class="thumbnail">
                    <img src="assets/img/home-six/blog/event2.jpg" alt="">
                    {{-- <span class="tag">Politics</span> --}}
                </div>
                <div class="content">
                    <div class="post-meta">
                        <div class="author">
                            <div class="icon">
                                <img src="assets/img/home-six/icon/themeim.png" alt="">
                            </div>
                            {{-- <p class="admin">Themeim</p> --}}
                        </div>
                        <div class="post-date">
                            <div class="icon">
                                <img src="assets/img/home-six/icon/calender-02.png" alt="">
                            </div>
                            {{-- <p class="date">22 OCT, 2021</p> --}}
                        </div>
                    </div>
                    <h4 class="title"></h4>
                    <p></p>
                        <div class="btn-wrapper">
                        {{-- <a href="news-single.html" class="boxed-btn event-btn"><i class="fas fa-arrow-right"></i>Read More</a> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="news-single-items-two">
                <div class="thumbnail">
                    <img src="assets/img/home-six/blog/event3.jpg" alt="">
                    {{-- <span class="tag">Politics</span> --}}
                </div>
                <div class="content">
                    <div class="post-meta">
                        <div class="author">
                            <div class="icon">
                                <img src="assets/img/home-six/icon/themeim.png" alt="">
                            </div>
                            {{-- <p class="admin">Themeim</p> --}}
                        </div>
                        <div class="post-date">
                            <div class="icon">
                                {{-- <img src="assets/img/home-six/icon/calender-02.png" alt=""> --}}
                            </div>
                            {{-- <p class="date">22 OCT, 2021</p> --}}
                        </div>
                    </div>
                    <h4 class="title"></h4>
                    <p></p>
                        <div class="btn-wrapper">
                        {{-- <a href="news-single.html" class="boxed-btn event-btn"><i class="fas fa-arrow-right"></i>Read More</a> --}}
                    </div>
                </div>
            </div>
        </div>


    </div>

  </div>
</div>
<!-- blog Items Section Start Here -->

@endsection
