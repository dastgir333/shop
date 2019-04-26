  <?php
include('db.php');
include('function.php');
if(isset($_POST["operation"]))
{
 if($_POST["operation"] == "Add")
 {
  $image = '';
  if($_FILES["product_image"]["name"] != '')
  {
   $image = upload_image();
  }
  $statement = $connection->prepare("
   INSERT INTO product (product_name, product_brand, product_price, product_ram, product_storage, product_camera, product_quantity,product_status, product_image) 
   VALUES (:product_name, :product_brand, :product_price, :product_ram, :product_storage, :product_camera, :product_quantity, :product_status, :product_image)
  ");
  $result = $statement->execute(
   array(
    ':product_name' => $_POST["product_name"],
    ':product_brand' => $_POST["product_brand"],
    ':product_price' => $_POST["product_price"],
    ':product_ram' => $_POST["product_ram"],
    ':product_storage' => $_POST["product_storage"],
    ':product_camera' => $_POST["product_camera"],
    ':product_quantity' => $_POST["product_quantity"],
    ':product_status' => $_POST["product_status"],

    ':product_image'  => $image
   )
  );
  if(!empty($result))
  {
   echo 'Data Inserted';
  }
 }
 if($_POST["operation"] == "Edit")
 {
  $image = '';
  if($_FILES["product_image"]["name"] != '')
  {
   $image = upload_image();
  }
  else
  {
   $image = $_POST["hidden_product_image"];
  }
  $statement = $connection->prepare(
   "UPDATE product 
   SET product_name = :product_name, product_brand = :product_brand, product_price = :product_price,product_ram = :product_ram, product_storage = :product_storage, product_camera = :product_camera, product_quantity = :product_quantity, product_status = :product_status,  product_image = :product_image 
   WHERE id = :id
   "
  );
  $result = $statement->execute(
   array(
    ':product_name' => $_POST["product_name"],
    ':product_brand' => $_POST["product_brand"],
    ':product_price' => $_POST["product_price"],
    ':product_ram' => $_POST["product_ram"],
    ':product_storage' => $_POST["product_storage"],
    ':product_camera' => $_POST["product_camera"],
    ':product_quantity' => $_POST["product_quantity"],
    ':product_status' => $_POST["product_status"],

    ':product_image'  => $image,
    ':id'   => $_POST["user_id"]
   )
  );
  if(!empty($result))
  {
   echo 'Data Updated';
  }
 }
}

?>
   