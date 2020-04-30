<!-- 新規投稿ダイアログ -->
<div class="modal" id="postNewModal" tabindex="-1" role="dialog" aria-labelledby="postNewModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" action="{{ route('store') }}">
                @csrf

                <div class="modal-header">
                    <h5 class="modal-title" id="postNewModalLabel">新規投稿</h5>
                    <!-- 閉じるアイコン -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-4">
                    <div class="container-fluid px-0">
                        <div class="row no-gutters">
                            <div class="col-1">
                                <img class="user_img" src="/images/user-circle-solid.svg" alt="User Image" width="30" height="30">
                            </div>
                            <div class="col-11 pl-2">
                                @error('post_content')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="form-group">
                                    <textarea class="form-control" name="post_content" id="post_content" rows="7" placeholder="投稿しよう">{{ old('post_content') }}</textarea>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="give" id="give" {{ old('give') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="give">Give <small>Giveな投稿にはチェック</small></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary w-25" data-dismiss="modal">閉じる</button>
                    <button type="submit" class="btn btn-primary w-25">投稿</button>
                </div>
            </form>
        </div>
    </div>
</div>
