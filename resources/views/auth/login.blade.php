
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - The Hollywood Vampires</title>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <link href="dist/output.css" rel="stylesheet" />
  <link href="dist/main.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap"
    rel="stylesheet" />
  <link href="https://fonts.cdnfonts.com/css/cloister-black" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet" />
  <link href="https://fonts.cdnfonts.com/css/vintage-display" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    /* Custom Animations */
    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }

      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes glow {
      0% {
        box-shadow: 0 0 5px rgba(240, 206, 174, 0.5);
      }

      50% {
        box-shadow: 0 0 20px rgba(240, 206, 174, 0.8);
      }

      100% {
        box-shadow: 0 0 5px rgba(240, 206, 174, 0.5);
      }
    }

    .animate-fadeInUp {
      animation: fadeInUp 0.8s ease-out forwards;
    }

    .glow-effect:hover {
      animation: glow 1.5s infinite;
    }

    .bg-gradient-overlay {
      background: linear-gradient(135deg, rgba(0, 0, 0, 0.9), rgba(127, 29, 29, 0.4));
    }

    .input-focus {
      transition: all 0.3s ease;
    }

    .input-focus:focus {
      border-color: #f0ceae;
      box-shadow: 0 0 10px rgba(240, 206, 174, 0.5);
    }
  </style>
</head>

<body class="font-inter min-h-screen flex items-center justify-center" style="background: url('/images/WEBSITE_BKGRND_MUSIC.jpg') center center/cover no-repeat;">
    <style>
    .alert-class {
      background-color: #7F1D1D;
      color: #fefefe;
      border-radius: 10px;
    }
  </style>

  <!-- Access Granted Modal -->
  @if(session('success'))
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
          title: 'Access Granted',
          text: @json(session('success')),
          icon: 'success',
          background: '#7F1D1D',
          color: '#fff',
          confirmButtonColor: '#7F1D1D',
          customClass: {
            popup: 'swal2-border-radius'
          }
        }).then(function() {
          window.location.href = '/dashboard';
        });
      });
    </script>
  @endif

  <!-- Main Login Container -->
  <main
    class="relative z-10 w-full max-w-md mx-4 p-8 bg-gradient-overlay rounded-xl shadow-2xl shadow-black/50 animate-fadeInUp">
    
    <div class="text-center mb-10">
      <img class="mx-auto w-32 transform hover:scale-105 transition-transform duration-300" src="/images/HV_LOGO_RED_HORIZONTAL.png"
        alt="The Hollywood Vampires" />
      <h2 class="mt-6 text-4xl font-bold text-[#f0ceae] tracking-wide font-orbitron">Hello, Welcome</h2>
      <p class="mt-2 text-sm text-[rgba(255,255,255,0.6)]">Unlock your exclusive access</p>
    </div>

 
    <form action="{{ route('login') }}" method="POST" class="space-y-6">
      @csrf
      @if(session('error'))
        <div class="alert-class p-2 mb-2 text-center">{{ session('error') }}</div>
      @endif
      @if($errors->any())
        <div class="alert-class p-2 mb-2 text-center">
          {{ $errors->first() }}
        </div>
      @endif
     
      <div class="relative">
        <input id="email" name="email" type="email" autocomplete="email" required placeholder="Your Email or Username"
          class="w-full py-3 px-4 bg-transparent text-[#f0ceae] text-sm font-semibold border border-[rgba(255,255,255,0.3)] rounded-lg focus:outline-none input-focus placeholder:text-[rgba(255,255,255,0.5)]" />
        <span class="absolute inset-y-0 right-3 flex items-center text-[#D0862A]">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
            </path>
          </svg>
        </span>
      </div>

 
      <div class="relative">
        <input id="password" name="password" type="password" autocomplete="current-password" required
          placeholder="Your Password"
          class="w-full py-3 px-4 bg-transparent text-[#f0ceae] text-sm font-semibold border border-[rgba(255,255,255,0.3)] rounded-lg focus:outline-none input-focus placeholder:text-[rgba(255,255,255,0.5)]" />
        <span class="absolute inset-y-0 right-3 flex items-center text-[#D0862A]" style="cursor:pointer" onclick="toggleLoginPassword()">
          <i class="bi bi-eye" id="loginPasswordEye"></i>
        </span>
      </div>
  <script>
    function toggleLoginPassword() {
      const pwd = document.getElementById('password');
      const eye = document.getElementById('loginPasswordEye');
      if (pwd.type === 'password') {
        pwd.type = 'text';
        eye.classList.remove('bi-eye');
        eye.classList.add('bi-eye-slash');
      } else {
        pwd.type = 'password';
        eye.classList.remove('bi-eye-slash');
        eye.classList.add('bi-eye');
      }
    }
  </script>

      
      <button type="submit" name="sub-login"
        class="w-full py-3 px-4 bg-[#7F1D1D] text-white text-sm font-semibold rounded-lg glow-effect hover:bg-[#521e1e] transition-colors duration-300">
        Login 
      </button>
    </form>

   
  </main>


  <div class="fixed inset-0 pointer-events-none">
    <canvas id="particle-canvas"></canvas>
  </div>

  <script src="dist/flowbite.js"></script>
  <script src="dist/main.js"></script>
  <script src="assets/core.js"></script>
  <script>
   
    const canvas = document.getElementById('particle-canvas');
    const ctx = canvas.getContext('2d');
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    const particles = [];
    for (let i = 0; i < 50; i++) {
      particles.push({
        x: Math.random() * canvas.width,
        y: Math.random() * canvas.height,
        radius: Math.random() * 2 + 1,
        speed: Math.random() * 0.5 + 0.1,
      });
    }

    function animateParticles() {
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      particles.forEach(p => {
        ctx.beginPath();
        ctx.arc(p.x, p.y, p.radius, 0, Math.PI * 2);
        ctx.fillStyle = 'rgba(240, 206, 174, 0.3)';
        ctx.fill();
        p.y -= p.speed;
        if (p.y < 0) p.y = canvas.height;
      });
      requestAnimationFrame(animateParticles);
    }
    animateParticles();

    // Resize Handler
    window.addEventListener('resize', () => {
      canvas.width = window.innerWidth;
      canvas.height = window.innerHeight;
    });
  </script>
</body>

</html>