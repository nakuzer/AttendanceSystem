document.addEventListener('DOMContentLoaded', () => {
  const roleOptions = document.querySelectorAll('.role-option');
  const selectedRoleInput = document.getElementById('selectedRole');
  const signupForm = document.getElementById('signupForm');
  const passwordInput = document.getElementById('password');
  const confirmPasswordInput = document.getElementById('confirmPassword');

  roleOptions.forEach(option => {
      option.addEventListener('click', () => {
          roleOptions.forEach(el => el.classList.remove('active'));
          option.classList.add('active');
          selectedRoleInput.value = option.dataset.role;
      });
  });

  roleOptions.forEach(option => {
    option.addEventListener('click', () => {
        roleOptions.forEach(el => el.classList.remove('active'));
        option.classList.add('active');
        selectedRoleInput.value = option.dataset.role;

        // Change ID input placeholder based on selected role
        if (option.dataset.role === 'student') {
            idInput.placeholder = 'Student ID';
            courseInput.placeholder = 'Course';
            document.getElementById("submit-btn").innerText = "Generate QR code!";
        } else if (option.dataset.role === 'teacher') {
            idInput.placeholder = 'Teacher ID';
            courseInput.placeholder = 'Department';
            document.getElementById("submit-btn").innerText = "Create Account!";
        }
    });
});

  signupForm.addEventListener('submit', (e) => {
      if (passwordInput.value !== confirmPasswordInput.value) {
          e.preventDefault();
          alert('Passwords do not match');
          return;
      }

      if (passwordInput.value.length < 8) {
          e.preventDefault();
          alert('Password must be at least 8 characters long');
          return;
      }

      alert('Account created successfully!');
  });
});