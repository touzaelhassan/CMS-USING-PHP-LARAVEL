<option selected>اختر التصنيف المناسب</option>
@foreach ($roles as $role)
<option value="{{ $role->id }}">{{ $role->role }}</option>
@endforeach