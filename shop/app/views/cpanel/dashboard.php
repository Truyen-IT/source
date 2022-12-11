

   
<div class="col-md-8">
<h2>well come to dardbort</h2>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable(
            [
            ['title_product', 'number_cate'],
            <?php 
         foreach($category as $key=>$value){
        
        echo  "['".$value['title_product']."','".$value['number_cate']."'],";
          }?>
        ]);

        var options = {
          title: 'Thống Kê Số Lượng Sản Phẩm Bán Ra',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>
</html>
</div>