<?php
if(!isset($_REQUEST['provider_session_id'])) {
    die();
}

// Use provider_session_id to look up order in database, then take further action.
echo "Order Confirmed";