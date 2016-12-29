<?php
$this->registerJs( <<< EOT_JS
	function ClockWidget_refresh_datetime()
	{
		var dateTimeString = new Date().toString();
		$('#ClockWidget_realtime_clock').html(dateTimeString);
	}
setInterval(ClockWidget_refresh_datetime,1000);
ClockWidget_refresh_datetime();
EOT_JS
);
?>
<div style="border:1px solid black;padding:5px;width:200px;text-align:center">
<span id="ClockWidget_realtime_clock"></span>
</div>