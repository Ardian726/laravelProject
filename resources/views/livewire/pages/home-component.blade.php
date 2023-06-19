<div>

    {{-- Wellcome --}}
    <div style="padding-top: 50px; padding-bottom: 50px;">
        <div class="container-xl empty">
            <h1 style="font-size: 40px; font-weight: bold; line-height: 50px">
                What's your problem?<br>Let us help
            </h1>
            <hr style="width: 50px; color: black;">
            <p>
                There are many variations of passages of Lorem Ipsum available.
                <br>
                but the majority have suffered alteration in some form, by injected humour,
                <br>
                or randomised words which don't look even slightly believable.
            </p>
            <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                <a href="{{ route('contact') }}" class="btn btn-primary w-90">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path
                            d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2">
                        </path>
                    </svg>
                    Contact CS
                </a>
            </div>
        </div>
    </div>

    {{-- Charts Users --}}
    <div class="container-xl" style="padding-bottom: 100px;">
        <div class="row row-cards">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <h3 class="card-title">Active users</h3>
                            <div class="ms-auto">
                                <div class="dropdown">
                                    <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item active" href="#">Last 7 days</a>
                                        <a class="dropdown-item" href="#">Last 30 days</a>
                                        <a class="dropdown-item" href="#">Last 3 months</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div id="chart-active-users-2"></div>
                            </div>
                            <div class="col-md-auto">
                                <div class="divide-y divide-y-fill">
                                    <div class="px-3">
                                        <div class="text-muted">
                                            <span class="status-dot bg-primary"></span> Mobile
                                        </div>
                                        <div class="h2">11,425</div>
                                    </div>
                                    <div class="px-3">
                                        <div class="text-muted">
                                            <span class="status-dot bg-azure"></span> Desktop
                                        </div>
                                        <div class="h2">6,458</div>
                                    </div>
                                    <div class="px-3">
                                        <div class="text-muted">
                                            <span class="status-dot bg-green"></span> Tablet
                                        </div>
                                        <div class="h2">3,985</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Simple Contact --}}
    <div class="page-wrapper" style="padding-bottom: 100px;">
        <div class="container-xl text-center empty">
            <h1 style="font-size: 40px; font-weight: bold; line-height: 50px">
                Simple method to contact<br>customer support
            </h1>
            <hr style="width: 50px; color: black;">
            <p>
                Simple and easy to contact the customer support.
            </p>
        </div>
        <!-- Page body -->
        <div class="page-body">
            <div class="container-xl">
                <div class="row row-deck row-cards">
                    <div class="col-12">
                        <div class="row row-cards">
                            <div class="col-sm-6 col-lg-4">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <span class="bg-primary text-white avatar">
                                                    <!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-headset" width="24"
                                                        height="24" viewBox="0 0 24 24" stroke-width="2"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                        </path>
                                                        <path d="M4 14v-3a8 8 0 1 1 16 0v3"></path>
                                                        <path d="M18 19c0 1.657 -2.686 3 -6 3"></path>
                                                        <path
                                                            d="M4 14a2 2 0 0 1 2 -2h1a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-1a2 2 0 0 1 -2 -2v-3z">
                                                        </path>
                                                        <path
                                                            d="M15 14a2 2 0 0 1 2 -2h1a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-1a2 2 0 0 1 -2 -2v-3z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="col">
                                                <div class="font-weight-medium">
                                                    Easy to call
                                                </div>
                                                <div class="text-muted">
                                                    Talk directly to customer support
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <span class="bg-green text-white avatar">
                                                    <!-- Download SVG icon from http://tabler-icons.io/i/shopping-cart -->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-brand-whatsapp"
                                                        width="24" height="24" viewBox="0 0 24 24"
                                                        stroke-width="2" stroke="currentColor" fill="none"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                        </path>
                                                        <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9"></path>
                                                        <path
                                                            d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="col">
                                                <div class="font-weight-medium">
                                                    Whatsapp
                                                </div>
                                                <div class="text-muted">
                                                    Call customer support vis Whatsapp
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <span class="bg-twitter text-white avatar">
                                                    <!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-notes" width="24"
                                                        height="24" viewBox="0 0 24 24" stroke-width="2"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                        </path>
                                                        <path
                                                            d="M5 3m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z">
                                                        </path>
                                                        <path d="M9 7l6 0"></path>
                                                        <path d="M9 11l6 0"></path>
                                                        <path d="M9 15l4 0"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="col">
                                                <div class="font-weight-medium">
                                                    Send your message
                                                </div>
                                                <div class="text-muted">
                                                    Send a message via the form
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- FAQ --}}
    <div id="FAQ">
        <div class="container-xl text-center">
            <h1 style="font-weight: bold; font-size: 30px;">
                FAQ ?
            </h1>
            <div class="page-pretitle" style="font-size: 15px;">
                FREQUENTLY ASKED QUESTIONS
            </div>
        </div>
        <div class="page-body">
            <div class="container-xl">
                <div class="card card-lg">
                    <div class="card-body">
                        <div class="space-y-4">
                            <div>
                                <h2 class="mb-3">1. Introduction</h2>
                                <div id="faq-1" class="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="accordion-item">
                                        <div class="accordion-header" role="tab">
                                            <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#faq-1-1">
                                                How to send a message?
                                            </button>
                                        </div>
                                        <div id="faq-1-1" class="accordion-collapse collapse" role="tabpanel"
                                            data-bs-parent="#faq-1">
                                            <div class="accordion-body pt-0">
                                                <div>
                                                    Click <strong>Help</strong> > <strong>Form</strong>.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header" role="tab">
                                            <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#faq-1-2">
                                                How to call customer service?
                                            </button>
                                        </div>
                                        <div id="faq-1-2" class="accordion-collapse collapse" role="tabpanel"
                                            data-bs-parent="#faq-1">
                                            <div class="accordion-body pt-0">
                                                <div>
                                                    Click <strong>Help</strong> > <strong>Contact</strong>.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header" role="tab">
                                            <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#faq-1-3">
                                                What are our values?
                                            </button>
                                        </div>
                                        <div id="faq-1-3" class="accordion-collapse collapse" role="tabpanel"
                                            data-bs-parent="#faq-1">
                                            <div class="accordion-body pt-0">
                                                <div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit. Accusantium alias dignissimos
                                                        dolorum ea est eveniet, excepturi illum in iste
                                                        iure maiores nemo recusandae rerum saepe sed,
                                                        sunt totam! Explicabo, ipsa?
                                                    </p>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit. Accusantium alias dignissimos
                                                        dolorum ea est eveniet, excepturi illum in iste
                                                        iure maiores nemo recusandae rerum saepe sed,
                                                        sunt totam! Explicabo, ipsa?
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Location --}}

</div>
