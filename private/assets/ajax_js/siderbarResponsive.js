/* Set the width of the side navigation to 250px */
function openNav() {
  document.getElementById("mySidenav").style.width = " 200px";
  $('#siderbarResponsive').attr('onclick','closeNav()');
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  $('#siderbarResponsive').attr('onclick', 'openNav()');
}