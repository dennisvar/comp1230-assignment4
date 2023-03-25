@extends('app')
@section('title')
Add Customer
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
            
            <form method="post" action="{{ route('addClient') }}" class="mt-2">
                @csrf
                <h2 class="mt-5">New Client Form</h2>
                <div class="container p-0">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="company" class="form-label">Company name</label>
                                <input type="text" name="company" class="form-control" id="company" aria-describedby="emailHelp">
                                
                            </div>
                            <div class="mb-3">
                                <label for="businessNumber" class="form-label">Business Number</label>
                                <input type="text" class="form-control" name="businessNumber" id="businessNumber">
                            </div>
                            <div class="mb-3">
                                <label for="fname" class="form-label">First Name</label>
                                <input type="text" class="form-control" name="fname" id="fname">
                            </div>
                            <div class="mb-3">
                                <label for="lname" class="form-label">Last Name</label>
                                <input type="text" class="form-control" name="lname" id="lname">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" name="phone" id="phone">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="cellNumber" class="form-label">Cell Number</label>
                                <input type="text" class="form-control" name="cellNumber" id="cellNumber">
                            </div>
                            <div class="mb-3">
                                <label for="carrier" class="form-label">Carrier</label>
                                <input type="text" class="form-control" name="carrier" id="carrier">
                            </div>
                            <div class="mb-3">
                                <label for="hst" class="form-label">HST</label>
                                <input type="text" class="form-control" name="hst" id="hst">
                            </div>
                            <div class="mb-3">
                                <label for="webSite" class="form-label">Web Site</label>
                                <input type="text" class="form-control" name="webSite" id="webSite">
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
