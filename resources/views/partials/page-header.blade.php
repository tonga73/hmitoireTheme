<div class="page-header text-center pt-3">
  <h1 class="cinzel">{!! App::title() !!}</h1>

  @if(has_post_thumbnail()) @php the_post_thumbnail( 'medium' ) @endphp
  @endif	
</div>