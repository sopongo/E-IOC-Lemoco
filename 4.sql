SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));
SELECT MAX(_terminalTime), _groupName, PowerFactor, Watt_Sum, Today_KWH, 
Yesterday_KWH, ThisMonth_KWH, LastMonth_KWH, KWH_Sum FROM mqtteioc.data_eioc 
WHERE _groupName='5FLC04Heater' AND
(
DATE_FORMAT(_terminalTime, "%Y-%m-%d")>='2023-03-01' AND DATE_FORMAT(_terminalTime, "%Y-%m-%d")<='2023-03-09' 
) 
GROUP BY LEFT(mqtteioc.data_eioc._terminalTime,10)
ORDER BY mqtteioc.data_eioc._terminalTime ASC;
/*DATE_FORMAT(_terminalTime, "%Y-%m-%d")='2023-02-15' */
/*(_terminalTime BETWEEN '2023-02-20 00:00:00' AND '2023-02-28 23:59:59')*/