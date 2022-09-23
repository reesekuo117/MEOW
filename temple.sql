--請新德再講一次
SELECT * FROM address a JOIN address b ON a.sid=b.parent
WHERE a.sid < 4;




SELECT * FROM
(SELECT * FROM address WHERE sid<4) a
JOIN (SELECT * FROM address WHERE sid>=5 AND sid<=23) b
ON a.sid=b.parent;


SELECT a.sid area_sid, t.* FROM
(SELECT * FROM address WHERE sid<4) a
JOIN (SELECT * FROM address WHERE sid>=5 AND sid<=23) b
ON a.sid=b.parent
JOIN temple t ON t.address_sid=b.sid
;

SELECT a.sid area_sid, t.* FROM
(SELECT * FROM address WHERE sid<4) a
JOIN (SELECT * FROM address WHERE sid>=5 AND sid<=23) b
ON a.sid=b.parent
JOIN travel t ON t.address_sid=b.sid
;