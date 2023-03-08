SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));
SELECT mqtteioc.data_eioc.id, mqtteioc.data_eioc._groupName, MAX(mqtteioc.data_eioc._terminalTime) AS maxTime,
mqtteioc.tb_pf.PowerFactor, 
mqtteioc.tb_pf.Watt_Sum, mqtteioc.tb_pf.Today_KWH, mqtteioc.tb_pf.Yesterday_KWH, mqtteioc.tb_pf.ThisMonth_KWH, mqtteioc.tb_pf.LastMonth_KWH, mqtteioc.tb_pf.KWH_Sum,
SUBSTR(mqtteioc.data_eioc._terminalTime, 9,2) AS _DateNum
FROM mqtteioc.data_eioc
INNER JOIN mqtteioc.data_eioc AS tb_pf ON (tb_pf.id=mqtteioc.data_eioc.id)
WHERE mqtteioc.data_eioc._groupName='2FLC02Lighting' 
AND DATE_FORMAT(mqtteioc.data_eioc._terminalTime, "%Y-%m-%d")>='2023-03-01' 
AND DATE_FORMAT(mqtteioc.data_eioc._terminalTime, "%Y-%m-%d")<='2023-03-07'
GROUP BY LEFT(mqtteioc.data_eioc._terminalTime,10);

/*2023-02-03 23:59:19*/