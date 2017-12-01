$(document).ready(function(){
  $('.button-collapse').sideNav();
  $('.modal').modal();
  $('ul.tabs').tabs('select_tab', 'tab_id');
  $('.js-select-format').select2();

  var headheight = $('nav').height()+20;
  var sideheight = window.innerHeight-headheight;
  $('#slide-out').height(sideheight);
  $('#slide-out').perfectScrollbar();

  $(window).resize(function(){
    var headheight = $('nav').height()+20;
    var sideheight = window.innerHeight-headheight;
    $('#slide-out').height(sideheight);
    $('#slide-out').perfectScrollbar('update');
  });

  $('.button-collapse').click(function(){
    var headheight = $('nav').height()+20;
    var sideheight = window.innerHeight-headheight;
    $('#slide-out').height(sideheight);
    $('#slide-out').perfectScrollbar('update');
  });

  $('#barcode-focused').click(function(){
    if ($('#barcode-focused:checked').length>0) {
      $('#barcode').focus();
    }

    else {
      $('#barcode').blur();
    }
  })
});
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});
