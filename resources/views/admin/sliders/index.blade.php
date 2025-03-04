@extends('admin.layouts.master')
@section('title')
    Sliders
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
                <li class="breadcrumb-item1 active text-muted">Sliders</li>
            </ol>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- ROW-1 OPEN -->
        <div class="row">

            <div class="col-xl-12 col-md-12 col-sm-12">
                <div class="card mt-3">
                    <div class="card-header border-bottom d-flex justify-content-between">
                        <h3 class="card-title">Sliders</h3>
                        <div class="d-flex ms-auto">
                            <a href="@route('admin.slider.create')" class="btn btn-info-gradient me-3">
                                <i class="si si-plus me-2"></i>Create New
                            </a>


                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
                                <thead>
                                    <tr>
                                        <th class="wd-15p border-bottom-0">S NO.</th>
                                        <th class="wd-15p border-bottom-0">Image 1</th>
                                        <th class="wd-15p border-bottom-0">Image 2</th>
                                        <th class="wd-15p border-bottom-0">Image 3</th>
                                        <th class="wd-15p border-bottom-0">Image 4</th>
                                        <th class="wd-15p border-bottom-0">Tittle 1</th>
                                        <th class="wd-15p border-bottom-0">Tittle 2</th>
                                        <th class="wd-15p border-bottom-0">Tittle 3</th>
                                        <th class="wd-15p border-bottom-0">Tittle 4</th>
                                        <th class="wd-15p border-bottom-0">Status</th>
                                        <th class="wd-25p border-bottom-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sliders as $slider)
                                        <tr>
                                            <td>{{ ++$loop->index }}</td>
                                         <td>
                                            <img src="{{ asset($slider->image1) }}" alt="Thumbnail" style="width: 100px; height: auto; border-radius: 10px;">
                                        </td>
                                         <td>
                                            <img src="{{ asset($slider->image2) }}" alt="Thumbnail" style="width: 100px; height: auto; border-radius: 10px;">
                                        </td>
                                         <td>
                                            <img src="{{ asset($slider->image3) }}" alt="Thumbnail" style="width: 100px; height: auto; border-radius: 10px;">
                                        </td>
                                         <td>
                                            <img src="{{ asset($slider->image4) }}" alt="Thumbnail" style="width: 100px; height: auto; border-radius: 10px;">
                                        </td>
                                        <td>{{ $slider->title1 }}</td>
                                        <td>{{ $slider->title2 }}</td>
                                        <td>{{ $slider->title3 }}</td>
                                        <td>{{ $slider->title4 }}</td>
                                         <td>
                                                <label class="custom-switch">
                                                    <input type="checkbox" class="custom-switch-input change-status" data-id="{{ $slider->id }}" {{ $slider->status == 'active' ? 'checked' : '' }}>
                                                    <span class="custom-switch-indicator"></span>
                                                </label>
                                            </td>
                                            <td>

                                                <a href="{{ route('admin.slider.edit', $slider->id) }}"
                                                    class="btn btn-info btn-square  br-50 m-1" data-bs-toggle="tooltip"
                                                    title="" data-bs-original-title="Edit"><i
                                                        class="fe fe-edit fs-13"></i> </a>
                                                <a href="{{ route('admin.slider.destroy', $slider->id) }}"
                                                    class="btn btn-danger btn-square delete-item  br-50 m-1"
                                                    data-bs-toggle="tooltip" title=""
                                                    data-bs-original-title="Delete"><i class="fe fe-trash fs-13"></i>
                                                </a>
                                            </td>
                                        </tr>
                                </tbody>
                                @endforeach
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
    $(document).ready(function(){
    $('body').on('click', '.change-status', function(){
        let isChecked = $(this).is(':checked');
        let id = $(this).data('id');

        $.ajax({
            url: "{{ route('admin.slider.change-status') }}",
            method: 'PUT',
            data: { status: isChecked ? 'true' : 'false', id: id },
            success: () => Swal.fire('Success', 'Status has been updated!', 'success'),
            error: () => Swal.fire('Error', 'Failed to update status.', 'error')
        });
    });
});
</script>
@endpush
