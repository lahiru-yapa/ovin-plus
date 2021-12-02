@extends('pages.Mails.Layouts.app')
@section('content')
@include('components.email_header')
{{dd($user);}}
@include('components.confirmation')
@include('components.email_footer')
@endsection
