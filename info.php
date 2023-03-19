<html>
 <head>
    <style type="text/css">

table, th, td {
  border: 1px solid black;
}
        table{
            border-collapse:collapse;
            width: 100%;
            color:black;
            font-family: "Times New Roman", Times, serif;
            font-size: 22px;
            text-align: center;
            border-spacing: 30px;
        }
        th{
            background-color:darkgrey;
            color: black;
            border-spacing: 20px;
            
        }
        tr:nth-child(even){
            background-color: whitesmoke;
        }

        </style>
 </head>
    <body>
        <table>
            <tr>
                <th>Batch_No</th>
                <th>Product_Name</th>
                <th>Contents</th>
                <th>Manufacture_date</th>
                <th>Expiry_date</th>
                <th>Price</th>
                
            </tr>
            <?php
            $conn = mysqli_connect("localhost","root","","medico");
            $sql = "SELECT * FROM tb_medicine NATURAL JOIN tb_contents";
            $result = $conn->query($sql);

            if ($result->num_rows > 0){
                while ($row = $result-> fetch_assoc()){
                    echo "<tr><td>". $row["Batch_No"]. "</td><td>". $row["Product_Name"]."</td><td>". $row["Contents"]. "</td><td>". $row["Manufacture_date"]. "</td><td>". $row["Expiry_date"]. "</td><td>" .$row["Price"]. "</td><td>";
                }
                }
                else{
                    echo "No Results";
                }
                $conn->close();
                ?>
            
        </table>
    </body>
</html>