@extends('app')
@section('title')
Login Page
@endsection

@section('content')
<div class="container">
    <div class="row d-flex  justify-content-center align-items-center mt-5">
        <div class="col-6">
            <div class="container">
                <div class="row">

                
                    <form action="{{ route('check')}}" method='post' class="border border-2 border-secondary rounded-2">
                        
                        @csrf
                        <div class="m-3">
                            <label for="login" class="form-label">Login</label>
                            <input type="text" id="login" class="form-control" name="login" placeholder="Email: a@a.a" value="{{old('login')}}">
                            <span class="text-danger">@error('login'){{ $message }} @enderror</span>
                        </div>
                        <div class="m-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" class="form-control" name="password" placeholder="Password: a">
                            <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                        </div>
                        @if(Session::get('fail'))
                            <div class="alert alert-danger">
                                {{ Session::get('fail') }}
                            </div>
                        @endif
                        <div class="m-3 d-flex flex-row-reverse">
                            <input type="submit" class="btn btn-primary" value='Log In'>
                        </div>
                        
                    </form>
                </div>
                <div class="row pt-2">
                    <div class="alert alert-info">
                          <ul>
                              <li>Active User:
                                  <br class="mb-1">
                              
                                  <p>Login: a@a.a <br>
                                  Password: a</p>
                              </li>
                              <li>Inactive User:
                                  <br>
                                
                                  <p>Login: b@b.b<br>
                                  Password: b</p>
                              </li>
                          </ul>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
</div>
@endsection