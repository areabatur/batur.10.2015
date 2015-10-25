<script type="text/javascript" src="../thema/jquery.min.js"></script>
<script src="../thema/highcharts.js"></script>
 
<script type="text/javascript">
		//2)script untuk membuat grafik, perhatikan setiap komentar agar paham
$(function () {
    var chart;
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container', //letakan grafik di div id container
				//Type grafik, anda bisa ganti menjadi area,bar,column dan bar
                type: 'line',  
                marginRight: 130,
                marginBottom: 25
            },
            title: {
                text: 'Laporan Pengiriman Mobil Tangki',
                x: -20 //center
            },
            subtitle: {
                text: 'HISWANA MIGAS',
                x: -20
            },
            xAxis: { //X axis menampilkan data bulan 
                categories: ['januari', 'febuari', 'maret','april','mei','juni']
            },
            yAxis: {
                title: {  //label yAxis
                    text: 'Tinggi Volume'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080' //warna dari grafik line
                }]
            },
            tooltip: { 
			//fungsi tooltip, ini opsional, kegunaan dari fungsi ini 
			//akan menampikan data di titik tertentu di grafik saat mouseover
                formatter: function() {
                        return '<b>'+ this.series.name +'</b><br/>'+
                        this.x +': '+ this.y ;
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -10,
                y: 100,
                borderWidth: 0
            },
			//series adalah data yang akan dibuatkan grafiknya,
		
            series: [{  
                name: 'T2 CONTS',  
				
                data: [100, 100,100,100,100,100]
            },
            {  
                name: 'T2 ISI',  
				 
                data: [105,103,105,105,102,100]
            },
            {  
                name: 'TR CONTS',   
				
                data: [110, 110,110,110,110,110]
            },
            {  
                name: 'TR ISI',  
				
                data: [102,102,103,105,109,104]
            }
            
            ]
        });
    });
    
});
		</script>
 
<!--grafik akan ditampilkan disini -->
<div id="container"></div>
