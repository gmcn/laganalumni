@extends('layouts.frontend')

@section('content')

        @if (Auth::guest())

        <div class="container-fluid connecting no-gutter">
            <div class="col-md-4 paststudents">
              <div class="alignmiddle">
                <h1>Connecting</h1>
                <h2>past students</h2>
                <p>
                  Welcome to the Lagan College Alumni site! Create your profile now to connect with classmates, view pictures, magazines and documents and reconnect with the College. 
                </p>
                <a href="{{ url('search') }}"><button>Create your profile</button></a>
              </div>
            </div><!-- /.col-md-4 paststudents -->
        </div><!-- /.container-fluid connecting no-gutter -->

        @else

        <div class="container-fluid classof no-gutter">
            <div class="col-md-8 col-md-offset-2 classofselect">
              <div class="col-md-8">
                <h1>Class of...</h1>
              </div>
              <div class="col-md-4">

                  <select name="yearofleaving" onchange="jumpMenu('parent',this)" class="sel1">
                    <option>Choose Year</option>
                    @foreach ($yearbooks as $yearbook)
                    <option value="{{ url('/') }}/alumni?yearofLeaving={{$yearbook->year}}">{{$yearbook->year}}</option>
                    @endforeach
                  </select>

              </div>

              <div class="col-md-12">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis justo ipsum, bibendum consequat tristique et, placerat vitae tortor. Suspendisse commodo neque dictum eros dapibus, vel suscipit elit bibendum. Donec vehicula, nibh eget ullamcorper sollicitudin, risus dolor tincidunt ex, ut luctus justo nisl non nibh.
                </p>
              </div>
            </div>
        </div>

        @endif

        <div class="container-fluid">
            <div class="row">
              <a class="black" href="{{ url('login') }}">
                <div class="col-md-4 findyourfriends">
                  <img src="assets/img/find-your-friends.png" />
                  <h2>Find your friends</h2>
                  <p>
                    Looking to find a long lost friend
                  </p>
                </div>
              </a>

              <a class="black" href="{{ url('reunions') }}">
                <div class="col-md-4 upcomingreunions">
                  <img src="assets/img/upcoming-reunions.png" />
                  <h2>Upcoming reunions</h2>
                  <p>
                    Find out about reunions for alumni from Lagan College Heritage, or find out how we can help you to organise your own.
                  </p>
                </div>
              </a>

              <a class="black" href="{{ url('volunteer') }}">
                <div class="col-md-4 becomevolunteer">
                  <img src="assets/img/becomevolunteer.png" />
                  <h2>Become a volunteer</h2>
                  <p>
                    As a member of the Alumni network there are many ways you can support Lagan College’s students, graduates and Heritage project.
                  </p>
                </div>
              </a>

            </div>
        </div>


        @if (Auth::guest())

        <div class="container-fluid">
            <div class="row no-gutter">

              <div class="col-md-8 memorylane" style="background-image:url('assets/img/memory-lane.jpg');">
              </div>

              <div class="col-md-4 red-col">
                <h2>Take a trip down memory lane and re-connect with old friends</h2>
                <p>
                  <a href="{{ url('login') }}"><button>Find friends</button></a>
                </p>
              </div>

            </div>
        </div>

        <div class="container-fluid">
            <div class="row no-gutter">

              <div class="col-md-3 gallery no-gutter">
                <img src="assets/img/gallery1.jpg" alt="Gallery 1" />
              </div>

              <div class="col-md-3 gallery no-gutter">
                <img src="assets/img/gallery2.jpg" alt="Gallery 2" />
              </div>

              <div class="col-md-6 gallery no-gutter">
                <img src="assets/img/class-gallery.jpg" alt="Lagan College Year Books"/>
              </div>

            </div>

            <div class="row no-gutter">

              <div class="col-md-6 principal">
                <img src="assets/img/shiela-greenfield.jpg" alt="Mrs. Sheila Greenfield, First Principal"  />
                <div class="over">
                  <h2>Mrs. Sheila Greenfield, First Principal</h2>
                  <p>
                    On the first day there were 28 pupils, the Principal, Mrs. Sheila Greenfield, one full-time teacher and five part-time teachers. The college became homeless that Christmas but was able to move in time for the start of the Easter term to a redundant primary school at Castlereagh on a hill-top overlooking Belfast from the South-east for September.
                  </p>
                </div>
              </div>

              <div class="col-md-3 gallery no-gutter">
                <img src="assets/img/gallery3.jpg" alt="Gallery 1" />
              </div>

              <div class="col-md-3 gallery no-gutter">
                <img src="assets/img/gallery4.jpg" alt="Gallery 2" />
              </div>

            </div>
        </div>

        <div class="container-fluid news">
            <div class="row no-gutter">

              <div class="col-md-8" id="newsposts">
                Loading posts...
              <ul class="newsitems">
                <script type="text/javascript">
                    $(document).ready(function () {
                        $.ajax({
                            type: 'GET',
                            url: 'http://www.lagancollege.com/wp-json/wp/v2/posts?per_page=2&categories=1',

                            success: function (data) {
                                var posts_html = '';
                                $.each(data, function (index, post) {
                                    posts_html += '<li class="newsitem">';
                                    posts_html += '<a href="' + post.link + '" target="_blank"><h1>' + post.title.rendered + '</h1></a>';
                                    posts_html += '<p>' + post.excerpt.rendered + '</p>';
                                    posts_html += '<div class="share">';
                                    posts_html += '<a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=' + post.title.rendered +' - ' + post.link + '" target="_blank"><img src="{!! URL::asset('assets/img/twitter.png') !!}" /></a>';
                                    posts_html += '<a href="https://www.facebook.com/sharer/sharer.php?u=' + post.link + '" target="_blank"><img src="{!! URL::asset('assets/img/facebook.png') !!}" /></a>';
                                    posts_html += '</div>';
                                    posts_html += '</li>';
                                });
                                $('#newsposts').html(posts_html);
                            },
                            error: function (request, status, error) {
                                alert(error);
                            }
                        });
                    });
                </script>
              </ul> 

              </div>

              <div class="col-md-4 red-col">
                <h2>Latest News</h2>
                <p>
                  <a href="{{ url('news') }}"><button>View all news</button></a>
                </p>
              </div>

            </div>
        </div>

        <div class="container-fluid">
            <div class="row no-gutter">

              <div class="col-md-4 red-col" >
                <h2>Lagan College Yearbook</h2>
                <p>
                 The 'Voices' magazine is our long running archive of everything that happens during each academic year. Packed full of pictures, class photos and stories, Voices is a treasure trove of information!
                </p>
                <ul class="yearbooks">
                  @foreach ($yearbooks as $yearbook)
                  <li>
                    <a href="{!! URL::asset('assets/media') !!}/{{$yearbook->link}}" download>{{ $yearbook->year }}</a>
                  </li>
                  @endforeach
                </ul>
              </div>

              <div class="col-md-8">
                <img src="assets/img/year-book.jpg" alt="Lagan College Year Books"/>
              </div>

            </div>
        </div>

        @else

        <div class="container-fluid">
            <div class="row no-gutter">

              <div class="col-md-8 no-gutter">
                <ul class="alumni">
                  @foreach ($users as $user)
                  <li class="student">

                    @if (!$user->admissionNumber && $user->gender == "M")

                      <img src="assets/uploads/a_male_placeholder.jpg" />

                    @elseif (!$user->admissionNumber && $user->gender == "F")

                      <img src="assets/uploads/a_female_placeholder.jpg" />

                    @else

                      <img src="assets/uploads/{{$user->admissionNumber}}.jpg" />

                    @endif

                    <!-- <img src="assets/uploads/a_male_placeholder.jpg" /> -->


                    <div class="hover">
                      <h1>{{ $user->firstname }} {{ $user->surname }}</h1>

                      @if (!$user->twitter)
                      @else
                      <a href="https://www.twitter.com/{{ $user->twitter }}" target="_blank">
                        <img src="{!! URL::asset('assets/img/twitter_icon.svg') !!}" target="_blank" />
                      </a>
                      @endif

                      @if (!$user->facebook)
                      @else
                      <a href="{{ $user->facebook }}" target="_blank">
                        <img src="{!! URL::asset('assets/img/facebook_icon.svg') !!}" />
                      </a>
                      @endif

                      @if (!$user->linkedin)
                      @else
                      <a href="{{ $user->linkedin }}" target="_blank">
                        <img src="{!! URL::asset('assets/img/linkedin_icon.svg') !!}" />
                      </a>
                      @endif
                    </div>
                  </li>

                  @endforeach

                  <div class="clearfix"></div>
                </ul>
              </div>

              <div class="col-md-4 red-col">
                <h2>Past Students</h2>
                <p>
                  Lagan College yesterday welcomed Ms Carla Stover from the American Ireland Fund. Ms Stover is a great supporter and benefactor of Camp Camilla and integrated education and was keen to visit Lagan College as we start our 35th Anniversary! She is pictured centre along with Mrs McNamee, some of the students who attend Camp Camilla
                </p>
                <ul>
                  @foreach ($yearbooks as $yearbook)
                  <li>
                    <a href="{{ url('/') }}/alumni?yearofLeaving={{$yearbook->year}}" >{{ $yearbook->year }}</a>
                  </li>
                  @endforeach
                </ul>
              </div>

            </div><!-- /.row no-gutter -->
        </div> <!-- /.container-fluid -->

        @endif

        @if (Auth::guest())

        <div class="container-fluid heritage no-gutter">
            <div class="col-md-4 col-md-offset-8 heritagewelcome">
              <div class="alignmiddle">
                <h1>Lagan College Heritage</h1>
                <p>
                  Our Heritage website contains over 6000 images, videos, letters and documents from the beginnings of All children Together in 1974, right through to the present day!</p>

                <a href="http://heritage.lagancollege.com" target="_blank"><button>Visit website</button></a>
              </div>
            </div><!-- /.col-md-4 paststudents -->
        </div><!-- /.container-fluid connecting no-gutter -->

        @endif

@endsection
