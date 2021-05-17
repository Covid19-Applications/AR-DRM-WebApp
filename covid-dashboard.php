
<?php include('security.php'); ?>
<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>

<link href="css/covid-theme.css" rel="stylesheet" media="all">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<style type="text/css">
    
.overview-item{
    padding: 10px;
} 
.overview-item--c5 {
    background-color:#aef359;
}
.overview-item--recovered {
         background-color: #028a0f;
}
.overview-item--death {
        background-color:#988f64;
}
.progress{
    height: 20px;
}

.bg-infooo{
    background-color: lightblue;
}

form #logout{
    padding: 5px;
}

</style>


 <div class="main-content" style="background-color: #3ded97;" >
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    	<br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1" style="color: white;">Covid19 Dashboard</h2>

                                </div>
                            </div>
                        </div>
                         <hr style="height: 2px; color: black;">
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--c5">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <img src="img/icons/virus.png">
                                            </div>
                                            <div class="text">
                                                <span style="font-size: 17px;">Global Confirmed Cases</span>
                                                <h2 id="GlobalConfirmed"></h2>
                                            </div>
                                            <div class="progress">
                                                  <div class="progress-bar progress-bar-striped progress-bar-animated" id="gl-conf">
                                                    
                                                  </div><h6 id="gl-conf-per">
                                                    
                                                  </h6><h6>%</h6>
                                                  <br><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--recovered">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <img src="img/icons/virus.png">
                                            </div>
                                            <div class="text">
                                                <span style="font-size: 17px;">Global Recovered Cases</span>
                                                <h2 id="GlobalRecovered"></h2>
                                            </div>
                                            <div class="progress">
                                                  <div class="progress-bar progress-bar-striped progress-bar-animated" id="gl-recover">
                                                    
                                                  </div><h6 id="gl-recover-per">
                                                    
                                                  </h6><h6>%</h6>
                                                 
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                               <div class="col-sm-6 col-lg-4" >
                                <div class="overview-item overview-item--death">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <img src="img/icons/virus.png">
                                            </div>
                                            <div class="text">
                                                <span style="font-size: 17px;">Global Death Cases</span>
                                                <h2  id="GlobalDeath"></h2>
                                            </div>
                                            <div class="progress">
                                                  <div class="progress-bar progress-bar-striped progress-bar-animated" id="gl-death">
                                                    
                                                  </div><h6 id="gl-death-per">
                                                    
                                                  </h6><h6>%</h6>
                                                  <br><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--c5">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <img src="img/icons/virus.png">
                                            </div>
                                            <div class="text">
                                                <span style="font-size: 17px;">Indian Confirmed Cases</span>
                                                <h2 id="IndianConfirmed"></h2>
                                            </div>
                                            <div class="progress">
                                                  <div class="progress-bar progress-bar-striped progress-bar-animated" id="in-conf">
                                                    
                                                  </div><h6 id="in-conf-per">
                                                    
                                                  </h6><h6>%</h6>
                                                 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--recovered">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <img src="img/icons/virus.png">
                                             </div>
                                            <div class="text">
                                                <span style="font-size: 17px;">Indian Recovered Cases</span>
                                                <h2 id="IndianRecovered"></h2>
                                            </div>
                                            <div class="progress">
                                                  <div class="progress-bar progress-bar-striped progress-bar-animated" id="recover">
                                                    
                                                  </div><h6 id="recover-per">
                                                    
                                                  </h6><h6>%</h6>
                                                 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--death">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                            <img src="img/icons/virus.png">

                                            </div>
                                            <div class="text">
                                                <span style="font-size: 17px;">Indian Death Cases</span>
                                                <h2 id="IndianDeath"></h2>
                                            </div>
                                            <div class="progress" style="height: 20px;">
                                                  <div class="progress-bar progress-bar-striped progress-bar-animated" id="death">
                                                    
                                                  </div><h6 id="death-per">
                                                    
                                                  </h6><h6>%</h6>
                                                 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--c5">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <img src="img/icons/virus.png">
                                            </div>
                                            <div class="text">
                                                <span style="font-size: 17px;">Arunachal Pradesh Confirmed Cases</span>
                                                <h2 id="StateConfirmed"></h2>
                                            </div>
                                            <div class="progress">
                                                  <div class="progress-bar progress-bar-striped progress-bar-animated" id="s-conf">
                                                    
                                                  </div><h6 id="s-conf-per">
                                                    
                                                  </h6><h6>%</h6>
                                                 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--recovered">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <img src="img/icons/virus.png">
                                            </div>
                                            <div class="text">
                                                <span style="font-size: 17px;">Arunachal Pradesh Recovered Cases</span>
                                                <h2 id="StateRecovered"></h2>
                                            </div>
                                            <div class="progress">
                                                  <div class="progress-bar progress-bar-striped progress-bar-animated" id="s-recover">
                                                    
                                                  </div><h6 id="s-recover-per">
                                                    
                                                  </h6><h6>%</h6>
                                                 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--death">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <img src="img/icons/virus.png">
                                            </div>
                                            <div class="text">
                                                <span style="font-size: 17px;">Arunachal Pradesh Death Cases</span>
                                                <h2 id="StateDeath"></h2>
                                            </div>
                                            <div class="progress">
                                                  <div class="progress-bar progress-bar-striped progress-bar-animated" id="s-death">
                                                    
                                                  </div><h6 id="s-death-per">
                                                    
                                                  </h6><h6>%</h6>
                                                 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Covid19 Cases In Arunachal Pradesh</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-striped "  id="state-wise">
                                                <thead>
                                                    <tr>
                                                        <th class="bg-secondary">S.No</th>
                                                        <th class="bg-infooo">City Name</th>
                                                        <th class="bg-warning">Confirmed Cases</th>
                                                        <th class="bg-primary">Active Cases</th>
                                                        <th class="bg-success">Recovered Cases</th>
                                                        <th class="bg-danger">Death Cases</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="state-wise">
                                                    
                                                    
                                                </tbody>
                                          
                                    </table>
                                </div>
                            </div>


                            <div class="col-lg-9">
                                <h2 class="title-1 m-b-25">Covid19 Cases In India</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table  table-striped "  id="state">
                                                <thead>
                                                    <tr>
                                                        <th class="bg-secondary">S.No</th>
                                                        <th class="bg-infooo">State Name</th>
                                                        <th class="bg-warning">Confirmed Cases</th>
                                                        <th class="bg-primary">Active Cases</th>
                                                        <th class="bg-success">Recovered Cases</th>
                                                        <th class="bg-danger">Death Cases</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="state">
                                                    
                                                    
                                                </tbody>
                                          
                                    </table>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <h2 class="title-1 m-b-25">Top countries</h2>
                                <div class="au-card au-card-top-countries m-b-40" style="background-color: lightblue;" >
                                    <div class="au-card-inner" >
                                        <div class="table-responsive" >
                                            <table class="table table-top-countries" id="world-wise" >
                                                <tbody id="world-wise" >
                                                
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                               <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Covid19 Test Cases In Arunachal Pradesh</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-striped "  id="test">
                                                <thead>
                                                    <tr>
                                                        <th class="bg-secondary">S.No</th>
                                                        <th class="bg-primary">Date</th>
                                                        <th class="bg-infooo">Total Tests</th>
                                                        <th class="bg-danger">Positive Cases</th>
                                                        <th class="bg-success">Negative Cases</th>
                                                        <!-- <th class="bg-warning">Tests Per Thousand</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody id="test">
                                                    
                                                    
                                                </tbody>
                                          
                                    </table>
                                </div>
                            </div>
                        


                            </div>


                        <div class="row">
                               <div class="col-lg-6">
                                     <div class="au-card chart-percent-card" style="height: 500px;">
                                        <div class="au-card-inner">
                                            <h3 class="title-2 tm-b-5">
                                            <i class="zmdi zmdi-map"></i>Corona Map</h3>
                                            <div class="row no-gutters">
                                   
                                                <div class="map-wrap m-t-45 m-b-80">
                                                    <img src="img/covid/map.gif">
                                                </div>
                                            </div>    
                                        </div>    
                                     </div>
                                      <div class="au-card chart-percent-card" style="height: 700px;">
                                        <div class="au-card-inner">
                                            <h3 class="title-2 tm-b-5">
                                            <i class="zmdi zmdi-map"></i>Covid19 Testing Centers</h3>
                                            <div class="row no-gutters">
                                   
                                                <div class="col-lg-12">
                                                    <iframe src="https://www.google.co.in/maps/d/embed?mid=1vbj5FxoSGbKQNk1495tlMInNOpoJh8xs" width="100%" height="480"></iframe>
                                                </div>
                                            </div>    
                                        </div>    
                                     </div>
                                </div>

                            <div class="col-lg-6">
                                <div class="au-card chart-percent-card">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 tm-b-5">Zone Percentage</h3>
                                        <div class="row no-gutters">
                                            <div class="col-xl-6">
                                                <div class="chart-note-wrap">
                                                    <div class="chart-note mr-0 d-block">
                                                        <span class="dot dot--green"></span>
                                                        <span>Green - </span><span id="Greenzone-per"></span><span>%</span>
                                                    </div>
                                                    <div class="chart-note mr-0 d-block">
                                                        <span class="dot dot--orange"></span>
                                                        <span>Orange - </span><span id="Orangezone-per"></span><span>%</span>
                                                    </div>
                                                     <div class="chart-note mr-0 d-block">
                                                        <span class="dot dot--red"></span>
                                                        <span>Red - </span><span id="Redzone-per"></span><span>%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="percent-chart">
                                                    <canvas id="percent-chart"></canvas>
                                                </div>
                                            </div>
                                             <div class="card col-lg-12">
                                                      <div class="card-header">
                                                        <h3 class="card-title">
                                                          <i class="fas fa-chart-pie mr-1"></i>
                                                          Zones
                                                        </h3>
                                                        
                                                      </div><!-- /.card-header -->
                                                      <div class="card-body">

                                                      <div class="card-deck">
                                                        <div class="card col-sm-4 bg-success">
                                                        <table class="table-responsive">
                                                          <th  style="border-bottom: 2px solid black; color: white;">Green</th>
                                                          <tbody id="greenzones" style="color: black;">
                                                            
                                                          </tbody>
                                                        </table>
                                                      </div>

                                                      <div class="card col-sm-4 " style="background-color: #ff9900">
                                                        <table class="table-responsive">
                                                          <th style="border-bottom: 2px solid black; color: white;">Orange</th>

                                                          <tbody id="orangezones" style="color: black;">
                                                            
                                                          </tbody>
                                                        </table>
                                                      </div>
                                                      
                                                      <div class="card col-sm-4 bg-danger">  
                                                        <table class="table-responsive" >
                                                          <th  style="border-bottom: 2px solid black; color: white;" >Red</th>
                                                          <tbody id="redzones" style="color: black;">
                                                            
                                                          </tbody>
                                                        </table>
                                                       </div>
                                                     </div>   

                                                      </div><!-- /.card-body -->
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" >
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="zmdi zmdi-account-calendar"></i>News</h3>
                                       
                                    </div>
                                    <div class="au-task js-list-load">
                                        <div class="au-task__title">
                                            <h2>Covid19 News</h2>
                                        </div>
                                        <div class="au-task-list js-scrollbar3">
                                            <div class="au-task__item au-task__item--danger">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task" id="news">
                                                        
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->

<br><br><br><br>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
  
$.ajax({
    url:"https://api.covid19india.org/data.json",
    type:"GET",
    dataType:"JSON",
    success : function(covid_data) {

        //console.log(covid_data);


        var newArray = covid_data.statewise.filter(function (el) {

      return el.state != 'Total';

    });

        //console.log(newArray);


       var sno = 1;

    $.each(newArray, function(key, value){
      

      $("#state").append("<tr>" + 
        "<td>" + sno + " </td>" +
        "<td>" + value.state + "</td>" +
        "<td>" + value.confirmed + "</td>" +
        "<td>" + value.recovered + "</td>" +
        "<td>" + value.active + "</td>" +
        "<td>" + value.deaths + "</td>" +
        "</tr>" );
      sno++;


    });



    }


});      

</script>

<script type="text/javascript">
  
$.ajax({
    url:"https://api.covid19india.org/v2/state_district_wise.json",
    type:"GET",
    dataType:"JSON",
    success : function(covid_data) {

        
    //console.log(covid_data);

    Array.prototype.sum = function (prop) {
    var total = 0
    for ( var i = 0, _len = this.length; i < _len; i++ ) {
        total += this[i][prop]
    }
    return total
    }

     var newArrayState = covid_data.filter(function (el) {

      return el.state === 'Arunachal Pradesh';

    });



    //console.log(newArrayState);

    var newArray = newArrayState[0].districtData.filter(function (el) {

      return ( el.district !== 'Foreign Evacuees' &&  el.district !== 'Other State' && el.district !== 'Unknown');

    }); 

    //console.log(newArray);

    //console.log(newArrayState);

       var sno = 1;

    $.each(newArray, function(key, value){
      

      $("#state-wise").append("<tr>" + 
        "<td>" + sno + " </td>" +
        "<td>" + value.district + "</td>" +
        "<td>" + value.confirmed + "</td>" +
        "<td>" + value.active + "</td>" +
        "<td>" + value.recovered + "</td>" +
        "<td>" + value.deceased + "</td>" +
        "</tr>" );
      sno++;


    });


    
    var StateConfirmed = newArrayState[0].districtData.sum("confirmed");
     document.getElementById("StateConfirmed").innerHTML = StateConfirmed;


    var StateRecovered = newArrayState[0].districtData.sum("recovered");
    document.getElementById("StateRecovered").innerHTML = StateRecovered;


    var StateDeath= newArrayState[0].districtData.sum("deceased");
    document.getElementById("StateDeath").innerHTML = StateDeath;

    var recover_rate = (((StateRecovered)*100)/(StateConfirmed));
  
    document.getElementById('s-recover-per').innerHTML = Math.round(recover_rate);  
    document.getElementById('s-recover').style.width = recover_rate + "%";

    var death_rate = (((StateDeath)*100)/(StateConfirmed));
  
    document.getElementById('s-death').style.width = death_rate + "%";
    document.getElementById('s-death-per').innerHTML = Math.round(death_rate); 


    var conf_rate = (((StateConfirmed)*100)/(20361490));
  
    var n = conf_rate.toFixed(2);
    document.getElementById('s-conf').style.width = n + "%";
    document.getElementById('s-conf-per').innerHTML = n; 

  }


});

//--------------------------------------------------------//


$.ajax({
    url:"https://api.covid19india.org/state_test_data.json",
    type:"GET",
    dataType:"JSON",
    success : function(covid_data) {



    var newArray = covid_data.states_tested_data.filter(function (el) {

      return el.state === 'Arunachal Pradesh';

    });    

    function myFunc(total, num) {
      return total + num;
    }

    var finalArray = newArray.map(function (obj) {
      return parseInt(obj.totaltested,10);
    });

    var total_tested = finalArray.reduce(myFunc);
    console.log(total_tested);


    }

});



//---------------------------------------------------------//


$.ajax({
    url:"https://api.covid19india.org/zones.json",
    type:"GET",
    dataType:"JSON",
    success : function(covid_data_zone) {

    

   //console.log(covid_data_zone.zones);

    Array.prototype.sum = function (prop) {
    var total = 0
    for ( var i = 0, _len = this.length; i < _len; i++ ) {
        total += this[i][prop]
    }
    return total
    }


    var newArray = covid_data_zone.zones.filter(function (el) {

      return el.state === 'Arunachal Pradesh';

    });

    //console.log(newArray);

    var Green = newArray.filter(function (el) {

      return el.zone === 'Green';

    });

    //console.log(Green.length); 
    var Greenlength = (Green.length/4)*100;

    document.getElementById("Greenzone-per").innerHTML = Greenlength;


     var Red = newArray.filter(function (el) {

      return el.zone === 'Red';

    });

     var Redlength = (Red.length/4)*100;


    document.getElementById("Redzone-per").innerHTML = Redlength;




     var Orange = newArray.filter(function (el) {

      return el.zone === 'Orange';

    });

    var Orangelength =  (Orange.length/4)*100;


    document.getElementById("Orangezone-per").innerHTML = Orangelength;


    //console.log(Orange[0].district);    
    
    $.each(Orange, function(key, value){


      $("#orangezones").append("<tr>" + 
        "<td>" + value.district + "</td>" +
        "</tr>" );
      
});



    $.each(Red, function(key, value){


      $("#redzones").append("<tr>" + 
        "<td>" + value.district + "</td>" +
        "</tr>" );


});


    $.each(Green, function(key, value){


      $("#greenzones").append("<tr>" + 
        "<td>" + value.district + "</td>" +
        "</tr>" );
      


});

}


});


$.ajax({
    url:"https://api.covid19api.com/summary",
    type:"GET",
    dataType:"JSON",
    success : function(covid_data_world) {

    //console.log(covid_data_world.Countries);



    var newArray = covid_data_world.Countries.filter(function (el) {

    return el.Country === 'India';

    });


    //console.log(newArray);    

    
    var IndianConfirmed = newArray[0].TotalConfirmed;
    document.getElementById("IndianConfirmed").innerHTML = IndianConfirmed;


    var IndianRecovered = newArray[0].TotalRecovered;
    document.getElementById("IndianRecovered").innerHTML = IndianRecovered;


    var IndianDeath = newArray[0].TotalDeaths;
    document.getElementById("IndianDeath").innerHTML = IndianDeath;

    var recover_rate = (((IndianRecovered)*100)/(IndianConfirmed));
  
    document.getElementById('recover-per').innerHTML = Math.round(recover_rate);  
    document.getElementById('recover').style.width = recover_rate + "%";

    var death_rate = (((IndianDeath)*100)/(IndianConfirmed));
  
    document.getElementById('death').style.width = death_rate + "%";
    document.getElementById('death-per').innerHTML = Math.round(death_rate); 



    var conf_rate = (((IndianConfirmed)*100)/(6616496));
  
    document.getElementById('in-conf').style.width = conf_rate + "%";
    document.getElementById('in-conf-per').innerHTML = Math.round(conf_rate); 

    //console.log(covid_data[14].districtData.sum("confirmed"))



    var GlobalConfirmed = covid_data_world.Global.TotalConfirmed;
    document.getElementById("GlobalConfirmed").innerHTML = GlobalConfirmed;

    //console.log(GlobalConfirmed);

    var GlobalDeath = covid_data_world.Global.TotalDeaths;
    document.getElementById("GlobalDeath").innerHTML = GlobalDeath;

    var GlobalRecovered = covid_data_world.Global.TotalRecovered;
    document.getElementById("GlobalRecovered").innerHTML = GlobalRecovered;



    var glrecover_rate = (((GlobalRecovered)*100)/(GlobalConfirmed));
  
    document.getElementById('gl-recover-per').innerHTML = Math.round(glrecover_rate);  
    document.getElementById('gl-recover').style.width = glrecover_rate + "%";

    var gldeath_rate = (((GlobalDeath)*100)/(GlobalConfirmed));
  
    document.getElementById('gl-death').style.width = gldeath_rate + "%";
    document.getElementById('gl-death-per').innerHTML = Math.round(gldeath_rate); 


    var conf_rate_gl = (((GlobalConfirmed)*100)/(69488945));
  
    document.getElementById('gl-conf').style.width = conf_rate_gl + "%";
    document.getElementById('gl-conf-per').innerHTML = Math.round(conf_rate_gl); 


       covid_data_world.Countries.sort(function(a, b){
    return b.TotalConfirmed -  a.TotalConfirmed;
    
    })


    //console.log(covid_data_world.Countries);


    var sno = 1;

    $.each(covid_data_world.Countries, function(key, value){
      
      if(sno === 37) {
        return false; // breaks
    }

      $("#world-wise").append("<tr>" + 
        "<td style='color: black;'>" + value.Country + "</td>" +
        "<td style='color: black;'>" + value.TotalConfirmed + "</td>" +
        "</tr>" );
      sno++;

    });

  }
});

</script>


<script type="text/javascript">
  
$.ajax({
    url:"https://api.covid19india.org/state_test_data.json",
    type:"GET",
    dataType:"JSON",
    success : function(covid_data) {

        
    //console.log(covid_data);

    Array.prototype.sum = function (prop) {
    var total = 0
    for ( var i = 0, _len = this.length; i < _len; i++ ) {
        total += this[i][prop]
    }
    return total
    }

    var newArray = covid_data.states_tested_data.filter(function (el) {

      return el.state === 'Arunachal Pradesh';

    });


    // function myFunc(total, num) {
    //   return total + num;
    // }

    // var finalArray = newArray.map(function (obj) {
    //   return parseInt(obj.totaltested,10);
    // });

    // var total = finalArray.reduce(myFunc);
    // console.log(total);


    var test =  newArray;

    test.sort(function(a, b) {
    var dateA = new Date("a.updatedon"), dateB = new Date("b.updatedon");
    return dateB - dateA;
})

    //console.log(test);

       var sno = 1;

    $.each(test, function(key, value){
      

      $("#test").append("<tr>" + 
        "<td>" + sno + " </td>" +
        "<td>" + value.updatedon + "</td>" +
        "<td>" + value.totaltested + "</td>" +
        "<td>" + value.positive + "</td>" +
        "<td>" + value.negative + "</td>" +
        // "<td>" + value.testsperthousand + "</td>" +
        "</tr>" );
      sno++;


    });

}

});

</script>

<script type="text/javascript">
var myUrl='http://newsapi.org/v2/everything?q=covid19&India&apiKey=d12fefc09d7f499dbe25039a79633be2';
var proxy = 'https://cors-anywhere.herokuapp.com/';
$.ajax({
    url:proxy+myUrl,
    type:"GET",
    dataType:"JSON",
    success:function(data){
    //console.log(data.articles);


       var sno = 1;

    $.each(data.articles, function(key, value){
      

      $("#news").append(
        "<p><b>" + value.title + "</b></p>" +
        "<p>" + value.description + "</p>" +
        "<a href=\" " + value.url + "\">More Info" + "</a>" +
        "<br><br>" +
        "<img src=\" "+ value.urlToImage + "\">" +
        "<br>" +
        "<hr>");
      sno++;


    });


    }
});


    </script>
<script type="text/javascript">
  
(function ($) {
  // USE STRICT
  "use strict";

  try {


    // Percent Chart



$.ajax({
    url:"https://api.covid19india.org/zones.json",
    type:"GET",
    dataType:"JSON",
    success : function(covid_data_zone) {

    

   //console.log(covid_data_zone.zones);

    Array.prototype.sum = function (prop) {
    var total = 0
    for ( var i = 0, _len = this.length; i < _len; i++ ) {
        total += this[i][prop]
    }
    return total
    }


    var newArray = covid_data_zone.zones.filter(function (el) {

      return el.state === 'Arunachal Pradesh';

    });

    var state_length = newArray.length;

    var Green = newArray.filter(function (el) {

      return el.zone === 'Green';

    });

    //console.log(Green.length); 
    var Greenlength = Math.round((Green.length/state_length)*100);
    document.getElementById("Greenzone-per").innerHTML = Greenlength;


     var Red = newArray.filter(function (el) {

      return el.zone === 'Red';

    });

     var Redlength = Math.round((Red.length/state_length)*100);
    document.getElementById("Redzone-per").innerHTML = Redlength;


     var Orange = newArray.filter(function (el) {

      return el.zone === 'Orange';

    });

    var Orangelength =  Math.round((Orange.length/state_length)*100);
    document.getElementById("Orangezone-per").innerHTML = Orangelength;


    var ctx = document.getElementById("percent-chart");
    if (ctx) {
      ctx.height = 280;
      var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
          datasets: [
            {
              label: "My First dataset",
              data: [Greenlength,Orangelength,Redlength],
              backgroundColor: [
                'green',
                'orange',
                'red'
              ],
              hoverBackgroundColor: [
                'green',
                'orange',
                'red'
              ],
              borderWidth: [
                0, 0, 0
              ],
              hoverBorderColor: [
                'transparent',
                'transparent',
                'transparent'
              ]
            }
          ],
          labels: [
            'Green Zone',
            'Orange Zone',
            'Red Zone'
          ]
        },
        options: {
          maintainAspectRatio: false,
          responsive: true,
          cutoutPercentage: 55,
          animation: {
            animateScale: true,
            animateRotate: true
          },
          legend: {
            display: false
          },
          tooltips: {
            titleFontFamily: "Poppins",
            xPadding: 15,
            yPadding: 10,
            caretPadding: 0,
            bodyFontSize: 16
          }
        }
      });
    }

  } 

});

}
  catch (error) {
    console.log(error);
  }


})(jQuery);
</script>

<script src="js/vendor/circle-progress/circle-progress.min.js"></script>
<script src="js/vendor/chartjs/Chart.bundle.min.js"></script>

<?php include('includes/scripts.php');?>
<?php include('includes/footer.php');?>