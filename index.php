<?php include 'header.php'; ?>
<section class="hero">
  <div class="container">
    <h4> Transforming Ideas into Digital Reality</h4>
    <h1>When Three Minds Become One Vision 
    <p>Kami adalah tiga individu dengan semangat dan visi yang sama.
Bersama, kami menciptakan solusi, inovasi, dan karya yang bermakna..</p>
    <div class="buttons">
      <a href="#services" class="btn-primary">Explore More</a>
      <a href="website.php" class="btn-outline">View All Product</a>
    </div>
  </div>
</section>

<section class="about">
  <div class="container">
    <div class="about-text">
      <h4>// Detail Kami</h4>
      <h2>Mewakili Kolaborasi, Visi, dan Dampak</h2>
      <p>Logo AWA mencerminkan tiga sosok yang saling terhubung, melambangkan sinergi dari tiga pendiri kami: Apriyanto, Muhammad Wildan,dan Abid Faturrahman.</p>
      <p>Setiap garis yang membentuk ikon menyimbolkan peran unik dan kontribusi mereka:</p>
      <ul>
        <li><strong>Apriyanto</strong> – Technical Specialist, penggerak solusi teknologi.</li>
        <li><strong>Abid Faturrahman</strong> – Entrepreneur, pengarah visi dan bisnis.</li>
        <li><strong>Muhammad Wildan</strong> – Composer, kreator ide dan identitas artistik.</li>
      </ul>
      <p>Dengan semangat <em>"Together, We Create Impact"</em>, AWA berkomitmen untuk memberikan solusi digital yang tidak hanya fungsional, tapi juga bermakna.</p>

      <ul class="stats">
        <li><strong>150+</strong> Team Members</li>
        <li><strong>2000+</strong> Happy Clients</li>
        <li><strong>99%</strong> Client Satisfaction</li>
      </ul>
    </div>
    <div class="about-img">
      <img src="images/WhatsApp Image 2025-06-22 at 11.43.15_b2492e8d.jpg" alt="Team">
    </div>
  </div>
</section>
<script>
  const filterButtons = document.querySelectorAll('.filter-btn');
  const projectCards = document.querySelectorAll('.project-card');

  filterButtons.forEach(button => {
    button.addEventListener('click', () => {
      // aktifkan tombol yang diklik
      filterButtons.forEach(btn => btn.classList.remove('active'));
      button.classList.add('active');

      const filter = button.getAttribute('data-filter');

      projectCards.forEach(card => {
        if (filter === 'all' || card.classList.contains(filter)) {
          card.style.display = 'block';
        } else {
          card.style.display = 'none';
        }
      });
    });
  });
</script>

<?php include 'footer.php'; ?>