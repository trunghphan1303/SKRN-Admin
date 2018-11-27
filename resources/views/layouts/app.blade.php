<!DOCTYPE html>

<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8" />
    <title>BM Admin</title>
    <meta name="description" content="Static table examples">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!--end::Web font -->

    <!--begin:: Global Mandatory Vendors -->
    <link href="assets/vendors/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <link href="assets/vendors/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/bootstrap-datetime-picker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/ion-rangeslider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/animate.css/animate.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/jstree/dist/themes/default/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/morris.js/morris.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/chartist/dist/chartist.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/vendors/flaticon/css/flaticon.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/vendors/metronic/css/styles.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/vendors/fontawesome5/css/all.min.css" rel="stylesheet" type="text/css" />

    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Styles -->
    <link href="assets/demo/base/style.bundle.css" rel="stylesheet" type="text/css" />

    <!--RTL version:<link href="assets/demo/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

    <!--end::Global Theme Styles -->
    <link rel="shortcut icon" href="assets/demo/media/img/logo/favicon.ico" />
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">

    <!-- BEGIN: Header -->
    <header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
        <div class="m-container m-container--fluid m-container--full-height">
            <div class="m-stack m-stack--ver m-stack--desktop">

                <!-- BEGIN: Brand -->
                <div class="m-stack__item m-brand  m-brand--skin-dark ">
                    <div class="m-stack m-stack--ver m-stack--general">
                        <div class="m-stack__item m-stack__item--middle m-brand__logo">
                            <a href="../../index.html" class="m-brand__logo-wrapper">
                                <img alt="" src="assets/app/media/img/logo-small.png" />
                            </a>
                        </div>
                        <div class="m-stack__item m-stack__item--middle m-brand__tools">

                            <!-- BEGIN: Left Aside Minimize Toggle -->
                            <a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block  ">
                                <span></span>
                            </a>

                            <!-- END -->

                            <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                            <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                <span></span>
                            </a>

                            <!-- END -->

                            <!-- BEGIN: Responsive Header Menu Toggler -->
                            <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                                <span></span>
                            </a>

                            <!-- END -->

                            <!-- BEGIN: Topbar Toggler -->
                            <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                <i class="flaticon-more"></i>
                            </a>

                            <!-- BEGIN: Topbar Toggler -->
                        </div>
                    </div>
                </div>

                <!-- END: Brand -->
                <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">

                    <!-- BEGIN: Horizontal Menu -->
                    <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
                    <div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark ">
                        <ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
                            <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><i
                                        class="m-menu__link-icon flaticon-add"></i><span class="m-menu__link-text">Actions</span><i class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left"><span class="m-menu__arrow m-menu__arrow--adjust"></span>
                                    <ul class="m-menu__subnav">
                                        <li class="m-menu__item " aria-haspopup="true"><a href="../../header/actions.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-file"></i><span class="m-menu__link-text">Create New Post</span></a></li>
                                        <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-diagram"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap">
																<span class="m-menu__link-text">Generate Reports</span> <span class="m-menu__link-badge"><span class="m-badge m-badge--success">2</span></span> </span></span></a></li>
                                        <li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><i class="m-menu__link-icon flaticon-business"></i><span
                                                    class="m-menu__link-text">Manage Movies</span><i class="m-menu__hor-arrow la la-angle-right"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                                            <!-- <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right"><span class="m-menu__arrow "></span>
                                                <ul class="m-menu__subnav">
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions.html" class="m-menu__link "><span class="m-menu__link-text">Latest Orders</span></a></li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions.html" class="m-menu__link "><span class="m-menu__link-text">Pending Orders</span></a></li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions.html" class="m-menu__link "><span class="m-menu__link-text">Processed Orders</span></a></li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions.html" class="m-menu__link "><span class="m-menu__link-text">Delivery Reports</span></a></li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions.html" class="m-menu__link "><span class="m-menu__link-text">Payments</span></a></li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions.html" class="m-menu__link "><span class="m-menu__link-text">Customers</span></a></li>
                                                </ul>
                                            </div> -->
                                        </li>
                                        <li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true"><a href="#" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-chat-1"></i><span class="m-menu__link-text">Customer
															Feedbacks</span><i class="m-menu__hor-arrow la la-angle-right"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                                            <!-- <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right"><span class="m-menu__arrow "></span>
                                                <ul class="m-menu__subnav">
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions.html" class="m-menu__link "><span class="m-menu__link-text">Customer Feedbacks</span></a></li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions.html" class="m-menu__link "><span class="m-menu__link-text">Supplier Feedbacks</span></a></li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions.html" class="m-menu__link "><span class="m-menu__link-text">Reviewed Feedbacks</span></a></li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions.html" class="m-menu__link "><span class="m-menu__link-text">Resolved Feedbacks</span></a></li>
                                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions.html" class="m-menu__link "><span class="m-menu__link-text">Feedback Reports</span></a></li>
                                                </ul>
                                            </div> -->
                                        </li>
                                        <!-- <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">Register Member</span></a></li> -->
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- END: Horizontal Menu -->

                    <!-- BEGIN: Topbar -->
                    <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general m-stack--fluid">
                        <div class="m-stack__item m-topbar__nav-wrapper">
                            <ul class="m-topbar__nav m-nav m-nav--inline">

                                <li class="m-nav__item m-topbar__quick-actions m-topbar__quick-actions--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push m-dropdown--mobile-full-width m-dropdown--skin-light"
                                    m-dropdown-toggle="click">
                                    <a href="#" class="m-nav__link m-dropdown__toggle">
                                        <span class="m-nav__link-badge m-badge m-badge--dot m-badge--info m--hide"></span>
                                        <span class="m-nav__link-icon"><i class="flaticon-share"></i></span>
                                    </a>
                                    <div class="m-dropdown__wrapper">
                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                        <div class="m-dropdown__inner">
                                            <div class="m-dropdown__header m--align-center" style="background: url(../../assets/app/media/img/misc/quick_actions_bg.jpg); background-size: cover;">
                                                <span class="m-dropdown__header-title">Quick Actions</span>
                                                <span class="m-dropdown__header-subtitle">Shortcuts</span>
                                            </div>
                                            <div class="m-dropdown__body m-dropdown__body--paddingless">
                                                <div class="m-dropdown__content">
                                                    <div class="data" data="false" data-height="380" data-mobile-height="200">
                                                        <div class="m-nav-grid m-nav-grid--skin-light">
                                                            <div class="m-nav-grid__row">
                                                                <a href="#" class="m-nav-grid__item">
                                                                    <i class="m-nav-grid__icon flaticon-file"></i>
                                                                    <span class="m-nav-grid__text">Generate Report</span>
                                                                </a>
                                                                <a href="#" class="m-nav-grid__item">
                                                                    <i class="m-nav-grid__icon flaticon-time"></i>
                                                                    <span class="m-nav-grid__text">Add New Event</span>
                                                                </a>
                                                            </div>
                                                            <div class="m-nav-grid__row">
                                                                <a href="#" class="m-nav-grid__item">
                                                                    <i class="m-nav-grid__icon flaticon-folder"></i>
                                                                    <span class="m-nav-grid__text">Create New Task</span>
                                                                </a>
                                                                <a href="#" class="m-nav-grid__item">
                                                                    <i class="m-nav-grid__icon flaticon-clipboard"></i>
                                                                    <span class="m-nav-grid__text">Completed Tasks</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- <li class="m-nav__item m-topbar__languages m-dropdown m-dropdown--small m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-right m-dropdown--mobile-full-width" m-dropdown-toggle="click">
                                    <a href="#" class="m-nav__link m-dropdown__toggle">
                                        <span class="m-nav__link-text">
                                            <img class="m-topbar__language-selected-img" src="assets/app/media/img/flags/020-flag.svg">
                                        </span>
                                    </a>
                                    <div class="m-dropdown__wrapper">
                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                        <div class="m-dropdown__inner">
                                            <div class="m-dropdown__header m--align-center" style="background: url(assets/app/media/img/misc/quick_actions_bg.jpg); background-size: cover;">
                                                <span class="m-dropdown__header-subtitle">Select your language</span>
                                            </div>
                                            <div class="m-dropdown__body">
                                                <div class="m-dropdown__content">
                                                    <ul class="m-nav m-nav--skin-light">
                                                        <li class="m-nav__item m-nav__item--active">
                                                            <a href="#" class="m-nav__link m-nav__link--active">
                                                                <span class="m-nav__link-icon"><img class="m-topbar__language-img" src="assets/app/media/img/flags/020-flag.svg"></span>
                                                                <span class="m-nav__link-title m-topbar__language-text m-nav__link-text">USA</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="#" class="m-nav__link">
                                                                <span class="m-nav__link-icon"><img class="m-topbar__language-img" src="assets/app/media/img/flags/015-china.svg"></span>
                                                                <span class="m-nav__link-title m-topbar__language-text m-nav__link-text">China</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="#" class="m-nav__link">
                                                                <span class="m-nav__link-icon"><img class="m-topbar__language-img" src="assets/app/media/img/flags/016-spain.svg"></span>
                                                                <span class="m-nav__link-title m-topbar__language-text m-nav__link-text">Spain</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="#" class="m-nav__link">
                                                                <span class="m-nav__link-icon"><img class="m-topbar__language-img" src="assets/app/media/img/flags/014-japan.svg"></span>
                                                                <span class="m-nav__link-title m-topbar__language-text m-nav__link-text">Japan</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="#" class="m-nav__link">
                                                                <span class="m-nav__link-icon"><img class="m-topbar__language-img" src="assets/app/media/img/flags/017-germany.svg"></span>
                                                                <span class="m-nav__link-title m-topbar__language-text m-nav__link-text">Germany</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li> -->
                                <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light"
                                    m-dropdown-toggle="click">
                                    <a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-topbar__userpic">
													<img src="assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless" alt="" />
												</span>
                                        <span class="m-topbar__username m--hide">Nick</span>
                                    </a>
                                    <div class="m-dropdown__wrapper">
                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                        <div class="m-dropdown__inner">
                                            <div class="m-dropdown__header m--align-center" style="background: url(../../assets/app/media/img/misc/user_profile_bg.jpg); background-size: cover;">
                                                <div class="m-card-user m-card-user--skin-dark">
                                                    <div class="m-card-user__pic">
                                                        <img src="assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless" alt="" />

                                                        <!--
                <span class="m-type m-type--lg m--bg-danger"><span class="m--font-light">S<span><span>
                -->
                                                    </div>
                                                    <div class="m-card-user__details">
                                                        <span class="m-card-user__name m--font-weight-500">Mark Andre</span>
                                                        <a href="" class="m-card-user__email m--font-weight-300 m-link">mark.andre@gmail.com</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-dropdown__body">
                                                <div class="m-dropdown__content">
                                                    <ul class="m-nav m-nav--skin-light">
                                                        <li class="m-nav__section m--hide">
                                                            <span class="m-nav__section-text">Section</span>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="../../header/profile.html" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                                <span class="m-nav__link-title">
																			<span class="m-nav__link-wrap">
																				<span class="m-nav__link-text">My Profile</span>
																				<span class="m-nav__link-badge"><span class="m-badge m-badge--success">2</span></span>
																			</span>
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="../../header/profile.html" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                <span class="m-nav__link-text">Activity</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="../../header/profile.html" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                <span class="m-nav__link-text">Messages</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__separator m-nav__separator--fit">
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="../../header/profile.html" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                                <span class="m-nav__link-text">FAQ</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="../../header/profile.html" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                <span class="m-nav__link-text">Support</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__separator m-nav__separator--fit">
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="login.html" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">Logout</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- <li id="m_quick_sidebar_toggle" class="m-nav__item">
                                    <a href="#" class="m-nav__link m-dropdown__toggle">
                                        <span class="m-nav__link-icon"><i class="flaticon-grid-menu"></i></span>
                                    </a>
                                </li> -->
                            </ul>
                        </div>
                    </div>

                    <!-- END: Topbar -->
                </div>
            </div>
        </div>
    </header>

    <!-- END: Header -->

    <!-- begin::Body -->
    @yield('body')

    <!-- end:: Body -->

    <!-- begin::Footer -->
    <footer class="m-grid__item		m-footer ">
        <div class="m-container m-container--fluid m-container--full-height m-page__container">
            <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
                <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
							<span class="m-footer__copyright">
								2017 &copy; Metronic theme by <a href="https://keenthemes.com" class="m-link">Keenthemes</a>
							</span>
                </div>
                <div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
                    <ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
                        <li class="m-nav__item">
                            <a href="#" class="m-nav__link">
                                <span class="m-nav__link-text">About</span>
                            </a>
                        </li>
                        <li class="m-nav__item">
                            <a href="#" class="m-nav__link">
                                <span class="m-nav__link-text">Privacy</span>
                            </a>
                        </li>
                        <li class="m-nav__item">
                            <a href="#" class="m-nav__link">
                                <span class="m-nav__link-text">T&C</span>
                            </a>
                        </li>
                        <li class="m-nav__item">
                            <a href="#" class="m-nav__link">
                                <span class="m-nav__link-text">Purchase</span>
                            </a>
                        </li>
                        <li class="m-nav__item m-nav__item">
                            <a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center" data-placement="left">
                                <i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- end::Footer -->
</div>

<!-- end:: Page -->

<!-- begin::Quick Sidebar -->
<!-- end::Quick Sidebar -->

<!-- begin::Scroll Top -->
<div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
</div>

<!-- end::Scroll Top -->

<!-- begin::Quick Nav -->
<ul class="m-nav-sticky" style="margin-top: 30px;">
    <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Purchase" data-placement="left">
        <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" target="_blank"><i class="la la-cart-arrow-down"></i></a>
    </li>
    <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Documentation" data-placement="left">
        <a href="https://keenthemes.com/metronic/documentation.html" target="_blank"><i class="la la-code-fork"></i></a>
    </li>
    <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Support" data-placement="left">
        <a href="https://keenthemes.com/forums/forum/support/metronic5/" target="_blank"><i class="la la-life-ring"></i></a>
    </li>
</ul>

<!-- begin::Quick Nav -->

<!--begin:: Global Mandatory Vendors -->
<script src="assets/vendors/jquery/dist/jquery.js" type="text/javascript"></script>
<script src="assets/vendors/popper.js/dist/umd/popper.js" type="text/javascript"></script>
<script src="assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/vendors/js-cookie/src/js.cookie.js" type="text/javascript"></script>
<script src="assets/vendors/moment/min/moment.min.js" type="text/javascript"></script>
<script src="assets/vendors/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
<script src="assets/vendors/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
<script src="assets/vendors/wnumb/wNumb.js" type="text/javascript"></script>

<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
<script src="assets/vendors/jquery.repeater/src/lib.js" type="text/javascript"></script>
<script src="assets/vendors/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
<script src="assets/vendors/jquery.repeater/src/repeater.js" type="text/javascript"></script>
<script src="assets/vendors/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
<script src="assets/vendors/block-ui/jquery.blockUI.js" type="text/javascript"></script>
<script src="assets/vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="assets/vendors/js/framework/components/plugins/forms/bootstrap-datepicker.init.js" type="text/javascript"></script>
<script src="assets/vendors/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="assets/vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="assets/vendors/js/framework/components/plugins/forms/bootstrap-timepicker.init.js" type="text/javascript"></script>
<script src="assets/vendors/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src="assets/vendors/js/framework/components/plugins/forms/bootstrap-daterangepicker.init.js" type="text/javascript"></script>
<script src="assets/vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
<script src="assets/vendors/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
<script src="assets/vendors/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
<script src="assets/vendors/js/framework/components/plugins/forms/bootstrap-switch.init.js" type="text/javascript"></script>
<script src="assets/vendors/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
<script src="assets/vendors/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
<script src="assets/vendors/select2/dist/js/select2.full.js" type="text/javascript"></script>
<script src="assets/vendors/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
<script src="assets/vendors/handlebars/dist/handlebars.js" type="text/javascript"></script>
<script src="assets/vendors/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
<script src="assets/vendors/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
<script src="assets/vendors/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
<script src="assets/vendors/inputmask/dist/inputmask/inputmask.phone.extensions.js" type="text/javascript"></script>
<script src="assets/vendors/nouislider/distribute/nouislider.js" type="text/javascript"></script>
<script src="assets/vendors/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
<script src="assets/vendors/autosize/dist/autosize.js" type="text/javascript"></script>
<script src="assets/vendors/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
<script src="assets/vendors/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
<script src="assets/vendors/dropzone/dist/dropzone.js" type="text/javascript"></script>
<script src="assets/vendors/summernote/dist/summernote.js" type="text/javascript"></script>
<script src="assets/vendors/markdown/lib/markdown.js" type="text/javascript"></script>
<script src="assets/vendors/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
<script src="assets/vendors/js/framework/components/plugins/forms/bootstrap-markdown.init.js" type="text/javascript"></script>
<script src="assets/vendors/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
<script src="assets/vendors/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
<script src="assets/vendors/js/framework/components/plugins/forms/jquery-validation.init.js" type="text/javascript"></script>
<script src="assets/vendors/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
<script src="assets/vendors/js/framework/components/plugins/base/bootstrap-notify.init.js" type="text/javascript"></script>
<script src="assets/vendors/toastr/build/toastr.min.js" type="text/javascript"></script>
<script src="assets/vendors/jstree/dist/jstree.js" type="text/javascript"></script>
<script src="assets/vendors/raphael/raphael.js" type="text/javascript"></script>
<script src="assets/vendors/morris.js/morris.js" type="text/javascript"></script>
<script src="assets/vendors/chartist/dist/chartist.js" type="text/javascript"></script>
<script src="assets/vendors/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
<script src="assets/vendors/js/framework/components/plugins/charts/chart.init.js" type="text/javascript"></script>
<script src="assets/vendors/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
<script src="assets/vendors/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
<script src="assets/vendors/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
<script src="assets/vendors/counterup/jquery.counterup.js" type="text/javascript"></script>
<script src="assets/vendors/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
<script src="assets/vendors/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
<script src="assets/vendors/js/framework/components/plugins/base/sweetalert2.init.js" type="text/javascript"></script>

<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Bundle -->
<script src="assets/demo/base/scripts.bundle.js" type="text/javascript"></script>

<!--end::Global Theme Bundle -->
</body>

<!-- end::Body -->
</html>
