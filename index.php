<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PFE2022 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="node_modules/smart-webcomponents/source/styles/smart.default.css" />
    <script type="text/javascript" src="../../source/smart.element.js"></script>
    <script type="text/javascript" src="../../source/smart.numeric.js"></script>
    <script type="text/javascript" src="../../source/smart.tickintervalhandler.js"></script>
    <script type="text/javascript" src="../../source/smart.math.js"></script>
    <script type="text/javascript" src="../../source/smart.tank.js"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <h1>Projet Final 2022-Internet des objets appliqué à une serre </h1>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tableau de bord</h1>
                    </div>
                
                        <!--Tabs in grid-->

                    <ul class="nav nav-tabs">
                        <li class="active w3-button" style="background-color: lightgrey; color: black; border-radius: 5%;"><a data-toggle="tab" href="#Region1" style="margin-right:10px">Région 1</a></li>
                        <li class="active w3-button" style="background-color: lightgrey; color: black; border-radius: 5%;"><a data-toggle="tab" href="#Region2" style="margin-right:10px">Région 2</a></li>
                        <li class="active w3-button" style="background-color: lightgrey; color: black; border-radius: 5%;"><a data-toggle="tab" href="#Additions" style="margin-right:10px">Additions</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="Region1" class="tab-pane in active">
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h1 class="h5 mb-0 font-weight-bold text-gray-800">Région 1</h1>
                            </div>

                            <!-- Content Row -->
                            <div class="row">

                                <!-- temp Card -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-temp text-uppercase mb-1">
                                                        Température (Celcius)
                                                    </div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <!--getting information for the temperature-->    
                                                    <?php

                                                        //chosing the datasbase
                                                        $db = new SQLite3('IoT.db');
                                                        //selecting table desired in db  
                                                        $sql_temp = "SELECT * FROM IoT_temp ORDER BY rowid DESC LIMIT 1";
                                                        $result_temp = $db->query($sql_temp);
                                                        //finding the inforamation for the temp
                                                        while($row = $result_temp->fetchArray(SQLITE3_ASSOC)){

                                                        $sensorID_temp = $row["sensorID"];
                                                        $temperature = $row["temperature"];
                                                        $time_temp = $row["current_time"];

                                                        }

                                                        echo"$temperature";

                                                    ?>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-temperature-high fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Humidity Card -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-success shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">

                                                        Humidité (%)
                                                    
                                                    </div>

                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                        <!--getting info for humidity-->
                                                        <?php
                                                            //chosing the datasbase
                                                            $db = new SQLite3('IoT.db');
                                                            
                                                            //selecting table desired in db  
                                                            $sql_hum = "SELECT * FROM IoT_hum ORDER BY rowid DESC LIMIT 1";
                                                            $result_hum = $db->query($sql_hum);
                                                            //finding the inforamation for the humidity
                                                            while($row = $result_hum->fetchArray(SQLITE3_ASSOC)){
                                
                                                            $sensorID_hum = $row["sensorID"];
                                                            $humidity = $row["humidity"];
                                                            $time = $row["current_time"];

	                                                        }
                                                            
                                                            echo"$humidity";

                                                        ?>
                                                    
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="bi bi-droplet text-gray-300 fa-2x"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Light Card -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-info shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">

                                                        Luminosité (nm)

                                                    </div>
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                            <!--getting info for light-->
                                                            <?php

                                                                //chosing the datasbase
                                                                $db = new SQLite3('IoT.db');

                                                                //selecting table desired in db 
                                                                $sql_light = "SELECT * FROM IoT_light ORDER BY rowid DESC LIMIT 1";
                                                                $result_light = $db->query($sql_light);
                                                                //finding the inforamation for the co2
                                                                while($row = $result_light->fetchArray(SQLITE3_ASSOC)){

                                                                $sensorID_light = $row["sensorID"];
                                                                $light = $row["light"];
                                                                $time_light = $row["current_time"];

                                                                }

                                                                echo"$light";

                                                            ?>
                                                    
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-sun fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Co2 Card -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-warning shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">

                                                        CO2 (ppm)
                                                    
                                                    </div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">

                                                        <!--getting info for co2-->
                                                        <?php

                                                            //chosing the datasbase
                                                            $db = new SQLite3('IoT.db');

                                                            //selecting table desired in db 
                                                            $sql_co2 = "SELECT * FROM IoT_co2 ORDER BY rowid DESC LIMIT 1";
                                                            $result_co2 = $db->query($sql_co2);
                                                            //finding the inforamation for the co2
                                                            while($row = $result_co2->fetchArray(SQLITE3_ASSOC)){

                                                            $sensorID_co2 = $row["sensorID"];
                                                            $co2 = $row["co2"];
                                                            $time_co2=$row["current_time"];

                                                            }

                                                            echo"$co2";

                                                        ?>
                                                    
                                                    
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="bi bi-wind fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                            </div>

                            <!-- Content Row -->

                            <div class="row">

                                <!-- Area Chart -->
                                <div class="col-xl-8 col-lg-7">
                                    <div class="card shadow mb-4">
                                        <!-- Card Header - Dropdown -->
                                        <div
                                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                            <h6 class="m-0 font-weight-bold text-primary">Moyenne des données des capteurs pendant l'année</h6>
                                            
                                        </div>
                                        <!-- Card Body -->
                                        <div class="card-body">
                                            <div class="">

                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li role="presentation" class="active w3-button" style="background-color: lightgrey; color: black; border-radius: 5%;"><a href="#line_temp_area1" aria-controls="home" role="tab" data-toggle="tab">Température</a></li>
                                                    <li role="presentation" class="active w3-button" style="background-color: lightgrey; color: black; border-radius: 5%;"><a href="#line_hum_area1" aria-controls="profile" role="tab" data-toggle="tab">Humidité</a></li>
                                                    <li role="presentation" class="active w3-button" style="background-color: lightgrey; color: black; border-radius: 5%;"><a href="#line_lum_area1" aria-controls="profile" role="tab" data-toggle="tab">Lumière</a></li>
                                                    <li role="presentation" class="active w3-button" style="background-color: lightgrey; color: black; border-radius: 5%;"><a href="#line_co2_area1" aria-controls="profile" role="tab" data-toggle="tab">C02</a></li>
                                                </ul>

                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                    <div role="tabpanel" class="tab-pane active" id="line_temp_area1">
                                                        <div style="width:100%;">
                                                            <canvas id="temp_area1"></canvas>
                                                        </div>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="line_hum_area1">
                                                        <div style="width:100%">
                                                            <canvas id="hum_area1"></canvas>
                                                        </div>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="line_lum_area1">
                                                        <div style="width:100%">
                                                            <canvas id="lum_area1"></canvas>
                                                        </div>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="line_co2_area1">
                                                        <div style="width:100%">
                                                            <canvas id="co2_area1"></canvas>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Pie Chart -->
                                <div class="col-xl-4 col-lg-5">
                                    <div class="card shadow mb-4">
                                        <!-- Card Header - Dropdown -->
                                        <div
                                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                            <h6 class="m-0 font-weight-bold text-primary">Description</h6>
                                            
                                        </div>
                                        <!-- Water full -->   
                                        <div class="card-body-water">
                                            <p>Ce site web a été créer afin de rendre la visualisation des données récuperé par les capteurs plus facile pour l'utilisateur.</p>

                                            <p>Il a deux région dont les données sont capté avec l'aide de capteur et de réseau thread. Les données sont ensuite envoyer via un protocole de communication nommé MQTT. Il est possible de voir la température, l'humidité, la luminosité et le gaz dans l'air. En plus, des graphiques sont présent afin de surveiller les changement dans les données au cours de l'années.</p>
                                        
                                            <p>Une section "Additions" a été ajouter au site web afin de voir la communication en temps réelle.</p>

                                            <p>Ce projet a été développer pour le projet de fin d'étude de 4 étudiants d'ingénierie électrique à l'université de Moncton.</p>
                                        </div>                            
  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="Region2" class="tab-pane fade">
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h2 class="h5 mb-0 font-weight-bold text-gray-800">Région 2</h2>
                            </div>

                            <!-- Content Row -->
                            <div class="row">

                                <!-- temp Card -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-temp text-uppercase mb-1">
                                                        Température (Celcius)</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Enter temperature</div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-temperature-high fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Humidity Card -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-success shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                        Humidité (%)</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Enter humidity</div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="bi bi-droplet text-gray-300 fa-2x"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Light Card -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-info shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Luminosité (nm)
                                                    </div>
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Enter light</div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-sun fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Co2 Card -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-warning shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                        CO2 (ppm)</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Enter Co2</div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="bi bi-wind fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Content Row -->

                            <div class="row">

                                <!-- Area Chart -->
                                <div class="col-xl-8 col-lg-7">
                                    <div class="card shadow mb-4">
                                        <!-- Card Header - Dropdown -->
                                        <div
                                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                            <h6 class="m-0 font-weight-bold text-primary">Moyenne des données des capteurs pendant l'année</h6>
                                            
                                        </div>
                                        <!-- Card Body -->
                                        <div class="card-body">
                                            <div class="">

                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li role="presentation" class="active w3-button" style="background-color: lightgrey; color: black; border-radius: 5%;"><a href="#line_temp_area2" aria-controls="home" role="tab" data-toggle="tab">Température</a></li>
                                                    <li role="presentation" class="active w3-button" style="background-color: lightgrey; color: black; border-radius: 5%;"><a href="#line_hum_area2" aria-controls="profile" role="tab" data-toggle="tab">Humidité</a></li>
                                                    <li role="presentation" class="active w3-button" style="background-color: lightgrey; color: black; border-radius: 5%;"><a href="#line_lum_area2" aria-controls="profile" role="tab" data-toggle="tab">Lumière</a></li>
                                                    <li role="presentation" class="active w3-button" style="background-color: lightgrey; color: black; border-radius: 5%;"><a href="#line_co2_area2" aria-controls="profile" role="tab" data-toggle="tab">C02</a></li>
                                                </ul>

                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                    <div role="tabpanel" class="tab-pane active" id="line_temp_area2">
                                                        <div style="width:100%;">
                                                            <canvas id="temp_area2"></canvas>
                                                        </div>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="line_hum_area2">
                                                        <div style="width:100%">
                                                            <canvas id="hum_area2"></canvas>
                                                        </div>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="line_lum_area2">
                                                        <div style="width:100%">
                                                            <canvas id="lum_area2"></canvas>
                                                        </div>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="line_co2_area2">
                                                        <div style="width:100%">
                                                            <canvas id="co2_area2"></canvas>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Pie Chart -->
                                <div class="col-xl-4 col-lg-5">
                                    <div class="card shadow mb-4">
                                        <!-- Card Header - Dropdown -->
                                        <div
                                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                            <h6 class="m-0 font-weight-bold text-primary">Description</h6>
                                            
                                        </div>
                                        <!-- Water full -->   
                                        <div class="card-body-water">
                                            <p>Ce site web a été créer afin de rendre la visualisation des données récuperé par les capteurs plus facile pour l'utilisateur.</p>

                                            <p>Il a deux région dont les données sont capté avec l'aide de capteur et de réseau thread. Les données sont ensuite envoyer via un protocole de communication nommé MQTT. Il est possible de voir la température, l'humidité, la luminosité et le gaz dans l'air. En plus, des graphiques sont présent afin de surveiller les changement dans les données au cours de l'années.</p>
                                        
                                            <p>Une section "Additions" a été ajouter au site web afin de voir la communication en temps réelle.</p>

                                            <p>Ce projet a été développer pour le projet de fin d'étude de 4 étudiants d'ingénierie électrique à l'université de Moncton.</p>
                                        </div>                            
  
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="Additions" class="tab-pane fade">
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h2 class="h5 mb-0 font-weight-bold text-gray-800">Additions</h2>
                            </div>
                            <h3>Pour allumer la lumiere apuiller l'interupteur</h3>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                            </label>
                            <h3>Pour allumer la lumiere apuiller l'interupteur</h3>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                            </label>
                            <h3>Pour allumer la lumiere apuiller l'interupteur</h3>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Ce projet a été créer créer dans le cadre du cours de projet final 2022 en génie électrique et a été développer par : Jenna Smith, Luke Holt, Chhadavong Ponn et André Leblanc.</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-area-tabs.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


</body>

</html>