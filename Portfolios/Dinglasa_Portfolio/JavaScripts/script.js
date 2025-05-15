// Particles.js initialization
particlesJS('particles-js', {
  particles: {
    number: {
      value: 100,
      density: {
        enable: true,
        value_area: 800,
      },
    },
    color: {
      value: '#64ffda',
    },
    shape: {
      type: 'circle',
      stroke: {
        width: 0,
        color: '#000000',
      },
    },
    opacity: {
      value: 0.5,
      random: false,
      anim: {
        enable: false,
        speed: 1,
        opacity_min: 0.1,
        sync: false,
      },
    },
    size: {
      value: 3,
      random: true,
      anim: {
        enable: false,
        speed: 40,
        size_min: 0.1,
        sync: false,
      },
    },
    line_linked: {
      enable: true,
      distance: 150,
      color: '#64ffda',
      opacity: 0.3,
      width: 1,
    },
    move: {
      enable: true,
      speed: 3,
      direction: 'none',
      random: false,
      straight: false,
      out_mode: 'out',
      bounce: true,
      attract: {
        enable: false,
        rotateX: 600,
        rotateY: 1200,
      },
    },
  },
  interactivity: {
    detect_on: 'canvas',
    events: {
      onhover: {
        enable: true,
        mode: 'grab',
      },
      onclick: {
        enable: true,
        mode: 'push',
      },
      resize: true,
    },
    modes: {
      grab: {
        distance: 140,
        line_linked: {
          opacity: 1,
        },
      },
      bubble: {
        distance: 400,
        size: 40,
        duration: 2,
        opacity: 8,
        speed: 3,
      },
      repulse: {
        distance: 200,
        duration: 0.4,
      },
      push: {
        particles_nb: 4,
      },
      remove: {
        particles_nb: 2,
      },
    },
  },
  retina_detect: true,
});

// Navigation active class
const navLinks = document.querySelectorAll('nav a');
const sections = document.querySelectorAll('section');

window.addEventListener('scroll', () => {
  let current = '';
  sections.forEach((section) => {
    const sectionTop = section.offsetTop;
    const sectionHeight = section.clientHeight;
    if (pageYOffset >= sectionTop - sectionHeight / 3) {
      current = section.getAttribute('id');
    }
  });

  navLinks.forEach((link) => {
    link.classList.remove('active');
    if (link.getAttribute('href').substring(1) === current) {
      link.classList.add('active');
    }
  });
});

// Mobile menu toggle
const menuBtn = document.getElementById('menuBtn');
const navMenu = document.getElementById('navMenu');

menuBtn.addEventListener('click', () => {
  navMenu.classList.toggle('active');
  const icon = menuBtn.querySelector('i');
  if (icon.classList.contains('fa-bars')) {
    icon.classList.remove('fa-bars');
    icon.classList.add('fa-times');
  } else {
    icon.classList.remove('fa-times');
    icon.classList.add('fa-bars');
  }
});

// Close mobile menu when clicking on a link
navMenu.querySelectorAll('a').forEach((link) => {
  link.addEventListener('click', () => {
    navMenu.classList.remove('active');
    const icon = menuBtn.querySelector('i');
    icon.classList.remove('fa-times');
    icon.classList.add('fa-bars');
  });
});

// Progress bars animation
const progressBars = document.querySelectorAll('.progress-bar');

const animateProgressBars = () => {
  progressBars.forEach((bar) => {
    const width = bar.getAttribute('data-width');
    bar.style.width = width + '%';
  });
};

// Scroll animation
const fadeElements = document.querySelectorAll('.fade-in');

const fadeInOnScroll = () => {
  fadeElements.forEach((element) => {
    const elementTop = element.getBoundingClientRect().top;
    const elementBottom = element.getBoundingClientRect().bottom;

    if (elementTop < window.innerHeight - 100 && elementBottom > 0) {
      element.classList.add('visible');
    }
  });
};

// Initialize animations
window.addEventListener('load', () => {
  fadeInOnScroll();
  setTimeout(animateProgressBars, 500);
});

window.addEventListener('scroll', fadeInOnScroll);

// Typing animation
const typingTexts = document.querySelectorAll('.typing-text');
typingTexts.forEach((text) => {
  text.style.width = '0';
  setTimeout(() => {
    text.style.width = '100%';
  }, 500);
});

// Form submission
const contactForm = document.querySelector('.contact-form');
const sendButton = document.getElementById('sendMessage');

sendButton.addEventListener('click', (e) => {
  e.preventDefault();

  const name = document.getElementById('name').value;
  const email = document.getElementById('email').value;
  const subject = document.getElementById('subject').value;
  const message = document.getElementById('message').value;

  if (!name || !email || !subject || !message) {
    alert('Please fill in all fields.');
    return;
  }

  // Normally you would send the data to a server here
  // For demo purposes, we'll just show a success message
  alert('Message sent successfully! I will get back to you soon.');
  contactForm.reset();
});

// Load more projects functionality
const loadMoreButton = document.getElementById('loadMoreProjects');
let projectsVisible = 4;

loadMoreButton.addEventListener('click', (e) => {
  e.preventDefault();

  // This would typically fetch more projects from a database
  // For demo purposes, we'll add some placeholder projects
  const projectsContainer = document.querySelector('.projects-container');

  // Add new project cards (4 more)
  for (let i = 0; i < 4; i++) {
    const projectCard = document.createElement('div');
    projectCard.className = 'project-card fade-in';

    projectCard.innerHTML = `
                    <div class="project-image">
                        <img src="/api/placeholder/400/200" alt="Project">
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">Project ${
                          projectsVisible + i + 1
                        }</h3>
                        <p class="project-description">
                            A description of this amazing project and the technologies used to build it.
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag">React</span>
                            <span class="tech-tag">Node.js</span>
                            <span class="tech-tag">MongoDB</span>
                        </div>
                        <div class="project-links">
                            <a href="#" class="project-link"><i class="fab fa-github"></i></a>
                            <a href="#" class="project-link"><i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                `;

    projectsContainer.appendChild(projectCard);
  }

  projectsVisible += 4;

  // After adding a few sets, disable the button
  if (projectsVisible >= 12) {
    loadMoreButton.textContent = 'No More Projects';
    loadMoreButton.disabled = true;
    loadMoreButton.style.opacity = '0.5';
    loadMoreButton.style.cursor = 'not-allowed';
  }

  // Trigger fade-in animation for new elements
  fadeInOnScroll();
});

// Skills filtering (advanced interaction)
const skillCards = document.querySelectorAll('.skill-card');

// Create filter buttons (programmatically)
const skillsContainer = document.querySelector('#skills .container');
const filterContainer = document.createElement('div');
filterContainer.className = 'filter-container';
filterContainer.style.display = 'flex';
filterContainer.style.justifyContent = 'center';
filterContainer.style.gap = '1rem';
filterContainer.style.marginBottom = '2rem';

const filters = ['All', 'Frontend', 'Backend', 'Data', 'Cloud', 'Security'];

filters.forEach((filter) => {
  const button = document.createElement('button');
  button.className = 'btn';
  button.textContent = filter;
  button.addEventListener('click', () => {
    // Remove active class from all buttons
    filterContainer.querySelectorAll('.btn').forEach((btn) => {
      btn.style.background = 'transparent';
    });

    // Add active class to clicked button
    button.style.background = 'rgba(100, 255, 218, 0.1)';

    // Filter skill cards
    skillCards.forEach((card) => {
      if (filter === 'All') {
        card.style.display = 'block';
      } else {
        const cardTitle = card
          .querySelector('.skill-title')
          .textContent.toLowerCase();

        if (
          cardTitle.includes(filter.toLowerCase()) ||
          (filter === 'Data' && cardTitle.includes('data')) ||
          (filter === 'Security' && cardTitle.includes('cyber'))
        ) {
          card.style.display = 'block';
        } else {
          card.style.display = 'none';
        }
      }
    });
  });

  // Set 'All' as active by default
  if (filter === 'All') {
    button.style.background = 'rgba(100, 255, 218, 0.1)';
  }

  filterContainer.appendChild(button);
});

// Insert filter buttons after the section heading
const skillsHeading = document.querySelector('#skills .section-heading');
skillsHeading.parentNode.insertBefore(
  filterContainer,
  skillsHeading.nextSibling
);
