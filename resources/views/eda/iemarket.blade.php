@extends('layouts.navbar')
@section('container')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                 {{-- <h1 class="h3 mb-2 text-gray-800">Internal External Market</h1> --}}

                 {{-- Internal External Market--}}
                 {!! file_get_contents(public_path('content/eda/4. Internal External Market/Internal External Market.html')) !!}


                </div>
                <!-- /.container-fluid -->

            

@endsection