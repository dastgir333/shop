 <?php
include('db.php');
include('function.php');
if(isset($_POST["user_id"]))
{
 $output = array();
 $statement = $connection->prepare(
  "SELECT * FROM product 
  WHERE id = '".$_POST["user_id"]."' 
  LIMIT 1"
 );
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output["product_name"] = $row["product_name"];
  $output["product_brand"] = $row["product_brand"];
   $output["product_price"] = $row["product_price"];
  $output["product_ram"] = $row["product_ram"];
   $output["product_storage"] = $row["product_storage"];
  $output["product_camera"] = $row["product_camera"];
   $output["product_quantity"] = $row["product_quantity"];
  $output["product_status"] = $row["product_status"];
  
  if($row["product_image"] != '')
  {
   $output['product_image'] = '<img src="upload/'.$row["product_image"].'" class="img-thumbnail" width="50" height="35" /><input type="hidden" name="hidden_product_image" value="'.$row["product_image"].'" />';
  }
  else
  {
   $output['product_image'] = '<input type="hidden" name="hidden_product_image" value="" />';
  }
 }
 echo json_encode($output);
}
?>
   
