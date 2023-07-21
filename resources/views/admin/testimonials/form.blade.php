        <!-- Start name input -->
        @php $inputName = "name"; @endphp
        <div class="form-group row">
            <label class="col-form-label col-lg-3">الاسم <span class="text-danger">*</span></label>
            <div class="col-lg-9">
                <div class="form-group-feedback form-group-feedback-right">
                    <div class="input-group">
                        <input type="text" name="{{$inputName}}" id="name" class="form-control maxlength-badge-position @error($inputName) border-danger-400 @enderror" placeholder="اكتب الاسم" value="{{Request::old($inputName) ? Request::old($inputName) : $model->$inputName}}" required>
                        @error($inputName)
                        <div class="form-control-feedback text-danger-400">
                            <i class="icon-cancel-circle2"></i>
                        </div>
                        @enderror
                    </div>
                </div>
                @error($inputName)
                <span class="form-text text-danger-400">{{ $message }}</span>
                @enderror
            </div>
        </div><!-- End name input -->

        <!-- Start content input -->
        @php $Inputcontent = "content"; @endphp
        <div class="form-group row">
            <label class="col-form-label col-lg-3">المحتوي<span class="text-danger">*</span></label>
            <div class="col-lg-9">
                <textarea name="{{$Inputcontent}}" class="form-control" rows="4" cols="4">{{Request::old($Inputcontent) ? Request::old($Inputcontent) : $model->$Inputcontent}}</textarea>
            </div>
        </div><!-- End content input -->

        @php $inputUserId = "user_id"; @endphp
        <div class="form-group row" dir="ltr">
            <div class="col-lg-9">
                <div class="form-group-feedback form-group-feedback-left">
                    <div class="input-group">
                        <input type="hidden" name="{{$inputUserId}}" id="{{$inputUserId}}" value="{{Auth()->user()->id}}" required>
                    </div>
                </div>
            </div>
        </div><!-- End name en input -->

        <!-- Start image input -->
        <div class="form-group row">
            <label class="col-form-label col-lg-3">إختار صورة</label>
            <div class="col-lg-9">
                <input type="file" name="image" class="form-control-uniform" data-fouc>
            </div>
        </div><!-- End image input -->

        <!-- Select2 select -->
        @php $input = "status"; @endphp
        <div class="form-group row">
            <label class="col-form-label col-lg-3">الحالة <span class="text-danger">*</span></label>
            <div class="col-lg-9">
                <select name="{{$input}}" data-placeholder="إختر حالة الشهادة" class="form-control select" required data-fouc>
                    <option value="1" {{ isset($model) && $model->{$input} == '1' ? 'selected'  : '' }}>نشط</option>
                    <option value="0" {{ isset($model) && $model->{$input} == '0' ? 'selected'  : '' }}>معلق</option>
                </select>
            </div>
        </div> <!-- /select2 select -->
    </div>


</div>
