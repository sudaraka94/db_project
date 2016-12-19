@extends('employee/employeeLayout')
@section('content')
        <!DOCTYPE html>
<html>
<head>


</head>

<body>

<h3>Customer</h3>

<div>

    <form action="#" method="get" class="sidebar-form" style="width: 500px">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Customer ID...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
    </form>
    <form>
        <h4>Customer</h4>
        <?php
            $customerID = "CUS0001";
            $name= "Saman";
            $telephoneNo = "0714656546";
            $address = "University of Moratuwa,Katubedda, Moratuwa.";

            $connecionIDList = array("CON0001","CON0002","CON0003","CON0004","CON0005");
            $type = array("business","domestic","factory","domestic","factory");
            $length = 5;


        ?>

        <table class="table" style="width:100%">

            <tr>
                <th>Customer ID</th>
                <td>{{$customerID}}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{$name}}</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>{{$telephoneNo}}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{$address}}</td>
            </tr>
        </table>
        <h4>Connections</h4>


        <table class="table" style="width:100%">
            <tr>
                <th>Connection ID</th>
                <th>Type</th>
            </tr>
            <?php
                for ($i=0; $i<$length; $i++){
            ?>
                <tr>
                    <td>{{$connecionIDList[$i]}}</td>
                    <td>{{$type[$i]}}</td>
                </tr>
            <?php
                }
            ?>

        </table>



    </form>

</div>

<!--<script language="javascript" src="http://online.hutch.lk/script.js"></script> -->
</body>
</html>
@endsection