<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Professional CMS</title>
  <style>
    :root {
      --primary: #4a6fa5;
      --secondary: #166088;
      --accent: #4fc3f7;
      --light: #f5f5f5;
      --dark: #333;
      --success: #66bb6a;
      --danger: #ef5350;
      --warning: #ffca28;
      --sidebar-width: 250px;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background-color: #f9f9f9;
      color: var(--dark);
    }

    .dashboard {
      display: flex;
      min-height: 100vh;
    }

    .sidebar {
      width: var(--sidebar-width);
      background-color: var(--dark);
      color: white;
      padding: 20px 0;
      position: fixed;
      height: 100vh;
      overflow-y: auto;
    }

    .sidebar-header {
      padding: 0 20px 20px;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .sidebar-header h2 {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .nav-menu {
      padding: 20px 0;
    }

    .nav-item {
      padding: 12px 20px;
      display: flex;
      align-items: center;
      gap: 10px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .nav-item:hover {
      background-color: rgba(255, 255, 255, 0.1);
    }

    .nav-item.active {
      background-color: var(--primary);
      border-left: 4px solid var(--accent);
    }

    .nav-item i {
      width: 24px;
      text-align: center;
    }

    .main-content {
      flex: 1;
      margin-left: var(--sidebar-width);
      padding: 20px;
    }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 0 20px;
      border-bottom: 1px solid #eee;
      margin-bottom: 20px;
    }

    .header h1 {
      color: var(--primary);
    }

    .user-menu {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .user-menu img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      object-fit: cover;
    }

    .card {
      background: white;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
      padding: 20px;
      margin-bottom: 20px;
    }

    .card-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 15px;
    }

    .btn {
      padding: 8px 16px;
      border-radius: 4px;
      border: none;
      cursor: pointer;
      font-weight: 500;
      transition: background-color 0.3s;
    }

    .btn-primary {
      background-color: var(--primary);
      color: white;
    }

    .btn-primary:hover {
      background-color: var(--secondary);
    }

    .btn-success {
      background-color: var(--success);
      color: white;
    }

    .btn-danger {
      background-color: var(--danger);
      color: white;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: 500;
    }

    .form-control {
      width: 100%;
      padding: 10px;
      border-radius: 4px;
      border: 1px solid #ddd;
    }

    .form-control:focus {
      outline: none;
      border-color: var(--primary);
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th,
    td {
      padding: 12px 15px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f5f5f5;
    }

    .content-wrapper {
      display: none;
    }

    .content-wrapper.active {
      display: block;
    }

    .skill-tag {
      display: inline-block;
      background-color: #e3f2fd;
      color: var(--primary);
      padding: 6px 12px;
      border-radius: 20px;
      margin-right: 8px;
      margin-bottom: 8px;
    }

    .skill-level {
      width: 100%;
      height: 8px;
      background-color: #eee;
      border-radius: 4px;
      margin-top: 5px;
    }

    .skill-level-fill {
      height: 100%;
      background-color: var(--primary);
      border-radius: 4px;
    }

    .project-card {
      display: flex;
      margin-bottom: 15px;
      border: 1px solid #eee;
      border-radius: 8px;
      overflow: hidden;
    }

    .project-image {
      width: 120px;
      background-color: #eee;
    }

    .project-details {
      padding: 15px;
      flex: 1;
    }

    .action-buttons {
      display: flex;
      gap: 10px;
    }

    .badge {
      display: inline-block;
      padding: 4px 8px;
      border-radius: 4px;
      font-size: 0.8rem;
      margin-right: 5px;
    }

    .badge-primary {
      background-color: var(--primary);
      color: white;
    }

    .badge-warning {
      background-color: var(--warning);
      color: var(--dark);
    }

    .contact-item {
      display: flex;
      align-items: center;
      padding: 10px;
      border-bottom: 1px solid #eee;
    }

    .contact-item i {
      margin-right: 10px;
      color: var(--primary);
    }

    .services-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 20px;
    }

    .service-card {
      background: white;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
      padding: 20px;
      position: relative;
    }

    .service-card .icon {
      font-size: 2rem;
      color: var(--primary);
      margin-bottom: 15px;
    }

    .pricing {
      font-weight: bold;
      color: var(--primary);
      margin-top: 10px;
    }
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
  <div class="dashboard">
    <aside class="sidebar">
      <div class="sidebar-header">
        <h2><i class="fas fa-user-circle"></i> My CMS</h2>
      </div>
      <nav class="nav-menu">
        <div class="nav-item active" data-content="dashboard">
          <i class="fas fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </div>
        <div class="nav-item" data-content="skills">
          <i class="fas fa-tools"></i>
          <span>Skills Manager</span>
        </div>
        <div class="nav-item" data-content="projects">
          <i class="fas fa-project-diagram"></i>
          <span>Projects</span>
        </div>
        <div class="nav-item" data-content="about">
          <i class="fas fa-user"></i>
          <span>About Me</span>
        </div>
        <div class="nav-item" data-content="contacts">
          <i class="fas fa-address-book"></i>
          <span>Contacts</span>
        </div>
        <div class="nav-item" data-content="services">
          <i class="fas fa-concierge-bell"></i>
          <span>Services</span>
        </div>
        <div class="nav-item">
          <i class="fas fa-cog"></i>
          <span>Settings</span>
        </div>
      </nav>
    </aside>

    <main class="main-content">
      <div class="header">
        <h1>Professional CMS Dashboard</h1>
        <div class="user-menu">
          <span>Admin</span>
          <img src="/api/placeholder/40/40" alt="User Avatar">
        </div>
      </div>

      <!-- Dashboard -->
      <div class="content-wrapper active" id="dashboard">
        <div class="card">
          <div class="card-header">
            <h2>Welcome to Your CMS</h2>
          </div>
          <p>This is your professional profile management system. Use the sidebar to navigate between different sections.</p>
          <div style="margin-top: 20px; display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 20px;">
            <div style="background-color: #e3f2fd; padding: 20px; border-radius: 8px; text-align: center;">
              <i class="fas fa-tools" style="font-size: 2rem; color: var(--primary); margin-bottom: 10px;"></i>
              <h3>10 Skills</h3>
            </div>
            <div style="background-color: #fff8e1; padding: 20px; border-radius: 8px; text-align: center;">
              <i class="fas fa-project-diagram" style="font-size: 2rem; color: #ff9800; margin-bottom: 10px;"></i>
              <h3>5 Projects</h3>
            </div>
            <div style="background-color: #e8f5e9; padding: 20px; border-radius: 8px; text-align: center;">
              <i class="fas fa-concierge-bell" style="font-size: 2rem; color: #4caf50; margin-bottom: 10px;"></i>
              <h3>3 Services</h3>
            </div>
            <div style="background-color: #ffebee; padding: 20px; border-radius: 8px; text-align: center;">
              <i class="fas fa-address-book" style="font-size: 2rem; color: #f44336; margin-bottom: 10px;"></i>
              <h3>4 Contacts</h3>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <h2>Quick Actions</h2>
          </div>
          <div style="display: flex; flex-wrap: wrap; gap: 10px; margin-top: 10px;">
            <button class="btn btn-primary"><i class="fas fa-plus"></i> Add New Skill</button>
            <button class="btn btn-primary"><i class="fas fa-plus"></i> Add New Project</button>
            <button class="btn btn-primary"><i class="fas fa-plus"></i> Add New Service</button>
            <button class="btn btn-primary"><i class="fas fa-edit"></i> Edit About Me</button>
          </div>
        </div>
      </div>

      <!-- Skills Manager -->
      <div class="content-wrapper" id="skills">
        <div class="card">
          <div class="card-header">
            <h2>Skills Manager</h2>
            <button class="btn btn-primary"><i class="fas fa-plus"></i> Add New Skill</button>
          </div>
          <table>
            <thead>
              <tr>
                <th>Skill Name</th>
                <th>Category</th>
                <th>Proficiency</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>JavaScript</td>
                <td>Programming</td>
                <td>
                  <div class="skill-level">
                    <div class="skill-level-fill" style="width: 90%"></div>
                  </div>
                </td>
                <td>
                  <div class="action-buttons">
                    <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                  </div>
                </td>
              </tr>
              <tr>
                <td>React</td>
                <td>Frontend</td>
                <td>
                  <div class="skill-level">
                    <div class="skill-level-fill" style="width: 85%"></div>
                  </div>
                </td>
                <td>
                  <div class="action-buttons">
                    <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Node.js</td>
                <td>Backend</td>
                <td>
                  <div class="skill-level">
                    <div class="skill-level-fill" style="width: 80%"></div>
                  </div>
                </td>
                <td>
                  <div class="action-buttons">
                    <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                  </div>
                </td>
              </tr>
              <tr>
                <td>UI/UX Design</td>
                <td>Design</td>
                <td>
                  <div class="skill-level">
                    <div class="skill-level-fill" style="width: 75%"></div>
                  </div>
                </td>
                <td>
                  <div class="action-buttons">
                    <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="card">
          <div class="card-header">
            <h2>Add/Edit Skill</h2>
          </div>
          <form>
            <div class="form-group">
              <label for="skill-name">Skill Name</label>
              <input type="text" id="skill-name" class="form-control" placeholder="e.g. JavaScript">
            </div>
            <div class="form-group">
              <label for="skill-category">Category</label>
              <select id="skill-category" class="form-control">
                <option value="">Select Category</option>
                <option value="programming">Programming</option>
                <option value="design">Design</option>
                <option value="frontend">Frontend</option>
                <option value="backend">Backend</option>
                <option value="database">Database</option>
                <option value="devops">DevOps</option>
                <option value="soft-skills">Soft Skills</option>
              </select>
            </div>
            <div class="form-group">
              <label for="skill-proficiency">Proficiency (0-100%)</label>
              <input type="range" id="skill-proficiency" class="form-control" min="0" max="100" value="75">
              <output for="skill-proficiency">75%</output>
            </div>
            <div class="form-group">
              <label for="skill-description">Description (Optional)</label>
              <textarea id="skill-description" class="form-control" rows="3" placeholder="Brief description of your experience with this skill"></textarea>
            </div>
            <button class="btn btn-primary">Save Skill</button>
          </form>
        </div>
      </div>

      <!-- Projects -->
      <div class="content-wrapper" id="projects">
        <div class="card">
          <div class="card-header">
            <h2>Projects</h2>
            <button class="btn btn-primary"><i class="fas fa-plus"></i> Add New Project</button>
          </div>

          <div class="project-card">
            <div class="project-image">
              <img src="/api/placeholder/120/120" alt="Project Image">
            </div>
            <div class="project-details">
              <h3>E-commerce Website</h3>
              <p>A full-stack e-commerce platform with payment integration and admin dashboard.</p>
              <div style="margin: 10px 0;">
                <span class="badge badge-primary">React</span>
                <span class="badge badge-primary">Node.js</span>
                <span class="badge badge-primary">MongoDB</span>
              </div>
              <div class="action-buttons">
                <button class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button>
                <button class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
                <button class="btn btn-success"><i class="fas fa-external-link-alt"></i> View Live</button>
              </div>
            </div>
          </div>

          <div class="project-card">
            <div class="project-image">
              <img src="/api/placeholder/120/120" alt="Project Image">
            </div>
            <div class="project-details">
              <h3>Portfolio Website</h3>
              <p>A personal portfolio website showcasing skills, projects and services.</p>
              <div style="margin: 10px 0;">
                <span class="badge badge-primary">HTML/CSS</span>
                <span class="badge badge-primary">JavaScript</span>
                <span class="badge badge-primary">UI/UX</span>
              </div>
              <div class="action-buttons">
                <button class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button>
                <button class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
                <button class="btn btn-success"><i class="fas fa-external-link-alt"></i> View Live</button>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <h2>Add/Edit Project</h2>
          </div>
          <form>
            <div class="form-group">
              <label for="project-title">Project Title</label>
              <input type="text" id="project-title" class="form-control" placeholder="e.g. E-commerce Website">
            </div>
            <div class="form-group">
              <label for="project-description">Description</label>
              <textarea id="project-description" class="form-control" rows="3" placeholder="Brief description of the project"></textarea>
            </div>
            <div class="form-group">
              <label for="project-image">Project Image</label>
              <input type="file" id="project-image" class="form-control">
            </div>
            <div class="form-group">
              <label for="project-technologies">Technologies Used</label>
              <input type="text" id="project-technologies" class="form-control" placeholder="e.g. React, Node.js, MongoDB">
              <small>Separate technologies with commas</small>
            </div>
            <div class="form-group">
              <label for="project-url">Project URL</label>
              <input type="url" id="project-url" class="form-control" placeholder="https://...">
            </div>
            <div class="form-group">
              <label for="project-github">GitHub URL (Optional)</label>
              <input type="url" id="project-github" class="form-control" placeholder="https://github.com/...">
            </div>
            <button class="btn btn-primary">Save Project</button>
          </form>
        </div>
      </div>

      <!-- About Me -->
      <div class="content-wrapper" id="about">
        <div class="card">
          <div class="card-header">
            <h2>About Me</h2>
          </div>
          <form>
            <div class="form-group">
              <label for="profile-name">Full Name</label>
              <input type="text" id="profile-name" class="form-control" value="John Doe">
            </div>
            <div class="form-group">
              <label for="profile-title">Professional Title</label>
              <input type="text" id="profile-title" class="form-control" value="Full Stack Developer">
            </div>
            <div class="form-group">
              <label for="profile-image">Profile Image</label>
              <input type="file" id="profile-image" class="form-control">
              <div style="margin-top: 10px; display: flex; align-items: center;">
                <img src="/api/placeholder/100/100" alt="Profile Image" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover;">
                <button class="btn btn-danger" style="margin-left: 10px;"><i class="fas fa-trash"></i> Remove</button>
              </div>
            </div>
            <div class="form-group">
              <label for="profile-bio">Bio</label>
              <textarea id="profile-bio" class="form-control" rows="5">I am a passionate full stack developer with over 5 years of experience building web applications. I specialize in JavaScript technologies like React, Node.js and have experience with database systems like MongoDB and MySQL.</textarea>
            </div>
            <div class="form-group">
              <label for="profile-location">Location</label>
              <input type="text" id="profile-location" class="form-control" value="New York, NY">
            </div>
            <div class="form-group">
              <label for="profile-website">Website</label>
              <input type="url" id="profile-website" class="form-control" value="https://johndoe.com">
            </div>
            <button class="btn btn-primary">Save Profile</button>
          </form>
        </div>

        <div class="card">
          <div class="card-header">
            <h2>Education</h2>
            <button class="btn btn-primary"><i class="fas fa-plus"></i> Add Education</button>
          </div>
          <table>
            <thead>
              <tr>
                <th>Degree</th>
                <th>Institution</th>
                <th>Year</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>BS Computer Science</td>
                <td>University of Technology</td>
                <td>2015-2019</td>
                <td>
                  <div class="action-buttons">
                    <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                  </div>
                </td>
              </tr>
              <tr>
                <td>MS Software Engineering</td>
                <td>Tech Institute</td>
                <td>2019-2021</td>
                <td>
                  <div class="action-buttons">
                    <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="card">
          <div class="card-header">
            <h2>Experience</h2>
            <button class="btn btn-primary"><i class="fas fa-plus"></i> Add Experience</button>
          </div>
          <table>
            <thead>
              <tr>
                <th>Position</th>
                <th>Company</th>
                <th>Duration</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Frontend Developer</td>
                <td>Tech Solutions Inc.</td>
                <td>2019-2021</td>
                <td>
                  <div class="action-buttons">
                    <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Full Stack Developer</td>
                <td>Web Innovations</td>
                <td>2021-Present</td>
                <td>
                  <div class="action-buttons">
                    <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="card">
          <div class="card-header">
            <h2>Contact Form Settings</h2>
          </div>
          <form>
            <div class="form-group">
              <label for="form-email">Form Submission Email</label>
              <input type="email" id="form-email" class="form-control" value="contact@johndoe.com">
              <small>Where contact form submissions will be sent</small>
            </div>
            <div class="form-group">
              <label>Form Fields</label>
              <div style="margin: 10px 0;">
                <div style="display: flex; align-items: center; margin-bottom: 10px;">
                  <input type="checkbox" id="field-name" checked>
                  <label for="field-name" style="margin-left: 10px; margin-bottom: 0;">Name</label>
                  <select style="margin-left: auto; padding: 5px;">
                    <option value="required">Required</option>
                    <option value="optional">Optional</option>
                  </select>
                </div>
                <div style="display: flex; align-items: center; margin-bottom: 10px;">
                  <input type="checkbox" id="field-email" checked>
                  <label for="field-email" style="margin-left: 10px; margin-bottom: 0;">Email</label>
                  <select style="margin-left: auto; padding: 5px;">
                    <option value="required">Required</option>
                    <option value="optional">Optional</option>
                  </select>
                </div>
                <div style="display: flex; align-items: center; margin-bottom: 10px;">
                  <input type="checkbox" id="field-subject" checked>
                  <label for="field-subject" style="margin-left: 10px; margin-bottom: 0;">Subject</label>
                  <select style="margin-left: auto; padding: 5px;">
                    <option value="required">Required</option>
                    <option value="optional">Optional</option>
                  </select>
                </div>
                <div style="display: flex; align-items: center; margin-bottom: 10px;">
                  <input type="checkbox" id="field-message" checked>
                  <label for="field-message" style="margin-left: 10px; margin-bottom: 0;">Message</label>
                  <select style="margin-left: auto; padding: 5px;">
                    <option value="required">Required</option>
                    <option value="optional">Optional</option>
                  </select>
                </div>
                <div style="display: flex; align-items: center; margin-bottom: 10px;">
                  <input type="checkbox" id="field-phone">
                  <label for="field-phone" style="margin-left: 10px; margin-bottom: 0;">Phone</label>
                  <select style="margin-left: auto; padding: 5px;">
                    <option value="optional">Optional</option>
                    <option value="required">Required</option>
                  </select>
                </div>
              </div>
              <button type="button" class="btn btn-primary" style="margin-bottom: 10px;"><i class="fas fa-plus"></i> Add Custom Field</button>
            </div>
            <div class="form-group">
              <label for="form-thankyou">Thank You Message</label>
              <textarea id="form-thankyou" class="form-control" rows="2">Thank you for contacting me. I will get back to you as soon as possible.</textarea>
            </div>
            <div class="form-group">
              <label for="form-captcha">Spam Protection</label>
              <div style="margin: 10px 0;">
                <div>
                  <input type="checkbox" id="form-captcha" checked>
                  <label for="form-captcha" style="margin-left: 10px;">Enable CAPTCHA</label>
                </div>
                <div style="margin-top: 10px;">
                  <input type="checkbox" id="form-honeypot" checked>
                  <label for="form-honeypot" style="margin-left: 10px;">Enable Honeypot</label>
                </div>
              </div>
            </div>
            <button class="btn btn-primary">Save Form Settings</button>
          </form>
        </div>
      </div>

      <!-- Services -->
      <div class="content-wrapper" id="services">
        <div class="card">
          <div class="card-header">
            <h2>Services</h2>
            <button class="btn btn-primary"><i class="fas fa-plus"></i> Add New Service</button>
          </div>
          <div class="services-grid">
            <div class="service-card">
              <div class="icon"><i class="fas fa-laptop-code"></i></div>
              <h3>Web Development</h3>
              <p>Custom website development using modern technologies and frameworks. Responsive design, performance optimization, and SEO-friendly structure.</p>
              <div class="pricing">Starting at $1,000</div>
              <div class="action-buttons" style="margin-top: 15px;">
                <button class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button>
                <button class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
              </div>
            </div>
            <div class="service-card">
              <div class="icon"><i class="fas fa-mobile-alt"></i></div>
              <h3>Mobile App Development</h3>
              <p>Native and cross-platform mobile application development for iOS and Android. User-friendly interfaces and seamless functionality.</p>
              <div class="pricing">Starting at $2,500</div>
              <div class="action-buttons" style="margin-top: 15px;">
                <button class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button>
                <button class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
              </div>
            </div>
            <div class="service-card">
              <div class="icon"><i class="fas fa-palette"></i></div>
              <h3>UI/UX Design</h3>
              <p>User interface and experience design for web and mobile applications. Wireframing, prototyping, and visual design with a focus on usability.</p>
              <div class="pricing">Starting at $800</div>
              <div class="action-buttons" style="margin-top: 15px;">
                <button class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button>
                <button class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <h2>Add/Edit Service</h2>
          </div>
          <form>
            <div class="form-group">
              <label for="service-title">Service Title</label>
              <input type="text" id="service-title" class="form-control" placeholder="e.g. Web Development">
            </div>
            <div class="form-group">
              <label for="service-icon">Icon</label>
              <select id="service-icon" class="form-control">
                <option value="">Select Icon</option>
                <option value="laptop-code">💻 Laptop/Code</option>
                <option value="mobile-alt">📱 Mobile</option>
                <option value="palette">🎨 Design</option>
                <option value="code">⌨️ Code</option>
                <option value="server">🖥️ Server</option>
                <option value="database">🗄️ Database</option>
                <option value="search">🔍 SEO</option>
                <option value="chart-line">📈 Analytics</option>
              </select>
            </div>
            <div class="form-group">
              <label for="service-description">Description</label>
              <textarea id="service-description" class="form-control" rows="4" placeholder="Describe the service you offer"></textarea>
            </div>
            <div class="form-group">
              <label for="service-price">Starting Price</label>
              <div style="display: flex; align-items: center;">
                <span style="margin-right: 10px;">$</span>
                <input type="number" id="service-price" class="form-control" placeholder="e.g. 1000">
              </div>
            </div>
            <div class="form-group">
              <label for="service-features">Key Features</label>
              <textarea id="service-features" class="form-control" rows="3" placeholder="List the key features of this service, one per line"></textarea>
            </div>
            <div class="form-group">
              <label>Service Tiers</label>
              <div style="border: 1px solid #ddd; padding: 15px; margin: 10px 0; border-radius: 4px;">
                <h4>Basic</h4>
                <div style="display: flex; align-items: center; margin: 10px 0;">
                  <span style="margin-right: 10px;">$</span>
                  <input type="number" class="form-control" placeholder="Price" value="1000">
                </div>
                <textarea class="form-control" rows="2" placeholder="Features included in this tier">Basic website with up to 5 pages, responsive design, contact form.</textarea>
              </div>
              <div style="border: 1px solid #ddd; padding: 15px; margin: 10px 0; border-radius: 4px;">
                <h4>Standard</h4>
                <div style="display: flex; align-items: center; margin: 10px 0;">
                  <span style="margin-right: 10px;">$</span>
                  <input type="number" class="form-control" placeholder="Price" value="2000">
                </div>
                <textarea class="form-control" rows="2" placeholder="Features included in this tier">Up to 10 pages, responsive design, contact form, basic SEO, blog integration.</textarea>
              </div>
              <div style="border: 1px solid #ddd; padding: 15px; margin: 10px 0; border-radius: 4px;">
                <h4>Premium</h4>
                <div style="display: flex; align-items: center; margin: 10px 0;">
                  <span style="margin-right: 10px;">$</span>
                  <input type="number" class="form-control" placeholder="Price" value="3500">
                </div>
                <textarea class="form-control" rows="2" placeholder="Features included in this tier">Unlimited pages, responsive design, contact form, advanced SEO, blog, e-commerce functionality, maintenance.</textarea>
              </div>
              <button type="button" class="btn btn-primary"><i class="fas fa-plus"></i> Add Tier</button>
            </div>
            <button class="btn btn-primary">Save Service</button>
          </form>
        </div>
      </div>
    </main>
  </div>
  <!-- Contacts -->
  <div class="content-wrapper" id="contacts">
    <div class="card">
      <div class="card-header">
        <h2>Contact Information</h2>
      </div>
      <form>
        <div class="form-group">
          <label for="contact-email">Email</label>
          <input type="email" id="contact-email" class="form-control" value="john.doe@example.com">
        </div>
        <div class="form-group">
          <label for="contact-phone">Phone</label>
          <input type="tel" id="contact-phone" class="form-control" value="+1 (555) 123-4567">
        </div>
        <div class="form-group">
          <label for="contact-address">Address</label>
          <textarea id="contact-address" class="form-control" rows="2">123 Tech Street, New York, NY 10001, USA</textarea>
        </div>
        <button class="btn btn-primary">Save Contact Info</button>
      </form>
    </div>

    <div class="card">
      <div class="card-header">
        <h2>Social Media</h2>
        <button class="btn btn-primary">
          <i class="fas fa-plus"></i> Add Social Media
        </button>
      </div>
      <table>
        <thead>
          <tr>
            <th>Platform</th>
            <th>URL</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><i class="fab fa-linkedin"></i> LinkedIn</td>
            <td>https://linkedin.com/in/johndoe</td>
            <td>
              <div class="action-buttons">
                <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
              </div>
            </td>
          </tr>
          <tr>
            <td><i class="fab fa-github"></i> GitHub</td>
            <td>https://github.com/johndoe</td>
            <td>
              <div class="action-buttons">
                <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
              </div>
            </td>
          </tr>
          <tr>
            <td><i class="fab fa-twitter"></i> Twitter</td>
            <td>https://twitter.com/johndoe</td>
            <td>
              <div class="action-buttons">
                <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
              </div>
            </td>
          </tr>
          <tr>
            <td><i class="fab fa-instagram"></i> Instagram</td>
            <td>https://instagram.com/johndoe</td>
            <td>
              <div class="action-buttons">
                <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>


    <script>
      // Tab Navigation
      document.querySelectorAll('.nav-item').forEach(item => {
        item.addEventListener('click', () => {
          // Remove active class from all nav items
          document.querySelectorAll('.nav-item').forEach(navItem => {
            navItem.classList.remove('active');
          });

          // Add active class to clicked nav item
          item.classList.add('active');

          // Hide all content wrappers
          document.querySelectorAll('.content-wrapper').forEach(content => {
            content.classList.remove('active');
          });

          // Show the corresponding content wrapper
          const contentId = item.getAttribute('data-content');
          if (contentId) {
            document.getElementById(contentId).classList.add('active');
          }
        });
      });

      // Range input display
      const rangeInput = document.getElementById('skill-proficiency');
      const rangeOutput = document.querySelector('output[for="skill-proficiency"]');

      if (rangeInput && rangeOutput) {
        rangeInput.addEventListener('input', () => {
          rangeOutput.textContent = rangeInput.value + '%';
        });
      }
    </script>
</body>

</html>