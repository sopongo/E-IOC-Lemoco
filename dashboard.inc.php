<style type="text/css">
.font11{ font-size:0.90rem}

.bg-offline{ background-color:#FFE5E5; }

img.img_status{ width:30px; height:auto;}
</style>

  <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">



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
        <!--FORM 1-->
        <form id="needs-validation" class="addform " name="addform" method="POST" enctype="multipart/form-data" autocomplete="off" novalidate="">
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
            <label for="exampleSelectRounded0">เลือกจุดที่ต้องการดูข้อมูล:</label>
            <select class="custom-select rounded-3" id="site_location" name="site_location">
            <?PHP
              foreach($location_arr as $key => $value) {
                //echo $key . " : " . $value['_groupName'].'='.$value['detailName'] . "<br>";
                echo '<option value="'.$value['_groupName'].'">- '.$value['detailName'].'</option>';
              }
            ?>
            </select>
            </div>
          </div><!--col-md-6-->

          <div class="col-sm-3">
            <label for="exampleSelectRounded0">รูปแบบการแสดงผล:</label>
                    <!-- radio -->
                    <div class="form-group clearfix">
                      <div class="icheck-success d-inline">
                        <input type="radio" name="r3" id="radioSuccess1">
                        <label for="radioSuccess1" class="text-danger">รายเดือน</label>
                      </div>
                      <div class="icheck-success d-inline ml-3">
                        <input type="radio" name="r3" id="radioSuccess2" checked="" >
                        <label for="radioSuccess2">ช่วงวันที่</label>
                      </div>
                    </div>
                  </div>
          </div><!--row-->


          <div class="row">
          <div class="col-md-3">
            <div class="form-group">
            <label for="exampleSelectRounded0">เดือนที่แสดงผล:</label>
            <select class="custom-select rounded-3" id="site_location" name="site_location" disabled>
            <?PHP
              foreach($arr_mouthTH as $key => $value) {
                //echo $key . " : " . $value['_groupName'].'='.$value['detailName'] . "<br>";
                if($key!=0){
                  echo '<option value="'.$key.'">'.$value.'</option>';
                }
              }
            ?>
            </select>
            </div>
          </div><!--col-md-6-->
          <div class="col-md-3">          
          <div class="form-group">
            <label>ช่วงวันที่:</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="far fa-calendar-alt"></i>
                </span>
              </div>
              <input type="text" class="form-control float-right" id="reservation" name="reservation">
            </div>
            <!-- /.input group -->
          </div>          
          </div><!--col-md-6-->          
          </div><!--row-->
          </form>

          <div class="row">

          </div><!--row-->

            <?PHP
      //print_r($location_arr);      echo "<hr />";
      /*echo $location_arr[1]['_groupName'];
      echo "<hr />";
      echo $location_arr[1]['detailName'];
      echo "<hr />xxxxxxxxxxxxxxxxxxxxxxxxxxxx<br>";*/
      //$keys = array_keys($location_arr);
      /*
      foreach($location_arr as $key => $value) {
        echo $key . " : " . $value['_groupName'].'='.$value['detailName'] . "<br>";
      } 
      */     
    //echo "<hr />";

/*$keys = array_keys($location_arr);
for($i = 0; $i < count($location_arr); $i++) {
    echo $keys[$i] . "{<br>";
    foreach($location_arr[$keys[$i]] as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }
    echo "}<br>";
  }*/
            ?>


        <?PHP 

        /*
$rowLocation= $obj->fetchRows("SELECT _groupName FROM mqtteioc.data_eioc GROUP BY _groupName ORDER BY _groupName ASC;");
echo count($rowLocation);
if (count($rowLocation)>0) {
  foreach($rowLocation as $key => $value) {
    echo $rowLocation[$key]['_groupName']."<br />";
  }
}        */

$sqlGrouprow = $obj->fetchRows("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY','')); ");

/*
$rowData= $obj->fetchRows('SELECT MAX(mqtteioc.data_eioc._terminalTime) AS terminalTimes, mqtteioc.data_eioc._groupName, mqtteioc.data_eioc.PowerFactor, mqtteioc.data_eioc.Watt_Sum, mqtteioc.data_eioc.Today_KWH, mqtteioc.data_eioc.Yesterday_KWH, mqtteioc.data_eioc.ThisMonth_KWH, mqtteioc.data_eioc.LastMonth_KWH, mqtteioc.data_eioc.KWH_Sum 
FROM mqtteioc.data_eioc WHERE mqtteioc.data_eioc._groupName="3FLC03Lighting" AND (DATE_FORMAT(_terminalTime, "%Y-%m-%d")>="2023-03-01" AND DATE_FORMAT(_terminalTime, "%Y-%m-%d")<="2023-03-15" ) 
GROUP BY date(mqtteioc.data_eioc._terminalTime)
ORDER BY mqtteioc.data_eioc._terminalTime DESC;');
//echo count($rowData);
echo "________________________________________________________________________________________________<br />";
if (count($rowData)>0) {
  foreach($rowData as $key => $value) {
    echo $rowData[$key]['terminalTimes']."-----------".$rowData[$key]['PowerFactor'].'------------------'.$rowData[$key]['Today_KWH'];
    echo "<br />________________________________________________________________________________________________<br />";
  }
}        

echo "<hr>";

$rowData= $obj->fetchRows('SELECT MAX(_terminalTime) AS terminalTimes, _groupName, PowerFactor, Watt_Sum, Today_KWH, 
Yesterday_KWH, ThisMonth_KWH, LastMonth_KWH, KWH_Sum FROM mqtteioc.data_eioc WHERE  DATE_FORMAT(_terminalTime, "%Y-%m-%d")="2023-03-14"
GROUP BY mqtteioc.data_eioc._groupName ORDER BY mqtteioc.data_eioc._groupName ASC;');
//echo count($rowData);
echo "________________________________________________________________________________________________<br />";
if (count($rowData)>0) {
  foreach($rowData as $key => $value) {
    echo $rowData[$key]['terminalTimes']."-----------".$rowData[$key]['_groupName']."-----------".$rowData[$key]['PowerFactor'].'------------------'.$rowData[$key]['Today_KWH'];
    echo "<br />________________________________________________________________________________________________<br />";
  }
}        

echo "<hr>";
*/

/*
$rowData= $obj->fetchRows('SELECT MAX(_terminalTime) AS terminalTimes, _groupName, PowerFactor, Watt_Sum, Today_KWH, Yesterday_KWH, ThisMonth_KWH, LastMonth_KWH, KWH_Sum FROM mqtteioc.data_eioc 
WHERE _groupName="3FLC03Heater" AND (DATE_FORMAT(_terminalTime, "%Y-%m-%d")>="2023-02-01" AND DATE_FORMAT(_terminalTime, "%Y-%m-%d")<="2023-02-31") 
GROUP BY LEFT(mqtteioc.data_eioc._terminalTime,10) ORDER BY mqtteioc.data_eioc._terminalTime ASC;');
//echo count($rowData);
$arrPowerFactor = "";
if (count($rowData)>0) {
  foreach($rowData as $key => $value) {
    //echo $rowData[$key]['terminalTimes']."-----------".$rowData[$key]['PowerFactor']."-----------".$rowData[$key]['Watt_Sum'].'------------------'.$rowData[$key]['Today_KWH'];
    //echo "['".$rowData[$key]['terminalTimes']."',	".$rowData[$key]['PowerFactor']."],";
    
    $yyyy = substr($rowData[$key]['terminalTimes'],0,4); //YYYY
    $mm = substr($rowData[$key]['terminalTimes'],5,2); //MM
    $dd = substr($rowData[$key]['terminalTimes'],8,2); //DD
    $hhmmss = substr($rowData[$key]['terminalTimes'],10,9); //HH:mm:ss

    $newDatetime = $dd.'/'.$mm.'/'.$yyyy.' '.$hhmmss;
    //echo "<br>";
    $arrPowerFactor.="['".$newDatetime."',	".($rowData[$key]['PowerFactor']!='' ? $rowData[$key]['PowerFactor'] : '0.000')."],\r\n";
  }
} 
*/       
//['01/02/2023 00:00:00',	0.410],
//echo $arrPowerFactor;
/*
		172.16.61.38
mqtt.jwdcoldchain.com				  mqtteioc
MIS	HV02	itpcs	Pcs@1234
Ubuntu 2004 with mosquito / pass for mosq (admin:admin1234. , eioc:abcd@cc)			MySql HostName	user  =  eioc	pass  =l;ylfu8iy[
  */            


/*##หาว่ามีค่าไหนใน อาร์เรย์ที่ไม่ตรงกัน##
  $array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "yellow", "red");
$result = array_diff($array1, $array2);
print_r($result);
*/

        ?>
<?PHP //echo $arrPowerFactor;?>

<a href="#" class="btn btn-danger btn-block btn-showchart w-auto d-inline-block"><b>เทสดึงกราฟด้วย AJAX</b></a>
<br /><br />
<div id="viewdata"></div>
<div class="row">
<div class="col-sm-12 col-md-12 col-xs-12 bg-warning p-1">
<div class="loading d-none overlay w-25 m-auto"><i class="fas fa fa-sync-alt fa-spin"></i><div class="align-text-top ml-2 text-bold pt-2">Loading...</div></div>  
<div id="chart_div" style="width:auto; height:auto; overflow:auto;"></div>
</div>
<div class="card-title"><span class="font11 text-danger">**กรณีค่าเป็น 0.000 อาจเกิดจากสัญญาณอินเตอร์เน็ตมีปัญหา หรือ ไฟฟ้าดับทำให้ไม่สามารถบันทึกข้อมูลได้</span></div>
</div>

<!-- InputMask -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- date-range-picker -->
<script src="plugins/daterangepicker/daterangepicker.js"></script>

<script type="text/javascript">

$(document).on("click", ".btn-showchart", function (event){ 
  var frmData = $("form#needs-validation").serialize();
  $.ajax({
      url: "ajax_data.inc.php",
      type: "POST",
      data:{ "data":frmData, "action":"chart_type_1" },
      beforeSend: function () {
        $(".loading").removeClass('d-none').fadeIn(1000).delay(3000);
        $("#viewdata").html('');
      },success: function (data) {
          $(".loading").fadeOut(1000).hide();
          console.log(data); //return false;
          $("#viewdata").html(data);
          event.stopPropagation();
      },error: function (data) {
          console.log(data);
          sweetAlert("ผิดพลาด!", "ไม่สามารถแสดงผลข้อมูลได้", "error");
      }
    });
});

//Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker({
      locale: {
        format: 'DD/MM/YYYY',
        language: "th",
      }
    });

    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    </script>


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    
<!-- <h6>จำนวนวันในเดือน ก.พ. 2023 มี: <?PHP echo cal_days_in_month(CAL_GREGORIAN, 2, 2023); ?> วัน</h6>-->
        </div><!-- /.card-body -->
      </div><!-- /.card -->

      <?PHP 
        /*
          foreach($location_arr as $key => $value) {
            $lastTime= $obj->customSelect("SELECT _terminalTime, _groupName FROM mqtteioc.data_eioc 
            WHERE _groupName='".$value['_groupName']."' ORDER BY mqtteioc.data_eioc.id DESC LIMIT 1;");
            echo $value['_groupName'].' ----------> '.$lastTime['_terminalTime'];
            echo "<hr />";
          }
          exit();
          */
      ?>


      <div class="card">
      <div class="card-body">
      <div class="card-title w-100"><p class="text-pamary">เช็คสถานะออนไลน์</p></div>
      <table class="table w-75 d-block">
        <thead>
          <tr>
            <th>ลำดับที่</th>
            <th>ชื่อตู้เบรคเกอร์</th>
            <th>จุดตรวจวัด</th>
            <th>ตำแหน่งติดตั้ง</th>
            <th>การเชื่อมต่อ</th>
            <th>สถานะ</th>
            <th>ออนไลน์ล่าสุด</th>            
          </tr>
        </thead>
        <tbody>
      <?PHP
              //"2023-04-20" 
              $sqlGrouprow = $obj->fetchRows("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY','')); ");
              $rowData= $obj->fetchRows('SELECT MAX(_terminalTime), _groupName, PowerFactor, Today_KWH FROM mqtteioc.data_eioc 
              WHERE DATE_FORMAT(_terminalTime, "%Y-%m-%d")="'.(date('Y-m-d')).'" GROUP BY mqtteioc.data_eioc._groupName ORDER BY mqtteioc.data_eioc._groupName ASC;');      

              /*echo '<pre>';
              print_r($rowData);
              echo '</pre>';*/

              $no = 1;
              //echo array_search($rowData[$key]['id_user'], '3FLC03Lighting');
              //array_search('5FLC04Heater', array_column($rowData, '_groupName'));
              //<td>'.(is_numeric($status_onoff) ? $status_onoff.'---ออนไลน์' : '' ).'</td>
              foreach($location_arr as $key => $value) {
                $status_onoff = array_search($value['_groupName'], array_column($rowData, '_groupName'));

                if(!is_numeric($status_onoff)){
                  $lastTime= $obj->customSelect("SELECT _terminalTime, _groupName FROM mqtteioc.data_eioc 
                  WHERE _groupName='".$value['_groupName']."' ORDER BY mqtteioc.data_eioc.id DESC LIMIT 1;");
                  //$lastTime['lastime'] = '';
                }
                echo '<tr '.(is_numeric($status_onoff) ? '' : 'class="bg-offline"').'>
                <td>'.$no.'.</td>
                <td>'.$value['breakerName'].'</td>
                <td>'.$value['detailName'].'</td>
                <td>'.$value['location'].'</td>
                <td>'.$value['connectType'].'</td>
                <td>'.(is_numeric($status_onoff) ? '<img src="dist/img/online-xxl.png" class="img_status" />' : '<img src="dist/img/offline-xxl.png" class="img_status" />' ).'</td>
                <td>'.(is_numeric($status_onoff) ? $rowData[$status_onoff]['MAX(_terminalTime)'] : $lastTime['_terminalTime'] ).'</td>
                </tr>';
                //unset($status_onoff);
                $no++;
                //echo $key . " : " . $value['_groupName'].'='.$value['detailName'] . "<br>";
                //echo '<option value="'.$value['_groupName'].'">- '.$value['detailName'].'</option>';
              }
      ?>
        </tbody>
      </table>
      </div><!-- /.card-body -->
      </div><!-- /.card -->

    </section>
    <!-- /.content -->
    
