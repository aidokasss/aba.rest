// Пікірлерді сақтау үшін массив
const reviews = [];

// "Пікірді қосу" батырмасы
document.getElementById('submit-review').addEventListener('click', function () {
  const name = document.getElementById('name').value.trim();
  const comment = document.getElementById('comment').value.trim();

  // Енгізілген мәліметтерді тексеру
  if (name && comment) {
    // Жаңа пікірді массивке қосу
    reviews.push({ name, comment });

    // Пікірді қосқан соң, өрістерді тазалау
    document.getElementById('name').value = '';
    document.getElementById('comment').value = '';

    alert('Пікіріңіз қосылды!');
  } else {
    alert('Барлық өрістерді толтырыңыз.');
  }
});

// "Пікірлерді көру" батырмасы
document.getElementById('show-reviews').addEventListener('click', function () {
  const reviewsList = document.getElementById('reviews-list');
  const reviewsContainer = document.getElementById('reviews-container');

  // Егер пікірлер массиві бос болмаса, оларды көрсету
  if (reviews.length > 0) {
    reviewsContainer.innerHTML = ''; // Алдыңғы пікірлерді тазалау

    // Пікірлерді HTML түрінде қосу
    reviews.forEach((review, index) => {
      const listItem = document.createElement('li');
      listItem.innerHTML = `<strong>${index + 1}. ${review.name}:</strong> ${review.comment}`;
      reviewsContainer.appendChild(listItem);
    });

    // Пікірлерді көрсететін бөлімді көрсету
    reviewsList.style.display = 'block';
  } else {
    alert('Әзірге пікірлер жоқ.');
  }
});
