@extends('main')

@section('content')
    <div class="row">
        <div class="col-4">

            <div class="widget">
                <div class="widget-outline">
                    <div class="widget-header" id="heading_w1">
                        <h5 class="mb-0">
                            New Message
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse_w1" aria-expanded="true"
                               aria-controls="collapse_w1">
                                <i class="fas fa-angle-down fa-1x"></i>
                            </a>
                        </h5>
                    </div>

                    <div id="collapse_w1" class="collapse show" role="tabpanel" aria-labelledby="heading_w1">
                        <div class="widget-block">
                            <canvas id="sample-1"></canvas>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">

            <div class="widget">
                <div class="widget-header" id="heading_w2">
                    <h5 class="mb-0">
                        New Message
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse_w2" aria-expanded="true"
                           aria-controls="collapse_w2">
                            <i class="fas fa-angle-down fa-1x"></i>
                        </a>
                    </h5>
                </div>

                <div id="collapse_w2" class="collapse show" role="tabpanel" aria-labelledby="heading_w2">
                    <div class="widget-block">

                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">

            <div class="widget">
                <div class="widget-header" id="heading_w3">
                    <h5 class="mb-0">
                        New Message
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse_w3" aria-expanded="true"
                           aria-controls="collapse_w3">
                            <i class="fas fa-angle-down fa-1x"></i>
                        </a>
                    </h5>
                </div>

                <div id="collapse_w3" class="collapse show" role="tabpanel" aria-labelledby="heading_w3">
                    <div class="widget-block">
                        Test
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


