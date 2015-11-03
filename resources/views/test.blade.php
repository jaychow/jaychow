@extends('layouts.master')
@section('before-styles')
    {{-- This will be loaded before all.css --}}
@endsection
@section('after-styles')
@endsection

@section('content')
    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <div class="content">
                <div class="title">Hi, my name is Jay Chow</div>

            </div>
        </div><!--  /.container  -->
    </div><!-- /.section -->
@endsection
@section('before-scripts')
@endsection

@section('after-scripts')
    <script>
        $(document).ready(function(){
            $('.collapsible').collapsible({
                accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
            });
        });
    </script>
@endsection
