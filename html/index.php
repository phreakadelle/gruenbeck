<?php ?>
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<HTML>
<HEAD>
<link rel='icon' type='image/x-icon' href='/favicon.ico' />
<link rel='shortcut icon' href='/favicon.ico' />
<script src="https://code.jquery.com/jquery-1.11.3.js"></script>
<script src="https://code.highcharts.com/stock/highstock.js"></script>
<script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
<title>Wasserenthärter-Portal</title>
</HEAD>
<BODY>
<div id="container1" style="height: 400px; min-width: 310px"></div>
<div id="container2" style="height: 400px; min-width: 310px"></div>
<div id="container3" style="height: 400px; min-width: 310px"></div>
<script type="text/javascript">
function sleep (time) {
  return new Promise((resolve) => setTimeout(resolve, time));
}

function fixtime (series) {
    for (var i = 0; i < series.length; i++) {
        series[i][0]*=1000;
    } 
}

Highcharts.setOptions({
                global : {
                    useUTC : false
                }
});
            
$(function () {
    var seriesOptions1 = [];
    var seriesOptions2 = [];
    function createChart1() {
    // Create the chart
        $('#container1').highcharts('StockChart', {
            rangeSelector : {
                allButtonsEnabled: true,
                buttons: [{
                    type: 'hour',
                    count: 3,
                    text: '3h',
                }, {
                    type: 'hour',
                    count: 12,
                    text: '12h',
                }, {
                    type: 'day',
                    count: 1,
                    text: 'Day',
                }, {
                    type: 'day',
                    count: 2,
                    text: '2 Days',
                }, {
                    type: 'day',
                    count: 3,
                    text: '3 Days',
                }, {
                    type: 'all',
                    text: 'Month',
                }, {
                    type: 'all',
                    text: 'All',
                }],
                buttonTheme: {
                    width: 60
                },
                selected : 1
            },

            title : {
                text : 'Wasserenthärter'
            },

            series : seriesOptions1
        });
    }
    $.getJSON('<?php echo $WEB_ROOT; ?>gruenbeck.ui-backend.php?item=current_flow', function (data) {
        fixtime(data);
        seriesOptions1[0] = {
                name: "Durchfluss",
                data: data,
                tooltip: {
                    valueDecimals: 2,
                    valueSuffix: 'm³/h'
                },
                color: '#00aF30'
            };    
    $.getJSON('<?php echo $WEB_ROOT; ?>gruenbeck.ui-backend.php?item=capacity_remain', function (data) {
        fixtime(data);
        seriesOptions1[1] = {
                name: "Kapazität",
                data: data,
                tooltip: {
                    valueDecimals: 2,
                    valueSuffix: 'm³'
                },
                color: '#FF0000'
            };
        createChart1();
        });

        });
    function createChart2() {
    // Create the chart
        $('#container2').highcharts('StockChart', {
            rangeSelector : {
                allButtonsEnabled: true,
                buttons: [{
                    type: 'hour',
                    count: 3,
                    text: '3h',
                }, {
                    type: 'hour',
                    count: 12,
                    text: '12h',
                }, {
                    type: 'day',
                    count: 1,
                    text: 'Day',
                }, {
                    type: 'day',
                    count: 2,
                    text: '2 Days',
                }, {
                    type: 'day',
                    count: 3,
                    text: '3 Days',
                }, {
                    type: 'all',
                    text: 'Month',
                }, {
                    type: 'all',
                    text: 'All',
                }],
                buttonTheme: {
                    width: 60
                },
                selected : 6
            },

            title : {
                text : 'Wasserverbrauch'
            },

            series : seriesOptions2
        });
    }
    $.getJSON('<?php echo $WEB_ROOT; ?>gruenbeck.ui-backend.php?item=water_consumption', function (data) {
        fixtime(data);
        seriesOptions2[0] = {
                name: "Verbrauch",
                data: data,
                tooltip: {
                    valueDecimals: 2,
                    valueSuffix: 'l'
                },
                color: '#FF0000'
            };
        createChart2();
        });

});
</script>
</BODY>
</HTML>
