<form action="{{ route('suivisFormRoute') }}" method="POST">
	{{ csrf_field() }}
			<!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

	<div class="wizard-header">
		<h3 class="wizard-title">
			Formulaire de suivi de l'enfant
		</h3>
		<!--<h5>This information will let us know more about you.</h5> -->
	</div>

	<div class="wizard-navigation" style="display:none">
	  <div class="row">
		<ul>
			<li><a href="#suivi" data-toggle="tab">Suivi</a></li>
		</ul>
	  </div>
	</div>

	<div class="tab-content"  style="padding-top:0px">
		<div class="tab-pane" id="suivi">
			<div class="row">
				<div class="col-sm-6">

					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons" style="font-size:24px">format_list_numbered</i>
						</span>
						<div class="form-group label-floating">
							<label class="control-label">Enfant</label>
							<input name="idenfant" list="idenfantlist" type="text" value="{{ old('idenfant') }}"
									class="form-control" id="suiviAutoComple">

							<datalist id="idenfantlist">
								<select id="idenfant">
									<option></option>
									@foreach (\App\Enfants::all() as $enfant)
								 		 <option value="{{ $enfant->id }}">
								 		 		{{ $enfant->id.' '.$enfant->prenomenf.' '.$enfant->nomenf.' '.$enfant->surnomsenf }}
								 		 </option>
								 	@endforeach
							 </select>
							</datalist>
						</div>


						<span class="input-group-addon">
							<i class="material-icons" style="font-size:24px">format_list_numbered</i>
						</span>
						<div class="form-group label-floating">
							<label class="control-label">Visite N°</label>
							<input id="suiviVisiteNum" name="suiviVisiteNum" type="number"  value="{{ old('suiviVisiteNum') }}" class="form-control">
						</div>
					</div>

					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-calendar" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating">
							<label class="control-label">Date de la visite</label>
							<input name="suiviDate" type="date"  value="{{ old('suiviDate') ?? date('Y-m-d') }}" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons" style="font-size:24px">access_time</i>
						</span>
						<div class="form-group label-floating">
							<label class="control-label">Heure de la visite</label>
							<input name="suiviHeure" type="time" value="{{ old('suiviHeure') ?? date('H:i') }}" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-address-card-o" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating">
							<label class="control-label">Lieu de la visite</label>
							<input name="suiviLieu" value="{{ old('suiviLieu') }}" type="text" class="form-control">
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-address-card-o" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating">
							<label class="control-label">Région de</label>
							<input name="suiviRegion" value="{{ old('suiviRegion') }}" type="text" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-address-card-o" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating">
							<label class="control-label">Commune de</label>
							<input name="suiviCommune" value="{{ old('suiviCommune') }}" type="text" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-male" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating">
							<label class="control-label">Personne responsable</label>
							<input requiredpam name="suiviPersonResp" value="{{ old('suiviPersonResp') }}" type="text" class="form-control">
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-male" style="font-size:24px"></i>
						</span>
						<div class="form-group label-floating">
							<label class="control-label">Personne rencontrée</label>
							<input requiredpam name="suiviPersonRenc" value="{{ old('suiviPersonRenc') }}" type="text" class="form-control">
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<center>
						<h4>Situation et évaluation</h4>
					</center>
				</div>
			</div>
			<div class="row" style="width: 90%;">
		        <div class="col-sm-12 text-left">
					<div class="form-group" style="padding-left:10px; margin-top:0px;">
						<label for="suiviSituation"><b>Situation actuelle de l’enfant</b></label>
						<textarea id="suiviSituation" name="suiviSituation" class="form-control"rows="4">{{ old('suiviSituation') }}</textarea>
					</div>
				</div>
		    <div class="col-sm-12 text-left">
					<div class="form-group" style="padding-left:10px; margin-top:0px;">
						<label for="suiviEvaluPersRenc"><b>Evaluation de la personne rencontrée</b></label>
						<textarea id="suiviEvaluPersRenc" name="suiviEvaluPersRenc" class="form-control"rows="4">{{ old('suiviEvaluPersRenc') }}</textarea>
					</div>
				</div>
		        <div class="col-sm-12 text-left">
					<div class="form-group" style="padding-left:10px; margin-top:0px;">
						<label for="suiviEvaluEnf"><b>Evaluation de l’enfant</b></label>
						<textarea id="suiviEvaluEnf" name="suiviEvaluEnf" class="form-control"rows="4">{{ old('suiviEvaluEnf') }}</textarea>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="wizard-footer">
		<div class="pull-right">
			<input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Next' />
			<input type='submit' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish' value='Valider' />
		</div>
		<div class="pull-left">
			<input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
		</div>
		<div class="clearfix"></div>
	</div>
</form>
