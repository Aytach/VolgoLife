<?php 
require_once 'db.php';

$output = '';
$query = $pdo->prepare("SELECT * FROM advertisements INNER JOIN customers ON advertisements.id_customer = customers.id_customer WHERE name LIKE '%".$_POST["search"]."%'");
$query->bindValue(1, PDO::PARAM_STR);
$query->execute();

// Отображать результат
         if (!$query->rowCount() == 0) 
         {           
            while($row = $query->fetch(PDO::FETCH_ASSOC))
            {    
               $output .= '<a href="search_result.php?id='.$row["id_advertisements"].'">'.$row["name"].'</a><br><br>';
            }
            echo $output;         
        } 
        else 
        {
            ?>
            <div class="search_title"> 
            <?php  echo 'Nothing found'; ?></div>
<?php   }?>
