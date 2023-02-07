@extends('layouts.app')

@section('content')
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <aside
        class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-end me-2 rotate-caret"
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute start-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0"
                href=" https://demos.creative-tim.com/argon-dashboard-pro/pages/dashboards/default.html " target="_blank">
                <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
                <span class="me-1 font-weight-bold">Argon Dashboard 2 PRO Laravel</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse px-0 w-auto h-auto" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#dashboardsExamples" class="nav-link "
                        aria-controls="dashboardsExamples" role="button" aria-expanded="false">
                        <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                            <i class="ni ni-shop text-primary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text me-1">Dashboards</span>
                    </a>
                    <div class="collapse " id="dashboardsExamples">
                        <ul class="nav ms-4">
                            <li class="nav-item ">
                                <a class="nav-link " href="/landing">
                                    <span class="sidenav-mini-icon"> L </span>
                                    <span class="sidenav-normal"> Landing </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/default">
                                    <span class="sidenav-mini-icon"> D </span>
                                    <span class="sidenav-normal"> Default </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/automotive">
                                    <span class="sidenav-mini-icon"> A </span>
                                    <span class="sidenav-normal"> Automotive </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/smart-home">
                                    <span class="sidenav-mini-icon"> S </span>
                                    <span class="sidenav-normal"> Smart Home </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false"
                                    href="#vrExamples">
                                    <span class="sidenav-mini-icon"> V </span>
                                    <span class="sidenav-normal"> Virtual Reality <b class="caret"></b></span>
                                </a>
                                <div class="collapse " id="vrExamples">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link " href="/vr-default">
                                                <span class="sidenav-mini-icon text-xs"> V </span>
                                                <span class="sidenav-normal"> VR Default </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="/vr-info">
                                                <span class="sidenav-mini-icon text-xs"> V </span>
                                                <span class="sidenav-normal"> VR Info </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/crm">
                                    <span class="sidenav-mini-icon"> C </span>
                                    <span class="sidenav-normal"> CRM </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item mt-3">
                    <h6 class="ps-4 me-4 text-uppercase text-xs font-weight-bolder opacity-6">PAGES</h6>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#pagesExamples" class="nav-link active" aria-controls="pagesExamples"
                        role="button" aria-expanded="false">
                        <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                            <i class="ni ni-ungroup text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text me-1">Pages</span>
                    </a>
                    <div class="collapse  show " id="pagesExamples">
                        <ul class="nav ms-4">
                            <li class="nav-item ">
                                <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false"
                                    href="#profileExample">
                                    <span class="sidenav-mini-icon"> P </span>
                                    <span class="sidenav-normal"> Profile <b class="caret"></b></span>
                                </a>
                                <div class="collapse " id="profileExample">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link " href="/pages/profile/overview">
                                                <span class="sidenav-mini-icon text-xs"> P </span>
                                                <span class="sidenav-normal"> Profile Overview </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="/pages/profile/teams">
                                                <span class="sidenav-mini-icon text-xs"> T </span>
                                                <span class="sidenav-normal"> Teams </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="/pages/profile/projects">
                                                <span class="sidenav-mini-icon text-xs"> A </span>
                                                <span class="sidenav-normal"> All Projects </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false"
                                    href="#usersExample">
                                    <span class="sidenav-mini-icon"> U </span>
                                    <span class="sidenav-normal"> Users <b class="caret"></b></span>
                                </a>
                                <div class="collapse " id="usersExample">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link " href="/pages/user/reports">
                                                <span class="sidenav-mini-icon text-xs"> R </span>
                                                <span class="sidenav-normal"> Reports </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="/pages/user/new-user">
                                                <span class="sidenav-mini-icon text-xs"> N </span>
                                                <span class="sidenav-normal"> New User </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false"
                                    href="#accountExample">
                                    <span class="sidenav-mini-icon"> A </span>
                                    <span class="sidenav-normal"> Account <b class="caret"></b></span>
                                </a>
                                <div class="collapse " id="accountExample">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link " href="/pages/account/settings">
                                                <span class="sidenav-mini-icon text-xs"> S </span>
                                                <span class="sidenav-normal"> Settings </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="/pages/account/billing">
                                                <span class="sidenav-mini-icon text-xs"> B </span>
                                                <span class="sidenav-normal"> Billing </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="/pages/account/invoice">
                                                <span class="sidenav-mini-icon text-xs"> I </span>
                                                <span class="sidenav-normal"> Invoice </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="/pages/account/security">
                                                <span class="sidenav-mini-icon text-xs"> S </span>
                                                <span class="sidenav-normal"> Security </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false"
                                    href="#projectsExample">
                                    <span class="sidenav-mini-icon"> P </span>
                                    <span class="sidenav-normal"> Projects <b class="caret"></b></span>
                                </a>
                                <div class="collapse " id="projectsExample">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link " href="/pages/project/general">
                                                <span class="sidenav-mini-icon text-xs"> G </span>
                                                <span class="sidenav-normal"> General </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="/pages/project/timeline">
                                                <span class="sidenav-mini-icon text-xs"> T </span>
                                                <span class="sidenav-normal"> Timeline </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="/pages/project/new-project">
                                                <span class="sidenav-mini-icon text-xs"> N </span>
                                                <span class="sidenav-normal"> New Project </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/pages/pricing-page">
                                    <span class="sidenav-mini-icon"> P </span>
                                    <span class="sidenav-normal"> Pricing Page </span>
                                </a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link active" href="/pages/rtl">
                                    <span class="sidenav-mini-icon"> R </span>
                                    <span class="sidenav-normal"> RTL </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/pages/widgets">
                                    <span class="sidenav-mini-icon"> W </span>
                                    <span class="sidenav-normal"> Widgets </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/pages/charts">
                                    <span class="sidenav-mini-icon"> C </span>
                                    <span class="sidenav-normal"> Charts </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/pages/sweet-alerts">
                                    <span class="sidenav-mini-icon"> S </span>
                                    <span class="sidenav-normal"> Sweet Alerts </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/pages/notifications">
                                    <span class="sidenav-mini-icon"> N </span>
                                    <span class="sidenav-normal"> Notifications </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#applicationsExamples" class="nav-link "
                        aria-controls="applicationsExamples" role="button" aria-expanded="false">
                        <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                            <i class="ni ni-ui-04 text-info text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text me-1">Applications</span>
                    </a>
                    <div class="collapse " id="applicationsExamples">
                        <ul class="nav ms-4">
                            <li class="nav-item ">
                                <a class="nav-link " href="/applications/kanban">
                                    <span class="sidenav-mini-icon"> K </span>
                                    <span class="sidenav-normal"> Kanban </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/applications/wizard">
                                    <span class="sidenav-mini-icon"> W </span>
                                    <span class="sidenav-normal"> Wizard </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/applications/datatables">
                                    <span class="sidenav-mini-icon"> D </span>
                                    <span class="sidenav-normal"> DataTables </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/applications/calendar">
                                    <span class="sidenav-mini-icon"> C </span>
                                    <span class="sidenav-normal"> Calendar </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/applications/analytics">
                                    <span class="sidenav-mini-icon"> A </span>
                                    <span class="sidenav-normal"> Analytics </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#ecommerceExamples" class="nav-link "
                        aria-controls="ecommerceExamples" role="button" aria-expanded="false">
                        <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                            <i class="ni ni-archive-2 text-success text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text me-1">Ecommerce</span>
                    </a>
                    <div class="collapse " id="ecommerceExamples">
                        <ul class="nav ms-4">
                            <li class="nav-item ">
                                <a class="nav-link " href="/ecommerce/overview-ecommerce">
                                    <span class="sidenav-mini-icon"> O </span>
                                    <span class="sidenav-normal"> Overview </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false"
                                    href="#productsExample">
                                    <span class="sidenav-mini-icon"> P </span>
                                    <span class="sidenav-normal"> Products <b class="caret"></b></span>
                                </a>
                                <div class="collapse " id="productsExample">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link "
                                                href="/ecommerce/products/new-product">
                                                <span class="sidenav-mini-icon text-xs"> N </span>
                                                <span class="sidenav-normal"> New Product </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link "
                                                href="/ecommerce/products/edit-product">
                                                <span class="sidenav-mini-icon text-xs"> E </span>
                                                <span class="sidenav-normal"> Edit Product </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link "
                                                href="/ecommerce/products/product-page">
                                                <span class="sidenav-mini-icon text-xs"> P </span>
                                                <span class="sidenav-normal"> Product Page </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link "
                                                href="/ecommerce/products/product-list">
                                                <span class="sidenav-mini-icon text-xs"> P </span>
                                                <span class="sidenav-normal"> Products List </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false"
                                    href="#ordersExample">
                                    <span class="sidenav-mini-icon"> O </span>
                                    <span class="sidenav-normal"> Orders <b class="caret"></b></span>
                                </a>
                                <div class="collapse " id="ordersExample">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link " href="/ecommerce/orders/order-list">
                                                <span class="sidenav-mini-icon text-xs"> O </span>
                                                <span class="sidenav-normal"> Order List </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="/ecommerce/orders/details">
                                                <span class="sidenav-mini-icon text-xs"> O </span>
                                                <span class="sidenav-normal"> Order Details </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/ecommerce/referral">
                                    <span class="sidenav-mini-icon"> R </span>
                                    <span class="sidenav-normal"> Referral </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#authExamples" class="nav-link " aria-controls="authExamples"
                        role="button" aria-expanded="false">
                        <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                            <i class="ni ni-single-copy-04 text-danger text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text me-1">Authentication</span>
                    </a>
                    <div class="collapse " id="authExamples">
                        <ul class="nav ms-4">
                            <li class="nav-item ">
                                <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false"
                                    href="#signinExample">
                                    <span class="sidenav-mini-icon"> S </span>
                                    <span class="sidenav-normal"> Sign In <b class="caret"></b></span>
                                </a>
                                <div class="collapse " id="signinExample">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link " href="/authentication/sign-in/signin-basic">
                                                <span class="sidenav-mini-icon text-xs"> B </span>
                                                <span class="sidenav-normal"> Basic </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="/authentication/sign-in/signin-cover">
                                                <span class="sidenav-mini-icon text-xs"> C </span>
                                                <span class="sidenav-normal"> Cover </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link "
                                                href="/authentication/sign-in/signin-illustration">
                                                <span class="sidenav-mini-icon text-xs"> I </span>
                                                <span class="sidenav-normal"> Illustration </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false"
                                    href="#signupExample">
                                    <span class="sidenav-mini-icon"> S </span>
                                    <span class="sidenav-normal"> Sign Up <b class="caret"></b></span>
                                </a>
                                <div class="collapse " id="signupExample">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link " href="/authentication/sign-up/signup-basic">
                                                <span class="sidenav-mini-icon text-xs"> B </span>
                                                <span class="sidenav-normal"> Basic </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="/authentication/sign-up/signup-cover">
                                                <span class="sidenav-mini-icon text-xs"> C </span>
                                                <span class="sidenav-normal"> Cover </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link "
                                                href="/authentication/sign-up/signup-illustration">
                                                <span class="sidenav-mini-icon text-xs"> I </span>
                                                <span class="sidenav-normal"> Illustration </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false"
                                    href="#resetExample">
                                    <span class="sidenav-mini-icon"> R </span>
                                    <span class="sidenav-normal"> Reset Password <b class="caret"></b></span>
                                </a>
                                <div class="collapse " id="resetExample">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link " href="/authentication/reset-password/reset-basic">
                                                <span class="sidenav-mini-icon text-xs"> B </span>
                                                <span class="sidenav-normal"> Basic </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="/authentication/reset-password/reset-cover">
                                                <span class="sidenav-mini-icon text-xs"> C </span>
                                                <span class="sidenav-normal"> Cover </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link "
                                                href="/authentication/reset-password/reset-illustration">
                                                <span class="sidenav-mini-icon text-xs"> I </span>
                                                <span class="sidenav-normal"> Illustration </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false"
                                    href="#lockExample">
                                    <span class="sidenav-mini-icon"> L </span>
                                    <span class="sidenav-normal"> Lock <b class="caret"></b></span>
                                </a>
                                <div class="collapse " id="lockExample">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link " href="/authentication/lock/lock-basic">
                                                <span class="sidenav-mini-icon text-xs"> B </span>
                                                <span class="sidenav-normal"> Basic </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="/authentication/lock/lock-cover">
                                                <span class="sidenav-mini-icon text-xs"> C </span>
                                                <span class="sidenav-normal"> Cover </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link "
                                                href="/authentication/lock/lock-illustration">
                                                <span class="sidenav-mini-icon text-xs"> I </span>
                                                <span class="sidenav-normal"> Illustration </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false"
                                    href="#StepExample">
                                    <span class="sidenav-mini-icon"> 2 </span>
                                    <span class="sidenav-normal"> 2-Step Verification <b
                                            class="caret"></b></span>
                                </a>
                                <div class="collapse " id="StepExample">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link "
                                                href="/authentication/verification/verification-basic">
                                                <span class="sidenav-mini-icon text-xs"> B </span>
                                                <span class="sidenav-normal"> Basic </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link "
                                                href="/authentication/verification/verification-cover">
                                                <span class="sidenav-mini-icon text-xs"> C </span>
                                                <span class="sidenav-normal"> Cover </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link "
                                                href="/authentication/verification/verification-illustration">
                                                <span class="sidenav-mini-icon text-xs"> I </span>
                                                <span class="sidenav-normal"> Illustration </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false"
                                    href="#errorExample">
                                    <span class="sidenav-mini-icon"> E </span>
                                    <span class="sidenav-normal"> Error <b class="caret"></b></span>
                                </a>
                                <div class="collapse " id="errorExample">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link " href="/authentication/errors/404">
                                                <span class="sidenav-mini-icon text-xs"> E </span>
                                                <span class="sidenav-normal"> Error 404 </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="/authentication/errors/500">
                                                <span class="sidenav-mini-icon text-xs"> E </span>
                                                <span class="sidenav-normal"> Error 500 </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <hr class="horizontal dark" />
                    <h6 class="ps-4 me-4 text-uppercase text-xs font-weight-bolder opacity-6">DOCS</h6>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#basicExamples" class="nav-link " aria-controls="basicExamples"
                        role="button" aria-expanded="false">
                        <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                            <i class="ni ni-spaceship text-dark text-sm"></i>
                        </div>
                        <span class="nav-link-text me-1">Basic</span>
                    </a>
                    <div class="collapse " id="basicExamples">
                        <ul class="nav ms-4">
                            <li class="nav-item ">
                                <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false"
                                    href="#gettingStartedExample">
                                    <span class="sidenav-mini-icon"> G </span>
                                    <span class="sidenav-normal"> Getting Started <b class="caret"></b></span>
                                </a>
                                <div class="collapse " id="gettingStartedExample">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link "
                                                href="https://www.creative-tim.com/learning-lab/bootstrap/quick-start/argon-dashboard"
                                                target="_blank">
                                                <span class="sidenav-mini-icon text-xs"> Q </span>
                                                <span class="sidenav-normal"> Quick Start </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link "
                                                href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard"
                                                target="_blank">
                                                <span class="sidenav-mini-icon text-xs"> L </span>
                                                <span class="sidenav-normal"> License </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link "
                                                href="https://www.creative-tim.com/learning-lab/bootstrap/overview/argon-dashboard"
                                                target="_blank">
                                                <span class="sidenav-mini-icon text-xs"> C </span>
                                                <span class="sidenav-normal"> Contents </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link "
                                                href="https://www.creative-tim.com/learning-lab/bootstrap/build-tools/argon-dashboard"
                                                target="_blank">
                                                <span class="sidenav-mini-icon text-xs"> B </span>
                                                <span class="sidenav-normal"> Build Tools </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false"
                                    href="#foundationExample">
                                    <span class="sidenav-mini-icon"> F </span>
                                    <span class="sidenav-normal"> Foundation <b class="caret"></b></span>
                                </a>
                                <div class="collapse " id="foundationExample">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link "
                                                href="https://www.creative-tim.com/learning-lab/bootstrap/colors/argon-dashboard"
                                                target="_blank">
                                                <span class="sidenav-mini-icon text-xs"> C </span>
                                                <span class="sidenav-normal"> Colors </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link "
                                                href="https://www.creative-tim.com/learning-lab/bootstrap/grid/argon-dashboard"
                                                target="_blank">
                                                <span class="sidenav-mini-icon text-xs"> G </span>
                                                <span class="sidenav-normal"> Grid </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link "
                                                href="https://www.creative-tim.com/learning-lab/bootstrap/typography/argon-dashboard"
                                                target="_blank">
                                                <span class="sidenav-mini-icon text-xs"> T </span>
                                                <span class="sidenav-normal"> Typography </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link "
                                                href="https://www.creative-tim.com/learning-lab/bootstrap/icons/argon-dashboard"
                                                target="_blank">
                                                <span class="sidenav-mini-icon text-xs"> I </span>
                                                <span class="sidenav-normal"> Icons </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#componentsExamples" class="nav-link "
                        aria-controls="componentsExamples" role="button" aria-expanded="false">
                        <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                            <i class="ni ni-app text-dark text-sm"></i>
                        </div>
                        <span class="nav-link-text me-1">Components</span>
                    </a>
                    <div class="collapse " id="componentsExamples">
                        <ul class="nav ms-4">
                            <li class="nav-item ">
                                <a class="nav-link "
                                    href="https://www.creative-tim.com/learning-lab/bootstrap/alerts/argon-dashboard"
                                    target="_blank">
                                    <span class="sidenav-mini-icon"> A </span>
                                    <span class="sidenav-normal"> Alerts </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link "
                                    href="https://www.creative-tim.com/learning-lab/bootstrap/badge/argon-dashboard"
                                    target="_blank">
                                    <span class="sidenav-mini-icon"> B </span>
                                    <span class="sidenav-normal"> Badge </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link "
                                    href="https://www.creative-tim.com/learning-lab/bootstrap/buttons/argon-dashboard"
                                    target="_blank">
                                    <span class="sidenav-mini-icon"> B </span>
                                    <span class="sidenav-normal"> Buttons </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link "
                                    href="https://www.creative-tim.com/learning-lab/bootstrap/cards/argon-dashboard"
                                    target="_blank">
                                    <span class="sidenav-mini-icon"> C </span>
                                    <span class="sidenav-normal"> Card </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link "
                                    href="https://www.creative-tim.com/learning-lab/bootstrap/carousel/argon-dashboard"
                                    target="_blank">
                                    <span class="sidenav-mini-icon"> C </span>
                                    <span class="sidenav-normal"> Carousel </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link "
                                    href="https://www.creative-tim.com/learning-lab/bootstrap/collapse/argon-dashboard"
                                    target="_blank">
                                    <span class="sidenav-mini-icon"> C </span>
                                    <span class="sidenav-normal"> Collapse </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link "
                                    href="https://www.creative-tim.com/learning-lab/bootstrap/dropdowns/argon-dashboard"
                                    target="_blank">
                                    <span class="sidenav-mini-icon"> D </span>
                                    <span class="sidenav-normal"> Dropdowns </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link "
                                    href="https://www.creative-tim.com/learning-lab/bootstrap/forms/argon-dashboard"
                                    target="_blank">
                                    <span class="sidenav-mini-icon"> F </span>
                                    <span class="sidenav-normal"> Forms </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link "
                                    href="https://www.creative-tim.com/learning-lab/bootstrap/modal/argon-dashboard"
                                    target="_blank">
                                    <span class="sidenav-mini-icon"> M </span>
                                    <span class="sidenav-normal"> Modal </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link "
                                    href="https://www.creative-tim.com/learning-lab/bootstrap/navs/argon-dashboard"
                                    target="_blank">
                                    <span class="sidenav-mini-icon"> N </span>
                                    <span class="sidenav-normal"> Navs </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link "
                                    href="https://www.creative-tim.com/learning-lab/bootstrap/navbar/argon-dashboard"
                                    target="_blank">
                                    <span class="sidenav-mini-icon"> N </span>
                                    <span class="sidenav-normal"> Navbar </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link "
                                    href="https://www.creative-tim.com/learning-lab/bootstrap/pagination/argon-dashboard"
                                    target="_blank">
                                    <span class="sidenav-mini-icon"> P </span>
                                    <span class="sidenav-normal"> Pagination </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link "
                                    href="https://www.creative-tim.com/learning-lab/bootstrap/popovers/argon-dashboard"
                                    target="_blank">
                                    <span class="sidenav-mini-icon"> P </span>
                                    <span class="sidenav-normal"> Popovers </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link "
                                    href="https://www.creative-tim.com/learning-lab/bootstrap/progress/argon-dashboard"
                                    target="_blank">
                                    <span class="sidenav-mini-icon"> P </span>
                                    <span class="sidenav-normal"> Progress </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link "
                                    href="https://www.creative-tim.com/learning-lab/bootstrap/spinners/argon-dashboard"
                                    target="_blank">
                                    <span class="sidenav-mini-icon"> S </span>
                                    <span class="sidenav-normal"> Spinners </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link "
                                    href="https://www.creative-tim.com/learning-lab/bootstrap/tables/argon-dashboard"
                                    target="_blank">
                                    <span class="sidenav-mini-icon"> T </span>
                                    <span class="sidenav-normal"> Tables </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link "
                                    href="https://www.creative-tim.com/learning-lab/bootstrap/tooltips/argon-dashboard"
                                    target="_blank">
                                    <span class="sidenav-mini-icon"> T </span>
                                    <span class="sidenav-normal"> Tooltips </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                        href="https://github.com/creativetimofficial/ct-argon-dashboard-pro/blob/main/CHANGELOG.md"
                        target="_blank">
                        <div
                            class="icon icon-shape icon-sm text-center ms-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-align-left-2 text-dark text-sm"></i>
                        </div>
                        <span class="nav-link-text me-1">Changelog</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="sidenav-footer mx-3 my-3">
            <div class="card card-plain shadow-none" id="sidenavCard">
                <img class="w-60 mx-auto" src="./assets/imgillustrations/icon-documentation.svg"
                    alt="sidebar_illustration">
                <div class="card-body text-center p-3 w-100 pt-0">
                    <div class="docs-info">
                        <h6 class="mb-0 text-center">تحتاج مساعدة?</h6>
                        <p class="text-xs font-weight-bold text-center mb-0">يرجى التحقق من مستنداتنا</p>
                    </div>
                </div>
            </div>
            <a href="https://www.creative-tim.com/learning-lab/bootstrap/overview/argon-dashboard" target="_blank"
                class="btn btn-dark btn-sm w-100 mb-3">توثيق</a>
            <a class="btn btn-primary btn-sm mb-0 w-100"
                href="https://www.creative-tim.com/product/argon-dashboard?ref=sidebarfree" type="button">التطور
                للاحترافية</a>
        </div>
    </aside>
    <main class="main-content position-relative border-radius-lg overflow-hidden">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg  px-0 mx-4 shadow-none border-radius-xl z-index-sticky "
            id="navbarBlur" data-scroll="false">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 ">
                        <li class="breadcrumb-item text-sm text-white ps-2"><a class="opacity-5 text-white"
                                href="javascript:;">لوحات القيادة</a></li>
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">RTL</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0 text-white">RTL</h6>
                </nav>
                <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none me-3">
                    <a href="javascript:;" class="nav-link p-0">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line bg-white"></i>
                            <i class="sidenav-toggler-line bg-white"></i>
                            <i class="sidenav-toggler-line bg-white"></i>
                        </div>
                    </a>
                </div>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 px-0" id="navbar">
                    <div class="me-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group">
                            <span class="input-group-text text-body"><i class="fas fa-search"
                                    aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="أكتب هنا...">
                        </div>
                    </div>
                    <ul class="navbar-nav ms-0 justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="../../pages/authentication/signin/illustration.html"
                                class="nav-link text-white font-weight-bold px-0" target="_blank">
                                <i class="fa fa-user ms-sm-1 "></i>
                                <span class="d-sm-inline d-none">يسجل دخول</span>
                            </a>
                        </li>
                        <li class="nav-item d-xl-none pe-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0">
                                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown ps-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell cursor-pointer"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4"
                                aria-labelledby="dropdownMenuButton">
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="./assets/img/team-2.jpg" class="avatar avatar-sm  ms-3 "
                                                    alt="user image">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New message</span> from Laur
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    13 minutes ago
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="./assets/img/small-logos/logo-spotify.svg"
                                                    class="avatar avatar-sm bg-gradient-dark  ms-3 " alt="logo spotify">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New album</span> by Travis Scott
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    1 day
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="avatar avatar-sm bg-gradient-secondary  ms-3  my-auto">
                                                <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>credit-card</title>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF"
                                                            fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(453.000000, 454.000000)">
                                                                    <path class="color-background"
                                                                        d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                        opacity="0.593633743"></path>
                                                                    <path class="color-background"
                                                                        d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    Payment successfully completed
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    2 days
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card bg-gradient-dark">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-white text-sm mb-0 opacity-7">صحة البطارية</p>
                                        <h5 class="text-white font-weight-bolder mb-0">
                                            99 %
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-start">
                                    <div class="icon icon-shape bg-white shadow text-center border-radius-md">
                                        <i class="ni ni-controller text-dark text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-gradient-dark mt-4">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-white text-sm mb-0 opacity-7">طبقة صوت الموسيقا</p>
                                        <h5 class="text-white font-weight-bolder mb-0">
                                            15/100
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-start">
                                    <div class="icon icon-shape bg-white shadow text-center border-radius-md">
                                        <i class="ni ni-note-03 text-dark text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                    <div class="card overflow-hidden">
                        <div class="card-header p-3">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">دخل</p>
                            <h5 class="font-weight-bolder mb-0">
                                $130,832
                                <span class="text-success text-sm font-weight-bolder">+90%</span>
                            </h5>
                        </div>
                        <div class="card-body p-0">
                            <div class="chart">
                                <canvas id="chart-widgets-2" class="chart-canvas" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 mt-4 mt-lg-0">
                    <div class="card overflow-hidden">
                        <div class="card-header p-3 pb-0">
                            <div class="d-flex align-items-center">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="ni ni-calendar-grid-58 text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                                <div class="me-3">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">مهام</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        480
                                    </h5>
                                </div>
                                <div class="progress-wrapper me-auto w-25">
                                    <div class="progress-info">
                                        <div class="progress-percentage">
                                            <span class="text-xs font-weight-bold">60%</span>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-gradient-primary w-60" role="progressbar"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body mt-3 p-0">
                            <div class="chart">
                                <canvas id="chart-line-widgets" class="chart-canvas" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card">
                        <div class="card-header p-3 pb-0">
                            <h6 class="mb-0">الأحداث القادمة</h6>
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">انضم</p>
                        </div>
                        <div class="card-body border-radius-lg p-3">
                            <div class="d-flex">
                                <div>
                                    <div
                                        class="icon icon-shape bg-info-soft shadow text-center border-radius-md shadow-none">
                                        <i class="ni ni-money-coins text-lg text-info text-gradient opacity-10"
                                            aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="me-3">
                                    <div class="numbers">
                                        <h6 class="mb-1 text-dark text-sm">أسبوع الإنترنت</h6>
                                        <span class="text-sm">01 يونيو 2021, ي 12:30 PM</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mt-4">
                                <div>
                                    <div
                                        class="icon icon-shape bg-primary-soft shadow text-center border-radius-md shadow-none">
                                        <i class="ni ni-bell-55 text-lg text-primary text-gradient opacity-10"
                                            aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="me-3">
                                    <div class="numbers">
                                        <h6 class="mb-1 text-dark text-sm">لقاء مع ماري</h6>
                                        <span class="text-sm">24 مايو 2021, ي 10:00 PM</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mt-4 mt-md-0">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header mx-4 p-3 text-center">
                                    <div
                                        class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                                        <i class="fas fa-landmark opacity-10"></i>
                                    </div>
                                </div>
                                <div class="card-body pt-0 p-3 text-center">
                                    <h6 class="text-center mb-0">مرتب</h6>
                                    <span class="text-xs">تنتمي التفاعلية</span>
                                    <hr class="horizontal dark my-3">
                                    <h5 class="mb-0">+$2000</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-4">
                            <div class="card">
                                <div class="card-header mx-4 p-3 text-center">
                                    <div
                                        class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                                        <i class="fab fa-paypal opacity-10"></i>
                                    </div>
                                </div>
                                <div class="card-body pt-0 p-3 text-center">
                                    <h6 class="text-center mb-0">باي بال</h6>
                                    <span class="text-xs">دفع لحسابهم الخاص</span>
                                    <hr class="horizontal dark my-3">
                                    <h5 class="mb-0">$455.00</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mt-4 mt-lg-0">
                    <div class="card bg-transparent shadow-xl">
                        <div class="overflow-hidden position-relative border-radius-xl"
                            style="background-image: url('https://images.unsplash.com/photo-1635656508650-e18aa07cdd13?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80');">
                            <span class="mask bg-gradient-dark"></span>
                            <div class="card-body position-relative z-index-1 p-3">
                                <i class="fas fa-wifi text-white p-2"></i>
                                <h5 class="text-white mt-4 mb-5 pb-2">
                                    4562&nbsp;&nbsp;&nbsp;1122&nbsp;&nbsp;&nbsp;4594&nbsp;&nbsp;&nbsp;7852</h5>
                                <div class="d-flex">
                                    <div class="d-flex">
                                        <div class="ms-4">
                                            <p class="text-white text-sm opacity-8 mb-0">حامل البطاقة</p>
                                            <h6 class="text-white mb-0">جاك بيترسون</h6>
                                        </div>
                                        <div>
                                            <p class="text-white text-sm opacity-8 mb-0">نتهي</p>
                                            <h6 class="text-white mb-0">11/22</h6>
                                        </div>
                                    </div>
                                    <div class="me-auto w-20 d-flex align-items-end justify-content-end">
                                        <img class="w-60 mt-2" src="./assets/img/logos/mastercard.png" alt="logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card h-100">
                        <div class="card-header pb-0">
                            <div class="d-flex">
                                <p>جسم كامل</p>
                                <div class="me-auto">
                                    <span class="badge badge-primary">معتدل</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <p class="mb-0">ما يهم هو الأشخاص الذين أوقدوه. والناس الذين يشبهونهم مستاءون
                                منه.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-12 mt-4 mt-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="mb-0">على</p>
                                <div class="form-check form-switch me-auto">
                                    <input class="form-check-input me-0" type="checkbox" checked
                                        id="flexSwitchCheckDefault">
                                </div>
                            </div>
                            <img class="img-fluid pt-3 pb-2" src="./assets/img/small-logos/icon-bulb.svg"
                                alt="logo image">
                            <p class="mb-0">درجة حرارة</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-lg-0">
                    <div class="card overflow-hidden">
                        <div class="card-header p-3 pb-0">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">سعرات حراريه</p>
                            <h5 class="font-weight-bolder mb-0">
                                97
                                <span class="text-success text-sm font-weight-bolder">+5%</span>
                            </h5>
                        </div>
                        <div class="card-body p-0">
                            <div class="chart">
                                <canvas id="chart-widgets-1" class="chart-canvas" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-12 mt-4 mt-lg-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center">
                                <i class="ni ni-curved-next opacity-10" aria-hidden="true"></i>
                            </div>
                            <h5 class="mt-3 mb-0">754 <span class="text-secondary text-sm">م</span></h5>
                            <p class="mb-0">مدينة نيويورك</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-12 mt-4 mt-lg-0">
                    <div class="card">
                        <div class="card-body">
                            <p>خطوات</p>
                            <h3>11.4ك</h3>
                            <span class="badge badge-success">+4.3%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-5">
                    <div class="card widget-calendar h-100">
                        <!-- Card header -->
                        <div class="card-header p-3 pb-0">
                            <h6 class="mb-0">تقويم</h6>
                            <div class="d-flex">
                                <div class="p text-sm font-weight-bold mb-0 widget-calendar-day"></div>
                                <span>,&nbsp;</span>
                                <div class="p text-sm font-weight-bold mb-1 widget-calendar-year"></div>
                            </div>
                            <hr class="horizontal dark mb-0">
                        </div>
                        <!-- Card body -->
                        <div class="card-body p-3">
                            <div data-toggle="widget-calendar"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 mt-4 mt-lg-0">
                    <div class="card">
                        <div class="card-header pb-0 p-3">
                            <h6 class="mb-0">فئات</h6>
                        </div>
                        <div class="card-body p-3">
                            <ul class="list-group pe-0">
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between pe-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <div class="icon icon-shape icon-sm ms-3 bg-gradient-dark shadow text-center">
                                            <svg width="12px" height="12px" viewBox="0 0 40 40" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" class="mt-1">
                                                <title>spaceship</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF"
                                                        fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(4.000000, 301.000000)">
                                                                <path
                                                                    d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z">
                                                                </path>
                                                                <path
                                                                    d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z">
                                                                </path>
                                                                <path
                                                                    d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z"
                                                                    opacity="0.598539807"></path>
                                                                <path
                                                                    d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z"
                                                                    opacity="0.598539807"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">الأجهزة</h6>
                                            <span class="text-xs">250 في المخزن, <span
                                                    class="font-weight-bold">346+ تم البيع</span></span>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <button
                                            class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                                class="ni ni-bold-right" aria-hidden="true"></i></button>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between pe-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <div class="icon icon-shape icon-sm ms-3 bg-gradient-dark shadow text-center">
                                            <svg width="12px" height="12px" viewBox="0 0 40 40" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" class="mt-1">
                                                <title>settings</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF"
                                                        fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(304.000000, 151.000000)">
                                                                <polygon opacity="0.596981957"
                                                                    points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667">
                                                                </polygon>
                                                                <path
                                                                    d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"
                                                                    opacity="0.596981957"></path>
                                                                <path
                                                                    d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">تذاكر</h6>
                                            <span class="text-xs">123 مغلق, <span class="font-weight-bold">15
                                                    افتح</span></span>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <button
                                            class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                                class="ni ni-bold-right" aria-hidden="true"></i></button>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between pe-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <div class="icon icon-shape icon-sm ms-3 bg-gradient-dark shadow text-center">
                                            <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" class="mt-1">
                                                <title>box-3d-50</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF"
                                                        fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(603.000000, 0.000000)">
                                                                <path
                                                                    d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z">
                                                                </path>
                                                                <path
                                                                    d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z"
                                                                    opacity="0.7"></path>
                                                                <path
                                                                    d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z"
                                                                    opacity="0.7"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">سجلات الخطأ</h6>
                                            <span class="text-xs">1 is نشيط, <span class="font-weight-bold">40
                                                    مغلق</span></span>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <button
                                            class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                                class="ni ni-bold-right" aria-hidden="true"></i></button>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between pe-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <div class="icon icon-shape icon-sm ms-3 bg-gradient-dark shadow text-center">
                                            <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" class="mt-1">
                                                <title>customer-support</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF"
                                                        fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(1.000000, 0.000000)">
                                                                <path class="color-background"
                                                                    d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"
                                                                    opacity="0.59858631"></path>
                                                                <path class="color-foreground"
                                                                    d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z">
                                                                </path>
                                                                <path class="color-foreground"
                                                                    d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">المستخدمين السعداء</h6>
                                            <span class="text-xs font-weight-bold">+ 430</span>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <button
                                            class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                                class="ni ni-bold-right" aria-hidden="true"></i></button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card card-background card-background-mask-dark align-items-start mt-4">
                        <div class="cursor-pointer">
                            <div class="full-background"
                                style="background-image: url('https://images.unsplash.com/photo-1633886036701-c25cbd528ee0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=80')">
                            </div>
                            <div class="card-body">
                                <h5 class="text-white mb-0">نوع من البلوز</h5>
                                <p class="text-white text-sm">ديفتونز</p>
                                <div class="d-flex mt-5">
                                    <button class="btn btn-outline-white rounded-circle p-2 mb-0" type="button">
                                        <i class="fas fa-forward p-2"></i>
                                    </button>
                                    <button class="btn btn-outline-white rounded-circle p-2 mx-2 mb-0" type="button">
                                        <i class="fas fa-play p-2"></i>
                                    </button>
                                    <button class="btn btn-outline-white rounded-circle p-2 mb-0" type="button">
                                        <i class="fas fa-backward p-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mt-4 mt-lg-0">
                    <div class="card h-100">
                        <div class="card-header pb-0">
                            <h6>نظرة عامة على الطلبات</h6>
                            <p class="text-sm">
                                <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
                                <span class="font-weight-bold">24%</span> هذا الشهر
                            </p>
                        </div>
                        <div class="card-body p-3">
                            <div class="timeline timeline-one-side">
                                <div class="timeline-block mb-3">
                                    <span class="timeline-step">
                                        <i class="ni ni-bell-55 text-success text-gradient"></i>
                                    </span>
                                    <div class="timeline-content">
                                        <h6 class="text-dark text-sm font-weight-bold mb-0">$2400, تغييرات في التصميم
                                        </h6>
                                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 ديسمبر 7:20
                                            مساءً</p>
                                    </div>
                                </div>
                                <div class="timeline-block mb-3">
                                    <span class="timeline-step">
                                        <i class="ni ni-html5 text-danger text-gradient"></i>
                                    </span>
                                    <div class="timeline-content">
                                        <h6 class="text-dark text-sm font-weight-bold mb-0">طلب جديد # 1832412</h6>
                                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 ديسمبر 11 م</p>
                                    </div>
                                </div>
                                <div class="timeline-block mb-3">
                                    <span class="timeline-step">
                                        <i class="ni ni-cart text-info text-gradient"></i>
                                    </span>
                                    <div class="timeline-content">
                                        <h6 class="text-dark text-sm font-weight-bold mb-0">مدفوعات الخادم لشهر أبريل
                                        </h6>
                                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 ديسمبر 9:34
                                            مساءً</p>
                                    </div>
                                </div>
                                <div class="timeline-block mb-3">
                                    <span class="timeline-step">
                                        <i class="ni ni-credit-card text-warning text-gradient"></i>
                                    </span>
                                    <div class="timeline-content">
                                        <h6 class="text-dark text-sm font-weight-bold mb-0">تمت إضافة بطاقة جديدة للأمر
                                            رقم 4395133</h6>
                                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">20 ديسمبر 2:20
                                            صباحًا</p>
                                    </div>
                                </div>
                                <div class="timeline-block mb-3">
                                    <span class="timeline-step">
                                        <i class="ni ni-key-25 text-primary text-gradient"></i>
                                    </span>
                                    <div class="timeline-content">
                                        <h6 class="text-dark text-sm font-weight-bold mb-0">فتح الحزم من أجل التطوير
                                        </h6>
                                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">18 ديسمبر ، 4:54
                                            صباحًا</p>
                                    </div>
                                </div>
                                <div class="timeline-block">
                                    <span class="timeline-step">
                                        <i class="ni ni-money-coins text-dark text-gradient"></i>
                                    </span>
                                    <div class="timeline-content">
                                        <h6 class="text-dark text-sm font-weight-bold mb-0">طلب جديد # 9583120</h6>
                                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">17 ديسمبر</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer pt-3  ">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6 mb-lg-0 mb-4">
                            <div class="copyright text-center text-sm text-muted text-lg-end">
                                ©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>,
                                made with <i class="fa fa-heart"></i> by
                                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative
                                    Tim</a>
                                for a better web.
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com" class="nav-link text-muted"
                                        target="_blank">Creative Tim</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted"
                                        target="_blank">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/blog" class="nav-link text-muted"
                                        target="_blank">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted"
                                        target="_blank">License</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </main>
    <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
            <i class="fa fa-cog py-2"> </i>
        </a>
        <div class="card shadow-lg">
            <div class="card-header pb-0 pt-3 bg-transparent ">
                <div class="float-end">
                    <h5 class="mt-3 mb-0">Argon Configurator</h5>
                    <p>See our dashboard options.</p>
                </div>
                <div class="float-start mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr class="horizontal dark my-1">
            <div class="card-body pt-sm-3 pt-0 overflow-auto">
                <!-- Sidebar Backgrounds -->
                <div>
                    <h6 class="mb-0">Sidebar Colors</h6>
                </div>
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors my-2 text-end">
                        <span class="badge filter bg-gradient-primary active" data-color="primary"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-success" data-color="success"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-warning" data-color="warning"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-danger" data-color="danger"
                            onclick="sidebarColor(this)"></span>
                    </div>
                </a>
                <!-- Sidenav Type -->
                <div class="mt-3">
                    <h6 class="mb-0">Sidenav Type</h6>
                    <p class="text-sm">Choose between 2 different sidenav types.</p>
                </div>
                <div class="d-flex">
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2 active ms-2" data-class="bg-white"
                        onclick="sidebarType(this)">White</button>
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default"
                        onclick="sidebarType(this)">Dark</button>
                </div>
                <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
                <!-- Navbar Fixed -->
                <div class="d-flex my-3">
                    <h6 class="mb-0">Navbar Fixed</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 float-end me-auto" type="checkbox" id="navbarFixed"
                            onclick="navbarFixed(this)">
                    </div>
                </div>
                <hr class="horizontal dark mb-1">
                <div class="d-flex my-4">
                    <h6 class="mb-0">Sidenav Mini</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 float-end me-auto" type="checkbox" id="navbarMinimize"
                            onclick="navbarMinimize(this)">
                    </div>
                </div>
                <hr class="horizontal dark my-sm-4">
                <div class="mt-2 mb-5 d-flex">
                    <h6 class="mb-0">Light / Dark</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 float-end me-auto" type="checkbox" id="dark-version"
                            onclick="darkMode(this)">
                    </div>
                </div>
                <a class="btn btn-primary w-100" href="https://www.creative-tim.com/product/argon-dashboard-pro-laravel">Buy
                    now</a>
                <a class="btn btn-dark w-100" href="https://www.creative-tim.com/product/argon-dashboard">Free demo</a>
                <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/argon-dashboard-pro">Free
                    demo</a>
                <a class="btn btn-outline-dark w-100"
                    href="https://www.creative-tim.com/learning-lab/bootstrap/overview/argon-dashboard">View
                    documentation</a>
                <div class="w-100 text-center">
                    <a class="github-button" href="https://github.com/creativetimofficial/ct-argon-dashboard-pro"
                        data-icon="octicon-star" data-size="large" data-show-count="true"
                        aria-label="Star creativetimofficial/argon-dashboard on GitHub">Star</a>
                    <h6 class="mt-3">Thank you for sharing!</h6>
                    <a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20PRO%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard-pro"
                        class="btn btn-dark mb-0 me-2" target="_blank">
                        <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard-pro"
                        class="btn btn-dark mb-0 me-2" target="_blank">
                        <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
                    </a>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script src="./assets/js/plugins/fullcalendar.min.js"></script>
        <script src="./assets/js/plugins/chartjs.min.js"></script>
        <script>
            var ctx1 = document.getElementById("chart-widgets-1").getContext("2d");

            var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

            gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.02)');
            gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
            gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

            var ctx2 = document.getElementById("chart-widgets-2").getContext("2d");

            var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

            gradientStroke2.addColorStop(1, 'rgba(37,47,64,0.05)');
            gradientStroke2.addColorStop(0.2, 'rgba(37,47,64,0.0)');
            gradientStroke2.addColorStop(0, 'rgba(37,47,64,0)'); //purple colors

            new Chart(ctx1, {
                type: "line",
                data: {
                    labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [{
                        label: "Calories",
                        tension: 0.5,
                        borderWidth: 0,
                        pointRadius: 0,
                        borderColor: "#252f40",
                        borderWidth: 2,
                        backgroundColor: gradientStroke2,
                        data: [50, 45, 60, 60, 80, 65, 90, 80, 100],
                        maxBarThickness: 6,
                        fill: true
                    }],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false,
                        }
                    },
                    interaction: {
                        intersect: false,
                        mode: 'index',
                    },
                    scales: {
                        y: {
                            grid: {
                                drawBorder: false,
                                display: false,
                                drawOnChartArea: false,
                                drawTicks: false,
                            },
                            ticks: {
                                display: false
                            }
                        },
                        x: {
                            grid: {
                                drawBorder: false,
                                display: false,
                                drawOnChartArea: false,
                                drawTicks: false,
                            },
                            ticks: {
                                display: false
                            }
                        },
                    },
                },
            });

            new Chart(ctx2, {
                type: "line",
                data: {
                    labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [{
                        label: "Income",
                        tension: 0.5,
                        borderWidth: 0,
                        pointRadius: 0,
                        borderColor: "#252f40",
                        borderWidth: 2,
                        backgroundColor: gradientStroke2,
                        data: [50, 45, 60, 60, 80, 65, 90, 80, 100],
                        maxBarThickness: 6,
                        fill: true
                    }],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false,
                        }
                    },
                    interaction: {
                        intersect: false,
                        mode: 'index',
                    },
                    scales: {
                        y: {
                            grid: {
                                drawBorder: false,
                                display: false,
                                drawOnChartArea: false,
                                drawTicks: false,
                            },
                            ticks: {
                                display: false
                            }
                        },
                        x: {
                            grid: {
                                drawBorder: false,
                                display: false,
                                drawOnChartArea: false,
                                drawTicks: false,
                            },
                            ticks: {
                                display: false
                            }
                        },
                    },
                },
            });

            var ctx3 = document.getElementById("chart-line-widgets").getContext("2d");

            var gradientStroke3 = ctx3.createLinearGradient(0, 230, 0, 50);


            gradientStroke1.addColorStop(1, 'rgba(251, 99, 64, 0.2)');
            gradientStroke1.addColorStop(0.2, 'rgba(251, 99, 64, 0.0)');
            gradientStroke1.addColorStop(0, 'rgba(251, 99, 64, 0)');

            new Chart(ctx3, {
                type: "line",
                data: {
                    labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [{
                        label: "Tasks",
                        tension: 0.3,
                        pointRadius: 2,
                        pointBackgroundColor: "#5e72e4",
                        borderColor: "#fb6340",
                        borderWidth: 2,
                        backgroundColor: gradientStroke3,
                        data: [40, 45, 42, 41, 40, 43, 40, 42, 39],
                        maxBarThickness: 6,
                        fill: true
                    }],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false,
                        }
                    },
                    interaction: {
                        intersect: false,
                        mode: 'index',
                    },
                    scales: {
                        y: {
                            grid: {
                                drawBorder: false,
                                display: false,
                                drawOnChartArea: false,
                                drawTicks: false,
                            },
                            ticks: {
                                display: false
                            }
                        },
                        x: {
                            grid: {
                                drawBorder: false,
                                display: false,
                                drawOnChartArea: false,
                                drawTicks: false,
                            },
                            ticks: {
                                color: '#252f40',
                                padding: 10
                            }
                        },
                    },
                },
            });
        </script>
        <script src="../../assets/js/plugins/choices.min.js"></script>
    @endpush
