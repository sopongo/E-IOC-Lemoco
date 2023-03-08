/*SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));*/
/*mqtteioc.data_eioc._terminalTime, mqtteioc.data_eioc._groupName, mqtteioc.data_eioc.PowerFactor, 
mqtteioc.data_eioc.Watt_Sum, mqtteioc.data_eioc.Today_KWH, mqtteioc.data_eioc.Yesterday_KWH, 
mqtteioc.data_eioc.ThisMonth_KWH, mqtteioc.data_eioc.LastMonth_KWH, mqtteioc.data_eioc.KWH_Sum*/

SELECT t.id, t._groupName, t.PowerFactor, r.Max_terminalTime
FROM (
      SELECT id, MAX(_terminalTime) as Max_terminalTime
      FROM mqtteioc.data_eioc
      GROUP BY id
) r
INNER JOIN mqtteioc.data_eioc t
ON t.id = r.id AND t._terminalTime = r.Max_terminalTime
WHERE _groupName='ServerRoomLC08AIR' AND DATE_FORMAT(_terminalTime, "%Y-%m-%d")>='2023-02-20' 
AND DATE_FORMAT(_terminalTime, "%Y-%m-%d")<='2023-02-22' GROUP BY t._terminalTime
;


/*SELECT mqtteioc.data_eioc.* FROM mqtteioc.data_eioc
INNER JOIN 
(
  SELECT _terminalTime FROM mqtteioc.data_eioc 
  WHERE DATE_FORMAT(_terminalTime, "%Y-%m-%d")>='2023-02-20' AND DATE_FORMAT(_terminalTime, "%Y-%m-%d")<='2023-02-26' 
  GROUP BY _terminalTime
) AS max USING (_terminalTime);*/
/*DATE_FORMAT(_terminalTime, "%Y-%m-%d")='2023-02-15' */
/*(_terminalTime BETWEEN '2023-02-20 00:00:00' AND '2023-02-28 23:59:59')*/