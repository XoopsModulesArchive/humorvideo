<?php

include 'header.php';

if ('humorvideo' == $xoopsConfig['startpage']) {
    $xoopsOption['show_rblock'] = 1;

    require XOOPS_ROOT_PATH . '/header.php';

    make_cblock();
} else {
    $xoopsOption['show_rblock'] = 0;

    require XOOPS_ROOT_PATH . '/header.php';
}

echo '<div align=center>';
        echo '
		<OBJECT ID="WMP" 
				CLASSID="CLSID:22d6f312-b0f6-11d0-94ab-0080c74c7e95"  
				STANDBY="Loading Microsoft Windows Media Player..." 
				WIDTH="320" 
				HEIGHT="240">
			<PARAM	NAME="AutoSize" VALUE="1">
			<PARAM	NAME="AutoStart" VALUE="1">
			<PARAM	NAME="AnimationAtStart" VALUE="0">
			<PARAM	NAME="FileName" VALUE="http://www.humornegro.com/modules/videodeldia/video_del_dia.wmv">
			<PARAM	NAME="PLUGINSPAGE" VALUE="http://www.microsoft.com/Windows/MediaPlayer/">
			<PARAM	NAME="ShowControls" VALUE="1">
			<PARAM	NAME="ShowStatusBar" VALUE="1">
			<EMBED	ANIMATIONATSTART="0" 
					AUTOSIZE="0" 
					AUTOSTART="1" 
					DISPLAYBACKCOLOR="black" 
					HEIGHT="195" 
					NAME="WMP" 
					PLUGINSPAGE="http://www.microsoft.com/Windows/MediaPlayer/" 
					SHOWCONTROLS="1" 
					SHOWDISPLAY="0" 
					SHOWSTATUSBAR="1" 
					SRC="http://www.humornegro.com/modules/videodeldia/video_del_dia.wmv" 
					TYPE="video/x-ms-wmv" 
					WIDTH="250"></EMBED>
		</OBJECT>
		';
        echo '<br>Turbinado pelo: <a href=http://www.humornegro.com/modules/videodeldia/index.php target=_blank> www.humornegro.com</a>';
echo '</div>';

require XOOPS_ROOT_PATH . '/footer.php';




