<?PHP
ob_start();
session_start();
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('Asia/Bangkok');	
require_once ('include/function.inc.php');


$action = $_REQUEST['action']; #รับค่า action มาจากหน้าจัดการ

if (!empty($action)) { ##ถ้า $action มีการส่งค่ามาจะดึงไฟล์ class.inc.php (ไฟล์ class+function) มาใช้งาน
    require_once ('include/class_crud.inc.php');
    $obj = new CRUD(); ##สร้างออปเจค $obj เพื่อเรียกใช้งานคลาส,ฟังก์ชั่นต่างๆ
}

/*echo $action; exit();*/

    $sqlGrouprow = $obj->fetchRows("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY','')); ");

    if($action=='chart_type_1' && !empty($_POST)){

        if(isset($_POST['data'])){
            ##"slt_failure_code=3&txt_failure_code=xxxx&txt_caused_by=xxxxxxx&slt_repair_code=6&txt_repair_code=xxxx&txt_solution=xxxxxx
            parse_str($_POST['data'], $output); //$output['period']
            //Array ( [site_location] => 3FLC03Lighting [r3] => on [reservation] => 16/03/2023 - 16/03/2023 )
            print_r($output); //exit();

            $exp_reservation = explode(" - ", $output['reservation']);

            //16/03/2023
            $start_yyyy = substr($exp_reservation[0],6,4); //YYYY
            $start_mm = substr($exp_reservation[0],3,2); //MM
            $start_dd = substr($exp_reservation[0],0,2); //DD

            $end_yyyy = substr($exp_reservation[1],6,4); //YYYY
            $end_mm = substr($exp_reservation[1],3,2); //MM
            $end_dd = substr($exp_reservation[1],0,2); //DD            

            echo $dateStart = $start_yyyy.'-'.$start_mm.'-'.$start_dd;
            echo "-------------";
            echo $dateEnd = $end_yyyy.'-'.$end_mm.'-'.$end_dd;

            $earlier = new DateTime($dateStart);
            $later = new DateTime($dateEnd);
            echo "<hr />";
            echo "จำนวนวันที่เรียกดู: ".$abs_diff = ($later->diff($earlier)->format("%a")+1);
            echo "<hr />";

            function createRange($start, $end, $format = 'Y-m-d') {
                $start  = new DateTime($start);
                $end    = new DateTime($end);
                $invert = $start > $end;
            
                $dates = array();
                $dates[] = $start->format($format);
                while ($start != $end) {
                    $start->modify(($invert ? '-' : '+') . '1 day');
                    $dates[] = $start->format($format);
                }
                return $dates;
            }

            $arrDateDay = createRange($dateStart, $dateEnd);

            print_r($arrDateDay);    

        }

        $rowData= $obj->fetchRows('SELECT MAX(_terminalTime) AS terminalTimes, LEFT(_terminalTime,10) AS chk_Date, _groupName, PowerFactor, Watt_Sum, Today_KWH, Yesterday_KWH, ThisMonth_KWH, LastMonth_KWH, KWH_Sum FROM mqtteioc.data_eioc 
        WHERE _groupName="'.$output['site_location'].'" AND (DATE_FORMAT(_terminalTime, "%Y-%m-%d")>="'.$dateStart.'" AND DATE_FORMAT(_terminalTime, "%Y-%m-%d")<="'.$dateEnd.'") 
        GROUP BY LEFT(mqtteioc.data_eioc._terminalTime,10) ORDER BY mqtteioc.data_eioc._terminalTime ASC;');
        //echo count($rowData);
        $arrPowerFactor = "";
        $arrRowDay = array();
        echo "<hr />จำนวนวันที่มีในฐานข้อมูล: ".count($rowData)."<hr />";
            if (count($rowData)>0){
                foreach($rowData as $key => $value){
                    $yyyy = substr($rowData[$key]['terminalTimes'],0,4); //YYYY
                    $mm = substr($rowData[$key]['terminalTimes'],5,2); //MM
                    $dd = substr($rowData[$key]['terminalTimes'],8,2); //DD
                    $hhmmss = substr($rowData[$key]['terminalTimes'],10,9); //HH:mm:ss                
                    $newDatetime = $dd.'/'.$mm.'/'.$yyyy.' '.$hhmmss;
                    //$arrPowerFactor.="['".$newDatetime."',	".($rowData[$key]['PowerFactor']!='' ? $rowData[$key]['PowerFactor'] : '0.000')."],\r\n";
                    array_push($arrRowDay, $rowData[$key]['chk_Date']);
                    $data = array('chkdate' => $rowData[$key]['chk_Date'], 'datetime' => $newDatetime, 'value' => $rowData[$key]['PowerFactor']);
                    $arrDateRow[] = $data;
                    //array_search($rowData[$key]['chk_Date'], $arrDateDay);
                }
            }

            echo '<pre>';
            //print_r($arrDateRow);
            echo '</pre>';

            foreach($arrDateDay as $key => $value){
                //echo $value."<br />";
                echo $value;
                if(array_search($value, array_column($arrDateRow, 'chkdate'))!=NULL){
                    echo "มี".$arrDateRow[$key]['datetime']."<br />";
                    //$arrPowerFactor.="['".$value."', '".$arrDateRow[$key]['value']."' ],\r\n";
                }else{
                    echo "ไม่มี".$arrDateDay[$key]."<br />";
                    //$arrPowerFactor.="['".$value."', '0.000' ],\r\n";
                }
                echo "<hr>";

            }
            //print_r($arrRowDay);            echo "<hr />";
            //$result = array_diff($arrDateDay, $arrRowDay);
            //print_r($result);            echo "<hr />";
            //echo $arrPowerFactor;
?>
<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Date', 'Power Factor'],
          <?PHP echo $arrPowerFactor; ?>
        ]);    

        var options = {
          annotations:{annotationText:'xxxxxxxxxxxxxxxxxxxx'},
          legend: 'none',
          //title: 'ค่า Power Factor จุด 5FLC04Lighting',
          hAxis: {title: 'วัน/เวลา ของข้อมูล',  titleTextStyle: {color: '#333'}},
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
          width:'100%',
          height:500,
          /*tooltip: {isHtml: true},*/
          /*backgroundColor:'#000',*/
          animation: {
        "startup": true,
        duration: 500,
        easing: 'linear',
      },
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        //data.sort({ column: 0, desc:true,     });    /*asc/desc: true,*/ //เรียงลำดับข้อมูล 
        chart.draw(data, options);
      }
    </script>
      <h1 class="title">ค่า Power Factor จุด: <?PHP echo $output['site_location']; ?> ช่วงวันที่: <?PHP echo $exp_reservation[0];?> ถึง <?PHP echo $exp_reservation[1];?></h1>
<?PHP
        exit();
    }
?>