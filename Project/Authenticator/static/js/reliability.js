
var strokeColors = ["#27AE60","#16A085","#2980B9","##8E44AD","#2C3E50","#F39C12","#D35400","#C0392B","#7F8C8D","#95A5A6"]

//Provides a random color from StrokeColors to render line graphs
function getRandomColor() {	   
    	var top = strokeColors.length-1;
    	var bottom = 0;
    	var index = Math.floor( Math.random() * ( 1 + top - bottom ) ) + bottom;
        return strokeColors[index];    
}
//var reliabilityBaseURL = "http://phx5qa01c-7013.stratus.phx.qa.ebay.com:8090/api/reliability";
var reliabilityBaseURL = "/api/reliability";


$( document ).ready(function() {

	//Rendering Metrics Tabs using Bootstrap css
	$('#metricsTab a').click(function (e) {
	  e.preventDefault();
	  $(this).tab('show');
	});
});

function renderRequestTypes(url,domId){

	var jqxhr = $.getJSON( url, function() {
	  console.log( "success" );
	})
	  .done(function(data) {
	    console.log(data );
	  })
	  .fail(function(error) {
	    console.log( "error "+error );
	  })
	  .always(function() {
	    
	  });
	 	
	// Set another completion function for the request above
	jqxhr.complete(function() {
	  console.log( "second complete" );
	});
}

function renderChart () {
		var provisioning_request_types_url =  reliabilityBaseURL+"/provisioning/requestTypes";
		var provisioning_request_types_dom_id =  "provisioning-request-types";

		renderRequestTypes(provisioning_request_types_url,provisioning_request_types_dom_id);

		/*///////////////////////
				Provisioning
		///////////////////////*/
		var provisioning_weekly_reliability_url =  reliabilityBaseURL+"/provisioning/CREATE/weeks/10";
		var provisioning_weekly_reliability_dom_id = "provisioning-weekly-reliability";
		

		var provisioning_daily_reliability_url =  reliabilityBaseURL+"/provisioning/CREATE/days/10";
		var provisioning_daily_reliability_dom_id = "provisioning-daily-reliability";


		/*///////////////////////
				Titan
		///////////////////////*/
		var titan_weekly_reliability_url =  reliabilityBaseURL+"/titan/RAPID_DEPLOY/weeks/10";
		var titan_weekly_reliability_dom_id = "titan-weekly-reliability";
		

		var titan_daily_reliability_url =  reliabilityBaseURL+"/titan/RAPID_DEPLOY/days/10";
		var titan_daily_reliability_dom_id = "titan-daily-reliability";

		/*///////////////////////
				IaaS
		///////////////////////*/

		var iaas_weekly_reliability_url =  reliabilityBaseURL+"/iaas/CREATE_COMPUTE/weeks/10";
		var iaas_weekly_reliability_dom_id = "iaas-weekly-reliability";

		var iaas_daily_reliability_url =  reliabilityBaseURL+"/iaas/CREATE_COMPUTE/days/10";
		var iaas_daily_reliability_dom_id = "iaas-daily-reliability";
		
		getDataAndRenderTrend(provisioning_weekly_reliability_url ,provisioning_weekly_reliability_dom_id);		
		getDataAndRenderTrend(provisioning_daily_reliability_url ,provisioning_daily_reliability_dom_id);		


		getDataAndRenderTrend(titan_weekly_reliability_url ,titan_weekly_reliability_dom_id);		
		getDataAndRenderTrend(titan_daily_reliability_url ,titan_daily_reliability_dom_id);		


		getDataAndRenderTrend(iaas_weekly_reliability_url ,iaas_weekly_reliability_dom_id);		
		getDataAndRenderTrend(iaas_daily_reliability_url ,iaas_daily_reliability_dom_id);		
}

function getDataAndRenderTrend(url,domId){
	// Assign handlers immediately after making the request,
	// and remember the jqxhr object for this request
	var jqxhr = $.getJSON( url, function() {
	  console.log( "success" );
	})
	  .done(function(data) {
	  	var labels = new Array();
	  	var dataSet =  new Array();
	  	
	  	$.each(data,function(key,value){
	  		labels.push(key);
	  		dataSet.push(value["reliability"])
	  		// console.log(labels);
	  		// console.log(key+" -> ",value);
	  	})
	  	// Get the context of the canvas element we want to select
		var ctx = document.getElementById(domId).getContext("2d");
		
		var data = {
		    labels: labels,
		    datasets: [
		        {
		            label: "My First dataset",
		            fillColor: "rgba(220,220,220,0.2)",
		            strokeColor: getRandomColor(),
		            pointColor: "rgba(220,220,220,1)",
		            pointStrokeColor: "#fff",
		            pointHighlightFill: "#fff",
		            pointHighlightStroke: "rgba(220,220,220,1)",
		            data: dataSet
		        }
		    ]
		};

		var myLineChart = new Chart(ctx).Line(data, options);

	    // console.log( "second success "+data );
	  })
	  .fail(function(error) {
	    console.log( "error "+error );
	  })
	  .always(function() {
	    // console.log( "complete" );
	  });
	 	
	// Set another completion function for the request above
	jqxhr.complete(function() {
	  console.log( "second complete" );
	});
}
var options = {

		    ///Boolean - Whether grid lines are shown across the chart
		    scaleShowGridLines : true,

		    //String - Colour of the grid lines
		    scaleGridLineColor : "rgba(0,0,0,.05)",

		    //Number - Width of the grid lines
		    scaleGridLineWidth : 1,

		    //Boolean - Whether the line is curved between points
		    bezierCurve : true,

		    //Number - Tension of the bezier curve between points
		    bezierCurveTension : 0.4,

		    //Boolean - Whether to show a dot for each point
		    pointDot : true,

		    //Number - Radius of each point dot in pixels
		    pointDotRadius : 4,

		    //Number - Pixel width of point dot stroke
		    pointDotStrokeWidth : 1,

		    //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
		    pointHitDetectionRadius : 20,

		    //Boolean - Whether to show a stroke for datasets
		    datasetStroke : true,

		    //Number - Pixel width of dataset stroke
		    datasetStrokeWidth : 2,

		    //Boolean - Whether to fill the dataset with a colour
		    datasetFill : true,

		    //String - A legend template
		    legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>"

		};
