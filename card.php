



<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/icons8-leaf-64.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>AGROIOT</title>
    
     <script src="jquery.min.js" type="text/javascript"></script>
        <script src="config.js" type="text/javascript"></script>
    <script src="mqttws31.js" type="text/javascript"></script>

    <meta name="viewport" content="width=device-width" />


    
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

  
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

   
    
    <link href="assets/css/userpstyles.css" rel="stylesheet"/>


   
    <link href="assets/css/demo.css" rel="stylesheet" />
    
    <link href="assets/css/titatoggle-dist.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:200,300,400,600,700'>



    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" >


    	<div class="sidebar-wrapper">
            <div class="logo">
                <span class="simple-text">
                    
                    
                    <i class="fa fa-forumbee"></i> AGROIOT
                </span>
               
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="#">
                        <i class="pe-7s-graph"></i>
                        <p>Reconnect</p>
                    </a>
                </li>
                <li class="active">
                    <a href="/">
                        
                        <p>Live Data</p>
                    </a>
                </li>
                <li class="active">
                    <a href="card.php">
                        
                        <p>History Data</p>
                    </a>
                </li>
                 <li class="active">
                    <a href="auto.html">
                        
                        <p>Control</p>
                    </a>
                </li>
        <li class="active">
                    <a href="automate.html">
                        
                        <p>AUTOMATE</p>
                    </a>
                </li>
                
                <li class="active">
                    <a href="#">
                        
                        <p>LOGOUT</p>
                    </a>
                </li>
                
              
                
                
               
               
                
                
                
              
                
            </ul>
    	</div>
    </div>


    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid" >
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2" >
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" >History Data</a>
                </div>
                
                
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a  class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-th-large"></i>
								<p class="hidden-lg hidden-md">Control Station</p>
                            </a>
                        </li>
                        
                    </ul>

                    
                </div>
            </div>
        </nav>
      


<!--dashboard-->
      
          
                 <style>
                    .modal-backdrop{display:none}
                   
                    .panel {
                      height:200px;
                        padding:40px;
                      position: relative;
                    
                   }
                   .imagecont1{
    			position:absolute;
                    width:120px;
                    height:120px;
                    margin-left: 50px;          
                     opacity: 1;
                        display: block;
                        
                        height: auto;
                        transition: .5s ease;
                        backface-visibility: hidden;
                      }

                   .middle {
                     transition: .5s ease;
                     opacity: 0;
                     position: absolute;
                     top: 50%;
                     left: 50%;
                     transform: translate(-50%, -50%);
                     -ms-transform: translate(-50%, -50%);
                     text-align: center;
                   }
							
                   		.panel:hover{
                          -webkit-box-shadow: 2px 2px #909090;
                         -moz-box-shadow: 2px 2px #909090;
                         box-shadow: 2px 2px #909090;
                   }
                   
                            .panel:hover .imagecont1{
                              opacity: 0.40;
                              
                            }

                            .panel:hover .middle {
                              opacity: 1;
                            }

                            .text {
                              background-color:#993aff ;
                              color: white;
                              font-size: 16px;
                              padding: 16px 32px;
                            }

                  </style>
      
  
  
      
      <div class="content">
            <div class="container-fluid">
               <div class="row">
                    <div class="col-md-2"></div>
                     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                 <div class="panel panel-default" data-toggle="modal" data-target="#temp">
                  <center>
                      <img id="tempimage"   class="imagecont1" src="assets/img/icons8-thermometer-100.png">
                        <div class="middle"> <div class="text">Click</div></div>
                      </center>
                 
                       </div>
                 </div>
                 <!--tempdata-->
                  <div class="modal fade" id="temp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Temperature</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                         <div class="embed-responsive embed-responsive-16by9">
                           <iframe class="embed-responsive-item" src="agrodata/temp.php" allowfullscreen></iframe>
						</div>
                                
                      </div>
                     
                      <div class="modal-footer">
                      
                      
            
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color:#993aff;color:white">Close</button>
                   
                      </div>
                    </div>
                  </div>
                </div>
                 
                 
                
                	 <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                 <div class="panel panel-default" data-toggle="modal" data-target="#humi">
                  <center>
                      <img id="tempimage"   class="imagecont1" src="assets/img/icons8-rope-bridge-100%20(1).png">
                        <div class="middle"> <div class="text">Click</div></div>
                      </center>
                  </div>
                  </div>
                 <!--humidata-->
                  <div class="modal fade" id="humi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Humidity</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="embed-responsive embed-responsive-16by9">
                           <iframe class="embed-responsive-item" src="agrodata/humi.php" allowfullscreen></iframe>
						</div>
                      </div>  
                      <div class="modal-footer">
                      
                        
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color:#993aff;color:white">Close</button>
                   
                      </div>
                    </div>
                  </div>
                </div>
                 <div class="col-md-2"></div>
              </div>
              
              
              
              
              
              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="panel panel-default" data-toggle="modal" data-target="#moist">
                  <center>
                      <img id="tempimage"   class="imagecont1" src="assets/img/icons8-water-100.png">
                        <div class="middle"> <div class="text">Click</div></div>
                      </center>
                  </div>
              </div>
                 <!--moistdata-->
                  <div class="modal fade" id="moist" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Moisture</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          <div class="embed-responsive embed-responsive-16by9">
                           <iframe class="embed-responsive-item" src="agrodata/moist.php" allowfullscreen></iframe>
						</div>
                      </div>
                      <div class="modal-footer">
                        
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color:#993aff;color:white">Close</button>
                   
                      </div>
                    </div>
                  </div>
                </div>
                
                
                
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="panel panel-default" data-toggle="modal" data-target="#rain">
                  <center>
                      <img id="tempimage"   class="imagecont1" src="assets/img/icons8-hacking-96.png">
                        <div class="middle"> <div class="text">Click</div></div>
                      </center>
                  </div>
              </div>
                <!--moistdata-->
                  <div class="modal fade" id="rain" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Intruder</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          <div class="embed-responsive embed-responsive-16by9">
                           <iframe class="embed-responsive-item" src="agrodata/rain.php" allowfullscreen></iframe>
						</div>
                      </div>
                      <div class="modal-footer">
                       
                        
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color:#993aff;color:white">Close</button>
                   
                      </div>
                    </div>
                  </div>
                </div>
                
                
                <div class="col-md-2"></div>
      </div>
</div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/radialIndicator.js"></script>
    
    <script src="toast.js"></script>



	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>
  

	<script type="text/javascript">
        
    	$(document).ready(function(){
             MQTTconnect();
            
            
            demo.initChartist();
            $.notify({
            	
            	message: "Connects Automatically. Click reconnect to Establish connection again."

            },{
                type: 'info',
                timer: 500
            });
            
            var mqtt;
            var reconnectTimeout = 5000;

            function MQTTconnect() {
                if (typeof path == "undefined") {
                    path = '/mqtt';
                }
                mqtt = new Paho.MQTT.Client(
                        host,
                        port,
                        path,
                        "web_" + parseInt(Math.random() * 100, 10)
                );
                var options = {
                    timeout: 6,
                    useSSL: useTLS,
                    cleanSession: cleansession,
                    onSuccess: onConnect,
                    onFailure: function (message) {
                        $.notify({
            	
            	message: "Failed. Retrying...."

            },{
                type: 'info',
                timer: 500
            });
                        
                        setTimeout(MQTTconnect, reconnectTimeout);
                    }
                };

                mqtt.onConnectionLost = onConnectionLost;
                mqtt.onMessageArrived = onMessageArrived;

                if (username != null) {
                    options.userName = username;
                    options.password = password;
                }

                mqtt.connect(options);
            }

            function publishMessage(messageContent) {
                
               
            	message = new Paho.MQTT.Message(messageContent);
        		message.destinationName = pubTopic;
        		mqtt.send(message);
               
                $.notify({
            	
            	message: "Command Sent...."

            },{
                type: 'info',
                timer: 500
            });
                
            }

            function onConnect() {
                // Connection succeeded; subscribe to our topic
                mqtt.subscribe(subTopic, {qos: 0});
                $.notify({
            	
            	message: "Connection Success...."

            },{
                type: 'info',
                timer: 500
            });
                
                
            }

            function onConnectionLost(response) {
                setTimeout(MQTTconnect, reconnectTimeout);  
                
                $.notify({
            	
            	message: "Connection Lost...."

            },{
                type: 'info',
                timer: 500
            });
                
               
            };

            function onMessageArrived(message) {
                var payload = message.payloadString;
                
                
                
                var myObj = JSON.parse(payload);
                
            var mread=myObj.moisture;
            var tread=myObj.temp;   
            var rread=myObj.rainfall;
            var hread=myObj.humid;
                
                var rain;
                
                var mois;
                
                if(rread==0)
                    {
                        rain=100;
                    }
                else{
                    rain=0;
                }
                
                if(mread==0)
                    {
                        mois=100;
                    }
                else{
                    mois=0;
                }
           
                
          var urltosend="http://agroiothit-com.stackstaging.com/api/index.php?request=storeAgroData&moisture=";

        
                urltosend+=mread+"&humidity=";
                urltosend+=hread;
                urltosend+="&temperature="
                urltosend+=tread;
                urltosend+="&rainfall=";
                    urltosend+=rain;
                
                //alert(urltosend);
                
            
                
                
$.ajax( {
type:'Get',
url:urltosend,
success:function(data) {
// alert(data);
}

})

                
               
                        var radialObj = $('#humiindicator').data('radialIndicator');
                        radialObj.animate(hread);
                
                var radialObj = $('#tempindicator').data('radialIndicator');
                        radialObj.animate(tread);
                var radialObj = $('#rainindicator').data('radialIndicator');
                        radialObj.animate(rain);
                var radialObj = $('#moisindicator').data('radialIndicator');
                        radialObj.animate(mois);
                 
                 
                
                
             
            };
            
            
            
            
            

              document.getElementById("toggleone").addEventListener("click", function() {
              
             
        
            
              if($("#toggleone").hasClass("active")){
                  
             
                  var JSONstring = '{ "cR1":1, "cR2":-1, "cR3":-1, "cR4":-1 }';
                publishMessage(JSONstring);
                       
              }else{
                  
                   var JSONstring = '{ "cR1":0, "cR2":-1, "cR3":-1, "cR4":-1 }';
                 publishMessage(JSONstring);
                  
              }
              
             
              
            });
            
            
            document.getElementById("toggletwo").addEventListener("click", function() {
              
             
        
            
              if($("#toggletwo").hasClass("active")){
                  
             
                  var JSONstring = '{ "cR1":-1, "cR2":1, "cR3":-1, "cR4":-1 }';
                publishMessage(JSONstring);
                       
              }else{
                  
                   var JSONstring = '{ "cR1":-1, "cR2":0, "cR3":-1, "cR4":-1 }';
                 publishMessage(JSONstring);
                  
              }
              
             
              
            });
            
            document.getElementById("togglethree").addEventListener("click", function() {
              
            
            if($("#togglethree").hasClass("active")){
                  
             
                  var JSONstring = '{ "cR1":-1, "cR2":-1, "cR3":1, "cR4":-1 }';
                publishMessage(JSONstring);
                       
              }else{
                  
                   var JSONstring = '{ "cR1":-1, "cR2":-1, "cR3":0, "cR4":-1 }';
                 publishMessage(JSONstring);
                  
              }
              
             
              
            });


        	

          

    	});
        
   
         

        
        $('#tempindicator').radialIndicator({
        barColor: {
        0: '#FFFF00',
        25: '#33CC33',
        35: '#FF0000',
        100: '#0066FF'
    },
        barWidth: 4,
        initValue: 27,
        roundCorner : true,
        percentage: false,
            format: '## C'
    });
        
        $('#humiindicator').radialIndicator({
        barColor: {
        0: '#FF0000',
        33: '#33CC33',
        66: '#0000FF',
        100: '#00FFFF'
    },
        barWidth: 4,
        initValue: 10,
        roundCorner : true,
        percentage: true
    });
        
        
        $('#moisindicator').radialIndicator({
        barColor: 'purple',
        barWidth: 4,
        initValue: 80,
        roundCorner : true,
        percentage: true,
            displayNumber: true
    });
        
        $('#rainindicator').radialIndicator({
        barColor: 'cyan',
        barWidth: 4,
        initValue: 40,
        roundCorner : true,
        percentage: false,
           
            displayNumber: true
    });
         
	</script>

        
    
     <script type="text/javascript">
         
         
         /*$("#toggleone").onclick(function(){
            
             alert("test");
             
             alret($("#toggleone").hasClass("active"));
             
             
         });
         
         */
          
           
            
           
        </script>

</html>
