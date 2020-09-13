@extends('layouts.app')

@section('content')
<h1 style="font-family: Monotype Corsiva">Liste des Agents</h1>

<hr>
    <ul>

            <table class="table" style="font-family: Monotype Corsiva;font-weight: bold;" >
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Matricule</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prenoms</th>
                            <th scope="col">sexe</th>
                            <th scope="col">date de Naissance</th>
                            <th scope="col">lieu de Naissance</th>
                            <th scope="col">Etat</th>
                            <th scope="col">Type Agent</th>
                            <th scope="col">Nationalite</th>
                            <th scope="col">Telephone</th>
                            <th scope="col">Date d'Embauche</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($agents as $agent)
                        <tr>
                            <th scope="row">{{ $agent->id}}</th>
                        <td><a href="{{route('agent.agents.show',$agent)}}">{{$agent->nomAgent}}</a></td>
                            <td>{{$agent->prenomAgent}}</td>
                            <td>{{$agent->sexeAgent}}</td>
                            <td>{{\Carbon\Carbon::parse($agent->dateNaisAgent)->format('d/m/Y')}}</td>
                            <td>{{$agent->lieuNaisAgent}}</td>
                            <td>{{$agent->etat->libEtat}}</td>
                            <td>{{$agent->typeAgent->libTypeAgent}}</td>
                            <td>{{$agent->nationAgent}}</td>
                            <td>{{$agent->tel}}</td>
                            <td>{{\Carbon\Carbon::parse($agent->created_at)->format('d/m/Y H:i:s')}}</td>
                        </tr>
                        @endforeach
                        </tbody>
              </table> 
    </ul>
    <hr>

@endsection