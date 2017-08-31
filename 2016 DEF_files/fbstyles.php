
body { background-color:#eee; font-size:13px; }
.contentarea { padding:10px; text-align:left; background-color:#fff; }

/* Some bootstrap resets */
a { color: #009; text-decoration: underline; }
h1, h2, h3, h4, h5, h6, b, strong, dfn { margin-top:10px; margin-bottom:10px; }
em, i, dfn { font-style: italic; }
p { margin-top:12px; }
div, form { margin: 0; }
table { border-collapse: collapse; border-spacing:0; border:0; }
td { padding:3px; }
th { text-align:inherit; }

h1 { font-size: 24px; font-weight: bold; }
h1.smaller { font-size:20px; }
h1.teamlabel { margin-bottom:0; }
h2 { font-size: 18px; font-weight: bold; }
h3 { font-size: 15px; font-weight: bold; }

.divider { border-bottom:1px solid #999; margin-bottom:10px; }
.bold { font-weight: bold; }
.italic { font-style: italic; }
.bolditalic { font-weight: bold; font-style:italic; }
.bfstat { font-weight: bold; font-style:italic; color:#000; }
.left { text-align: left; }
.right { text-align: right; }
.center { text-align: center; }
.full { width: 100%; }
.threequarters { width:75%; }
.half { width: 50%; }
.third { width: 33%; }
.thirdplus { width: 34%; }
.twothirds { width:67%; }
.quarter { width: 25%; }
.fifth { width: 20%; }
.sixth { width: 16%; }
.twofifths { width: 40%; }
.fleft { float: left; }
.fright { float: right; }
.mright3 { margin-right:3px; }
.mleft3 { margin-left:3px; }
.mright5 { margin-right:5px; }
.mright10 { margin-right:10px; }
.mleft5 { margin-left:5px; }
.mleft10 { margin-left:10px; }
.mtop10 { margin-top:10px; }
.mbottom10 { margin-bottom:15px; }
.pright5 { padding-right:5px; }
.pleft5 { padding-left:5px; }
.clear { clear: both; height: 0; }

.smtext { font-family: Arial; font-size: 12px; }
.mdtext { font-family: Arial; font-size: 15px; }
.lgtext { font-family: Arial; font-size: 20px; }
.h1text { font-family: Arial; font-size: 24px; }
.ltblue { color: #0073ea; }
.teamlabel { font-family: Arial; font-size:24px; font-weight:bold; font-style:none; line-height:1.2; margin-top:10px; }
.smred { font-family: Arial; font-size: 12px; color: red; }
.smgray { font-family: Arial; font-size: 12px; color: #999; }
.red { color: #c00; }
.orange { color: #df7401; }
.white { color: #fff; }

.infobox { border:1px solid #ccc; background-color:#eee; margin-bottom:8px; padding:5px; }
.pagesect { margin-bottom:25px; }
.ranking { font-weight: bold; color: #ff7f00; }
.linkdivider { color:#999; margin:0 5px; }
.wtrheader { font-weight:bold; }
.wtrsubhead { padding-left:20px; }

/* Logo area */
#pagehdr { background-color:#000; padding:5px; position:relative; text-align:center; }
#logo { float:left; margin-right:10px; }
#logospan { display:block; }
#logoimg { margin:4px 0 0 0; border:0; width:245px; height:82px; }
#righthdr { margin-left: 260px; text-align:center;  }
#logoflat { margin: 8px 8px; }

#leftcol, #leftcol_wide, #leftcol_sky, .leftcol { float:left; background-color:#fff; width:100%; }
#leftcol, .leftcol { padding-right:310px; }
#leftcol_wide { padding-right:260px; }
#leftcol_sky { padding-right:170px; }
#rightcol, #rightcol_wide, #rightcol_sky, .rightcol { float:right; margin:0; padding:0; background-color:#fff; }
#rightcol, .rightcol { width:300px; margin-left:-310px; }
#rightcol_wide { width:250px; margin-left:-260px; }
#rightcol_sky { width:160px; margin-left:-170px; }

/* Custom navbar */
.navbar { border-radius:0; margin-bottom:0px; min-height:0; }
.navbar-fb { background-color:#006; color:#fff; border-color:#006; border-radius:0; }
.navbar-fb .navbar-brand { color:#eee; }
.navbar-fb .navbar-nav > li > a { color:#fff; padding:8px 12px; font-weight:bold; text-decoration:none; }
.navbar-fb .navbar-toggle { border-color:#222; background-color:#222; }
.navbar-fb .navbar-toggle .icon-bar { background-color:#fff; }
.navbar-fb .navbar-nav > li.open > a { color:#fff; }
.nav > li > a:focus, .nav > li > a:hover { background-color:#006; }
.nav .open > a, .nav .open > a:hover, .nav .open > a:focus { background-color:#006; color:#fff; }
.sub-arrow { color:#fff; }
.navbar-fb .dropdown-menu { background-color:#ccc; border-radius:0; width:300px;}
.navbar-fb .dropdown-menu > li > a { color:#006; padding:3px 12px; text-decoration:none; background-color:transparent; }
.navbar-fb .dropdown-menu > li > a:focus, .navbar-fb .dropdown-menu > li > a:hover { color:#006; background-color:#bbb; }

/* Reset z-index for dropdown menus so they appear on top of navbar (z-index=1030) */
.dropdown-menu { z-index: 1050; }

#breadcrumbs { font-size:13px; margin-bottom:10px; }

.sitealert { background-color:#c00; color:white; font-weight:bold; text-align:center; font-size:14px; margin-bottom:10px; padding:5px; }
.sitealert a { color:#fff; text-decoration:underline; }

#teamtop { margin-bottom:10px; }
#teambanner { background-color:#fff; padding:0; }
#teamsects { padding:6px; color:#fff; margin-bottom:10px; }
#teamsects a { color:#fff; text-decoration:none; margin-right:20px; display:inline-block; }

th.playercell, td.playercell { width:150px; }
th.teamcell, td.teamcell { width:190px; }
#playertop { margin-bottom:10px; }
/*#playerbanner { background-color:#ddd; padding:6px; }*/
#playerbanner { background-color:#fff; padding:0; margin-top:10px; margin-bottom:10px; }
#playerimg { border:1px solid #999; }
#playerlinks { padding:6px; color:#fff; background-color:#006; }
#playerlinks a { color:#fff; text-decoration:none; margin-right:20px; display:inline-block; }

table.statistics { width: 100%; margin: 0 auto; clear: both; border-collapse: separate; border-spacing: 0; }
table.statistics thead th, table.statistics thead td,
table.statistics tr.header th, table.statistics tr.header td { padding: 4px; border-bottom: 1px solid #666; background-color: #ddd; font-size: 12px; font-weight: bold; }
table.statistics tbody tr { background-color: white; }
table.statistics tbody th, table.statistics tbody td { padding: 4px; border-top: 1px solid #dddddd; font-size:12px; }

table.statistics.smaller tbody th, table.statistics.smaller tbody td { font-size:11px; }
/*
table.statistics tbody tr.right > th, table.statistics tbody tr.right > td { padding-left:8px; padding-right:4px; }
table.statistics tbody tr.left > th, table.statistics tbody tr.left > td { padding-right:8px; padding-left:4px; }
table.statistics tbody th.right, table.statistics tbody td.right { padding-left:8px !important; padding-right:4px !important; }
table.statistics tbody th.left, table.statistics tbody td.left { padding-right:8px !important; padding-left:4px !important; }
*/
table.statistics tbody tr:first-child th, table.statistics tbody tr:first-child td { border-top: none; }
/*table.statistics tbody tr:first-child th, table.statistics tbody tr:last-child td { border-bottom: 1px solid #666; }*/
/*table.statistics tbody tr:last-child td { border-bottom: 1px solid #ddd; }*/
table.statistics { border-bottom:1px solid #ddd; }
table.statistics tbody tr:first-child th { border-bottom: 1px solid #ddd; }
/* For grid */
table.statistics thead th, table.statistics thead td,
table.statistics tr.header th, table.statistics tr.header td { border-top: 1px solid #ccc; border-right: 1px solid #ccc; }
table.statistics thead tr th:first-child, table.statistics thead tr td:first-child { border-left: 1px solid #ccc; }
table.statistics tbody th, table.statistics tbody td { border-top: 1px solid #dddddd; border-right: 1px solid #dddddd; }
table.statistics tbody tr th:first-child, table.statistics tbody tr td:first-child { border-left: 1px solid #dddddd; }
table.statistics tbody tr:first-child th, table.statistics tbody tr:first-child td { border-top: none; }
table.statistics td.rightborder, table.statistics thead th.rightborder { border-right:1px solid #999; }
/* End grid */
table.statistics tbody tr.odd, table.statistics tbody tr.odd,
table.statistics tbody tr.row0, table.statistics tbody tr.row0 { background-color: #f9f9f9; }
table.statistics tbody tr:hover { background-color: whitesmoke; }
table.statistics tbody tr > .sorting_1, table.statistics tbody tr > .hilite { background-color: #f9f9f9; font-weight:bold; color:#000; }
table.statistics tbody tr.odd > .sorting_1, table.statistics tbody tr.odd > .hilite,
table.statistics tbody tr.row0 > .sorting_1, table.statistics tbody tr.row0 > .hilite { background-color: #f1f1f1; }
table.statistics tbody tr.even > .sorting_1, table.statistics tbody tr.even > .hilite,
table.statistics tbody tr.row1 > .sorting_1, table.statistics tbody tr.row1 > .hilite { background-color: #f9f9f9; }
table.statistics tbody tr:hover > .sorting_1,
table.statistics tbody tr:hover > .hilite,
table.statistics tbody tr.odd:hover > .sorting_1,
table.statistics tbody tr.even:hover > .sorting_1 { background-color: #eaeaea; }
.DTFC_LeftHeadWrapper { border-right: 1px solid #666; }
.DTFC_LeftBodyWrapper { border-right: 1px solid #666; }

.swipemsg { display:none; }
.scrollingTable_simple { width: 100%; overflow-x: scroll; overflow-y: visible; position: relative; }

/* Old Style Stat Table */
table.stattbl { width: 100%; border-spacing: 1px; border-collapse:separate; background-color: #e7e7e7; border:0; }
table.stattbl tr { background-color: #fff; }
table.stattbl tr.row1 { background-color: #f9f9f9; border-top: 1px solid #fff; }
table.stattbl tr.hilite { background-color: #ccc; font-weight:bold; border-top: 1px solid #fff; }
table.stattbl tr td { font-size: 11px; border: 1px solid #fff; padding: 3px; line-height:1.1; }
table.stattbl tr.row1 td { border-top: 1px solid #fff; }
table.stattbl td.hilite, table.stattbl tr.row1 td.hilite { background: #f0f0f0; font-weight: bold; }
table.stattbl tr td.tight { padding: 2px; font-size: 10px; }
table.stattbl tr.header td { background:#f0f0f0; color:#006; padding-left:3px; border-bottom:1px solid #aaa; border-left:1px solid #999; font-weight:bold; font-size:11px; }
table.stattbl tr.superhd td { background:#006; color:#fff; padding-left:3px; border-bottom:1px solid #aaa; border-left:1px solid #999; font-weight:bold; font-size:12px; }
table.stattbl tr.superhd td a { color: #fff; }
table.stattbl tr.teamhdr td { background-color: #006; color: #fff; }

div.section_1 { clear:both; }
/*div.section_1, div.section_2, div.section_3, div.section_4 { padding-bottom:8px; }*/
div.section_left, div.section_inner, div.section_right { margin-bottom:8px; }
div.section_odd, div.section_even { }
div.section_half, div.section_double { float:left; width:50%; margin:0; }
div.section_third, div.section_triple { float:left; width:33%; margin:0; }
div.section_quarter, div.section_fourth { float:left; width:25%; margin:0; }
div.section_half > div.section_left, div.section_double > div.section_left, div.section_third > div.section_left, div.section_triple > div.section_left, div.section_quarter > div.section_left { margin-right:5px; }
div.section_half > div.section_right, div.section_double > div.section_right, div.section_third > div.section_right, div.section_triple > div.section_right, div.section_quarter > div.section_right { margin-left:5px; }
div.section_third > div.section_inner, div.section_triple > div.section_inner, div.section_quarter > div.section_inner { margin-left:5px; margin-right:5px; }

#divFeatured { margin-bottom:15px; }
#divFeaturedTop { border-radius:10px 10px 0 0; background-color:#ccc; padding:10px; }
#divFeaturedBottom { border-radius:0 0 10px 10px; background-color:#000; padding:10px; color:#fff; }
#divFeaturedBottom a { color:#fff; }
.feattitle { padding:0; font-size:20px; line-height:1; margin-bottom:10px; }
.featlabel { color:#80b7f4; font-weight:bold; }

.sblinklabel { float:left; width:95px; margin-right:5px; }
div.sbgame { margin-bottom:15px; }
div.sbgminfo { text-align:center; background-color:#eee; border-bottom:1px solid #ddd; border-left:1px solid #ddd; border-right:1px solid #ddd; font-size:12px; padding:5px; }
div.sbgmstats { display:block; }
table.sbstats { margin-bottom:10px; border:0; border-spacing:0; width:100%; display:block; }
table.sbstats td { font-size: 12px; text-align:left; padding:1px; border:0; }

div.sblivegame { border: 1px solid #999; padding: 2px; margin-bottom: 10px; background-color: #fff; }
div.sblivegame .statusrow { font-weight:bold; font-size:11px; color:#006; padding:2px; }
div.sblivegame .statusrow a { color:#c00; text-decoration:none; }
div.sblivegame .postrow { font-weight:bold; font-size:12px; padding:3px; }
div.sblivegame .postrow a { text-decoration:none; }
div.sblivegame table { width:100%; border:0; border-spacing:1px; border-collapse:separate;  }
div.sblivegame table tr.smgame_tmrow { background-color: #ddd; }
div.sblivegame table td { padding: 3px; font-size: 12px; }
div.sblivegame table td.teamcol { width:70%; text-align:left; }
div.sblivegame table td.scorecol { width:30%; text-align:right; }

table.smgame { width:100%; border:0; border-spacing:1px; border-collapse:separate;  }
table.smgame tr.smgame_tmrow { background-color: #f0efea; }
table.smgame td { padding: 3px; font-size: 11px; }
.smgamebox, .smgamebox_end { float:left; border: 1px solid #ccc; width:149px; padding: 2px; }
.smgamebox { margin: 0px 8px 8px 0px; }
.smgamebox_end { margin: 0px 0px 8px 0px; }
.narrowgamebox { border: 1px solid #ccc; padding: 2px; }
.narrowboard_date { color: #000; background-color:#fff; padding: 3px; font-weight: bold; margin-bottom: 5px; clear: both;}

div.rptcontrols {}
/*
div.rptcontrols_left, div.rptcontrols_left .stackable { float:left; text-align:left; margin-bottom:10px; margin-right:5px; }
div.rptcontrols_right, div.rptcontrols_right .stackable { float:right; text-align:right; margin-bottom:10px; }
*/
div.rptcontrols_left { float:left; text-align:left; margin-bottom:10px; margin-right:5px; }
div.rptcontrols_right { float:right; text-align:right; margin-bottom:10px; }
div.rptcontrols_label { display:inline-block; width:115px; text-align:right; padding-right:10px; }
.reportOption { display:inline-block; margin:0; }
#option_limit { width:60px; }
#option_lg, #option_yr { width:75px; }
#option_group, #option_teamabb { width:100px; }
#option_conf, #option_fastatus, #option_posabb, #option_statcat { width:120px; }
#option_gametype, #option_week { width:130px; }
#option_fatype, #option_collconf { width:150px; }
#option_statmode, #option_rules { width:160px; }
#option_submit { width:auto; }

/*border #d3d3d3, bg d8d8d8*/
a.btn-footballdb { text-decoration:none; }
.btn-smxs { padding:5px 10px; font-size:12px; line-height:1.5; border-radius:3px; }
/*.btn-footballdb { color:#333; font-weight:bold; background-color:#ddd; border-color:#ddd;  }*/
.btn-footballdb { color:#333; font-weight:bold; background-color:#eee; border-color:#d3d3d3;  } 
.btn-footballdb:hover, .btn-footballdb:focus, .btn-footballdb:active, .btn-footballdb.active, .open .dropdown-toggle.btn-footballdb { color:#333; background-color:#ddd; border-color:#ddd; } 
.btn-footballdb:active, .btn-footballdb.active, .open .dropdown-toggle.btn-footballdb { background-image:none; color:#0073ea; } 
.btn-footballdb .badge { color:#ddd; background-color:#333; }
.btn-group > .btn-footballdb.btn-playernav { border-radius:0; }

.btn-footballdb.disabled, .btn-footballdb[disabled], fieldset[disabled] .btn-footballdb, 
.btn-footballdb.disabled:hover, .btn-footballdb[disabled]:hover, fieldset[disabled] .btn-footballdb:hover, 
.btn-footballdb.disabled:focus, .btn-footballdb[disabled]:focus, fieldset[disabled] .btn-footballdb:focus, 
.btn-footballdb.disabled:active, .btn-footballdb[disabled]:active, fieldset[disabled] .btn-footballdb:active, 
.btn-footballdb.disabled.active, .btn-footballdb[disabled].active, 
fieldset[disabled] .btn-footballdb.active { background-color:#ddd; border-color:#ddd; }

#fbrelated { margin-bottom:8px; padding:0; } 
#fbreltop { -webkit-border-radius:6px 6px 0 0; -moz-border-radius:6px 6px 0 0; border-radius:6px 6px 0 0; color:#fff; padding:4px; font-size:14px; position:relative; background:url("/images/modbakdk.png") no-repeat 6px 6px #006; padding-left:28px } 
#fbrelbody { -webkit-border-radius:0 0 6px 6px; -moz-border-radius:0 0 6px 6px; border-radius:0 0 6px 6px; background-color:#ccc; padding:6px; line-height:1.2; }

div.statldrs { background-color:#666; color:#fff; -webkit-border-radius:8px; -moz-border-radius:8px; border-radius:8px; padding:8px; }
div.statldrs a { color:#ccf; text-decoration:none; font-weight:bold; }
div.statldrs table.ldrtable { width:100%; border-collapse:collapse; border:0; }
div.statldrs table.ldrtable tr td { padding:4px 0; border:0; color:#fff; }
div.statldrs table.ldrtable tr td.ldrname { text-align:left; }
div.statldrs table.ldrtable tr td.ldrvalue { text-align:right; font-weight: bold; }
div.statldrs .ldrlabel { font-weight:bold; font-size:16px; border-bottom:1px solid #ccc; margin-bottom:4px; }
div.statldrs .viewall { text-align:right; margin-top:4px; }
div.statldrs .viewall a { font-weight:normal; color:#fff;}

div.ltleaders { background-color:#d9d9d9; -webkit-border-radius:8px; -moz-border-radius:8px; border-radius:8px; padding:8px; }
div.ltleaders a { text-decoration:none; font-weight:normal; }
div.ltleaders table.ldrtable { width:100%; border-collapse:collapse; border:0; }
div.ltleaders table.ldrtable tr td { padding:4px 0; border:0; }
div.ltleaders table.ldrtable tr td.ldrname { text-align:left; }
div.ltleaders table.ldrtable tr td.ldrvalue { text-align:right; font-weight: bold; }
div.ltleaders .ldrlabel { font-weight:bold; font-size:16px; border-bottom:1px solid #999; margin-bottom:4px; }
div.ltleaders .viewall { text-align:right; margin-top:4px; }
div.ltleaders .viewall a { font-weight:normal; }
.ltleaders_box { padding:0; margin:0; background-color:auto; }

div.lastnext { background-color:#d9d9d9; -webkit-border-radius:8px; -moz-border-radius:8px; border-radius:8px; padding:8px; }
div.lastnext a { text-decoration:none; font-weight:normal; }
div.lastnext table.ldrtable { width:100%; border-collapse:collapse; border:0; }
div.lastnext table.ldrtable tr td { padding:4px 0; border:0; }
div.lastnext table.ldrtable tr td.ldrname { text-align:left; }
div.lastnext table.ldrtable tr td.ldrvalue { text-align:right; font-weight: bold; }
div.lastnext .ldrlabel { font-weight:bold; font-size:16px; border-bottom:1px solid #999; margin-bottom:4px; }
div.lastnext .viewall { text-align:right; margin-top:4px; }
div.lastnext .viewall a { font-weight:normal; }

.wlcontainer { background-color:white; border:1px solid #999; padding:10px; }
.wlimage { border:1px solid #999; }
.wlheader { font-weight:bold; font-size:18px; }
table.weekldrs { width: 100%; margin: 0 auto; clear: both; border-collapse: separate; border-spacing: 0; }
table.weekldrs thead th, table.weekldrs thead td,
table.weekldrs tr.header th, table.weekldrs tr.header td { padding: 5px 0; font-size: 12px; font-weight: bold; }
table.weekldrs tbody th, table.weekldrs tbody td { padding: 5px 0; border-top: 1px solid #ccc; font-size:12px; }

.weekldrs_container { background-color:white; border:1px solid #999; padding:10px; }
.weekldrs_header { font-weight:bold; font-size:18px; padding:0; margin-bottom:5px; margin-top:0; }
.weekldrs_image { border:1px solid #999; }
.weekldrs_left { float:left; margin-right:10px; }
.weekldrs_right { overflow:hidden; }
.weekldrs_tbl { width: 100%; margin: 0 auto; clear: both; border-collapse: separate; border-spacing: 0; }
.weekldrs_tbl thead th, .weekldrs_tbl thead td,
.weekldrs_tbl tr.header th, .weekldrs_tbl tr.header td { padding: 5px 0; font-size: 12px; font-weight: bold; }
.weekldrs_tbl tbody th, .weekldrs_tbl tbody td { padding: 6px 3px; font-size:13px; }
.weekldrs_tbl tbody tr.row0 { background-color: #eee; }

.dkmodule { margin-bottom:10px; padding:10px; border-radius:6px; -webkit-border-radius:12px; -moz-border-radius:12px; background-color:#666; color:#fff; }
.dkmodule .modulehdr { font-weight: bold; font-size:16px; margin-bottom:10px; border-bottom:1px solid #fff; padding-bottom:5px; background:url("/images/modbakdk.png") no-repeat 3px 3px; padding-left:28px }
.dkmodule .modulebody { clear:both; }
/*.dkmodule .modulesect { font-weight:bold; color:#FF7F3B; }*/
.dkmodule .modulesect { font-weight:bold; color:#99CCFF; }
/*.dkmodule .modulesect { font-weight:bold; color:#4fcdff; }*/
/*.dkmodule .modulesect { font-weight:bold; color:#c8c8ff; }*/
.dkmodule a { color:#fff; }
.dkmodule td { color:#fff; }

.fbwidget { background-color:#fff; width:auto; margin-bottom:10px; }
.fbwidget .dlsheader { font-weight:bold; margin:4px 0 6px 0; }
.fbwidget .dlscontrols { margin-bottom:5px; font-size:14px; font-weight:bold; color:#999; }
.fbwidget a { color:#3383bb; text-decoration:none; font-weight:bold; }
.fbwidget a.selconf { color:#000; }
.fbwidget table { width:100%; }
.fbwidget tr.dlsrows { border-bottom:1px dotted #999; }
#matchupFinder { padding:0; }

.ltbluediv { background-color:#3383bb; color:#fff; padding:4px; margin-bottom:8px; }
.ltbluediv .divheader { font-size:15px; font-weight:bold; }
.ltbluediv a { color:#fff; text-decoration:underline; font-weight:bold; }

/* -- Footer --------------------------------------------------- */

#footer { background-color:#000; color:#fff; padding:20px 20px 30px 20px; font-size:12px; }
#footer .footer-links-container { background: #000 url(/images/ball-horiz.gif) no-repeat; margin-bottom:10px; min-height:82px; }
#footer .footer-links { display:table; position:relative; color:#fff; }
#footer .column { display:table-cell; vertical-align:top; padding-right:75px; }
#footer ul { margin:0; padding:0;  list-style-type: none; }
#footer a { font-weight: bold; color: #fff; }
#footer .section { font-size:14px; font-weight: bold; color: #00bfff; }

/* -- Stat Search --------------------------------------------------- */

#ss_results {}
#divQuery { border:1px solid #ccc; background-color:#eee; border-radius:10px; padding:10px; margin-bottom:10px; }
#divQueryForm { border-bottom:2px solid #ccc; margin-bottom:10px; }
.divToggle { margin-bottom:8px; }
.filterDiv { margin-left: 10px; margin-bottom:8px; }
#divFilter, #divOptions { margin-bottom:8px; }
table.filterTable { width:100%; border-spacing:0; border:0; }
table.filterTable td { font-family:Arial; font-size:12px; padding:2px; }
table.filterTable td.filterToggle { width:22px; }
table.filterTable td.filterLabel { width: 100px; font-weight:bold; }
table.filterTable td.filterInput { }

.ssfoldable { border:0; font-weight:bold; text-decoration:none; color:#666; padding-left:16px; }
.ssexpanded { background: url(/images/expanded.png) 0 50% no-repeat; }
.sscollapsed { background: url(/images/collapsed.png) 0 50% no-repeat; }
.waiting { border:1px solid #ccc; height:40px; background-color:#eee; text-align:center; padding-top:10px; }
.changescope { text-align:center; }

.inputPlayer { width:350px; }
.inputCollege { width:250px; }
.inputDate { width:100px; }

/* Autocomplete */
i.teamhist { color: #999; }
.achilite { color: #0073ea; }
.ui-autocomplete { max-height: 200px; overflow-y: scroll; overflow-x: hidden; }
.ui-autocomplete-loading { background: white url('/images/ui-anim_basic_16x16.gif') right center no-repeat; }

/* Team specific color schemes */
.tm0 { background-color:#006; }
.tm1 { background-color:#BF093A; }
.tm2 { background-color:#BF093A; }
.tm3 { background-color:#360651; }
.tm4 { background-color:#194B8C; }
.tm5 { background-color:#009FD7; }
.tm6 { background-color:#001945; }
.tm7 { background-color:#ED7E11; }
.tm8 { background-color:#4C230E; }
.tm9 { background-color:#001945; }
.tm10 { background-color:#001945; }
.tm11 { background-color:#0069B3; }
.tm12 { background-color:#003B2A; }
.tm13 { background-color:#001945; }
.tm14 { background-color:#24396A; }
.tm15 { background-color:#007883; }
.tm16 { background-color:#BF093A; }
.tm17 { background-color:#007883; }
.tm18 { background-color:#360651; }
.tm19 { background-color:#243E82; }
.tm20 { background-color:#9F8F50; }
.tm21 { background-color:#03497F; }
.tm22 { background-color:#003B2A; }
.tm23 { background-color:#000000; }
.tm24 { background-color:#003B2A; }
.tm25 { background-color:#000000; }
.tm26 { background-color:#001945; }
.tm27 { background-color:#BF093A; }
.tm28 { background-color:#002F40; }
.tm29 { background-color:#001945; }
.tm30 { background-color:#726568; }
.tm31 { background-color:#194B8C; }
.tm32 { background-color:#79002E; }

@media screen and (min-width: 768px) {
  #logoflat { display:none; }
  .navbar-fixed-top { position:relative; top:auto; }
  .navbar-collapse { max-height:none; }
  .navbar-fb .navbar-nav > li > a > .caret { display:none; }
  .nav .dropdown-toggle .caret { display:none; }
  body { margin: 0; }
}

@media screen and (min-width: 1024px) {
  .container { width:1002px; padding-left:0; padding-right:0; }
}

@media screen and (min-width: 1200px) {
  .container { width:1170px; padding-left:15px; padding-right:15px; }
}

@media screen and (max-width: 991px) {
  /*#rightcol, #rightcol_wide, #rightcol_sky, .rightcol { display:none; }*/
  #rightcol, #rightcol_wide, #rightcol_sky, .rightcol { float:none; width:100%; margin:0; padding:0; }
  #leftcol, #leftcol_wide, #leftcol_sky, .leftcol { float:none; width:100%; margin:0; padding:0; }
  #fbrelated { display: none; }
  .rightcol_ad { float:left; margin-right:10px; margin-bottom:10px; }
  .fbwidget { float:left; width:50%; }
  #matchupFinder { padding-left:10px; }
}

@media screen and (max-width: 767px) {
  body { padding-top:60px; background-color:#fff; }
  #breadcrumbs { display:none; }
  .contentarea { padding:0; }
  #footer .footer-links { display: none; }
  .navbar-fb { background-color:#000; border-color:#006; }
  .collapsing, .in { background-color:#006; }

  .navbar-fb .navbar-nav { margin:0 -15px; }
  .navbar-fb .navbar-nav > li > a { border-bottom:1px solid #003; border-top:1px solid #009; }
  .navbar-fb .navbar-nav > li.open > a { color:#006; }
  .navbar-fb .navbar-nav .open .dropdown-menu > li > a { padding: 5px 12px; color:#006; border-top:1px solid #ddd; border-bottom:1px solid #bbb; }
  .nav .open > a, .nav .open > a:hover, .nav .open > a:focus { background-color:#999; color:#006; border-bottom:1px solid #666; border-top:1px solid #999; }
  .navbar-nav .open .dropdown-menu { background-color:#ccc; border-radius:0; padding:0; }
  .navbar-fb .navbar-nav li > a > .navbar-toggle { border-color:#666; background-color:#666; }
  .navbar-fb .navbar-nav .open .dropdown-menu .dropdown-submenu > li > a { padding-left:40px; }

  .rightcol_ad { display:none; }
  #divFeatured { margin-bottom:10px; }
  #divFeaturedTop { border-radius:0; background-color:#fff; padding:0; }
  #divFeaturedBottom { border-radius:0; }
  .fbwidget { float:none; width:auto; }
  #matchupFinder { padding:0; }

  div.section_half { float:none; width:auto; margin-bottom:15px; }
  div.section_half > div.section_left, div.section_half > div.section_right { margin-left:0px; margin-right:0px; }
  div.section_third { float:none; width:auto; margin-bottom:15px; }
  div.section_third > div.section_left, div.section_third > div.section_inner, div.section_third > div.section_right { margin-left:0px; margin-right:0px; }

  div.section_triple { float:left; width:50%; }
  div.section_triple > div.section_left, div.section_triple > div.section_inner, div.section_triple > div.section_right { margin-left:0px; margin-right:0px; }
  div.section_triple.section_1 { clear:none; }
  div.section_triple.section_even { clear:both; }
  div.section_triple > div.section_odd { margin-left:5px; }
  div.section_triple > div.section_even { margin-right:5px; }

  div.section_quarter { float:left; width:50%; }
  div.section_quarter > div.section_left, div.section_quarter > div.section_inner, div.section_quarter > div.section_right { margin-left:0px; margin-right:0px; }
  div.section_quarter.section_1 { clear:none; }
  div.section_quarter.section_3 { clear:both; }
  div.section_quarter.section_even { clear:both; }
  div.section_quarter > div.section_odd { margin-left:5px; }
  div.section_quarter > div.section_even { margin-right:5px; }

/*  div.rptcontrols_left.stackable, div.rptcontrols_right.stackable { float:none; text-align:center; }*/
  div.rptcontrols.stackable > div.rptcontrols_left, div.rptcontrols.stackable > div.rptcontrols_right { float:none; text-align:center; margin-right:0; }
  .reportOption { float:left; padding-right:10px; margin-bottom:5px; }
  #option_limit, #option_lg, #option_yr, #option_conf, #option_gametype, #option_statmode, #option_group,
   #option_statcat, #option_teamabb, #option_posabb, #option_fatype, #option_fastatus, #option_collconf, #option_week, #option_rules { width:50%; }
  #option_submit { clear:both; width:100%; text-align:center; }
  /*.btn-smxs { padding:1px 5px; font-size:12px; line-height:1.5; border-radius:3px; }*/
  .btn-smxs { padding:2px 5px; font-size:12px; line-height:1.5; border-radius:3px; }

  .wtrsubhead { padding-left:0; color:#666; }
  div.ltleaders, div.lastnext { background-color:transparent; -webkit-border-radius:0; -moz-border-radius:0; border-radius:0; padding:0; }
  .ltleaders_box { background-color:#d9d9d9; -webkit-border-radius:8px; -moz-border-radius:8px; border-radius:8px; padding:8px; }

}

/* Vertically Center Bootstrap Modal */
.modal { text-align: center; }
@media screen and (min-width: 768px) { 
  .modal:before {
    display: inline-block;
    vertical-align: middle;
    content: " ";
    height: 100%;
  }
}

.modal-dialog {
  display: inline-block;
  text-align: left;
  vertical-align: middle;
}
@media screen and (max-width: 767px) { 
 .modal-dialog { display:block; }
}

/* Custom Modal */

.modal-header { border-radius:5px 5px 0 0; background-color:#0020c2; color:#ddd; padding:0 15px; }
.modal-header .close { margin-top:3px; }
.modal-footer { border-radius:0 0 5px 5px; background-color:#0020c2; color:#ddd;}
.modal-player-body { height:auto; }
.close { color: #ccc; opacity:1; }
.close:focus, .close:hover { color:#fff; opacity:1; }
#pdialog_header { margin-bottom:15px; position:relative; }
.pdialog_name { font-size:24px; font-weight:bold; line-height:1.2; }
#pdialog_buttons { position:relative; right:auto; bottom:auto; margin-top:10px; }
.pdialog_tblwrapper { max-height:250px; overflow-y:auto; border:1px solid #ccc; min-height:0.01%; overflow-x:auto; }

@media (max-width:991px){
 .pdialog_tblwrapper {
    border: 1px solid #ddd;
    margin-bottom: 15px;
    overflow-y: auto;
    max-height:none;
    width: 100%;
 }
}

@media (min-width:992px){
 .modal-player { width:750px; }
 .modal-player-body { height:450px; }
 #pdialog_buttons { position:absolute; right:0; bottom:0; }
}

/* Tablet */
@media screen and (min-width: 768px) and (max-width: 991px) {
  /*#logospan { height:100px; }*/
  #logoimg { width:auto; height:100px; margin:0; }
  #righthdr { margin-left: 300px; }
}
