<?php $ptitle= 'Home Page'; include '_header.php'; ?>
    

        <div class="my_slider" id="myCards">
            <picture>
                <source srcset="./images/cruise-ship1-small.jpg" media="(max-width: 560px)"><img src="./images/cruise-ship1-large.jpg" alt="Cruise ship">
            </picture>
            <picture>
                <source srcset="./images/cruise-ship2-small.jpg" media="(max-width: 560px)"><img src="./images/cruise-ship2-large.jpg" alt="Cruise ship">
            </picture>
            <picture>
                <source srcset="./images/cruise-ship3-small.jpg" media="(max-width: 560px)"><img src="./images/cruise-ship3-large.jpg" alt="Cruise ship">
            </picture>
            <picture>
                <source srcset="./images/cruise-ship4-small.jpg" media="(max-width: 560px)"><img src="./images/cruise-ship4-large.jpg" alt="Cruise ship">
            </picture>
        </div>

        <h2 id="articles">Recent Blog Articles</h2>

        <div class="familyGallery">
            <figure class="card"><img src="./images/room.jpg" alt="Blog 1"><figcaption>May 1, 2018</figcaption></figure>
            <figure class="card"><img src="./images/room.jpg" alt="Blog 2"><figcaption>May 1, 2018</figcaption></figure>
            <figure class="card"><img src="./images/room.jpg" alt="Blog 3"><figcaption>May 1, 2018</figcaption></figure>
            <figure class="card"><img src="./images/room.jpg" alt="Blog 4"><figcaption>May 1, 2018</figcaption></figure>
        </div>

<?php include '_footer.php'; ?>