<?php 
function dorpProductie(){
    require "dorpproductie.php";
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
          ['Hout', <?php echo $hout; ?>],
          ['Leem', <?php echo $leem; ?>],
          ['IJzer', <?php echo $ijzer; ?>]
        ]);
        var options = {'title':'Dorp productie',
                       'width':400,
                       'height':300};
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
    </head>

    <body>
      <div id="chart_div"></div>
    </body>
<?php }

function dorpTroepen(){
    require "dorptroepen.php";
    ?>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
        ['Speer', <?php echo $speer; ?>],
        ['Zwaard', <?php echo $zwaard; ?>],
        ['Bijl', <?php echo $bijl; ?>],
        ['Verkenner', <?php echo $verkenner; ?>],
        ['Lichte Cavalerie', <?php echo $lichteCav; ?>],
        ['Katapult', <?php echo $katapult; ?>]
        ]);

        // Set chart options
        var options = {'title':'Dorp troepen',
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('dorpTroepen'));
        chart.draw(data, options);
      }
    </script>
    </head>

    <body>
      <!--Div that will hold the pie chart-->
      <div id="dorpTroepen"></div>
    </body>
    <?php
}

function dorpPunten() {
    require "dorppunten.php";
    ?>
    <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Punten', 'Spelers'],
          ['<1000', <?php echo $level1 ?>],
          ['1000-2000', <?php echo $level2 ?>],
          ['2000-3000', <?php echo $level3 ?>],
          ['3000-4000', <?php echo $level4 ?>],
          ['4000-5000', <?php echo $level5 ?>],
          ['5000-6000', <?php echo $level6 ?>],
          ['6000-7000', <?php echo $level7 ?>],
          ['7000-8000', <?php echo $level8 ?>]
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
        <div class="col s3 offset-s2">
        <?php dorpProductie(); ?>
        </div>
        <div class="col s3 offset-s2">
        <?php dorpTroepen(); ?>
        </div>
        <div class="col s3 offset-s3">
        <?php dorpPunten(); ?>
        </div>
    </div>
</html>