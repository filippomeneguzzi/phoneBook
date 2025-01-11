@extends('components.layouts')

@section('content')
 <div class="contactShowBox">
    <div class="btnSpace">
        <a href="{{ route('contacts.index') }}" class="backBtn">Back</a>
        <a href="{{ route('contacts.edit', $contact) }}" class="backBtn">Modify</a>
    </div>

    <div class="firstLetter">
        {{strtoupper(substr($contact->first_name, 0, 1))}}
    </div>

    <div class="dataShow">
        @if($contact->first_name)
            <h2>{{ $contact->first_name }} {{ $contact->last_name }}</h2>
        @endif

        @if($contact->email)
            <p>Email: {{ $contact->email }}</p>
        @endif

        @if($contact->phone)
            <p>Phone: {{ $contact->phone }}</p>
        @endif
    </div>

    <form class="deleteForm" action="{{ route('contacts.destroy', $contact) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Elimina</button>
    </form>


 </div>
@endsection
