<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body ng-app="myApp" ng-controller="myCtrl">
<img class="mx-auto d-block" style="width:10%" src="img/img2.png"/>
<div class="container">
    <div class="jumbotron">

        <h1 class="text-center">{{title}}</h1>
        <p class="mt-4">COVID-19 is a disease caused by a new strain of coronavirus. 'CO' stands for corona, 'VI' for virus, and 'D' for
            disease. Formerly, this disease was referred to as '2019 novel coronavirus' or '2019-nCoV.</p>
<!--        all data-->
        <div class="row text-center">
            <div class="col-md-4">
                <div class="card bg-warning text-white">
                    <div class="card-body">
                        <h3>Confirmed Cases</h3>
                        <h3>{{all_data.confirmed.value}}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-success text-white">
                    <div class="card-body">
                        <h3>Recovered Cases</h3>
                        <h3>{{all_data.recovered.value}}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-danger text-white">
                    <div class="card-body">
                        <h3>Death Cases</h3>
                        <h3>{{all_data.deaths.value}}</h3>
                    </div>
                </div>
            </div>
        </div>
<!--        End ALl Data-->
        <input type="text" class="form-control mt-4" placeholder="Enter Country"
        ng-model ="c" ng-change="get_c_data()"
        />

<!--        c-data-->
        <div class="container-fluid" ng-if="c_data">
        <h1 class="text-center mt-4 text-uppercase" ng-if="c">{{c}}'s STATUS</h1>
        <div class="row text-center mt-4" >
            <div class="col-md-4">
                <div class="card bg-warning text-white">
                    <div class="card-body">
                        <h3>Confirmed Cases</h3>
                        <h3>{{c_data.confirmed.value}}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-success text-white">
                    <div class="card-body">
                        <h3>Recovered Cases</h3>
                        <h3>{{c_data.recovered.value}}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-danger text-white">
                    <div class="card-body">
                        <h3>Death Cases</h3>
                        <h3>{{c_data.deaths.value}}</h3>
                    </div>
                </div>
            </div>
        </div>
        </div>
<!--        end-c-data-->

    </div>

</div>

<script src="./js/myscript.js"></script>
</body>
</html>
