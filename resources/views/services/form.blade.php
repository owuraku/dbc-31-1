<div class="container">
    <form action="{{ route('services.store') }}" method="POST">
        @csrf
        <x-form-field label="Name" name="name"></x-form-field>

        <x-form-field label="Description" name="description"></x-form-field>

        <x-form-field label="Amount" name="amount" type="number"></x-form-field>

        <x-form-field label="Image" name="image" type="file"></x-form-field>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
