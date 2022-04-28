@extends('errors::minimal')

@section('title', __($exception->getMessage()))
@section('code', '404')
<h2></h2>
@section('message', __( $exception->getMessage() ))
