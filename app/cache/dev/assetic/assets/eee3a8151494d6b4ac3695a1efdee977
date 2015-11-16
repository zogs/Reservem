$(document).ready(function() {

	$(document).scannerDetection({
		minLength:3,
		ignoreIfFocusOn: 'input',
	})
	.bind('scannerDetectionComplete',function(e,data){ 

		action = $('#barcode').attr('data-action');
		reservid = $('#barcode').attr('data-reservation-id');
		barcode = data.string.replace(/à/g, '0').replace(/&/g, '1').replace(/é/g,'2').replace(/\"/g,'3').replace(/\'/g,'4').replace(/\(/g,'5').replace(/\-/g,'6').replace(/è/g,'7').replace(/\_/g,'8').replace(/ç/g,'9');

		if(action == 'takeout') {

			takeoutDevice(barcode,reservid);
		}
		if(action == 'return') {

			returnDevice(barcode,reservid);
		}
	 })

	.bind('scannerDetectionError',function(e,data){

		action = $('#barcode').attr('data-action');
		reservid = $('#barcode').attr('data-reservation-id');
		barcode = data.string.replace(/à/g, '0').replace(/&/g, '1').replace(/é/g,'2').replace(/\"/g,'3').replace(/\'/g,'4').replace(/\(/g,'5').replace(/\-/g,'6').replace(/è/g,'7').replace(/\_/g,'8').replace(/ç/g,'9');

		if(action == 'takeout') {

			takeoutDevice(barcode,reservid);
		}
		if(action == 'return') {

			returnDevice(barcode,reservid);
		}

	})
	.bind('scannerDetectionReceive',function(e,data){ console.log('receive'); })
	;
});

function takeoutDevice(barcode,reservid) {

	console.log(barcode);

	url = $('#barcode').attr('data-url');
	$.ajax({
	        url: url,
	        data: { barcode: barcode, reservid: reservid},
	        success: function(data) {
	            	console.log(data);
	            
	            if(data.error != '') {

	            		$('#ajax-error').toggleClass('hide').text(data.error);			            		
	            }
	            
	            if(data.device) {


	            		$('#device-'+data.device).addClass('success');
	            		$('#ajax-error').toggleClass('hide').text('');
	            		if(data.left == 0) window.location.href = $('#barcode').attr('data-completed-url');
	            }
	        },
	        dataType: 'Json'
	    });
}

function returnDevice(barcode,reservid) {

	console.log(barcode);

	url = $('#barcode').attr('data-url');
	$.ajax({
	        url: url,
	        data: { barcode: barcode, reservid: reservid},
	        success: function(data) {
	            	console.log(data);
	            
	            if(data.error != '') {

	            		$('#ajax-error').toggleClass('hide').text(data.error);			            		
	            }
	            
	            if(data.device) {


	            		$('#device-'+data.device).addClass('success').delay(1000).slideUp(1000);
	            		$('#ajax-error').toggleClass('hide').text('');
	            		if(data.left == 0) window.location.href = $('#barcode').attr('data-completed-url');
	            }
	        },
	        dataType: 'Json'
	    });
}