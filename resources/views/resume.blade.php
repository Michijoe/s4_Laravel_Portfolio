@extends('master')
@section('title', 'CV')
@section('content')
<!-- Page Content-->
<div class="container px-5 my-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">CV</span></h1>
    </div>
    <div class="row gx-5 justify-content-center">
        <div class="col-lg-11 col-xl-9 col-xxl-8">
            <!-- Skills Section-->
            <section>
                <!-- Skillset Card-->
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <!-- Professional skills list-->
                        <div class="mb-5">
                            <div class="d-flex align-items-center mb-4">
                                <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-tools"></i></div>
                                <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Compétences</span></h3>
                            </div>
                            <div class="row row-cols-1 row-cols-md-3 mb-4">
                                <div class="col mb-4 mb-md-0">
                                    <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Back-end</div>
                                </div>
                                <div class="col mb-4 mb-md-0">
                                    <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Front-end</div>
                                </div>
                                <div class="col mb-4 mb-md-0">
                                    <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Git</div>
                                </div>
                            </div>
                            <div class="row row-cols-1 row-cols-md-3">
                                <div class="col mb-4 mb-md-0">
                                    <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Méthode Agile</div>
                                </div>
                                <div class="col mb-4 mb-md-0">
                                    <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Suite Adobe</div>
                                </div>
                                <div class="col">
                                    <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Windows et Mac</div>
                                </div>
                            </div>
                        </div>
                        <!-- Languages list-->
                        <div class="mb-0">
                            <div class="d-flex align-items-center mb-4">
                                <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-code-slash"></i></div>
                                <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Langages, Frameworks et Librairies</span></h3>
                            </div>
                            <div class="row row-cols-1 row-cols-md-3 mb-4">
                                <div class="col mb-4 mb-md-0">
                                    <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">HTML</div>
                                </div>
                                <div class="col mb-4 mb-md-0">
                                    <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">CSS</div>
                                </div>
                                <div class="col">
                                    <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">JavaScript</div>
                                </div>
                            </div>
                            <div class="row row-cols-1 row-cols-md-3 mb-4">
                                <div class="col mb-4 mb-md-0">
                                    <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">PHP</div>
                                </div>
                                <div class="col mb-4 mb-md-0">
                                    <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">SQL</div>
                                </div>
                                <div class="col">
                                    <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Laravel</div>
                                </div>
                            </div>
                            <div class="row row-cols-1 row-cols-md-3">
                                <div class="col mb-4 mb-md-0">
                                    <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Bootstrap</div>
                                </div>
                                <div class="col mb-4 mb-md-0">
                                    <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">React.js</div>
                                </div>
                                <div class="col">
                                    <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Vue.js</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Experience Section-->
            <section>
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h2 class="text-primary fw-bolder mb-0">Expérience professionnelle</h2>
                    <!-- Download resume button-->
                    <a class="btn btn-primary px-4 py-3" href="{{asset('assets/JohannaPenet_CV.pdf')}}" target="_blank">
                        <div class="d-inline-block bi bi-download me-2"></div>
                        Télécharger le CV
                    </a>
                </div>
                <!-- Experience Card 1-->
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <div class="row align-items-center gx-5">
                            <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                <div class="bg-light p-4 rounded-4">
                                    <div class="text-primary fw-bolder mb-2">2020 - 2022</div>
                                    <div class="small fw-bolder">Technicienne aux plateformes numériques</div>
                                    <div class="small text-muted">TV5 Québec Canada</div>
                                    <div class="small text-muted">Montréal, QC</div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <ul>
                                    <li>Programmation des contenus audiovisuels sur toutes les plateformes web et télé exploitées par TV5 selon les stratégies multiplateformes établies ;</li>
                                    <li>Suivi des processus de mise en ligne et d'encodage des contenus ;</li>
                                    <li>Participation au contrôle qualité et à l’amélioration continue des plateformes numériques de visionnement en ligne.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Experience Card 2-->
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <div class="row align-items-center gx-5">
                            <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                <div class="bg-light p-4 rounded-4">
                                    <div class="text-primary fw-bolder mb-2">2019 - 2020</div>
                                    <div class="small fw-bolder">Coordonnatrice, Opération contenu</div>
                                    <div class="small text-muted">Vidéotron</div>
                                    <div class="small text-muted">Montréal, QC</div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <ul>
                                    <li>Alimentation des plateformes web et télé de Vidéo Sur Demande en contenus audiovisuels : saisie des métadonnées et des normes d’affichage, validation des encodages vidéos ;</li>
                                    <li>Investigation des erreurs d’intégration des contenus et résolution technique.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Experience Card 3-->
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <div class="row align-items-center gx-5">
                            <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                <div class="bg-light p-4 rounded-4">
                                    <div class="text-primary fw-bolder mb-2">2018 - 2018</div>
                                    <div class="small fw-bolder">Documentaliste audiovisuel</div>
                                    <div class="small text-muted">M Stories</div>
                                    <div class="small text-muted">Paris, FR</div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <ul>
                                    <li>Gestion et administration de la vidéothèque : intégration et encodages des vidéos, gestion des droits et des utilisateurs, traitement documentaire, mise à jour des bases de données et archivage du fonds ;</li>
                                    <li>Support client : coordination du suivi entre les producteurs et les commanditaires.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Experience Card 4-->
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <div class="row align-items-center gx-5">
                            <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                <div class="bg-light p-4 rounded-4">
                                    <div class="text-primary fw-bolder mb-2">2016 - 2017</div>
                                    <div class="small fw-bolder">Coordonnatrice de la banque d’images</div>
                                    <div class="small text-muted">Producteurs Laitiers du Canada</div>
                                    <div class="small text-muted">Montréal, QC</div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <ul>
                                    <li>Gestion de la banque d’images : inventaire, classification, intégration dans la base de données, et communication des images produites ou achetées par les PLC.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Education Section-->
            <section>
                <h2 class="text-secondary fw-bolder mb-4">Éducation</h2>
                <!-- Education Card 1-->
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <div class="row align-items-center gx-5">
                            <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                <div class="bg-light p-4 rounded-4">
                                    <div class="text-secondary fw-bolder mb-2">2022 - 2024</div>
                                    <div class="mb-2">
                                        <div class="small fw-bolder">Collège de Maisonneuve</div>
                                        <div class="small text-muted">Montréal, QC</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="fst-italic">
                                    <div class="text-muted">Attestation d’Études Collégiales</div>
                                    <div class="fw-bolder">Conception et programmation de sites web</div>
                                </div>
                                <div>Moyenne 95.5% — Cote R 32.383</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Education Card 2-->
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <div class="row align-items-center gx-5">
                            <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                <div class="bg-light p-4 rounded-4">
                                    <div class="text-secondary fw-bolder mb-2">2011 - 2012</div>
                                    <div class="mb-2">
                                        <div class="small fw-bolder">Université de Lille 3</div>
                                        <div class="small text-muted">France</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="fst-italic">
                                    <div class="text-muted">Licence professionnelle</div>
                                    <div class="fw-bolder">Gestion de ressources documentaires et bases de données audiovisuelles</div>
                                </div>
                                <div>Niveau Baccalauréat</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Education Card 3-->
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <div class="row align-items-center gx-5">
                            <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                <div class="bg-light p-4 rounded-4">
                                    <div class="text-secondary fw-bolder mb-2">2007 - 2010</div>
                                    <div class="mb-2">
                                        <div class="small fw-bolder">Université de Rennes 2</div>
                                        <div class="small text-muted">France</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="fst-italic">
                                    <div class="text-muted">Licence</div>
                                    <div class="fw-bolder">Études cinématographiques et audiovisuelles</div>
                                </div>
                                <div>Niveau Baccalauréat</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Divider-->
            <div class="pb-5"></div>

        </div>
    </div>
</div>
</main>
@endsection