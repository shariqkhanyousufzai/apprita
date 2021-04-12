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
                             Create Topic
                         </h3>
                         <div class="card-toolbar">
                             <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form id="topicForm" autocomplete="off" method="post" action="<?= base_url('discussion/addtopic') ?>">
                      <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Topic Name</label>
                                    <input autocomplete="off" type="text" class="form-control"  placeholder="Topic Name" name="name" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="exampleSelect1">Select Category</label>
                                    <select name="category" class="form-control" id="exampleSelect1">
                                       <option value="">-- Select Category --</option>
                                       <?php
                                       foreach ($getCategorys as $getCategory) {
                                       ?>
                                       <option value="<?=$getCategory->id?>"><?=$getCategory->name?></option>
                                       <?php
                                       }
                                       ?>
                                   </select>
                               </div>
                            </div>
                            <div class="col-sm-12">
                                <label for="exampleSelect1">Description</label>
                                <div id="kt_quil_1" style="height: 325px">
                                            
                                        </div>
                                
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="topic_message" class="topic_message">
        <div class="card-footer" align="right">
        <button type="button" class="btn btn-primary mr-2 addtopicbtn">Submit</button>
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
<!--end::Content-->
<script src="<?=$assets?>/js/pages/features/forms/editors/quill.js"></script>
<script type="text/javascript">
    $(document).on('click','.addtopicbtn',(e)=>{
        e.preventDefault();
        var getEditorHtml = $('.ql-editor').html();
        $('.topic_message').val(getEditorHtml);
        $('#topicForm').submit();
    });
</script>