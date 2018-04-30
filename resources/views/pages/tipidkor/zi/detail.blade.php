@extends('master-zi')
@section('title', $aprbDetail->title)
@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url(/images/background/3.jpg);">
    <div class="auto-container">
        <h1>{{ $aprbDetail->title }}</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="/tipidkor/zi">Home </a></li>
            <li>{{ $aprbDetail->title }}</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!--Sidebar Page-->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Side-->
            <div class="content-side col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <!--Blog Classic-->
                <div class="blog-detail">

                    <!--News Block four-->
                    <div class="blog-single">
                        <div class="inner-box">
                            <div class="image">
                                <a href="blog-single.html"><img src="/images/resource/blog-1.jpg" alt="" /></a>
                            </div>
                            <div class="lower-box">
                                <div class="date">
                                    <h3>{{ date('d', strtotime($aprbDetail->created_at)) }}</h3>
                                    <span>{{ date('F', mktime(0, 0, 0, strtotime($aprbDetail->created_at), 10)) }} {{ date('Y', strtotime($aprbDetail->created_at)) }}</span>
                                </div>
                                <div class="info">
                                    <h3><a href="blog-single.html">{{ $aprbDetail->title }}</a></h3>
                                </div>
                            </div>
                            <div class="content">
                              {!! $aprbDetail->content !!}
                            </div>

                            <!-- Post Shere Option -->
                            <div class="post-share-options clearfix">
                                <div class="pull-left tags">
                                    <span>Terakhir diperbaharui : </span>
                                    <a href="#">{{ Carbon\Carbon::parse($aprbDetail->created_at)->diffForHumans(Carbon\Carbon::now()) }}</a>
                                </div>
                                <div class="pull-right social-icon-three clearfix">
                                    <a href="#"><span class="fa fa-facebook-f"></span></a>
                                    <a href="#"><span class="fa fa-twitter"></span></a>
                                    <a href="#"><span class="fa fa-vine"></span></a>
                                    <a href="#"><span class="fa fa-pinterest"></span></a>
                                    <a href="#"><span class="fa fa-instagram"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                 <!--Comments Area-->
                <div class="comments-area">
                  <div class="group-title"><h2>Post Comment</h2></div>
                  <div id="disqus_thread"></div>
                </div>
                <!--End Comments Area-->

            </div>

            <!--Sidebar-->
            <div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <aside class="sidebar blog-sidebar">

                    <!--Blog Category Widget-->
                    <div class="sidebar-widget sidebar-blog-category">
                        <div class="sidebar-title">
                            <h2>AREA PERUBAHAN REFORMASI BIROKRASI</h2>
                        </div>
                        <div class="widget-content">
                            <ul class="blog-cat">
                              @foreach($aprb as $item)
                                <li><a href="/tipidkor/zona-integritas/{{ $item->id }}">{{ $item->title }}</a></li>
                              @endforeach
                            </ul>
                        </div>
                    </div>

                </aside>
            </div>

        </div>
    </div>
</div>
<!-- End Sidebar Container -->

@endsection
@section('script')

  <script>

    var disqus_config = function () {
    this.page.url = '{{ Request::url() }}';  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = {{ $aprbDetail->id }}; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };

    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://tipidkor.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();

  </script>

  <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

@endsection
