        <!-- Start title input -->
        @php $inputTitle = "title"; @endphp
        <div class="form-group row">
            <label class="col-form-label col-lg-3">عنوان الخدمه <span class="text-danger">*</span></label>
            <div class="col-lg-9">
                <div class="form-group-feedback form-group-feedback-right">
                    <div class="input-group">
                        <input type="text" name="{{$inputTitle}}" id="title" class="form-control maxlength-badge-position @error($inputTitle) border-danger-400 @enderror" placeholder="اكتب العنوان" value="{{Request::old($inputTitle) ? Request::old($inputTitle) : $model->$inputTitle}}" required>
                        @error($inputTitle)
                        <div class="form-control-feedback text-danger-400">
                            <i class="icon-cancel-circle2"></i>
                        </div>
                        @enderror
                    </div>
                </div>
                @error($inputTitle)
                <span class="form-text text-danger-400">{{ $message }}</span>
                @enderror
            </div>
        </div><!-- End title input -->

        <!-- Start content input -->
        @php $Inputcontent = "content"; @endphp
        <div class="form-group row">
            <label class="col-form-label col-lg-3">وصف الخدمة  <span class="text-danger">*</span></label>
            <div class="col-lg-9">
                <textarea name="{{$Inputcontent}}" class="form-control" rows="4" cols="4">{{Request::old($Inputcontent) ? Request::old($Inputcontent) : $model->$Inputcontent}}</textarea>
            </div>
        </div><!-- End content input -->

        <!-- Start icon  input -->
        @php $inputIcon = "icon"; @endphp
        <div class="form-group row">
            <label class="col-form-label col-lg-3"> الأيقون <span class="text-danger">*</span></label>
            <div class="col-lg-9">
                <div class="form-group-feedback form-group-feedback-right">
                    <div class="input-group">
                        <input type="text" name="{{$inputIcon}}" id="{{$inputIcon}}" class="form-control maxlength-badge-position @error($inputIcon) border-danger-400 @enderror" maxlength="199" placeholder="الأيقونة" value="{{Request::old($inputIcon) ? Request::old($inputIcon) : $model->$inputIcon}}" required>
                        @error($inputIcon)
                        <div class="form-control-feedback text-danger-400">
                            <i class="icon-cancel-circle2"></i>
                        </div>
                        @enderror
                    </div>
                </div>
                @error($inputIcon)
                <span class="form-text text-danger-400">{{ $message }}</span>
                @enderror
            </div>
        </div><!-- End icon input -->

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
                <select name="{{$input}}" data-placeholder="إختر حالة الخدمة" class="form-control select" required data-fouc>
                    <option value="1" {{ isset($model) && $model->{$input} == '1' ? 'selected'  : '' }}>نشط</option>
                    <option value="0" {{ isset($model) && $model->{$input} == '0' ? 'selected'  : '' }}>معلق</option>
                </select>
            </div>
        </div> <!-- /select2 select -->
    </div>


</div>
