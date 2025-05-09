document.addEventListener('DOMContentLoaded', () => {
    const roleOptions = document.querySelectorAll('.role-option');
    const selectedRoleInput = document.getElementById('selectedRole');
    const idInput = document.getElementById('idInput');
    const courseInput = document.getElementById('courseInput');
    const submitBtn = document.getElementById('submit-btn');
  
    function clearActiveRoles() {
      roleOptions.forEach(role => role.classList.remove('active'));
    }
  
    function setRoleUI(role) {
      selectedRoleInput.value = role;
  
      if (role === 'student') {
        idInput.placeholder = 'Student ID';
        courseInput.placeholder = 'Course';
        submitBtn.innerText = 'Generate QR code!';
      } else if (role === 'teacher') {
        idInput.placeholder = 'Teacher ID';
        courseInput.placeholder = 'Department';
        submitBtn.innerText = 'Create Account!';
      }
    }
  
    roleOptions.forEach(option => {
      option.addEventListener('click', () => {
        clearActiveRoles();
        option.classList.add('active');
        setRoleUI(option.dataset.role);
      });
    });
  });
  