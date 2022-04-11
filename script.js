function validate(objCaller){
  // Compare user to users in DB
  // Compare email to emails in DB
  // Compare pass/conf values
  
  let user = document.getElementById("user");
  let email = document.getElementById("email");
  
  arrUsers.forEach(x => if(x===user.value) console.log("!"));
  
  return true;
}