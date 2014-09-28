<?php
	$connect = mysql_connect("localhost","root","levanban");
	mysql_select_db('db_reports', $connect);
	$sql=mysql_query("select * from framgia_members");
	if($sql === FALSE) {
		die(mysql_error()); // TODO: better error handling
	}
	while($row=mysql_fetch_assoc($sql))
	$output[]=$row;
	print(json_encode($output));
	mysql_close();
	/*
INSERT INTO framgia_members (id, name, join_date)
	VALUES ('B120002','Vu Xuan Dung','2011-11-21'),
('B120003','Tran Thi Ngoc Bich','2012-04-01'),
('B120005','Le Dinh Vu','2011-06-01'),
('B120006','Nguyen Thanh Linh','2011-12-01'),
('B120007','Le Van Nghia','2012-09-01');
	*/
?>