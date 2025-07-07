@extends('layouts.adminmaster')

@section('title', 'View Mid Level Categories | Myraluxa Aesthetic Pvt Ltd')

@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- Page Title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">View Mid Level Categories</h4>
                    </div>
                </div>
            </div>

            <!-- Table Row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <!-- Header -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <h4 class="card-title">All Mid Level Categories</h4>
                                </div>
                                <div class="col-md-6 text-end">
                                    <a href="{{ route('mid-categories.create') }}" class="btn btn-success btn-rounded">
                                        <i class="mdi mdi-plus me-1"></i> Add New Mid Category
                                    </a>
                                </div>
                            </div>

                            <!-- Table -->
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover align-middle">
                                    <thead class="table-light">
                                        <tr>
                                            <th>#</th>
                                            <th>Gender</th>
                                            <th>Top Category Name</th>
                                            <th>Mid Category Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($midCategories as $category)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    @php
                                                        $genderId = $category->topCategory->gender_id ?? null;
                                                    @endphp
                                                    {{ $genderId == 1 ? 'Men' : ($genderId == 2 ? 'Women' : 'N/A') }}
                                                </td>
                                                <td>{{ $category->topCategory->name ?? 'N/A' }}</td>
                                                <td>{{ $category->name }}</td>
                                                <td class="d-flex gap-2">
                                                    <a href="{{ route('mid-categories.edit', $category->id) }}"
                                                       class="btn btn-sm btn-primary">Edit</a>
                                                    <form action="{{ route('mid-categories.destroy', $category->id) }}"
                                                          method="POST"
                                                          onsubmit="return confirm('Are you sure you want to delete this mid category?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach

                                        @if ($midCategories->isEmpty())
                                            <tr>
                                                <td colspan="5" class="text-center text-muted">No mid categories found.</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>

                        </div> <!-- card-body -->
                    </div> <!-- card -->
                </div> <!-- col -->
            </div> <!-- row -->

        </div> <!-- container-fluid -->
    </div>
</div>
@endsection
