<div class="menu">
    <ul class="menu-frame flex">
        <li>
            <a href="/home" class="menu-icon flex">
                <img src="icon/home-screen/rumah.svg">
                Home
            </a>
        </li>
        <li>
            <a href="/hotel" class="menu-icon flex">
                <img src="icon/home-screen/hotel.svg">
                Hotel
            </a>
        </li>
        <li>
            <label class="menu-icon flex" for="destinasi-check">
                <img src="icon/home-screen/destinasi.svg">
                Destinasi
            </label>
            <input type="checkbox" id="destinasi-check" class="destinasi-check" name="check" onclick="onlyOne(this)">
            <ul class="dropdown">
                <li><a href="/wisata-alam">Wisata Alam</a></li>
                <li><a href="/wisata-buatan">Wisata Buatan</a></li>
                <li><a href="/wisata-budaya">Wisata Budaya</a></li>
            </ul>
        </li>
        <li>
            <label class="menu-icon flex" for="makanan-check">
                <img src="icon/home-screen/makanan.svg">
                Makanan
            </label>
            <input type="checkbox" id="makanan-check" class="makanan-check" name="check" onclick="onlyOne(this)">
            <ul class="dropdown">
                <li><a href="/resto">Restoran</a></li>
                <li><a href="/kafe">Kafe</a></li>
                <li><a href="/kuliner">Kuliner</a></li>
            </ul>
        </li>
        <li>
            <a href="/travel" class="menu-icon flex">
                <img src="icon/home-screen/travel.svg">
                Travel
            </a>
        </li>
        <li>
            <a href="/oleh-oleh" class="menu-icon flex">
                <img src="icon/home-screen/oleh-oleh.svg">
                Oleh-Oleh
            </a>
        </li>
    </ul>
</div>
