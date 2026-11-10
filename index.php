<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Developer Portfolio</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: Arial, sans-serif;
      background-color: #121212;
      color: #f1f1f1;
    }
    header {
      padding: 1rem;
      text-align: center;
      background-color: #1e1e1e;
      font-size: 1.5rem;
    }
    nav {
      display: flex;
      justify-content: center;
      background-color: #2a2a2a;
    }
    nav a {
      color: #f1f1f1;
      padding: 1rem;
      text-decoration: none;
      transition: background 0.3s;
    }
    nav a:hover, nav a.active {
      background-color: #444;
    }
    section {
      padding: 2rem;
      display: none;
    }
    section.active {
      display: block;
      animation: fadeIn 0.5s ease-in-out;
    }
    @keyframes fadeIn {
      from {opacity: 0; transform: translateY(10px);}
      to {opacity: 1; transform: translateY(0);}
    }
    .project {
      margin: 1rem 0;
      padding: 1rem;
      background-color: #1e1e1e;
      border-left: 4px solid #f1f1f1;
    }
    footer {
      text-align: center;
      padding: 1rem;
      background-color: #1e1e1e;
      margin-top: 2rem;
    }
  </style>
</head>
<body>
  <header>Emman Quistadio | Web Developer</header>
  <nav>
    <a href="#" class="tablink active" data-tab="about">About</a>
    <a href="#" class="tablink" data-tab="experience">Experience</a>
    <a href="#" class="tablink" data-tab="projects">Projects</a>
    <a href="#" class="tablink" data-tab="contact">Contact</a>
  </nav>

  <section id="about" class="active">
    <h2>About Me</h2>
    <p>I am a passionate web developer with experience in creating functional and aesthetic web applications using HTML, CSS, JavaScript, and PHP.</p>
  </section>

  <section id="experience">
    <h2>Experience</h2>
    <ul>
      <li>DENR-EMB Region 6 - Developed systems for HR recruitment, records management, queueing, and payslip automation.</li>
      <li>Provided technical support and system solutions for internal office operations.</li>
    </ul>
  </section>

  <section id="projects">
    <h2>Projects</h2>
    <div class="project">
      <h3>HR Recruitment System</h3>
      <p>Streamlined the recruitment process, including job posting, applicant tracking, and scheduling.</p>
    </div>
    <div class="project">
      <h3>Queueing System</h3>
      <p>Automated queuing process with real-time notifications and transaction tracking.</p>
    </div>
    <div class="project">
      <h3>Records Management System</h3>
      <p>Digitized document handling for improved accessibility and security.</p>
    </div>
  </section>

  <section id="contact">
    <h2>Contact Me</h2>
    <p>Email: emman.quistadio@example.com</p>
    <p>LinkedIn: linkedin.com/in/emmanquistadio</p>
  </section>

  <footer>
    &copy; 2025 Emman Quistadio
  </footer>

  <script>
    const tabs = document.querySelectorAll('.tablink');
    const sections = document.querySelectorAll('section');

    tabs.forEach(tab => {
      tab.addEventListener('click', e => {
        e.preventDefault();
        tabs.forEach(t => t.classList.remove('active'));
        sections.forEach(s => s.classList.remove('active'));

        tab.classList.add('active');
        document.getElementById(tab.dataset.tab).classList.add('active');
      });
    });
  </script>
</body>
</html>
