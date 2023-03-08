
SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));
SELECT _terminalTime, _groupName, PowerFactor, Watt_Sum, Today_KWH, 
Yesterday_KWH, ThisMonth_KWH, LastMonth_KWH, KWH_Sum FROM mqtteioc.data_eioc 
/*_groupName='2FLC02Lighting' AND*/
WHERE _groupName='2FLC02Lighting'
AND DATE_FORMAT(_terminalTime, "%Y-%m-%d")='2023-02-20' 
/*DATE_FORMAT(_terminalTime, "%Y-%m-%d %H")='2023-02-22' */
/*_terminalTime BETWEEN '2023-02-26 23:00:00' AND '2023-02-26 23:59:59'*/
/*GROUP BY mqtteioc.data_eioc._groupName*/
ORDER BY data_eioc._terminalTime DESC LIMIT 1;