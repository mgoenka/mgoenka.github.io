      function getAppCount(){
      	$.get( $SCRIPT_ROOT +'/api/metrics', function( data ) {

			$('#appCountValue').text(data.appCount);
			$('#usersValue').text(data.users);
			$('#ciValue').text(data.ci);
			$('#fpValue').text(data.fp);
			$('#poolsValue').text(data.pools);
			$('#raptorValue').text(data.raptor);
			$('#javaBatchValue').text(data.javaBatch);
			$('#drupalCMSValue').text(data.drupalCMS);
			$('#cubeJSValue').text(data.cubejs);
			//$('#Value').text(data.);
		}); 	
      }