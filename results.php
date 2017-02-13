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
width: 95%;
background-color: #FFF;
margin-left:auto;
margin-right:auto;
}

header {
height: 30px;
border-bottom: thin solid #000000;
}

#rh-logo img {
    position: absolute;
    top: 2px;
    right: 2px;
    float: right;
}

#content {
float: left;
width: 50%;

}

#rightcol {
float: right;
width: 50%;
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


  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#analysis-dialog" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "drop",
        duration: 1000
      },
      minWidth: 1000
    });

    $( "#analysis-opener" ).on( "click", function() {
      $( "#analysis-dialog" ).dialog( "open" );
    });
  } );
  </script>

  <script>
  $( function() {
    $( "#workshop-dialog" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "drop",
        duration: 1000
      },
      minWidth: 400
    });

    $( "#workshop-opener" ).on( "click", function() {
      $( "#workshop-dialog" ).dialog( "open" );
    });
  } );
  </script>

</head>

<body>
      <div id="rh-logo">
<img src="shadowman_very_small.png" />
      </div>
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
<br>
                   <table class="bordered">
    <thead>
    <tr>
        <th>Area</th>
        <th>Development Rating</th>
        <th>Operations Rating</th>
    </tr>
    </thead>

<?php
include 'dbconnect.php';
connectDB();
# Create data arrays
$automation_dev_array = array("Ad-hoc tool selection","Manual deployment (App + OS)","CI/CD for non-production","CD Pipelines capable of pushing to production ","Full DevOps");
$automation_ops_array = array("Core build for OS only","Basic (manual) provisioning","Patch & Release management (OS)","QA staging process and SOE","Automated OS Builds","Full Push Button Infrastructure");
$methodology_dev_array = array("No defined methodology","Defined waterfall approach","Limited agile development on new projects (not including operations)","Agile development through to production & ops","Full DevOps culture");
$methodology_ops_array = array("Hosting/Management Only","Defined SLAs and ITIL","	Compliance & Security Auditing","SOE","Full DevOps culture");
$strategy_dev_array = array("Ad-hoc choice of application dev tools","Selected vendor tech roadmap","Iterative development of existing applications.Limited legacy strategy","Focus on new platforms & limited legacy platforms","Holistic & defined overall development strategy");
$strategy_ops_array = array("Ad-hoc choice of future platforms","Selected vendor tech roadmap","Focus on maintaining existing infrastructure","Primary focus on new applications","Defined strategy for exsiting and new architectures");
$influence_dev_array = array("The business dictates requirements","Mature requirements gathering approach (e.g. Agile user stories)","MVP approach","Multiple projects against business needs","IT driven business innovation");
$influence_ops_array = array("Instances of negative business impact","Good functioning service operations (i.e few unscheduled outage, but slow to deploy)","Project based service offerings (i.e no unscheduled outages and rapid deployment)","Self sevice operations for development & the business","Transparent integration with project IT");
$resources_dev_array = array("Traditional programming techniques with No agreed tools","Initial agile adoption with 1 backlog per team","Extended team collaboration. Common DevOps skills","Continous cross-team improvement and collaboration","100% DevOps projects and Full cross-functional teams");
$resources_ops_array = array("Standard \"Unix-like\" skills & no scripting skills","Direct VM interaction, limited scripting","Dynamic, templated images","Fully automated & deployment skills","100% DevOps engineers");
$totalDev = $totalOps = 0;

$workshops = array();
$workshopLinks = array(
	"AdaptiveSOE" => "<a target=_blank href='https://mojo.redhat.com/community/consulting-customer-training/consulting-services-solutions/projects/consulting-solution-adaptive-soe'>Adaptive SOE</a>",
	"InnovationLabs" => "<a target=_blank href='https://mojo.redhat.com/groups/na-emerging-technology-practice/projects/red-hat-open-innovation-labs'>Open Innovation Lab</a>",
	"ContainerPlatforms" => "<a target=_blank href='https://mojo.redhat.com/community/consulting-customer-training/consulting-services-solutions/projects/consulting-solution-modernize-app-delivery-with-container-platforms'>Container Platforms</a>",
	"AgileDevelopment" => "<a target=_blank href='https://mojo.redhat.com/docs/DOC-965558'>Agile Development</a>",
	"OpenSCAP" => "<a target=_blank href='https://access.redhat.com/documentation/en-US/Red_Hat_Enterprise_Linux/7/html/Security_Guide/chap-Compliance_and_Vulnerability_Scanning.html'>Compliance and Vulnerability Scanning Guide</a>",
	"RHCE" => "<a target=_blank href='https://www.redhat.com/en/services/certification/rhce'>Red Hat Certification (RHCE)</a> for Operations team",
	"OSEP" => "<a target=_blank href='https://mojo.redhat.com/groups/osep-community-of-practice'>Open Source Enablement</a>",
	"BusinessInfluence" => "<a target=_blank href='#'>Strategy and Business Influence</a>",
	"AnsibleAutomation" => "<a target=_blank href='https://mojo.redhat.com/community/consulting-customer-training/consulting-services-solutions/projects/consulting-solution-accelerate-it-automation-with-ansible'>Ansible Automation</a>",
	"CloudInfrastructure" => "<a target=_blank href='https://mojo.redhat.com/docs/DOC-1097461'>Cloud Infrastructure</a>",
	"CloudManagement" => "<a target=_blank href='https://mojo.redhat.com/docs/DOC-1097463'>Cloud Management</a>",
	"BusinessAutomation" => "<a target=_blank href='https://mojo.redhat.com/docs/DOC-1041221'>Business Automation</a>",
	"WalledGarden" => "<a target=_blank href='#'>Walled Garden Presentation</a>",
	"DevOpsReview" => "<a target=_blank href='#'>Review of DevOps Skills</a>",
	"Microservices" => "<a target=_blank href='#'>Microservices : Design and Architecture</a>",
);

# Get all the URL vals
$url_qry_str  = explode('&', $_SERVER['QUERY_STRING']);

$md5 = md5($_SERVER['QUERY_STRING']);

foreach( $url_qry_str as $param )
    {
      $var =  explode('=', $param, 2);
      if(substr($var[0],0,1) == "o") { $ops_arr[]=ceil($var[1]); };
      if(substr($var[0],0,1) == "d") { $dev_arr[]=ceil($var[1]); };
      if(substr($var[0],0,4) == "name") { $custName=urldecode($var[1]); };
      if(substr($var[0],0,6) == "status") { $status=urldecode($var[1]); };
    }

$areas = array(
	0 => "Automation",
	1 => "Methodology",
	2 => "Strategy",
	3 => "Business Influence",
	4 => "Resources"
);


## Connect to the Database
connectDB();

if ($status == "Completed") {
	$qq = "INSERT IGNORE INTO data (client,o1,o2,o3,o4,o5,d1,d2,d3,d4,d5,hash,date) VALUES ('$custName',$ops_arr[0],$ops_arr[1],$ops_arr[2],$ops_arr[3],$ops_arr[4],$dev_arr[0],$dev_arr[1],$dev_arr[2],$dev_arr[3],$dev_arr[4],'$md5',NOW())";
	$result = mysql_query($qq);
}

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

$analysis = $recommendations = array();

## Assess Dev vs Ops

if ($totalDev > $totalOps) {
	$moreMature = "Dev";
	$lessMature = "Ops";
	$top = $totalDev;
	$bottom = $totalOps;
	} else {
	$moreMature = "Ops";
	$lessMature = "Dev";
	$top = $totalOps;
	$bottom = $totalDev;
}

function assessVals($var) {
switch (true) {
case ($var <= 1):
   $rating = "average";
   break;
case ($var > 1 && $var < 3):
   $rating = "good";
   break;
case ($var > 3):
   $rating = "very good";
   break;
}
return $rating;
}

function assessOverallVals($var) {
switch (true) {
case ($var < 3):
   $rating = "low";
   break;
case ($var <= 4):
   $rating = "average";
   break;
case ($var > 4 && $var < 7):
   $rating = "good";
   break;
case ($var > 7):
   $rating = "very good";
   break;
}
return $rating;
}

$ratio = ($top / $bottom);
switch (true) {
    case ($ratio < "1.3"):
    	$word = "slightly more";
    	break;
    case ($ratio > "1.32" && $ratio < "2"):
    	$word = "considerably more";
    	break;
    case ($ratio > "2"):
    	$word = "extremely more";
    	break;
}

array_push($analysis, "Overall, the $moreMature team are $word mature than the $lessMature team.");
array_push($recommendations, "Re-balance the maturity levels between teams");

## Assess ops automation
if ($ops_arr[0]  < 2) {
array_push($analysis, "The Ops team would benefit from better use of automation techniques such as puppet/ansible.");
array_push($recommendations,"SOE/CII Workshop</a>");
array_push($workshops,$workshopLinks['AdaptiveSOE']);
array_push($workshops,$workshopLinks['AnsibleAutomation']);
}

#$automationAnalysis = "";
if ($ops_arr[0]  > 2) {
	$automationAnalysis = "The Ops team provide good use of automation";
#	$automationRecommendation = "";
	if ($dev_arr[0] < 2) {
		$automationAnalysis .= " although less automation is used by the Dev team";
		$automationRecommendation = "Increase automation in the Dev team";
		array_push($workshops,$workshopLinks['BusinessAutomation']);
	}
	if ($dev_arr[0] > 2) {
		$automationAnalysis .= " which is similar to the Dev team";
		$automationRecommendation = "None";
	}
array_push($analysis, $automationAnalysis);
array_push($recommendations,$automationRecommendation);
}

## Additional Automation stuff
if ($ops_arr[0] < 1) {
array_push($analysis,"No automated patch or release management.");
array_push($recommendations,"Consider using automation tools such as puppet and/or ansible.");
}

## Dev Automation
$devAutomationAnalysis = $devAutomationRecommendations = "";
switch($dev_arr[0]) {
	case 0:
		$devAutomationAnalysis .= "No control over which tools are used by developers";
		$devAutomationRecommendations .= "Provide a list of support development tools (aka 'Walled Garden')";
		array_push($workshops,$workshopLinks['WalledGarden']);
		break;
	case 1:
		$devAutomationAnalysis .= "All deployments involve manual intervention";
		$devAutomationRecommendations .= "Invest in CI/CD technologies";
		break;
	case 2:
		$devAutomationAnalysis .= "Good use of automation in pre-production environments";
		$devAutomationRecommendations .= "Enable CI/CD pipelines to production environments";
		break;
}

if ($devAutomationAnalysis != "") {
array_push($analysis,$devAutomationAnalysis);
array_push($recommendations,$devAutomationRecommendations);
}

if ($dev_arr[0] < 1) {
array_push($analysis,"No automation within the Dev team");
array_push($recommendations,"Consider using CI/CD tooling.");
array_push($workshops,$workshopLinks['BusinessAutomation']);
}

## Assess strategy
$opsStrategy = $ops_arr[3];
$devStrategy = $dev_arr[3];
$overallStrategy = $opsStrategy + $devStrategy;
$strategyAnalysis = "The overall strategy awareness is " . assessOverallVals($overallStrategy);
$strategyRecommendations = "";
if($opsStrategy > $devStrategy) {
	$strategyAnalysis .= " although the Operations team are more mature than the Development team.";
	$strategyRecommendations .= "Strategy and Business Influence Workshop";
	array_push($workshops,"Strategy and Business Influence Workshop");
	array_push($workshops,"Business Influence Mapping");
} elseif ($opsStrategy < $devStrategy) {
	$strategyAnalysis .= " although the Development team are more mature than the Operations team.";
	$strategyRecommendations .= "Strategy and Business Influence Workshop";
} else {
	$strategyAnalysis .= " although both teams have the same level of maturity";
	$strategyRecommendations .= "";
}

if ($overallStrategy <= 2) {
	$strategyRecommendations .= "Open Innovation Lab & Strategy and Business Influence Workshop";
	array_push($workshops,$workshopLinks['InnovationLabs']);
	array_push($workshops,$workshopLinks['BusinessInfluence']);
	array_push($workshops,"Business Influence Mapping");
}

array_push($recommendations,$strategyRecommendations);
array_push($analysis,$strategyAnalysis);


## Assess methodology
$opsMethods = $ops_arr[1];
$devMethods = $dev_arr[1];
$methodRecommendations = "";
$overallMethods = $opsMethods + $devMethods;
$methodsAnalysis = "The overall methodology score is " . assessOverallVals($overallMethods);
if($opsMethods > $devMethods) {
	$methodsAnalysis .= " although the Operations team have more mature methodology than the Development team.";
	$methodRecommendations .= "Container Platforms & Agile Development";
   array_push($workshops,$workshopLinks['ContainerPlatforms']);
   array_push($workshops,$workshopLinks['AgileDevelopment']);

} elseif ($opsMethods < $devMethods) {
	$methodsAnalysis .= " although the Development team are more mature than the Operations team.";
	$methodRecommendations .= "Standard Operating Environment Workshop";
   array_push($workshops,$workshopLinks['AdaptiveSOE']);
} else {
	$methodsAnalysis .= " and both teams have the same level of maturity.";
	$methodRecommendations .= "";
}

if ($devMethods < 2) {
   array_push($workshops,$workshopLinks['ContainerPlatforms']);
   array_push($workshops,$workshopLinks['AgileDevelopment']);
   $methodsAnalysis .= " The Dev team could be improved through the use of more agile methodologies";
	$methodRecommendations .= "  Container Platforms and Agile Development coaching";
}

if ($overallMethods <= 2) {
	$methodRecommendations .= "Open Innovation Lab";
   array_push($workshops,$workshopLinks['InnovationLabs']);

}
array_push($recommendations,$methodRecommendations);
array_push($analysis,$methodsAnalysis);

## Additional Methodology stuff
if ($opsMethods <2) {
array_push($analysis,"No automated security compliance in use.");
array_push($recommendations,"Consider using tools such as OpenSCAP");
array_push($workshops,$workshopLinks['OpenSCAP']);
}

# Assess Resources
$opsResources = $ops_arr[4];
$devResources = $dev_arr[4];
$resourceRecommendations = "";
$overallResources = $opsResources + $devResources;
$resourcesAnalysis = "The overall skills rating for Resources is " . assessOverallVals($overallResources);
if($opsResources > $devResources) {
	$resourcesAnalysis .= " although the Operations team are more mature than the Development team.";
	$resourceRecommendations .= "Agile Development Workshop";
} elseif ($opsResources < $devResources) {
	$resourcesAnalysis .= " although the Development team are more mature than the Operations team.";
	$resourceRecommendations .= $workshopLinks['RHCE'];
} else {
	$resourcesAnalysis .= " and both teams have the same level of maturity.";
	$resourceRecommendations .= "";
	}

if ($overallResources <= 2) {
	$resourceRecommendations .= "Increase overall skills through an Open Innovation Lab</a>";
}
array_push($analysis,$resourcesAnalysis);
array_push($recommendations,$resourceRecommendations);

if ($devResources < 2) {
array_push($analysis,"Lack of DevOps Skills");
array_push($recommendations,"Review current DevOps Skills");
array_push($workshops,$workshopLinks['DevOpsReview']);
}

## Assess architecture
$opsArchs = $ops_arr[2];
$devArchs = $dev_arr[2];
$ArchRecommendations = "";
$overallArchs = $opsArchs + $devArchs;
$ArchsAnalysis = "The overall rating for architecture is " . assessOverallVals($overallArchs);
if($opsArchs > $devArchs) {
	$ArchsAnalysis .= " although the Operations team have a higher architecture rating than the Development team.";
	$ArchRecommendations .= "Container Platforms <br> Agile Development.";
   array_push($workshops,$workshopLinks['ContainerPlatforms']);
   array_push($workshops,$workshopLinks['AgileDevelopment']);

} elseif ($opsArchs < $devArchs) {
	$ArchsAnalysis .= " although the Development team are more mature than the Operations team.";
	$ArchRecommendations .= "Increase infrastructure management and cloud awareness.";
   array_push($workshops,$workshopLinks['CloudInfrastructure']);
   array_push($workshops,$workshopLinks['CloudManagement']);
} else {
	$ArchsAnalysis .= " and both teams have the same level of maturity.";
	$ArchRecommendations .= "";
}

if ($devArchs < 2) {
   array_push($workshops,$workshopLinks['ContainerPlatforms']);
   array_push($workshops,$workshopLinks['AgileDevelopment']);
   array_push($workshops,$workshopLinks['Microservices']);
   $ArchsAnalysis .= " The Dev team could be improved through the use of more agile based architectures and microservices";
	$ArchRecommendations .= " Increase use of microservices";
}

array_push($recommendations,$ArchRecommendations);
array_push($analysis,$ArchsAnalysis);


## Look for OSEP opportunities

if ($devStrategy < 3 && $opsStrategy < 3) {
array_push($analysis,"Increase methodology and strategy through increased use of Open Source software");
array_push($recommendations,"OSEP Workshop");
array_push($workshops,$workshopLinks['OSEP']);
}

?>
</table>
<div id="analysis-dialog" title="Analysis of Results">
                   <table class="bordered">
    <thead>
    <tr>
        <th>ID</th>
        <th>Analysis</th>
        <th>Recommendations</th>
    </tr>
    </thead>
    <tbody>
<?php
######  ADD SECTION ON IMPACT STATEMENTS (SO WHAT?) #######
$i=1;
foreach ($analysis as $key => $answer) {
echo "<tr><td>$i</td><td>$answer</td><td>$recommendations[$key]</td></tr>";
$i++;
}
?>
    </tbody>
    </table>
<br>
<div id="analysis-adoc">
  <table class="bordered">
    <thead>
    <tr>
        <th>Asciidoc Export:</th>
    </tr>
    </thead>
    <tbody>
<tr><td>
  <?php
  $i=1;
  echo ".Analyse Results";
  echo "<br>";
  echo '[cols="1,10,10",options=header]';
  echo "<br>";
  echo '|===';
  echo "<br>";
  echo '<|ID <|Analysis <|Recommendations';
  echo "<br>";
  foreach ($analysis as $key => $answer) {
    echo "<br>";
    echo "|$i";
    echo "<br>";
    echo "|$answer";
    echo "<br>";
    echo "|$recommendations[$key]";
    echo "<br>";
    $i++;
  }
  echo "<br>";
  echo '|===';
  ?>
  </td></tr>
</tbody>
  </table>

</div>

<br></div>
<br>
<button id="analysis-opener">Open Analysis Dialog</button>

<div id="workshop-dialog" title="Recommended Workshops">

    <table class="bordered">
    <thead>
    <tr>
    	  <th>ID</th>
        <th>Workshops</th>
    </tr>
    </thead>
<tbody>
<?php
$i=1;
foreach (array_unique($workshops) as $workshop) {
echo "<tr><td>$i</td><td>$workshop</td></tr>";
$i++;
}
?>
</tbody>
</table>
</div>
<button id="workshop-opener">Workshop Links</button>
</div>
<!-- end of main content div -->
<!-- end of wrapper div -->

</div>
<br>

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
