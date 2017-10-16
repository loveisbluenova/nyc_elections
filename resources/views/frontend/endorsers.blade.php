@include('layouts.style')
<title>All Endorsers</title>

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
                                        <h1>All Endorsers </h1>
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
                                            <p> A black page template with a minimal dependency assets to use as a base for any custom page you create </p>
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

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <div class="input-group select2-bootstrap-prepend">
                                                                <span class="input-group-addon" style="background-color: #fafafa;">
                                                                        Type                                                   
                                                                </span>
                                                                <select id="single-prepend-text" class="form-control select2">
                                                                    <option></option>
                                                                    <option value="A">A</option>
                                                                    <option value="B">B</option>
                                                                    <option value="C">C</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <div class="input-group select2-bootstrap-prepend">
                                                                <span class="input-group-addon" style="background-color: #fafafa;">
                                                                    Year</span>
                                                                <select id="single-append-radio" class="form-control select2-allow-clear" multiple>
                                                                    <option></option>
                                                                        <option value="2013">2013</option>
                                                                        <option value="2017">2017</option>               
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                            
                                                    <div class="tools"> </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <table class="table table-striped table-bordered table-hover order-column" id="sample_1">
                                                        <thead>
                                                            <tr>
                                                                <th>Endorser&nbsp;Name</th>
                                                                <th>Type</th>
                                                                <th>2013</th>
                                                                <th>2017</th>
                                                                <th>Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($organizations as $organization)
                                                            <tr>
                                                                <td><a href="/endorser_{{$organization->organization_id}}">{{$organization->organization}}</a></td>
                                                                <td>{{$organization->type}}</td>
                                                                <td>{{sizeof(explode(",", $organization->endorsements2013))}}</td>
                                                                <td>{{sizeof(explode(",", $organization->endorsments2017))}}</td>
                                                                <td>{{sizeof(explode(",", $organization->endorsements2013)) + sizeof(explode(",", $organization->endorsments2017))}}</td>
                                                            @endforeach
                                                            </tr>                                                           
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

