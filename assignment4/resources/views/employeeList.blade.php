@extends('app')
@section('title')
Employee List
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
<h2 class="mt-5">Employee List</h2>
<table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope='col'>Picture</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope='col'>Cell Number</th>
                    <th scope='col'>Position</th>
                    <th scope='col'>Status</th>
                    <th scope='col'>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $employee)
                    <tr class="item" >
                        <td>{{ $employee->picture }} </td>
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->first_name }}</td>
                        <td>{{ $employee->last_name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->cell_number }}</td>
                        <td>{{ $employee->position }}</td>
                        <td><?php if( $employee->status  == 1) echo 'Active'; else echo 'Inactive';?></td>
                        
                        
                        <td class="">
                            <a href="{{route('view-employee',$employee->id)}}"><button class="btn btn-primary">View/Update</button></a>
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    

    
@endsection