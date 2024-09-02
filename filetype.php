<form method ="get" onsubmit="event.preventDefault(); myFunction2();"> 
    <select name = "Name" size = "1">
        <option value = "LOGITECH G535"> LOGITECH G535</option>
        <option value = "RAZER Blackshark V2 Pro">RAZER Blackshark V2 Pro </option>
        <option value = "ARCTIS NOVA 1">ARCTIS NOVA 1 </option>
        <option value = "ACEZONE A-Spire"> ACEZONE A-Spire </option>
    </select> 
 <input type = "submit" onClick= myFunction2();></input>
</form>

<script>

function myFunction2(){
   // alert("inside my function");
    //this line gets the canvas 2d into javascript variable called myChart
var mychart1 = document.getElementById('myChartz').getContext('2d');




var dataB = { 
    type: 'bar' ,
    data: {
        labels: [<?php echo $dataX_one;  ?>],
        datasets:[{
            label: 'LOGITECH G535',
            data: [<?php echo $dataY_one; ?>],
                backgroundColor: [' pink',' pink'], 
                borderWidth: 1,
                borderColour: 'grey',
                 hoverBorderColor: 'black',
        },
        {
            label: 'RAZERAZER Blackshark V2 Pro',
            data: [<?php echo $dataY_two; ?>],
                backgroundColor: [' blue', ' blue'], 
                borderWidth: 1,
                borderColour: 'grey',
                 hoverBorderColor: 'black',
        },
     ],
    },
    

    options: {

                title:{
                    display: true,
                    text: 'Headphone Comaprison'
                },
                legend:{
                    display: true,
                    text: ' Legend'
                },

                scales:{
                    yAxes: [{
                        display:true,

                        ticks: {
                            beginAtZero: true,
                            steps:10,
                            stepValue: 5,
                            max: 500
                        }
                        
                    }]
                }

            }
};
 if (window.chart1){
    window.chart1.destroy();
 }


window.chart1 = new Chart(mychart1, dataB);
// this line creates a new chart obejct
};

</script>

<?php $name= $_GET['Name'];

?>

