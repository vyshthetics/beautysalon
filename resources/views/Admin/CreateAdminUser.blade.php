@extends('layouts.CreateAdminUser')

@section('content')
    <div class="container">
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <div class="row">

            <div class="col-md-6">
                @isset($url)
                    <form class="box" method="POST" action='' aria-label="{{ __('Login') }}">
                @else
                    <form class="box" method="POST" action="" aria-label="{{ __('Login') }}">
                @endisset
                        @csrf
                        <h1>Admin Login</h1>
                        <form class="user">
                           
                        <div class="form-group">
                                <input type="text" name="name" placeholder="{{ __('Enter your Name') }}"class="form-control form-control-user"
                                  id="exampleInputEmail" aria-describedby="emailHelp"
                                   required autofocus>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" placeholder="{{ __('Enter your email-address') }}"class="form-control form-control-user"
                                  id="exampleInputEmail" aria-describedby="emailHelp"
                                    required autofocus>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="password" required >
                            </div>
                          
                            <input type="submit"class="btn btn-primary btn-user btn-block" name="" value="Save" href="#">
                        </form>
                        @if (session('success'))
                               <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>{{ _('messages.Whoops') }}!</strong> {{ _('messages.There were some problems with your input') }}.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
                    </form>
            </div>
        </div>
    </div>
@endsection