<div>
    <div class="card-body">
        <div class="row">
            <div class="container-xl">
                @if (Session::has('message_sent'))
                    <div class="alert .alert-success" role="alert">
                        {{ Session::get('message_sent') }}
                    </div>
                @endif
                <div class="row">
                    <div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('contact.send') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label required ms-auto">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Name...">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label required">Email</label>
                                    <input type="text" class="form-control" name="email" placeholder="Email...">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label required">Phone Number</label>
                                    <input type="number" class="form-control" name="number" placeholder="Required...">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        Message
                                        <span class="form-label-description">
                                            100
                                        </span>
                                    </label>
                                    <textarea class="form-control" name="msg" rows="6" placeholder="Content.."></textarea>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a class="btn btn-primary w-300">
                                        Submit
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
