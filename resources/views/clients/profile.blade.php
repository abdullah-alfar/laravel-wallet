@extends('clients.layout')
@section('content')

<div class="row">
                    <div class="col-lg-8">
                        <!-- start:state overview -->
                        <section class="panel panel-default">
                            <header class="panel-heading text-center panel-relative">
                            </header>
                            <div class="panel-body">
                            <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <form class="form-horizontal" role="form" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                        <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Name</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="name" value="{{$client->name}}" id="inputEmail1" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">phone</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="phone" value="{{$client->phone}}" id="inputEmail1"  placeholder="phone">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Email</label>
                                        <div class="col-lg-10">
                                            <input type="email" class="form-control" name="email" value="{{$client->email}}" id="inputEmail1" placeholder="Email">
                                        </div>
                                    </div>
                                
                                <div class="form-group">
                                        <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Birthdate</label>
                                        <div class="col-lg-10">
                                            <input type="date" class="form-control" name="birthdate" value="{{$client->birthdate}}" id="inputEmail1" placeholder="Birthdate">
                                        </div>
                                    </div>
                                
                                    <div class="form-group">
                                        <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">API Secret Key</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="key" value="{{$client->secret_key}}" id="inputEmail1" placeholder="Secret Key" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button type="submit" class="btn btn-primary">UPDATE PROFILE</button>
                                        </div>
                                    </div>
                                </form>
                    
                                </div>
</div>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-4">
                        <!-- start:user info -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <header class="panel-title">
                                    <div class="text-center">
                                        <strong>Account</strong>
                                    </div>
                                </header>
                            </div>
                            <div class="panel-body">
                                <div class="text-center" id="author">
                                    <!-- <img src="img/user/avatar-3.jpg"> -->
                                    <h3>Balance</h3>
                                    <h2>{{ $acc_balance->balance}} USD</h2>
                                </div>
                            </div>
                        </div>
                        <!-- end:user info -->
                    </div>
                </div>

@endsection