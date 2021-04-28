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
                             Create Zoom Meeting
                         </h3>
                         <div class="card-toolbar">
                             <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form id="zoomForm" method="post" action="<?=base_url('meeting/save')?>">
                      <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Meeting Name</label>
                                    <input autocomplete="off" type="text" class="form-control"  placeholder="Topic Name" name="name" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Start Time</label>
                                    <input autocomplete="off" type="datetime-local" class="form-control"  placeholder="Duration" name="start_time" />
                                </div>
                            </div>
                            <input type="hidden" class="meeting_url" name="meeting_url">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Duration</label>
                                    <input autocomplete="off" type="number" class="form-control"  placeholder="Duration" min="20" value="30" max="40" name="duration" />
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input autocomplete="off" type="text" class="form-control"  placeholder="Password"  name="password" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label>Select Attendant</label>
                                <div class="col-lg-12 col-md-9 col-sm-12">
                                    <select class="form-control select2" id="kt_select2_3" name="attendant[]" multiple="multiple">
                                       <?php
                                       foreach ($users as $user) {
                                       ?>
                                       <option value="<?=$user->id?>"><?=$user->first_name?></option>
                                       <?php
                                       }
                                       ?>
                                    </select>
                                </div>

                            </div>
                            
                        </div>
                    </div>
                    <input type="hidden" name="topic_message" class="topic_message">
        <div class="card-footer" align="right">
        <button type="button" class="btn btn-primary mr-2 addtopicbtn">Create Meeting</button>
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
<!--begin::Page Scripts(used by this page)-->
<script src="assets/js/pages/features/forms/widgets/select2.js"></script>
<!--end::Page Scripts-->
<script type="text/javascript">
    $(document).on('click','.addtopicbtn',(e)=>{
        e.preventDefault();
        $.ajax({
            method : 'post',
            url : '<?=base_url()?>/zoom-app/create-meeting.php',
            data : $('#zoomForm').serialize(),
            success : function(data){
                console.log(data);
                $('.meeting_url').val(data);
                $('#zoomForm').submit();
            }
        });
    });

    $(document).ready(function(){
         $('#kt_select2_3').select2({
         placeholder: "Select a state",
        });
    })
</script>