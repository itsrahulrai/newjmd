<form action="{{ route('admin.web.settings.update', $web->id ?? 1) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-sm-6 col-md-6">
            <div class="form-group">
                <label class="form-label">Logo (Light) <span class="text-red">*</span></label>
                <input type="file" class="form-control" name="logolight">
                @isset($web->logolight)
                    <div class="mt-3">
                        <img src="{{ asset($web->logolight) }}" alt="Thumbnail" class="img-thumbnail"
                            style="width: 150px; height: auto;">
                    </div>
                @endisset
            </div>
        </div>
        <div class="col-sm-6 col-md-6">
            <div class="form-group">
                <label class="form-label">Logo (Dark) <span class="text-red">*</span></label>
                <input type="file" class="form-control" name="logodark">
                @isset($web->logodark)
                    <div class="mt-3">
                        <img src="{{ asset($web->logodark) }}" alt="Thumbnail" class="img-thumbnail"
                            style="width: 150px; height: auto;">
                    </div>
                @endisset
            </div>
        </div>
        <div class="col-sm-12 col-md-12">
            <div class="form-group">
                <label class="form-label">WebSite Name<span class="text-red">*</span></label>
                <input type="text" class="form-control" name="name" placeholder="Name"
                    value="{{ isset($web) ? e($web->name) : e(old('name')) }}">
            </div>
        </div>

        <div class="col-sm-6 col-md-6">
            <div class="form-group">
                <label class="form-label">Email<span class="text-red">*</span></label>
                <input type="email" class="form-control" name="email" placeholder="Email"
                    value="{{ isset($web) ? e($web->email) : e(old('email')) }}">
            </div>
        </div>
        <div class="col-sm-6 col-md-6">
            <div class="form-group">
                <label class="form-label">Phone<span class="text-red">*</span></label>
                <input type="number" class="form-control" name="phone" placeholder="Phone"
                    value="{{ isset($web) ? e($web->phone) : e(old('phone')) }}">
            </div>
        </div>
        <div class="col-sm-12 col-md-12">
            <div class="form-group">
                <label class="form-label">Copyrights<span class="text-red">*</span></label>
                <input type="text" class="form-control" name="copyright" placeholder="Copyrights"
                    value="{{ isset($web) ? e($web->copyright) : e(old('copyright')) }}">
            </div>
        </div>
        <div class="col-sm-12 col-md-12">
            <div class="form-group">
                <label class="form-label">Address<span class="text-red">*</span></label>
                <textarea class="form-control" name="address" placeholder="Address" rows="5">{{ isset($web) ? e($web->address) : e(old('address')) }}</textarea>
            </div>
        </div>
        <div class="col-sm-12 col-md-12">
            <div class="form-group">
                <label class="form-label">Description<span class="text-red">*</span></label>
                <textarea class="form-control" name="description" placeholder="Description" rows="5">{{ isset($web) ? e($web->description) : e(old('description')) }}</textarea>
            </div>
        </div>

        <!-- Submit Buttons -->
        <div class="card-footer text-end mx-3">
            <button type="submit" class="btn btn-dark me-2">
                <i class="fe fe-check-circle"></i>
                {{ isset($web) ? 'Update' : 'Submit' }}
            </button>
            <a href="" class="btn btn-outline-danger">
                <i class="fe fe-x-circle"></i> Cancel
            </a>
        </div>
    </div>
</form>
