@include('layouts.style')
<title>All Offices</title>

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
                                        <h1>All Offices </h1>
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
                                                                    Borough                                                 
                                                                </span>
                                                                <select id="single-prepend-text" class="form-control select2" name="" onchange="javascript:location.href = this.value;">
                                                                    <option></option>
                                                                    <option value="brough_Bronx">A</option>
                                                                    <option value="brough_Brooklyn">B</option>
                                                                    <option value="brough_Manhattan">C</option>
                                                                    <option value="brough_Queens">C</option>
                                                                    <option value="brough_Staten Island">C</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    
                                                    </div>
                                                    <div class="col-md-4" style="padding-right: 0;">
                                                        <div class="form-group">
                                                            <div class="input-group select2-bootstrap-prepend">
                                                                <span class="input-group-addon" style="background-color: #fafafa;">
                                                                        Neighborhood                                                   
                                                                </span>
                                                                <select id="single-prepend-text" class="form-control select2" name="" onchange="javascript:location.href = this.value;">
                                                                    <option></option>
                                                                    <option value="A">A</option>
                                                                    <option value="B">B</option>
                                                                    <option value="C">C</option>
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
                                                                <th>Office&nbsp;Name</th>
                                                                <th>Borough</th>
                                                                <th>2013 Candidates</th>
                                                                <th>2017 Candidates</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($offices as $office)
                                                            <tr>
                                                                <td><a href="office_{{$office->office_sought_id}}">{{$office->name}}</a></td>
                                                                <td>{{$office->borough}}</td>
                                                                <td>{{sizeof(explode(",", $office->candidates2013))}}</td>
                                                                <td>{{sizeof(explode(",", $office->candidates2017))}}</td>
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

