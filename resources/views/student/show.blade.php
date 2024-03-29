@extends('layouts.app')

@section('template_title')
    {{ $student->name ?? __('Show') . " " . __('Student') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Student</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('students.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $student->name }}
                        </div>
                        <div class="form-group">
                            <strong>Matricula:</strong>
                            {{ $student->matricula }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $student->email }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $student->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $student->celular }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
