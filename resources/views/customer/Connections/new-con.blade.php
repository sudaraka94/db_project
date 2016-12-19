@extends('customer.layout')

@section('content')
    <div class="container">
        <h1>Request for New Connection</h1>
        <br><br><br>

        <form class="form-horizontal" role="form" action="{{route('new_con_submit')}}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label class="col-lg-3 control-label">Customer ID</label>
                <div class="col-lg-8">
                    <input name="customer_id" class="form-control" type="text" value="140436"contenteditable="false" >
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-3 control-label">Connection Address</label>
                <div class="col-lg-8">
                    <input name="con_address" class="form-control" type="text" value="Nethmi">
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-3 control-label">Category</label>
                <div class="col-lg-8">
                <select name="catagory" class="form-control" id="sel1">
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
                    <input type="submit" class="btn btn-primary" value="Send Request">
                    <span></span>
                    <input type="reset" class="btn btn-default" value="Cancel">
                </div>
            </div>

        </form>

    </div>
@endsection
