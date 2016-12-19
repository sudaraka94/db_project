@extends('Templates.Master')
@section('maincontent')
@include('employee.employeeSidebar-main')
@include(('Templates.header'))
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">


{{--Here goes the content of the page--}}


@yield('content')




<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@include('Templates.footer')
@include('Templates.sidebar')
@endsection