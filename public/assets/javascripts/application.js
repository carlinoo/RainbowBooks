// This function will run the the document is loaded
$(document).ready(function() {
  $(".button-collapse").sideNav();
  $('.dropdown-button').dropdown();
  $(".button-collapse").sideNav();
  $('select').material_select();
});


// This function will add a notification in the form of a Toast with the text passsed as a parameter
function addNotification(notification) {
  if (notification != "" || notification != undefined) {
    Materialize.toast(notification, 4000);
  }
} // end addNotification



// This function will wait ms milliseconds to reload the page
function waitToReloadPage(ms) {
  setTimeout(function(){
    location.reload();
  }, ms);
}


// This function will send an AJAX request to the url: url, of type: type and the data: data
function send_ajax(type, url, data, callback = "") {
  $.ajax({
    type: type,
    url: url,
    data: data,
    dataType: 'json'
  }).done(function(data) {

    // Add a notification
    addNotification(data.message);

    // Check if callback function has been passed and call it
    typeof callback === 'function' && callback(data);

    // If there is an errors then...
  }).error(function(data) {
    addNotification(data.responseJSON.message);
  });
}

// This function will turn on or turn off the loader animation
function toggle_loader() {
  loader = $('#loader');

  if (loader.hasClass('is-active')) {
    loader.removeClass('is-active');
  } else {
    loader.addClass('is-active');
  }
} // end send_ajax()
