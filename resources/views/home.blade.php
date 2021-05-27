@extends('layouts.app-1')
@section('content')
<div class="p-3" style="background-color: #343a40 !important;">
    <div class="text-white p-3" style="    background-color: #bbbbbb4d; border-radius: 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
        <h2 class="text-center">
            Welcome To Dashboard {{ Auth::user()->name }}
        </h2>
    </div>
    <div class="container mt-5" style="text-align: center;">
        <a class="btn btn-success btn-lg text-white p-4" style="width: 35%;" href="{{route('bill-index')}}"> <span
                class="mr-2"><i class="fas fa-plus"></i></span>Generate New Bill</a>
        <a class="btn btn-success btn-lg text-white p-4 ml-3" style="width: 35%;" href="{{route('bill.index')}}"> <span
                class="mr-2"><i class="fas fa-table"></i></span>View Bill Diary</a>

    </div>
    <div class="container mt-5" style="text-align: center;">
        <a class="btn btn-primary btn-lg text-white p-4 ml-3" style="width: 30%;" href="{{route('shipper.create')}}">
            <span class="mr-2"><i class="fas fa-plus"></i></span>Create Shippers</a>
        <a class="btn btn-primary btn-lg text-white p-4 ml-3" style="width: 30%;" href="{{route('shipper.index')}}">
            <span class="mr-2"><i class="fas fa-table"></i></span>View Shippers</a>

    </div>
    <div class="container mt-5" style="text-align: center;">
        <a class="btn btn-info btn-lg text-white p-4 ml-3" style="width: 25%;" href="{{route('reciever.create')}}">
            <span class="mr-2"><i class="fas fa-plus"></i></span>Create Recievers</a>
        <a class="btn btn-info btn-lg text-white p-4 ml-3" style="width: 25%;" href="{{route('reciever.index')}}"> <span
                class="mr-2"><i class="fas fa-table"></i></span>View Recievers</a>

    </div>
</div>
@endsection