<article id="post-single" @php post_class() @endphp>
  <header class="jumbotron jumbotron-fluid">
    <span class="entry-title d-flex justify-content-around">
      <h1>
        {{ get_the_title() }}
      </h1>

      @php 
          echo '<div class="img-fluid" href="'.esc_url($featured_img_url).'">'; 
              the_post_thumbnail('medium_large');
          echo '</div>';
          $image_alt = get_post_meta( $image->id, '_wp_attachment_image_alt', true);

      @endphp
    </span>

    <h4 class="p-3">
      @include('partials/entry-meta')
    </h4>
  </header>
  <div class="entry-content container">
    @php the_content() @endphp
  </div>
  <section>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </section>
  <footer class="jumbotron">
    @php comments_template('/partials/comments.blade.php') @endphp
  </footer>
</article>
