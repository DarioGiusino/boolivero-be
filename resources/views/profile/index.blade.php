@extends('layouts.app')
@section('content')

<div class="container">
    <div class="card p-4 my-4 mb-4 bg-white shadow rounded-lg">

        @include('profile.partials.index-profile-information-form')

    </div>

    <div class="card p-4 mb-4 bg-white shadow rounded-lg">


        @include('profile.partials.delete-user-form')

    </div>
</div>

@endsection
