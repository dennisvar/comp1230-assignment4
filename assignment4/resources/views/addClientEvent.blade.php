@extends('app')
@section('title')
Add Client Event
@endsection
@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" aria-current="page" href="{{route('view-clients')}}">Home</a>
        <a class="nav-link" href="{{route('client-form')}}">Add Client</a>
        <a class="nav-link" href="{{route('logout')}}">Logout</a>
        
      </div>
    </div>
  </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-12">
            
            <form method="post" action="{{ route('addClientNotification') }}" class="mt-2">
                @csrf
                <h2 class="mt-5">New Client Form</h2>
                <div class="container p-0">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="client_id" class="form-label">Client Id</label>
                                <input type="text" name="client_id" class="form-control" id="client_id">
                            </div>
                            <div class="mb-3">
                                <label for="businessNumber" class="form-label">Notification Id</label>
                                <input type="text" class="form-control" name="notification_id" id="notification_id">
                            </div>
                            <div class="mb-3">
                                <label for="fname" class="form-label">Start Date</label>
                                <input type="date" class="form-control" name="start_date" id="start_date">
                            </div>
                            <div class="mb-3">
                                <label for="frequency" class="form-label">Frequency Day</label>
                                <input type="text" class="form-control" name="frequency" id="frequency">
                            </div>
                            
                        </div>
                    </div>
                </div>
                
                
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            @if($errors->any())
            <div class="alert alert-danger mt-2">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>
   
</div>
@endsection
