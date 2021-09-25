@extends('layout.admin.dashboard')

@section('content')
    <div class="container">
        <div class="row">
        <div class="jumbotron col col-md-9 col-lg-6 mx-auto">
                <div id="signup-box" class="">
                    <form id="signup-form" class="form bg-1" action="post">
                        <h2 class="text-left text-info">Sign Up</h2>
                        <br>
                        <div class="form-group">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span data-feather="user"></span>
                                </div>
                                <input id="username" class="form-control" type="text" placeholder="Username" name="username">
                            </div>
                        </div>
                                
                        <div class="form-group">
                            <div class="input-group-append"> <div class="input-group-text">
                                    <span data-feather="mail"></span>
                                </div>
                                <input id="email" class="form-control" type="email" placeholder="Email Address" name="email">
                            </div>

                        </div>
                                
                        <div class="form-group">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span data-feather="key"></span>
                                </div>
                                <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                                <input id="password_confirm" class="form-control" type="password" placeholder="confirm" name="password">
                                
                            </div>

                        </div>

                       <div class="form-group">
                         <span class="text-right float-right">
                            <a href="#" class="text-info">already have Account? Log in</a>
                            <input class="btn btn-info btn-md" type="submit" name="submit" value="Sign Up">
                            <br>
                            
                         </span>

                            <br>
                       </div>

                            <br>

                    </form>
                </div>
            </div>

        </div>
    </div>



@endsection()
