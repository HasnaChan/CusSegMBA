@extends('layouts.navbar')
@section('container')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                 <h1 class="h3 mb-2 text-gray-800">FP-Growth 7 Clusters</h1>
                 <br>
                 <h5 class="h5 mb-2 text-gray-800 font-weight-bold">Cluster 0 - Lost Customer</h5>
                 {!! file_get_contents(public_path('content/marketBasketAnalysis/2. FP-Growth 7 CLUSTER/FP-GROWTH 7 CLUSTER RELATIVE SUPPORT/mba1_rules_subset.html')) !!}
                 <br>

                 <h5 class="h5 mb-2 text-gray-800 font-weight-bold">Cluster 1 - Promising Customer</h5>
                 {!! file_get_contents(public_path('content/marketBasketAnalysis/2. FP-Growth 7 CLUSTER/FP-GROWTH 7 CLUSTER RELATIVE SUPPORT/mba2_rules_subset.html')) !!}
                 <br>

                 <h5 class="h5 mb-2 text-gray-800 font-weight-bold">Cluster 2 - Regular Customer</h5>
                 {!! file_get_contents(public_path('content/marketBasketAnalysis/2. FP-Growth 7 CLUSTER/FP-GROWTH 7 CLUSTER RELATIVE SUPPORT/mba3_rules_subset.html')) !!}
                 <br>

                 <h5 class="h5 mb-2 text-gray-800 font-weight-bold">Cluster 3 - Most Profitable Customer</h5>
                 {!! file_get_contents(public_path('content/marketBasketAnalysis/2. FP-Growth 7 CLUSTER/FP-GROWTH 7 CLUSTER RELATIVE SUPPORT/mba4_rules_subset.html')) !!}
                 <br>

                 <h5 class="h5 mb-2 text-gray-800 font-weight-bold">Cluster 4 - At Risk Customer</h5>
                 {!! file_get_contents(public_path('content/marketBasketAnalysis/2. FP-Growth 7 CLUSTER/FP-GROWTH 7 CLUSTER RELATIVE SUPPORT/mba5_rules_subset.html')) !!}
                 <br>

                 <h5 class="h5 mb-2 text-gray-800 font-weight-bold">Cluster 5 - Loyal Customer</h5>
                 {!! file_get_contents(public_path('content/marketBasketAnalysis/2. FP-Growth 7 CLUSTER/FP-GROWTH 7 CLUSTER RELATIVE SUPPORT/mba6_rules_subset.html')) !!}
                 <br>

                 <h5 class="h5 mb-2 text-gray-800 font-weight-bold">Cluster 6 - Potential Customer</h5>
                 {!! file_get_contents(public_path('content/marketBasketAnalysis/2. FP-Growth 7 CLUSTER/FP-GROWTH 7 CLUSTER RELATIVE SUPPORT/mba7_rules_subset.html')) !!}

                </div>
                <!-- /.container-fluid -->



@endsection
