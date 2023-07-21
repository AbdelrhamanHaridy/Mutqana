<!-- Start name input -->
@php $inputname = "name"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-3">الإسم <span class="text-danger">*</span></label>
    <div class="col-lg-9">
        <div class="form-group-feedback form-group-feedback-right">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-user"></i></span>
                </span>
                <input type="text" name="{{$inputname}}" id="name" class="form-control @error($inputname) border-danger-400 @enderror" placeholder="الإسم" value="{{Request::old($inputname) ? Request::old($inputname) : $model->$inputname}}">
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
</div><!-- End name input -->

<!-- Start username input -->
@php $inputusername = "username"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-3">إسم المستخدم <span class="text-danger">*</span></label>
    <div class="col-lg-9">
        <div class="form-group-feedback form-group-feedback-right">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text bg-pink border-pink text-white">@</span>
                </span>
                <input type="text" name="{{$inputusername}}" id="username" class="form-control @error($inputusername) border-danger-400 @enderror" placeholder="إسم المستخدم" value="{{Request::old($inputusername) ? Request::old($inputusername) : $model->$inputusername}}">
                @error($inputusername)
                <div class="form-control-feedback text-danger-400">
                    <i class="icon-cancel-circle2"></i>
                </div>
                @enderror
            </div>
        </div>
        @error($inputusername)
        <span class="form-text text-danger-400">{{ $message }}</span>
        @enderror
    </div>
</div><!-- End username input -->

<!-- Start job input -->
@php $inputjob = "job"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-3">الوظيفة <span class="text-danger">*</span></label>
    <div class="col-lg-9">
        <div class="form-group-feedback form-group-feedback-right">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text bg-pink border-pink text-white">J</span>
                </span>
                <input type="text" name="{{$inputjob}}" id="job" class="form-control @error($inputjob) border-danger-400 @enderror" placeholder="هل لديه وظيفة ؟" value="{{Request::old($inputjob) ? Request::old($inputjob) : $model->$inputjob}}">
                @error($inputjob)
                <div class="form-control-feedback text-danger-400">
                    <i class="icon-cancel-circle2"></i>
                </div>
                @enderror
            </div>
        </div>
        @error($inputjob)
        <span class="form-text text-danger-400">{{ $message }}</span>
        @enderror
    </div>
</div><!-- End job input -->

<!-- Start email field -->
@php $input_email = "email"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-3">البريد الإلكتروني <span class="text-danger">*</span></label>
    <div class="col-lg-9">
        <div class="form-group-feedback form-group-feedback-right">
            <div class="input-group">
                <span class="input-group-text bg-primary border-primary text-white">
                    $
                </span>
                <input type="email" name="{{$input_email}}" class="form-control @error($input_email) border-danger-400 @enderror" id="email" placeholder="أدخل البريد الإلكتروني" value="{{Request::old($input_email) ? Request::old($input_email) : $model->$input_email}}">
                @error($input_email)
                <div class="form-control-feedback text-danger-400">
                    <i class="icon-cancel-circle2"></i>
                </div>
                @enderror
            </div>
        </div>
        @error($input_email)
        <span class="form-text text-danger-400">{{ $message }}</span>
        @enderror
    </div>
</div><!-- /email field -->

<!-- Password field -->
@php $input_password = "password"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-3">كلمة المرور <span class="text-danger">*</span></label>
    <div class="col-lg-9">
        <div class="input-group group-indicator">
            <input type="password" name="password" id="password" class="form-control" placeholder="كلمة المرور أكثر من 5 أحرف" >
        </div>
    </div>
</div><!-- /password field -->


<!-- Repeat password -->
<div class="form-group row">
    <label class="col-form-label col-lg-3">إعادة إدخال كلمة المرور <span class="text-danger">*</span></label>
    <div class="col-lg-9">
        <div class="form-group-feedback form-group-feedback-right">
            <input type="password" name="password_confirmation" class="form-control" placeholder="إعادة إدخال كلمة المرور">
        </div>
    </div>
</div> <!-- /repeat password -->


<!-- Minimum characters -->
@php $input_location = "location"; @endphp
<div class="form-group row form-group-feedback form-group-feedback-right ">
    <label class="col-form-label col-lg-3">الموقع</label>
    <div class="col-lg-9">
        <div class="form-group-feedback form-group-feedback-right">
            <div class="input-group">
                <span class="input-group-text bg-primary border-primary text-white">
                  <i class="icon-pin-alt"></i>
                </span>
                <input type="text" name="{{$input_location}}" class="form-control @error($input_location) border-danger-400 @enderror" id="location" placeholder="أدخل موقع المستخدم" value="{{ Request::old($input_location) ? Request::old($input_location) : $model->$input_location  }}">
                @error($input_location)
                <div class="form-control-feedback text-danger-400">
                    <i class="icon-cancel-circle2"></i>
                </div>
                @enderror
            </div>
        </div>
        @error($input_location)
        <span class="form-text text-danger-400">{{ $message }}</span>
        @enderror
    </div>
</div> <!-- /minimum characters-->


<!-- Minimum number -->
@php $input_phone = "phone"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-3">رقم الهاتف<span class="text-danger">*</span></label>
    <div class="col-lg-9">
        <div class="form-group-feedback form-group-feedback-right">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text bg-success-400 text-white border-success-400"><i class="icon-mobile"></i></span>
                </span>
                <input type="text" name="{{$input_phone}}" class="form-control @error($input_phone) border-danger-400 @enderror" id="phone" maxlength="11" placeholder="أدخل الرقم لا تقل عن 10"
                       value="{{Request::old($input_phone) ? Request::old($input_phone) : $model->$input_phone}}"  {{Request::old('required') ? Request::old('required') : $model->required}}>
                @error($input_phone)
                <div class="form-control-feedback text-danger-400">
                    <i class="icon-cancel-circle2"></i>
                </div>
                @enderror
            </div>
        </div>
        @error($input_phone)
        <span class="form-text text-danger-400">{{ $message }}</span>
        @enderror
    </div>
</div> <!-- /minimum number -->

<!-- Start facebook input -->
@php $inputfacebook = "facebook"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-3">الفيسبوك</label>
    <div class="col-lg-9">
        <div class="form-group-feedback form-group-feedback-right">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text bg-pink border-pink text-white">@</span>
                </span>
                <input type="text" name="{{$inputfacebook}}" id="facebook" class="form-control @error($inputfacebook) border-danger-400 @enderror" placeholder="إسم مستخدم الفيسبوك" value="{{Request::old($inputfacebook) ? Request::old($inputfacebook) : $model->$inputfacebook}}">
                @error($inputfacebook)
                <div class="form-control-feedback text-danger-400">
                    <i class="icon-cancel-circle2"></i>
                </div>
                @enderror
            </div>
        </div>
        @error($inputfacebook)
        <span class="form-text text-danger-400">{{ $message }}</span>
        @enderror
    </div>
</div><!-- End facebook input -->

<!-- Start twitter input -->
@php $inputtwitter = "twitter"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-3">تويتر</label>
    <div class="col-lg-9">
        <div class="form-group-feedback form-group-feedback-right">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text bg-pink border-pink text-white">@</span>
                </span>
                <input type="text" name="{{$inputtwitter}}" id="twitter" class="form-control @error($inputtwitter) border-danger-400 @enderror" placeholder="إسم مستخدم تويتر" value="{{Request::old($inputtwitter) ? Request::old($inputtwitter) : $model->$inputtwitter}}">
                @error($inputtwitter)
                <div class="form-control-feedback text-danger-400">
                    <i class="icon-cancel-circle2"></i>
                </div>
                @enderror
            </div>
        </div>
        @error($inputtwitter)
        <span class="form-text text-danger-400">{{ $message }}</span>
        @enderror
    </div>
</div><!-- End twitter input -->

<!-- Start linkedin input -->
@php $inputlinkedin = "linkedin"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-3">لينكدان</label>
    <div class="col-lg-9">
        <div class="form-group-feedback form-group-feedback-right">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text bg-pink border-pink text-white">@</span>
                </span>
                <input type="text" name="{{$inputlinkedin}}" id="linkedin" class="form-control @error($inputlinkedin) border-danger-400 @enderror" placeholder="إسم مستخدم لينكدان" value="{{Request::old($inputlinkedin) ? Request::old($inputlinkedin) : $model->$inputlinkedin}}">
                @error($inputlinkedin)
                <div class="form-control-feedback text-danger-400">
                    <i class="icon-cancel-circle2"></i>
                </div>
                @enderror
            </div>
        </div>
        @error($inputlinkedin)
        <span class="form-text text-danger-400">{{ $message }}</span>
        @enderror
    </div>
</div><!-- End linkedin input -->

<!-- Start instagram input -->
@php $inputinstagram = "instagram"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-3">انستجرام</label>
    <div class="col-lg-9">
        <div class="form-group-feedback form-group-feedback-right">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text bg-pink border-pink text-white">@</span>
                </span>
                <input type="text" name="{{$inputinstagram}}" id="instagram" class="form-control @error($inputinstagram) border-danger-400 @enderror" placeholder="إسم مستخدم انستجرام" value="{{Request::old($inputinstagram) ? Request::old($inputinstagram) : $model->$inputinstagram}}">
                @error($inputinstagram)
                <div class="form-control-feedback text-danger-400">
                    <i class="icon-cancel-circle2"></i>
                </div>
                @enderror
            </div>
        </div>
        @error($inputinstagram)
        <span class="form-text text-danger-400">{{ $message }}</span>
        @enderror
    </div>
</div><!-- End instagram input -->

<!-- Start image input -->
<div class="form-group row">
    <label class="col-form-label col-lg-3">إختار صورة</label>
    <div class="col-lg-9">
        <input type="file" name="image" class="form-control-uniform" data-fouc>
    </div>
</div><!-- End image input -->


<!-- Select2 select -->
@php $input_is_admin = "is_admin"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-3">الوظيفة <span class="text-danger">*</span></label>
    <div class="col-lg-9">
        <select name="{{$input_is_admin}}" data-placeholder="إختر وظيفة المستخدم" class="form-control select" required data-fouc>
                <option value="user" {{ isset($model) && $model->{$input_is_admin} == 'user' ? 'selected'  : '' }}>مستخدم</option>
                <option value="admin" {{ isset($model) && $model->{$input_is_admin} == 'admin' ? 'selected'  : '' }}>مدير</option>
        </select>
    </div>
</div> <!-- /select2 select -->

<!-- Select2 select -->
@php $input_team = "team"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-3">الفريق<span class="text-danger">*</span></label>
    <div class="col-lg-9">
        <select name="{{$input_team}}" data-placeholder="إختر" class="form-control select" required data-fouc>
            <option value="1" {{ isset($model) && $model->{$input_team} == '1' ? 'selected'  : '' }}>مستخدم</option>
            <option value="0" {{ isset($model) && $model->{$input_team} == '0' ? 'selected'  : '' }}>الفريق</option>
        </select>
    </div>
</div> <!-- /select2 select -->

<!-- Select2 select -->
@php $input = "status"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-3">الحالة <span class="text-danger">*</span></label>
    <div class="col-lg-9">
        <select name="{{$input}}" data-placeholder="إختر حالة المستخدم" class="form-control select"  {{Request::old('required') ? Request::old('required') : $model->required}} data-fouc>
            <option value="1" {{ isset($model) && $model->{$input} == '1' ? 'selected'  : '' }}>نشط</option>
            <option value="0" {{ isset($model) && $model->{$input} == '0' ? 'selected'  : '' }}>معلق</option>
        </select>
    </div>
</div> <!-- /select2 select -->

