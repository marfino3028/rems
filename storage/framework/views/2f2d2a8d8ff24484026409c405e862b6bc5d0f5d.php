<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Adminty - Premium Admin Template by Colorlib </title>
    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" href="<?php echo e(asset('assets/be/images/logo/favicon.ico')); ?>" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/be/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/be/css/themify-icons.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/be/css/icofont.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/be/css/feather.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/be/css/dataTables.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/be/css/buttons.dataTables.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/be/css/responsive.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/be/css/style.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/be/css/jquery.mCustomScrollbar.css')); ?>">
  </head>
  <body>

    <!-- LOADER -->
    <div class="theme-loader">
      <div class="ball-scale">
        <div class='contain'>
          <div class="ring">
            <div class="frame"></div>
          </div>
          <div class="ring">
            <div class="frame"></div>
          </div>
          <div class="ring">
            <div class="frame"></div>
          </div>
          <div class="ring">
            <div class="frame"></div>
          </div>
          <div class="ring">
            <div class="frame"></div>
          </div>
          <div class="ring">
            <div class="frame"></div>
          </div>
          <div class="ring">
            <div class="frame"></div>
          </div>
          <div class="ring">
            <div class="frame"></div>
          </div>
          <div class="ring">
            <div class="frame"></div>
          </div>
          <div class="ring">
            <div class="frame"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- END LOADER -->

    <div id="pcoded" class="pcoded">
      <div class="pcoded-overlay-box"></div>
      <div class="pcoded-container navbar-wrapper">
        
        <!-- NAVBAR -->
        <nav class="navbar header-navbar pcoded-header">
          <div class="navbar-wrapper">
            <div class="navbar-logo">
              <a class="mobile-menu" id="mobile-collapse" href="#!">
              <i class="feather icon-menu"></i>
              </a>
              <a href="<?php echo e(route('admin.home')); ?>">
                <script type="text/javascript" style="display:none">
                  //<![CDATA[
                  window.__mirage2 = {petok:"eec52f63a7db9b8f007ea80995abf126dd18d382-1590046045-86400"};
                  //]]>
                </script>
                <script type="text/javascript" src="<?php echo e(asset('assets/be/js/mirage2.min.js')); ?>"></script>
                <img class="img-fluid" data-cfsrc="<?php echo e(asset('assets/be/images/logo/logo.png')); ?>" alt="Theme-Logo" style="display:none;visibility:hidden;" />
                <noscript><img class="img-fluid" src="<?php echo e(asset('assets/be/images/logo/logo.png')); ?>" alt="Theme-Logo" /></noscript>
              </a>
              <a class="mobile-options">
              <i class="feather icon-more-horizontal"></i>
              </a>
            </div>
            <div class="navbar-container container-fluid">
              <ul class="nav-left">
                <li class="header-search">
                  <div class="main-search morphsearch-search">
                    <div class="input-group">
                      <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                      <input type="text" class="form-control">
                      <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                    </div>
                  </div>
                </li>
                <li>
                  <a href="#!" onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:toggleFullScreen()" data-cf-modified-dc4d7d6fcec9d15bbc201b50-="">
                  <i class="feather icon-maximize full-screen"></i>
                  </a>
                </li>
              </ul>
              <ul class="nav-right">
                <li class="header-notification">
                  <div class="dropdown-primary dropdown">
                    <div class="dropdown-toggle" data-toggle="dropdown">
                      <i class="feather icon-bell"></i>
                      <span class="badge bg-c-pink">5</span>
                    </div>
                    <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                      <li>
                        <h6>Notifications</h6>
                        <label class="label label-danger">New</label>
                      </li>
                      <li>
                        <div class="media">
                          <img class="d-flex align-self-center img-radius" data-cfsrc="../files/assets/images/avatar-4.jpg" alt="Generic placeholder image" style="display:none;visibility:hidden;">
                          <noscript><img class="d-flex align-self-center img-radius" src="../files/assets/images/avatar-4.jpg" alt="Generic placeholder image"></noscript>
                          <div class="media-body">
                            <h5 class="notification-user">John Doe</h5>
                            <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                            <span class="notification-time">30 minutes ago</span>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="media">
                          <img class="d-flex align-self-center img-radius" data-cfsrc="../files/assets/images/avatar-3.jpg" alt="Generic placeholder image" style="display:none;visibility:hidden;">
                          <noscript><img class="d-flex align-self-center img-radius" src="../files/assets/images/avatar-3.jpg" alt="Generic placeholder image"></noscript>
                          <div class="media-body">
                            <h5 class="notification-user">Joseph William</h5>
                            <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                            <span class="notification-time">30 minutes ago</span>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="media">
                          <img class="d-flex align-self-center img-radius" data-cfsrc="../files/assets/images/avatar-4.jpg" alt="Generic placeholder image" style="display:none;visibility:hidden;">
                          <noscript><img class="d-flex align-self-center img-radius" src="../files/assets/images/avatar-4.jpg" alt="Generic placeholder image"></noscript>
                          <div class="media-body">
                            <h5 class="notification-user">Sara Soudein</h5>
                            <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                            <span class="notification-time">30 minutes ago</span>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="header-notification">
                  <div class="dropdown-primary dropdown">
                    <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                      <i class="feather icon-message-square"></i>
                      <span class="badge bg-c-green">3</span>
                    </div>
                  </div>
                </li>
                <li class="user-profile header-notification">
                  <div class="dropdown-primary dropdown">
                    <div class="dropdown-toggle" data-toggle="dropdown">
                      <img data-cfsrc="../files/assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image" style="display:none;visibility:hidden;">
                      <noscript><img src="../files/assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image"></noscript>
                      <span>John Doe</span>
                      <i class="feather icon-chevron-down"></i>
                    </div>
                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                      <li>
                        <a href="#!">
                        <i class="feather icon-settings"></i> Settings
                        </a>
                      </li>
                      <li>
                        <a href="user-profile.html">
                        <i class="feather icon-user"></i> Profile
                        </a>
                      </li>
                      <li>
                        <a href="email-inbox.html">
                        <i class="feather icon-mail"></i> My Messages
                        </a>
                      </li>
                      <li>
                        <a href="auth-lock-screen.html">
                        <i class="feather icon-lock"></i> Lock Screen
                        </a>
                      </li>
                      <li>
                        <a href="auth-normal-sign-in.html">
                        <i class="feather icon-log-out"></i> Logout
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- END NAVBAR -->

        <!-- CHAT SIDEBAR when click icon chat on NAVBAR -->
        <div id="sidebar" class="users p-chat-user showChat">
          <div class="had-container">
            <div class="card card_main p-fixed users-main">
              <div class="user-box">
                <div class="chat-inner-header">
                  <div class="back_chatBox">
                    <div class="right-icon-control">
                      <input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
                      <div class="form-icon">
                        <i class="icofont icofont-search"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="main-friend-list">
                  <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                    <a class="media-left" href="#!">
                      <img class="media-object img-radius img-radius" data-cfsrc="../files/assets/images/avatar-3.jpg" alt="Generic placeholder image " style="display:none;visibility:hidden;">
                      <noscript><img class="media-object img-radius img-radius" src="../files/assets/images/avatar-3.jpg" alt="Generic placeholder image "></noscript>
                      <div class="live-status bg-success"></div>
                    </a>
                    <div class="media-body">
                      <div class="f-13 chat-header">Josephin Doe</div>
                    </div>
                  </div>
                  <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">
                    <a class="media-left" href="#!">
                      <img class="media-object img-radius" data-cfsrc="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image" style="display:none;visibility:hidden;">
                      <noscript><img class="media-object img-radius" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image"></noscript>
                      <div class="live-status bg-success"></div>
                    </a>
                    <div class="media-body">
                      <div class="f-13 chat-header">Lary Doe</div>
                    </div>
                  </div>
                  <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                    <a class="media-left" href="#!">
                      <img class="media-object img-radius" data-cfsrc="../files/assets/images/avatar-4.jpg" alt="Generic placeholder image" style="display:none;visibility:hidden;">
                      <noscript><img class="media-object img-radius" src="../files/assets/images/avatar-4.jpg" alt="Generic placeholder image"></noscript>
                      <div class="live-status bg-success"></div>
                    </a>
                    <div class="media-body">
                      <div class="f-13 chat-header">Alice</div>
                    </div>
                  </div>
                  <div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
                    <a class="media-left" href="#!">
                      <img class="media-object img-radius" data-cfsrc="../files/assets/images/avatar-3.jpg" alt="Generic placeholder image" style="display:none;visibility:hidden;">
                      <noscript><img class="media-object img-radius" src="../files/assets/images/avatar-3.jpg" alt="Generic placeholder image"></noscript>
                      <div class="live-status bg-success"></div>
                    </a>
                    <div class="media-body">
                      <div class="f-13 chat-header">Alia</div>
                    </div>
                  </div>
                  <div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">
                    <a class="media-left" href="#!">
                      <img class="media-object img-radius" data-cfsrc="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image" style="display:none;visibility:hidden;">
                      <noscript><img class="media-object img-radius" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image"></noscript>
                      <div class="live-status bg-success"></div>
                    </a>
                    <div class="media-body">
                      <div class="f-13 chat-header">Suzen</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="showChat_inner">
          <div class="media chat-inner-header">
            <a class="back_chatBox">
            <i class="feather icon-chevron-left"></i> Josephin Doe
            </a>
          </div>
          <div class="media chat-messages">
            <a class="media-left photo-table" href="#!">
              <img class="media-object img-radius img-radius m-t-5" data-cfsrc="../files/assets/images/avatar-3.jpg" alt="Generic placeholder image" style="display:none;visibility:hidden;">
              <noscript><img class="media-object img-radius img-radius m-t-5" src="../files/assets/images/avatar-3.jpg" alt="Generic placeholder image"></noscript>
            </a>
            <div class="media-body chat-menu-content">
              <div class="">
                <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                <p class="chat-time">8:20 a.m.</p>
              </div>
            </div>
          </div>
          <div class="media chat-messages">
            <div class="media-body chat-menu-reply">
              <div class="">
                <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                <p class="chat-time">8:20 a.m.</p>
              </div>
            </div>
            <div class="media-right photo-table">
              <a href="#!">
                <img class="media-object img-radius img-radius m-t-5" data-cfsrc="../files/assets/images/avatar-4.jpg" alt="Generic placeholder image" style="display:none;visibility:hidden;">
                <noscript><img class="media-object img-radius img-radius m-t-5" src="../files/assets/images/avatar-4.jpg" alt="Generic placeholder image"></noscript>
              </a>
            </div>
          </div>
          <div class="chat-reply-box p-b-20">
            <div class="right-icon-control">
              <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
              <div class="form-icon">
                <i class="feather icon-navigation"></i>
              </div>
            </div>
          </div>
        </div>
        <!-- END CHAT SIDEBAR -->
        
        <div class="pcoded-main-container">
          <div class="pcoded-wrapper">
            <!-- SIDEBAR -->
            <nav class="pcoded-navbar">
              <div class="pcoded-inner-navbar main-menu">
                <div class="pcoded-navigatio-lavel">Navigation</div>
                <ul class="pcoded-item pcoded-left-item">
                  <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                    </a>
                    <ul class="pcoded-submenu">
                      <li class="">
                        <a href="<?php echo e(route('admin.home')); ?>">
                        <span class="pcoded-mtext">Default</span>
                        </a>
                      </li>
                      <li class="">
                        <a href="<?php echo e(route('admin.home')); ?>">
                        <span class="pcoded-mtext">CRM</span>
                        </a>
                      </li>
                      <li class=" ">
                        <a href="<?php echo e(route('admin.home')); ?>">
                        <span class="pcoded-mtext">Analytics</span>
                        <span class="pcoded-badge label label-info ">NEW</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                    <span class="pcoded-mtext">Page layouts</span>
                    <span class="pcoded-badge label label-warning">NEW</span>
                    </a>
                    <ul class="pcoded-submenu">
                      <li class=" pcoded-hasmenu">
                        <a href="javascript:void(0)">
                        <span class="pcoded-mtext">Vertical</span>
                        </a>
                        <ul class="pcoded-submenu">
                          <li class=" ">
                            <a href="<?php echo e(route('admin.home')); ?>">
                            <span class="pcoded-mtext">Static Layout</span>
                            </a>
                          </li>
                          <li class=" ">
                            <a href="<?php echo e(route('admin.home')); ?>">
                            <span class="pcoded-mtext">Header Fixed</span>
                            </a>
                          </li>
                          <li class=" ">
                            <a href="<?php echo e(route('admin.home')); ?>">
                            <span class="pcoded-mtext">Compact</span>
                            </a>
                          </li>
                          <li class=" ">
                            <a href="<?php echo e(route('admin.home')); ?>">
                            <span class="pcoded-mtext">Sidebar Fixed</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class=" pcoded-hasmenu">
                        <a href="javascript:void(0)">
                        <span class="pcoded-mtext">Horizontal</span>
                        </a>
                        <ul class="pcoded-submenu">
                          <li class=" ">
                            <a href="<?php echo e(route('admin.home')); ?>" target="_blank">
                            <span class="pcoded-mtext">Static Layout</span>
                            </a>
                          </li>
                          <li class=" ">
                            <a href="<?php echo e(route('admin.home')); ?>" target="_blank">
                            <span class="pcoded-mtext">Fixed layout</span>
                            </a>
                          </li>
                          <li class=" ">
                            <a href="<?php echo e(route('admin.home')); ?>" target="_blank">
                            <span class="pcoded-mtext">Static With Icon</span>
                            </a>
                          </li>
                          <li class=" ">
                            <a href="<?php echo e(route('admin.home')); ?>" target="_blank">
                            <span class="pcoded-mtext">Fixed With Icon</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class=" ">
                        <a href="<?php echo e(route('admin.home')); ?>">
                        <span class="pcoded-mtext">Bottom Menu</span>
                        </a>
                      </li>
                      <li class=" ">
                        <a href="<?php echo e(route('admin.home')); ?>" target="_blank">
                        <span class="pcoded-mtext">Box Layout</span>
                        </a>
                      </li>
                      <li class=" ">
                        <a href="<?php echo e(route('admin.home')); ?>" target="_blank">
                        <span class="pcoded-mtext">RTL</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="">
                    <a href="<?php echo e(route('admin.home')); ?>">
                    <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                    <span class="pcoded-mtext">Navigation</span>
                    </a>
                  </li>
                  <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                    <span class="pcoded-mtext">Widget</span>
                    <span class="pcoded-badge label label-danger">100+</span>
                    </a>
                    <ul class="pcoded-submenu">
                      <li class="">
                        <a href="<?php echo e(route('admin.home')); ?>">
                        <span class="pcoded-mtext">Statistic</span>
                        </a>
                      </li>
                      <li class=" ">
                        <a href="<?php echo e(route('admin.home')); ?>">
                        <span class="pcoded-mtext">Data</span>
                        </a>
                      </li>
                      <li class="">
                        <a href="<?php echo e(route('admin.home')); ?>">
                        <span class="pcoded-mtext">Chart Widget</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
                <div class="pcoded-navigatio-lavel">UI Element</div>
                <ul class="pcoded-item pcoded-left-item">
                  <li class=" ">
                    <a href="<?php echo e(route('admin.home')); ?>">
                    <span class="pcoded-micon"><i class="feather icon-aperture rotate-refresh"></i><b>A</b></span>
                    <span class="pcoded-mtext">Animations</span>
                    </a>
                  </li>
                  <li class=" ">
                    <a href="<?php echo e(route('admin.home')); ?>">
                    <span class="pcoded-micon"><i class="feather icon-cpu"></i></span>
                    <span class="pcoded-mtext">Sticky Notes</span>
                    <span class="pcoded-badge label label-danger">HOT</span>
                    </a>
                  </li>
                  <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-command"></i></span>
                    <span class="pcoded-mtext">Icons</span>
                    </a>
                    <ul class="pcoded-submenu">
                      <li class=" ">
                        <a href="<?php echo e(route('admin.home')); ?>">
                        <span class="pcoded-mtext">Font Awesome</span>
                        </a>
                      </li>
                      <li class=" ">
                        <a href="<?php echo e(route('admin.home')); ?>">
                        <span class="pcoded-mtext">Themify</span>
                        </a>
                      </li>
                      <li class=" ">
                        <a href="<?php echo e(route('admin.home')); ?>">
                        <span class="pcoded-mtext">Simple Line Icon</span>
                        </a>
                      </li>
                      <li class=" ">
                        <a href="<?php echo e(route('admin.home')); ?>">
                        <span class="pcoded-mtext">Ion Icon</span>
                        </a>
                      </li>
                      <li class=" ">
                        <a href="<?php echo e(route('admin.home')); ?>">
                        <span class="pcoded-mtext">Material Design</span>
                        </a>
                      </li>
                      <li class=" ">
                        <a href="<?php echo e(route('admin.home')); ?>">
                        <span class="pcoded-mtext">Ico Fonts</span>
                        </a>
                      </li>
                      <li class=" ">
                        <a href="<?php echo e(route('admin.home')); ?>">
                        <span class="pcoded-mtext">Weather Icon</span>
                        </a>
                      </li>
                      <li class=" ">
                        <a href="<?php echo e(route('admin.home')); ?>">
                        <span class="pcoded-mtext">Typicons</span>
                        </a>
                      </li>
                      <li class=" ">
                        <a href="<?php echo e(route('admin.home')); ?>">
                        <span class="pcoded-mtext">Flags</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>
            <!-- END SIDEBAR -->

            <!-- CONTENT -->
            <div class="pcoded-content">
              <div class="pcoded-inner-content">
                <div class="main-body">
                  <div class="page-wrapper">

                    <!-- PAGE HEAD -->
                    <div class="page-header">
                      <div class="row align-items-end">
                        <div class="col-lg-8">
                          <div class="page-header-title">
                            <div class="d-inline">
                              <h4>Advanced DataTable</h4>
                              <span>Advanced initialisation of DataTables</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                              <li class="breadcrumb-item">
                                <a href="<?php echo e(route('admin.home')); ?>"> <i class="feather icon-home"></i> </a>
                              </li>
                              <li class="breadcrumb-item"><a href="<?php echo e(route('admin.home')); ?>">Basic Initialization</a></li>
                              <li class="breadcrumb-item"><a href="<?php echo e(route('admin.home')); ?>">Advance Initialization</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- END PAGE HEAD -->

                    <!-- PAGE BODY -->
                    <div class="page-body">
                      <?php echo $__env->yieldContent('content'); ?>
                    </div>
                    <!-- END PAGE BODY -->

                  </div>
                </div>
                <div id="styleSelector"></div>
              </div>
            </div>
            <!-- END CONTENT -->

          </div>
        </div>
      </div>
    </div>
    <!--[if lt IE 10]>
    <div class="ie-warning">
      <h1>Warning!!</h1>
      <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
      <div class="iew-container">
        <ul class="iew-download">
          <li>
            <a href="http://www.google.com/chrome/">
              <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
              <div>Chrome</div>
            </a>
          </li>
          <li>
            <a href="https://www.mozilla.org/en-US/firefox/new/">
              <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
              <div>Firefox</div>
            </a>
          </li>
          <li>
            <a href="http://www.opera.com">
              <img src="../files/assets/images/browser/opera.png" alt="Opera">
              <div>Opera</div>
            </a>
          </li>
          <li>
            <a href="https://www.apple.com/safari/">
              <img src="../files/assets/images/browser/safari.png" alt="Safari">
              <div>Safari</div>
            </a>
          </li>
          <li>
            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
              <img src="../files/assets/images/browser/ie.png" alt="">
              <div>IE (9 & above)</div>
            </a>
          </li>
        </ul>
      </div>
      <p>Sorry for the inconvenience!</p>
    </div>
    <![endif]-->
    <script type="dc4d7d6fcec9d15bbc201b50-text/javascript" src="<?php echo e(asset('assets/be/js/jquery.min.js')); ?>"></script>
    <script type="dc4d7d6fcec9d15bbc201b50-text/javascript" src="<?php echo e(asset('assets/be/js/jquery-ui.min.js')); ?>"></script>
    <script type="dc4d7d6fcec9d15bbc201b50-text/javascript" src="<?php echo e(asset('assets/be/js/popper.min.js')); ?>"></script>
    <script type="dc4d7d6fcec9d15bbc201b50-text/javascript" src="<?php echo e(asset('assets/be/js/bootstrap.min.js')); ?>"></script>
    <script type="dc4d7d6fcec9d15bbc201b50-text/javascript" src="<?php echo e(asset('assets/be/js/jquery.slimscroll.js')); ?>"></script>
    <script type="dc4d7d6fcec9d15bbc201b50-text/javascript" src="<?php echo e(asset('assets/be/js/modernizr.js')); ?>"></script>
    <script type="dc4d7d6fcec9d15bbc201b50-text/javascript" src="<?php echo e(asset('assets/be/js/css-scrollbars.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/be/js/jquery.dataTables.min.js')); ?>" type="dc4d7d6fcec9d15bbc201b50-text/javascript"></script>
    <script src="<?php echo e(asset('assets/be/js/dataTables.buttons.min.js')); ?>" type="dc4d7d6fcec9d15bbc201b50-text/javascript"></script>
    <script src="<?php echo e(asset('assets/be/js/jszip.min.js')); ?>" type="dc4d7d6fcec9d15bbc201b50-text/javascript"></script>
    <script src="<?php echo e(asset('assets/be/js/pdfmake.min.js')); ?>" type="dc4d7d6fcec9d15bbc201b50-text/javascript"></script>
    <script src="<?php echo e(asset('assets/be/js/vfs_fonts.js')); ?>" type="dc4d7d6fcec9d15bbc201b50-text/javascript"></script>
    <script src="<?php echo e(asset('assets/be/js/buttons.print.min.js')); ?>" type="dc4d7d6fcec9d15bbc201b50-text/javascript"></script>
    <script src="<?php echo e(asset('assets/be/js/buttons.html5.min.js')); ?>" type="dc4d7d6fcec9d15bbc201b50-text/javascript"></script>
    <script src="<?php echo e(asset('assets/be/js/dataTables.bootstrap4.min.js')); ?>" type="dc4d7d6fcec9d15bbc201b50-text/javascript"></script>
    <script src="<?php echo e(asset('assets/be/js/dataTables.responsive.min.js')); ?>" type="dc4d7d6fcec9d15bbc201b50-text/javascript"></script>
    <script src="<?php echo e(asset('assets/be/js/responsive.bootstrap4.min.js')); ?>" type="dc4d7d6fcec9d15bbc201b50-text/javascript"></script>
    <script type="dc4d7d6fcec9d15bbc201b50-text/javascript" src="<?php echo e(asset('assets/be/js/i18next.min.js')); ?>"></script>
    <script type="dc4d7d6fcec9d15bbc201b50-text/javascript" src="<?php echo e(asset('assets/be/js/i18nextXHRBackend.min.js')); ?>"></script>
    <script type="dc4d7d6fcec9d15bbc201b50-text/javascript" src="<?php echo e(asset('assets/be/js/i18nextBrowserLanguageDetector.min.js')); ?>"></script>
    <script type="dc4d7d6fcec9d15bbc201b50-text/javascript" src="<?php echo e(asset('assets/be/js/jquery-i18next.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/be/js/data-table-custom.js')); ?>" type="dc4d7d6fcec9d15bbc201b50-text/javascript"></script>
    <script src="<?php echo e(asset('assets/be/js/pcoded.min.js')); ?>" type="dc4d7d6fcec9d15bbc201b50-text/javascript"></script>
    <script src="<?php echo e(asset('assets/be/js/vartical-layout.min.js')); ?>" type="dc4d7d6fcec9d15bbc201b50-text/javascript"></script>
    <script src="<?php echo e(asset('assets/be/js/jquery.mCustomScrollbar.concat.min.js')); ?>" type="dc4d7d6fcec9d15bbc201b50-text/javascript"></script>
    <script type="dc4d7d6fcec9d15bbc201b50-text/javascript" src="<?php echo e(asset('assets/be/js/script.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/be/js/rocket-loader.min.js')); ?>" data-cf-settings="dc4d7d6fcec9d15bbc201b50-|49" defer=""></script>
  </body>
</html><?php /**PATH C:\xampp\htdocs\rems\resources\views/vendor/multiauth/layouts/master.blade.php ENDPATH**/ ?>