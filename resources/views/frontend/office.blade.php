@include('layouts.style')
<title>Office</title>

    <body class="page-container-bg-solid page-md">
        <div class="page-wrapper">
            <div class="page-wrapper-row">
                <div class="page-wrapper-top">
                @include('layouts.menu')
                <style type="text/css">
                    #offices{
                        color: #f1f1f1;
                        background: #4E5966;
                    }
                    #offices a{
                        color: #ffffff;
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
                                        <h1>Office</h1>
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
                                        <div class="note note-info">
                                            <p style="padding-bottom: 20px;font-size: 24px;"><b>{{$office->name}} </b><span class="label label-sm label-primary circle">{{$office->borough}}</span></p>
                                            <p style="font-size: 18px;">{{$office->neighborhoods}}</p>
                                        </div>
                                    </div>
                                    <!-- END PAGE CONTENT INNER -->
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                            <div class="portlet light ">
                                                <div class="portlet-title">
                                                    <div class="caption font-red">
                                                        <span class="caption-subject bold uppercase">2017 Candidates</span>
                                                    </div>                            
                                                    <div class="tools"> </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <table class="table table-striped table-bordered table-hover order-column" id="sample_1">
                                                        <thead>
                                                            <tr>
                                                                <th>Candidate&nbsp;Name</th>
                                                                <th>Party</th>
                                                                <th>Endorser</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($candidaters as $candidater)
                                                            <tr>
                                                                <td>{{$candidater->first2017}} {{$candidater->last2017}}</td>
                                                                <td>{{$candidater->party2017}}</td>
                                                                <td>{{$candidater->organization_name}}</td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                            <div class="portlet light ">
                                                <div class="portlet-title">  
                                                    <div class="caption font-blue">
                                                        <span class="caption-subject bold uppercase">2013 Candidates</span>
                                                    </div>                          
                                                    <div class="tools"> </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <table class="table table-striped table-bordered table-hover order-column" id="sample_5">
                                                        <thead>
                                                            <tr>
                                                                <th>Candidate&nbsp;Name</th>
                                                                <th>Party</th>
                                                                <th>Endorser</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($candidates as $candidate)
                                                            <tr>  
                                                                <td>{{$candidate->firstname2013}} {{$candidate->lastname2013}}</td>
                                                                <td>{{$candidate->party2013}}</td>
                                                                <td>{{$candidate->organization_name}}</td>
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
