/* global $ */
  $(document).ready(function() {
    $('select').material_select();
    $('input#firstName').characterCounter();
    $('.datepicker').pickadate({ selectMonths: true, selectYears: 15});
  });