/*SELECT _groupName FROM mqtteioc.data_eioc GROUP BY _groupName ORDER BY _groupName ASC;*/

/*SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));
SELECT _groupName, _terminalTime FROM mqtteioc.data_eioc GROUP BY _groupName*/


/*SELECT * FROM mqtteioc.data_eioc WHERE _groupName = 'ServerRoomLC08AIR'*/

/*SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));*/
SELECT _terminalTime, _groupName, SUM(Watt_Sum) AS total_Watt_Sum, KWH_Sum FROM mqtteioc.data_eioc WHERE _groupName = 'Parking7LC12Lighting'
AND DATE_FORMAT(_terminalTime, "%Y-%m-%d")='2023-02-21'
GROUP BY HOUR(mqtteioc.data_eioc._terminalTime) ORDER BY mqtteioc.data_eioc._terminalTime ASC;