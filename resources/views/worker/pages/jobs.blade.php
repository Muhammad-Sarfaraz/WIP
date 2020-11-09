@extends('worker/layout/master')

@section('Title')
    
@endsection

@section('content')

<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->

    <br>
    <!--end::Subheader-->

<div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
    <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-1">
            <!--begin::Heading-->
            <div class="d-flex flex-column">
                <!--begin::Title-->
                <h2 class="text-white font-weight-bold my-2 mr-5">Jobs</h2>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <div class="d-flex align-items-center font-weight-bold my-2">
                    <!--begin::Item-->
                    <a href="{{url('w/jobs')}}" class="opacity-75 hover-opacity-100">
                        <i class="flaticon2-shelter text-white icon-1x"></i>
                    </a>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                <a href="{{url('w/dashboard')}}" class="text-white text-hover-white opacity-75 hover-opacity-100">Dashboard</a>
                    <!--end::Item-->
                    <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                    <!--begin::Item-->
                <a href="{{url('w/jobs')}}" class="text-white text-hover-white opacity-75 hover-opacity-100">Jobs</a>
                    <!--end::Item-->
                </div>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Heading-->
        </div>

        <div class="bg-white rounded d-flex flex-grow-1 flex-sm-grow-0" style="
background: #ff000000;
">
            <!--begin::Form-->
            <form class="mb-1 py-0 form d-flex align-items-md-center flex-sm-row flex-column flex-grow-1 flex-sm-grow-0" action="project.html" method="post">
                <!--begin::Input-->
                <div class="d-flex align-items-center py-3 py-sm-0 px-sm-3">
                    <span class="svg-icon svg-icon-lg"><!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<rect x="0" y="0" width="24" height="24"></rect>
<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"></path>
</g>
</svg><!--end::Svg Icon--></span> <input placeholder="Job Title" class="form-control border-0 font-weight-bold pl-2" type="text">
                </div>
                <!--end::Input-->

                <!--begin::Input-->
                <span class="bullet bullet-ver h-25px d-none d-sm-flex mr-2"></span>
                <div class="d-flex align-items-center px-10 py-3 mb-0 py-sm-0 px-sm-3">
                    <span class="svg-icon svg-icon-lg"><!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<rect x="0" y="0" width="24" height="24"></rect>
<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
</g>
</svg><!--end::Svg Icon--></span> <input readonly="" data-offset="0,10" data-target="kt_searchbar_7_category-options" aria-expanded="false" aria-haspopup="true" data-toggle="dropdown" placeholder="Category" class="form-control border-0 font-weight-bold" type="text">
                    <div id="kt_searchbar_7_category-options" class="dropdown-menu dropdown-menu-sm" style="">
                        <div class="dropdown-item cursor-pointer">Graphics Design</div>
                        <div class="dropdown-item cursor-pointer">Logo Design</div>
                        <div class="dropdown-item cursor-pointer">T-shirt Design</div>

                        <div class="dropdown-item cursor-pointer">Cover Design</div>
                    </div>
                </div>
                <!--end::Input-->

                <!--begin::Input-->


                <!--end::Input-->

                <br>
                <button class="mr-5 btn btn-primary font-weight-bold mt-0 mt-sm-3 mb-sm-2 px-8" type="submit">Search</button>
            </form>
            <!--end::Form-->
        </div>
        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <!--begin::Button-->

            <!--end::Button-->
            <!--begin::Dropdown-->
            <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Quick actions">
                <a href="#" class="btn btn-white font-weight-bold py-3 px-6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Message</a>
                <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                    <!--begin::Navigation-->
                    <ul class="navi navi-hover py-5">
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon">
                                        <i class="flaticon2-drop"></i>
                                    </span>
                                <span class="navi-text">New Group</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon">
                                        <i class="flaticon2-list-3"></i>
                                    </span>
                                <span class="navi-text">Contacts</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon">
                                        <i class="flaticon2-rocket-1"></i>
                                    </span>
                                <span class="navi-text">Groups</span>
                                <span class="navi-link-badge">
                                        <span class="label label-light-primary label-inline font-weight-bold">new</span>
                                </span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon">
                                        <i class="flaticon2-bell-2"></i>
                                    </span>
                                <span class="navi-text">Calls</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon">
                                        <i class="flaticon2-gear"></i>
                                    </span>
                                <span class="navi-text">Settings</span>
                            </a>
                        </li>
                        <li class="navi-separator my-3"></li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon">
                                        <i class="flaticon2-magnifier-tool"></i>
                                    </span>
                                <span class="navi-text">Help</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon">
                                        <i class="flaticon2-bell-2"></i>
                                    </span>
                                <span class="navi-text">Privacy</span>
                                <span class="navi-link-badge">
                                        <span class="label label-light-danger label-rounded font-weight-bold">5</span>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <!--end::Navigation-->
                </div>
            </div>
            <!--end::Dropdown-->
        </div>
        <!--end::Toolbar-->
    </div>
</div>
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class=" container ">
                        <!--begin::Row-->
<div class="row">
<div class="col-xl-4">
    <!--begin::Card-->
    <div class="card card-custom gutter-b card-stretch">
        <!--begin::Body-->
        <div class="card-body">
            <!--begin::Info-->
            <div class="d-flex align-items-center">
                <!--begin::Pic-->
                <div class="flex-shrink-0 mr-4 symbol symbol-60 symbol-circle">
                <img src="{{asset('client/logo/3.png')}}" alt="image">
                </div>
                <!--end::Pic-->
                <!--begin::Info-->
                <div class="d-flex flex-column mr-auto">
                    <!--begin: Title-->
                    <div class="d-flex flex-column mr-auto">
                       <a href="#" class="text-dark text-hover-primary font-size-h4 font-weight-bolder mb-1">
                           Nexa - Next generation SAAS
                       </a>
                       <span class="text-muted font-weight-bold">
                           Creates Limitless possibilities
                       </span>
                   </div>
                    <!--end::Title-->
                </div>
                <!--end::Info-->
                <!--begin::Toolbar-->
                <div class="card-toolbar mb-7">
                   <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
                       
                       <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                           <!--begin::Navigation-->
<ul class="navi navi-hover">
<li class="navi-header pb-1">
    <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-shopping-cart-1"></i></span>
        <span class="navi-text">Order</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-calendar-8"></i></span>
        <span class="navi-text">Event</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-graph-1"></i></span>
        <span class="navi-text">Report</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-rocket-1"></i></span>
        <span class="navi-text">Post</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-writing"></i></span>
        <span class="navi-text">File</span>
    </a>
</li>
</ul>
<!--end::Navigation-->
                       </div>
                   </div>
               </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Info-->
            <!--begin::Description-->
            <div class="mb-10 mt-5 font-weight-bold ">
                I distinguish three main text objectives.First, your objective could
                be merely to inform people.A second be to persuade people.
            </div>
            <!--end::Description-->

            <!--begin::Data-->
            <div class="d-flex mb-5">
                <div class="d-flex align-items-center mr-7">
                    <span class="font-weight-bold mr-4">
                        Start
                    </span>
                    <span class="btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text">11 Dec, 20</span>
                </div>
                <div class="d-flex align-items-center">
                    <span class="font-weight-bold mr-4">
                        Due
                    </span>
                    <span class="btn btn-light-danger btn-sm font-weight-bold btn-upper btn-text">15 Dec, 20</span>
                </div>
            </div>
            <!--end::Data-->
            <!--begin::Progress-->
            <div class="d-flex mb-5 align-items-cente">
                <span class="d-block font-weight-bold mr-5">Proposals</span>
                <div class="d-flex flex-row-fluid align-items-center">
                    <div class="progress progress-xs mt-2 mb-2 w-100">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 59%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="ml-3 font-weight-bolder">59%</span>
                </div>
            </div>
            <!--ebd::Progress-->
    <a href="#" class="btn btn-block btn-sm btn-light-info font-weight-bolder text-uppercase py-4">View</a>
        </div>
        <!--end::Body-->

        <!--begin::Footer-->
        <div class="card-footer d-flex align-items-center">
            <div class="d-flex">
                <div class="d-flex align-items-center mr-7">
                    <span class="svg-icon svg-icon-gray-500"><!--begin::Svg Icon | path:assets/media/svg/icons/Text/Bullet-list.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"></rect>
    <path d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z" fill="#000000"></path>
    <path d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z" fill="#000000" opacity="0.3"></path>
</g>
</svg><!--end::Svg Icon--></span>                        <a href="#" class="font-weight-bolder text-primary ml-2">1 Tasks</a>
                </div>
                <div class="d-flex align-items-center   mr-7">
                    <span class="svg-icon svg-icon-gray-500"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"></rect>
    <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000"></path>
    <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3"></path>
</g>
</svg><!--end::Svg Icon--></span>                        <a href="#" class="font-weight-bolder text-primary ml-2">8 Comments</a>
                </div>
            </div>
        </div>
        <!--end::Footer-->
    </div>
    <!--end:: Card-->
</div>

<div class="col-xl-4">
    <!--begin::Card-->
    <div class="card card-custom gutter-b card-stretch">
        <!--begin::Body-->
        <div class="card-body">
            <!--begin::Info-->
            <div class="d-flex align-items-center">
                <!--begin::Pic-->
                <div class="flex-shrink-0 mr-4 symbol symbol-60 symbol-circle">
                    <img src="{{asset('client/logo/1.png')}}" alt="image">
                </div>
                <!--end::Pic-->
                <!--begin::Info-->
                <div class="d-flex flex-column mr-auto">
                    <!--begin: Title-->
                    <div class="d-flex flex-column mr-auto">
                       <a href="#" class="text-dark text-hover-primary font-size-h4 font-weight-bolder mb-1">
                           B &amp; Q - Food Company
                       </a>
                       <span class="text-muted font-weight-bold">
                           Creates Limitless possibilities
                       </span>
                   </div>
                    <!--end::Title-->
                </div>
                <!--end::Info-->
                <!--begin::Toolbar-->
                <div class="card-toolbar mb-7">
                   <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
                       <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="ki ki-bold-more-hor"></i>
                       </a>
                       <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                           <!--begin::Navigation-->
<ul class="navi navi-hover">
<li class="navi-header pb-1">
    <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-shopping-cart-1"></i></span>
        <span class="navi-text">Order</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-calendar-8"></i></span>
        <span class="navi-text">Event</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-graph-1"></i></span>
        <span class="navi-text">Report</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-rocket-1"></i></span>
        <span class="navi-text">Post</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-writing"></i></span>
        <span class="navi-text">File</span>
    </a>
</li>
</ul>
<!--end::Navigation-->
                       </div>
                   </div>
               </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Info-->
            <!--begin::Description-->
            <div class="mb-10 mt-5 font-weight-bold ">
                I distinguish three main text objectives.First, your objective could
                be merely to inform people.
            </div>
            <!--end::Description-->

            <!--begin::Data-->
            <div class="d-flex mb-5">
                <div class="d-flex align-items-center mr-7">
                    <span class="font-weight-bold mr-4">
                        Start
                    </span>
                    <span class="btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text">12 Jan, 14</span>
                </div>
                <div class="d-flex align-items-center">
                    <span class="font-weight-bold mr-4">
                        Due
                    </span>
                    <span class="btn btn-light-danger btn-sm font-weight-bold btn-upper btn-text">17 Oct, 28</span>
                </div>
            </div>
            <!--end::Data-->
            <!--begin::Progress-->
            <div class="d-flex mb-5 align-items-cente">
                <span class="d-block font-weight-bold mr-5">Progress</span>
                <div class="d-flex flex-row-fluid align-items-center">
                    <div class="progress progress-xs mt-2 mb-2 w-100">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 81%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="ml-3 font-weight-bolder">81%</span>
                </div>
            </div>
            <!--ebd::Progress-->
        </div>
        <!--end::Body-->
        <!--begin::Footer-->
        <div class="card-footer d-flex align-items-sm-center flex-wrap flex-column flex-sm-row">
            <div class="d-flex">
                <div class="d-flex mr-7">
                    <span class="svg-icon svg-icon-gray-500"><!--begin::Svg Icon | path:assets/media/svg/icons/Text/Bullet-list.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"></rect>
    <path d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z" fill="#000000"></path>
    <path d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z" fill="#000000" opacity="0.3"></path>
</g>
</svg><!--end::Svg Icon--></span>						<a href="#" class="font-weight-boldest text-primary ml-2">72 Tasks</a>
                </div>
                <div class="d-flex mr-7">
                    <span class="svg-icon svg-icon-gray-500"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"></rect>
    <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000"></path>
    <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3"></path>
</g>
</svg><!--end::Svg Icon--></span>						<a href="#" class="font-weight-boldest text-primary ml-2">668 Comments</a>
                </div>
            </div>
        </div>
        <!--end::Footer-->
    </div>
    <!--end:: Card-->
</div>

<div class="col-xl-4">
    <!--begin::Card-->
    <div class="card card-custom gutter-b card-stretch">
        <!--begin::Body-->
        <div class="card-body">
            <!--begin::Info-->
            <div class="d-flex align-items-center">
                <!--begin::Pic-->
                <div class="flex-shrink-0 mr-4 symbol symbol-60 symbol-circle">
                    <img src="{{asset('client/logo/2.png')}}" alt="image">
                </div>
                <!--end::Pic-->
                <!--begin::Info-->
                <div class="d-flex flex-column mr-auto">
                    <!--begin: Title-->
                    <div class="d-flex flex-column mr-auto">
                       <a href="#" class="text-dark text-hover-primary font-size-h4 font-weight-bolder mb-1">
                           Ad Brand - Luxury Footwear
                       </a>
                       <span class="text-muted font-weight-bold">
                           Creates Limitless possibilities
                       </span>
                   </div>
                    <!--end::Title-->
                </div>
                <!--end::Info-->
                <!--begin::Toolbar-->
                <div class="card-toolbar mb-7">
                   <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
                       <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="ki ki-bold-more-hor"></i>
                       </a>
                       <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                           <!--begin::Navigation-->
<ul class="navi navi-hover">
<li class="navi-header pb-1">
    <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-shopping-cart-1"></i></span>
        <span class="navi-text">Order</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-calendar-8"></i></span>
        <span class="navi-text">Event</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-graph-1"></i></span>
        <span class="navi-text">Report</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-rocket-1"></i></span>
        <span class="navi-text">Post</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-writing"></i></span>
        <span class="navi-text">File</span>
    </a>
</li>
</ul>
<!--end::Navigation-->
                       </div>
                   </div>
               </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Info-->
            <!--begin::Description-->
            <div class="mb-10 mt-5 font-weight-bold ">
                I distinguish three main text objectives.First, your objective could
                be merely to inform people.
            </div>
            <!--end::Description-->

            <!--begin::Data-->
            <div class="d-flex mb-5">
                <div class="d-flex align-items-center mr-7">
                    <span class="font-weight-bold mr-4">
                        Start
                    </span>
                    <span class="btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text">22 Jan, 24</span>
                </div>
                <div class="d-flex align-items-center">
                    <span class="font-weight-bold mr-4">
                        Due
                    </span>
                    <span class="btn btn-light-danger btn-sm font-weight-bold btn-upper btn-text">12 Oct, 23</span>
                </div>
            </div>
            <!--end::Data-->
            <!--begin::Progress-->
            <div class="d-flex mb-5 align-items-cente">
                <span class="d-block font-weight-bold mr-5">Progress</span>
                <div class="d-flex flex-row-fluid align-items-center">
                    <div class="progress progress-xs mt-2 mb-2 w-100">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 78%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="ml-3 font-weight-bolder">78%</span>
                </div>
            </div>
            <!--ebd::Progress-->
        </div>
        <!--end::Body-->
        <!--begin::Footer-->
        <div class="card-footer d-flex align-items-sm-center flex-wrap flex-column flex-sm-row">
            <div class="d-flex">
                <div class="d-flex mr-7">
                    <span class="svg-icon svg-icon-gray-500"><!--begin::Svg Icon | path:assets/media/svg/icons/Text/Bullet-list.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"></rect>
    <path d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z" fill="#000000"></path>
    <path d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z" fill="#000000" opacity="0.3"></path>
</g>
</svg><!--end::Svg Icon--></span>						<a href="#" class="font-weight-boldest text-primary ml-2">34 Tasks</a>
                </div>
                <div class="d-flex mr-7">
                    <span class="svg-icon svg-icon-gray-500"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"></rect>
    <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000"></path>
    <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3"></path>
</g>
</svg><!--end::Svg Icon--></span>						<a href="#" class="font-weight-boldest text-primary ml-2">432 Comments</a>
                </div>
            </div>
        </div>
        <!--end::Footer-->
    </div>
    <!--end:: Card-->
</div>
</div>
<!--end::Row-->

<!--begin::Row-->
<div class="row">
<div class="col-xl-4">
    <!--begin::Card-->
    <div class="card card-custom gutter-b card-stretch">
        <!--begin::Body-->
        <div class="card-body">
            <!--begin::Info-->
            <div class="d-flex align-items-center">
                <!--begin::Pic-->
                <div class="flex-shrink-0 mr-4 symbol symbol-60 symbol-circle">
                    <img src="{{asset('client/logo/1.png')}}" alt="image">
                </div>
                <!--end::Pic-->
                <!--begin::Info-->
                <div class="d-flex flex-column mr-auto">
                    <!--begin: Title-->
                    <div class="d-flex flex-column mr-auto">
                       <a href="#" class="text-dark text-hover-primary font-size-h4 font-weight-bolder mb-1">
                           Air B &amp; B - Real Estate
                       </a>
                       <span class="text-muted font-weight-bold">
                           Creates Limitless possibilities
                       </span>
                   </div>
                    <!--end::Title-->
                </div>
                <!--end::Info-->
                <!--begin::Toolbar-->
                <div class="card-toolbar mb-7">
                   <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
                       <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="ki ki-bold-more-hor"></i>
                       </a>
                       <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                           <!--begin::Navigation-->
<ul class="navi navi-hover">
<li class="navi-header pb-1">
    <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-shopping-cart-1"></i></span>
        <span class="navi-text">Order</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-calendar-8"></i></span>
        <span class="navi-text">Event</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-graph-1"></i></span>
        <span class="navi-text">Report</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-rocket-1"></i></span>
        <span class="navi-text">Post</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-writing"></i></span>
        <span class="navi-text">File</span>
    </a>
</li>
</ul>
<!--end::Navigation-->
                       </div>
                   </div>
               </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Info-->
            <!--begin::Description-->
            <div class="mb-10 mt-5 font-weight-bold ">
                I distinguish three main text objectives.First, your objective could
                be merely to inform people.
            </div>
            <!--end::Description-->

            <!--begin::Data-->
            <div class="d-flex mb-5">
                <div class="d-flex align-items-center mr-7">
                    <span class="font-weight-bold mr-4">
                        Start
                    </span>
                    <span class="btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text">13 Jan, 14</span>
                </div>
                <div class="d-flex align-items-center">
                    <span class="font-weight-bold mr-4">
                        Due
                    </span>
                    <span class="btn btn-light-danger btn-sm font-weight-bold btn-upper btn-text">14 Oct, 25</span>
                </div>
            </div>
            <!--end::Data-->
            <!--begin::Progress-->
            <div class="d-flex mb-5 align-items-cente">
                <span class="d-block font-weight-bold mr-5">Progress</span>
                <div class="d-flex flex-row-fluid align-items-center">
                    <div class="progress progress-xs mt-2 mb-2 w-100">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="ml-3 font-weight-bolder">65%</span>
                </div>
            </div>
            <!--ebd::Progress-->
        </div>
        <!--end::Body-->
        <!--begin::Footer-->
        <div class="card-footer d-flex align-items-sm-center flex-wrap flex-column flex-sm-row">
            <div class="d-flex">
                <div class="d-flex mr-7">
                    <span class="svg-icon svg-icon-gray-500"><!--begin::Svg Icon | path:assets/media/svg/icons/Text/Bullet-list.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"></rect>
    <path d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z" fill="#000000"></path>
    <path d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z" fill="#000000" opacity="0.3"></path>
</g>
</svg><!--end::Svg Icon--></span>						<a href="#" class="font-weight-boldest text-primary ml-2">45 Tasks</a>
                </div>
                <div class="d-flex mr-7">
                    <span class="svg-icon svg-icon-gray-500"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"></rect>
    <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000"></path>
    <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3"></path>
</g>
</svg><!--end::Svg Icon--></span>						<a href="#" class="font-weight-boldest text-primary ml-2">342 Comments</a>
                </div>
            </div>
        </div>
        <!--end::Footer-->
    </div>
    <!--end:: Card-->
</div>

<div class="col-xl-4">
    <!--begin::Card-->
    <div class="card card-custom gutter-b card-stretch">
        <!--begin::Body-->
        <div class="card-body">
            <!--begin::Info-->
            <div class="d-flex align-items-center">
                <!--begin::Pic-->
                <div class="flex-shrink-0 mr-4 symbol symbol-60 symbol-circle">
                    <img src="{{asset('client/logo/3.png')}}" alt="image">
                </div>
                <!--end::Pic-->
                <!--begin::Info-->
                <div class="d-flex flex-column mr-auto">
                    <!--begin: Title-->
                    <div class="d-flex flex-column mr-auto">
                       <a href="#" class="text-dark text-hover-primary font-size-h4 font-weight-bolder mb-1">
                           B &amp; Q - Food Company
                       </a>
                       <span class="text-muted font-weight-bold">
                           Tasty food for everyone
                       </span>
                   </div>
                    <!--end::Title-->
                </div>
                <!--end::Info-->
                <!--begin::Toolbar-->
                <div class="card-toolbar mb-7">
                   <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
                       <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="ki ki-bold-more-hor"></i>
                       </a>
                       <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                           <!--begin::Navigation-->
<ul class="navi navi-hover">
<li class="navi-header pb-1">
    <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-shopping-cart-1"></i></span>
        <span class="navi-text">Order</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-calendar-8"></i></span>
        <span class="navi-text">Event</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-graph-1"></i></span>
        <span class="navi-text">Report</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-rocket-1"></i></span>
        <span class="navi-text">Post</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-writing"></i></span>
        <span class="navi-text">File</span>
    </a>
</li>
</ul>
<!--end::Navigation-->
                       </div>
                   </div>
               </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Info-->
            <!--begin::Description-->
            <div class="mb-10 mt-5 font-weight-bold ">
                I distinguish three main text objectives.First, your objective could
                be merely to inform people.
            </div>
            <!--end::Description-->

            <!--begin::Data-->
            <div class="d-flex mb-5">
                <div class="d-flex align-items-center mr-7">
                    <span class="font-weight-bold mr-4">
                        Start
                    </span>
                    <span class="btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text">23 Jan, 31</span>
                </div>
                <div class="d-flex align-items-center">
                    <span class="font-weight-bold mr-4">
                        Due
                    </span>
                    <span class="btn btn-light-danger btn-sm font-weight-bold btn-upper btn-text">15 Oct, 22</span>
                </div>
            </div>
            <!--end::Data-->
            <!--begin::Progress-->
            <div class="d-flex mb-5 align-items-cente">
                <span class="d-block font-weight-bold mr-5">Progress</span>
                <div class="d-flex flex-row-fluid align-items-center">
                    <div class="progress progress-xs mt-2 mb-2 w-100">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 74%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="ml-3 font-weight-bolder">74%</span>
                </div>
            </div>
            <!--ebd::Progress-->
        </div>
        <!--end::Body-->
        <!--begin::Footer-->
        <div class="card-footer d-flex align-items-sm-center flex-wrap flex-column flex-sm-row">
            <div class="d-flex">
                <div class="d-flex mr-7">
                    <span class="svg-icon svg-icon-gray-500"><!--begin::Svg Icon | path:assets/media/svg/icons/Text/Bullet-list.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"></rect>
    <path d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z" fill="#000000"></path>
    <path d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z" fill="#000000" opacity="0.3"></path>
</g>
</svg><!--end::Svg Icon--></span>						<a href="#" class="font-weight-boldest text-primary ml-2">123 Tasks</a>
                </div>
                <div class="d-flex mr-7">
                    <span class="svg-icon svg-icon-gray-500"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"></rect>
    <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000"></path>
    <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3"></path>
</g>
</svg><!--end::Svg Icon--></span>						<a href="#" class="font-weight-boldest text-primary ml-2">542 Comments</a>
                </div>
            </div>
        </div>
        <!--end::Footer-->
    </div>
    <!--end:: Card-->
</div>

<div class="col-xl-4">
    <!--begin::Card-->
    <div class="card card-custom gutter-b card-stretch">
        <!--begin::Body-->
        <div class="card-body">
            <!--begin::Info-->
            <div class="d-flex align-items-center">
                <!--begin::Pic-->
                <div class="flex-shrink-0 mr-4 symbol symbol-60 symbol-circle">
                    <img src="{{asset('client/logo/6.png')}}" alt="image">
                </div>
                <!--end::Pic-->
                <!--begin::Info-->
                <div class="d-flex flex-column mr-auto">
                    <!--begin: Title-->
                    <div class="d-flex flex-column mr-auto">
                       <a href="#" class="text-dark text-hover-primary font-size-h4 font-weight-bolder mb-1">
                           Nexa - Next generation
                       </a>
                       <span class="text-muted font-weight-bold">
                           Tasty food for everyone
                       </span>
                   </div>
                    <!--end::Title-->
                </div>
                <!--end::Info-->
                <!--begin::Toolbar-->
                <div class="card-toolbar mb-7">
                   <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
                       <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="ki ki-bold-more-hor"></i>
                       </a>
                       <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                           <!--begin::Navigation-->
<ul class="navi navi-hover">
<li class="navi-header pb-1">
    <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-shopping-cart-1"></i></span>
        <span class="navi-text">Order</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-calendar-8"></i></span>
        <span class="navi-text">Event</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-graph-1"></i></span>
        <span class="navi-text">Report</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-rocket-1"></i></span>
        <span class="navi-text">Post</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-writing"></i></span>
        <span class="navi-text">File</span>
    </a>
</li>
</ul>
<!--end::Navigation-->
                       </div>
                   </div>
               </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Info-->
            <!--begin::Description-->
            <div class="mb-10 mt-5 font-weight-bold ">
                I distinguish three main text objectives.First, your objective could
                be merely to inform people.
            </div>
            <!--end::Description-->

            <!--begin::Data-->
            <div class="d-flex mb-5">
                <div class="d-flex align-items-center mr-7">
                    <span class="font-weight-bold mr-4">
                        Start
                    </span>
                    <span class="btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text">13 Jan, 21</span>
                </div>
                <div class="d-flex align-items-center">
                    <span class="font-weight-bold mr-4">
                        Due
                    </span>
                    <span class="btn btn-light-danger btn-sm font-weight-bold btn-upper btn-text">25 Oct, 12</span>
                </div>
            </div>
            <!--end::Data-->
            <!--begin::Progress-->
            <div class="d-flex mb-5 align-items-cente">
                <span class="d-block font-weight-bold mr-5">Progress</span>
                <div class="d-flex flex-row-fluid align-items-center">
                    <div class="progress progress-xs mt-2 mb-2 w-100">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 84%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="ml-3 font-weight-bolder">84%</span>
                </div>
            </div>
            <!--ebd::Progress-->
        </div>
        <!--end::Body-->
        <!--begin::Footer-->
        <div class="card-footer d-flex align-items-sm-center flex-wrap flex-column flex-sm-row">
            <div class="d-flex">
                <div class="d-flex mr-7">
                    <span class="svg-icon svg-icon-gray-500"><!--begin::Svg Icon | path:assets/media/svg/icons/Text/Bullet-list.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"></rect>
    <path d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z" fill="#000000"></path>
    <path d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z" fill="#000000" opacity="0.3"></path>
</g>
</svg><!--end::Svg Icon--></span>						<a href="#" class="font-weight-boldest text-primary ml-2">43 Tasks</a>
                </div>
                <div class="d-flex mr-7">
                    <span class="svg-icon svg-icon-gray-500"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"></rect>
    <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000"></path>
    <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3"></path>
</g>
</svg><!--end::Svg Icon--></span>						<a href="#" class="font-weight-boldest text-primary ml-2">545 Comments</a>
                </div>
            </div>
        </div>
        <!--end::Footer-->
    </div>
    <!--end::Card-->
</div>
</div>
<!--end::Row-->

<!--begin::Row-->
<div class="row">
<div class="col-xl-4">
    <!--begin::Card-->
    <div class="card card-custom gutter-b card-stretch">
        <!--begin::Body-->
        <div class="card-body">
            <!--begin::Info-->
            <div class="d-flex align-items-center">
                <!--begin::Pic-->
                <div class="flex-shrink-0 mr-4 symbol symbol-60 symbol-circle">
                    <img src="assets/media/project-logos/7.png" alt="image">
                </div>
                <!--end::Pic-->
                <!--begin::Info-->
                <div class="d-flex flex-column mr-auto">
                    <!--begin: Title-->
                    <div class="d-flex flex-column mr-auto">
                       <a href="#" class="text-dark text-hover-primary font-size-h4 font-weight-bolder mb-1">
                           Nexa - Next generation
                       </a>
                       <span class="text-muted font-weight-bold">
                           Tasty food for everyone
                       </span>
                   </div>
                    <!--end::Title-->
                </div>
                <!--end::Info-->
                <!--begin::Toolbar-->
                <div class="card-toolbar mb-7">
                   <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
                       <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="ki ki-bold-more-hor"></i>
                       </a>
                       <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                           <!--begin::Navigation-->
<ul class="navi navi-hover">
<li class="navi-header pb-1">
    <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-shopping-cart-1"></i></span>
        <span class="navi-text">Order</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-calendar-8"></i></span>
        <span class="navi-text">Event</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-graph-1"></i></span>
        <span class="navi-text">Report</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-rocket-1"></i></span>
        <span class="navi-text">Post</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-writing"></i></span>
        <span class="navi-text">File</span>
    </a>
</li>
</ul>
<!--end::Navigation-->
                       </div>
                   </div>
               </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Info-->
            <!--begin::Description-->
            <div class="mb-10 mt-5 font-weight-bold ">
                I distinguish three main text objectives.First, your objective could
                be merely to inform people.
            </div>
            <!--end::Description-->

            <!--begin::Data-->
            <div class="d-flex mb-5">
                <div class="d-flex align-items-center mr-7">
                    <span class="font-weight-bold mr-4">
                        Start
                    </span>
                    <span class="btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text">13 Jan, 21</span>
                </div>
                <div class="d-flex align-items-center">
                    <span class="font-weight-bold mr-4">
                        Due
                    </span>
                    <span class="btn btn-light-danger btn-sm font-weight-bold btn-upper btn-text">25 Oct, 12</span>
                </div>
            </div>
            <!--end::Data-->
            <!--begin::Progress-->
            <div class="d-flex mb-5 align-items-cente">
                <span class="d-block font-weight-bold mr-5">Progress</span>
                <div class="d-flex flex-row-fluid align-items-center">
                    <div class="progress progress-xs mt-2 mb-2 w-100">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="ml-3 font-weight-bolder">25%</span>
                </div>
            </div>
            <!--ebd::Progress-->
        </div>
        <!--end::Body-->
        <!--begin::Footer-->
        <div class="card-footer d-flex align-items-sm-center flex-wrap flex-column flex-sm-row">
            <div class="d-flex">
                <div class="d-flex mr-7">
                    <span class="svg-icon svg-icon-gray-500"><!--begin::Svg Icon | path:assets/media/svg/icons/Text/Bullet-list.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"></rect>
    <path d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z" fill="#000000"></path>
    <path d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z" fill="#000000" opacity="0.3"></path>
</g>
</svg><!--end::Svg Icon--></span>						<a href="#" class="font-weight-boldest text-primary ml-2">74 Tasks</a>
                </div>
                <div class="d-flex mr-7">
                    <span class="svg-icon svg-icon-gray-500"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"></rect>
    <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000"></path>
    <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3"></path>
</g>
</svg><!--end::Svg Icon--></span>						<a href="#" class="font-weight-boldest text-primary ml-2">358 Comments</a>
                </div>
            </div>
        </div>
        <!--end::Footer-->
    </div>
    <!--end:: Card-->
</div>

<div class="col-xl-4">
    <!--begin::Card-->
    <div class="card card-custom gutter-b card-stretch">
        <!--begin::Body-->
        <div class="card-body">
            <!--begin::Info-->
            <div class="d-flex align-items-center">
                <!--begin::Pic-->
                <div class="flex-shrink-0 mr-4 symbol symbol-60 symbol-circle">
                    <img src="assets/media/project-logos/1.png" alt="image">
                </div>
                <!--end::Pic-->
                <!--begin::Info-->
                <div class="d-flex flex-column mr-auto">
                    <!--begin: Title-->
                    <div class="d-flex flex-column mr-auto">
                       <a href="#" class="text-dark text-hover-primary font-size-h4 font-weight-bolder mb-1">
                           Nexa - Next generation
                       </a>
                       <span class="text-muted font-weight-bold">
                           Tasty food for everyone
                       </span>
                   </div>
                    <!--end::Title-->
                </div>
                <!--end::Info-->
                <!--begin::Toolbar-->
                <div class="card-toolbar mb-7">
                   <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
                       <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="ki ki-bold-more-hor"></i>
                       </a>
                       <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                           <!--begin::Navigation-->
<ul class="navi navi-hover">
<li class="navi-header pb-1">
    <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-shopping-cart-1"></i></span>
        <span class="navi-text">Order</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-calendar-8"></i></span>
        <span class="navi-text">Event</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-graph-1"></i></span>
        <span class="navi-text">Report</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-rocket-1"></i></span>
        <span class="navi-text">Post</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-writing"></i></span>
        <span class="navi-text">File</span>
    </a>
</li>
</ul>
<!--end::Navigation-->
                       </div>
                   </div>
               </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Info-->
            <!--begin::Description-->
            <div class="mb-10 mt-5 font-weight-bold ">
                I distinguish three main text objectives.First, your objective could
                be merely to inform people.
            </div>
            <!--end::Description-->

            <!--begin::Data-->
            <div class="d-flex mb-5">
                <div class="d-flex align-items-center mr-7">
                    <span class="font-weight-bold mr-4">
                        Start
                    </span>
                    <span class="btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text">13 Jan, 21</span>
                </div>
                <div class="d-flex align-items-center">
                    <span class="font-weight-bold mr-4">
                        Due
                    </span>
                    <span class="btn btn-light-danger btn-sm font-weight-bold btn-upper btn-text">25 Oct, 12</span>
                </div>
            </div>
            <!--end::Data-->
            <!--begin::Progress-->
            <div class="d-flex mb-5 align-items-cente">
                <span class="d-block font-weight-bold mr-5">Progress</span>
                <div class="d-flex flex-row-fluid align-items-center">
                    <div class="progress progress-xs mt-2 mb-2 w-100">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 88%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="ml-3 font-weight-bolder">88%</span>
                </div>
            </div>
            <!--ebd::Progress-->
        </div>
        <!--end::Body-->
        <!--begin::Footer-->
        <div class="card-footer d-flex align-items-sm-center flex-wrap flex-column flex-sm-row">
            <div class="d-flex">
                <div class="d-flex mr-7">
                    <span class="svg-icon svg-icon-gray-500"><!--begin::Svg Icon | path:assets/media/svg/icons/Text/Bullet-list.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"></rect>
    <path d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z" fill="#000000"></path>
    <path d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z" fill="#000000" opacity="0.3"></path>
</g>
</svg><!--end::Svg Icon--></span>						<a href="#" class="font-weight-boldest text-primary ml-2">66 Tasks</a>
                </div>
                <div class="d-flex mr-7">
                    <span class="svg-icon svg-icon-gray-500"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"></rect>
    <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000"></path>
    <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3"></path>
</g>
</svg><!--end::Svg Icon--></span>						<a href="#" class="font-weight-boldest text-primary ml-2">852 Comments</a>
                </div>
            </div>
        </div>
        <!--end::Footer-->
    </div>
    <!--end::Card-->
</div>

<div class="col-xl-4">
    <!--begin::Card-->
    <div class="card card-custom gutter-b card-stretch">
        <!--begin::Body-->
        <div class="card-body">
            <!--begin::Info-->
            <div class="d-flex align-items-center">
                <!--begin::Pic-->
                <div class="flex-shrink-0 mr-4 symbol symbol-60 symbol-circle">
                    <img src="assets/media/project-logos/2.png" alt="image">
                </div>
                <!--end::Pic-->
                <!--begin::Info-->
                <div class="d-flex flex-column mr-auto">
                    <!--begin: Title-->
                    <div class="d-flex flex-column mr-auto">
                       <a href="#" class="text-dark text-hover-primary font-size-h4 font-weight-bolder mb-1">
                           Nexa - Next generation
                       </a>
                       <span class="text-muted font-weight-bold">
                           Tasty food for everyone
                       </span>
                   </div>
                    <!--end::Title-->
                </div>
                <!--end::Info-->
                <!--begin::Toolbar-->
                <div class="card-toolbar mb-7">
                   <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
                       <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="ki ki-bold-more-hor"></i>
                       </a>
                       <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                           <!--begin::Navigation-->
<ul class="navi navi-hover">
<li class="navi-header pb-1">
    <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-shopping-cart-1"></i></span>
        <span class="navi-text">Order</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-calendar-8"></i></span>
        <span class="navi-text">Event</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-graph-1"></i></span>
        <span class="navi-text">Report</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-rocket-1"></i></span>
        <span class="navi-text">Post</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-writing"></i></span>
        <span class="navi-text">File</span>
    </a>
</li>
</ul>
<!--end::Navigation-->
                       </div>
                   </div>
               </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Info-->
            <!--begin::Description-->
            <div class="mb-10 mt-5 font-weight-bold ">
                I distinguish three main text objectives.First, your objective could
                be merely to inform people.
            </div>
            <!--end::Description-->

            <!--begin::Data-->
            <div class="d-flex mb-5">
                <div class="d-flex align-items-center mr-7">
                    <span class="font-weight-bold mr-4">
                        Start
                    </span>
                    <span class="btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text">13 Jan, 21</span>
                </div>
                <div class="d-flex align-items-center">
                    <span class="font-weight-bold mr-4">
                        Due
                    </span>
                    <span class="btn btn-light-danger btn-sm font-weight-bold btn-upper btn-text">25 Oct, 12</span>
                </div>
            </div>
            <!--end::Data-->
            <!--begin::Progress-->
            <div class="d-flex mb-5 align-items-cente">
                <span class="d-block font-weight-bold mr-5">Progress</span>
                <div class="d-flex flex-row-fluid align-items-center">
                    <div class="progress progress-xs mt-2 mb-2 w-100">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 94%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="ml-3 font-weight-bolder">94%</span>
                </div>
            </div>
            <!--ebd::Progress-->
        </div>
        <!--end::Body-->
        <!--begin::Footer-->
        <div class="card-footer d-flex align-items-sm-center flex-wrap flex-column flex-sm-row">
            <div class="d-flex">
                <div class="d-flex mr-7">
                    <span class="svg-icon svg-icon-gray-500"><!--begin::Svg Icon | path:assets/media/svg/icons/Text/Bullet-list.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"></rect>
    <path d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z" fill="#000000"></path>
    <path d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z" fill="#000000" opacity="0.3"></path>
</g>
</svg><!--end::Svg Icon--></span>						<a href="#" class="font-weight-boldest text-primary ml-2">58 Tasks</a>
                </div>
                <div class="d-flex mr-7">
                    <span class="svg-icon svg-icon-gray-500"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"></rect>
    <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000"></path>
    <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3"></path>
</g>
</svg><!--end::Svg Icon--></span>						<a href="#" class="font-weight-boldest text-primary ml-2">459 Comments</a>
                </div>
            </div>
        </div>
        <!--end::Footer-->
    </div>
    <!--end::Card-->
</div>
</div>
<!--end::Row-->

<!--begin::Row-->
<div class="row">
<div class="col-xl-4">
    <!--begin::Card-->
    <div class="card card-custom gutter-b card-stretch">
        <!--begin::Body-->
        <div class="card-body">
            <!--begin::Info-->
            <div class="d-flex align-items-center">
                <!--begin::Pic-->
                <div class="flex-shrink-0 mr-4 symbol symbol-60 symbol-circle">
                    <img src="assets/media/project-logos/3.png" alt="image">
                </div>
                <!--end::Pic-->
                <!--begin::Info-->
                <div class="d-flex flex-column mr-auto">
                    <!--begin: Title-->
                    <div class="d-flex flex-column mr-auto">
                       <a href="#" class="text-dark text-hover-primary font-size-h4 font-weight-bolder mb-1">
                           Nexa - Next generation
                       </a>
                       <span class="text-muted font-weight-bold">
                           Tasty food for everyone
                       </span>
                   </div>
                    <!--end::Title-->
                </div>
                <!--end::Info-->
                <!--begin::Toolbar-->
                <div class="card-toolbar mb-7">
                   <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
                       <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="ki ki-bold-more-hor"></i>
                       </a>
                       <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                           <!--begin::Navigation-->
<ul class="navi navi-hover">
<li class="navi-header pb-1">
    <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-shopping-cart-1"></i></span>
        <span class="navi-text">Order</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-calendar-8"></i></span>
        <span class="navi-text">Event</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-graph-1"></i></span>
        <span class="navi-text">Report</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-rocket-1"></i></span>
        <span class="navi-text">Post</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-writing"></i></span>
        <span class="navi-text">File</span>
    </a>
</li>
</ul>
<!--end::Navigation-->
                       </div>
                   </div>
               </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Info-->
            <!--begin::Description-->
            <div class="mb-10 mt-5 font-weight-bold ">
                I distinguish three main text objectives.First, your objective could
                be merely to inform people.
            </div>
            <!--end::Description-->

            <!--begin::Data-->
            <div class="d-flex mb-5">
                <div class="d-flex align-items-center mr-7">
                    <span class="font-weight-bold mr-4">
                        Start
                    </span>
                    <span class="btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text">13 Jan, 21</span>
                </div>
                <div class="d-flex align-items-center">
                    <span class="font-weight-bold mr-4">
                        Due
                    </span>
                    <span class="btn btn-light-danger btn-sm font-weight-bold btn-upper btn-text">25 Oct, 12</span>
                </div>
            </div>
            <!--end::Data-->
            <!--begin::Progress-->
            <div class="d-flex mb-5 align-items-cente">
                <span class="d-block font-weight-bold mr-5">Progress</span>
                <div class="d-flex flex-row-fluid align-items-center">
                    <div class="progress progress-xs mt-2 mb-2 w-100">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 55%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="ml-3 font-weight-bolder">55%</span>
                </div>
            </div>
            <!--ebd::Progress-->
        </div>
        <!--end::Body-->
        <!--begin::Footer-->
        <div class="card-footer d-flex align-items-sm-center flex-wrap flex-column flex-sm-row">
            <div class="d-flex">
                <div class="d-flex mr-7">
                    <span class="svg-icon svg-icon-gray-500"><!--begin::Svg Icon | path:assets/media/svg/icons/Text/Bullet-list.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"></rect>
    <path d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z" fill="#000000"></path>
    <path d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z" fill="#000000" opacity="0.3"></path>
</g>
</svg><!--end::Svg Icon--></span>						<a href="#" class="font-weight-boldest text-primary ml-2">52 Tasks</a>
                </div>
                <div class="d-flex mr-7">
                    <span class="svg-icon svg-icon-gray-500"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"></rect>
    <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000"></path>
    <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3"></path>
</g>
</svg><!--end::Svg Icon--></span>						<a href="#" class="font-weight-boldest text-primary ml-2">953 Comments</a>
                </div>
            </div>
        </div>
        <!--end::Footer-->
    </div>
    <!--end::Card-->
</div>

<div class="col-xl-4">
    <!--begin::Card-->
    <div class="card card-custom gutter-b card-stretch">
        <!--begin::Body-->
        <div class="card-body">
            <!--begin::Info-->
            <div class="d-flex align-items-center">
                <!--begin::Pic-->
                <div class="flex-shrink-0 mr-4 symbol symbol-60 symbol-circle">
                    <img src="assets/media/project-logos/4.png" alt="image">
                </div>
                <!--end::Pic-->
                <!--begin::Info-->
                <div class="d-flex flex-column mr-auto">
                    <!--begin: Title-->
                    <div class="d-flex flex-column mr-auto">
                       <a href="#" class="text-dark text-hover-primary font-size-h4 font-weight-bolder mb-1">
                           Nexa - Next generation
                       </a>
                       <span class="text-muted font-weight-bold">
                           Tasty food for everyone
                       </span>
                   </div>
                    <!--end::Title-->
                </div>
                <!--end::Info-->
                <!--begin::Toolbar-->
                <div class="card-toolbar mb-7">
                   <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
                       <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="ki ki-bold-more-hor"></i>
                       </a>
                       <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                           <!--begin::Navigation-->
<ul class="navi navi-hover">
<li class="navi-header pb-1">
    <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-shopping-cart-1"></i></span>
        <span class="navi-text">Order</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-calendar-8"></i></span>
        <span class="navi-text">Event</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-graph-1"></i></span>
        <span class="navi-text">Report</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-rocket-1"></i></span>
        <span class="navi-text">Post</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-writing"></i></span>
        <span class="navi-text">File</span>
    </a>
</li>
</ul>
<!--end::Navigation-->
                       </div>
                   </div>
               </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Info-->
            <!--begin::Description-->
            <div class="mb-10 mt-5 font-weight-bold ">
                I distinguish three main text objectives.First, your objective could
                be merely to inform people.
            </div>
            <!--end::Description-->

            <!--begin::Data-->
            <div class="d-flex mb-5">
                <div class="d-flex align-items-center mr-7">
                    <span class="font-weight-bold mr-4">
                        Start
                    </span>
                    <span class="btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text">13 Jan, 21</span>
                </div>
                <div class="d-flex align-items-center">
                    <span class="font-weight-bold mr-4">
                        Due
                    </span>
                    <span class="btn btn-light-danger btn-sm font-weight-bold btn-upper btn-text">25 Oct, 12</span>
                </div>
            </div>
            <!--end::Data-->
            <!--begin::Progress-->
            <div class="d-flex mb-5 align-items-cente">
                <span class="d-block font-weight-bold mr-5">Progress</span>
                <div class="d-flex flex-row-fluid align-items-center">
                    <div class="progress progress-xs mt-2 mb-2 w-100">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 63%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="ml-3 font-weight-bolder">63%</span>
                </div>
            </div>
            <!--ebd::Progress-->
        </div>
        <!--end::Body-->
        <!--begin::Footer-->
        <div class="card-footer d-flex align-items-sm-center flex-wrap flex-column flex-sm-row">
            <div class="d-flex">
                <div class="d-flex mr-7">
                    <span class="svg-icon svg-icon-gray-500"><!--begin::Svg Icon | path:assets/media/svg/icons/Text/Bullet-list.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"></rect>
    <path d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z" fill="#000000"></path>
    <path d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z" fill="#000000" opacity="0.3"></path>
</g>
</svg><!--end::Svg Icon--></span>						<a href="#" class="font-weight-boldest text-primary ml-2">65 Tasks</a>
                </div>
                <div class="d-flex mr-7">
                    <span class="svg-icon svg-icon-gray-500"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"></rect>
    <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000"></path>
    <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3"></path>
</g>
</svg><!--end::Svg Icon--></span>						<a href="#" class="font-weight-boldest text-primary ml-2">954 Comments</a>
                </div>
            </div>
        </div>
        <!--end::Footer-->
    </div>
    <!--end:: Card-->
</div>

<div class="col-xl-4">
    <!--begin::Card-->
    <div class="card card-custom gutter-b card-stretch">
        <!--begin::Body-->
        <div class="card-body">
            <!--begin::Info-->
            <div class="d-flex align-items-center">
                <!--begin::Pic-->
                <div class="flex-shrink-0 mr-4 symbol symbol-60 symbol-circle">
                    <img src="assets/media/project-logos/5.png" alt="image">
                </div>
                <!--end::Pic-->
                <!--begin::Info-->
                <div class="d-flex flex-column mr-auto">
                    <!--begin: Title-->
                    <div class="d-flex flex-column mr-auto">
                       <a href="#" class="text-dark text-hover-primary font-size-h4 font-weight-bolder mb-1">
                           Nexa - Next generation
                       </a>
                       <span class="text-muted font-weight-bold">
                           Tasty food for everyone
                       </span>
                   </div>
                    <!--end::Title-->
                </div>
                <!--end::Info-->
                <!--begin::Toolbar-->
                <div class="card-toolbar mb-7">
                   <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
                       <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="ki ki-bold-more-hor"></i>
                       </a>
                       <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                           <!--begin::Navigation-->
<ul class="navi navi-hover">
<li class="navi-header pb-1">
    <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-shopping-cart-1"></i></span>
        <span class="navi-text">Order</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-calendar-8"></i></span>
        <span class="navi-text">Event</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-graph-1"></i></span>
        <span class="navi-text">Report</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-rocket-1"></i></span>
        <span class="navi-text">Post</span>
    </a>
</li>
<li class="navi-item">
    <a href="#" class="navi-link">
        <span class="navi-icon"><i class="flaticon2-writing"></i></span>
        <span class="navi-text">File</span>
    </a>
</li>
</ul>
<!--end::Navigation-->
                       </div>
                   </div>
               </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Info-->
            <!--begin::Description-->
            <div class="mb-10 mt-5 font-weight-bold ">
                I distinguish three main text objectives.First, your objective could
                be merely to inform people.
            </div>
            <!--end::Description-->

            <!--begin::Data-->
            <div class="d-flex mb-5">
                <div class="d-flex align-items-center mr-7">
                    <span class="font-weight-bold mr-4">
                        Start
                    </span>
                    <span class="btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text">13 Jan, 21</span>
                </div>
                <div class="d-flex align-items-center">
                    <span class="font-weight-bold mr-4">
                        Due
                    </span>
                    <span class="btn btn-light-danger btn-sm font-weight-bold btn-upper btn-text">25 Oct, 12</span>
                </div>
            </div>
            <!--end::Data-->
            <!--begin::Progress-->
            <div class="d-flex mb-5 align-items-cente">
                <span class="d-block font-weight-bold mr-5">Progress</span>
                <div class="d-flex flex-row-fluid align-items-center">
                    <div class="progress progress-xs mt-2 mb-2 w-100">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 79%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="ml-3 font-weight-bolder">79%</span>
                </div>
            </div>
            <!--ebd::Progress-->
        </div>
        <!--end::Body-->
        <!--begin::Footer-->
        <div class="card-footer d-flex align-items-sm-center flex-wrap flex-column flex-sm-row">
            <div class="d-flex">
                <div class="d-flex mr-7">
                    <span class="svg-icon svg-icon-gray-500"><!--begin::Svg Icon | path:assets/media/svg/icons/Text/Bullet-list.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"></rect>
    <path d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z" fill="#000000"></path>
    <path d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z" fill="#000000" opacity="0.3"></path>
</g>
</svg><!--end::Svg Icon--></span>						<a href="#" class="font-weight-boldest text-primary ml-2">75 Tasks</a>
                </div>
                <div class="d-flex mr-7">
                    <span class="svg-icon svg-icon-gray-500"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"></rect>
    <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000"></path>
    <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3"></path>
</g>
</svg><!--end::Svg Icon--></span>						<a href="#" class="font-weight-boldest text-primary ml-2">928 Comments</a>
                </div>
            </div>
        </div>
        <!--end::Footer-->
    </div>
    <!--end::Card-->
</div>
</div>
<!--end::Row-->

<!--begin::Pagination-->
<div class="d-flex justify-content-between align-items-center flex-wrap">
<div class="d-flex flex-wrap mr-3">
    <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1"><i class="ki ki-bold-double-arrow-back icon-xs"></i></a>
    <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1"><i class="ki ki-bold-arrow-back icon-xs"></i></a>
    <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">...</a>
    <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">23</a>
    <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary active mr-2 my-1">24</a>
    <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">25</a>
    <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">26</a>
    <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">27</a>
    <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">28</a>
    <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">...</a>
    <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1"><i class="ki ki-bold-arrow-next icon-xs"></i></a>
    <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1"><i class="ki ki-bold-double-arrow-next icon-xs"></i></a>
</div>
<div class="d-flex align-items-center">
    <select class="form-control form-control-sm text-primary font-weight-bold mr-4 border-0 bg-light-primary" style="width: 75px;">
        <option value="10">10</option>
        <option value="20">20</option>
        <option value="30">30</option>
        <option value="50">50</option>
        <option value="100">100</option>
    </select>
    <span class="text-muted">Displaying 10 of 230 records</span>
</div>
</div>
<!--end::Pagination-->
                </div>
    <!--end::Container-->
</div>
</div> 
@endsection
