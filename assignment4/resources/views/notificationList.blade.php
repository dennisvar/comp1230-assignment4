@extends('app')
@section('title')
Notification List
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
<h2 class="mt-5">Notification List</h2>
<table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    
                    <th scope="col">Name</th>
                    <th scope="col">type</th>
                    
                    <th scope='col'>Status</th>
                    <th scope='col'>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($notifications as $notification)
                    <tr class="item" >
                        <td>{{ $notification->id }}</td>
                        <td>{{ $notification->name }}</td>
                        <td>{{ $notification->type }}</td>
                        
                        <td><?php if( $notification->status  == 1) echo 'Active'; else echo 'Inactive';?></td>
                        
                        
                        <td class="">
                            <a href="{{route('view-notification',$notification->id)}}"><button class="btn btn-primary">View/Update</button></a>
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    

    
@endsection