
<html>



<body>



<?php
try {

 $objDb = new PDO('mysql:host=localhost;dbname=test', '', '');
 $objDb->exec('SET CHARACTER SET utf8');

 
 $sql = "SELECT DISTINCT alpha
  FROM `abcd`";
 $statement = $objDb->query($sql);
 $list = $statement->fetchAll(PDO::FETCH_ASSOC);

 } catch(PDOException $e) {
 echo 'There was a problem';
 }

 ?>    

<form action="myprocess2.php" method="post">
<select name="variable" id="alpha" class="update">
        <option value="">Select Alphabet</option>
        <?php if (!empty($list)) { ?>
            <?php foreach($list as $row) { ?>
                <option value="<?php echo $row['alpha']; ?>">
                    <?php echo $row['alpha']; ?>
                </option>
            <?php } ?>
        <?php } ?>
    </select>	

	<select name="variable" id="name" class="update">
	    <option value="">Select Name</option>
	</select>


<input type="submit" value="submit">






	</form>



<script src="jquery.js"></script>	
<script src="ajax.js" ></script>

  
</body>
</html>
