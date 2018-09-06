<article @php post_class( 'card' ) @endphp>
    <img class="card-img-top" src="{{ get_the_post_thumbnail_url() }}" alt="Imágen del post">
	<div class="card-body p-0">
	  <header class="card-header">	  		  		
	    <h2 class="entry-title card-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
	    @include('partials/entry-meta')
	  </header>
	  <div class="entry-summary card-text p-1">
	    @php the_excerpt() @endphp
	  </div>		
	</div>
</article>