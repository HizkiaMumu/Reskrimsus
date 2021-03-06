@extends('master-news')
@section('title', 'ALL NEWS | TIPIDKOR Polda Kalimantan Timur')
@section('style')

@endsection
@section('content')

<div class="container">
  <div class="section">
    <div class="row">
      <div class="site-content col-md-12">
        <div class="row">
          @foreach($berita as $item)
            @if ($item->user->subdit == 'tipidkor' || $item->user->subdit == 'ditreskrimsus')
              <div class="col-sm-4 artikel">
                <div class="post feature-post">
                  <div class="entry-header">
                    <div class="entry-thumbnail">
                      <img class="img-responsive" src="{{ $item->thumbnail }}" style="height: 177px !important" alt="" />
                    </div>
                    <div class="catagory technology"><span><a href="#">{{ $item->kategori->kategori }}</a></span></div>
                  </div>
                  <div class="post-content">
                    <div class="entry-meta">
                      <ul class="list-inline">
                        <li class="publish-date"><i class="fa fa-clock-o"></i><a href="#">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans(Carbon\Carbon::now()) }}</a></li>
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
            @endif
            @php $numberOfColumns++ @endphp
            @if ($numberOfColumns % 3 == 0)
                <div class="row"></div>
            @endif
          @endforeach
        </div>
      </div><!--/#content-->
    </div>
  </div><!--/.section-->

  <!--<div class="section add inner-add">-->
  <!--  <a href="#"><img class="img-responsive" src="/news/images/post/add/add2.jpg" alt="" /></a>-->
  <!--</div><!--/.section-->

</div><!--/.container-->

@endsection
@section('script')

  <script>

    $(document).ready(function(){

      $("#search").on("keyup", function(){
        if ($("#search").val != "") {
          $(".artikel").hide();
          var keyword = $('#search').val();
          $('.artikel').each(function(){
             if($(this).text().toUpperCase().indexOf(keyword.toUpperCase()) != -1){
               $(this).show();
             }
          });
        } else {
          $(".artikel").show();
        }
      });

    });

  </script>

@endsection
