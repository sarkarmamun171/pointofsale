@extends('layouts.header')
<body>
    <div id="page-wrapper">
        {{-- <div class="preloader themed-background">
            <h1 class="push-top-bottom text-light text-center"><strong>Pro</strong>UI</h1>
            <div class="inner">
                <h3 class="text-light visible-lt-ie10"><strong>Loading..</strong></h3>
                <div class="preloader-spinner hidden-lt-ie10"></div>
            </div>
        </div> --}}
        <!-- END Preloader -->

        <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">
            <!-- Alternative Sidebar -->
            {{-- <div id="sidebar-alt">
                <!-- Wrapper for scrolling functionality -->
                <div id="sidebar-alt-scroll">
                    <!-- Sidebar Content -->
                    <div class="sidebar-content">
                        <!-- Chat -->
                        <!-- Chat demo functionality initialized in js/app.js -> chatUi() -->
                        <a href="page_ready_chat.html" class="sidebar-title">
                            <i class="gi gi-comments pull-right"></i> <strong>Chat</strong>UI
                        </a>
                        <!-- Chat Users -->
                        <ul class="chat-users clearfix">
                            <li>
                                <a href="javascript:void(0)" class="chat-user-online">
                                    <span></span>
                                    <img src="{{ asset('backend') }}/img/placeholders/avatars/avatar12.jpg" alt="avatar" class="img-circle">
                                </a>
                            </li>
                        </ul>
                        <!-- END Chat Users -->

                        <!-- Chat Talk -->
                        <div class="chat-talk display-none">
                            <!-- Chat Info -->
                            <div class="chat-talk-info sidebar-section">
                                <button id="chat-talk-close-btn" class="btn btn-xs btn-default pull-right">
                                    <i class="fa fa-times"></i>
                                </button>
                                <img src="img/placeholders/avatars/avatar5.jpg" alt="avatar"
                                    class="img-circle pull-left">
                                <strong>John</strong> Doe
                            </div>
                            <!-- END Chat Info -->

                            <!-- Chat Messages -->
                            <ul class="chat-talk-messages">
                                <li class="text-center"><small>Yesterday, 18:35</small></li>
                                <li class="chat-talk-msg animation-slideRight">Hey admin?</li>
                                <li class="chat-talk-msg animation-slideRight">How are you?</li>
                                <li class="text-center"><small>Today, 7:10</small></li>
                                <li class="chat-talk-msg chat-talk-msg-highlight themed-border animation-slideLeft">I'm
                                    fine, thanks!</li>
                            </ul>
                            <!-- END Chat Messages -->

                            <!-- Chat Input -->
                            <form action="index.html" method="post" id="sidebar-chat-form" class="chat-form">
                                <input type="text" id="sidebar-chat-message" name="sidebar-chat-message"
                                    class="form-control form-control-borderless" placeholder="Type a message..">
                            </form>
                            <!-- END Chat Input -->
                        </div>
                        <!--  END Chat Talk -->
                        <!-- END Chat -->

                        <!-- Activity -->
                        <a href="javascript:void(0)" class="sidebar-title">
                            <i class="fa fa-globe pull-right"></i> <strong>Activity</strong>UI
                        </a>
                        <div class="sidebar-section">
                            <div class="alert alert-danger alert-alt">
                                <small>just now</small><br>
                                <i class="fa fa-thumbs-up fa-fw"></i> Upgraded to Pro plan
                            </div>

                        </div>
                        <!-- END Activity -->

                        <!-- Messages -->
                        <a href="page_ready_inbox.html" class="sidebar-title">
                            <i class="fa fa-envelope pull-right"></i> <strong>Messages</strong>UI (5)
                        </a>
                        <div class="sidebar-section">
                            <div class="alert alert-alt">
                                Debra Stanley<small class="pull-right">just now</small><br>
                                <a href="page_ready_inbox_message.html"><strong>New Follower</strong></a>
                            </div>

                        </div>
                        <!-- END Messages -->
                    </div>
                    <!-- END Sidebar Content -->
                </div>
                <!-- END Wrapper for scrolling functionality -->
            </div> --}}
            <!-- END Alternative Sidebar -->

            <!-- Main Sidebar -->
            <div id="sidebar">
                <!-- Wrapper for scrolling functionality -->
                <div id="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <div class="sidebar-content">
                        <!-- Brand -->
                        <a href="index.html" class="sidebar-brand">
                            <i class="gi gi-flash"></i><span
                                class="sidebar-nav-mini-hide"><strong>POS</strong>System</span>
                        </a>
                        <!-- END Brand -->

                        <!-- User Info -->
                        <div class="sidebar-section sidebar-user clearfix sidebar-nav-mini-hide">
                            <div class="sidebar-user-avatar">
                                <a href="page_ready_user_profile.html">
                                    <img src="{{ asset('backend') }}/img/placeholders/avatars/avatar2.jpg" alt="avatar">
                                </a>
                            </div>
                            <div class="sidebar-user-name">John Doe</div>
                            <div class="sidebar-user-links">
                                <a href="page_ready_user_profile.html" data-toggle="tooltip" data-placement="bottom"
                                    title="Profile"><i class="gi gi-user"></i></a>
                                <a href="page_ready_inbox.html" data-toggle="tooltip" data-placement="bottom"
                                    title="Messages"><i class="gi gi-envelope"></i></a>
                                <!-- Opens the user settings modal that can be found at the bottom of each page (page_footer.html in PHP version) -->
                                <a href="javascript:void(0)" class="enable-tooltip" data-placement="bottom"
                                    title="Settings" onclick="$('#modal-user-settings').modal('show');"><i
                                        class="gi gi-cogwheel"></i></a>
                                <a href="login.html" data-toggle="tooltip" data-placement="bottom" title="Logout"><i
                                        class="gi gi-exit"></i></a>
                            </div>
                        </div>
                        <!-- END User Info -->

                        <!-- Theme Colors -->
                        <!-- Change Color Theme functionality can be found in js/app.js - templateOptions() -->
                        <ul class="sidebar-section sidebar-themes clearfix sidebar-nav-mini-hide">
                            <!-- You can also add the default color theme
                                <li class="active">
                                    <a href="javascript:void(0)" class="themed-background-dark-default themed-border-default" data-theme="default" data-toggle="tooltip" title="Default Blue"></a>
                                </li>
                                -->
                            <li>
                                <a href="javascript:void(0)" class="themed-background-dark-night themed-border-night"
                                    data-theme="css/themes/night.css" data-toggle="tooltip" title="Night"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="themed-background-dark-amethyst themed-border-amethyst"
                                    data-theme="css/themes/amethyst.css" data-toggle="tooltip" title="Amethyst"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="themed-background-dark-modern themed-border-modern"
                                    data-theme="css/themes/modern.css" data-toggle="tooltip" title="Modern"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="themed-background-dark-autumn themed-border-autumn"
                                    data-theme="css/themes/autumn.css" data-toggle="tooltip" title="Autumn"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="themed-background-dark-flatie themed-border-flatie"
                                    data-theme="css/themes/flatie.css" data-toggle="tooltip" title="Flatie"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="themed-background-dark-spring themed-border-spring"
                                    data-theme="css/themes/spring.css" data-toggle="tooltip" title="Spring"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="themed-background-dark-fancy themed-border-fancy"
                                    data-theme="css/themes/fancy.css" data-toggle="tooltip" title="Fancy"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="themed-background-dark-fire themed-border-fire"
                                    data-theme="css/themes/fire.css" data-toggle="tooltip" title="Fire"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="themed-background-dark-coral themed-border-coral"
                                    data-theme="css/themes/coral.css" data-toggle="tooltip" title="Coral"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="themed-background-dark-lake themed-border-lake"
                                    data-theme="css/themes/lake.css" data-toggle="tooltip" title="Lake"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="themed-background-dark-forest themed-border-forest"
                                    data-theme="css/themes/forest.css" data-toggle="tooltip" title="Forest"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="themed-background-dark-waterlily themed-border-waterlily"
                                    data-theme="css/themes/waterlily.css" data-toggle="tooltip"
                                    title="Waterlily"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="themed-background-dark-emerald themed-border-emerald"
                                    data-theme="css/themes/emerald.css" data-toggle="tooltip" title="Emerald"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="themed-background-dark-blackberry themed-border-blackberry"
                                    data-theme="css/themes/blackberry.css" data-toggle="tooltip"
                                    title="Blackberry"></a>
                            </li>
                        </ul>
                        <!-- END Theme Colors -->

                        <!-- Sidebar Navigation -->
                        <ul class="sidebar-nav">
                            <li class="active">
                                <a href="#" class="sidebar-nav-menu"><i
                                        class="sidebar-nav-indicator sidebar-nav-mini-hide"></i><i
                                        class="gi gi-shopping_cart sidebar-nav-icon"></i><span
                                        class="sidebar-nav-mini-hide">eCommerce</span></a>
                                <ul>
                                    <li>
                                        <a href="page_ecom_dashboard.html" class=" active">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="page_ecom_orders.html">Orders</a>
                                    </li>
                                    <li>
                                        <a href="page_ecom_order_view.html">Order View</a>
                                    </li>
                                    <li>
                                        <a href="page_ecom_products.html">Products</a>
                                    </li>
                                    <li>
                                        <a href="page_ecom_product_edit.html">Product Edit</a>
                                    </li>
                                    <li>
                                        <a href="page_ecom_customer_view.html">Customer View</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-header">
                                <span class="sidebar-header-options clearfix"><a href="javascript:void(0)"
                                        data-toggle="tooltip" title="Quick Settings"><i
                                            class="gi gi-settings"></i></a><a href="javascript:void(0)"
                                        data-toggle="tooltip"
                                        title="Create the most amazing pages with the widget kit!"><i
                                            class="gi gi-lightbulb"></i></a></span>
                                <span class="sidebar-header-title">Widget Kit</span>
                            </li>
                            <li>
                                <a href="page_widgets_stats.html"><i class="gi gi-charts sidebar-nav-icon"></i><span
                                        class="sidebar-nav-mini-hide">Statistics</span></a>
                            </li>
                            <li>
                                <a href="page_widgets_social.html"><i
                                        class="gi gi-share_alt sidebar-nav-icon"></i><span
                                        class="sidebar-nav-mini-hide">Social</span></a>
                            </li>
                            <li>
                                <a href="page_widgets_media.html"><i class="gi gi-film sidebar-nav-icon"></i><span
                                        class="sidebar-nav-mini-hide">Media</span></a>
                            </li>
                            <li>
                                <a href="page_widgets_links.html"><i class="gi gi-link sidebar-nav-icon"></i><span
                                        class="sidebar-nav-mini-hide">Links</span></a>
                            </li>
                            <li class="sidebar-header">
                                <span class="sidebar-header-options clearfix"><a href="javascript:void(0)"
                                        data-toggle="tooltip" title="Quick Settings"><i
                                            class="gi gi-settings"></i></a></span>
                                <span class="sidebar-header-title">Design Kit</span>
                            </li>
                            <li>
                                <a href="#" class="sidebar-nav-menu"><i
                                        class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i
                                        class="gi gi-certificate sidebar-nav-icon"></i><span
                                        class="sidebar-nav-mini-hide">User Interface</span></a>
                                <ul>
                                    <li>
                                        <a href="page_ui_grid_blocks.html">Grid &amp; Blocks</a>
                                    </li>
                                    <li>
                                        <a href="page_ui_draggable_blocks.html">Draggable Blocks</a>
                                    </li>
                                    <li>
                                        <a href="page_ui_typography.html">Typography</a>
                                    </li>
                                    <li>
                                        <a href="page_ui_buttons_dropdowns.html">Buttons &amp; Dropdowns</a>
                                    </li>
                                    <li>
                                        <a href="page_ui_navigation_more.html">Navigation &amp; More</a>
                                    </li>
                                    <li>
                                        <a href="page_ui_horizontal_menu.html">Horizontal Menu</a>
                                    </li>
                                    <li>
                                        <a href="page_ui_progress_loading.html">Progress &amp; Loading</a>
                                    </li>
                                    <li>
                                        <a href="page_ui_preloader.html">Page Preloader</a>
                                    </li>
                                    <li>
                                        <a href="page_ui_color_themes.html">Color Themes</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="sidebar-nav-menu"><i
                                        class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i
                                        class="gi gi-notes_2 sidebar-nav-icon"></i><span
                                        class="sidebar-nav-mini-hide">Forms</span></a>
                                <ul>
                                    <li>
                                        <a href="page_forms_general.html">General</a>
                                    </li>
                                    <li>
                                        <a href="page_forms_components.html">Components</a>
                                    </li>
                                    <li>
                                        <a href="page_forms_validation.html">Validation</a>
                                    </li>
                                    <li>
                                        <a href="page_forms_wizard.html">Wizard</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="sidebar-nav-menu"><i
                                        class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i
                                        class="gi gi-table sidebar-nav-icon"></i><span
                                        class="sidebar-nav-mini-hide">Tables</span></a>
                                <ul>
                                    <li>
                                        <a href="page_tables_general.html">General</a>
                                    </li>
                                    <li>
                                        <a href="page_tables_responsive.html">Responsive</a>
                                    </li>
                                    <li>
                                        <a href="page_tables_datatables.html">Datatables</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="sidebar-nav-menu"><i
                                        class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i
                                        class="gi gi-cup sidebar-nav-icon"></i><span
                                        class="sidebar-nav-mini-hide">Icon Sets</span></a>
                                <ul>
                                    <li>
                                        <a href="page_icons_fontawesome.html">Font Awesome</a>
                                    </li>
                                    <li>
                                        <a href="page_icons_glyphicons_pro.html">Glyphicons Pro</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="sidebar-nav-menu"><i
                                        class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i
                                        class="gi gi-show_big_thumbnails sidebar-nav-icon"></i><span
                                        class="sidebar-nav-mini-hide">Page Layouts</span></a>
                                <ul>
                                    <li>
                                        <a href="page_layout_static.html">Static</a>
                                    </li>
                                    <li>
                                        <a href="page_layout_static_fixed_footer.html">Static + Fixed Footer</a>
                                    </li>
                                    <li>
                                        <a href="page_layout_fixed_top.html">Fixed Top Header</a>
                                    </li>
                                    <li>
                                        <a href="page_layout_fixed_top_footer.html">Fixed Top Header + Footer</a>
                                    </li>
                                    <li>
                                        <a href="page_layout_fixed_bottom.html">Fixed Bottom Header</a>
                                    </li>
                                    <li>
                                        <a href="page_layout_fixed_bottom_footer.html">Fixed Bottom Header + Footer</a>
                                    </li>
                                    <li>
                                        <a href="page_layout_static_main_sidebar_mini.html">Mini Main Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="page_layout_static_main_sidebar_partial.html">Partial Main Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="page_layout_static_main_sidebar_visible.html">Visible Main Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="page_layout_static_alternative_sidebar_partial.html">Partial
                                            Alternative Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="page_layout_static_alternative_sidebar_visible.html">Visible
                                            Alternative Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="page_layout_static_no_sidebars.html">No Sidebars</a>
                                    </li>
                                    <li>
                                        <a href="page_layout_static_both_partial.html">Both Sidebars Partial</a>
                                    </li>
                                    <li>
                                        <a href="page_layout_static_animated.html">Animated Sidebar Transitions</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-header">
                                <span class="sidebar-header-options clearfix"><a href="javascript:void(0)"
                                        data-toggle="tooltip" title="Quick Settings"><i
                                            class="gi gi-settings"></i></a></span>
                                <span class="sidebar-header-title">Develop Kit</span>
                            </li>
                            <li>
                                <a href="#" class="sidebar-nav-menu"><i
                                        class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i
                                        class="gi gi-brush sidebar-nav-icon"></i><span
                                        class="sidebar-nav-mini-hide">Ready Pages</span></a>
                                <ul>
                                    <li>
                                        <a href="#" class="sidebar-nav-submenu"><i
                                                class="fa fa-angle-left sidebar-nav-indicator"></i>Errors</a>
                                        <ul>
                                            <li>
                                                <a href="page_ready_400.html">400</a>
                                            </li>
                                            <li>
                                                <a href="page_ready_401.html">401</a>
                                            </li>
                                            <li>
                                                <a href="page_ready_403.html">403</a>
                                            </li>
                                            <li>
                                                <a href="page_ready_404.html">404</a>
                                            </li>
                                            <li>
                                                <a href="page_ready_500.html">500</a>
                                            </li>
                                            <li>
                                                <a href="page_ready_503.html">503</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="sidebar-nav-submenu"><i
                                                class="fa fa-angle-left sidebar-nav-indicator"></i>Get Started</a>
                                        <ul>
                                            <li>
                                                <a href="page_ready_blank.html">Blank</a>
                                            </li>
                                            <li>
                                                <a href="page_ready_blank_alt.html">Blank Alternative</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="page_ready_search_results.html">Search Results (4)</a>
                                    </li>
                                    <li>
                                        <a href="page_ready_article.html">Article</a>
                                    </li>
                                    <li>
                                        <a href="page_ready_user_profile.html">User Profile</a>
                                    </li>
                                    <li>
                                        <a href="page_ready_contacts.html">Contacts</a>
                                    </li>
                                    <li>
                                        <a href="#" class="sidebar-nav-submenu"><i
                                                class="fa fa-angle-left sidebar-nav-indicator"></i>e-Learning</a>
                                        <ul>
                                            <li>
                                                <a href="page_ready_elearning_courses.html">Courses</a>
                                            </li>
                                            <li>
                                                <a href="page_ready_elearning_course_lessons.html">Course - Lessons</a>
                                            </li>
                                            <li>
                                                <a href="page_ready_elearning_course_lesson.html">Course - Lesson
                                                    Page</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="sidebar-nav-submenu"><i
                                                class="fa fa-angle-left sidebar-nav-indicator"></i>Message Center</a>
                                        <ul>
                                            <li>
                                                <a href="page_ready_inbox.html">Inbox</a>
                                            </li>
                                            <li>
                                                <a href="page_ready_inbox_compose.html">Compose Message</a>
                                            </li>
                                            <li>
                                                <a href="page_ready_inbox_message.html">View Message</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="page_ready_chat.html">Chat</a>
                                    </li>
                                    <li>
                                        <a href="page_ready_timeline.html">Timeline</a>
                                    </li>
                                    <li>
                                        <a href="page_ready_files.html">Files</a>
                                    </li>
                                    <li>
                                        <a href="page_ready_tickets.html">Tickets</a>
                                    </li>
                                    <li>
                                        <a href="page_ready_bug_tracker.html">Bug Tracker</a>
                                    </li>
                                    <li>
                                        <a href="page_ready_tasks.html">Tasks</a>
                                    </li>
                                    <li>
                                        <a href="page_ready_faq.html">FAQ</a>
                                    </li>
                                    <li>
                                        <a href="page_ready_pricing_tables.html">Pricing Tables</a>
                                    </li>
                                    <li>
                                        <a href="page_ready_invoice.html">Invoice</a>
                                    </li>
                                    <li>
                                        <a href="page_ready_forum.html">Forum (3)</a>
                                    </li>
                                    <li>
                                        <a href="page_ready_coming_soon.html">Coming Soon</a>
                                    </li>
                                    <li>
                                        <a href="#" class="sidebar-nav-submenu"><i
                                                class="fa fa-angle-left sidebar-nav-indicator"></i>Login, Register
                                            &amp; Lock</a>
                                        <ul>
                                            <li>
                                                <a href="login.html">Login</a>
                                            </li>
                                            <li>
                                                <a href="login_full.html">Login (Full Background)</a>
                                            </li>
                                            <li>
                                                <a href="login_alt.html">Login 2</a>
                                            </li>
                                            <li>
                                                <a href="login.html#reminder">Password Reminder</a>
                                            </li>
                                            <li>
                                                <a href="login_alt.html#reminder">Password Reminder 2</a>
                                            </li>
                                            <li>
                                                <a href="login.html#register">Register</a>
                                            </li>
                                            <li>
                                                <a href="login_alt.html#register">Register 2</a>
                                            </li>
                                            <li>
                                                <a href="page_ready_lock_screen.html">Lock Screen</a>
                                            </li>
                                            <li>
                                                <a href="page_ready_lock_screen_alt.html">Lock Screen 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="sidebar-nav-menu"><i
                                        class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i
                                        class="fa fa-wrench sidebar-nav-icon"></i><span
                                        class="sidebar-nav-mini-hide">Components</span></a>
                                <ul>
                                    <li>
                                        <a href="#" class="sidebar-nav-submenu"><i
                                                class="fa fa-angle-left sidebar-nav-indicator"></i>3 Level Menu</a>
                                        <ul>
                                            <li>
                                                <a href="#">Link 1</a>
                                            </li>
                                            <li>
                                                <a href="#">Link 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="page_comp_maps.html">Maps</a>
                                    </li>
                                    <li>
                                        <a href="page_comp_charts.html">Charts</a>
                                    </li>
                                    <li>
                                        <a href="page_comp_gallery.html">Gallery</a>
                                    </li>
                                    <li>
                                        <a href="page_comp_carousel.html">Carousel</a>
                                    </li>
                                    <li>
                                        <a href="page_comp_calendar.html">Calendar</a>
                                    </li>
                                    <li>
                                        <a href="page_comp_animations.html">CSS3 Animations</a>
                                    </li>
                                    <li>
                                        <a href="page_comp_syntax_highlighting.html">Syntax Highlighting</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- END Sidebar Navigation -->

                        <!-- Sidebar Notifications -->
                        <div class="sidebar-header sidebar-nav-mini-hide">
                            <span class="sidebar-header-options clearfix">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Refresh"><i
                                        class="gi gi-refresh"></i></a>
                            </span>
                            <span class="sidebar-header-title">Activity</span>
                        </div>
                        <div class="sidebar-section sidebar-nav-mini-hide">
                            <div class="alert alert-success alert-alt">
                                <small>5 min ago</small><br>
                                <i class="fa fa-thumbs-up fa-fw"></i> You had a new sale ($10)
                            </div>

                        </div>
                        <!-- END Sidebar Notifications -->
                    </div>
                    <!-- END Sidebar Content -->
                </div>
                <!-- END Wrapper for scrolling functionality -->
            </div>
            <!-- END Main Sidebar -->

            <!-- Main Container -->
            <div id="main-container">
                <header class="navbar navbar-default">
                    <!-- Left Header Navigation -->
                    <ul class="nav navbar-nav-custom">
                        <!-- Main Sidebar Toggle Button -->
                        <li>
                            <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                                <i class="fa fa-bars fa-fw"></i>
                            </a>
                        </li>
                        <!-- END Main Sidebar Toggle Button -->

                        <!-- Template Options -->
                        <!-- Change Options functionality can be found in js/app.js - templateOptions() -->
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="gi gi-settings"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-custom dropdown-options">
                                <li class="dropdown-header text-center">Header Style</li>
                                <li>
                                    <div class="btn-group btn-group-justified btn-group-sm">
                                        <a href="javascript:void(0)" class="btn btn-primary"
                                            id="options-header-default">Light</a>
                                        <a href="javascript:void(0)" class="btn btn-primary"
                                            id="options-header-inverse">Dark</a>
                                    </div>
                                </li>
                                <li class="dropdown-header text-center">Page Style</li>
                                <li>
                                    <div class="btn-group btn-group-justified btn-group-sm">
                                        <a href="javascript:void(0)" class="btn btn-primary"
                                            id="options-main-style">Default</a>
                                        <a href="javascript:void(0)" class="btn btn-primary"
                                            id="options-main-style-alt">Alternative</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- END Template Options -->
                    </ul>
                    <!-- END Left Header Navigation -->

                    <!-- Search Form -->
                    <form action="page_ready_search_results.html" method="post" class="navbar-form-custom">
                        <div class="form-group">
                            <input type="text" id="top-search" name="top-search" class="form-control"
                                placeholder="Search..">
                        </div>
                    </form>
                    <!-- END Search Form -->

                    <!-- Right Header Navigation -->
                    <ul class="nav navbar-nav-custom pull-right">
                        <!-- User Dropdown -->
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{ asset('backend') }}/img/placeholders/avatars/avatar2.jpg" alt="avatar"> <i
                                    class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                <li class="dropdown-header text-center">Account</li>
                                <li>
                                    <a href="page_ready_timeline.html">
                                        <i class="fa fa-clock-o fa-fw pull-right"></i>
                                        <span class="badge pull-right">10</span>
                                        Updates
                                    </a>
                                    <a href="page_ready_inbox.html">
                                        <i class="fa fa-envelope-o fa-fw pull-right"></i>
                                        <span class="badge pull-right">5</span>
                                        Messages
                                    </a>
                                    <a href="page_ready_pricing_tables.html"><i
                                            class="fa fa-magnet fa-fw pull-right"></i>
                                        <span class="badge pull-right">3</span>
                                        Subscriptions
                                    </a>
                                    <a href="page_ready_faq.html"><i class="fa fa-question fa-fw pull-right"></i>
                                        <span class="badge pull-right">11</span>
                                        FAQ
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="page_ready_user_profile.html">
                                        <i class="fa fa-user fa-fw pull-right"></i>
                                        Profile
                                    </a>
                                    <!-- Opens the user settings modal that can be found at the bottom of each page (page_footer.html in PHP version) -->
                                    <a href="#modal-user-settings" data-toggle="modal">
                                        <i class="fa fa-cog fa-fw pull-right"></i>
                                        Settings
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="page_ready_lock_screen.html"><i class="fa fa-lock fa-fw pull-right"></i>
                                        Lock Account</a>
                                    <a href="login.html"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>
                                </li>
                                <li class="dropdown-header text-center">Activity</li>
                                <li>
                                    <div class="alert alert-success alert-alt">
                                        <small>5 min ago</small><br>
                                        <i class="fa fa-thumbs-up fa-fw"></i> You had a new sale ($10)
                                    </div>

                                </li>
                            </ul>
                        </li>
                        <!-- END User Dropdown -->
                    </ul>
                    <!-- END Right Header Navigation -->
                </header>
                <!-- END Header -->

                <!-- Page content -->
                <div id="page-content">
                    <!-- eCommerce Dashboard Header -->
                    <div class="content-header">
                        <ul class="nav-horizontal text-center">
                            <li class="active">
                                <a href="page_ecom_dashboard.html"><i class="fa fa-bar-chart"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="page_ecom_orders.html"><i class="gi gi-shop_window"></i> Orders</a>
                            </li>
                            <li>
                                <a href="page_ecom_order_view.html"><i class="gi gi-shopping_cart"></i> Order View</a>
                            </li>
                            <li>
                                <a href="page_ecom_products.html"><i class="gi gi-shopping_bag"></i> Products</a>
                            </li>
                            <li>
                                <a href="page_ecom_product_edit.html"><i class="gi gi-pencil"></i> Product Edit</a>
                            </li>
                            <li>
                                <a href="page_ecom_customer_view.html"><i class="gi gi-user"></i> Customer View</a>
                            </li>
                        </ul>
                    </div>
                    <!-- END eCommerce Dashboard Header -->

                    <!-- Quick Stats -->
                    <div class="row text-center">
                        <div class="col-sm-6 col-lg-3">
                            <a href="javascript:void(0)" class="widget widget-hover-effect2">
                                <div class="widget-extra themed-background">
                                    <h4 class="widget-content-light"><strong>Pending</strong> Orders</h4>
                                </div>
                                <div class="widget-extra-full"><span class="h2 animation-expandOpen">3</span></div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <a href="javascript:void(0)" class="widget widget-hover-effect2">
                                <div class="widget-extra themed-background-dark">
                                    <h4 class="widget-content-light"><strong>Conversion</strong> Rate</h4>
                                </div>
                                <div class="widget-extra-full"><span
                                        class="h2 themed-color-dark animation-expandOpen">4.7%</span></div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <a href="javascript:void(0)" class="widget widget-hover-effect2">
                                <div class="widget-extra themed-background-dark">
                                    <h4 class="widget-content-light"><strong>Orders</strong> Today</h4>
                                </div>
                                <div class="widget-extra-full"><span
                                        class="h2 themed-color-dark animation-expandOpen">120</span></div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <a href="javascript:void(0)" class="widget widget-hover-effect2">
                                <div class="widget-extra themed-background-dark">
                                    <h4 class="widget-content-light"><strong>Earnings</strong> Today</h4>
                                </div>
                                <div class="widget-extra-full"><span
                                        class="h2 themed-color-dark animation-expandOpen">$ 4.250</span></div>
                            </a>
                        </div>
                    </div>
                    <!-- END Quick Stats -->
                    @yield('content')
                </div>
                <!-- END Page Content -->

                <!-- Footer -->
                <footer class="clearfix">
                    <div class="pull-right">
                        Crafted with <i class="fa fa-heart text-danger"></i> by <a href="http://goo.gl/vNS3I"
                            target="_blank">pixelcave</a>
                    </div>
                    <div class="pull-left">
                        <span id="year-copy"></span> &copy; <a href="http://goo.gl/TDOSuC" target="_blank">ProUI
                            3.8</a>
                    </div>
                </footer>
                <!-- END Footer -->
            </div>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->
    </div>
    <!-- END Page Wrapper -->

    <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
    <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- User Settings, modal which opens from Settings link (found in top right user menu) and the Cog link (found in sidebar user info) -->
    <div id="modal-user-settings" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header text-center">
                    <h2 class="modal-title"><i class="fa fa-pencil"></i> Settings</h2>
                </div>
                <!-- END Modal Header -->

                <!-- Modal Body -->
                <div class="modal-body">
                    <form action="index.html" method="post" enctype="multipart/form-data"
                        class="form-horizontal form-bordered" onsubmit="return false;">
                        <fieldset>
                            <legend>Vital Info</legend>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Username</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">Admin</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="user-settings-email">Email</label>
                                <div class="col-md-8">
                                    <input type="email" id="user-settings-email" name="user-settings-email"
                                        class="form-control" value="admin@example.com">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="user-settings-notifications">Email
                                    Notifications</label>
                                <div class="col-md-8">
                                    <label class="switch switch-primary">
                                        <input type="checkbox" id="user-settings-notifications"
                                            name="user-settings-notifications" value="1" checked>
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Password Update</legend>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="user-settings-password">New
                                    Password</label>
                                <div class="col-md-8">
                                    <input type="password" id="user-settings-password" name="user-settings-password"
                                        class="form-control" placeholder="Please choose a complex one..">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="user-settings-repassword">Confirm New
                                    Password</label>
                                <div class="col-md-8">
                                    <input type="password" id="user-settings-repassword"
                                        name="user-settings-repassword" class="form-control"
                                        placeholder="..and confirm it!">
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-group form-actions">
                            <div class="col-xs-12 text-right">
                                <button type="button" class="btn btn-sm btn-default"
                                    data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-sm btn-primary">Save Changes</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- END Modal Body -->
            </div>
        </div>
    </div>
    <!-- END User Settings -->

    <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
    <script src="{{ asset('backend') }}/js/vendor/jquery.min.js"></script>
    <script src="{{ asset('backend') }}/js/vendor/bootstrap.min.js"></script>
    <script src="{{ asset('backend') }}/js/plugins.js"></script>
    <script src="{{ asset('backend') }}/js/app.js"></script>

    <!-- Load and execute javascript code used only in this page -->
    <script src="{{ asset('backend') }}/js/pages/ecomDashboard.js"></script>
    <script>
        $(function() {
            EcomDashboard.init();
        });
    </script>
</body>

</html>
