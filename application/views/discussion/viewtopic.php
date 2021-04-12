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
                        <h3 class="card-label">Topic
                            <span class="d-block text-muted pt-2 font-size-sm"><?=$topic->name?></span>
                        </h3>
                    </div>
                </div>

                <!-- New Customers Accounts Table -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-2" align="center">
                            <div class="avatar_topic"><img src="<?=$assets?>/uploads/<?=$topic->avatar?>"></div>
                            <div class="topic_name"><?=$topic->first_name?></div>
                            <div class="topic_group"><?=group_description_name($topic->group_name)?></div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-body topicmainbody">
                                <div class="topic_body mt-4"><?=$topic->body?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-custom gutter-b">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">Replies
                            <span class="d-block text-muted pt-2 font-size-sm">Topic Replies & discussion</span>
                        </h3>
                    </div>
                </div>

                <!-- New Customers Accounts Table -->
                <div class="card-body getreplycarddiv">
                    <?php
                    foreach ($topicReplys as $topicReply) {
                    ?>
                    <div class="row mt-5">
                        <div class="col-sm-2" align="center">
                            <div class="avatar_topic"><img src="<?=$assets?>/uploads/<?=$topicReply->avatar?>"></div>
                            <div class="topic_name"><?=$topicReply->first_name?></div>
                            <div class="topic_group"><?=group_description_name($topicReply->group_name)?></div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-body topicmainbodyreply">
                                <div class="topic_body mt-4"><?=$topicReply->body?></div>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="topicsendreply">
                    <form id="reply-topic">
                    <input type="hidden" name="topic_id" class="topic_id" value="<?=$topic->id?>">
                    <div class="card-footer align-items-center">
                            <!--begin::Compose-->
                            <textarea class="form-control border-0 p-0 textareamsg" rows="2" placeholder="Type a reply"></textarea>
                            <div class="d-flex align-items-center justify-content-between mt-5">
                                <div class="mr-3">
                                    <a href="#" class="btn btn-clean btn-icon btn-md mr-1">
                                        <i class="flaticon2-photograph icon-lg"></i>
                                    </a>
                                    <a href="#" class="btn btn-clean btn-icon btn-md">
                                        <i class="flaticon2-photo-camera icon-lg"></i>
                                    </a>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-primary btn-md text-uppercase font-weight-bold reply-send py-2 px-6">Send</button>
                                </div>
                            </div>
                            <!--begin::Compose-->
                        </div>
                    </form>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<script type="text/javascript">
    function replyCardFunc(img_url,reply_name,reply_group,msg){
        var replyCard = `<div class="row mt-5 getreplycard">
                        <div class="col-sm-2" align="center">
                            <div class="avatar_topic"><img src="${img_url}"></div>
                            <div class="topic_name">${reply_name}</div>
                            <div class="topic_group">${reply_group}</div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-body topicmainbodyreply">
                                <div class="topic_body mt-4">${msg}</div>
                            </div>
                        </div>
                    </div>`;
        $('.getreplycarddiv').append(replyCard);
        return replyCard;
    }
    $(document).ready(function(){
        $(document).on('click','.reply-send',function(){
            var getMsg = $('.textareamsg').val();
            var topic_id = $('.topic_id').val();
            $.ajax({
                 url: '<?=base_url('discussion/reply')?>',
                 type: "POST",
                 data : {
                    getMsg : getMsg,
                    topic_id : topic_id
                 },
                 success: function(data){
                  console.log(data);
                 },
                 error: function(data){
                  console.log("error!");
                 }
                });

            replyCardFunc('<?=$assets?>/uploads/<?=callsession('avatar')?>','<?=callsession('first_name')?>','<?=group_description_name()?>',getMsg);
            $('.textareamsg').val('');
        }); 
    })
</script>