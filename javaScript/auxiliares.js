/*Abrir calendario en formularios */
$(document).ready(function(){
    var date = new Date();
    date.setDate(date.getDate());
    var $dates = $('#salida, #regreso'); 
    $dates.datepicker({
        format: 'mm/dd/yyyy',        
        startDate: date,
        todayHighlight: true,
        autoclose: true,
        language: 'es'
    })
})

/* Movimiento de carrusel membresias */
jQuery(document).ready(function($) {
    "use strict";    
    $('#membresias-tipos').owlCarousel({
        loop: true,
        center: true,
        items: 4,
        margin: 0,
        autoplay: true,
        dots:true,
        autoplayTimeout: 8500,
        smartSpeed: 550,
        responsive: {
          0: {
            items: 1
          },
          768: {
            items: 2
          },
          1170: {
            items: 3
          },
          1572: {
            items: 4
          }
        }
    });
});


