<form action="{{ route('admin.smtp.settings.update', $smtp->id ?? 1) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <!-- SMTP Host -->
        <div class="col-sm-6 col-md-6">
            <div class="form-group">
                <label class="form-label">Host<span class="text-red">*</span></label>
                <input type="text" class="form-control" name="smtp_host" placeholder="Host"
                    value="{{ isset($smtp) ? e($smtp->smtp_host) : e(old('smtp_host')) }}">
            </div>
        </div>

        <!-- SMTP Port -->
        <div class="col-sm-6 col-md-6">
            <div class="form-group">
                <label class="form-label">Port<span class="text-red">*</span></label>
                <input type="number" class="form-control" name="smtp_port" placeholder="Port"
                    value="{{ isset($smtp) ? e($smtp->smtp_port) : e(old('smtp_port')) }}">
            </div>
        </div>

        <!-- SMTP User -->
        <div class="col-sm-6 col-md-6">
            <div class="form-group">
                <label class="form-label">Username<span class="text-red">*</span></label>
                <input type="text" class="form-control" name="smtp_user" placeholder="Username"
                    value="{{ isset($smtp) ? e($smtp->smtp_user) : e(old('smtp_user')) }}">
            </div>
        </div>

        <!-- SMTP Password -->
        <div class="col-sm-6 col-md-6">
            <div class="form-group">
                <label class="form-label">Password<span class="text-red">*</span></label>
                <input type="password" class="form-control" name="smtp_password" placeholder="Password"
                    value="{{ isset($smtp) ? e($smtp->smtp_password) : e(old('smtp_password')) }}">
            </div>
        </div>

        <!-- SMTP Encryption -->
        <div class="col-sm-6 col-md-6">
            <div class="form-group">
                <label class="form-label">Encryption<span class="text-red">*</span></label>
                <select class="form-control" name="smtp_encryption">
                    <option value="tls" {{ isset($smtp) && $smtp->smtp_encryption === 'tls' ? 'selected' : '' }}>TLS
                    </option>
                    <option value="ssl" {{ isset($smtp) && $smtp->smtp_encryption === 'ssl' ? 'selected' : '' }}>SSL
                    </option>
                </select>
            </div>
        </div>

        <!-- From Email -->
        <div class="col-sm-6 col-md-6">
            <div class="form-group">
                <label class="form-label">From Email<span class="text-red">*</span></label>
                <input type="email" class="form-control" name="from_email" placeholder="From Email"
                    value="{{ isset($smtp) ? e($smtp->from_email) : e(old('from_email')) }}">
            </div>
        </div>

        <!-- From Name -->
        <div class="col-sm-6 col-md-6">
            <div class="form-group">
                <label class="form-label">From Name<span class="text-red">*</span></label>
                <input type="text" class="form-control" name="from_name" placeholder="From Name"
                    value="{{ isset($smtp) ? e($smtp->from_name) : e(old('from_name')) }}">
            </div>
        </div>

        <!-- Submit Buttons -->
        <div class="card-footer text-end mx-3">
            <button type="submit" class="btn btn-dark me-2">
                <i class="fe fe-check-circle"></i>
                {{ isset($smtp) ? 'Update' : 'Submit' }}
            </button>
            <a href="" class="btn btn-outline-danger">
                <i class="fe fe-x-circle"></i> Cancel
            </a>
        </div>
    </div>
</form>
