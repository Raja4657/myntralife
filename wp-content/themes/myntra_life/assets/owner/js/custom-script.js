 $(document).ready(function(e){
     
     
     $('.btn-search-xs').click(function() {
         $('.search-mobile').addClass('focused');
     })
     $('.search-back').click(function() {
         $('.search-mobile').removeClass('focused');
     })
     
     $('#btn-toggle-menu,.overlay').on('click',function(e){
         
         $('.side-nav,.overlay').toggleClass('active');
         
     })
          
          $('.banner-slider').slick({
              arrows:false,
              dots:true,
              speed: 1000,
              customPaging: function(slider, i) {
                      return $('<button type="button" data-role="none" role="button" tabindex="0" ><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="50px" height="50px" viewBox="0 0 50 50" enable-background="new 0 0 340 333" xml:space="preserve"><circle class="path" cx="23" cy="23" r="17" stroke="rgba(255,255,255,0.41)" stroke-width="2" fill="transparent" /> </svg></button>');
                  },
               responsive: [
    {
      breakpoint: 767,
      settings: {
       
        dots: false,
      }
    },
                   ]
          })
          $('.feature-carousel').slick({
              arrows:true,
              dots:false,
               variableWidth: true,
//              slidesToShow: 4,
//      slidesToScroll: 4,
               appendArrows: $('.feature-carousel-arrows'),
             
          })
          $('.featurevillas-carousel').slick({
              arrows:true,
              dots:false,
              slidesToShow: 2,
      slidesToScroll: 2,
               appendArrows: $('.featurevillas-carousel-arrows'),
              responsive: [
    {
      breakpoint: 767,
      settings: {
       variableWidth: true,
        //dots: false
      }
    },
                   ]
          })
     $('.travel-carousel').slick({
              arrows:false,
              dots:false,
              slidesToShow: 3,
      slidesToScroll: 3,
              
              responsive: [
    {
      breakpoint: 767,
      settings: {
       variableWidth: true,
        //dots: false
      }
    },
                   ]
          })
     
     if($('.villa-carousel').length)
         {
               $('.villa-carousel').slick({
                   infinite:false,
              arrows:true,
              dots:true,
              slidesToShow: 1,
      slidesToScroll: 1,
            
          })
          }
          
     
     if($('.top-villa-carousel').length)
         {
               $('.top-villa-carousel').slick({
                   infinite:false,
              arrows:true,
              dots:false,
              slidesToShow: 2,
      slidesToScroll: 2,
                   prevArrow: '<button type="button" data-role="none" class="slick-prev slick-prev-prime" aria-label="Previous" tabindex="0" role="button">Previous</button>',
                nextArrow: '<button type="button" data-role="none" class="slick-next slick-next-prime" aria-label="Next" tabindex="0" role="button">Next</button>',
                   responsive: [
    {
      breakpoint: 767,
      settings: {
       variableWidth: true,
          arrows:false,
        //dots: false
      }
    },
                   ]
            
          })
          }
          
     
     if($('.beach-villa-carousel').length)
         {
               $('.beach-villa-carousel').slick({
                   infinite:false,
              arrows:true,
              dots:false,
              slidesToShow: 3,
      slidesToScroll: 3,
                   prevArrow: '<button type="button" data-role="none" class="slick-prev slick-prev-prime" aria-label="Previous" tabindex="0" role="button">Previous</button>',
                nextArrow: '<button type="button" data-role="none" class="slick-next slick-next-prime" aria-label="Next" tabindex="0" role="button">Next</button>',
                     responsive: [
    {
      breakpoint: 767,
      settings: {
       variableWidth: true,
          arrows:false,
        //dots: false
      }
    },
                   ]
            
          })
          }
          
     
     if($('.things-carousel').length)
         {
               $('.things-carousel').slick({
                   infinite:false,
              arrows:true,
              dots:false,
              slidesToShow: 4,
      slidesToScroll: 4,
                   prevArrow: '<button type="button" data-role="none" class="slick-prev slick-prev-prime" aria-label="Previous" tabindex="0" role="button">Previous</button>',
                nextArrow: '<button type="button" data-role="none" class="slick-next slick-next-prime" aria-label="Next" tabindex="0" role="button">Next</button>',
                   
                    responsive: [
    {
      breakpoint: 767,
      settings: {
       variableWidth: true,
          arrows:false,
        //dots: false
      }
    },
                   ]
            
          })
          }
     if($('.getinspiration-carousel').length)
         {
               $('.getinspiration-carousel').slick({
                   infinite:false,
              arrows:true,
              dots:false,
              slidesToShow: 3,
      slidesToScroll: 3,
                   prevArrow: '<button type="button" data-role="none" class="slick-prev slick-prev-prime" aria-label="Previous" tabindex="0" role="button">Previous</button>',
                nextArrow: '<button type="button" data-role="none" class="slick-next slick-next-prime" aria-label="Next" tabindex="0" role="button">Next</button>',
                       responsive: [
    {
      breakpoint: 767,
      settings: {
       variableWidth: true,
          arrows:false,
        //dots: false
      }
    },
                   ]
            
          })
          }  
     if($('.villa-detail-carousel').length)
         {
               $('.villa-detail-carousel').slick({
                   infinite:false,
              arrows:true,
              dots:false,
              slidesToShow: 2,
      slidesToScroll: 2,
                   appendArrows: $('.villa-detail-arrows'),
                  
                       responsive: [
    {
      breakpoint: 767,
      settings: {
       variableWidth: true,
          arrows:false,
        //dots: false
      }
    },
                   ]
            
          })
          }       
     if($('.beds-carousel').length)
         {
               $('.beds-carousel').slick({
                   infinite:false,
              arrows:true,
              dots:false,
              slidesToShow: 4,
                    variableWidth: true,
      slidesToScroll: 4,
                    prevArrow: '<button type="button" data-role="none" class="slick-prev slick-prev-prime" aria-label="Previous" tabindex="0" role="button">Previous</button>',
                nextArrow: '<button type="button" data-role="none" class="slick-next slick-next-prime" aria-label="Next" tabindex="0" role="button">Next</button>',
                  
                       responsive: [
    {
      breakpoint: 767,
      settings: {
       variableWidth: true,
          arrows:false,
          arrows:false,
        //dots: false
      }
    },
                   ]
            
          })
          }   
     if($('.blog-faq-carousel').length)
         {
               $('.blog-faq-carousel').slick({
                   infinite:false,
              arrows:false,
              dots:true,
              slidesToShow: 1,
                mobileFirst: true,    
      slidesToScroll: 1,
                   adaptiveHeight: true,
                  
                       responsive: [
    {
      breakpoint: 768,
       settings: 'unslick'
    },
                   ]
            
          })
          }   

     /*filter functioning*/
     if( $('[data-fancybox="gallery"]').length){
     $('[data-fancybox="gallery"]').fancybox({
  margin : [44,0,22,0],
  thumbs : {
    autoStart : true,
    axis      : 'x'
  }
})
         }
     if( $(".v-scroll").length){
      $(".v-scroll").mCustomScrollbar({
                     axis:"y",
					scrollButtons:{enable:false},
					theme:"light-thick",
					scrollbarPosition:"outside"
				});
         }
     $('#morecities-dd').on('show.bs.dropdown', function () {
         $('.cities-overlay').addClass('active');
     }) 
     $('#morecities-dd').on('hide.bs.dropdown', function () {
         $('.cities-overlay').removeClass('active');
     })
          
       
$('.footer-nav-menu h6').click(function(e){
    $(this).parent().find('.footer-nav').slideToggle();
    $(this).toggleClass('active');
})
     
     //range slider
     if( $( ".slider-range").length){
      $( ".slider-range").slider({
      range: true,
      min: 0,
      max: 50000,
      values: [ 75, 45000 ],
      slide: function( event, ui ) {
        $( "#budget" ).val( ui.values[ 0 ] + "-" + ui.values[ 1 ] );
          var frombudgetvalue= ui.values[ 0 ];
          $('.frombudget').text("₹" + frombudgetvalue.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","))
          
           var tobudgetvalue= ui.values[ 1 ];
          if(ui.values[ 1 ]>=50000){
            tobudgetvalue =   ui.values[ 1 ]+'+';
          }
          $('.tobudget').text("₹" + tobudgetvalue.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","))
          
      }
    });
        $( "#budget" ).val( $( ".slider-range" ).slider( "values", 0) + "-" + $( ".slider-range" ).slider( "values", 1) );
         var frombudgetvalue= $( ".slider-range" ).slider( "values", 0);
     
   $('.frombudget').text( "₹" + frombudgetvalue.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
     
       var tobudgetvalue=  $( ".slider-range" ).slider( "values", 1);
     if(tobudgetvalue>=50000){
         tobudgetvalue = $( ".slider-range" ).slider( "values", 1)+"+";
     }
   $('.tobudget').text( "₹" + tobudgetvalue.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") );
         
     }
     
     // filter dropdowns
     
     $('.filter-dd-trigger').click(function(e){
         
         $(this).closest('.hasdd').toggleClass('active');
         $(this).closest('.hasdd').siblings().removeClass('active');
         
     })
     $('.filter-card--buttonapply').click(function(e){
          $(this).closest('.hasdd').removeClass('active');
     })
     $('.filter-close').click(function(e){
        $(this).closest('.filter-pill').remove(); 
     })
     
  
     
     $('.filter-form').on('submit',function(e){
         e.preventDefault();
         if(e.target.id == 'guests-form'){
            var noofguests = this.guests.value;
                $(this).closest('li').find('.filter-dd-trigger').text(noofguests+" Guests");
            } 
         if(e.target.id == 'price-form'){
            var budget = this.budget.value;
             budget = budget.split('-');
             console.log(budget);
                $(this).closest('li').find('.filter-dd-trigger').text('₹'+budget[0]+" - ₹"+budget[1]);
            }
          $(this).closest('li').addClass('selected');
     })
       $('.filter-form').on('reset',function(e){
             if(e.target.id == 'guests-form'){
                $(this).closest('li').find('.filter-dd-trigger').text("Guests");
             }
           if(e.target.id == 'price-form'){
                $(this).closest('li').find('.filter-dd-trigger').text("Price");
             }
           
        $(this).closest('li').removeClass('selected').removeClass('active'); 
     })
     
     
     $('#maptoggle').on('change',function(e){
         if(this.checked){
         $('.map-view-container').addClass('container-big');
             $('.map-half').addClass('col-md-6');
             $('.map-half').removeClass('col-md-12');
             $('.map-block').addClass('active');
             $('.map-half > .row >div').addClass('col-md-6').removeClass('col-md-4');
             }
         else{
              $('.map-view-container').removeClass('container-big');
             $('.map-half').addClass('col-md-12');
             $('.map-half').removeClass('col-md-6');
              $('.map-block').removeClass('active');
             $('.map-half > .row >div').addClass('col-md-4').removeClass('col-md-6');
         }
    
         
     })
     
     $('#btn-apply-catogory').click(function(e){
         $('.filteredby').show();
     })
     /* categories filter*/
     $('#btn-categories').click(function(e){
         $('.category-filter').toggleClass('active');
     })  
       $('.btn-categories').click(function(e){
         $($(this).data('popup-target')).toggleClass('active');
     })
     $('.popup-overlay').click(function(e){
         
         $($(this).data('popup-target')).removeClass('active');
     })  
     $('#btn-mapview').click(function(e){
         $('.things-map-wrapper').addClass('active');
         $('.things-todo-carousel').slick({
             slidesToShow: 2,
		slidesToScroll: 2,
             mobileFirst: true,
             variableWidth: true,
             responsive: [
    {
      breakpoint: 768,
      settings: 'unslick'
    },
                 ]
         })
         
         $('#btn-mapview').addClass('d-none');
         $('#btn-listview').removeClass('d-none');
     })
     
     $('#btn-listview,#map-close').click(function(e){
           $('.things-map-wrapper').removeClass('active');
          $('.things-todo-carousel').slick('unslick');
          $('#btn-mapview').removeClass('d-none');
         $('#btn-listview').addClass('d-none');
     })
     
     
     $('#btn-featuredmapview').on('click',function(e){
          $('.map-block').toggleClass('active');
          $('.map-half').toggleClass('col-md-6');
            $('.map-half').toggleClass('col-md-12');
         $('.map-half > .row >div').toggleClass('col-md-6').toggleClass('col-md-4');
          $('.villa-carousel').slick('unslick');
         $('.featuredestniation-villas').slick({})
          $('.featured-map-wrapper').toggleClass('active');
         $('.villa-carousel').slick();
          $('#btn-featuredlistview').removeClass('d-none');
         $('#btn-featuredmapview').addClass('d-none');
           
     })
      $('#btn-featuredlistview,#featured-map-close').on('click',function(e){
          $('.map-block').toggleClass('active');
          $('.map-half').toggleClass('col-md-6');
            $('.map-half').toggleClass('col-md-12');
         $('.map-half > .row >div').toggleClass('col-md-6').toggleClass('col-md-4');
          $('.villa-carousel').slick('unslick');
         $('.featuredestniation-villas').slick('unslick')
          $('.featured-map-wrapper').toggleClass('active');
         $('.villa-carousel').slick();
            $('#btn-featuredmapview').removeClass('d-none');
         $('#btn-featuredlistview').addClass('d-none');
     })
     
     
     
     $('.close-popup').click(function(e){
         $( $(this).data('target')).removeClass('active');
          
     })
     $('.map-wrapper .close-popup').click(function(e){
        
          $('.things-todo-carousel').slick('unslick');
     })
     
     
     $('#contactcollapse').on('show.bs.collapse', function () {
       
         $('[data-target="#contactcollapse"]').hide();
         $('.visit-villa').hide();

})
     $('.btn-contact,.pin-overlay').click(function(e){
         
         $('.pin-sidebar').toggleClass('fixed');
     })
     
       $('[data-toggle="popover"]').popover({/*trigger: 'click'*/});  
     
     $('#signUpModal').on('show.bs.modal', function () {
            $('#signInModal').modal('hide')
     })
     
       $('#signInModal').on('show.bs.modal', function () {
            $('#signUpModal').modal('hide')
     })
     
     
     /*form validations*/
     if( $('.formValidation').length)
         {
     $('.formValidation').bootstrapValidator({
           feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'form-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
         
         
         
      }).on('success.form.bv', function(e) {
            // Prevent form submission
            e.preventDefault();
            
            var $form = $(e.target);
         
                fv    = $form.data('formValidation');
        
         
         if(e.target.id == 'faq-form'){
             
         }
         
                
            

        });;
             }
     
     
       $('.testimonials-carousel').slick({
              arrows:true,
              dots:false,
              
//              slidesToShow: 4,
//      slidesToScroll: 4,
               appendArrows: $('.testimonial-carousel-arrows'),
            responsive: [
    {
      breakpoint: 767,
      settings: {
       variableWidth: true,
          arrows:false,
        
        //dots: false
      }
    },
                   ]
             
          })
     
    
     
       
      })

var controller = new ScrollMagic.Controller({
                                        globalSceneOptions: {}
                            });
if( $('.travel-diary').length ){
           var scene = new ScrollMagic.Scene({
												triggerElement: ".travel-diary .overlay-yellow",
               duration:600,
                triggerHook: 0.9,

											})
											.setTween(".travel-diary .overlay-yellow", 0.7, {right: "130px"}) // trigger a TweenMax.to tween
											
											.addTo(controller);
          
}

// init controller
			var pallaxctrl = new ScrollMagic.Controller();
		
           $('.plx').each(function(e){
            var scene = new ScrollMagic.Scene({
									triggerElement: $(this)[0],
                    triggerHook: 1,
                    duration:'120%'
								})
								.setTween($(this)[0], { y:'-200px'}) // trigger a TweenMax.to tween
								//.addIndicators({name: "1 (duration: 0)"}) // add indicators (requires plugin)
								.addTo(pallaxctrl);
        })
				

if (navigator.appVersion.indexOf("Win")!=-1){
    $('html').addClass('windows')
}

$('[data-toggle="popupmodal"]').click(function(e){
    e.preventDefault()
    $('.modal-primary').removeClass('active');
    var  data = $(this).data('target');
    
    $(data).addClass('active');
    
    
})
$('[data-dismiss="popupmodal"]').click(function(e){
    e.preventDefault()
    $(this).closest('.modal-primary').removeClass('active');
   
})


