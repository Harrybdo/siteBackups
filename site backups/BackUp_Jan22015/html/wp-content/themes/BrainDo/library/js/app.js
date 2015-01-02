$(document).foundation();

$(document).ready(function(){
  setNavigation();
  if($("body").hasClass("page-template-contact-php")){
   $("#contactUsForm").submit(function(e){
      e.preventDefault();
      submitForm();
    });
    
    $("#contactUsForm input, #contactUsForm select").change(function(e){
      validateField($(this));
    });
  }
  
  var homeBlocks = $('.home .areas-of-expertise ul li.block');
  for(i=0;i<homeBlocks.length; i++) {
    homeBlocks[i].addClass('animated bounceInUp' + i);
  }
});

/*jshint devel:true */
/*global Modernizr:true */


var maxSmall = Modernizr.mq('only all and (max-width: 40em)');
var maxMedium = Modernizr.mq('only all and (max-width: 64em)');
var maxMedium = Modernizr.mq('only all and (max-width: 64em)')
var maxLarge = Modernizr.mq('only all and (max-width: 10000em)');

var isSmall = maxSmall;
var isMedium = maxMedium&&!maxLarge;
var isLarge = maxLarge&&!maxMedium;

var braindoRed = "#a53400";
var braindoYellow = "#a58800";
var braindoDarkBlue = "#014048";
var braindoGreen = "#557701";
var braindoTeal = "#0080a5";

var pastExpertiseSlider;
var pastActiveSlider;
var slideState = [];
var currentBlock;

function getPixels(rem){
  var htmlFontSize = $("html").css('font-size');
  var htmlFontNum = parseInt(htmlFontSize);
  return (rem*htmlFontNum+"px");
}

function setNavigation() {
  var path = window.location.pathname;
  path = decodeURIComponent(path);

  $("nav.top-bar ul li a, .navModalList li a").each(function () {
      var href = $(this).attr('href');
      if (path.substring(0, href.length) == href && href != "/") {
          $(this).closest('li').addClass('active');
      }
      
      if(path == "/" && href == "/"){
        $(this).closest('li').addClass('active');
      }
  });

}

if(isSmall){
  $(document).on('open.fndtn.reveal', '[data-reveal]', function () {
    if(window.innerHeight > window.innerWidth){
      $(document).bind('touchmove',function(e){
          e.preventDefault(); 
      });
    }else{
      $(".page-wrapper").hide();
    }
  });
  
  $(document).on('close.fndtn.reveal', '[data-reveal]', function () {
    if(window.innerHeight > window.innerWidth){
      $(document).unbind('touchmove');
    }else{
      $(".page-wrapper").show();
    }
  });
  
  $(".small-slider").children().children(".cta-button").children(".arrows").hide();
  
  $(".expertiseBlock").click(function(e){
    e.preventDefault();
    if(typeof pastExpertiseSlider != typeof undefined){
      $(pastExpertiseSlider).children().children(".cta-button").children(".arrows").hide();
      $(pastExpertiseSlider).slideUp(500,function(){
        pastExpertiseSlider = null;
      });
      
      if($(pastExpertiseSlider).attr("id") !== $(this).closest("li").next(".small-slider").attr("id")){
        $(this).closest("li").next(".small-slider").slideDown(500,function(){
            pastExpertiseSlider = $(this);
        });
        $(this).closest("li").next(".small-slider").children().children(".cta-button").children(".arrows").fadeIn(1000).css("display","inline-block");

      }
    }else{
      $(this).closest("li").next(".small-slider").slideDown(500,function(){
        pastExpertiseSlider = $(this);
      });
      $(this).closest("li").next(".small-slider").children(".cta-button").children(".arrows").fadeIn(1000).css("display","inline-block");
    }
  }); 
}


$(".employee-block").click(function(){	
  if(!isSmall){
  	var blockNumber = $(this).attr("id").match(/employee-block-(\d\d?)/i)[1];
  	slideState[blockNumber] = false;
  	
  	if(slideState.indexOf(true) != -1){
    	console.log("something sliding!");
      //do nothing, something is sliding
    }else{
      
      if(typeof pastActiveSlider != typeof undefined){
        if($(pastActiveSlider).attr("id") == $("div[id='employee-slider-"+blockNumber+"']").attr("id")){
          console.log("same");
          $("div[id='employee-slider-"+blockNumber+"']").slideToggle(500,function(){
            slideState[blockNumber] = false;
          });
          pastActiveSlider = undefined;
          slideState[blockNumber] = true;
        }else{
      		$(pastActiveSlider).animate({opacity: 0},1,function(){
        		
        		$(pastActiveSlider).css("position","absolute");
        		
        		$("div[id='employee-slider-"+blockNumber+"']").slideDown(500,function(){
          		pastActiveSlider = $("div[id='employee-slider-"+blockNumber+"']");
          		slideState[blockNumber] = false;
            });
            
            $(pastActiveSlider).slideToggle(1);
            $(pastActiveSlider).css("opacity","1");
            $(pastActiveSlider).css("position","static");
    
    
      		});
      		
      		slideState[blockNumber] = true;
        }
    		
      }else{
    		$("div[id='employee-slider-"+blockNumber+"']").slideToggle(500,function(){
      		slideState[blockNumber] = false;
      		pastActiveSlider = $("div[id='employee-slider-"+blockNumber+"']");
    		});
    		slideState[blockNumber] = true;
      }
    }
  }else{ //SMALL
    var blockNumber = $(this).attr("id").match(/employee-block-(\d\d?)/i)[1];
  	slideState[blockNumber] = false;
  	
  	if(slideState.indexOf(true) != -1){
    	console.log("something sliding!");
      //do nothing, something is sliding
    }else{
      
      if(typeof pastActiveSlider != typeof undefined){
        if($(pastActiveSlider).attr("id") == $("div[id='employee-slider-small-"+blockNumber+"']").attr("id")){
          console.log("same");
          $("div[id='employee-slider-small-"+blockNumber+"']").slideToggle(500,function(){
            slideState[blockNumber] = false;
          });
          pastActiveSlider = undefined;
          slideState[blockNumber] = true;
        }else{
      		$(pastActiveSlider).animate({opacity: 0},1,function(){
        		
        		$(pastActiveSlider).css("position","absolute");
        		
        		$("div[id='employee-slider-small-"+blockNumber+"']").slideDown(500,function(){
          		pastActiveSlider = $("div[id='employee-slider-small-"+blockNumber+"']");
          		slideState[blockNumber] = false;
            });
            
            $(pastActiveSlider).slideToggle(1);
            $(pastActiveSlider).css("opacity","1");
            $(pastActiveSlider).css("position","static");
    
    
      		});
      		
      		slideState[blockNumber] = true;
        }
    		
      }else{
    		$("div[id='employee-slider-small-"+blockNumber+"']").slideToggle(500,function(){
      		slideState[blockNumber] = false;
      		pastActiveSlider = $("div[id='employee-slider-small-"+blockNumber+"']");
    		});
    		slideState[blockNumber] = true;
      }
    }
  }
});


function getQueryVariable(variable, defaultQuery) {
    var query = window.location.search.substring(1);
    var vars = query.split('&');
    for (var i = 0; i < vars.length; i++) {
        var pair = vars[i].split('=');
        if (decodeURIComponent(pair[0]) == variable) {
            return decodeURIComponent(pair[1]);
        }
    }
  //if no query var, make it strategy by default
	return defaultQuery;
}

function getBlock(blockName){
  switch(blockName){
    case "strategy":
      return $("#expertiseBlock0");
      break;
            
    case "analytics":
      return $("#expertiseBlock1");
      break;
    
    case "development":
      return $("#expertiseBlock2");
      break;
      
    case "search":
      return $("#expertiseBlock3");
      break;
    
    case "creative":
      return $("#expertiseBlock4");
      
    case "default":
      return $("#expertiseBlock0");
      break; 
  } 
}

if($("body").hasClass("page-template-services-php")){
  
  $(window).resize(function(e){
    /*
if(Modernizr.mq('only all and (max-width: 40em)')){
      location.reload();
    }
*/
    if(isMedium || isLarge){
      var xPos = $(currentBlock).position().left;
      var boxWidth = $(currentBlock).width();
      $(".triangle").css("margin","0 0 0 "+(xPos+(boxWidth/2)-20)+"px");
    }
  });
}

function _serviceDisplay(param){
    var service = getQueryVariable(param,"strategy");
  	currentBlock = getBlock(service);
  if(!isSmall){
    var xPos = $(currentBlock).position().left;
    var boxWidth = $(currentBlock).width();
  	$(".expertiseBlock").each(function(){
    	  if($(this).attr("id") !== $(currentBlock).attr("id")){
      	  $(this).css("opacity",".25");
    	  }else{
      	  $(this).css("opacity","1");
    	  }
  	});
  	$(".servicePanel").each(function(){
  		if($(this).attr("id").match(new RegExp(service,"i"))){
    		//alert("match!");
  			$(this).attr('style','display: block !important');
  			$(".triangle").css("margin","0 0 0 "+(xPos+(boxWidth/2)-5)+"px");
  			$(".triangle").css("border-color", getColorUpdate(service)+" transparent");
        $(".expertise-expanded").css("border-color",getColorUpdate(service));
  		}
  	});
  }else{
    $(".small-slider").each(function(){
      if($(this).attr("id").match(new RegExp(service,"i"))){
        $(this).show();
        $(this).children().children(".cta-button").children(".arrows").fadeIn(1000).css("display","inline-block");
        pastExpertiseSlider = $(this);
      }
    })
  }
}

function getServicePanel(blockNum){
   var paneldivs = $(".servicePanel");
   var panelToShow = paneldivs[blockNum];
   return panelToShow;
}

function getColorUpdate(clickedBlock){
  switch(clickedBlock){
    
    case "0": //red
    case "strategy":
      return braindoRed;
      break;
      
    case "1": //yellow
    case "analytics":
      return braindoYellow;
      break;
    
    case "2": //Dark Blue
    case "development":
      return braindoDarkBlue;
      break;
    
    case "3": //green
    case "search":
      return braindoGreen;
      break;
    
    case "4": //teal
    case "creative":
      return braindoTeal;
      break;
      
    default:
      return 0;
      break;
  }
  return null;
  
}

if($("body").hasClass("page-template-services-php")){
  _serviceDisplay("service");
  
  if(!isSmall){
    $(".expertiseBlock").click(function(e){
      var clickedBlock = $(this).attr("id").match(/expertiseBlock(\d)/i)[1];
      var clickedBlockElement = $(this);
      currentBlock = $(this);
      $(".expertiseBlock").closest("a").click(function(e){
        e.preventDefault();
      });
      $(this).css("opacity","1");
      $(".expertiseBlock").each(function(){
        if($(this).attr("id") !== $(clickedBlockElement).attr("id")){
              $(this).css("opacity",".25"); 
        }
      });
      
    	//fade out current services
    	$(".servicePanel").animate({opacity:0}, 1000, function() {
        $(".servicePanel").attr('style','display: none !important');
      	var clickedService = getServicePanel(clickedBlock);
      	$(clickedService).attr('style','display: block !important');
    	});
    	
    	var xPos = $(this).position().left;
    	var boxWidth = $(this).width();
    	
      $(".triangle").animate({margin:"0 0 0 "+(xPos+(boxWidth/2)-5), borderTopColor: getColorUpdate(clickedBlock)},1000, function(){
        $(".servicePanel").animate({opacity:1}, 500);
      });
      $(".expertise-expanded").animate({borderTopColor: getColorUpdate(clickedBlock)},1000);	
    });
  }
}

if(location.pathname.match(/contact/i)){
  // GOOGLE MAP DEFAULT LOCATION - PHILADELPHIA //
  var map;
  function initialize() {
    var myLatLng = new google.maps.LatLng(39.959054, -75.151483);
  	var mapOptions = {
      zoom: 14,
  		center: myLatLng,
  		mapTypeControl: true,
  		mapTypeControlOptions: {
  			style: google.maps.MapTypeControlStyle.DEFAULT
  		},
  		zoomControl: true,
  		zoomControlOptions: {
  			style: google.maps.ZoomControlStyle.DEFAULT
  		}
  	};
  			
  	map = new google.maps.Map(document.getElementById("googleMap"),mapOptions);
  				
  	var marker = new google.maps.Marker({
  		position: myLatLng,
  		map: map,
  		title:"BrainDo"
  	});
  	
  	google.maps.event.addListener(marker, 'click', function() {
  		infoWindow.open(map,marker);
  	});
  }
  google.maps.event.addDomListener(window, 'load', initialize);
}

function formValidate(){
  var valid = true;
  
  if(!$("#name").val().match(/^[a-zA-Z]+$/)){
    $("#name").next().css("display","block");
    valid = false;
  }else{
    $("#name").next().css("display","none");
  }
  if(!$("#email").val().match(/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/)){
    $("#email").next().css("display","block");
    valid = false;
  }else{
    $("#email").next().css("display","none");
  }
  return valid;
}

function validateField(field){
  switch($(field).attr("id")){
    
    case "name":
      if(!$("#name").val().match(/^[a-zA-Z]+$/)){
        $("#name").next().css("display","block");
      }else{
        $("#name").next().css("display","none");
      }
    break;
    
    case "email":
      if(!$("#email").val().match(/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/)){
        $("#email").next().css("display","block");
        valid = false;
      }else{
        $("#email").next().css("display","none");
      }
    break;
    
    default:
    break;
  }
}

function submitForm(){
  var isValid = formValidate();
  if(isValid){
		// Handle the submission of the form
		var name = $('#name').val();
		var email = $('#email').val();
		var message = $('#message').val();

		//Data for reponse
		var dataString = 'name=' + name + '&email=' + email + '&message=' + message;
    		
		//Begin Ajax call
		$.ajax({
			type: "POST",
			url:"/mailform.php",
			data: dataString,
			success: function(data){
  			  console.log("SUCCESS");
			  	$('#contactUsForm').html("<div id='thanks'></div>");
			    $('#thanks').html("<h2>Thanks!</h2>")
			    .append("<p>We will respond to your inquiry as soon as possible.</p>")
			    .hide()
			    .fadeIn(1500); 
			}			
		}); //ajax call
  }
}