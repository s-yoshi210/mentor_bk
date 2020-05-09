@extends('layouts.common')

@section('title', '投稿一覧')
@section('pageCss')
    <link rel="stylesheet" href="css/post.css">
@endsection

@include('layouts.head')
@include('layouts.menubar')

@section('content')
<div class="container">
    <div class="row pt-3">
        <div class="col-12 col-md-8">
            <div class="row">
                <div class="col-12 col-md-9 order-2 order-md-1">
                    <form class="form-inline">
                        <input class="form-control w-100" type="search" placeholder="キーワード検索..." aria-label="Search">
                    </form>
                </div>
                <div class="col-12 col-md-3 order-1 order-md-2 text-right mb-3 mb-md-0">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#postNewModal">投稿する</button>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <nav class="pt-4">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-follow-tab" data-toggle="tab" href="#nav-follow" role="tab" aria-controls="nav-follow" aria-selected="true">フォロー</a>
                            <a class="nav-item nav-link" id="nav-new-tab" data-toggle="tab" href="#nav-new" role="tab" aria-controls="nav-new" aria-selected="false">新着</a>
                            <a class="nav-item nav-link" id="nav-attention-tab" data-toggle="tab" href="#nav-attention" role="tab" aria-controls="nav-attention" aria-selected="false">注目</a>
                        </div>
                    </nav>
                    <div class="tab-content mt-3" id="nav-tabContent">

                        <!-- フォロー -->
                        <div class="tab-pane active" id="nav-follow" role="tabpanel" aria-labelledby="nav-follow-tab">
                            @foreach($follow_posts as $post)
                                <div class="card">
                                    <div class="card-body pb-2">
                                        <div class="row">
                                            <div class="col-1 pl-1 pl-md-3">
                                                <img src="/images/user-circle-solid.svg" width="30" height="30" alt="">
                                            </div>
                                            <div class="col-11">
                                                <div class="row justify-content-between">
                                                    <div class="col-7 pr-1">{{ $post->user->user_name }}</div>
                                                    <div class="col-5 pr-0"><small>{{ $post->created_at->format('n月j日 G:i') }}</small></div>
                                                </div>
                                                <div class="row py-3">
                                                    <div class="col-11">
                                                        <p class="card-text">
                                                            {{ $post->content }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-3 col-md-2 px-0">
                                                        <button class="btn pt-0" data-toggle="modal" data-target="#postCommentModal"><i class="far fa-comment"></i><span> {{ $post->comments_count }}</span></button>
                                                    </div>
                                                    <div class="col-3 col-md-2 px-0">
                                                        <button class="btn pt-0"><i class="far fa-heart"></i><span> {{ $post->likes_count }}</span></button>
                                                    </div>
                                                    <div class="col-3 col-md-2 px-0">
                                                        <button class="btn pt-0"><i class="far fa-handshake"></i><span> {{ $post->takes_count }}</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- 新着 -->
                        <div class="tab-pane" id="nav-new" role="tabpanel" aria-labelledby="nav-new-tab">
                            @foreach($posts as $post)
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-1 pl-1 pl-md-3">
                                                <img src="/images/user-circle-solid.svg" width="30" height="30" alt="">
                                                <div class="v_line_fix"></div>
                                            </div>
                                            <div class="col-11">
                                                <div class="row justify-content-between">
                                                    <div class="col-7 pr-1"><a href="#" class="card-link text-dark">{{ $post->user->user_name }}</a></div>
                                                    <div class="col-5 pr-0"><p>{{ $post->created_at->format('n月j日 G:i') }}</p></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-11">
                                                        <p>
                                                            {{ $post->content }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-3 col-md-2"><i class="far fa-comment"></i> {{ $post->comments_count }}</div>
                                                    <div class="col-3 col-md-2"><i class="far fa-heart"></i> {{ $post->likes_count }}</div>
                                                    <div class="col-3 col-md-2"><i class="far fa-handshake"></i> {{ $post->takes_count }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- 注目 -->
                        <div class="tab-pane fade" id="nav-attention" role="tabpanel" aria-labelledby="nav-attention-tab">
                            @foreach($attention_posts as $post)
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-1 pl-1 pl-md-3">
                                                <img src="/images/user-circle-solid.svg" width="30" height="30" alt="">
                                            </div>
                                            <div class="col-11">
                                                <div class="row justify-content-between">
                                                    <div class="col-7 pr-1"><a href="#" class="card-link text-dark">{{ $post->user->user_name }}</a></div>
                                                    <div class="col-5 pr-0"><p>{{ $post->created_at->format('n月j日 G:i') }}</p></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-11">
                                                        <p>
                                                            {{ $post->content }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-3 col-md-2"><i class="far fa-comment"></i> {{ $post->comments_count }}</div>
                                                    <div class="col-3 col-md-2"><i class="far fa-heart"></i> {{ $post->likes_count }}</div>
                                                    <div class="col-3 col-md-2"><i class="far fa-handshake"></i> {{ $post->takes_count }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <nav class="pt-4" aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="ranking col-12 col-md-4 pb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">ユーザランキング(いいね)</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">1位<img class="ml-2 mr-2" src="/images/user-circle-solid.svg" width="20" height="20" alt="">User Name</li>
                    <li class="list-group-item">2位<img class="ml-2 mr-2" src="/images/user-circle-solid.svg" width="20" height="20" alt="">User Name</li>
                    <li class="list-group-item">3位<img class="ml-2 mr-2" src="/images/user-circle-solid.svg" width="20" height="20" alt="">User Name</li>
                    <li class="list-group-item">4位<img class="ml-2 mr-2" src="/images/user-circle-solid.svg" width="20" height="20" alt="">User Name</li>
                    <li class="list-group-item">5位<img class="ml-2 mr-2" src="/images/user-circle-solid.svg" width="20" height="20" alt="">User Name</li>
                    <li class="list-group-item">6位<img class="ml-2 mr-2" src="/images/user-circle-solid.svg" width="20" height="20" alt="">User Name</li>
                    <li class="list-group-item">7位<img class="ml-2 mr-2" src="/images/user-circle-solid.svg" width="20" height="20" alt="">User Name</li>
                    <li class="list-group-item">8位<img class="ml-2 mr-2" src="/images/user-circle-solid.svg" width="20" height="20" alt="">User Name</li>
                    <li class="list-group-item">9位<img class="ml-2 mr-2" src="/images/user-circle-solid.svg" width="20" height="20" alt="">User Name</li>
                    <li class="list-group-item">10位<img class="ml-2 mr-2" src="/images/user-circle-solid.svg" width="20" height="20" alt="">User Name</li>
                </ul>
            </div>
        </div>
    </div>
</div>

@component('components.post_create')
@endcomponent

@component('post.comment')
@endcomponent

@endsection
