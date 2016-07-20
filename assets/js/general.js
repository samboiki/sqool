
//*$(document).ready(function(){
  //  $('#content').load('/epms/grades.php');
    
 //   $('ul#nav li a').click(function(){
//        var page =$(this).attr('href');
       // alert(page);
 ///       $('#content').load(page);
//         return false;
 //   })
//});

 function editg(url) {
       //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('edit_grades/')?>/" + url,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            console.log(url);
            
            $('[name="id"]').val(data.id);
            $('[name="name"]').val(data.name);
 
            $('#modal-dialog').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Person'); // Set title to Bootstrap modal title
 
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
  }
  
  function editga() {
       //Ajax Load data from ajax
     alert('sam');
 
  }
  
  function drawLineChart() {

    // Add a helper to format timestamp data

    var jsonData = $.ajax({
      url : "<?=base_url("assets/line.json")?>",
      dataType: 'json'  
    }).done(function (results) {
      // Create the chart.js data structure using 'labels' and 'data'
      var tempData = {
        labels: ['English', 'Mathematics', 'History', 'Afrikaans', 'Geography', 'Accounting', 'Business Studies','Physical Science','Agriculture'],
        datasets: [
                    {
                        label: 'My First dataset',
                        fillColor: 'rgba(0, 17, 17,0.4)',
                        strokeColor: 'rgba(0, 17, 17,1)',
                        pointColor: 'rgba(0, 17, 17,1)',
                        pointStrokeColor: '#fff',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(45,53,60,1)',
                        data: [65,59,90,81,56,55,70,85,99]
                    },
                    {
                        label: 'My Second dataset',
                        fillColor: 'rgba(0, 154, 154,0.2)',
                        strokeColor: '#fff',
                        pointColor: 'rgba(0, 154, 154,1)',
                        pointStrokeColor: '#fff',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(10, 154, 154,1)',
                        data: [88,48,60,49,96,87,100,55,72]
                    }
                 ]
          };
          
      var polarData = [
                        {
                            value: 40, color: 'rgba(0, 17, 17,0.4)', highlight: '#fff',label: 'English'
                        },
                        {
                            value: 60, color: strokeBlue, highlight: '#fff', label: 'Mathematics'
                        },
                        {
                            value: 45, color: strokeGreen, highlight: '#fff', label: 'History'
                        },
                        {
                            value: 62, color: strokeGrey, highlight: '#fff',label: 'Afrikaans'
                        },
                        {
                            value: 70, color: strokeGrey, highlight: '#fff',label: 'Geography'
                        },
                        {
                            value: 45, color: strokeGrey, highlight: '#fff',label: 'Accounting'
                        },
                        {
                            value: 34, color: strokeGrey, highlight: '#fff',label: 'Business Studies'
                        },
                        {
                            value: 94, color: strokeBlack, highlight: '#fff', label: 'Agriculture'
                        },
                        {
                            value: 56, color: strokeBlack, highlight: '#fff', label: 'hysical Science'
                        }
                      ];
                      
        
      pieChartContent.innerHTML = '&nbsp;';
      $('#pieChartContent').append('<canvas id="myChart" ><canvas>');

      // Get the context of the canvas element we want to select
      var ctx = document.getElementById("myChart").getContext("2d");
      
      
      // Instantiate a new chart
      var myLineChart = new Chart(ctx).Radar(tempData, {
          pointLabelFontColor : "#f2f2f2",
          pointLabelFontFamily : '"Open Sans", "Helvetica Neue", "Helvetica", "Arial", sans-serif'
      });
      
   
    });
  }
   drawLineChart();
  function ra() {
    drawLineChart();
  }
  
  function polar(){
    var polarData = [
                        {
                            value: 40, color: 'rgba(0, 17, 17,0.4)', highlight: '#fff',label: 'English'
                        },
                        {
                            value: 60, color: strokeBlue, highlight: '#fff', label: 'Mathematics'
                        },
                        {
                            value: 45, color: strokeGreen, highlight: '#fff', label: 'History'
                        },
                        {
                            value: 62, color: strokeGrey, highlight: '#fff',label: 'Afrikaans'
                        },
                        {
                            value: 70, color: strokeGrey, highlight: '#fff',label: 'Geography'
                        },
                        {
                            value: 45, color: strokeGrey, highlight: '#fff',label: 'Accounting'
                        },
                        {
                            value: 34, color: strokeGrey, highlight: '#fff',label: 'Business Studies'
                        },
                        {
                            value: 94, color: strokeBlack, highlight: '#fff', label: 'Agriculture'
                        },
                        {
                            value: 56, color: strokeBlack, highlight: '#fff', label: 'hysical Science'
                        }
                      ];
                      
                      var pieChartContent = document.getElementById('pieChartContent');

                        pieChartContent.innerHTML = '&nbsp;';
                        $('#pieChartContent').append('<canvas id="myChart" ><canvas>');

                      // Get the context of the canvas element we want to select
                      var ctx2 = document.getElementById("myChart").getContext("2d");

                      // Instantiate a new chart
                      var myChart = new Chart(ctx2).PolarArea(polarData, {
                        //bezierCurve: false
                      });
  }
  function po() {
    polar();
  }
  