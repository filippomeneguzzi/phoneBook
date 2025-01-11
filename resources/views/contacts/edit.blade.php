@extends('components.layouts')

@section('content')
    <div class="editBox">
        <h2 class="editTitle">Modify contact</h2>

        <form action="{{ route('contacts.update', $contact)}}" method="post" id="editForm">
            @csrf
            @method('PUT')

            <div class="nameZone">
                <input type="text" name="first_name" id="first_name"
                    autocomplete="off"
                    value="{{ old('first_name', $contact->first_name) }}">
                @error('first_name')
                    <div>{{ $message }}</div>
                @enderror

                <input type="text" name="last_name" id="last_name"
                    autocomplete="off"
                    value="{{ old('last_name', $contact->last_name) }}">
                @error('last_name')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div class="emailZone">
                <input type="email"
                    name="email" id="email"
                    autocomplete="off"
                    placeholder="Email"
                    value="{{ old('email', $contact->email) }}">
                @error('email')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div class="phoneZone">
                <input type="text"
                    name="phone" id="phone"
                    autocomplete="off"
                    placeholder="Telephone number"
                    value="{{ old('phone', $contact->phone) }}">
                @error('phone')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div class="buttonCreate">
                <a href="{{ route('contacts.show', $contact)}}" class="backBtn">Back</a>
                <button type="submit" class="standardBtn">Save</button>
            </div>
        </form>
    </div>

@endsection
