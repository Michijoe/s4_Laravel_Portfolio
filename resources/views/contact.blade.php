@extends('master')
@section('title', 'Contact')
@section('content')
<!-- Page content-->
<section class="py-5">
    <div class="container px-5">
        <!-- Contact form-->
        <div class="bg-light rounded-4 py-5 px-4 px-md-5">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                <h1 class="fw-bolder">Contactez-moi</h1>
                <p class="lead fw-normal text-muted mb-0">Let's work together!</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">

                    @if(isset($data))
                    <!-- Submit success message and data-->
                    <div class="text-center mb-3">
                        <div class="fw-bolder mb-2">Votre message a bien été envoyé !</div>
                        <strong>Name :</strong> {{ $data->name }}<br>
                        <strong>Phone :</strong> {{ $data->phone }}<br>
                        <strong>Email :</strong> {{ $data->email }}<br>
                        <strong>Message :</strong> {{ $data->message }}<br>
                    </div>

                    @else
                    <form method="post">
                        <!-- Token Laravel -->
                        @csrf
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input name="name" class="form-control" id="name" type="text" autocomplete="off" required />
                            <label for="name">Nom complet</label>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input name="email" class="form-control" id="email" type="email" autocomplete="off" required />
                            <label for="email">Courriel</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input name="phone" class="form-control" id="phone" type="tel" autocomplete="off" required />
                            <label for="phone">Téléphone</label>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea name="message" class="form-control" id="message" type="text" style="height: 10rem" autocomplete="off" required></textarea>
                            <label for="message">Message</label>
                        </div>

                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error sending message!</div>
                        </div>
                        <!-- Submit Button-->
                        <div class="d-grid"><button class="btn btn-primary btn-lg" type="submit">Envoyez</button></div>
                    </form>
                    @endif

                </div>
            </div>
        </div>
    </div>
</section>
</main>
@endsection