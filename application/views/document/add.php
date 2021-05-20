 <!--begin::Content-->
 <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->

            <!--end::Details-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
           <!--  <?php if ($this->session->flashdata('message')) { ?>
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php } ?> -->

            <!--begin::Card-->
            <div class="card card-custom">
                <!--begin::Card header-->
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body">
                    <div class="card card-custom">
                     <div class="card-header">
                      <h3 class="card-title">
                       Upload Document
                   </h3>
                   <div class="card-toolbar">
                       <div class="example-tools justify-content-center">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                </div>
            </div>
            <!--begin::Form-->
            <form autocomplete="off" method="post" action="<?= base_url('document/create') ?>" enctype="multipart/form-data">
              <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <input type="file" name="document[]" required multiple class="form-control">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" name="resource_type" required class="form-control" placeholder="Resource Type">
                    </div>
                </div>
            </div>
            <div class="card-footer" align="right">
                <button class="btn btn-primary mr-2">Submit</button>
            </div>
        </form>
        <!--end::Form-->
    </div>
</div>
<!--begin::Card body-->
</div>
<div class="card card-custom mt-5">
                <!--begin::Card header-->
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body">
                    <div class="card card-custom">
                       <div class="card-header">
                          <h3 class="card-title">
                             Document List
                         </h3>
                         <div class="card-toolbar">
                             <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->

                    <!--end::Form-->
                </div>
                <div>
                    <div class="row">
                        <?php
                        foreach ($attachments as $attachment) {
                        ?>
                        <div class="col-sm-4 mt-5" align="center">
                            <span class="svg-icon svg-icon-primary svg-icon-5x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="500px" height="500px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                    <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                    <rect fill="#000000" opacity="0.3" transform="translate(8.984240, 12.127098) rotate(-45.000000) translate(-8.984240, -12.127098) " x="7.41281179" y="10.5556689" width="3.14285714" height="3.14285714" rx="0.75"/>
                                    <rect fill="#000000" opacity="0.3" transform="translate(15.269955, 12.127098) rotate(-45.000000) translate(-15.269955, -12.127098) " x="13.6985261" y="10.5556689" width="3.14285714" height="3.14285714" rx="0.75"/>
                                    <rect fill="#000000" transform="translate(12.127098, 15.269955) rotate(-45.000000) translate(-12.127098, -15.269955) " x="10.5556689" y="13.6985261" width="3.14285714" height="3.14285714" rx="0.75"/>
                                    <rect fill="#000000" transform="translate(12.127098, 8.984240) rotate(-45.000000) translate(-12.127098, -8.984240) " x="10.5556689" y="7.41281179" width="3.14285714" height="3.14285714" rx="0.75"/>
                                </g>
                            </svg><!--end::Svg Icon--></span>
                            <div class="mt-4">
                                <div><label><b>Name:</b></label> <?=$attachment->name?></div>
                                <div><label><b>Type:</b></label> <?=$attachment->resource_type?></div>
                                <a href="<?=$attachment->path?>" target="_blank" class="btn btn-dark btn-sm mt-3">Open File</a>
                            </div>
                        </div>

                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
<!--begin::Card body-->
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