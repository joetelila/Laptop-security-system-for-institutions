@extends('layouts.main')

@section('style')

 <!-- side nav css file -->
 <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file --> 

@endsection

@section('headerscripts')

    @include('partials.register._script')

@endsection
@section('content')

<div style=" padding: 5em 2em 2.5em" id="page-wrapper">
    <div class="main-page py-3 mx-3">
        <div class="forms" style="display:none" id="mainWrapper">
            @include('partials.register._choose')
            
            @include('partials.register._student_info')

            @include('partials.register._staff_info')

            @include('partials.register._guest_info')

        </div>
    </div>
</div>

@endsection


@section('footerscripts')
<script>
    var token = '{{ Session::token() }}';
    var url = '{{ route('checkstud')  }}';
    </script>
    <!-- side nav js -->
    <script src='js/SidebarNav.min.js' type='text/javascript'></script>
    <script src="js/classie.js"></script>
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/bootstrap.js"> </script>
@endsection




