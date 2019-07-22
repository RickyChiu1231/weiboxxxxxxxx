@extends('layouts.default')

@section('content')
  <div class="jumbotron">
    <h1>Hello Laravel</h1>
    <p class="lead">
      Now you see is  <a href="https://www.google.co.nz/?gfe_rd=cr&ei=PK3IVIT8CNPu8wf68IHIDA">Ricky Laravel tutorial</a> home page
    </p>
    <p>
      Everything will start here.
    </p>
    <p>
      <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">Register Now</a>
    </p>
  </div>
@stop
