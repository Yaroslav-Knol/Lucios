window.addEventListener("DOMContentLoaded", function() {

    // Находим все ссылки... Для каждой делаем событие - при наведении показывать тот блок информации,
    // который имеет тот же порядковый номер.

    // ШАГ 1. НАХОДИМ ВСЕ `explanation` И СОЗДАЁМ В НИХ НОМЕР СНОСКИ, ПЛЮС ВНУТРИ САМОЙ СНОСКИ ЕЁ НОМЕР

    // let href = document.querySelectorAll('.href')
    // let explanation = document.querySelectorAll('.explanation')
    // let closeBlockOfExplanation = document.querySelectorAll('.close-block-of-explanation')
    // let blockOfExplanation = document.querySelector('.block-of-explanations')

    // for (let i = 0; i < href.length; i++) {
    //     href[i].addEventListener("click", function(e) {
    //         for (let i = 0; i < href.length; i++) {
    //             explanation[i].style.display = "none"
    //             blockOfExplanation.style.display = "block"
    //         }
    //         explanation[i].style.display = "block"
    //     })
    // }

    // closeBlockOfExplanation[0].addEventListener("click", function(e) {
    //         for (let i = 0; i < href.length; i++) {
    //             blockOfExplanation.style.display = "none"
    //         }
    //     })

    // ТРЕТЬЯ ИНСТАЛЛЯЦИЯ

        let href = document.querySelectorAll('.href')
        let explanation = document.querySelectorAll('.block-of-explanations .explanation')
        let blockOfExplanation = document.querySelector('.block-of-explanations')
        let closeBlockOfExplanation = document.querySelectorAll('.close-block-of-explanation')


        for (let i = 0; i < href.length; i++) {
        href[i].addEventListener("click", function(e) {
            for (let i = 0; i < href.length; i++) {
                explanation[i].style.display = "none"
                blockOfExplanation.style.display = "block";
            }
            explanation[i].style.display = "block"
        })
    }

    closeBlockOfExplanation[0].addEventListener("click", function(e) {
            for (let i = 0; i < href.length; i++) {
                blockOfExplanation.style.display = "none";
            }
        })
})