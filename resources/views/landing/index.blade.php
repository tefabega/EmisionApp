@extends("layouts.landing")
@section("contenido")

<!-- Proveedores-->
<section class="page-section bg-primary" id="proveedores">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <h1 class="text-white mt-0">¿Quieres vender tus productos?</h1>
                <h2 class="text-white mt-0">Inscribete como proveedor</h2>
                <hr class="divider divider-light" />
                <p class="text-white-75 mb-4">Utiliza nuestra plataforma como medio para darte a conocer</p>
                <a class="btn btn-light btn-xl" href="/proveedores">¡Inscribete!</a>
            </div>
        </div>

</section>


<!-- Productos-->
<section class="page-section" id="productos">
    <div class="container px-4 px-lg-5">
        <h2 class="text-center mt-0">Nuestros productos</h2>
        <hr class="divider" />
        <div class="row gx-14 gx-lg-5">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi bi-shop fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Granos</h3>
                    <p class="text-muted mb-0">Ofrecemos todo tipo de grano de la mejor calidad!</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi bi-cart4 fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Carnes</h3>
                    <p class="text-muted mb-0">Todo tipo de proteina fresca!</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi bi-gift fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Verduras</h3>
                    <p class="text-muted mb-0">Directamente del campo</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Hecho con amor</h3>
                    <p class="text-muted mb-0">Productos hechos con todo el amor</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Clientes-->
<section class="page-section bg-primary" id="clientes">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <h2 class="text-white mt-0">Nuestros Clientes</h2>
                <hr class="divider divider-light" />
                <p class="text-white-75 mb-4">Para adquirir nuestros productos darle clic.</p>
                <a class="btn btn-light btn-xl" href="#services">¡Comprar!</a>
            </div>
        </div>

</section>

<!-- Ventas-->
<section class="page-section bg-dark text-white" id="ventas">
    <div class="container px-4 px-lg-5 text-center">
        <h2 class="mb-4">Informe de Ventas</h2>
        <a class="btn btn-light btn-xl" href="https://startbootstrap.com/theme/creative/">Descargue Aquí!</a>
    </div>
</section>


<!-- Contact-->
<section class="page-section" id="contacto">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 col-xl-6 text-center">
                <h2 class="mt-0">Mantengámonos en contacto</h2>
                <hr class="divider" />
                <p class="text-muted mb-5">Listo para comenzar tu próximo proyecto con nosotros? Envíanos un mensaje y te responderemos lo antes posible</p>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
            <div class="col-lg-6">
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                        <label for="name">Nombre Completo</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">Se requiere un nombre.</div>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                        <label for="email">correo Electrónico</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">Se requiere un correo electrónico.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Correo electrónico invalido.</div>
                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                        <label for="phone">Número de Celular</label>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">Se requiere un número de celular.</div>
                    </div>
                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                        <label for="message">Mensaje</label>
                        <div class="invalid-feedback" data-sb-feedback="message:required">Se requiere un mensaje.</div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Envío de formulario exitoso</div>
                            Para activar este formulario, regístrese en
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">Error al enviar el mensaje</div>
                    </div>
                    <!-- Submit Button-->
                    <div class="d-grid"><button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Enviar</button></div>
                </form>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-4 text-center mb-5 mb-lg-0">
                <i class="bi-phone fs-2 mb-3 text-muted"></i>
                <div>+ 57 300 635 27 56</div>
            </div>
        </div>
    </div>
</section>

@endsection