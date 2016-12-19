@extends('customer.layout')

@section('content')
    <div class="container">
        <h1>Request to Change Connection</h1>
        <br><br><br>

        <form class="form-horizontal" role="form">
            <div class="form-group">
                <label class="col-lg-3 control-label">Customer ID</label>
                <div class="col-lg-8">
                    <input class="form-control" type="text" value="140436"contenteditable="false" >
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-3 control-label">Connection ID</label>
                <div class="col-lg-8">
                    <input class="form-control" type="text" value="17657" >
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-3 control-label">Connection Address</label>
                <div class="col-lg-8">
                    <input class="form-control" type="text" value="Nethmi" contenteditable="false">
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-3 control-label">Category</label>
                <div class="col-lg-8">
                    <select class="form-control" id="sel1">
                        <option>Domestic</option>
                        <option>Religious</option>
                        <option>Business</option>
                        <option>.....</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-3 control-label">Details</label>
                <div class="col-lg-8">
                    <textarea class="form-control" rows="5" id="details"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label"></label>
                <div class="col-md-8">
                    <input type="button" class="btn btn-primary" value="Send Request">
                    <span></span>
                    <input type="reset" class="btn btn-default" value="Cancel">
                </div>
            </div>

        </form>

    </div>
@endsection
