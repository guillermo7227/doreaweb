@extends('layout.master')
@section('title', 'Inicio')
@section('content')
    <main>
      @include('sections.hero')

      @include('sections.quienes-somos')

      @include('sections.servicios')

      @include('sections.contacto')

    </main>
@endsection
