<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXTRACT JSON</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
  
    .alert{
        font-weight: 500;
    }
</style>
<body>
    <div class="container">
        <div class="mt-4 col-8">
            <h1>JSON</h1>
              
            <div class="card">
                    <div class="card-header">
                        <h4>Details of json data</h4>
                    </div>
                    <div class="card-body">
            <?php
              $json_data = file_get_contents("actual.json");
                $data = json_decode($json_data,true);
                
                if(count($data) >=0 ){
                foreach((array)$data as $result) :{

                    ?>
                  
                    <p> <?php 
                    echo "<div class='text-primary fw-bold'>";
                    echo "Company id"."<br/>";
                    echo "</div>";
                    print_r($result ['companyid']); 
                    ?></p> 
                    <p> <?php echo "<div class='text-primary fw-bold'>"; 
                              echo "CUR_Last_visit:"."<br/>";
                              echo "</div>"; 
                              print_r($result ['cur_last_visit']); 
                        ?>
                    </p> 
                    <p> <?php 
                              echo "<div class='text-primary fw-bold'>"; 
                              echo "CUR_Last_visit_path:"."<br/>";
                              print_r($result ['cur_last_visit_path']);
                              echo "</div>"; 
                        ?>
                    </p> 
                    <p> 
                            <?php 
                            echo "<div class='text-primary fw-bold'>";  
                            echo "CUR_views_count:"."<br/>";
                            echo "</div>";  
                            print_r($result ['cur_views_count']); 
                            ?>
                    </p> 
                    <p> 
                            <?php
                            echo "<div class='text-primary fw-bold'>";  
                            echo "CUR_visits_count:"."<br/>";
                            echo "</div>";  
                            print_r($result ['cur_visits_count']);
                            ?>
                    </p>
                    <p> 
                          <?php 
                          echo "page_view_path:"."<br/>"; 
                          print_r($result ['page_view_path']);
                          ?>
                    </p>
                    <p> <?php  
                            $string = $result['page_view_path'];
                            $str_arr = preg_split ("/\,/", $string);
                            echo "<div class='text-primary fw-bold'>"; 
                            echo "The count is:"."=";
                            echo "</div>";
                            print_r(count($str_arr));
                            echo "<br/>";
                            echo "<div class='text-primary fw-bold'>"; 
                            echo "page_view_path:"."<br/>";
                            echo "</div>";
                            print_r($str_arr[0]);
                            // $latest = end($str_arr);
                            // print_r($latest);
                          
                          ?>
                    </p>
                    <p> <?php
                    echo "<div class='text-primary fw-bold'>"; 
                    echo "Page view time:"."<br/>";
                    echo "</div>"; 
                    print_r($result ['page_view_time']); ?>
                    </p>
                    <p> <?php
                    echo "<div class='text-primary fw-bold'>"; 
                    echo "page_view_time:Latest"."<br/>";
                    echo "</div>";   
                            $string = $result['page_view_time']; 
                            $str_arr = preg_split ("/\,/", $string); 
                            print_r($str_arr[0]);
                            // $latest = end($str_arr);
                            // print_r($latest);

                            // $close_date = current($latest);
                            // foreach($latest as $date)
                            //     if( abs(strtotime('now') - strtotime($date)) < abs(strtotime('now') - strtotime($close_date)))
                            //         $close_date = $date;

                            // echo $close_date;
                          ?>
                    </p>
                    <p>
                        <?php 
                        echo "<div class='text-primary fw-bold'>"; 
                        echo "View Host:"."<br/>";
                        echo "</div>";
                        print_r($result ['views_host']); 
                        ?>
                    </p>
                    <p> <?php 
                            echo "<div class='text-primary fw-bold'>"; 
                            echo "views_host:Latest"."<br/>";
                            echo "</div>";
                            $string = $result ['views_host']; 
                            $str_arr = preg_split ("/\,/", $string); 
                            print_r($str_arr[0]);
                            // $latest = end($str_arr);
                            // print_r($latest); 
                        ?>
                    </p>
                <?php  
                }
            endforeach;
            }
                ?>
         </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
