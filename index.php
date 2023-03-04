<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title><?php echo "Title"?></title>
</head>

<body>
    <div class="installation">
        <!-- <img src="color-background-3.jpg"> -->
        <div class="container-of-interactive">
            <div class="illustration">
                <img src="sem-planov.jpg">
                <a class="href about"> </a>
                <a class="href adi"> </a>
                <a class="href anu"> </a>
                <!-- <a class="href mental-adi"> </a> -->
                <!-- <a class="href mental-anu"> </a> -->
                <a class="href atma" onclick="wisdom(intelligence_of_atma)"> </a>
                <!-- <a class="href atma-atma"> </a>
                <a class="href atma-buddhi"> </a>
                <a class="href atma-mental"> </a>
                <a class="href atma-astral"> </a>
                <a class="href atma-physic"> </a> -->
                <a class="href buddhi" onclick="wisdom(intelligence_of_buddhi)"> </a>
                <!-- <a class="href buddhi-atma"> </a>
                <a class="href buddhi-buddhi"> </a>
                <a class="href buddhi-mental"> </a>
                <a class="href buddhi-astral"> </a>
                <a class="href buddhi-physic"> </a> -->
                <a class="href mental" onclick="wisdom(intelligence_of_mental)"> </a>
                <a class="href mental-atma"> </a>
                <a class="href mental-buddhi" onclick="wisdom(intelligence_of_mental_buddhi)"> </a>
                <a class="href mental-mental"> </a>
                <a class="href mental-astral"> </a>
                <a class="href mental-physic"> </a>
                <a class="href astral" onclick="wisdom(intelligence_of_astral)"> </a>
                <a class="href astral-atma"> </a>
                <a class="href astral-buddhi"> </a>
                <a class="href astral-mental"> </a>
                <a class="href astral-astral"> </a>
                <a class="href astral-physic"> </a>
                <a class="href physic" onclick="wisdom(intelligence_of_physic)"> </a>
                <a class="href physic-atma"> </a>
                <a class="href physic-buddhi"> </a>
                <a class="href physic-mental"> </a>
                <a class="href physic-astral"> </a>
                <a class="href physic-physic"> </a>
            </div>
        </div>
        <div class="block-of-explanations">
            <div class="search-panel">
                <form>
                    <input type="text" name="text" class="search" placeholder="Перейти по номеру">
                </form>
            </div>
            <div class="explanation-block"></div>
        </div>
    </div>
    </div>
    <style type="text/css">
    :root {
        /* Отступы для планов */
        --plans-left: 6.3cqw;
        --plans-width: 30.6cqw;
        --plans-height: 18.9cqw;
        --pod-plans-left: 36.9cqw;
        /*--pod-plans-width: 30.6cqw;*/
        --love-colors: #b10f9d;
        ;
        --will-colors: #9d00ff;
    }

    body {
        margin: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        min-height: 100vh;
    }

    .search-panel {
        padding: 15px;
    }

    .installation {
        background-size: cover;
        display: flex;
        flex-direction: row;
        justify-content: center;
        width: min(100%, 1200px);
        align-items: stretch;
    }

    .container-of-interactive {
        width: min(100%, 500px);
        border: 1px solid lightgray;
        border-right: 0;
    }

    img {
        width: inherit;
    }

    .illustration {
        width: min(100vw, 500px);
        container-type: inline-size;
        display: flex;
    }

    .href {
        position: absolute;
        display: block;
        opacity: 0;
        transition: all 0.3s;
    }

    .href:hover {
        cursor: pointer;
        transition: all 0.3s;
        opacity: 0.3;
    }

    /* АТМИЧЕСКИЙ ПЛАН */
    .adi {
        width: 30.7cqw;
        height: 18.9cqw;
        top: 11.5cqw;
        left: var(--plans-left);
        background-color: var(--will-colors);
    }

    /* АТМИЧЕСКИЙ ПЛАН */
    .anu {
        width: 30.7cqw;
        height: 18.9cqw;
        top: 30.2cqw;
        left: var(--plans-left);
        background-color: var(--love-colors);
    }

    /* АТМИЧЕСКИЙ ПЛАН */
    .atma {
        width: 30.7cqw;
        height: 18.9cqw;
        top: 49cqw;
        left: var(--plans-left);
        background-color: var(--will-colors);
    }

    .atma-atma {
        width: 55.1cqw;
        height: 2.8cqw;
        top: 92.3cqw;
        left: var(--pod-plans-left);
        background-color: var(--will-colors);
    }

    .atma-buddhi {
        width: 55.1cqw;
        height: 2.8cqw;
        top: 95.2cqw;
        left: var(--pod-plans-left);
        background-color: var(--love-colors);
    }

    .atma-mental {
        width: 55.1cqw;
        height: 2.8cqw;
        top: 97.8cqw;
        left: var(--pod-plans-left);
        background-color: var(--will-colors);
    }

    .atma-astral {
        width: 55.1cqw;
        height: 2.8cqw;
        top: 100.5cqw;
        left: var(--pod-plans-left);
        background-color: var(--love-colors);
    }

    .atma-physic {
        width: 55.1cqw;
        height: 2.3cqw;
        top: 103.3cqw;
        left: var(--pod-plans-left);
        background-color: var(--will-colors);
    }

    /* БУДДХИЧЕСКИЙ ПЛАН */
    .buddhi {
        width: 30.7cqw;
        height: 18.9cqw;
        top: 68cqw;
        left: var(--plans-left);
        background-color: var(--love-colors);
    }

    .buddhi-atma {
        width: 55.1cqw;
        height: 2.8cqw;
        top: 92.3cqw;
        left: var(--pod-plans-left);
        background-color: var(--will-colors);
    }

    .buddhi-buddhi {
        width: 55.1cqw;
        height: 2.8cqw;
        top: 95.2cqw;
        left: var(--pod-plans-left);
        background-color: var(--love-colors);
    }

    .buddhi-mental {
        width: 55.1cqw;
        height: 2.8cqw;
        top: 97.8cqw;
        left: var(--pod-plans-left);
        background-color: var(--will-colors);
    }

    .buddhi-astral {
        width: 55.1cqw;
        height: 2.8cqw;
        top: 100.5cqw;
        left: var(--pod-plans-left);
        background-color: var(--love-colors);
    }

    .buddhi-physic {
        width: 55.1cqw;
        height: 2.3cqw;
        top: 103.3cqw;
        left: var(--pod-plans-left);
        background-color: var(--will-colors);
    }

    /* МЕНТАЛЬНЫЙ ПЛАН */
    .mental {
        width: 30.7cqw;
        height: 18.9cqw;
        top: 87cqw;
        left: var(--plans-left);
        background-color: var(--will-colors);
    }

    .mental-atma {
        width: 55.1cqw;
        height: 2.8cqw;
        top: 92.3cqw;
        left: var(--pod-plans-left);
        background-color: var(--will-colors);
    }

    .mental-buddhi {
        width: 55.1cqw;
        height: 2.8cqw;
        top: 95.2cqw;
        left: var(--pod-plans-left);
        background-color: var(--love-colors);
    }

    .mental-mental {
        width: 55.1cqw;
        height: 2.8cqw;
        top: 97.8cqw;
        left: var(--pod-plans-left);
        background-color: var(--will-colors);
    }

    .mental-astral {
        width: 55.1cqw;
        height: 2.8cqw;
        top: 100.5cqw;
        left: var(--pod-plans-left);
        background-color: var(--love-colors);
    }

    .mental-physic {
        width: 55.1cqw;
        height: 2.3cqw;
        top: 103.3cqw;
        left: var(--pod-plans-left);
        background-color: var(--will-colors);
    }

    /* АСТРАЛЬНЫЙ ПЛАН */
    .astral {
        width: var(--plans-width);
        height: var(--plans-height);
        top: 105.7cqw;
        left: var(--plans-left);
        background-color: var(--love-colors);
    }

    .astral-atma {
        width: 55.1cqw;
        height: 2.8cqw;
        top: 110.95cqw;
        left: var(--pod-plans-left);
        background-color: var(--will-colors);
    }

    .astral-buddhi {
        width: 55.1cqw;
        height: 2.8cqw;
        top: 113.65cqw;
        left: var(--pod-plans-left);
        background-color: var(--love-colors);
    }

    .astral-mental {
        width: 55.1cqw;
        height: 2.8cqw;
        top: 116.4cqw;
        left: var(--pod-plans-left);
        background-color: var(--will-colors);
    }

    .astral-astral {
        width: 55.1cqw;
        height: 2.8cqw;
        top: 119.15cqw;
        left: var(--pod-plans-left);
        background-color: var(--love-colors);
    }

    .astral-physic {
        width: 55.1cqw;
        height: 2.5cqw;
        top: 122cqw;
        left: var(--pod-plans-left);
        background-color: var(--will-colors);
    }

    /* ФИЗИЧЕСКИЙ ПЛАН */
    .physic {
        width: var(--plans-width);
        height: var(--plans-height);
        top: 124.5cqw;
        left: var(--plans-left);
        background-color: var(--will-colors);
    }

    .physic-atma {
        width: 55.1cqw;
        height: 2.8cqw;
        top: 130cqw;
        left: var(--pod-plans-left);
        background-color: var(--will-colors);
    }

    .physic-buddhi {
        width: 55.1cqw;
        height: 2.8cqw;
        top: 132.75cqw;
        left: var(--pod-plans-left);
        background-color: var(--love-colors);
    }

    .physic-mental {
        width: 55.1cqw;
        height: 2.8cqw;
        top: 135.6cqw;
        left: var(--pod-plans-left);
        background-color: var(--will-colors);
    }

    .physic-astral {
        width: 55.1cqw;
        height: 2.8cqw;
        top: 138.25cqw;
        left: var(--pod-plans-left);
        background-color: var(--love-colors);
    }

    .physic-physic {
        width: 55.1cqw;
        height: 2.3cqw;
        top: 141cqw;
        left: var(--pod-plans-left);
        background-color: var(--will-colors);
    }

    .block-of-explanations h4 {
        font-size: 20px;
        font-family: trebuchet ms;
    }

    .block-of-explanations {
        background-color: #FFF8F5;
        background-size: cover;
        text-align: justify;
        font-family: verdana;
        border: 1px solid lightgray;
        color: #393124;
        width: 100%;
        overflow: overlay;
        display: flex;
        max-height: 745.86px;
        display: flex;
        flex-direction: column;
    }

    .block-of-explanations::-webkit-scrollbar {
        width: 0;
    }

    .explanation {
        padding: 20px;
        /*display: none;*/
    }

    .explanation.explanation-start {
        display: block;
    }

    @media screen and (max-width: 767px) {
        .block-of-explanations {
            top: 60px;
            width: 100%;
            min-height: 100vh;
            max-height: initial;
        }

        .installation {
            flex-direction: column;
            align-items: center;
        }

    }
    </style>
</body>
<script src="explanations.js?v=2"></script>
<script type="text/javascript">
</script>

</html>
