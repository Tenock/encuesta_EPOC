<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="antialiased">
        <section id="formulario">
            <div class="row">
                <form method="POST">
                    @csrf
                    <h1>Encuesta de Diagnóstico de Enfermedad Pulmonar Obstructiva Crónica (EPOC)</h1>
                    <div class="form-group">
                        <label for="name">{{__('Nombre(s)')}}</label>
                        <input id= "name" type="text" class="form-control" @error ('name') is-invalid @enderror name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Introduce tu Nombre Aqui">
                        @error('name')
                            <span class="invalid-feedback" role="alert">   
                                <strong>{{ $message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="lname1">{{__('Apellido Paterno')}}</label>
                        <input id="lname1" type="text" class="form-control" @error ('lname1') is-invalid @enderror name="lname1" value="{{ old('lname1') }}" required autocomplete="lname1" placeholder="Introduce tu Apellido Paterno Aqui">
                        @error('lname1')
                            <span class="invalid-feedback" role="alert">   
                                <strong>{{ $message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="lname2">{{__('Apellido Materno')}}</label>
                        <input id="lname2" type="text" class="form-control" @error ('lname2') is-invalid @enderror name="lname2" value="{{ old('lname2') }}" required autocomplete="lname2"placeholder="Introduce tu Apellido Materno Aqui">
                        @error('lname2')
                            <span class="invalid-feedback" role="alert">   
                                <strong>{{ $message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">{{__('Correo Electronico')}}</label>
                        <input id="email" type="text" class="form-control" @error ('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Introduce tu Correo Electronico Aqui">
                        @error('email')
                            <span class="invalid-feedback" role="alert">   
                                <strong>{{ $message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <h3>Fecha de Nacimiento</h3>
                    <div class="form-group">
                        <label for="day">{{__('Día')}}</label>
                        <input id="day" type="number" class="form-control" @error ('day') is-invalid @enderror name="day" value="{{ old('day') }}" required autocomplete="day" placeholder="Día">
                        @error('day')
                            <span class="invalid-feedback" role="alert">   
                                <strong>{{ $message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="month">{{__('Mes')}}</label>
                        <select id="month" class="form-control" @error ('month') is-invalid @enderror name="month" value="{{ old('month') }}" required>
                        <option value="1">Enero</option>
                        <option value="2">Febrero</option>
                        <option value="3">Marzo</option>
                        <option value="4">Abril</option>
                        <option value="5">Mayo</option>
                        <option value="6">Junio</option>
                        <option value="7">Julio</option>
                        <option value="8">Agosto</option>
                        <option value="9">Septiembre</option>
                        <option value="10">Octubre</option>
                        <option value="11">Noviembre</option>
                        <option value="12">Diciembre</option>
                        </select>
                        @error('month')
                            <span class="invalid-feedback" role="alert">   
                                <strong>{{ $message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="year">{{__('Año')}}</label>
                        <input id="year" type="number" class="form-control" @error ('year') is-invalid @enderror name="year" value="{{ old('year') }}" required autocomplete="year" placeholder="Año">
                        @error('year')
                            <span class="invalid-feedback" role="alert">   
                                <strong>{{ $message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <h3>Panoramas de Riesgo</h3>
                    <h5>Eres un hombre o mujer de entre 50 y 80 años de edad?</h5>
                    <div class="form-check form-check-inline">
                        <input id="riskage" type="checkbox" class="form-check-input" @error ('riskage') is-invalid @enderror name="riskage" value="si" autocomplete="riskage">
                        <label class="form-check-label" for="riskage">{{__('Si')}}</label>
                        @error('riskage')
                            <span class="invalid-feedback" role="alert">   
                                <strong>{{ $message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <h5>Historia de tabaquismo activo o exfumador (haberlo suspendido dentro de los ultimos 15 años)</h4>
                    <div class="form-check form-check-inline">
                        <label for="cigsmoke">{{__('Cuantos cigarros fumas al dia o fumabas?')}}</label>
                        <input id="cigsmoke" type="number" class="form-control" @error ('cigsmoke') is-invalid @enderror name="cigsmoke" value="{{ old('cigsmoke') }}" required autocomplete="cigsmoke" placeholder="Cigarros fumados diarios">
                        @error('cigsmoke')
                            <span class="invalid-feedback" role="alert">   
                                <strong>{{ $message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-check form-check-inline">
                        <label for="yearssmoke">{{__('Por cuantos años fumabas o fumaste?')}}</label>
                        <input id="yearssmoke" type="number" class="form-control" @error ('yearssmoke') is-invalid @enderror name="yearssmoke" value="{{ old('yearssmoke') }}" required autocomplete="yearssmoke" placeholder="Años fumando">
                        @error('yearssmoke')
                            <span class="invalid-feedback" role="alert">   
                                <strong>{{ $message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <h5>Exposición a humo de leña (al menos 100 horas de humo al año)</h4>
                    <div class="form-check form-check-inline">
                        <label for="hourswood">{{__('Cuantos Horas pasas al dia expuesto o expuesta a humo de leña?')}}</label>
                        <input id="hourswood" type="number" class="form-control" @error ('hourswood') is-invalid @enderror name="hourswood" value="{{ old('hourswood') }}" required autocomplete="hourswood" placeholder="Horas diarias expuesto o expuesta a humo de leña">
                        @error('hourswood')
                            <span class="invalid-feedback" role="alert">   
                                <strong>{{ $message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-check form-check-inline">
                        <label for="yearswood">{{__('Cuantos Años has pasado expuesto a humo de leña?')}}</label>
                        <input id="yearswood" type="number" class="form-control" @error ('yearswood') is-invalid @enderror name="yearswood" value="{{ old('yearswood') }}" required autocomplete="yearswood" placeholder="Años expuestos a humo de leña">
                        @error('yearswood')
                            <span class="invalid-feedback" role="alert">   
                                <strong>{{ $message}}</strong>
                            </span>
                        @enderror
                    </div>


                    <button type="submit" class="btn btn-primary my-1">Ingresar Forma</button>
                </form>
            </div>
        </section>    
    </body>
</html>
