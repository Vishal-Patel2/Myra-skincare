@extends('layouts.adminmaster')

@section('title', 'Edit Service | Myraluxa Aesthetic Pvt Ltd')

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <div class="row mb-4">
                    <div class="col-12">
                        <h4 class="mb-0">Edit Service</h4>
                    </div>
                </div>

                <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Gender Selection -->
                    <div class="row mb-3">
                        <label class="form-label">Select Gender:</label>
                        <div class="col-md-2">
                            <input type="radio" name="gender_id" value="1"
                                {{ $service->gender_id == 1 ? 'checked' : '' }}> Men
                        </div>
                        <div class="col-md-2">
                            <input type="radio" name="gender_id" value="2"
                                {{ $service->gender_id == 2 ? 'checked' : '' }}> Women
                        </div>
                    </div>

                    <!-- Category Dropdowns -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Top Level Category</label>
                            <select name="top_category_id" id="top_category" class="form-control" required>
                                <option value="">-- Select Top Category --</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Mid Level Category</label>
                            <select name="mid_category_id" id="mid_category" class="form-control" required>
                                <option value="">-- Select Mid Category --</option>
                            </select>
                        </div>
                    </div>

                                       <!-- Service Info -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label class="form-label">Service Name</label>
                            <input type="text" name="name" value="{{ $service->name }}" class="form-control" required>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Price</label>
                            <input type="number" name="price" value="{{ $service->price }}" step="0.01" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Packages</label>
                            <input type="number" name="packages" value="{{ $service->packages }}" step="0.01" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Rating</label>
                            <input type="number" name="rating" value="{{ $service->rating }}" step="0.1" max="5" min="0" class="form-control">
                        </div>
                    </div>


                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label class="form-label">Duration</label>
                            <input type="text" name="duration" value="{{ $service->duration }}" class="form-control">
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Image (optional)</label>
                            <input type="file" name="image" class="form-control" onchange="previewImage(event)">
                            <div id="image-preview-wrapper" class="mt-2">
                                <img id="image-preview"
                                    src="{{ $service->image ? asset('storage/services/images/' . $service->image) : '' }}"
                                    width="100" style="{{ $service->image ? '' : 'display: none;' }}">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Video (optional)</label>
                            <input type="file" name="video" class="form-control" onchange="previewVideo(event)">
                            <div id="video-preview-wrapper" class="mt-2">
                                <video id="video-preview"
                                    src="{{ $service->video ? asset('storage/services/images/' . $service->video) : '' }}"
                                    width="200" controls style="{{ $service->video ? '' : 'display: none;' }}">
                                </video>
                            </div>
                        </div>

                    </div>

                    <!-- Rich Text Areas -->
                    <div class="mb-3">
                        <label class="form-label">Service Highlight Points</label>
                        <textarea name="highlight_points" id="highlight_points" class="form-control" rows="2">{{ old('highlight_points', $service->highlight_points) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Service Overview</label>
                        <textarea name="overview" id="overview" class="form-control" rows="4">{{ old('overview', $service->overview) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Expected Results</label>
                        <textarea name="expected_results" id="expected_results" class="form-control" rows="4">{{ old('expected_results', $service->expected_results) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Why Choose Myraluxe</label>
                        <textarea name="why_choose" id="why_choose" class="form-control" rows="4">{{ old('why_choose', $service->why_choose) }}</textarea>
                    </div>

                    <div class="text-center mt-4 mb-4">
                        <button type="submit" class="btn btn-success btn-lg me-3">Update Service</button>
                        <a href="{{ route('services.index') }}" class="btn btn-primary btn-lg">Cancel</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('highlight_points');
        CKEDITOR.replace('overview');
        CKEDITOR.replace('expected_results');
        CKEDITOR.replace('why_choose');
    </script>

    <script>
        function previewImage(event) {
            const file = event.target.files[0];
            const output = document.getElementById('image-preview');

            if (file) {
                const reader = new FileReader();
                reader.onload = function() {
                    output.src = reader.result;
                    output.style.display = 'block';
                };
                reader.readAsDataURL(file);
            }
        }

        function previewVideo(event) {
            const file = event.target.files[0];
            const video = document.getElementById('video-preview');

            if (file) {
                const url = URL.createObjectURL(file);
                video.src = url;
                video.style.display = 'block';
            }
        }

        // Optional fallback to show on page load if already exists
        window.addEventListener('DOMContentLoaded', () => {
            const image = document.getElementById('image-preview');
            const video = document.getElementById('video-preview');

            if (image && image.src.includes('storage/services/images')) {
                image.style.display = 'block';
            }

            if (video && video.src.includes('storage/services/images')) {
                video.style.display = 'block';
            }
        });


        // Load categories via AJAX on page load
        $(document).ready(function() {
            const selectedGender = "{{ optional($service->midCategory->topCategory->gender)->id }}";
            const selectedTop = "{{ optional($service->midCategory->topCategory)->id }}";
            const selectedMid = "{{ $service->mid_category_id }}";

            if (selectedGender) {
                $('input[name="gender_id"][value="' + selectedGender + '"]').prop('checked', true);
                loadTopCategories(selectedGender, selectedTop, selectedMid);
            }

            $('input[name="gender_id"]').change(function() {
                const gender = $(this).val();
                loadTopCategories(gender, null, null);
            });

            function loadTopCategories(genderId, selectedTopId = null, selectedMidId = null) {
                $.get(`/admin/get-top-categories/${genderId}`, function(data) {
                    let opts = '<option value="">-- Select Top Category --</option>';
                    data.forEach(c => {
                        opts +=
                            `<option value="${c.id}" ${c.id==selectedTopId ? 'selected' : '' }>${c.name}</option>`;
                    });
                    $('#top_category').html(opts);

                    if (selectedTopId) {
                        loadMidCategories(selectedTopId, selectedMidId);
                    }
                });
            }

            $('#top_category').change(function() {
                const topId = $(this).val();
                loadMidCategories(topId, null);
            });

            function loadMidCategories(topId, selectedMidId = null) {
                $.get(`/admin/get-mid-categories/${topId}`, function(data) {
                    let opts = '<option value="">-- Select Mid Category --</option>';
                    data.forEach(c => {
                        opts +=
                            `<option value="${c.id}" ${c.id==selectedMidId ? 'selected' : '' }>${c.name}</option>`;
                    });
                    $('#mid_category').html(opts);
                });
            }
        });
    </script>
@endpush
