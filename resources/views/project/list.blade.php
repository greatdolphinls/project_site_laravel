<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Projects</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <link href="{{ asset('assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/global/plugins/uniform/css/uniform.default.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/global/plugins/morris/morris.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/admin/pages/css/tasks.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/global/css/components-md.css')}}" id="style_components" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('assets/global/css/plugins-md.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/admin/layout4/css/layout.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/admin/layout4/css/themes/light.css')}}" rel="stylesheet" type="text/css"
          id="style_color"/>
    <link href="{{ asset('assets/admin/layout4/css/custom.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('common/jqwidgets/styles/jqx.base.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('common/jqwidgets/styles/jqx.bootstrap.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('common/jqwidgets/styles/jqx.metro.css')}}" type="text/css"/>
    <link rel="shortcut icon" href="{{ asset('favicon.ico')}}"/>
</head>
<body class="page-md page-sidebar-closed-hide-logo page-sidebar-closed-hide-logo">
<div class="page-container" style="margin-top: 20px">
    <div class="page-content" >
            <div class="page-head">
                <div class="row">
                    <div class="col-xs-7 col-sm-8">
                        <div class="page-title">
                            <h1>Project List
                            </h1>
                        </div>
                    </div>
                    <div class="col-xs-1 col-sm-1" align="center">
                        <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}"/>
                    </div>
                    <div class="col-xs-4 col-sm-3" align="right">
                        <a href="{{ url('/project/create')}}" role="button" class="btn blue" >
                        <i class="fa fa-plus"></i>Add Projects</a>
                    </div>
                </div>
                <div class="portlet box blue">
                    <div class="portlet-title">
                        <div class="caption">
                            Project List
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div id="userListTable"><div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<input id="baseurlInput" type="hidden" value="{{ url('') }}" />
<script src="{{ asset('assets/global/plugins/respond.min.js')}}"></script>
<script src="{{ asset('assets/global/plugins/excanvas.min.js')}}"></script>
<script src="{{ asset('assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery-migrate.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery.cokie.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/uniform/jquery.uniform.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/morris/morris.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/morris/raphael-min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery.sparkline.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/global/scripts/metronic.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/layout4/scripts/layout.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/layout4/scripts/demo.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/pages/scripts/index3.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/pages/scripts/tasks.js')}}" type="text/javascript"></script>
<script src="{{ asset('common/js/project/project_list.js')}}"></script>
<script type="text/javascript" src="{{ asset('common/jqwidgets/jqxcore.js')}}"></script>
<script type="text/javascript" src="{{ asset('common/jqwidgets/jqxdata.js')}}"></script>
<script type="text/javascript" src="{{ asset('common/jqwidgets/jqxbuttons.js')}}"></script>
<script type="text/javascript" src="{{ asset('common/jqwidgets/jqxscrollbar.js')}}"></script>
<script type="text/javascript" src="{{ asset('common/jqwidgets/jqxlistbox.js')}}"></script>
<script type="text/javascript" src="{{ asset('common/jqwidgets/jqxdropdownlist.js')}}"></script>
<script type="text/javascript" src="{{ asset('common/jqwidgets/jqxmenu.js')}}"></script>
<script type="text/javascript" src="{{ asset('common/jqwidgets/jqxgrid.js')}}"></script>
<script type="text/javascript" src="{{ asset('common/jqwidgets/jqxgrid.selection.js')}}"></script>
<script type="text/javascript" src="{{ asset('common/jqwidgets/jqxgrid.columnsresize.js')}}"></script>
<script type="text/javascript" src="{{ asset('common/jqwidgets/jqxgrid.pager.js')}}"></script>
<script type="text/javascript" src="{{ asset('common/jqwidgets/jqxgrid.sort.js')}}"></script>
<script type="text/javascript" src="{{ asset('common/jqwidgets/jqxrating.js')}}"></script>

<!-- END PAGE LEVEL SCRIPTS -->
<script>
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>