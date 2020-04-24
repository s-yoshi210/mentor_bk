@extends('layouts.common')

@section('pageCss')
    <link rel="stylesheet" href="{{ __('css/top.css') }}">
@endsection

@include('layouts.head')

@section('content')
    <div class="container-fluid pr-0 pl-0">
        <div class="row align-items-md-center ml-0 mr-0 top">
            <div class="col-md-6 pl-0 pr-0 top-visual">
                <img src="{{ __('images/top.jpg') }}" class="img-fluid h-100 w-100" alt="トップ画像">
                <div class="message text-white text-center">
                    <p class="pb-md-5">同じ目的を持った仲間を見つけよう</p>
                    <p class="pb-md-5">あなたのメンターを見つけよう</p>
                </div>
            </div>
            <div class="col-md-6 top-content">
                <div class="row text-center">
                    <div class="col-md-12 mt-3 mb-4"><i class="fas fa-child"></i><i class="fas fa-child"></i><i class="fas fa-child"></i></div>
                    <div class="col-md-12 mb-4"><p>同じ「仲間」を見つけよう</p></div>
                    <div class="col-md-12 mb-3"><a href="{{ route('register') }}" class="btn btn-lg px-2 btn-success w-50">アカウント作成</a></div>
                    <div class="col-md-12 mb-5"><a href="{{ route('login') }}" class="btn btn-lg btn-outline-success w-50">ログイン</a></div>
                    <!-- ToDo:簡単ログインのアクセス先追加 -->
                    <div class="col-md-12"><a href="" class="btn btn-lg btn-primary w-50">簡単ログイン</a></div>
                </div>
            </div>
        </div>
    </div>
@endsection
