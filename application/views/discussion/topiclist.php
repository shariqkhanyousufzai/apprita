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
                        <h3 class="card-label">Topic Listing
                            <span class="d-block text-muted pt-2 font-size-sm">Topic listing & discussion</span>
                        </h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Button-->
                        <a href="<?php echo base_url('discussion/createtopic'); ?>" class="btn btn-light-primary btn-pill font-weight-bolder">
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
                            </span>Add new Topic</a>
                        <!--end::Button-->
                    </div>
                </div>

                <!-- New Customers Accounts Table -->
                <div class="card-body">
                        <div class="mb-7">
                            <div class="row align-items-center">
                                <div class="col-lg-9 col-xl-8">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 my-2 my-md-0">
                                            <div class="input-icon">
                                                <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
                                                <span>
                                                    <i class="flaticon2-search-1 text-muted"></i>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-md-6 my-2 my-md-0">
                                            <div class="d-flex align-items-center">
                                                <label class="mr-3 mb-0 d-none d-md-block">Category</label>
                                                <select class="form-control" id="kt_datatable_search_type">
                                                    <option value="">All</option>
                                                       <?php
                                                       foreach ($getCategorys as $getCategory) {
                                                       ?>
                                                       <option value="<?=$getCategory->name?>"><?=$getCategory->name?></option>
                                                       <?php
                                                       }
                                                       ?>
                                             </select>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <table class="discussionlist datatable datatable-bordered datatable-head-custom" id="kt_datatable">
                        <thead>
                            <tr>
                                <th  class="all">ID</th>
                                <th  class="all">Name</th>
                                <th  class="all">Category</th>
                                <th  class="actiondt">Actions</th>
                                <th  class="all" ></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $sno = 1;
                            foreach($topics as $topic ){?>
                                <tr>
                                    <td><?php echo $sno;?></td>
                                    <td><?php echo $topic->name;?></td>
                                    <td><?php echo $topic->category;?></td>
                                    <td>
                                        <a href="<?php echo base_url('discussion/view/'.encode_url($topic->id)); ?>" class="btn btn-sm btn-clean btn-icon" title="Add Reply">
                                            <span class="svg-icon svg-icon-md">
                                                <i class="ki ki-drag"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                <?php $sno++;
                            }?>
                        </tbody>
                    </table>
                    <!--end: Datatable-->
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<script type="text/javascript">
    var KTDatatableHtmlTableDemo = function() {
    // Private functions

    // demo initializer
    var demo = function() {

        var datatable = $('#kt_datatable').KTDatatable({
            data: {
                saveState: {cookie: false},
            },
            search: {
                input: $('#kt_datatable_search_query'),
                key: 'generalSearch'
            },
            
        });



        $('#kt_datatable_search_status').on('change', function() {
            datatable.search($(this).val().toLowerCase(), 'Status');
        });

        $('#kt_datatable_search_type').on('change', function() {
            datatable.search($(this).val().toLowerCase(), 'Category');
        });

        $('#kt_datatable_search_status, #kt_datatable_search_type').selectpicker();

    };

    return {
        // Public functions
        init: function() {
            // init dmeo
            demo();
        },
    };
}();

jQuery(document).ready(function() {
    KTDatatableHtmlTableDemo.init();
});

</script>