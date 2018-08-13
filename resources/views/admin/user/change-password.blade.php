@extends('admin.master')

@section('title')
 Change Password
@endsection

@section('content')

                                <div class="container">
                                    <div class="login-wrap">
                                        <div class="login-content">
                                            <div class="login-logo">
                                                <h3>Ganti Password</h3>
                                            </div>
                                            <div class="login-form">
                                                <form class="form-horizontal" method="POST" action="{{ url('/admin/user/updatepassword')}}">
                                                    {{ csrf_field() }}

                                                    <input type="hidden" name="id" value="{{ $user->id }}{{ old('$id')}}">

                                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                        <label>Nama : </label>
                                                        <input class="au-input au-input--full" type="text" name="name" value="@if(!old('name')){{ $user->name }}@endif{{ old('name') }}" disabled>
                    
                                                        @if ($errors->has('name'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('name') }}</strong>
                                                            </span>
                                                        @endif
                    
                                                    </div>

                                                    <div class="form-group{{ $errors->has('old') ? ' has-error' : '' }}">
                                                            <label>Old Password</label>
                                                            <input id="password" type="password" class="au-input au-input--full form-control" name="old">
                                                            @if ($errors->has('old'))
                                                                    <span class="help-block">
                                                                    <strong>{{ $errors->first('old') }}</strong>
                                                                </span>
                                                            @endif
                                                </div>

                                                    <div class="form-group">
                                                        <label>Password : </label>
                                                        <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                    
                                                        @if ($errors->has('password'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                    
                                                    </div>
                                                    <div class="form-group">
                                                            <label>Confirm Password : </label>
                                                            <input class="au-input au-input--full" type="password" name="password_confirmation" placeholder="Password">
                        
                                                            @if ($errors->has('password_confirmation'))
                                                                <span class="help-block">
                                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                            </span>
                                                            @endif
                        
                                                        </div>
                                                    <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Update Password</button>
                                                  
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>



@endsection
