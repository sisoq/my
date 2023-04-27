var userAgent = navigator.userAgent;
if (userAgent.indexOf("Chrome") != -1) {
  alert("تستخدم متصفح Chrome");
} else if (userAgent.indexOf("Safari") != -1) {
  alert("تستخدم متصفح Safari");
} else if (userAgent.indexOf("Firefox") != -1) {
  alert("تستخدم متصفح Firefox");
} else if (userAgent.indexOf("MSIE") != -1) {
  alert("تستخدم متصفح Internet Explorer");
} else {
  alert("لا يمكن الكشف عن المتصفح");
}
