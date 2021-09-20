<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Student Details
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Personal Details</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Academic Details</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Results
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Projects
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
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
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
