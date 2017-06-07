<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Alta d'article</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" />
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script>
    	<script type="text/javascript">
        	$(function() {
        		$('#fecha').datepicker({
        			dateFormat: 'dd/mm/yy', 
        			changeMonth: true, 
        			changeYear: true, 
        			yearRange: '1950:2017',
        			onSelect: function(selectedDate) {
        			}
        		});
        	});
	    </script>
	    <link href="view/css/style.css" rel="stylesheet" type="text/css" />
	    <script src="module/user/model/validate_user.js"></script>
    </head>
    <body>