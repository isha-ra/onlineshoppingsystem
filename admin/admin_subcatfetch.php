<?php
$id= $_POST['id'];
require_once 'dbconnection.php';
  
                        $query = "SELECT * FROM subcategory where cat_id='$id'";
                    $result = mysqli_query($connect, $query);
                    if (mysqli_num_rows($result) > 0) {
                        $i=0;
                        while ($row = mysqli_fetch_array($result)) {
                            
                            $data[$i] =  $row;
                            $i++;
                        }
                        echo json_encode($data);
                    }
