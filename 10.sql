SELECT id, _terminalTime, _groupName, PowerFactor, Watt_Sum, Today_KWH, Yesterday_KWH, ThisMonth_KWH, LastMonth_KWH, KWH_Sum
FROM mqtteioc.data_eioc 
WHERE _groupName='Parking1LC13Plug' 
AND DATE_FORMAT(_terminalTime, "%Y-%m-%d")='2023-02-25' 
ORDER BY _terminalTime DESC;

/*id, _terminalTime, _groupName, PowerFactor, Watt_Sum, Today_KWH, Yesterday_KWH, ThisMonth_KWH, LastMonth_KWH, KWH_Sum*/