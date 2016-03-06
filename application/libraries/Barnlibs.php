<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Barnlibs {

    public function dateForHuman($date)
    {
    	$orderdate = explode('-', $date);
		$year  = $orderdate[0];
		$month   = $orderdate[1];
		$day = $orderdate[2];

		echo $day."-".$month."-".$year;
    }

    public function monthForHuman($date)
    {
    	$orderdate = explode('-', $date);
		$year		= $orderdate[0];
		$month 		= $orderdate[1];
		$day		= $orderdate[2];

		switch ($month) {
			case 1:
				$month = "Januari";
				break;
			case 2:
				$month = "Februari";
				break;
			case 3:
				$month = "Maret";
				break;
			case 4:
				$month = "April";
				break;
			case 5:
				$month = "Mei";
				break;
			case 6:
				$month = "Juni";
				break;
			case 7:
				$month = "Juli";
				break;
			case 8:
				$month = "Agustus";
				break;
			case 9:
				$month = "September";
				break;
			case 10:
				$month = "Oktober";
				break;
			case 11:
				$month = "November";
				break;
			case 12:
				$month = "Desember";
				break;

			default:
				break;
		}

		echo $month."&mdash;".$year;
    }
}