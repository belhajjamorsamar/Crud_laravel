/*
Template Name: Admin Mintone
Author: SRGIT
File: js
*/


// ============================================================== 
// This is for the chart
// ============================================================== 
$(function () {
    "use strict";


    Morris.Area({
        element: 'morris-area-chart3',
        data: [{
            period: '2010',
            SiteA: 0,

        }, {
            period: '2011',
            SiteA: 130,

        }, {
            period: '2012',
            SiteA: 80,

        }, {
            period: '2013',
            SiteA: 70,

        }, {
            period: '2014',
            SiteA: 180,

        }, {
            period: '2015',
            SiteA: 105,

        },
            {
                period: '2016',
                SiteA: 250,

            }],
        xkey: 'period',
        ykeys: ['SiteA'],
        labels: ['Site A'],
        pointSize: 2,
        fillOpacity: 1,
        pointStrokeColors: ['#f95476'],
        behaveLikeLine: true,
        gridLineColor: '#e0e0e0',
        lineWidth: 1,
        smooth: false,
        hideHover: 'auto',
        lineColors: ['#fb5a14'],
        resize: true

    });

    Morris.Area({
        element: 'extra-area-chart-2',
        data: [{
            period: '2012',
            iphone: 20,
            ipad: 30,
            itouch: 50
        }, {
            period: '2013',
            iphone: 50,
            ipad: 30,
            itouch: 1
        }, {
            period: '2014',
            iphone: 20,
            ipad: 50,
            itouch: 95
        }, {
            period: '2015',
            iphone: 160,
            ipad: 70,
            itouch: 7
        }, {
            period: '2016',
            iphone: 30,
            ipad: 20,
            itouch: 150
        }, {
            period: '2017',
            iphone: 25,
            ipad: 80,
            itouch: 40
        }, {
            period: '2018',
            iphone: 10,
            ipad: 10,
            itouch: 10
        }
        ],
        lineColors: ['#ff3c64', '#ff7c00', '#2f69f8'],
        xkey: 'period',
        ykeys: ['iphone', 'ipad', 'itouch'],
        labels: ['Sessions', 'New Visitors', 'Avg. Session Duration'],
        pointSize: 0,
        lineWidth: 0,
        resize: true,
        fillOpacity: 1,
        behaveLikeLine: true,
        gridLineColor: '#e0e0e0',
        hideHover: 'auto'
    });


});

$('[data-plugin="knob"]').knob();

jQuery('#world-map-markers').vectorMap(
    {
        map: 'world_mill_en',
        backgroundColor: 'transparent',
        borderColor: '#818181',
        borderOpacity: 0.25,
        borderWidth: 1,
        zoomOnScroll: false,
        color: '#d7e6ff',
        regionStyle: {
            initial: {
                fill: '#d7e6ff'
            }
        },
        markerStyle: {
            initial: {
                r: 5,
                'fill': '#4886ff',
                'fill-opacity': 1,
                'stroke': '#000',
                'stroke-width': 2,
                'stroke-opacity': 0
            },
        },
        enableZoom: true,
        hoverColor: '#d7e6ff',
        markers: [{
            latLng: [37.0902, 95.7129],
            name: 'USA',
        }


        ],

        hoverOpacity: null,
        normalizeFunction: 'linear',
        scaleColors: ['#b6d6ff', '#005ace'],
        selectedColor: '#c9dfaf',
        selectedRegions: [],
        showTooltip: true,
        onRegionClick: function (element, code, region) {
            var message = 'You clicked "'
                + region
                + '" which has the code: '
                + code.toUpperCase();

            alert(message);
        }
    });
 

        
  