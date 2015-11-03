@extends('layouts.master')
@section('before-styles')
{{-- This will be loaded before all.css --}}
@endsection
@section('after-styles')
@endsection

@section('content')
  <main>
    <div class="section no-pad-bot" id="index-banner">
      <div class="row">
        <div class="col s12">
          <div class="content">
            <div class="title">Hello, my name is Jay Chow. I am an ICAM graduate from UCSD, Senior Web Developer at Katana, with skills in multimedia production, experience in data visualization on massive cultural data, and have a passion for entrepreneurship.</div>
          </div>
        </div>
      </div><!--  /.container  -->
    </div><!-- /.section -->
  </main>
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
