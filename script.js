function validate(objCaller){
  // Compare user to users in DB
  // Compare email to emails in DB
  // Compare pass/conf values
  let user = document.getElementById("user");
  let email = document.getElementById("email");
  let fReturn = true;
  
  document.getElementById("feedback-user").style.display = "none";
  document.getElementById("feedback-email").style.display = "none";
  document.getElementById("feedback-pass").style.display = "none";
  document.getElementById("feedback-email-alerts").style.display = "none";
  document.getElementById("feedback-coder").style.display = "none";
  document.getElementById("feedback-designer").style.display = "none";
  document.getElementById("feedback-content-creator").style.display = "none";
  document.getElementById("feedback-wiki-creator").style.display = "none";
  
  for (let i=0;i<arrUsers.length;++i){
    if (arrUsers[i]===user.value){
      document.getElementById("feedback-user").style.display = "inline";
      fReturn = false;
    }
    if (arrEmails[i]===email.value){
      document.getElementById("feedback-email").style.display = "inline";
      fReturn = false;
    }
  }
  
  if (document.getElementById("pass").value !== document.getElementById("conf").value){
    document.getElementById("feedback-pass").style.display = "inline";
    fReturn = false;
  }
  
  if (!document.getElementById("emailAlerts").checked){
    document.getElementById("feedback-email-alerts").style.display = "inline";
  }
  
  if (!document.getElementById("coder").checked){
    document.getElementById("feedback-coder").style.display = "inline";
  }
  
  if (!document.getElementById("designer").checked){
    document.getElementById("feedback-designer").style.display = "inline";
  }
  
  if (!document.getElementById("contentCreator").checked){
    document.getElementById("feedback-content-creator").style.display = "inline";
  }
  
  if (!document.getElementById("wikiCreator").checked){
    document.getElementById("feedback-wiki-creator").style.display = "inline";
  }
  
  return fReturn;
}