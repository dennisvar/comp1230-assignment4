@extends('app')
@section('title')
Update Notification
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
            
            <form method="post" action="{{ route('updateNotification',$notification->id) }}" class="mt-2">
                @csrf
                <h2 class="mt-5">Employee Update Form</h2>
                <div class="container p-0">
                    <div class="row">
                    
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{ $notification->name}}">
                            </div>
                            <div class="mb-3">
                                <label for="type" class="form-label">Type</label>
                                <input type="text" class="form-control" name="type" id="type" value="{{ $notification->type }}">
                            </div>
                            
                            <div class="mb-3">
                                <label for="">
                                    Status
                                </label>
                                <br>
                                <input class="form-check-input" type="checkbox" name="status" id="flexCheckDefault" <?php if( $notification->status  == 1) echo 'checked'; else '';?>>
                                <label class="form-check-label" for="flexCheckDefault">
                                    Active
                                </label>
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
