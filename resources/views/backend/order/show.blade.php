@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card radius-15" style="height: 235px">
                <div class="card-header">User Information</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Name: {{$orderShow->user->name}}</li>
                    <li class="list-group-item">Email: {{$orderShow->user->email}}</li>
                    <li class="list-group-item">Phone: {{$orderShow->user->phone}}</li>
                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card radius-15" style="height: 235px">
                <div class="card-header">Shipping Address</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Name: {{$orderShow->shipping->name}}</li>
                    <li class="list-group-item">Email: {{$orderShow->shipping->email}}</li>
                    <li class="list-group-item">Phone: {{$orderShow->shipping->phone}}</li>
                    <li class="list-group-item">Address: {{$orderShow->shipping->address}}</li>
                </ul>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card radius-15" style="height: 235px">
                <div class="card-header">Shipping Address</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Name: {{$orderShow->shipping->name}}</li>
                    <li class="list-group-item">Email: {{$orderShow->shipping->email}}</li>
                    <li class="list-group-item">Phone: {{$orderShow->shipping->phone}}</li>
                    <li class="list-group-item">Address: {{$orderShow->shipping->address}}</li>
                </ul>
            </div>
        </div>

    </div>
@endsection
