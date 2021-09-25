@extends('layout.admin.dashboard')

@section('content')
    <div class="container">
        <div class="row">
        <div class="jumbotron col col-md-9 col-lg-6 mx-auto">
                <div id="forgot-box" class="">
                    <form id="forgot-form" class="form bg-1" action="post">
                        <h2 class="text-left text-info">Forgot Password?</h2>
                        <br>
                                
                        <div class="form-group">
                            <div class="input-group-append"> <div class="input-group-text">
                                    <span data-feather="mail"></span>
                                </div>
                                <input id="email" class="form-control" type="email" placeholder="Email Address" name="email">
                            </div>

                        </div>
                                

                       <div class="form-group">
                         <span class="text-right float-right">
                            <a href="#" class="text-info">back to Log in</a>
                            <input class="btn btn-info btn-md" type="submit" name="submit" value="Submit">
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
