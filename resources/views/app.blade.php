<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="asset-path" content="{{ asset('') }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        html {
            background-color: #f5f8fa !important;
        }

        body {
            margin: 0 !important;
        }

        .full-height {
            min-height: 100vh;
            height: 100%;
        }

        .main-content {
            display: block;
            width: calc(100% - 240px);
            position: relative;
            margin-left: 240px;
            height: 100%;
            padding-top: 110px;
        }

        .content-body {
            display: block;
            width: 100%;
            height: 100%;
            padding-left: 20px;
            padding-right: 20px;
            max-width: 1100px;
            margin: 0 auto;
            min-height: calc(100vh - 110px - 100px);
        }

        @media screen and (max-width: 990px) {
            .main-content {
                width: 100%;
                margin-left: 0;
            }
        }

        @media screen and (min-width: 768px) {
            .content-body {
                padding-left: 40px;
                padding-right: 40px;
            }
        }

        .fade-enter {
            opacity: 0;
        }

        .fade-enter-active {
            transition: opacity 1.5s;
        }

        .fade-leave {
            opacity: 1;
        }

        .fade-leave-active {
            transition: opacity 1.5s;
            opacity: 0;
        }

        .animation-enter {
            opacity: 0;
        }

        .animation-enter-active {
            animation: slide-in 1s ease-out forwards;
            transition: opacity .5s;
        }

        .animation-leave {

        }

        .animation-leave-active {
            animation: slide-out 1s ease-out forwards;
        }

        @keyframes slide-in {
            from {
                transform: translateY(20px);
            }
            to {
                transform: translateY(0);
            }
        }

        @keyframes slide-out {
            from {
                transform: translateY(0);
                opacity: 1;
            }
            to {
                transform: translateY(20px);
                opacity: 0;
            }
        }
    </style>
</head>
<body>
<div id="app">
    <div class="full-height" :style="style">
        <main v-bind:class="{'main-content': $route.path.indexOf('/auth') === -1}">
            <div v-bind:class="{'content-body': $route.path.indexOf('/auth') === -1}">
                <transition name="animation" mode="out-in" appear>
                    <router-view></router-view>
                </transition>
            </div>
        </main>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
