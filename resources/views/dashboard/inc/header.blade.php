<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">

    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
    <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="            crossorigin="anonymous"></script>
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f3530363e8.js"></script>
    <link href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.bootstrap4.min.css" rel="stylesheet" >
    <link href="{{URL::asset('css/main.css')}}" rel="stylesheet"></head>
{{--arbic style--}}
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
<script>
    $(document).ready( function () {
        $('#example').DataTable();
    } );
</script>

@if (session()->get('locale')=='ar'||session()->get('locale')==null)
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">

    <style>
        body{
            direction:rtl
        }
        .fixed-sidebar .app-main .app-main__outer {
            z-index: 9;
            padding-right: 280px;
            padding-left: 0px;

        }
        .closed-sidebar.fixed-sidebar .app-main__outer {
            padding-right: 80px;

        }
        .vertical-nav-menu ul:before{
            right: 0px;
        }
        .vertical-nav-menu i.metismenu-state-icon{
            right: auto;
        }
        .vertical-nav-menu li a{
            padding: 0 2.4rem 0 45px;
        }
        @media (max-width: 991.98px) {
            .app-sidebar {
                flex: 0 0 280px !important;
                width: 280px !important;
                transform: translateX(-360px);
                position: fixed;
            }
        }
        .app-page-title .page-title-icon {

            margin: 0 0 0px 30px;
        }
        /*.vertical-nav-menu i.metismenu-state-icon, .vertical-nav-menu i.metismenu-icon{*/
        /*    right: 5px;*/
        /*}*/

    </style>
@endif
<style>
    .error{
        color: red;
        text-decoration: underline;
        font-weight: bold;
    }
</style>
{{--end arbic style--}}
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
