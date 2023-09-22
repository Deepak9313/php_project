<?php
require("top_inc.php");
include("../api/connection.php");



?>

<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Orders </h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th >S.NO</th>
                                      
                                        <th>PRODUCT ID</th>
                                        <th>PRODUCT NAME</th>
                                        <th>PRODUCT PRICE</th>
                                        <th>PRODUCT DESCRIPTION</th>
                                        <th>PRODUCT RANGE</th>
                                        <th>PRODUCT STOCK</th>
                                        <th>PRODUCT BRAND</th>
                                        <th>PRODUCT CATEOGRY</th>
                                        <th>PRODUCT BRAND</th>
                                        <th>PRODUCT IMAGE</th>
                                       
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $query = "SELECT * FROM products";
                                        $res = mysqli_query($con,$query);
                                        $num = mysqli_num_rows($res);
                                        if($num>0){
                                            // echo "<h1>".$num."</h1>";
                                            $data = mysqli_fetch_all($res,MYSQLI_ASSOC);
                                            // print_r($data);
                                            // print_r($data[0]['product_id']);
                                            for($i = 0;$i <$num ;$i++){
                                                echo "<tr>";
                                                echo "<td><span>".$data[$i]['product_id']."</span></td>";
                                                echo "<td><span>".$data[$i]['product_name']."</span></td>";
                                                echo "<td><span>".$data[$i]['product_price']."</span></td>";
                                                echo "<td><span>".$data[$i]['product_description']."</span></td>";
                                                echo "<td><span>".$data[$i]['stock']."</span></td>";
                                                echo "<td><span>".$data[$i]['brand']."</span></td>";
                                                echo "<td><span>".$data[$i]['category']."</span></td>";
                                                echo "<td><span><img onclick='image(".$data[$i]['image'].")'src='".$data[$i]['image']."'></span></td>";
                                                echo "<td><span>".$data[$i]['timestamp']."</span></td>";
                                                echo "</tr>";
                                            }
                                            
                                        }else{
                                            echo "No value ";
                                        }
                                    ?>
                            

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function image(val){
        console.log(val);
    }
                                    </script>
<?php
require("footer_inc.php");




?>