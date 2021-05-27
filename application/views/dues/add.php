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

            <!--begin::Card-->
            <div class="card card-custom">
                <!--begin::Card header-->
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body">
                    <div class="card card-custom">
                     <div class="card-header">
                      <h3 class="card-title">
                       Upload Deus Information
                   </h3>
                   <div class="card-toolbar">
                       <div class="example-tools justify-content-center">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                </div>
            </div>
            <!--begin::Form-->
            <form autocomplete="off" method="post" action="<?= base_url('dues/create') ?>" enctype="multipart/form-data">
              <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <label>First Name: </label>
                        <input type="text" name="first_name" required class="form-control" placeholder="First Name">
                    </div>
                    <div class="col-sm-4">
                        <label>Last Name: </label>
                        <input type="text" name="last_name" required  class="form-control" placeholder="Last Name">
                    </div>
                    <div class="col-sm-4">
                        <label>Email: </label>
                        <input type="email" name="email" required class="form-control" placeholder="Email">
                    </div>
                    <div class="col-sm-4 mt-5">
                        <label>Dues Price: </label>
                        <input type="number" name="price" required class="form-control" placeholder="Price">
                    </div>
                    <div class="col-sm-4 mt-5">
                        <label>Start Date: </label>
                        <input type="date" name="start_date" required class="form-control" placeholder="Start Date">
                    </div>
                    <div class="col-sm-4 mt-5">
                        <label>End Date: </label>
                        <input type="date" name="end_date" required class="form-control" placeholder="End Date">
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

<!--end::Card-->
</div>
<!--end::Container-->
</div>
<!--end::Entry-->
</div>