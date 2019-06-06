@extends('layouts.public')

@section('content')
<div class="container">
    <div class="row">
        <h1>Users</h1>



                <div class="panel-body">
                    <div class="panel panel-default">
                      <table class="table">
                        <thead>
                          <tr>
                              <th>User SurName</th>
                              <th>User DOB</th>
                               <th>Active?</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>

                    @foreach ($users as $user)

                            <td scope="row">
                              {{ $user->surname }}
                            </td>
                            <td>
                              {{ $user->dob }}
                            </td>
                            <td>
                              {{ $user->active }}
                            </td>
                          </tr>




                    @endforeach

                  </tbody>


            </table>
            </div>
          </div>
  </div>
</div>
@endsection
