<div id="FAQ">
    <div class="container-xl text-center">
        <h1 style="font-weight: bold; font-size: 30px;">
            Get in touch
        </h1>
        <div class="page-pretitle" style="font-size: 15px;">
            SEND YOUR MESSAGE HERE!
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="card card-lg">
                <div class="card-body">
                    <div class="space-y-4">
                        @if (Session::has('success'))
                            <div class="alert .alert-success" role="alert">
                                {{ Session::get('message_sent') }}
                            </div>
                        @endif
                        <div class="row">
                            <div>
                                <div class="card-body">
                                    <form method="POST" action="" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label required ms-auto" for="name">Name</label>
                                            <input wire:model="name" id="name" class="form-control" name="name">
                                        </div>
                                        @error('name')
                                            <p class="text-red alert-danger">Name is required</p>
                                        @enderror
                                        <div class="mb-3">
                                            <label class="form-label required" for="email">Email</label>
                                            <input wire:model="email" id="email" type="email" class="form-control"
                                                name="email">
                                        </div>
                                        @error('email')
                                            <p class="text-red alert-danger">Email is required</p>
                                        @enderror
                                        <div class="mb-3">
                                            <label class="form-label required" for="number">Phone Number</label>
                                            <input wire:model="number" id="number" type="number"
                                                class="form-control" name="number">
                                        </div>
                                        @error('number')
                                            <p class="text-red alert-danger">Number is required</p>
                                        @enderror
                                        <div class="mb-3">
                                            <label class="form-label" for="message">
                                                Message
                                            </label>
                                            <textarea wire:model="message" id="message" class="form-control" name="message" rows="6"></textarea>
                                        </div>
                                        @error('message')
                                            <p class="text-red alert-danger">Message is required</p>
                                        @enderror
                                        <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                            {{-- <a class="btn btn-primary w-300">
                                        Submit
                                    </a> --}}
                                            <button class="btn btn-primary" type="submit">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
