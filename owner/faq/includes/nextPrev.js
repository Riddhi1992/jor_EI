$(document).ready(function () {
    // alert("Hello World");
    $("#next-1").click(function () { 
        // e.preventDefault();
        $("#second").show();
        $("#first").hide();
        $("#progressbar").css("width", "10%");  
        $("#progressText").html("2");
    });

    $("#next-2").click(function () { 
        // e.preventDefault();
        $("#third").show();
        $("#second").hide();
        $("#progressbar").css("width", "15%");  
        $("#progressText").html("3");
    });
    $("#prev-2").click(function () { 
        // e.preventDefault();
        $("#first").show();
        $("#second").hide();
        $("#progressbar").css("width", "5%");  
        $("#progressText").html("1");
    });

    $("#next-3").click(function () { 
        // e.preventDefault();
        $("#fourth").show();
        $("#third").hide();
        $("#progressbar").css("width", "20%");  
        $("#progressText").html("4");
    });
    $("#prev-3").click(function () { 
        // e.preventDefault();
        $("#second").show();
        $("#third").hide();
        $("#progressbar").css("width", "10%");  
        $("#progressText").html("2");
    });

    $("#next-4").click(function () { 
        // e.preventDefault();
        $("#fifth").show();
        $("#fourth").hide();
        $("#progressbar").css("width", "25%");  
        $("#progressText").html("5");
    });
    $("#prev-4").click(function () { 
        // e.preventDefault();
        $("#third").show();
        $("#fourth").hide();
        $("#progressbar").css("width", "15%");  
        $("#progressText").html("3");
    });

    $("#next-5").click(function () { 
        // e.preventDefault();
        $("#sixth").show();
        $("#fifth").hide();
        $("#progressbar").css("width", "30%");  
        $("#progressText").html("6");
    });
    $("#prev-5").click(function () { 
        // e.preventDefault();
        $("#fourth").show();
        $("#fifth").hide();
        $("#progressbar").css("width", "20%");  
        $("#progressText").html("4");
    });

    $("#next-6").click(function () { 
        // e.preventDefault();
        $("#seven").show();
        $("#sixth").hide();
        $("#progressbar").css("width", "35%");  
        $("#progressText").html("7");
    });
    $("#prev-6").click(function () { 
        // e.preventDefault();
        $("#fifth").show();
        $("#sixth").hide();
        $("#progressbar").css("width", "25%");  
        $("#progressText").html("5");
    });

    $("#next-7").click(function () { 
        // e.preventDefault();
        $("#eight").show();
        $("#seven").hide();
        $("#progressbar").css("width", "40%");  
        $("#progressText").html("8");
    });
    $("#prev-7").click(function () { 
        // e.preventDefault();
        $("#sixth").show();
        $("#seven").hide();
        $("#progressbar").css("width", "30%");  
        $("#progressText").html("6");
    });

    $("#next-8").click(function () { 
        // e.preventDefault();
        $("#nine").show();
        $("#eight").hide();
        $("#progressbar").css("width", "45%");  
        $("#progressText").html("9");
    });
    $("#prev-8").click(function () { 
        // e.preventDefault();
        $("#seven").show();
        $("#eight").hide();
        $("#progressbar").css("width", "35%");  
        $("#progressText").html("7");
    });

    $("#next-9").click(function () { 
        // e.preventDefault();
        $("#ten").show();
        $("#nine").hide();
        $("#progressbar").css("width", "50%");  
        $("#progressText").html("10");
    });
    $("#prev-9").click(function () { 
        // e.preventDefault();
        $("#eight").show();
        $("#nine").hide();
        $("#progressbar").css("width", "40%");  
        $("#progressText").html("8");
    });

    $("#next-10").click(function () { 
        // e.preventDefault();
        $("#eleven").show();
        $("#ten").hide();
        $("#progressbar").css("width", "55%");  
        $("#progressText").html("11");
    });
    $("#prev-10").click(function () { 
        // e.preventDefault();
        $("#nine").show();
        $("#ten").hide();
        $("#progressbar").css("width", "45%");  
        $("#progressText").html("9");
    });

    $("#next-11").click(function () { 
        // e.preventDefault();
        $("#twelve").show();
        $("#eleven").hide();
        $("#progressbar").css("width", "60%");  
        $("#progressText").html("12");
    });
    $("#prev-11").click(function () { 
        // e.preventDefault();
        $("#ten").show();
        $("#eleven").hide();
        $("#progressbar").css("width", "50%");  
        $("#progressText").html("10");
    });

    $("#next-12").click(function () { 
        // e.preventDefault();
        $("#thirteen").show();
        $("#twelve").hide();
        $("#progressbar").css("width", "65%");  
        $("#progressText").html("13");
    });
    $("#prev-12").click(function () { 
        // e.preventDefault();
        $("#eleven").show();
        $("#twelve").hide();
        $("#progressbar").css("width", "55%");  
        $("#progressText").html("11");
    });

    $("#next-13").click(function () { 
        // e.preventDefault();
        $("#fourteen").show();
        $("#thirteen").hide();
        $("#progressbar").css("width", "70%");  
        $("#progressText").html("14");
    });
    $("#prev-13").click(function () { 
        // e.preventDefault();
        $("#twelve").show();
        $("#thirteen").hide();
        $("#progressbar").css("width", "60%");  
        $("#progressText").html("12");
    });

    $("#next-14").click(function () { 
        // e.preventDefault();
        $("#fifteen").show();
        $("#fourteen").hide();
        $("#progressbar").css("width", "75%");  
        $("#progressText").html("15");
    });
    $("#prev-14").click(function () { 
        // e.preventDefault();
        $("#thirteen").show();
        $("#fourteen").hide();
        $("#progressbar").css("width", "65%");  
        $("#progressText").html("13");
    });

    $("#next-15").click(function () { 
        // e.preventDefault();
        $("#sixteen").show();
        $("#fifteen").hide();
        $("#progressbar").css("width", "80%");  
        $("#progressText").html("16");
    });
    $("#prev-15").click(function () { 
        // e.preventDefault();
        $("#fourteen").show();
        $("#fifteen").hide();
        $("#progressbar").css("width", "70%");  
        $("#progressText").html("14");
    });

    $("#next-16").click(function () { 
        // e.preventDefault();
        $("#seventeen").show();
        $("#sixteen").hide();
        $("#progressbar").css("width", "85%");  
        $("#progressText").html("17");
    });
    $("#prev-16").click(function () { 
        // e.preventDefault();
        $("#fifteen").show();
        $("#sixteen").hide();
        $("#progressbar").css("width", "75%");  
        $("#progressText").html("15");
    });

    $("#next-17").click(function () { 
        // e.preventDefault();
        $("#eighteen").show();
        $("#seventeen").hide();
        $("#progressbar").css("width", "90%");  
        $("#progressText").html("18");
    });
    $("#prev-17").click(function () { 
        // e.preventDefault();
        $("#sixteen").show();
        $("#seventeen").hide();
        $("#progressbar").css("width", "80%");  
        $("#progressText").html("16");
    });

    $("#next-18").click(function () { 
        // e.preventDefault();
        $("#nineteen").show();
        $("#eighteen").hide();
        $("#progressbar").css("width", "95%");  
        $("#progressText").html("19");
    });
    $("#prev-18").click(function () { 
        // e.preventDefault();
        $("#seventeen").show();
        $("#eighteen").hide();
        $("#progressbar").css("width", "85%");  
        $("#progressText").html("17");
    });

    $("#next-19").click(function () { 
        // e.preventDefault();
        $("#twenty").show();
        $("#nineteen").hide();
        $("#progressbar").css("width", "100%");  
        $("#progressText").html("20");
    });
    $("#prev-19").click(function () { 
        // e.preventDefault();
        $("#eighteen").show();
        $("#nineteen").hide();
        $("#progressbar").css("width", "90%");  
        $("#progressText").html("18");
    });

    $("#prev-20").click(function () { 
        // e.preventDefault();
        $("#nineteen").show();
        $("#twenty").hide();
        $("#progressbar").css("width", "95%");  
        $("#progressText").html("19");
    });
});