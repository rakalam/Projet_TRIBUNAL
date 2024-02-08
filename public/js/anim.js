$(document).ready(function(){


    var m = $('#message').text();
    if(m =! ""){

      $('.rs_ms').fadeOut(8000);
    }
    $('.bAdmin').on('click', function(){
       
        $('.div_payeur').slideUp();
       $('.div_admin').slideDown(1000);

        
    })
    $('.bpayeur').on('click', function(){
       
       $('.div_admin').slideUp();
       $('.div_payeur').slideDown(1000);

       
   })
   

})
