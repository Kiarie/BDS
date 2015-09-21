<?php
	$db = new Sqlite3('messages');

   $sql =<<<EOF
      CREATE TABLE COMPANY
      (ID INT PRIMARY KEY     NOT NULL,
      NAME           TEXT    NOT NULL,
      EMAIL            INT     NOT NULL,
      SUBJECT        TEXT      NOT NULL,
      MSGBODY         TEXT 		NOT NULL);
EOF;

	$stmt = $db->exec($sql);
 	if(!$stmt){
 		echo $db->lastErrorMsg();
 	} else {
     	echo "created successfully";
 	}
 	$db->close();
 ?>