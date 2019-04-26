
<?php

//fetch_item.php

include('database_connection.php');

$query = "SELECT * FROM product ORDER BY id DESC";

$statement = $connect->prepare($query);

if($statement->execute())
{
 $result = $statement->fetchAll();
 $output = '';
 foreach($result as $row)
 {
  $output .= '
  <div class="col-md-3" style="margin-top:12px;margin-bottom:12px;">  
            <div style="border:1px solid #ccc; border-radius:5px; padding:16px; height:600px;" align="center" id="product_'.$row["id"].'">
             <img src="upload/'.$row["product_image"].'" class="img-responsive" /><br />
             <h4 class="text-info">
                        <div class="checkbox">
                              <label><input type="checkbox" class="select_product" data-product_id="'.$row["id"].'" data-product_name="'.$row["product_name"].'" data-product_price="'.$row["product_price"] .'" value="">'.$row["product_name"].'</label>
                        </div>
                  </h4>
             <h4 class="text-danger">$ '.$row["product_price"] .'</h4>
            </div>
        </div>
  ';
 }
 echo $output;
}

?>
