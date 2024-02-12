Runner.buttonEvents["MAY_REDIRECT"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'MAY_REDIRECT';
	
	if ( !pageObj.buttonEventBefore['MAY_REDIRECT'] ) {
		pageObj.buttonEventBefore['MAY_REDIRECT'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
function openPopup() {
  // Create popup container
  var popupContainer = document.createElement('div');
  popupContainer.className = 'popup';

  // Create dismiss button
  var dismissButton = document.createElement('button');
  dismissButton.className = 'dismiss-btn';
  dismissButton.innerHTML = 'Dismiss';
  dismissButton.onclick = function() {
    // Close the popup when the dismiss button is clicked
    popupContainer.style.display = 'none';
  };

  // Create an iframe for the external content (change 'your_url' to the desired URL)
  var iframe = document.createElement('iframe');
  iframe.src = "may_art_view.php?editid1="+$("#view1_id_may .r-lookup-value").text(); // Change this URL to your desired one

  // Append the dismiss button and iframe to the popup container
  popupContainer.appendChild(dismissButton);
  popupContainer.appendChild(iframe);

  // Append the popup container to the body
  document.body.appendChild(popupContainer);

  // Show the popup
  popupContainer.style.display = 'block';

  // Add event listener to close the popup when clicking outside of it
  document.addEventListener('click', function(event) {
    if (!popupContainer.contains(event.target)) {
      // Clicked outside the popup, close it
      popupContainer.style.display = 'none';
    }
  });
}


//urlToOpen = "may_art_view.php?editid1="+$("#view1_id_may .r-lookup-value").text();
openPopup();



		}
	}
	
	if ( !pageObj.buttonEventAfter['MAY_REDIRECT'] ) {
		pageObj.buttonEventAfter['MAY_REDIRECT'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="MAY_REDIRECT"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "MAY_REDIRECT" + "_" + Runner.genId();
		
		// create object
		var button_MAY_REDIRECT = new Runner.form.Button({
			id: this.id ,
			btnName: "MAY_REDIRECT"
		});
		
		// init
		button_MAY_REDIRECT.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

