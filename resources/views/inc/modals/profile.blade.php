<div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-fw fa-edit"></i> Profile</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <form class="user" method="POST" action="{{ route('register.user') }}">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" name="first_name" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }} form-control-user" id="first_name" placeholder="First Name" v-model="name">
                            @if($errors->has('first_name'))
                                <span class="text-danger small">&emsp;&nbsp;{{ $errors->first('first_name') }}</span>
                            @endif
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="last_name" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }} form-control-user" id="last_ame" placeholder="Last Name">
                            @if($errors->has('last_name'))
                                <span class="text-danger small">&emsp;&nbsp;{{ $errors->first('last_name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} form-control-user" id="email" placeholder="Email Address">
                        @if($errors->has('email'))
                            <span class="text-danger small">&emsp;&nbsp;{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} form-control-user" id="password" placeholder="Password">
                            @if($errors->has('password'))
                                <span class="text-danger small">&emsp;&nbsp;{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="password_confirmation" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }} form-control-user" id="password_confirmation" placeholder="Repeat Password">
                            @if($errors->has('password_confirmation'))
                                <span class="text-danger small">&emsp;&nbsp;{{ $errors->first('password_confirmation') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-user text-danger btn-border-danger" type="button" data-dismiss="modal">X Cancel</button>
                    <button type="submit" class="btn btn-user text-success btn-border-success"><i class="fa fa-fw fa-check"></i> Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
