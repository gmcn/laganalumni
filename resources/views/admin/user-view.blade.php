@extends('layouts.app')

@section('content')

<h1 class="page-header">Alumni details - "{{ $user->firstname }} {{ $user->surname }}" </h1>
<h4><a href="javascript:history.back()"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> go back</a></h4>

<div class="col-md-8">

  <div class="list-group">



  <button type="button" class="list-group-item">Admission Date:<br  />{{ $user->admissionDate }}</button>
  <button type="button" class="list-group-item">Admission Number: <br />{{ $user->admissionNumber }}</button>
  <button type="button" class="list-group-item">Firstname:<br  />{{ $user->firstname }}</button>
  <button type="button" class="list-group-item">Surname:<br  />{{ $user->surname }}</button>
  <button type="button" class="list-group-item">Date of Birth:<br  />{{ $user->dob }}</button>
  <button type="button" class="list-group-item">Email:<br  />{{ $user->email }}</button>
  <button type="button" class="list-group-item">UPN:<br  />{{ $user->upn }}</button>
  <button type="button" class="list-group-item">Address:<br  />{{ $user->address }}</button>
  <button type="button" class="list-group-item">Phone:<br  />{{ $user->phone }}</button>
  <button type="button" class="list-group-item">Twitter:<br  />{{ $user->twitter }}</button>
  <button type="button" class="list-group-item">Facebook:<br  />{{ $user->facebook }}</button>
  <button type="button" class="list-group-item">Linkedin:<br  />{{ $user->linkedin }}</button>
  <button type="button" class="list-group-item">Gender: <br  />{{ $user->gender }}</button>
  <button type="button" class="list-group-item">Religion: <br  />{{ $user->religion }}</button>
  <button type="button" class="list-group-item">Disability: <br  />{{ $user->disability }}</button>

  <button type="button" class="list-group-item">Contact #1: <br  />{{ $user->contact1 }}</button>
  <button type="button" class="list-group-item">Contact #1 Relationship: <br  />{{ $user->contact1Relationship }}</button>
  <button type="button" class="list-group-item">Contact #1 Occupation: <br  />{{ $user->contact1Occupation }}</button>

  <button type="button" class="list-group-item">Contact #2: <br  />{{ $user->contact2 }}</button>
  <button type="button" class="list-group-item">Contact #2 Relationship: <br  />{{ $user->contact2Relationship }}</button>
  <button type="button" class="list-group-item">Contact #2 Occupation: <br  />{{ $user->contact2Occupation }}</button>

  <button type="button" class="list-group-item">Family Links: <br  />{{ $user->familylinks }}</button>
  <button type="button" class="list-group-item">Reason for Leaving: <br  />{{ $user->reasonforLeaving }}</button>
  <button type="button" class="list-group-item">Date of Leaving: <br  />{{ $user->dateofLeaving }}</button>

  <button type="button" class="list-group-item">Destination: <br  />{{ $user->destination }}</button>
  <button type="button" class="list-group-item">Previous School: <br  />{{ $user->previousSchool }}</button>
  <button type="button" class="list-group-item">Other Info: <br  />{{ $user->otherInfo }}</button>

  <button type="button" class="list-group-item">Newsletter: <br  />@if ($user->newsletter == 1)Yes @else No @endif</button>
  <button type="button" class="list-group-item">Active: <br  />@if ($user->active == 1)Yes @else No @endif</button>

</div><!-- /.list-group -->

</div><!-- /.col-md-8 -->


</div>
</div>

@endsection
