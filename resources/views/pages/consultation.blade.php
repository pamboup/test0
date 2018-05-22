<form action="{{ route('consultation') }}" method="POST" enctype='multipart/form-data'>
  {{ csrf_field() }}
      <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

  <div class="wizard-header">
    <h3 class="wizard-title">
      Consultation
    </h3>
    <!--<h5>This information will let us know more about you.</h5> -->
  </div>

  <div class="wizard-navigation" style="display:none">
    <div class="row">
      <ul>
        <li><a href="#piecesJointes" data-toggle="tab">Ne veut pas qu'on l'enlève</a></li>
      </ul>
    </div>
  </div>

  <div class="tab-content"  style="padding-top:0px">
  <div class="tab-pane" id="piecesJointes">
  <div class="row">

  
    <div class="col-sm-3">
      <div class="form-group" style="margin-top:10px;">
          <input name="idenfant" list="idenfantlist" type="text" value="{{ old('idenfant') }}"
              class="form-control" id="suiviAutoComple" placeholder="Immatriculation">

          <datalist id="idenfantlist">
            <select id="idenfant">
              @foreach (\App\Enfants::all() as $enfant)
                <option value="{{ $enfant->id }}">
                    {{ $enfant->prenomenf.' '.$enfant->nomenf.' '.$enfant->surnomsenf }}
                </option>
              @endforeach
            </select>
          </datalist>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="checkbox">
        <label>
          <input type="checkbox" {{ old('infosAccueil') ? 'checked' : '' }} name="infosAccueil" value="oui">
          <b>Infos à l'accueil</b>
        </label>
      </div>  
    </div>
    <div class="col-sm-3">
      <div class="checkbox">
        <label>
          <input type="checkbox" {{ old('infosSuivis') ? 'checked' : '' }} name="infosSuivis" value="oui">
          <b>Infos sur les suivis</b>
        </label>
      </div>  
    </div>
    <div class="col-sm-3">
      <div class="checkbox">
        <label>
          <input type="checkbox" {{ old('infosPJ') ? 'checked' : '' }} name="infosPJ" value="oui">
          <b>Infos sur les pièces-jointes</b>
        </label>
      </div>  
    </div>

	<div class="wizard-footer">
		<div class="pull-center">
			<input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Next' />
			<input type='submit' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish' value='Consulter'  style="width:100%"/>
		</div>
		<div class="pull-left">
			<input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
		</div>
		<div class="clearfix"></div>
 
  @if(old('idenfant') != '')

    <?php 
      $idenfant = old('idenfant');
      $allAcc = \App\Accueil::where('enfants_id', $idenfant)->get()[0];
      
      $enfant = \App\Enfants::where('id', $idenfant)->get()[0];
      $accompagna = \App\Accompagnateurs::where('id', $allAcc->accompagnateurs_id)->get()[0];
      $situationfam = \App\Situationfamiliales::where('id', $allAcc->situationfamiliales_id)->get()[0];
      $typeorphelin = \App\Typeorphelins::where('id', $situationfam->typeorphelin_id)->get()[0]->nom;
      $identificationparent = \App\Identificationparents::where('id', $allAcc->identificationparents_id)->get()[0];
      $priseSoin = \App\Prisesoins::where('id', $allAcc->priseSoin_id)->get()[0];

      $nomPrenSurn =  $enfant->prenomenf." ".$enfant->nomenf." (".$enfant->surnomsenf.")";
    ?>
    <center><h3> <b><center>{{$nomPrenSurn}}</center></b></h3></center>
   
    @if(($infosAccueil = old('infosAccueil')) != '')

      <center><h3 style="background:#E9967A;">Les infos à l'accueil</h3></center>

      <h4>Au moment de l'accueil </h4>
      <div class="row">
        <div class="col-sm-4">
          <table class="table table-hover">
            <tr><th>Numéro d'immatriculation : </th><td>{{$allAcc->id}}</td></tr>
          </table>
        </div>
        <div class="col-sm-4">
          <table class="table table-hover">
            <tr><th>Date et heure : </th><td>{{(new DateTime($allAcc->dateAccueil))->format('d/m/Y') }} {{ $allAcc->heureAccueil }}</td></tr>
          </table>
        </div>
        <div class="col-sm-4">
          <table class="table table-hover">
            <tr><th>Accompagné(e) : </th><td>{{$allAcc->accompagnateurs_id == 0 ? 'Nom' : 'Oui'}}</td></tr>
          </table>
        </div>
      </div>

      <h4>Identité de l’enfant</h4>
      <div class="row">
        <div class="col-sm-3">
          <table class="table table-hover">
            <tr><th>Prénom : </th><td>{{$enfant->prenomenf}}</td></tr>
            <tr><th>Nom : </th><td>{{$enfant->nomenf}}</td></tr>
            <tr><th>Surnom : </th><td>{{$enfant->surnomsenf}}</td></tr>
            <tr><th>Sexe : </th><td>{{$enfant->sexeenf}}</td></tr>
            <tr><th>Age : </th><td>{{$enfant->ageenf}}</td></tr>
            <tr><th>Date naiss : </th><td>{{(new DateTime($enfant->datenaisEnf))->format('d/m/Y')}}</td></tr>
          </table>
        </div>
        <div class="col-sm-3">
          <table class="table table-hover">
            <tr><th>Lieu naiss : </th><td>{{$enfant->lieunaisEnf}}</td></tr>
            <tr><th>Ethnie : </th><td>{{$enfant->ethnieenf}}</td></tr>
            <tr><th>Profil : </th><td>{{$enfant->profilenf}}</td></tr>
            <tr><th>Rang fratrie : </th><td>{{$enfant->rangFratrieEnf}}</td></tr>
            <tr><th>InscriEta civ : </th><td>{{$enfant->inscriEtaCivenf}}</td></tr>
          </table>
        </div>
        <div class="col-sm-3">
          <table class="table table-hover">
            <tr><th>Adress actuel : </th><td>{{$enfant->adresActuenf}}</td></tr>
            <tr><th>Nationalité : </th><td>{{$enfant->nationaliteenf}}</td></tr>
            <tr><th>Pays origine : </th><td>{{$enfant->paysOrigenf}}</td></tr>
            <tr><th>Vil villag orig : </th><td>{{$enfant->vilVillagOrigenf}}</td></tr>   
          </table> 
        </div>
        <div class="col-sm-3">
          <table class="table table-hover">
            <tr><th>Scolarisé : </th><td>{{$enfant->scolariseenf}}</td></tr>
            <tr><th>Niveau scolari : </th><td>{{$enfant->niveauScolarenf}}</td></tr>
            <tr><th>Autr Enseignement : </th><td>{{$enfant->autrEnseignenf}}</td></tr>
            <tr><th>Autr Enseign Nbr An : </th><td>{{$enfant->autrEnseignNbrAnenf}}</td></tr>
          </table>
        </div>
      </div>

      
      <h4>Identité de l’accompagnateur</h4>
      <div class="row">
        <div class="col-sm-6">
          <table class="table table-hover">
            <tr><th>Prénom : </th><td>{{$accompagna->prenomacom}}</td></tr>
            <tr><th>Nom : </th><td>{{$accompagna->nomacom}}</td></tr>
            <tr><th>Age : </th><td>{{$accompagna->ageacom}}</td></tr>
          </table>
        </div>
        <div class="col-sm-6">
          <table class="table table-hover">
            <tr><th>Adresse : </th><td>{{$accompagna->adresseacom}}</td></tr>
            <tr><th>Téléphone : </th><td>{{$accompagna->telephoneacom}}</td></tr>
            <tr><th>Profession : </th><td>{{$accompagna->professionacom}}</td></tr>
          </table>
        </div>
      </div>
      

      <h4>Situation familiale</h4>
      <div class="row">
        <div class="col-sm-6">
          <table class="table table-hover">
            <tr><th>Père sivant : </th><td>{{$situationfam->pereVivant}}</td></tr>
            <tr><th>Mère sivante : </th><td>{{$situationfam->mereVivante}}</td></tr>
            <tr><th>Parents separés : </th><td>{{$situationfam->parenSepare}}</td></tr>
            <tr><th>Parents vivan ens : </th><td>{{$situationfam->parenVivanEns}}</td></tr>
            <tr><th>Type orphelin : </th><td>{{$typeorphelin}}</td></tr>
            <tr><th>Sit fami autre : </th><td>{{$situationfam->sitFamAutr}}</td></tr>
          </table>
        </div>
        <div class="col-sm-6">
          <table class="table table-hover">
            <tr><th>Vit avec père : </th><td>{{$situationfam->vitAvecPere}}</td></tr>
            <tr><th>Vit avec mère : </th><td>{{$situationfam->vitAvecMere}}</td></tr>
            <tr><th>Vit Avc grd paren : </th><td>{{$situationfam->vitAvecGrandParent}}</td></tr>
            <tr><th>Vit avec oncle : </th><td>{{$situationfam->vitAveOncle}}</td></tr>
            <tr><th>Vit avec tante : </th><td>{{$situationfam->vitAvecTante}}</td></tr>
            <tr><th>Vit avec autre : </th><td>{{$situationfam->vitAvecAutre}}</td></tr>
          </table>
        </div>
      </div>
      
      <h4>Identité des parents</h4>
      <div class="row">
        <div class="col-sm-6">
          <table class="table table-hover">
            <tr><th>Père : </th><td>{{$identificationparent->pere}}</td></tr>
            <tr><th>Occupation père : </th><td>{{$identificationparent->occupationPere}}</td></tr>
            <tr><th>Age père : </th><td>{{$identificationparent->agepere}}</td></tr>
            <tr><th>Adresse père : </th><td>{{$identificationparent->adressepere}}</td></tr>
            <tr><th>Téléphone père : </th><td>{{$identificationparent->telephonepere}}</td></tr>
          </table>
        </div>
        <div class="col-sm-6">
          <table class="table table-hover">
            <tr><th>Mère : </th><td>{{$identificationparent->mere}}</td></tr>
            <tr><th>Occupation mère : </th><td>{{$identificationparent->occupationmere}}</td></tr>
            <tr><th>Age mère : </th><td>{{$identificationparent->agemere}}</td></tr>
            <tr><th>Adresse mère : </th><td>{{$identificationparent->adressemere}}</td></tr>
            <tr><th>Téléphone mère : </th><td>{{$identificationparent->telephonemere}}</td></tr>
          </table>
        </div>
      </div>
      
      
      <h4>Type d’urgence ayant motivé la saisine</h4>
      <div class="row">
        <div class="col-sm-6">
          <table class="table table-hover">
            <tr><th>Type d'infrac : </th><td>{{$priseSoin->typUrgTypInfr}}</td></tr>
            <tr><th>Autres Type  : </th><td>{{$priseSoin->typUrgAutr}}</td></tr>
            <tr><th>besoinImmeAutr : </th><td>{{$priseSoin->besoinImmeAutr}}</td></tr>
            <tr><th>mesurPriseautr  : </th><td>{{$priseSoin->mesurPriseautr}}</td></tr>
            <tr><th>resumeSituationEnfant : </th><td>{{$priseSoin->resumeSituationEnfant}}</td></tr>
          </table>
        </div>
        <div class="col-sm-6">
          <table class="table table-hover">
            <tr><th>Types urgences : </th><td>
              @foreach( explode(',', $priseSoin->typeurgence_ids) as $urgI )
                @if($urgI == "")
                  @break
                @endif
                <?= $loop->index + 1 ?> - {{\App\Typeurgences::find($urgI)->nom}}<br>
              @endforeach
            </td></tr>
            <tr><th>Types besoins immédiats : </th><td>
              @foreach( explode(',', $priseSoin->typebesoinimmedia_ids) as $urgI )
                @if($urgI == "")
                  @break
                @endif
                <?= $loop->index + 1 ?> - {{\App\Typebesoinimmedias::find($urgI)->nom}}<br>
              @endforeach
            </td></tr>
            <tr><th>Types mesures prises : </th><td>
              @foreach( explode(',', $priseSoin->typemesuresprises_ids) as $urgI )
                @if($urgI == "")
                  @break
                @endif
                <?= $loop->index + 1 ?> - {{\App\Typemesuresprises::find($urgI)->nom}}<br>
              @endforeach
            </td></tr>
          </table>
        </div>
      </div>
      

      
           
    @endif
   
    @if( ($infosSuivis = old('infosSuivis')) != '')
      
      <?php $all = \App\Suivis::where('idenfant', $idenfant)->get(); $nbr = $all->count();?>
      @if($nbr == 0)
      <center><h3 style="color:crimson">Il n'y a pas encore de suivi pour cet enfant.</h3></center>
      @else
      <center><h3 style="background:#E9967A;">
        {{$nbr}}  {{ str_plural('suivi', $nbr)}} {{ str_plural('effectué', $nbr)}}</h3></center>            
      <table class="table table-hover" border>
        <thead>
          <tr >
            <th>Visite N° /<br>Personne responsable</th>
            <th>Date et heure /<br>Personne rencontrée</th>
            <th>Lieu /<br>Situation </th>
            <th>Région /<br>Evalu Person renc </th>
            <th>Commune /<br>Evalu Enf </th>
          </tr>
        </thead>
        <tbody>
        @foreach($all as $suiviI)
          <tr {{ $loop->index % 2 == 0 ? 'class=info' : '' }} >
            <td>{{$suiviI->suiviVisiteNum}}</td>
            <td>{{(new DateTime($suiviI->suiviDate))->format('d/m/Y') }} {{ $suiviI->suiviHeure }}</td>
            <td>{{$suiviI->suiviLieu}}</td>
            <td>{{$suiviI->suiviRegion}}</td>
            <td>{{$suiviI->suiviCommune}}</td>
          </tr>
          <tr {{ $loop->index % 2 == 0 ? 'class=info' : '' }} >
            <td>{{$suiviI->suiviPersonResp}}</td>
            <td>{{$suiviI->suiviPersonRenc}}</td>
            <td>{{$suiviI->suiviSituation }}</td>
            <td>{{$suiviI->suiviEvaluPersRenc}}</td>
            <td>{{$suiviI->suiviEvaluEnf}}</td>
          </tr>
        @endforeach
        </tbody>
      </table>
      @endif
    @endif

    
    @if(($infosPJ = old('infosPJ')) != '')
      <?php $all = \App\Piecesjointes::where('idenfant', $idenfant)->get(); $nbr = $all->count();?>
      @if($nbr == 0)
      <center><h3 style="color:crimson">Il n'y a pas encore de pièces-jointes pour cet enfant.</h3></center>
      @else
        <center><h3 style="background:#E9967A;">
          {{$nbr}}  {{ str_plural('Pièce', $nbr)}} {{ str_plural('jointe', $nbr)}}</h3></center>
      
        <center>
          @foreach($all as $piece)
            <p><b>Note : </b>{{  $piece->details }}</p>
            <img src="/edensenegal/storage/app/piecesJointes/{{ $piece->idenfant }}/{{ $piece->photo }}">
            @if( ! $loop->last)
              <hr>
            @endif
          @endforeach
        </center>
      @endif

    @endif


  @endif

  </div>
  
  </div>
  </div>
	</div>

  </form>

