<?if(isset($_POST['query'])){?>
<div class="container mt-3">
    <h3>Search Results:</h3>
    <div id="results">
        <?
            $conn=Database::getConnection();
            $query_name=$_POST['query'];
            $sql="SELECT * FROM `products` WHERE `name` LIKE '%$query_name%'";
            $result=$conn->query($sql);
            
            if($result->num_rows>0){
                echo "<ul class='list-group'>";
              // Output data of each row
              while($row = $result->fetch_assoc()) {
                  echo "<li class='list-group-item'>Product ID: " . $row["id"]. " - Name: " . $row["name"]. " - Price: " . $row["price"]. " - Description: " . $row["description"]. " - Specifications: " . $row["specifications"]. "</li>";
              }
              echo "</ul>";
            }
            else {
                echo "<p>No results found</p>";
            }
  
            $conn->close();
        
        ?>
    </div>
</div>
<?}?>