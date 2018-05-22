<form action="" method="">
			<!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

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
						<div class="form-group label-floating">
							<label class="control-label">Date</label>
							<input name="dateDeLaccueil" type="date" value="<?= date("Y-m-d")?>" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons" style="font-size:24px">access_time</i>
						</span>
						<div class="form-group label-floating">
							<label class="control-label">Heure</label>
							<input name="heureDeLaccueil" type="time" value="<?= date("H:i")?>" class="form-control">
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons" style="font-size:24px">format_list_numbered</i>
						</span>
						<div class="form-group label-floating">
							<label class="control-label">Numéro d’immatriculation </label>
							<input name="immatriculation" type="number" value="1000" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-user" style="font-size:24px"></i>
						</span>
						<div class="radio">
							<label>
								<input type="radio" name="accompagne" value="non">
								Enfant seul
							</label>
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-group" style="font-size:16px"></i>
						</span>
						<div class="radio">
							<label>
								<input type="radio" name="accompagne" value="oui">
								Accompagné 
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
						<div class="form-group label-floating">
							<label class="control-label">Prénom</label>
							<input requiredpam name="prenomacom" type="text" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-male" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating">
							<label class="control-label">Nom</label>
							<input requiredpam name="nomacom" type="text" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-male" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating">
							<label class="control-label">Age</label>
							<input name="ageacom" type="number" class="form-control">
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-address-card-o" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating">
							<label class="control-label">Adresse</label>
							<input name="adresseacom" type="text" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-phone" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating">
							<label class="control-label">Téléphone</label>
							<input name="telephoneacom" type="number" min="9" max="9" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-briefcase" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating">
							<label class="control-label">Profession</label>
							<input name="professionacom" type="text" class="form-control">
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
						<div class="form-group label-floating">
							<label class="control-label">Prénom</label>
							<input requiredpam name="prenomenf" type="text" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-male" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating">
							<label class="control-label">Nom</label>
							<input requiredpam name="nomenf" type="text" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-male" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating">
							<label class="control-label">Surnoms</label>
							<input name="surnomsenf" type="text" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-male" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating">
							<label class="control-label">Age</label>
							<input name="ageenf" type="number" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-venus-mars" style="font-size:24px"></i>Sexe
						</span>
						<div class="radio">
							<label>
								<input type="radio" name="sexeenf" value="Masculin">
								<b>Masculin<i class="fa fa-mars" style="font-size:16px"></i></b>      
							</label><br>
							<label style="margin-top:10px">
								<input type="radio" name="sexeenf" value="Féminin">
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
						<div class="form-group label-floating">
							<label class="control-label">Date de naissance</label>
							<input name="datenaissanceenf" type="date" value="<?= date("Y-m-d")?>" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-address-book-o" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating">
							<label class="control-label">Lieu de naissance</label>
							<input name="lieunaissanceenf" type="text" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-address-book-o" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating">
							<label class="control-label">Ethnie</label>
							<input name="ethnieenf" type="text" class="form-control">
						</div>
					</div> 
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-address-book-o" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating">
							<label class="control-label">Profil</label>
							<input name="profilenf" type="text" class="form-control">
						</div>
					</div> 
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-street-view" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating">
							<label class="control-label">Rang dans la fratrie</label>
							<input name="rangDansDaFratrieenf" type="text" class="form-control">
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
								<input type="radio" name="inscriptionAEtatCivilenf" value="oui">
								<b>Oui</b>      
							</label><br>
							<label style="margin-top:10px">
								<input type="radio" name="inscriptionAEtatCivilenf" value="non">
								<b>Non</b>       
							</label>
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-address-card-o" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating">
							<label class="control-label">Adresse actuelle</label>
							<input name="adresseActuelleenf" type="text" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-address-card-o" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating">
							<label class="control-label">Nationalité</label>
							<input name="nationaliteenf" type="text" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-address-card-o" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating">
							<label class="control-label">Pays d’origine</label>
							<input name="paysOrigineenf" type="text" class="form-control">
						</div>
					</div>
				</div>		
				<div class="col-sm-6">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-address-card-o" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating">
							<label class="control-label">Ville/village d’origine</label>
							<input name="villeVillageOrigineenf" type="text" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">school</i>
							Scolarisé
						</span>
						<div class="radio">
							<label>
								<input type="radio" name="scolariseenf" value="oui"/>
								<b>Oui</b>      
							</label><br>
							<label style="margin-top:10px">
								<input type="radio" name="scolariseenf" value="non"/>
								<b>Non</b>       
							</label>
						</div>
					</div>
					<div class="input-group" style="margin-bottom:0px;">
						<span class="input-group-addon">
							<i class="material-icons">school</i>
						</span>
						<div class="form-group label-floating">
							<label class="control-label">Niveau de scolarisation</label>
							<input name="niveauDeScolarisationenf" type="text" class="form-control">
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
								<input type="radio" name="autreEnseignementenf" value="oui"/>
								<b>Oui</b>      
							</label>
							<label>
								<input type="radio" name="autreEnseignementenf" value="non"/>
								<b>Non</b>       
							</label>
						</div>
						<div class="form-group" style="margin-top:-4px; padding-left:10px">
							<input name="autreEnseignNbrAnenf" type="number" class="form-control" placeholder="Nombre d'année">
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
					<div class="form-group text-left" style="padding-left:10px; margin-top:0px;">
						<div class="checkbox">
							<label>
								<input type="checkbox" name="pereVivant">
								<b>Père vivant</b> 
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="mereVivante">
								<b>Mère vivante</b> 
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="parentsSepares">
								<b>Parents séparés</b> 
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="parentsVivantsEnsembles">
								<b>Parents vivants ensembles</b> 
							</label>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group text-left" style="margin-top:0px;">
						<div class="radio" style="margin-bottom:-2px;">
							<label>
								<input type="radio" checked name="orphelin" value="0">
								N'est pas Orphelin     
							</label><br>
							<label>
								<input type="radio" name="orphelin" value="1">
								Orphelin de père      
							</label><br>
							<label>
								<input type="radio" name="orphelin" value="2">
								Orphelin de mère      
							</label><br>
							<label>
								<input type="radio" name="orphelin" value="3">
								Orphelin Total      
							</label>
						</div>
					</div>
					<div class="form-group" style="margin-top:0px; padding-left:10px">
						<input name="autreEnseignNbrAn" type="text" class="form-control" placeholder="Autres (à préciser)">
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
								<input type="checkbox" name="vitAvecPere">
								<b>Père</b> 
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="vitAvecMere">
								<b>Mère</b> 
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="vitAvecGrandParent">
								<b>Grand-parent</b> 
							</label>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group text-left" style="padding-left:10px; margin-top:0px;">
						<div class="checkbox">
							<label>
								<input type="checkbox" name="vitAveOncle">
								<b>Oncle</b> 
							</label>
						</div>
						<div class="checkbox" style="margin-bottom:-2px;">
							<label>
								<input type="checkbox" name="vitAvecTante">
								<b>Tante</b> 
							</label>
						</div>
					</div>
					<div class="form-group" style="margin-top:0px; padding-left:10px">
						<input name="vitAvecAutre" type="text" class="form-control" placeholder="Autres (à préciser)">
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
						<div class="form-group label-floating">
							<label class="control-label">Prénom et nom du père</label>
							<input requiredpam name="pere" type="text" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-briefcase" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating">
							<label class="control-label">Occupation du père</label>
							<input requiredpam name="occupationPere" type="text" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-male" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating">
							<label class="control-label">Age</label>
							<input name="agepere" type="number" class="form-control">
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-address-card-o" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating">
							<label class="control-label">Adresse</label>
							<input name="adressepere" type="text" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-phone" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating">
							<label class="control-label">Téléphone</label>
							<input name="telephonepere" type="number" min="9" max="9" class="form-control">
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
						<div class="form-group label-floating">
							<label class="control-label">Prénom et nom du mère</label>
							<input requiredpam name="mere" type="text" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-briefcase" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating">
							<label class="control-label">Occupation du mère</label>
							<input requiredpam name="occupationmere" type="text" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-male" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating">
							<label class="control-label">Age</label>
							<input name="agemere" type="number" class="form-control">
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-address-card-o" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating">
							<label class="control-label">Adresse</label>
							<input name="adressemere" type="text" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-phone" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating">
							<label class="control-label">Téléphone</label>
							<input name="telephonemere" type="number" min="9" max="9" class="form-control">
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
								<input type="checkbox" name="typeUrgence1" value="1">
								<b>Victime d’exploitation et de pires formes de travail</b> 
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="typeUrgence2" value="1">
								<b>Victime d’abus sexuels</b> 
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="typeUrgence3" value="1">
								<b>Victime de maltraitance</b> 
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="typeUrgence4" value="1">
								<b>Enfant égaré</b> 
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="typeUrgence5" value="1">
								<b>Enfant en fugue</b> 
							</label>
						</div>
					</div>
				</div>
						
				<div class="col-sm-6">
					<div class="form-group text-left" style="padding-left:10px; margin-top:0px; padding-bottom:0px">		
						<div class="checkbox">
							<label>
								<input type="checkbox" name="typeUrgence8" value="1">
								<b>Enfant en danger</b> 
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="typeUrgence9" value="1">
								<b>Enfant en situation de vulnérabilité</b> 
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="typeUrgence6" value="1">
								<b>En conflit avec la loi</b> 
							</label>
						</div>
					</div>
					<div class="form-group" style="margin-top:-5px; padding-left:40px">
						<input type="text" class="form-control" name="typeUrgence7"
							placeholder="Type d’infraction">
					</div>
					
					<div class="form-group" style="margin-top:0px; padding-left:10px">
						<input type="text" class="form-control" name="typeUrgence10" 
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
								<input type="checkbox" name="besoinsImmediats1" value="1">
								<b>Nourriture</b> 
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="besoinsImmediats2" value="1">
								<b>Premiers soins</b> 
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="besoinsImmediats3" value="1">
								<b>Médiation familiale</b> 
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="besoinsImmediats4" value="1">
								<b>Retour en famille</b> 
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="besoinsImmediats5" value="1">
								<b>Prise en charge psychosocial</b> 
							</label>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group text-left" style="padding-left:10px; margin-top:0px;">
						<div class="checkbox">
							<label>
								<input type="checkbox" name="besoinsImmediats6" value="1">
								<b>Prise en charge éducative</b> 
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="besoinsImmediats7" value="1">
								<b>Prise en charge médicale</b> 
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="besoinsImmediats8" value="1">
								<b>Appui financier</b> 
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="besoinsImmediats9" value="1">
								<b>Placement dans un centre</b> 
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="besoinsImmediats10" value="1">
								<b>Autres (à préciser)</b> 
							</label>
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
								<input type="checkbox" name="mesuresPrises1" value="1">
								<b>Nourriture</b> 
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="mesuresPrises2" value="1">
								<b>Premiers soins</b> 
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="mesuresPrises3" value="1">
								<b>Médiation familiale</b> 
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="mesuresPrises4" value="1">
								<b>Retour en famille</b> 
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="mesuresPrises5" value="1">
								<b>Prise en charge psychosocial</b> 
							</label>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group text-left" style="padding-left:10px; margin-top:0px;">
						<div class="checkbox">
							<label>
								<input type="checkbox" name="mesuresPrises6" value="1">
								<b>Prise en charge éducative</b> 
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="mesuresPrises7" value="1">
								<b>Prise en charge médicale</b> 
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="mesuresPrises8" value="1">
								<b>Appui financier</b> 
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="mesuresPrises9" value="1">
								<b>Placement dans un centre</b> 
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="mesuresPrises10" value="1">
								<b>Autres (à préciser)</b> 
							</label>
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
					<div class="form-group" style="padding-left:10px; margin-top:0px;">
						<label for="resumeSituationEnfant"><b>Mettre le texte ci-dessous</b></label>
						<textarea id="resumeSituationEnfant" name="resumeSituationEnfant" class="form-control"rows="4"></textarea>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="wizard-footer">
		<div class="pull-right">
			<input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Next' />
			<input type='button' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish' value='Finish' />
		</div>
		<div class="pull-left">
			<input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
		</div>
		<div class="clearfix"></div>
	</div>
</form>