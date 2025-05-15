<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danny Dinglasa Jr. | Portfolio</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Particles background -->
    <div id="particles-js"></div>
    
    <!-- Header -->
    <header>
        <div class="container flex items-center justify-between">
            <div class="logo">Dev <i class="fas fa-code"></i> Danny</div>
            <nav>
                <button class="hamburger" id="menuBtn">
                    <i class="fas fa-bars"></i>
                </button>
                <ul id="navMenu">
                    <li><a href="#home" class="active">Home</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container hero-content">
            <p class="sub-heading">Hi, my name is</p>
            <h1>Danny Dinglasa Jr.</h1>
            <div class="typing-container">
                <h2 class="typing-text">I build amazing web experiences.</h2>
            </div>
            <p class="hero-text">
                I'm a Full Stack Network Web-App Software Developer, Cloud Data Science - Database Administrator, Machine Learning Engineer and DevOps Cybersecurity Analyst specializing in building exceptional digital experiences.
            </p>
            <a href="#contact" class="btn">Get In Touch</a>
        </div>
    </section>
    
    <!-- Skills Section -->
    <section class="section" id="skills">
        <div class="container">
            <h2 class="section-heading fade-in">Technical Skills</h2>
            <div class="skills-container">
                <!-- Frontend Card -->
                <div class="skill-card fade-in">
                    <div class="skill-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="skill-title">Frontend Development</h3>
                    <ul class="skill-list">
                        <li>HTML5, CSS3, JavaScript (ES6+)</li>
                        <li>React.js, Vue.js, Angular</li>
                        <li>Tailwind CSS, Bootstrap, SASS</li>
                        <li>Responsive Design & Web Accessibility</li>
                    </ul>
                    <div class="progress-label">
                        <span>HTML5 & CSS3</span>
                        <span>95%</span>
                    </div>
                    <div class="progress-container">
                        <div class="progress-bar" data-width="95"></div>
                    </div>
                    <div class="progress-label">
                        <span>JavaScript</span>
                        <span>90%</span>
                    </div>
                    <div class="progress-container">
                        <div class="progress-bar" data-width="90"></div>
                    </div>
                    <div class="progress-label">
                        <span>React</span>
                        <span>85%</span>
                    </div>
                    <div class="progress-container">
                        <div class="progress-bar" data-width="85"></div>
                    </div>
                </div>
                
                <!-- Backend Card -->
                <div class="skill-card fade-in">
                    <div class="skill-icon">
                        <i class="fas fa-server"></i>
                    </div>
                    <h3 class="skill-title">Backend Development</h3>
                    <ul class="skill-list">
                        <li>Node.js, Express, Django, Flask</li>
                        <li>PHP, Laravel, ASP.NET Core</li>
                        <li>RESTful APIs & GraphQL</li>
                        <li>Microservices Architecture</li>
                    </ul>
                    <div class="progress-label">
                        <span>Node.js & Express</span>
                        <span>90%</span>
                    </div>
                    <div class="progress-container">
                        <div class="progress-bar" data-width="90"></div>
                    </div>
                    <div class="progress-label">
                        <span>Python (Django/Flask)</span>
                        <span>85%</span>
                    </div>
                    <div class="progress-container">
                        <div class="progress-bar" data-width="85"></div>
                    </div>
                    <div class="progress-label">
                        <span>API Development</span>
                        <span>95%</span>
                    </div>
                    <div class="progress-container">
                        <div class="progress-bar" data-width="95"></div>
                    </div>
                </div>
                
                <!-- Database Card -->
                <div class="skill-card fade-in">
                    <div class="skill-icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3 class="skill-title">Databases</h3>
                    <ul class="skill-list">
                        <li>MySQL, PostgreSQL, Microsoft SQL Server</li>
                        <li>MongoDB, Firebase, DynamoDB</li>
                        <li>Redis, Elasticsearch</li>
                        <li>Database Administration & Optimization</li>
                    </ul>
                    <div class="progress-label">
                        <span>SQL Databases</span>
                        <span>95%</span>
                    </div>
                    <div class="progress-container">
                        <div class="progress-bar" data-width="95"></div>
                    </div>
                    <div class="progress-label">
                        <span>NoSQL Databases</span>
                        <span>85%</span>
                    </div>
                    <div class="progress-container">
                        <div class="progress-bar" data-width="85"></div>
                    </div>
                    <div class="progress-label">
                        <span>Database Administration</span>
                        <span>90%</span>
                    </div>
                    <div class="progress-container">
                        <div class="progress-bar" data-width="90"></div>
                    </div>
                </div>
                
                <!-- Cloud & DevOps Card -->
                <div class="skill-card fade-in">
                    <div class="skill-icon">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <h3 class="skill-title">Cloud & DevOps</h3>
                    <ul class="skill-list">
                        <li>AWS, Azure, Google Cloud Platform</li>
                        <li>Docker, Kubernetes, Terraform</li>
                        <li>CI/CD (Jenkins, GitHub Actions)</li>
                        <li>Infrastructure as Code</li>
                    </ul>
                    <div class="progress-label">
                        <span>AWS Services</span>
                        <span>90%</span>
                    </div>
                    <div class="progress-container">
                        <div class="progress-bar" data-width="90"></div>
                    </div>
                    <div class="progress-label">
                        <span>Docker & Kubernetes</span>
                        <span>85%</span>
                    </div>
                    <div class="progress-container">
                        <div class="progress-bar" data-width="85"></div>
                    </div>
                    <div class="progress-label">
                        <span>CI/CD Pipelines</span>
                        <span>80%</span>
                    </div>
                    <div class="progress-container">
                        <div class="progress-bar" data-width="80"></div>
                    </div>
                </div>
                
                <!-- Data Science Card -->
                <div class="skill-card fade-in">
                    <div class="skill-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="skill-title">Data Science & Machine Learning</h3>
                    <ul class="skill-list">
                        <li>Python (NumPy, Pandas, Scikit-learn)</li>
                        <li>TensorFlow, PyTorch, Keras</li>
                        <li>Data Visualization (Matplotlib, D3.js)</li>
                        <li>Big Data Technologies (Hadoop, Spark)</li>
                    </ul>
                    <div class="progress-label">
                        <span>Python for Data Science</span>
                        <span>90%</span>
                    </div>
                    <div class="progress-container">
                        <div class="progress-bar" data-width="90"></div>
                    </div>
                    <div class="progress-label">
                        <span>Machine Learning</span>
                        <span>85%</span>
                    </div>
                    <div class="progress-container">
                        <div class="progress-bar" data-width="85"></div>
                    </div>
                    <div class="progress-label">
                        <span>Data Visualization</span>
                        <span>80%</span>
                    </div>
                    <div class="progress-container">
                        <div class="progress-bar" data-width="80"></div>
                    </div>
                </div>
                
                <!-- Cybersecurity Card -->
                <div class="skill-card fade-in">
                    <div class="skill-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="skill-title">Cybersecurity</h3>
                    <ul class="skill-list">
                        <li>Network Security & Penetration Testing</li>
                        <li>Security Auditing & Compliance</li>
                        <li>OWASP Security Practices</li>
                        <li>Encryption & Authentication Systems</li>
                    </ul>
                    <div class="progress-label">
                        <span>Network Security</span>
                        <span>85%</span>
                    </div>
                    <div class="progress-container">
                        <div class="progress-bar" data-width="85"></div>
                    </div>
                    <div class="progress-label">
                        <span>Web Application Security</span>
                        <span>90%</span>
                    </div>
                    <div class="progress-container">
                        <div class="progress-bar" data-width="90"></div>
                    </div>
                    <div class="progress-label">
                        <span>Security Best Practices</span>
                        <span>95%</span>
                    </div>
                    <div class="progress-container">
                        <div class="progress-bar" data-width="95"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Services Section -->
    <section class="section" id="services">
        <div class="container">
            <h2 class="section-heading fade-in">Services</h2>
            <div class="services-container">
                <!-- Service 1 -->
                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-desktop"></i>
                    </div>
                    <h3 class="service-title">Web Development</h3>
                    <p class="service-description">
                        Custom web application development with responsive design and modern frameworks. From simple websites to complex applications, I deliver solutions that meet your business needs.
                    </p>
                    <a href="#contact" class="btn">Hire Me</a>
                </div>
                
                <!-- Service 2 -->
                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="service-title">API Development</h3>
                    <p class="service-description">
                        Designing and developing RESTful APIs and GraphQL endpoints for seamless integration between your applications and third-party services.
                    </p>
                    <a href="#contact" class="btn">Hire Me</a>
                </div>
                
                <!-- Service 3 -->
                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3 class="service-title">Database Design & Management</h3>
                    <p class="service-description">
                        Expert database architecture, optimization, and administration services. I design efficient database systems that ensure data integrity and optimal performance.
                    </p>
                    <a href="#contact" class="btn">Hire Me</a>
                </div>
                
                <!-- Service 4 -->
                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <h3 class="service-title">Cloud Solutions</h3>
                    <p class="service-description">
                        Deployment and management of applications on AWS, Azure, and Google Cloud. Implementing scalable architecture and ensuring optimal cost management.
                    </p>
                    <a href="#contact" class="btn">Hire Me</a>
                </div>
                
                <!-- Service 5 -->
                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3 class="service-title">Data Science & Analytics</h3>
                    <p class="service-description">
                        Leverage the power of your data with custom analytics, machine learning models, and visualization solutions that provide actionable insights for your business decisions.
                    </p>
                    <a href="#contact" class="btn">Hire Me</a>
                </div>
                
                <!-- Service 6 -->
                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="service-title">Cybersecurity Services</h3>
                    <p class="service-description">
                        Comprehensive security assessments, penetration testing, and implementation of security best practices to protect your digital assets from threats.
                    </p>
                    <a href="#contact" class="btn">Hire Me</a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Projects Section -->
    <section class="section" id="projects">
        <div class="container">
            <h2 class="section-heading fade-in">Featured Projects</h2>
            <div class="projects-container">
                <!-- Project 1 -->
                <div class="project-card fade-in">
                    <div class="project-image">
                        <img src="/api/placeholder/400/200" alt="E-commerce Platform">
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">E-commerce Platform</h3>
                        <p class="project-description">
                            A full-stack e-commerce solution with real-time inventory, payment processing, and an admin dashboard.
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag">React</span>
                            <span class="tech-tag">Node.js</span>
                            <span class="tech-tag">MongoDB</span>
                            <span class="tech-tag">AWS</span>
                        </div>
                        <div class="project-links">
                            <a href="#" class="project-link"><i class="fab fa-github"></i></a>
                            <a href="#" class="project-link"><i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                </div>
                
                
                <!-- Project 2 -->
                <div class="project-card fade-in">
                    <div class="project-image">
                        <img src="/api/placeholder/400/200" alt="AI-Powered Analytics Dashboard">
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">AI-Powered Analytics Dashboard</h3>
                        <p class="project-description">
                            Real-time data visualization platform with machine learning predictions for business metrics.
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag">Python</span>
                            <span class="tech-tag">TensorFlow</span>
                            <span class="tech-tag">D3.js</span>
                            <span class="tech-tag">Flask</span>
                        </div>
                        <div class="project-links">
                            <a href="#" class="project-link"><i class="fab fa-github"></i></a>
                            <a href="#" class="project-link"><i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Project 3 -->
                <div class="project-card fade-in">
                    <div class="project-image">
                        <img src="/api/placeholder/400/200" alt="Cloud Infrastructure Automation">
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">Cloud Infrastructure Automation</h3>
                        <p class="project-description">
                            DevOps solution for automating deployment and scaling of microservices on Kubernetes clusters.
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag">Docker</span>
                            <span class="tech-tag">Kubernetes</span>
                            <span class="tech-tag">Terraform</span>
                            <span class="tech-tag">AWS</span>
                        </div>
                        <div class="project-links">
                            <a href="#" class="project-link"><i class="fab fa-github"></i></a>
                            <a href="#" class="project-link"><i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Project 4 -->
                <div class="project-card fade-in">
                    <div class="project-image">
                        <img src="/api/placeholder/400/200" alt="Secure Banking Application">
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">Secure Banking Application</h3>
                        <p class="project-description">
                            Mobile-first banking platform with advanced encryption and multi-factor authentication.
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag">Angular</span>
                            <span class="tech-tag">Java Spring</span>
                            <span class="tech-tag">PostgreSQL</span>
                            <span class="tech-tag">OAuth</span>
                        </div>
                        <div class="project-links">
                            <a href="#" class="project-link"><i class="fab fa-github"></i></a>
                            <a href="#" class="project-link"><i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center" style="margin-top: 2rem; text-align: center;">
                <a href="#" class="btn" id="loadMoreProjects">View More Projects</a>
            </div>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section class="section" id="contact">
        <div class="container">
            <h2 class="section-heading fade-in">Get In Touch</h2>
            <div class="contact-form fade-in">
                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" id="name" class="form-control" placeholder="Your Name">
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" class="form-control" placeholder="Your Email">
                </div>
                <div class="form-group">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" id="subject" class="form-control" placeholder="Subject">
                </div>
                <div class="form-group">
                    <label for="message" class="form-label">Message</label>
                    <textarea id="message" class="form-control" placeholder="Your Message"></textarea>
                </div>
                <button type="submit" class="btn" id="sendMessage">Send Message</button>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="social-links">
                    <a href="#" class="social-link"><i class="fab fa-github"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-medium"></i></a>
                </div>
                <p class="copyright">© 2025 Danny Dinglasa Jr. | All Rights Reserved</p>
            </div>
        </div>
    </footer>
    
    <!-- Particles JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>
    <script src="JavaScripts/script.js"></script>
</body>
</html>