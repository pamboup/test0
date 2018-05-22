<form action="{{ route('consultation') }}" method="POST" enctype='multipart/form-data'>
  {{ csrf_field() }}
      <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

  <div class="wizard-header">
    <h3 class="wizard-title">
      Statistique
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

  
      <div class="row">
        <div class="col-sm-3">
          <div class="form-group" style="margin-left:15px;">
              <input name="typeList" list="dataTypeList" type="text" value="{{ old('typeList') }}"
                  class="form-control" id="suiviAutoComple" placeholder="Choisir une liste">

              <datalist id="dataTypeList">
                <select id="typeList">
                  <option >Accueillis</option>
                  <option >Suivis</option>
                </select>
              </datalist>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="input-group">
            <span class="input-group-addon">
              <i class="fa fa-calendar" style="font-size:24px"></i>
            </span>
            <div class="form-group label-floating {{ $errors->has('dateDebut') ? 'has-error' : '' }} ">
              <label class="control-label">Date début</label>
              <input requiredpam name="dateDebut" type="date" value="{{ old('dateDebut') ?? date('Y-m-d') }}" class="form-control">
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="input-group">
            <span class="input-group-addon">
              <i class="fa fa-calendar" style="font-size:24px"></i>
            </span>
            <div class="form-group label-floating {{ $errors->has('dateFin') ? 'has-error' : '' }} ">
              <label class="control-label">Date fin</label>
              <input requiredpam name="dateFin" type="date" value="{{ old('dateFin') ?? date('Y-m-d') }}" class="form-control">
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group" style="margin-right:15px;">
              <input name="triList" list="dataTriList" type="text" value="{{ old('triList') }}"
                  class="form-control" id="suiviAutoComple" placeholder="Choisir un tri par">

              <datalist id="dataTriList">
                <select id="triList">
                  <option >Genre</option>
                  <option >Age</option>
                  <option >Date accueil</option>
                  <option >Nom</option>
                </select>
              </datalist>
          </div>
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
 

<?php     
    if(old('typeList') != ''){
    
        $typeList  = old('typeList');
        $triList = old('triList');

        /* $allAcc = \App\Accueil::
          where('dateAccueil', '>=',  old('dateDebut'))->
          where('dateAccueil', '<=',  old('dateFin'))->
          orderBy($order)->
          get();*/

        if($typeList == 'Suivis'){
          $dateHeure = "suiviDate as date, suiviHeure as heure";
          $date = 'suiviDate';
          $table = "suivis";
          $table2 = "de suivi";
          $idenfant = "idenfant";
        }
        else{
          $dateHeure = "dateAccueil as date, heureAccueil as heure";
          $date = 'dateAccueil';
          $table = "accueils";
          $table2 = "d'accueil";
          $idenfant = "enfants_id";
        }


        $allAcc = collect(DB::select('select e.id as eid, prenomenf, nomenf, surnomsenf, ageenf, sexeenf,
          a.id as aid, '. $dateHeure .'
          from '. $table .' a, enfants e 
          where '. $date .' BETWEEN ? and ? and '. $idenfant .' = e.id order by '. $date .' desc ', [old('dateDebut'), old('dateFin')]));
          
        $colorGenre = "";
        $colorAge = "";
        $colorNom = "";
        $colorDate = "";
        $toAffich = collect([]);

        echo '<b>Tatal</b> : '. $allAcc->count() . '&nbsp;&nbsp;&nbsp;&nbsp;';
        if($triList != ''){
          if(strpos(old('triList'), 'Genre') !== false ) {
            $toAffich = $allAcc->groupBy('sexeenf');
            $tatalMascu = $toAffich['Masculin']->count();
            $tatalFemin = $toAffich['Féminin']->count();

            echo '<b>Masculins</b> : '. $toAffich['Masculin']->count() . '&nbsp;&nbsp;&nbsp;&nbsp;';
            echo '<b>Féminins</b> : '. $toAffich['Féminin']->count();
        
          }elseif(strpos(old('triList'), 'Age') !== false ) {
            $enfant = $allAcc->filter(function($value, $key){
              return $value->ageenf <= 18;                         });
            $jeune = $allAcc->filter(function($value, $key){
              return $value->ageenf > 18 && $value->ageenf <= 25;  });
            $femme = $allAcc->filter(function($value, $key){
              return $value->ageenf > 25;                          });
            
            $toAffich->put('enfant', $enfant);
            $toAffich->put('jeune', $jeune);
            $toAffich->put('femme', $femme);
            
            echo '<b>Enfants</b> : '. $toAffich['enfant']->count() . '&nbsp;&nbsp;&nbsp;&nbsp;';
            echo '<b>Jeunes</b> : '. $toAffich['jeune']->count() . '&nbsp;&nbsp;&nbsp;&nbsp;';
            echo '<b>Femmes</b> : '. $toAffich['femme']->count();

          }elseif(strpos(old('triList'), 'Nom') !== false ) {
            $toAffich->put('nom', $allAcc->sortBy('nomenf'));
          }else
            $toAffich->put('date', $allAcc->toArray());
        }else
            $toAffich->put('date', $allAcc->toArray());
    
?>
              <center><h3 style="background:#E9967A;">
              </h3></center>            
            <table class="table table-hover" border>
              <thead>
                <tr>
                  <th>Numéro</th>
                  <th>Date et heure {{ $table2 }} </th>
                  <th>Prénom</th>
                  <th>Nom</th>
                  <th>Surnom</th>
                  <th>Genre</th>
                  <th>Age</th>
                </tr>
              </thead>
              <tbody>
              @foreach($toAffich->keys() as $key)
<?php           if(strpos($key, 'Féminin') !== false)   $colorGenre = "#F5A9BC";
                if(strpos($key, 'Masculin') !== false)  $colorGenre = "#A9BCF5";
                if(strpos($key, 'nom') !== false)  $colorNom = "#A9BCF5";
                if(strpos($key, 'enfant') !== false)  $colorAge = "#F7D358";
                if(strpos($key, 'jeune') !== false)  $colorAge = "#BCA9F5";
                if(strpos($key, 'femme') !== false)  $colorAge = "#F5A9BC";
                if(strpos($key, 'date') !== false)  $colorDate = "#A9BCF5";
?>              
                @foreach($toAffich[$key] as $one)
                  <tr>
                    <td>{{$one->aid}}</td>
                    <td bgcolor="{{ $colorDate }}">{{(new DateTime($one->date))->format('d/m/Y') }} {{ $one->heure }}</td>
                    <td>{{$one->prenomenf}}</td>
                    <td bgcolor="{{ $colorNom }}">{{$one->nomenf}}</td>
                    <td>{{$one->surnomsenf}}</td>
                    <td bgcolor="{{ $colorGenre }}">{{$one->sexeenf}}</td>
                    <td bgcolor="{{ $colorAge }}">{{$one->ageenf}}</td>
                  </tr>
                @endforeach
              @endforeach
              </tbody>
            </table>
<?php       
            //$masculin = $allAcc->where('sexeenf', 'Masculin');
            /* $feminin = $allAcc->filter(function($value, $key){
              return $value->sexeenf == "Féminin";                 });*/
      } 
          //  if(isset($byGenre['Masdculin']))


       /*   
            
        
        /*$enfant = \App\Enfants::where('id', $idenfant)->get()[0];
        $accompagna = \App\Accompagnateurs::where('id', $allAcc->accompagnateurs_id)->get()[0];
        $situationfam = \App\Situationfamiliales::where('id', $allAcc->situationfamiliales_id)->get()[0];
        $typeorphelin = \App\Typeorphelins::where('id', $situationfam->typeorphelin_id)->get()[0]->nom;
        $identificationparent = \App\Identificationparents::where('id', $allAcc->identificationparents_id)->get()[0];
        $priseSoin = \App\Prisesoins::where('id', $allAcc->priseSoin_id)->get()[0];

        $nomPrenSurn =  $enfant->prenomenf." ".$enfant->nomenf." (".$enfant->surnomsenf.")";*/
      ?>
  
  </div>
  
  </div>
  </div>
	</div>

  </form>