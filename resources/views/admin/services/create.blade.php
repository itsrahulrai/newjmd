@extends('admin.layouts.master')
@section('title')
    Services
@endsection
@push('style')
    <!-- Add some basic styling for icons grid -->
    <style>
        .icons-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, 50px);
            gap: 10px;
            padding: 10px;
        }

        .icons-grid .icon {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            cursor: pointer;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .icons-grid .icon:hover {
            background-color: #f0f0f0;
        }
    </style>
@endpush
@section('content')
    <div class="side-app">


        <!-- PAGE-HEADER -->
        <div class="breadcrumb-6">
            <ol class="breadcrumb1 mb-0">
                <li class="breadcrumb-item1 active"><i class="fa fa-home me-1 text-transparant" aria-hidden="true"></i>Home
                </li>
                <li class="breadcrumb-item1 active text-muted">Dashboard</li>
                <li class="breadcrumb-item1 active text-muted">Services</li>
            </ol>
        </div>
        <!-- PAGE-HEADER END -->
        <!-- ROW-1 OPEN -->
        <div class="row">
            <div class="col-xl-12 col-md-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="card-title">{{ isset($service) ? 'Update Service' : 'Create Service' }}</h3>
                    </div>
                    <div class="card-body">
                        <form
                            action="{{ isset($service) ? route('admin.service.update', $service->id) : route('admin.service.store') }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @if (isset($service))
                                @method('PUT')
                            @endif
                            <div class="row">
                                <!-- Service Icon -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Icon <span class="text-red">*</span></label>
                                        <input type="text" class="form-control" name="icon" id="iconInput"
                                            placeholder="Enter FontAwesome Icon (e.g., fas fa-layer-group)"
                                            value="{{ isset($service) ? $service->icon : old('icon') }}" readonly>
                                    </div>

                                </div>
                                <div class="col-md-2 mt-5">
                                    <button type="button" class="btn btn-gray-dark mt-2" id="iconSelectBtn">
                                        <i class="fas fa-image me-2"></i> Select Icon
                                    </button>
                                </div>
                                <!-- Service Name -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Service Name <span class="text-red">*</span></label>
                                        <input type="text" class="form-control" name="name"
                                            placeholder="Enter Service Name"
                                            value="{{ isset($service) ? $service->name : old('name') }}">
                                    </div>
                                </div>
                                <!-- Service Description -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Description <span class="text-red">*</span></label>
                                        <textarea class="form-control" name="description" placeholder="Enter Service Description" rows="4">{{ isset($service) ? e($service->description) : e(old('description')) }}</textarea>
                                    </div>
                                </div>
                                <!-- Read More Link -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Read More Link</label>
                                        <input type="url" class="form-control" name="link"
                                            placeholder="Enter Read More Link (URL)"
                                            value="{{ isset($service) ? $service->link : old('link') }}">
                                    </div>
                                </div>
                                <!-- Image Upload -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Image</label>
                                        <input type="file" class="form-control" name="image">
                                        @isset($service->image)
                                            <div class="mt-3">
                                                <img src="{{ asset($service->image) }}" alt="Thumbnail"
                                                    class="img-thumbnail" style="width: 150px; height: auto;">
                                            </div>
                                        @endisset
                                    </div>
                                </div>

                                <!-- Submit and Cancel Buttons -->
                                <div class="col-md-12 text-end">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary me-2">
                                            <i class="fe fe-check-circle"></i>
                                            {{ isset($service) ? 'Update' : 'Submit' }}
                                        </button>
                                        <a href="{{ route('admin.service.index') }}" class="btn btn-outline-danger">
                                            <i class="fe fe-x-circle"></i> Cancel
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>

        </div><!-- COL-END -->
        <!-- ROW-1 CLOSED -->
    </div>
    <div class="modal fade" id="iconModal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Icons</h6><button aria-label="Close" class="btn-close"
                        data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="row icons-grid">
                        <!-- Icons will be dynamically injected here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('script')
    <script>
        $(document).ready(function() {
            // Initialize WYSIWYG editor for the 'Description' textareas
            $('#content1').richText();
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const iconModal = new bootstrap.Modal(document.getElementById('iconModal'));
            const iconSelectBtn = document.getElementById('iconSelectBtn');
            const iconInput = document.getElementById('iconInput');
            const iconsGrid = document.querySelector('.icons-grid');

            // List of FontAwesome icon classes (can be extended as needed)
            const fontAwesomeIcons = [
                "fas fa-home", "fas fa-layer-group", "fas fa-cogs", "fas fa-user", "fas fa-globe",
                "fas fa-rocket", "fas fa-envelope", "fas fa-phone", "fas fa-map-marker-alt", "fas fa-heart",
                "fas fa-cart-plus", "fas fa-bell", "fas fa-search", "fas fa-comments", "fas fa-tools",
                "fas fa-car", "fas fa-cloud", "fas fa-tree", "fas fa-umbrella", "fas fa-sun", "fas fa-star",
                "fas fa-calendar-alt", "fas fa-credit-card", "fas fa-gift", "fas fa-flag", "fas fa-briefcase",
                "fas fa-glasses", "fas fa-cogs", "fas fa-wrench", "fas fa-cogs", "fas fa-shield-alt",
                "fas fa-users",
                "fas fa-palette", "fas fa-chalkboard", "fas fa-bicycle", "fas fa-bus", "fas fa-train",
                "fas fa-plane",
                "fas fa-shipping-fast", "fas fa-hands-helping", "fas fa-tachometer-alt", "fas fa-chart-line",
                "fas fa-chart-pie",
                "fas fa-bolt", "fas fa-snowflake", "fas fa-cogs", "fas fa-box", "fas fa-plug",
                "fas fa-power-off",
                "fas fa-phone-volume", "fas fa-comments", "fas fa-laptop", "fas fa-desktop",
                "fas fa-tablet-alt", "fas fa-microphone",
                "fas fa-headphones", "fas fa-video", "fas fa-camera", "fas fa-photo-video", "fas fa-tv",
                "fas fa-archive",
                "fas fa-tasks", "fas fa-calendar-check", "fas fa-laugh", "fas fa-meh", "fas fa-sad-tear",
                "fas fa-grin",
                "fas fa-sun", "fas fa-cloud-sun", "fas fa-cloud-rain", "fas fa-cloud-showers-heavy",
                "fas fa-snowman",
                "fas fa-temperature-high", "fas fa-temperature-low", "fas fa-wind", "fas fa-pump-medical",
                "fas fa-capsules",
                "fas fa-prescription", "fas fa-band-aid", "fas fa-hospital", "fas fa-user-md",
                "fas fa-stethoscope",
                "fas fa-flask", "fas fa-pills", "fas fa-hands-wash", "fas fa-hand-holding-heart",
                "fas fa-hand-holding-medical",
                "fas fa-hand-holding", "fas fa-thumbs-up", "fas fa-thumbs-down", "fas fa-hand-paper",
                "fas fa-hand-scissors",
                "fas fa-hand-rock", "fas fa-grip-lines", "fas fa-grip-vertical", "fas fa-database",
                "fas fa-laptop-code",
                "fas fa-code", "fas fa-cogs", "fas fa-terminal", "fas fa-network-wired", "fas fa-sitemap",
                "fas fa-wifi",
                "fas fa-rss", "fas fa-headphones-alt", "fas fa-user-plus", "fas fa-user-minus",
                "fas fa-user-times", "fas fa-user-tag",
                "fas fa-user-lock", "fas fa-id-badge", "fas fa-id-card", "fas fa-id-card-alt",
                "fas fa-birthday-cake",

                // Service related icons
                "fas fa-tools", "fas fa-screwdriver", "fas fa-hammer", "fas fa-wrench", "fas fa-cogs",
                "fas fa-truck", "fas fa-shipping-fast", "fas fa-industry", "fas fa-building",
                "fas fa-paint-roller",
                "fas fa-clipboard-check", "fas fa-gem", "fas fa-hands-helping", "fas fa-hands",
                "fas fa-lightbulb",
                "fas fa-laptop-house", "fas fa-cogs", "fas fa-wifi", "fas fa-wrench", "fas fa-plug",
                "fas fa-broom", "fas fa-spray-can", "fas fa-dumpster", "fas fa-house-user", "fas fa-hammer",
                "fas fa-paint-brush", "fas fa-shield-alt", "fas fa-medkit", "fas fa-recycle",
                "fas fa-trash-alt", "fas fa-level-up-alt", "fas fa-battery-half", "fas fa-gears",
                "fas fa-solar-panel", "fas fa-water", "fas fa-thermometer-half"
            ];

            function loadIcons() {
                iconsGrid.innerHTML = '';
                fontAwesomeIcons.forEach(icon => {
                    const iconDiv = document.createElement('div');
                    iconDiv.classList.add('icon');
                    iconDiv.innerHTML = `<i class="${icon}"></i>`;
                    iconDiv.addEventListener('click', function() {
                        iconInput.value =
                            icon; 
                        iconModal.hide();
                    });
                    iconsGrid.appendChild(iconDiv);
                });
            }

            // Show the modal when the button is clicked
            iconSelectBtn.addEventListener('click', function() {
                loadIcons();
                iconModal.show(); 
            });
        });
    </script>
@endpush
