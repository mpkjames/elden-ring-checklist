SELECT 
	udb.user_id,
	b.boss_id,
	b.name, 
	b.description, 
	b.image, 
	b.region, 
	b.location 
FROM 
	bosses b
LEFT JOIN
	(SELECT user_id, boss_id FROM user_defeats_boss WHERE user_id = :user_id) udb
	ON b.boss_id = udb.boss_id 
ORDER BY b.name;