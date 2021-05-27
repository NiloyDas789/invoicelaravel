@extends('layouts.app-1')



@section('content')




<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">

                    <br>
                    <h2 style="text-align: center;">Edit Recievers Data</h2>
                    <br>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-6 offset-lg-3 offset-md-8 offset-md-2">
                                <form action="{{route('reciever.update',[$reciever->id])}}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="reciever_name">
                                                <h5>Name</h5>
                                            </label>
                                            <input type="name" name="reciever_name" value="{{$reciever->reciever_name}}"
                                                class="form-control" id="reciever_name" placeholder="Enter Name"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="reciever_address">
                                                <h5>Address</h5>
                                            </label>
                                            <input type="text" name="reciever_address"
                                                value="{{$reciever->reciever_address}}" class="form-control"
                                                id="reciever_address" placeholder="Enter Address" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="reciever_number">
                                                <h5>Number</h5>
                                            </label>
                                            <input type="text" name="reciever_number"
                                                value="{{$reciever->reciever_number}}" class="form-control"
                                                id="reciever_number" placeholder="Enter Number" required>
                                        </div>







                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->

                </div>
            </div>
        </div>
    </div>
</div>





@endsection