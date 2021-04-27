
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Notice-->
            <div class="card card-custom gutter-b"></div>
            <!--end::Notice-->
            <!--begin::Card-->
            <div class="card card-custom gutter-b">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">Advertisement Listing
                            <span class="d-block text-muted pt-2 font-size-sm">Advertisement listing</span>
                        </h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Button-->
                        <a href="<?php echo base_url('advertisement/create'); ?>" class="btn btn-light-primary btn-pill font-weight-bolder">
                            <span class="svg-icon svg-icon-md">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                        <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                        <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>Create Announcement</a>
                        <!--end::Button-->
                    </div>
                </div>

                <!-- New Customers Accounts Table -->
                <div class="container mt-5">
                                <!--begin::Row-->
                                <div class="row">
                                    <?php
                                    $i = 0;
                                    foreach ($getAllAdvertisements as $getAllAdvertisement) {
                                    ?>
                                    <div class="col-xl-4 mt-3">
                                        <div class="card card-custom">
                                            <div class="card-header card-header-tabs-line">
                                                <div class="card-title">
                                                    <h3 class="card-label badge badge-danger text-white">Price : <?=$getAllAdvertisement->price?> $</h3>
                                                </div>
                                                <div class="card-toolbar">
                                                    <ul class="nav nav-tabs nav-bold nav-tabs-line">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_1_2_<?=$i?>">Featured</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link " data-toggle="tab" href="#kt_tab_pane_2_2_<?=$i?>">Address</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link " data-toggle="tab" href="#kt_tab_pane_3_2_<?=$i?>">Contact</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade active show" id="kt_tab_pane_1_2_<?=$i?>" role="tabpanel">
                                                        <img class="advertisementimg" src="<?=$assets?>/uploads/advertisement/<?=$getAllAdvertisement->advertisement_avatar?>">
                                                    </div>
                                                    <div class="tab-pane fade " id="kt_tab_pane_2_2_<?=$i?>" role="tabpanel">
                                                        <div class="row addressrow">
                                                            <div class="col-sm-12 mt-2">
                                                                <label><b>Address 1 : </b></label>
                                                                <?=$getAllAdvertisement->address1?>
                                                            </div>
                                                            <div class="col-sm-12 mt-2">
                                                                <label><b>Address 2 : </b></label>
                                                                <?=$getAllAdvertisement->address2?>
                                                            </div>
                                                            <div class="col-sm-12 mt-2">
                                                                <label><b>Postcode : </b></label>
                                                                <?=$getAllAdvertisement->postcode?>
                                                            </div>
                                                            <div class="col-sm-12 mt-2">
                                                                <label><b>City : </b></label>
                                                                <?=$getAllAdvertisement->city?>
                                                            </div>
                                                            <div class="col-sm-6 mt-2">
                                                                <label><b>State : </b></label>
                                                                <?=$getAllAdvertisement->state?>
                                                            </div>
                                                            <div class="col-sm-6 mt-2">
                                                                <label><b>Country : </b></label>
                                                                <?=$getAllAdvertisement->country?>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="kt_tab_pane_3_2_<?=$i?>" role="tabpanel">
                                                        <div class="row addressrow">
                                                            <div class="col-sm-12 mt-2">
                                                                <label><b>First Name : </b></label>
                                                                <?=$getAllAdvertisement->first_name?>
                                                            </div>
                                                            <div class="col-sm-12 mt-2">
                                                                <label><b>Last Name : </b></label>
                                                                <?=$getAllAdvertisement->last_name?>
                                                            </div>
                                                            <div class="col-sm-12 mt-2">
                                                                <label><b>Phone : </b></label>
                                                                <?=$getAllAdvertisement->phone?>
                                                            </div>
                                                            <div class="col-sm-12 mt-2">
                                                                <label><b>Email : </b></label>
                                                                <?=$getAllAdvertisement->email?>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                    }
                                    ?>
                                </div>
                                <!--end::Row-->
                            </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
