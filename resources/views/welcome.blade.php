@extends('layouts.base-layout')
@section('content')
    <x-front.navbar />
    <x-front.header />

    <main id="main">

        <x-front.why-choose-us />
        <x-front.our-services />
        <x-front.call-to-action />
        <x-front.features />

    </main>

    <x-front.footer />
@endsection
