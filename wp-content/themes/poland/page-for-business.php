<?php
/*
Template Name: Page for business
*/

get_header();?>

<section class="biznes-top">
    <div class="flex_container biznes-top-container">
        <h2>Oszczędzaj z fotowoltaiką dla biznesu!</h2>
    </div>
</section>

<section class="biznes-second">
    <div class="flex_container biznes-second-container">
        <h3 class="title-with-line">Więcej niż oszczędności</h3>
        <div class="biznes-second-middle-block">
            <p>Obniż koszty funkcjonowania Twojej firmy razem z fotowoltaiką dla biznesu!</p>
            <a class="blue-long-btn" href="#">Chcę się spotkać z Doradcą Energetycznym</a>
        </div>
    </div>
</section>

<section class="biznes-icons">
    <div class="flex_container">
        <h3 class="title-with-line">NIEZALEŻNOŚĆ ENERGETYCZNA</h3>
        <div class="biznes-icons-middle">
            <div class="biznes-icons-middle__block">
                <svg class="icon-big"><use xlink:href="#biznes-1"/></svg>
                <h4>OSZCZĘDZASZ I ZARABIASZ</h4>
                <span>od pierwszego dnia podłączenia do sieci</span>
            </div>
            <div class="biznes-icons-middle__block">
                <svg class="icon-big"><use xlink:href="#biznes-1"/></svg>
                <h4>OSZCZĘDZASZ I ZARABIASZ</h4>
                <span>od pierwszego dnia podłączenia do sieci</span>
            </div>
            <div class="biznes-icons-middle__block">
                <svg class="icon-big"><use xlink:href="#biznes-1"/></svg>
                <h4>OSZCZĘDZASZ I ZARABIASZ</h4>
                <span>od pierwszego dnia podłączenia do sieci</span>
            </div>
        </div>
    </div>
</section>

<section class="biznes-tabs">
  <div class="flex_container">
        <h3 class="title-with-line">JAK TO DZIAŁA?</h3>
        <div class="biznes-tabs-middle">
            <div class="biznes-tabs-left">
                
                <div class="tabbed">
                    <input type="radio" name="tabs" id="tab-nav-1" checked>
                    <label for="tab-nav-1">1</label>
                    <input type="radio" name="tabs" id="tab-nav-2">
                    <label for="tab-nav-2">2</label>
                    <input type="radio" name="tabs" id="tab-nav-3">
                    <label for="tab-nav-3">3</label>
                    <div class="tabs">
                        <div>
                            <p>Zawsze kiedy jest jasno, Twoja instalacja fotowoltaiczna produkuje energię elektryczną.</p>
                        </div>
                        <div>
                            <p>Elektrownia słoneczna jest bardzo prosta. Składa się z paneli, falownika (inwertera), zabezpieczeń elektrycznych, okablowania i licznika dwukierunkowego. Wszystko będzie działać kilkadziesiąt lat.</p>
                        </div>
                        <div>
                            <p>Instalacja jest przyłączona do sieci energetycznej, do której Twoja firma może oddawać prąd.</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="biznes-tabs-right">
                <img src="/wp-content/themes/poland/images/tabs-right-img.jpg" alt="">
            </div>
        </div>
  </div>
</section>

<section class="whole-slider">
 
        <div class="single-item">
            <div class="holder">
                <img src="/wp-content/themes/poland/images/slider-1.jpg" alt="">
            </div>
            <div class="holder">
                <img src="/wp-content/themes/poland/images/slider-2.jpg" alt="">    
            </div>
            <div class="holder">
                <img src="/wp-content/themes/poland/images/slider-3.jpg" alt="">
            </div>
       </div>

   
</section>

<section class="search-section">
    <div class="flex_container search-section-container"> 
        <h4 class="flex_col-desk--1-4 wow animate__fadeInLeft" data-wow-duration="1.5s">Chcesz być na bieżąco?</h4>
        <p class="flex_col-desk--1-2 wow animate__fadeInUp" data-wow-duration="1.5s">Zapisz się do naszego darmowego newslettera i bądź na bieżąco z nowościami.</p>
        <form class="search-section-form flex_col-desk--1-4 wow animate__fadeInRight" data-wow-duration="1.5s" action="">
            <input type="text" placeholder="WPISZ SWÓJ E-MAIL">
            <button type="submit"></button>
        </form>
    </div>
</section>

<?php get_footer();?>