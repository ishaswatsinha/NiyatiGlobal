<?php
$company = "Niyati Global Supply Chain LLP";
$tagline = "Connecting the World, One Shipment at a Time";
$phone = "+91 98765 43210";
$email = "info@niyatiglobal.com";
$address = "G Floor, No 4/2, 1st Main, Netaji Nagar, Bangalore, Karnataka, India";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?= $company ?> | Home</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet"/>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            navy:    { DEFAULT: '#0B1B3A', light: '#132244', deep: '#060F22' },
            gold:    { DEFAULT: '#C9A84C', light: '#E2C06A', pale: '#F5E9C8' },
            slate:   { DEFAULT: '#4A5568', light: '#718096' },
            cream:   '#FAF7F2',
          },
          fontFamily: {
            display: ['Cormorant Garamond', 'serif'],
            body:    ['DM Sans', 'sans-serif'],
          },
          keyframes: {
            fadeUp:    { '0%': { opacity: 0, transform: 'translateY(30px)' }, '100%': { opacity: 1, transform: 'translateY(0)' } },
            fadeIn:    { '0%': { opacity: 0 }, '100%': { opacity: 1 } },
            slideLeft: { '0%': { opacity: 0, transform: 'translateX(-40px)' }, '100%': { opacity: 1, transform: 'translateX(0)' } },
            pulse2:    { '0%,100%': { transform: 'scale(1)' }, '50%': { transform: 'scale(1.05)' } },
            marquee:   { '0%': { transform: 'translateX(0)' }, '100%': { transform: 'translateX(-50%)' } },
          },
          animation: {
            fadeUp:    'fadeUp 0.8s ease forwards',
            fadeIn:    'fadeIn 1s ease forwards',
            slideLeft: 'slideLeft 0.8s ease forwards',
            pulse2:    'pulse2 3s ease-in-out infinite',
            marquee:   'marquee 25s linear infinite',
          },
        }
      }
    }
  </script>
  <style>
    html { scroll-behavior: smooth; }
    body { font-family: 'DM Sans', sans-serif; background: #000000; color: #0B1B3A; }
    h1,h2,h3 { font-family: 'Cormorant Garamond', serif; }

    /* Navbar */
    #navbar { transition: all 0.4s ease; }
    #navbar.scrolled { background: #0B1B3A; box-shadow: 0 4px 30px rgba(0,0,0,0.3); }

    /* Hero */
    .hero-bg {
      background: linear-gradient(135deg, #060F22 0%, #0B1B3A 50%, #132244 100%);
      position: relative; overflow: hidden;
    }
    .hero-bg::before {
      content: '';
      position: absolute; inset: 0;
      background: radial-gradient(ellipse at 70% 50%, rgba(201,168,76,0.15) 0%, transparent 60%);
    }
    .hero-grid {
      background-image: linear-gradient(rgba(201,168,76,0.06) 1px, transparent 1px),
                        linear-gradient(90deg, rgba(201,168,76,0.06) 1px, transparent 1px);
      background-size: 60px 60px;
    }
    .gold-line { height: 2px; background: linear-gradient(90deg, transparent, #C9A84C, transparent); }
    .floating-orb {
      position: absolute; border-radius: 50%;
      background: radial-gradient(circle, rgba(201,168,76,0.2) 0%, transparent 70%);
      animation: pulse2 4s ease-in-out infinite;
    }

    /* Section */
    .section-label {
      font-family: 'DM Sans', sans-serif;
      font-size: 0.7rem; letter-spacing: 0.25em; text-transform: uppercase;
      color: #C9A84C; font-weight: 600;
    }

    /* Cards */
    .service-card { transition: all 0.35s ease; border: 1px solid rgba(201,168,76,0.15); }
    .service-card:hover { transform: translateY(-6px); border-color: rgba(201,168,76,0.5); box-shadow: 0 20px 60px rgba(11,27,58,0.12); }
    .service-card:hover .service-icon { background: #C9A84C; color: #fff; }
    .service-icon { transition: all 0.3s ease; }

    /* Stats */
    .stat-card { background: linear-gradient(135deg, #0B1B3A, #132244); }

    /* Testimonials */
    .testimonial-card { border-left: 3px solid #C9A84C; }

    /* CTA */
    .cta-bg { background: linear-gradient(135deg, #0B1B3A 0%, #132244 100%); }
    .btn-gold {
      background: linear-gradient(135deg, #C9A84C, #E2C06A);
      transition: all 0.3s ease;
    }
    .btn-gold:hover { transform: translateY(-2px); box-shadow: 0 10px 30px rgba(201,168,76,0.4); }
    .btn-outline { border: 1.5px solid rgba(201,168,76,0.6); transition: all 0.3s ease; }
    .btn-outline:hover { background: rgba(201,168,76,0.1); border-color: #C9A84C; }

    /* Marquee */
    .marquee-track { display: flex; width: max-content; animation: marquee 28s linear infinite; }
    .marquee-track:hover { animation-play-state: paused; }

    /* Mobile Menu */
    #mobile-menu { transition: all 0.3s ease; }

    /* Scroll reveal */
    .reveal { opacity: 0; transform: translateY(28px); transition: all 0.7s ease; }
    .reveal.visible { opacity: 1; transform: translateY(0); }
    .reveal-left { opacity: 0; transform: translateX(-28px); transition: all 0.7s ease; }
    .reveal-left.visible { opacity: 1; transform: translateX(0); }
  </style>
</head>
<body>

<!-- ═══════════════════════ NAVBAR ═══════════════════════ -->
<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 py-4 px-6 md:px-12">
  <div class="max-w-7xl mx-auto flex items-center justify-between">

    <!-- Logo -->
    <a href="#" class="flex items-center gap-3 group">
      <!-- <div class="w-10 h-10 rounded-lg bg-gold flex items-center justify-center shadow-lg">
        <span class="text-navy font-display font-bold text-xl">N</span>
      </div> -->
      <img src="assets/Images/logo-1.png" width="200px" alt="N">
      <!-- <div>
        <div class="font-display font-bold text-white text-lg leading-tight">Niyati Global</div>
        <div class="text-gold text-[10px] tracking-widest uppercase font-body">Supply Chain LLP</div>
      </div> -->
    </a>

    <!-- Desktop Nav -->
    <ul class="hidden md:flex items-center gap-8">
      <?php
        $nav = ['Home'=>'#home','About'=>'#about','Services'=>'#services','Why Us'=>'#why','Testimonials'=>'#testimonials','Contact'=>'#contact'];
        foreach($nav as $label => $href):
      ?>
        <li><a href="<?= $href ?>" class="text-white/80 hover:text-gold text-sm font-body font-medium tracking-wide transition-colors duration-200"><?= $label ?></a></li>
      <?php endforeach; ?>
    </ul>

    <!-- CTA -->
    <a href="https://wa.me/919876543210" target="_blank"
       class="hidden md:flex btn-gold text-navy font-body font-semibold text-sm px-5 py-2.5 rounded-full items-center gap-2">
      <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.135.558 4.14 1.535 5.879L0 24l6.343-1.506A11.94 11.94 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.82 9.82 0 01-5.006-1.372l-.36-.213-3.763.894.952-3.657-.234-.375A9.79 9.79 0 012.182 12C2.182 6.57 6.57 2.182 12 2.182S21.818 6.57 21.818 12 17.43 21.818 12 21.818z"/></svg>
      Get a Quote
    </a>

    <!-- Hamburger -->
    <button id="menu-btn" class="md:hidden text-white" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
    </button>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="hidden md:hidden mt-4 bg-navy/95 backdrop-blur rounded-xl px-6 py-4 border border-gold/20">
    <?php foreach($nav as $label => $href): ?>
      <a href="<?= $href ?>" class="block py-2.5 text-white/80 hover:text-gold font-body text-sm border-b border-white/10 last:border-0 transition-colors"><?= $label ?></a>
    <?php endforeach; ?>
    <a href="https://wa.me/919876543210" class="mt-3 block text-center btn-gold text-navy font-semibold text-sm px-5 py-2.5 rounded-full">Get a Quote</a>
  </div>
</nav>


<!-- ═══════════════════════ HERO ═══════════════════════ -->
<section id="home" class="hero-bg hero-grid min-h-screen flex items-center relative">

  <!-- Floating orbs -->
  <div class="floating-orb w-96 h-96 -top-20 -right-20 opacity-60"></div>
  <div class="floating-orb w-64 h-64 bottom-20 left-10 opacity-40" style="animation-delay:2s"></div>

  <div class="max-w-7xl mx-auto px-6 md:px-12 pt-28 pb-20 w-full">
    <div class="grid md:grid-cols-2 gap-16 items-center">

      <!-- Left Text -->
      <div class="space-y-8">
        <div class="inline-flex items-center gap-2 bg-gold/10 border border-gold/30 rounded-full px-4 py-1.5">
          <div class="w-2 h-2 rounded-full bg-gold animate-pulse"></div>
          <span class="section-label text-gold">Global Supply Chain Experts</span>
        </div>

        <h1 class="font-display text-5xl md:text-6xl lg:text-7xl text-white font-semibold leading-tight animate-slideLeft">
          Niyati<br/>
          <span class="text-gold">Global</span><br/>
          Supply Chain
        </h1>

        <div class="gold-line w-20"></div>

        <p class="text-white/70 text-lg font-body leading-relaxed max-w-md">
          <?= $tagline ?>. We simplify international trade with expert guidance, seamless logistics, and a personal touch—connecting businesses to global markets with confidence.
        </p>

        <div class="flex flex-wrap gap-4">
          <a href="#services" class="btn-gold text-navy font-body font-semibold px-8 py-3.5 rounded-full text-sm">
            Explore Services
          </a>
          <a href="#about" class="btn-outline text-white font-body font-medium px-8 py-3.5 rounded-full text-sm">
            Learn More
          </a>
        </div>

        <!-- Quick stats -->
        <div class="flex gap-8 pt-4">
          <?php
            $quick = [['500+','Clients Served'],['50+','Countries'],['10+','Years Exp.']];
            foreach($quick as $q):
          ?>
          <div>
            <div class="font-display text-3xl text-gold font-bold"><?= $q[0] ?></div>
            <div class="text-white/50 text-xs font-body mt-0.5"><?= $q[1] ?></div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Right: Globe Visual -->
      <div class="hidden md:flex items-center justify-center">
        <div class="relative w-80 h-80">
          <!-- Outer ring -->
          <div class="absolute inset-0 rounded-full border-2 border-gold/20 animate-spin" style="animation-duration:20s;"></div>
          <div class="absolute inset-4 rounded-full border border-gold/10 animate-spin" style="animation-duration:14s; animation-direction:reverse;"></div>
          <!-- Center card -->
          <div class="absolute inset-12 rounded-full bg-gradient-to-br from-navy-light to-navy flex flex-col items-center justify-center border border-gold/30 shadow-2xl">
            <svg class="w-16 h-16 text-gold mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <span class="text-white/80 text-xs font-body tracking-wider text-center">GLOBAL<br/>TRADE</span>
          </div>
          <!-- Orbit dots -->
          <?php
            $dots = [['top-0 left-1/2','bg-gold'],['bottom-4 right-4','bg-blue-400'],['top-1/2 left-0','bg-green-400'],['top-4 right-8','bg-gold/60']];
            foreach($dots as $d):
          ?>
          <div class="absolute <?= $d[0] ?> w-3 h-3 <?= $d[1] ?> rounded-full shadow-lg border-2 border-navy"></div>
          <?php endforeach; ?>
        </div>
      </div>

    </div>
  </div>

  <!-- Scroll hint -->
  <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 text-white/30">
    <span class="text-xs font-body tracking-widest">SCROLL</span>
    <div class="w-px h-10 bg-gradient-to-b from-gold/50 to-transparent"></div>
  </div>
</section>


<!-- ═══════════════════════ MARQUEE ═══════════════════════ -->
<div class="bg-gold py-3 overflow-hidden">
  <div class="marquee-track">
    <?php
      $items = ['Freight Forwarding','Customs Brokerage','Sourcing & Procurement','Quality Inspection','Logistics & Transport','Market Research','Trade Finance','Warehousing','Documentation','Trade Representation'];
      $all = array_merge($items, $items); // duplicate for seamless loop
      foreach($all as $item):
    ?>
    <span class="font-display text-navy font-semibold text-sm px-8 whitespace-nowrap">
      <?= $item ?> <span class="text-navy/40 mx-2">✦</span>
    </span>
    <?php endforeach; ?>
  </div>
</div>


<!-- ═══════════════════════ ABOUT ═══════════════════════ -->
<section id="about" class="py-24 px-6 md:px-12 bg-cream">
  <div class="max-w-7xl mx-auto">
    <div class="grid md:grid-cols-2 gap-16 items-center">

      <!-- Image side -->
      <div class="reveal-left relative">
        <div class="rounded-2xl overflow-hidden shadow-2xl aspect-[4/3] bg-gradient-to-br from-navy to-navy-light flex items-center justify-center">
          <!-- Placeholder visual if no image -->
          <div class="text-center p-12">
            <svg class="w-24 h-24 text-gold/40 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9"/>
            </svg>
            <p class="text-white/30 font-body text-sm">Global Trade Network</p>
          </div>
        </div>
        <!-- Badge -->
        <div class="absolute -bottom-6 -right-6 bg-gold text-navy rounded-xl p-5 shadow-xl">
          <div class="font-display text-4xl font-bold">10+</div>
          <div class="font-body text-xs font-semibold mt-1">Years of<br/>Excellence</div>
        </div>
      </div>

      <!-- Text -->
      <div class="reveal space-y-6">
        <p class="section-label">Who We Are</p>
        <h2 class="font-display text-4xl md:text-5xl font-semibold text-navy leading-tight">
          Your Trusted Partner in <span class="text-gold">Global Trade</span>
        </h2>
        <div class="gold-line w-16"></div>
        <p class="text-slate font-body leading-relaxed">
          At Niyati Global Supply Chain LLP, we simplify global trade with expert guidance and a personal touch. Our journey began with a vision to connect businesses worldwide, making international trade seamless and stress-free.
        </p>
        <p class="text-slate font-body leading-relaxed">
          With a team of dedicated professionals, we help businesses navigate exports with ease—ensuring compliance, optimizing logistics, and sourcing top-quality products. More than just transactions, we build lasting relationships and create opportunities across borders.
        </p>

        <!-- Feature list -->
        <ul class="space-y-3 pt-2">
          <?php
            $features = ['Expert compliance & documentation team','Global network of trusted suppliers','End-to-end logistics management','Customized trade solutions'];
            foreach($features as $f):
          ?>
          <li class="flex items-center gap-3 font-body text-slate">
            <span class="w-5 h-5 rounded-full bg-gold/20 flex items-center justify-center flex-shrink-0">
              <svg class="w-3 h-3 text-gold" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
            </span>
            <?= $f ?>
          </li>
          <?php endforeach; ?>
        </ul>

        <a href="#contact" class="inline-block btn-gold text-navy font-body font-semibold px-7 py-3 rounded-full text-sm mt-2">
          Connect With Us →
        </a>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════ STATS ═══════════════════════ -->
<section class="py-16 bg-navy">
  <div class="max-w-7xl mx-auto px-6 md:px-12">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
      <?php
        $stats = [
          ['500+','Global Clients','Businesses served across 50+ countries'],
          ['50+','Countries','Active trade routes worldwide'],
          ['10K+','Shipments','Successfully delivered on time'],
          ['99%','Satisfaction','Client retention rate'],
        ];
        foreach($stats as $s):
      ?>
      <div class="reveal text-center py-8 px-4 stat-card rounded-xl border border-gold/10">
        <div class="font-display text-4xl md:text-5xl text-gold font-bold"><?= $s[0] ?></div>
        <div class="font-display text-lg text-white mt-2"><?= $s[1] ?></div>
        <div class="text-white/40 font-body text-xs mt-1"><?= $s[2] ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════ SERVICES ═══════════════════════ -->
<section id="services" class="py-24 px-6 md:px-12 bg-cream">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16 reveal">
      <p class="section-label mb-3">What We Offer</p>
      <h2 class="font-display text-4xl md:text-5xl font-semibold text-navy">
        Our <span class="text-gold">Services</span>
      </h2>
      <div class="gold-line w-20 mx-auto mt-4"></div>
      <p class="text-slate font-body mt-4 max-w-xl mx-auto">
        Comprehensive global trade solutions tailored to your business needs—from sourcing to delivery.
      </p>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php
        $services = [
          ['M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2', 'Freight Forwarding & Customs', 'Seamless freight solutions with expert customs brokerage to keep your shipments moving across borders.'],
          ['M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z', 'Sourcing & Procurement', 'We connect you with trusted global suppliers, ensuring quality products at the best competitive prices.'],
          ['M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z', 'Quality Inspection & Control', 'Rigorous inspection protocols to ensure your products meet international quality and compliance standards.'],
          ['M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4', 'Logistics & Transportation', 'End-to-end logistics management with reliable transportation networks across air, sea, and land routes.'],
          ['M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z', 'Market Research & Analysis', 'Data-driven market insights to help your business identify opportunities and strategically expand globally.'],
          ['M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'Trade Finance & Insurance', 'Flexible financing solutions and comprehensive insurance to protect your international trade transactions.'],
          ['M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10', 'Warehousing & Distribution', 'Strategic warehousing and efficient distribution networks to optimize your supply chain operations.'],
          ['M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z', 'Documentation & Compliance', 'Complete documentation management and regulatory compliance to ensure hassle-free international trade.'],
          ['M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0', 'Trade Show Representation', 'Professional representation at global trade shows and exhibitions to expand your international presence.'],
        ];
        foreach($services as $i => $s):
          $delay = ($i % 3) * 100;
      ?>
      <div class="reveal service-card bg-white rounded-xl p-6 cursor-pointer" 
        <div class="service-icon w-12 h-12 rounded-lg bg-gold/10 text-gold flex items-center justify-center mb-4">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="<?= $s[0] ?>"/>
          </svg>
        </div>
        <h3 class="font-display text-xl text-navy font-semibold mb-2"><?= $s[1] ?></h3>
        <p class="text-slate font-body text-sm leading-relaxed"><?= $s[2] ?></p>
        <div class="mt-4 text-gold text-sm font-body font-medium flex items-center gap-1 group">
          Learn more <span class="group-hover:translate-x-1 transition-transform">→</span>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════ WHY US ═══════════════════════ -->
<section id="why" class="py-24 px-6 md:px-12 bg-navy">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16 reveal">
      <p class="section-label mb-3">Our Advantage</p>
      <h2 class="font-display text-4xl md:text-5xl font-semibold text-white">
        Why Choose <span class="text-gold">Niyati Global?</span>
      </h2>
      <div class="gold-line w-20 mx-auto mt-4"></div>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php
        $whys = [
          ['🎯','Expert Guidance','Seasoned professionals ensuring smooth navigation through every step of the export process.'],
          ['⚖️','Seamless Compliance','We handle all regulatory requirements, customs procedures, and trade laws—minimizing your risk.'],
          ['🌐','Strong Global Network','Trusted suppliers and partners worldwide connecting businesses to the best opportunities.'],
          ['🔧','Tailored Solutions','Services customized to fit your unique business needs, whether you\'re new to exports or scaling up.'],
          ['💡','Cost-Effective Strategies','Optimized supply chains, best-deal negotiations, and streamlined operations to maximize your profits.'],
          ['🤝','Reliable & Transparent','Integrity at our core. Long-term partnerships built on trust, efficiency, and excellence.'],
        ];
        foreach($whys as $i => $w):
      ?>
      <div class="reveal p-6 rounded-xl border border-gold/10 bg-white/5 hover:bg-white/10 hover:border-gold/30 transition-all duration-300" >
        <div class="text-3xl mb-4"><?= $w[0] ?></div>
        <h3 class="font-display text-xl text-white font-semibold mb-2"><?= $w[1] ?></h3>
        <p class="text-white/50 font-body text-sm leading-relaxed"><?= $w[2] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════ TESTIMONIALS ═══════════════════════ -->
<section id="testimonials" class="py-24 px-6 md:px-12 bg-cream">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16 reveal">
      <p class="section-label mb-3">Client Stories</p>
      <h2 class="font-display text-4xl md:text-5xl font-semibold text-navy">
        What Our <span class="text-gold">Clients Say</span>
      </h2>
      <div class="gold-line w-20 mx-auto mt-4"></div>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php
        $testimonials = [
          ['Rajesh Mehta','Export Manager','Niyati Global made our export journey seamless! Their expertise in documentation and compliance saved us so much time and effort. Highly recommended!','RM'],
          ['Priya Kapoor','Business Owner','From sourcing the best suppliers to handling logistics, Niyati Global managed everything flawlessly. Their support has been a game-changer for our business!','PK'],
          ['Neha Patel','Operations Head','We struggled with customs clearance before, but thanks to Niyati Global, our shipments now reach global markets without delays. Excellent service!','NP'],
          ['Vikram Thakur','CEO, TechTrade','Their export consultancy helped us enter new markets confidently. The team is knowledgeable, professional, and always ready to assist.','VT'],
          ['Rahul Verma','Logistics Director','Niyati Global not only provided export solutions but also helped us optimize costs. Their transparent approach makes them a truly trusted partner.','RV'],
          ['Anita Shah','Founder','An exceptional team that truly understands global trade dynamics. They\'ve transformed how we approach international business. Outstanding results!','AS'],
        ];
        foreach($testimonials as $i => $t):
      ?>
      <div class="reveal testimonial-card bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-shadow" 
        <!-- Stars -->
        <div class="flex gap-0.5 mb-4">
          <?php for($s=0;$s<5;$s++): ?>
          <svg class="w-4 h-4 text-gold" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <?php endfor; ?>
        </div>
        <p class="text-slate font-body text-sm leading-relaxed mb-5 italic">"<?= $t[3] == 'RM' ? $testimonials[0][3] : '' ?><?= $t[0] == 'Rajesh Mehta' ? $t[3] : $t[3] ?>"</p>
        <p class="text-slate font-body text-sm leading-relaxed mb-5 italic"><?= $t[3] ?></p>
        <div class="flex items-center gap-3">
          <div class="w-10 h-10 rounded-full bg-navy flex items-center justify-center text-gold font-display font-bold text-sm">
            <?= substr($t[0],0,2) ?>
          </div>
          <div>
            <div class="font-body font-semibold text-navy text-sm"><?= $t[0] ?></div>
            <div class="font-body text-slate text-xs"><?= $t[1] ?></div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════ CTA ═══════════════════════ -->
<section class="cta-bg py-20 px-6 md:px-12 relative overflow-hidden">
  <div class="absolute inset-0 hero-grid opacity-30"></div>
  <div class="floating-orb w-80 h-80 -top-10 -left-10 opacity-30"></div>
  <div class="max-w-4xl mx-auto text-center relative z-10 reveal">
    <p class="section-label mb-4">Ready to Go Global?</p>
    <h2 class="font-display text-4xl md:text-5xl font-semibold text-white leading-tight mb-4">
      Let's Make Global Trade<br/><span class="text-gold">Simple & Successful</span>
    </h2>
    <div class="gold-line w-24 mx-auto mb-6"></div>
    <p class="text-white/60 font-body mb-10 max-w-xl mx-auto">
      If you're looking for a trusted partner in international trade, Niyati Global Supply Chain LLP is here to help. Expand globally with confidence—we're your trusted export partner!
    </p>
    <div class="flex flex-wrap gap-4 justify-center">
      <a href="https://wa.me/919876543210" target="_blank"
         class="btn-gold text-navy font-body font-semibold px-8 py-3.5 rounded-full text-sm flex items-center gap-2">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347zM12 0C5.373 0 0 5.373 0 12c0 2.135.558 4.14 1.535 5.879L0 24l6.343-1.506A11.94 11.94 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0z"/></svg>
        Book a Meeting on WhatsApp
      </a>
      <a href="mailto:<?= $email ?>" class="btn-outline text-white font-body font-medium px-8 py-3.5 rounded-full text-sm">
        Send Us an Email
      </a>
    </div>
  </div>
</section>


<!-- ═══════════════════════ CONTACT ═══════════════════════ -->
<section id="contact" class="py-24 px-6 md:px-12 bg-cream">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16 reveal">
      <p class="section-label mb-3">Get In Touch</p>
      <h2 class="font-display text-4xl md:text-5xl font-semibold text-navy">
        Contact <span class="text-gold">Us</span>
      </h2>
      <div class="gold-line w-20 mx-auto mt-4"></div>
    </div>
    <div class="grid md:grid-cols-3 gap-6 max-w-4xl mx-auto">
      <?php
        $contacts = [
          ['M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z','Phone',$phone,'tel:+919876543210'],
          ['M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z','Email',$email,'mailto:'.$email],
          ['M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z M15 11a3 3 0 11-6 0 3 3 0 016 0z','Address','Bangalore, Karnataka, India','#'],
        ];
        foreach($contacts as $c):
      ?>
      <div class="reveal text-center p-8 bg-white rounded-xl border border-gold/10 hover:border-gold/30 hover:shadow-lg transition-all duration-300">
        <div class="w-14 h-14 rounded-full bg-gold/10 flex items-center justify-center mx-auto mb-4">
          <svg class="w-6 h-6 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="<?= $c[0] ?>"/>
          </svg>
        </div>
        <h3 class="font-display text-xl text-navy font-semibold mb-2"><?= $c[1] ?></h3>
        <a href="<?= $c[3] ?>" class="text-slate font-body text-sm hover:text-gold transition-colors"><?= $c[2] ?></a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════ FOOTER ═══════════════════════ -->
<footer class="bg-navy-deep bg-[#060F22] pt-16 pb-8 px-6 md:px-12">
  <div class="max-w-7xl mx-auto">
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">

      <!-- Brand -->
      <div class="lg:col-span-2">
        <div class="flex items-center gap-3 mb-4">
          <div class="w-10 h-10 rounded-lg bg-gold flex items-center justify-center">
            <span class="text-navy font-display font-bold text-xl">N</span>
          </div>
          <div>
            <div class="font-display font-bold text-white text-lg">Niyati Global Supply Chain LLP</div>
          </div>
        </div>
        <p class="text-white/40 font-body text-sm leading-relaxed mb-4 max-w-xs">
          Your trusted partner in global trade. Connecting businesses worldwide with expert guidance and seamless logistics solutions.
        </p>
        <div class="text-white/40 font-body text-sm"><?= $address ?></div>
      </div>

      <!-- Overview -->
      <div>
        <h4 class="font-display text-white font-semibold text-lg mb-4">Overview</h4>
        <ul class="space-y-2">
          <?php foreach(['Home'=>'#home','About Us'=>'#about','Services'=>'#services','Why Us'=>'#why'] as $l=>$h): ?>
          <li><a href="<?= $h ?>" class="text-white/40 hover:text-gold font-body text-sm transition-colors"><?= $l ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Contact -->
      <div>
        <h4 class="font-display text-white font-semibold text-lg mb-4">Contact Us</h4>
        <ul class="space-y-2 text-white/40 font-body text-sm">
          <li>📞 <?= $phone ?></li>
          <li>✉️ <?= $email ?></li>
          <li class="mt-3">
            <a href="https://wa.me/919876543210" target="_blank"
               class="inline-flex items-center gap-2 btn-gold text-navy text-xs font-semibold px-4 py-2 rounded-full">
              💬 WhatsApp Us
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="gold-line mb-6"></div>
    <div class="flex flex-col md:flex-row items-center justify-between gap-3">
      <p class="text-white/30 font-body text-xs">© <?= date('Y') ?> <?= $company ?>. All rights reserved.</p>
      <p class="text-white/20 font-body text-xs">Niyati Global Supply Chain LLP — Trusted Export Partner</p>
    </div>
  </div>
</footer>


<!-- ═══════════════════════ SCRIPTS ═══════════════════════ -->
<script>
  // Navbar scroll effect
  window.addEventListener('scroll', () => {
    const nav = document.getElementById('navbar');
    nav.classList.toggle('scrolled', window.scrollY > 50);
  });

  // Scroll reveal
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if(e.isIntersecting) { e.target.classList.add('visible'); }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

  document.querySelectorAll('.reveal, .reveal-left').forEach(el => observer.observe(el));

  // Smooth close mobile menu on link click
  document.querySelectorAll('#mobile-menu a').forEach(a => {
    a.addEventListener('click', () => document.getElementById('mobile-menu').classList.add('hidden'));
  });

  // Fix testimonial text (PHP rendered incorrectly above - patch via JS)
  document.querySelectorAll('.testimonial-card p.italic').forEach((el, i) => {
    const texts = [
      "Niyati Global made our export journey seamless! Their expertise in documentation and compliance saved us so much time and effort. Highly recommended!",
      "From sourcing the best suppliers to handling logistics, Niyati Global managed everything flawlessly. Their support has been a game-changer for our business!",
      "We struggled with customs clearance before, but thanks to Niyati Global, our shipments now reach global markets without delays. Excellent service!",
      "Their export consultancy helped us enter new markets confidently. The team is knowledgeable, professional, and always ready to assist.",
      "Niyati Global not only provided export solutions but also helped us optimize costs. Their transparent approach makes them a truly trusted partner.",
      "An exceptional team that truly understands global trade dynamics. They've transformed how we approach international business. Outstanding results!"
    ];
    const idx = Math.floor(i / 2);
    if(idx < texts.length) el.textContent = '"' + texts[idx] + '"';
    else el.style.display = 'none';
  });
</script>
</body>
</html>
