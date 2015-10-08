<?php

$ptl_maroon   = "#A4001D";

$osl_drk_grey = "#C0C0C0";
$osl_std_grey = "#E0E0E0";
$osl_med_grey = "#F0F0F0";
$osl_lgt_grey = "#F8F8F8";

$quickbar_bg  = $osl_std_grey;
$quickbar_fg  = "black";

$navbarbox_bg = $osl_std_grey;
$navbarbox_fg = "white";
$navbartop_bg = $osl_std_grey;
$navbartop_fg = "white";
$navbarsub_bg = $osl_lgt_grey;
$navbarsub_fg = "black";
$navbarsub2_bg = $osl_lgt_grey;
$navbarsub2_fg = "black";
$navbarsub3_bg = $osl_lgt_grey;
$navbarsub3_fg = "black";

$glancebox_bg = $osl_lgt_grey;
$glancebox_fg = "black";
$glancetitle_bg = $osl_lgt_grey;
$glancetitle_fg = "black";
$glanceitem_bg = $osl_std_grey;
$glanceitem_fg = "black";
$glanceitem_inv_bg = "black";
$glanceitem_inv_fg = "white";
$glancetext_bg = $osl_lgt_grey;
$glancetext_fg = "black";

$footer_bg    = $osl_std_grey;
$footer_fg    = "black";

?>
<STYLE TYPE="text/css">
BODY          {	background		: white ;
		color			: black ;
		font-family		: verdana,arial,helvetica ; 
		font-size		: 12px ; }

td	      { background-color	: white ; 
		color			: black ;
		font-family		: verdana,arial,helvetica ; }

td.buttonbox  {	font-size		: 11px ;
                font-weight		: bold ;
		color			: white;
		background              : url(<?php print($topurl); ?>/images/mpi-forum-button-bg.gif); }

td.navbarbox  {	font-size		: 11px ;
                font-weight		: bold ;
		color			: <?php print("$navbarbox_fg");?> ;
		background-color	: <?php print("$navbarbox_bg");?> ; }

td.navbartop  {	font-size		: 11px ;
                font-weight		: bold ;
		color			: <?php print("$navbartop_fg");?> ;
		background-color	: <?php print("$navbartop_bg");?> ; }

td.navbartopabout {
		height			: 17px ;
                font-size		: 11px ;
                font-weight		: bold ;
		color			: <?php print("$navbartop_fg");?> ;
 		background-color	: #009000;
		background-image        : url(<?php print("$topurl");?>/images/green-button.gif) ;
}

td.navbartopusing {
		height			: 17px ;
                font-size		: 11px ;
                font-weight		: bold ;
		color			: <?php print("$navbartop_fg");?> ;
		background-color	: #b08000;
		background-image        : url(<?php print("$topurl");?>/images/yellow-button.gif) ;
}
td.navbartopinstalling {
		height			: 17px ;
                font-size		: 11px ;
                font-weight		: bold ;
		color			: <?php print("$navbartop_fg");?> ;
		background-color	: #a00000;
		background-image        : url(<?php print("$topurl");?>/images/red-button.gif) ;
}
td.navbartopcommunity {
		height			: 17px ;
                font-size		: 11px ;
                font-weight		: bold ;
		color			: <?php print("$navbartop_fg");?> ;
		background-color	: #0000a0;
		background-image        : url(<?php print("$topurl");?>/images/blue-button.gif) ;
}

td.glanceitemsysadmin {
		background-color	: #b0e0a0;
}
td.glanceitemprogrammers {
		background-color	: #f0e080;
}
td.glanceitemusers {
		background-color	: #ffa080;
}
td.glanceitemresearchers {
		background-color	: #a0b0ff;
}
td.glanceitemall {
  		background-color	: black ;
		color			: #ffffff;
}

td.navbarsub  { font-size		: 11px ; 
                color			: <?php print("$navbarsub_fg");?> ;
                background-color	: <?php print("$navbarsub_bg");?> ; }
td.navbarsub2 {	font-size		: 11px ; 
		font-weight		: normal; 
		color			: <?php print("$navbarsub2_fg");?> ;
                background-color	: <?php print("$navbarsub2_bg");?> ; }
td.navbarsub2b {	font-size		: 11px ; 
		font-weight		: bold; 
		color			: <?php print("$navbarsub3_fg");?> ;
                background-color	: <?php print("$navbarsub3_bg");?> ; }
td.navbarsub3 {	font-size		: 11px ; 
		font-weight		: normal; 
		color			: <?php print("$navbarsub3_fg");?> ;
                background-color	: <?php print("$navbarsub3_bg");?> ; }
td.quickbar   { font-size		: 11px ; 
		font-weight		: bold ; 
		color			: <?php print("$quickbar_fg");?> ;
		background-color	: <?php print("$quickbar_bg");?> ; }
td.footer     { font-size		: 11px ;
		font-weight		: bold ;
		color			: <?php print("$footer_fg");?> ;
		background-color	: <?php print("$footer_bg");?> ; }


a.navbartop   { text-decoration : none ; color: <?php print("$navbartop_fg");?> ; }
a.glancetitle { text-decoration : none ; color: <?php print("$glancetitle_fg");?> ; }
a.glanceitem  { text-decoration : none ; color: <?php print("$glanceitem_fg");?> ; }
a.glancetext  { text-decoration : none ; color: <?php print("$glancetext_fg");?> ; }
a.navbarsub   { text-decoration : none ; color: <?php print("$navbarsub_fg");?> ; }
a.navbarsub2  { text-decoration : none ; color: <?php print("$navbarsub2_fg");?> ; }
a.navbarsub2b { text-decoration : none ; color: <?php print("$navbarsub3_fg");?> ; }
a.navbarsub3  { text-decoration : none ; color: <?php print("$navbarsub3_fg");?> ; }
a.quickbar    { text-decoration : none ; color: <?php print("$quickbar_fg");?> ; }

a.glanceitemsysadmin  { text-decoration : none ; color: <?php print("$glanceitem_fg");?> ; }
a.glanceitemprogrammers  { text-decoration : none ; color: <?php print("$glanceitem_fg");?> ; }
a.glanceitemusers  { text-decoration : none ; color: <?php print("$glanceitem_fg");?> ; }
a.glanceitemresearchers  { text-decoration : none ; color: <?php print("$glanceitem_fg");?> ; }
a.glanceitemall  { text-decoration : none ; color: <?php print("$glanceitem_inv_fg");?> ; }

<?php
// A:link.quickbar, A:visited.quickbar, A:hover.quickbar
?>
td.logobox  { background          : white ;
              color               : #FF2222 ; }

td.titlebox { background          : white ;
              color               : black ; }

td.newsbar   { background-color   : #E0E0E0 ;
               text-align         : center ;  }
td.newstitle { background-color   : #DD3333 ;
               color              : white ;
               text-align         : center ;  }
td.newstext  { font-size          : small ; 
               color              : #333333 ; }

.newstitle {   	color           : #333333 ;
		font-weight	: bold ;
		font-size 	: 12px ; }
.newstext {   	color           : black;
		font-weight	: normal ;
		font-size 	: 11px ; }

.glancetitle { font-size	: 14px ;
		 font-weight	: bold ;
 		 background-color   : #A00000 ;
                 color              : black ;
                 text-align         : center ;  }

td.glancebox  {	font-size		: 11px ;
                font-weight		: bold ;
		color			: <?php print("$glancebox_fg");?> ;
		background-color	: <?php print("$glancebox_bg");?> ; }

td.glancetitle { font-size	: 14px ;
		 font-weight	: bold ;
                 color              : <?php print("$glancetitle_fg");?> ; 
 		 background-color   : <?php print("$glancetitle_bg");?> ;
                 text-align         : left ; }

td.glanceitem {  font-size	: 11px ;
		 font-weight	: bold ;
                 color              : <?php print("$glanceitem_fg");?> ;
                 background-color   : <?php print("$glanceitem_bg");?> ;
                 text-align         : left ;  }

td.glancetext  { font-size          : 11px ; 
		 font-weight		: normal ;
                 color              : <?php print("$glancetext_fg");?> ;
                 background-color   : <?php print("$glancetext_bg");?> ; }

p.small        { font-size           : small                ;
                 font-family         : verdana,arial,helvetica ; }

h1.doctitle   { text-align		: left ; }

h3.frontpage    {	margin-bottom : 6px ; 
		margin-top : 6px ; 
		font-size: 16px;
		font-weight: bold;
}
h4.frontpage    {	margin-bottom : 3px ; 
		margin-top : 3px ; 
		font-size: 14px;
		font-weight: bold;
}

td.copyright  { font-size		: 11px ; 
		font-weight		: bold ; 
		color			: #333333   ;
		background-color	: #E0E0E0 ; }

td.mirror     { font-size		: 11px ; 
		font-weight		: bold ; 
		color			: #333333   ;
		background-color	: #E0E0E0 ; }

td.faq_question { font-weight		: bold ; 
		color			: #333333   ;
		background-color	: <?php print($osl_drk_grey); ?> ; }

.faq_applies  {	color		: #777777 ; 
		font-weight     : normal; }

.faq_title    { font-weight		: normal ; 
		color			: #333333   ; }

.divider    {	color		: #777777 ; 
		font-family	: Verdana, Arial, sans-serif ; 
		font-size	: 10px ; 
		font-weight     : normal; }

input.medium  { width		: 96px ; 
		height		: 15px ;
		font-size	: 10px ;
		text-align	: left ;
		text-valign	: middle ;
		padding-top	: 0px ;
		margin-top	: 0px ;
		margin-bottom	: 0px ; }

input.buttonred{background	: #C0C0C0 ;
		cursor		: hand ;
		color		: #FFFFFF ;
		height		: 1.3em ;
		font-weight	: bold ;
		padding		: 0px ;
		margin		: 0px ;
		border		: 0px none #000; }

.quotelev1 {color : #990099}
.quotelev2 {color : #ff7700}
.quotelev3 {color : #007799}
.quotelev4 {color : #95c500}

td.example { background-color : <?php print($osl_std_grey); ?>; }
<?php
if (isset($added_css)) {
    print("\n$added_css\n\ns");
}
?>
</STYLE>
