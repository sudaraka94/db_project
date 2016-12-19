@extends('employee/employeeLayout');
@section('content')

<html>
<head>


</head>

<body>

<h3>Connections</h3>

<div>

    <form action="#" method="get" class="sidebar-form" style="width: 500px">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Connection ID...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
    </form>
    <form>
        <h4>Connection Details</h4>

        <table class="table" style="width:100%">
            <tr>
                <th>Connection ID</th>
                <td>CON0001</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>University of Moratuwa,Katubedda, Moratuwa.</td>
            </tr>
            <tr>
                <th>User</th>
                <td>Bill Gates</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>555 77 854</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>Business</td>
            </tr>
            <tr>
                <th>Due payment</th>
                <td>555</td>
            </tr>
            <tr>
                <th>Consumption</th>
                <td>5871955</td>
            </tr>

        </table>


    </form>


</div>

<!--<script language="javascript" src="http://online.hutch.lk/script.js"></script> -->
</body>
</html>

@endsection