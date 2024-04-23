<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('bootstrap.min.css')}}">
    <title>Lemploi De Tempes</title>
</head>
<body class="bg-secondar" >
    <div class="" >
        <div class="container d-flex justify-content-between mt-5">
            <h4>Groupe {{$empolois[0]->groupe->nom}}</h4>
            <h4>Specialite {{$empolois[0]->groupe->specialite}}</h4>
        </div>
        <div class="container mx-auto mt-5">
            @php
                $lundi= array();
                $mardi= array();
                $mercredi= array();
                $jeudi= array();
                $vendredi= array();
                $samedi= array();
            @endphp
            @foreach ($empolois as $empoloi)
                @switch($empoloi->joure)
                    @case('lundi')
                        {{array_push($lundi , $empoloi)}}
                    @break
                    @case('mardi')
                        {{array_push($mardi , $empoloi)}}
                    @break
                    @case('mercredi')
                        {{array_push($mercredi , $empoloi)}}
                    @break
                    @case('jeudi')
                        {{array_push($jeudi , $empoloi)}}
                    @break
                    @case('vendredi')
                        {{array_push($vendredi , $empoloi)}}
                    @break
                    @case('samedi')
                        {{array_push($samedi , $empoloi)}}
                    @break
                @endswitch
            @endforeach
            <table class="table table-white table-striped">
                <thead>
                    <tr class="bg-dark text-white">
                        <th >Joure</th>
                        <th >08:00-09:00</th>
                        <th >09:00-10:00</th>
                        <th >10:00-11:00</th>
                        <th >11:00-12:00</th>
                        <th >14:00-15:00</th>
                        <th >15:00-16:00</th>
                        <th >16:00-17:00</th>
                        <th >17:00-18:00</th>
                    </tr>
                </thead>
                <tbody>
                   <tr>
                        <td class="bg-secondary text-white">Lundi</td>
                        <td>
                            @foreach ($lundi as $l)
                                <p class={{$l->horaire =='08:00-09:00'?'bg-info m-0 ':'m-0 '}}> {{$l->horaire =='08:00-09:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}}</p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($lundi as $l)
                                <p class={{$l->horaire =='09:00-10:00'?'bg-info m-0 ':'m-0 '}}> {{$l->horaire =='09:00-10:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}} </p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($lundi as $l)
                                <p class={{$l->horaire =='10:00-11:00'?'bg-info m-0 ':'m-0 '}}>{{$l->horaire =='10:00-11:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}}</p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($lundi as $l)
                            <p class={{$l->horaire =='11:00-12:00'?'bg-info m-0 ':'m-0 '}}>{{$l->horaire =='11:00-12:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}}</p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($lundi as $l)
                            <p class={{$l->horaire =='14:00-15:00'?'bg-info m-0 ':'m-0 '}}>{{$l->horaire =='14:00-15:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}}</p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($lundi as $l)
                            <p class={{$l->horaire =='15:00-16:00'?'bg-info m-0 ':'m-0 '}}>{{$l->horaire =='15:00-16:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}}</p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($lundi as $l)
                            <p class={{$l->horaire =='16:00-17:00'?'bg-info m-0 ':'m-0 '}}>{{$l->horaire =='16:00-17:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}}</p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($lundi as $l)
                            <p class={{$l->horaire =='17:00-18:00'?'bg-info m-0 ':'m-0 '}}>{{$l->horaire =='17:00-18:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}}</p>
                            @endforeach
                        </td>
                   </tr>
                   {{-- mardi --}}
                   <tr>
                        <td class="bg-secondary text-white">Mardi</td>
                        <td>
                            @foreach ($mardi as $l)
                                <p class={{$l->horaire =='08:00-09:00'?'bg-info m-0 ':'m-0 '}}> {{$l->horaire =='08:00-09:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}}</p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($mardi as $l)
                                <p class={{$l->horaire =='09:00-10:00'?'bg-info m-0 ':'m-0 '}}> {{$l->horaire =='09:00-10:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}} </p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($mardi as $l)
                                <p class={{$l->horaire =='10:00-11:00'?'bg-info m-0 ':'m-0 '}}>{{$l->horaire =='10:00-11:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}}</p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($mardi as $l)
                            <p class={{$l->horaire =='11:00-12:00'?'bg-info m-0 ':'m-0 '}}>{{$l->horaire =='11:00-12:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}}</p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($mardi as $l)
                            <p class={{$l->horaire =='14:00-15:00'?'bg-info m-0 ':'m-0 '}}>{{$l->horaire =='14:00-15:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}}</p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($mardi as $l)
                            <p class={{$l->horaire =='15:00-16:00'?'bg-info m-0 ':'m-0 '}}>{{$l->horaire =='15:00-16:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}}</p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($mardi as $l)
                            <p class={{$l->horaire =='16:00-17:00'?'bg-info m-0 ':'m-0 '}}>{{$l->horaire =='16:00-17:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}}</p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($mardi as $l)
                            <p class={{$l->horaire =='17:00-18:00'?'bg-info m-0 ':'m-0 '}}>{{$l->horaire =='17:00-18:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}}</p>
                            @endforeach
                        </td>
                   </tr>
                   <tr>
                        <td class="bg-secondary text-white">Mercredi</td>
                        <td>
                            @foreach ($mercredi as $l)
                                <p class={{$l->horaire =='08:00-09:00'?'bg-info m-0 ':'m-0 '}}> {{$l->horaire =='08:00-09:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}}</p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($mercredi as $l)
                                <p class={{$l->horaire =='09:00-10:00'?'bg-info m-0 ':'m-0 '}}> {{$l->horaire =='09:00-10:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}} </p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($mercredi as $l)
                                <p class={{$l->horaire =='10:00-11:00'?'bg-info m-0 ':'m-0 '}}>{{$l->horaire =='10:00-11:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}}</p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($mercredi as $l)
                            <p class={{$l->horaire =='11:00-12:00'?'bg-info m-0 ':'m-0 '}}>{{$l->horaire =='11:00-12:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}}</p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($mercredi as $l)
                            <p class={{$l->horaire =='14:00-15:00'?'bg-info m-0 ':'m-0 '}}>{{$l->horaire =='14:00-15:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}}</p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($mercredi as $l)
                            <p class={{$l->horaire =='15:00-16:00'?'bg-info m-0 ':'m-0 '}}>{{$l->horaire =='15:00-16:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}}</p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($mercredi as $l)
                            <p class={{$l->horaire =='16:00-17:00'?'bg-info m-0 ':'m-0 '}}>{{$l->horaire =='16:00-17:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}}</p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($mercredi as $l)
                            <p class={{$l->horaire =='17:00-18:00'?'bg-info m-0 ':'m-0 '}}>{{$l->horaire =='17:00-18:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}}</p>
                            @endforeach
                        </td>
                   </tr>
                   <tr>
                        <td class="bg-secondary text-white">Jeudi</td>
                        <td>
                            @foreach ($jeudi as $l)
                                <p class={{$l->horaire =='08:00-09:00'?'bg-info m-0 ':'m-0 '}}> {{$l->horaire =='08:00-09:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}}</p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($jeudi as $l)
                                <p class={{$l->horaire =='09:00-10:00'?'bg-info m-0 ':'m-0 '}}> {{$l->horaire =='09:00-10:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}} </p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($jeudi as $l)
                                <p class={{$l->horaire =='10:00-11:00'?'bg-info m-0 ':'m-0 '}}>{{$l->horaire =='10:00-11:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}}</p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($jeudi as $l)
                            <p class={{$l->horaire =='11:00-12:00'?'bg-info m-0 ':'m-0 '}}>{{$l->horaire =='11:00-12:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}}</p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($jeudi as $l)
                            <p class={{$l->horaire =='14:00-15:00'?'bg-info m-0 ':'m-0 '}}>{{$l->horaire =='14:00-15:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}}</p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($jeudi as $l)
                            <p class={{$l->horaire =='15:00-16:00'?'bg-info m-0 ':'m-0 '}}>{{$l->horaire =='15:00-16:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}}</p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($jeudi as $l)
                            <p class={{$l->horaire =='16:00-17:00'?'bg-info m-0 ':'m-0 '}}>{{$l->horaire =='16:00-17:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}}</p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($jeudi as $l)
                            <p class={{$l->horaire =='17:00-18:00'?'bg-info m-0 ':'m-0 '}}>{{$l->horaire =='17:00-18:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}}</p>
                            @endforeach
                        </td>
                   </tr>
                   <tr>
                        <td class="bg-secondary text-white">Vendredi</td>
                        <td>
                            @foreach ($vendredi as $l)
                                <p class={{$l->horaire =='08:00-09:00'?'bg-info m-0 ':'m-0 '}}> {{$l->horaire =='08:00-09:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}}</p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($lundi as $l)
                                <p class={{$l->horaire =='09:00-10:00'?'bg-info m-0 ':'m-0 '}}> {{$l->horaire =='09:00-10:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}} </p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($vendredi as $l)
                                <p class={{$l->horaire =='10:00-11:00'?'bg-info m-0 ':'m-0 '}}>{{$l->horaire =='10:00-11:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}}</p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($vendredi as $l)
                            <p class={{$l->horaire =='11:00-12:00'?'bg-info m-0 ':'m-0 '}}>{{$l->horaire =='11:00-12:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}}</p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($vendredi as $l)
                            <p class={{$l->horaire =='14:00-15:00'?'bg-info m-0 ':'m-0 '}}>{{$l->horaire =='14:00-15:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}}</p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($vendredi as $l)
                            <p class={{$l->horaire =='15:00-16:00'?'bg-info m-0 ':'m-0 '}}>{{$l->horaire =='15:00-16:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}}</p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($vendredi as $l)
                            <p class={{$l->horaire =='16:00-17:00'?'bg-info m-0 ':'m-0 '}}>{{$l->horaire =='16:00-17:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}}</p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($vendredi as $l)
                            <p class={{$l->horaire =='17:00-18:00'?'bg-info m-0 ':'m-0 '}}>{{$l->horaire =='17:00-18:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}}</p>
                            @endforeach
                        </td>
                   </tr>
                   <tr>
                        <td class="bg-secondary text-white">Samedi</td>
                        <td>
                            @foreach ($samedi as $l)
                                <p class={{$l->horaire =='08:00-09:00'?'bg-info m-0 ':'m-0 '}}> {{$l->horaire =='08:00-09:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}}</p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($samedi as $l)
                                <p class={{$l->horaire =='09:00-10:00'?'bg-info m-0 ':'m-0 '}}> {{$l->horaire =='09:00-10:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}} </p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($samedi as $l)
                                <p class={{$l->horaire =='10:00-11:00'?'bg-info m-0 ':'m-0 '}}>{{$l->horaire =='10:00-11:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}}</p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($samedi as $l)
                            <p class={{$l->horaire =='11:00-12:00'?'bg-info m-0 ':'m-0 '}}>{{$l->horaire =='11:00-12:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}}</p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($samedi as $l)
                            <p class={{$l->horaire =='14:00-15:00'?'bg-info m-0 ':'m-0 '}}>{{$l->horaire =='14:00-15:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}}</p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($samedi as $l)
                            <p class={{$l->horaire =='15:00-16:00'?'bg-info m-0 ':'m-0 '}}>{{$l->horaire =='15:00-16:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}}</p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($samedi as $l)
                            <p class={{$l->horaire =='16:00-17:00'?'bg-info m-0 ':'m-0 '}}>{{$l->horaire =='16:00-17:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}}</p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($samedi as $l)
                            <p class={{$l->horaire =='17:00-18:00'?'bg-info m-0 ':'m-0 '}}>{{$l->horaire =='17:00-18:00' ?$l->module->nom .'  '.'salle '.$l->salle->numSalle : ''}}</p>
                            @endforeach
                        </td>
                   </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>







{{-- <table class="table table-white table-striped">
    <thead>
        <tr class="bg-dark text-white">
            <th>Joure</th>
            <th>08:00-09:00</th>
            <th>09:00-10:00</th>
            <th>10:00-11:00</th>
            <th>11:00-12:00</th>
            <th>14:00-15:00</th>
            <th>15:00-16:00</th>
            <th>16:00-17:00</th>
            <th>17:00-18:00</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($empolois as $empoloi)
            @switch($empoloi->joure)
                @case('lundi')
                    {{array_push($lundi , $empoloi)}}
                @break
                @case('mardi')
                    {{array_push($mardi , $empoloi)}}
                @break
                @case('mercredi')
                    {{array_push($mercredi , $empoloi)}}
                @break
                @case('jeudi')
                    {{array_push($jeudi , $empoloi)}}
                @break
                @case('vendredi')
                    {{array_push($vendredi , $empoloi)}}
                @break
                @case('samedi')
                    {{array_push($samedi , $empoloi)}}
                @break
            @endswitch
        @endforeach
        <tr>
            <td>Lundi</td>
            @foreach ($lundi as $l)
                @switch($l->horaire)
                    @case('08:00-09:00')
                        <td class={{$l->horaire == '08:00-09:00' ? 'bg-info':''}}>{{$l->horaire == '08:00-09:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                    @case('09:00-10:00')
                        <td class={{$l->horaire == '09:00-10:00' ? 'bg-info':''}}>{{$l->horaire == '09:00-10:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                    @case('10:00-11:00')
                        <td class={{$l->horaire == '10:00-11:00' ? 'bg-info':''}}>{{$l->horaire == '10:00-11:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                    @case('11:00-12:00')
                        <td class={{$l->horaire == '11:00-12:00' ? 'bg-info':''}}>{{$l->horaire == '11:00-12:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                    @case('14:00-15:00')
                        <td class={{$l->horaire == '14:00-15:00' ? 'bg-info':''}}>{{$l->horaire == '14:00-15:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                    @case('15:00-16:00')
                        <td class={{$l->horaire == '15:00-16:00' ? 'bg-info':''}}>{{$l->horaire == '15:00-16:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                    @case('16:00-17:00')
                        <td class={{$l->horaire == '16:00-17:00' ? 'bg-info':''}}>{{$l->horaire == '16:00-17:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                    @case('17:00-18:00')
                        <td class={{$l->horaire == '17:00-18:00' ? 'bg-info':''}}>{{$l->horaire == '17:00-18:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                @endswitch
            @endforeach
        </tr>
        <tr>
            <td>Mardi</td>
            @foreach ($mardi as $l)
                @switch($l->horaire)
                    @case('08:00-09:00')
                        <td class={{$l->horaire == '08:00-09:00' ? 'bg-info':''}}>{{$l->horaire == '08:00-09:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                    @case('09:00-10:00')
                        <td class={{$l->horaire == '09:00-10:00' ? 'bg-info':''}}>{{$l->horaire == '09:00-10:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                    @case('10:00-11:00')
                        <td class={{$l->horaire == '10:00-11:00' ? 'bg-info':''}}>{{$l->horaire == '10:00-11:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                    @case('11:00-12:00')
                        <td class={{$l->horaire == '11:00-12:00' ? 'bg-info':''}}>{{$l->horaire == '11:00-12:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                    @case('14:00-15:00')
                        <td class={{$l->horaire == '14:00-15:00' ? 'bg-info':''}}>{{$l->horaire == '14:00-15:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                    @case('15:00-16:00')
                        <td class={{$l->horaire == '15:00-16:00' ? 'bg-info':''}}>{{$l->horaire == '15:00-16:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                    @case('16:00-17:00')
                        <td class={{$l->horaire == '16:00-17:00' ? 'bg-info':''}}>{{$l->horaire == '16:00-17:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                    @case('17:00-18:00')
                        <td class={{$l->horaire == '17:00-18:00' ? 'bg-info':''}}>{{$l->horaire == '17:00-18:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                @endswitch
            @endforeach
        </tr>
        <tr>
            <td>Mercredi</td>
            @foreach ($mercredi as $l)
                @switch($l->horaire)
                    @case('08:00-09:00')
                        <td class={{$l->horaire == '08:00-09:00' ? 'bg-info':''}}>{{$l->horaire == '08:00-09:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                    @case('09:00-10:00')
                        <td class={{$l->horaire == '09:00-10:00' ? 'bg-info':''}}>{{$l->horaire == '09:00-10:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                    @case('10:00-11:00')
                        <td class={{$l->horaire == '10:00-11:00' ? 'bg-info':''}}>{{$l->horaire == '10:00-11:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                    @case('11:00-12:00')
                        <td class={{$l->horaire == '11:00-12:00' ? 'bg-info':''}}>{{$l->horaire == '11:00-12:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                    @case('14:00-15:00')
                        <td class={{$l->horaire == '14:00-15:00' ? 'bg-info':''}}>{{$l->horaire == '14:00-15:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                    @case('15:00-16:00')
                        <td class={{$l->horaire == '15:00-16:00' ? 'bg-info':''}}>{{$l->horaire == '15:00-16:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                    @case('16:00-17:00')
                        <td class={{$l->horaire == '16:00-17:00' ? 'bg-info':''}}>{{$l->horaire == '16:00-17:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                    @case('17:00-18:00')
                        <td class={{$l->horaire == '17:00-18:00' ? 'bg-info':''}}>{{$l->horaire == '17:00-18:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                @endswitch
            @endforeach
        </tr>
        <tr>
            <td>Jeudi</td>
            @foreach ($jeudi as $l)
                @switch($l->horaire)
                    @case('08:00-09:00')
                        <td class={{$l->horaire == '08:00-09:00' ? 'bg-info':''}}>{{$l->horaire == '08:00-09:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                    @case('09:00-10:00')
                        <td class={{$l->horaire == '09:00-10:00' ? 'bg-info':''}}>{{$l->horaire == '09:00-10:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                    @case('10:00-11:00')
                        <td class={{$l->horaire == '10:00-11:00' ? 'bg-info':''}}>{{$l->horaire == '10:00-11:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                    @case('11:00-12:00')
                        <td class={{$l->horaire == '11:00-12:00' ? 'bg-info':''}}>{{$l->horaire == '11:00-12:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                    @case('14:00-15:00')
                        <td class={{$l->horaire == '14:00-15:00' ? 'bg-info':''}}>{{$l->horaire == '14:00-15:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                    @case('15:00-16:00')
                        <td class={{$l->horaire == '15:00-16:00' ? 'bg-info':''}}>{{$l->horaire == '15:00-16:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                    @case('16:00-17:00')
                        <td class={{$l->horaire == '16:00-17:00' ? 'bg-info':''}}>{{$l->horaire == '16:00-17:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                    @case('17:00-18:00')
                        <td class={{$l->horaire == '17:00-18:00' ? 'bg-info':''}}>{{$l->horaire == '17:00-18:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                @endswitch
            @endforeach
        </tr>
        <tr>
            <td>Vendredi</td>
            @foreach ($vendredi as $l)
                @switch($l->horaire)
                    @case('08:00-09:00')
                        <td class={{$l->horaire == '08:00-09:00' ? 'bg-info':''}}>{{$l->horaire == '08:00-09:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                    @case('09:00-10:00')
                        <td class={{$l->horaire == '09:00-10:00' ? 'bg-info':''}}>{{$l->horaire == '09:00-10:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                    @case('10:00-11:00')
                        <td class={{$l->horaire == '10:00-11:00' ? 'bg-info':''}}>{{$l->horaire == '10:00-11:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                    @case('11:00-12:00')
                        <td class={{$l->horaire == '11:00-12:00' ? 'bg-info':''}}>{{$l->horaire == '11:00-12:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                    @case('14:00-15:00')
                        <td class={{$l->horaire == '14:00-15:00' ? 'bg-info':''}}>{{$l->horaire == '14:00-15:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                    @case('15:00-16:00')
                        <td class={{$l->horaire == '15:00-16:00' ? 'bg-info':''}}>{{$l->horaire == '15:00-16:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                    @case('16:00-17:00')
                        <td class={{$l->horaire == '16:00-17:00' ? 'bg-info':''}}>{{$l->horaire == '16:00-17:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                    @case('17:00-18:00')
                        <td class={{$l->horaire == '17:00-18:00' ? 'bg-info':''}}>{{$l->horaire == '17:00-18:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                @endswitch
            @endforeach
        </tr>
        <tr>
            <td>Samedi</td>
            @foreach ($samedi as $l)
                @switch($l->horaire)
                    @case('08:00-09:00')
                        <td class={{$l->horaire == '08:00-09:00' ? 'bg-info':''}}>{{$l->horaire == '08:00-09:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                    @case('09:00-10:00')
                        <td class={{$l->horaire == '09:00-10:00' ? 'bg-info':''}}>{{$l->horaire == '09:00-10:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                    @case('10:00-11:00')
                        <td class={{$l->horaire == '10:00-11:00' ? 'bg-info':''}}>{{$l->horaire == '10:00-11:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                    @case('11:00-12:00')
                        <td class={{$l->horaire == '11:00-12:00' ? 'bg-info':''}}>{{$l->horaire == '11:00-12:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                    @case('14:00-15:00')
                        <td class={{$l->horaire == '14:00-15:00' ? 'bg-info':''}}>{{$l->horaire == '14:00-15:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                    @case('15:00-16:00')
                        <td class={{$l->horaire == '15:00-16:00' ? 'bg-info':''}}>{{$l->horaire == '15:00-16:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                    @case('16:00-17:00')
                        <td class={{$l->horaire == '16:00-17:00' ? 'bg-info':''}}>{{$l->horaire == '16:00-17:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                    @case('17:00-18:00')
                        <td class={{$l->horaire == '17:00-18:00' ? 'bg-info':''}}>{{$l->horaire == '17:00-18:00' ? $l->module->nom .'  '.'salle '.$l->salle->numSalle : '' }}</td>
                        @break
                @endswitch
            @endforeach
        </tr>
    </tbody>
</table> --}}
{{-- 
<table class="table table-white table-striped">
    <thead>
        <tr class="bg-dark text-white">
            <th >Joure</th>
            <th >08:00-09:00</th>
            <th >09:00-10:00</th>
            <th >10:00-11:00</th>
            <th >11:00-12:00</th>
            <th >14:00-15:00</th>
            <th >15:00-16:00</th>
            <th >16:00-17:00</th>
            <th >17:00-18:00</th>
        </tr>
    </thead>
    <tbody>
            @foreach ($empolois as $emploi)
                <tr>
                    <td class="bg-secondary text-white">{{$emploi->joure}}</td>
                    <th class={{$emploi->horaire =='08:00-09:00' ?'bg-info':''}}>{{$emploi->horaire =='08:00-09:00' ?$emploi->module->nom .'  '.'salle '.$emploi->salle->numSalle : ''}}</th>
                    <th class={{$emploi->horaire =='09:00-10:00' ?'bg-info':''}}>{{$emploi->horaire =='09:00-10:00' ?$emploi->module->nom .'  '.'salle '.$emploi->salle->numSalle : ''}}</th>
                    <th class={{$emploi->horaire =='10:00-11:00' ?'bg-info':''}}>{{$emploi->horaire =='10:00-11:00' ?$emploi->module->nom .'  '.'salle '.$emploi->salle->numSalle : ''}}</th>
                    <th class={{$emploi->horaire =='11:00-12:00' ?'bg-info':''}}>{{$emploi->horaire =='11:00-12:00' ?$emploi->module->nom .'  '.'salle '.$emploi->salle->numSalle : ''}}</th>
                    <th class={{$emploi->horaire =='14:00-15:00' ?'bg-info':''}}>{{$emploi->horaire =='14:00-15:00' ?$emploi->module->nom .'  '.'salle '.$emploi->salle->numSalle : ''}}</th>
                    <th class={{$emploi->horaire =='15:00-16:00' ?'bg-info':''}}>{{$emploi->horaire =='15:00-16:00' ?$emploi->module->nom .'  '.'salle '.$emploi->salle->numSalle : ''}}</th>
                    <th class={{$emploi->horaire =='16:00-17:00' ?'bg-info':''}}>{{$emploi->horaire =='16:00-17:00' ?$emploi->module->nom .'  '.'salle '.$emploi->salle->numSalle : ''}}</th>
                    <th class={{$emploi->horaire =='17:00-18:00' ?'bg-info':''}}>{{$emploi->horaire =='17:00-18:00' ?$emploi->module->nom .'  '.'salle '.$emploi->salle->numSalle : ''}}</th>
                </tr>
            @endforeach
    </tbody>
</table> --}}