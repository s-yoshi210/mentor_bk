<!-- コメントダイアログ -->
<div class="modal" id="postCommentModal" tabindex="-1" role="dialog" aria-labelledby="postCommentModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- 閉じるアイコン -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-4">
                <div class="container-fluid px-0">
                    <div class="row">
                        <div class="col-1 pl-1 pl-md-3">
                            <img src="/images/user-circle-solid.svg" width="30" height="30" alt="">
                            <div class="v_line_fix"></div>
                        </div>
                        <div class="col-11">
                            <div class="row justify-content-between">
                                <div class="col-7 pr-1"><a href="#" class="card-link text-dark">Yoshitaka Shimazu</a></div>
                                <div class="col-5 pr-0"><p>4月10日 10:32</p></div>
                            </div>
                            <div class="row">
                                <div class="col-11">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-1 pl-1 pl-md-3">
                            <img src="/images/user-circle-solid.svg" width="30" height="30" alt="">
                        </div>
                        <div class="col-11">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="inputTextarea" rows="7" placeholder="コメントする"></textarea>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="" id="check1">
                                        <label class="form-check-label" for="check1">Give <small>Giveな投稿にはチェック</small></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary w-25" data-dismiss="modal">閉じる</button>
                <button type="button" class="btn btn-primary w-25">返信</button>
            </div>
        </div>
    </div>
</div>
