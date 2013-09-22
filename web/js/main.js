$( document ).ready(function() {
  $('#container').isotope({
    // options
    itemSelector : '.product',
  layoutMode : 'masonry'
  });
  $(".panel-body").wrap("<div class='panel-body-layer'></div>");
  $(".panel-body").fadeTo("fast", 0.7); 
  // images opacity on start
   $(".panel-body").hover(
   		function(){ 
   			$(this).stop().fadeTo("fast", 1);
   		 },
   		function(){
   			$(this).stop().fadeTo("fast", 0.7);
   			 // images opacity on mouse out 
	});
   $('#option1').change(function(){var t = $(this).val();
   		if(t == 1)$(this).val('0');
   		else $(this).val('1');
   });
   $('#option2').change(function(){var t = $(this).val();
   		if(t == 1)$(this).val('0');
   		else $(this).val('1');
   });
   $('#option3').change(function(){var t = $(this).val();
   		if(t == 1)$(this).val('0');
   		else $(this).val('1');
   });
    $('.btn-group label').change(
    	function(){ 
    		var tt1 = $('#option1').val();
    		var tt2 = $('#option2').val();
    		var tt3 = $('#option3').val();    		
    		if(tt1=='1')
    			tt1 = 'TA';
    		else
    			tt1 = '';
    		if(tt2=='1')
    			tt2 = 'TB';
    		else
    			tt2 = '';
    		if(tt3=='1')
    			tt3 = 'IN';
    		else
    			tt3 = '';
    		var ans = (tt1 + tt2 + tt3);
			if(ans != '')
				$('#container').isotope({ filter: '.' + ans });
			else
				$(this).click();
    			    		
    	return true	;}
    	);
    $('#buttonSearch').click(function(){
    	var q = $('#boxSearch').val().toUpperCase();
    	console.log(q);
    	if(q ==='')
    		$('#container').isotope({ filter: '.product'});
    	else
    		$('#container').isotope({ filter: '.' + q });
    	}
    );
});
