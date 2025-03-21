@extends('admin.layouts.master')
@section('title')
Sub Category
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
            <li class="breadcrumb-item1 active text-muted">Sub Category</li>
        </ol>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- ROW-1 OPEN -->
    <div class="row">

        <div class="col-xl-12 col-md-12 col-sm-12">
            <div class="card mt-3">
                <div class="card-header border-bottom d-flex justify-content-between">
                    <h3 class="card-title">Sub Category</h3>
                    <div class="d-flex ms-auto">
                        <a href="@route('admin.subcategory.create')" class="btn btn-dark me-3">
                            <i class="si si-plus me-2"></i>Create New
                        </a>


                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-10p border-bottom-0">S NO.</th>
                                    <th class="wd-30p border-bottom-0">Category</th>
                                    <th class="wd-30p border-bottom-0">Subcategory</th>
                                    <th class="wd-10p border-bottom-0">Status</th>
                                    <th class="wd-20p border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subcategories as $key => $subcategory)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $subcategory->parent->name ?? 'N/A' }}</td>
                                    <td>{{ $subcategory->name }}</td>
                                    <td>
                                        <label class="custom-switch">
                                            <input type="checkbox" class="custom-switch-input change-status" data-id="{{ $subcategory->id }}"
                                                {{ $subcategory->status == 'active' ? 'checked' : '' }}>
                                            <span class="custom-switch-indicator"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.subcategory.edit', $subcategory->id) }}" class="btn btn-dark btn-square br-50 m-1"
                                            data-bs-toggle="tooltip" title="Edit"><i class="fe fe-edit fs-13"></i></a>
                                        <a href="{{ route('admin.subcategory.destroy', $subcategory->id) }}" class="btn btn-danger btn-square delete-item br-50 m-1"
                                            data-bs-toggle="tooltip" title="Delete"><i class="fe fe-trash fs-13"></i></a>
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
@endsection

@push('script')
<script>
    $(document).ready(function() {
        $('body').on('click', '.change-status', function() {
            let isChecked = $(this).is(':checked');
            let id = $(this).data('id');

            $.ajax({
                url: "{{ route('admin.subcategory.change-status') }}",
                method: 'PUT',
                data: {
                    status: isChecked ? 'true' : 'false',
                    id: id
                },
                success: () => Swal.fire('Success', 'Status has been updated!', 'success'),
                error: () => Swal.fire('Error', 'Failed to update status.', 'error')
            });
        });
    });
</script>
@endpush