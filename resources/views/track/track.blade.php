@extends('layouts.app-1')



    @section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                                <div class="row">
                                    
                                    <?php if ($assignment->value == '0') { ?>
                                    <form action="{{route('assignment.update',[$assignment->id])}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button name="value" type="submit" value="1" style="color: white;background: #ff7600;width: 120px;">Not Published</button>
                                    </form>
                                    <?php }else{ ?>
                                    <button type="button" style="background:#259e06;color: white;width: 120px;" disabled>Published</button>

                                    <?php }?>
                                </div>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    @endsection
