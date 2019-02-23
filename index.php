<?php
//Open Database file
$recoveredData = file_get_contents('database.txt');
//Reconvert Data
$recoveredArray = unserialize($recoveredData);
?>

<table>
 <tbody>
	<th>INDEX</th>
    <th>FILENAME</th>
	<th></th>
	<form method="POST" action="get.php">
		<input type="submit" value="UPDATE" />
	</form>	
	
   <?php 
   //Loop to work on every file of the array
     foreach($recoveredArray as $key => $index) {
        ?> 
        <tr>
          <td><?php echo $key; ?></td>
		  <td><?php 
					//Get FileName from path
					if(preg_match('[ \w-]+?(?=\.)', $index,$match_1)){
						$data_1 = $match_1[1];
						echo ucwords($team);
					}
				?></td>
		  <td></td>	
          <td>
			<form method="POST" action="download.php">
				<!-- Hidden Button to download from FTP -->
				<input type="hidden" name="path" value="<?= $index ?>" />
				<input type="submit" value="DOWNLOAD" />
			</form>	
		  </td>
		  
        </tr>
        <?php
     } 
   ?>
 </tbody>
</table>
