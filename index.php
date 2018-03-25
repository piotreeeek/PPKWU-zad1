<?php

if (isset($_GET['value'])) {
	echo strrev($_GET['value']);
}