export default {
  init() {
    $(function () {
      $(document).scroll(function () {
        var $nav = $(".banner");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
      });
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
