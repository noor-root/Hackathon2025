@extends('layouts.app')
@include('partials.header')
@section('title', 'Home - Mentor Bootstrap Template')
@section('body-class', 'index-page')

@section('content')
<!-- Hero Section -->
<section id="hero" class="hero section dark-background">
    <img src="{{ asset('assets/img/accueil.png') }}" alt="" data-aos="fade-in">

    <div class="container">
        <h2 data-aos="fade-up" data-aos-delay="100">ISGI CASABLANCA</h2>
        <p data-aos="fade-up" data-aos-delay="200">Établissement de formation professionnelle dédié aux métiers du Digital et du Tertiaire relevant du réseau des établissements de l’OFPPT.</p>
        <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
            <a href="#" class="btn-get-started">Se connecte</a>
        </div>
    </div>
</section><!-- /Hero Section -->

<!-- About Section -->
<section id="about" class="about section">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('assets/img/apropos.jpeg') }}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
                <h3>ISGI Casablanca</h3>
                <p class="fst-italic">
                    
En tant que plus ancien établissement de formation professionnelle au Maroc géré en continu, L’ISGI de Casablanca reste déterminé à fournir une formation technique rigoureuse aux stagiaires qui seront  prêts à mener une vie de leadership et de service à leur communauté. Chaque journée à l’ISGI est remplie d’activités à la fois enrichissantes et bénéfiques.

Nous nous efforçons de nous engager envers les stagiaires que nous avons le privilège de servir, au sein de notre corps de formateurs chevronnés et de notre personnel dévoués et talentueux. Nous sommes également fiers d’avoir l’équipe la plus actif et la plus serviable dispositif dévouée au service des jeunes.
                </p>
                <!-- <ul>
                    <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                    <li><i class="bi bi-check-circle"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                    <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                </ul> -->
                <a href="#" class="read-more"><span>En savoir plus</span><i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section><!-- /About Section -->
 <h2 style="text-align: center;">ISGI en chiffres</h2>

<!-- Counts Section -->
<section id="counts" class="section counts light-background">
   
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="20000" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Jeunes formés</p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="30000" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Formateurs qualifiés</p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="80000" data-purecounter-duration="1" class="purecounter"></span>
                    <p>filieres disponibles</p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="100000" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Groupes inscrits</p>
                </div>
            </div><!-- End Stats Item -->
        </div>
    </div>
</section><!-- /Counts Section -->

<!-- Why Us Section -->
<section id="why-us" class="section why-us">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="why-box">
                    <h3>Pourquoi choisir l’ISGI Casablanca ?
</h3>
                    <p>
                    Au cœur de la transformation numérique du Maroc, l’ISGI de Casablanca forme les talents de demain. Notre formation en Développement Digital permet aux étudiants d’acquérir des compétences recherchées, une expérience pratique, et une immersion dans des projets concrets.
Que vous soyez passionné par la programmation, la résolution de problèmes ou la création de solutions innovantes, l’ISGI vous accompagne pour transformer vos ambitions en réussite.</p>
                    <div class="text-center">
                        <a href="#" class="more-btn"><span>En savoir plus</span> <i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div><!-- End Why Box -->

            <div class="col-lg-8 d-flex align-items-stretch">
                <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-xl-4">
                        <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-clipboard-data"></i>
                            <h4>Formation orientée vers l'innovation</h4>
                            <p>L'ISGI se distingue par son approche pédagogique axée sur l'innovation.  En organisant des événements tels que la Semaine régionale des métiers du Digital, l'institut offre aux étudiants des opportunités concrètes pour explorer les tendances actuelles et développer des solutions numériques innovantes. </p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-gem"></i>
                            <h4>Apprentissage pratique et collaboratif
</h4>
                            <p>Grâce à des activités comme les hackathons et les séminaires thématiques, les étudiants de l'ISGI sont immergés dans des environnements d'apprentissage collaboratifs.  Ces expériences renforcent leurs compétences techniques et leur capacité à travailler en équipe sur des projets réels. </p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-inboxes"></i>
                            <h4>Accompagnement vers l'emploi
</h4>
                            <p>L'ISGI met un point d'honneur à faciliter l'insertion professionnelle de ses diplômés.  En développant des plateformes de e-recrutement et en collaborant avec des entreprises partenaires, l'institut crée des passerelles efficaces entre la formation et le marché du travail.</p>
                        </div>
                    </div><!-- End Icon Box -->
                </div>
            </div>
        </div>
    </div>
</section><!-- /Why Us Section -->


<!-- Features Section -->
<!-- /Trainers Index Section -->


<section id="courses" class="courses section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Formation</h2>
    <p>Notre office de formation</p>
  </div>

  <div class="container">
    <div class="row">

      <!-- Course 1 -->
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="course-item">
          <img src="assets/img/course-1.jpg" class="img-fluid" alt="...">
          <div class="course-content">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <p class="category">Développement Digital option Web Full Stack</p>
            </div>
            <p class="description">Un technicien spécialisé en Développement digital option Full Stack est un professionnel capable de réaliser des tâches à n'importe quel niveau technique de la pile des...</p>
            <div class="trainer d-flex justify-content-between align-items-center">
              <div class="trainer-profile d-flex align-items-center">
                <img src="assets/img/trainers/trainer-1-2.jpg" class="img-fluid" alt="">
                <a href="#" class="trainer-link">Ahmed</a>
              </div>
              <div class="trainer-rank d-flex align-items-center">
                <i class="bi bi-person user-icon"></i>&nbsp;50
                &nbsp;&nbsp;
                <i class="bi bi-heart heart-icon"></i>&nbsp;65
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Course 2 -->
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
        <div class="course-item">
          <img src="assets/img/course-2.jpg" class="img-fluid" alt="...">
          <div class="course-content">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <p class="category">Infrastructure Digitale option Systèmes et Réseaux</p>
            </div>
            <p class="description">Après avoir participé à l’analyse des projets clients avec les chefs de projets, le technicien spécialisé en Systèmes et Réseaux assiste et répond aux besoins...</p>
            <div class="trainer d-flex justify-content-between align-items-center">
              <div class="trainer-profile d-flex align-items-center">
                <img src="assets/img/trainers/trainer-2-2.jpg" class="img-fluid" alt="">
                <a href="#" class="trainer-link">Lamis</a>
              </div>
              <div class="trainer-rank d-flex align-items-center">
                <i class="bi bi-person user-icon"></i>&nbsp;35
                &nbsp;&nbsp;
                <i class="bi bi-heart heart-icon"></i>&nbsp;42
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Course 3 -->
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="300">
        <div class="course-item">
          <img src="assets/img/course-3.jpg" class="img-fluid" alt="...">
          <div class="course-content">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <p class="category">Gestion des Entreprises option Comptabilité et Finance</p>
            </div>
            <p class="description">Le Technicien Spécialisé en Gestion des Entreprises Option Comptabilité et Finance, au sein des services administratifs, comptables et financiers des entreprises,...</p>
            <div class="trainer d-flex justify-content-between align-items-center">
              <div class="trainer-profile d-flex align-items-center">
                <img src="assets/img/trainers/trainer-3-2.jpg" class="img-fluid" alt="">
                <a href="#" class="trainer-link">Samer</a>
              </div>
              <div class="trainer-rank d-flex align-items-center">
                <i class="bi bi-person user-icon"></i>&nbsp;20
                &nbsp;&nbsp;
                <i class="bi bi-heart heart-icon"></i>&nbsp;85
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
 <!-- <h2 style="text-align: center;">Avis</h2> -->

<section id="trainers-index" class="section trainers-index">
    
  <div class="container">
    <div class="row">

      <!-- Trainer 1 -->
      <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
        <div class="member">
          <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
          <div class="member-content">
            <h4>M. El Idrissi</h4>
            <span>Formateur en développement Web</span>
            <p>Cette formation permet aux étudiants de maîtriser les outils les plus récents du web. Ils sortent prêts à intégrer des projets réels dès la fin du cursus</p>
            <div class="social">
              <a href="#"><i class="bi bi-twitter-x"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Trainer 2 -->
      <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
        <div class="member">
          <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
          <div class="member-content">
            <h4>Mme Benhima</h4>
            <span>Experte en développement Full-Stack</span>
            <p>Le programme est bien structuré et axé sur la pratique. Les apprenants développent rapidement une autonomie précieuse sur des technologies modernes comme Laravel et React</p>
            <div class="social">
              <a href="#"><i class="bi bi-twitter-x"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Trainer 3 -->
      <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
        <div class="member">
          <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
          <div class="member-content">
            <h4>M. Ouarzazi</h4>
            <span>Consultant en technologie numérique
</span>
            <p>J’apprécie l’engagement des étudiants et l’approche agile adoptée. C’est une formation qui reflète parfaitement les attentes du marché</p>
            <div class="social">
              <a href="#"><i class="bi bi-twitter-x"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
