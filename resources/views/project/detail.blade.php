<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Projects</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <link href="{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/global/plugins/uniform/css/uniform.default.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/admin/pages/css/tasks.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/global/css/components-md.css')}}" id="style_components" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('assets/global/css/plugins-md.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/admin/layout4/css/layout.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/admin/layout4/css/themes/light.css')}}" rel="stylesheet" type="text/css"
          id="style_color"/>
    <link href="{{ asset('assets/admin/layout4/css/custom.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="{{ asset('favicon.ico')}}"/>
</head>
<body class="page-md page-header-fixed page-sidebar-closed-hide-logo page-sidebar-closed-hide-logo">
<div class="page-container" style="margin-top: 20px">
    <div class="page-content">
        <div class="page-content">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                        <div class="tab-content">
                                <div class="portlet yellow-crusta box">
                                <div class="portlet-title" style="background-color:#3598dc">
                                    <div class="caption">
                                        <i class="fa fa-cogs"></i>Project Details
                                    </div>
                                    <div class="actions">
                                        <a href="/project/list" class="btn btn-default btn-sm" style="color: white">
                                        Back </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="row static-info">
                                        <div class="col-md-5 name">
                                                Project name:
                                        </div>
                                        <div class="col-md-7 value">
                                            {{ $project->project_name}}
                                        </div>
                                    </div>
                                    <div class="row static-info">
                                        <div class="col-md-5 name">
                                                Client name:
                                        </div>
                                        <div class="col-md-7 value">
                                                {{ $project->client_name}}
                                        </div>
                                    </div>
                                    <div class="row static-info">
                                        <div class="col-md-5 name">
                                                Hour rate:
                                        </div>
                                        <div class="col-md-7 value">
                                                {{ $project->hour_rate}}
                                        </div>
                                    </div>
                                    <div class="row static-info">
                                        <div class="col-md-5 name">
                                                Fixed price:
                                        </div>
                                        <div class="col-md-7 value">
                                                ${{ $project->fixed_price}}
                                        </div>
                                    </div>
                                    <div class="row static-info">
                                        <div class="col-md-5 name">
                                                Phone:
                                        </div>
                                        <div class="col-md-7 value">
                                                {{ $project->phone}}
                                        </div>
                                    </div>
                                    <div class="row static-info">
                                            <div class="col-md-5 name">
                                                    Attachement:
                                            </div>
                                            @if( $project->attachement != null)
                                            <a href="/uploads/{{ $project->attachement}}" download>Download</a>
                                            @else
                                             No upload file
                                            @endif
                                        </div>
                                </div>
                            </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
    </div>
</div>
</body>
</html>