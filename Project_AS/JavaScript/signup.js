document.addEventListener('DOMContentLoaded', () => {
  const roleOptions = document.querySelectorAll('.role-option');
  const selectedRoleInput = document.getElementById('selectedRole');
  const idInput = document.getElementById('idInput');
  const courseInput = document.getElementById('courseInput');
  const fieldInput = document.getElementById('fieldInput');
  const submitBtn = document.getElementById('submit-btn');
  const emailInput = document.getElementById('email');
  const form = document.getElementById('signupForm');

  function clearActiveRoles() {
    roleOptions.forEach(role => role.classList.remove('active'));
  }

  function setRoleUI(role) {
    selectedRoleInput.value = role;

    if (role === 'student') {
      idInput.placeholder = 'Student ID';
      courseInput.placeholder = 'Course';
      submitBtn.innerText = 'Generate QR code!';
      courseInput.style.display = 'block';
      fieldInput.style.display = 'none';
    } else if (role === 'teacher') {
      idInput.placeholder = 'Teacher ID';
      courseInput.placeholder = 'Department';
      submitBtn.innerText = 'Create Account!';
      fieldInput.style.display = 'block';
      courseInput.style.display = 'none';
    }
  }

  roleOptions.forEach(option => {
    option.addEventListener('click', () => {
      clearActiveRoles();
      option.classList.add('active');
      setRoleUI(option.dataset.role);
    });
  });

  form.addEventListener('submit', async (e) => {
    e.preventDefault();

    const formData = new FormData(form);

    try {
      const response = await fetch('../Class/registration.php', {
        method: 'POST',
        body: formData
      });

      const data = await response.json();
      alert(data.message);

      if (data.status === 'success') {
        form.reset();
        roleOptions.forEach(opt => opt.classList.remove('active'));
        selectedRoleInput.value = '';
        courseInput.style.display = 'none';
        fieldInput.style.display = 'none';
      }
    } catch (err) {
      console.error('Form submit error:', err);
      alert('Something went wrong while submitting. Please try again.');
    }
  });
});
