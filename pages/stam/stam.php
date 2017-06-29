<?php function stam() {
?>
    <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Speler', 'Punten'],

            ['Speler 1', 754],
            ['Speler 2', 5517],
            ['Speler 3', 520],
            ['Speler 4', 4740],
            ['Speler 5', 483],
        ]);

        var options = {
          chart: {
            title: 'Dorp punten gemiddeld'
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="columnchart_material" style="width: 800px; height: 250px;"></div>
  </body>
<?php } ?>
<!DOCTYPE html>
<html>
    <?php 
        require '../index.html';
    ?>
    <div class="row">
        <div class="col s3 offset-s2" style="margin-top: 100px;">
            <?php stam() ?>
        </div>
        <div class="col s3 offset-s2">
       
        </div>
        <div class="col s3 offset-s3">
        
        </div>
    </div>
</html>

