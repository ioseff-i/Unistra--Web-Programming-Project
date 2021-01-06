 <?php  
 include "config.php";
 //pagination.php  
 $connect = mysqli_connect("mysql-ioseffofficial.alwaysdata.net", "169597_jj", "Slytherine123", "ioseffofficial_unistra");  
 $record_per_page = 1;  
 $page = '';  
 $output = '';  
 if(isset($_POST["page"]))  
 {  
      $page = $_POST["page"];  
 }  
 else  
 {  
      $page = 1;  
 }  
 $start_from = ($page - 1)*$record_per_page;  
 $query = "SELECT * FROM anons LIMIT $start_from, $record_per_page";  
 $result = mysqli_query($connect, $query);  
  
 while($row = mysqli_fetch_array($result))  
 {  
      $output = $lang[$row["header_id"]];
      $output.='<img src='.$lang[$row["img_src"]].'>';
      $output.= $lang[$row["anons_id"]];

 }  

 $page_query = "SELECT * FROM anons";  
 $page_result = mysqli_query($connect, $page_query);  
 $total_records = mysqli_num_rows($page_result);  
 $total_pages = ceil($total_records/$record_per_page);  
 for($i=1; $i<=$total_pages; $i++)  
 {  
      $output .= "<span class='pagination_link' style='cursor:pointer; padding:6px; border:1px solid #ccc;' id='".$i."'>".$i."</span>";  
 }  
 $output .= '</div><br /><br />';  
 echo $output;  
 ?> 