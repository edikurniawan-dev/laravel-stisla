<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown {{ $type_menu === 'dashboard' ? 'active' : '' }}">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('general-dashboard') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ url('general-dashboard') }}">General Dashboard</a>
                    </li>
                    <li class="{{ Request::is('ecommerce-dashboard') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('ecommerce-dashboard') }}">Ecommerce Dashboard</a>
                    </li>
                </ul>
            </li>
            <li class="menu-header">Starter</li>
            <li class="nav-item dropdown {{ $type_menu === 'layout' ? 'active' : '' }}">
                <a href="#"
                    class="nav-link has-dropdown"
                    data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Layout</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('default-layout') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('default-layout') }}">Default Layout</a>
                    </li>
                    <li class="{{ Request::is('transparent-sidebar') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('transparent-sidebar') }}">Transparent Sidebar</a>
                    </li>
                    <li class="{{ Request::is('layout-top-navigation') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('layout-top-navigation') }}">Top Navigation</a>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::is('blank-page') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ url('blank-page') }}"><i class="far fa-square"></i> <span>Blank Page</span></a>
            </li>
            <li class="nav-item dropdown {{ $type_menu === 'bootstrap' ? 'active' : '' }}">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Bootstrap</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('alert') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('alert') }}">Alert</a>
                    </li>
                    <li class="{{ Request::is('badge') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('badge') }}">Badge</a>
                    </li>
                    <li class="{{ Request::is('breadcrumb') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('breadcrumb') }}">Breadcrumb</a>
                    </li>
                    <li class="{{ Request::is('button') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('button') }}">Buttons</a>
                    </li>
                    <li class="{{ Request::is('card') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('card') }}">Card</a>
                    </li>
                    <li class="{{ Request::is('carousel') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('carousel') }}">Carousel</a>
                    </li>
                    <li class="{{ Request::is('collapse') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('collapse') }}">Collapse</a>
                    </li>
                    <li class="{{ Request::is('dropdown') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('dropdown') }}">Dropdown</a>
                    </li>
                    <li class="{{ Request::is('form') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('form') }}">Form</a>
                    </li>
                    <li class="{{ Request::is('list-group') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('list-group') }}">List Group</a>
                    </li>
                    <li class="{{ Request::is('media-object') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('media-object') }}">Media Object</a>
                    </li>
                    <li class="{{ Request::is('modal') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('modal') }}">Modal</a>
                    </li>
                    <li class="{{ Request::is('nav') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('nav') }}">Nav</a>
                    </li>
                    <li class="{{ Request::is('navbar') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('navbar') }}">Navbar</a>
                    </li>
                    <li class="{{ Request::is('pagination') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('pagination') }}">Pagination</a>
                    </li>
                    <li class="{{ Request::is('popover') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('popover') }}">Popover</a>
                    </li>
                    <li class="{{ Request::is('progress') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('progress') }}">Progress</a>
                    </li>
                    <li class="{{ Request::is('table') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('table') }}">Table</a>
                    </li>
                    <li class="{{ Request::is('tooltip') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('tooltip') }}">Tooltip</a>
                    </li>
                    <li class="{{ Request::is('typography') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('typography') }}">Typography</a>
                    </li>
                </ul>
            </li>
            <li class="menu-header">Stisla</li>
            <li class="nav-item dropdown {{ $type_menu === 'components' ? 'active' : '' }}">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-th-large"></i>
                    <span>Components</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('components-article') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('components-article') }}">Article</a>
                    </li>
                    <li class="{{ Request::is('components-avatar') ? 'active' : '' }}">
                        <a class="nav-link beep beep-sidebar"
                            href="{{ url('components-avatar') }}">Avatar</a>
                    </li>
                    <li class="{{ Request::is('components-chat-box') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('components-chat-box') }}">Chat Box</a>
                    </li>
                    <li class="{{ Request::is('components-empty-state') ? 'active' : '' }}">
                        <a class="nav-link beep beep-sidebar"
                            href="{{ url('components-empty-state') }}">Empty State</a>
                    </li>
                    <li class="{{ Request::is('components-gallery') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('components-gallery') }}">Gallery</a>
                    </li>
                    <li class="{{ Request::is('components-hero') ? 'active' : '' }}">
                        <a class="nav-link beep beep-sidebar"
                            href="{{ url('components-hero') }}">Hero</a>
                    </li>
                    <li class="{{ Request::is('components-multiple-upload') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('components-multiple-upload') }}">Multiple Upload</a>
                    </li>
                    <li class="{{ Request::is('components-pricing') ? 'active' : '' }}">
                        <a class="nav-link beep beep-sidebar"
                            href="{{ url('components-pricing') }}">Pricing</a>
                    </li>
                    <li class="{{ Request::is('components-statistic') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('components-statistic') }}">Statistic</a>
                    </li>
                    <li class="{{ Request::is('components-article') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('components-article') }}">Tab</a>
                    </li>
                    <li class="{{ Request::is('components-article') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('components-article') }}">Table</a>
                    </li>
                    <li class="{{ Request::is('components-article') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('components-article') }}">User</a>
                    </li>
                    <li class="{{ Request::is('components-article') ? 'active' : '' }}">
                        <a class="nav-link beep beep-sidebar"
                            href="{{ url('components-article') }}">Wizard</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Forms</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link"
                            href="forms-advanced-form.html">Advanced Form</a></li>
                    <li><a class="nav-link"
                            href="forms-editor.html">Editor</a></li>
                    <li><a class="nav-link"
                            href="forms-validation.html">Validation</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i> <span>Google
                        Maps</span></a>
                <ul class="dropdown-menu">
                    <li><a href="gmaps-advanced-route.html">Advanced Route</a></li>
                    <li><a href="gmaps-draggable-marker.html">Draggable Marker</a></li>
                    <li><a href="gmaps-geocoding.html">Geocoding</a></li>
                    <li><a href="gmaps-geolocation.html">Geolocation</a></li>
                    <li><a href="gmaps-marker.html">Marker</a></li>
                    <li><a href="gmaps-multiple-marker.html">Multiple Marker</a></li>
                    <li><a href="gmaps-route.html">Route</a></li>
                    <li><a href="gmaps-simple.html">Simple</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-plug"></i> <span>Modules</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link"
                            href="modules-calendar.html">Calendar</a></li>
                    <li><a class="nav-link"
                            href="modules-chartjs.html">ChartJS</a></li>
                    <li><a class="nav-link"
                            href="modules-datatables.html">DataTables</a></li>
                    <li><a class="nav-link"
                            href="modules-flag.html">Flag</a></li>
                    <li><a class="nav-link"
                            href="modules-font-awesome.html">Font Awesome</a></li>
                    <li><a class="nav-link"
                            href="modules-ion-icons.html">Ion Icons</a></li>
                    <li><a class="nav-link"
                            href="modules-owl-carousel.html">Owl Carousel</a></li>
                    <li><a class="nav-link"
                            href="modules-sparkline.html">Sparkline</a></li>
                    <li><a class="nav-link"
                            href="modules-sweet-alert.html">Sweet Alert</a></li>
                    <li><a class="nav-link"
                            href="modules-toastr.html">Toastr</a></li>
                    <li><a class="nav-link"
                            href="modules-vector-map.html">Vector Map</a></li>
                    <li><a class="nav-link"
                            href="modules-weather-icon.html">Weather Icon</a></li>
                </ul>
            </li>
            <li class="menu-header">Pages</li>
            <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Auth</span></a>
                <ul class="dropdown-menu">
                    <li><a href="auth-forgot-password.html">Forgot Password</a></li>
                    <li><a href="auth-login.html">Login</a></li>
                    <li><a class="beep beep-sidebar"
                            href="auth-login-2.html">Login 2</a></li>
                    <li><a href="auth-register.html">Register</a></li>
                    <li><a href="auth-reset-password.html">Reset Password</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-exclamation"></i>
                    <span>Errors</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link"
                            href="errors-503.html">503</a></li>
                    <li><a class="nav-link"
                            href="errors-403.html">403</a></li>
                    <li><a class="nav-link"
                            href="errors-404.html">404</a></li>
                    <li><a class="nav-link"
                            href="errors-500.html">500</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-bicycle"></i> <span>Features</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link"
                            href="features-activities.html">Activities</a></li>
                    <li><a class="nav-link"
                            href="features-post-create.html">Post Create</a></li>
                    <li><a class="nav-link"
                            href="features-posts.html">Posts</a></li>
                    <li><a class="nav-link"
                            href="features-profile.html">Profile</a></li>
                    <li><a class="nav-link"
                            href="features-settings.html">Settings</a></li>
                    <li><a class="nav-link"
                            href="features-setting-detail.html">Setting Detail</a></li>
                    <li><a class="nav-link"
                            href="features-tickets.html">Tickets</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-ellipsis-h"></i>
                    <span>Utilities</span></a>
                <ul class="dropdown-menu">
                    <li><a href="utilities-contact.html">Contact</a></li>
                    <li><a class="nav-link"
                            href="utilities-invoice.html">Invoice</a></li>
                    <li><a href="utilities-subscribe.html">Subscribe</a></li>
                </ul>
            </li>
            <li><a class="nav-link"
                    href="credits.html"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li>
        </ul>

        <div class="hide-sidebar-mini mt-4 mb-4 p-3">
            <a href="https://getstisla.com/docs"
                class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div>
    </aside>
</div>
