@extends('layouts.app')

@section('title', 'Üyelik Sistemi')

@section('content')
    <h1>Üyelikler</h1>

    <ul>
        @forelse($members as $member)
            <li> {{ $member->name }} </li>
        @empty
            <li>No members available.</li>
        @endforelse
    </ul>
@endsection
