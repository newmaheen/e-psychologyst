    <div class="col-sm-12">
        <div class="form-group">
            <label>Degree Name<span class="text-danger">*</span></label>
            <input name="degree" value="{{ old('degree',isset($education->degree)?$education->degree:null) }}"  class="form-control" type="text">
            @error('degree')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
            <label>Result<span class="text-danger">*</span></label>
            <input name="result" value="{{ old('result',isset($education->result)?$education->result:null) }}"  class="form-control" type="text">
            @error('result')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
            <label>Institute<span class="text-danger">*</span></label>
            <input name="institute" value="{{ old('institute',isset($education->institute)?$education->institute:null) }}"  class="form-control" type="text">
            @error('institute')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
            <label>Passing Year<span class="text-danger">*</span></label>
            <input name="passing_year" value="{{ old('passing_year',isset($education->passing_year)?$education->passing_year:null) }}"  class="form-control" type="text">
            @error('passing_year')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
            <label>Details<span class="text-danger"></span></label>
{{--            <input name="details" value="{{ old('passing_year',isset($education->passing_year)?$education->passing_year:null) }}"  class="form-control" type="text">--}}
            <textarea  class="form-control" name="details" id="details" cols="30" rows="5">{{ old('details',isset($education->details)?$education->details:null) }}</textarea>
            @error('details')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>



