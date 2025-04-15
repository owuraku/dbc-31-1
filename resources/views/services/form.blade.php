<div class="container">
    <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
        @csrf
        @isset($edit)
            @method('PATCH')
        @endisset
        <x-form-field label="Name" name="name" :value="$service->name ?? ''"></x-form-field>

        <x-form-field label="Description" name="description" :value="$service->description ?? ''"></x-form-field>

        <x-form-field label="Amount" name="amount" type="number" :value="$service->amount ?? ''"></x-form-field>

        @isset($service->image)
            <img src="{{ $service->imageUrl() }}" alt="current image" height="200">
        @endisset
        <x-form-field label="Image" name="image" type="file"></x-form-field>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
