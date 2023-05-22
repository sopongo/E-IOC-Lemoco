<?php

$title_site = "E-IOC | Dashboard";

$title_site_1 = "E-IOC Dashboard | PCS ";
$title_site_2 = "E-IOC | Dashboard";
$title_site_3 = "E-IOC";

$req_digit = "-RQ-"; //ตัวย่อหน้าเลขที่ใบเบิก

$keygen = 'Pcs@'; //sha1+password

$btn_perPage = 10;#จำนวนปุ่มแสดงเลขหน้า
$limit_perPage = 10; #จำนวนข้อมูลที่แสดงต่อ 1 หน้า *ทั้งโปรแกรม

$imagesize = 5100;
$pathImg = "uploads/";
$pathImgDefault = "uploads/default.png";

$path_machine= "uploads-asset/";
$path_machine_Default = "uploads-asset/default.png";

$pathUser= "uploads-user/";
$pathUserDefault = "uploads-user/default.png";

/*
* @return array $branchArr
* รายชื่อส่วนงาน
*/
$branchArr = array( 
    array(0,'',''),
    array(1,'PCS','Pacific Cold Chain'),
    array(2,'JPAC','ยังไม่ระบุชื่อจุดxxxxxxx'),
    array(3,'JPK','ยังไม่ระบุชื่อจุดxxxxxxx'),
    array(4,'PACM','ยังไม่ระบุชื่อจุดxxxxxxx'),
    array(5,'PACS','ยังไม่ระบุชื่อจุดxxxxxxx'),
    array(6,'PACT','ยังไม่ระบุชื่อจุดxxxxxxx'),
    array(7,'PACA','ยังไม่ระบุชื่อจุดxxxxxxx'),
);

$deptArr = array( 
    array(0,'',''),
    array(1,'MA','Management'),
    array(2,'PLP','Pacific Logistics Pro'),
    array(3,'WH','Warehouse'),
    array(4,'QA','ยังไม่ระบุชื่อจุดxxxxxxx'),
    array(5,'Safety','ยังไม่ระบุชื่อจุดxxxxxxx'),
    array(6,'CS','Customer Service'),
    array(7,'AC','Account'),
    array(8,'EN','ยังไม่ระบุชื่อจุดxxxxxxx'),
    array(9,'HR','ยังไม่ระบุชื่อจุดxxxxxxx'),
    array(10,'IT/MIS','ยังไม่ระบุชื่อจุดxxxxxxx'),
    array(11,'INV','Inventory'),
    array(12,'MT','ยังไม่ระบุชื่อจุดxxxxxxx'),    
    array(13,'MK','ยังไม่ระบุชื่อจุดxxxxxxx'),
    array(14,'PC','ยังไม่ระบุชื่อจุดxxxxxxx')
);

/*
"0"=> "ไม่พบข้อมูล", 
"1" => "User",
"2" => "Manager"
"3" => "Super User"
"4" => "Administrator"
*/
//$classUserArr = array("0"=> "ไม่พบข้อมูล", "1"=>"ผู้ใช้ระบบ", "2"=>"ผู้อนุมัติ", "3"=>"ผู้จัดการระบบ", "4"=>"ผู้ดูแลระบบ");

$statusUserArr = array("0"=> "ไม่พบข้อมูล", "1" => "ใช้งานได้","2" => "ระงับใช้งาน");

$menuTypeArr = array("0"=> "ไม่พบข้อมูล", "1" => "หมวดหลัก","2" => "หมวดย่อย");

$statusArr = array("0"=> "ไม่พบข้อมูล", "1" => "ใช้งานได้","2" => "ระงับใช้งาน"); //ใช้กับ User,วัสดุ,หมวด,หน่วยนับ


$statusReqArr = array("0"=> "ไม่พบข้อมูล", "1" => "ใช้งานได้","2" => "ระงับใช้งาน");

$urgentArr = array("0"=> "ไม่พบข้อมูล", "1" => "ด่วน","2" => "ไม่ด่วน");

$classArr = array(0=> "ไม่พบข้อมูล", 1 => "ผู้ใช้ระบบ", 2 => "ช่างซ่อม", 3 => "หัวหน้าช่าง", 4=>"ผู้จัดการระบบ");	

$module_name = array(
    "โมดูลจัดการระบบ" => array(
        "detail" => "สามารถ เพิ่ม, ลบ, แก้ไข, ระงับข้อมูลได้ ในเมนู เครื่องจักร-อุปกรณ์ (Master), ประเภทเครื่องจักร-อุปกรณ์, สิทธิ์การใช้งาน, ไซต์งาน, อาคาร, สถานที่, แผนก, หน่วยนับ, แบรนด์, ซัพพลายเออร์",
    ),
    "โมดูลตั้งค่าใบแจ้งซ่อม" => array(
        "detail" => "สามารถ เพิ่ม, ลบ, แก้ไข, ระงับข้อมูลได้ ในเมนู ประเภทใบแจ้งซ่อม, รหัสอาการเสีย, รหัสสาเหตุการเสีย, รหัสการซ่อม,วิธีซ่อม, สาเหตุการปฏิเสธงานซ่อม",
    ),
    "โมดูลแจ้งซ่อม" => array(
        "detail" => "สามารถแจ้งซ่อมได้ ดูความคืบหน้า พิมพ์ใบแจ้งซ่อมของแผนกผู้ใช้งานได้",
    ),
    "โมดูลจ่ายงานซ่อม" => array(
        "detail" => "จัดการใบแจ้งซ่อม-จ่ายงานได้",
    )
);

$location_arr = array(
    0 => array(
        "breakerName" => "LP1 (OK)",
        "_groupName" => "1FLC01AIR",
        "detailName" => "อาคาร 8 ชั้น 1 แอร์",
        "location" => "อาคาร 8 ชั้น 1 ออฟฟิศ WH",
        "connectType" => "WIFI",
    ),
    1 => array(
        "breakerName" => "LP1 (OK)",
        "_groupName" => "1FLC01HEATER",
        "detailName" => "อาคาร 8 ชั้น 1 ฮีตเตอร์",
        "location" => "อาคาร 8 ชั้น 1 ออฟฟิศ WH",
        "connectType" => "WIFI",
    ),
    2 => array(
        "breakerName" => "LP1 (OK)",
        "_groupName" => "1FLC01Lighting",
        "detailName" => "อาคาร 8 ชั้น 1 หลอดไฟ",
        "location" => "อาคาร 8 ชั้น 1 ออฟฟิศ WH",
        "connectType" => "WIFI",
    ),
    3=> array(
    "breakerName" => "LP5 (OK)",        
    '_groupName' =>'1FLC05Conveyor678',
    'detailName' => 'คอนเวเยอร์ (6, 7, 8)',
    "location" => "อาคาร 8 ชั้น 1 ทางขึ้นรถโฟคลิฟต์",
    "connectType" => "NET SIM",
    ),
    4=> array(
    "breakerName" => "LP5 (OK)",
    '_groupName' =>'1FLC05Conveyor910',
    'detailName' => 'คอนเวเยอร์ (9, 10)',
    "location" => "อาคาร 8 ชั้น 1 ทางขึ้นรถโฟคลิฟต์",
    "connectType" => "NET SIM",
    ),
    5=> array(
    "breakerName" => "LP5 (OK)",        
    '_groupName' =>'1FLC05Lighting',
    'detailName' => 'หลอดไฟ',
    "location" => "อาคาร 8 ชั้น 1 ทางขึ้นรถโฟคลิฟต์",
    "connectType" => "NET SIM",
    ),
    6=> array(
    'breakerName' => "LP5 (OK)",
    '_groupName' =>'1FLC05Plug',
    'detailName' => 'ปลั๊ก',
    "location" => "อาคาร 8 ชั้น 1 ทางขึ้นรถโฟคลิฟต์",
    "connectType" => "NET SIM",
    ),
    7=> array(
    'breakerName' => "LP06 (OK)",
    '_groupName' =>'1FLC06Lighting1',
    'detailName' => 'หลอดไฟ',
    "location" => "อาคาร 8 ชั้น 1 ออฟฟิศ WH",
    "connectType" => "WIFI",    
    ),
    8=> array(
    'breakerName' => "LP06 (OK)",
    '_groupName' =>'1FLC06Lighting2',
    'detailName' => 'หลอดไฟ',
    "location" => "อาคาร 8 ชั้น 1 ออฟฟิศ WH",
    "connectType" => "WIFI",
    ),
    9=> array(
    'breakerName' => "LP7 (OK)",
    '_groupName' =>'1FLC07Pump1',
    'detailName' => 'เบรกเกอร์ปั๊มน้ำ 1',
    "location" => "อาคาร 8 ชั้น 1 ห้องใต้บันได",
    "connectType" => "LAN",
    ),
    10=> array(
    'breakerName' => "LP7 (OK)",
    '_groupName' =>'1FLC07Pump2',
    'detailName' => 'เบรกเกอร์ปั๊มน้ำ 1',
    "location" => "อาคาร 8 ชั้น 1 ห้องใต้บันได",
    "connectType" => "LAN",
    ),
    11=> array(
    'breakerName' => "LP2 (OK)",
    '_groupName' =>'2FLC02AIR',
    'detailName' => 'แอร์',
    "location" => "อาคาร 8 ชั้น 2 หน้าห้องประชุมใหญ่",
    "connectType" => "WIFI",
    ),
    12=> array(
    'breakerName' => "LP2 (OK)",
    '_groupName' =>'2FLC02Lighting',
    'detailName' => 'หลอดไฟ',
    "location" => "อาคาร 8 ชั้น 2 หน้าห้องประชุมใหญ่",
    "connectType" => "WIFI",    
    ),
    13=> array(
    'breakerName' => "LP2 (OK)",
    '_groupName' =>'2FLC02Plug',
    'detailName' => 'ปลั๊ก',
    "location" => "อาคาร 8 ชั้น 2 หน้าห้องประชุมใหญ่",
    "connectType" => "WIFI",    
    ),
    14=> array(
    'breakerName' => "LP3 (OK)",
    '_groupName' =>'3FLC03Heater',
    'detailName' => 'ฮีตเตอร์',
    "location" => "อาคาร 8 ชั้น 3 ประตูทางเข้าคลัง",
    "connectType" => "NET SIM",    
    ),
    15=> array(
    'breakerName' => "LP3 (OK)",
    '_groupName' =>'3FLC03Lighting',
    'detailName' => 'หลอดไฟ',
    "location" => "อาคาร 8 ชั้น 3 ประตูทางเข้าคลัง",
    "connectType" => "NET SIM",    
    ),
    16=> array(
    'breakerName' => "MDB Room",
    '_groupName' =>'4FMDBAIRVRV',
    'detailName' => 'แอร์',
    "location" => "อาคาร 8 ชั้น 4 ห้อง MDB",
    "connectType" => "LAN",    
    ),
    17=> array(
    'breakerName' => "MDB Room",
    '_groupName' =>'4FMDBASRS2',
    'detailName' => 'ASRS 2',
    "location" => "อาคาร 8 ชั้น 4 ห้อง MDB",
    "connectType" => "LAN",    
    ),
    18=> array(
    'breakerName' => "MDB Room",
    '_groupName' =>'4FMDBASRS31',
    'detailName' => 'ASRS 1',
    "location" => "อาคาร 8 ชั้น 4 ห้อง MDB",
    "connectType" => "LAN",    
    ),
    19=> array(
    'breakerName' => "MDB Room",        
    '_groupName' =>'4FMDBMaintenance',
    'detailName' => 'ซ่อมบำรุง',
    "location" => "อาคาร 8 ชั้น 4 ห้อง MDB",
    "connectType" => "LAN",    
    ),
    20=> array(
    'breakerName' => "LP4 (OK)",
    '_groupName' =>'5FLC04Air',
    'detailName' => 'แอร์',
    "location" => "อาคาร 8 ชั้น 5 ห้อง MDB",
    "connectType" => "LAN",    
    ),
    21=> array(
    'breakerName' => "LP4 (OK)",
    '_groupName' =>'5FLC04Heater',
    'detailName' => 'ฮีตเตอร์',
    "location" => "อาคาร 8 ชั้น 5 ห้อง MDB",
    "connectType" => "LAN",    
    ),
    22=> array(
    'breakerName' => "LP4 (OK)",        
    '_groupName' =>'5FLC04Lighting',
    'detailName' => 'หลอดไฟ',
    "location" => "อาคาร 8 ชั้น 5 ห้อง MDB",
    "connectType" => "LAN",    
    ),
    23=> array(
    'breakerName' => "LP4 (OK)",
    '_groupName' =>'5FLC04Plug',
    'detailName' => 'ปลั๊ก',
    "location" => "อาคาร 8 ชั้น 5 ห้อง MDB",
    "connectType" => "LAN",    
    ),
    27=> array(
        'breakerName' => "LP8 (OK)",        
        '_groupName' =>'ServerRoomLC08AIR',
        'detailName' => 'แอร์',
        "location" => "อาคาร 8 ห้องเซิฟเวอร์",
        "connectType" => "LAN",    
        ),
    28=> array(
        'breakerName' => "LP8 (OK)",                
        '_groupName' =>'ServerRoomLC08Plug',
        'detailName' => 'ปลั๊ก',
        "location" => "อาคาร 8 ห้องเซิฟเวอร์",
        "connectType" => "LAN",
    ),            
    25=> array(
    'breakerName' => "ไม่มีชื่อ (OK)",
    '_groupName' =>'Parking1LC13Plug',
    'detailName' => 'ลานจอดรถ',
    "location" => "ลานจอดรถ อาคาร 8 (ติดคลอง, ตู้เครื่องชั่ง)",
    "connectType" => "LAN",    
    ),
    26=> array(
    'breakerName' => "ไม่มีชื่อ (OK)",        
    '_groupName' =>'Parking7LC12Lighting',
    'detailName' => 'ลานจอดรถ',
    "location" => "ลานจอดรถ กำแพงอาคาร 7",
    "connectType" => "NET SIM",    
    ),
    24=> array(
        'breakerName' => "ไม่มีชื่อ (OK)",
        '_groupName' =>'Building9Plug',
        'detailName' => 'ตู้ชาร์จไฟรถโฟคลิฟต์',
        "location" => "อาคาร 9 โรงจอดรถโฟคลิฟต์",
        "connectType" => "NET SIM",    
        ),    
);

$location_arr_no = array(
0=> '1FLC01AIR',
1=> '1FLC01HEATER',
2=> '1FLC01Lighting',
3=> '1FLC05Conveyor678',
4=> '1FLC05Conveyor910',
5=> '1FLC05Lighting',
6=> '1FLC05Plug',
7=> '1FLC06Lighting1',
8=> '1FLC06Lighting2',
9=> '1FLC07Pump1',
10=> '1FLC07Pump2',
11=> '2FLC02AIR',
12=> '2FLC02Lighting',
13=> '2FLC02Plug',
14=> '3FLC03Heater',
15=> '3FLC03Lighting',
16=> '4FMDBAIRVRV',
17=> '4FMDBASRS2',
18=> '4FMDBASRS31',
19=> '4FMDBMaintenance',
20=> '5FLC04Air',
21=> '5FLC04Heater',
22=> '5FLC04Lighting',
23=> '5FLC04Plug',
24=> 'Building9Plug',
25=> 'Parking1LC13Plug',
26=> 'Parking7LC12Lighting',
27=> 'ServerRoomLC08AIR',
28=> 'ServerRoomLC08Plug',    
);	

$arr_day_of_week = array('','จันทร์','อังคาร','พุธ','พฤหัสบดี','ศุกร์','เสาร์','อาทิตย์');	
$arr_mouthTH = array('', 'มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม');	
$arr_mouthEN = array('', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');