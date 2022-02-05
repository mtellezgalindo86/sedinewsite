@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row justify-content-center">
        <div class="timetable-area ptb-100">
            <div class="container">
                <div class="timetable table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Teléfono</th>
                                <th>Mensaje</th>
                                <th>Estatus</th>
                                <th>¿Contactado?</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $contact)
                            <tr>
                                <td>{{$contact["name"]}}</td>
                                <td>{{$contact["email"]}}</td>
                                <td>{{$contact["phone"]}}</td>
                                <td>{{$contact["comment"]}}</td>
                                @php
                                    if($contact["read"] == 0){
                                        $status = "Pendiente";
                                    }
                                @endphp
                                <td>{{$status}}</td>
                                <td><a href="{{route("update-contact", $contact["id"])}}">Si</a></td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
