<?php
// eTemplates for Application 'calendar', generated by etemplate.dump() 2004-10-08 18:04

/* $Id$ */

$templ_data[] = array('name' => 'calendar.freetimesearch','template' => '','lang' => '','group' => '0','version' => '1.0.1.001','data' => 'a:7:{i:0;a:0:{}i:1;a:2:{s:1:"A";a:3:{s:4:"type";s:5:"label";s:4:"span";s:9:",size120b";s:5:"label";s:15:"Freetime Search";}s:1:"B";a:4:{s:4:"type";s:5:"label";s:4:"span";s:5:",ired";s:7:"no_lang";s:1:"1";s:4:"name";s:3:"msg";}}i:2;a:2:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:5:"label";s:17:"Startdate / -time";}s:1:"B";a:3:{s:4:"type";s:9:"date-time";s:4:"name";s:5:"start";s:4:"help";s:33:"Startdate and -time of the search";}}i:3;a:2:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:5:"label";s:8:"Duration";}s:1:"B";a:6:{s:4:"type";s:4:"hbox";s:4:"size";s:1:"4";i:1;a:4:{s:4:"type";s:13:"select-number";s:4:"size";s:5:",0,12";s:4:"name";s:10:"duration_h";s:4:"help";s:23:"Duration of the meeting";}i:2;a:5:{s:4:"type";s:13:"select-number";s:4:"size";s:8:",0,59,05";s:5:"label";s:1:":";s:4:"name";s:12:"duration_min";s:4:"help";s:19:"Timeframe to search";}i:3;a:2:{s:4:"type";s:5:"label";s:5:"label";s:18:"or Enddate / -time";}i:4;a:3:{s:4:"type";s:9:"date-time";s:4:"name";s:3:"end";s:4:"help";s:57:"Enddate / -time of the meeting, eg. for more then one day";}}}i:4;a:2:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:5:"label";s:9:"Timeframe";}s:1:"B";a:7:{s:4:"type";s:4:"hbox";s:4:"size";s:1:"5";i:1;a:3:{s:4:"type";s:13:"date-houronly";s:4:"name";s:10:"start_time";s:4:"help";s:19:"Timeframe to search";}i:2;a:2:{s:4:"type";s:5:"label";s:5:"label";s:3:"til";}i:3;a:3:{s:4:"type";s:13:"date-houronly";s:4:"name";s:8:"end_time";s:4:"help";s:19:"Timeframe to search";}i:4;a:2:{s:4:"type";s:5:"label";s:5:"label";s:8:"Weekdays";}i:5;a:4:{s:4:"type";s:10:"select-dow";s:4:"size";s:1:"3";s:4:"name";s:8:"weekdays";s:4:"help";s:25:"Weekdays to use in search";}}}i:5;a:2:{s:1:"A";a:4:{s:4:"type";s:6:"button";s:5:"label";s:10:"New search";s:4:"name";s:6:"search";s:4:"help";s:36:"new search with the above parameters";}s:1:"B";a:4:{s:4:"type";s:6:"select";s:7:"no_lang";s:1:"1";s:4:"name";s:13:"search_window";s:4:"help";s:34:"how far to search (from startdate)";}}i:6;a:2:{s:1:"A";a:4:{s:4:"type";s:8:"template";s:4:"size";s:8:"freetime";s:4:"span";s:3:"all";s:4:"name";s:4:"rows";}s:1:"B";a:1:{s:4:"type";s:5:"label";}}}','size' => '','style' => '.size120b { text-size: 120%; font-weight: bold; }
.ired { color: red; font-style: italic; }','modified' => '1097251203',);

$templ_data[] = array('name' => 'calendar.freetimesearch.rows','template' => '','lang' => '','group' => '0','version' => '1.0.1.001','data' => 'a:3:{i:0;a:2:{s:2:"c1";s:2:"th";s:2:"c2";s:3:"row";}i:1;a:4:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:5:"label";s:4:"Date";}s:1:"B";a:2:{s:4:"type";s:5:"label";s:5:"label";s:4:"Time";}s:1:"C";a:2:{s:4:"type";s:5:"label";s:5:"label";s:6:"Select";}s:1:"D";a:2:{s:4:"type";s:5:"label";s:5:"label";s:7:"Enddate";}}i:2;a:4:{s:1:"A";a:4:{s:4:"type";s:4:"date";s:4:"size";s:3:",16";s:4:"name";s:13:"${row}[start]";s:8:"readonly";s:1:"1";}s:1:"B";a:4:{s:4:"type";s:6:"select";s:7:"no_lang";s:1:"1";s:4:"name";s:13:"${row}[start]";s:4:"help";s:13:"select a time";}s:1:"C";a:4:{s:4:"type";s:6:"button";s:5:"label";s:6:"Select";s:4:"name";s:12:"select[$row]";s:4:"help";s:41:"use the selected time and close the popup";}s:1:"D";a:3:{s:4:"type";s:9:"date-time";s:4:"name";s:11:"${row}[end]";s:8:"readonly";s:1:"1";}}}','size' => '','style' => '','modified' => '1097183756',);

