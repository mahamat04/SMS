@extends('layouts.app', ['breadcrumbs' => [
    ['href'=> route('dashboard'), 'text'=> 'Dashboard', 'active'],
]])

@section('title', __('school-management-system'))

@section('page_heading', 'ICT SCHOOL MANAGEMENT SYSTEM (SMS)')

@section('content')

@can('set school')
    @livewire('set-school')
@endcan

@livewire('dashboard-data-cards')

@livewire('set-academic-year')

@if (auth()->user()->hasRole('student'))
    <a href="{{route('students.print-profile',auth()->user()->id)}}" aria-label="Download Profile">
        <div class="card bg-purple-500 dark:bg-purple-600 text-white md:text-2xl">
            <div class="card-body flex gap-4 items-center justify-center">
                <i class="fa fa-download" aria-hidden="true"></i>
                <p class="font-bold">Download Profile</p>
            </div>
        </div>
    </a>
@endif

@can('read notice') 
    @livewire('list-notices-table')
@endcan



@endsection