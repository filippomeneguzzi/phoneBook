@extends('components.layouts')

@section('content')


    <div class="createBox">
        <h2 class="titleCreate">Create new contact</h2>
        <form id="createForm" action="{{ route('contacts.store')}}" method="post">
            @csrf
            <div class="nameZone">
                <input type="text"
                    name="first_name" id="first_name"
                    autocomplete="off"
                    value="{{ old('first_name')}}" placeholder="Name">
                    {{-- error message --}}
                @error('first_name')
                    <div>{{ $message }}</div>
                @enderror

                {{-- surname, from mobile in column, dekstop row  --}}

                <input type="text"
                    name="last_name" id="last_name"
                    autocomplete="off"
                    value="{{ old('last_name')}}" placeholder="Surname">
                @error('last_name')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div class="emailZone">
                <input type="email"
                    name="email" id="email"
                    autocomplete="off"
                    placeholder="Email"
                    value="{{ old('email')}}">
                @error('email')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div class="phoneZone">
                <input type="text"
                    name="phone" id="phone"
                    autocomplete="off"
                    placeholder="Telephone number"
                    value="{{ old('phone')}}">
                @error('phone')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div class="buttonCreate">
                <a href="{{ route('contacts.index')}}" class="backBtn">Back</a>
                <button type="submit" class="standardBtn">Save</button>
            </div>

        </form>
    </div>

@endsection
