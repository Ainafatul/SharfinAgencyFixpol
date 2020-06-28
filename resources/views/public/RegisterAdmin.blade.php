@extends('layout.Main')

@section('content')
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-md-9 col-lg-8 px-0">
                <div class="card mx-4 m-md-0 card-login">
                    <div class="form-login d-flex align-items-center py-4 mx-0 ">
                        <div class="container-fluid">
                            <div class="row px-2">
                                <div class="col-md-10 mx-auto">
                                    <h3 class="login-heading mb-4">Register <span class="small form-tanya">Admin</span></h3>
                                    <form action="{{route('onAdminRegister')}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-label-group">
                                            <input required type="text" id="nama" name="name" class="form-control form-tanya" placeholder="Name*">
                                            <label for="nama">Nama Lengkap</label>
                                        </div>
                                        <div class="form-label-group">
                                            <input type="email" id="email" class="form-control form-tanya" name="email" placeholder="Email address" required>
                                            <label for="email">Email </label>
                                        </div>
                                        <div class="form-label-group">
                                            <input type="password" id="Password" class="form-control form-tanya" name="password" placeholder="Password" required>
                                            <label for="Password">Password </label>
                                        </div>
                                        <div class="form-label-group">
                                            <input required type="password" id="confirm_password" class="form-control form-tanya"
                                                   placeholder="Confirm Password *" value="" name="password_confirmation">
                                            <label for="confirm_password">Confirm Password </label>
                                        </div>
                                        @if($errors->first()!='')
                                            <div class="alert alert-danger" role="alert">{{$errors->first()}}</div>
                                        @endif
                                        <button class="btn btn-lg btn-info btn-block btn-login text-uppercase font-weight-bold mb-3 mt-5" type="submit">Register</button>
                                        <div class="text-center">
                                            <p>Have an account ?
                                                <a class="text-info" href="login.html">Log In</a>
                                            </p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none d-md-flex col-md-3 col-lg-4 bg-image-register"></div>
        </div>
    </div>
@endsection
