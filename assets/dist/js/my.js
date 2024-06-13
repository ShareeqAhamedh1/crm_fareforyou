    function flights() {
        $('#info_load').load('crm_ajax_add/flights.php');
        $('#info_load_data').load('crm_ajax_add/view_flights.php');
    }

    function hotels() {
        $('#info_load').load('crm_ajax_add/hotel_details.php');
        $('#info_load_data').load('crm_ajax_add/view_hotels.php');
    }

    function tours() {
        $('#info_load').load('crm_ajax_add/transfers.php');
        $('#info_load_data').load('crm_ajax_add/view_transfers.php');
    }

    function other() {
        $('#info_load').load('crm_ajax_add/other_charge.php');
        $('#info_load_data').load('crm_ajax_add/view_other_charges.php');
    }
