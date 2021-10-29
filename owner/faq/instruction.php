<?php 
    include "../../connection.php"; 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <?php include "./includes/header.php" ?>
</head>
<body>
    <?php include "./includes/navbar.php" ?>
    <div class="mt-5"></div>
    <div class="container mb-3">
        <h3 class="text-center">Instructions to start a new FAQ set</h3>
        <div class="d-flex justify-content-center">
            <div class="accordion mt-5 w-75" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            <span class="text-uppercase">Step #1</span>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                            <strong>Start making the Videos.</strong> 
                            <strong>(Make sure all Videos are in mp4 format [if not, there are online free websites which can convert your Videos from any format to mp4 format]).</strong>
                            <ul>
                                <li>You can use your Phone/Tablet/iPad to record Videos</li>
                                    <ul>
                                        <li>If you are using any of the above gadgets to record - Simply open your Camera and start Video recording.</li>
                                        <li>Once it is done, you can transfer your recording to your Laptop/Desktop through E-mail or USB.</li>
                                        <ul>
                                            <li>Make sure that if you are using an email, add the respected question in subject line of E-mail. Just to make sure you are uploading right Video with right Question.</li>
                                            <li>If you are using USB to transfer your recordings, make sure to put some keyword with the filename, so that you can upload appropriate Video with respected Question.</li>
                                        </ul>
                                    </ul>
                                <li>You can use your Laptop/Desktop with Camera to record Videos.</li>
                                    <ul>
                                        <li>Mac USER</li>
                                            <ul>
                                                <li>Open "Photo Booth or QuickTime Player" application (default application for Mac to record Videos), and start recording.</li>
                                            </ul>
                                        <li>Windows USER</li>
                                            <ul>
                                                <li>Open "Camera" application (default application for Windows to record Videos), and start recording.</li>
                                            </ul>
                                    </ul>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            <span class="text-uppercase">Step #2</span>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body">
                            <strong>Start a F&Q</strong>
                            <ul>
                                <li>Once you have all required Videos, you can go to <a class="" href="./faq.php" target="blank">Start a F&Q</a>. </li>
                                <li>Here, you will be adding few general information about the Property like Address, Type of Property, Subscription start & End date, Notes, An option to select between Purchase/Lease.</li>
                                <li>Click on "Save & Add Next" button, this will lead to add first question and respected Video and so on till 20 questions...</li>
                                <li>You may only want to add 10 questions as of now, you can do that as well. In this specific example, once you click on "Save & Add Next", it will redirect to add 11th question. Where you can click on "Save & Finish".</li>
                                <li>Once you click on "Save & Finish" button, you will be redirected to the web page where you can see all the Properties that you have added recently or previously.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            <span class="text-uppercase">Step #3</span>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body">
                            <strong>Active Programs</strong>
                            <ul>
                                <li>There are few buttons with different feature listed below:</li>
                                    <ul>
                                        <li><strong>Edit:</strong> This will redirect you to the page where you can find all the Questions and respected Videos which were already added.</li>
                                            <ul>
                                                <li>There are few Action buttons at very last column</li>
                                                <li><a class="btn btn-success mb-1"><i class='fa fa-pencil' aria-hidden='true'></i></a> - is to Edit the existing Questions and Videos.</li>
                                                <li><a class="btn btn-primary mb-1"><i class='fa fa-plus'></i></a> - is to Add a new Question and Videos</li>
                                                <li><a class="btn btn-danger mb-1"><i class='far fa-trash-alt'></i></a> - is to delete the record</li>
                                            </ul>
                                        <li><strong>Play:</strong> This will redirect you to the page where you can engage in interactive conversations with people. Ask a question by typing, using your microphone, or clicking on any questions on the FAQ menu, and the video will talk back and answer your question.</li>
                                            <ul>
                                            </ul>
                                        <li><strong>Deactivate:</strong> This will deactivate your program and once it is deactivated, you will be redirected to the page where you can find all current or previously deactivated programs. Also, user can not be able to see there programs once you deactivate.</li>
                                            <ul>
                                            </ul>
                                        <li><strong>Publish:</strong> This will help you to publish your program to the users and it will also send you an email with the link to access this specific Program.</li>
                                            <ul>
                                            </ul>
                                    </ul>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            <span class="text-uppercase">Step #4</span>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                        <div class="accordion-body">
                            <strong>Archived Program</strong>
                            <ul>
                                <li>On this page, everything looks similar to Active Program Page, except few buttons:</li>
                                <ul>
                                    <li><strong>Edit:</strong> This will redirect you to the page where you can find all the Questions and respected Videos which were already added.</li>
                                        <ul>
                                            <li>There are few Action buttons at very last column</li>
                                            <li><a class="btn btn-success mb-1"><i class='fa fa-pencil' aria-hidden='true'></i></a> - is to Edit the existing Questions and Videos.</li>
                                            <li><a class="btn btn-primary mb-1"><i class='fa fa-plus'></i></a> - is to Add a new Question and Videos</li>
                                            <li><a class="btn btn-danger mb-1"><i class='far fa-trash-alt'></i></a> - is to delete the record</li>
                                        </ul>
                                    <li><strong>Play:</strong> This will redirect you to the page where you can engage in interactive conversations with people. Ask a question by typing, using your microphone, or clicking on any questions on the FAQ menu, and the video will talk back and answer your question.</li>
                                        <ul></ul>
                                    <li><strong>Active:</strong> This will activate your program and redirect you to the "Active Program" Page.</li>
                                        <ul></ul>
                                    <li><strong>Delete:</strong> This will completely delete this specific program.</li>
                                        <ul></ul>
                                </ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "./includes/footer.php" ?>
</body>
</html>
