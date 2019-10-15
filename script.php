<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script>$(".button-collapse").sideNav(); $('.collapsible').collapsible();</script>
<script>  $('.dropdown-button').dropdown({
inDuration: 300,
outDuration: 225,
constrainWidth: false,
hover: true,
gutter: 0,
belowOrigin: false, the button
alignment: 'left',
stopPropagation: false
}
);</script>
<script>$(document).ready(function(){
$('.carousel').carousel();});</script>
<script>$('.carousel').carousel({
padding: 200
});
autoplay()   
function autoplay() {
$('.carousel').carousel('next');
setTimeout(autoplay, 6000);
}</script>
<script>window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}</script>
<script>
  (function ($) {
    $(function () {

        //initialize all modals           
        $('.modal').modal();
        $('#testpro').hide();
        $('#connect').click(function(){
            $('#testpro').show();
            $('#connect').hide();
        });
        //now you can open modal from code
        //$('#modal1').modal('open');

        //or by click on trigger
        $('.trigger-modal').modal();

    }); // end of document ready
})(jQuery); // end of jQuery name space</script>
<script>function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}</script>
<script>$('.slider').slider({
        indicators:false
    });</script>
<script>$('#myTab a[href="#profile"]').tab('show')</script>
<script>$(document).ready(function() {
  var options = [{
    selector: '#image-test',
    offset: 0,
    callback: function(el) {
      Materialize.fadeInImage($(el));
    }
  }];
  
  Materialize.scrollFire(options);
});
</script>
<script>
  $(document).ready(function(){
    $('.datepicker').datepicker();
  });</script>
<script>  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 40, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
  });</script>
<script>$('.timepicker').pickatime({
    default: 'now', // Set default time: 'now', '1:30AM', '16:30'
    fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
    twelvehour: false, // Use AM/PM or 24-hour format
    donetext: 'OK', // text for done-button
    cleartext: 'Clear', // text for clear-button
    canceltext: 'Cancel', // Text for cancel-button
    autoclose: false, // automatic close timepicker
    ampmclickable: true, // make AM PM clickable
    aftershow: function(){} //Function for after opening timepicker
  });</script>
<script>$('.tap-target').tapTarget('open');
$('.tap-target').tapTarget('close');</script>
<script>
  $(document).ready(function(){
    $('.timepicker').timepicker();
  });</script>
<script>$(document).ready(function(){
    $('.tabs').tabs();
  });</script>
<script> M.AutoInit();</script>
<script>$(document).ready(function(){
    $('.tap-target').tapTarget();
  });</script>
<script>  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.chips');
    var instances = M.Chips.init(elems, options);
  });</script>
<script>document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });</script>
<script>$(document).ready(function(){
      $('.parallax').parallax();
    });</script>