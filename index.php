<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hesap Makinesi</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="krem-tema">
    <div class="hesap-makinesi">
        <div class="ust-kisim">
            <div class="tema-switch">
                <label class="switch">
                    <input type="checkbox" id="temaDegistir">
                    <span class="slider"></span>
                </label>
                <span class="light-mode-icon">🌞</span>
            </div>
            <button id="gecmisTusu">Geçmiş</button>
        </div>
        <div class="ekran">
            <div class="son-islemler" id="sonIslemler">
                <div id="islem1"></div>
                <div id="islem2"></div>
                <div id="islem3"></div>
            </div>
            <div id="ana-ekran">0</div>
        </div>
        <div class="buton-kutucugu">
            <div class="islem-butonlari">
                <button class="temizle">C</button>
                <button class="islem">/</button>
                <button class="islem">*</button>
                <button class="islem">-</button>
                <button class="islem">+</button>
                <button class="esittir">=</button>
            </div>
            <div class="sayi-butonlari">
                <button class="sayi">7</button>
                <button class="sayi">8</button>
                <button class="sayi">9</button>
                <button class="sayi">4</button>
                <button class="sayi">5</button>
                <button class="sayi">6</button>
                <button class="sayi">1</button>
                <button class="sayi">2</button>
                <button class="sayi">3</button>
                <button class="sayi">0</button>
                <button class="sayi">00</button>
                <button class="nokta">.</button>
            </div>
        </div>
    </div>
    <script src="scripts.js"></script>
</body>
</html>
