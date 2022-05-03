<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Paises</title>
</head>
<body>

<style>
    .pais{
        color: red;
    }
    .cap{
        color: blue;
    }
    .mon{
        color: green;
    }
    .pob{
        color: yellow;
    }
    .ciu{
        background-color: purple;
    }
</style>
    <h1 align="center"  >Paises de la región</h1>
    <table class="table table-striped table-dark">
        <thead> 
            <tr>
                <th class="pais"> Pais </th>
                <th class="cap"> Capital </th>
                <th class="mon"> moneda </th>
                <th class="pob"> poblacion </th>
                <th class="ciu"> Ciudades </th>
            </tr>
        </thead>
        <tbody> 
            @foreach($paises as $pais => $infopais)
                <tr>
                    <td class="pais" rowspan="{{ count($infopais['ciudades']) }}">
                        {{ $pais }}
                    </td>
                    <td class="cap"  rowspan="{{ count($infopais['ciudades']) }}">
                        {{ $infopais["capital"]  }}
                    </td>
                    <td  class="mon" rowspan="{{ count($infopais['ciudades']) }}">
                        {{ $infopais["moneda"]  }}
                    </td>
                    <td class="pob" rowspan="{{ count($infopais['ciudades']) }}">
                        {{ $infopais["poblacion"]  }}
                    </td>
                    @foreach($infopais["ciudades"] as $ciudad )
                    <td class="ciu">
                        {{ $ciudad }}
                    </td>
                    </tr>
                    @endforeach

            @endforeach
        </tbody>
        <tfoot> </tfoot>
    </table>
</body>
</html>