SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));
SELECT MAX(_terminalTime), _groupName, PowerFactor, Watt_Sum, Today_KWH, 
Yesterday_KWH, ThisMonth_KWH, LastMonth_KWH, KWH_Sum FROM mqtteioc.data_eioc 
WHERE 
DATE_FORMAT(_terminalTime, "%Y-%m-%d")='2023-03-09' 
GROUP BY mqtteioc.data_eioc._groupName ORDER BY mqtteioc.data_eioc._groupName ASC;

/*
	2023-02-28 23:58:21	1FLC06Lighting2	0.9640	0.0000	1.0000	6706.0000	1.0000	6706.0000	6720.0000
	2023-03-01 23:58:21	1FLC06Lighting2	0.9650	0.0000	6770.0000	33.0000	6770.0000	34.0000	6771.0000
*/