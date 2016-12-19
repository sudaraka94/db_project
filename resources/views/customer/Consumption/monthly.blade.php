@extends('customer.layout')

@section('content')
    <div class="container">
        <h1>Monthly Consumption</h1>
        <br><br><br>

        <form class="form-horizontal" role="form">

            <div class="form-group">
                <label class="col-lg-3 control-label">Select Year</label>
                <div class="col-md-6">
                    <select class="form-control" id="sel1">
                        <option>2016</option>
                        <option>2015</option>
                        <option>2014</option>
                        <option>2013</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 control-label">Select Month</label>
                <div class="col-md-6">
                    <select class="form-control" id="sel1">
                        <option>January</option>
                        <option>February</option>
                        <option>March</option>
                        <option>April</option>
                    </select>
                </div>
            </div>
        </form>

        </div>
@endsection
