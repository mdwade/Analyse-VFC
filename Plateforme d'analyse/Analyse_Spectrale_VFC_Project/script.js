let bpm = 0;

$("#form").submit(e => {
    e.preventDefault();
    var uploadedFile = $("input[name='file']")[0].files[0];
      var formData = new FormData(e.target);
     // formData.append('file', uploadedFile);

     $.ajax({
        url: 'index.php',
        type: 'POST',
        data: formData,  success: function(response) {
            console.log(response)
            data = JSON.parse(response);
            // console.log(data);
            // data = [];
            // for(i=0;i <= response.length;i++){
            //     console.log(response[i])
            //     if(response[i] !== ""){

            //         data.push(response[i]);
            //     }
            // }
             drawChart(data);
        },
        fail: function(error) {
            console.log(error);
                  },
        cache: false,
        contentType: false,
        processData: false
    });
    // $.post("index.php",formData).done(response => {
    //     console.log(response);
    // }).fail(error => {
    //     console.log(error);
    // })
})


function drawChart(res){
   var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['','','','','','','','','','','','','','','',''],
            datasets: [{
                label: 'Pulsation',
                data: res,
                backgroundColor: [

                    'rgba(54, 162, 235, 0.001)',
                ],
                borderColor: [
                    'rgb(54, 162, 235)',
                ],
                borderWidth: 3
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true

                    }
                }],
                fill:false
            }
        }
    });
    calculBPM(res)
}


function calculBPM(data){
    var n = data.length;
    var h = 0;

    for (var i = 0; i < data.length; i++) {
         h += parseInt(data[i])
    }

    var type="normal";

    bpm = h/32;

    if(bpm < 60){
        type = "bradycardie"
    }else{
        if(bpm> 100){
            type = "tachycardie"
        }else if (bpm > 150) {
            type ="Flutter auriculaire";
        }
    }

    $("#bpm").html("<strong>BPM</strong> :"+bpm+"<br><strong>Arythmie </strong> :"+type+"<br><br>");
}
