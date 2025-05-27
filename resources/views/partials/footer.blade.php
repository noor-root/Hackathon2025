<footer id="footer" class="footer position-relative light-background">
    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
                <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                    <span class="sitename">ISGI Casablanca</span>
                </a>
                <div class="footer-contact pt-3">
                    <p>21 rue d’Avesnes, boulevard Mohammed V – Belvédère
Casablanca – Maroc.</p>
                    <p class="mt-3"><strong>Phone:</strong> <span>+212 522099890</span></p>
                    <p><strong>Email:</strong> <span>ISGI@example.com</span></p>
                </div>
                <div class="social-links d-flex mt-4">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Useful Links</h4>
                <ul>
                    <li><a href="{{ route('home') }}">Accueil</a></li>
                    <li><a href="#">Apropos</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Avis</a></li>
                    <!-- <li><a href="#">Privacy policy</a></li> -->
                </ul>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Formations</h4>
                <ul>
                    <li><a href="#">Developpement Digital</a></li>
                    <li><a href="#">Infrastructure Digitale</a></li>
                    <li><a href="#">Gestion des Entreprises</a></li>
                    <!-- <li><a href="#">Marketing</a></li>
                    <li><a href="#">Graphic Design</a></li> -->
                </ul>
            </div>

           <div class="col-lg-4 col-md-12 footer-newsletter">
    <h4>Notre Newsletter</h4>
    <p>Abonnez-vous à notre newsletter et recevez les dernières nouvelles sur nos produits et services !</p>
    <form action="#" method="post" class="php-email-form">
        @csrf
        <div class="newsletter-form">
            <input type="email" name="email" required placeholder="Votre adresse e-mail">
            <input type="submit" value="S'abonner">
        </div>
        <div class="loading">Chargement...</div>
        <div class="error-message"></div>
        <div class="sent-message">Votre demande d'abonnement a été envoyée. Merci !</div>
    </form>
</div>

    </div>

    <div class="container copyright text-center mt-4">
        <p>Copyright © 2025 ISGI CASABLANCA | Propulsé par ISGI CASABLANCA.</p>
        
    </div>
</footer>