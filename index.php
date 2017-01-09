<!DOCTYPE html>
<html>
<head>
    <script src="Chart.bundle.js"></script>
    <script src="utils.js"></script>
    <script src="raphael-2.1.4.min.js"></script>
    <script src="justgage.js"></script>
    <title>Ready to Innovate Assessment</title>
<style>

body {

    margin: 5px auto;
    font-family: 'trebuchet MS', 'Lucida sans', Arial;
    font-size: 14px;
    color: #444;
}

#wrapper {
width: 90%;
background-color: #FFF;
margin-left:auto;
margin-right:auto;
}

header {
height: 30px;
border-bottom: thin solid #000000;
}

#content {
float: left;
width: 50%;

}

#rightcol {
float: right;
width: 40%;
vertical-align: middle;
}

footer {
clear:both;
height: 50px;
}

table {
    *border-collapse: collapse; /* IE7 and lower */
    border-spacing: 0;
    width: 100%;    
}

.bordered {
    border: solid #ccc 1px;
    -moz-border-radius: 6px;
    -webkit-border-radius: 6px;
    border-radius: 6px;
    -webkit-box-shadow: 0 1px 1px #ccc; 
    -moz-box-shadow: 0 1px 1px #ccc; 
    box-shadow: 0 1px 1px #ccc;         
}

.bordered tr:hover {
    background: #fbf8e9;
    -o-transition: all 0.1s ease-in-out;
    -webkit-transition: all 0.1s ease-in-out;
    -moz-transition: all 0.1s ease-in-out;
    -ms-transition: all 0.1s ease-in-out;
    transition: all 0.1s ease-in-out;     
}    
    
.bordered td, .bordered th {
    border-left: 1px solid #ccc;
    border-top: 1px solid #ccc;
    padding: 10px;
    text-align: left;    
}

.bordered th {
    background-color: #dce9f9;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#ebf3fc), to(#dce9f9));
    background-image: -webkit-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:    -moz-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:     -ms-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:      -o-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:         linear-gradient(top, #ebf3fc, #dce9f9);
    -webkit-box-shadow: 0 1px 0 rgba(255,255,255,.8) inset; 
    -moz-box-shadow:0 1px 0 rgba(255,255,255,.8) inset;  
    box-shadow: 0 1px 0 rgba(255,255,255,.8) inset;        
    border-top: none;
    text-shadow: 0 1px 0 rgba(255,255,255,.5); 
}

.bordered td:first-child, .bordered th:first-child {
    border-left: none;
}

.bordered th:first-child {
    -moz-border-radius: 6px 0 0 0;
    -webkit-border-radius: 6px 0 0 0;
    border-radius: 6px 0 0 0;
}

.bordered th:last-child {
    -moz-border-radius: 0 6px 0 0;
    -webkit-border-radius: 0 6px 0 0;
    border-radius: 0 6px 0 0;
}

.bordered th:only-child{
    -moz-border-radius: 6px 6px 0 0;
    -webkit-border-radius: 6px 6px 0 0;
    border-radius: 6px 6px 0 0;
}

.bordered tr:last-child td:first-child {
    -moz-border-radius: 0 0 0 6px;
    -webkit-border-radius: 0 0 0 6px;
    border-radius: 0 0 0 6px;
}

.bordered tr:last-child td:last-child {
    -moz-border-radius: 0 0 6px 0;
    -webkit-border-radius: 0 0 6px 0;
    border-radius: 0 0 6px 0;
}



/*----------------------*/

.zebra td, .zebra th {
    padding: 10px;
    border-bottom: 1px solid #f2f2f2;    
}

.zebra tbody tr:nth-child(even) {
    background: #f5f5f5;
    -webkit-box-shadow: 0 1px 0 rgba(255,255,255,.8) inset; 
    -moz-box-shadow:0 1px 0 rgba(255,255,255,.8) inset;  
    box-shadow: 0 1px 0 rgba(255,255,255,.8) inset;        
}

.zebra th {
    text-align: left;
    text-shadow: 0 1px 0 rgba(255,255,255,.5); 
    border-bottom: 1px solid #ccc;
    background-color: #eee;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#f5f5f5), to(#eee));
    background-image: -webkit-linear-gradient(top, #f5f5f5, #eee);
    background-image:    -moz-linear-gradient(top, #f5f5f5, #eee);
    background-image:     -ms-linear-gradient(top, #f5f5f5, #eee);
    background-image:      -o-linear-gradient(top, #f5f5f5, #eee); 
    background-image:         linear-gradient(top, #f5f5f5, #eee);
}

.zebra th:first-child {
    -moz-border-radius: 6px 0 0 0;
    -webkit-border-radius: 6px 0 0 0;
    border-radius: 6px 0 0 0;  
}

.zebra th:last-child {
    -moz-border-radius: 0 6px 0 0;
    -webkit-border-radius: 0 6px 0 0;
    border-radius: 0 6px 0 0;
}

.zebra th:only-child{
    -moz-border-radius: 6px 6px 0 0;
    -webkit-border-radius: 6px 6px 0 0;
    border-radius: 6px 6px 0 0;
}

.zebra tfoot td {
    border-bottom: 0;
    border-top: 1px solid #fff;
    background-color: #f1f1f1;  
}

.zebra tfoot td:first-child {
    -moz-border-radius: 0 0 0 6px;
    -webkit-border-radius: 0 0 0 6px;
    border-radius: 0 0 0 6px;
}

.zebra tfoot td:last-child {
    -moz-border-radius: 0 0 6px 0;
    -webkit-border-radius: 0 0 6px 0;
    border-radius: 0 0 6px 0;
}

.zebra tfoot td:only-child{
    -moz-border-radius: 0 0 6px 6px;
    -webkit-border-radius: 0 0 6px 6px
    border-radius: 0 0 6px 6px
}
  
</style>
</head>

<body>
<?php  date_default_timezone_set("Europe/London"); ?>
      <div id="wrapper">
      <header>
      <center>
      <h2>Ready to Innovate Assessment for <?php echo $_GET['name']; ?></h2>
      </center>
      </header>
      
<div id="content">       
    <div style="width:90%">
        <canvas id="canvas"></canvas>
    </div>
        <script>
        
    function getQueryVariable(variable)
{
       var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == variable){return decodeURI(pair[1]);}
       }
       return(false);
}    

    var customerName = getQueryVariable("name")


    var d1 = getQueryVariable("d1")
    var d2 = getQueryVariable("d2")
    var d3 = getQueryVariable("d3")
    var d4 = getQueryVariable("d4")
    var d5 = getQueryVariable("d5")
    var totalDev = d1 + d2 + d3 + d4 + d5

    var o1 = getQueryVariable("o1")
    var o2 = getQueryVariable("o2")
    var o3 = getQueryVariable("o3")
    var o4 = getQueryVariable("o4")
    var o5 = getQueryVariable("o5")
    var totalOps = o1 + o2 + o3 + o4 + o5

    var chartTitle = "DevOps Chart - " + customerName

    
    var randomScalingFactor = function() {
        return Math.round(Math.random() * 4);
    };

    var color = Chart.helpers.color;
    var config = {
        type: 'radar',
        data: {
            labels: ["Automation", "Methodology", "Architecture", "Strategy", "Resources"],
            datasets: [{
                label: "Dev",
                backgroundColor: color(window.chartColors.red).alpha(0.2).rgbString(),
                borderColor: window.chartColors.red,
                pointBackgroundColor: window.chartColors.red,
                data: [d1,d2,d3,d4,d5]
            }, {
                label: "Ops",
                backgroundColor: color(window.chartColors.blue).alpha(0.2).rgbString(),
                borderColor: window.chartColors.blue,
                pointBackgroundColor: window.chartColors.blue,
                data: [o1,o2,o3,o4,o5]

            },]
        },
        options: {
            legend: {
                position: 'bottom',
            },
            title: {
                display: true,
                text: chartTitle
            },
            scale: {
            
              ticks: {
                beginAtZero: true,
                max: 4,
                min: 0
              }
            }
        }
    };

    window.onload = function() {
        window.myRadar = new Chart(document.getElementById("canvas"), config);
    };


    var colorNames = Object.keys(window.chartColors);
    </script>

</div>

<div id="rightcol">
<h2>Results</h2>

                   <table class="bordered">
    <thead>
    <tr>
        <th>Area</th>        
        <th>Development Rating</th>
        <th>Operations Rating</th>
    </tr>
    </thead>

<?php
# Create data arrays
$automation_dev_array = array("Ad-hoc tool selection","Manual deployment (App + OS)","CI/CD for non-production","CI/CD defined to production","Full DevOps");
$automation_ops_array = array("Core build for OS only","Basic (manual) provisioning","Patch & Release management (OS)","QA staging process and SOE","Automated Builds","Full PBI");
$methodology_dev_array = array("No defined methodology","Defined waterfall approach","Limited agile development on new projects (not including operations)","Agile development through to production & ops","Full DevOps culture");
$methodology_ops_array = array("Hosting/Management Only","Defined SLAs and ITIL","	Compliance & Security Auditing","SOE","Full DevOps culture");
$strategy_dev_array = array("Ad-hoc choice of application dev tools","Selected vendor tech roadmap","Iterative development of existing applications.Limited legacy strategy","Focus on new platforms & limited legacy platforms","Holistic & defined overall development strategy");
$strategy_ops_array = array("Ad-hoc choice of future platforms","Selected vendor tech roadmap","Focus on maintaining existing infrastructure","Primary focus on new applications","Defined strategy for exsiting and new architectures");
$influence_dev_array = array("The business dictates requirements","Mature requirements gathering approach (e.g. Agile user stories)","MVP approach","Multiple projects against business needs","IT driven business innovation");
$influence_ops_array = array("Instances of negative business impact","Good functioning service operations (i.e few unscheduled outage, but slow to deploy)","Project based service offerings (i.e no unscheduled outages and rapid deployment)","Self sevice operations for development & the business","Transparent integration with project IT");
$resources_dev_array = array("Traditional programming techniques with No agreed tools","Initial agile adoption with 1 backlog per team","Extended team collaboration. Common DevOps skills","Continous cross-team improvement and collaboration","100% DevOps projects and Full cross-functional teams");
$resources_ops_array = array("Standard \"Unix-like\" skills & no scripting skills","Direct VM interaction, limited scripting","Dynamic, templated images","Fully automated & deployment skills","100% DevOps engineers");
$totalDev = $totalOps = 0;


# Get all the URL vals
$url_qry_str  = explode('&', $_SERVER['QUERY_STRING']);

$md5 = md5($_SERVER['QUERY_STRING']);
#echo "Hash: $md5 <br>";

function checkVars($var) {
## Check that the value given is between 0 and 5.  If not, default to -1 which is "dodgy entry"

}

foreach( $url_qry_str as $param )
    {
      $var =  explode('=', $param, 2);
      if(substr($var[0],0,1) == "o") { $ops_arr[]=ceil($var[1]); };
      if(substr($var[0],0,1) == "d") { $dev_arr[]=ceil($var[1]); };
      if(substr($var[0],0,4) == "name") { $custName=urldecode($var[1]); };
    }

$areas = array(
	0 => "Automation",
	1 => "Methodology",
	2 => "Strategy",
	3 => "Business Influence",
	4 => "Resources"
);


## Database stuff
#$db = mysqli_connect('172.30.158.48','adminzvJZccK','5Et6HuymAm_j');
$db = mysqli_connect('localhost','adminzvJZccK','5Et6HuymAm_j');
	if (!$db) {
	die("Unable to connect to database");
	}
if (!mysqli_select_db($db, 'spider')) {
		die("Unable to access innovate database");
	}

$qq = "INSERT IGNORE INTO data (client,o1,o2,o3,o4,o5,d1,d2,d3,d4,d5,hash,date) VALUES ('$custName',$ops_arr[0],$ops_arr[1],$ops_arr[2],$ops_arr[3],$ops_arr[4],$dev_arr[0],$dev_arr[1],$dev_arr[2],$dev_arr[3],$dev_arr[4],'$md5',NOW())";
#echo "Query: $qq <br>";
$result = mysqli_query($db, $qq);

## End DB Stuff

$o = $ops_arr[0];
$d = $dev_arr[0];
$totalDev += $d;
$totalOps += $o;
echo "    <tr>
        <td>Automation</td>
        <td><b>$dev_arr[0]</b> - $automation_dev_array[$d] </td>
        <td><b>$ops_arr[0]</b> - $automation_ops_array[$o] </td>
    </tr>";        
    
$o = $ops_arr[1];
$d = $dev_arr[1];
$totalDev += $d;
$totalOps += $o;

echo "    <tr>
        <td>Methodology</td>
        <td><b>$dev_arr[1]</b> - $methodology_dev_array[$d] </td>
        <td><b>$ops_arr[1]</b> - $methodology_ops_array[$o] </td>
    </tr>";        

$o = $ops_arr[2];
$d = $dev_arr[2];
$totalDev += $d;
$totalOps += $o;
echo "    <tr>
        <td>Architecture</td>
        <td><b>$dev_arr[2]</b> - $strategy_dev_array[$d] </td>
        <td><b>$ops_arr[2]</b> - $strategy_ops_array[$o] </td>
    </tr>";        
    
$o = $ops_arr[3];
$d = $dev_arr[3];
$totalDev += $d;
$totalOps += $o;
echo "    <tr>
        <td>Strategy</td>
        <td><b>$dev_arr[3]</b> - $influence_dev_array[$d] </td>
        <td><b>$ops_arr[3]</b> - $influence_ops_array[$o] </td>
    </tr>";      
    
$o = $ops_arr[4];
$d = $dev_arr[4];
$totalDev += $d;
$totalOps += $o;      
echo "    <tr>
        <td>Resources</td>
        <td><b>$dev_arr[4]</b> - $resources_dev_array[$d] </td>
        <td><b>$ops_arr[4]</b> - $resources_ops_array[$o] </td>
    </tr>";        

#echo "    <tr>
#        <td>Total</td>
#        <td><b>$totalDev out of 20       <div id='dev' class=;gauge'></div> </td>
#        <td><b>$totalOps out of 20         <div id='ops' class='gauge'></div></td>
#    </tr>";        

?>
</table>


<h2>Initial Analysis of Results</h2>

                   <table class="bordered">
    <thead>
    <tr>
        <th>Area</th>        
        <th>Recommendations</th>
    </tr>
    </thead>
    <tbody>
<tr>
        <td>Automation</td>
        <td></td>
    </tr>
<tr>
        <td>Methodology</td>
        <td></td>
    </tr>
<tr>
        <td>Architecture</td>
        <td></td>
    </tr>
<tr>
        <td>Strategy</td>
        <td></td>
    </tr>
<tr>
        <td>Resources</td>
        <td></td>
    </tr>
    </tbody>
    </table>

</div>
<!-- end of main content div -->
<!-- end of wrapper div -->
</div>

<!--
<script>


      var dev = new JustGage({
        id: 'dev',
        value: <?php echo $totalDev * 5; ?>,
        min: 0,
        max: 100,
        symbol: '%',
        donut: true,
        pointer: true,
        gaugeWidthScale: 0.4,
        pointerOptions: {
          toplength: 10,
          bottomlength: 10,
          bottomwidth: 8,
          color: '#000'
        },
        customSectors: [{
          color: "#ff0000",
          lo: 0,
          hi: 30
        }, {
          color: "#FFBF00",
          lo: 31,
          hi: 60
        }, {
          color: "#00ff00",
          lo: 61,
          hi: 100
        }],
        counter: true
      });

      var ops = new JustGage({
        id: 'ops',
        value: <?php echo $totalOps * 5; ?>,
        min: 0,
        max: 100,
        symbol: '%',
        donut: true,
        pointer: true,
        gaugeWidthScale: 0.4,
        pointerOptions: {
          toplength: 10,
          bottomlength: 10,
          bottomwidth: 8,
          color: '#000'
        },
        customSectors: [{
          color: "#ff0000",
          lo: 0,
          hi: 50
        }, {
          color: "#00ff00",
          lo: 50,
          hi: 100
        }, {
          color: "#00ff00",
          lo: 61,
          hi: 100
        }],
        counter: true
      });

    </script>
-->
</body>
</html>
