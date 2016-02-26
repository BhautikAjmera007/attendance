@extends('layouts.app')

@section('content')
	<div id="chartContainer" style="height: 400px; width: 100%;"></div>
@endsection

@section('script')
{{ HTML::script('assets/js/moment.min.js') }}
{{ HTML::script('assets/js/canvasjs.min.js') }}

<script type="text/javascript">
$('document').ready(function(){

	 CanvasJS.addColorSet("greenShades",
	 			[
	                "#1BA375",
			        "#FF6600",
			        "#25AAE2",
			        "#F3B718",
			        "#F3B718",
			        "#AD51E2"                                   
                ]);

	var chart = new CanvasJS.Chart("chartContainer",
	{
		colorSet: "greenShades",

		title:{
			text: "Attendance Overview",  
	        fontWeight: "bolder",
	        fontColor: "#008B8B",
	        fontFamily: "tahoma",       
	        fontSize: 25,
	        padding: 10 
		},

		legend: {
			maxWidth: 400
		},

  		animationEnabled: true,
  		animationDuration: 5000,
  		exportFileName: "Attendance", 
  		exportEnabled: true,
  		theme: "theme4",

	  	axisY: {
	    	title: "Hours",
	    	interval: 2
	  	},

		axisX: {
			title: "Day",
			interval: 1
		},

	  	legend: {
	    	verticalAlign: "bottom",
	    	horizontalAlign: "center"
	  	},

	  	data: [{
			type: "column",
			name: "Present",
	   		showInLegend: true,
        	showInLegend: true,
			dataPoints: [
				{ label: "1",  y: 11 },
				{ label: "2",  y: 6  },
				{ label: "3",  y: 11 },
				{ label: "4",  y: 8  },
				{ label: "5",  y: 7  },
				{ label: "6",  y: 7  },
				{ label: "7",  y: 7  },
				{ label: "8",  y: 7  },
				{ label: "9",  y: 7  },
				{ label: "10", y: 4  },
				{ label: "11", y: 8  },
				{ label: "12", y: 10 },
				{ label: "13", y: 7  },
				{ label: "14", y: 3  },
				{ label: "15", y: 5  },
				{ label: "16", y: 10 },
				{ label: "17", y: 11 },
				{ label: "18", y: 7  },
				{ label: "19", y: 10 },
				{ label: "20", y: 11 },
				{ label: "21", y: 8  },
				{ label: "22", y: 9  },
				{ label: "23", y: 11 },
				{ label: "24", y: 3  },
				{ label: "25", y: 1  },
				{ label: "26", y: 11 },
				{ label: "27", y: 10 },
				{ label: "28", y: 8  },
				{ label: "29", y: 4  },
				{ label: "30", y: 8  },
				{ label: "31", y: 10 },
			]
		}]
});
chart.render();
});
</script>
@endsection

