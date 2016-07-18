
<script src="<?php echo base_url();?>/assets/plugins/jquery/jquery-1.9.1.min.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/chart-js/chart.js"></script>
<canvas id="myLineChart" width="740" height="200"></canvas>

<script>
  function drawLineChart() {

    // Add a helper to format timestamp data

    var jsonData = $.ajax({
      url : "<?=base_url("assets/line.json")?>",
      dataType: 'json'  
    }).done(function (results) {
     console.log(results);
 
   
      // Create the chart.js data structure using 'labels' and 'data'
      var tempData = {
        labels : ["January", "February", "March", "April", "May", "June", "July"],
        datasets : [{
            fillColor             : "rgba(151,187,205,0.2)",
            strokeColor           : "rgba(151,187,205,1)",
            pointColor            : "rgba(151,187,205,1)",
            pointStrokeColor      : "#fff",
            pointHighlightFill    : "#fff",
            pointHighlightStroke  : "rgba(151,187,205,1)",
            data                  : [28, 48, 40, 19, 86, 27, 90]
        }]
      };

      // Get the context of the canvas element we want to select
      var ctx = document.getElementById("myLineChart").getContext("2d");

      // Instantiate a new chart
      var myLineChart = new Chart(ctx).Line(tempData, {
        //bezierCurve: false
      });
    });
  }

  drawLineChart();
</script>