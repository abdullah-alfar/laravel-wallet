@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading"></div>

                <div class="panel-body">
                   
                    @if ($message = Session::get('success'))

                    <div class="alert alert-success alert-block">

                        <button type="button" class="close" data-dismiss="alert">×</button>	

                        <strong>{{ $message }}</strong>

                    </div>

                    @endif

                        
                        <div class="container">
                            
                            
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Birthdate</th>
                                        <th>Total income</th>
                                        <th>Total expenses</th>
                                        <th>Registered date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clients as $client)
                                        <tr>
                                            <td>{{$client->name}}</td>
                                            <td>{{$client->email}}</td>
                                            <td>{{$client->phone}}</td>
                                            <td>{{$client->birthdate}}</td>
                                            <td>{{$client->account->balance}}</td>
                                            <td>{{$client->created_at}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                
                            </table>
                            
                            
                        </div>

                      

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


