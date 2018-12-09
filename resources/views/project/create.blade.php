
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Projects</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <link href="{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/global/plugins/uniform/css/uniform.default.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/global/css/components-md.css')}}" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/global/css/plugins-md.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/admin/layout4/css/layout.css')}}" rel="stylesheet" type="text/css"/>
    <link id="style_color" href="{{ asset('assets/admin/layout4/css/themes/light.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/admin/layout4/css/custom.css" rel="stylesheet')}}" type="text/css"/>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}"/>
</head>
<body class="page-md page-header-fixed page-sidebar-closed-hide-logo ">
<div class="page-container">
    <div class="page-container" style="margin-top: 20px">
            <div class="page-content">
            <div class="row">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-6">
                    <div class="portlet box blue" id="flashContainer">
                        <div class="portlet-title">
                            <div class="caption">
                                Project Add
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="row">
                                <form class="register-form" action="/project/createProject" method="POST" enctype='multipart/form-data'>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                    <div class="col-xs-12 col-md-6 col-sm-6">
                                        <p>
                                            Project Data.
                                        </p>
                                        <div class="form-group">
                                            <label class="control-label visible-ie8 visible-ie9">Project Name</label>
                                            <div class="input-icon">
                                                <input class="form-control placeholder-no-fix" type="text" placeholder="Project Name" name="project_name"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label visible-ie8 visible-ie9">Client Name</label>
                                            <div class="input-icon">
                                                <input class="form-control placeholder-no-fix" type="text" placeholder="Client" name="client_name"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label visible-ie8 visible-ie9">Hour Rate</label>
                                            <div class="input-icon">
                                                    <input class="form-control placeholder-no-fix" type="text" placeholder="Hour Rate" name="hour_rate"/>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label visible-ie8 visible-ie9">Fixed Price</label>
                                            <div class="input-icon">
                                                <input class="form-control placeholder-no-fix" type="text" placeholder="Fixed Price" name="fixed_price"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label visible-ie8 visible-ie9">Phone</label>
                                            <div class="input-icon">
                                                <input class="form-control placeholder-no-fix" type="text" placeholder="Phone" name="phone"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label visible-ie8 visible-ie9">Description</label>
                                            <div class="input-icon">
                                                <textarea class="form-control placeholder-no-fix"  placeholder="Description" name="description" rows="4" cols="50">
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <label class="control-label visible-ie8 visible-ie9">Attachement 1</label>
                                                <div class="form-group">
                                                <input type="file" name="attachement1"/>
                                                </div>
                                        </div>
                                           <div class="form-group">
                                                    <label class="control-label visible-ie8 visible-ie9">Attachement 2</label>
                                                    <div class="form-group">
                                                    <input type="file" name="attachement2"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                        <label class="control-label visible-ie8 visible-ie9">Attachement 3</label>
                                                        <div class="form-group">
                                                        <input type="file" name="attachement3"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                            <label class="control-label visible-ie8 visible-ie9">Attachement 4</label>
                                                            <div class="form-group">
                                                            <input type="file" name="attachement4"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                                <label class="control-label visible-ie8 visible-ie9">Attachement 5</label>
                                                                <div class="form-group">
                                                                <input type="file" name="attachement5"/>
                                                                </div>
                                                            </div>
                                    </div>
                                    <div class="col-xs-12 col-md-12 col-sm-12">
                                        <div class="form-actions">
                                            <a href="{{ url('/project/list')}}"  id="register-back-btn" type="button" class="btn">
                                                <i class="m-icon-swapleft"></i> BACK </a>
                                            <button type="submit" id="register-submit-btn" class="btn green-haze pull-right">
                                                ADD <i class="m-icon-swapright m-icon-white"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

