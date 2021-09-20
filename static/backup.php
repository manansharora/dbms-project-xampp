<!DOCTYPE html>
<html>
    <head>
        <title>NeuEdge Assignment</title>
    </head>
    <body>
       <style>
           table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
            input {
                padding: 12px 20px;
                margin: 8px 0;
                box-sizing: border-box;
                color: blue;
               
            }
        </style>

        <h2>Item Details</h2>

        <table border="2">
        <tr>
            <th>Item Number</th>
            <th>Item Code</th>
            <th>Item Quantity</th>
        </tr>

        <?php
        $baseq="select * from items";
        // $query = $baseq."where ind < 21";
        function button($query,$b,$e){
       
        //include "dbConn.php"; // Using database connection file here
        $db = mysqli_connect("localhost","root","","myDB");

        $records = mysqli_query($db, $query); // fetch data from database
            $i=1;
        while($data = mysqli_fetch_array($records))
        {
            if($i>$e)
                break;
           

            if($i>=$b)
            {
        ?>
        <tr>
            <td><?= $data['num'] ?></td>
            <td><?= $data['code'] ?></td>
            <td><?= $data['quantity'] ?></td>
        </tr>	
        <?php
            }
            $i++;
        }
        ?>
        </table>
        <?php mysqli_close($db);} // Close connection ?>


        <?php
        if(array_key_exists('button1', $_POST)) {
            button1();
        }
        else if(array_key_exists('button2', $_POST)) {
            button2();
        }
        else if(array_key_exists('button3', $_POST)) {
            button3();
        }
        else if(array_key_exists('sortA', $_POST)) {
            sortA();
        }
        else if(array_key_exists('sortB', $_POST)) {
            sortB();
        }
        else if(array_key_exists('normal', $_POST)) {
            normal();
        }
        else if(array_key_exists('reduce', $_POST)) {
            reduce();
        }
        else if(array_key_exists('increase', $_POST)) {
            increase();
        }

        function button1() {
           
            global $baseq;
            $query = $baseq;
            button($query,1,20);
        }
        function button2() {
           
            global $baseq;
            $query = $baseq;
            button($query,21,40);
        }
        function button3() {
            
            global $baseq;
            
            $query = $baseq;
            button($query,41,50);
        }
        function normal()
        {
            include "generate_table.php";
            global $baseq;
            $baseq = "select * from items";
            button($baseq,1,20);
        }
        function sortA()
        {
            global $baseq;
            $baseq = "select * from items order by code";
            button($baseq,1,20);
        }
        function sortB()
        {
            global $baseq;
            $baseq = "select * from items order by quantity desc";
            button($baseq,1,20);
        }
        function reduce()
        {
            $db = mysqli_connect("localhost","root","","myDB");
            mysqli_query($db, "update items set quantity=quantity-2 where quantity > 1;");
            mysqli_close($db);
            global $baseq;
            button($baseq,1,20);
        }
        function increase()
        {
            $db = mysqli_connect("localhost","root","","myDB");
            mysqli_query($db, "update items set quantity=quantity+2 where quantity%2=0;");
            mysqli_close($db);
            global $baseq;
            button($baseq,1,20);
        }
    ?>
        <form method="post">
        <input type="submit" name="button1"
                class="button" value="Page 1" />
          
        <input type="submit" name="button2"
                class="button" value="Page 2" />
        
        <input type="submit" name="button3"
                class="button" value="Page 3" />
                <input type="submit" name="normal"
                class="button" value="Generate Table" />
        <br>
        <input type="submit" name="sortA"
                class="button" value="Sort by Item Code" />
        <input type="submit" name="sortB"
                class="button" value="Sort by quantity" />
        <br>
        <input type="submit" name="reduce"
                class="button" value="Reduce all quantity by 2" />
        <input type="submit" name="increase"
                class="button" value="Increase even items' quantity by 2" />
    </form>

    </body>
</html>