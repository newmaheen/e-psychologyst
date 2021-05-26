    <div class="col-sm-12">
        <div class="form-group">
            <label>Degree Name<span class="text-danger">*</span></label>
            <select class="form-control" name="day" id="day" required >
                <option value="" disabled>Select Day</option>
                <option @if(old('day'=='Sun Day',$schedule->day == 'Sun Day')) selected @endif value="Sun Day"> Sun Day</option>
                <option @if(old('day'=='Mon Day',$schedule->day == 'Mon Day')) selected @endif value="Mon Day"> Mon day</option>
                <option @if(old('day'=='Tues Day',$schedule->day == 'Tues Day')) selected @endif value="Tues Day"> Tuesday</option>
                <option @if(old('day'=='Wednesday',$schedule->day == 'Wednesday')) selected @endif value="Wednesday"> Wednesday</option>
                <option @if(old('day'=='Thursday',$schedule->day == 'Thursday')) selected @endif value="Thursday"> Thursday</option>
                <option @if(old('day'=='Friday',$schedule->day == 'Friday')) selected @endif value="Friday"> Friday</option>
                <option @if(old('day'=='Saturday',$schedule->day == 'Saturday')) selected @endif value="Saturday"> Saturday</option>
            </select>
{{--            <input name="day" value="{{ old('day',isset($schedule->day)?$schedule->day:null) }}"  class="form-control" type="text">--}}
            @error('day')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
            <label>Start Time<span class="text-danger">*</span></label>
            <input name="time_from" value="{{ old('time_from',isset($schedule->time_from)?$schedule->time_from:null) }}"  class="form-control" type="time">
            @error('time_from')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
            <label>End time<span class="text-danger">*</span></label>
            <input name="time_to" value="{{ old('time_to',isset($schedule->time_to)?$schedule->time_to:null) }}"  class="form-control" type="time">
            @error('time_to')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>



