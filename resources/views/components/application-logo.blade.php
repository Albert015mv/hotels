<svg viewBox="0 0 330 330" xmlns="http://www.w3.org/2000/svg" aria-labelledby="logoTitle" role="img"
    {{ $attributes }}>
    <title id="logoTitle">Logo de Teapa</title>
    <!-- Define un clipPath con un círculo más grande -->
    <defs>
        <clipPath id="roundedClip">
            <circle cx="165" cy="165" r="200" /> <!-- Aumentar el radio a 160 -->
        </clipPath>
    </defs>
    <!-- Aplica el clipPath a la imagen -->
    <image href="/img/logoTeapa.png" x="0" y="0" width="330" height="330" clip-path="url(#roundedClip)"
        preserveAspectRatio="xMidYMid slice" alt="Logo de Teapa" />
</svg>
