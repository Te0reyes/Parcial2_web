<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h4>Gestion de clientes</h4>
        <div class="row">
            <div class="col"-xl-12>
                <form action="{{ route('cliente.index') }}" method="get">
                    <div class="form row">
                        <div class="col-sm-4 my-1">
                            <input type="text" class="form-control" name="texto" value="{{$texto}}">

                        </div>
                        <div class="col-auto my-1">
                            <input type="submit" class="btn btn-primary" value="Buscar">

                        </div>
                    </div>
                </form>
            </div>

            <div class="col"-xl-12>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                               <th>Opcines</th>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>DPI</th>
                                <th>Genero</th>
                                <th>Direccion</th>
                                <th>telefono</th>
                                <th>correo</th>
                            </tr>

                        </thead>
                        <tbody>
                            @if(count($clientes)<=0)
                                <tr>
                                    <td colspan="8"> No hay Coincidencias</td>
                                </tr>
                            @else
                                
                            
                            @foreach ($clientes as $cliente)
                                <tr>
                                    <td>Editar | Eliminas</td>
                                    <td>{{$cliente->id}}</td>
                                    <td>{{$cliente->nombre_apellido}}</td>
                                    <td>{{$cliente->dpi}}</td>
                                    <td>{{$cliente->genero}}</td>
                                    <td>{{$cliente->direccion}}</td>
                                    <td>{{$cliente->telefono}}</td>
                                    <td>{{$cliente->correo}}</td>
                        
                                </tr>
                            @endforeach
                            @endif

                        </tbody>
                    </table>
                </div>

            </div>

        </div>

    </div>
    
</body>
</html>