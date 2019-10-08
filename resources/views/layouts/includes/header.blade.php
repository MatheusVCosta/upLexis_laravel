<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <title>@yield('titulo')</title>
        <!--Import Google Icon Font-->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>
        