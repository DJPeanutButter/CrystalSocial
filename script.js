function validate(objCaller){
  // Compare user to users in DB
  // Compare email to emails in DB
  // Compare pass/conf values
  
  let user = document.getElementById("user");
  let email = document.getElementById("email");
  
  for (let i=0;i<arrUsers.length;++i)
    if (arrUsers[i]===user.value)
      document.getElementById("feedback-user").styles.display = "true";
  
  return true;
}