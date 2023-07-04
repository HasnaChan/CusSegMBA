@extends('layouts.navbar')
@section('container')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                 {{-- <h1 class="h3 mb-2 text-gray-800">Amount sales by country</h1> --}}

                 {{-- amount sales by country--}}
                 {!! file_get_contents(public_path('content/eda/3. Amount Sales By Country/Amount Sales by Country.html')) !!}

                </div>
                <!-- /.container-fluid -->

            

@endsection