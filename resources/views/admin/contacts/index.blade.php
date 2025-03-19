@extends('admin.layouts.master')
@section('title')
Enquiry
@endsection
@push('style')
@endpush
@section('content')
<div class="side-app">


    <!-- PAGE-HEADER -->
    <div class="breadcrumb-6">
        <ol class="breadcrumb1 mb-0">
            <li class="breadcrumb-item1 active"><i class="fa fa-home me-1 text-transparant" aria-hidden="true"></i>Home
            </li>
            <li class="breadcrumb-item1 active text-muted">Dashboard</li>
            <li class="breadcrumb-item1 active text-muted"> Enquiry</li>
        </ol>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- ROW-1 OPEN -->
    <div class="row">

        <div class="col-xl-12 col-md-12 col-sm-12">
            <div class="card mt-3">
                <div class="card-header border-bottom d-flex justify-content-between">
                    <h3 class="card-title">Enquiry</h3>
                    <div class="d-flex ms-auto">
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">S NO.</th>
                                      <th class="wd-15p border-bottom-0">Product</th>
                                    <th class="wd-15p border-bottom-0">First Name</th>
                                    <th class="wd-15p border-bottom-0">Last Name</th>
                                    <th class="wd-15p border-bottom-0">Phone</th>
                                    <th class="wd-15p border-bottom-0">State</th>
                                    <th class="wd-15p border-bottom-0">District</th>
                                    <th class="wd-15p border-bottom-0">City</th>
                                    <th class="wd-15p border-bottom-0">Pincode</th>
                                    <th class="wd-15p border-bottom-0">Option</th>
                                    <th class="wd-20p border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $contact)
                                <tr>
                                    <td>{{ ++$loop->index }}</td>
                                    <td>{{ $contact->product ? $contact->product->name : 'N/A' }}
                                    <td>{{ $contact->fname }}</td>
                                    <td>{{ $contact->lname }}</td>
                                    <td>{{ $contact->phone }}</td>
                                    <td>{{ $contact->state }}</td>
                                    <td>{{ $contact->district }}</td>
                                    <td>{{ $contact->city }}</td>
                                    <td>{{ $contact->pincode }}</td>
                                    <td>{{ $contact->option }}</td>

                                    <td>
                                        <button type="button"
                                            class="btn btn-primary btn-square reply-item br-50 m-1"
                                            data-bs-toggle="modal" data-bs-target="#viewMessageModal"
                                            data-email="{{ $contact->email }}"
                                            data-subject="{{ $contact->subject }}"
                                            data-message="{{ $contact->message }}"
                                            data-fname="{{ $contact->fname }}"
                                            data-lname="{{ $contact->lname }}"
                                            data-phone="{{ $contact->phone }}"
                                            data-state="{{ $contact->state }}"
                                            data-district="{{ $contact->district }}"
                                            data-city="{{ $contact->city }}"
                                            data-pincode="{{ $contact->pincode }}"
                                            data-option="{{ $contact->option }}"
                                            data-product="{{ $contact->product ? $contact->product->name : 'N/A' }}">
                                            <i class="fe fe-eye fs-13"></i>
                                        </button>

                                        <!-- Delete Button -->
                                        <a href="{{ route('admin.pages.destroy', $contact->id) }}"
                                            class="btn btn-danger btn-square delete-item br-50 m-1"
                                            data-bs-toggle="tooltip" title="" data-bs-original-title="Delete">
                                            <i class="fe fe-trash fs-13"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div><!-- COL-END -->

    </div>
    <!-- ROW-1 CLOSED -->
</div>

<!-- Compose Message Modal -->
<div class="modal fade" id="viewMessageModal" tabindex="-1" aria-labelledby="viewMessageModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <h6 class="modal-title">Message Details</h6>
                <button aria-label="Close" class="btn-close" data-bs-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <!-- Left Column -->
                    <div class="col-md-6">
                        <p><strong>Name:</strong> <span id="modal-fname"></span> <span id="modal-lname"></span></p>
                        <p><strong>Email:</strong> <span id="modal-email"></span></p>
                        <p><strong>Phone:</strong> <span id="modal-phone"></span></p>
                        <p><strong>State:</strong> <span id="modal-state"></span></p>
                        <p><strong>District:</strong> <span id="modal-district"></span></p>
                    </div>

                    <!-- Right Column -->
                    <div class="col-md-6">
                        <p><strong>City:</strong> <span id="modal-city"></span></p>
                        <p><strong>Pincode:</strong> <span id="modal-pincode"></span></p>
                        <p><strong>Option:</strong> <span id="modal-option"></span></p>
                          <p><strong>Product:</strong> <span id="modal-product"></span></p>
                    </div>
                </div>

                <!-- Message Section -->
                <div class="mt-3">
                    <h6 class="fw-bold">Message:</h6>
                    <textarea id="modal-message" class="form-control" rows="5" readonly style="background-color: #f8f9fa; resize: none;"></textarea>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection

@push('script')
<!-- JavaScript -->
<script>
    $(document).ready(function() {
        $('.reply-item').on('click', function() {
            let fname = $(this).data('fname');
            let lname = $(this).data('lname');
            let email = $(this).data('email');
            let phone = $(this).data('phone');
            let state = $(this).data('state');
            let district = $(this).data('district');
            let city = $(this).data('city');
            let pincode = $(this).data('pincode');
            let option = $(this).data('option');
            let product = $(this).data('product');
            let message = $(this).data('message');

            $('#modal-fname').text(fname);
            $('#modal-lname').text(lname);
            $('#modal-email').text(email);
            $('#modal-phone').text(phone);
            $('#modal-state').text(state);
            $('#modal-district').text(district);
            $('#modal-city').text(city);
            $('#modal-pincode').text(pincode);
            $('#modal-option').text(option);
            $('#modal-product').text(product);
            $('#modal-message').text(message);
        });
    });
</script>

@endpush