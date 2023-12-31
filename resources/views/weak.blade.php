@extends('layouts.appe')

@section('content')
    <div>
        <a href="{{ route('add_student') }}" class="btn btn-primary mb-3">Add New Student</a>
        <table class="table">
            <tr>
                <td>ID</td>
                <td>Student Name</td>
                <td>Extracurricular</td>
                <td>Satpam Name</td>
                @foreach ($studentExtracurriculars as $asd)
            <tr>
                <td>{{ $asd->id }}</td>
                <td>
                    <a href="#">
                        {{ $asd->banyakStudent->name }}
                    </a>
                </td>
                <td>
                    <a href="#">
                        {{ $asd->banyakExtra->name }}
                    </a>
                </td>
                <td>
                    <a href="#">
                        {{ $asd->banyakSatpam->name }}
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
