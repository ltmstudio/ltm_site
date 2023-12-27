element.addEventListener('mousemove', (e) => {
    const {
        offsetX,
        offsetY
    } = e;
    const {
        clientWidth,
        clientHeight
    } = element;

    // Проверяем, находится ли курсор внутри элемента
    if (offsetX >= 0 && offsetX <= clientWidth && offsetY >= 0 && offsetY <= clientHeight) {
        // Если курсор внутри элемента, то двигаем элемент за курсором
        const x = (offsetX - clientWidth / 5) / 2; // Для плавности можно изменять делитель
        const y = (offsetY - clientHeight / 5) / 2;
        element.style.transform = `translate(${x}px, ${y}px) scale(1.1)`;
    }
});