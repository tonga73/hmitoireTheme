@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="alert alert-warning text-center p-5 display-4 cinzel text-muted bg-light border-0">
      {{ __('Disculpa, pero la página que tratabas de ver no existe.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif
@endsection
