<article @php post_class( 'card' ) @endphp>
    <img class="card-img-top" src="{{ get_the_post_thumbnail_url() }}" alt="Imágen del post">
	<div class="card-body p-0">
	  <header class="card-header">	  		  		
	    <a class="d-block text-right" href="{{ get_permalink() }}">
	    	<h4 class="entry-title card-title cinzel">{{ get_the_title() }}</h4>
	    	@include('partials/entry-meta')
	    </a>
	  </header>
	  <div class="entry-summary card-text p-2 belle h5">
	    @php the_excerpt() @endphp
	  </div>		
	</div>
</article>