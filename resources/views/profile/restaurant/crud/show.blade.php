<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">Profile Information</h2>
    </header>
        <div class="mb-2">
            <label for="name">{{__('Name')}}</label>
            <input disabled class="form-control" type="text" name="name" id="name" autocomplete="name" value="{{old('name', $restaurant->restaurant_name)}}" required autofocus>
        </div>

        <div class="mb-2">
            <label for="email">{{__('Indirizzo') }}</label>

            <input disabled id="email" name="email" type="email" class="form-control" value="{{ old('email', $restaurant->address)}}" required autocomplete="username" />
</section>