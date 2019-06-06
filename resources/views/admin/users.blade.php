@extends('layouts.app')

@section('content')



          <h1 class="page-header">Alumni <a href="alumnidownload">(download csv)</a></h1>


          <form>
            <input name="search" type="text" class="form-control" placeholder="Search...">
          </form>

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Firstname</th>
                  <th>Surname</th>
                  <th>LCH ID</th>
                  <th>Active?</th>
                  <th>View</th>
                </tr>
              </thead>
              <tbody>



                @foreach ($users as $user)
                <tr>

                  <td>
                    {{ $user->firstname }}
                  </td>

                  <td>
                    {{ $user->surname }}
                  </td>

                  <td>
                    {{ $user->lchId }}
                  </td>

                  <td>
                    @if ($user->active == 1)
                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                    @else
                    @endif
                  </td>

                  <td>
                    <a href="{{ url('/admin/user-view') }}/{{ $user->id }}"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                  </td>

                </tr>
                @endforeach




              </tbody>
            </table>

            {!! $users->render() !!}
          </div>
        </div>

@endsection
