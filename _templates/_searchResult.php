<?if(isset($_POST['query'])&& !empty($_POST['query'])){?>
<div class="container mt-3">
    <h3>Search Results:</h3>
    <div id="results">
        <?
            $conn=Database::getConnection();
            $query_name=$_POST['query'];
            $sql="SELECT * FROM `products` WHERE `name` LIKE '%$query_name%'";
            $result=$conn->query($sql);
            
            if($result->num_rows>0){
                echo "<ul class='list-group' >";
              // Output data of each row
              while($row = $result->fetch_assoc()) {
                echo "<li class='list-group-item mb-5 bg-dark text-white'>";
                echo "<div class='text-center' style='font-size: 1.5rem;'>" . $row["name"] . "</div><hr>";
                if (!empty($row["image_url"])) {
                    echo "<div class='text-center mt-3'><img src='" . $row["image_url"] . "' alt='" . $row["name"] . "' style='max-width: 300px;'></div>";
                }
                echo "<hr>";
                echo "<div>Price: " . $row["price"] . "</div><hr>";
                echo "<div>Description: " . $row["description"] . "</div><hr>";
                echo "<div>Specifications: " . $row["specifications"] . "</div>";
                echo "</li>";
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