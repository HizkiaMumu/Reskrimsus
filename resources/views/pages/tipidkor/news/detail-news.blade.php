@extends('master-news')
@section('title', $berita->title . ' | TIPIDKOR Polda Kalimantan Timur')
@section('style')

  <style>

    .page-breadcrumbs{
      margin-top: 0px !important;
    }

  </style>

@endsection
@section('content')

<div class="container">
    <div class="page-breadcrumbs">
      <h1 class="section-title">{{ $berita->title }}</h1>
      <div class="world-nav cat-menu">
        <ul class="list-inline">
          <li class="active"><a href="#">{{ $berita->kategori->kategori }}</a></li>
        </ul>
      </div>
    </div>
    <div class="section">
      <div class="row">
        <div class="col-sm-9">
          <div id="site-content" class="site-content">
            <div class="row">
              <div class="col-sm-12">
                <div class="left-content">
                  <div class="details-news">
                    <div class="post">
                      <div class="entry-header">
                        <div class="entry-thumbnail">
                          <img class="img-responsive" src="{{ $berita->thumbnail }}" alt="">
                        </div>
                      </div>
                      <div class="post-content">
                        {!! $berita->isi !!}
                      </div>
                    </div><!--/post-->
                  </div><!--/.section-->
                </div><!--/.left-content-->
              </div>



            </div>
          </div><!--/#site-content-->
          <div class="row">
            <div class="col-sm-12">
              <div class="post google-add">
                <div class="add inner-add text-center">
                  <a href="#"><img class="img-responsive" src="images/post/google-add.jpg" alt=""></a>
                </div><!--/.section-->
              </div><!--/.google-add-->

              <div class="comments-wrapper">
                <h1 class="section-title title">Comments</h1>
                <div id="disqus_thread"></div>
              </div>

              <div class="section">
                <h1 class="section-title">Artikel terkait</h1>
                <div class="row">
                  @foreach($artikel_terkait as $item)
                    <div class="col-sm-4">
                    <div class="post medium-post">
                      <div class="entry-header">
                        <div class="entry-thumbnail">
                          <img class="img-responsive" src="{{ $item->thumbnail }}" alt="{{ $item->title }}">
                        </div>
                      </div>
                      <div class="post-content">
                        <div class="entry-meta">
                          <ul class="list-inline">
                            <li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> Nov 15, 2015 </a></li>
                            <li class="views"><a href="#"><i class="fa fa-eye"></i>15k</a></li>
                            <li class="loves"><a href="#"><i class="fa fa-heart-o"></i>278</a></li>
                          </ul>
                        </div>
                        <h2 class="entry-title">
                          <a href="/tipidkor/news/{{ $item->id }}">{{ $item->title }}</a>
                        </h2>
                      </div>
                    </div><!--/post-->
                  </div>
                  @endforeach
                </div>
              </div><!--/.section -->
            </div>
          </div>
        </div><!--/.col-sm-9 -->

        <div class="col-sm-3">
          <div id="sitebar">
            <div class="widget">
              <div class="add featured-add">
                <a href="#"><img class="img-responsive" src="images/post/add/add1.jpg" alt=""></a>
              </div>
            </div><!--/#widget-->

            <div class="widget follow-us">
              <h1 class="section-title title">Follow Us</h1>
              <ul class="list-inline social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              </ul>
            </div><!--/#widget-->

            <div class="widget">
              <h1 class="section-title title">This is Rising!</h1>
              <ul class="post-list">
                @foreach($kategori as $item)
                  @if($item->beritas != null)
                    <li>
                      <div class="post small-post">
                        <div class="entry-header">
                          <div class="entry-thumbnail">
                            <img class="img-responsive" src="{{ $item->beritas->first()['thumbnail'] }}" alt="{{ $item->beritas->first()['title'] }}">
                          </div>
                        </div>
                        <div class="post-content">
                          <div class="video-catagory"><a href="#">{{ $item->kategori }}</a></div>
                          <h2 class="entry-title">
                            <a href="/tipidkor/news/{{ $item->beritas->first()['id'] }}">{{ str_limit($item->beritas->first()['title'], 30) }}</a>
                          </h2>
                        </div>
                      </div><!--/post-->
                    </li>
                  @endif
                @endforeach
              </ul>
            </div><!--/#widget-->
          </div><!--/#sitebar-->
        </div>
      </div>
    </div><!--/.section-->
  </div>

@endsection
@section('script')

  <script>

    var disqus_config = function () {
    this.page.url = '{{ Request::url() }}';  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = {{ $berita->id }}; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
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
