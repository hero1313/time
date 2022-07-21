@extends('index')
@section('content')
    <div class="container-setting">
        <header class="withdraw-header">
            <a href="{{ url()->previous() }}" class="back-icon">
                <img class="set-user" src="assets/icon/back.png" alt="">
            </a>
            <div class="user-logo">
                <img class="set-user" src="assets/icon/user-icon.png" alt="">
                <h6 class="user-name">User543</h6>
            </div>
            <a href="" class="clodu-icon">
            </a>
        </header>
        <a href="">
            <div class="flex set-item">
                <img src="assets/icon/wallet.png" alt="">
                <div class="gradient-border">
                    <button class="btn btn-setting">wallet</button>
                </div>
            </div>
        </a>
        <a href="">
            <div class="flex set-item">
                <img src="assets/icon/files.png" alt="">
                <div class="gradient-border">
                    <button class="btn btn-setting">Deposit</button>
                </div>
            </div>
        </a>
        <a href="">
            <div class="flex set-item">
                <img src="assets/icon/lang.png" alt="">
                <div class="gradient-border">
                    <button class="btn btn-setting">language</button>
                </div>
            </div>
        </a>
        <a href="">
            <div class="flex set-item">
                <img src="assets/icon/setting.png" alt="">
                <div class="gradient-border">
                    <button class="btn btn-setting">Setting</button>
                </div>
            </div>
        </a>
        <a href="">
            <div class="flex set-item">
                <img src="assets/icon/cloud.png" alt="">
                <div class="gradient-border">
                    <button class="btn btn-setting">Support</button>
                </div>
            </div>
        </a>
        <a href="{{ route('logout') }}"><div class="logout"><img src="assets/icon/back.png" alt="">Log Out</div></a>
    </div>
@stop
