function myAjaxFunction(){
	$(document).ready(function (){
	var selection= document.getElementById('headphones').value;
  var chartType = document.getElementById('chartType').value; 
	var link = "http://localhost/UX%20&%20Data%20Visualisation/DVUX%20Coursework/process.php?headphones='"+selection+"'";
  $.ajax({
    url: link,
    method: "GET",
    success: function(data=this.responseText) {
      
      console.log(data);
      var x = [];
      var y = [];

      for(var i in data) {
        x.push("" + data[i].Year);
        y.push(data[i].Sales);
      }

      var universalOptions = {
        maintainAspectRatio: true,
		responsive: true,
		 title: {
            display: true,
            text: 'Product Sales 2021-2023'
        },
        legend: {
            display:true,
        },
        scales: {
          yAxes: [{
            display:true,
            scaleLabel:{ 
                display: true,
                labelString: 'Value'
            },
				ticks: {
					    beginAtZero: true,
              steps:10,
              stepValue: 5,
              max: 350
               }
            }],
            xAxes: [{ 
              display: true,
              scaleLabel: {
              display: true,
              labelString: 'Headphone Specifications' 
      }
    }]
			
        }
    }
	var colours =['lightblue  ', 'salmon', 'pink'];
	var chartdata = {
        labels: x,
        datasets : [
          {
            label: selection,
            data: y,
			backgroundColor: colours, 
			borderWidth: '2', 
			//borderColor: 'grey', 
			hoverBorderColor: 'black',
      fill: false,
              }
        ]
    
      };

      var ctx = document.getElementById('mycanvas');
      ctx.style.backgroundColor = "white";

         // Destroy previous chart instance if exists
     if (window.barGraph) window.barGraph.destroy();

      window.barGraph = new Chart(ctx, {
        type: chartType, 
        data: chartdata,
		options: universalOptions
      });
    },
    error: function(data) {
      console.log(data);
    }
  });
});

}