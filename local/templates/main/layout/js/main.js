jQuery(document).ready(function($) {
  $('.slider').each(function(i,e) {
    $(e).slick({
      slidesToShow: 1,
      arrows: true,
      autoplay: true,
      dots: false
    });
  });

  var $callbackModal = $('#callback-modal');

  function closeCallbackModal() {
    $callbackModal.removeClass('is-visible').attr('aria-hidden', 'true');
  }

  function openCallbackModal() {
    $callbackModal.addClass('is-visible').attr('aria-hidden', 'false');
  }

  $('.js-open-callback').on('click', function(event) {
    event.preventDefault();
    openCallbackModal();
  });

  $('.js-close-callback').on('click', function(event) {
    event.preventDefault();
    closeCallbackModal();
  });

  $(document).on('keydown', function(event) {
    if (event.keyCode === 27) {
      closeCallbackModal();
    }
  });

  if (document.cookie.indexOf('cookie_notice_accepted=1') === -1) {
    $('#cookie-notice').addClass('is-visible');
  }

  $('.js-cookie-accept').on('click', function() {
    var expires = new Date();
    expires.setFullYear(expires.getFullYear() + 1);
    document.cookie = 'cookie_notice_accepted=1; path=/; expires=' + expires.toUTCString();
    $('#cookie-notice').removeClass('is-visible');
  });
});
