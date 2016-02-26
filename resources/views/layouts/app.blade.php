<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="http://hrms.knowarth.com/sites/default/files/content.png" type="image/png" /> 
    <meta name="Generator" content="Drupal 7 (http://drupal.org)" />

    <title>Dashboard | HRMS</title>

    <!-- CSS Start -->
    <link type="text/css" rel="stylesheet" href="http://hrms.knowarth.com/sites/default/files/css/css_M6RuGsKdtqbI4rJANQpD_1ax0CkjD1tCDsLrvO9Xpy0.css" media="all" />
    <!-- {{ HTML::style('assets/css/css_M6RuGsKdtqbI4rJANQpD_1ax0CkjD1tCDsLrvO9Xpy0.css') }} -->
    {{ HTML::style('assets/css/bootstrap.min.css') }}
    <link type="text/css" rel="stylesheet" href="http://hrms.knowarth.com/sites/default/files/css/css_mDw2W-X9yqrEin7GcaBjZLO4-UE6OKdhvjjMwqcMVTw.css" media="all" />
    <!-- {{ HTML::style('assets/css/css_mDw2W-X9yqrEin7GcaBjZLO4-UE6OKdhvjjMwqcMVTw.css') }}  -->
    <!-- CSS End -->

    @yield('style')
</head>
<body class="html not-front logged-in no-sidebars page-employee-dashboard" >
    <header id="navbar" role="banner" class="navbar container navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="logo navbar-btn pull-left" href="/" title="Home">
                    <img src="http://hrms.knowarth.com/sites/default/files/logo.png" alt="Home" />
                </a>
      
                <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

          <div class="navbar-collapse collapse">
            <nav role="navigation">
                <div class="region region-navigation">
                    <section id="block-views-user-profile-info-block" class="block block-views clearfix">
                        <div class="view view-user-profile-info view-id-user_profile_info view-display-id-block view-dom-id-ba1f5fea99bad226b5967d7cb9aa402b">
                            <div class="view-content">
                                <div class="views-row views-row-1 views-row-odd views-row-first views-row-last">

                                    <div class="views-field views-field-field-profile-image">        
                                        <div class="field-content">
                                            <img typeof="foaf:Image" src="" width="100" height="100" alt="" />
                                        </div>  
                                    </div>  

                                    <div class="views-field views-field-nothing-1">        
                                        <span class="field-content">Name</span>  
                                    </div>  

                                    <div class="views-field views-field-field-designation">        
                                        <div class="field-content">
                                            Post
                                        </div>  
                                    </div>  

                                    <div class="views-field views-field-nothing">        
                                        <span class="field-content">
                                            <div class='user-info-links dropdown-menu'>
                                                <a href='/profile-personal_details/443'>My Account</a>
                                                <a href='/user/logout'>Logout</a>
                                            </div>
                                        </span>  
                                    </div>  
                                </div>
                            </div> 
                        </div>
                    </section> <!-- /.block -->

                    <section id="block-system-main-menu" class="block block-system block-menu clearfix">
                        <ul class="menu nav">
                            <li class="first last expanded dhtml-menu collapsed start-collapsed dropdown" id="dhtml_menu-633">
                                <a href="/" title="" data-target="#" class="dropdown-toggle" data-toggle="dropdown">
                                    Quick Links <span class="caret"></span>
                                </a>
                                    <ul class="dropdown-menu">
                                        <li class="first last leaf dhtml-menu" id="dhtml_menu-619">
                                            <a href="/birthday-list">Birthday List</a>
                                        </li>
                                    </ul>
                            </li>
                        </ul>
                    </section> <!-- /.block -->
                </div>
            </nav>
        </div>
      </div>
</header>

<div class="main-container container">
  <header role="banner" id="page-header">
      <div class="region region-header">
        <section id="block-menu-menu-employee-header-menu-links" class="block block-menu clearfix">
            <ul class="menu nav">
                <li class="first leaf active-trail active">
                    <a href="#" class="menu_icon menu-721 active-trail active">Dashboard
                    </a>
                </li>

                <li class="leaf">
                    <a href="#" class="menu_icon menu-1249">PIM</a>
                </li>

                <li class="leaf">
                    <a href="#" class="menu_icon menu-1121">Resource Requisition</a>
                </li>

                <li class="leaf">
                    <a href="#" class="menu_icon menu-1094">Organization</a>
                </li>

                <li class="last leaf">
                    <a href="#" class="menu_icon menu-1376">Help Desk</a>
                </li>
            </ul>
        </section> <!-- /.block -->
      </div>
  </header> <!-- /#page-header -->

  <div class="row">
    <div class="col-sm-12">
        <div class="pull-right">
            {{ HTML::link('calender', 'Calender', array('class' => 'btn btn-primary'))}}
            {{ HTML::link('graph', 'Graph', array('class' => 'btn btn-primary'))}}
        </div>
    </div>
  </div>

  <div class="row" style="margin-top:10px">
    <section class="col-sm-12">
        @yield('content')
        
    </section>
  </div>

  <footer class="footer container">
    <div class="region region-footer">
        <section id="block-block-2" class="block block-block clearfix">
            <div id="bottom_part">
                <div class="left">
                    <h2 class="title">Copyright HRMS. All rights reserved.</h2>
                </div>

                <div class="center">
                     <h2 class="title">HRMS 0.1</h2>
                </div>

                <div class="right">
                       <h2 class="title">Developed By <img src="http://hrms.knowarth.com/sites/default/files/content.png"></h2>
                </div>
            </div>
        </section> <!-- /.block -->  
    </div>
  </footer>
  {{ HTML::script('assets/js/jquery.min.js') }}
  @yield('script')
</body>
</html>
