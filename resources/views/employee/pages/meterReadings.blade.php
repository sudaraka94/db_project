@extends('employee/employeeLayout');
@section('content')

    <html>
    <head>

        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>

    <h3>Meter Readings</h3>

    <div style="width: 80%; float:left">
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
            <label for="city">City</label>
            <select id="city" name="city">
                <option value="city1">city1</option>
                <option value="city2">city2</option>
                <option value="city3">city3</option>
            </select>
            <!-- set values using variables-->
            <!-- store these values in variables-->
        </form>
        <?php
        /** @var TYPE_NAME $connecionIDList */
            $connecionIDList = array("CON0001","CON0002","CON0003","CON0004","CON0005");
            $connectionlength = 5;
            $cityList = array("Katubedda","Molpe","Rawatawatta","Moratumulla","Suwarapola");
            $cityLength = 5;
            $monthList = array("January","February","March","April","May","June","July","August","September","October","November","December");
            $monthLength =12;
            $recordCompletion = array("(48/79)","(59/410)","(52/310)","(102/320)","(231/311)");
        ?>

        <table class="table">
            <th>Katubedda</th>
            <tbody>
            <tr>
                <th style="width:25%">Connection ID</th>
                <th>Reading</th>
                <th>Date</th>
            </tr>
            <?php
            for ($i=0; $i<$connectionlength; $i++){
            ?>
            <tr>
                <td>{{$connecionIDList[$i]}}</td>
                <td contenteditable="true">Consumption</td>
                <td contenteditable="true">date</td>
            </tr>
            <?php
            }
            ?>

            </tbody>

        </table>
        <button type="button">Update</button>

    </div>

    <div style="width: 20%; float:right">
        <label for="month">Month</label>
        <select id="month" name="month">
            <?php
            for ($i=0; $i<$monthLength; $i++){
            ?>

                <option value="month1">{{$monthList[$i]}}</option>
            <?php
            }
            ?>

        </select>

        <div class="list-group">
            <?php
            for ($i=0; $i<$cityLength; $i++){
            ?>

                <a href="#" class="list-group-item"><span class="badge">{{$recordCompletion[$i]}}</span>{{$cityList[$i]}}</a>
            <?php
            }
            ?>

        </div>


    </div>

    <!--<script language="javascript" src="http://online.hutch.lk/script.js"></script> -->
    </body>
    </html>
@endsection