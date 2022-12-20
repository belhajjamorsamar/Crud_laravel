/*
Template Name: Admin Mintone
Author: SRGIT
File: js
*/
$(function () {
    "use strict";



	
	
	 
    // ============================================================== 
    // Our Income
    // ==============================================================
  
	// ============================================================== 
    // This is for the popup message while page load
    // ============================================================== 
        $.toast({
            heading: 'Welcome to Admin Mintone',
            text: 'Most powerfull and elegant design with tons of elements.',
            position: 'bottom-right',
            loaderBg: '#0a2d73',
            icon: 'info',
            hideAfter: 6000,
            stack: 6
        })
		
     $('[data-plugin="knob"]').knob();
	
});
$(document).ready(function() {
   var sparklineLogin = function() { 
    $("#sparkline11").sparkline([ ], {
        
        });
		
 
     }
	var sparkResize;
	    $(window).resize(function(e) {
            clearTimeout(sparkResize);
            sparkResize = setTimeout(sparklineLogin, 500);
        });
        sparklineLogin();
		
	var ctx3 = document.getElementById("chart3").getContext("2d");
    var data3 = [
        {
            value: 110,
            color:"#f95476",
            highlight: "#f95476",
            label: "Shoes"
        },
        {
            value: 70,
            color: "#48daff",
            highlight: "#48daff",
            label: "Lingerie"
        },
		 {
            value: 60,
            color: "#ffb74e",
            highlight: "#ffb74e",
            label: "Denim"
        },
		 {
            value: 90,
            color: "#b554f9",
            highlight: "#b554f9",
            label: "Suits"
        }
    ];
    
    var myPieChart = new Chart(ctx3).Pie(data3,{
        segmentShowStroke : true,
        segmentStrokeColor : "#fff",
        segmentStrokeWidth : 0,
        animationSteps : 100,
		tooltipCornerRadius: 0,
        animationEasing : "easeOutBounce",
        animateRotate : true,
        animateScale : false,
        legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>",
        responsive: true
    });
});