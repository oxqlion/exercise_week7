@extends('layouts.appe')

@section('content')
    <div>
        <form action="/" method="GET" class="form-inline w-full d-flex gap-2 mb-2">
            <input type="search" name="search" placeholder="Search" class="form-control mr-2">
            <button type="submit" class="btn btn-outline-success">Search</button>
        </form>
        <table class="table">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Phone</td>
                <td>Sosmed</td>
                <td>Email</td>
                <td>Gender</td>
            </tr>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>
                        <a href="{{ route('show', ['writer' => $student->id]) }}">
                            {{ $student->name }}
                        </a>
                    </td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->sosmed }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->gender }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
