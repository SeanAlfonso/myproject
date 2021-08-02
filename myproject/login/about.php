<?php
session_start();

	include("connection.php");
	include("functions.php");
	
	

	$user_data = check_login($con);
$title = "Home";
$content = '
<p align = "center">Smart Solar-Powered Indoor Aquaponics (SIA)is an urban farm commercializing aquaponic products (vegetables and fishes) raised organically through application of Science and modern technology. Specifically, the company promotes smart aquaponics system which conducts less human intervention when it comes to monitoring and rearing the AP system that further enhanced the capabilities of the system which substantially overcomes its limitations. The company believes that their system may constantly developed throughout the years for the continuous advancement of technology which immeasurably influence the potential of the smart aquaponics system to the future of urban agriculture.
</p><ul>
<li>
<h3>Mission</h3>
<p align = "center">SIA aims to be the leader in enhancing technology for farmlands and aquatic fisheries in Luzon. SIA would like to attract people to choose aquaponics as a way of growing food for sustainability as it is eco-friendly and low-cost.
To our clients and stakeholders, we promise to deliver competitive technology for AP that meets international standards.
</li>


<li><h3>Vision</h3>
<p align = "center">A technology provider for a new way of producing and growing food who strives to help the betterment of quality home and farm grown products in the Philippines. SIA finds intelligent  solutions  to  help  small  and  large  food  producers through smart AP that will qualify for global-grade technology.
</li>

</ul>
';

include 'body.php';
?>

