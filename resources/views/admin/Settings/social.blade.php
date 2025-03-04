<form action="{{ route('admin.social.settings.update', $social->id ?? 1) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <!-- Facebook -->
        <div class="col-sm-6 col-md-6">
            <div class="form-group">
                <label class="form-label">Facebook <span class="text-red">*</span></label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fab fa-facebook"></i>
                    </span>
                    <input type="url" class="form-control" name="facebook" placeholder="Facebook Link"
                        value="{{ isset($social) ? e($social->facebook) : e(old('facebook')) }}">
                </div>
            </div>
        </div>

        <!-- Instagram -->
        <div class="col-sm-6 col-md-6">
            <div class="form-group">
                <label class="form-label">Instagram <span class="text-red">*</span></label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fab fa-instagram"></i>
                    </span>
                    <input type="url" class="form-control" name="instagram" placeholder="Instagram Link"
                        value="{{ isset($social) ? e($social->instagram) : e(old('instagram')) }}">
                </div>
            </div>
        </div>

        <!-- Twitter -->
        <div class="col-sm-6 col-md-6">
            <div class="form-group">
                <label class="form-label">Twitter <span class="text-red">*</span></label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fab fa-twitter"></i>
                    </span>
                    <input type="url" class="form-control" name="twitter" placeholder="Twitter Link"
                        value="{{ isset($social) ? e($social->twitter) : e(old('twitter')) }}">
                </div>
            </div>
        </div>

        <!-- YouTube -->
        <div class="col-sm-6 col-md-6">
            <div class="form-group">
                <label class="form-label">YouTube <span class="text-red">*</span></label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fab fa-youtube"></i>
                    </span>
                    <input type="url" class="form-control" name="youtube" placeholder="YouTube Link"
                        value="{{ isset($social) ? e($social->youtube) : e(old('youtube')) }}">
                </div>
            </div>
        </div>

        <!-- LinkedIn -->
        <div class="col-sm-6 col-md-6">
            <div class="form-group">
                <label class="form-label">LinkedIn <span class="text-red">*</span></label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fab fa-linkedin"></i>
                    </span>
                    <input type="url" class="form-control" name="linkedin" placeholder="LinkedIn Link"
                        value="{{ isset($social) ? e($social->linkedin) : e(old('linkedin')) }}">
                </div>
            </div>
        </div>

        <!-- Submit Buttons -->
        <div class="card-footer text-end mx-3">
            <button type="submit" class="btn btn-dark me-2">
                <i class="fe fe-check-circle"></i>
                {{ isset($social) ? 'Update' : 'Submit' }}
            </button>
            <a href="" class="btn btn-outline-danger">
                <i class="fe fe-x-circle"></i> Cancel
            </a>
        </div>
    </div>
</form>
