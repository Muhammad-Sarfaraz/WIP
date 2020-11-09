@extends('worker/layout/master')

@section('Title')
    
@endsection

@section('content')






<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-12  subheader-transparent " id="kt_subheader">
        <div class=" container  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">

                <!--begin::Heading-->
                <div class="d-flex flex-column">
                    <!--begin::Title-->
                    <h2 class="text-white font-weight-bold my-2 mr-5">
                        History </h2>
                    <!--end::Title-->

                    <!--begin::Breadcrumb-->
                    <div class="d-flex align-items-center font-weight-bold my-2">
                        <!--begin::Item-->
                    <a href="{{url('/w/dashboard')}}" class="opacity-75 hover-opacity-100">
                            <i class="flaticon2-shelter text-white icon-1x"></i>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                        <a href="{{url('/w/dashboard')}}" class="text-white text-hover-white opacity-75 hover-opacity-100">Dashboard</a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                    <a href="{{url('w/jobs')}}" class="text-white text-hover-white opacity-75 hover-opacity-100">
                Jobs                          </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                        <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">
                History                            </a>
                        <!--end::Item-->
                    </div>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Heading-->

            </div>
            <!--end::Info-->

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
                                    <span class="navi-icon"><i class="flaticon2-drop"></i></span>
                                    <span class="navi-text">New Group</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon"><i class="flaticon2-list-3"></i></span>
                                    <span class="navi-text">Contacts</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon"><i class="flaticon2-rocket-1"></i></span>
                                    <span class="navi-text">Groups</span>
                                    <span class="navi-link-badge">
<span class="label label-light-primary label-inline font-weight-bold">new</span>
                                    </span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon"><i class="flaticon2-bell-2"></i></span>
                                    <span class="navi-text">Calls</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon"><i class="flaticon2-gear"></i></span>
                                    <span class="navi-text">Settings</span>
                                </a>
                            </li>

                            <li class="navi-separator my-3"></li>

                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon"><i class="flaticon2-magnifier-tool"></i></span>
                                    <span class="navi-text">Help</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon"><i class="flaticon2-bell-2"></i></span>
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
    <!--end::Subheader-->




    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container ">
            <!--begin::Card-->
            <div class="card card-custom gutter-b">
                <div class="card-body">
                    <!--begin: Datatable-->
                    <div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded" id="kt_datatable" style="">
                        <table class="datatable-table" style="display: block;">
                            <thead class="datatable-head">
                                <tr class="datatable-row" style="left: 0px;">
                                    <th class="datatable-cell datatable-toggle-detail"><span></span></th>
                                    <th data-field="RecordID" class="datatable-cell-left datatable-cell datatable-cell-sort datatable-cell-sorted" data-sort="asc"><span style="width: 40px;"></span></th>
                                    <th data-field="OrderID" class="datatable-cell datatable-cell-sort"><span style="width: 250px;">Token</span></th>
                                    <th data-field="Country" class="datatable-cell datatable-cell-sort"><span style="width: 130px;">Amount</span></th>
                                    <th data-field="ShipDate" class="datatable-cell datatable-cell-sort"><span style="width: 130px;">Date</span></th>
                                    <th data-field="CompanyName" class="datatable-cell datatable-cell-sort"><span style="width: 130px;">Rating</span></th>
                                    <th data-field="Status" class="datatable-cell datatable-cell-sort" style="display: none;"><span style="width: 130px;">Status</span></th>
                                    <th data-field="Actions" data-autohide-disabled="false" class="datatable-cell datatable-cell-sort"><span style="width: 130px;">Status</span></th>
                                </tr>
                            </thead>
                            <tbody class="datatable-body" style="">
                                <tr data-row="0" class="datatable-row" style="left: 0px;">
                                    <td class="datatable-cell datatable-toggle-detail"><a class="datatable-toggle-detail"><i class="fa fa-caret-right"></i></a></td>
                                    <td class="datatable-cell-sorted datatable-cell-left datatable-cell" data-field="RecordID" aria-label="1"><span style="width: 40px;"><span class="font-weight-bolder">1</span></span>
                                    </td>
                                    <td data-field="OrderID" aria-label="64616-103" class="datatable-cell"><span style="width: 250px;"><div class="d-flex align-items-center">																<div class="ml-3">																		<a href="#" class="text-muted font-weight-bold text-hover-primary">123Dsba21234</a>								</div>							</div></span></td>
                                    <td data-field="Country" aria-label="Brazil" class="datatable-cell"><span style="width: 130px;"><div class="font-weight-bolder font-size-lg mb-0">$60</div></span></td>
                                    <td data-field="ShipDate" aria-label="10/15/2017" class="datatable-cell"><span style="width: 130px;"><div class="font-weight-bolder text-primary mb-0">10/11/2020</div></span></td>
                                    <td data-field="CompanyName" aria-label="Casper-Kerluke" class="datatable-cell"><span style="width: 130px;"><div class="font-weight-bold text-muted">4.5</div></span></td>
                                    <td data-field="Status" aria-label="5" class="datatable-cell" style="display: none;"><span style="width: 130px;"><span class="label label-lg font-weight-bold  label-light-info label-inline">Info</span></span>
                                    </td>
                                    <td data-field="Actions" data-autohide-disabled="false" aria-label="null" class="datatable-cell"><span class="text-muted" style="overflow: visible; position: relative; width: 130px;">  
Completed
                    
                    
                    </span>
                    </td>
                    </tr>
                    
                
            






</tbody>
</table>
<div class="datatable-pager datatable-paging-loaded">
<ul class="datatable-pager-nav mb-5 mb-sm-0">
<li><a title="First" class="datatable-pager-link datatable-pager-link-first datatable-pager-link-disabled" data-page="1" disabled="disabled"><i class="flaticon2-fast-back"></i></a></li>
<li><a title="Previous" class="datatable-pager-link datatable-pager-link-prev datatable-pager-link-disabled" data-page="1" disabled="disabled"><i class="flaticon2-back"></i></a></li>
<li style=""></li>
<li style="display: none;"><input type="text" class="datatable-pager-input form-control" title="Page number"></li>
<li><a class="datatable-pager-link datatable-pager-link-number datatable-pager-link-active" data-page="1" title="1">1</a></li>
<li><a class="datatable-pager-link datatable-pager-link-number" data-page="2" title="2">2</a></li>
<li><a class="datatable-pager-link datatable-pager-link-number" data-page="3" title="3">3</a></li>
<li><a class="datatable-pager-link datatable-pager-link-number" data-page="4" title="4">4</a></li>
<li><a class="datatable-pager-link datatable-pager-link-number" data-page="5" title="5">5</a></li>
<li></li>
<li><a title="Next" class="datatable-pager-link datatable-pager-link-next" data-page="2"><i class="flaticon2-next"></i></a></li>
<li><a title="Last" class="datatable-pager-link datatable-pager-link-last" data-page="35"><i class="flaticon2-fast-next"></i></a></li>
</ul>

</div>
</div>
<!--end: Datatable-->
</div>
</div>
<!--end::Card-->

<!--begin::Modal-->
<div class="modal fade" id="kt_datatable_records_fetch_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Selected Records</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true"></span>
</button>
</div>
<div class="modal-body">
    <div class="kt-scroll scroll ps" data-scroll="true" data-height="200" style="height: 200px; overflow: hidden;">
        <ul id="kt_apps_user_fetch_records_selected"></ul>
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
    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
<!--end::Modal-->
</div>
<!--end::Container-->
</div>
</div>

























    
@endsection