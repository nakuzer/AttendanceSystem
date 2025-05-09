document.addEventListener("DOMContentLoaded", ()=>{
  const roleOption = document.querySelectorAll('.role-option');
  const selectedRoleInput = document.getElementById('selectedRole');
  const welcomeMessage = document.getElementById('message');

  function clearActiveRoles(){
    roleOption.forEach(role => role.classList.remove('active'));
  }

  function setRoleUI(role){
    selectedRoleInput.value = role;

    if(role === 'student'){
      welcomeMessage.innerText = 'Welcome Student!';
    }else if(role === 'teacher'){
      welcomeMessage.innerText = 'Welcome Teacher!';
    }
    else{
      alert ("You need to select a role. Please select a role to login.");
    }
  }

  roleOption.forEach(option => {
    option.addEventListener('click', ()=>{
      clearActiveRoles();
      option.classList.add('active');
      setRoleUI(option.dataset.role);
    });
  });


});