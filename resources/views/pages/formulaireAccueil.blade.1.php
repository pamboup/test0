<form action="{{ route('accueilFormRoute') }}" method="POST">
	{{ csrf_field() }}
			<!-- You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

	<div class="wizard-header">
		<h3 class="wizard-title">
			Formulaire d’accueil
		</h3>
		<!--<h5>This information will let us know more about you.</h5> -->
	</div>

	<div class="wizard-navigation ">
	  <div class="row">
		<ul>
			<li><a href="#accueil" data-toggle="tab">Accueil</a></li>
			<li><a href="#identification" data-toggle="tab">Ident.</a></li>
			<li><a href="#situationFamiliale" data-toggle="tab">Sit. fam.</a></li>
			<li><a href="#tbm" data-toggle="tab">T.B.M.</a></li>
		</ul>
	  </div>
	</div>

	<div class="tab-content">
		<div class="tab-pane" id="accueil">
			<div class="row">
				<div class="col-sm-12">
					<center>
						<h4>Au moment de l'accuil de l'enfant.</h4>
					</center>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-calendar" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating {{ $errors->has('dateAccueil') ? 'has-error' : '' }} ">
							<label class="control-label">Date</label>
							<input requiredpam name="dateAccueil" type="date" value="{{ old('dateAccueil') ?? date('Y-m-d') }}" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons" style="font-size:24px">access_time</i>
						</span>
						<div class="form-group label-floating {{ $errors->has('heureAccueil') ? 'has-error' : '' }} ">
							<label class="control-label">Heure</label>
							<input name="heureAccueil" type="time" value="{{ old('heureAccueil') ?? date('H:i') }}" class="form-control">
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons" style="font-size:24px">format_list_numbered</i>
						</span>
						<div class="form-group label-floating {{ $errors->has('immatricul') ? 'has-error' : '' }} ">
							<label class="control-label">Numéro d’immatriculation </label>
							<input name="immatricul" type="number"
								value="{{ old('immatricul') ?? '1000' }}" class="form-control">
						</div>
					</div>


					<div class="form-group {{ $errors->has('accompagne') ? 'has-error' : '' }} " style="padding-left:15px; margin-top:15px">
						<span>
							<i class="fa fa-group" style="font-size:16px"></i>
						</span>
						<div class="radio" style="display:inline">
							<label >
								<input type="radio" requiredpam name="accompagne" checked
								{{ old('accompagne')=='oui' ? 'checked' : ''}} value="oui">
								Accompagné
							</label>
						</div>
						<br>
						<span>
							<i class="fa fa-user" style="font-size:24px"></i>
						</span>
						<div class="radio" style="display:inline">
							<label>
								<input type="radio" name="accompagne"
									{{ old('accompagne')=='non' ? 'checked' : ''}} value="non">
								Enfant seul
							</label>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="tab-pane" id="identification">
			<div class="row">
				<div class="col-sm-12">
					<center>
						<h4>Identification de l’accompagnateur</h4>
					</center>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-male" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating {{ $errors->has('prenomacom') ? 'has-error' : '' }} ">
							<label class="control-label">Prénom</label>
							<input requiredpam value="{{ old('prenomacom') }}" name="prenomacom" type="text" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-male" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating {{ $errors->has('nomacom') ? 'has-error' : '' }} ">
							<label class="control-label">Nom</label>
							<input requiredpam value="{{ old('nomacom') }}" name="nomacom" type="text" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-male" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating {{ $errors->has('ageacom') ? 'has-error' : '' }} ">
							<label class="control-label">Age</label>
							<input value="{{ old('ageacom') }}" name="ageacom" type="number" class="form-control">
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-address-card-o" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating {{ $errors->has('adresseacom') ? 'has-error' : '' }} ">
							<label class="control-label">Adresse</label>
							<input value="{{ old('adresseacom') }}" name="adresseacom" type="text" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-phone" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating {{ $errors->has('telephoneacom') ? 'has-error' : '' }} ">
							<label class="control-label">Téléphone</label>
							<input value="{{ old('telephoneacom') }}" name="telephoneacom" type="number" min="100000000000" max="999999999999" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-briefcase" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating {{ $errors->has('professionacom') ? 'has-error' : '' }} ">
							<label class="control-label">Profession</label>
							<input value="{{ old('professionacom') }}" name="professionacom" type="text" class="form-control">
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<br/>
				<div class="col-sm-12">
					<center>
						<h4>Identification de l’enfant</h4>
					</center>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-male" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating {{ $errors->has('prenomenf') ? 'has-error' : '' }} ">
							<label class="control-label">Prénom</label>
							<input requiredpam value="{{ old('prenomenf') }}" name="prenomenf" type="text" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-male" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating {{ $errors->has('nomenf') ? 'has-error' : '' }} ">
							<label class="control-label">Nom</label>
							<input requiredpam value="{{ old('nomenf') }}" name="nomenf" type="text" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-male" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating {{ $errors->has('surnomsenf') ? 'has-error' : '' }} ">
							<label class="control-label">Surnoms</label>
							<input value="{{ old('surnomsenf') }}" name="surnomsenf" type="text" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-male" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating {{ $errors->has('ageenf') ? 'has-error' : '' }} ">
							<label class="control-label">Age</label>
							<input value="{{ old('ageenf') }}" name="ageenf" type="number" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-venus-mars" style="font-size:24px"></i>Sexe
						</span>
						<div class="radio">
							<label>
								<input type="radio" name="sexeenf" checked value="Masculin"
								{{ old('sexeenf')=='Masculin' ? 'checked' : ''}} >
								<b>Masculin<i class="fa fa-mars" style="font-size:16px"></i></b>
							</label><br>
							<label style="margin-top:10px">
								<input type="radio" name="sexeenf" value="Féminin"
								{{ old('sexeenf')=='Féminin' ? 'checked' : ''}} >
								<b>Féminin <i class="fa fa-venus" style="font-size:16px"></i></b>
							</label>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-calendar" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating {{ $errors->has('datenaisEnf') ? 'has-error' : '' }} ">
							<label class="control-label">Date de naissance</label>
							<input name="datenaisEnf" type="date" value="{{ old('datenaisEnf') ?? date('Y-m-d')}}" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-address-book-o" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating {{ $errors->has('lieunaisEnf') ? 'has-error' : '' }} ">
							<label class="control-label">Lieu de naissance</label>
							<input value="{{ old('lieunaisEnf') }}" name="lieunaisEnf" type="text" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-address-book-o" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating {{ $errors->has('ethnieenf') ? 'has-error' : '' }} ">
							<label class="control-label">Ethnie</label>
							<input value="{{ old('ethnieenf') }}" name="ethnieenf" type="text" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-address-book-o" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating {{ $errors->has('profilenf') ? 'has-error' : '' }} ">
							<label class="control-label">Profil</label>
							<input value="{{ old('profilenf') }}" name="profilenf" type="text" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-street-view" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating {{ $errors->has('rangFratrieEnf') ? 'has-error' : '' }} ">
							<label class="control-label">Rang dans la fratrie</label>
							<input value="{{ old('rangFratrieEnf') }}" name="rangFratrieEnf" type="text" class="form-control">
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<br/>
				<div class="col-sm-6">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-file-text-o"></i>
							Inscription à l’état civil
						</span>
						<div class="radio">
							<label>
								<input type="radio" name="inscriEtaCivenf" value="oui"
								{{ old('inscriEtaCivenf')=='oui' ? 'checked' : ''}} >
								<b>Oui</b>
							</label><br>
							<label style="margin-top:10px">
								<input type="radio" name="inscriEtaCivenf" checked value="non"
								{{ old('inscriEtaCivenf')=='non' ? 'checked' : ''}} >
								<b>Non</b>
							</label>
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-address-card-o" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating {{ $errors->has('adresActuenf') ? 'has-error' : '' }} ">
							<label class="control-label">Adresse actuelle</label>
							<input value="{{ old('adresActuenf') }}" name="adresActuenf" type="text" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-address-card-o" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating {{ $errors->has('nationaliteenf') ? 'has-error' : '' }} ">
							<label class="control-label">Nationalité</label>
							<input value="{{ old('nationaliteenf') }}" name="nationaliteenf" type="text" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-address-card-o" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating {{ $errors->has('paysOrigenf') ? 'has-error' : '' }} ">
							<label class="control-label">Pays d’origine</label>
							<input value="{{ old('paysOrigenf') }}" name="paysOrigenf" type="text" class="form-control">
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-address-card-o" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating {{ $errors->has('vilVillagOrigenf') ? 'has-error' : '' }} ">
							<label class="control-label">Ville/village d’origine</label>
							<input value="{{ old('vilVillagOrigenf') }}" name="vilVillagOrigenf" type="text" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">school</i>
							Scolarisé
						</span>
						<div class="radio">
							<label>
								<input type="radio" name="scolariseenf" checked value="oui"
								{{ old('scolariseenf')=='oui' ? 'checked' : ''}} />
								<b>Oui</b>
							</label><br>
							<label style="margin-top:10px">
								<input type="radio" name="scolariseenf" value="non"
								{{ old('scolariseenf')=='non' ? 'checked' : ''}} />
								<b>Non</b>
							</label>
						</div>
					</div>
					<div class="input-group" style="margin-bottom:0px;">
						<span class="input-group-addon">
							<i class="material-icons">school</i>
						</span>
						<div class="form-group label-floating {{ $errors->has('niveauScolarenf') ? 'has-error' : '' }} ">
							<label class="control-label">Niveau de scolarisation</label>
							<input value="{{ old('niveauScolarenf') }}" name="niveauScolarenf" type="text" class="form-control">
						</div>
					</div>

					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">school</i>
							<abbr title="Islamique ou formation professionnelle">
								Autre enseignement
							</abbr>
						</span>
						<div class="radio" style="margin-bottom:0px;">
							<label>
								<input type="radio" name="autrEnseignenf" value="oui"
								{{ old('autrEnseignenf')=='oui' ? 'checked' : ''}} />
								<b>Oui</b>
							</label>
							<label>
								<input type="radio" name="autrEnseignenf" value="non" checked
								{{ old('autrEnseignenf')=='non' ? 'checked' : ''}} />
								<b>Non</b>
							</label>
						</div>
						<div class="form-group {{ $errors->has('autrEnseignNbrAnenf') ? 'has-error' : '' }} " style="margin-top:-4px; padding-left:10px">
							<input value="{{ old('autrEnseignNbrAnenf') }}" name="autrEnseignNbrAnenf" type="number" class="form-control" placeholder="Nombre d'année">
						</div>
					</div>
				</div>
				<div class="col-sm-6">
				</div>
				<div class="col-sm-6">
				</div>
				<div class="col-sm-6">
				</div>
				<div class="col-sm-6">
				</div>
			</div>
		</div>
		<div class="tab-pane" id="situationFamiliale">
			<div class="row">
				<div class="col-sm-12">
					<center>
						<h4>Situation familiale</h4>
					</center>
				</div>
			</div><center>
			<div class="row" style="width: 80%; border: 1px solid">
				<div class="col-sm-6">
					<div class="form-group {{ $errors->has('pereVivant') ? 'has-error' : '' }} text-left" style="padding-left:10px; margin-top:0px;">
						<div class="checkbox">
							<label>
								<input type="checkbox" {{ old('pereVivant') ? 'checked' : '' }} name="pereVivant" value="oui">
								<b>Père vivant</b>
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" {{ old('mereVivante') ? 'checked' : '' }} name="mereVivante" value="oui">
								<b>Mère vivante</b>
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" {{ old('parenSepare') ? 'checked' : '' }} name="parenSepare" value="oui">
								<b>Parents séparés</b>
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" {{ old('parenVivanEns') ? 'checked' : '' }} name="parenVivanEns" value="oui">
								<b>Parents vivants ensembles</b>
							</label>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group {{ $errors->has('typeorphelin_id') ? 'has-error' : '' }} text-left" style="margin-top:0px;">
						<div class="radio" style="margin-bottom:-2px;">
							<label>
								<input type="radio" name="typeorphelin_id" checked value="0"
								{{ old('typeorphelin_id')=='0' ? 'checked' : ''}} >
								N'est pas Orphelin
							</label><br>
							<label>
								<input type="radio" name="typeorphelin_id" value="1"
								{{ old('typeorphelin_id')=='1' ? 'checked' : ''}} >
								Orphelin de père
							</label><br>
							<label>
								<input type="radio" name="typeorphelin_id" value="2"
								{{ old('typeorphelin_id')=='2' ? 'checked' : ''}} >
								Orphelin de mère
							</label><br>
							<label>
								<input type="radio" name="typeorphelin_id" value="3"
								{{ old('typeorphelin_id')=='3' ? 'checked' : ''}} >
								Orphelin Total
							</label>
						</div>
					</div>
					<div class="form-group {{ $errors->has('sitFamAutr') ? 'has-error' : '' }} " style="margin-top:0px; padding-left:10px">
						<input value="{{ old('sitFamAutr') }}" name="sitFamAutr" type="text" class="form-control" placeholder="Autres (à préciser)">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<center>
						<h5>L’enfant vit avec </h5>
					</center>
				</div>
			</div><center>
			<div class="row" style="width: 80%; border: 1px solid">
				<div class="col-sm-6">
					<div class="form-group text-left" style="padding-left:10px; margin-top:0px;">
						<div class="checkbox">
							<label>
								<input type="checkbox" {{ old('vitAvecPere') ? 'checked' : '' }} name="vitAvecPere" value="oui">
								<b>Père</b>
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" {{ old('vitAvecMere') ? 'checked' : '' }} name="vitAvecMere" value="oui">
								<b>Mère</b>
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" {{ old('vitAvecGrandParent') ? 'checked' : '' }} name="vitAvecGrandParent" value="oui">
								<b>Grand-parent</b>
							</label>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group text-left" style="padding-left:10px; margin-top:0px;">
						<div class="checkbox">
							<label>
								<input type="checkbox" {{ old('vitAveOncle') ? 'checked' : '' }} name="vitAveOncle" value="oui">
								<b>Oncle</b>
							</label>
						</div>
						<div class="checkbox" style="margin-bottom:-2px;">
							<label>
								<input type="checkbox" {{ old('vitAvecTante') ? 'checked' : '' }} name="vitAvecTante" value="oui">
								<b>Tante</b>
							</label>
						</div>
					</div>
					<div class="form-group" style="margin-top:0px; padding-left:10px">
						<input value="{{ old('vitAvecAutre') }}" name="vitAvecAutre" type="text" class="form-control" placeholder="Autres (à préciser)">
					</div>
				</div>
			</div>


			<br><br>
			<div class="row">
				<div class="col-sm-12">
					<center>
						<h4>Identification des parents</h4>
					</center>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-male" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating {{ $errors->has('pere') ? 'has-error' : '' }} ">
							<label class="control-label">Prénom et nom du père</label>
							<input requiredpam value="{{ old('pere') }}" name="pere" type="text" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-briefcase" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating {{ $errors->has('occupationPere') ? 'has-error' : '' }} ">
							<label class="control-label">Occupation du père</label>
							<input requiredpam value="{{ old('occupationPere') }}" name="occupationPere" type="text" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-male" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating {{ $errors->has('agepere') ? 'has-error' : '' }} ">
							<label class="control-label">Age</label>
							<input value="{{ old('agepere') }}" name="agepere" type="number" class="form-control">
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-address-card-o" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating {{ $errors->has('adressepere') ? 'has-error' : '' }} ">
							<label class="control-label">Adresse</label>
							<input value="{{ old('adressepere') }}" name="adressepere" type="text" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-phone" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating {{ $errors->has('telephonepere') ? 'has-error' : '' }} ">
							<label class="control-label">Téléphone</label>
							<input value="{{ old('telephonepere') }}" name="telephonepere" type="number" min="100000000000" max="999999999999" class="form-control">
						</div>
					</div>
				</div>
			</div>

			<hr>
			<div class="row">
				<div class="col-sm-6">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-male" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating {{ $errors->has('mere') ? 'has-error' : '' }} ">
							<label class="control-label">Prénom et nom du mère</label>
							<input requiredpam value="{{ old('mere') }}" name="mere" type="text" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-briefcase" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating {{ $errors->has('occupationmere') ? 'has-error' : '' }} ">
							<label class="control-label">Occupation du mère</label>
							<input requiredpam value="{{ old('occupationmere') }}" name="occupationmere" type="text" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-male" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating {{ $errors->has('agemere') ? 'has-error' : '' }} ">
							<label class="control-label">Age</label>
							<input value="{{ old('agemere') }}" name="agemere" type="number" class="form-control">
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-address-card-o" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating {{ $errors->has('adressemere') ? 'has-error' : '' }} ">
							<label class="control-label">Adresse</label>
							<input value="{{ old('adressemere') }}" name="adressemere" type="text" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-phone" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating {{ $errors->has('telephonemere') ? 'has-error' : '' }} ">
							<label class="control-label">Téléphone</label>
							<input value="{{ old('telephonemere') }}" name="telephonemere" type="number" min="100000000000" max="999999999999"  class="form-control">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="tab-pane" id="tbm">
			<div class="row">
				<div class="col-sm-12">
					<center>
						<h4>Type d’urgence ayant motivé la saisine</h4>
					</center>
				</div>
			</div><center>
			<div class="row" style="width: 90%;">
				<div class="col-sm-6">
					<div class="form-group text-left" style="padding-left:10px; margin-top:0px;">
						<div class="checkbox">
							<label>
								<input type="checkbox" {{ old('typUrg1') ? 'checked' : '' }} name="typUrg1" value="1">
								<b>Victime d’exploitation et de pires formes de travail</b>
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" {{ old('typUrg2') ? 'checked' : '' }} name="typUrg2" value="2">
								<b>Victime d’abus sexuels</b>
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" {{ old('typUrg3') ? 'checked' : '' }} name="typUrg3" value="3">
								<b>Victime de maltraitance</b>
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" {{ old('typUrg4') ? 'checked' : '' }} name="typUrg4" value="4">
								<b>Enfant égaré</b>
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" {{ old('typUrg5') ? 'checked' : '' }} name="typUrg5" value="5">
								<b>Enfant en fugue</b>
							</label>
						</div>
					</div>
				</div>

				<div class="col-sm-6">
					<div class="form-group text-left" style="padding-left:10px; margin-top:0px; padding-bottom:0px">
						<div class="checkbox">
							<label>
								<input type="checkbox" {{ old('typUrg8') ? 'checked' : '' }} name="typUrg8" value="8">
								<b>Enfant en danger</b>
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" {{ old('typUrg7') ? 'checked' : '' }} name="typUrg7" value="7">
								<b>Enfant en situation de vulnérabilité</b>
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" {{ old('typUrg6') ? 'checked' : '' }} name="typUrg6" value="6">
								<b>En conflit avec la loi</b>
							</label>
						</div>
					</div>
					<div class="form-group {{ $errors->has('typUrgTypInfr') ? 'has-error' : '' }} " style="margin-top:-5px; padding-left:40px">
						<input type="text" class="form-control" value="{{ old('typUrgTypInfr') }}" name="typUrgTypInfr"
							placeholder="Type d’infraction">
					</div>

					<div class="form-group {{ $errors->has('typUrgAutr') ? 'has-error' : '' }} " style="margin-top:0px; padding-left:10px">
						<input type="text" class="form-control" value="{{ old('typUrgAutr') }}" name="typUrgAutr"
							placeholder="Autres (à préciser)">
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-sm-12">
					<center>
						<h4>Besoins immédiats</h4>
					</center>
				</div>
			</div><center>
			<div class="row" style="width: 90%;">
				<div class="col-sm-6">
					<div class="form-group text-left" style="padding-left:10px; margin-top:0px;">
						<div class="checkbox">
							<label>
								<input type="checkbox" {{ old('besoinImme1') ? 'checked' : '' }} name="besoinImme1" value="1">
								<b>Nourriture</b>
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" {{ old('besoinImme2') ? 'checked' : '' }} name="besoinImme2" value="2">
								<b>Premiers soins</b>
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" {{ old('besoinImme3') ? 'checked' : '' }} name="besoinImme3" value="3">
								<b>Médiation familiale</b>
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" {{ old('besoinImme4') ? 'checked' : '' }} name="besoinImme4" value="4">
								<b>Retour en famille</b>
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" {{ old('besoinImme5') ? 'checked' : '' }} name="besoinImme5" value="5">
								<b>Prise en charge psychosocial</b>
							</label>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group text-left" style="padding-left:10px; margin-top:0px;">
						<div class="checkbox">
							<label>
								<input type="checkbox" {{ old('besoinImme6') ? 'checked' : '' }} name="besoinImme6" value="6">
								<b>Prise en charge éducative</b>
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" {{ old('besoinImme7') ? 'checked' : '' }} name="besoinImme7" value="7">
								<b>Prise en charge médicale</b>
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" {{ old('besoinImme8') ? 'checked' : '' }} name="besoinImme8" value="8">
								<b>Appui financier</b>
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" {{ old('besoinImme9') ? 'checked' : '' }} name="besoinImme9" value="9">
								<b>Placement dans un centre</b>
							</label>
						</div>
						<div class="form-group {{ $errors->has('besoinImmeAutr') ? 'has-error' : '' }} " style="margin-top:0px;">
							<input type="text" class="form-control" value="{{ old('besoinImmeAutr') }}" name="besoinImmeAutr"
								placeholder="Autres (à préciser)">
						</div>
					</div>
				</div>
			</div>
			</center>

			<div class="row">
				<div class="col-sm-12">
					<center>
						<h4>Mesures prises</h4>
					</center>
				</div>
			</div><center>
			<div class="row" style="width: 90%;">
				<div class="col-sm-6">
					<div class="form-group text-left" style="padding-left:10px; margin-top:0px;">
						<div class="checkbox">
							<label>
								<input type="checkbox" {{ old('mesurPrise1') ? 'checked' : '' }} name="mesurPrise1" value="1">
								<b>Nourriture</b>
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" {{ old('mesurPrise2') ? 'checked' : '' }} name="mesurPrise2" value="2">
								<b>Premiers soins</b>
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" {{ old('mesurPrise3') ? 'checked' : '' }} name="mesurPrise3" value="3">
								<b>Médiation familiale</b>
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" {{ old('mesurPrise4') ? 'checked' : '' }} name="mesurPrise4" value="4">
								<b>Retour en famille</b>
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" {{ old('mesurPrise5') ? 'checked' : '' }} name="mesurPrise5" value="5">
								<b>Prise en charge psychosocial</b>
							</label>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group text-left" style="padding-left:10px; margin-top:0px;">
						<div class="checkbox">
							<label>
								<input type="checkbox" {{ old('mesurPrise6') ? 'checked' : '' }} name="mesurPrise6" value="6">
								<b>Prise en charge éducative</b>
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" {{ old('mesurPrise7') ? 'checked' : '' }} name="mesurPrise7" value="7">
								<b>Prise en charge médicale</b>
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" {{ old('mesurPrise8') ? 'checked' : '' }} name="mesurPrise8" value="8">
								<b>Appui financier</b>
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" {{ old('mesurPrise9') ? 'checked' : '' }} name="mesurPrise9" value="9">
								<b>Placement dans un centre</b>
							</label>
						</div>
						<div class="form-group {{ $errors->has('mesurPriseautr') ? 'has-error' : '' }} " style="margin-top:0px;">
							<input type="text" class="form-control" value="{{ old('mesurPriseautr') }}" name="mesurPriseautr"
								placeholder="Autres (à préciser)">
						</div>
					</div>
				</div>
			</div>
			</center>

			<div class="row">
				<div class="col-sm-12">
					<center>
						<h4>Résumé de la situation de l’enfant (précisant son état à l’accueil)</h4>
					</center>
				</div>
			</div>
			<div class="row" style="width: 90%;">
		        <div class="col-sm-12 text-left">
					<div class="form-group {{ $errors->has('resumeSituationEnfant') ? 'has-error' : '' }} " style="padding-left:10px; margin-top:0px;">
						<label for="resumeSituationEnfant"><b>Mettre le texte ci-dessous</b></label>
						<textarea id="resumeSituationEnfant" name="resumeSituationEnfant" class="form-control" rows="4">{{ old('resumeSituationEnfant') }}</textarea>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="wizard-footer">
		<div class="pull-right">
			<input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Next' />
			<input type='submit' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish' value='Finish' />
		</div>
		<div class="pull-left">
			<input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
		</div>
		<div class="clearfix"></div>
	</div>
</form>
