<?php 
    include "../connection.php";
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <?php include "./includes/header.php" ?>
    <style>
        #columnchart_material {
            overflow-y: scroll;
        }
    </style>

    <?php include "./includes/navbar.php" ?>

    <div class='container d-flex justify-content-center'>
        <div class="m-5 shadow p-4" id="columnchart_material" style="width: 75%; height: 500px;"></div>
    </div>

    <div class="container m-5 mx-auto">
        <div class="row">
            <!-- <div class="col gap-3 m-3">
                <div class="card shadow" style="width: 20rem;">
                    <a href="owner_view.php" class="p-3">
                        <img src="../images/UserDetailPage.png" class="card-img-top shadow" style="height: 200px;" alt="...">
                    </a>    
                    <div class="card-body">
                        <h5 class="card-title text-primary">User Detail Page</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="owner_view.php" class="btn btn-primary">User data</a>
                    </div>
                </div>
            </div> -->
            <div class="col gap-3 m-3">
                <div class="card shadow" id='cardWidth'>
                    <a href="./faq/faq.php" class="p-3">
                        <img src="../images/AddNewFaq.png" class="card-img-top shadow" style="height: 200px;" alt="...">
                    </a>    
                    <div class="card-body">
                        <h5 class="card-title text-primary text-center">Start a Program</h5>
                        <p class="card-text">Using this page, you can start making new Program. You will also find the <span class="badge bg-secondary">Instruction</span> button to help you step by step to make a new program.</p>
                        <div class="d-flex justify-content-center">
                            <a href="./faq/faq.php" class="btn btn-primary">Start Program</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col gap-3 m-3">
                <div class="card shadow" id='cardWidth'>
                    <a href="./faq/activeFetchdata.php" class="p-3">
                        <img src="../images/faqList.png" class="card-img-top shadow" style="height: 200px;" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-primary text-center">Active Topic</h5>
                        <p class="card-text">This page have all Active Programs listed. You can <span class="badge bg-primary">Edit</span> any of the program, <span class="badge bg-secondary">Publish</span> the program, and <span class="badge bg-danger">Deactivate</span> any program and then Delete it. </p>
                        <div class="d-flex justify-content-center">
                            <a href="./faq/activeFetchdata.php" class="btn btn-primary">Active topic view</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "./includes/footer.php" ?>
    <script type="text/javascript">
            google.charts.load('current', {'packages':['bar']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                ['Company Name - Topic', 'Users #', { role: 'style' }],
                <?php 
                    $query = "SELECT * FROM `client_data`";
                    $result = mysqli_query($con, $query);

                    $sql = "SELECT `id`, `company_name`, `user_name` FROM `registered_users` WHERE `user_name`='$_SESSION[username]' ";
                    $res = mysqli_query($con, $sql);
                    $row_data = mysqli_fetch_array($res);

                    while($row = mysqli_fetch_array($result)) {
                        if($row_data['company_name'] == $row['company_name']) {
                            $companyName = $row['company_name'];
                            $topic = $row['property_type'];
                            $visitorCounter = $row['visitor_counter'];
                ?>
                ['<?php echo $companyName; echo " - "; echo $topic;?>', <?php echo $visitorCounter; ?>, 'color: #e5e4e2'],
                <?php
                        }
                    }
                ?>
                ]);

                var options = {
                    chart: {
                        title: 'Company Performance',
                        subtitle: 'No. of times User visited the Topic',
                    },
                    bars: 'horizontal',
                    explorer: {
                        axis: 'vertical',
                    },
                    hAxis: {
                        direction:-1,
                        slantedText:true,
                        slantedTextAngle:45, // here you can even use 180
                    },
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


