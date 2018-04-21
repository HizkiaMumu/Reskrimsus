@extends('master-news')
@section('title', 'HOME | TIPIDKOR Polda Kalimantan Timur')
@section('style')

@endsection
@section('content')

<div class="container">
  <div class="section">
    <div class="row">
      <div class="site-content col-md-9">
        <div class="row">
          <div class="col-sm-12">
            <div id="home-slider">
              @foreach($berita_baru as $item)
                <div class="post feature-post">
                  <div class="entry-header">
                    <div class="entry-thumbnail">
                      <img class="img-responsive" src="{{ $item->thumbnail }}" alt="" />
                    </div>
                    <div class="catagory world"><a href="#">{{ $item->kategori->kategori }}</a></div>
                  </div>
                  <div class="post-content">
                    <div class="entry-meta">
                      <ul class="list-inline">
                        <li class="publish-date"><i class="fa fa-clock-o"></i><a href="#"> {{ $item->created_at }} </a></li>
                        <li class="views"><i class="fa fa-eye"></i><a href="#">15k</a></li>
                        <li class="loves"><i class="fa fa-heart-o"></i><a href="#">{{ $item->likes }}</a></li>
                        <li class="comments"><i class="fa fa-comment-o"></i><a href="#">189</a></li>
                      </ul>
                    </div>
                    <h2 class="entry-title">
                      <a href="/tipidkor/news/{{ $item->id }}">{{ $item->title }}</a>
                    </h2>
                  </div>
                </div><!--/post-->
              @endforeach
            </div>
          </div>
        </div>
        <div class="row">
          @foreach($berita->slice(0, 6) as $item)
            <div class="col-sm-4">
              <div class="post feature-post">
                <div class="entry-header">
                  <div class="entry-thumbnail">
                    <img class="img-responsive" src="{{ $item->thumbnail }}" alt="" />
                  </div>
                  <div class="catagory technology"><span><a href="#">{{ $item->kategori->kategori }}</a></span></div>
                </div>
                <div class="post-content">
                  <div class="entry-meta">
                    <ul class="list-inline">
                      <li class="publish-date"><i class="fa fa-clock-o"></i><a href="#">{{ \Carbon\Carbon::now()->diffForHumans($item->created_at) }}</a></li>
                      <li class="views"><i class="fa fa-eye"></i><a href="#">15k</a></li>
                      <li class="loves"><i class="fa fa-heart-o"></i><a href="#">278</a></li>
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
        <div class="row" style="margin-top: 20px;">
          <div class="col-sm-12">
            <a href="/tipidkor/news/all">
              <button type="button" class="btn btn-info btn-block">See more</button>
            </a>
          </div>
        </div>
      </div><!--/#content-->

      <div class="col-md-3 visible-md visible-lg">
        <div class="add featured-add">
          <a href="#"><img class="img-responsive" src="/news/images/post/add/add1.jpg" alt="" /></a>
        </div>
        <div id="sitebar" style="margin-top: 20px;">
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

					<div class="widget meta-widget">
						<h1 class="section-title title">Widget</h1>
						<div class="meta-tab">
							<ul class="nav nav-tabs nav-justified" role="tablist">
								<li role="presentation" class="active"><a href="#tag" data-toggle="tab" aria-expanded="false"><i class="fa fa-inbox"></i>Tag</a></li>
							</ul>
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="comment">
									<ul class="list-inline tag-cloud">
                    @foreach($kategori as $item)
                      <li><a href="#">{{ $item->kategori }}</a>,</li>
                    @endforeach
                	</ul>
								</div>
							</div>
						</div>
					</div><!--/#widget-->

				</div>
      </div><!--/#add-->
    </div>
  </div><!--/.section-->

  <div class="section add inner-add">
    <a href="#"><img class="img-responsive" src="/news/images/post/add/add2.jpg" alt="" /></a>
  </div><!--/.section-->

</div><!--/.container-->

@endsection
@section('script')

@endsection
