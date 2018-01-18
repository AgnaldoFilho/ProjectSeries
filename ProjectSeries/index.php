<?php

include "util/RequestRouter.php";
include_once "database/DBConnector.php";
	

   echo json_encode((new RequestRouter)->route());
