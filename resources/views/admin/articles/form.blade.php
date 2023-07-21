
        <!-- Start title ar input -->
        @php $inputtitle = "title"; @endphp
        <div class="form-group row">
            <label class="col-form-label col-lg-3">عنوان المقالة <span class="text-danger">*</span></label>
            <div class="col-lg-9">
                <div class="form-group-feedback form-group-feedback-right">
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-file-text3"></i></span>
                        </span>
                        <input type="text" name="{{$inputtitle}}" id="title" class="form-control" placeholder="عنوان المقالة" value="{{Request::old($inputtitle) ? Request::old($inputtitle) : $model->$inputtitle}}" required>
                        @error($inputtitle)
                        <div class="form-control-feedback text-danger-400">
                            <i class="icon-cancel-circle2"></i>
                        </div>
                        @enderror
                    </div>
                </div>
                @error($inputtitle)
                <span class="form-text text-danger-400">{{ $message }}</span>
                @enderror
            </div>
        </div><!-- End title ar input -->

        <!-- Start content ar input -->
        @php $content_ar = "content"; @endphp
        <div class="form-group row">
            <label class="col-form-label col-lg-3">وصف المقالة <span class="text-danger">*</span></label>
            <div class="col-lg-9">
                <textarea name="{{$content_ar}}" class="form-control summernote" rows="4" cols="4">{{Request::old($content_ar) ? Request::old($content_ar) : $model->$content_ar}}</textarea>
            </div>
        </div><!-- End content ar input -->

        @php $inputUserid = "user_id"; @endphp
        <div class="form-group row" dir="ltr">
            <div class="col-lg-9">
                <div class="form-group-feedback form-group-feedback-left">
                    <div class="input-group">
                        <input type="hidden" name="{{$inputUserid}}"  value="{{Auth()->user()->id}}" required>
                    </div>
                </div>
            </div>
        </div><!-- End user id input -->

        <!-- Start image input -->
        <div class="form-group row">
            <label class="col-form-label col-lg-3">إختار صورة</label>
            <div class="col-lg-9">
                <input type="file" name="image" class="form-control-uniform" data-fouc>
            </div>
        </div><!-- End image input -->



        <div class="form-group row">
            <label class="col-form-label col-lg-3">الأقسام <span class="text-danger">*</span></label>
            <div class="col-lg-9">
                @inject('level','App\Models\Category')

                {!! Form::select('category_id',$level->status(1)->pluck('name','id'),Request::old('category_id') ? Request::old('category_id') : $model->category_id,[
                    'placeholder' => 'من فضلك اختار',
                    'class'       => 'form-control select'
                ]) !!}
            </div>
        </div>


        <!-- Select2 select -->
        @php $input = "status"; @endphp
        <div class="form-group row">
            <label class="col-form-label col-lg-3">الحالة <span class="text-danger">*</span></label>
            <div class="col-lg-9">
                <select name="{{$input}}" data-placeholder="إختر حالة المقالة" class="form-control select" required data-fouc>

                    <option value="1" {{ isset($model) && $model->{$input} == '1' ? 'selected'  : '' }}>نشط</option>
                    <option value="0" {{ isset($model) && $model->{$input} == '0' ? 'selected'  : '' }}>معلق</option>
                </select>
            </div>
        </div> <!-- /select2 select -->
        <!-- Start icon input -->
        <div class="form-group row">

            <label class="col-form-label col-lg-3">العلامات  <span class="text-danger">*</span></label>
            <div class="col-lg-9">
                @inject('tag','App\Models\Tag')
                {!! Form::select('tag_id[]',$tag->pluck('name','id'),$model->tags->pluck('id')->all(),[
                    'id'          => 'tag_id',
                    'class'       => 'form-control select-multiple-tags',
                    'multiple'    => 'multiple',
                    'data-placeholder' => 'من فضلك اختار',

                ]) !!}
            </div>
        </div><!-- End icon input -->

        <!-- Start meta description input -->
        @php $meta_description = "meta_description"; @endphp
        <div class="form-group row">
            <label class="col-form-label col-lg-3"> وصف الميتا <span class="text-danger">*</span></label>
            <div class="col-lg-9">
                <textarea name="{{$meta_description}}" class="form-control" rows="4" cols="4">{{Request::old($meta_description) ? Request::old($meta_description) : $model->$meta_description}}</textarea>
            </div>
        </div><!-- End meta description input -->

        @php $inputKeywords = "keywords"; @endphp
        <!-- Inside form group with addon -->
        <div class="form-group row">
            <label class="col-form-label col-lg-3">الكلمات الدالة </label>
            <div class="col-lg-9">
                <div class="form-group-feedback form-group-feedback-right">
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-price-tags"></i></span>
                        </span>
                        <input type="text" name="{{$inputKeywords}}" class="form-control tokenfield" placeholder="كلمة، كلمة" value="{{Request::old($inputKeywords) ? Request::old($inputKeywords) : $model->$inputKeywords}}" data-fouc>
                    </div>
                </div>
            </div>
        </div> <!-- /inside form group with addon -->


    </div>
</div>

