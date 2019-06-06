@extends('layouts.frontend')

@section('content')

<div class="container-fluid pagehead no-gutter">
<h1>Lagan College News</h1>
<p>
  See all the latest news coming from Lagan College
</p>
</div>

<div class="container-fluid news">

  <div class="row">
    <div id="posts">Loading posts...
    <ul class="newsarticles">
      <script type="text/javascript">
          $(document).ready(function () {
              $.ajax({
                  type: 'GET',
                  url: 'http://www.lagancollege.com/wp-json/wp/v2/posts?per_page=12&categories=1',

                  success: function (data) {
                      var posts_html = '';
                      $.each(data, function (index, post) {
                          posts_html += '<li class="newsarticle">';
                          posts_html += '<a href="' + post.link + '" target="_blank"><h2>' + post.title.rendered + '</h2></a>';
                          posts_html += '<p>' + post.excerpt.rendered + '</p>';
                          posts_html += '<div class="share">';
                          posts_html += '<a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=' + post.title.rendered +' - ' + post.link + '" target="_blank"><img src="{!! URL::asset('assets/img/twitter.png') !!}" /></a>';
                          posts_html += '<a href="https://www.facebook.com/sharer/sharer.php?u=' + post.link + '" target="_blank"><img src="{!! URL::asset('assets/img/facebook.png') !!}" /></a>';
                          posts_html += '</div>';
                          posts_html += '</li>';
                      });
                      $('#posts').html(posts_html);
                  },
                  error: function (request, status, error) {
                      alert(error);
                  }
              });
          });
      </script>

    </ul>
    </div>
  </div>
</div>


<!-- OLD CODE -->

<!-- @foreach ($news as $newsitem)
  <li class="newsarticle">
    <h1>{{ $newsitem->title }}</h1>
    <p>
      {{ $newsitem->content }}
    </p>

    <div class="share">
      <a class="twitter-share-button" href="https://twitter.com/intent/tweet?text={{ $newsitem->title }} - {{ url('/') }}/news/{{ $newsitem->slug }}" target="_blank"><img src="{!! URL::asset('assets/img/twitter.png') !!}" /></a>
      <a href="https://www.facebook.com/sharer/sharer.php?u={{ url('/') }}/news/{{ $newsitem->slug }}" target="_blank"><img src="{!! URL::asset('assets/img/facebook.png') !!}" /></a>
    </div>

  </li>
  @endforeach
-->

@endsection



