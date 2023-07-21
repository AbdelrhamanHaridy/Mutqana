<!-- Start tab content input -->
<div class="tab-content">


        <!-- Start title ar input -->
        @php $inputtitle = "title"; @endphp
        <div class="form-group row">
            <label class="col-form-label col-lg-3">عنوان حول الموقع <span class="text-danger">*</span></label>
            <div class="col-lg-9">
                <div class="form-group-feedback form-group-feedback-right">
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-info3"></i></span>
                        </span>
                        <input type="text" name="{{$inputtitle}}" id="{{$inputtitle}}" class="form-control" placeholder="اكتب العنوان" value="{{Request::old($inputtitle) ? Request::old($inputtitle) : $model->$inputtitle}}" required>
                    </div>
                </div>
            </div>
        </div><!-- End title ar input -->

        <!-- Start description ar input -->
        @php $description = "description"; @endphp
        <div class="form-group row">
            <label class="col-form-label col-lg-3">وصف حول الموقع <span class="text-danger">*</span></label>
            <div class="col-lg-9">
                <textarea name="{{$description}}" id="{{$description}}" class="form-control"  rows="4" cols="4">{!! Request::old($description) ? Request::old($description) : $model->$description !!}</textarea>
            </div>
        </div><!-- End description ar input -->


        <!-- Start image input -->
        <div class="form-group row">
            <label class="col-form-label col-lg-3">إختار صورة</label>
            <div class="col-lg-9">
                <input type="file" name="image" class="form-control-uniform" data-fouc>
            </div>
        </div><!-- End image input -->

        <!-- Start icon input -->
        <div class="form-group row">
            <label class="col-form-label col-lg-3">الأيقونات  <span class="text-danger">*</span></label>
            <div class="col-lg-9">
                <div class="form-group-feedback form-group-feedback-left">
                    @inject('icon','App\Models\Icon')
                   {{-- @if(empty($icon))--}}
                    {!! Form::select('icon_id[]',$icon->status(1)->pluck('title','id'), $model->icons->pluck('id')->all(),[
                        'class' => 'form-control select',
                        'value' => 'icon->id',
                        'multiple' => 'multiple',
                        'data-container-css-class' => 'bg-teal-400',
                    ]) !!}
                    {{--@else
                        <input type="text"  class="form-control" placeholder="لا توجد أيقونات " disabled>
                    @endif--}}
                </div>
            </div>
        </div><!-- End icon input -->


</div><!-- End tab content input -->

