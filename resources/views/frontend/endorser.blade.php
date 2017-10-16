@include('layouts.style')
<title>Endorser Profile</title>

    <body class="page-container-bg-solid page-md">
        <div class="page-wrapper">
            <div class="page-wrapper-row">
                <div class="page-wrapper-top">
                @include('layouts.menu')
                <style type="text/css">
                    #endorsers{
                        color: #f1f1f1;
                        background: #4E5966;
                    }
                    #endorsers a{
                        color: #ffffff;
                    }
                    #sample_1_filter{
                        display: none;
                    }
                    div.DTS div.dataTables_scrollBody {
                        background: transparent; 
                    }
                </style>
                </div>
            </div>
            <div class="page-wrapper-row full-height">
                <div class="page-wrapper-middle">
                    <!-- BEGIN CONTAINER -->
                    <div class="page-container">
                        <!-- BEGIN CONTENT -->
                        <div class="page-content-wrapper">
                            <!-- BEGIN CONTENT BODY -->
                            <!-- BEGIN PAGE HEAD-->
                            <div class="page-head">
                                <div class="container">
                                    <!-- BEGIN PAGE TITLE -->
                                    <div class="page-title">
                                        <h1>Endorser</h1>
                                    </div>
                                    <!-- END PAGE TITLE -->
                                </div>
                            </div>
                            <!-- END PAGE HEAD-->
                            <!-- BEGIN PAGE CONTENT BODY -->
                            <div class="page-content">
                                <div class="container">
                                    <!-- BEGIN PAGE CONTENT INNER -->
                                    <div class="page-content-inner">
                                        <div class="note note-blue">
                                            <p style="padding-bottom: 20px;font-size: 24px;"><b>{{$organization->organization}} </b><span class="label label-sm label-primary circle">{{$organization->type}}</span></p>
                                            <a href="{{$organization->website}}" target="_blank"><i class="fa fa-globe fa-3x"></i></a>
                                            <a href="{{$organization->twitter}}" target="_blank" class="socicon-btn socicon-btn-circle socicon-solid bg-green font-white bg-hover-grey-salsa socicon-twitter tooltips" data-original-title="Twitter" aria-describedby="tooltip212351"></a>
                                            <a href="{{$organization->facebook}}" target="_blank" class="socicon-btn socicon-btn-circle socicon-solid bg-blue font-white bg-hover-grey-salsa socicon-facebook tooltips" data-original-title="Facebook" aria-describedby="tooltip356210"></a>
                                        </div>
                                    </div>
                                    <!-- END PAGE CONTENT INNER -->
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6" style="padding-right: 1px;">
                                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                            <div class="portlet light ">
                                                <div class="portlet-title">
                                                    <div class="caption font-green">
                                                        <span class="caption-subject bold uppercase">2013 Endorsements</span>
                                                    </div>
                                                    <div class="tools"> </div>
                                                </div>
                                                <div class="portlet-body table-both-scroll">
                                                    <table class="table table-striped table-bordered table-hover order-column" id="sample_3">
                                                        <thead>
                                                            <tr>
                                                                <th>Candidate&nbsp;Name</th>
                                                                <th>Classification</th>
                                                                <th>Party</th>
                                                                <th>Office</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($endorsers as $endorser)
                                                            <tr>
                                                                <td>{{$endorser->firstname2013}} {{$endorser->lastname2013}}</td>
                                                                <td>{{$endorser->classification2013}}</td>
                                                                <td>{{$endorser->party2013}}</td>
                                                                <td>{{$endorser->name}}</td>
                                                            </tr>
                                                             @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6" style="padding-left: 1px;">
                                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                            <div class="portlet light ">
                                                <div class="portlet-title">
                                                    <div class="caption font-red">
                                                        <span class="caption-subject bold uppercase">2017 Endorsements</span>
                                                    </div>
                                                    <div class="tools"> </div>
                                                </div>
                                                <div class="portlet-body table-both-scroll">
                                                    <table class="table table-striped table-bordered table-hover order-column" id="sample_4">
                                                        <thead>
                                                            <tr>
                                                                <th>Candidate&nbsp;Name</th>
                                                                <th>Classification</th>
                                                                <th>Party</th>
                                                                <th>Office</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($endorserts as $endorsert)
                                                            <tr>
                                                                <td>{{$endorsert->first2017}} {{$endorsert->last2017}}</td>
                                                                <td>{{$endorsert->classification2017}}</td>
                                                                <td>{{$endorsert->party2017}}</td>
                                                                <td>{{$endorsert->name}}</td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- END PAGE CONTENT BODY -->
                            <!-- END CONTENT BODY -->
                        </div>
                        <!-- END CONTENT -->
                    </div>
                    <!-- END CONTAINER -->
                </div>
            </div>
            @include('layouts.footer')
        </div>

    </body>


@include('layouts.script')

