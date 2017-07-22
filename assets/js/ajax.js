(function ($) {
  // targetting main container
  var $mainContent = $('#main');

  // know the site top url
  var siteUrl = "http://" + window.location.host.toString();
  
  // create variable for retrieved url
  var url = '';

  // url's to be targeted
  // ^= (*prefixed by*) // $= (*suffixed by*)
  var $links = $("a[href^='" + siteUrl + "']:not(href*=/wp-admin/):not(href$=/feed/)");
  // action on these links
  $links.click(function () {
    // replace the # sign from the url
    location.hash = this.pathname;
    return false;
  });

  var $searchForm = $('#searchform');
  // click handler for search form
  $searchForm.click(function (event) {
    location.hash = '?s=' + $('#s').val();
    event.preventDefault();
  });

  // load content when hash changed
  $(window).on('haschange', function () {

    // get the url
    url = window.location.hash.toString(1); // first hash string

    // check the url's availability
    if (!url) {
      return;  // terminate if url is not available
    }

    url = url + ".container"

    // fade out the main content before loading the desired content
    $mainContent.animate({
      opacity: "0.1"
    });
    // display the loading information
    $mainContent.html('&lt;p&gt;Please wait...&lt;/&gt;').load(url, function () {
      $mainContent.animate({
        opacity: "1"
      });
    });


  });

} (jQuery));