// Скрипт модального окна
const openModalButton = document.getElementById('openModalButton');
const modal = document.getElementById('modal');
const closeModalButton = document.getElementById('closeModalButton');
// const scrollToTopButton = document.getElementById("myBtn"); // Кнопка прокрутки вверх

// // Функция для проверки и отображения кнопки прокрутки вверх
// function checkScrollAndShowButton() {
//     if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
//         scrollToTopButton.style.display = "block";
//     } else {
//         scrollToTopButton.style.display = "none";
//     }
// }

// Открываем модальное окно при клике на кнопку
openModalButton.addEventListener('click', () => {
    modal.style.display = "block";
    document.body.style.overflow = 'hidden';  // Отключаем прокрутку
    // scrollToTopButton.style.display = "none"; // Скрываем кнопку прокрутки вверх
});

// Закрываем модальное окно при клике на кнопку закрытия
closeModalButton.addEventListener('click', () => {
    modal.style.display = "none";
    document.body.style.overflow = 'auto'; // Включаем прокрутку обратно
    checkScrollAndShowButton(); // Проверяем положение прокрутки и показываем кнопку
});

// Закрываем модальное окно при клике вне его
window.addEventListener('click', (event) => {
    if (event.target === modal) {
        modal.style.display = "none";
        document.body.style.overflow = 'auto'; // Включаем прокрутку обратно
        checkScrollAndShowButton(); // Проверяем положение прокрутки и показываем кнопку
    }
});

// Обновляем отображение кнопки при прокрутке
window.onscroll = function() {
    checkScrollAndShowButton();
};
