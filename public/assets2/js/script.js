$('div.myDiv').hide();
$('.default').show();
$('#myselection').on('change', function () {
  var demovalue = $(this).val();
  $("div.myDiv").hide();
  $("#show" + demovalue).show();
});