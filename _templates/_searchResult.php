
<div class="container mt-3">
    <h3>Search Results:</h3>
    <div id="results">
        <?
            $conn=Database::getConnection();

            //query based on user input which is set on $_POST['query']
            $query_name=$_POST['query'];
            $sql="SELECT * FROM `products` WHERE `name` LIKE '%$query_name%'";
            /**Above sql query is vulnerable, since its not sanitized, it can be manipulated in user input fields.
             * A sample sql injection attack input is embraced in <> below 
             * <test%' OR '1'='1' -- >
             * The OR '1'='1' operator will always return true and -- will comment out rest of the code, resulting in dropping all the items in Database table
             * <test' OR `id`='3' -- > This input will fetch exactly the item with id '3' on the table
             * This website link: https://gainfo.selfmade.one/ */

            $result=$conn->query($sql);
            
            //list all the matching results
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