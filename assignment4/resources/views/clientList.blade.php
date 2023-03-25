@extends('app')
@section('title')
Client List
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
<h2 class="mt-5">Client List</h2>
<table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Company name</th>
                    <th scope="col">Business Number</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Phone</th>
                    <th scope='col'>Cell Number</th>
                    <th scope='col'>Carrier</th>
                    <th scope='col'>HST</th>
                    <th scope='col'>Web Site</th>
                    <th scope='col'>Status</th>
                    <th scope='col'>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clients as $client)
                    <tr class="item" >
                        <td>{{ $client->id }}</td>
                        <td>{{ $client->company_name }}</td>
                        <td>{{ $client->business_number }}</td>
                        <td>{{ $client->first_name }}</td>
                        <td>{{ $client->last_name }}</td>
                        <td>{{ $client->phone }}</td>
                        <td>{{ $client->cell_number }}</td>
                        <td>{{ $client->carrier }}</td>
                        <td>{{ $client->hst }}</td>
                        <td>{{ $client->website }}</td>
                        <td><?php if( $client->status  == 1) echo 'Active'; else echo 'Inactive';?></td>
                        
                        
                        <td class="">
                            <a href="{{route('view-client',$client->id)}}"><button class="btn btn-primary">View/Update</button></a>
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    

    
@endsection