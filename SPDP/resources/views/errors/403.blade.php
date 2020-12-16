@extends('errors::minimal')

@section('title', __('Forbidden'))
@section('code', '403')
@section('message', 'Anda tidak memiliki wewenang mengakses page ini')
