<?php
include_once('links.php');
include_once('header.php');
?>

<?php
require_once('lidhjameDB.php');
$qyteti = 1;
if(isset($_POST['submit'])) {
    $qyteti = $_POST['qyteti'];
}
$query="select tbluser.Firstname, tbluser.Lastname , rezultativotimit.nrVota from rezultativotimit join tbluser on tbluser.ID= rezultativotimit.vKandidateId where Roli='kandidat' and qyteti='$qyteti'";
$result = mysqli_query($conn,$query);
$vota = array(); 
while(($row =  mysqli_fetch_assoc($result))) {
    $firstname[] = $row["Firstname"];
    $vota[] = $row["nrVota"];
}

$queryQytet="select EmerQytet,IdQytet from qytete";
$resultQytet = mysqli_query($conn,$queryQytet);
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<style>
#piechart{
    font-family: 'Questrial', sans-serif;
}
.btn-shfaq:hover  {
    border: 1px solid #407BFE;
    color: #407BFE;
    background-color: transparent;
}
.btn-shfaq{
    background-color: #407BFE;
    border: 1px solid #fff;
    color: #fff;
    padding: 8px 50px;
    border-radius: 25px;
    margin-bottom: 10px;
    outline:0;
}
select{
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    width:100%;
}
</style>   
<script>
document.addEventListener("DOMContentLoaded", function(e) {
    x = document.getElementsByTagName("option");
    for(i =0; i< x.length; i++){
        if (x[i].value == <?php echo $qyteti; ?>)
        {
        x[i].selected='selected';
        }
    }
})
</script>
</head>
<body>
 <div class="container-fluid">
    <div class="row">
        <div class="col-md-4 text-center" style="padding-left:12%; padding-top:15%">
        <form id="form"  method="post">
        <select  name="qyteti" id="qyteti">
                <?php
                while ($row = mysqli_fetch_array($resultQytet)) {
                    echo '
                    <option value='.$row['IdQytet'].'>'.$row['EmerQytet'].'</option>
                    ';
                }
                ?>
            </select>
            <input type="submit" name="submit" class="btn-shfaq mt-5" value="Shfaq" />
        </form>
        </div>
        <div class="col-md-8" style="padding-top:8%">
            <div id="piechart"></div>
        </div>
    </div>
</div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
        // Load google charts
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);  
        var firstname = <?php echo json_encode($firstname); ?>;
        var vota = <?php echo json_encode($vota); ?>;
        var chartValues = [['Kandidati', 'Nr. votave']];
        for(var i=0; i < firstname.length; i++){
            chartValues.push([firstname[i], parseInt(vota[i])]);
        }
        // Draw the chart and set the chart values
        function drawChart() {
            var data = google.visualization.arrayToDataTable(
                chartValues
            );

            // Optional; add a title and set the width and height of the chart
            var options = {
                'title': 'Rezultati per secilin kandidat',
                'width': 700,
                'height': 500
            };

            // Display the chart inside the <div> element with id="piechart"
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }
    </script>

</body>

</html>