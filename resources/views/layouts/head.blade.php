<!doctype html>
<html amp lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--    <link rel="stylesheet" href="{{--{{asset('website/assets/css/bootstrap.min.css')}}--}}">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">
    <link rel="stylesheet" href="{{asset('website/assets/css/lib/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/assets/css/lib/brands.css')}}">
    <link rel="stylesheet" href="{{asset('website/assets/css/lib/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('website/assets/css/lib/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('website/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('website/assets/css/lib/scrollCue.css')}}">
    <link rel="stylesheet" href="{{asset('website/assets/css/floating-wpp.css')}}">
    <link rel="stylesheet" href="https://pix-Itechex-demo.vercel.app/assets/css/lib/material-icons.css">

    {{--Favicon icon --}}
    <link rel="icon" type="image/png" href="{{asset('website/assets/images/img/favicon.png')}}">
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}
</head>
