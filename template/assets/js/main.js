$(document).ready(function(){
    $(".del").click(function(){
      if (!confirm("Do you want to delete")){
        return false;
      }
    });
  });


  jQuery(function($){

    // Sidebar control js

    $('.show-hide-sidebar-button').click(function(){
        var v=$(this).val();
        if(v=="show")
        {
            $(".sidebar").addClass("sidebar-width-hide");
            $(".content-body").addClass("content-full-width");
            $('.show-hide-sidebar-button').val("hide");
               
        }
        else if(v=="hide")
        {
            $('.show-hide-sidebar-button').val("show");
            $(".sidebar").removeClass("sidebar-width-hide").addClass("sidebar");
            $(".content-body").removeClass('content-full-width').addClass("content-body");
        }   
    });          
});


$( document ).ready(function() {

    // tab dropdown click button is not work

    $('.dropdown-menu').on('click', function(event){
        event.stopPropagation();
    });

    $('#myTab li a').on('click', function(event){
       event.stopPropagation();
       $(this).tab('show')
    });



    // Responsive size control
    var size=$( window ).width();
    if (size <= 991) {  

        // $(".dropdown-toggle-menu").click(function(){
        //     $(this).find(".drop-sub-menu-toggle").toggle(500);
        // })

            // $(".big-menu-list").removeClass("dropdown-menu");
            $('.data-toggle-target').attr('data-toggle', 'collapse');
              $(".dropdown-submenu-item").addClass("collapse");
              $(".dropdown-submenu-item").removeClass("dropdown-menu");
              $(".dropdown-submenu-item").removeClass("dropdown-submenu-item-show");
       } 

        else{

            $(".big-menu-list").removeClass("collapse");
            $(".dropdown-menu-item").addClass("dropdown-menu");
          
             $('.data-toggle-target').attr('data-toggle', 'dropdown')
        }

        // when resize then page refresh
      
        $( window ).resize(function() {
            var screensize= $( window ).width();
                if (screensize <= 991) {  
                    setTimeout(function() {
                    location.reload();
                    }, 3);
                }
                else{
                    setTimeout(function() {
                    location.reload();
                    }, 3);

                } 
        });

  



});

$(document).ready(function() {

    $('#example').dataTable({
        "bPaginate": false,
        "bLengthChange": false,
        "bFilter": true,
        "bInfo": false,
        "bAutoWidth": false 
    });

    $('#example2').dataTable({
        "bPaginate": false,
        "bLengthChange": false,
        "bFilter": true,
        "bInfo": false,
        "bAutoWidth": false 
    });

    });




