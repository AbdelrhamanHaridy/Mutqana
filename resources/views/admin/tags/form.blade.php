<!-- Start name ar input -->
@php $inputname = "name"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-3">العلامة <span class="text-danger">*</span></label>
    <div class="col-lg-9">
        <div class="form-group-feedback form-group-feedback-right">
            <div class="input-group">
                <input type="text" name="{{$inputname}}" id="{{$inputname}}" class="form-control maxlength-badge-position @error($inputname) border-danger-400 @enderror" maxlength="199" placeholder="العلامة بالعربية" value="{{Request::old($inputname) ? Request::old($inputname) : $model->$inputname}}" required>
                @error($inputname)
                <div class="form-control-feedback text-danger-400">
                    <i class="icon-cancel-circle2"></i>
                </div>
                @enderror
            </div>
        </div>
        @error($inputname)
        <span class="form-text text-danger-400">{{ $message }}</span>
        @enderror
    </div>
</div><!-- End name ar input -->

@php $inputUserId = "user_id"; @endphp
<div class="form-group row" dir="ltr">
    <div class="col-lg-9">
        <div class="form-group-feedback form-group-feedback-left">
            <div class="input-group">

                <input type="hidden" name="{{$inputUserId}}" id="{{$inputUserId}}" class="form-control maxlength-badge-position @error($inputUserId) border-danger-400 @enderror" maxlength="199" placeholder="Language name" value="{{Auth()->user()->id}}" required>
                @error($inputUserId)
                <div class="form-control-feedback text-danger-400">
                    <i class="icon-cancel-circle2"></i>
                </div>
                @enderror
            </div>
        </div>
        @error($inputUserId)
        <span class="form-text text-danger-400">{{ $message }}</span>
        @enderror
    </div>
</div><!-- End user id input -->

