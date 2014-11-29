// cc is the function doing the job of counting characters
function cc() {

  //retrieve text submitted by user into variable x
  var x = document.getElementById("para").value;

  // trim trailing and starting whitespaces
  x = x.trim();

  alert(x.length);
}
