const typingTextElement = document.querySelector('.typing-text');
const cursorElement = document.querySelector('.cursor');
const textArray = ["IT решения", "Автоматизация","Разработка веб-сайта","Внедрение ISO стандартов"]; // Add your array of strings here
let currentTextIndex = 0;
let currentCharIndex = -1;
let isDeleting = false;

function typeText() {
    const currentText = textArray[currentTextIndex];

    if (!isDeleting) {
        currentCharIndex++;

        if (currentCharIndex < currentText.length) {
            // typingTextElement.textContent += currentText[currentCharIndex];
            setTimeout(typeText, 100); // Typing speed (adjust as needed)
        } else {
            isDeleting = true;
            setTimeout(typeText, 1000); // Delay before starting deletion
        }
    } else {
        currentCharIndex--;

        if (currentCharIndex >= 0) {
            // typingTextElement.textContent = currentText.slice(0, currentCharIndex);
            setTimeout(typeText, 20); // Deletion speed (adjust as needed)
        } else {
            isDeleting = false;
            currentTextIndex = (currentTextIndex + 1) % textArray.length;
            setTimeout(typeText, 500); // Delay before typing next text
        }
    }
}
setTimeout(typeText, 500); // Start the typing and deleting process