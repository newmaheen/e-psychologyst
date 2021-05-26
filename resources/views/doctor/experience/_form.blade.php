    <div class="col-sm-12">
        <div class="form-group">
            <label>Position / Job Title<span class="text-danger">*</span></label>
            <input name="position" value="{{ old('position',isset($experience->position)?$experience->position:null) }}"  class="form-control" type="text">
            @error('position')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
            <label>Organization<span class="text-danger">*</span></label>
            <input name="company" value="{{ old('company',isset($experience->company)?$experience->company:null) }}"  class="form-control" type="text">
            @error('company')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
            <label>From<span class="text-danger">*</span></label>
            <input name="from" value="{{ old('from',isset($experience->from)?$experience->from:null) }}"  class="form-control" type="date">
            @error('from')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
            <label>To<span class="text-danger"></span></label>
            <input name="to" value="{{ old('to',isset($experience->to)?$experience->to:null) }}"  class="form-control" type="date">
            @error('to')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
            <label>Details<span class="text-danger"></span></label>
{{--            <input name="details" value="{{ old('to',isset($experience->to)?$experience->to:null) }}"  class="form-control" type="text">--}}
            <textarea  class="form-control" name="details" id="details" cols="30" rows="5">{{ old('details',isset($experience->details)?$experience->details:null) }}</textarea>
            @error('details')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>



