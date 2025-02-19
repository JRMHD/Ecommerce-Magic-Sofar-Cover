@extends('layouts.admin')

@section('content')
    <div style="padding: 20px; max-width: 800px; margin: 0 auto;">
        <!-- Page Header -->
        @if (session('success'))
            <div
                style="background-color: #d4edda; color: #155724; padding: 10px; border: 1px solid #c3e6cb; border-radius: 4px; margin-bottom: 20px;">
                {{ session('success') }}
            </div>
        @endif

        <!-- Error Message Placeholder -->
        @if ($errors->any())
            <div
                style="background-color: #f8d7da; color: #721c24; padding: 10px; border: 1px solid #f5c6cb; border-radius: 4px; margin-bottom: 20px;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div style="margin-bottom: 2rem;">
            <h2
                style="color: #2d3748; font-size: 1.875rem; font-weight: 600; display: flex; align-items: center; gap: 0.5rem;">
                <i class="fas fa-plus-circle"></i> Add New Product
            </h2>
        </div>

        <!-- Form Card -->
        <div
            style="background-color: white; padding: 2rem; border-radius: 0.5rem; box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);">
            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Grid Layout for Form Fields -->
                <div style="display: grid; gap: 1.5rem;">
                    <!-- Product Name -->
                    <div>
                        <label
                            style="display: block; font-size: 0.875rem; font-weight: 500; color: #4a5568; margin-bottom: 0.5rem;">
                            <i class="fas fa-tag" style="margin-right: 0.5rem;"></i> Product Name
                        </label>
                        <input type="text" name="name" required
                            style="width: 100%; padding: 0.75rem; border: 1px solid #e2e8f0; border-radius: 0.375rem; outline: none; transition: border-color 0.2s; font-size: 1rem;"
                            placeholder="Enter product name">
                    </div>

                    <!-- Category -->
                    <div>
                        <label
                            style="display: block; font-size: 0.875rem; font-weight: 500; color: #4a5568; margin-bottom: 0.5rem;">
                            <i class="fas fa-folder" style="margin-right: 0.5rem;"></i> Category
                        </label>
                        <select name="category" required
                            style="width: 100%; padding: 0.75rem; border: 1px solid #e2e8f0; border-radius: 0.375rem; outline: none; appearance: none; background: url('data:image/svg+xml;charset=US-ASCII,<svg width=\"24\" height=\"24\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M7 10l5 5 5-5z\"/></svg>') no-repeat right 1rem center/1em; background-color: white; font-size: 1rem;">
                            <option value="">Select a category</option>
                            @php
                                $categories = [
                                    'Fleece Blankets',
                                    'Fluffy Duvets',
                                    'Velvet Duvets',
                                    'Cotton Duvets',
                                    'Duvet Covers',
                                    'Quilts',
                                    'Throws & Sofa Blankets',
                                    'Pillow Protectors',
                                    'Pillows & Cushions',
                                    'Cushion Covers',
                                    'Throw Pillow Covers',
                                    'Bed Sheets & Bed Covers',
                                    'Mattress Protectors',
                                    'Mosquito Nets',
                                    'Plastic Wardrobes',
                                    'Closet Organizers',
                                    '3D Carpets & Rugs',
                                    'Shaggy Carpets',
                                    'Toilet Set Mats',
                                    'Antislip Door Mats',
                                    'Bathroom Mats',
                                    'L-Shaped Seat Covers',
                                    'Special Seat Covers',
                                    'Recliner Chair Covers',
                                    'Sofa Slipcovers',
                                    'Sofa Covers',
                                    'Dining Chair Covers',
                                    'Table Runners & Placemats',
                                    'Curtains & Sheers',
                                    'Home Decor Accessories',
                                    'Others',
                                ];
                            @endphp

                            @foreach ($categories as $category)
                                <option value="{{ $category }}">{{ $category }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Description -->
                    <div>
                        <label
                            style="display: block; font-size: 0.875rem; font-weight: 500; color: #4a5568; margin-bottom: 0.5rem;">
                            <i class="fas fa-align-left" style="margin-right: 0.5rem;"></i> Description
                        </label>
                        <textarea name="description" required
                            style="width: 100%; padding: 0.75rem; border: 1px solid #e2e8f0; border-radius: 0.375rem; outline: none; transition: border-color 0.2s; min-height: 120px; resize: vertical; font-size: 1rem;"
                            placeholder="Enter product description"></textarea>
                    </div>

                    <!-- Price Fields -->
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem;">
                        <div>
                            <label
                                style="display: block; font-size: 0.875rem; font-weight: 500; color: #4a5568; margin-bottom: 0.5rem;">
                                <i class="fas fa-dollar-sign" style="margin-right: 0.5rem;"></i> Price
                            </label>
                            <input type="number" step="0.01" name="price" required
                                style="width: 100%; padding: 0.75rem; border: 1px solid #e2e8f0; border-radius: 0.375rem; outline: none; transition: border-color 0.2s; font-size: 1rem;"
                                placeholder="0.00">
                        </div>
                        <div>
                            <label
                                style="display: block; font-size: 0.875rem; font-weight: 500; color: #4a5568; margin-bottom: 0.5rem;">
                                <i class="fas fa-tags" style="margin-right: 0.5rem;"></i> Slashed Price
                            </label>
                            <input type="number" step="0.01" name="slashed_price"
                                style="width: 100%; padding: 0.75rem; border: 1px solid #e2e8f0; border-radius: 0.375rem; outline: none; transition: border-color 0.2s; font-size: 1rem;"
                                placeholder="Optional">
                        </div>
                    </div>

                    <!-- Weight/Quantity and Stock -->
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem;">
                        <div>
                            <label
                                style="display: block; font-size: 0.875rem; font-weight: 500; color: #4a5568; margin-bottom: 0.5rem;">
                                <i class="fas fa-weight" style="margin-right: 0.5rem;"></i> Weight/Quantity
                            </label>
                            <input type="text" name="weight_quantity" required
                                style="width: 100%; padding: 0.75rem; border: 1px solid #e2e8f0; border-radius: 0.375rem; outline: none; transition: border-color 0.2s; font-size: 1rem;"
                                placeholder="e.g., 1kg, 500ml">
                        </div>
                        <div>
                            <label
                                style="display: block; font-size: 0.875rem; font-weight: 500; color: #4a5568; margin-bottom: 0.5rem;">
                                <i class="fas fa-warehouse" style="margin-right: 0.5rem;"></i> Stock Status
                            </label>
                            <select name="stock_availability" required
                                style="width: 100%; padding: 0.75rem; border: 1px solid #e2e8f0; border-radius: 0.375rem; outline: none; appearance: none; background: url('data:image/svg+xml;charset=US-ASCII,<svg width=\"24\" height=\"24\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M7 10l5 5 5-5z\"/></svg>') no-repeat right 1rem center/1em; background-color: white; font-size: 1rem;">
                                <option value="In Stock">In Stock</option>
                                <option value="Out of Stock">Out of Stock</option>
                            </select>
                        </div>
                    </div>

                    <!-- Image Upload -->
                    <div>
                        <label
                            style="display: block; font-size: 0.875rem; font-weight: 500; color: #4a5568; margin-bottom: 0.5rem;">
                            <i class="fas fa-images" style="margin-right: 0.5rem;"></i> Product Images
                        </label>
                        <div
                            style="border: 2px dashed #e2e8f0; border-radius: 0.375rem; padding: 2rem; text-align: center;">
                            <input type="file" name="images[]" multiple required style="width: 100%; font-size: 1rem;"
                                accept="image/*">
                            <p style="margin-top: 0.5rem; font-size: 0.875rem; color: #718096;">
                                Drag and drop images here or click to select files
                            </p>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div style="margin-top: 1rem;">
                        <button type="submit"
                            style="background-color: #48bb78; color: white; padding: 0.75rem 1.5rem; border-radius: 0.375rem; border: none; cursor: pointer; font-size: 1rem; font-weight: 500; display: inline-flex; align-items: center; gap: 0.5rem; transition: background-color 0.2s;">
                            <i class="fas fa-plus-circle"></i> Add Product
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Add Font Awesome in the head section of your layout -->
    @push('styles')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    @endpush
@endsection
