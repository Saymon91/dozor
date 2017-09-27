@extends('base')

@section('header')

@endsection

@section('nav-bar')@include('web/nav')@endsection

@php
    print_r($user)
@endphp