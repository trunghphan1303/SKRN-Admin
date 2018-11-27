@extends('layouts.app')

@section('body')
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

        <!-- BEGIN: Left Aside -->
        <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i class="la la-close"></i></button>
        <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

            <!-- BEGIN: Aside Menu -->
            <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
                <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
                    <li class="m-menu__item " aria-haspopup="true"><a href="../../index.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-line-graph"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Dashboard</span>
											<span class="m-menu__link-badge"><span class="m-badge m-badge--danger">2</span></span> </span></span></a></li>

                </ul>
            </div>
            </li>
            </ul>
        </div>

        <!-- END: Aside Menu -->

        <!-- END: Left Aside -->
        <div class="m-grid__item m-grid__item--fluid m-wrapper">

            <!-- BEGIN: Subheader -->
            <div class="m-subheader ">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="m-subheader__title m-subheader__title--separator">Tables</h3>
                        <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                            <li class="m-nav__item m-nav__item--home">
                                <a href="#" class="m-nav__link m-nav__link--icon">
                                    <i class="m-nav__link-icon la la-home"></i>
                                </a>
                            </li>
                            <li class="m-nav__separator">-</li>
                            <li class="m-nav__item">
                                <a href="" class="m-nav__link">
                                    <span class="m-nav__link-text">Base</span>
                                </a>
                            </li>
                            <li class="m-nav__separator">-</li>
                            <li class="m-nav__item">
                                <a href="" class="m-nav__link">
                                    <span class="m-nav__link-text">Tables</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- END: Subheader -->
            <div class="m-content">
                <div class="row">
                    <div class="col-xl">
                        <!--begin::Portlet-->
                        <div class="m-portlet">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            Movies Stat
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__body">

                                <!--begin::Section-->
                                <div class="m-section">
											<span class="m-section__sub">
												Using the most basic table markup, here’s how tables look in Metronic:
											</span>
                                    <div class="m-section__content">
                                        <table class="table table-bordered m-table m-table--border-brand m-table--head-bg-brand">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Number of views</th>
                                                <th>Number of plays</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Inception</td>
                                                <td>8294</td>
                                                <td>8132</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Made in America</td>
                                                <td>1328</td>
                                                <td>1111</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Power Ranger</td>
                                                <td>9696</td>
                                                <td>6969</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Portlet-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
