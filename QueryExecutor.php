<?php

interface QueryExecutor {
	public function doQuery ($pQuery, array $pParams = array ());
}
