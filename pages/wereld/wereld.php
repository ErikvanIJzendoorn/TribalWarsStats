<?php function dorpProductie(){
    require "wereldactief.php";
    ?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Actief', <?php echo $actief; ?>],
          ['Inactief', <?php echo $inactief; ?>]
        ]);
        var options = {'title':'Verhouding actief - inactief spelers',
                       'width':500,
                       'height':400};
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
    </head>

    <body>
      <div id="chart_div"></div>
    </body>
<?php } ?>

<!DOCTYPE html>
<html>
    <?php 
        require '../index.html';
    ?>
    <div class="row">
        <div class="col s3 offset-s2">
           <?php dorpProductie(); ?>
        </div>
        <div class="col s3 offset-s2">
       
        </div>
        <div class="col s3 offset-s3">
        
        </div>
    </div>
</html>