<?php 
    include "../connection.php";
    session_start();
    // $result = $con->query($query);
?>

<!DOCTYPE html>
<html lang="en">
    <?php include "./includes/header.php" ?>

    <?php include "./includes/navbar.php" ?>

    <div class='container d-flex justify-content-center'>
        <div class="m-5 shadow p-4" id="columnchart_material" style="width: 75%; height: 500px;"></div>
    </div>

    <div class="container m-5 mx-auto">
        <div class="row">
            <div class="col gap-3 m-3">
                <div class="card shadow" style="width: 20rem;">
                    <a href="owner_view.php" class="p-3">
                        <img src="../images/UserDetailPage.png" class="card-img-top shadow" style="height: 200px;" alt="...">
                    </a>    
                    <div class="card-body">
                        <h5 class="card-title text-primary">User Detail Page</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="admin_view.php" class="btn btn-primary">User data</a>
                    </div>
                </div>
            </div>
            <div class="col gap-3 m-3">
                <div class="card shadow" style="width: 20rem;">
                    <a href="../owner/faq/faq.php" class="p-3">
                        <img src="../images/AddNewFaq.png" class="card-img-top shadow" style="height: 200px;" alt="...">
                    </a>    
                    <div class="card-body">
                        <h5 class="card-title text-primary">Start a Program</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="../owner/faq/faq.php" class="btn btn-primary">Start Program</a>
                    </div>
                </div>
            </div>
            <div class="col gap-3 m-3">
                <div class="card shadow" style="width: 20rem;">
                    <a href="activeFetchdata.php" class="p-3">
                        <img src="../images/faqList.png" class="card-img-top shadow" style="height: 200px;" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary">Active Topic</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="activeFetchdata.php" class="btn btn-primary">Active topic view</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
            google.charts.load('current', {'packages':['bar']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                ['Company Name - Topic', 'Users #', { role: 'style' }],
                <?php 
                    $query = "SELECT * FROM `client_data`";
                    $result = mysqli_query($con, $query);

                    while($row = mysqli_fetch_array($result)) {
                        $companyName = $row['company_name'];
                        $topic = $row['topic'];
                        $visitorCounter = $row['visitor_counter'];
                ?>
                ['<?php echo $companyName; echo " - "; echo $topic;?>', <?php echo $visitorCounter; ?>, 'color: #e5e4e2'],
                <?php
                    }
                ?>
                ]);

                var options = {
                    chart: {
                        title: 'Company Performance',
                        subtitle: 'No. of times User visited the Topic',
                    },
                    bars: 'vertical',
                    chartArea: {
                        // color: 'red'
                    }
                };

                var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                // chart.draw(data, google.charts.Bar.convertOptions(options));
                chart.draw(data, options);
            }
        </script>
    </body>
</html>


