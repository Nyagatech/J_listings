@extends('layouts.app')
@section('content')
@include('includes.navbar')
@include('includes.hero')
@include('components.card')
<div>
@include('components.job_card')
@include('components.job_card')
@include('components.job_card')
</div>
@include('components.tags')
@include('components.recent_job_card')



@endsection
