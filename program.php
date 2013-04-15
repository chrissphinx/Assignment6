<?php
	include 'dbhandler.php';
	$handler = new DBHandler();
	$lines = file('WorldTrans.txt');
	foreach ($lines as $line) {
		echo $line;
		switch ($line{0}) {
			case 'S':
				$result = $handler->query($line);
				// PRINT OUT HEADER
				for ($i = 0; $i < $result->numColumns(); $i++) { 
					if($i == $result->numColumns() - 1)
						echo $result->columnName($i);
					else echo $result->columnName($i) . "|";
				}
				echo "\n";
				// PRINT OUT ENTRIES
				while ($row = $result->fetchArray()) {
					for ($i = 0; $i < $result->numColumns(); $i++) { 
						if($i == $result->numColumns() - 1)
							echo $row[$result->columnName($i)];
						else echo $row[$result->columnName($i)] . "|";
					}
					echo "\n";
				}
				break;
			case 'I':
				echo "INSERT\n";
				break;
			case 'D':
				$line = explode("|", substr($line, 2));
				$delete = "DELETE FROM " . $line[0] . " WHERE " . $line[1] . " = " . $line[2];
				echo "OK, DELETE WORKED\n";
				// $handler->query($delete);
				break;
			case 'U':
				// $handler->query($line);
				echo "OK, UPDATE WORKED\n";
				break;
		}
		echo "\n";
	}
	$handler->close();
?>