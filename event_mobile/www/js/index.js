$(document).bind('pageinit',function(event){
                
    loadevent();
    highlightevent();
    venues();
    genres();
               

   
})

function loadevent(){
    $.ajax("http://events.mosman.nsw.gov.au/?rah_external_output=json&type=council").done(function(data) {
    var i, e, eventfeed;
    $.each(data.events.event,function(i,e){
           eventfeed = "<li class='touchcarousel-item'><a href='#listing' data-transition='slide'><img src='"+e.thumbnail+"' width='126px'/>";
           eventfeed += "<div class='rblock'><p>"+e.headline+"</p></div></a></li>";
          // alert(e.headline);
           $('#today').append(eventfeed);
           
           
        })
$("#carousel-image-text-horizontal").touchCarousel({
                                                   pagingNav : false,
                                                   pagingNavControls:false,
                                                   directionNav:false,
                                                   scrollbar:false

});

    })
    }


function highlightevent(){
    $.ajax("http://events.mosman.nsw.gov.au/?rah_external_output=json&type=council").done(function(data) {
    var ih, eh, hfeed;
    $.each(data.events.event,function(ih,eh){
        hfeed = "<li class='touchcarousel-item'><a href='#'><img src='"+eh.thumbnail+"' width='126px'/>";
        hfeed += "<div class='rblock'><p>"+eh.headline+"</p></div></a></li>";
        // alert(e.headline);
        $('#highlight').append(hfeed);
        
        
        })
    $("#carousel-image-text-horizontal-highlight").touchCarousel({
                                                                 itemsPerMove : 2,
            pagingNav : false,
            pagingNavControls:false,
            directionNav:false,
            scrollbar:false
            
            });

    })
}


function venues(){
    $.ajax("http://events.mosman.nsw.gov.au/?rah_external_output=json&venue=mosman-library").done(function(data) {
    var iv, vh, vfeed;
    $.each(data.events.event,function(iv,vh){
         vfeed = "<li class='touchcarousel-item'><a href='#'><img src='"+vh.thumbnail+"' width='126px'/>";
         vfeed += "<div class='rblock'><p>"+vh.headline+"</p></div></a></li>";
         // alert(e.headline);
         $('#venues').append(vfeed);
         
         
         })
    $("#carousel-image-text-horizontal-venues").touchCarousel({
                                                               pagingNav : false,
                                                               pagingNavControls:false,
                                                               directionNav:false,
                                                               scrollbar:false
                                                               
                                                               });

    })
}

function genres(){
    $.ajax("http://events.mosman.nsw.gov.au/?rah_external_output=json&venue=mosman-library").done(function(data) {
    var ig, eg, gfeed;
    $.each(data.events.event,function(ig,eg){
         gfeed = "<li class='touchcarousel-item'><a href='#'><img src='"+eg.thumbnail+"' width='126px'/>";
         gfeed += "<div class='rblock'><p>"+eg.headline+"</p></div></a></li>";
         // alert(e.headline);
         $('#genres').append(gfeed);
         
         
         })
    $("#carousel-image-text-horizontal-genres").touchCarousel({
                                                            pagingNav : false,
                                                            pagingNavControls:false,
                                                            directionNav:false,
                                                            scrollbar:false
                                                            
                                                            });

    })
}



 
