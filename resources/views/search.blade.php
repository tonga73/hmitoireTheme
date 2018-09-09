@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="alert alert-warning text-center p-5 display-4 cinzel text-muted bg-light border-0">
      {{ __('Disculpa, no hay resultados para la búsqueda.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  <div class="card-columns p-3">
    @while (have_posts()) @php the_post() @endphp
      @include('partials.content-'.get_post_type())
    @endwhile  
  </div>

  {!! get_the_posts_navigation() !!}
@endsection
