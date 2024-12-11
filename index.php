<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AiAru Style Restaurant</title>
  <link rel="stylesheet" href="weeb.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
  
  <header class="header">
    <div class="container">
      <div class="logo">
        <h1>ABA Lounge</h1>
      </div>
      <div class="info">
        <p>г. Алматы<br>Аль-Фараби 567</p>
      </div>
      <div class="working-hours">
        <p>Вс - Чт 12:00 - 01:00<br>Пт - Сб 12:00 - 02:00</p>
      </div>
      <div class="contact">
        <p>+7 (777) 555 55 55</p>
      </div>
    </div>
  </header>
  
  <main class="main">
    <div class="background">
      <div class="content">
        <h2>ABA Lounge - Ресторан Грузинской кухни в Алматы</h2>
        <p>Грузинская кухня | Живая музыка | Караоке</p>
        <a href="#reservation" class="button">ЗАБРОНИРОВАТЬ</a>
      </div>
    </div>
  </main>

  <!-- Меню бөлімі -->
  <section class="menu-section">
    <h3>МЕНЮ</h3>
    <p>Грузин асханасының ең дәмді тағамдарын шеф-повар Нани Такаландзенің шеберлігімен тамашалаңыз!</p>
    
    <div class="menu-images">
      <img src="https://karfood.ru/wp-content/uploads/2023/10/image-19.png" alt="Тамақ">
      <img src="https://karfood.ru/wp-content/uploads/2023/10/image-20.png" alt="Тамақ">
      <img src="https://karfood.ru/wp-content/uploads/2023/10/image-23.png" alt="Тамақ">
    </div>
    
    <button id="download-menu" class="button">Менюны жүктеу</button>
  </section>

  <!-- Брондау бөлімі -->
  <section id="reservation" class="reservation-section">
    <h3>Брондау</h3>
    <p>Өзіңізге ыңғайлы уақытта үстелге тапсырыс беріңіз!</p>
    <form action="dp.php" method="POST" class="reservation-form">
      <label for="name">Атыңыз:</label>
      <input type="text" id="name" name="name" placeholder="Толық аты-жөніңіз" required>

      <label for="phone">Телефон:</label>
      <input type="tel" id="phone" name="phone" placeholder="+7 (_) ___ __ __" required>

      <label for="date">Күні:</label>
      <input type="date" id="date" name="date" required>

      <label for="time">Уақыты:</label>
      <input type="time" id="time" name="time" required>

      <button type="submit" class="button">Жіберу</button>
    </form>
  </section>

  <!-- Пікір қалдыру бөлімі -->
  <section id="reviews" class="review-section">
    <h3>Пікір қалдыру</h3>
    <p>Ресторанымыз туралы ойыңызды бізбен бөлісіңіз!</p>
    <form action="submit_review.php" method="POST" class="review-form">
      <label for="name">Атыңыз:</label>
      <input type="text" id="name" name="name" placeholder="Толық аты-жөніңіз" required>
      
      <label for="comment">Пікіріңіз:</label>
      <textarea id="comment" name="comment" placeholder="Пікіріңізді жазыңыз..." rows="6" required></textarea>
      
      <button type="submit" class="button">Жіберу</button>
    </form>
  </section>

  <script>
    // Add event listener to the button
    document.getElementById('download-menu').addEventListener('click', function() {
      // Show a confirmation dialog
      const userConfirmed = confirm('Менюны жүктегіңіз келе ме?');
      if (userConfirmed) {
        // Create a link element for downloading
        const link = document.createElement('a');
        link.href = 'https://manana.sun-group.asia/menu-manana-kzh-30-01.pdf'; // Replace with the actual menu file path
        link.download = 'https://manana.sun-group.asia/menu-manana-kzh-30-01.pdf'; // File name for download
        link.click(); // Trigger the download
      }
    });
  </script>

</body>
</html>
