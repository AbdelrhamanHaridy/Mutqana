
<div class="tab-content">

        <!-- Start name ar input -->
        @php $inputname = "name"; @endphp
        <div class="form-group row">
            <label class="col-form-label col-lg-3">القسم <span class="text-danger">*</span></label>
            <div class="col-lg-9">
                <div class="form-group-feedback form-group-feedback-right">
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-grid6"></i></span>
                        </span>
                        <input type="text" name="{{$inputname}}" id="{{$inputname}}" class="form-control maxlength-badge-position @error($inputname) border-danger-400 @enderror" placeholder="اسم القسم" value="{{Request::old($inputname) ? Request::old($inputname) : $model->$inputname}}" required>
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


        <!-- Start icon ar input -->
        @php $inputicon = "icon"; @endphp
        <div class="form-group row">
            <label class="col-form-label col-lg-3">الأيقونة<span class="text-danger">*</span></label>
            <div class="col-lg-9">
                <div class="form-group-feedback form-group-feedback-right">
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-thumbs-up2"></i></span>
                        </span>
                        <input type="text" name="{{$inputicon}}" id="{{$inputicon}}" class="form-control maxlength-badge-position @error($inputicon) border-danger-400 @enderror" maxlength="199" placeholder="أيقونة القسم" value="{{Request::old($inputicon) ? Request::old($inputicon) : $model->$inputicon}}" required>
                        @error($inputicon)
                        <div class="form-control-feedback text-danger-400">
                            <i class="icon-cancel-circle2"></i>
                        </div>
                        @enderror
                    </div>
                </div>
                @error($inputicon)
                <span class="form-text text-danger-400">{{ $message }}</span>
                @enderror
            </div>
        </div><!-- End icon ar input -->

        <!-- Start image input -->
        <div class="form-group row">
            <label class="col-form-label col-lg-3">إختار صورة</label>
            <div class="col-lg-9">
                <input type="file" name="image" class="form-control-uniform" data-fouc>
            </div>
        </div><!-- End image input -->

        @php $inputUserId = "user_id"; @endphp
        <div class="form-group row" dir="ltr">
            <div class="col-lg-9">
                <div class="form-group-feedback form-group-feedback-left">
                    <div class="input-group">
                        <input type="hidden" name="{{$inputUserId}}"  value="{{Auth()->user()->id}}" required>
                    </div>
                </div>
            </div>
        </div><!-- End name en input -->

        <!-- Select2 select -->
        @php $input = "status"; @endphp
        <div class="form-group row">
            <label class="col-form-label col-lg-3">الحالة <span class="text-danger">*</span></label>
            <div class="col-lg-9">
                <select name="{{$input}}" data-placeholder="إختر حالة القسم" class="form-control select" required data-fouc>
                    <option value="1" {{ isset($model) && $model->{$input} == '1' ? 'selected'  : '' }}>نشط</option>
                    <option value="0" {{ isset($model) && $model->{$input} == '0' ? 'selected'  : '' }}>معلق</option>
                </select>
            </div>
        </div> <!-- /select2 select -->


</div>

