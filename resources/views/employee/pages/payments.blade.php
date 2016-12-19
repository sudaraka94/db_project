@extends('employee.employeeLayout')
@section('content')

            <h3>Register Payment</h3>
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
                <?php
                        $customerID = "CUS0001";
                        $name= "Saman";
                        $telephoneNo = "0714656546";
                        $address = "University of Moratuwa,Katubedda, Moratuwa.";

                        $datePreviousMonth ="12-11-2016";
                        $meterReading1 ="10456";
                        $dateThisMonth ="15-12-2016";
                        $meterReading2 ="10711";
                        $units ="255";
                        $adjustments ="0.00";
                        $surchargeForlatePayment ="0.00";
                        $totalAmountForTheMonth ="4550.00";
                        $currentAcccountBalance ="10.00";
                        $totalPayable = "4540.00";

                    ?>
                <h4>User</h4>
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

                <h4>Bill</h4>
                    <table class="table" style="width:80%">
                        <tr>
                            <th>Date(Previous Month)</th>
                            <td>{{$datePreviousMonth}}</td>
                        </tr>
                        <tr>
                            <th>Meter Reading 1</th>
                            <td>{{$meterReading1}}</td>
                        </tr>
                        <tr>
                            <th>Date(This Month)</th>
                            <td>{{$dateThisMonth}}</td>
                        </tr>
                        <tr>
                            <th>Meter Reading 2</th>
                            <td>{{$meterReading2}}</td>
                        </tr>
                        <tr>
                            <th>Units</th>
                            <td>{{$units}}</td>
                        </tr>
                        <tr>
                            <th>Adjustments</th>
                            <td>{{$adjustments}}</td>
                        </tr>
                        <tr>
                            <th>Surcharge for late payment</th>
                            <td>{{$surchargeForlatePayment}}</td>
                        </tr>
                        <tr>
                            <th>Total Amount for the month</th>
                            <td>{{$totalAmountForTheMonth}}</td>
                        </tr>
                        <tr>
                            <th>Current Acccount Balance</th>
                            <td>{{$currentAcccountBalance}}</td>
                        </tr>
                        <tr>
                            <th>Total Payable</th>
                            <td>{{$totalPayable}}</td>
                        </tr>


                    </table>


                    <br>
                    <h4>Payment Info</h4>
                    <label for="amount">Amount</label>
                    <input name="amount" />
                    <br>
                    <label for="information">Information</label>
                    <input name="information" />
                    <br>
                    <button type="submit" class="btn btn-default">Submit</button>

                </form>

            </div>

            <!--<script language="javascript" src="http://online.hutch.lk/script.js"></script> -->


@endsection
