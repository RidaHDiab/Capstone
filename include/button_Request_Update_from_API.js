Runner.buttonEvents["Request_Update_from_API"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Request_Update_from_API';
	
	if ( !pageObj.buttonEventBefore['Request_Update_from_API'] ) {
		pageObj.buttonEventBefore['Request_Update_from_API'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
ajax.setMessage('requesting...');
		}
	}
	
	if ( !pageObj.buttonEventAfter['Request_Update_from_API'] ) {
		pageObj.buttonEventAfter['Request_Update_from_API'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
swal ( "Success", "Request sent" , "success" );


ajax.setMessage('');
		}
	}
	
	$('a[id="Request_Update_from_API"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Request_Update_from_API" + "_" + Runner.genId();
		
		// create object
		var button_Request_Update_from_API = new Runner.form.Button({
			id: this.id ,
			btnName: "Request_Update_from_API"
		});
		
		// init
		button_Request_Update_from_API.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

