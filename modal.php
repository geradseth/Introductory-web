<?php
foreach (glob("views/modals/*.php") as $file) {
	// code...
	include_once"$file";
}