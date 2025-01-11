@extends('components.layouts')

@section('content')
    <div class="homeBox">
        <div class="searchNavigationBox">
            <form id="searchBox" action="{{ route('contacts.index')}}" method="get">
                <input type="search" name="search" id="" placeholder="Search contact" value="{{ request('search')}}" autocomplete="off">
                <div class="lenghtIconBox"></div>
            </form>
            <div class="createContactBox">
                <a href="{{ route('contacts.create')}}">+</a>
            </div>
        </div>


        <div class="contactList">
            {{-- @foreach ($contacts as $contact)
                <a class="contactName" href="{{ route('contacts.show', $contact)}}">
                    <div>
                        <p>{{ $contact->first_name}} {{$contact->last_name}}</p>
                    </div>
                </a>

            @endforeach --}}
            @if($contacts->count() > 0)
                @foreach ($contacts as $contact)
                    <a class="contactName" href="{{ route('contacts.show', $contact)}}">
                        <div>
                            <p>{{ $contact->first_name }} {{ $contact->last_name }}</p>
                        </div>
                    </a>
                @endforeach
            @else
                <p class="text-center mt-4">Nessun contatto trovato</p>
            @endif
        </div>
    </div>
@endsection
