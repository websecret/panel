<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Real Admin - Bootstrap Admin Template</title>

    <link href="{{ asset('assets/panel/css/vendor.css') }}" rel="stylesheet" id="bootstrap-style">
</head>
<body >
<div id="theme-settings" class="hidden-sm hidden-xs">
    <div id="open-close">
        <i class="fa fa-wrench"></i>
    </div>
    <h4>Options</h4>
    <ul id="options">
        <li>
            <label class="custom-checkbox-item pull-left">
                <input id="sm" class="custom-checkbox" type="checkbox"/>
                <span class="custom-checkbox-mark"></span>
            </label>
            <span class="desc">Sidebar Minified</span>
        </li>
        <li>
            <label class="custom-checkbox-item pull-left">
                <input id="sh" class="custom-checkbox" type="checkbox"/>
                <span class="custom-checkbox-mark"></span>
            </label>
            <span class="desc">Sidebar Hidden</span>
        </li>
        <li>
            <label class="custom-checkbox-item pull-left">
                <input id="rtl" class="custom-checkbox" type="checkbox"/>
                <span class="custom-checkbox-mark"></span>
            </label>
            <span class="desc">Right to Left</span>
        </li>
        <li>
            <label class="custom-checkbox-item pull-left">
                <input id="bl" class="custom-checkbox" type="checkbox"/>
                <span class="custom-checkbox-mark"></span>
            </label>
            <span class="desc">Boxed Layout</span>
        </li>
        <li>
            <label class="custom-checkbox-item pull-left">
                <input id="ss" class="custom-checkbox" type="checkbox"/>
                <span class="custom-checkbox-mark"></span>
            </label>
            <span class="desc">Static Sidebar</span>
        </li>
        <li>
            <label class="custom-checkbox-item pull-left">
                <input id="she" class="custom-checkbox" type="checkbox"/>
                <span class="custom-checkbox-mark"></span>
            </label>
            <span class="desc">Static Header</span>
        </li>

    </ul>

</div>
<!-- end: Layout Settings -->

<!-- start: Header -->
<div class="navbar" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.html#"><i class="icon-rocket"></i> <span>Real Admin</span></a>
    </div>
    <ul class="nav navbar-nav navbar-actions navbar-left">
        <li class="visible-md visible-lg"><a href="index.html#" id="main-menu-toggle"><i class="fa fa-bars"></i></a></li>
        <li class="visible-xs visible-sm"><a href="index.html#" id="sidebar-menu"><i class="fa fa-bars"></i></a></li>
    </ul>
    <form class="navbar-form navbar-left">
        <i class="fa fa-search"></i>
        <input type="text" class="form-control" placeholder="Are you looking for something ?">
    </form>
    <ul class="nav navbar-nav navbar-right visible-md visible-lg">
        <li><button class="btn btn-default">Preview</button></li>
        <li><button class="btn btn-success">Launch</button></li>
        <li><span class="timer"><i class="icon-clock"></i> <span id="clock"><!-- JavaScript clock will be displayed here, if you want to remove clock delete parent <li> --></span></span></li>
        <li class="dropdown visible-md visible-lg">
            <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/ico/flags/USA.png" style="height:18px; margin-top:-4px;"></a>
            <ul class="dropdown-menu">
                <li><a href="index.html#"><img src="assets/ico/flags/USA.png" style="height:18px; margin-top:-2px;"> US</a></li>
                <li><a href="index.html#"><img src="assets/ico/flags/Spain.png" style="height:18px; margin-top:-2px;"> Spanish</a></li>
                <li><a href="index.html#"><img src="assets/ico/flags/Germany.png" style="height:18px; margin-top:-2px;"> German</a></li>
                <li><a href="index.html#"><img src="assets/ico/flags/Poland.png" style="height:18px; margin-top:-2px;"> Polish</a></li>
            </ul>
        </li>
        <li class="dropdown visible-md visible-lg">
            <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-envelope-letter"></i><span class="badge">4</span></a>
            <ul class="dropdown-menu">
                <li class="dropdown-menu-header">
                    <strong>Messages</strong>
                    <div class="progress thin">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                            <span class="sr-only">40% Complete (success)</span>
                        </div>
                    </div>
                </li>
                <li class="avatar">
                    <a href="index.html#">
                        <img class="avatar" src="assets/img/avatar.jpg">
                        <div>New message</div>
                        <small>1 minute ago</small>
                        <span class="label label-info">NEW</span>
                    </a>
                </li>
                <li class="avatar">
                    <a href="index.html#">
                        <img class="avatar" src="assets/img/avatar.jpg">
                        <div>New message</div>
                        <small>1 minute ago</small>
                        <span class="label label-info">NEW</span>
                    </a>
                </li>
                <li class="avatar">
                    <a href="index.html#">
                        <img class="avatar" src="assets/img/avatar.jpg">
                        <div>New message</div>
                        <small>1 minute ago</small>
                    </a>
                </li>
                <li class="avatar">
                    <a href="index.html#">
                        <img class="avatar" src="assets/img/avatar.jpg">
                        <div>New message</div>
                        <small>1 minute ago</small>
                    </a>
                </li>
                <li class="avatar">
                    <a href="index.html#">
                        <img class="avatar" src="assets/img/avatar.jpg">
                        <div>New message</div>
                        <small>1 minute ago</small>
                    </a>
                </li>
                <li class="avatar">
                    <a href="index.html#">
                        <img class="avatar" src="assets/img/avatar.jpg">
                        <div>New message</div>
                        <small>1 minute ago</small>
                    </a>
                </li>
                <li class="dropdown-menu-footer text-center">
                    <a href="index.html#">View all messages</a>
                </li>
            </ul>
        </li>
        <li><a href="index.html#"><i class="icon-speech"></i></a></li>
        <li class="dropdown visible-md visible-lg">
            <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-settings"></i><span class="badge">!</span></a>
            <ul class="dropdown-menu">
                <li class="dropdown-menu-header text-center">
                    <strong>Account</strong>
                </li>
                <li><a href="index.html#"><i class="fa fa-bell-o"></i> Updates <span class="label label-info">42</span></a></li>
                <li><a href="index.html#"><i class="fa fa-envelope-o"></i> Messages <span class="label label-success">42</span></a></li>
                <li><a href="index.html#"><i class="fa fa-tasks"></i> Tasks <span class="label label-danger">42</span></a></li>
                <li><a href="index.html#"><i class="fa fa-comments"></i> Comments <span class="label label-warning">42</span></a></li>
                <li class="dropdown-menu-header text-center">
                    <strong>Settings</strong>
                </li>
                <li><a href="index.html#"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="index.html#"><i class="fa fa-wrench"></i> Settings</a></li>
                <li><a href="index.html#"><i class="fa fa-usd"></i> Payments <span class="label label-default">42</span></a></li>
                <li><a href="index.html#"><i class="fa fa-file"></i> Projects <span class="label label-primary">42</span></a></li>
                <li class="divider"></li>
                <li><a href="index.html#"><i class="fa fa-shield"></i> Lock Profile</a></li>
                <li><a href="index.html#"><i class="fa fa-lock"></i> Logout</a></li>
            </ul>
        </li>
    </ul>
</div>
<!-- end: Header -->



<!-- start: Main Menu -->
<div class="sidebar">

    <div class="sidebar-collapse">

        <div class="sidebar-header">

            <img src="assets/img/avatar9.jpg">

            <h2>John Doe</h2>
            <h3>john@doe.com <a href="index.html#"><i class="fa fa-chevron-down"></i></a></h3>

        </div>

        <div class="sidebar-menu">
            <ul class="nav nav-sidebar">

                <li><a href="index.html"><i class="icon-speedometer"></i><span class="text"> Dashboard<span class="label label-info">NEW</span></span></a></li>

                <li>
                    <a href="index.html#"><i class="icon-magic-wand"></i><span class="text"> UI Features</span> <span class="indicator"></span></a>
                    <ul>
                        <li><a href="ui-sliders-progress.html"><i class="icon-magic-wand"></i><span class="text"> Sliders</span></a></li>
                        <li><a href="ui-nestable-list.html"><i class="icon-magic-wand"></i><span class="text"> Nestable Lists</span></a></li>
                        <li><a href="ui-elements.html"><i class="icon-magic-wand"></i><span class="text"> Elements</span></a></li>
                        <li><a href="ui-panels.html"><i class="icon-magic-wand"></i><span class="text"> Panels <span class="label label-info">NEW</span></span></a></li>
                        <li><a href="ui-buttons.html"><i class="icon-magic-wand"></i><span class="text"> Buttons <span class="label label-warning">NEW</span></span></a></li>
                        <li><a href="ui-modals.html"><i class="icon-magic-wand"></i><span class="text"> Modals <span class="label label-info">NEW</span></span></a></li>
                        <li><a href="ui-notifications.html"><i class="icon-magic-wand"></i><span class="text"> Notifications <span class="label label-info">NEW</span></span></a></li>
                    </ul>
                </li>
                <li><a href="widgets.html"><i class="icon-calculator"></i><span class="text"> Widgets</span></a></li>

                <li>
                    <a href="index.html#"><i class="icon-book-open"></i><span class="text"> Example Pages</span> <span class="indicator"></span></a>
                    <ul>
                        <li><a href="page-activity.html"><i class="icon-like"></i><span class="text"> Activity</span></a></li>
                        <li>
                            <a href="index.html#"><i class="icon-envelope"></i><span class="text"> Mail</span> <span class="indicator"></span></a>
                            <ul>
                                <li><a href="page-inbox.html"><i class="icon-envelope"></i><span class="text"> Inbox View</span></a></li>
                                <li><a href="page-inbox-message.html"><i class="icon-envelope"></i><span class="text"> Message View</span></a></li>
                                <li><a href="page-inbox-compose.html"><i class="icon-envelope"></i><span class="text"> Compose</span></a></li>

                            </ul>
                        </li>
                        <li><a href="page-invoice.html"><i class="icon-credit-card"></i><span class="text"> Invoice</span></a></li>
                        <li><a href="page-todo.html"><i class="icon-list"></i><span class="text"> ToDo &amp; Timeline</span></a></li>
                        <li><a href="page-profile.html"><i class="icon-user-following"></i><span class="text"> Profile</span></a></li>
                        <li><a href="page-pricing-tables.html"><i class="icon-basket"></i><span class="text"> Pricing Tables</span></a></li>
                        <li><a href="page-404.html" target="_top"><i class="icon-link"></i><span class="text"> 404</span></a></li>
                        <li><a href="page-500.html" target="_top"><i class="icon-link"></i><span class="text"> 500</span></a></li>
                        <li><a href="page-lockscreen.html" target="_top"><i class="icon-lock"></i><span class="text"> LockScreen</span></a></li>
                        <li><a href="page-lockscreen2.html" target="_top"><i class="icon-lock"></i><span class="text"> LockScreen2</span></a></li>
                        <li><a href="page-login.html" target="_top"><i class="icon-login"></i><span class="text"> Login <span class="label label-danger">NEW</span></span></a></li>
                        <li><a href="page-register.html" target="_top"><i class="icon-logout"></i><span class="text"> Register <span class="label label-success">NEW</span></span></a></li>
                        <li><a href="page-login.html" target="_top"><i class="icon-login"></i><span class="text"> Login Alt <span class="label label-danger">NEW</span></span></a></li>
                        <li><a href="page-register.html" target="_top"><i class="icon-logout"></i><span class="text"> Register Alt <span class="label label-success">NEW</span></span></a></li>
                        <li><a href="page-blank.html"><i class="icon-docs"></i><span class="text"> Blank Page</span></a></li>
                    </ul>
                </li>
                <li>
                    <a href="index.html#"><i class="icon-note"></i><span class="text"> Forms</span> <span class="indicator"></span></a>
                    <ul>
                        <li><a href="form-elements.html"><i class="icon-note"></i><span class="text"> Form elements</span></a></li>
                        <li><a href="form-wizard.html"><i class="icon-note"></i><span class="text"> Wizard</span></a></li>
                        <li><a href="form-dropzone.html"><i class="icon-note"></i><span class="text"> Dropzone Upload</span></a></li>
                        <li><a href="form-x-editable.html"><i class="icon-note"></i><span class="text"> X-editable</span></a></li>
                    </ul>
                </li>
                <li>
                    <a href="index.html#"><i class="icon-bar-chart"></i><span class="text"> Charts</span> <span class="indicator"></span></a>
                    <ul>
                        <li><a href="charts-flot.html"><i class="icon-bar-chart"></i><span class="text"> Flot Charts</span></a></li>
                        <li><a href="charts-xcharts.html"><i class="icon-bar-chart"></i><span class="text"> xCharts</span></a></li>
                        <li><a href="charts-others.html"><i class="icon-bar-chart"></i><span class="text"> Other</span></a></li>
                    </ul>

                </li>
                <li><a href="typography.html"><i class="icon-pencil"></i><span class="text"> Typography</span></a></li>

                <li><a href="gallery.html"><i class="icon-picture"></i><span class="text"> Gallery</span></a></li>
                <li><a href="table.html"><i class="icon-grid"></i><span class="text"> Tables</span></a></li>
                <li><a href="calendar.html"><i class="icon-calendar"></i><span class="text"> Calendar</span></a></li>
                <li>
                    <a href="index.html#"><i class="icon-star"></i><span class="text"> Icons</span> <span class="indicator"></span></a>
                    <ul>
                        <li><a href="icons-halflings.html"><i class="icon-star"></i><span class="text"> Halflings</span></a></li>
                        <li><a href="icons-glyphicons-pro.html"><i class="icon-star"></i><span class="text"> Glyphicons PRO</span></a></li>
                        <li><a href="icons-filetypes.html"><i class="icon-star"></i><span class="text"> Filetypes</span></a></li>
                        <li><a href="icons-social.html"><i class="icon-star"></i><span class="text"> Social</span></a></li>
                        <li><a href="icons-font-awesome.html"><i class="icon-star"></i><span class="text"> Font Awesome</span></a></li>
                        <li><a href="icons-climacons.html"><i class="icon-star"></i><span class="text"> Climacons</span></a></li>
                        <li><a href="icons-simple-line-icons.html"><i class="icon-star"></i><span class="text"> Simple Line Icons</span></a></li>
                    </ul>
                </li>
                <li>
                    <a href="index.html#"><i class="icon-folder-alt"></i><span class="text"> 4 Level Menu</span> <span class="indicator"></span></a>
                    <ul>
                        <li><a href="2nd-level.html"><i class="icon-folder"></i><span class="text"> 2nd Level</span></a></li>
                        <li>
                            <a href="index.html#"><i class="icon-folder-alt"></i><span class="text"> 2nd Level</span> <span class="indicator"></span></a>
                            <ul>
                                <li><a href="3rd-level.html"><i class="icon-folder"></i><span class="text"> 3rd Level</span></a></li>
                                <li>
                                    <a href="index.html#"><i class="icon-folder-alt"></i><span class="text"> 3rd Level</span> <span class="indicator"></span></a>
                                    <ul>
                                        <li>
                                            <a href="4th-level.html"><i class="icon-folder"></i><span class="text"> 4th Level</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="index.html#"><i class="icon-folder-alt"></i><span class="text"> 3rd Level</span> <span class="indicator"></span></a>
                                    <ul>
                                        <li>
                                            <a href="4th-level2.html"><i class="icon-folder"></i><span class="text"> 4th Level</span></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="http://bootstrapmaster.com/live/real/" target="_top"><i class="icon-reload"></i><span class="text"> AJAX Version<span class="label label-warning">FEATURE</span></span></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="sidebar-footer">
        <ul class="sidebar-actions">
            <li class="action">
                <div class="btn-group dropup">
                    <button type="button" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-speedometer"></i><span>Infrastructure</span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li class="header">Infrastructure <i class="icon-settings"></i></li>
                        <li>
                            <div class="title">Memory<span>2GB of 8GB</span></div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
                            </div>
                        </li>
                        <li>
                            <div class="title">HDD<span>750GB of 1TB</span></div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                            </div>
                        </li>
                        <li>
                            <div class="title">SSD<span>300GB of 1TB</span></div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%"></div>
                            </div>
                        </li>
                        <li>
                            <div class="title">Bandwidth<span>50TB of 50TB</span></div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="action">
                <div class="btn-group dropup">
                    <button type="button" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-list"></i><span>Menu</span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="index.html#">Action</a></li>
                        <li><a href="index.html#">Another action</a></li>
                        <li><a href="index.html#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="index.html#">Separated link</a></li>
                    </ul>
                </div>
            </li>
            <li class="action">
                <div class="btn-group dropup">
                    <button type="button" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-users"></i><span>Contacts</span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li class="header">Contacts <i class="icon-settings"></i></li>
                        <li><a href="index.html#"><span class="status status-success"></span> Anton Phunihel</a></li>
                        <li><a href="index.html#"><span class="status status-success"></span> Alphonse Ivo</a></li>
                        <li><a href="index.html#"><span class="status status-success"></span> Thancmar Theophanes</a></li>
                        <li><a href="index.html#"><span class="status status-warning"></span> Walerian Khwaja</a></li>
                        <li><a href="index.html#"><span class="status status-warning"></span> Clemens Janko</a></li>
                        <li><a href="index.html#"><span class="status status-warning"></span> Chidubem Gottlob</a></li>
                        <li><a href="index.html#"><span class="status status-danger"></span> Hristofor Sergio</a></li>
                        <li><a href="index.html#"><span class="status status-danger"></span> Tadhg Griogair</a></li>
                        <li><a href="index.html#"><span class="status status-danger"></span> Pollux Beaumont</a></li>
                        <li><a href="index.html#"><span class="status status-danger"></span> Adam Alister</a></li>
                        <li><a href="index.html#"><span class="status status-danger"></span> Carlito Roffe</a></li>
                    </ul>
                </div>
            </li>
        </ul>

        <ul class="sidebar-terms">
            <li><a href="index.html#">Terms</a></li>
            <li><a href="index.html#">Privacy</a></li>
            <li><a href="index.html#">Help</a></li>
            <li><a href="index.html#">About</a></li>
        </ul>

    </div>
</div>
<!-- end: Main Menu -->

<!-- start: Content -->
<div class="main">


    <ul class="statistics">
        <li>
            <i class="icon-users"></i>
            <div class="number">87.500</div>
            <div class="title">Visitors</div>
            <div class="progress thin">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%">
                    <span class="sr-only">73% Complete (success)</span>
                </div>
            </div>
        </li>
        <li>
            <i class="icon-user-follow"></i>
            <div class="number">385</div>
            <div class="title">New clients</div>
            <div class="progress thin">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%">
                    <span class="sr-only">73% Complete (success)</span>
                </div>
            </div>
        </li>
        <li>
            <i class="icon-basket-loaded"></i>
            <div class="number">1238</div>
            <div class="title">Products sold</div>
            <div class="progress thin">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%">
                    <span class="sr-only">73% Complete (success)</span>
                </div>
            </div>
        </li>
        <li>
            <i class="icon-pie-chart"></i>
            <div class="number">28%</div>
            <div class="title">Returning Visitors</div>
            <div class="progress thin">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%">
                    <span class="sr-only">73% Complete (success)</span>
                </div>
            </div>
        </li>
        <li>
            <i class="icon-speedometer"></i>
            <div class="number">5:34:11</div>
            <div class="title">Avg. time</div>
            <div class="progress thin">
                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%">
                    <span class="sr-only">73% Complete (success)</span>
                </div>
            </div>
        </li>
        <li>
            <i class="icon-speech"></i>
            <div class="number">972</div>
            <div class="title">New comments</div>
            <div class="progress thin">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%">
                    <span class="sr-only">73% Complete (success)</span>
                </div>
            </div>
        </li>
    </ul>

    <div class="row">

        <div class="col-lg-9">

            <div class="panel panel-default">

                <div class="panel-heading">
                    <i class="icon-bar-chart"></i><h2>Traffic &amp; Revenue</h2>
                    <div id="daterange" class="selectbox pull-right hidden-xs">
                        <i class="icon-calendar"></i>
                        <span>July 4, 2014 - August 2, 2014</span> <b class="caret"></b>
                    </div>
                </div>

                <div class="panel-body">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="index.html#months" role="tab" data-toggle="tab">Monthly</a></li>
                        <li class="hidden-xs"><a href="index.html#" role="tab" data-toggle="tab">Weekly</a></li>
                        <li class="hidden-xs"><a href="index.html#" role="tab" data-toggle="tab">Daily</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="months">
                            <div id="main-chart" style="height:390px"></div>
                        </div>
                        <div class="tab-pane" id="weeks">...</div>
                        <div class="tab-pane" id="days">...</div>
                    </div>

                </div>

                <div class="panel-footer">
                    <ul class="panel-footer-stats">
                        <li>
                            <canvas id="gauge-success" height=50 width=70></canvas>
                            <span class="number">148.125</span>
                            <span class="title">New users</span>
                        </li>
                        <li>
                            <canvas id="gauge-info" height=50 width=70></canvas>
                            <span class="number">452.352</span>
                            <span class="title">Pageviews</span>
                        </li>
                        <li>
                            <canvas id="gauge-warning" height=50 width=70></canvas>
                            <span class="number">2,19</span>
                            <span class="title">Pages / Visit</span>
                        </li>
                        <li>
                            <canvas id="gauge-danger" height=50 width=70></canvas>
                            <span class="number">59,83%</span>
                            <span class="title">Bounce Rate</span>
                        </li>
                        <li>
                            <canvas id="gauge-primary" height=50 width=70></canvas>
                            <span class="number">70,79%</span>
                            <span class="title">New Visits</span>
                        </li>
                    </ul>
                </div>

            </div>

        </div><!--/col-->

        <div class="col-lg-3 col-sm-6">

            <div class="panel panel-default">

                <div class="panel-body text-center" style="height:233px">
                    <h2>Revenue</h2>
                    <div style="width:300px;left:50%;position:absolute;margin-left:-150px;">
                        <canvas id="gauge1"></canvas>
                    </div>
                </div>
                <div class="panel-footer">
                    <strong>$11.234,00</strong>
                    <span class="pull-right"><i class="fa fa-arrow-circle-o-up text-success"></i> 15%</span>
                </div>

            </div>

        </div><!--/col-->

        <div class="col-lg-3 col-sm-6">

            <div class="panel panel-default">

                <div class="panel-body text-center" style="height:232px">
                    <h2>Profit</h2>
                    <div style="width:300px;left:50%;position:absolute;margin-left:-150px;">
                        <canvas id="gauge2"></canvas>
                    </div>
                </div>
                <div class="panel-footer">
                    <strong>$3.733,00</strong>
                    <span class="pull-right"><i class="fa fa-arrow-circle-o-down text-danger"></i> 53%</span>
                </div>

            </div>

        </div><!--/.col-->

    </div><!--/row-->

    <div class="row">

        <div class="col-md-3 col-sm-6">

            <div class="social-box facebook">
                <i class="fa fa-facebook"></i>
                <ul>
                    <li>
                        <strong>89k</strong>
                        <span>friends</span>
                    </li>
                    <li>
                        <strong>459</strong>
                        <span>feeds</span>
                    </li>
                </ul>
            </div><!--/social-box-->

        </div><!--/col-->

        <div class="col-md-3 col-sm-6">

            <div class="social-box twitter">
                <i class="fa fa-twitter"></i>
                <ul>
                    <li>
                        <strong>973k</strong>
                        <span>followers</span>
                    </li>
                    <li>
                        <strong>1.792</strong>
                        <span>tweets</span>
                    </li>
                </ul>
            </div><!--/social-box-->

        </div><!--/col-->

        <div class="col-md-3 col-sm-6">

            <div class="social-box linkedin">
                <i class="fa fa-linkedin"></i>
                <ul>
                    <li>
                        <strong>500+</strong>
                        <span>contacts</span>
                    </li>
                    <li>
                        <strong>292</strong>
                        <span>feeds</span>
                    </li>
                </ul>
            </div><!--/social-box-->

        </div><!--/col-->

        <div class="col-md-3 col-sm-6">

            <div class="social-box google-plus">
                <i class="fa fa-google-plus"></i>
                <ul>
                    <li>
                        <strong>894</strong>
                        <span>followers</span>
                    </li>
                    <li>
                        <strong>92</strong>
                        <span>circles</span>
                    </li>
                </ul>
            </div><!--/social-box-->

        </div><!--/col-->

    </div><!--/row-->

    <div class="row">

        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2><i class="icon-globe-alt"></i>Top Countries</h2>
                    <div class="panel-actions">
                        <a href="index.html#" class="btn-setting"><i class="icon-settings"></i></a>
                        <a href="index.html#" class="btn-minimize"><i class="icon-arrow-up"></i></a>
                        <a href="index.html#" class="btn-close"><i class="icon-close"></i></a>
                    </div>
                </div>
                <div class="panel-body">
                    <div id="map" style="height:374px;"></div>
                </div>
            </div>
        </div><!--/col-->

        <div class="col-lg-3 col-sm-6">

            <div class="panel panel-default">

                <div class="panel-heading">
                    <i class="icon-compass"></i><h2>Traffic</h2>

                    <div class="panel-actions">
                        <a href="index.html#" class="btn-setting"><i class="icon-settings"></i></a>
                        <a href="index.html#" class="btn-minimize"><i class="icon-arrow-up"></i></a>
                        <a href="index.html#" class="btn-close"><i class="icon-close"></i></a>
                    </div>

                </div>

                <div class="panel-body">

                    <h6>Visits (40% - 29.703 Users)</h6>
                    <div class="progress thin">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                            <span class="sr-only">40% Complete (success)</span>
                        </div>
                    </div>

                    <h6>Unique (20% - 24.093 Unique Users)</h6>
                    <div class="progress thin">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                            <span class="sr-only">20% Complete</span>
                        </div>
                    </div>

                    <h6>Pageviews (60% - 78.706 Views)</h6>
                    <div class="progress thin">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                            <span class="sr-only">60% Complete (warning)</span>
                        </div>
                    </div>

                    <h6>New Users (80% - 22.123 Users)</h6>
                    <div class="progress thin">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                            <span class="sr-only">80% Complete</span>
                        </div>
                    </div>

                    <h6>Bounce Rate (40.15%)</h6>
                    <div class="progress thin">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                            <span class="sr-only">40% Complete (success)</span>
                        </div>
                    </div>

                    <h6>Visits (40% - 29.703 Users)</h6>
                    <div class="progress thin">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                            <span class="sr-only">40% Complete (success)</span>
                        </div>
                    </div>

                    <h6>Unique (20% - 24.093 Unique Users)</h6>
                    <div class="progress thin">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                            <span class="sr-only">20% Complete</span>
                        </div>
                    </div>

                </div>
            </div>
        </div><!--/col-->

        <div class="col-lg-3 col-sm-6">

            <div class="panel panel-default">

                <div class="panel-body weather widget">

                    <div class="today text-center">

                        <i class="climacon sun"></i>

                        <div><strong>31/22°C London</strong></div>

                    </div>

                    <ul class="forecast">
                        <li>
                            <strong>MON</strong>
                            <i class="climacon lightning sun"></i>
                            <div class="small">28/17°C</div>
                        </li>
                        <li>
                            <strong>TUE</strong>
                            <i class="climacon fog sun"></i>
                            <div class="small">24/11°C</div>
                        </li>
                        <li>
                            <strong>WED</strong>
                            <i class="climacon hail sun"></i>
                            <div class="small">25/14°C</div>
                        </li>
                    </ul>

                </div>
            </div>

        </div><!--/col-->

    </div><!--/row-->

    <div class="row">

        <div class="col-lg-7 col-md-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2><i class="icon-check"></i>Tasks in Progress</h2>
                    <div class="panel-actions">
                        <a href="index.html#" class="btn-setting"><i class="icon-settings"></i></a>
                        <a href="index.html#" class="btn-minimize"><i class="icon-arrow-up"></i></a>
                        <a href="index.html#" class="btn-close"><i class="icon-close"></i></a>
                    </div>
                    <ul class="nav nav-tabs" id="recent">
                        <li class="active"><a href="index.html#tasks">Tasks</a></li>
                        <li><a href="index.html#tickets">Tickets</a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tasks">
                            <table class="table bootstrap-datatable datatable small-font">
                                <thead>
                                <tr>
                                    <th>Task</th>
                                    <th>Assigned to</th>
                                    <th>Progress</th>
                                    <th class="center">Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>SEO Optimisation</td>
                                    <td>Charly Brown</td>
                                    <td>
                                        <div class="progress thin">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%">
                                                <span class="sr-only">73% Complete (success)</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center text-info">
                                        Active
                                    </td>
                                </tr>
                                <tr>
                                    <td>App Development</td>
                                    <td>John Smith</td>
                                    <td>
                                        <div class="progress thin">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                                <span class="sr-only">95% Complete (success)</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center text-success">
                                        Active
                                    </td>
                                </tr>
                                <tr>
                                    <td>Hire Developers</td>
                                    <td>Megan Holms</td>
                                    <td>
                                        <div class="progress thin">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100" style="width: 27%">
                                                <span class="sr-only">27% Complete (success)</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center text-warning">
                                        Pending
                                    </td>
                                </tr>
                                <tr>
                                    <td>Growth Hacking</td>
                                    <td>Alan Wane</td>
                                    <td>
                                        <div class="progress thin">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="11" aria-valuemin="0" aria-valuemax="100" style="width: 11%">
                                                <span class="sr-only">11% Complete (success)</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center text-primary">
                                        Active
                                    </td>
                                </tr>
                                <tr>
                                    <td>A/B Tests</td>
                                    <td>Irina Cole</td>
                                    <td>
                                        <div class="progress thin">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%">
                                                <span class="sr-only">73% Complete (success)</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center text-danger">
                                        Canceled
                                    </td>
                                </tr>
                                <tr>
                                    <td>Hacking</td>
                                    <td>Alan Wane</td>
                                    <td>
                                        <div class="progress thin">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="11" aria-valuemin="0" aria-valuemax="100" style="width: 11%">
                                                <span class="sr-only">11% Complete (success)</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center text-primary">
                                        Active
                                    </td>
                                </tr>
                                <tr>
                                    <td>New website development</td>
                                    <td>Megan Holms</td>
                                    <td>
                                        <div class="progress thin">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100" style="width: 27%">
                                                <span class="sr-only">27% Complete (success)</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center text-warning">
                                        Pending
                                    </td>
                                </tr>
                                <tr>
                                    <td>Hacking</td>
                                    <td>Alan Wane</td>
                                    <td>
                                        <div class="progress thin">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="11" aria-valuemin="0" aria-valuemax="100" style="width: 11%">
                                                <span class="sr-only">11% Complete (success)</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center text-primary">
                                        Active
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="tickets">
                            <table class="table bootstrap-datatable datatable small-font">
                                <thead>
                                <tr>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Description</th>
                                    <th>User</th>
                                    <th>Number</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><span class="label label-success">Complete</span></td>
                                    <td>Jul 25, 2012 11:09</td>
                                    <td>Server problem</td>
                                    <td>Ashley Tan</td>
                                    <td><b>[#199278]</b></td>
                                </tr>
                                <tr>
                                    <td><span class="label label-info">In progress</span></td>
                                    <td>Jul 25, 2012 11:09</td>
                                    <td>Paypal Issue</td>
                                    <td>Chris Dan</td>
                                    <td><b>[#199276]</b></td>
                                </tr>
                                <tr>
                                    <td><span class="label label-danger">Rejected</span></td>
                                    <td>Jul 25, 2012 11:09</td>
                                    <td>IE7 Problem</td>
                                    <td>John Grand</td>
                                    <td><b>[#199275]</b></td>
                                </tr>
                                <tr>
                                    <td><span class="label label-warning">Suspended</span></td>
                                    <td>Jul 25, 2012 11:09</td>
                                    <td>Mobile App Problem</td>
                                    <td>Patricia Doyle</td>
                                    <td><b>[#199273]</b></td>
                                </tr>
                                <tr>
                                    <td><span class="label label-info">In progress</span></td>
                                    <td>Jul 25, 2012 11:09</td>
                                    <td>Mobile App Problem</td>
                                    <td>Melanie Brown</td>
                                    <td><b>[#199272]</b></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div><!--/col-->

        <div class="col-lg-5 col-md-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2><i class="icon-list"></i>To Do List</h2>
                    <div class="panel-actions">
                        <a href="index.html#" class="btn-setting"><i class="icon-settings"></i></a>
                        <a href="index.html#" class="btn-minimize"><i class="icon-arrow-up"></i></a>
                        <a href="index.html#" class="btn-close"><i class="icon-close"></i></a>
                    </div>
                </div>
                <div class="panel-body no-padding">
                    <div class="todo-list">
                        <ul id="todo-1" class="todo-list-tasks">
                            <li>
                                <label class="custom-checkbox-item pull-left">
                                    <input class="custom-checkbox" type="checkbox"/>
                                    <span class="custom-checkbox-mark"></span>
                                </label>
                                <span class="desc">Solve server problem</span>
                            </li>
                            <li>
                                <label class="custom-checkbox-item pull-left">
                                    <input class="custom-checkbox" type="checkbox"/>
                                    <span class="custom-checkbox-mark"></span>
                                </label>
                                <span class="desc">New website development</span>
                            </li>
                            <li>
                                <label class="custom-checkbox-item pull-left">
                                    <input class="custom-checkbox" type="checkbox"/>
                                    <span class="custom-checkbox-mark"></span>
                                </label>
                                <span class="desc">Improve SEO Opitimisation</span>
                            </li>
                            <li>
                                <label class="custom-checkbox-item pull-left">
                                    <input class="custom-checkbox" type="checkbox"/>
                                    <span class="custom-checkbox-mark"></span>
                                </label>
                                <span class="desc">Find JavaScript Developers</span>
                            </li>
                            <li>
                                <label class="custom-checkbox-item pull-left">
                                    <input class="custom-checkbox" type="checkbox"/>
                                    <span class="custom-checkbox-mark"></span>
                                </label>
                                <span class="desc">Growth Hacking</span>
                            </li>
                            <li>
                                <label class="custom-checkbox-item pull-left">
                                    <input class="custom-checkbox" type="checkbox"/>
                                    <span class="custom-checkbox-mark"></span>
                                </label>
                                <span class="desc">Pay taxes</span>
                            </li>
                        </ul>
                        <ul class="completed"></ul>
                    </div>
                    <div class="panel-footer">
                        <div class="form-group">
                            <input type="text" class="form-control" id="task-description" placeholder="Add new task">
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-link"><i class="icon-pointer"></i></button>
                            <button type="button" class="btn btn-link"><i class="icon-users"></i></button>
                            <button type="button" class="btn btn-link"><i class="icon-calendar"></i></button>
                        </div>

                        <div class="pull-right">
                            <button id="add-task" type="button" class="btn btn-success">submit</button>
                        </div>
                    </div>
                </div>
            </div>

        </div><!--/col-->

    </div><!--/row-->

    <div class="row">

        <div class="col-lg-12 activity">

            <ul>

                <li>
                    <div class="author">
                        <img src="assets/img/avatar.jpg" alt="avatar">
                    </div>
                    <div class="header">
                        <span class="label label-success">TASK</span> <strong>Mike</strong> added this task: <a href="index.html#">Fixes for IE8 :)</a>
                        <span class="location"> <i class="icon-clock"></i> Today, 10:00AM</span>
                        <span class="time"> <i class="icon-pointer"></i> London</span>
                    </div>
                </li>

                <li>
                    <div class="author">
                        <img src="assets/img/avatar.jpg" alt="avatar">
                    </div>
                    <div class="header">
                        <span class="label label-info">COMMENT</span> <strong>Mike</strong> posted comment on: <a href="index.html#">New mobile application for iOS Devices</a>
                        <span class="location"> <i class="icon-clock"></i> Today, 10:00AM</span>
                        <span class="time"> <i class="icon-pointer"></i> London</span>
                    </div>
                    <div class="description">
                        <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</blockquote>
                    </div>
                </li>

                <li>
                    <div class="author">
                        <img src="assets/img/avatar.jpg" alt="avatar">
                    </div>
                    <div class="header">
                        <span class="label label-warning">IMAGE</span> <strong>Mike</strong> Uploaded following pictures
                        <span class="location"> <i class="icon-clock"></i> Today, 10:00AM</span>
                        <span class="time"> <i class="icon-pointer"></i> London</span>
                    </div>
                    <div class="description">
                        <div class="row">
                            <div class="col-sm-3 col-xs-6" style="margin-bottom: 30px">
                                <img src="assets/img/gallery/photo2.jpg" class="img-responsive img-thumbnail">
                            </div>
                            <div class="col-sm-3 col-xs-6" style="margin-bottom: 30px">
                                <img src="assets/img/gallery/photo3.jpg" class="img-responsive img-thumbnail">
                            </div>
                            <div class="col-sm-3 col-xs-6" style="margin-bottom: 30px">
                                <img src="assets/img/gallery/photo4.jpg" class="img-responsive img-thumbnail">
                            </div>
                            <div class="col-sm-3 col-xs-6" style="margin-bottom: 30px">
                                <img src="assets/img/gallery/photo5.jpg" class="img-responsive img-thumbnail">
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="author">
                        <img src="assets/img/avatar.jpg" alt="avatar">
                    </div>
                    <div class="header">
                        <span class="label label-info">CHECK IN</span> <strong>Mike</strong> Was in this place
                        <span class="location"> <i class="icon-clock"></i> Today, 10:00AM</span>
                        <span class="time"> <i class="icon-pointer"></i> London</span>
                    </div>
                    <div class="description">
                        <div class="google-maps">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50690.26194980397!2d-122.12143953181338!3d37.43376494127794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fa35b186a39fb%3A0x5984eee2a66a9cc2!2sMiddlefield+Rd%2C+Palo+Alto%2C+CA%2C+Stany+Zjednoczone!5e0!3m2!1spl!2spl!4v1407250117753" width="1200" height="600" frameborder="0" style="border:0"></iframe>
                        </div>
                    </div>
                </li>


            </ul>

        </div><!--/col-->

    </div><!--/row-->


</div>
<!-- end: Content -->


<footer>

    <div class="row">

        <div class="col-sm-5">
            &copy; 2015 creativeLabs. <a href="http://bootstrapmaster.com">Admin Templates</a> by BootstrapMaster
        </div><!--/.col-->

        <div class="col-sm-7 text-right">
            Powered by: <a href="http://bootstrapmaster.com/demo/real/" alt="Bootstrap Admin Templates">Real Admin</a> | Based on Bootstrap 3.3.2 | Built with brix.io <a href="http://brix.io" alt="Brix.io - Bootstrap Builder">Brix.io</a>
        </div><!--/.col-->

    </div><!--/.row-->

</footer>

<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <p>Here settings can be configured...</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script src="{{ asset('assets/panel/js/vendor.js') }}"></script>

</body>
</html>								
