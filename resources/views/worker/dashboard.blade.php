@extends('worker/layout/master')

@section('title')
    This a Title
@endsection

@section('content')


                <!--begin::Content-->
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
                                    <h2 class="text-white font-weight-bold my-2 mr-5">Dashboard</h2>
                                    <!--end::Title-->
                                    <!--begin::Breadcrumb-->
                                    <div class="d-flex align-items-center font-weight-bold my-2">
                                        <!--begin::Item-->
                                        <a href="{{url('w/dashboard')}}" class="opacity-75 hover-opacity-100">
                                            <i class="flaticon2-shelter text-white icon-1x"></i>
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                                    <a href="{{url('w/dashboard')}}" class="text-white text-hover-white opacity-75 hover-opacity-100">Dashboard</a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        
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
                    <div class="subheader  gutter-b  subheader-transparent " id="kt_subheader" style="
    display: none;
">
                        <div class=" container  d-flex flex-column">
                            <!--begin::Title-->
                            <div class=" pd-50 d-flex align-items-sm-end flex-column flex-sm-row mb-5">
                                <h2 class="text-white mr-5 mb-0">Search Job</h2>
                                <span class="text-white opacity-60 font-weight-bold">Choose the category</span>
                            </div>
                            <!--end::Title-->

                            <!--begin::Search Bar-->
                            <div class="pd-50 d-flex align-items-md-center mb-2 flex-column flex-md-row">
                                <div class="bg-white rounded p-4 d-flex flex-grow-1 flex-sm-grow-0">
                                    <!--begin::Form-->
                                    <form method="post" action="project.html" class="form d-flex align-items-md-center flex-sm-row flex-column flex-grow-1 flex-sm-grow-0">
                                        <!--begin::Input-->
                                        <div class="d-flex align-items-center py-3 py-sm-0 px-sm-3">
                                            <span class="svg-icon svg-icon-lg"><!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"></rect>
    <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
    <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"></path>
</g>
</svg><!--end::Svg Icon--></span> <input type="text" class="form-control border-0 font-weight-bold pl-2" placeholder="Job Title">
                                        </div>
                                        <!--end::Input-->

                                        <!--begin::Input-->
                                        <span class="bullet bullet-ver h-25px d-none d-sm-flex mr-2"></span>
                                        <div class="d-flex align-items-center py-3 py-sm-0 px-sm-3">
                                            <span class="svg-icon svg-icon-lg"><!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"></rect>
    <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
    <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
</g>
</svg><!--end::Svg Icon--></span> <input type="text" class="form-control border-0 font-weight-bold pl-2" placeholder="Category" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-target="kt_searchbar_7_category-options"
                                                data-offset="0,10" readonly="">
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
                                        <button class="btn btn-dark font-weight-bold btn-hover-light-primary mt-6 mt-sm-3 px-6" type="submit">Search</button>
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--begin::Advanced Search-->

                                <!--end::Advanced Search-->
                            </div>
                            <!--end::Search Bar-->
                        </div>
                    </div>

























                    <!--begin::Entry-->
                    <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                        <div class=" container ">
                            <!--begin::Dashboard-->
                            <!--begin::Row-->
                            <div class="row">
                                <div class="col-xl-4">
                                    <!--begin::Tiles Widget 1-->
                                    <div class="card card-custom gutter-b card-stretch">
                                        <!--begin::Header-->
                                        <div class="card-header border-0 pt-5">
                                            <div class="card-title">
                                                <div class="card-label">
                                                    <div class="font-weight-bolder">Category</div>
                                                    <div class="font-size-sm text-muted mt-2">Please select a category</div>
                                                </div>
                                            </div>
                                        </div>






                                        <!--end::Header-->




                                        <!--begin::Body-->
                                        <div class="" style="">
                                            <div class="card card-custom card-stretch">
                                                <!--begin::Body-->
                                                <div class="card-body px-5">
                                                    <!--begin:Nav-->
                                                    <div class="navi navi-hover navi-active navi-link-rounded navi-bold navi-icon-center navi-light-icon">
                                                        <!--begin:Item-->
                                                        <div class="navi-item my-2">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-icon mr-4">
                        <span class="svg-icon svg-icon-lg"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-heart.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"></rect>
        <path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M13.8,4 C13.1562,4 12.4033,4.72985286 12,5.2 C11.5967,4.72985286 10.8438,4 10.2,4 C9.0604,4 8.4,4.88887193 8.4,6.02016349 C8.4,7.27338783 9.6,8.6 12,10 C14.4,8.6 15.6,7.3 15.6,6.1 C15.6,4.96870845 14.9396,4 13.8,4 Z" fill="#000000" opacity="0.3"></path>
        <path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z" fill="#000000"></path>
    </g>
</svg><!--end::Svg Icon--></span> </span>
                                                                <span class="navi-text font-weight-bolder font-size-lg">Graphic Design</span>

                                                            </a>
                                                        </div>
                                                        <!--end:Item-->

                                                        <!--begin:Item-->

                                                        <!--end:Item-->

                                                        <!--begin:Item-->
                                                        <div class="navi-item my-2">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-icon mr-4">
                        <span class="svg-icon svg-icon-lg"><!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"></rect>
        <path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3"></path>
        <path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000"></path>
    </g>
</svg><!--end::Svg Icon--></span> </span>
                                                                <span class="navi-text font-weight-bolder font-size-lg">Web Design</span>

                                                            </a>
                                                        </div>
                                                        <!--end:Item-->

                                                        <!--begin:Item-->
                                                        <div class="navi-item my-2">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-icon mr-4">
                        <span class="svg-icon svg-icon-lg"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Sending.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"></rect>
        <path d="M8,13.1668961 L20.4470385,11.9999863 L8,10.8330764 L8,5.77181995 C8,5.70108058 8.01501031,5.63114635 8.04403925,5.56663761 C8.15735832,5.31481744 8.45336217,5.20254012 8.70518234,5.31585919 L22.545552,11.5440255 C22.6569791,11.5941677 22.7461882,11.6833768 22.7963304,11.794804 C22.9096495,12.0466241 22.7973722,12.342628 22.545552,12.455947 L8.70518234,18.6841134 C8.64067359,18.7131423 8.57073936,18.7281526 8.5,18.7281526 C8.22385763,18.7281526 8,18.504295 8,18.2281526 L8,13.1668961 Z" fill="#000000"></path>
        <path d="M4,16 L5,16 C5.55228475,16 6,16.4477153 6,17 C6,17.5522847 5.55228475,18 5,18 L4,18 C3.44771525,18 3,17.5522847 3,17 C3,16.4477153 3.44771525,16 4,16 Z M1,11 L5,11 C5.55228475,11 6,11.4477153 6,12 C6,12.5522847 5.55228475,13 5,13 L1,13 C0.44771525,13 6.76353751e-17,12.5522847 0,12 C-6.76353751e-17,11.4477153 0.44771525,11 1,11 Z M4,6 L5,6 C5.55228475,6 6,6.44771525 6,7 C6,7.55228475 5.55228475,8 5,8 L4,8 C3.44771525,8 3,7.55228475 3,7 C3,6.44771525 3.44771525,6 4,6 Z" fill="#000000" opacity="0.3"></path>
    </g>
</svg><!--end::Svg Icon--></span> </span>
                                                                <span class="navi-text font-weight-bolder font-size-lg">T-shirt Design</span>
                                                            </a>
                                                        </div>
                                                        <!--end:Item-->

                                                        <!--begin:Item-->
                                                        <div class="navi-item my-2">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-icon mr-4">
                        <span class="svg-icon svg-icon-lg"><!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"></rect>
        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
    </g>
</svg><!--end::Svg Icon--></span> </span>
                                                                <span class="navi-text font-weight-bolder font-size-lg">Flayer Design</span>
                                                            </a>
                                                        </div>
                                                        <!--end:Item-->

                                                        <!--begin:Section-->

                                                        <!--end:Section-->

                                                        <!--begin:Item-->

                                                        <!--end:Item-->

                                                        <!--begin:Item-->

                                                        <!--end:Item-->

                                                        <!--begin:Item-->

                                                        <!--end:Item-->

                                                        <!--begin:Item-->


                                                        <!--begin:Section-->
                                                        <div class="navi-section mt-7 mb-2 font-size-h6 font-weight-bold pb-0">More</div>
                                                        <!--end:Section-->

                                                        <!--begin:Item-->
                                                        <div class="navi-item my-2">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-icon mr-4">
                        <i class="fa fa-genderless text-danger"></i>
                    </span>
                                                                <span class="navi-text font-weight-bolder font-size-lg">Ebook Design</span>
                                                                <span class="navi-label">
                        
                    </span>
                                                            </a>
                                                        </div>
                                                        <!--end:Item-->

                                                        <!--begin:Item-->
                                                        <div class="navi-item my-2">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-icon mr-4">
                        <i class="fa fa-genderless text-success"></i>
                    </span>
                                                                <span class="navi-text font-weight-bolder font-size-lg">Barnner Design</span>
                                                            </a>
                                                        </div>
                                                        <!--end:Item-->

                                                        <!--begin:Item-->
                                                        <div class="navi-item my-2">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-icon mr-4">
                        <i class="fa fa-genderless text-info"></i>
                    </span>
                                                                <span class="navi-text font-weight-bolder font-size-lg">Product Design</span>
                                                            </a>
                                                        </div>
                                                        <!--end:Item-->

                                                        <!--begin:Item-->
                                                        <div class="navi-item my-0">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-icon mr-4">
                        <i class="fa fa-genderless text-info"></i>
                    </span>
                                                                <span class="navi-text font-weight-bolder font-size-lg">UI Design</span>
                                                            </a>
                                                        </div>
                                                        <!--end:Item-->
                                                    </div>
                                                    <!--end:Nav-->
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tiles Widget 1-->
                                </div>
                                <div class="col-xl-8">
                                    <div class="row">
                                        <div class="col-xl-3">
                                            <!--begin::Tiles Widget 3-->
                                            <div class="card card-custom bgi-no-repeat bgi-no-repeat bgi-size-cover gutter-b" style="height: 150px; background-image: url({{asset('worker/image/001.jpg')}})">
                                                <!--begin::Body-->
                                                <div class="card-body d-flex flex-column">
                                                    <!--begin::Title-->

                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Tiles Widget 3-->
                                        </div>
                                        <div class="col-xl-9">
                                            <!--begin::Mixed Widget 10-->
                                            <div class="card card-custom gutter-b" style="height: 150px">
                                                <!--begin::Body-->
                                                <div class="card-body d-flex align-items-center justify-content-between flex-wrap">
                                                    <div class="mr-2">
                                                        <h3 class="font-weight-bolder">Selim Al Adil</h3>
                                                        <div class="text-dark-50 font-size-lg mt-2">I Am A Professional Designer</div>
                                                    </div>
                                                <a href="{{url('w/edit/profile')}}" class="btn btn-primary font-weight-bold py-3 px-6">Edit Profile</a>
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Mixed Widget 10-->
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xl-6">
                                            <!--begin::Tiles Widget 13-->
                                            <div class="card card-custom bgi-no-repeat gutter-b" style="">

                                                <!--begin::Body-->
                                                <div class="card-body d-flex align-items-center">
                                                    <div>
                                                        <h3 class="text-black font-weight-bolder font-size-lg line-height-lg mb-2">"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."<br><br>
                                                            <p class="text-muted">K. Mewman Deim</p>
                                                        </h3>

                                                    </div>
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Tiles Widget 13-->

                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <!--begin::Tiles Widget 11-->
                                                    <div class="card card-custom bg-primary gutter-b" style="height: 180px">
                                                        <div class="card-body">
                                                            <span class="svg-icon svg-icon-3x svg-icon-white ml-n2"><!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"></rect>
        <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
        <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
    </g>
</svg><!--end::Svg Icon--></span>
                                                            <div class="text-inverse-primary font-weight-bolder font-size-h2 mt-4">20</div>

                                                            <a href="#" class="text-inverse-primary font-weight-bold font-size-md mt-1">Job Completed</a>
                                                        </div>
                                                    </div>
                                                    <!--end::Tiles Widget 11-->
                                                </div>
                                                <div class="col-xl-6">
                                                    <!--begin::Tiles Widget 12-->
                                                    <div class="card card-custom gutter-b" style="height: 180px">
                                                        <div class="card-body">
                                                            <span class="svg-icon svg-icon-3x svg-icon-success"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg--><!--end::Svg Icon--></span>
                                                            <div class="text-dark font-weight-bolder font-size-h6 mt-3">Current Job</div>

                                                            <br>


                                                            <a href="#" class="text-muted text-hover-primary font-weight-bold font-size-lg mt-1">Token:</a><a href="#" class="text-muted text-hover-primary font-weight-bold font-size-lg mt-1">w13h121</a><br>
                                                            <br>


                                                            <a href="#" class="text-muted text-hover-primary font-weight-bold font-size-lg mt-1">Time-Left:</a>
                                                            <a href="#" class="text-muted text-hover-primary font-weight-bold font-size-lg mt-1">1:00</a>

                                                        </div>
                                                    </div>
                                                    <!--end::Tiles Widget 12-->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <!--begin::List Widget 10-->


                                            <!--begin::List Widget 4-->
                                            <div class="card card-custom card-stretch gutter-b">
                                                <!--begin::Header-->
                                                <div class="card-header border-0">
                                                    <h3 class="card-title font-weight-bolder text-dark">Notification</h3>

                                                </div>
                                                <!--end::Header-->

                                                <!--begin::Body-->
                                                <div class="card-body pt-2">
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Bullet-->
                                                        <span class="bullet bullet-bar bg-success align-self-stretch"></span>
                                                        <!--end::Bullet-->

                                                        <!--begin::Checkbox-->
                                                        <label class="checkbox checkbox-lg checkbox-light-success checkbox-inline flex-shrink-0 m-0 mx-4">
                <input type="checkbox" name="select" value="1">
                <span></span>
            </label>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Text-->
                                                        <div class="d-flex flex-column flex-grow-1">
                                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">
                    Create FireStone Logo
                </a>
                                                            <span class="text-muted font-weight-bold">
                   Today
                </span>
                                                        </div>
                                                        <!--end::Text-->

                                                        <!--begin::Dropdown-->

                                                        <!--end::Dropdown-->
                                                    </div>
                                                    <!--end:Item-->

                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mt-10">
                                                        <!--begin::Bullet-->
                                                        <span class="bullet bullet-bar bg-primary align-self-stretch"></span>
                                                        <!--end::Bullet-->

                                                        <!--begin::Checkbox-->
                                                        <label class="checkbox checkbox-lg checkbox-light-primary checkbox-inline flex-shrink-0 m-0 mx-4">
                <input type="checkbox" value="1">
                <span></span>
            </label>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Text-->
                                                        <div class="d-flex flex-column flex-grow-1">
                                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">
                    Stakeholder Meeting
                </a>
                                                            <span class="text-muted font-weight-bold">
                    3 Days ago
                </span>
                                                        </div>
                                                        <!--end::Text-->

                                                        <!--begin::Dropdown-->

                                                        <!--end::Dropdown-->
                                                    </div>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mt-10">
                                                        <!--begin::Bullet-->
                                                        <span class="bullet bullet-bar bg-warning align-self-stretch"></span>
                                                        <!--end::Bullet-->

                                                        <!--begin::Checkbox-->
                                                        <label class="checkbox checkbox-lg checkbox-light-warning checkbox-inline flex-shrink-0 m-0 mx-4">
                <input type="checkbox" value="1">
                <span></span>
            </label>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Text-->
                                                        <div class="d-flex flex-column flex-grow-1">
                                                            <a href="#" class="text-dark-75 text-hover-primary font-size-sm font-weight-bold font-size-lg mb-1">
                    Scoping &amp; Estimations
                </a>
                                                            <span class="text-muted font-weight-bold">7 days ago</span>
                                                        </div>
                                                        <!--end::Text-->

                                                        <!--begin: Dropdown-->

                                                        <!--end::Dropdown-->
                                                    </div>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->

                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mt-10">
                                                        <!--begin::Bullet-->
                                                        <span class="bullet bullet-bar bg-danger align-self-stretch"></span>
                                                        <!--end::Bullet-->

                                                        <!--begin::Checkbox-->
                                                        <label class="checkbox checkbox-lg checkbox-light-danger checkbox-inline flex-shrink-0 m-0 mx-4">
                <input type="checkbox" value="1">
                <span></span>
            </label>
                                                        <!--end::Checkbox:-->

                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column flex-grow-1">
                                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">
                    Project Retro
                </a>
                                                            <span class="text-muted font-weight-bold">
                    Due in 12 Days
                </span>
                                                        </div>
                                                        <!--end::Text-->

                                                        <!--begin: Dropdown-->

                                                        <!--end::Dropdown-->
                                                        <!--end::Item-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end:List Widget 4-->
                                            </div>

                                            <!--end: Card-->
                                            <!--end: List Widget 10-->
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--end::Row-->

                            <!--begin::Row-->

                            <!--end::Row-->

                            <!--begin::Row-->
                            <div class="row">
                                <div class="col-xl-4">
                                    <!--begin::Mixed Widget 10-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Body-->
                                        <div class="card-body d-flex flex-column">
                                            <div class="flex-grow-1 pb-5">
                                                <!--begin::Info-->
                                                <div class="d-flex align-items-center pr-2 mb-6">
                                                    <span class="text-muted font-weight-bold font-size-lg flex-grow-1">Token-cXSDdawxwx</span>


                                                </div>
                                                <!--end::Info-->
                                                <div class="d-flex align-items-center pr-1 mb-6">
                                                    <span class="font-weight-bolder text-muted">Request Time :</span>

                                                   <span class="ml-2 btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text ">1:23:14</span>


                                                    
                                                        <span class="ml-2 font-weight-bolder text-muted">Time Left :</span>
                                                        <span class="ml-2 btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text ">1:00</span>

                                                    
                                                </div>

                                                <!--begin::Link-->
                                                <a href="#" class="text-dark font-weight-bolder text-hover-primary font-size-h4">I Need A Logo For My Website</a>
                                                <!--end::Link-->

                                                <!--begin::Desc-->
                                                <p class="text-dark-50 font-weight-normal font-size-lg mt-6">
                                                </p>
                                                <p class="font-weight-bolder">Description</p>
                                                Pitstop creates quick email campaigns.<br> We help to strengthen your brand<br> for your every purpose.
                                                <p></p>
                                                <!--end::Desc-->
                                            </div>
                                            <!--begin::Team-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Pic-->
                                                <a href="#" class="">
                                                </a>
                                                <div class="">
                                                    <a href="#" class=" ">
                                                    </a><a href="#" class="btn btn-primary font-weight-bold py-3 px-6">Attach</a>

                                                </div>

                                                <!--end::Pic-->

                                                <!--begin::Pic-->
                                                <a href="#" class="symbol symbol-45 symbol-light mr-30">

                                                </a>
                                                <!--end::Pic-->

                                                <!--begin::Pic-->
                                                <a href="#" class="symbol symbol-45 symbol-light">
                                                </a>
                                                <div class="">
                                                    <a href="#" class="symbol symbol-45 symbol-light">
                                                    </a><a href="#" class="btn btn-primary font-weight-bold py-3 px-6">Submit</a>

                                                </div>

                                                <!--end::Pic-->
                                            </div>
                                            <!--end::Team-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Mixed Widget 10-->
                                </div>

                                <div class="col-xl-4">
                                    <!--begin::Mixed Widget 12-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Body-->
                                        <div class="card-body d-flex flex-column">
                                            <div class="flex-grow-1 pb-5">
                                                <!--begin::Info-->
                                                <div class="d-flex align-items-center pr-2 mb-6">
                                                    <span class="text-muted font-weight-bold font-size-lg flex-grow-1">Token-
       cXSDdawxwx</span>


                                                </div>
                                                <!--end::Info-->
                                                <p class="font-weight-bolder text-muted">Message</p>


                                                <!--begin::Link-->
                                                <a href="#" class="text-dark font-weight-bolder text-hover-primary font-size-h4">I Need A Logo For My Website</a>
                                                <!--end::Link-->

                                                <!--begin::Desc-->
                                                <p class="text-dark-50 font-weight-normal font-size-lg mt-6">
                                                </p>
                                                <p class="font-weight-bolder text-muted">Attachment</p>
                                                <p class="text-muted">Note</p>
                                                Pitstop creates quick email campaigns.<br> We help to strengthen your brand<br> for your every purpose.
                                                <p></p>
                                                <!--end::Desc-->
                                            </div>
                                            <!--begin::Team-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Pic-->
                                                <a href="#" class=" mr-32">
                                                </a>
                                                <div class="">
                                                    <a href="#" class=" mr-32">
                                                    </a><a href="#" class="btn btn-primary font-weight-bold py-3 px-6">Accept</a>

                                                </div>

                                                <!--end::Pic-->

                                                <!--begin::Pic-->
                                                <a href="#" class="symbol symbol-45 symbol-light mr-3">

                                                </a>
                                                <!--end::Pic-->

                                                <!--begin::Pic-->
                                                <a href="#" class="symbol symbol-45 symbol-light">
                                                </a>

                                                <!--end::Pic-->
                                            </div>
                                            <!--end::Team-->
                                        </div>
                                        <!--end::Body-->
                                    </div>

                                    <!--end::Mixed Widget 12-->
                                </div>
                                <div class="col-xl-4">
                                    <!--begin::Mixed Widget 12-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Body-->
                                        <div class="card-body d-flex flex-column">
                                            <div class="flex-grow-1 pb-5">
                                                <!--begin::Info-->
                                                <div class="d-flex align-items-center pr-2 mb-6">
                                                    <span class="text-muted font-weight-bold font-size-lg flex-grow-1">Token-cXSDadwdawdawxwx</span>


                                                </div>
                                                <!--end::Info-->
                                                <p class="font-weight-bolder text-muted">Message</p>


                                                <!--begin::Link-->
                                                <a href="#" class="text-dark font-weight-bolder text-hover-primary font-size-h4">I Need A Logo For My Website</a>
                                                <!--end::Link-->

                                                <!--begin::Desc-->
                                                <p class="text-dark-50 font-weight-normal font-size-lg mt-6">
                                                </p>
                                                <p class="font-weight-bolder text-muted">Attachment</p>
                                                <p class="text-muted">Note</p>
                                                Pitstop creates quick email campaigns.<br> We help to strengthen your brand<br> for your every purpose.
                                                <p></p>
                                                <!--end::Desc-->
                                            </div>
                                            <!--begin::Team-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Pic-->
                                                <a href="#" class=" mr-32">
                                                </a>
                                                <div class="">
                                                    <a href="#" class=" mr-32">
                                                    </a><a href="#" class="btn btn-primary font-weight-bold py-3 px-6">Accept</a>

                                                </div>

                                                <!--end::Pic-->

                                                <!--begin::Pic-->
                                                <a href="#" class="symbol symbol-45 symbol-light mr-3">

                                                </a>
                                                <!--end::Pic-->

                                                <!--begin::Pic-->
                                                <a href="#" class="symbol symbol-45 symbol-light">
                                                </a>

                                                <!--end::Pic-->
                                            </div>
                                            <!--end::Team-->
                                        </div>
                                        <!--end::Body-->
                                    </div>

                                    <!--end::Mixed Widget 12-->
                                </div>
                            </div>
                            <!--end::Row-->
                            <div class="row">
                                <div class="col-xl-4">
                                    <!--begin::Mixed Widget 10-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Body-->
                                        <div class="card-body d-flex flex-column">
                                            <div class="flex-grow-1 pb-5">
                                                <!--begin::Info-->
                                                <div class="d-flex align-items-center pr-2 mb-6">
                                                    <span class="text-muted font-weight-bold font-size-lg flex-grow-1">Token-cXSDdawxwx</span>


                                                </div>
                                                <!--end::Info-->
                                                <div class="d-flex align-items-center pr-1 mb-6">
                                                    <span class="font-weight-bolder text-muted">Request Time :</span>

                                                   <span class="ml-2 btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text ">1:23:14</span>


                                                    
                                                        <span class="ml-2 font-weight-bolder text-muted">Time Left :</span>
                                                        <span class="ml-2 btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text ">1:00</span>

                                                    
                                                </div>

                                                  

                                                <!--begin::Link-->
                                                <a href="#" class="text-dark font-weight-bolder text-hover-primary font-size-h4">I Need A Logo For My Website</a>
                                                <!--end::Link-->

                                                <!--begin::Desc-->
                                                <p class="text-dark-50 font-weight-normal font-size-lg mt-6">
                                                </p>
                                                <p class="font-weight-bolder">Description</p>
                                                Pitstop creates quick email campaigns.<br> We help to strengthen your brand<br> for your every purpose.
                                                <p></p>
                                                <!--end::Desc-->
                                            </div>
                                            <!--begin::Team-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Pic-->
                                                <a href="#" class="">
                                                </a>
                                                <div class="">
                                                    <a href="#" class=" ">
                                                    </a><a href="#" class="btn btn-primary font-weight-bold py-3 px-6">Attach</a>

                                                </div>

                                                <!--end::Pic-->

                                                <!--begin::Pic-->
                                                <a href="#" class="symbol symbol-45 symbol-light mr-30">

                                                </a>
                                                <!--end::Pic-->

                                                <!--begin::Pic-->
                                                <a href="#" class="symbol symbol-45 symbol-light">
                                                </a>
                                                <div class="">
                                                    <a href="#" class="symbol symbol-45 symbol-light">
                                                    </a><a href="#" class="btn btn-primary font-weight-bold py-3 px-6">Submit</a>

                                                </div>

                                                <!--end::Pic-->
                                            </div>
                                            <!--end::Team-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Mixed Widget 10-->
                                </div>

                                <div class="col-xl-4">
                                    <!--begin::Mixed Widget 12-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Body-->
                                        <div class="card-body d-flex flex-column">
                                            <div class="flex-grow-1 pb-5">
                                                <!--begin::Info-->
                                                <div class="d-flex align-items-center pr-2 mb-6">
                                                    <span class="text-muted font-weight-bold font-size-lg flex-grow-1">Token-r3a7n6d3o2m</span>


                                                </div>
                                                <!--end::Info-->
                                                <p class="font-weight-bolder text-muted">Message</p>


                                                <!--begin::Link-->
                                                <a href="#" class="text-dark font-weight-bolder text-hover-primary font-size-h4">I Need A Logo For My Website</a>
                                                <!--end::Link-->

                                                <!--begin::Desc-->
                                                <p class="text-dark-50 font-weight-normal font-size-lg mt-6">
                                                </p>
                                                <p class="font-weight-bolder text-muted">Attachment</p>
                                                <p class="text-muted">Note</p>
                                                Pitstop creates quick email campaigns.<br> We help to strengthen your brand<br> for your every purpose.
                                                <p></p>
                                                <!--end::Desc-->
                                            </div>
                                            <!--begin::Team-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Pic-->
                                                <a href="#" class=" mr-32">
                                                </a>
                                                <div class="">
                                                    <a href="#" class=" mr-32">
                                                    </a><a href="#" class="btn btn-primary font-weight-bold py-3 px-6">Accept</a>

                                                </div>

                                                <!--end::Pic-->

                                                <!--begin::Pic-->
                                                <a href="#" class="symbol symbol-45 symbol-light mr-3">

                                                </a>
                                                <!--end::Pic-->

                                                <!--begin::Pic-->
                                                <a href="#" class="symbol symbol-45 symbol-light">
                                                </a>

                                                <!--end::Pic-->
                                            </div>
                                            <!--end::Team-->
                                        </div>
                                        <!--end::Body-->
                                    </div>

                                    <!--end::Mixed Widget 12-->
                                </div>
                                <div class="col-xl-4">
                                    <!--begin::Mixed Widget 12-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Body-->
                                        <div class="card-body d-flex flex-column">
                                            <div class="flex-grow-1 pb-5">
                                                <!--begin::Info-->
                                                <div class="d-flex align-items-center pr-2 mb-6">
                                                    <span class="text-muted font-weight-bold font-size-lg flex-grow-1">Token-r3a7n6d3o2m</span>


                                                </div>
                                                <!--end::Info-->
                                                <p class="font-weight-bolder text-muted">Message</p>


                                                <!--begin::Link-->
                                                <a href="#" class="text-dark font-weight-bolder text-hover-primary font-size-h4">I Need A Logo For My Website</a>
                                                <!--end::Link-->

                                                <!--begin::Desc-->
                                                <p class="text-dark-50 font-weight-normal font-size-lg mt-6">
                                                </p>
                                                <p class="font-weight-bolder text-muted">Attachment</p>
                                                <p class="text-muted">Note</p>
                                                Pitstop creates quick email campaigns.<br> We help to strengthen your brand<br> for your every purpose.
                                                <p></p>
                                                <!--end::Desc-->
                                            </div>
                                            <!--begin::Team-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Pic-->
                                                <a href="#" class=" mr-32">
                                                </a>
                                                <div class="">
                                                    <a href="#" class=" mr-32">
                                                    </a><a href="#" class="btn btn-primary font-weight-bold py-3 px-6">Accept</a>

                                                </div>

                                                <!--end::Pic-->

                                                <!--begin::Pic-->
                                                <a href="#" class="symbol symbol-45 symbol-light mr-3">

                                                </a>
                                                <!--end::Pic-->

                                                <!--begin::Pic-->
                                                <a href="#" class="symbol symbol-45 symbol-light">
                                                </a>

                                                <!--end::Pic-->
                                            </div>
                                            <!--end::Team-->
                                        </div>
                                        <!--end::Body-->
                                    </div>

                                    <!--end::Mixed Widget 12-->
                                </div>
                            </div>

                            <!--begin::Row-->
                            <div class="row">
                                <div class="col-xl-4">
                                    <!--begin::Mixed Widget 10-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Body-->
                                        <div class="card-body d-flex flex-column">
                                            <div class="flex-grow-1 pb-5">
                                                <!--begin::Info-->
                                                <div class="d-flex align-items-center pr-2 mb-6">
                                                    <span class="text-muted font-weight-bold font-size-lg flex-grow-1">Token-cXSDdawxwx</span>


                                                </div>
                                                <!--end::Info-->
                                                <div class="d-flex align-items-center pr-1 mb-6">
                                                    <span class="font-weight-bolder text-muted">Request Time :</span>

                                                   <span class="ml-2 btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text ">1:23:14</span>


                                                    
                                                        <span class="ml-2 font-weight-bolder text-muted">Time Left :</span>
                                                        <span class="ml-2 btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text ">1:00</span>

                                                    
                                                </div>

                                                <!--begin::Link-->
                                                <a href="#" class="text-dark font-weight-bolder text-hover-primary font-size-h4">I Need A Logo For My Website</a>
                                                <!--end::Link-->

                                                <!--begin::Desc-->
                                                <p class="text-dark-50 font-weight-normal font-size-lg mt-6">
                                                </p>
                                                <p class="font-weight-bolder">Description</p>
                                                Pitstop creates quick email campaigns.<br> We help to strengthen your brand<br> for your every purpose.
                                                <p></p>
                                                <!--end::Desc-->
                                            </div>
                                            <!--begin::Team-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Pic-->
                                                <a href="#" class="">
                                                </a>
                                                <div class="">
                                                    <a href="#" class=" ">
                                                    </a><a href="#" class="btn btn-primary font-weight-bold py-3 px-6">Attach</a>

                                                </div>

                                                <!--end::Pic-->

                                                <!--begin::Pic-->
                                                <a href="#" class="symbol symbol-45 symbol-light mr-30">

                                                </a>
                                                <!--end::Pic-->

                                                <!--begin::Pic-->
                                                <a href="#" class="symbol symbol-45 symbol-light">
                                                </a>
                                                <div class="">
                                                    <a href="#" class="symbol symbol-45 symbol-light">
                                                    </a><a href="#" class="btn btn-primary font-weight-bold py-3 px-6">Submit</a>

                                                </div>

                                                <!--end::Pic-->
                                            </div>
                                            <!--end::Team-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Mixed Widget 10-->
                                </div>

                                <div class="col-xl-4">
                                    <!--begin::Mixed Widget 12-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Body-->
                                        <div class="card-body d-flex flex-column">
                                            <div class="flex-grow-1 pb-5">
                                                <!--begin::Info-->
                                                <div class="d-flex align-items-center pr-2 mb-6">
                                                    <span class="text-muted font-weight-bold font-size-lg flex-grow-1">Token-r3a7n6d3o2m</span>


                                                </div>
                                                <!--end::Info-->
                                                <p class="font-weight-bolder text-muted">Message</p>


                                                <!--begin::Link-->
                                                <a href="#" class="text-dark font-weight-bolder text-hover-primary font-size-h4">I Need A Logo For My Website</a>
                                                <!--end::Link-->

                                                <!--begin::Desc-->
                                                <p class="text-dark-50 font-weight-normal font-size-lg mt-6">
                                                </p>
                                                <p class="font-weight-bolder text-muted">Attachment</p>
                                                <p class="text-muted">Note</p>
                                                Pitstop creates quick email campaigns.<br> We help to strengthen your brand<br> for your every purpose.
                                                <p></p>
                                                <!--end::Desc-->
                                            </div>
                                            <!--begin::Team-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Pic-->
                                                <a href="#" class=" mr-32">
                                                </a>
                                                <div class="">
                                                    <a href="#" class=" mr-32">
                                                    </a><a href="#" class="btn btn-primary font-weight-bold py-3 px-6">Accept</a>

                                                </div>

                                                <!--end::Pic-->

                                                <!--begin::Pic-->
                                                <a href="#" class="symbol symbol-45 symbol-light mr-3">

                                                </a>
                                                <!--end::Pic-->

                                                <!--begin::Pic-->
                                                <a href="#" class="symbol symbol-45 symbol-light">
                                                </a>

                                                <!--end::Pic-->
                                            </div>
                                            <!--end::Team-->
                                        </div>
                                        <!--end::Body-->
                                    </div>

                                    <!--end::Mixed Widget 12-->
                                </div>
                                <div class="col-xl-4">
                                    <!--begin::Mixed Widget 12-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Body-->
                                        <div class="card-body d-flex flex-column">
                                            <div class="flex-grow-1 pb-5">
                                                <!--begin::Info-->
                                                <div class="d-flex align-items-center pr-2 mb-6">
                                                    <span class="text-muted font-weight-bold font-size-lg flex-grow-1">Token-r3a7n6d3o2m</span>


                                                </div>
                                                <!--end::Info-->
                                                <p class="font-weight-bolder text-muted">Message</p>


                                                <!--begin::Link-->
                                                <a href="#" class="text-dark font-weight-bolder text-hover-primary font-size-h4">I Need A Logo For My Website</a>
                                                <!--end::Link-->

                                                <!--begin::Desc-->
                                                <p class="text-dark-50 font-weight-normal font-size-lg mt-6">
                                                </p>
                                                <p class="font-weight-bolder text-muted">Attachment</p>
                                                <p class="text-muted">Note</p>
                                                Pitstop creates quick email campaigns.<br> We help to strengthen your brand<br> for your every purpose.
                                                <p></p>
                                                <!--end::Desc-->
                                            </div>
                                            <!--begin::Team-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Pic-->
                                                <a href="#" class=" mr-32">
                                                </a>
                                                <div class="">
                                                    <a href="#" class=" mr-32">
                                                    </a><a href="#" class="btn btn-primary font-weight-bold py-3 px-6">Accept</a>

                                                </div>

                                                <!--end::Pic-->

                                                <!--begin::Pic-->
                                                <a href="#" class="symbol symbol-45 symbol-light mr-3">

                                                </a>
                                                <!--end::Pic-->

                                                <!--begin::Pic-->
                                                <a href="#" class="symbol symbol-45 symbol-light">
                                                </a>

                                                <!--end::Pic-->
                                            </div>
                                            <!--end::Team-->
                                        </div>
                                        <!--end::Body-->
                                    </div>

                                    <!--end::Mixed Widget 12-->
                                </div>
                            </div>

                            <!--end::Row-->

                            <!--end::Dashboard-->
                        </div>
                        <!--end::Container-->
                    </div>

                    <!--end::Entry-->
                </div>
                <!--end::Content-->

          
              
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Main-->







    <!--begin::Quick Panel-->
    <div id="kt_quick_panel" class="offcanvas offcanvas-right pt-5 pb-10">
        <!--begin::Header-->
        <div class="offcanvas-header offcanvas-header-navs d-flex align-items-center justify-content-between mb-5" kt-hidden-height="44" style="">
            <ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-primary flex-grow-1 px-10" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_logs">Audit Logs</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_notifications">Notifications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_settings">Settings</a>
                </li>
            </ul>
            <div class="offcanvas-close mt-n1 pr-5">
                <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_panel_close">
                    <i class="ki ki-close icon-xs text-muted"></i>
                </a>
            </div>
        </div>
        <!--end::Header-->

        <!--begin::Content-->
        <div class="offcanvas-content px-10">
            <div class="tab-content">
                <!--begin::Tabpane-->
                <div class="tab-pane fade show pt-3 pr-5 mr-n5 active scroll ps ps--active-y" id="kt_quick_panel_logs" role="tabpanel" style="height: 498px; overflow: hidden;">
                    <!--begin::Section-->
                    <div class="mb-15">
                        <h5 class="font-weight-bold mb-5">System Messages</h5>
                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-wrap mb-5">
                            <div class="symbol symbol-50 symbol-light mr-5">
                                <span class="symbol-label">
                            <img src="assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="">
                        </span>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Top Authors</a>
                                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                            </div>
                            <span class="btn btn-sm btn-light font-weight-bolder py-1 my-lg-0 my-2 text-dark-50">+82$</span>
                        </div>
                        <!--end: Item-->

                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-wrap mb-5">
                            <div class="symbol symbol-50 symbol-light mr-5">
                                <span class="symbol-label">
                            <img src="assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="">
                        </span>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Popular Authors</a>
                                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                            </div>
                            <span class="btn btn-sm btn-light font-weight-bolder  my-lg-0 my-2 py-1 text-dark-50">+280$</span>
                        </div>
                        <!--end: Item-->

                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-wrap mb-5">
                            <div class="symbol symbol-50 symbol-light mr-5">
                                <span class="symbol-label">
                            <img src="assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt="">
                        </span>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">New Users</a>
                                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                            </div>
                            <span class="btn btn-sm btn-light font-weight-bolder  my-lg-0 my-2 py-1 text-dark-50">+4500$</span>
                        </div>
                        <!--end: Item-->

                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-wrap mb-5">
                            <div class="symbol symbol-50 symbol-light mr-5">
                                <span class="symbol-label">
                            <img src="assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center" alt="">
                        </span>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Active Customers</a>
                                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                            </div>
                            <span class="btn btn-sm btn-light font-weight-bolder my-lg-0 my-2 py-1 text-dark-50">+4500$</span>
                        </div>
                        <!--end: Item-->

                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="symbol symbol-50 symbol-light mr-5">
                                <span class="symbol-label">
                            <img src="assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center" alt="">
                        </span>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Bestseller Theme</a>
                                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                            </div>
                            <span class="btn btn-sm btn-light font-weight-bolder my-lg-0 my-2 py-1 text-dark-50">+4500$</span>
                        </div>
                        <!--end: Item-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="mb-5">
                        <h5 class="font-weight-bold mb-5">Notifications</h5>

                        <!--begin: Item-->
                        <div class="d-flex align-items-center bg-light-warning rounded p-5 mb-5">
                            <span class="svg-icon svg-icon-warning mr-5">
                        <span class="svg-icon svg-icon-lg"><!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"></rect>
    <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000"></path>
    <rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1"></rect>
</g>
</svg><!--end::Svg Icon--></span> </span>

                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#" class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">Another purpose persuade</a>
                                <span class="text-muted font-size-sm">Due in 2 Days</span>
                            </div>

                            <span class="font-weight-bolder text-warning py-1 font-size-lg">+28%</span>
                        </div>
                        <!--end: Item-->

                        <!--begin: Item-->
                        <div class="d-flex align-items-center bg-light-success rounded p-5 mb-5">
                            <span class="svg-icon svg-icon-success mr-5">
                        <span class="svg-icon svg-icon-lg"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"></rect>
    <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) "></path>
    <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
</g>
</svg><!--end::Svg Icon--></span> </span>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#" class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">Would be to people</a>
                                <span class="text-muted font-size-sm">Due in 2 Days</span>
                            </div>

                            <span class="font-weight-bolder text-success py-1 font-size-lg">+50%</span>
                        </div>
                        <!--end: Item-->

                        <!--begin: Item-->
                        <div class="d-flex align-items-center bg-light-danger rounded p-5 mb-5">
                            <span class="svg-icon svg-icon-danger mr-5">
                        <span class="svg-icon svg-icon-lg"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"></rect>
    <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000"></path>
    <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3"></path>
</g>
</svg><!--end::Svg Icon--></span> </span>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#" class="font-weight-normel text-dark-75 text-hover-primary font-size-lg mb-1">Purpose would be to persuade</a>
                                <span class="text-muted font-size-sm">Due in 2 Days</span>
                            </div>

                            <span class="font-weight-bolder text-danger py-1 font-size-lg">-27%</span>
                        </div>
                        <!--end: Item-->

                        <!--begin: Item-->
                        <div class="d-flex align-items-center bg-light-info rounded p-5">
                            <span class="svg-icon svg-icon-info mr-5">
                        <span class="svg-icon svg-icon-lg"><!--begin::Svg Icon | path:assets/media/svg/icons/General/Attachment2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"></rect>
    <path d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z" fill="#000000" opacity="0.3" transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641) "></path>
    <path d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z" fill="#000000" transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359) "></path>
    <path d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z" fill="#000000" opacity="0.3" transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146) "></path>
    <path d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z" fill="#000000" opacity="0.3" transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961) "></path>
</g>
</svg><!--end::Svg Icon--></span> </span>

                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#" class="font-weight-normel text-dark-75 text-hover-primary font-size-lg mb-1">The best product</a>
                                <span class="text-muted font-size-sm">Due in 2 Days</span>
                            </div>

                            <span class="font-weight-bolder text-info py-1 font-size-lg">+8%</span>
                        </div>
                        <!--end: Item-->
                    </div>

                    <!--end::Section-->
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; height: 324px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 126px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; height: 339px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 138px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; height: 258px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 80px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; height: 258px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 80px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; height: 258px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 80px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; height: 259px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 80px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; height: 259px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 80px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; height: 195px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 45px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; height: 195px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 45px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; height: 262px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 82px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; height: 265px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 84px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; height: 265px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 84px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; height: 297px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 106px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; height: 250px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 75px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; height: 515px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 300px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; height: 515px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 300px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; height: 170px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 40px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; height: 515px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 300px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; height: 515px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 300px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; height: 515px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 300px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; height: 466px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 261px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; height: 515px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 300px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; height: 547px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 300px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; height: 498px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 299px;"></div>
                    </div>
                </div>
                <!--end::Tabpane-->

                <!--begin::Tabpane-->
                <div class="tab-pane fade pt-2 pr-5 mr-n5 scroll ps" id="kt_quick_panel_notifications" role="tabpanel" style="height: 498px; overflow: hidden;">
                    <!--begin::Nav-->
                    <div class="navi navi-icon-circle navi-spacer-x-0">
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon-bell text-success icon-lg"></i></div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">
                                        5 new user generated report
                                    </div>
                                    <div class="text-muted">
                                        Reports based on sales
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon2-box text-danger icon-lg"></i></div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        2 new items submited
                                    </div>
                                    <div class="text-muted">
                                        by Grog John
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon-psd text-primary icon-lg"></i></div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        79 PSD files generated
                                    </div>
                                    <div class="text-muted">
                                        Reports based on sales
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon2-supermarket text-warning icon-lg"></i></div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        $2900 worth producucts sold
                                    </div>
                                    <div class="text-muted">
                                        Total 234 items
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon-paper-plane-1 text-success icon-lg"></i></div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        4.5h-avarage response time
                                    </div>
                                    <div class="text-muted">
                                        Fostest is Barry
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon-safe-shield-protection text-danger icon-lg"></i></div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        3 Defence alerts
                                    </div>
                                    <div class="text-muted">
                                        40% less alerts thar last week
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon-notepad text-primary icon-lg"></i></div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        Avarage 4 blog posts per author
                                    </div>
                                    <div class="text-muted">
                                        Most posted 12 time
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon-users-1 text-warning icon-lg"></i></div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        16 authors joined last week
                                    </div>
                                    <div class="text-muted">
                                        9 photodrapehrs, 7 designer
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon2-box text-info icon-lg"></i></div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        2 new items have been submited
                                    </div>
                                    <div class="text-muted">
                                        by Grog John
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon2-download text-success icon-lg"></i></div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        2.8 GB-total downloads size
                                    </div>
                                    <div class="text-muted">
                                        Mostly PSD end AL concepts
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon2-supermarket text-danger icon-lg"></i></div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        $2900 worth producucts sold
                                    </div>
                                    <div class="text-muted">
                                        Total 234 items
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon-bell text-primary icon-lg"></i></div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        7 new user generated report
                                    </div>
                                    <div class="text-muted">
                                        Reports based on sales
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon-paper-plane-1 text-success icon-lg"></i></div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        4.5h-avarage response time
                                    </div>
                                    <div class="text-muted">
                                        Fostest is Barry
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                    </div>
                    <!--end::Nav-->
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                </div>
                <!--end::Tabpane-->

                <!--begin::Tabpane-->
                <div class="tab-pane fade pt-3 pr-5 mr-n5 scroll ps" id="kt_quick_panel_settings" role="tabpanel" style="height: 498px; overflow: hidden;">
                    <form class="form">
                        <!--begin::Section-->
                        <div>
                            <h5 class="font-weight-bold mb-3">Customer Care</h5>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Enable Notifications:</label>
                                <div class="col-4 d-flex justify-content-end">
                                    <span class="switch switch-success switch-sm">
                                <label>
                                    <input type="checkbox" checked="checked" name="select">
                                    <span></span>
                                    </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Enable Case Tracking:</label>
                                <div class="col-4 d-flex justify-content-end">
                                    <span class="switch switch-success switch-sm">
                                <label>
                                    <input type="checkbox" name="quick_panel_notifications_2">
                                    <span></span>
                                    </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Support Portal:</label>
                                <div class="col-4 d-flex justify-content-end">
                                    <span class="switch switch-success switch-sm">
                                <label>
                                    <input type="checkbox" checked="checked" name="select">
                                    <span></span>
                                    </label>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--end::Section-->

                        <div class="separator separator-dashed my-6"></div>

                        <!--begin::Section-->
                        <div class="pt-2">
                            <h5 class="font-weight-bold mb-3">Reports</h5>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Generate Reports:</label>
                                <div class="col-4 d-flex justify-content-end">
                                    <span class="switch switch-sm switch-danger">
                                <label>
                                    <input type="checkbox" checked="checked" name="select">
                                    <span></span>
                                    </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Enable Report Export:</label>
                                <div class="col-4 d-flex justify-content-end">
                                    <span class="switch switch-sm switch-danger">
                                <label>
                                    <input type="checkbox" name="select">
                                    <span></span>
                                    </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Allow Data Collection:</label>
                                <div class="col-4 d-flex justify-content-end">
                                    <span class="switch switch-sm switch-danger">
                                <label>
                                    <input type="checkbox" checked="checked" name="select">
                                    <span></span>
                                    </label>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--end::Section-->

                        <div class="separator separator-dashed my-6"></div>

                        <!--begin::Section-->
                        <div class="pt-2">
                            <h5 class="font-weight-bold mb-3">Memebers</h5>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Enable Member singup:</label>
                                <div class="col-4 d-flex justify-content-end">
                                    <span class="switch switch-sm switch-primary">
                                <label>
                                    <input type="checkbox" checked="checked" name="select">
                                    <span></span>
                                    </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Allow User Feedbacks:</label>
                                <div class="col-4 d-flex justify-content-end">
                                    <span class="switch switch-sm switch-primary">
                                <label>
                                    <input type="checkbox" name="select">
                                    <span></span>
                                    </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Enable Customer Portal:</label>
                                <div class="col-4 d-flex justify-content-end">
                                    <span class="switch switch-sm switch-primary">
                                <label>
                                    <input type="checkbox" checked="checked" name="select">
                                    <span></span>
                                    </label>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--end::Section-->
                    </form>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                </div>
                <!--end::Tabpane-->
            </div>
        </div>
        <!--end::Content-->
    </div>
    <!--end::Quick Panel-->


    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop">
        <span class="svg-icon"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <polygon points="0 0 24 0 24 24 0 24"></polygon>
    <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1"></rect>
    <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero"></path>
</g>
</svg><!--end::Svg Icon--></span></div>
    <!--end::Scrolltop-->

    <!--begin::Sticky Toolbar-->

    <!--end::Sticky Toolbar-->
    <!--begin::Demo Panel-->
    <div id="kt_demo_panel" class="offcanvas offcanvas-right p-10">
        <!--begin::Header-->
        <div class="offcanvas-header d-flex align-items-center justify-content-between pb-7" kt-hidden-height="46" style="">
            <h4 class="font-weight-bold m-0">
                Select A Demo
            </h4>
            <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_demo_panel_close">
                <i class="ki ki-close icon-xs text-muted"></i>
            </a>
        </div>
        <!--end::Header-->

        <!--begin::Content-->
        <div class="offcanvas-content">
            <!--begin::Wrapper-->
            <div class="offcanvas-wrapper mb-5 scroll-pull scroll ps ps--active-y" style="height: 480px; overflow: hidden;">
                <h5 class="font-weight-bold mb-4 text-center">Demo 1</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo1.png" alt="" class="w-100">
                    </div>
                    <div class="overlay-layer">
                        <a href="https://keenthemes.com/metronic/preview/demo1/index.html" class="btn font-weight-bold btn-primary btn-shadow " target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo1/rtl/index.html" class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 2</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo offcanvas-demo-active">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo2.png" alt="" class="w-100">
                    </div>
                    <div class="overlay-layer">
                        <a href="https://keenthemes.com/metronic/preview/demo2/index.html" class="btn font-weight-bold btn-primary btn-shadow " target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo2/rtl/index.html" class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 3</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo3.png" alt="" class="w-100">
                    </div>
                    <div class="overlay-layer">
                        <a href="https://keenthemes.com/metronic/preview/demo3/index.html" class="btn font-weight-bold btn-primary btn-shadow " target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo3/rtl/index.html" class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 4</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo4.png" alt="" class="w-100">
                    </div>
                    <div class="overlay-layer">
                        <a href="https://keenthemes.com/metronic/preview/demo4/index.html" class="btn font-weight-bold btn-primary btn-shadow " target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo4/rtl/index.html" class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 5</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo5.png" alt="" class="w-100">
                    </div>
                    <div class="overlay-layer">
                        <a href="https://keenthemes.com/metronic/preview/demo5/index.html" class="btn font-weight-bold btn-primary btn-shadow " target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo5/rtl/index.html" class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 6</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo6.png" alt="" class="w-100">
                    </div>
                    <div class="overlay-layer">
                        <a href="https://keenthemes.com/metronic/preview/demo6/index.html" class="btn font-weight-bold btn-primary btn-shadow " target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo6/rtl/index.html" class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 7</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo7.png" alt="" class="w-100">
                    </div>
                    <div class="overlay-layer">
                        <a href="https://keenthemes.com/metronic/preview/demo7/index.html" class="btn font-weight-bold btn-primary btn-shadow " target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo7/rtl/index.html" class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 8</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo8.png" alt="" class="w-100">
                    </div>
                    <div class="overlay-layer">
                        <a href="https://keenthemes.com/metronic/preview/demo8/index.html" class="btn font-weight-bold btn-primary btn-shadow " target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo8/rtl/index.html" class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 9</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo9.png" alt="" class="w-100">
                    </div>
                    <div class="overlay-layer">
                        <a href="https://keenthemes.com/metronic/preview/demo9/index.html" class="btn font-weight-bold btn-primary btn-shadow " target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo9/rtl/index.html" class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 10</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo10.png" alt="" class="w-100">
                    </div>
                    <div class="overlay-layer">
                        <a href="https://keenthemes.com/metronic/preview/demo10/index.html" class="btn font-weight-bold btn-primary btn-shadow " target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo10/rtl/index.html" class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 11</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo11.png" alt="" class="w-100">
                    </div>
                    <div class="overlay-layer">
                        <a href="https://keenthemes.com/metronic/preview/demo11/index.html" class="btn font-weight-bold btn-primary btn-shadow " target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo11/rtl/index.html" class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 12</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo12.png" alt="" class="w-100">
                    </div>
                    <div class="overlay-layer">
                        <a href="https://keenthemes.com/metronic/preview/demo12/index.html" class="btn font-weight-bold btn-primary btn-shadow " target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo12/rtl/index.html" class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 13</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo13.png" alt="" class="w-100">
                    </div>
                    <div class="overlay-layer">
                        <a href="https://keenthemes.com/metronic/preview/demo13/index.html" class="btn font-weight-bold btn-primary btn-shadow " target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo13/rtl/index.html" class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 14</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo14.png" alt="" class="w-100">
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>

                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 15</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo15.png" alt="" class="w-100">
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>

                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 16</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo16.png" alt="" class="w-100">
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>

                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 17</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo17.png" alt="" class="w-100">
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>

                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 18</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo18.png" alt="" class="w-100">
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>

                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 19</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo19.png" alt="" class="w-100">
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>

                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 20</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo20.png" alt="" class="w-100">
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>

                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 21</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo21.png" alt="" class="w-100">
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>

                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 22</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo22.png" alt="" class="w-100">
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>

                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 23</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo23.png" alt="" class="w-100">
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>

                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 24</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo24.png" alt="" class="w-100">
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>

                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 25</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo25.png" alt="" class="w-100">
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>

                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 26</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo26.png" alt="" class="w-100">
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>

                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 27</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo27.png" alt="" class="w-100">
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>

                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 28</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo28.png" alt="" class="w-100">
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>

                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 29</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo29.png" alt="" class="w-100">
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>

                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 30</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo30.png" alt="" class="w-100">
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>

                    </div>
                </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 268px; right: -2px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 40px;"></div>
                </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 283px; right: -2px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 40px;"></div>
                </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 202px; right: -2px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 40px;"></div>
                </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 202px; right: -2px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 40px;"></div>
                </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 202px; right: -2px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 40px;"></div>
                </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 203px; right: -2px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 40px;"></div>
                </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 203px; right: -2px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 40px;"></div>
                </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 139px; right: -2px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 40px;"></div>
                </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 139px; right: -2px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 40px;"></div>
                </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 206px; right: -2px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 40px;"></div>
                </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 209px; right: -2px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 40px;"></div>
                </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 209px; right: -2px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 40px;"></div>
                </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 241px; right: -2px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 40px;"></div>
                </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 194px; right: -2px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 40px;"></div>
                </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 459px; right: -2px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 40px;"></div>
                </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 459px; right: -2px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 40px;"></div>
                </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 114px; right: -2px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 40px;"></div>
                </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 459px; right: -2px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 40px;"></div>
                </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 459px; right: -2px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 40px;"></div>
                </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 459px; right: -2px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 40px;"></div>
                </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 410px; right: -2px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 82px;"></div>
                </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 497px; right: -2px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 121px;"></div>
                </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 529px; right: -2px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 90px;"></div>
                </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 480px; right: -2px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 40px;"></div>
                </div>
            </div>
            <!--end::Wrapper-->


        </div>
        <!--end::Content-->
    </div>
    <!--end::Demo Panel-->

    <script>
        var HOST_URL = "";
    </script>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1200
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#6993FF",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#F3F6F9",
                        "dark": "#212121"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#E1E9FF",
                        "secondary": "#ECF0F3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#212121",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#ECF0F3",
                    "gray-300": "#E5EAEE",
                    "gray-400": "#D6D6E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#80808F",
                    "gray-700": "#464E5F",
                    "gray-800": "#1B283F",
                    "gray-900": "#212121"
                }
            },
            "font-family": "Poppins"
        };
    </script>
    <!--end::Global Config-->


    <!--end::Body-->

    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M-1 125L-1 125C-1 125 31.545454545454543 125 31.545454545454543 125C31.545454545454543 125 63.090909090909086 125 63.090909090909086 125C63.090909090909086 125 94.63636363636364 125 94.63636363636364 125C94.63636363636364 125 126.18181818181817 125 126.18181818181817 125C126.18181818181817 125 157.72727272727272 125 157.72727272727272 125C157.72727272727272 125 189.27272727272728 125 189.27272727272728 125C189.27272727272728 125 220.8181818181818 125 220.8181818181818 125C220.8181818181818 125 252.36363636363635 125 252.36363636363635 125C252.36363636363635 125 283.9090909090909 125 283.9090909090909 125C283.9090909090909 125 315.45454545454544 125 315.45454545454544 125C315.45454545454544 125 347 125 347 125C347 125 347 125 347 125 "></path></svg>

    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M-1 125L-1 125C-1 125 31.545454545454543 125 31.545454545454543 125C31.545454545454543 125 63.090909090909086 125 63.090909090909086 125C63.090909090909086 125 94.63636363636364 125 94.63636363636364 125C94.63636363636364 125 126.18181818181817 125 126.18181818181817 125C126.18181818181817 125 157.72727272727272 125 157.72727272727272 125C157.72727272727272 125 189.27272727272728 125 189.27272727272728 125C189.27272727272728 125 220.8181818181818 125 220.8181818181818 125C220.8181818181818 125 252.36363636363635 125 252.36363636363635 125C252.36363636363635 125 283.9090909090909 125 283.9090909090909 125C283.9090909090909 125 315.45454545454544 125 315.45454545454544 125C315.45454545454544 125 347 125 347 125C347 125 347 125 347 125 "></path></svg>

    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M-1 125L-1 125C-1 125 31.545454545454543 125 31.545454545454543 125C31.545454545454543 125 63.090909090909086 125 63.090909090909086 125C63.090909090909086 125 94.63636363636364 125 94.63636363636364 125C94.63636363636364 125 126.18181818181817 125 126.18181818181817 125C126.18181818181817 125 157.72727272727272 125 157.72727272727272 125C157.72727272727272 125 189.27272727272728 125 189.27272727272728 125C189.27272727272728 125 220.8181818181818 125 220.8181818181818 125C220.8181818181818 125 252.36363636363635 125 252.36363636363635 125C252.36363636363635 125 283.9090909090909 125 283.9090909090909 125C283.9090909090909 125 315.45454545454544 125 315.45454545454544 125C315.45454545454544 125 347 125 347 125C347 125 347 125 347 125 "></path></svg>

    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M-1 125L-1 125C-1 125 31.545454545454543 125 31.545454545454543 125C31.545454545454543 125 63.090909090909086 125 63.090909090909086 125C63.090909090909086 125 94.63636363636364 125 94.63636363636364 125C94.63636363636364 125 126.18181818181817 125 126.18181818181817 125C126.18181818181817 125 157.72727272727272 125 157.72727272727272 125C157.72727272727272 125 189.27272727272728 125 189.27272727272728 125C189.27272727272728 125 220.8181818181818 125 220.8181818181818 125C220.8181818181818 125 252.36363636363635 125 252.36363636363635 125C252.36363636363635 125 283.9090909090909 125 283.9090909090909 125C283.9090909090909 125 315.45454545454544 125 315.45454545454544 125C315.45454545454544 125 347 125 347 125C347 125 347 125 347 125 "></path></svg>

    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M-1 125L-1 125C-1 125 31.545454545454543 125 31.545454545454543 125C31.545454545454543 125 63.090909090909086 125 63.090909090909086 125C63.090909090909086 125 94.63636363636364 125 94.63636363636364 125C94.63636363636364 125 126.18181818181817 125 126.18181818181817 125C126.18181818181817 125 157.72727272727272 125 157.72727272727272 125C157.72727272727272 125 189.27272727272728 125 189.27272727272728 125C189.27272727272728 125 220.8181818181818 125 220.8181818181818 125C220.8181818181818 125 252.36363636363635 125 252.36363636363635 125C252.36363636363635 125 283.9090909090909 125 283.9090909090909 125C283.9090909090909 125 315.45454545454544 125 315.45454545454544 125C315.45454545454544 125 347 125 347 125C347 125 347 125 347 125 "></path></svg>

    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M-1 125L-1 125C-1 125 31.545454545454543 125 31.545454545454543 125C31.545454545454543 125 63.090909090909086 125 63.090909090909086 125C63.090909090909086 125 94.63636363636364 125 94.63636363636364 125C94.63636363636364 125 126.18181818181817 125 126.18181818181817 125C126.18181818181817 125 157.72727272727272 125 157.72727272727272 125C157.72727272727272 125 189.27272727272728 125 189.27272727272728 125C189.27272727272728 125 220.8181818181818 125 220.8181818181818 125C220.8181818181818 125 252.36363636363635 125 252.36363636363635 125C252.36363636363635 125 283.9090909090909 125 283.9090909090909 125C283.9090909090909 125 315.45454545454544 125 315.45454545454544 125C315.45454545454544 125 347 125 347 125C347 125 347 125 347 125 "></path></svg>

    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M-1 125L-1 125C-1 125 31.545454545454543 125 31.545454545454543 125C31.545454545454543 125 63.090909090909086 125 63.090909090909086 125C63.090909090909086 125 94.63636363636364 125 94.63636363636364 125C94.63636363636364 125 126.18181818181817 125 126.18181818181817 125C126.18181818181817 125 157.72727272727272 125 157.72727272727272 125C157.72727272727272 125 189.27272727272728 125 189.27272727272728 125C189.27272727272728 125 220.8181818181818 125 220.8181818181818 125C220.8181818181818 125 252.36363636363635 125 252.36363636363635 125C252.36363636363635 125 283.9090909090909 125 283.9090909090909 125C283.9090909090909 125 315.45454545454544 125 315.45454545454544 125C315.45454545454544 125 347 125 347 125C347 125 347 125 347 125 "></path></svg>

    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M-1 125L-1 125C-1 125 31.545454545454543 125 31.545454545454543 125C31.545454545454543 125 63.090909090909086 125 63.090909090909086 125C63.090909090909086 125 94.63636363636364 125 94.63636363636364 125C94.63636363636364 125 126.18181818181817 125 126.18181818181817 125C126.18181818181817 125 157.72727272727272 125 157.72727272727272 125C157.72727272727272 125 189.27272727272728 125 189.27272727272728 125C189.27272727272728 125 220.8181818181818 125 220.8181818181818 125C220.8181818181818 125 252.36363636363635 125 252.36363636363635 125C252.36363636363635 125 283.9090909090909 125 283.9090909090909 125C283.9090909090909 125 315.45454545454544 125 315.45454545454544 125C315.45454545454544 125 347 125 347 125C347 125 347 125 347 125 "></path></svg>

    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M-1 125L-1 125C-1 125 31.545454545454543 125 31.545454545454543 125C31.545454545454543 125 63.090909090909086 125 63.090909090909086 125C63.090909090909086 125 94.63636363636364 125 94.63636363636364 125C94.63636363636364 125 126.18181818181817 125 126.18181818181817 125C126.18181818181817 125 157.72727272727272 125 157.72727272727272 125C157.72727272727272 125 189.27272727272728 125 189.27272727272728 125C189.27272727272728 125 220.8181818181818 125 220.8181818181818 125C220.8181818181818 125 252.36363636363635 125 252.36363636363635 125C252.36363636363635 125 283.9090909090909 125 283.9090909090909 125C283.9090909090909 125 315.45454545454544 125 315.45454545454544 125C315.45454545454544 125 347 125 347 125C347 125 347 125 347 125 "></path></svg>

    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M-1 125L-1 125C-1 125 31.545454545454543 125 31.545454545454543 125C31.545454545454543 125 63.090909090909086 125 63.090909090909086 125C63.090909090909086 125 94.63636363636364 125 94.63636363636364 125C94.63636363636364 125 126.18181818181817 125 126.18181818181817 125C126.18181818181817 125 157.72727272727272 125 157.72727272727272 125C157.72727272727272 125 189.27272727272728 125 189.27272727272728 125C189.27272727272728 125 220.8181818181818 125 220.8181818181818 125C220.8181818181818 125 252.36363636363635 125 252.36363636363635 125C252.36363636363635 125 283.9090909090909 125 283.9090909090909 125C283.9090909090909 125 315.45454545454544 125 315.45454545454544 125C315.45454545454544 125 347 125 347 125C347 125 347 125 347 125 "></path></svg>

    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M0 0 "></path></svg>

    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M0 0 "></path></svg>
    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1002"></defs>
        <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
        <path id="SvgjsPath1004" d="M0 0 "></path>
        </svg>


    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M-1 125L-1 125C-1 125 31.545454545454543 125 31.545454545454543 125C31.545454545454543 125 63.090909090909086 125 63.090909090909086 125C63.090909090909086 125 94.63636363636364 125 94.63636363636364 125C94.63636363636364 125 126.18181818181817 125 126.18181818181817 125C126.18181818181817 125 157.72727272727272 125 157.72727272727272 125C157.72727272727272 125 189.27272727272728 125 189.27272727272728 125C189.27272727272728 125 220.8181818181818 125 220.8181818181818 125C220.8181818181818 125 252.36363636363635 125 252.36363636363635 125C252.36363636363635 125 283.9090909090909 125 283.9090909090909 125C283.9090909090909 125 315.45454545454544 125 315.45454545454544 125C315.45454545454544 125 347 125 347 125C347 125 347 125 347 125 "></path></svg>

    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M-1 125L-1 125C-1 125 31.545454545454543 125 31.545454545454543 125C31.545454545454543 125 63.090909090909086 125 63.090909090909086 125C63.090909090909086 125 94.63636363636364 125 94.63636363636364 125C94.63636363636364 125 126.18181818181817 125 126.18181818181817 125C126.18181818181817 125 157.72727272727272 125 157.72727272727272 125C157.72727272727272 125 189.27272727272728 125 189.27272727272728 125C189.27272727272728 125 220.8181818181818 125 220.8181818181818 125C220.8181818181818 125 252.36363636363635 125 252.36363636363635 125C252.36363636363635 125 283.9090909090909 125 283.9090909090909 125C283.9090909090909 125 315.45454545454544 125 315.45454545454544 125C315.45454545454544 125 347 125 347 125C347 125 347 125 347 125 "></path></svg>

    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M0 0 "></path></svg>

    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M0 0 "></path></svg>
    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1002"></defs>
        <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
        <path id="SvgjsPath1004" d="M0 0 "></path>
        </svg>


    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M0 0 "></path></svg>

    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M0 0 "></path></svg>

    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M0 0 "></path></svg>

    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M0 0 "></path></svg>
    <svg
        id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1002"></defs>
        <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
        <path id="SvgjsPath1004" d="M0 0 "></path>
        </svg><svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M0 0 "></path></svg></body>

</html>
    
@endsection