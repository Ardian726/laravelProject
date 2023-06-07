<div class="card-body">
    <div class="row">
        <div class="col-xl-4">
            <div class="row">
                <div class="col-md-6 col-xl-12">
                    {{-- <div class="mb-3">
                        <label class="form-label">Static</label>
                        <div class="form-control-plaintext">Input value</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Text</label>
                        <input type="text" class="form-control" name="example-text-input"
                            placeholder="Input placeholder">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="text" class="form-control" name="example-password-input"
                            placeholder="Input placeholder">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Disabled</label>
                        <input type="text" class="form-control" name="example-disabled-input"
                            placeholder="Disabled..." value="Well, she turned me into a newt." disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Readonly</label>
                        <input type="text" class="form-control" name="example-disabled-input"
                            placeholder="Readonly..." value="Well, how'd you become king, then?" readonly>
                    </div> --}}
                    <div class="card-body">
                        <from method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="from-control" />
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="from-control" />
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="Phone" class="from-control" />
                            </div>
                        </from>
                    </div>
                    <div class="mb-3">
                        <label class="form-label required">Required</label>
                        <input type="text" class="form-control" name="example-required-input"
                            placeholder="Required...">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Textarea <span class="form-label-description">56/100</span></label>
                        <textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Content.."></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
