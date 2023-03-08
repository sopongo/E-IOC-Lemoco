    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        
        <div class="card-header">
          <h5 class="display-10 d-inline-block font-weight-bold"><i class="fas fa-tools"></i> <?PHP echo $title_site_2;?></h5>
          <div class="card-tools">
            <ol class="breadcrumb float-sm-right pt-1 pb-1 m-0">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?PHP echo $breadcrumb_txt; ?></li>
            </ol>
          </div>
        </div>



        <div class="card-body">

        <?PHP 

/*
		172.16.61.38
mqtt.jwdcoldchain.com				  mqtteioc
MIS	HV02	itpcs	Pcs@1234
Ubuntu 2004 with mosquito / pass for mosq (admin:admin1234. , eioc:abcd@cc)			MySql HostName	user  =  eioc	pass  =l;ylfu8iy[
  */            


        ?>

        <h1 class="w-100 text-center d-block"><br/><br/>Under Construction<br/><br/></h1>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          /*['Year', 'Sales', 'Expenses'],
          ['2013',  1000,      400],
          ['2014',  1170,      460],
          ['2015',  660,       1120],
          ['2016',  1030,      540]*/
          ['Date', 'Power Factory'],
          ['01/02/2023 00:00:00',	0.410],
          ['02/02/2023 00:00:00',	0],
          ['03/02/2023 00:00:00',	0.415	],
          ['04/02/2023 00:00:00', 0.420	],
          ['05/02/2023 00:00:00', 0.421	],
          ['06/02/2023 00:00:00', 0.417	],
          ['07/02/2023 00:00:00', 0.418	],
          ['08/02/2023 00:00:00', 0.448	],
          ['09/02/2023 00:00:00', 0.422	],
          ['10/02/2023 00:00:00', 0.420	],
          ['11/02/2023 00:00:00', 0.422	],
          ['12/02/2023 00:00:00', 0.419	],
          ['13/02/2023 00:00:00', 0.418	],
          ['14/02/2023 00:00:00', 0.417	],
          ['15/02/2023 00:00:00', 0.416	],
          ['16/02/2023 00:00:00', 0.419	],
          ['17/02/2023 00:00:00', 0.418	],
          ['18/02/2023 00:00:00', 0.418	],
          ['19/02/2023 00:00:00', 0.412	],
          ['20/02/2023 00:00:00', 0.420	],
          ['21/02/2023 00:00:00', 0.417	],
          ['22/02/2023 00:00:00', 0.414	],
          ['23/02/2023 00:00:00', 0.421	],
          ['24/02/2023 00:00:00', 0.416	],
          ['25/02/2023 00:00:00', 0.422	],
          ['26/02/2023 00:00:00', 0.410	],
          ['27/02/2023 00:00:00', 0.411	],
          ['28/02/2023 00:00:00', 0.419	]
        ]);    

        var options = {
          annotations:{annotationText:'xxxxxxxxxxxxxxxxxxxx'},
          legend: 'none',
          //title: 'ค่า Power Factory จุด 5FLC04Lighting',
          hAxis: {title: 'วัน/เดือน',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0},
          strokeWidth: 1,
          axisTitlesPosition:'out',
          fontName:'Arial',
          fontSize:'11',
          annotations: {alwaysOutside: true},
          curveType: 'function',
          pointSize: 7,
          responsive: true,
          tooltip:{trigger: 'focus' }, //focus  selection
          width:1200,
          height:500,
          /*tooltip: {isHtml: true},*/
          /*backgroundColor:'#000',*/
          animation: {
        "startup": true,
        duration: 500,
        easing: 'linear'
      },
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>


<h6>จำนวนวันในเดือน ก.พ. 2023 มี: <?PHP echo cal_days_in_month(CAL_GREGORIAN, 2, 2023); ?> วัน</h6>
<div class="row">
<div class="col-sm-12 col-md-12 col-xs-12 bg-warning p-1">
  <div class="title">ค่า Power Factory จุด 5FLC04Lighting</div>
<div id="chart_div" style="width:auto; height:auto; overflow:auto;"></div>
</div>
</div>

        </div><!-- /.card-body -->
      </div><!-- /.card -->

    </section>
    <!-- /.content -->
