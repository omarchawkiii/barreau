<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="{{ route('snmp.get_dashbord') }}"><img src="{{asset('/assets/images/logo.png')}}" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini" href="{{ route('snmp.get_dashbord') }}"><img src="{{asset('/assets/images/logo-mini.png')}}" alt="logo" /></a>
    </div>
    <ul class="nav">
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('snmp.get_dashbord') }}">
                <span class="menu-icon icon-box-danger">
                <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title"> Dashboard</span>
            </a>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">NOC</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('location.index') }}">
            <span class="menu-icon icon-box-danger">
                <i class="mdi mdi-map-marker"></i>
            </span>
            <span class="menu-title">Locations</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('playback.index') }}">
            <span class="menu-icon icon-box-warning">
                <i class="mdi mdi-calendar-today "></i>
            </span>
            <span class="menu-title">Playback</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('snmp.get_snmp_with_filter') }}">
            <span class="menu-icon icon-box-danger">
                <i class="mdi mdi-alert-octagon "></i>
            </span>
            <span class="menu-title">SNMP Errors</span>
            </a>
        </li>


        <li class="nav-item menu-items ">
            <a class="nav-link" data-bs-toggle="collapse" href="#showm_reports" aria-expanded="false" aria-controls="icons">
            <span class="menu-icon icon-box-performance">
                <i class="mdi mdi-bookmark-check "></i>
            </span>
            <span class="menu-title">Reports</span>
            <i class="menu-arrow"></i>
            </a>
            <div class="collapse " id="showm_reports">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link active_playlistbuilder " href="{{ route('logs.get_performance_log') }}"> <i class="mdi mdi-checkbox-blank-circle me-1"></i> Performance Logs</a></li>
                <li class="nav-item"> <a class="nav-link active_playlistbuilder " href="{{ route('asset_infos.display_performance_log') }}"> <i class="mdi mdi-checkbox-blank-circle me-1"></i>  Asset Reports</a></li>
                <li class="nav-item"> <a class="nav-link active_playlistbuilder " href="{{ route('lamp_reports') }}"> <i class="mdi mdi-checkbox-blank-circle  me-1"></i> Lamp Reports</a></li>
                <li class="nav-item"> <a class="nav-link active_playlistbuilder " href="{{ route('storage_report.get_storage_report_with_filter') }}"> <i class="mdi mdi-checkbox-blank-circle  me-1"></i> Storage Reports</a></li>
            </ul>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">CMS</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('schedules.get_schedules_with_filter') }}">
            <span class="menu-icon icon-box-blue">
                <i class="mdi mdi-calendar-today "></i>
            </span>
            <span class="menu-title">Schedule Management</span>
            </a>
        </li>



        <li class="nav-item menu-items ">
            <a class="nav-link" data-bs-toggle="collapse" href="#showm_anagement" aria-expanded="false" aria-controls="icons">
            <span class="menu-icon icon-box-playlistbuilder">
                <i class="mdi mdi-contacts"></i>
            </span>
            <span class="menu-title">Content Management</span>
            <i class="menu-arrow"></i>
            </a>
            <div class="collapse " id="showm_anagement">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link active_playlistbuilder " href="{{ route('spls.get_spl_with_filter') }}"> <i class="mdi mdi-checkbox-blank-circle me-1"></i> Playlists</a></li>
                <li class="nav-item"> <a class="nav-link active_playlistbuilder " href="{{ route('cpls.get_cpl_with_filter') }}"> <i class="mdi mdi-checkbox-blank-circle me-1"></i> CPLS</a></li>
                <li class="nav-item"> <a class="nav-link active_playlistbuilder " href="{{ route('kdms.get_Kdm_with_filter') }}"> <i class="mdi mdi-checkbox-blank-circle  me-1"></i> KDMs</a></li>
            </ul>
            </div>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('spls.spl_builder') }}">
            <span class="menu-icon icon-box-danger">
                <i class="mdi mdi-calendar-today "></i>
            </span>
            <span class="menu-title">Playlist Builder</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('spls.upload_spl') }}">
            <span class="menu-icon icon-box-success">
                <i class="mdi mdi-upload "></i>
            </span>
            <span class="menu-title">File Uploader </span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('ingester.index') }}">
            <span class="menu-icon icon-box-console">
                <i class="mdi mdi-console "></i>
            </span>
            <span class="menu-title">Ingester</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('ingester.transfere_content') }}">
            <span class="menu-icon icon-box-console">
                <i class="mdi mdi-file-import"></i>
            </span>
            <span class="menu-title">Transfer Content </span>
            </a>
        </li>
        <!--<li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('planner.index') }}">
            <span class="menu-icon icon-box-success">
                <i class="mdi mdi-chemical-weapon "></i>
            </span>
            <span class="menu-title">Planner </span>
            </a>
        </li>-->


        @if (Auth::user()->role == 1 )
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('users.index') }}">
            <span class="menu-icon icon-user-performance">
                <i class="mdi mdi-account-multiple-outline"></i>
            </span>
            <span class="menu-title">Users Management </span>
            </a>
        </li>
        @endif

        <li class="nav-item menu-items ">
            <a class="nav-link" data-bs-toggle="collapse" href="#showm_configuration" aria-expanded="false" aria-controls="icons">
            <span class="menu-icon icon-box-blue">
                <i class="mdi mdi-contacts"></i>
            </span>
            <span class="menu-title">Configuration</span>
            <i class="menu-arrow"></i>
            </a>
            <div class="collapse " id="showm_configuration">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link " href="{{ route('ingestersources.index') }}"> <i class="mdi mdi-checkbox-blank-circle me-1"></i> Ingest Sources</a></li>
                <li class="nav-item"> <a class="nav-link " href="{{ route('config.edit') }}"> <i class="mdi mdi-checkbox-blank-circle me-1"></i> Noc Settings</a></li>
            </ul>
            </div>
        </li>

        <!--<li class="nav-item menu-items ">
            <a class="nav-link" data-bs-toggle="collapse" href="#inventory_settings" aria-expanded="false" aria-controls="icons">
            <span class="menu-icon icon-box-performance">
                <i class="mdi mdi-settings"></i>
            </span>
            <span class="menu-title">Inventory Settings</span>
            <i class="menu-arrow"></i>
            </a>
            <div class="collapse " id="inventory_settings">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link active_playlistbuilder " href="{{ route('inventory_category.index') }}"> <i class="mdi mdi-checkbox-blank-circle me-1"></i> Categories </a></li>
                <li class="nav-item"> <a class="nav-link active_playlistbuilder " href="{{ route('part.index') }}"> <i class="mdi mdi-checkbox-blank-circle me-1"></i> Parts </a></li>
                <li class="nav-item"> <a class="nav-link active_playlistbuilder " href="{{ route('supplier.index') }}"> <i class="mdi mdi-checkbox-blank-circle me-1"></i> Suppliers </a></li>
                <li class="nav-item"> <a class="nav-link active_playlistbuilder " href="{{ route('storage_location.index') }}"> <i class="mdi mdi-checkbox-blank-circle me-1"></i> Storage Location </a></li>
                <li class="nav-item"> <a class="nav-link active_playlistbuilder " href="{{ route('cinema_location.index') }}"> <i class="mdi mdi-checkbox-blank-circle me-1"></i> Cinema Location </a></li>

            </ul>
            </div>
        </li>

        <li class="nav-item menu-items ">
            <a class="nav-link" data-bs-toggle="collapse" href="#consumables_tracker" aria-expanded="false" aria-controls="icons">
            <span class="menu-icon icon-box-playlistbuilder">
                <i class="mdi mdi-call-split"></i>
            </span>
            <span class="menu-title">Consumables Tracker</span>
            <i class="menu-arrow"></i>
            </a>
            <div class="collapse " id="consumables_tracker">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link active_playlistbuilder " href="{{ route('inventory_in.index') }}"> <i class="mdi mdi-checkbox-blank-circle me-1"></i> Inventory In  </a></li>
                <li class="nav-item"> <a class="nav-link active_playlistbuilder " href="{{ route('inventory_out.index') }}"> <i class="mdi mdi-checkbox-blank-circle me-1"></i> Inventory Out  </a></li>
                <li class="nav-item"> <a class="nav-link active_playlistbuilder " href="{{ route('transfer_request.index') }}"> <i class="mdi mdi-checkbox-blank-circle me-1"></i> Inventory Out  </a></li>
            </ul>
            </div>
        </li> -->


        <li>
            <br />
            <br /><br />
        </li>
    </ul>
  </nav>
