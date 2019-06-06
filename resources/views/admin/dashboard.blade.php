@extends('layouts.app')

@section('content')



          <h1 class="page-header">Overview</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-4 placeholder">
              <img src="assets/img/upcoming-reunions.png" />
              <h4>Total Alumni - <a href="admin/alumnidownload">download</a></h4>
              <span class="text-muted">{{ $totalusers }}</span>
            </div>
            <div class="col-xs-6 col-sm-4 placeholder">
              <img src="assets/img/upcoming-reunions.png" />
              <h4>Total Alumni Registered</h4>
              <span class="text-muted">{{ $totalregistered }}</span>
            </div>
            <div class="col-xs-6 col-sm-4 placeholder">
              <img src="assets/img/upcoming-reunions.png" />
              <h4>Alumni Opted for Newsletters - <a href="admin/newsletterdownload">download</a></h4>
              <span class="text-muted">{{ $totalnewsletter }}</span>
            </div>
          </div>
        </div>

@endsection
