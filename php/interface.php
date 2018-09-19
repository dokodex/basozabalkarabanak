<?php
	include 'php/businessLogic.php';

	function tableComingShows(){

		$bl = new businessLogic();

		$result = $bl->getcomingshows();

		$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";       

		// output data of each row
		while($row = $result->fetch_assoc()) {
			$row = array_map("utf8_encode", $row);
		    echo "<div class='tour-dates__tour-date'>";
		    echo "<div class='tour-dates__grid'>";
		    echo "<div class='tour-dates__date vcenter'>" . $row['fecha'] . "</div>";
		    $place=$row['lugar'];
		    $sepplace=explode(' / ', $place);
		    echo "<div class='tour-dates__info vcenter'>";
		    echo "<h2>"; require('imports/svg/location.svg'); echo $sepplace[0]. " " . "($sepplace[2])" . " - " . $sepplace[1] . "</h2>";
		    echo "<h3>" . $row['con'] . "</h3>";
		    echo "</div>";
		    echo "<div class='tour-dates__facebook  vcenter'>";
		    echo "<a class='tour-dates__link' href='".$row['evento']."'>"; require('imports/svg/facebook1.svg'); echo "</a>";
		    echo "</div>";
		    echo "<div class='tour-dates__tickets  vcenter'>";
		    echo "<a class='tour-dates__link' href='".$row['tickets']."'>"; require('imports/svg/tickets.svg'); echo "</a>";
		    echo "</div>";
		    echo "</div>";
		    echo "</div>";
		}
	}

	function tablePastShows(){

		$bl = new businessLogic();

		$result = $bl->getpastshows();

		$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";       

		// output data of each row
		while($row = $result->fetch_assoc()) {
			$row = array_map("utf8_encode", $row);
		    echo "<tr  class='past-shows--row past-shows__table--body'>";
		    echo "<td>" . $row['fecha'] . "</td>";
		    $place=$row['lugar'];
		    $sepplace=explode(' / ', $place);
		    echo "<td>" . $sepplace[0] . "</td>"; 
		    echo "<td class='past-shows__venue'>" . $sepplace[1] . "</td>";
		    echo "<td class='past-shows__country'>" . $sepplace[2] . "</td>";
		    echo "<td class='past-shows__bands'>" . $row['con'] . "</td>";

		}
	}

?>