function openSkill(evt, skillName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("skill");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-blue", "");
  }
  document.getElementById(skillName).style.display = "block";
  evt.currentTarget.className += " w3-blue";
}